# Standards Applicability and Awareness Matrix V0.1 - OpenEMR IM Core

## 1. Purpose

This document provides a standards applicability and awareness matrix for OpenEMR IM Core.

The purpose is to identify potentially relevant standards, guidance areas, and governance topics that may need future review if the project progresses beyond documentation-stage planning.

This document is standards-aware planning only.

This document does not claim compliance with any standard, regulation, guidance, law, certification scheme, cybersecurity framework, medical-device framework, or clinical validation framework.

This document does not authorize implementation, runtime verification, clinical validation, production use, pilot use, demo use, regulatory compliance claims, cybersecurity certification claims, commercial readiness claims, medical-device readiness claims, or clinical-use authorization.

---

## 2. Scope

This document covers current-stage awareness of standards and guidance areas that may become relevant to future work, including:

- Medical device software lifecycle planning.
- Risk management planning.
- Quality management system planning.
- Usability and human factors planning.
- Health software product safety planning.
- Clinical evaluation planning.
- Cybersecurity planning.
- Privacy and data governance planning.
- Interoperability planning.
- AI/ML and decision automation governance planning, if ever proposed.

This document is a planning and awareness artifact only.

---

## 3. Out of Scope

This document does not create:

- Regulatory classification.
- Regulatory submission.
- Regulatory clearance.
- Regulatory approval.
- Certification.
- QMS certification.
- IEC 62304 compliance.
- ISO 14971 compliance.
- ISO 13485 compliance.
- IEC 62366 compliance.
- IEC 82304 compliance.
- Cybersecurity certification.
- Clinical evaluation evidence.
- Clinical validation evidence.
- Production readiness evidence.
- Medical-device readiness evidence.
- Runtime implementation evidence.

This document does not determine that OpenEMR IM Core is a medical device.

This document does not determine that OpenEMR IM Core is not a medical device.

Any regulatory classification or applicability decision must be made later by qualified human reviewers using jurisdiction-specific analysis, intended use, claims, functionality, risk, evidence, and applicable law.

---

## 4. Current Project Boundary

Current project state:

- Documentation-stage only.
- Planning-stage only.
- Future-gated only.
- Not for clinical use.
- Not production-ready.
- Not clinically validated.
- No regulatory compliance claim.
- No cybersecurity certification claim.
- No medical-device readiness claim.

Current prohibited activities:

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
- Autonomous diagnosis.
- Autonomous treatment recommendation.
- Autonomous prescribing.
- Autonomous emergency triage.
- Patient-facing AI.
- PHI or real patient data.
- Credentials or secrets.
- Sensitive logs.
- Database dumps.

---

## 5. Source Artifacts

| Source ID | Source artifact | File path | Relationship |
|---|---|---|---|
| SRC-REG-001 | Regulatory and CDS Boundary Statement V0.1 | custom/im-core/docs/regulatory/regulatory-and-cds-boundary-statement-v0.1.md | Defines current regulatory and CDS boundary language. |
| SRC-ROADMAP-001 | Comprehensive Governance and Future Clinical-Use Readiness Roadmap V0.1 | custom/im-core/docs/roadmap/comprehensive-governance-and-future-clinical-use-readiness-roadmap-v0.1.md | Defines future-gated roadmap and readiness boundaries. |
| SRC-INV-001 | Documentation Inventory and Artifact Status Matrix V0.1 | custom/im-core/docs/index/documentation-inventory-and-artifact-status-matrix-v0.1.md | Identifies artifact status, gaps, and planning limitations. |
| SRC-REQTRACE-001 | Requirements Traceability Population Starter V0.1 | custom/im-core/docs/requirements/requirements-traceability-population-starter-v0.1.md | Links requirements to planned risks, controls, reviews, evidence needs, and limitations. |
| SRC-RISK-001 | Risk Register V0.1 | custom/im-core/docs/risk/risk-register-v0.1.md | Provides current risk register structure or baseline. |
| SRC-EVID-001 | Evidence Registry and Templates V0.1 | custom/im-core/docs/evidence/evidence-registry-and-templates-v0.1.md | Provides current evidence registry and evidence template structure. |

