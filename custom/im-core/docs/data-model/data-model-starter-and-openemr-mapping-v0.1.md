# Data Model Starter and OpenEMR Mapping V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines a documentation-only starter data model and OpenEMR mapping plan for OpenEMR IM Core.

It supports future planning for Internal Medicine Follow-Up V1, operational workflows, documentation quality, patient status concepts, open loops, safety-net follow-up, auditability, and validation evidence.

This document does not implement database changes.

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
- Frontend implementation.
- FHIR/API implementation.
- OpenEMR core-sensitive changes.
- Demo deployment.
- Pilot deployment.
- Production deployment.
- Commercial deployment.

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

This starter data model covers documentation-only planning for:

- Internal Medicine Follow-Up V1.
- Layout ID `LBFim_followup_v1`.
- Known LBF group structure.
- Patient status concepts.
- Encounter documentation concepts.
- Medication review documentation.
- Allergy review documentation.
- Vitals review documentation.
- Assessment and plan documentation.
- Follow-up and safety-net documentation.
- Open-loop concepts.
- Pending result concepts.
- Referral follow-up concepts.
- Audit and evidence concepts.
- Future validation evidence.
- Future OpenEMR-native mapping review.

This document is not a database schema.

---

## 3. Out of Scope

This document does not create:

- SQL scripts.
- Database migrations.
- OpenEMR table changes.
- Runtime services.
- Frontend dashboards.
- FHIR resources.
- API endpoints.
- AI models.
- Predictive models.
- Production data model approval.
- Regulatory data model approval.
- Clinical validation evidence.

---

## 4. Known Project Baseline

| Item | Current known value |
|---|---|
| Project | OpenEMR IM Core |
| Base system | Controlled OpenEMR fork |
| Current clinical module | Internal Medicine Follow-Up V1 |
| Layout ID | `LBFim_followup_v1` |
| ROW_COUNT | 51 |
| GROUP_COUNT | 9 |
| GROUP_IDS | 1,2,3,4,5,6,7,8,9 |
| FIELD_DISTRIBUTION | 4,7,7,5,6,6,4,7,5 |
| METADATA_VERIFICATION_STATUS | PASS, project-owner-provided baseline |
| Runtime implementation | Not introduced by this document |
| SQL execution | Not approved |
| OpenEMR core changes | Not approved |
| Clinical validation | Not claimed |

This baseline must not be treated as production readiness, clinical validation, clean-install reproducibility, security certification, or regulatory compliance.

---

## 5. Known Internal Medicine Follow-Up V1 Groups

| Group number | Group name | Data model relevance |
|---|---|---|
| 1 | Visit Context | Visit reason, encounter context, continuity context. |
| 2 | Vital Signs Review | Vitals review, abnormality acknowledgement, trend planning. |
| 3 | Chronic Conditions Review | Chronic disease follow-up, status, monitoring needs. |
| 4 | Medication Review | Medication review, adherence, side effects, monitoring needs. |
| 5 | Symptoms Review | New or ongoing symptoms, red-flag documentation boundary. |
| 6 | Physical Exam Summary | Exam findings and abnormality documentation. |
| 7 | Assessment | Clinical assessment summary, clinician-authored interpretation. |
| 8 | Plan | Follow-up plan, orders plan, medication plan, patient instructions. |
| 9 | Patient Safety and Follow-up | Safety-net instructions, follow-up timing, open-loop awareness. |

---

## 6. Starter Conceptual Entities

