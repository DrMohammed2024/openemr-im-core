# Runtime Boundary Specification V0.1

This document is documentation-stage architecture planning guidance.

It does not modify runtime code, GitHub Actions workflows, npm dependencies, database schema, clinical workflows, AI behavior, API behavior, FHIR behavior, frontend behavior, or OpenEMR core behavior.

## 1. Document Status

| Field | Value |
|---|---|
| Document | Runtime Boundary Specification V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage architecture planning |
| Scope | Runtime boundary planning only |
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

This document defines the planned runtime boundary for OpenEMR IM Core before any executable implementation is introduced.

The purpose is to prevent uncontrolled runtime changes, OpenEMR core-sensitive modifications, database changes, API/FHIR implementation, AI workflow activation, or clinical workflow implementation before the required boundaries, controls, reviews, and evidence are defined.

---

## 3. Scope

This specification covers:

- Runtime boundary definition.
- OpenEMR core-sensitive change boundary.
- Customization boundary.
- Non-production runtime boundary.
- Future install/load boundary.
- Future configuration boundary.
- Future dependency boundary.
- Future database boundary.
- Future API/FHIR boundary.
- Future AI boundary.
- Future frontend boundary.
- Future audit/security boundary.
- Future rollback boundary.
- Required controls before runtime implementation.

---

## 4. Out of Scope

This document does not include:

- Runtime implementation.
- PHP code changes.
- JavaScript code changes.
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

## 5. Runtime Boundary Principle

A runtime boundary separates planning artifacts from executable behavior.

For OpenEMR IM Core, no document, plan, register, checklist, or roadmap may be treated as runtime implementation.

A future runtime component may only be introduced after:

- Its component identity is defined.
- Its trust boundary is defined.
- Its data boundary is defined.
- Its OpenEMR integration boundary is defined.
- Its risk impact is reviewed.
- Its security/privacy impact is reviewed.
- Its test strategy is defined.
- Its rollback strategy is defined.
- Its implementation PR scope is isolated.
- CI checks show 0 failing and 0 pending.

---

## 6. Current Runtime Status

Current status:

- No runtime implementation is proven.
- No PHP runtime component is introduced by this document.
- No JavaScript runtime component is introduced by this document.
- No SQL or database migration is introduced by this document.
- No API/FHIR endpoint is introduced by this document.
- No AI component is introduced by this document.
- No frontend component is introduced by this document.
- No OpenEMR core-sensitive behavior is modified by this document.

Current classification:

| Area | Status |
|---|---|
| Runtime behavior | Not implemented / not proven |
| OpenEMR core modification | Not implemented |
| Database changes | Not implemented |
| API/FHIR | Not implemented |
| AI clinical support | Not implemented |
| Frontend workflow | Not implemented |
| Production deployment | Not implemented |

---

## 7. Allowed Documentation-Stage Runtime Planning

The project may document:

- Candidate runtime components.
- Candidate runtime boundaries.
- Candidate install/load assumptions.
- Candidate configuration boundaries.
- Candidate dependency boundaries.
- Candidate rollback expectations.
- Candidate test expectations.
- Candidate OpenEMR integration assumptions.

These are planning artifacts only.

They do not authorize implementation.

---

## 8. Forbidden Runtime Actions in Documentation PRs

Documentation-only PRs must not modify:

- PHP runtime files.
- JavaScript runtime files.
- CSS runtime behavior.
- SQL files.
- Database migrations.
- Composer files.
- `package.json`.
- `package-lock.json`.
- GitHub Actions workflows.
- Docker runtime behavior.
- OpenEMR core files.
- API/FHIR files.
- AI workflow files.
- Frontend implementation files.

If runtime work is required, it must be placed in a separate implementation-phase PR after boundary approval.

---

## 9. OpenEMR Core-Sensitive Boundary

OpenEMR core-sensitive changes require explicit review before implementation.

A change is core-sensitive if it may affect:

- OpenEMR upstream behavior.
- Authentication.
- Authorization.
- RBAC.
- Audit logging.
- Patient data handling.
- Clinical workflow.
- Billing workflow.
- Database schema.
- API/FHIR behavior.
- Installation behavior.
- Upgrade compatibility.
- Security posture.
- Data integrity.
- Clinical safety.

This document does not authorize OpenEMR core-sensitive changes.

---

## 10. Customization Boundary

OpenEMR IM Core should prefer project-owned customization boundaries before modifying OpenEMR core behavior.

Future customization work must define:

- Component name.
- File path.
- Runtime loading assumption.
- OpenEMR integration point.
- Data input.
- Data output.
- Error behavior.
- Audit expectations.
- Security/privacy impact.
- Rollback method.
- Test method.

No customization is implemented by this document.

---

## 11. Non-Production Runtime Boundary

Any future runtime experiment must begin in non-production only.

Non-production runtime work must use:

- Synthetic data only.
- No PHI.
- No real patient data.
- No production credentials.
- No production database dumps.
- No unsupported clinical use.
- No production-readiness claim.

Non-production does not mean clinically safe.

---

## 12. Configuration Boundary

Future runtime configuration must be reviewed before implementation.

Configuration must not include:

- Secrets.
- API keys.
- Passwords.
- Private keys.
- PHI.
- Real patient identifiers.
- Production credentials.
- Sensitive logs.

Any future configuration strategy requires separate review.

---

## 13. Dependency Boundary

Future runtime dependencies must be reviewed before introduction.

Dependency review should consider:

