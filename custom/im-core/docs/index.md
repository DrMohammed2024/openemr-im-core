# OpenEMR IM Core - Documentation Index

## Purpose

This index provides a structured documentation map for OpenEMR IM Core.

It helps maintainers, reviewers, clinical governance participants, and future AI-assisted sessions locate the current documentation baseline without inventing implementation status, clinical validation, production readiness, regulatory compliance, cybersecurity certification, or commercial deployment readiness.

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

## Documentation Map

| Section | Purpose | Current status | Link path | Safety note | Contains implementation? |
|---|---|---|---|---|---|
| AI-Assisted Solo-Owner Governance | Defines eligible-work classification, GPT multidisciplinary advisory review, the mandatory Project Owner decision record, non-independence disclosure, automatic HOLD rules, and future external gates. | OWNER-ADOPTED INTERNAL GOVERNANCE — effective only after recorded owner adoption and merge | `custom/im-core/docs/governance/ai-assisted-solo-owner-governance-policy-v0.1.md` | Documentation/pre-runtime only; no independent assurance, PHI, clinical use, runtime, deployment, validation, compliance, certification, or regulatory authorization. | No. Documentation-only. |
| LS-1 Bounded Local-Synthetic Engineering | Defines the exact eligibility, environment, data, Docker, database/table/row, dependency, Git/GitHub, test, rollback, evidence, review, HOLD, invalidation, and external-gate controls for bounded local-synthetic engineering. | Proposed — effective only after Project Owner adoption and merge | `custom/im-core/docs/governance/ls-1-bounded-local-synthetic-engineering-policy-v0.1.md` | No work-item, Phase 12, clinical, PHI, deployment, validation, compliance, certification, regulatory, or independent-assurance authority by itself. | No. Governance only. |
| IMCORE-LS-001 Candidate Packet | Identifies the first proposed Visit Context seed candidate, its exact first-slice baseline, six-row future database boundary, Phase 11/12 split, local-first work-item control, tests, rollback, and owner-decision fields. | Proposed/reserved; current decision HOLD | `custom/im-core/docs/governance/imcore-ls-001-local-synthetic-authorization-packet-v0.1.md` | No implementation, implementation branch, Docker, database, runtime, clinical use, deployment, or release is authorized or performed. | No. Candidate governance/evidence packet only. |
| Project State | Records the current verified, assumed, and unknown project state for continuity. | Existing | `custom/im-core/docs/project-state/current-project-state.md` | Must separate verified facts from assumptions and unknowns. | No. Documentation-only. |
| Clinical Intelligence | Documents future clinician-reviewed Clinical Intelligence boundaries, rule checks, human-in-the-loop workflow, auditability, explainability, safety boundaries, open loops, summary generation boundary, and trend review planning. | Existing / evolving | `custom/im-core/docs/clinical-intelligence/` | No runtime AI, no autonomous CDS, no diagnosis, no prescribing, no triage. | No. Documentation-only unless explicitly changed in a future reviewed PR. |
| LBF Scripts Governance | Documents seed/script planning, metadata verification, clean-install planning, SQL non-execution boundaries, backup/rollback planning, target table mapping review, non-production environment requirements, and pre-SQL evidence gates. | Existing | `custom/im-core/lbf/scripts/` | SQL execution remains blocked unless explicitly approved after safety gates. | Documentation-only unless separately approved. |
| Golden Catalog Alignment | Maps OpenEMR IM Core against the Golden Digital Health Operating Catalog and identifies gaps before creating the Master Execution Guide. | Added in PR #74 | `custom/im-core/docs/golden-catalog-alignment/` | Gap assessment only. No implementation or readiness claim. | No. Documentation-only. |
| Validation | Future validation plans, evidence templates, acceptance criteria, clinician review, usability review, metadata reproduction, and verification evidence. | Future | `custom/im-core/docs/validation/` | No clinical validation claim until evidence exists and is reviewed. | No. Documentation-only when created. |
| Security / Privacy | Future No-PHI policy, RBAC, least privilege, audit trail expectations, secrets policy, secure configuration, backup, and incident handling. | Future | `custom/im-core/docs/security-privacy/` | No cybersecurity certification or privacy compliance claim without formal review and evidence. | No. Documentation-only when created. |
| Regulatory | Future regulatory boundary, CDS boundary, SaMD caution, risk management planning, AI use policy, and non-claims policy. | Future | `custom/im-core/docs/regulatory/` | No regulatory compliance, medical-device readiness, or market authorization claim by default. | No. Documentation-only when created. |
| Operations | Future daily operating model, user workflows, patient status concepts, operational monitoring, escalation, and support handoffs. | Future | `custom/im-core/docs/operations/` | Operational documentation does not authorize production or pilot deployment. | No. Documentation-only when created. |
| SOPs | Future standard operating procedures for registration, encounter documentation, medication review, results review, open loops, safety-net follow-up, support, and incident response. | Future | `custom/im-core/docs/sops/` | SOPs require clinical, operational, privacy, and legal review before real care use. | No. Documentation-only when created. |
| Deployment | Future non-production reproducible installation, clean-install validation, backup/restore, demo environment, and deployment boundary documentation. | Future | `custom/im-core/docs/deployment/` | No deployment readiness or clean-install reproducibility claim until evidence exists. | No. Documentation-only when created. |
| Demo Data | Future synthetic data rules, demo reset behavior, fake patient examples, and demo safety restrictions. | Future | `custom/im-core/docs/demo-data/` | Synthetic data only. No real patient data or PHI. | No. Documentation-only when created. |
| Training | Future training package for clinicians, nurses, reception, billing, admin, IT, support, and AI safety. | Future | `custom/im-core/docs/training/` | Training does not prove clinical validation, regulatory compliance, or production readiness. | No. Documentation-only when created. |
| Support | Future support workflows, escalation paths, incident reporting, user feedback, issue triage, and severity levels. | Future | `custom/im-core/docs/support/` | Support documentation does not authorize commercial service delivery without legal, security, privacy, and operational review. | No. Documentation-only when created. |
| Commercial | Future commercial claims policy, GPL/OpenEMR positioning, pilot packaging, paid pilot boundaries, and client-facing non-claims. | Future | `custom/im-core/docs/commercial/` | No commercial deployment readiness, regulatory claim, clinical claim, cybersecurity claim, or legal readiness claim without evidence and review. | No. Documentation-only when created. |

