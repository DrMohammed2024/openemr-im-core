# OpenEMR IM Core — Documentation Index

## Purpose

This index provides a structured documentation map for OpenEMR IM Core.

It is intended to help maintainers, reviewers, clinical governance participants, and future AI-assisted sessions locate the current documentation baseline without inventing implementation status, clinical validation, production readiness, regulatory compliance, cybersecurity certification, or commercial deployment readiness.

This index is documentation-only.

It does not authorize SQL execution, runtime AI, autonomous clinical decision support, OpenEMR core-sensitive changes, production deployment, pilot deployment, or commercial deployment.

---

## Documentation Status Legend

| Status | Meaning |
|---|---|
| Existing | Documentation path or documentation category exists in the project or has prior documented evidence. |
| Planned | Documentation is expected in a near-term PR but may not exist yet. |
| Future | Documentation is expected later and must not be treated as implemented. |
| Unknown | Current repository evidence is insufficient. |

---

## 1. Project State

| Field | Value |
|---|---|
| Purpose | Records the current verified, assumed, and unknown project state for continuity. |
| Current status | Existing |
| Link path | `custom/im-core/docs/project-state/current-project-state.md` |
| Safety note | Must separate verified facts from assumptions and unknowns. Must not claim production readiness, clinical validation, clean-install reproducibility, regulatory compliance, cybersecurity certification, or commercial readiness without evidence. |
| Contains implementation? | No. Documentation-only. |

---

## 2. Clinical Intelligence

| Field | Value |
|---|---|
| Purpose | Documents the future clinician-reviewed Clinical Intelligence architecture, rule boundaries, human-in-the-loop workflow, auditability, explainability, safety boundaries, open loops, summary generation boundary, and trend review planning. |
| Current status | Existing / evolving |
| Link path | `custom/im-core/docs/clinical-intelligence/` |
| Safety note | Clinical Intelligence must remain clinician-reviewed, explainable, traceable, non-autonomous, and non-production unless formal evidence gates are completed. |
| Contains implementation? | No. Documentation-only unless explicitly changed in a future reviewed PR. |

---

## 3. LBF / Scripts Governance

| Field | Value |
|---|---|
| Purpose | Documents seed/script planning, metadata verification, clean-install planning, SQL non-execution boundaries, backup/rollback planning, target table mapping review, non-production environment requirements, and pre-SQL evidence gates. |
| Current status | Existing |
| Link path | `custom/im-core/lbf/scripts/` |
| Safety note | These files do not approve SQL execution. SQL creation or execution requires explicit future approval, non-production environment, backup, rollback plan, target table mapping review, and post-execution verification. |
| Contains implementation? | Documentation-only unless a future approved seed/script is added. |

---

## 4. Golden Catalog Alignment

| Field | Value |
|---|---|
| Purpose | Maps OpenEMR IM Core against the Golden Digital Health Operating Catalog and identifies gaps before creating a Master Execution Guide. |
| Current status | Planned in PR #74 |
| Link path | `custom/im-core/docs/golden-catalog-alignment/` |
| Safety note | Gap assessment only. It must not claim Golden Catalog equivalence, production readiness, validation, compliance, certification, or commercial readiness. |
| Contains implementation? | No. Documentation-only. |

---

## 5. Validation

| Field | Value |
|---|---|
| Purpose | Future documentation for validation evidence planning, verification evidence, clinician review, usability review, metadata reproduction, and acceptance criteria. |
| Current status | Future |
| Link path | `custom/im-core/docs/validation/` |
| Safety note | No clinical validation claim is allowed until formal evidence exists and is reviewed. |
| Contains implementation? | No. Documentation-only when created. |

---

## 6. Security / Privacy

| Field | Value |
|---|---|
| Purpose | Future documentation for No-PHI development policy, privacy baseline, RBAC, least privilege, audit trail expectations, secrets policy, secure configuration, and incident handling. |
| Current status | Future |
| Link path | `custom/im-core/docs/security-privacy/` |
| Safety note | No cybersecurity certification, HIPAA/GDPR/local-law compliance, or privacy compliance claim is allowed without formal review and evidence. |
| Contains implementation? | No. Documentation-only when created. |

---

## 7. Regulatory

| Field | Value |
|---|---|
| Purpose | Future documentation for regulatory and clinical decision support boundaries, medical-device-software caution, risk management planning, and non-claims policy. |
| Current status | Future |
| Link path | `custom/im-core/docs/regulatory/` |
| Safety note | No regulatory compliance, DIN EN 62304 compliance, ISO 14971 compliance, FDA/MDR readiness, or medical-device readiness is claimed by default. |
| Contains implementation? | No. Documentation-only when created. |

---

## 8. Operations

