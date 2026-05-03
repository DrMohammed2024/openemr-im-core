# CI Failure Handling and PR Merge Safety SOP V0.1 - OpenEMR IM Core

This SOP is documentation-stage governance guidance.

It does not modify GitHub Actions workflows, runtime code, npm dependencies, database schema, clinical workflows, AI behavior, API behavior, or OpenEMR core behavior.

## 1. Document Status

| Field | Value |
|---|---|
| Document | CI Failure Handling and PR Merge Safety SOP V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage governance |
| Scope | CI failure handling and PR merge safety guidance |
| Runtime Status | No runtime implementation |
| Workflow Status | No GitHub Actions workflow modification |
| Clinical Status | Not clinical validation evidence |
| Compliance Status | Not regulatory compliance evidence |
| Security Status | Not cybersecurity certification evidence |

Golden rule:

The system must support clinicians. It must not replace clinicians.

---

## 2. Purpose

This SOP defines how maintainers should handle pending, failing, cancelled, stale, or unclear CI checks before merging Pull Requests in OpenEMR IM Core.

The purpose is to preserve:

- One PR / one scope.
- Documentation-first governance.
- Safe merge discipline.
- Evidence-based troubleshooting.
- No merge before complete CI success.
- No unsupported medical, regulatory, security, or production-readiness claims.

---

## 3. Scope and Non-Scope

This SOP covers:

- Pull Request check review.
- Pending check handling.
- Failing check handling.
- Workflow, run, job, and step identification.
- NPM CI hang handling.
- PHPStan failure handling.
- E2E and Selenium failure handling.
- Safe rerun decisions.
- Issue creation criteria.
- Separate CI PR criteria.
- Merge and post-merge cleanup.

This SOP does not modify:

- .github/workflows files.
- package.json.
- package-lock.json.
- Composer files.
- PHP runtime files.
- JavaScript files.
- SQL files.
- Database migrations.
- API or FHIR implementation.
- AI implementation.
- Frontend implementation.
- OpenEMR core behavior.
- Clinical workflows.
- Production deployment files.

---

## 4. Golden Merge Rule

No PR may be merged unless checks show:

- 0 failing.
- 0 pending.

The following states are NO-GO for merge:

- Any failing check.
- Any pending check.
- Any in-progress check.
- Unknown status.
- Stale status.
- Unexplained cancelled check.
- Unreviewed skipped or cancelled workflow.

A PR being mergeable is not sufficient.

A documentation-only PR is not exempt.

A single-file Markdown PR is not exempt.

---

## 5. PR Scope Control Rule

Every PR must preserve one primary purpose.

For documentation-only PRs, do not add:

- npm changes.
- package-lock changes.
- workflow changes.
- runtime code.
- PHP changes.
- JavaScript changes.
- SQL.
- database migrations.
- FHIR or API implementation.
- AI implementation.
- frontend implementation.
- OpenEMR core-sensitive changes.

If a CI or workflow problem is proven, track it through a separate Issue or separate CI PR.

Do not hide CI fixes inside a documentation PR.

---

## 6. Initial PR Verification Commands

Use these commands before deciding whether a PR can merge.

Command examples:

- gh pr checks PR_NUMBER
- gh pr checks PR_NUMBER --watch
- gh pr view PR_NUMBER --json number,title,state,url,headRefName,baseRefName,mergeable,changedFiles,files
- git diff --name-only master...HEAD

Do not run placeholder values literally.

Replace PR_NUMBER, BRANCH_NAME, RUN_ID, and JOB_ID with real values before running commands.

Wrong example:

- gh run view RUN_ID

Correct example:

- gh run view 25287566716

---

## 7. How to Identify the Responsible Workflow, Run, Job, and Step

Start with PR checks:

- gh pr checks PR_NUMBER

List workflow runs for the branch:

- gh run list --branch BRANCH_NAME --limit 10

View the run:

- gh run view RUN_ID --json databaseId,status,conclusion,createdAt,updatedAt,url

View jobs:

- gh run view RUN_ID --json jobs --jq '.jobs[] | {name: .name, databaseId: .databaseId, status: .status, conclusion: .conclusion, startedAt: .startedAt, completedAt: .completedAt}'

View steps:

- gh run view RUN_ID --json jobs --jq '.jobs[] | .steps[] | {name: .name, status: .status, conclusion: .conclusion, startedAt: .startedAt, completedAt: .completedAt}'

If a specific job is suspected:

- gh run view RUN_ID --json jobs --jq '.jobs[] | select(.name | test("JS Unit|PHPStan|Selenium|E2E|Test All"; "i")) | .steps[] | {name: .name, status: .status, conclusion: .conclusion, startedAt: .startedAt, completedAt: .completedAt}'

---

## 8. Pending Check Decision Tree

Decision:

Pending check equals NO-GO for merge.

Decision tree:

- Pending check.
  - Is it still progressing?
    - Yes: wait and monitor.
    - No: identify workflow, run, job, and step.
      - If NPM CI is stuck: cancel and rerun.
      - If the same hang repeats: open an Issue.
      - If workflow defect is proven: open a separate CI PR.

Monitor:

- gh pr checks PR_NUMBER --watch

Manual recheck:

- gh pr checks PR_NUMBER

Do not merge while any check remains pending.

---

## 9. Failing Check Decision Tree

Decision:

Failing check equals NO-GO for merge.

Decision tree:

- Failing check.
  - Do not guess.
  - Get logs first.
  - Identify whether the failure is:
    - PR-related.
    - CI flake.
    - npm, cache, network, or registry related.
    - PHPStan baseline related.
    - E2E or runtime related.
    - workflow related.
  - Fix only within the correct PR scope.

Useful commands:

- gh pr checks PR_NUMBER
- gh run view RUN_ID --job JOB_ID --log-failed
- gh run view RUN_ID --job JOB_ID --log | tail -250

If the PR is documentation-only, do not add runtime code, npm changes, workflow changes, SQL, migrations, frontend, API, FHIR, or AI implementation to fix unrelated failures.

---

## 10. NPM CI Hang Handling

Typical signs:

- NPM CI remains in progress for a long time.
- Later steps such as Run Unit Tests remain pending.
- Other checks are complete.
- The PR does not modify npm files, package-lock, JavaScript source, workflow files, or runtime files.

Probable causes:

- GitHub Actions runner hang.
- npm cache issue.
- network delay.
- registry delay.

This is not by itself a reason to modify:

- package.json.
- package-lock.json.
- workflow files.
- documentation content.
- runtime code.

Safe handling sequence:

- gh run cancel RUN_ID
- sleep 30
- gh run view RUN_ID --json status,conclusion,updatedAt,url
- gh run rerun RUN_ID
- gh pr checks PR_NUMBER --watch

If the same NPM CI hang repeats across PRs, open an Issue.

If workflow defect is proven, open a separate CI PR.

---

## 11. PHPStan Failure Handling

Do not update PHPStan baseline blindly.

If PHPStan fails:

1. Extract logs.
2. Identify the exact error.
3. Determine whether the error was introduced by the PR.
4. If new code is wrong, fix the code with the smallest possible change.
5. If a valid fix removes an old baseline entry, update only the specific baseline file or entry.
6. Do not regenerate or replace the entire baseline without clear justification.

Useful commands:

- gh pr checks PR_NUMBER
- gh run view RUN_ID --job JOB_ID --log-failed
- gh run view RUN_ID --job JOB_ID --log | grep -i -A20 -B20 "phpstan|baseline|mixed|type|error"

Documentation-only PRs should not receive PHP runtime changes to fix unrelated PHPStan failures.

---

## 12. E2E / Selenium Failure Handling

E2E or Selenium failures may include:

- ElementClickInterceptedException.
- HTTP 500.
- modal intercept.
- iframe intercept.
- Selenium click failure.
- web server failure.

For documentation-only PRs:

Do not modify the documentation PR to fix unrelated runtime or E2E failures.

Correct handling:

1. Extract logs.
2. Identify whether failure is runtime-related.
3. Open or use a dedicated runtime fix PR.
4. Merge the fix PR only after its checks pass.
5. Rebase or update the documentation PR if needed.
6. Merge the documentation PR only after it reaches 0 failing and 0 pending.

---

## 13. Rerun vs Cancel + Rerun vs Empty Commit

### Rerun

Use rerun when the failure or hang appears transient.

Command:

- gh run rerun RUN_ID

### Cancel + rerun

Use cancel + rerun when a run is clearly stuck.

Commands:

- gh run cancel RUN_ID
- sleep 30
- gh run rerun RUN_ID
- gh pr checks PR_NUMBER --watch

### Empty commit

Use empty commit only as a last resort if:

- rerun does not work.
- checks remain stale.
- GitHub does not trigger checks.
- no file change is actually required.

Commands:

- git switch PR_BRANCH
- git status --short
- git commit --allow-empty -m "chore(ci): rerun checks for PR PR_NUMBER"
- git push origin PR_BRANCH
- gh pr checks PR_NUMBER --watch

Do not use empty commit as the first option.

---

## 14. When to Open an Issue

Open an Issue if:

- the same check hangs more than once.
- the same issue appears across multiple PRs.
- the problem is unrelated to PR files.
- the likely cause is CI workflow, runner, npm cache, or network behavior.

Suggested title:

- ci(js): JS Unit Test intermittently hangs during NPM CI

Suggested command:

- gh issue create --title "ci(js): JS Unit Test intermittently hangs during NPM CI" --body "A documentation-only PR experienced a prolonged pending JS Unit Test check stuck at NPM CI. The PR did not modify npm, package-lock, JS source, workflow, runtime, or test files. This issue tracks whether the cause is GitHub Actions runner behavior, npm/cache/network instability, or workflow-level behavior. No project runtime changes should be made unless separately justified."

---

## 15. When to Open a Separate CI PR

