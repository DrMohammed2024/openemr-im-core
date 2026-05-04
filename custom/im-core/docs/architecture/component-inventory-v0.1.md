# Component Inventory V0.1

This document is documentation-stage architecture planning guidance.

It does not modify runtime code, GitHub Actions workflows, npm dependencies, database schema, clinical workflows, AI behavior, API behavior, FHIR behavior, frontend behavior, or OpenEMR core behavior.

## 1. Document Status

| Field | Value |
|---|---|
| Document | Component Inventory V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage architecture planning |
| Scope | Candidate component identification only |
| Runtime Status | No runtime implementation |
| Database Status | No SQL or database migration |
| API/FHIR Status | No API or FHIR implementation |
| AI Status | No AI implementation |
| Clinical Status | Not clinical validation evidence |
| Compliance Status | Not regulatory compliance evidence |
| Security Status | Not cybersecurity certification evidence |

Golden rule:

The system must support clinicians. It must not replace clinicians.

---

## 2. Purpose

This document identifies candidate components for OpenEMR IM Core before runtime implementation.

The purpose is to create a controlled inventory of planned or existing documentation-stage components so future work can be reviewed for scope, ownership, risk, dependencies, and implementation readiness.

---

## 3. Scope

This inventory covers:

- Documentation components.
- Governance components.
- Architecture planning components.
- Risk and safety components.
- Security/privacy planning components.
- Non-production planning components.
- Future runtime components.
- Future database components.
- Future API/FHIR components.
- Future AI components.
- Future audit/security components.
- Future training/support components.

---

## 4. Out of Scope

This document does not include:

- Runtime implementation.
- SQL execution.
- Database migration.
- API/FHIR endpoint implementation.
- AI implementation.
- Frontend implementation.
- OpenEMR core-sensitive change.
- Production deployment.
- Clinical validation.
- Regulatory compliance claim.
- Cybersecurity certification claim.
- Commercial deployment claim.

---

## 5. Component Inventory Principle

A component inventory identifies candidate system parts and their current maturity.

Each component should have:

- Component ID.
- Component name.
- Category.
- Current status.
- Owner role.
- Related boundary.
- Related documents.
- Implementation status.
- Required before implementation.

This document identifies components only. It does not implement components.

---

## 6. Status Classification

Use the following status values:

| Status | Meaning |
|---|---|
| Implemented | Runtime implementation exists and is verified |
| Documented only | Described in documentation but not implemented |
| Proposed | Candidate future component |
| Future phase | Deferred until required controls exist |
| Needs verification | Evidence is incomplete or must be checked |
| Not implemented | No implementation exists |

Current project default:

Most components are documented only, proposed, future phase, or not implemented.

---

## 7. Candidate Component Inventory