| Field | Value |
|---|---|
| Purpose | Future documentation for daily operating model, user workflows, patient status concepts, operational monitoring, escalation, and support handoffs. |
| Current status | Future |
| Link path | `custom/im-core/docs/operations/` |
| Safety note | Operational documentation does not authorize production or pilot deployment. |
| Contains implementation? | No. Documentation-only when created. |

---

## 9. SOPs

| Field | Value |
|---|---|
| Purpose | Future standard operating procedures for registration, encounter documentation, medication review, results review, open loops, safety-net follow-up, support, and incident response. |
| Current status | Future |
| Link path | `custom/im-core/docs/sops/` |
| Safety note | SOPs require clinical, operational, privacy, and legal review before use in real care settings. |
| Contains implementation? | No. Documentation-only when created. |

---

## 10. Deployment

| Field | Value |
|---|---|
| Purpose | Future documentation for non-production reproducible installation, clean-install validation, backup/restore, demo environment, and deployment boundary. |
| Current status | Future |
| Link path | `custom/im-core/docs/deployment/` |
| Safety note | No deployment readiness or clean-install reproducibility claim is allowed until evidence exists. |
| Contains implementation? | No. Documentation-only when created. |

---

## 11. Demo Data

| Field | Value |
|---|---|
| Purpose | Future documentation for synthetic demo data rules, demo reset behavior, fake patient examples, and demo safety restrictions. |
| Current status | Future |
| Link path | `custom/im-core/docs/demo-data/` |
| Safety note | Demo data must be synthetic. No real patient data or PHI is allowed. |
| Contains implementation? | No. Documentation-only when created. |

---

## 12. Training

| Field | Value |
|---|---|
| Purpose | Future documentation for clinician, admin, support, and reviewer training. |
| Current status | Future |
| Link path | `custom/im-core/docs/training/` |
| Safety note | Training does not prove clinical validation, regulatory compliance, or production readiness. |
| Contains implementation? | No. Documentation-only when created. |

---

## 13. Support

| Field | Value |
|---|---|
| Purpose | Future documentation for support workflows, escalation paths, incident reporting, user feedback, and issue triage. |
| Current status | Future |
| Link path | `custom/im-core/docs/support/` |
| Safety note | Support documentation does not authorize commercial service delivery without legal, security, privacy, and operational review. |
| Contains implementation? | No. Documentation-only when created. |

---

## 14. Commercial

| Field | Value |
|---|---|
| Purpose | Future documentation for commercial claims policy, GPL/OpenEMR positioning, pilot packaging, paid pilot boundaries, and client-facing non-claims. |
| Current status | Future |
| Link path | `custom/im-core/docs/commercial/` |
| Safety note | No commercial deployment readiness, regulatory claim, clinical claim, cybersecurity claim, or legal readiness claim is allowed without evidence and formal review. |
| Contains implementation? | No. Documentation-only when created. |

---

## Global Safety Boundary

This documentation index does not authorize:

- PHI
- real patient data
- credentials
- sensitive logs
- database dumps
- executable SQL
- SQL execution
- runtime AI
- machine learning model
- predictive model
- autonomous clinical decision support
- autonomous diagnosis
- autonomous treatment recommendation
- autonomous prescribing
- autonomous emergency triage
- patient-facing AI
- OpenEMR core-sensitive changes
- production deployment
- pilot deployment
- commercial deployment
- production-readiness claim
- clinical validation claim
- regulatory compliance claim
- cybersecurity certification claim
- commercial deployment readiness claim

---

## Recommended Next Documentation Sequence

1. Resolve PR #73 — Trend Review Plan
2. PR #74 — Golden Catalog Gap Assessment V0.1 + Documentation Index
3. PR #75 — Master Execution Guide V0.1
4. PR #76 — Validation Evidence Plan
5. PR #77 — No-PHI / Safe Repository Development Policy
6. PR #78 — Regulatory and CDS Boundary Statement
7. PR #79 — Security / Privacy / RBAC / Audit / Backup Baseline
8. PR #80 — Testing and Verification Plan
9. PR #81 — Failure Modes and Safe Response Library
10. PR #82 — Daily Operating Model and Patient Status Model
11. PR #83 — SOP Framework
12. PR #84 — Data Model Starter and OpenEMR Mapping
13. PR #85 — Clinical Documentation Quality Rules
14. PR #86 — Minimum Viable Safe Platform and Release Readiness Gates
15. PR #87 — Governance Ownership Model
16. PR #88 — Registration, duplicate prevention, encounter, allergy, medication, and vitals workflow plans
17. PR #89 — Follow-up, no-show, open loops, and safety-net workflow plans
18. PR #90 — Lab result and critical result plans
19. PR #91 — Pharmacy and billing linkage plans
20. PR #92 — RBAC, audit, and backup evidence templates
21. PR #93 — Non-production reproducible install plan
22. PR #94 — Synthetic demo data and demo environment plan
23. PR #95 — Training and support package
24. PR #96 — Commercial claims, GPL positioning, and pilot packaging memo
