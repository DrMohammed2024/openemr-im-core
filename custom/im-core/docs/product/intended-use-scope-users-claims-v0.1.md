# Intended Use, Scope, Users, and Claims V0.1

## Document Status

| Field | Value |
|---|---|
| Document type | Product governance planning document |
| Version | V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage governance |
| Scope | Intended use, scope, users, and claims planning |
| Runtime status | Pre-runtime |
| Implementation status | Pre-implementation |
| Clinical-use status | Not authorized |
| PHI status | No PHI |
| Real patient data | Not permitted |
| AI implementation | Not permitted |
| Prompt execution | Not permitted |
| Model integration | Not permitted |
| API/FHIR implementation | Not permitted |
| SQL/database migration | Not permitted |
| OpenEMR core behavior change | Not permitted |
| Production-readiness claim | Not permitted |
| Clinical-validation claim | Not permitted |
| Regulatory-compliance claim | Not permitted |
| Cybersecurity-certification claim | Not permitted |

This document defines the current planning-stage intended-use, scope, users, and claims boundaries for OpenEMR IM Core.

It is documentation-only.

It does not implement runtime behavior, artificial intelligence, clinical decision support, prompt execution, model integration, API/FHIR integration, SQL/database changes, OpenEMR core behavior changes, clinical-use authorization, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.

---

## 1. Purpose

The purpose of this document is to define the current planning-stage intended-use, scope, user, environment, and claims boundaries for OpenEMR IM Core.

This document is an upstream planning anchor for future documentation work, including:

- requirements planning
- traceability planning
- risk management planning
- clinical safety planning
- privacy and no-PHI planning
- cybersecurity readiness planning
- verification and validation planning
- lifecycle phase gate decisions

This document does not authorize:

- implementation
- runtime execution
- clinical use
- PHI handling
- real patient data use
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
- production deployment
- clinical validation
- regulatory compliance
- cybersecurity certification

This document is standards-aware planning only.

It is not a compliance claim.

It is not certification.

It is not clinical validation.

It is not production readiness.

It is not clinical-use authorization.

---

## 2. Relationship to Existing Governance System

This document supports the existing OpenEMR IM Core governance system.

It does not replace:

- VFinal+ governance execution system
- VFinal++ Current-Stage Governance Addendum
- Lifecycle Phase Gate Control
- Governance Execution Checklist
- PR Audit Trail Template and Procedure
- Post-Merge Verification and Revert Policy
- Controlled Vocabulary and Project Glossary
- Documentation Index and Review Cadence

This document creates a distinct product-boundary governance function.

It defines what the project may describe at the current documentation-stage and what it must not claim.

If this document conflicts with a stricter governance document, the stricter control applies.

---

## 3. Current Project Stage

OpenEMR IM Core currently remains:

- documentation-stage
- governance-stage
- planning-only
- pre-runtime
- pre-implementation
- pre-clinical-use
- human-supervised

The project is not currently a runtime system.

The project is not currently an implemented software module.

The project is not currently authorized for clinical use.

The project is not currently authorized to process PHI or real patient data.

The project is not currently authorized to provide autonomous diagnosis, treatment, prescribing, or triage.

---

## 4. Non-Negotiable Boundaries

The following boundaries apply to all current-stage work:

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

Any proposed change that violates these boundaries is a NO-GO unless a future authorized governance gate explicitly permits it with documented evidence, human ownership, privacy review, security review, clinical safety review, and appropriate lifecycle phase authorization.

This document itself grants no such authorization.

---

## 5. Intended Use Statement — Planning Draft

The following statement is a planning draft only.

It is not an approved intended use.

It is not clinical-use authorization.

It is not production-use authorization.

It is not validation scope.

It is not a regulatory claim.

It is not a cybersecurity certification claim.

Planning-draft intended-use statement:

OpenEMR IM Core is currently a documentation-stage and governance-stage planning initiative intended to define conservative governance, lifecycle, traceability, claim-control, risk-management, clinical-safety, privacy, security, and future-gated planning structures for possible future human-supervised clinical workflow support concepts in an OpenEMR-related context.

This planning draft does not authorize:

- runtime behavior
- implementation
- AI execution
- prompt execution
- model integration
- CDS enablement
- API/FHIR implementation
- SQL/database migration
- OpenEMR core behavior change
- PHI handling
- real patient data use
- clinical use
- pilot execution
- deployment
- production use

