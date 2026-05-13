# Governance Execution Checklist V0.1

## Document Status

| Field | Value |
|---|---|
| Document type | Governance execution checklist |
| Version | V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage governance |
| Scope | Documentation-only |
| Runtime status | Pre-runtime |
| Clinical-use status | Not authorized |
| PHI status | No PHI |
| Real patient data | Not permitted |
| AI implementation | Not permitted |

This document provides a practical execution checklist for OpenEMR IM Core governance work.

It is documentation-only.

It does not implement runtime behavior, artificial intelligence, clinical decision support, API/FHIR integration, SQL/database changes, OpenEMR core behavior changes, clinical-use authorization, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.

---

## 1. Purpose

The purpose of this checklist is to convert the project governance system into a practical execution sequence for everyday repository work.

This checklist helps ensure that each pull request is:

- narrow
- traceable
- evidence-supported
- claim-controlled
- source-of-truth aware
- privacy-safe
- documentation-stage only unless later authorized
- reviewed before merge
- verified after merge
- reverted if a safety gate is breached

---

## 2. Relationship to Governance Documents

This checklist supports:

- VFinal governance execution system
- VFinal Scientific Strengthening Addendum
- Controlled Vocabulary and Project Glossary
- Post-Merge Verification and Revert Policy
- PR Audit Trail Template and Procedure
- Documentation Index and Review Cadence

This checklist does not replace those documents.

If a stricter rule exists elsewhere, the stricter rule applies.

---

## 3. Current Project Boundaries Checklist

Before starting any work, confirm the current project remains:

- [ ] documentation-only
- [ ] governance-stage
- [ ] pre-runtime
- [ ] pre-implementation
- [ ] human-supervised
- [ ] no PHI
- [ ] no real patient data
- [ ] no secrets
- [ ] no credentials
- [ ] no production logs
- [ ] no database dumps
- [ ] no AI implementation
- [ ] no prompt execution
- [ ] no model integration
- [ ] no API/FHIR implementation
- [ ] no SQL/database migration
- [ ] no OpenEMR core behavior change
- [ ] no autonomous diagnosis
- [ ] no autonomous treatment
- [ ] no autonomous prescribing
- [ ] no autonomous triage
- [ ] no clinical-use authorization
- [ ] no production-readiness claim
- [ ] no clinical-validation claim
- [ ] no regulatory-compliance claim
- [ ] no cybersecurity-certification claim

If any item cannot be confirmed, stop and reassess.

---

## 4. Pre-PR Repository State Checklist

Before creating a branch, verify:

- [ ] on `master`
- [ ] `master` is up to date with `origin/master`
- [ ] working tree is clean
- [ ] no unexpected open PRs exist
- [ ] no stale GO decision is being reused
- [ ] current repository state supports the proposed next action

Recommended commands:

    git switch master
    git pull --ff-only origin master
    git status --short
    gh pr list --state open

Decision:

- clean state: GO may proceed
- dirty state: NO-GO until resolved
- unexpected open PRs: reassess
- changed master: previous GO expires

---
## 4A. One-Gate-at-a-Time Execution Rule

Every PR execution sequence must proceed one gate at a time.

A GO decision applies only to the current gate and must not be reused for later gates.

If the user says "continue as appropriate," this means continue only to the next safe gate. It does not authorize skipping verification, creating runtime work, merging without checks, or advancing to a later lifecycle phase.

Each gate should identify:

- [ ] PR type
- [ ] risk class
- [ ] duplicate/source-of-truth check
- [ ] evidence required
- [ ] GO / HOLD / NO-GO decision
- [ ] next safest command

The next safest command should be the smallest command block that obtains the missing evidence or performs the approved narrow action for the current gate only.

---

## 4B. Stage-Based Transition Guard

The current project state is documentation-stage, governance-stage, planning-only, pre-runtime, pre-implementation, and pre-clinical-use.

No sandbox, runtime, implementation, testing, pilot, production, clinical-use, PHI, real patient data, AI/CDS runtime, SQL/database, API/FHIR, or OpenEMR core behavior transition may be proposed as an execution step unless a separate approved stage-based governance gate exists with explicit evidence.

Before any future transition toward sandbox, runtime, implementation, testing, pilot planning, or phase change, the PR must identify:

- [ ] current stage
- [ ] proposed next stage
- [ ] stage-transition evidence required
- [ ] accountable reviewers
- [ ] safety and privacy boundaries
- [ ] claim-control boundaries
- [ ] rollback or revert expectations
- [ ] explicit human approval requirement

Absent this evidence, the decision is HOLD or NO-GO.

---

## 4C. Fixed PR Request Template Requirement

Every non-mechanical PR request should use a fixed request structure.

At minimum, the PR request should identify:

- [ ] PR type
- [ ] risk class
- [ ] intended source of truth
- [ ] duplicate/source-of-truth check
- [ ] evidence required before execution
- [ ] GO / HOLD / NO-GO gate
- [ ] expected changed files
- [ ] prohibited claims
- [ ] merge criteria
- [ ] post-merge verification plan

A PR should not proceed if the request lacks enough information to determine scope, risk, evidence, source-of-truth relationship, or claim-control boundaries.

---

## 5. Risk Classification Checklist

Assign one risk category before execution:

- [ ] Low Risk
- [ ] Medium Risk
- [ ] High Risk
- [ ] Critical Risk

Low Risk examples:

- typo
- formatting
- index-only correction
- mechanical verification

Medium Risk examples:

- governance organization
- roadmap clarification
- documentation structure
- source-of-truth cleanup

High Risk examples:

- clinical safety
- AI/CDS governance
- privacy/security
- validation planning
- regulatory wording
- clinical intelligence
- future runtime implications

Critical Risk examples:

- PHI
- real patient data
- runtime AI
- prompt execution
- model integration
- API/FHIR implementation
- SQL/database migration
- OpenEMR core behavior change
- clinical-use authorization
- production-readiness claim
- clinical-validation claim
- regulatory-compliance claim
- cybersecurity-certification claim

Default rule:

- Critical Risk: NO-GO unless future authorized governance gate exists.

---

## 6. Evidence Checklist

Before execution, identify evidence supporting the change.

Acceptable evidence may include:

- [ ] verified file path
- [ ] verified PR result
- [ ] repository audit result
- [ ] grep output
- [ ] script output
- [ ] Documentation Index measurement
- [ ] project-state tracker entry
- [ ] approved roadmap item
- [ ] human reviewer request
- [ ] specialized reviewer output
- [ ] relevant external standard or guidance reference

Evidence must be specific enough to support the proposed action.

No evidence means no non-mechanical execution.

---

## 7. Source-of-Truth Checklist

Before creating or modifying a document, confirm:

- [ ] a source-of-truth document was identified
- [ ] duplicate-document risk was checked
- [ ] existing documents were reviewed where relevant
- [ ] creating a new document is justified
- [ ] updating an existing document is insufficient or not appropriate
- [ ] index-only action was considered
- [ ] cross-reference action was considered
- [ ] scope remains narrow

Preferred rule:

- update existing document when possible
- create a new document only for a distinct governance function
- use a separate index PR if index update is needed

---

## 8. Claim-Control Checklist

Before committing, confirm the change does not make unsupported claims of:

- [ ] implementation
- [ ] active runtime behavior
- [ ] clinical use
- [ ] clinical validation
- [ ] regulatory compliance
- [ ] cybersecurity certification
- [ ] production readiness
- [ ] AI enablement
- [ ] CDS enablement
- [ ] FHIR/API readiness
- [ ] database readiness
- [ ] autonomous clinical decision-making
- [ ] approval
- [ ] certification
- [ ] safety for patient care

Use safer wording such as:

- documentation-only
- governance-stage
- planning-only
- pre-runtime
- pre-implementation
- future planning
- human-supervised
- no PHI
- no real patient data
- no clinical-use authorization
- not production-ready
- not clinically validated
- not regulatory compliant
- not cybersecurity certified

---

## 9. Scope Checklist

Before creating a PR, confirm:

- [ ] one PR
- [ ] one purpose
- [ ] one narrow change
- [ ] no mixed scope
- [ ] changed files match intended scope
- [ ] no runtime files changed
- [ ] no SQL files changed
- [ ] no API/FHIR files changed
- [ ] no package/dependency files changed
- [ ] no CI workflow files changed unless explicitly in scope
- [ ] no OpenEMR core behavior files changed
- [ ] no generated artifacts added
- [ ] no logs added
- [ ] no database dumps added
- [ ] no secrets or credentials added
- [ ] no PHI or real patient data added

If unexpected files appear, stop and reassess.

---

## 10. PR Body Checklist

Every non-mechanical PR should include:

- [ ] Summary
- [ ] Execution Risk Assessment
- [ ] Scope
- [ ] Documentation-Only Boundary
- [ ] Safety and Privacy Boundary
- [ ] Claims Boundary
- [ ] Source-of-Truth / Index Audit Note
- [ ] Verification
- [ ] Merge Criteria

The PR body should be:

- [ ] truthful
- [ ] evidence-based
- [ ] boundary-aware
- [ ] claim-controlled
- [ ] easy to audit later

---

## 11. Pre-Merge Checklist

Before merging, confirm:

- [ ] PR number is correct
- [ ] PR title is correct
- [ ] PR is open
- [ ] changed files are expected
- [ ] `git diff --check` is clean
- [ ] GitHub checks show 0 failing
- [ ] GitHub checks show 0 pending
- [ ] no safety/privacy boundary is breached
- [ ] no claim-control boundary is breached
- [ ] human project owner gives final GO

