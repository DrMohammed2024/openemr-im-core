# Requirements Traceability Population Starter V0.1 - OpenEMR IM Core

## 1. Purpose

This document provides the requirements traceability population starter for OpenEMR IM Core.

The purpose is to begin controlled documentation-stage linkage between requirements, source artifacts, risks, controls, test or review methods, evidence needs, owners, review status, and limitations.

This document supports the traceability model:

Requirement → Source → Risk → Control → Test / Review → Evidence Need → Owner → Review Status → Limitation

This document is documentation-only.

This document does not authorize implementation, runtime verification, clinical validation, production use, pilot use, demo use, regulatory compliance claims, cybersecurity certification claims, commercial readiness claims, or clinical-use authorization.

---

## 2. Scope

This starter covers selected current-stage requirements from the Requirements Register Starter V0.1 and maps them to initial documentation-stage traceability expectations.

This document focuses on:

- Requirements source identification.
- Initial risk linkage placeholders.
- Initial control linkage placeholders.
- Initial verification or review method placeholders.
- Initial evidence need placeholders.
- Owner role assignment.
- Review status.
- Limitations.

This starter is intentionally limited and does not attempt to fully populate the complete project traceability matrix.

---

## 3. Source Artifacts

This document is based on the following current-stage artifacts:

| Source ID | Source artifact | File path | Relationship |
|---|---|---|---|
| SRC-REQ-PLAN-001 | Requirements Management Plan V0.1 | custom/im-core/docs/requirements/requirements-management-plan-v0.1.md | Defines requirements management rules, status model, review expectations, and traceability expectations. |
| SRC-REQ-REG-001 | Requirements Register Starter V0.1 | custom/im-core/docs/requirements/requirements-register-starter-v0.1.md | Provides the starter requirement records and `IMC-REQ-` identifier pattern. |
| SRC-TRACE-001 | Traceability Matrix V0.1 | custom/im-core/docs/validation/traceability-matrix-v0.1.md | Provides documentation-stage traceability structure and relationship to requirements artifacts. |
| SRC-INV-001 | Documentation Inventory and Artifact Status Matrix V0.1 | custom/im-core/docs/index/documentation-inventory-and-artifact-status-matrix-v0.1.md | Identifies traceability population as a high-priority current gap. |
| SRC-ROADMAP-001 | Comprehensive Governance and Future Clinical-Use Readiness Roadmap V0.1 | custom/im-core/docs/roadmap/comprehensive-governance-and-future-clinical-use-readiness-roadmap-v0.1.md | Lists requirements traceability population starter as a near-term roadmap item. |

---

## 4. Out of Scope

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

## 5. Traceability Population Fields

Each traceability population row should include:

| Field | Meaning |
|---|---|
| Trace ID | Local traceability row identifier. |
| Requirement ID | Requirement identifier from the requirements register or controlled source. |
| Requirement summary | Short requirement statement or controlled summary. |
| Requirement source | Source artifact that introduced or controls the requirement. |
| Requirement status | Planning-only, future-gated, active documentation-stage, retired, or superseded. |
| Risk ID / risk need | Existing or planned risk identifier. |
| Control ID / control need | Existing or planned control identifier. |
| Test or review method | Documentation review, governance review, traceability review, risk review, evidence review, or future verification method. |
| Evidence need | Existing evidence ID or required future evidence placeholder. |
| Owner role | Primary owner role. |
| Reviewer role | Expected reviewer role. |
| Review status | Draft, pending review, reviewed for current stage, or needs future review. |
| Limitation | What this row does not prove or authorize. |

---

## 6. Traceability Population Status Legend

| Status | Meaning |
|---|---|
| Draft | Row is newly added and requires review. |
| Reviewed for current stage | Row is acceptable for documentation-stage governance only. |
| Needs risk linkage | Requirement needs risk register linkage. |
| Needs evidence linkage | Requirement needs evidence ID or evidence record linkage. |
| Needs verification linkage | Requirement needs test or review method linkage. |
| Future-gated | Requirement cannot be implemented without future phase-gate approval. |
| Retired | Requirement is no longer active. |
| Superseded | Requirement is replaced by a later controlled requirement. |

---

## 7. Starter Traceability Population Matrix

