# Merge Readiness Checklist V0.1

## AI-Assisted Solo-Owner Decision Gate

For work classified as eligible by the AI-Assisted Solo-Owner Governance Policy
V0.1, merge readiness requires a current Project Owner decision record in
addition to the checks below. The record must disclose that review was
AI-assisted and non-independent.

Separate specialist-human approvals are not mandatory internal merge gates for
eligible work. They remain mandatory when the work is non-eligible or a
future/external qualified-human gate is triggered. This change does not relax
the 0-failing, 0-pending rule or any safety boundary.

This checklist is documentation-stage governance guidance.

It does not modify GitHub Actions workflows, runtime code, npm dependencies, database schema, clinical workflows, AI behavior, API behavior, or OpenEMR core behavior.

## 1. Document Status

| Field | Value |
|---|---|
| Document | Merge Readiness Checklist V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage governance |
| Scope | Final pre-merge checklist |
| Runtime Status | No runtime implementation |
| Workflow Status | No GitHub Actions workflow modification |
| Clinical Status | Not clinical validation evidence |
| Compliance Status | Not regulatory compliance evidence |
| Security Status | Not cybersecurity certification evidence |

Golden rule:

The system must support clinicians. It must not replace clinicians.

---

## 2. Purpose

This checklist provides a short final review before merging any Pull Request in the OpenEMR IM Core repository.

It is intended to prevent unsafe or out-of-scope merges in a medical software governance project where scope control, privacy, traceability, and CI safety are required.

---

## 3. Golden Merge Rule

Do not merge unless GitHub checks show:

- 0 failing.
- 0 pending.

A PR is not merge-ready if any of the following exist:

- Failing check.
- Pending check.
- In-progress check.
- Unknown CI state.
- Unexplained cancelled check.
- Unclear PR scope.
- Unexpected file changes.

A mergeable PR is not enough.

A documentation-only PR is not exempt.

---

## 4. Scope Checklist

Before merge, confirm:

- [ ] PR has one clear purpose.
- [ ] PR title matches the change.
- [ ] Changed files match the declared scope.
- [ ] No unrelated changes are included.
- [ ] Documentation-only PRs remain documentation-only.
- [ ] Runtime/code changes are not mixed with documentation changes unless explicitly intended and reviewed.
- [ ] The PR does not create a large multi-scope package.

---

## 5. File Change Checklist

Before merge, confirm:

- [ ] Changed files were reviewed.
- [ ] Only intended files are changed.
- [ ] Temporary PR body files are not committed.
- [ ] No generated local artifacts are accidentally committed.
- [ ] No unrelated formatting changes are included.
- [ ] No hidden scope expansion is present.

Recommended command:

- gh pr diff --name-only

---

## 6. CI Checklist

Before merge, confirm:

- [ ] GitHub checks show 0 failing.
- [ ] GitHub checks show 0 pending.
- [ ] Skipped checks are understood.
- [ ] Cancelled checks are understood or not present.
- [ ] No unknown CI state remains.
- [ ] No stale check state remains.

Recommended commands:

- gh pr checks PR_NUMBER
- gh pr checks PR_NUMBER --watch

Do not merge while any check is pending, failing, in-progress, unknown, or unexplained cancelled.

---

## 7. Safety and Privacy Checklist

Before merge, confirm:

- [ ] No PHI.
- [ ] No real patient data.
- [ ] No patient identifiers.
- [ ] No secrets.
- [ ] No API keys.
- [ ] No passwords.
- [ ] No private keys.
- [ ] No database dumps.
- [ ] No sensitive logs.
- [ ] No production credentials.

---

## 8. Medical Governance Checklist

Before merge, confirm:

- [ ] No unsupported production-readiness claim.
- [ ] No unsupported clinical validation claim.
- [ ] No unsupported usability validation claim.
- [ ] No unsupported human factors validation claim.
- [ ] No unsupported regulatory compliance claim.
- [ ] No unsupported cybersecurity certification claim.
- [ ] No unsupported legal readiness claim.
- [ ] No unsupported commercial readiness claim.
- [ ] No autonomous diagnosis claim.
- [ ] No autonomous prescribing claim.
- [ ] No autonomous clinical decision support claim.

---

## 9. Runtime and Implementation Boundary Checklist

Before merge, confirm the PR does not unintentionally modify:

- GitHub Actions workflows.
- npm files.
- package-lock files.
- Composer files.
- PHP runtime files.
- JavaScript runtime files.
- SQL files.
- database migrations.
- FHIR/API implementation.
- AI implementation.
- frontend implementation.
- OpenEMR core behavior.
- production deployment files.

If any of these are intentionally modified, the PR must not be treated as documentation-only.

---

## 10. Documentation-Only PR Checklist

For documentation-only PRs, confirm:

- [ ] File path is correct.
- [ ] Document status is clear.
- [ ] Scope and non-scope are clear.
- [ ] No unsupported claims are included.
- [ ] No runtime behavior is implied.
- [ ] No clinical use is implied.
- [ ] No compliance evidence is implied.
- [ ] Unicode/Bidi warning is checked if GitHub displays one.

---

## 11. Merge Decision

Allowed decision:

- GO only when all required checks pass and scope is correct.
- NO-GO if any required item is unresolved.
- CONDITIONAL GO is not allowed for actual GitHub merge if checks are pending or failing.

Final merge rule:

- 0 failing.
- 0 pending.
- expected files only.
- no unsafe content.
- no unsupported claims.

---

## 12. Merge Command

Use squash merge after all merge criteria are met:

- gh pr merge PR_NUMBER --squash --delete-branch

Do not run placeholder values literally.

Replace PR_NUMBER with the real PR number.

---

## 13. Post-Merge Cleanup

After merge, run:

- git switch master
- git pull --ff-only origin master
- git status --short
- gh pr list --state open

Remove temporary PR body files only if no longer needed.

Verify expected merged file exists on master.

---

## 14. Stop Rules

Stop immediately if any of the following occur:

- More files changed than expected.
- Any pending check remains.
- Any failing check appears.
- Unknown CI state appears.
- Unexplained cancelled check appears.
- PHI or real patient data appears.
- Secrets or credentials appear.
- Runtime changes appear in a documentation-only PR.
- Unsupported production, clinical, regulatory, cybersecurity, legal, or commercial claim appears.
- Unicode/Bidi warning is shown and not reviewed.

---

## 15. Status and Limitations

This checklist is governance guidance only.

It does not prove:

- production readiness.
- clinical validation.
- usability validation.
- human factors validation.
- regulatory compliance.
- cybersecurity certification.
- legal readiness.
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
