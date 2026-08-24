# PR Audit Trail Template and Procedure V0.1

## AI-Assisted Solo-Owner Applicability

For eligible work, the PR audit trail must link the GPT multidisciplinary
advisory review and the complete Project Owner decision record required by the
AI-Assisted Solo-Owner Governance Policy V0.1. It must disclose the
author-owner-reviewer relationship and that review is AI-assisted and
non-independent.

Separate specialist-human approvals are not mandatory internal merge gates for
eligible work. They remain required for non-eligible work and any triggered
future or external qualified-human gate.

## Document Status

| Field | Value |
|---|---|
| Document type | Governance procedure |
| Version | V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage governance |
| Scope | Documentation-only |
| Runtime status | Pre-runtime |
| Clinical-use status | Not authorized |
| PHI status | No PHI |
| Real patient data | Not permitted |
| AI implementation | Not permitted |

This document defines the required pull request audit trail structure for OpenEMR IM Core.

It is documentation-only.

It does not implement runtime behavior, artificial intelligence, clinical decision support, API/FHIR integration, SQL/database changes, OpenEMR core behavior changes, clinical-use authorization, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.

---

## 1. Purpose

The purpose of this procedure is to standardize pull request descriptions so that every non-mechanical PR contains a clear, reviewable, human-owned audit trail.

A PR audit trail helps reviewers understand:

- what changed
- why it changed
- what evidence supports the change
- which boundaries apply
- what is out of scope
- what verification was performed
- what conditions must be true before merge
- whether any follow-up verification is required

This procedure supports traceability, claim control, documentation discipline, and safe governance execution.

---

## 2. Relationship to Governance System

This procedure supports:

- VFinal governance execution system
- VFinal Scientific Strengthening Addendum
- Controlled Vocabulary and Project Glossary
- Post-Merge Verification and Revert Policy
- Documentation Index and Review Cadence
- source-of-truth control
- claim-control governance
- no-PHI repository discipline
- human-owned GO / NO-GO decision-making

This procedure does not replace those documents.

If a stricter safety rule exists elsewhere, the stricter rule applies.

---

## 3. Applicability

This procedure applies to all non-mechanical PRs.

Examples of non-mechanical PRs include:

- new governance document
- documentation index update
- roadmap update
- clinical safety documentation
- regulatory boundary documentation
- validation planning documentation
- privacy/security documentation
- clinical intelligence documentation
- source-of-truth correction
- claim-control correction
- process or policy documentation

Mechanical PRs may use a shortened audit trail if they are limited to:

- typo correction
- whitespace correction
- formatting correction
- non-substantive link correction
- purely mechanical file movement

Even mechanical PRs must preserve no-PHI, no-real-patient-data, no-runtime, and no-overclaiming boundaries.

---

## 4. Required PR Body Sections

Every non-mechanical PR should include the following sections:

1. Summary
2. Execution Risk Assessment
3. Scope
4. Documentation-Only Boundary
5. Safety and Privacy Boundary
6. Claims Boundary
7. Source-of-Truth / Index Audit Note
8. Verification
9. Merge Criteria

Additional sections may be added when needed, but the required sections should not be omitted without justification.

---

## 5. Required PR Body Template

The following template should be used for non-mechanical PRs.

### Summary

Describe what this PR changes in one to three concise paragraphs.

Include:

- document or file added or modified
- purpose of the change
- why the change is needed now

### Execution Risk Assessment

Risk level: Low / Medium / High / Critical

External review needed: No / Yes / Already completed

Decision: GO / CONDITIONAL GO / SPLIT / DEFER / NO-GO

Reason:

Evidence:

Source-of-truth check:

Claim-control check:

Boundary check:

Smallest safe next action:

### Scope

In scope:

- list exact changes included in this PR

Out of scope:

- list explicitly excluded areas

### Documentation-Only Boundary

State whether the PR is documentation-only.

If documentation-only, include language confirming that it does not modify:

- runtime code
- CI workflows
- npm/package files
- SQL files
- API/FHIR files
- OpenEMR core behavior
- AI integration
- prompts
- models
- database schema

### Safety and Privacy Boundary

State whether the PR introduces or avoids:

- PHI
- real patient data
- secrets
- credentials
- production logs
- database dumps
- clinical-use data

### Claims Boundary

State whether the PR avoids claims of:

- implementation
- validation
- clinical validation
- regulatory compliance
- cybersecurity certification
- production readiness
- clinical-use readiness
- AI enablement
- CDS enablement
- FHIR/API readiness
- database readiness

### Source-of-Truth / Index Audit Note

State:

- which source-of-truth document the PR supports
- whether it creates a new source-of-truth document
- whether it updates an existing source-of-truth document
- whether it is index-only
- whether Documentation Index follow-up is needed
- whether historical source PR numbers are verified or use `#INDEX-AUDIT`

### Verification

List verification performed or required before merge.

Examples:

- `git status --short`
- `git diff --check`
- changed-files review
- file existence check
- grep-based claim-control review
- no-PHI/no-secret check
- Documentation Index coverage measurement
- GitHub checks

### Merge Criteria

State the conditions required before merge.

At minimum:

- intended files only
- `git diff --check` clean
- GitHub checks show 0 failing
- GitHub checks show 0 pending
- no safety/privacy boundary breach
- no claim-control breach
- human project owner gives final GO

---

## 6. Risk-Level Guidance

### Low Risk

Low Risk PRs are documentation-only, administrative, formatting, index-only, typo, or verification-only changes.

They should still include a clear audit trail, but may use concise wording.

### Medium Risk

Medium Risk PRs affect documentation structure, governance organization, index coverage, roadmap sequencing, source-of-truth clarity, or planning controls while remaining documentation-only and pre-runtime.

They require full audit trail sections.

### High Risk

High Risk PRs involve sensitive governance areas such as:

- clinical safety
- AI/CDS governance
- privacy/security
- validation planning
- regulatory wording
- workflow architecture
- clinical intelligence
- platform strategy
- future runtime implications

They require full audit trail sections and may require specialized review.

### Critical Risk

Critical Risk PRs include anything that could breach project boundaries, including:

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

Default decision: NO-GO unless a future authorized governance gate explicitly permits the action with evidence.

---

## 7. Evidence Expectations

Every non-mechanical PR should identify evidence supporting the change.

Acceptable evidence may include:

- verified file path
- verified PR result
- repository audit result
- grep output
- script output
- Documentation Index measurement
- project-state tracker entry
- approved roadmap item
- human reviewer request
- specialized reviewer output
- relevant external standard or guidance reference

Evidence must support only the claim being made.

Weak evidence must not support strong claims.

---

## 7A. PR Evidence Bundle Minimum Fields

Every non-mechanical PR should include a concise PR evidence bundle in the PR body.

The PR evidence bundle should identify, at minimum:

- [ ] PR purpose.
- [ ] changed files list.
- [ ] intended source-of-truth document.
- [ ] whether the PR updates an existing source-of-truth document.
- [ ] whether the PR creates a new source-of-truth document.
- [ ] duplicate-document risk assessment.
- [ ] claim-control scan result.
- [ ] documentation-only boundary confirmation.
- [ ] traceability impact statement.
- [ ] risk-register impact statement.
- [ ] evidence-registry impact statement.
- [ ] human review or sign-off status.
- [ ] GitHub checks expectation of 0 failing and 0 pending before merge.
- [ ] post-merge verification plan.

The evidence bundle must not overstate what was verified.

A PR evidence bundle may document governance evidence, review evidence, repository evidence, or verification evidence, but it must not claim clinical validation, production readiness, regulatory compliance, cybersecurity certification, medical-device readiness, deployment readiness, pilot readiness, demo readiness, or phase closure unless separately supported by formal evidence and authorized human governance review.

If evidence is missing, incomplete, stale, contradictory, or unclear, the PR body should state the limitation and the merge decision should remain HOLD, CONDITIONAL GO, DEFER, or NO-GO as appropriate.

The evidence bundle is a review aid. It does not replace the applicable
Project Owner decision record or triggered external/qualified-human review,
GitHub checks, post-merge verification, source-of-truth review,
duplicate-document review, claim-control review, traceability review, risk
review, or evidence review.

---

## 8. Source-of-Truth Expectations

