# Documentation Inventory and Artifact Status Matrix V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines the documentation inventory and artifact status matrix for OpenEMR IM Core.

The purpose is to provide a controlled, documentation-stage view of key project artifacts, their current status, ownership, review expectations, index status, evidence relationship, and open gaps.

This document supports:

- Documentation discoverability.
- Artifact lifecycle awareness.
- Governance review.
- Gap identification.
- Future roadmap selection.
- Evidence-gated planning.
- Traceability planning.

This document does not authorize implementation, runtime verification, clinical validation, production use, pilot use, demo use, regulatory compliance claims, cybersecurity certification claims, commercial readiness claims, or clinical-use authorization.

---

## 2. Scope

This inventory covers selected current-stage OpenEMR IM Core artifacts related to:

- Governance.
- Roadmaps.
- Requirements.
- Traceability.
- Risk.
- Evidence.
- Validation planning.
- Regulatory boundary planning.
- Clinical safety planning.
- Human factors planning.
- Security and privacy planning.
- Documentation index alignment.

This inventory is not intended to list every repository file.

It focuses on artifacts that are relevant to governance, auditability, safety, readiness planning, and future phase-gate decisions.

---

## 3. Out of Scope

This document does not create:

- Runtime implementation.
- SQL execution.
- Database migration.
- FHIR/API implementation.
- Frontend implementation.
- OpenEMR core-sensitive changes.
- Runtime AI.
- Prompt execution.
- AI/model integration.
- Autonomous clinical decision support.
- Clinical validation evidence.
- Production evidence.
- Pilot evidence.
- Demo evidence.
- Regulatory compliance evidence.
- Cybersecurity certification evidence.
- Commercial readiness evidence.

This document does not claim:

- Demo readiness.
- Pilot readiness.
- Production readiness.
- Commercial readiness.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.
- Medical-device readiness.
- Clinical-use authorization.

---

## 4. Status Legend

| Status | Meaning |
|---|---|
| Active current-stage artifact | Existing artifact approved or usable for current documentation-stage governance. |
| Planning-only | Artifact supports planning only and does not authorize implementation. |
| Future-facing | Artifact describes future work, gates, or evidence needs. |
| Needs population | Structure exists, but detailed records or entries are still required. |
| Needs indexing | Artifact exists but should be added to the documentation index. |
| Needs review | Artifact requires future governance, clinical, technical, security, risk, evidence, or regulatory review. |
| Superseded | Artifact has been replaced by a later controlled artifact. |
| Retired | Artifact is no longer active and should not be used for current governance decisions. |

No artifact in this document should be treated as runtime approval unless a future controlled phase gate explicitly grants that authorization with evidence and human approval.

---

## 5. Inventory Fields

Each inventory row may include:

| Field | Meaning |
|---|---|
| Artifact ID | Local inventory identifier. |
| Artifact title | Human-readable document name. |
| File path | Repository path. |
| Area | Governance, requirements, risk, evidence, traceability, roadmap, validation, etc. |
| Current-stage status | Current documentation-stage interpretation. |
| Primary owner role | Expected responsible role. |
| Index status | Whether the artifact is currently indexed or requires index update. |
| Evidence relationship | Whether the artifact provides evidence, defines evidence needs, or requires future evidence. |
| Key gap | Most important known gap. |
| Limitation | What the artifact does not prove or authorize. |

---

## 6. Core Artifact Inventory Matrix