Do not merge if any checks are failing or pending.

---

## 12. Post-Merge Checklist

After merge, verify:

- [ ] on `master`
- [ ] `master` is up to date with `origin/master`
- [ ] working tree is clean
- [ ] no unexpected open PRs exist
- [ ] merged PR state is `MERGED`
- [ ] merged file exists
- [ ] expected title or key phrase is present
- [ ] Documentation Index coverage remains acceptable if relevant
- [ ] no PHI or sensitive data was introduced
- [ ] no unsupported claim was introduced
- [ ] no runtime, AI, API/FHIR, SQL, database, or OpenEMR core behavior change occurred

Recommended commands:

    git switch master
    git pull --ff-only origin master
    git status --short
    gh pr list --state open
    gh pr view <PR_NUMBER> --json number,title,state,mergedAt,url,files

---

## 13. Re-Measurement Checklist

Re-measurement is required when a PR affects:

- [ ] Documentation Index
- [ ] document coverage
- [ ] source-of-truth visibility
- [ ] governance structure
- [ ] clinical safety documentation
- [ ] regulatory boundary documentation
- [ ] validation planning documentation
- [ ] release readiness documentation
- [ ] privacy/security documentation
- [ ] clinical intelligence documentation
- [ ] roadmap sequencing
- [ ] project-state tracking

If a new document is added, verify whether it is:

- [ ] directly indexed
- [ ] covered by directory-level index entry
- [ ] intentionally deferred
- [ ] missing and requiring separate index PR

---

## 14. Fix-Forward Versus Revert Checklist

Fix-forward may be considered only for low-risk documentation defects such as:

- [ ] typo
- [ ] minor Markdown formatting issue
- [ ] broken internal link
- [ ] missing cross-reference
- [ ] minor index wording correction
- [ ] missing verification note

Immediate revert is required if a merged change introduces:

- [ ] PHI
- [ ] real patient data
- [ ] secrets
- [ ] credentials
- [ ] production logs
- [ ] database dumps
- [ ] runtime code
- [ ] AI implementation
- [ ] prompt execution
- [ ] model integration
- [ ] API/FHIR implementation
- [ ] SQL/database migration
- [ ] OpenEMR core behavior change
- [ ] clinical-use authorization
- [ ] production-readiness claim
- [ ] clinical-validation claim
- [ ] regulatory-compliance claim
- [ ] cybersecurity-certification claim
- [ ] autonomous diagnosis
- [ ] autonomous treatment
- [ ] autonomous prescribing
- [ ] autonomous triage

Safety-gate breaches require revert-first discipline unless the project owner explicitly documents why revert would create greater risk.

---

## 15. GO Expiration Checklist

A GO decision expires when:

- [ ] repository state changes
- [ ] master changes
- [ ] open PR list changes
- [ ] files change outside intended scope
- [ ] branch changes
- [ ] conflicts appear
- [ ] CI/check status changes
- [ ] Documentation Index measurement changes
- [ ] risk category changes
- [ ] evidence becomes stale
- [ ] evidence becomes contradictory
- [ ] scope expands
- [ ] reviewer raises concern

No stale GO decision may be reused.

---

## 16. Human Ownership Checklist

Confirm:

- [ ] AI recommendation is treated as advisory
- [ ] human project owner retains final decision
- [ ] GO / NO-GO decision is human-owned
- [ ] specialized review does not override safety boundaries
- [ ] uncertainty is documented rather than hidden

---

## 17. Practical Minimal Execution Sequence

For a typical documentation-only governance PR:

1. Verify repository state.
2. Classify risk.
3. Confirm evidence.
4. Confirm source of truth.
5. Confirm claim-control boundary.
6. Confirm safety/privacy boundary.
7. Create narrow branch.
8. Add one narrow documentation change.
9. Verify changed files.
10. Commit.
11. Push.
12. Create PR with audit trail.
13. Wait for checks.
14. Merge only after 0 failing and 0 pending.
15. Verify after merge.
16. Re-measure if required.
17. Revert if safety gate broke.

---

## 18. Acceptance Criteria for This Checklist

This checklist is acceptable only if all of the following are true:

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
- it strengthens execution consistency
- it strengthens PR discipline
- it strengthens post-merge verification
- it preserves human ownership

---

## 19. Final Statement

This checklist operationalizes governance execution for OpenEMR IM Core.

It does not authorize implementation, runtime behavior, AI integration, prompt execution, model integration, API/FHIR work, SQL/database work, OpenEMR core behavior changes, PHI handling, real patient data, clinical use, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.

The safest interpretation always prevails.