| ID | Component | Category | Current Status | Owner Role | Related Boundary | Required Before Implementation |
|---|---|---|---|---|---|---|
| CI-001 | Documentation Index | Documentation governance | Documented only | Documentation Owner | Documentation governance boundary | Review cadence and update discipline |
| CI-002 | Evidence Registry | Evidence governance | Documented only | Documentation Owner / Governance Owner | Evidence boundary | Evidence review rules |
| CI-003 | Traceability Matrix | Traceability | Documented only | Governance Owner / Technical Owner | Requirements-to-evidence boundary | Linkage to risks and tests |
| CI-004 | Risk Register | Risk management | Documented only | Risk Owner / Clinical Safety Owner | Risk boundary | Risk control verification plan |
| CI-005 | Clinical Safety Case | Clinical safety | Documented only | Clinical Safety Owner | Clinical use boundary | Validation protocol before clinical use |
| CI-006 | Human Factors Plan | Human factors | Documented only | Human Factors Reviewer | User workflow boundary | Usability validation planning |
| CI-007 | Security / Privacy Gap Register | Security/privacy planning | Documented only | Privacy/Security Owner | Security/privacy boundary | Security requirements and test plan |
| CI-008 | Threat Model and Data Governance | Security/data governance | Documented only | Data Governance Owner | Data boundary | Threat control verification |
| CI-009 | OpenEMR Integration Boundary Map | Architecture | Documented only | Technical Owner | OpenEMR customization boundary | Runtime boundary specification |
| CI-010 | ADR Baseline | Architecture decision records | Documented only | Technical Owner / Governance Owner | Architecture decision boundary | ADR review process |
| CI-011 | System Context Diagram Plan | Architecture planning | Documented only | Architecture Reviewer | System context boundary | Diagram review |
| CI-012 | Data Flow Diagram Level 0 Plan | Architecture planning | Documented only | Architecture Reviewer | Data flow boundary | DFD review and privacy/security review |
| CI-013 | Trust Boundary Register | Architecture/security planning | Documented only | Architecture Reviewer / Privacy-Security Owner | Trust boundary | Control mapping |
| CI-014 | Non-Production Reproducible Install Plan | Non-production planning | Documented only | Operations Owner | Non-production boundary | Reproducible setup verification |
| CI-015 | Synthetic Demo Data Boundary | Data governance | Documented only | Data Governance Owner | Synthetic data boundary | Synthetic data review |
| CI-016 | Training and Support Package | Training/support | Documented only | Training Owner / Support Owner | Training boundary | Training review |
| CI-017 | Commercial Claims Policy | Claims governance | Documented only | Claims Owner / Governance Owner | Claims boundary | Claims review process |
| CI-018 | CI Failure Handling SOP | CI governance | Documented only | Governance Owner / Technical Owner | CI/merge boundary | Operational adoption |
| CI-019 | Merge Readiness Checklist | Merge governance | Documented only | Release Owner / Governance Owner | Merge boundary | Use before merge |
| CI-020 | Future Runtime Component | Runtime | Future phase | Technical Owner | Runtime boundary | Runtime boundary specification |
| CI-021 | Future Database Component | Database | Future phase | Technical Owner / Data Governance Owner | Database boundary | Database boundary and migration policy |
| CI-022 | Future API/FHIR Component | API/FHIR | Future phase | Technical Owner / Privacy-Security Owner | API/FHIR boundary | API/FHIR boundary specification |
| CI-023 | Future AI Support Component | AI | Future phase | Clinical Safety Owner / Technical Owner | AI boundary | AI clinical support boundary specification |
| CI-024 | Future Audit Logging Component | Security/audit | Future phase | Privacy/Security Owner | Audit boundary | Audit logging requirements |
| CI-025 | Future Backup/Restore Component | Operations/security | Future phase | Operations Owner / Privacy-Security Owner | Backup/restore boundary | Backup and restore requirements |
| CI-026 | Future Frontend Component | Frontend | Future phase | Technical Owner | Runtime/user workflow boundary | UI boundary and human factors review |

---

## 8. Component Ownership Rules

Each component should have a clear owner role.

Ownership does not imply implementation readiness.

Owner roles may include:

- Governance Owner.
- Documentation Owner.
- Technical Owner.
- Architecture Reviewer.
- Risk Owner.
- Clinical Safety Owner.
- Privacy/Security Owner.
- Data Governance Owner.
- Operations Owner.
- Release Owner.
- Training Owner.
- Support Owner.
- Claims Owner.
- Human Factors Reviewer.

---

## 9. Component Implementation Rules

No component may move from documentation-stage to implementation-stage without:

- Clear scope.
- Related boundary documentation.
- Risk review.
- Security/privacy review.
- Traceability link.
- Test plan.
- Rollback plan.
- Review approval.
- 0 failing / 0 pending checks for the implementing PR.

Documentation does not equal implementation.

---

## 10. Runtime Component Rules

Runtime components are future-phase only.

Before runtime implementation, the project needs:

- Runtime Boundary Specification V0.1.
- Component dependency map.
- OpenEMR integration review.
- ADR where applicable.
- Installation and rollback plan.
- Test strategy.
- Security/privacy review.
- Clinical safety review if workflow impact exists.