| Artifact ID | Artifact title | File path | Area | Current-stage status | Primary owner role | Index status | Evidence relationship | Key gap | Limitation |
|---|---|---|---|---|---|---|---|---|---|
| INV-ROADMAP-001 | Master Execution and Governance Roadmap V0.1 | custom/im-core/docs/roadmap/master-execution-and-governance-roadmap-v0.1.md | Roadmap / Governance | Active current-stage artifact | Governance Owner / Documentation Owner / Technical Owner | Indexed | Defines governance roadmap expectations | Requires ongoing alignment with newer artifacts | Does not authorize implementation or clinical use |
| INV-ROADMAP-002 | Phase 2 Controlled Design Roadmap V0.1 | custom/im-core/docs/roadmap/phase-2-controlled-design-roadmap-v0.1.md | Roadmap / Phase gate | Planning-only | Governance Owner / Documentation Owner / Technical Owner | Existing roadmap artifact | Defines controlled design planning | Future gate execution still required | Does not authorize runtime implementation |
| INV-ROADMAP-003 | Comprehensive Governance and Future Clinical-Use Readiness Roadmap V0.1 | custom/im-core/docs/roadmap/comprehensive-governance-and-future-clinical-use-readiness-roadmap-v0.1.md | Roadmap / Governance / Future readiness | Active current-stage artifact | Governance Owner / Documentation Owner | Indexed after PR #192 | Defines future clinical-use readiness pathway and limitations | Requires downstream population of requirements, risk, evidence, and traceability | Does not authorize clinical use |
| INV-INDEX-001 | Documentation Index and Review Cadence V0.1 | custom/im-core/docs/index/documentation-index-and-review-cadence-v0.1.md | Documentation index | Active current-stage artifact | Documentation Owner / Governance Owner | Self-indexing artifact | Tracks discoverability of key artifacts | Needs continued update after major artifacts | Does not prove artifact completeness |
| INV-REQ-001 | Requirements Management Plan V0.1 | custom/im-core/docs/requirements/requirements-management-plan-v0.1.md | Requirements | Active current-stage artifact | Governance Owner / Documentation Owner | Indexed | Defines requirements management rules | Requires populated requirements baseline | Does not authorize implementation |
| INV-REQ-002 | Requirements Register Starter V0.1 | custom/im-core/docs/requirements/requirements-register-starter-v0.1.md | Requirements | Needs population | Governance Owner / Documentation Owner | Indexed | Provides starter requirements structure | Needs fuller requirement records and links | Does not create verified requirements baseline |
| INV-TRACE-001 | Traceability Matrix V0.1 | custom/im-core/docs/validation/traceability-matrix-v0.1.md | Traceability | Needs population | Governance Owner / Technical Owner | Indexed path corrected | Provides documentation-stage traceability structure | Needs complete requirements-risk-control-test-evidence links | Does not prove verification or validation |
| INV-EVID-001 | Evidence Registry and Evidence Templates V0.1 | custom/im-core/docs/evidence/evidence-registry-and-templates-v0.1.md | Evidence | Needs population | Documentation Owner / Evidence Reviewer | Indexed or referenced in current documentation set | Defines evidence templates and future evidence expectations | Needs populated evidence records | Does not provide runtime evidence by itself |
| INV-RISK-001 | Risk Register V0.1 | custom/im-core/docs/risk/risk-register-v0.1.md | Risk | Needs population | Risk Owner / Clinical Safety Owner | Indexed | Provides documentation-stage risk register structure and initial planning context | Needs actual risk entries, controls, residual risk, and evidence links | Does not establish ISO 14971 compliance |
| INV-RISK-002 | Workflow Risk Mapping - Internal Medicine Visit Documentation V0.1 | custom/im-core/docs/risk/workflow-risk-mapping-internal-medicine-visit-documentation-v0.1.md | Risk / Workflow | Planning-only | Risk Owner / Clinical Safety Owner | Existing risk artifact | Maps workflow-related risk planning | Needs integration into formal risk records and traceability | Does not validate workflow safety |
| INV-VALID-001 | Validation Evidence Plan V0.1 | custom/im-core/docs/validation/validation-evidence-plan-v0.1.md | Validation planning | Future-facing | Evidence Reviewer / Validation Owner | Existing validation artifact | Defines validation evidence planning | Requires future authorized validation execution | Does not create validation evidence |
| INV-VALID-002 | Testing and Verification Plan V0.1 | custom/im-core/docs/validation/testing-and-verification-plan-v0.1.md | Verification planning | Future-facing | Technical Owner / Evidence Reviewer | Existing validation artifact | Defines verification planning | Requires test execution evidence | Does not verify runtime behavior |
| INV-VALID-003 | Failure Modes and Safe Response Library V0.1 | custom/im-core/docs/validation/failure-modes-and-safe-response-library-v0.1.md | Safety / Validation planning | Planning-only | Clinical Safety Owner / Risk Owner | Existing validation artifact | Supports failure mode planning | Needs linkage to risk controls and evidence | Does not prove risk control effectiveness |
| INV-REG-001 | Regulatory and CDS Boundary Statement V0.1 | custom/im-core/docs/regulatory/regulatory-and-cds-boundary-statement-v0.1.md | Regulatory boundary | Active current-stage artifact | Regulatory Owner / Governance Owner | Indexed or referenced in current documentation set | Defines regulatory and CDS boundary constraints | Needs future formal classification review if implementation is proposed | Does not claim regulatory compliance |
| INV-GOV-001 | Traceability Matrix Policy V0.1 | custom/im-core/docs/governance/traceability-matrix-policy-v0.1.md | Governance / Traceability | Active current-stage artifact | Governance Owner / Documentation Owner | Indexed | Defines traceability expectations | Needs execution in traceability matrix | Does not prove traceability completeness |
| INV-GOV-002 | Risk Register Structure V0.1 | custom/im-core/docs/governance/risk-register-structure-v0.1.md | Governance / Risk | Active current-stage artifact | Risk Owner / Governance Owner | Indexed | Defines risk record structure | Needs populated risk records | Does not claim ISO 14971 compliance |
| INV-GOV-003 | Evidence and Claim-Control Register V0.1 | custom/im-core/docs/governance/evidence-and-claim-control-register-v0.1.md | Governance / Evidence / Claims | Active current-stage artifact | Evidence Reviewer / Claims Reviewer | Indexed | Defines evidence and claim-control discipline | Needs evidence record population and ongoing claim review | Does not authorize readiness claims |
| INV-GOV-004 | Lifecycle Phase Gate Control V0.1 | custom/im-core/docs/governance/lifecycle-phase-gate-control-v0.1.md | Governance / Phase gates | Active current-stage artifact | Governance Owner / Release Owner | Existing governance artifact | Defines phase gate controls | Needs future gate records | Does not authorize phase transition by itself |
| INV-HF-001 | Human Factors and Usability Risk Plan V0.1 | custom/im-core/docs/human-factors/human-factors-and-usability-risk-plan-v0.1.md | Human factors | Planning-only | Clinical Safety Owner / Human Factors Reviewer | Existing human factors artifact | Defines usability risk planning | Needs usability evaluation evidence | Does not prove usability validation |
| INV-SEC-001 | Threat Model and Data Governance V0.1 | custom/im-core/docs/security/threat-model-and-data-governance-v0.1.md | Security / Data governance | Planning-only | Privacy-Security Owner / Data Governance Owner | Existing security artifact | Defines threat/data governance planning | Needs security evidence and data governance verification | Does not certify cybersecurity |
| INV-ARCH-001 | Component Inventory V0.1 | custom/im-core/docs/architecture/component-inventory-v0.1.md | Architecture | Planning-only | Technical Owner / Architecture Reviewer | Existing architecture artifact | Defines component planning | Needs updates if architecture changes | Does not authorize implementation |

