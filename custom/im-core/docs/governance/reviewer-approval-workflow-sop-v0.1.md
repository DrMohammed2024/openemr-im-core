# Reviewer Approval Workflow SOP V0.1 - OpenEMR IM Core

## AI-Assisted Solo-Owner Applicability

For work classified as eligible by the AI-Assisted Solo-Owner Governance Policy
V0.1, this SOP does not require separate specialist-human approval records. The
required internal record is the AI-assisted, non-independent Project Owner
decision record defined by that policy.

This SOP continues to govern specialist or external approval records for
non-eligible work, triggered future/external gates, and voluntarily obtained
specialist reviews. References below to required approvals and reviewer
re-checks have that narrowed scope.

## 1. Purpose

This SOP defines how formal reviewer approval records are used in the OpenEMR IM Core project during the current documentation-stage, governance-stage, planning-only, pre-runtime, pre-implementation, and pre-clinical-use phase.

This SOP operationalizes the Formal Reviewer Approval Record Template V0.1 by defining when approvals are requested, who records them, how they are linked to pull requests, when they become invalid, and how they are verified after merge.

## 2. Current-Stage Boundary

OpenEMR IM Core is currently a documentation-stage, governance-stage, planning-only, pre-runtime, pre-implementation, and pre-clinical-use project.

This SOP does not authorize:

- PHI use
- real patient data use
- secrets or credentials
- production logs
- database dumps
- runtime AI
- prompt execution
- model integration
- API/FHIR implementation
- SQL/database migrations
- OpenEMR core behavior changes
- autonomous diagnosis
- autonomous treatment
- autonomous prescribing
- autonomous triage
- clinical use
- production deployment
- clinical validation
- regulatory compliance claims
- cybersecurity certification claims

## 3. Related Documents

This SOP should be used together with:

- `custom/im-core/docs/governance/formal-reviewer-approval-record-template-v0.1.md`
- `custom/im-core/docs/governance/formal-reviewer-approval-matrix-v0.1.md`
- `custom/im-core/docs/governance/human-accountability-raci-v0.1.md`
- `custom/im-core/docs/product/intended-use-scope-users-claims-v0.1.md`
- `custom/im-core/docs/index/documentation-index-and-review-cadence-v0.1.md`

If this SOP conflicts with a stricter safety, privacy, clinical, regulatory, or current-stage boundary document, the stricter and safer interpretation prevails.

## 4. When a Reviewer Approval Record Is Required

A formal reviewer approval record should be used when a PR affects one or more of the following:

- governance source-of-truth documents
- current-stage boundaries
- intended-use, scope, users, or claims
- clinical safety planning
- privacy or security planning
- risk management planning
- requirements or traceability planning
- validation or verification planning
- release-readiness planning
- reviewer responsibility or approval expectations
- documentation index status or artifact ownership

A formal reviewer approval record may be optional for narrow documentation-only edits that do not change governance meaning, safety boundaries, artifact status, or ownership.

## 5. Approval Timing

Reviewer approval should occur after:

- the PR scope is defined
- changed files are known
- the PR body has documented scope and safety boundaries
- relevant evidence has been provided
- reviewers have access to the proposed document changes

Reviewer approval should not be treated as final before the PR content is stable.

## 6. Required Reviewer Context

Before approving, reviewers should have enough context to assess:

- PR title
- branch name
- changed files
- document purpose
- affected governance domain
- current-stage boundary
- safety, privacy, and claims implications
- relationship to existing source-of-truth documents
- evidence or rationale supporting the change
- merge criteria

## 7. Approval Record Content

A reviewer approval record should identify:

- PR number or planned PR reference
- document name
- document path
- reviewer role
- reviewer name or accountable owner
- review date
- approval decision
- evidence reviewed
- limitations or conditions
- expiry or invalidation triggers
- post-merge verification expectations

The record should not include PHI, secrets, credentials, real patient data, production logs, or confidential operational data.

## 8. Approval Decisions