---

## Global Safety Boundary

This documentation index does not itself authorize:

- PHI
- Real patient data
- Credentials
- Sensitive logs
- Database dumps
- Executable SQL
- SQL execution
- Runtime AI
- Machine learning models
- Predictive models
- Autonomous clinical decision support
- Autonomous diagnosis
- Autonomous treatment recommendation
- Autonomous prescribing
- Autonomous emergency triage
- Patient-facing AI
- OpenEMR core-sensitive changes
- Production deployment
- Pilot deployment
- Commercial deployment
- Production-readiness claims
- Clinical validation claims
- Regulatory compliance claims
- Cybersecurity certification claims
- Commercial deployment readiness claims

---

## Recommended Next Documentation Sequence

1. Resolve PR #73 - Trend Review Plan.
2. PR #74 - Golden Catalog Gap Assessment V0.1 + Documentation Index.
3. PR #75 - Master Execution Guide V0.1.
4. PR #76 - Validation Evidence Plan.
5. PR #77 - No-PHI / Safe Repository Development Policy.
6. PR #78 - Regulatory and CDS Boundary Statement.
7. PR #79 - Security / Privacy / RBAC / Audit / Backup Baseline.
8. PR #80 - Testing and Verification Plan.
9. PR #81 - Failure Modes and Safe Response Library.
10. PR #82 - Daily Operating Model and Patient Status Model.
11. PR #83 - SOP Framework.
12. PR #84 - Data Model Starter and OpenEMR Mapping.
13. PR #85 - Clinical Documentation Quality Rules.
14. PR #86 - Minimum Viable Safe Platform and Release Readiness Gates.
15. PR #87 - Governance Ownership Model.
16. PR #88 - Registration, duplicate prevention, encounter, allergy, medication, and vitals workflow plans.
17. PR #89 - Follow-up, no-show, open loops, and safety-net workflow plans.
18. PR #90 - Lab result and critical result plans.
19. PR #91 - Pharmacy and billing linkage plans.
20. PR #92 - RBAC, audit, and backup evidence templates.
21. PR #93 - Non-production reproducible install plan.
22. PR #94 - Synthetic demo data and demo environment plan.
23. PR #95 - Training and support package.
24. PR #96 - Commercial claims, GPL positioning, and pilot packaging memo.

---

## Status

```text
Documentation-only index.
No runtime implementation.
No SQL.
No OpenEMR core changes.
Not production-ready.
Not clinically validated.
Not regulatory compliant by default.
Not cybersecurity certified.
Not commercially deployment-ready.
```
