# Requirements Management Plan V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines a documentation-only requirements management plan for OpenEMR IM Core.

It establishes how future requirements should be identified, classified, controlled, reviewed, traced, changed, deferred, or retired while preserving the current documentation-first, evidence-gated, safety-first, OpenEMR-first, LBF-first, configuration-first, upstream-first, and fork-minimal posture.

This document does not authorize implementation.

This document does not create approved runtime, clinical, AI, database, API/FHIR, deployment, production, pilot, commercial, or medical-device requirements.

This document does not authorize:

- PHI.
- Real patient data.
- Credentials.
- Secrets.
- Sensitive logs.
- Database dumps.
- SQL.
- SQL execution.
- Database migrations.
- Runtime AI.
- Machine learning models.
- Predictive models.
- Autonomous clinical decision support.
- Autonomous diagnosis.
- Autonomous treatment recommendation.
- Autonomous prescribing.
- Autonomous emergency triage.
- Patient-facing AI.
- Prompt execution.
- AI/model integration.
- Frontend implementation.
- FHIR/API implementation.
- OpenEMR core-sensitive changes.
- Demo deployment.
- Pilot deployment.
- Production deployment.
- Commercial deployment.
- Clinical-use authorization.

This document does not claim:

- Demo readiness.
- Pilot readiness.
- Paid-pilot readiness.
- Production readiness.
- Commercial readiness.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.
- Clean-install reproducibility.
- Medical-device readiness.

Golden rule:

The system must support clinicians.
It must not replace clinicians.

---

## 2. Scope

This plan applies to future requirements management for:

- Documentation requirements.
- Governance requirements.
- Safety planning requirements.
- Evidence planning requirements.
- Verification and validation planning requirements.
- Future clinical workflow requirements.
- Future OpenEMR configuration requirements.
- Future LBF requirements.
- Future security and privacy requirements.
- Future RBAC, audit, backup, and restore requirements.
- Future usability and human factors requirements.
- Future interface, API, or FHIR requirements.
- Future database requirements.
- Future AI or CDS requirements.
- Future operations and maintenance requirements.

At the current stage, only documentation and governance planning requirements may be created as active current-stage work.

All runtime, clinical-use, AI, API/FHIR, SQL/database, deployment, operations, maintenance, production, pilot, commercial, or medical-device requirements remain future-gated unless separately approved through documented governance and evidence gates.

---

## 3. Out of Scope

This plan does not create or approve:

- Runtime implementation.
- Runtime requirements execution.
- Clinical workflow automation.
- Autonomous clinical decision support.
- Autonomous diagnosis.
- Autonomous treatment recommendation.
- Autonomous prescribing.
- Autonomous emergency triage.
- Patient-facing AI.
- Prompt execution.
- AI/model integration.
- SQL scripts.
- SQL execution.
- Database migrations.
- Frontend implementation.
- FHIR/API implementation.
- OpenEMR core behavior changes.
- Demo deployment.
- Pilot deployment.
- Production deployment.
- Commercial deployment.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.
- Medical-device readiness.

---

## 4. Current-Stage Boundary

At the current stage, requirements management is limited to documentation-only governance planning.

A requirement may be documented only if it remains within these boundaries:

- documentation-only
- planning-only
- evidence-gated
- future-gated where applicable
- no PHI
- no real patient data
- no credentials
- no secrets
- no production logs
- no database dumps
- no SQL execution
- no database migration
- no runtime AI
- no prompt execution
- no autonomous CDS
- no autonomous diagnosis
- no autonomous treatment recommendation
- no autonomous prescribing
- no autonomous emergency triage
- no patient-facing AI
- no frontend implementation
- no FHIR/API implementation
- no OpenEMR core-sensitive behavior change
- no demo authorization
- no pilot authorization
- no production authorization
- no commercial authorization
- no clinical-use authorization
- no production-readiness claim
- no clinical-validation claim
- no regulatory-compliance claim
- no cybersecurity-certification claim

Any proposed requirement that conflicts with these boundaries must be stopped, deferred, split, or rejected.

---