- Purpose.
- License.
- Security risk.
- Maintenance status.
- Compatibility.
- Runtime impact.
- Build impact.
- Test impact.
- Rollback feasibility.

No dependency is added by this document.

---

## 14. Database Runtime Boundary

No runtime component may store, modify, or migrate data without a database boundary and migration policy.

Before any database change, the project needs:

- Database Boundary and Migration Policy V0.1.
- Data classification.
- Schema change rationale.
- Migration plan.
- Rollback plan.
- Backup/restore expectations.
- Test data plan.
- Privacy/security review.
- Traceability to requirements and risks.

No database behavior is implemented by this document.

---

## 15. API/FHIR Runtime Boundary

No runtime component may expose or consume API/FHIR behavior without an approved API/FHIR boundary.

Before API/FHIR work, the project needs:

- API/FHIR Boundary Specification V0.1.
- Resource mapping plan.
- Authentication and authorization plan.
- Audit logging expectations.
- Error handling expectations.
- Privacy/security review.
- Synthetic test data plan.
- Integration test strategy.
- Clinical safety review where applicable.

No API/FHIR behavior is implemented by this document.

---

## 16. AI Runtime Boundary

No runtime component may activate AI clinical support without an approved AI boundary.

Before AI work, the project needs:

- AI Clinical Support Boundary Specification V0.1.
- Allowed and forbidden AI tasks.
- Physician supervision model.
- Draft-only output rule.
- Audit expectations.
- Risk controls.
- Human factors review.
- Clinical safety review.
- Validation plan.

No AI behavior is implemented by this document.

---

## 17. Frontend Runtime Boundary

No frontend workflow may be introduced without review of:

- Intended user.
- Clinical workflow impact.
- Human factors impact.
- Error states.
- Accessibility expectations.
- Safety messaging.
- Data visibility.
- Audit expectations.
- Rollback method.
- Test method.

No frontend behavior is implemented by this document.

---

## 18. Audit and Security Runtime Boundary

Future runtime behavior must define security and audit expectations before implementation.

Review areas include:

- Authentication assumptions.
- Authorization assumptions.
- RBAC impact.
- Audit log expectations.
- Secrets handling.
- Error logging.
- Security monitoring.
- Backup/restore impact.
- Incident response expectations.

This document does not prove security implementation or cybersecurity certification.

---

## 19. Rollback Boundary

Every future runtime implementation PR must define rollback expectations.

Rollback planning should include:

- Files changed.
- Configuration changes.
- Database changes if any.
- Migration rollback if any.
- Dependency rollback if any.
- Test rollback.
- Operational rollback.
- Documentation rollback.

No runtime rollback is required for this document because no runtime implementation is introduced.

---

## 20. Runtime Implementation Entry Criteria

A future runtime implementation PR may only be considered after:

- Component Inventory V0.1 identifies the candidate component.
- Trust Boundary Register V0.1 identifies the related boundary.
- Runtime Boundary Specification V0.1 defines runtime constraints.
- Risk review is completed.
- Security/privacy review is completed.
- Test strategy is defined.
- Rollback strategy is defined.
- Scope is limited to one component or one narrow implementation area.
- No PHI, secrets, or real patient data are included.
- PR checks show 0 failing and 0 pending before merge.

---

## 21. Review Questions

Reviewers should ask:

- Does the proposed runtime work have a defined component?
- Does it have a defined boundary?
- Does it affect OpenEMR core behavior?
- Does it affect patient data?
- Does it introduce SQL or migration?
- Does it introduce API/FHIR behavior?
- Does it introduce AI behavior?
- Does it affect frontend clinical workflow?
- Does it require audit logging?
- Does it require security review?
- Does it have rollback expectations?
- Does it avoid unsupported readiness claims?

---

## 22. Relationship to Existing Documentation

This specification relates to:

- System Context Diagram Plan V0.1.
- Data Flow Diagram Level 0 Plan V0.1.
- Trust Boundary Register V0.1.
- Component Inventory V0.1.
- OpenEMR Integration Boundary Map V0.1.
- ADR Baseline V0.1.
- Risk Register V0.1.
- Clinical Safety Case V0.1.
- Threat Model and Data Governance V0.1.
- Security / Privacy / RBAC / Audit / Backup Gap Refinement V0.1.
- Documentation Index and Review Cadence V0.1.

---

## 23. Exit Criteria

This document is complete when it defines:

- Purpose.
- Scope.
- Non-scope.
- Runtime boundary principle.
- Current runtime status.
- Allowed documentation-stage runtime planning.
- Forbidden runtime actions in documentation PRs.
- OpenEMR core-sensitive boundary.
- Customization boundary.
- Non-production runtime boundary.
- Configuration boundary.
- Dependency boundary.
- Database runtime boundary.
- API/FHIR runtime boundary.
- AI runtime boundary.
- Frontend runtime boundary.
- Audit/security runtime boundary.
- Rollback boundary.
- Runtime implementation entry criteria.
- Status and limitations.

---

## 24. After-Merge Action

After merge:

- Update master locally.
- Confirm working tree is clean.
- Confirm no open PRs remain.
- Confirm this document exists on master.
- Create a separate documentation-index update PR if needed.

Do not start runtime implementation from this document alone.

---

## 25. Status and Limitations

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

No PHP runtime change.

No JavaScript runtime change.

No SQL.

No database migration.

No PHI.

No real patient data.

No AI implementation.

No FHIR/API implementation.

No frontend implementation.

No OpenEMR core-sensitive change.
