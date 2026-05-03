# OpenEMR Integration Boundary Map V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines the documentation-stage OpenEMR integration boundary map for OpenEMR IM Core.

The purpose is to identify what the IM Core project may reference, depend on, or plan around inside OpenEMR before any future runtime implementation, FHIR/API implementation, frontend implementation, database change, OpenEMR core-sensitive change, or clinical workflow implementation is proposed.

This document is planning-only.

This document does not implement integration.

This document does not authorize runtime changes.

Golden rule:

The system must support clinicians. It must not replace clinicians.

---

## 2. Document Status and Identity

| Field | Value |
|---|---|
| Document | OpenEMR Integration Boundary Map V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage only |
| Version | v0.1 |
| Owner Role | Technical Owner / Governance Owner |
| Reviewer Roles | Clinical Safety Owner, Human Factors Reviewer, Privacy/Security Owner, Documentation Owner, Operations Owner, Release Owner |
| Runtime Status | No runtime implementation |
| Integration Status | No live integration implementation |
| Clinical Use Status | Not for clinical use |

This document is not an implementation specification.

This document is not an OpenEMR core modification plan.

This document is not a FHIR/API implementation plan.

---

## 3. Scope

This document covers the planning boundary between OpenEMR IM Core and OpenEMR.

It identifies documentation-stage boundaries for:

- OpenEMR core.
- OpenEMR custom module / custom documentation space.
- Database and SQL.
- LBF / structured data.
- Clinical workflows.
- Frontend/UI.
- FHIR/API.
- Authentication and RBAC.
- Audit logging.
- Backup and restore.
- Security and privacy.
- Synthetic data.
- Future sandbox integration.
- Evidence requirements.

This document references PR #92 through PR #101 as prior governance, safety, evidence, security, human factors, and threat-model documentation.

---

## 4. Out of Scope

This document does not create or authorize:

- Runtime code.
- PHP implementation.
- JavaScript implementation.
- SQL.
- SQL execution.
- Database migration.
- Schema change.
- OpenEMR core-sensitive change.
- Frontend implementation.
- FHIR/API implementation.
- AI implementation.
- Machine learning model.
- Predictive model.
- Autonomous clinical decision support.
- Autonomous diagnosis.
- Autonomous prescribing.
- Emergency triage automation.
- PHI.
- Real patient data.
- Credentials.
- Secrets.
- Sensitive logs.
- Database dumps.
- Live RBAC configuration.
- Live audit implementation.
- Live backup execution.
- Live restore testing.
- Demo deployment.
- Pilot deployment.
- Production deployment.
- Commercial deployment.

This document does not claim:

- Clinical validation.
- Human factors validation.
- Usability validation.
- Regulatory compliance.
- Cybersecurity certification.
- HIPAA compliance.
- GDPR compliance.
- FDA readiness.
- MDR readiness.
- Medical-device readiness.
- Demo readiness.
- Pilot readiness.
- Production readiness.
- Commercial readiness.

---

## 5. Integration Boundary Principles

The OpenEMR IM Core integration boundary principles are:

1. Documentation must precede implementation.
2. OpenEMR core-sensitive changes require separate review and explicit authorization.
3. SQL and database migrations are blocked unless separately approved.
4. FHIR/API integration is out of scope until a future gate authorizes it.
5. Frontend implementation is out of scope until human factors and clinical safety review authorize it.
6. LBF / structured OpenEMR-native data should be considered before free-text or external data.
7. No PHI may be committed to GitHub.
8. Synthetic data must be clearly labeled.
9. Security, privacy, RBAC, audit, backup, and restore controls must not be claimed without evidence.
10. The system must support clinicians and must not replace clinicians.

---

## 6. Current Allowed Boundary

The current allowed boundary is documentation-only.

Allowed activities:

- Create Markdown documentation under custom/im-core/docs.
- Reference previously merged governance documents.
- Define future evidence needs.
- Define future integration boundaries.
- Define future review gates.
- Define stop rules.
- Define out-of-scope areas.
- Define documentation-stage risk controls.

Not allowed:

- Runtime changes.
- Database changes.
- OpenEMR core changes.
- Live integration.
- FHIR/API implementation.
- UI implementation.
- AI implementation.
- PHI usage.
- Production deployment.

---

## 7. OpenEMR Core Boundary

| Boundary Item | Current Status | Rule |
|---|---|---|
| OpenEMR core PHP files | Out of scope | No change unless separate runtime PR is authorized. |
| OpenEMR core JavaScript files | Out of scope | No change unless separate frontend/runtime PR is authorized. |
| OpenEMR database schema | Out of scope | No SQL or migration in documentation PRs. |
| OpenEMR authentication | Out of scope | No live auth change. |
| OpenEMR RBAC / ACL | Planning only | No live RBAC configuration. |
| OpenEMR audit logs | Planning only | No live audit implementation. |
| OpenEMR backup/restore | Planning only | No live backup or restore testing. |
| OpenEMR FHIR/API | Out of scope | No FHIR/API implementation. |
| OpenEMR UI workflow | Out of scope | No frontend workflow change. |

---