## 5. Standards-Aware Planning Boundary

This plan is standards-aware planning only.

It may support future alignment-oriented planning with software lifecycle, risk management, documentation, health software lifecycle, clinical safety, privacy/security, verification, validation, configuration management, and audit-readiness expectations.

This document is not:

- a compliance claim
- a certification claim
- a clinical validation claim
- a production-readiness claim
- a cybersecurity-certification claim
- a clinical-use authorization
- evidence that requirements are complete
- evidence that requirements are approved for implementation
- evidence that requirements have been verified
- evidence that requirements have been validated

---

## 6. Requirements Management Principles

Future requirements management must follow these principles:

1. Requirements must be traceable to a documented source.
2. Requirements must remain within current-stage scope unless explicitly future-gated.
3. Requirements must not authorize implementation by their existence.
4. Requirements must not imply runtime readiness.
5. Requirements must not imply clinical-use authorization.
6. Requirements must not include PHI or real patient data.
7. Requirements must not include secrets, credentials, production logs, or database dumps.
8. Requirements must not introduce AI/model integration, prompt execution, API/FHIR implementation, SQL/database migration, or OpenEMR core behavior change.
9. Requirements must be reviewable by the appropriate accountable human role.
10. Requirements must support future traceability to risk, verification, validation planning, and clinical safety artifacts.
11. Requirements must be changed only through controlled review.
12. Requirements must be retired only with documented rationale.
13. The safest interpretation always prevails.

---

## 7. Requirement Types

Future requirements may be classified into the following planning categories.

At the current stage, these categories do not create approved implementation requirements.

| Type code | Requirement type | Current-stage status |
|---|---|---|
| UN | User need | Planning-only |
| SYS | System requirement | Future-gated unless documentation-only |
| SWR | Software requirement | Future-gated |
| SAF | Safety requirement | Planning-only / future-gated |
| SEC | Privacy/security requirement | Planning-only / future-gated |
| USE | Usability/human factors requirement | Planning-only / future-gated |
| CLN | Future clinical workflow requirement | Future-gated only |
| INT | Future interface/API/FHIR requirement | Future-gated only |
| DB | Future database requirement | Future-gated only |
| AI | Future AI/CDS requirement | Future-gated only |
| DOC | Documentation/governance requirement | Current-stage planning allowed |
| CFG | Configuration/change-control requirement | Planning-only / future-gated |
| VNV | Verification and validation planning requirement | Planning-only / future-gated |
| OPS | Future operations/maintenance requirement | Future-gated only |

Future clinical workflow, API/FHIR, database, AI, model, prompt, CDS, runtime, deployment, production, operations, maintenance, or clinical-use requirements are not authorized for implementation at the current stage.

---

## 8. Requirement ID Scheme

Future requirements must use stable, unique identifiers.

Recommended ID format:

```text
IMC-REQ-[TYPE]-[NNNN]
```

Examples:

| Example ID | Meaning |
|---|---|
| IMC-REQ-DOC-0001 | Documentation or governance requirement |
| IMC-REQ-SAF-0001 | Safety planning requirement |
| IMC-REQ-SEC-0001 | Security or privacy planning requirement |
| IMC-REQ-VNV-0001 | Verification and validation planning requirement |
| IMC-REQ-CLN-0001 | Future clinical workflow requirement |
| IMC-REQ-INT-0001 | Future interface/API/FHIR requirement |
| IMC-REQ-DB-0001 | Future database requirement |
| IMC-REQ-AI-0001 | Future AI/CDS requirement |

Requirement IDs must not be reused after retirement.

---

## 9. Requirement Record Fields

Future requirement records should include:

| Field | Description |
|---|---|
| Requirement ID | Stable unique identifier. |
| Requirement type | Type code from the requirement type table. |
| Requirement title | Short descriptive name. |
| Requirement statement | Clear, testable requirement wording where appropriate. |
| Source | Documented origin of the requirement. |
| Rationale | Why the requirement exists. |
| Current-stage status | Active documentation-only, planning-only, future-gated, deferred, rejected, or retired. |
| Scope boundary | What the requirement does and does not authorize. |
| Owner | Accountable human role. |
| Reviewer | Required reviewer role. |
| Related risk | Linked risk or future risk ID where applicable. |
| Related evidence | Linked evidence ID where applicable. |
| Related verification | Linked verification item where applicable. |
| Related validation | Linked validation item where applicable. |
| Related release gate | Linked release-readiness gate where applicable. |
| Change history | Summary of major changes. |
| Retirement rationale | Required if retired. |

---

## 10. Requirement Status Model

| Status | Meaning |
|---|---|
| Draft | Proposed but not reviewed. |
| Planning-only | May guide documentation or governance planning only. |
| Active documentation-only | Approved for current-stage documentation work only. |
| Future-gated | Not approved for implementation until future gates are met. |
| Deferred | Intentionally postponed. |
| Rejected | Not accepted for the project. |
| Retired | Previously accepted but no longer applicable. |
| Superseded | Replaced by another requirement. |

A future-gated requirement is not implementation approval.

A documentation-only requirement is not runtime approval.

---

## 11. Requirement Source Control

Acceptable requirement sources may include:

- Project owner direction.
- Approved project documents.
- Approved PR descriptions.
- Governance decisions.
- Safety reviews.
- Clinical workflow planning documents.
- Risk register entries.
- Traceability matrix entries.
- Evidence registry entries.
- Release readiness gates.
- Qualified reviewer feedback.
- Future standards-alignment review.

Unacceptable sources include:

- Unverified assumptions.
- PHI or real patient data.
- Production logs.
- Database dumps.
- Unapproved screenshots with identifiers.
- Informal claims.
- Marketing statements without review.
- AI-generated requirements without human review and governance approval.

---

## 12. Requirement Change Control

Requirement changes must be controlled.

Each significant change should document:

- What changed.
- Why it changed.
- Who requested the change.
- Who reviewed the change.
- What risks are affected.
- What evidence is affected.
- What verification or validation planning is affected.
- Whether release gates are affected.
- Whether claims language is affected.

A requirement must not be changed in a way that silently expands scope into runtime implementation, clinical use, AI, API/FHIR, database changes, production use, or commercial claims.

---

## 13. Requirement Retirement

Requirements may be retired only with documented rationale.

Retirement rationale should identify:

- Requirement ID.
- Reason for retirement.
- Replacement requirement, if any.
- Risks affected.
- Evidence affected.
- Reviewer.
- Date.
- Residual concerns.

Retired requirements must not have their IDs reused.

---

## 14. Traceability Expectations

Future requirements should support traceability to:

- Source document.
- User need.
- Risk.
- Control.
- Verification planning.
- Validation planning.
- Evidence item.
- Reviewer role.
- Release gate.
- Change history.

Minimum future traceability pattern:

```text
Requirement -> Risk -> Control -> Verification -> Evidence -> Reviewer -> Release Gate
```

This document does not create a completed traceability matrix.

---

## 15. Review Responsibilities

| Requirement type | Required reviewer |
|---|---|
| DOC | Documentation Owner or Governance Reviewer |
| SAF | Clinical Safety Reviewer |
| SEC | Security/Privacy Reviewer |
| USE | Clinical Safety Reviewer or Human Factors Reviewer |
| CLN | Clinical Safety Reviewer and Operations Reviewer |
| INT | OpenEMR Technical Reviewer and Security/Privacy Reviewer |
| DB | OpenEMR Technical Reviewer and Evidence Reviewer |
| AI | Clinical Safety Reviewer, Governance Reviewer, and Claims Reviewer |
| CFG | OpenEMR Technical Reviewer |
| VNV | Evidence Reviewer |
| OPS | Operations Reviewer |

If reviewer ownership is unclear, the requirement must remain draft or future-gated.

---

## 16. Requirement Acceptance Rules

A requirement may be accepted for current-stage documentation work only if:

- It has a documented source.
- It has a stable ID.
- It is within current-stage scope.
- It does not authorize implementation.
- It does not introduce prohibited content.
- It does not make unsupported claims.
- It identifies an accountable owner or reviewer role.
- It can be traced to future risk, evidence, verification, validation, or release gate planning where applicable.