---

## 6. Standards Awareness Matrix

| Area | Potentially relevant standard or guidance area | Current applicability status | Current evidence status | Future review need | Current limitation |
|---|---|---|---|---|---|
| Medical device software lifecycle | IEC 62304 / medical device software lifecycle principles | Awareness only | No lifecycle compliance evidence | Future software lifecycle applicability review | No IEC 62304 compliance claim |
| Risk management | ISO 14971 / medical device risk management principles | Awareness only | Risk structure exists; populated risk evidence incomplete | Future risk management applicability review | No ISO 14971 compliance claim |
| Quality management | ISO 13485 / quality management system principles | Awareness only | No certified QMS evidence | Future QMS strategy review | No ISO 13485 compliance claim |
| Usability and human factors | IEC 62366 / usability engineering principles | Awareness only | Human factors planning may exist; usability validation not executed | Future human factors applicability review | No IEC 62366 compliance claim |
| Health software safety and product quality | IEC 82304 / health software product safety principles | Awareness only | No product safety validation evidence | Future health software safety review | No IEC 82304 compliance claim |
| Clinical evaluation | Clinical evaluation and clinical performance planning | Awareness only | No clinical evaluation evidence | Future clinical evaluation strategy | No clinical validation claim |
| Cybersecurity | Medical software cybersecurity and secure development guidance | Awareness only | Security planning and scanning exist; certification evidence absent | Future cybersecurity framework mapping | No cybersecurity certification claim |
| Privacy and data protection | Privacy, PHI, data governance, and no-PHI development controls | Awareness only | No-PHI boundary exists; production privacy evidence absent | Future jurisdiction-specific privacy review | No production privacy compliance claim |
| Interoperability | FHIR/API and health data interoperability standards | Future-gated only | No FHIR/API implementation evidence | Future interoperability applicability review | No FHIR/API implementation authorized |
| AI/ML and decision automation | AI governance, GMLP-aware planning, decision automation boundaries | Future-gated only | AI boundary documentation exists; no AI runtime evidence | Future AI/ML applicability review only if AI is proposed | No AI/ML implementation or SaMD-AI claim |
| Post-deployment surveillance | Post-market or post-deployment monitoring principles | Future phase only | No deployment or surveillance evidence | Future surveillance plan if deployment is authorized | No deployment or post-market claim |
| Configuration management | Software configuration and change control principles | Awareness only | Git/PR governance exists; lifecycle configuration evidence incomplete | Future configuration management plan | No lifecycle compliance claim |
| Problem resolution | Software problem resolution and CAPA-like principles | Awareness only | No production problem-resolution evidence | Future problem resolution process | No CAPA or production support claim |
| SOUP/open source management | Open source and third-party software governance | Awareness only | OpenEMR dependency context exists; SOUP evidence incomplete | Future SOUP/open source inventory and evaluation | No SOUP compliance claim |

---

## 7. Applicability Status Legend

| Status | Meaning |
|---|---|
| Awareness only | The project recognizes that this area may be relevant later, but no compliance or applicability conclusion is made. |
| Future-gated only | The area must not be implemented or claimed until a future phase gate approves it. |
| Not currently applicable for execution | The area may be discussed for planning but is not active for implementation or evidence execution. |
| Requires human review | A qualified human reviewer must decide applicability later based on intended use, functionality, claims, risk, evidence, and jurisdiction. |
| Not determined | No final applicability decision has been made. |

---

## 8. Required Future Applicability Review Inputs

A future standards applicability review should not occur until the following inputs are available:

- Approved intended use.
- Approved user groups.
- Approved claims boundary.
- Functional scope.
- Clinical workflow scope.
- Software lifecycle scope.
- Risk classification rationale.
- Risk register population.
- Requirements baseline.
- Traceability baseline.
- Evidence plan.
- Verification plan.
- Validation plan, if applicable.
- Human factors plan.
- Security and privacy plan.
- Deployment boundary, if applicable.
- Regulatory jurisdiction assumptions.
- Qualified human reviewer assignment.