---

## 7. Current Gaps Summary

The current highest-priority documentation-stage gaps are:

| Gap ID | Gap | Recommended future artifact or action | Priority | Rationale |
|---|---|---|---|---|
| GAP-INV-001 | Requirements register needs population | Requirements register population starter | High | Requirements structure exists but needs fuller records and linkage |
| GAP-INV-002 | Traceability matrix needs population | Requirements-to-risk/evidence traceability population starter | High | Traceability structure exists but is not fully executed |
| GAP-INV-003 | Risk register needs actual risk entries | Risk register initial entries starter | High | Risk structure exists but needs populated risk records |
| GAP-INV-004 | Evidence registry needs evidence IDs and records | Evidence ID registry population starter | High | Evidence framework exists but needs actual evidence records |
| GAP-INV-005 | Standards applicability needs controlled planning matrix | Standards applicability matrix starter | Medium | Standards-aware planning exists but needs a controlled applicability view |
| GAP-INV-006 | Phase 0 closure is not documented | Phase 0 closure report | Medium | Governance foundation needs a formal closure summary before later gates |
| GAP-INV-007 | Artifact lifecycle states need ongoing maintenance | Periodic documentation inventory update | Medium | Inventory will require updates after major documentation PRs |

---

## 8. Relationship to Documentation Index

