# Human Accountability and RACI Model V0.1

## Document Status

| Field | Value |
|---|---|
| Document type | Governance accountability and RACI planning document |
| Version | V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage / governance-stage / planning-only / current-stage |
| Scope | Human accountability and RACI responsibilities for current-stage and future-gated governance |
| Runtime status | No runtime authorized |
| Implementation status | No implementation authorized |
| Clinical-use status | No clinical-use authorization |
| PHI status | No PHI |
| Real patient data status | No real patient data |
| AI implementation status | No AI implementation |
| Prompt execution status | No prompt execution |
| Model integration status | No model integration |
| API/FHIR implementation status | No API/FHIR implementation |
| SQL/database migration status | No SQL/database migration |
| OpenEMR core behavior change status | No OpenEMR core behavior change |
| Production-readiness claim status | Not production readiness |
| Clinical-validation claim status | Not clinical validation |
| Regulatory-compliance claim status | Not a regulatory-compliance claim |
| Cybersecurity-certification claim status | Not cybersecurity certification |

This document defines human accountability and RACI responsibilities for OpenEMR IM Core current-stage and future-gated governance activities.

It is documentation-only, governance-stage, planning-only, current-stage, pre-runtime, pre-implementation, and pre-clinical-use.

It does not authorize implementation, runtime, PHI use, real patient data use, AI implementation, prompt execution, model integration, API/FHIR implementation, SQL/database migration, OpenEMR core behavior change, clinical use, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.

This document is standards-aware governance planning only. It is not a compliance claim, not certification, not clinical validation, not production readiness, not clinical-use authorization, and not cybersecurity certification.

---

## 1. Purpose

The purpose of this document is to define who is accountable, responsible, consulted, and informed for current-stage and future-gated OpenEMR IM Core governance activities.

This document clarifies:

- who may recommend
- who may review
- who may approve
- who may reject
- who may defer
- who may declare NO-GO
- who may request revert
- which decisions require specialized review
- which decisions require human owner approval
- which activities remain future-gated
- what AI tools may assist with
- what AI tools may never own or approve

---

## 2. Relationship to Existing Governance System

This document supports and does not replace:

- VFinal++ Current-Stage Governance Addendum V0.1
- Lifecycle Phase Gate Control V0.1
- Intended Use, Scope, Users, and Claims V0.1
- Controlled Vocabulary and Project Glossary V0.1
- Governance Execution Checklist V0.1
- PR Audit Trail Template and Procedure V0.1
- Post-Merge Verification and Revert Policy V0.1
- Documentation Index and Review Cadence

This document adds a human accountability and RACI layer.

If this document conflicts with a stricter governance control, the stricter control applies.

---

## 3. Current Project Stage

OpenEMR IM Core remains:

- documentation-stage
- governance-stage
- planning-only
- current-stage
- pre-runtime
- pre-implementation
- pre-clinical-use
- human-supervised

Referencing a future-gated activity does not authorize that activity.

---

## 4. Non-Negotiable Boundaries

OpenEMR IM Core remains subject to:

- no PHI
- no real patient data
- no secrets
- no credentials
- no production logs
- no database dumps
- no runtime AI
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

This document does not authorize any activity outside these boundaries.

---

## 5. Human Ownership Principle

Final governance decisions for OpenEMR IM Core must remain human-owned.

AI tools may assist with drafting, review support, checklist generation, risk-classification suggestions, gap identification, traceability suggestions, claim-control suggestions, source-of-truth suggestions, PR body drafting, and documentation consistency review.

AI tools may not own final decisions for:

- clinical safety
- risk acceptance
- privacy/security acceptance
- regulatory interpretation
- requirements approval
- validation planning acceptance
- release readiness
- deployment readiness
- production readiness
- cybersecurity certification
- clinical-use authorization
- pilot authorization
- clinic launch authorization
- residual-risk acceptance
- safety-boundary exception approval

AI-generated recommendations are not approvals.

AI-generated reviews are not final specialized reviews.

AI-generated text is not evidence of human acceptance.

---