No runtime component is implemented by this document.

---

## 11. Database Component Rules

Database components are future-phase only.

Before SQL, schema, migration, or storage changes, the project needs:

- Database Boundary and Migration Policy V0.1.
- Data classification.
- Backup/restore expectations.
- Rollback plan.
- Migration test strategy.
- Privacy/security review.
- Traceability to risks and requirements.

No database component is implemented by this document.

---

## 12. API/FHIR Component Rules

API/FHIR components are future-phase only.

Before API/FHIR work, the project needs:

- API/FHIR Boundary Specification V0.1.
- Resource mapping plan.
- Authentication and authorization plan.
- Audit requirements.
- Privacy/security review.
- Synthetic test data plan.
- Integration test strategy.
- Clinical safety review where applicable.

No API/FHIR component is implemented by this document.

---

## 13. AI Component Rules

AI components are future-phase only.

Before AI work, the project needs:

- AI Clinical Support Boundary Specification V0.1.
- Allowed and forbidden AI tasks.
- Physician supervision model.
- Draft-only output rule.
- Audit expectations.
- Risk controls.
- Clinical safety review.
- Human factors review.
- Validation plan.

No AI component is implemented by this document.

---

## 14. Security and Privacy Component Rules

Security and privacy components require explicit controls before implementation.

Future security-related components may include:

- RBAC.
- Audit logging.
- Secrets handling.
- Backup and restore.
- Security monitoring.
- Incident response.
- Evidence redaction.
- Access review.

This document does not prove cybersecurity certification.

---

## 15. Relationship to Existing Documentation

This inventory relates to:

- Documentation Index and Review Cadence V0.1.
- Evidence Registry V0.1.
- Traceability Matrix V0.1.
- Risk Register V0.1.
- Clinical Safety Case V0.1.
- Human Factors and Usability Risk Plan V0.1.
- Threat Model and Data Governance V0.1.
- OpenEMR Integration Boundary Map V0.1.
- ADR Baseline V0.1.
- System Context Diagram Plan V0.1.
- Data Flow Diagram Level 0 Plan V0.1.
- Trust Boundary Register V0.1.
- CI Failure Handling and PR Merge Safety SOP V0.1.
- Merge Readiness Checklist V0.1.

---

## 16. Review Questions

Reviewers should ask:

- Is each component clearly named?
- Is each component status accurate?
- Does any component imply implementation without evidence?
- Are future-phase components clearly marked?
- Are runtime, database, API/FHIR, and AI components still non-implemented?
- Are PHI, secrets, and real patient data excluded?
- Are ownership roles clear?
- Are required next controls listed?
- Are unsupported readiness claims avoided?

---

## 17. Exit Criteria

This document is complete when it defines:

- Purpose.
- Scope.
- Non-scope.
- Component inventory principle.
- Status classification.
- Candidate component inventory.
- Ownership rules.
- Implementation rules.
- Runtime rules.
- Database rules.
- API/FHIR rules.
- AI rules.
- Security/privacy component rules.
- Relationship to existing documentation.
- Status and limitations.

---

## 18. After-Merge Action

After merge:

- Update master locally.
- Confirm working tree is clean.
- Confirm no open PRs remain.
- Confirm this document exists on master.
- Create a separate documentation-index update PR if needed.

Do not start runtime implementation from this document alone.

---

## 19. Status and Limitations

This document is planning-only.

It does not prove:

- Clinical safety.
- Clinical validation.
- Usability validation.
- Human factors validation.
- Regulatory compliance.
- Cybersecurity certification.
- Production readiness.
- Pilot readiness.
- Commercial readiness.

No runtime implementation.

No SQL.

No database migration.

No PHI.

No real patient data.

No AI implementation.

No FHIR/API implementation.

No frontend implementation.

No OpenEMR core-sensitive change.