Open a separate CI PR if a workflow defect is proven, such as:

- missing timeout.
- cache misconfiguration.
- repeated workflow hang.
- npm ci command lacks safety options.
- setup-node or cache issue.
- stale job behavior.

Suggested PR title:

- ci(js): harden JS unit test workflow against npm ci hangs

Do not mix this with a documentation PR.

---

## 16. Placeholder Safety

Never run placeholders literally.

Wrong:

- gh run view RUN_ID

Correct:

- gh run view 25287566716

Wrong:

- gh pr merge PR_NUMBER --squash --delete-branch

Correct:

- gh pr merge 110 --squash --delete-branch

If a placeholder is used by mistake and the shell returns an error, stop and provide a concrete command using the real value.

---

## 17. Medical Software Governance Constraints

This project is medical software governance work.

Never include:

- PHI.
- real patient data.
- patient identifiers.
- secrets.
- API keys.
- passwords.
- private keys.
- database dumps.
- sensitive logs.
- unsupported production-readiness claims.
- unsupported clinical validation claims.
- unsupported regulatory compliance claims.
- unsupported cybersecurity certification claims.
- legal readiness claims.
- commercial readiness claims.

This SOP is governance guidance only.

It is not:

- production readiness evidence.
- compliance evidence.
- clinical validation evidence.
- cybersecurity certification evidence.
- medical-device readiness evidence.

---

## 18. Merge Procedure

Merge only if checks show:

- 0 failing.
- 0 pending.

Check PR status:

- gh pr checks PR_NUMBER

Merge command:

- gh pr merge PR_NUMBER --squash --delete-branch

If any check is pending, failing, in-progress, cancelled without explanation, stale, or unknown:

- NO-GO.

A mergeable PR is not enough.

A documentation-only PR is not enough.

The final gate is complete CI success.

---

## 19. Post-Merge Cleanup

After merge:

- git switch master
- git pull --ff-only origin master
- git status --short
- gh pr list --state open

If a local PR body file remains, remove only if no longer needed:

- rm -f pr_NAME_body.md
- git status --short

Verify expected file exists:

- test -f FILE_PATH && echo "file exists on master"

Example:

- test -f custom/im-core/docs/roadmap/phase-2-controlled-design-roadmap-v0.1.md && echo "roadmap file exists on master"

---

## 20. Project Case Lessons from PR #98, PR #100, PR #103, and PR #110

### PR #98

Operational lesson:

A documentation-only PR should not be modified to fix unrelated runtime failures.

### PR #100

Operational lesson:

Runtime CI or E2E failure should be fixed in a dedicated PR.

### PR #103

Operational lesson:

A pending JS styling check should block merge until it completes successfully.

### PR #110

Operational lesson:

A stuck NPM CI step in JS Unit Test can be handled by identifying the workflow, run, job, and step, cancelling the stuck run, rerunning it, and merging only after checks reach:

- 0 failing.
- 0 pending.

These examples are operational lessons.

They are not evidence of:

- production readiness.
- clinical validation.
- regulatory compliance.
- cybersecurity certification.
- commercial readiness.

---

## 21. Final Checklist

Before merge, confirm:

- [ ] PR scope is correct.
- [ ] Changed files are expected.
- [ ] No PHI.
- [ ] No real patient data.
- [ ] No secrets.
- [ ] No database dumps.
- [ ] No sensitive logs.
- [ ] No SQL unless explicitly authorized.
- [ ] No database migration unless explicitly authorized.
- [ ] No runtime implementation unless explicitly authorized.
- [ ] No FHIR/API implementation unless explicitly authorized.
- [ ] No AI implementation unless explicitly authorized.
- [ ] No OpenEMR core-sensitive change unless explicitly authorized.
- [ ] Checks show 0 failing.
- [ ] Checks show 0 pending.
- [ ] Cancelled checks are understood.
- [ ] Skipped checks are understood.
- [ ] No unsupported readiness claim.
- [ ] No unsupported validation claim.
- [ ] No unsupported compliance claim.
- [ ] No unsupported certification claim.
- [ ] No unsupported legal claim.
- [ ] No unsupported commercial claim.
- [ ] PR body temporary file is not committed.
- [ ] Merge uses squash merge.
- [ ] Post-merge cleanup is completed.

---

## 22. Status and Limitations

This SOP is documentation-stage governance guidance.

It does not modify:

- GitHub Actions workflows.
- runtime code.
- npm dependencies.
- database schema.
- clinical workflows.
- AI behavior.
- API behavior.
- OpenEMR core behavior.

This SOP does not prove:

- clinical safety.
- clinical validation.
- usability validation.
- human factors validation.
- regulatory compliance.
- cybersecurity certification.
- production readiness.
- pilot readiness.
- commercial readiness.

No runtime implementation.

No SQL.

No database migration.

No PHI.

No real patient data.

No AI implementation.

No FHIR/API implementation.

No frontend implementation.

No OpenEMR core-sensitive change.