## 6. Role Definitions

| Role | Definition |
|---|---|
| Human Project Owner | Human owner accountable for final current-stage project governance decisions. |
| Governance Owner | Responsible for governance consistency, boundary enforcement, phase discipline, and documentation-stage decision control. |
| Documentation Owner | Responsible for documentation structure, source-of-truth clarity, index impact, and documentation quality. |
| PR Author | Responsible for preparing a narrow PR within the approved scope and documenting the audit trail. |
| PR Reviewer | Human reviewer responsible for reviewing scope, boundaries, claims, and evidence. |
| Clinical Safety Reviewer | Consulted or required reviewer for clinical safety, clinical workflow, hazards, or patient-safety implications. |
| Risk Management Reviewer | Consulted or required reviewer for risk management planning, hazard structure, risk-control planning, and residual-risk planning. |
| Requirements Reviewer | Consulted or required reviewer for requirements planning, requirement structure, requirement states, and traceability expectations. |
| Privacy Reviewer | Consulted or required reviewer for no-PHI discipline, data boundary planning, and future privacy review triggers. |
| Security Reviewer | Consulted or required reviewer for security readiness planning, secrets avoidance, threat modeling planning, and vulnerability planning. |
| Validation Planning Reviewer | Consulted or required reviewer for verification and validation planning artifacts. |
| Configuration / Change-Control Reviewer | Consulted or required reviewer for baselines, change impact, versioning, and configuration planning. |
| Local Legal / Regulatory Reviewer | Future-gated reviewer for jurisdiction-specific legal or regulatory interpretation where applicable. |
| Future Clinician Reviewer | Future-gated clinical reviewer for workflow assumptions and usability planning; this does not imply current clinical use. |
| AI Tool | Non-owning assistant that may support drafting and analysis but may not approve, accept, authorize, or own final decisions. |

A person may hold multiple human roles if explicitly appropriate and documented.

The AI Tool role may never replace the Human Project Owner or final accountable human reviewer.

---

## 7. RACI Legend

| Symbol | Meaning |
|---|---|
| R | Responsible: performs or prepares the activity. |
| A | Accountable: owns the final decision or acceptance for the activity. |
| C | Consulted: provides input before decision or completion. |
| I | Informed: kept aware of outcome or decision. |
| SR | Specialized Review required or strongly triggered. |
| FG | Future-gated only; not authorized at the current stage. |
| NA | Not applicable at the current stage. |

Each activity must have at least one accountable human role.

AI tools may not be Accountable.

---

## 8. Current-Stage Governance RACI Matrix

| Activity | Human Project Owner | Governance Owner | Documentation Owner | PR Author | PR Reviewer | Specialized Reviewer | AI Tool |
|---|---|---|---|---|---|---|---|
| Current-stage governance decision | A | R | C | I | C | C if triggered | C |
| Boundary interpretation | A | R | C | C | C | SR if triggered | C |
| Claim-control decision | A | R | C | C | C | SR if triggered | C |
| Source-of-truth decision | A | R | R | C | C | C if needed | C |
| Documentation-only scope confirmation | A | R | R | R | C | C if triggered | C |
| Lifecycle phase status confirmation | A | R | C | C | C | C if triggered | C |
| GO / CONDITIONAL GO / SPLIT / DEFER / NO-GO recommendation | A | R | C | C | C | SR if triggered | C |
| Final human-owned GO | A | C | C | I | C | C if triggered | NA |

---

## 9. Planning RACI Summary

