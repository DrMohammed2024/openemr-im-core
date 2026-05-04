# Data Flow Diagram Level 0 Plan V0.1

This document is documentation-stage architecture planning guidance.

It does not modify runtime code, GitHub Actions workflows, npm dependencies, database schema, clinical workflows, AI behavior, API behavior, FHIR behavior, frontend behavior, or OpenEMR core behavior.

## 1. Document Status

| Field | Value |
|---|---|
| Document | Data Flow Diagram Level 0 Plan V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage architecture planning |
| Scope | Level 0 data flow planning only |
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

This document defines the planned Level 0 Data Flow Diagram for OpenEMR IM Core.

The purpose is to identify high-level data movement between human actors, OpenEMR IM Core, OpenEMR-related environments, future non-production components, and future controlled boundaries before any runtime implementation.

---

## 3. Scope

This plan covers:

- High-level data flow planning.
- Candidate external entities.
- Candidate process boundary.
- Candidate data stores.
- Candidate trust boundaries.
- Data privacy constraints.
- AI data boundary.
- FHIR/API data boundary.
- Audit/security data boundary.
- Non-production data boundary.
- Review expectations.

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

## 5. Level 0 DFD Principle

A Level 0 Data Flow Diagram shows the system as a single high-level process and identifies external entities, major data flows, and major data stores.

For OpenEMR IM Core, the Level 0 diagram must show planning boundaries only.

It must not imply that live clinical data processing, AI behavior, FHIR/API integration, audit logging, RBAC, or production deployment has been implemented.

---

## 6. Candidate External Entities

Candidate external entities include:

- Internal Medicine physician.
- Clinical reviewer.
- Documentation reviewer.
- Governance owner.
- Technical owner.
- Privacy/security owner.
- Operations owner.
- Training/support owner.
- GitHub repository.
- GitHub Actions CI.
- OpenEMR upstream/application environment.
- Future non-production test environment.

These entities are planning candidates only.

---

## 7. Candidate Central Process

The central Level 0 process is:

OpenEMR IM Core governed Internal Medicine workflow support layer.

This process is planning-only.

It does not represent implemented runtime behavior.

---

## 8. Candidate Data Stores

Candidate future data stores may include:

- OpenEMR application database.
- Documentation repository.
- Evidence registry.
- Traceability matrix.
- Risk register.
- Future audit log store.
- Future backup store.
- Future synthetic test data store.

No new data store is implemented by this document.

---

## 9. Candidate Data Flows

Candidate data flows may include:

- Governance documentation updates.
- Architecture planning records.
- Synthetic test data planning.
- Review findings.
- Risk and safety records.
- Traceability records.
- Future clinical workflow draft data.
- Future audit events.
- Future API/FHIR payloads.
- Future AI draft outputs.

Future clinical, API/FHIR, and AI flows must remain explicitly marked as future-phase.

---

## 10. PHI and Sensitive Data Boundary

Current planning prohibits:

- PHI.
- Real patient data.
- Patient identifiers.
- Secrets.
- API keys.
- Passwords.
- Private keys.
- Database dumps.
- Sensitive logs.

Only synthetic or appropriately de-identified planning examples may be used when required.

This document does not authorize live patient data.

---

## 11. Trust Boundaries

The Level 0 DFD should identify trust boundaries between:

- Human users and the system.
- GitHub repository and runtime environments.
- Documentation environment and clinical environments.
- Non-production environment and production environment.
- OpenEMR upstream and OpenEMR IM Core customization boundary.
- Future AI service boundary.
- Future API/FHIR boundary.
- Future audit/security boundary.

These boundaries are not implemented by this document.

---

## 12. AI Data Boundary

AI is future-phase only.

Any future AI data flow must be:

- Physician-supervised.
- Draft-only.
- Non-autonomous.
- Auditable.
- Risk-controlled.
- Reviewed before use.

The Level 0 DFD must not show AI as an autonomous diagnostic or prescribing actor.

---

## 13. FHIR/API Data Boundary

FHIR/API is future-phase only.

The Level 0 DFD must not imply existing:

- FHIR endpoints.
- API routes.
- FHIR resource mappings.
- OAuth/SMART integration.
- External clinical system integration.
- API audit logging implementation.

Future FHIR/API data flows require separate specification and review.

---

## 14. Security and Audit Boundary

Future security-related flows may include:

- Authentication events.
- Authorization decisions.
- RBAC checks.
- Audit log events.
- Backup events.
- Restore events.
- Security monitoring events.

These flows are planning candidates only.

No live RBAC, audit logging, backup, restore, or security monitoring is implemented by this document.

---

## 15. Non-Production Boundary

Any future prototype must begin in a non-production environment.

Non-production planning must use:

- Synthetic data only.
- No PHI.
- No production credentials.
- No production database dumps.
- No unsupported clinical use.
- No unsupported readiness claim.

---

## 16. Review Questions

Before accepting a Level 0 DFD, reviewers should ask:

- Does the diagram clearly identify the central process?
- Does it identify external entities?
- Does it identify candidate data stores?
- Does it label future-phase components clearly?
- Does it separate documentation, non-production, and clinical boundaries?
- Does it avoid PHI and real patient data?
- Does it avoid implying runtime implementation?
- Does it avoid implying production readiness?
- Does it avoid implying clinical validation?
- Does it preserve AI and FHIR/API as future-phase only?

---

## 17. Relationship to Existing Documentation

This plan relates to:

- System Context Diagram Plan V0.1.
- Data Flow Diagram Plan V0.1.
- OpenEMR Integration Boundary Map V0.1.
- Threat Model and Data Governance V0.1.
- Security / Privacy / RBAC / Audit / Backup Gap Refinement V0.1.
- Phase 2 Controlled Design Roadmap V0.1.
- Clinical Safety Case V0.1.
- Risk Register V0.1.
- Traceability Matrix V0.1.
- Documentation Index and Review Cadence V0.1.

---

## 18. Exit Criteria

This document is complete when it defines:

- Purpose.
- Scope.
- Non-scope.
- Level 0 DFD principle.
- Candidate external entities.
- Candidate central process.
- Candidate data stores.
- Candidate data flows.
- PHI and sensitive data boundary.
- Trust boundaries.
- AI data boundary.
- FHIR/API data boundary.
- Security and audit boundary.
- Non-production boundary.
- Review questions.
- Status and limitations.

---

## 19. After-Merge Action

After merge:

- Update master locally.
- Confirm working tree is clean.
- Confirm no open PRs remain.
- Confirm this document exists on master.
- Create a separate documentation-index update PR if needed.

Do not start runtime implementation from this document alone.

---

## 20. Status and Limitations

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