Permitted approval decisions are:

- `Approved for current stage`
- `Approved with conditions`
- `Changes requested`
- `Deferred`
- `Not approved`

Approval must be interpreted only within the current documentation-stage, governance-stage, planning-only, pre-runtime, pre-implementation, and pre-clinical-use context.

Approval does not mean clinical validation, production readiness, regulatory compliance, cybersecurity certification, deployment readiness, or clinical-use authorization.

## 9. Conditional Approval

If approval is conditional, the approval record should clearly state:

- the condition
- who must satisfy it
- how completion will be verified
- whether the PR may merge before or only after the condition is resolved

Conditions should be specific, testable, and linked to evidence where possible.

## 10. Approval Invalidation Triggers

A reviewer approval becomes stale or invalid if any of the following occur after approval:

- changed files expand beyond the approved scope
- new governance meaning is introduced
- the PR title or scope materially changes
- safety, privacy, claims, intended-use, or risk boundaries change
- runtime behavior is introduced
- PHI, secrets, credentials, or production data are introduced
- conflicting source-of-truth content is discovered
- required checks fail
- pending checks remain unresolved at merge decision time
- the branch becomes outdated in a way that affects reviewed content

When an approval becomes invalid, reviewer re-check or renewed approval is required before merge.

## 11. Relationship to GitHub Reviews

A GitHub review is useful evidence, but it does not automatically replace a formal reviewer approval record when a formal record is required.

A formal reviewer approval record provides structured governance evidence for:

- reviewer role
- review scope
- decision basis
- limitations
- invalidation triggers
- post-merge expectations

## 12. Relationship to PR Audit Trail

The PR body should summarize reviewer approval status when applicable.

The PR audit trail should not overstate approval. It should distinguish:

- requested review
- completed review
- conditional approval
- current-stage approval
- post-merge verification
- deferred approval

## 13. Merge Gate

A PR requiring formal reviewer approval may be merged only when:

- the applicable Project Owner decision record or triggered
  specialist/external approvals are complete
- approval records are current and not stale
- GitHub checks have 0 failing and 0 pending required checks
- changed files match approved scope
- no prohibited content or claims are introduced
- the PR body documents current-stage boundaries and merge criteria

## 14. Post-Merge Verification

After merge, the owner should verify:

- PR state is `MERGED`
- merge commit exists
- target branch is up to date
- expected files exist on `master`
- documentation index is updated when applicable
- local working tree is clean
- any temporary PR body files are removed locally if not needed

## 15. Documentation Index Expectations

If this SOP or any related approval artifact is added, renamed, or retired, the documentation index should be updated in the same PR unless a separate index PR is explicitly justified.

The index entry should identify:

- PR number
- artifact title
- file path
- accountable owners
- current-stage status

## 16. Non-Authorization Statement

This SOP is a governance workflow document only.

It does not authorize clinical use, production deployment, patient care use, real patient data processing, PHI use, runtime AI, model integration, API/FHIR implementation, database migration, OpenEMR core behavior change, autonomous clinical decision-making, regulatory compliance claims, cybersecurity certification claims, or production-readiness claims.

## 17. Maintenance and Review

This SOP should be reviewed when:

- reviewer roles change
- approval matrix changes
- formal approval template changes
- lifecycle phase gates change
- intended-use or claims boundaries change
- project status changes from documentation-stage planning toward any future runtime or pilot phase

Any update to this SOP should be made through a controlled documentation-only PR with clear scope, safety boundaries, and post-merge verification.

## 18. Version and Ownership

| Field | Value |
|---|---|
| Document | Reviewer Approval Workflow SOP V0.1 |
| Project | OpenEMR IM Core |
| Status | Approved for current-stage planning after merge |
| Stage | Documentation-stage / governance-stage / planning-only |
| Owner | Governance Owner / Documentation Owner |
| Related artifact | Formal Reviewer Approval Record Template V0.1 |
| Runtime impact | None |
| Clinical-use authorization | None None |