| Trace ID | Requirement ID | Requirement summary | Requirement source | Requirement status | Risk ID / risk need | Control ID / control need | Test or review method | Evidence need | Owner role | Reviewer role | Review status | Limitation |
|---|---|---|---|---|---|---|---|---|---|---|---|---|
| TRACE-REQ-001 | IMC-REQ-DOC-0001 | Maintain documentation-first governance for OpenEMR IM Core. | SRC-REQ-REG-001 / SRC-REQ-PLAN-001 | Active documentation-stage | RISK-DOC-001 planned | CTRL-DOC-GOV-001 planned | Documentation review / governance review | EVID-DOC-FUTURE-001 | Documentation Owner | Governance Owner | Draft | Does not prove runtime readiness. |
| TRACE-REQ-002 | IMC-REQ-GOV-0001 | Maintain controlled PR workflow with narrow scope and reviewable changes. | SRC-REQ-REG-001 / SRC-REQ-PLAN-001 | Active documentation-stage | RISK-GOV-001 planned | CTRL-PR-001 planned | PR review / merge readiness review | EVID-PR-FUTURE-001 | Governance Owner | Documentation Owner / Technical Owner | Draft | Does not prove clinical safety or compliance. |
| TRACE-REQ-003 | IMC-REQ-SAF-0001 | Preserve clinician authority and prohibit autonomous clinical decision-making. | SRC-REQ-REG-001 / SRC-TRACE-001 | Active documentation-stage | RISK-SAF-001 planned | CTRL-HITL-001 planned | Clinical safety review / governance review | EVID-SAFETY-FUTURE-001 | Clinical Safety Owner | Governance Owner / Clinical Safety Reviewer | Draft | Does not validate clinical performance. |
| TRACE-REQ-004 | IMC-REQ-PRIV-0001 | Prohibit PHI, real patient data, secrets, credentials, sensitive logs, and database dumps in repository content. | SRC-REQ-REG-001 / SRC-REQ-PLAN-001 | Active documentation-stage | RISK-PRIV-001 planned | CTRL-NOPHI-001 planned | Privacy/security review / repository review | EVID-PRIV-FUTURE-001 | Privacy-Security Owner | Data Governance Owner / Governance Owner | Draft | Does not prove privacy compliance or production data protection. |
| TRACE-REQ-005 | IMC-REQ-TRACE-0001 | Maintain requirements traceability across sources, risks, controls, tests, evidence, owners, reviewers, and limitations. | SRC-TRACE-001 / SRC-INV-001 | Active documentation-stage | RISK-TRACE-001 planned | CTRL-TRACE-001 planned | Traceability review | EVID-TRACE-FUTURE-001 | Governance Owner | Evidence Reviewer / Technical Owner | Draft | Does not prove complete traceability. |
| TRACE-REQ-006 | IMC-REQ-RISK-0001 | Maintain a risk register linking risks, controls, residual risk, owners, and evidence needs. | SRC-REQ-REG-001 / SRC-INV-001 | Needs population | RISK-RISKREG-001 planned | CTRL-RISK-001 planned | Risk review / clinical safety review | EVID-RISK-FUTURE-001 | Risk Owner | Clinical Safety Owner | Draft | Does not establish ISO 14971 compliance. |
| TRACE-REQ-007 | IMC-REQ-EVID-0001 | Maintain evidence records with IDs, owners, reviewers, status, evidence location, and limitations. | SRC-REQ-REG-001 / SRC-INV-001 | Needs population | RISK-EVID-001 planned | CTRL-EVID-001 planned | Evidence review | EVID-REG-FUTURE-001 | Evidence Reviewer | Governance Owner / Documentation Owner | Draft | Does not create runtime evidence. |
| TRACE-REQ-008 | IMC-REQ-CLAIM-0001 | Control claims so no unsupported readiness, validation, compliance, certification, or commercial claim is made. | SRC-REQ-REG-001 / SRC-REQ-PLAN-001 | Active documentation-stage | RISK-CLAIM-001 planned | CTRL-CLAIM-001 planned | Claims review / governance review | EVID-CLAIM-FUTURE-001 | Claims Reviewer | Governance Owner | Draft | Does not approve external claims. |
| TRACE-REQ-009 | IMC-REQ-AI-0001 | Prohibit runtime AI, prompt execution, AI/model integration, autonomous CDS, diagnosis, treatment recommendation, prescribing, emergency triage, and patient-facing AI at the current stage. | SRC-ROADMAP-001 / SRC-TRACE-001 | Future-gated | RISK-AI-001 planned | CTRL-AI-BND-001 planned | AI governance review / clinical safety review | EVID-AI-BND-FUTURE-001 | AI Governance Owner | Clinical Safety Owner / Privacy-Security Owner | Draft | Does not authorize AI/ML implementation. |
| TRACE-REQ-010 | IMC-REQ-REL-0001 | Gate future demo, pilot, production, and clinical-use readiness on evidence, review, and explicit approval. | SRC-ROADMAP-001 / SRC-REQ-PLAN-001 | Future-gated | RISK-REL-001 planned | CTRL-GATE-001 planned | Gate review / release readiness review | EVID-GATE-FUTURE-001 | Release Owner | Governance Owner / Clinical Safety Owner | Draft | Does not authorize any release gate. |
| TRACE-REQ-011 | IMC-REQ-DOC-0005 | Maintain evidence-gated PR execution before proposing or performing later-gate actions. | SRC-REQ-REG-001 / SRC-TRACE-001 | Active documentation-stage | RISK-GOV-001 planned | CTRL-PR-001 planned | PR review / evidence-gate review | EVID-PR-FUTURE-001 | Governance Owner | Documentation Owner / Evidence Reviewer | Draft | Does not authorize implementation, release, or clinical use. |
| TRACE-REQ-012 | IMC-REQ-DOC-0006 | Maintain post-merge verification for documentation PRs. | SRC-REQ-REG-001 / SRC-TRACE-001 | Active documentation-stage | RISK-DOC-001 planned | CTRL-DOC-GOV-001 planned | Post-merge verification review | EVID-DOC-FUTURE-001 | Documentation Owner | Governance Owner / Evidence Reviewer | Draft | Does not prove validation, compliance, or production readiness. |
| TRACE-REQ-013 | IMC-REQ-DOC-0007 | Preserve source-of-truth control and avoid duplicate governance, requirements, risk, evidence, safety, privacy, or traceability artifacts. | SRC-REQ-REG-001 / SRC-INV-001 | Active documentation-stage | RISK-DOC-001 planned | CTRL-DOC-GOV-001 planned | Documentation inventory review / source-of-truth review | EVID-DOC-FUTURE-001 | Documentation Owner | Governance Owner | Draft | Does not complete traceability or evidence linkage. |
| TRACE-REQ-014 | IMC-REQ-VNV-0004 | Preserve evidence package limitations and prevent planning artifacts from being treated as closure, validation, compliance, certification, or release evidence. | SRC-REQ-REG-001 / SRC-TRACE-001 | Planning-only | RISK-EVID-001 planned | CTRL-EVID-001 planned | Evidence review / claims review | EVID-TRACE-FUTURE-001 | Evidence Reviewer | Governance Owner / Claims Reviewer | Draft | Does not create completed evidence, validation, compliance, certification, or release approval. |
| TRACE-REQ-015 | IMC-REQ-CFG-0003 | Maintain one-gate-at-a-time GitHub execution and prevent later-gate commands before current evidence review. | SRC-REQ-REG-001 / SRC-TRACE-001 | Active documentation-stage | RISK-GOV-001 planned | CTRL-GATE-001 planned | Governance review / phase-gate review | EVID-GATE-FUTURE-001 | Governance Owner | Documentation Owner / Evidence Reviewer | Draft | Does not authorize runtime, deployment, production, or clinical use. |

