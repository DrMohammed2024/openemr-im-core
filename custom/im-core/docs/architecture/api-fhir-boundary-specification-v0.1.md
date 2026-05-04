# API/FHIR Boundary Specification V0.1

This document is documentation-stage architecture planning guidance.

It does not modify runtime code, GitHub Actions workflows, npm dependencies, database schema, SQL files, migrations, API behavior, FHIR behavior, clinical workflows, AI behavior, frontend behavior, or OpenEMR core behavior.

## 1. Document Status

| Field | Value |
|---|---|
| Document | API/FHIR Boundary Specification V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage architecture planning |
| Scope | API/FHIR boundary planning only |
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

This document defines the planned API/FHIR boundary for OpenEMR IM Core before any API endpoint, FHIR resource mapping, integration behavior, external data exchange, or interoperability feature is implemented.

The purpose is to prevent uncontrolled API/FHIR changes, PHI exposure, unauthorized access, audit gaps, false interoperability claims, or OpenEMR core-sensitive API changes before boundaries and controls are defined.

---

## 3. Scope

This specification covers:

- API/FHIR boundary principles.
- Current API/FHIR implementation status.
- Candidate future API/FHIR areas.
- Authentication and authorization expectations.
- Audit expectations.
- PHI and real patient data restrictions.
- Synthetic data expectations.
- Error handling expectations.
- Rate limiting and abuse considerations.
- External integration boundary.
- OpenEMR API/FHIR sensitivity.
- API/FHIR implementation entry criteria.

---

## 4. Out of Scope

This document does not include:

- API endpoint implementation.
- FHIR resource implementation.
- FHIR resource mapping.
- OAuth implementation.
- SMART-on-FHIR implementation.
- Runtime integration.
- SQL execution.
- Database migration.
- Frontend implementation.
- AI implementation.
- Clinical validation.
- Production deployment.
- Regulatory compliance claim.
- Cybersecurity certification claim.
- Commercial deployment claim.

---

## 5. API/FHIR Boundary Principle

An API/FHIR boundary separates planning from interoperability behavior.

No API or FHIR behavior may be implemented until the project defines:

- Intended API/FHIR use.
- Data classification.
- Authentication assumptions.
- Authorization assumptions.
- Audit expectations.
- Error handling expectations.
- Privacy/security review.
- Risk review.
- Test strategy.
- Rollback strategy.
- Synthetic data strategy.
- Review approval.

This document defines boundaries only. It does not implement API or FHIR behavior.

---

## 6. Current API/FHIR Status

Current status:

- No IM Core API endpoint is implemented by this document.
- No FHIR resource mapping is implemented by this document.
- No FHIR readiness is claimed.
- No interoperability readiness is claimed.
- No PHI exchange is authorized.
- No real patient data exchange is authorized.
- No external production integration is authorized.

| Area | Status |
|---|---|
| IM Core API endpoint | Not implemented |
| FHIR mapping | Not implemented |
| External integration | Not implemented |
| PHI exchange | Not authorized |
| Real patient data use | Not authorized |
| Production interoperability | Not implemented |
| API/FHIR validation | Not implemented |

---

## 7. Candidate Future API/FHIR Areas

Future API/FHIR work may include planning for:

- Candidate read-only API boundary.
- Candidate FHIR resource scope.
- Candidate synthetic-data-only integration tests.
- Candidate audit event expectations.
- Candidate authorization model.
- Candidate error model.
- Candidate integration boundary with OpenEMR upstream behavior.

These are future-phase planning topics only.

---

## 8. Authentication and Authorization Expectations

Before API/FHIR implementation, the project must define:

- Authentication method.
- Authorization model.
- Role-based access expectations.
- Scope restrictions.
- Patient-context assumptions.
- Clinician-context assumptions.
- Service-account restrictions if applicable.
- Token handling expectations.
- Session handling expectations.
- Failure behavior.

No authentication or authorization behavior is implemented by this document.

---

## 9. Audit Expectations

Future API/FHIR behavior may require audit logging.

Before implementation, reviewers should define:

- Events to be audited.
- Actor identity expectations.
- Patient context handling.
- Data access logging.
- Error logging.
- PHI redaction expectations.
- Evidence redaction expectations.
- Audit retention assumptions.
- Audit access control.

This document does not implement audit logging.

---

## 10. Data Boundary Rules

API/FHIR planning must preserve the data boundary.

Current rules:

- No PHI.
- No real patient data.
- No production database dumps.
- No secrets.
- No API keys.
- No sensitive logs.
- Synthetic examples only.
- No claim of production interoperability.

Any future data exchange must be reviewed under privacy/security governance.

---

## 11. Synthetic Data Rules

Synthetic API/FHIR examples must:

- Be fake.
- Not identify real patients.
- Not be derived from real patient records.
- Avoid real contact details.
- Avoid real insurance details.
- Avoid real clinical notes.
- Avoid real lab results.
- Be labeled synthetic.
- Be suitable for non-production planning only.