| Conceptual entity | Purpose | OpenEMR mapping status | Implementation status |
|---|---|---|---|
| Patient | Represents the person receiving care. | Native OpenEMR patient model expected, not reviewed here. | Not implemented by this document. |
| Encounter | Represents a clinical visit or contact. | Native OpenEMR encounter model expected, not reviewed here. | Not implemented by this document. |
| LBF Form Instance | Represents an Internal Medicine Follow-Up V1 documentation instance. | LBF-based form concept. | Existing project documentation only. |
| Visit Context | Captures reason and continuity context. | LBF group 1. | Documentation-only. |
| Vitals Review | Captures vitals review documentation. | LBF group 2 and possibly native vitals, not verified here. | Documentation-only. |
| Chronic Condition Review | Captures chronic disease follow-up status. | LBF group 3. | Documentation-only. |
| Medication Review | Captures medication review and medication-related concerns. | LBF group 4 and possibly native medication list, not verified here. | Documentation-only. |
| Symptoms Review | Captures symptom review documentation. | LBF group 5. | Documentation-only. |
| Physical Exam Summary | Captures physical exam summary documentation. | LBF group 6. | Documentation-only. |
| Assessment | Captures clinician-authored assessment. | LBF group 7. | Documentation-only. |
| Plan | Captures clinician-authored plan. | LBF group 8. | Documentation-only. |
| Safety-Net Follow-up | Captures follow-up and safety-net documentation. | LBF group 9. | Documentation-only. |
| Open Loop | Represents an unresolved follow-up item. | Future mapping required. | Not implemented. |
| Pending Result | Represents a result expected but not yet closed. | Future OpenEMR-native mapping required. | Not implemented. |
| Referral Follow-up | Represents referral status and responsibility. | Future OpenEMR-native mapping required. | Not implemented. |
| Patient Status | Represents operational status such as scheduled, checked in, follow-up needed, pending result. | Future workflow mapping required. | Not implemented. |
| Audit Evidence | Represents evidence of review, update, or closure. | Future audit mapping required. | Not implemented. |
| Validation Evidence | Represents future verification and validation artifacts. | Documentation repository and future review process. | Not implemented. |

---

## 7. OpenEMR Mapping Principles

Future mapping must follow these principles:

1. Prefer native OpenEMR capabilities before custom implementation.
2. Prefer configuration and LBF where clinically appropriate.
3. Avoid OpenEMR core-sensitive changes unless justified and reviewed.
4. Do not create new database structures before documentation, safety, privacy, and validation review.
5. Do not duplicate native OpenEMR patient, encounter, medication, allergy, vitals, billing, audit, or access-control models without justification.
6. Do not execute SQL from this document.
7. Do not use real patient data for mapping examples.
8. Keep all examples synthetic.
9. Keep claims evidence-gated.
10. Preserve clinician review as the final clinical authority.

---

## 8. Candidate Mapping Matrix

| Data concept | Candidate OpenEMR source | Current status | Evidence needed |
|---|---|---|---|
| Patient identity | Native OpenEMR patient record | Not reviewed in this document. | Patient workflow and RBAC review. |
| Encounter | Native OpenEMR encounter | Not reviewed in this document. | Encounter workflow verification. |
| Internal Medicine Follow-Up V1 | LBF form layout `LBFim_followup_v1` | Documented baseline exists. | Runtime LBF verification and clean-install reproduction. |
| Vitals | Native vitals and/or LBF review group | Not verified here. | Source-of-truth mapping. |
| Medication list | Native OpenEMR medication list and/or LBF review | Not verified here. | Medication workflow review. |
| Allergy status | Native allergy list and/or future SOP | Not verified here. | Allergy workflow review. |
| Chronic conditions | Problem list and/or LBF chronic review | Not verified here. | Problem list mapping review. |
| Assessment | LBF assessment group and encounter note context | Documented conceptually. | Clinical documentation review. |
| Plan | LBF plan group and encounter note context | Documented conceptually. | Clinical documentation review. |
| Safety-net follow-up | LBF patient safety and follow-up group | Documented conceptually. | Clinician review and workflow evidence. |
| Open loops | Future operational tracking concept | Not implemented. | Workflow, owner, status, and audit model. |
| Pending results | Future lab/result workflow concept | Not implemented. | Native result workflow review. |
| Referrals | Future referral workflow concept | Not implemented. | Referral workflow review. |
| Audit trail | Native OpenEMR audit capability, if applicable | Not verified here. | Sanitized audit evidence. |
| RBAC | Native OpenEMR access controls, if applicable | Not verified here. | Role matrix and access tests. |
| Backup/restore | Deployment-dependent process | Not verified here. | Non-production backup/restore evidence. |
| Validation evidence | Repository documentation and future evidence templates | Planned. | Validation Evidence Plan execution. |