## 8. Custom IM Core Documentation Boundary

Current documentation is placed under:

`custom/im-core/docs/`

This path is currently used for planning and governance artifacts only.

This path does not imply runtime activation.

This path does not imply module installation.

This path does not imply production readiness.

This path does not imply clinical validation.

---

## 9. Database and SQL Boundary

Database and SQL are out of scope for this document.

No SQL is introduced.

No database migration is introduced.

No schema change is introduced.

No database dump is introduced.

No seed data is introduced.

Future database work would require:

- Data governance review.
- Security/privacy review.
- Clinical safety review.
- Traceability update.
- Risk register update.
- Migration review.
- Rollback plan.
- Verification evidence.
- Gate approval.

---

## 10. LBF / Structured Data Boundary

Structured OpenEMR-native and LBF-related data may be considered in future planning because it may reduce ambiguity compared with free text.

However, this document does not implement LBF.

This document does not add forms.

This document does not add fields.

This document does not change data capture.

This document does not process structured data.

Future use of structured OpenEMR-native / LBF data would require:

- Data field inventory.
- Data classification.
- Clinical meaning review.
- Human factors review.
- Traceability.
- Risk controls.
- Verification evidence.

---

## 11. Free Text and NLP Boundary

Free-text clinical data is out of scope.

No NLP is implemented.

No note parsing is implemented.

No clinical note summarization is implemented.

No free-text extraction is implemented.

No predictive model is implemented.

Future use of free text would require a separate gate and substantially stronger privacy, safety, bias, and verification evidence.

---

## 12. FHIR/API Boundary

FHIR/API integration is out of scope.

This document does not create:

- FHIR endpoint.
- API endpoint.
- API client.
- API server.
- SMART-on-FHIR integration.
- OAuth integration.
- External system integration.
- Data exchange workflow.

Future FHIR/API work would require:

- Interface control document.
- Data flow diagram.
- Authentication and authorization model.
- Privacy/security review.
- Audit requirements.
- Error handling plan.
- Clinical safety review.
- Verification protocol.
- Gate approval.

---

## 13. Frontend and UI Boundary

Frontend and UI implementation are out of scope.

This document does not create:

- UI alert.
- Button.
- Dashboard.
- Form.
- Modal.
- Prompt display.
- Clinical workflow screen.
- Patient-facing screen.

Future UI work would require:

- Human factors review.
- Usability protocol.
- Clinical safety review.
- False reassurance control.
- Alert fatigue review.
- Accessibility review.
- Verification evidence.
- Gate approval.

---

## 14. Clinical Workflow Boundary

Clinical workflow implementation is out of scope.

This document does not automate:

- Diagnosis.
- Prescribing.
- Ordering.
- Triage.
- Follow-up decision.
- Emergency escalation.
- Patient messaging.
- Clinical documentation.
- Billing.
- Scheduling.

Future workflow work must preserve clinician authority.

The system must support clinicians. It must not replace clinicians.

---

## 15. Security and Privacy Boundary

Security and privacy remain documentation-stage only.

This document does not implement:

- Access control.
- RBAC.
- Audit logging.
- Encryption.
- Backup.
- Restore.
- Secret management.
- Security monitoring.
- Privacy automation.

Future implementation requires evidence from the security/privacy gap refinement, threat model, and data governance plan.

---

## 16. Sandbox Boundary

Future sandbox work is not authorized by this document.

If a sandbox is later authorized, it must be:

- Non-production only.
- Synthetic-data only.
- No PHI.
- No production credentials.
- No real patient import.
- No clinical use.
- No pilot use.
- No commercial use.

Sandbox work requires a separate sandbox authorization package and gate review.

---

## 17. Integration Risk Register

| Risk ID | Risk | Potential Impact | Current Control | Status |
|---|---|---|---|---|
| INT-RISK-001 | OpenEMR core change introduced prematurely | Stability and safety risk | Runtime changes blocked | Documentation-stage control |
| INT-RISK-002 | SQL introduced without review | Data integrity risk | SQL blocked | Documentation-stage control |
| INT-RISK-003 | FHIR/API integration added prematurely | Privacy and interoperability risk | FHIR/API out of scope | Documentation-stage control |
| INT-RISK-004 | UI alert created without human factors review | Alert fatigue or false reassurance | Frontend blocked | Documentation-stage control |
| INT-RISK-005 | PHI used in examples or logs | Privacy breach | No-PHI rule | Documentation-stage control |
| INT-RISK-006 | Documentation mistaken for integration readiness | Unsafe assumptions | Readiness claims prohibited | Documentation-stage control |
| INT-RISK-007 | Sandbox confused with production | Unsafe deployment | Sandbox not authorized here | Documentation-stage control |
| INT-RISK-008 | Free-text NLP introduced prematurely | Privacy and clinical safety risk | NLP out of scope | Documentation-stage control |

---

## 18. Required Future Evidence

Before integration implementation, the following future evidence would be required:

- Interface control document.
- Data flow diagram.
- Data inventory.
- Data classification register.
- OpenEMR dependency map.
- LBF / structured data inventory if applicable.
- RBAC matrix if applicable.
- Audit event specification if applicable.
- Backup/restore evidence if applicable.
- Human factors review if UI is involved.
- Clinical safety review if workflow is involved.
- Security/privacy review.
- Verification protocol.
- Rollback plan.
- Gate approval.

These future evidence items do not authorize implementation by themselves.

---

## 19. Relationship to PR #92

PR #92 created the Evidence Registry and Evidence Templates V0.1.

This document uses evidence concepts from PR #92 to define future integration evidence needs.

This document does not modify PR #92.

---

## 20. Relationship to PR #93

PR #93 created the Traceability Matrix V0.1.

This document identifies future integration areas that would need traceability to requirements, risks, controls, and evidence.

This document does not modify PR #93.

---

## 21. Relationship to PR #94

PR #94 created the Risk Register V0.1.

This document adds integration-boundary risk context but does not replace the risk register.

This document does not modify PR #94.

---

## 22. Relationship to PR #95

PR #95 created the Pull Request Template and Stop Rules V0.1.

This document depends on stop rules to prevent premature runtime, SQL, PHI, frontend, FHIR/API, AI, and OpenEMR core-sensitive changes.

This document does not modify PR #95.

---

## 23. Relationship to PR #96

PR #96 created the Clinical Safety Case V0.1.

This document supports the clinical safety boundary by documenting where OpenEMR workflow integration must not occur without separate safety review.

This document does not replace PR #96.

---

## 24. Relationship to PR #97

PR #97 created the Human Factors and Usability Risk Plan V0.1.

This document supports human factors planning by blocking UI and workflow implementation until reviewed.

This document does not replace PR #97.

---

## 25. Relationship to PR #98

PR #98 created the Security / Privacy / RBAC / Audit / Backup Gap Refinement V0.1.

This document builds on PR #98 by defining OpenEMR integration boundaries for security/privacy-related future work.

This document does not implement PR #98 controls.

---

## 26. Relationship to PR #100

PR #100 fixed a runtime E2E blocker separate from documentation-only PRs.

This document references PR #100 as an example of separating runtime fixes from documentation-only governance work.

This document does not modify PR #100.

---

## 27. Relationship to PR #101

PR #101 created the Threat Model and Data Governance V0.1.

This document builds on PR #101 by mapping OpenEMR-specific integration boundaries and future evidence requirements.

This document does not replace PR #101.

---

## 28. Review Rules

Reviewers must confirm:

- Documentation-only scope.
- Correct file path.
- No PHI.
- No secrets.
- No sensitive logs.
- No database dumps.
- No SQL.
- No database migration.
- No runtime implementation.
- No frontend implementation.
- No FHIR/API implementation.
- No AI implementation.
- No OpenEMR core-sensitive change.
- No live RBAC.
- No live audit.
- No live backup.
- No live restore testing.
- No unsupported readiness claim.
- No unsupported validation claim.
- No unsupported compliance claim.
- No unsupported cybersecurity certification claim.
- Relationship to PR #92 through PR #101 is accurate.
- Unicode/Bidi warning is checked if GitHub displays one.

---

## 29. Definition of Done

This document is complete when:

- Purpose is defined.
- Scope is defined.
- Out of scope is defined.
- Integration principles are defined.
- Current allowed boundary is defined.
- OpenEMR core boundary is defined.
- Custom IM Core documentation boundary is defined.
- Database and SQL boundary is defined.
- LBF / structured data boundary is defined.
- Free text and NLP boundary is defined.
- FHIR/API boundary is defined.
- Frontend/UI boundary is defined.
- Clinical workflow boundary is defined.
- Security/privacy boundary is defined.
- Sandbox boundary is defined.
- Integration risk register is defined.
- Required future evidence is defined.
- Relationship to PR #92 through PR #101 is documented.
- Review rules are documented.
- No PHI is introduced.
- No SQL is introduced.
- No database migration is introduced.
- No runtime implementation is introduced.
- No FHIR/API implementation is introduced.
- No frontend implementation is introduced.
- No AI implementation is introduced.
- No OpenEMR core-sensitive change is introduced.
- No unsupported readiness, validation, compliance, certification, or commercial claim is introduced.

---

## 30. After-Merge Action

After this PR is merged, the next planned documentation step is:

ADR Baseline V0.1.

Do not start the next PR until:

- This PR is merged.
- `master` is updated locally.
- Working tree is clean.
- The PR body file is removed locally.
- `custom/im-core/docs/integration/openemr-integration-boundary-map-v0.1.md` exists on `master`.

---

## 31. Status

Documentation-stage OpenEMR integration boundary map.

No runtime implementation.

No SQL.

No database migration.

No PHI.

No real patient data.

No AI implementation.

No FHIR/API implementation.

No frontend implementation.

No OpenEMR core-sensitive change.

No live RBAC.

No live audit.

No live backup.

No restore testing.

Not clinically validated.

Not usability validated.

Not human factors validated.

Not regulatory compliant.

Not cybersecurity certified.

Not demo-ready.

Not pilot-ready.

Not production-ready.

Not commercially deployment-ready.