---

## 8. Population Rules

Future updates to this starter or to the main traceability matrix should follow these rules:

1. Do not create a requirement without a source artifact.
2. Do not mark a row as complete without risk, control, review/test, evidence, owner, reviewer, and limitation fields.
3. Use planned risk IDs only when the formal risk record does not yet exist.
4. Use future evidence placeholders only when evidence records do not yet exist.
5. Do not convert documentation-stage traceability into runtime evidence.
6. Do not treat requirements as implementation authorization.
7. Do not make readiness, validation, compliance, certification, commercial, or clinical-use claims without evidence and approval.
8. Keep changes small and reviewable.
9. Update the documentation index after this document is merged.
10. Update the traceability matrix through a separate controlled PR if rows are migrated or normalized.

---

## 9. Current Gaps

| Gap ID | Gap | Required future action | Priority |
|---|---|---|---|
| GAP-REQTRACE-001 | Risk IDs are planned but not fully populated | Populate risk register and replace planned IDs with controlled risk records | High |
| GAP-REQTRACE-002 | Evidence IDs are mostly future placeholders | Populate evidence registry and link evidence records | High |
| GAP-REQTRACE-003 | Controls are planned but not fully defined | Create or link controlled control definitions | High |
| GAP-REQTRACE-004 | Test/review methods are documentation-stage only | Define future verification protocol links where applicable | Medium |
| GAP-REQTRACE-005 | Main traceability matrix still needs population alignment | Update traceability matrix in a future controlled PR | High |
| GAP-REQTRACE-007 | PR #208 requirements need controlled traceability alignment | Add PR #208 requirements to this starter before any future migration to the main traceability matrix | High |
| GAP-REQTRACE-006 | Reviewer signoff evidence is not yet recorded | Define review evidence and signoff records | Medium |

