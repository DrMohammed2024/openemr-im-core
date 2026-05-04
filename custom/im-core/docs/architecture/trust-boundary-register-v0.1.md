# Trust Boundary Register V0.1

This document is documentation-stage architecture planning guidance.

It does not modify runtime code, GitHub Actions workflows, npm dependencies, database schema, clinical workflows, AI behavior, API behavior, FHIR behavior, frontend behavior, or OpenEMR core behavior.

## 1. Document Status

| Field | Value |
|---|---|
| Document | Trust Boundary Register V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage architecture planning |
| Scope | Trust boundary identification and review planning only |
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

This register identifies planned trust boundaries for OpenEMR IM Core before runtime implementation.

The purpose is to make boundaries explicit before adding any executable code, database migration, API/FHIR integration, AI workflow, production deployment, or clinical workflow implementation.

---

## 3. Scope

This register covers planned boundaries between:

- Human users and project artifacts.
- GitHub repository and local development environment.
- GitHub repository and GitHub Actions CI.
- Documentation environment and runtime environment.
- Non-production environment and any future production environment.
- OpenEMR upstream and OpenEMR IM Core customization layer.
- Future database boundary.
- Future audit/security boundary.
- Future API/FHIR boundary.
- Future AI boundary.
- Synthetic data and real patient data boundary.

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
- Usability validation.
- Human factors validation.
- Regulatory compliance claim.
- Cybersecurity certification claim.
- Commercial deployment claim.

---

## 5. Trust Boundary Principle

A trust boundary is a point where data, control, responsibility, or assurance changes between actors, systems, environments, or processes.

Each boundary should define:

- What crosses the boundary.
- Who controls the boundary.
- What assumptions apply.
- What risks exist.
- What controls are required before implementation.
- What evidence is needed before use.

This document identifies boundaries only. It does not implement controls.

---

## 6. Boundary Register

| ID | Boundary | Description | Current Status | Required Before Implementation |
|---|---|---|---|---|
| TB-001 | Human user to documentation repository | Users create, review, and merge documentation through GitHub workflow | Documented only | PR review, CI checks, no PHI/secrets |
| TB-002 | Local development to GitHub repository | Termux, Codespaces, or local tooling pushes changes to GitHub | Documented only | Clean working tree, branch discipline, no secrets |
| TB-003 | GitHub repository to GitHub Actions CI | Pull Requests trigger automated checks | Documented only | 0 failing / 0 pending before merge |
| TB-004 | Documentation environment to runtime environment | Planning documents must not be treated as executable implementation | Documented only | Runtime boundary specification |
| TB-005 | Non-production to production | Non-production planning must not imply production readiness | Documented only | Production readiness gates, security review, validation |
| TB-006 | OpenEMR upstream to IM Core customization | IM Core must not create uncontrolled OpenEMR core-sensitive changes | Documented only | Integration boundary review, ADR, rollback plan |
| TB-007 | Synthetic data to real patient data | Synthetic planning data must not cross into PHI or real patient data | Documented only | Privacy/security review, data governance approval |
| TB-008 | Future database boundary | Any future storage must be reviewed before SQL/migrations | Future phase | Database boundary and migration policy |
| TB-009 | Future audit/security boundary | Audit, RBAC, backup, and monitoring require explicit design | Future phase | Security requirements and audit logging requirements |
| TB-010 | Future API/FHIR boundary | API/FHIR must remain future-phase until boundary and mapping are approved | Future phase | API/FHIR boundary specification |
| TB-011 | Future AI boundary | AI must remain physician-supervised, draft-only, non-autonomous | Future phase | AI clinical support boundary and validation plan |
| TB-012 | Clinical use boundary | Documentation must not authorize patient care use | Documented only | Clinical safety review and validation protocol |
| TB-013 | Commercial claims boundary | Project artifacts must not imply commercial readiness | Documented only | Claims review and approval |
| TB-014 | Secrets boundary | Secrets, tokens, passwords, API keys, and private keys are prohibited | Documented only | Secrets handling SOP and scanning controls |
| TB-015 | Logs and evidence boundary | Logs and evidence must not contain PHI, secrets, or sensitive data | Documented only | Evidence review and redaction procedure |

---

## 7. Boundary Review Questions

For each boundary, reviewers should ask:

- What data crosses this boundary?
- Who controls the boundary?
- What assumptions are being made?
- What could fail?
- What patient, privacy, security, or governance risk exists?
- What control is required before implementation?
- What evidence would prove the control works?
- Does this boundary involve PHI?
- Does this boundary involve secrets?
- Does this boundary involve AI, API/FHIR, runtime, or database behavior?
- Does this boundary imply clinical, production, regulatory, or cybersecurity readiness?

---

## 8. Data Boundary Rules

Current project data rules:

- No PHI.
- No real patient data.
- No patient identifiers.
- No secrets.
- No API keys.
- No passwords.
- No private keys.
- No database dumps.
- No sensitive logs.

Only synthetic or appropriately de-identified planning examples may be used when necessary.

This register does not authorize live patient data.

---

## 9. AI Boundary Rules

AI is future-phase only.

Any future AI boundary must preserve:

- Physician supervision.
- Draft-only output.
- No autonomous diagnosis.
- No autonomous prescribing.
- No autonomous clinical decision-making.
- Auditability.
- Risk control.
- Clinical safety review.
- Human factors review.
- Validation before any clinical use.

No AI implementation is created by this document.

---

## 10. FHIR/API Boundary Rules

FHIR/API is future-phase only.

No future FHIR/API boundary may proceed without:

- API/FHIR boundary specification.
- Data mapping plan.
- Authentication and authorization plan.
- Audit logging requirements.
- Privacy/security review.
- Synthetic test data plan.
- Integration test strategy.
- Clinical safety review where applicable.

No FHIR/API implementation is created by this document.

---

## 11. Database Boundary Rules

No SQL, migration, schema change, database storage, or database integration may be introduced without:

- Database boundary specification.
- Migration policy.
- Rollback plan.
- Backup/restore expectations.
- Test strategy.
- Security/privacy review.
- Traceability to requirements and risks.

No database implementation is created by this document.

---

## 12. Runtime Boundary Rules

No runtime implementation may be introduced without:

- Runtime boundary specification.
- Component inventory.
- OpenEMR integration review.
- ADR where needed.
- Test plan.
- Rollback plan.
- Security review.
- Clinical safety review if workflow impact exists.

This register does not prove runtime behavior.

---

## 13. Security and Privacy Review Points

Before any boundary moves from documented-only to implementation, reviewers should confirm:

- No PHI is used.
- No secrets are committed.
- Access control is defined.
- Audit expectations are defined.
- Backup/restore expectations are defined where applicable.
- Data minimization is considered.
- Logs are safe for review.
- Evidence does not expose sensitive information.
- Claims remain limited.

---

## 14. Relationship to Existing Documentation

This register relates to:

- System Context Diagram Plan V0.1.
- Data Flow Diagram Plan V0.1.
- Data Flow Diagram Level 0 Plan V0.1.
- OpenEMR Integration Boundary Map V0.1.
- Threat Model and Data Governance V0.1.
- Security / Privacy / RBAC / Audit / Backup Gap Refinement V0.1.
- Clinical Safety Case V0.1.
- Risk Register V0.1.
- Traceability Matrix V0.1.
- ADR Baseline V0.1.
- Documentation Index and Review Cadence V0.1.

---

## 15. Review Workflow

Before accepting this register, reviewers should verify:

- Boundaries are named clearly.
- Future-phase boundaries are marked clearly.
- No implementation is implied.
- No PHI or real patient data is included.
- AI and FHIR/API remain future-phase.
- Runtime and database behavior remain non-implemented.
- Production readiness is not claimed.
- Clinical validation is not claimed.
- Regulatory compliance is not claimed.
- Cybersecurity certification is not claimed.

---

## 16. Exit Criteria

This document is complete when it defines:

- Purpose.
- Scope.
- Non-scope.
- Trust boundary principle.
- Boundary register.
- Data boundary rules.
- AI boundary rules.
- FHIR/API boundary rules.
- Database boundary rules.
- Runtime boundary rules.
- Security/privacy review points.
- Relationship to existing documentation.
- Status and limitations.

---

## 17. After-Merge Action

After merge:

- Update master locally.
- Confirm working tree is clean.
- Confirm no open PRs remain.
- Confirm this document exists on master.
- Create a separate documentation-index update PR if needed.

Do not start runtime implementation from this document alone.

---

## 18. Status and Limitations

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