A requirement must be rejected, deferred, or split if it mixes documentation planning with unauthorized implementation.

---

## 17. Safety and Claims Controls

Requirements must not be worded in a way that implies:

- clinical-use authorization
- safe live-patient use
- production readiness
- pilot readiness
- commercial readiness
- clinical validation
- regulatory compliance
- cybersecurity certification
- medical-device readiness
- autonomous clinical decision support
- autonomous diagnosis
- autonomous prescribing
- autonomous emergency triage
- AI readiness
- FHIR readiness

Allowed wording should remain evidence-gated, such as:

- planning-only
- documentation-only
- future-gated
- requires evidence
- not yet verified
- not implemented
- not approved for clinical use

---

## 18. Relationship to Existing Governance Artifacts

This plan should remain aligned with:

| Artifact | Relationship |
|---|---|
| Traceability Matrix Policy | Requirements should support future traceability. |
| Risk Register Structure | Requirements should link to risks when applicable. |
| Clinical Safety Case Structure | Requirements should support future safety arguments. |
| Evidence and Claim-Control Register | Requirements should support evidence and claims control. |
| Lifecycle Phase Gate Control | Requirements should remain phase-gated. |
| Intended Use, Scope, Users, and Claims | Requirements must not exceed intended-use boundaries. |
| Human Accountability RACI Model | Requirements must remain accountable to human reviewer roles. |

---

## 19. Risks

| Risk | Impact | Control |
|---|---|---|
| Requirements imply implementation | Scope creep or unsafe work. | Current-stage boundary and future-gated status. |
| Requirements are not traceable | Audit weakness and poor reviewability. | Source and traceability expectations. |
| Requirements include PHI | Privacy breach. | No-PHI boundary and reviewer control. |
| Requirements create unsupported claims | Legal, trust, and safety risk. | Claims controls and reviewer ownership. |
| Requirements mix AI or CDS with current-stage work | Clinical governance risk. | Future-gated AI/CDS requirement type. |
| Requirements are changed informally | Loss of control and inconsistency. | Requirement change control. |
| Requirements are retired without rationale | Traceability gaps. | Retirement rationale requirement. |
| Requirements lack ownership | Review delays or unsafe acceptance. | Human accountability and reviewer roles. |

---

## 20. Definition of Done

This document is complete when:

- Purpose is documented.
- Scope is documented.
- Out-of-scope boundaries are documented.
- Current-stage boundary is documented.
- Standards-aware planning boundary is documented.
- Requirements management principles are documented.
- Requirement types are documented.
- Requirement ID scheme is documented.
- Requirement record fields are documented.
- Requirement status model is documented.
- Requirement source control is documented.
- Requirement change control is documented.
- Requirement retirement is documented.
- Traceability expectations are documented.
- Review responsibilities are documented.
- Requirement acceptance rules are documented.
- Safety and claims controls are documented.
- Relationship to existing governance artifacts is documented.
- Risks and controls are documented.
- No runtime implementation is introduced.
- No SQL is introduced.
- No database migration is introduced.
- No runtime AI is introduced.
- No frontend or FHIR/API implementation is introduced.
- No PHI, credentials, sensitive logs, or database dumps are included.
- No OpenEMR core-sensitive files are modified.
- No unsupported readiness, validation, compliance, certification, or commercial claims are introduced.

---

## 21. After-Merge Action

After this PR is merged, the next planned documentation step should be separately approved based on the current roadmap and open governance gaps.

Do not start the next PR until this PR is merged and reviewed.

---

## 22. Status

Documentation-only requirements management plan.

No runtime implementation.
No SQL.
No database migration.
No runtime AI.
No frontend implementation.
No FHIR/API implementation.
No OpenEMR core changes.
Not demo-ready.
Not pilot-ready.
Not production-ready.
Not clinically validated.
Not regulatory compliant by default.
Not cybersecurity certified.
Not commercially deployment-ready.