The planning-draft intended use may be revised only through a controlled PR with source-of-truth review, claim-control review, risk impact review, clinical safety impact review, privacy/security impact review, lifecycle phase review, and human-owned approval.

---

## 6. Current Scope

The current scope is limited to documentation-stage governance and planning.

Current in-scope work includes:

- governance documentation
- lifecycle phase planning
- intended-use planning
- scope boundary planning
- user-role planning
- claims control
- requirements planning
- traceability planning
- risk management planning
- clinical safety planning
- privacy and no-PHI planning
- cybersecurity readiness planning
- configuration and change-control planning
- audit trail planning
- future-gated planning only

Current in-scope work may describe future phases only as future-gated planning concepts.

Current in-scope work must not execute future phases.

---

## 7. Explicitly Out of Scope

The following are out of scope at the current stage:

- runtime implementation
- runtime testing
- runtime evidence generation
- prototype execution
- AI implementation
- prompt execution
- model integration
- CDS enablement
- API/FHIR implementation
- SQL/database migration
- OpenEMR core behavior change
- PHI handling
- real patient data use
- production deployment
- clinical use
- pilot execution
- clinic launch
- autonomous diagnosis
- autonomous treatment
- autonomous prescribing
- autonomous triage
- clinical validation
- production readiness
- regulatory compliance claim
- cybersecurity certification claim

These activities may not be performed unless future lifecycle gates explicitly authorize a defined activity with appropriate evidence and human approval.

---

## 8. Intended Users — Planning Draft

The following roles are planning-draft intended users of the current documentation-stage governance materials:

- human project owner
- governance reviewer
- documentation reviewer
- clinical safety reviewer
- privacy reviewer
- security reviewer
- requirements reviewer
- risk management reviewer
- traceability reviewer
- quality or audit-readiness reviewer
- future clinician reviewer, only as a future-gated planning context

These roles are not evidence of clinical use.

This document does not claim that clinicians currently use OpenEMR IM Core in patient care.

This document does not authorize patient-care use by any user role.

---

## 9. Non-Intended Users

The current documentation-stage project is not intended for use by:

- patients
- unsupervised users
- autonomous AI agents
- production clinical staff using it for patient care
- emergency-use users
- diagnostic users
- prescribing users
- triage users
- operational deployment teams treating it as production-ready
- users seeking clinical decision support in live care
- users seeking regulatory compliance or certification evidence

Any use by these groups for clinical, operational, production, or patient-care purposes is outside the current scope.

---

## 10. Use Environment — Planning Draft

The current use environment is limited to:

- GitHub documentation repository
- governance planning environment
- documentation review environment
- audit-readiness planning environment
- non-runtime planning context

The current environment is not:

- a production clinical environment
- a runtime environment
- a patient-care environment
- a PHI environment
- a real-patient-data environment
- a live OpenEMR deployment environment
- a deployed clinical workflow environment

---

## 11. Excluded Use Environments

The following environments are excluded at the current stage:

- clinical production environment
- live OpenEMR deployment
- patient-care workflow
- hospital production use
- clinic production use
- emergency care
- diagnostic workflow
- treatment workflow
- prescribing workflow
- triage workflow
- PHI environment
- real patient data environment
- production logging environment
- database dump environment
- deployment environment

No current-stage document may imply that OpenEMR IM Core is authorized for these environments.

---

## 12. Clinical Responsibility Boundary

All current OpenEMR IM Core work is planning-only.

No clinical responsibility is transferred to:

- software
- AI
- model
- prompt
- automation
- repository workflow
- documentation artifact

No current artifact may be interpreted as allowing autonomous diagnosis, treatment, prescribing, triage, or clinical decision-making.

Any future clinical responsibility model, if ever considered, must remain:

- human-owned
- future-gated
- evidence-gated
- risk-assessed
- privacy-reviewed
- security-reviewed
- clinical-safety-reviewed
- locally reviewed where applicable

---

## 13. Human Supervision Boundary

AI tools may assist with:

- drafting
- review
- summarization
- governance reasoning
- checklist preparation
- claim-control review
- traceability planning support

AI tools may not own final decisions for:

- clinical safety
- regulatory interpretation
- privacy/security acceptance
- release readiness
- deployment readiness
- clinical-use authorization
- risk acceptance
- validation acceptance
- production readiness
- cybersecurity certification

Final decisions remain human-owned.

---

## 14. Current Permitted Claims

The following claims are permitted at the current stage when accurate and supported by repository evidence:

- documentation-only
- governance-stage
- planning-only
- current-stage governance
- pre-runtime
- pre-implementation
- pre-clinical-use
- human-supervised
- no PHI
- no real patient data
- no runtime authorized
- no clinical-use authorization
- future-gated planning only
- standards-aware planning only
- not a compliance claim
- not certification
- not clinical validation
- not production readiness
- not clinical-use authorization

Permitted claims must remain evidence-based and must not imply readiness beyond the current stage.

---

## 15. Prohibited Claims

The following claims are prohibited unless a future authorized governance gate provides appropriate evidence and human approval:

- implemented
- deployed
- active
- operational
- validated
- clinically validated
- approved for clinical use
- certified
- compliant
- regulatory compliant
- cybersecurity certified
- production-ready
- clinical-use ready
- safe for patient care
- AI-enabled
- AI-powered
- CDS-enabled
- FHIR-ready
- API-ready
- database-ready
- PHI-ready
- real-patient-data ready
- autonomous diagnosis
- autonomous treatment
- autonomous prescribing
- autonomous triage
- secure by certification
- validated for clinicians
- ready for deployment

If any prohibited claim appears, it must be removed, weakened, deferred, or treated as a stop condition depending on risk.

---

## 16. Future-Gated Claims

The following claims may only be considered after future formal gates, evidence, specialized review, and human approval:

- implementation readiness
- synthetic runtime evidence readiness
- sandbox readiness
- verification evidence
- validation evidence
- pilot readiness
- deployment readiness
- clinic launch readiness
- clinical-use authorization
- production readiness
- regulatory compliance
- cybersecurity certification
- PHI readiness
- API/FHIR readiness
- SQL/database readiness
- OpenEMR behavior-change readiness

These claims are not currently authorized.

Future-gated claims must not be used as current project claims.

---

## 17. Assumptions

The following are assumptions, not evidence:

- OpenEMR IM Core may later require requirements management artifacts.
- OpenEMR IM Core may later require traceability artifacts.
- OpenEMR IM Core may later require risk management artifacts.
- OpenEMR IM Core may later require clinical safety artifacts.
- OpenEMR IM Core may later require privacy and security planning artifacts.
- OpenEMR IM Core may later require validation planning artifacts.
- OpenEMR IM Core may later require future lifecycle gate decisions.
- Future clinician review may be useful, but is not current clinical use.
- Future runtime evidence, if ever authorized, would need to be synthetic-only and non-production.
- Future legal or regulatory review may be required before any pilot, deployment, production, or clinical-use decision.

These assumptions do not authorize future activities.

---

## 18. Open Questions and Unresolved Gaps

The following questions remain open:

- What exact future user roles may be defined if the project advances beyond documentation-stage governance?
- What exact future clinical workflow boundaries may apply?
- What future requirements categories may be needed?
- What future risk management file scope may be needed?
- What future hazard categories may be needed?
- What future data boundary may apply if synthetic sandbox planning is later authorized?
- What future security scope may apply?
- What future validation planning scope may be needed?
- What future local legal or regulatory review may be required?
- What future operational ownership model may be needed?
- What future training and competency model may be needed?

These unresolved gaps must not be treated as completed evidence.

---

## 19. Traceability Anchors

The following planning anchors may be used by future documents.

They are not implemented requirements.

They are not verification evidence.

They are not validation evidence.

| Anchor ID | Anchor type | Planning meaning |
|---|---|---|
| IU-001 | Intended use | Planning-draft intended-use statement |
| SCOPE-001 | Current scope | Documentation-stage governance and planning scope |
| OOS-001 | Out of scope | Current prohibited and excluded activities |
| USER-001 | Intended users | Planning-draft governance and review roles |
| NONUSER-001 | Non-intended users | Users and roles excluded from current-stage use |
| ENV-001 | Use environment | GitHub documentation and governance planning environment |
| ENV-EXCL-001 | Excluded environments | Clinical, production, PHI, runtime, and deployment environments excluded |
| CLAIM-001 | Permitted claims | Current conservative claims allowed when evidence-supported |
| PROHIBIT-001 | Prohibited claims | Claims prohibited unless future gated evidence exists |
| FUTURE-001 | Future-gated claims | Claims reserved for later formal gates |
| RESP-001 | Clinical responsibility boundary | No transfer of clinical responsibility to software or AI |
| HITL-001 | Human supervision boundary | Human-owned decision-making boundary |
| GAP-001 | Open questions | Unresolved planning gaps |

Future requirements, risks, controls, and evidence models should reference these anchors where applicable.

---