Synthetic data does not prove clinical validation or FHIR conformance.

---

## 12. Error Handling Expectations

Future API/FHIR implementation must define:

- Error categories.
- Error messages.
- Logging behavior.
- User-facing behavior if applicable.
- Retry assumptions.
- Timeout assumptions.
- Security-safe error responses.
- PHI-safe error responses.
- Audit behavior for errors.

This document does not implement error handling.

---

## 13. Rate Limiting and Abuse Considerations

Future API/FHIR implementation should consider:

- Rate limiting.
- Abuse prevention.
- Request size limits.
- Authentication failure limits.
- Logging and monitoring.
- Denial-of-service considerations.
- External client restrictions.

This document does not implement rate limiting or abuse controls.

---

## 14. External Integration Boundary

No external integration may be treated as approved until:

- The external system is identified.
- Data exchanged is classified.
- Authentication is defined.
- Authorization is defined.
- Audit expectations are defined.
- Security/privacy review is completed.
- Synthetic test strategy is defined.
- Rollback or disablement strategy is defined.

This document does not authorize external production integration.

---

## 15. OpenEMR API/FHIR Sensitivity

OpenEMR API/FHIR changes may affect:

- Patient data access.
- Clinical workflow.
- Authentication.
- Authorization.
- Audit logging.
- Interoperability behavior.
- External integrations.
- Security posture.
- Upgrade compatibility.
- Compliance exposure.
- Clinical safety.

Any OpenEMR API/FHIR core-sensitive change requires explicit controlled review.

---

## 16. Forbidden API/FHIR Actions in Documentation PRs

Documentation-only PRs must not modify:

- API endpoint code.
- FHIR resource code.
- OAuth or SMART-on-FHIR code.
- Runtime route files.
- Database schema.
- SQL files.
- Migration files.
- Composer dependencies.
- npm dependencies.
- GitHub Actions workflows.
- OpenEMR core behavior.

Any API/FHIR implementation must be performed in a separate controlled implementation-phase PR.

---

## 17. API/FHIR Implementation Entry Criteria

A future API/FHIR implementation PR may only be considered after:

- Component Inventory identifies the candidate component.
- Trust Boundary Register identifies related boundaries.
- Runtime Boundary Specification defines runtime constraints.
- Database Boundary and Migration Policy is considered if persistence is affected.
- API/FHIR Boundary Specification is approved for current stage.
- Risk review is completed.
- Security/privacy review is completed.
- Audit expectations are defined.
- Synthetic test strategy is defined.
- Rollback or disablement strategy is defined.
- No PHI, secrets, or real patient data are included.
- CI checks show 0 failing and 0 pending before merge.

---

## 18. Review Questions

Reviewers should ask:

- Does this change implement an API endpoint?
- Does this change implement FHIR behavior?
- Does this change expose or consume PHI?
- Does this change use real patient data?
- Does this change require authentication or authorization?
- Does this change require audit logging?
- Does this change affect OpenEMR core API/FHIR behavior?
- Does this change require database persistence?
- Does this change need privacy/security review?
- Does this change avoid unsupported interoperability claims?

---

## 19. Relationship to Existing Documentation

This specification relates to:

- System Context Diagram Plan V0.1.
- Data Flow Diagram Level 0 Plan V0.1.
- Trust Boundary Register V0.1.
- Component Inventory V0.1.
- Runtime Boundary Specification V0.1.
- Database Boundary and Migration Policy V0.1.
- OpenEMR Integration Boundary Map V0.1.
- Risk Register V0.1.
- Clinical Safety Case V0.1.
- Threat Model and Data Governance V0.1.
- Security / Privacy / RBAC / Audit / Backup Gap Refinement V0.1.
- Documentation Index and Review Cadence V0.1.

---

## 20. Exit Criteria

This document is complete when it defines:

- Purpose.
- Scope.
- Non-scope.
- API/FHIR boundary principle.
- Current API/FHIR status.
- Candidate future API/FHIR areas.
- Authentication and authorization expectations.
- Audit expectations.
- Data boundary rules.
- Synthetic data rules.
- Error handling expectations.
- Rate limiting and abuse considerations.
- External integration boundary.
- OpenEMR API/FHIR sensitivity.
- Forbidden API/FHIR actions in documentation PRs.
- API/FHIR implementation entry criteria.
- Status and limitations.

---

## 21. After-Merge Action

After merge:

- Update master locally.
- Confirm working tree is clean.
- Confirm no open PRs remain.
- Confirm this document exists on master.
- Create a separate documentation-index update PR if needed.

Do not start API/FHIR implementation from this document alone.

---

## 22. Status and Limitations

This document is planning-only.

It does not prove:

- FHIR conformance.
- API readiness.
- Interoperability readiness.
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

No API implementation.

No FHIR implementation.

No SQL.

No database migration.

No database schema change.

No PHI.

No real patient data.

No AI implementation.

No frontend implementation.

No OpenEMR core-sensitive change.
