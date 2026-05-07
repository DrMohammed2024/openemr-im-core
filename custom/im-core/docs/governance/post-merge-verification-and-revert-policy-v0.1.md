# Post-Merge Verification and Revert Policy V0.1

## Document Status

| Field | Value |
|---|---|
| Document type | Governance policy |
| Version | V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage governance |
| Scope | Documentation-only |
| Runtime status | Pre-runtime |
| Clinical-use status | Not authorized |
| PHI status | No PHI |
| Real patient data | Not permitted |
| AI implementation | Not permitted |

This document defines the post-merge verification and revert discipline for OpenEMR IM Core.

It is documentation-only.

It does not implement runtime behavior, artificial intelligence, clinical decision support, API/FHIR integration, SQL/database changes, OpenEMR core behavior changes, clinical-use authorization, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.

---

## 1. Purpose

The purpose of this policy is to define what must happen after a pull request is merged.

Post-merge verification is required because a PR can pass pre-merge checks and still create a governance, documentation, traceability, claim-control, or safety-boundary problem after merge.

This policy defines:

- post-merge verification expectations
- when re-measurement is required
- when fix-forward is acceptable
- when immediate revert is required
- how to avoid unsafe forward-fixing
- how to preserve a clean audit trail

---

## 2. Relationship to Governance System

This policy supports:

- VFinal governance execution system
- VFinal Scientific Strengthening Addendum
- Controlled Vocabulary and Project Glossary
- Documentation Index and Review Cadence
- PR audit trail discipline
- claim-control governance
- no-PHI repository discipline

This policy does not replace those documents.

If any interpretation conflicts with a stricter safety boundary, the stricter safety boundary applies.

---

## 3. Non-Negotiable Boundaries

The project remains:

- documentation-first
- governance-first
- human-supervised
- pre-runtime
- pre-implementation
- pre-clinical-use
- no PHI
- no real patient data
- no secrets
- no credentials
- no production logs
- no database dumps
- no autonomous diagnosis
- no autonomous treatment
- no autonomous prescribing
- no autonomous triage
- no AI implementation
- no prompt execution
- no model integration
- no API/FHIR implementation
- no SQL/database migration
- no OpenEMR core behavior change
- no clinical-use authorization
- no production-readiness claim
- no clinical-validation claim
- no regulatory-compliance claim
- no cybersecurity-certification claim

A merged PR that violates these boundaries must be treated as a safety-gate breach.

---

## 4. Post-Merge Verification Rule

Every merged PR must be followed by post-merge verification.

At minimum, the project owner or reviewer should verify:

- correct branch is `master`
- `master` is up to date with `origin/master`
- working tree is clean
- no unexpected open PRs exist
- merged PR is marked `MERGED`
- expected files exist
- changed files match the intended scope
- key expected text or artifacts are present
- no unintended runtime, AI, API/FHIR, SQL, database, dependency, workflow, or OpenEMR core files changed
- no PHI, real patient data, secrets, credentials, production logs, or database dumps were added
- no unsupported clinical-use, production-readiness, validation, regulatory, or cybersecurity certification claims were introduced

---

## 5. Standard Post-Merge Verification Commands

The standard post-merge verification sequence should include:

    git switch master
    git pull --ff-only origin master
    git status --short
    gh pr list --state open
    gh pr view <PR_NUMBER> --json number,title,state,mergedAt,url,files

For added documents, verify:

    test -f <FILE_PATH> && echo "FOUND: <FILE_LABEL>"
    grep -n "<EXPECTED_TITLE_OR_KEY_PHRASE>" <FILE_PATH>

For index or coverage-sensitive changes, re-measure coverage using the approved repository script or equivalent documented command.

---

## 6. Re-Measurement Rule

Re-measurement is required after any PR that affects:

- Documentation Index
- document coverage
- source-of-truth visibility
- governance structure
- clinical safety documentation
- regulatory boundary documentation
- validation planning documentation
- release readiness documentation
- privacy/security documentation
- clinical intelligence documentation
- roadmap sequencing
- project-state tracking

Re-measurement may include:

- Documentation Index coverage measurement
- changed-file review
- grep-based claim-control review
- file existence verification
- no-PHI/no-secret review
- open PR review
- branch state review

---

## 7. Fix-Forward Rule

Fix-forward means creating a new corrective PR after a problem is discovered.

Fix-forward may be acceptable only for low-risk documentation defects.

Examples:

- typo
- Markdown formatting issue
- broken internal link
- missing cross-reference
- minor index wording correction
- missing verification note
- harmless ordering issue
- clarification that does not affect claims or safety boundaries

Fix-forward still requires:

- risk assessment
- source-of-truth check
- claim-control check
- boundary check
- narrow PR scope
- post-merge verification

Fix-forward must not be used to normalize or hide a safety-gate breach.

---

## 8. Immediate Revert Rule

Immediate revert is required if a merged PR introduces or authorizes any of the following:

- PHI
- real patient data
- secrets
- credentials
- production logs
- database dumps
- runtime code
- runtime workflow automation
- AI implementation
- prompt execution
- model integration
- API/FHIR implementation
- SQL/database migration
- OpenEMR core behavior change
- autonomous diagnosis
- autonomous treatment recommendation
- autonomous prescribing
- autonomous triage
- clinical-use authorization
- production-readiness claim
- clinical-validation claim
- regulatory-compliance claim
- cybersecurity-certification claim
- unsupported claim of implementation
- unsupported claim of approval
- unsupported claim of certification
- unsupported claim of readiness

These issues are safety-gate breaches.