---

## 9. Current Gaps

| Gap ID | Gap | Required future action | Priority |
|---|---|---|---|
| GAP-STD-001 | No formal standards applicability decision exists | Create future standards applicability review after intended use and functional scope mature | High |
| GAP-STD-002 | No IEC 62304 software lifecycle evidence exists | Create software lifecycle planning artifacts only if future-gated development is approved | High |
| GAP-STD-003 | No ISO 14971 risk management compliance evidence exists | Populate risk register and risk controls before any risk management claim | High |
| GAP-STD-004 | No ISO 13485 QMS evidence exists | Define QMS strategy if project moves toward regulated development | Medium |
| GAP-STD-005 | No IEC 62366 usability validation evidence exists | Create usability and human factors evidence plan before runtime work | Medium |
| GAP-STD-006 | No IEC 82304 product safety evidence exists | Review health software product safety needs in future readiness phases | Medium |
| GAP-STD-007 | No cybersecurity certification evidence exists | Create future cybersecurity framework mapping and evidence plan | Medium |
| GAP-STD-008 | No AI/ML applicability decision exists | Keep AI/ML future-gated unless separately approved | High |
| GAP-STD-009 | No jurisdiction-specific regulatory pathway memo exists | Create regulatory pathway memo only after intended use and claims mature | Medium |

---

## 10. Review Rules

Reviewers must not interpret this matrix as:

- Compliance evidence.
- Certification evidence.
- Regulatory clearance evidence.
- Medical-device readiness evidence.
- Clinical validation evidence.
- Production readiness evidence.
- Cybersecurity certification evidence.
- Implementation authorization.
- Clinical-use authorization.

Reviewers should use this matrix to identify future review topics, not to assert current compliance.

---

## 11. Relationship to Future Work

This matrix may inform future documents, including:

- Standards applicability review.
- Regulatory pathway memo.
- Software development plan.
- Software safety classification rationale.
- Risk management plan.
- Human factors plan.
- Verification plan.
- Validation plan.
- Cybersecurity plan.
- SOUP/open source management plan.
- Configuration management plan.
- Problem resolution plan.

Each future document must be created through a separate controlled PR.

---

## 12. Risks

| Risk | Impact | Control |
|---|---|---|
| Standards awareness is mistaken for standards compliance | Unsupported compliance or readiness claims | Explicit no-compliance language |
| Standards list is treated as complete | Missing future regulatory or safety obligations | Mark as awareness-only and require future human review |
| Project is prematurely classified as a medical device | Incorrect regulatory assumptions | Defer classification to qualified future review |
| Project is prematurely classified as not a medical device | Missed regulatory obligations | Defer classification to qualified future review |
| AI/ML awareness is mistaken for AI/ML authorization | Premature AI implementation | Future-gated AI/ML boundary |
| Cybersecurity planning is mistaken for certification | Unsupported cybersecurity claims | Explicit no-certification language |

---

## 13. Definition of Done

This document is complete when:

- Purpose is documented.
- Scope is documented.
- Out of scope is documented.
- Current project boundary is documented.
- Source artifacts are documented.
- Standards awareness matrix is documented.
- Applicability status legend is documented.
- Future applicability review inputs are documented.
- Current gaps are documented.
- Review rules are documented.
- Relationship to future work is documented.
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
- No standards compliance claim is introduced.
- No certification claim is introduced.

---

## 14. After-Merge Action

After this PR is merged, the next documentation step should be separately approved based on the current roadmap and open governance gaps.

A likely next step is to update the Documentation Index to include this standards applicability and awareness matrix.

Do not start the next PR until this PR is merged, reviewed, cleaned, and the repository state is verified.

---

## 15. Status

Documentation-only standards applicability and awareness matrix.

Planning-stage only.

Future-gated only.

Standards-aware only.

No standards compliance claim.

No certification claim.

No medical-device readiness claim.

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