| Planning area | Accountable | Responsible | Consulted | AI role |
|---|---|---|---|---|
| Requirements and traceability planning | Human Project Owner | Requirements Reviewer | Governance Owner / Risk Management Reviewer / Clinical Safety Reviewer / Documentation Owner | Assist only |
| Risk management planning | Human Project Owner | Risk Management Reviewer | Clinical Safety Reviewer / Requirements Reviewer / Privacy-Security Reviewer | Assist only |
| Clinical safety planning | Human Project Owner | Clinical Safety Reviewer | Risk Management Reviewer / Requirements Reviewer / Future Clinician Reviewer if available | Assist only |
| Privacy planning | Human Project Owner | Privacy Reviewer | Security Reviewer / Documentation Owner / PR Reviewer | Assist only |
| Security planning | Human Project Owner | Security Reviewer | Privacy Reviewer / Documentation Owner / PR Reviewer | Assist only |
| Validation planning | Human Project Owner | Validation Planning Reviewer | Requirements Reviewer / Risk Management Reviewer / Clinical Safety Reviewer | Assist only |
| Configuration and change-control planning | Human Project Owner | Configuration / Change-Control Reviewer | Governance Owner / Documentation Owner / PR Reviewer | Assist only |
| GitHub PR governance | Human Project Owner | Governance Owner / PR Author | Documentation Owner / PR Reviewer / Specialized Reviewer if triggered | Assist only |

No planning area authorizes implementation, runtime, clinical use, validation, production readiness, regulatory compliance, or cybersecurity certification.

---

## 10. Future-Gated Decision Boundary

The following decisions are future-gated only:

- implementation readiness
- synthetic runtime evidence
- pilot readiness
- controlled pilot planning
- deployment readiness
- clinic launch governance
- production readiness
- clinical-use authorization
- cybersecurity certification

For future-gated decisions, AI tools may assist only.

AI tools may not approve future-gated work.

AI tools may not authorize implementation, runtime, clinical use, deployment, production readiness, regulatory compliance, or cybersecurity certification.

---

## 11. AI Assistance Boundary

AI tools may assist with:

- drafting
- review support
- checklist generation
- gap identification
- risk-classification suggestions
- traceability suggestions
- claim-control suggestions
- source-of-truth suggestions
- PR body drafting
- documentation consistency review
- proposed RACI table drafting

AI tools may not own final decisions.

AI tools may not approve PRs.

AI tools may not declare final GO.

AI tools may not declare final risk acceptability.

AI tools may not authorize future-gated work.

AI tools may not replace specialized reviewers.

AI tools may not replace the Human Project Owner.

AI tools may not create clinical-use authorization.

AI tools may not convert planning-only documentation into implementation authorization.

AI tools may not override non-negotiable boundaries.

---

## 12. Specialized Review Triggers

Specialized review is required or strongly triggered when a proposed change affects:

- clinical safety
- clinical workflow
- patient-safety assumptions
- risk management planning
- hazard structure
- risk-control planning
- residual-risk planning
- requirements approval rules
- requirements traceability structure
- verification planning
- validation planning
- privacy boundaries
- no-PHI boundaries
- security readiness planning
- secrets, credentials, logs, or database dump boundaries
- regulatory wording
- compliance wording
- certification wording
- production-readiness wording
- clinical-validation wording
- clinical-use wording
- future runtime planning
- future implementation readiness
- future pilot planning
- future deployment planning
- future clinic launch planning
- future post-deployment monitoring planning

Specialized review may result in ACCEPT, MODIFY, SPLIT, DEFER, REJECT, or NO-GO.

Final decision remains human-owned.

---

## 13. Human Approval Rules

Human owner approval is required before:

- merging a non-mechanical governance PR
- declaring GO for a high-risk documentation governance change
- accepting a new source-of-truth document
- changing intended use, scope, users, claims, or exclusions
- changing lifecycle phase status
- changing human accountability rules
- changing requirements governance rules
- changing risk management planning rules
- changing clinical safety planning rules
- changing privacy/security planning rules
- changing validation planning rules
- changing configuration/change-control rules
- deciding not to revert after a suspected safety-boundary breach
- escalating a future-gated activity for review

Human approval must be documented in the PR body, review record, or applicable governance artifact.

A human approval expires if repository state, PR scope, risk level, evidence, or boundary status changes.

---

## 14. Escalation and NO-GO Authority

A proposed activity must be escalated if it involves:

- unclear phase status
- unclear source of truth
- unclear intended use
- unclear claim boundary
- unclear human owner
- specialized review trigger
- possible PHI or real patient data
- possible secrets, credentials, logs, or dumps
- possible runtime, implementation, AI, API/FHIR, SQL, or OpenEMR behavior change
- possible clinical-use, production-readiness, validation, compliance, or certification claim

The Human Project Owner and Governance Owner may declare NO-GO for current-stage work when boundaries are violated or evidence is insufficient.

Specialized reviewers may recommend NO-GO.

AI tools may suggest NO-GO, but AI tools may not declare final NO-GO.

NO-GO is mandatory if a proposed current-stage change introduces PHI, real patient data, secrets, credentials, production logs, database dumps, runtime AI, AI implementation, prompt execution, model integration, API/FHIR implementation, SQL/database migration, OpenEMR core behavior change, autonomous diagnosis, autonomous treatment, autonomous prescribing, autonomous triage, clinical-use authorization, production-readiness claim, clinical-validation claim, regulatory-compliance claim, or cybersecurity-certification claim.

---

## 15. Revert Authority and Safety Boundary Breach Handling

A merged change is an immediate revert candidate if it introduces or implies:

- PHI
- real patient data
- secrets
- credentials
- production logs
- database dumps
- runtime behavior
- runtime AI
- AI implementation
- prompt execution
- model integration
- API/FHIR implementation
- SQL/database migration
- OpenEMR core behavior change
- autonomous diagnosis
- autonomous treatment
- autonomous prescribing
- autonomous triage
- clinical-use authorization
- production-readiness claim
- clinical-validation claim
- regulatory-compliance claim
- cybersecurity-certification claim
- AI final decision authority
- unauthorized future-gated activity

The Human Project Owner and Governance Owner may request revert when a safety, privacy, runtime, clinical-use, claim-control, source-of-truth, or phase-gate breach is discovered.

Specialized reviewers may recommend revert.

AI tools may suggest revert but may not own the final revert decision.

No forward-fixing is allowed for safety-boundary breaches by default.

Fix-forward may be considered only for low-risk documentation defects after explicit human review.

---

## 16. Relationship to Intended Use and Claims

This document depends on the current-stage intended-use, scope, users, and claims boundaries.

Human accountability must preserve:

- planning-draft intended-use status
- current-stage scope
- explicitly out-of-scope activities
- intended user planning roles
- non-intended user exclusions
- use environment exclusions
- clinical responsibility boundary
- human supervision boundary
- permitted claims
- prohibited claims
- future-gated claims
- traceability anchors

This document does not change the intended-use statement.

---

## 17. Relationship to Future Requirements, Risk, and Safety Artifacts

Future requirements, risk, and safety artifacts should use this document to identify accountable human roles.

Future artifacts may include Requirements Management Plan, Requirements Traceability Matrix, Risk Management File Index, Hazard Log, Risk-Control Traceability, Clinical Safety Case Skeleton, Privacy / No-PHI Data Governance Plan, Cybersecurity Readiness Gate, Validation Master Plan Skeleton, and Configuration and Change-Control Plan.

This document provides accountability structure only.

It does not create requirements, identify hazards, control risks, accept residual risk, provide clinical safety evidence, provide verification evidence, provide validation evidence, or authorize implementation, runtime, pilot use, deployment, production operation, or clinical use.

---

## 18. Change-Control Rules

Any future change to this RACI model must trigger:

- source-of-truth check
- duplicate-document check
- claim-control check
- controlled vocabulary check
- boundary check
- lifecycle phase review
- intended-use impact review
- requirements impact review
- risk impact review
- clinical safety impact review
- privacy/security impact review
- validation planning impact review if applicable
- GitHub PR audit trail update
- human owner review

A RACI change must not be combined with unrelated requirements, risk, safety, privacy/security, validation, implementation, runtime, or deployment changes.

---

## 19. Acceptance Criteria

This document is acceptable only if:

- it remains one Markdown governance document only
- it remains documentation-only
- it remains governance-stage
- it remains planning-only
- it remains current-stage
- it remains pre-runtime
- it remains pre-implementation
- it remains pre-clinical-use
- it introduces no PHI
- it introduces no real patient data
- it introduces no secrets
- it introduces no credentials
- it introduces no production logs
- it introduces no database dumps
- it introduces no runtime AI
- it introduces no AI implementation
- it introduces no prompt execution
- it introduces no model integration
- it introduces no API/FHIR implementation
- it introduces no SQL/database migration
- it introduces no OpenEMR core behavior change
- it introduces no autonomous diagnosis
- it introduces no autonomous treatment
- it introduces no autonomous prescribing
- it introduces no autonomous triage
- it makes no clinical-use authorization claim
- it makes no production-readiness claim
- it makes no clinical-validation claim
- it makes no regulatory-compliance claim
- it makes no cybersecurity-certification claim
- it assigns no final decision authority to AI tools
- it preserves human ownership
- it keeps future-gated activities future-gated
- it defines specialized review triggers
- it defines NO-GO authority conservatively
- it defines revert authority conservatively

---

## 20. Stop Rules

Work on this document must stop if it introduces or implies:

- implementation authorization
- runtime authorization
- PHI use
- real patient data use
- secrets use
- credentials use
- production log use
- database dump use
- runtime AI
- AI implementation
- prompt execution
- model integration
- API/FHIR implementation
- SQL/database migration
- OpenEMR core behavior change
- autonomous diagnosis
- autonomous treatment
- autonomous prescribing
- autonomous triage
- clinical-use authorization
- production readiness
- clinical validation
- regulatory compliance
- cybersecurity certification
- AI final approval authority
- AI risk acceptance authority
- AI clinical safety authority
- AI privacy/security acceptance authority
- AI release or deployment approval authority
- activation of a future-gated phase

If such content appears before merge, the PR must be blocked, revised, split, deferred, or rejected.

If such content is discovered after merge, the change is an immediate revert candidate.

---

## 21. Pre-Merge Claim-Control Tightening

This document assigns planning-stage governance accountability only.

It does not authorize implementation, runtime execution, clinical use, PHI handling, real patient data use, AI implementation, prompt execution, model integration, CDS functionality, API/FHIR integration, SQL/database migration, OpenEMR core behavior changes, production deployment, clinical validation, regulatory compliance, or cybersecurity certification.

Where this RACI document conflicts with the Lifecycle Phase Gate Control, Intended Use / Scope / Users / Claims, VFinal++ Current-Stage Governance Addendum, or any stricter current-stage governance boundary document, the stricter and safer interpretation prevails.

A role marked Accountable or Responsible in this document is accountable only for documentation-stage review, decision recording, governance control, escalation, and boundary preservation.

Such assignment does not imply technical implementation authority, clinical authorization authority, regulatory approval authority, deployment authority, production release authority, validation acceptance, cybersecurity certification authority, PHI handling authority, AI/model integration authority, API/FHIR implementation authority, SQL/database migration authority, or OpenEMR core behavior-change authority.

AI tools may assist documentation drafting, review support, checklist generation, gap identification, and governance suggestions only.

AI tools may not own final decisions, approve PRs, declare final GO, accept risk, accept residual risk, approve clinical safety, approve privacy/security acceptance, approve regulatory interpretation, approve validation planning, approve release readiness, approve deployment readiness, authorize clinical use, authorize runtime, or activate any future-gated phase.

The safest and most conservative interpretation must trigger hold, escalation, specialized review, NO-GO, split, defer, or revert assessment when boundary meaning is unclear.

---

## 22. Final Statement

Human Accountability and RACI Model V0.1 defines current-stage and future-gated human accountability boundaries for OpenEMR IM Core governance.

It supports documentation-stage governance, requirements planning, risk management planning, clinical safety planning, privacy/security planning, validation planning, configuration/change-control planning, GitHub PR governance, and future-gated decision control.

It does not authorize implementation, runtime, PHI use, real patient data use, AI implementation, prompt execution, model integration, API/FHIR implementation, SQL/database migration, OpenEMR core behavior change, clinical use, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.

AI tools may assist, but AI tools may not own final decisions.

The safest interpretation always prevails.
