# System Context Diagram Plan V0.1

This document is documentation-stage architecture planning guidance.

It does not modify runtime code, GitHub Actions workflows, npm dependencies, database schema, clinical workflows, AI behavior, API behavior, FHIR behavior, or OpenEMR core behavior.

## 1. Document Status

| Field | Value |
|---|---|
| Document | System Context Diagram Plan V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage architecture planning |
| Scope | System context planning only |
| Runtime Status | No runtime implementation |
| API/FHIR Status | No API or FHIR implementation |
| AI Status | No AI implementation |
| Clinical Status | Not clinical validation evidence |
| Compliance Status | Not regulatory compliance evidence |
| Security Status | Not cybersecurity certification evidence |

Golden rule:

The system must support clinicians. It must not replace clinicians.

---

## 2. Purpose

This document defines the planned system context diagram for OpenEMR IM Core.

The purpose is to identify the major actors, systems, boundaries, and high-level relationships before any runtime implementation, API implementation, AI implementation, database migration, or clinical workflow implementation.

---

## 3. Scope

This document covers:

- Candidate system actors.
- Candidate external systems.
- OpenEMR IM Core boundary.
- OpenEMR upstream boundary.
- Data boundary expectations.
- Human supervision boundary.
- AI boundary.
- FHIR/API boundary.
- Security and privacy boundary.
- Non-production planning boundary.
- Future diagram review expectations.

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

## 5. System Context Principle

A system context diagram shows the system under consideration and its relationship to users, external systems, data sources, and operational boundaries.

For OpenEMR IM Core, the diagram must clearly distinguish:

- The clinician user.
- The OpenEMR upstream system.
- The OpenEMR IM Core customization layer.
- Future non-production test environment.
- Future data governance boundary.
- Future AI support boundary.
- Future API/FHIR boundary.
- Future audit/security boundary.

The diagram must not imply production readiness or clinical validation.

---

## 6. Candidate Human Actors

Candidate human actors include:

- Internal Medicine physician.
- Clinical reviewer.
- Documentation reviewer.
- Governance owner.
- Technical owner.
- Privacy/security owner.
- Operations owner.
- Training/support owner.

These actors are planning roles only.

This document does not grant access rights or define live RBAC.

---

## 7. Candidate System Boundary

The primary system boundary is:

OpenEMR IM Core as a governed Internal Medicine customization layer built around OpenEMR-oriented workflows.

This boundary is documentation-stage only.

It does not prove that a runtime customization has been implemented.

---

## 8. Candidate External Systems

Candidate external systems may include:

- OpenEMR upstream repository.
- OpenEMR application environment.
- GitHub repository.
- GitHub Actions CI.
- Non-production development environment.
- Future database environment.
- Future API/FHIR environment.
- Future audit logging environment.
- Future backup and restore environment.
- Future AI support environment.

Each external system must be reviewed before implementation.

---

## 9. OpenEMR Boundary

OpenEMR remains the architectural baseline.

OpenEMR IM Core must avoid uncontrolled OpenEMR core-sensitive changes.

Any future OpenEMR customization must be reviewed for:

- Scope.
- Safety.
- Security.
- Maintainability.
- Upgrade compatibility.
- Traceability.
- Rollback feasibility.

---

## 10. Data Boundary

The current project boundary prohibits:

- PHI.
- Real patient data.
- Patient identifiers.
- Secrets.
- API keys.
- Database dumps.
- Sensitive logs.

Only synthetic or de-identified planning examples may be used, when appropriate.

This document does not authorize live patient data use.

---

## 11. AI Boundary

AI is future-phase only.

Any future AI support must remain:

- Physician-supervised.
- Draft-only.
- Non-autonomous.
- Auditable.
- Risk-controlled.
- Clinically reviewed before use.

The system must not provide:

- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous clinical decision-making.
- Unsigned AI-generated final clinical documentation.

---

## 12. FHIR/API Boundary

FHIR/API is future-phase only.

This document does not implement:

- API routes.
- FHIR resources.
- FHIR profiles.
- OAuth/SMART integration.
- External system integration.
- API security controls.

Any future API/FHIR work requires separate boundary, risk, security, privacy, and test documentation.

---

## 13. Security and Privacy Boundary

Future architecture must consider:

- Authentication.
- Authorization.
- RBAC.
- Audit logging.
- Backup and restore.
- Security monitoring.
- Secrets management.
- Data minimization.
- Incident response.

These controls are not implemented by this document.

---

## 14. Non-Production Boundary

Any future prototype must start in a non-production environment.

Non-production work must use:

- Synthetic data only.
- No PHI.
- No real patient data.
- No production credentials.
- No unsupported clinical use.
- No unsupported production-readiness claim.

---

## 15. Candidate System Context Diagram Content

The future diagram should show:

- Clinician.
- Governance/reviewer roles.
- OpenEMR IM Core boundary.
- OpenEMR upstream/application boundary.
- GitHub repository and CI boundary.
- Non-production environment boundary.
- Future database boundary.
- Future audit/security boundary.
- Future API/FHIR boundary.
- Future AI support boundary.

The diagram should label unimplemented future components clearly as future-phase.

---

## 16. Review Questions

Before accepting the future diagram, reviewers should ask:

- Does the diagram clearly show system boundaries?
- Does it avoid implying runtime implementation?
- Does it avoid implying production readiness?
- Does it avoid implying clinical validation?
- Does it identify actors clearly?
- Does it identify external systems clearly?
- Does it identify data boundaries clearly?
- Does it identify AI and API/FHIR as future-phase only?
- Does it preserve OpenEMR core-sensitive change control?

---

## 17. Relationship to Existing Documentation

This plan relates to:

- OpenEMR Integration Boundary Map V0.1.
- ADR Baseline V0.1.
- Data Flow Diagram Plan V0.1.
- Phase 2 Controlled Design Roadmap V0.1.
- Threat Model and Data Governance V0.1.
- Security / Privacy / RBAC / Audit / Backup Gap Refinement V0.1.
- CI Failure Handling and PR Merge Safety SOP V0.1.
- Merge Readiness Checklist V0.1.
- Documentation Index and Review Cadence V0.1.

---

## 18. Exit Criteria

This document is complete when it defines:

- Purpose.
- Scope.
- Non-scope.
- Candidate actors.
- Candidate external systems.
- System boundary.
- OpenEMR boundary.
- Data boundary.
- AI boundary.
- FHIR/API boundary.
- Security/privacy boundary.
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