This document complements the Documentation Index and Review Cadence.

The Documentation Index answers:

- What major artifacts are officially listed?
- Where are they located?
- Who owns them?
- What is their current approval status?

This inventory answers:

- What is the artifact's current-stage interpretation?
- Is it active, planning-only, future-facing, or needs population?
- What is the evidence relationship?
- What is the most important gap?
- What does the artifact not prove?

This inventory does not replace the Documentation Index.

A future PR should add this document to the Documentation Index after this document is merged.

---

## 9. Review Expectations

This inventory should be reviewed when:

- A major governance artifact is added.
- A roadmap artifact is added or revised.
- A requirements, risk, evidence, traceability, validation, or safety artifact is added.
- A phase gate decision is reached.
- An artifact is superseded or retired.
- A documentation index update is performed.
- A new implementation, demo, pilot, or production planning question arises.

Reviewer roles may include:

- Governance Owner.
- Documentation Owner.
- Technical Owner.
- Clinical Safety Owner.
- Risk Owner.
- Evidence Reviewer.
- Privacy-Security Owner.
- Operations Owner.
- Regulatory Reviewer if applicable.

---

## 10. Risks

| Risk | Impact | Control |
|---|---|---|
| Inventory becomes outdated | Poor governance visibility and weak auditability | Review after major documentation PRs |
| Artifact status is mistaken for readiness | Unsupported readiness or clinical-use claims | Explicit limitations and non-authorization language |
| Planning artifacts are mistaken for evidence | Unsafe phase progression | Evidence relationship field and gap summary |
| Indexed artifact is assumed complete | Weak review discipline | Distinguish index status from evidence completeness |
| Future-facing artifact is used as current authorization | Premature implementation or unsafe workflow | Future-gated status and phase gate controls |

---

## 11. Definition of Done

This document is complete when:

- Purpose is documented.
- Scope is documented.
- Out of scope is documented.
- Status legend is documented.
- Inventory fields are documented.
- Core artifact inventory matrix is created.
- Current gaps summary is documented.
- Relationship to Documentation Index is documented.
- Review expectations are documented.
- Risks are documented.
- No runtime implementation is introduced.
- No SQL execution is introduced.
- No database migration is introduced.
- No FHIR/API implementation is introduced.
- No frontend implementation is introduced.
- No OpenEMR core-sensitive change is introduced.
- No runtime AI is introduced.
- No prompt execution is introduced.
- No AI/model integration is introduced.
- No PHI, real patient data, credentials, secrets, sensitive logs, or database dumps are introduced.
- No unsupported demo, pilot, production, commercial, clinical validation, regulatory compliance, cybersecurity certification, medical-device readiness, or clinical-use authorization claim is introduced.

---

## 12. After-Merge Action

After this PR is merged, the next documentation step should be separately approved based on the current roadmap and open governance gaps.

A likely next step is to update the Documentation Index to include this inventory document.

Do not start the next PR until this PR is merged, reviewed, cleaned, and the repository state is verified.

---

## 13. Status

Documentation-only artifact inventory and status matrix.

Planning-stage only.

Future-gated only.

No runtime implementation.

No SQL execution.

No database migration.

No FHIR/API implementation.

No frontend implementation.

No runtime AI.

No prompt execution.

No AI/model integration.

Not for clinical use.

Not production-ready.

Not clinically validated.

No regulatory compliance claim.

No cybersecurity certification claim.