Before creating or modifying governance documentation, the PR should state the applicable source-of-truth relationship.

The PR should clarify whether the change:

- creates a distinct governance function
- updates an existing source of truth
- adds index visibility
- corrects wording
- adds a cross-reference
- avoids duplicate-document risk
- defers a broader topic

A new document should not duplicate or weaken an existing source of truth.

---

## 9. Claim-Control Expectations

Every PR should avoid unsupported wording that implies:

- implementation
- active runtime behavior
- clinical use
- validation
- regulatory compliance
- cybersecurity certification
- production readiness
- AI enablement
- CDS enablement
- FHIR/API readiness
- database readiness
- autonomous clinical decision-making

If stronger wording is necessary, the PR must provide evidence and human approval.

If evidence is absent, wording must be weakened, removed, or deferred.

---

## 10. Boundary Expectations

Every PR must preserve the current project boundaries unless a future authorized governance gate explicitly changes them.

The current boundaries are:

- documentation-only
- governance-stage
- pre-runtime
- pre-implementation
- human-supervised
- no PHI
- no real patient data
- no secrets
- no credentials
- no production logs
- no database dumps
- no AI implementation
- no prompt execution
- no model integration
- no API/FHIR implementation
- no SQL/database migration
- no OpenEMR core behavior change
- no autonomous diagnosis
- no autonomous treatment
- no autonomous prescribing
- no autonomous triage
- no clinical-use authorization
- no production-readiness claim
- no clinical-validation claim
- no regulatory-compliance claim
- no cybersecurity-certification claim

---

## 11. Changed-Files Expectations

Every PR should confirm the changed files match the intended scope.

For a narrow documentation PR, changed files should normally be limited to:

- the intended documentation file
- optionally the Documentation Index if explicitly in scope

If unexpected files appear, the PR must stop for reassessment.

Unexpected changes may include:

- runtime code
- SQL files
- API/FHIR files
- package files
- CI workflow files
- OpenEMR core files
- generated artifacts
- logs
- database dumps
- credential files
- patient data

---

## 12. PR Body Quality Rules

The PR body should be:

- specific
- truthful
- evidence-based
- boundary-aware
- claim-controlled
- concise but complete
- easy for a future reviewer to audit

The PR body should not:

- exaggerate readiness
- imply clinical use
- imply validation
- imply compliance
- imply certification
- hide uncertainty
- mix unrelated scopes
- claim evidence that was not verified

---

## 13. Post-Merge Audit Linkage

A PR body should support post-merge verification by making it clear what must be checked after merge.

For example:

- expected file exists
- expected title is present
- expected line or phrase is present
- changed files match intended scope
- Documentation Index coverage remains acceptable
- open PR list is understood
- no unsafe claims were introduced

This helps apply the Post-Merge Verification and Revert Policy consistently.

---

## 14. Standard Short Template

The following short template may be used for low-risk documentation-only PRs.

```text
## Summary

## Execution Risk Assessment

Risk level:
External review needed:
Decision:
Reason:
Evidence:
Source-of-truth check:
Claim-control check:
Boundary check:
Smallest safe next action:

## Scope

In scope:
Out of scope:

## Documentation-Only Boundary

## Safety and Privacy Boundary

## Claims Boundary

## Source-of-Truth / Index Audit Note

## Verification

## Merge Criteria
```

---

## 15. Human Ownership

AI tools may draft PR bodies, recommend risk levels, and suggest GO / NO-GO decisions.

AI tools do not own the final decision.

Final decision-making remains human-owned.

The project owner may accept, modify, split, defer, reject, or reverse an AI recommendation.

---

## 16. Acceptance Criteria for This Procedure

This procedure is acceptable only if all of the following are true:

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
- it strengthens PR audit trail discipline
- it strengthens traceability
- it strengthens claim control
- it preserves human ownership

---

## 17. Final Statement

This procedure standardizes pull request audit trail discipline for OpenEMR IM Core.

It does not authorize implementation, runtime behavior, AI integration, prompt execution, model integration, API/FHIR work, SQL/database work, OpenEMR core behavior changes, PHI handling, real patient data, clinical use, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.

The safest interpretation always prevails.