---

## 9. Data Quality Principles

Future data model work must preserve:

- Clear source-of-truth identification.
- No duplicate documentation unless justified.
- Traceability from clinical field to review output.
- Separation of clinician-authored content from system-generated suggestions.
- Explicit status ownership for open-loop items.
- Explicit timestamps for review events where applicable.
- Explicit reviewer identity where applicable.
- No unsupported inference from incomplete documentation.
- No autonomous clinical decisions.
- No hidden AI-derived conclusions.
- No unreviewed patient-facing output.

---

## 10. Data Governance Boundaries

Future implementation planning must define:

| Governance topic | Required boundary |
|---|---|
| PHI | No PHI in GitHub or documentation examples. |
| Synthetic data | Required for examples and demos. |
| Access control | Role-based access must be reviewed before use. |
| Audit | Review and modification actions must be traceable where applicable. |
| Retention | Must be defined before operational use. |
| Backup | Must be defined and tested before deployment claims. |
| Data export | Must avoid PHI and database dumps unless formally approved outside GitHub. |
| AI use | No runtime AI without governance, validation, bias review, monitoring, and human review. |
| Patient-facing data | No patient-facing AI or automated messaging without clinical, privacy, and legal review. |

---

## 11. Evidence Required Before Implementation

Before any implementation based on this data model starter, the project must provide:

- OpenEMR-native feature review.
- LBF field-level mapping review.
- Runtime LBF verification.
- Clean-install reproduction plan.
- No-PHI development policy.
- RBAC baseline.
- Audit trail baseline.
- Backup/restore baseline.
- Validation evidence plan.
- Failure modes review.
- SOP alignment.
- Privacy and security review.
- Regulatory and CDS boundary review.
- Human factors and workflow review.

---

## 12. Risks

| Risk | Severity | Mitigation |
|---|---|---|
| Mapping duplicates native OpenEMR data | High | Review native OpenEMR capabilities first. |
| LBF fields are treated as validated clinical logic | High | Keep clinician review and validation boundary. |
| Open loops are implied as implemented | High | Mark as future workflow concept only. |
| Pending results are implied as tracked | High | Require native workflow review and evidence. |
| Patient status is used as triage | Critical | Prohibit autonomous triage and risk classification. |
| Metadata baseline is overstated | Medium | Label as project-owner-provided unless independently reproduced. |
| SQL is introduced prematurely | High | Keep SQL execution blocked. |
| OpenEMR core is modified unnecessarily | High | Preserve upstream-first and fork-minimal posture. |
| PHI enters examples | Critical | Use synthetic examples only and scan repository. |
| AI is introduced before governance | Critical | Keep AI future-only and human-reviewed. |

---

## 13. Definition of Done

This starter data model is complete when:

- Conceptual entities are listed.
- OpenEMR mapping principles are defined.
- Candidate mapping matrix is documented.
- Data quality principles are documented.
- Data governance boundaries are documented.
- Evidence required before implementation is documented.
- Risks are listed.
- No runtime implementation is introduced.
- No SQL is introduced.
- No database migration is introduced.
- No runtime AI is introduced.
- No frontend or FHIR/API implementation is introduced.
- No PHI, credentials, sensitive logs, or database dumps are included.
- No OpenEMR core-sensitive files are modified.
- No unsupported readiness, validation, compliance, certification, or commercial claims are introduced.

---

## 14. After-Merge Action

After this PR is merged, the next planned documentation step is PR #85:

docs(im-core): add clinical documentation quality rules v0.1

Do not start PR #85 until PR #84 is merged and reviewed.

---

## 15. Status

Documentation-only data model starter and OpenEMR mapping plan.

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