---

## 10. Relationship to Traceability Matrix V0.1

This starter does not replace the Traceability Matrix V0.1.

It provides an initial requirements-focused population layer that can later inform controlled updates to the Traceability Matrix V0.1.

The Traceability Matrix V0.1 remains the primary traceability artifact until a future controlled PR updates, supersedes, or reorganizes traceability artifacts.

This document does not normalize, migrate, or replace older `REQ-` style traceability rows. Any such action must occur in a separate controlled PR.

---

## 11. Review Expectations

This document should be reviewed by:

- Governance Owner.
- Documentation Owner.
- Technical Owner.
- Risk Owner.
- Evidence Reviewer.
- Clinical Safety Owner.
- Privacy-Security Owner.
- AI Governance Owner, where AI boundary requirements are referenced.
- Release Owner, where release-gate requirements are referenced.

Review should confirm:

- Requirement IDs are plausible and aligned with the requirements register pattern.
- Source artifacts are identified.
- Planned risk, control, and evidence placeholders are clearly marked as not-yet-executed.
- Limitations are explicit.
- No unsupported readiness claim is introduced.
- No runtime implementation is authorized.

---

## 12. Risks

| Risk | Impact | Control |
|---|---|---|
| Planned IDs are mistaken for completed records | Weak auditability or false completeness | Mark planned IDs clearly and require future population |
| Traceability rows are mistaken for verification evidence | Unsupported readiness claims | Explicit limitations and evidence need fields |
| Future-gated requirements are mistaken for implementation permission | Premature implementation | Future-gated status and non-authorization language |
| Requirement IDs diverge from future requirements register population | Traceability inconsistency | Future controlled update and review |
| Evidence placeholders remain unpopulated | Weak evidence base | Evidence registry population starter and periodic review |

---

## 13. Definition of Done

This document is complete when:

- Purpose is documented.
- Scope is documented.
- Source artifacts are documented.
- Out of scope is documented.
- Traceability population fields are documented.
- Status legend is documented.
- Starter traceability population matrix is created.
- Population rules are documented.
- Current gaps are documented.
- Relationship to Traceability Matrix V0.1 is documented.
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

## 14. After-Merge Action

After this PR is merged, the next documentation step should be separately approved based on the current roadmap and open governance gaps.

A likely next step is to update the Documentation Index to include this requirements traceability population starter.

Do not start the next PR until this PR is merged, reviewed, cleaned, and the repository state is verified.

---

## 15. Status

Documentation-only requirements traceability population starter.
This update adds draft traceability rows for the PR #208 requirements register update.
This update does not replace the Traceability Matrix V0.1.
This update does not complete risk linkage.
This update does not complete evidence linkage.
This update does not complete verification or validation.
This update does not authorize implementation, clinical use, production use, PHI, SQL, API/FHIR, runtime AI, deployment, regulatory compliance, cybersecurity certification, or medical-device readiness.

Planning-stage only.

Future-gated only.

No runtime implementation.

No SQL execution.

No database migration.

No FHIR/API implementation.

No frontend implementation.

No OpenEMR core-sensitive change.

No runtime AI.

No prompt execution.

No AI/model integration.

Not for clinical use.

Not production-ready.

Not clinically validated.

No regulatory compliance claim.

No cybersecurity certification claim.