## 20. Relationship to Requirements Planning

Future requirements planning must trace back to:

- intended use
- current scope
- out-of-scope boundaries
- intended users
- non-intended users
- use environment
- excluded environments
- permitted claims
- prohibited claims
- future-gated claims
- clinical responsibility boundary
- human supervision boundary

This document does not create implemented requirements.

This document does not authorize software implementation.

This document does not establish verification evidence.

---

## 21. Relationship to Risk Management Planning

Future risk management planning must be bounded by:

- intended use
- user roles
- non-user roles
- use environment
- excluded use environments
- reasonably foreseeable misuse
- excluded uses
- clinical responsibility boundaries
- human supervision boundaries
- privacy and no-PHI boundaries
- future-gated claim boundaries

This document does not identify all hazards.

This document does not implement risk controls.

This document does not accept residual risk.

This document does not claim risk management is complete.

---

## 22. Relationship to Clinical Safety Planning

Future clinical safety planning must reference:

- intended use
- excluded use
- intended users
- non-intended users
- use environment
- clinical responsibility boundary
- human supervision boundary
- prohibited claims
- open questions

This document does not claim that OpenEMR IM Core is clinically safe.

This document does not claim that OpenEMR IM Core is safe for patient care.

This document does not authorize clinical use.

This document does not provide clinical validation evidence.

---

## 23. Relationship to Privacy and Security Planning

Future privacy and security planning must preserve:

- no PHI
- no real patient data
- no secrets
- no credentials
- no production logs
- no database dumps

Future privacy/security planning may later define:

- synthetic data planning rules
- data classification planning
- access control planning
- threat modeling planning
- vulnerability handling planning
- dependency governance planning
- secure configuration planning

This document does not authorize PHI.

This document does not authorize real patient data.

This document does not claim cybersecurity certification.

This document does not claim production security readiness.

---

## 24. Change-Control Rules

Any future change to intended use, scope, users, claims, excluded uses, or use environment must trigger:

- source-of-truth check
- duplicate-document check
- claim-control check
- controlled vocabulary check
- risk impact review
- requirements impact review
- clinical safety impact review
- privacy/security impact review
- lifecycle phase review
- traceability impact review
- human owner review

A change to intended use must not be bundled with unrelated implementation, runtime, risk-file, validation, privacy/security, or clinical safety changes unless explicitly authorized by a future governance gate.

---

## 25. Acceptance Criteria

This document is acceptable only if:

- it remains documentation-only
- it remains governance-stage
- it remains planning-only
- it introduces no runtime behavior
- it introduces no implementation authorization
- it introduces no AI implementation
- it introduces no prompt execution
- it introduces no model integration
- it introduces no API/FHIR implementation
- it introduces no SQL/database migration
- it introduces no OpenEMR core behavior change
- it introduces no PHI
- it introduces no real patient data
- it introduces no secrets
- it introduces no credentials
- it introduces no production logs
- it introduces no database dumps
- it makes no clinical-use authorization claim
- it makes no production-readiness claim
- it makes no clinical-validation claim
- it makes no regulatory-compliance claim
- it makes no cybersecurity-certification claim
- intended use is clearly marked as planning draft
- claims are conservative
- future-stage claims remain future-gated
- human clinical responsibility is preserved
- traceability anchors are included

---

## 26. Stop Rules

Stop, split, defer, reject, or revert if this document introduces or implies:

- clinical-use authorization
- production readiness
- clinical validation
- regulatory compliance
- cybersecurity certification
- implementation readiness
- runtime readiness
- PHI readiness
- real-patient-data readiness
- AI enablement
- CDS enablement
- FHIR/API readiness
- SQL/database readiness
- OpenEMR core behavior change
- autonomous diagnosis
- autonomous treatment
- autonomous prescribing
- autonomous triage

If such content is discovered before merge, the PR must be blocked.

If such content is discovered after merge, it is an immediate revert candidate unless a safer documented corrective action is explicitly justified for a low-risk documentation defect.

---

## 27. Final Statement

This document defines the current planning-stage intended-use, scope, users, and claims boundaries for OpenEMR IM Core.

It preserves the current documentation-stage, governance-stage, planning-only, human-supervised, pre-runtime, pre-implementation, and pre-clinical-use boundary.

It does not authorize implementation, runtime activity, AI integration, prompt execution, model integration, API/FHIR work, SQL/database work, OpenEMR core behavior changes, PHI handling, real patient data, clinical use, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.

The safest interpretation always prevails.