They must not be treated as ordinary documentation defects.

---

## 9. No Forward-Fixing for Broken Safety Gates

If a safety gate is broken after merge, the default action is revert first.

Do not forward-fix a merged safety-gate breach unless the project owner explicitly documents why revert would create greater risk.

The preferred sequence is:

1. Identify breach.
2. Stop further changes.
3. Revert the merged PR.
4. Verify repository returns to safe state.
5. Document the issue.
6. Reassess scope.
7. Create a corrected PR only after root-cause review.

---

## 10. Revert Procedure

When revert is required, use a narrow revert PR or direct revert workflow appropriate to repository permissions.

A revert should preserve traceability.

Recommended command pattern:

    git switch master
    git pull --ff-only origin master
    git switch -c revert/<short-description>
    git revert <MERGE_OR_SQUASH_COMMIT_HASH>
    git status --short
    git diff --check
    git push -u origin revert/<short-description>

The revert PR body should state:

- original PR number
- reason for revert
- safety boundary breached
- files reverted
- verification performed
- whether any follow-up PR is allowed
- whether root-cause review is required

---

## 11. Revert Verification

After revert, verify:

- repository is on `master`
- branch is up to date
- reverted file changes are removed
- no PHI or sensitive data remains
- no runtime or implementation artifacts remain
- no unsupported claims remain
- open PR list is understood
- documentation coverage or project state is re-measured if relevant

---

## 12. Examples of Revert-Required Findings

Revert is required if post-merge review finds:

- a file containing PHI
- a file containing credentials or secrets
- a database dump
- production logs
- SQL migration added without approval
- API/FHIR code added without approval
- AI prompt execution added without approval
- model integration added without approval
- OpenEMR core behavior changed without authorization
- documentation claims production readiness
- documentation claims clinical validation
- documentation claims regulatory compliance
- documentation claims cybersecurity certification
- documentation claims autonomous clinical decision-making
- documentation authorizes clinical use

---

## 13. Examples of Fix-Forward-Eligible Findings

Fix-forward may be considered if post-merge review finds:

- typo in a document title
- minor Markdown table formatting issue
- missing period
- harmless duplicated word
- broken internal relative link
- index entry owner wording needs clarification
- phrase needs safer wording but does not currently imply implementation, clinical use, regulatory compliance, validation, production readiness, or cybersecurity certification

The project owner must still confirm that the issue is low-risk.

---

## 14. Claim-Control Review After Merge

Post-merge review should check for high-risk wording such as:

- implemented
- active
- live
- operational
- deployed
- validated
- clinically validated
- approved
- certified
- compliant
- production-ready
- deployment-ready
- clinical-use ready
- PHI-ready
- real-patient-data ready
- AI-enabled
- AI-powered
- CDS-enabled
- FHIR-ready
- API-ready
- database-ready
- autonomous
- diagnostic
- treatment-recommending
- prescribing
- triage-capable
- safe for patient care
- secure by certification

If such wording exists, it must be interpreted using the Controlled Vocabulary and Project Glossary.

If evidence is absent, wording must be weakened, removed, or reverted depending on risk.

---

## 15. Documentation Coverage Review After Merge

If a new documentation file is added, the project should verify whether it is:

- directly indexed
- covered by a directory-level index entry
- intentionally deferred
- missing from index coverage

A new unindexed file is not automatically a safety breach.

However, unexplained documentation orphaning should be corrected by a separate narrow index PR if appropriate.

---

## 16. Open PR Review After Merge

After every merge, run:

    gh pr list --state open

If open PRs exist, confirm:

- they are expected
- they do not conflict with the merged change
- they do not depend on stale assumptions
- they do not require rebase or reassessment
- their GO decision remains current

If repository state changed, old GO decisions expire.

---

## 17. GO Expiration After Merge

Any GO decision issued before a merge expires after the merge.

After merge, the project must re-check:

- branch
- `master`
- working tree status
- open PR list
- changed files
- evidence
- risk level
- scope
- claim-control boundary

No stale GO decision may be reused after repository state changes.

---

## 18. PR Body Expectations

For PRs that affect post-merge verification, the PR body should include:

- post-merge verification plan
- re-measurement plan if applicable
- revert criteria
- fix-forward criteria if applicable
- claim-control check
- boundary check
- evidence supporting the action

---

## 19. Human Ownership

AI tools may recommend post-merge actions.

AI tools may not own the final decision.

Final decisions remain human-owned.

The project owner must decide whether to:

- accept result
- re-measure
- fix-forward
- revert
- split follow-up work
- defer
- stop

---

## 20. Acceptance Criteria for This Policy

This policy is acceptable only if all of the following are true:

- it remains documentation-only
- it introduces no runtime behavior
- it introduces no AI implementation
- it introduces no prompt execution
- it introduces no model integration
- it introduces no API/FHIR implementation
- it introduces no SQL/database migration
- it introduces no OpenEMR core behavior change
- it introduces no PHI
- it introduces no real patient data
- it makes no clinical-use authorization claim
- it makes no production-readiness claim
- it makes no clinical-validation claim
- it makes no regulatory-compliance claim
- it makes no cybersecurity-certification claim
- it strengthens post-merge verification
- it defines revert-first discipline for safety-gate breaches
- it preserves human ownership

---

## 21. Final Statement

This policy strengthens post-merge safety discipline for OpenEMR IM Core.

It does not authorize implementation, runtime behavior, AI integration, prompt execution, model integration, API/FHIR work, SQL/database work, OpenEMR core behavior changes, PHI handling, real patient data, clinical use, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.

The safest interpretation always prevails.
