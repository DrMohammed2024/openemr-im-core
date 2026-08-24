# Data Flow Diagram Plan V0.1 - OpenEMR IM Core

## AI-Assisted Solo-Owner Applicability

Eligible non-executable documentation changes to this plan may use GPT
technical, privacy-security, and clinical-boundary advisory review plus the
Project Owner decision record under the AI-Assisted Solo-Owner Governance Policy
V0.1. Listed reviewer roles are advisory for eligible work.

Operational integration, PHI/data flows, runtime, API/FHIR, database,
production-security, deployment, validation, or external release remains
outside this model and retains applicable qualified-human gates.

## 1. Purpose

This document defines the Data Flow Diagram Plan V0.1 for OpenEMR IM Core.

The purpose is to plan future data flow diagrams for controlled design review without authorizing runtime implementation, live integration, SQL, database migration, FHIR/API implementation, frontend implementation, AI implementation, real patient data, or PHI.

This document is documentation-stage and design-planning-stage only.

Golden rule:

The system must support clinicians. It must not replace clinicians.

---

## 2. Document Status and Identity

| Field | Value |
|---|---|
| Document | Data Flow Diagram Plan V0.1 |
| Project | OpenEMR IM Core |
| Stage | Phase 2 controlled design planning |
| Version | v0.1 |
| Scope | Data flow diagram planning only |
| Owner Role | Technical Owner / Data Governance Owner |
| Reviewer Roles | Privacy/Security Owner, Governance Owner, Clinical Safety Owner, Human Factors Reviewer, Documentation Owner, Operations Owner |
| Runtime Status | No runtime implementation |
| Data Status | Synthetic/planning only |
| Clinical Use Status | Not for clinical use |

This document does not create a data flow diagram implementation.

This document does not authorize data processing.

This document does not authorize clinical, pilot, production, or commercial use.

---

## 3. Phase 2 Basis

This document follows:

- Gate Review Package V0.1.
- Phase 2 Controlled Design Roadmap V0.1.

The prior gate recommendation was:

CONDITIONAL GO to Phase 2 Controlled Design Roadmap.

This document remains within controlled design planning only.

---

## 4. Scope

This plan covers:

- Future data flow diagram objectives.
- Planned diagram levels.
- Future actors and systems to evaluate.
- Data categories to classify.
- Trust boundaries.
- Data lifecycle boundaries.
- Security and privacy review points.
- Synthetic-only planning constraints.
- Evidence expectations.
- Stop rules.
- Exit criteria before future design approval.

---

## 5. Out of Scope

This document does not include:

- Runtime implementation.
- SQL execution.
- Database migration.
- FHIR/API implementation.
- Frontend implementation.
- AI implementation.
- Machine learning model execution.
- Autonomous clinical decision support.
- OpenEMR core-sensitive changes.
- Live data exchange.
- Production endpoint.
- Patient-facing endpoint.
- Real patient data.
- PHI.
- Secrets.
- Production credentials.
- Sensitive logs.
- Database dumps.
- Sandbox execution.
- Prototype execution.
- Pilot execution.
- Production deployment.
- Commercial deployment.

This document does not claim:

- Demo readiness.
- Pilot readiness.
- Production readiness.
- Commercial readiness.
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

---

## 6. Data Flow Diagram Objective

Future data flow diagrams should help reviewers understand:

- What systems may interact.
- What data categories may move.
- Where data may enter.
- Where data may be stored.
- Where data may be transformed.
- Where data may leave.
- What trust boundaries exist.
- What controls may be required.
- What risks may require mitigation.
- What evidence will be needed before implementation.

A diagram is planning evidence only. It is not implementation evidence.

---

## 7. Planned Diagram Levels

Future diagram work should include these levels:

| Level | Purpose |
|---|---|
| Level 0 Context Diagram | Shows OpenEMR IM Core boundary and external actors |
| Level 1 Logical Data Flow | Shows planned logical flows between components |
| Level 2 Trust Boundary Diagram | Shows boundaries for user, application, database, logs, AI, and external interfaces |
| Level 3 Future Implementation Candidate Flow | Used only after requirements and sandbox authorization planning |

Level 3 must not be created as implementation authorization.

---

## 8. Candidate Actors

Future diagrams may evaluate these candidate actors:

- Physician.
- Clinical reviewer.
- Documentation reviewer.
- Governance reviewer.
- Privacy/security reviewer.
- Human factors reviewer.
- Technical reviewer.
- Operations reviewer.
- Release reviewer.
- Non-production sandbox user.
- Future supervised AI reviewer.

Patient-facing actors are out of scope unless separately authorized.

---

## 9. Candidate Systems and Components

Future diagrams may include planning placeholders for:

- OpenEMR base system.
- OpenEMR IM Core documentation layer.
- Future OpenEMR customization layer.
- Future non-production sandbox.
- Future synthetic data source.
- Future audit log concept.
- Future RBAC concept.
- Future verification evidence store.
- Future supervised AI draft-support concept.
- Future reporting or review output concept.

These are planning placeholders only.

No runtime component is implemented by this document.

---

## 10. Data Categories

Future data flow diagrams should classify planned data categories:

| Data Category | Current Status | Boundary |
|---|---|---|
| PHI | Prohibited | Must not be used |
| Real patient data | Prohibited | Must not be used |
| Synthetic patient data | Planning allowed | Must be clearly labeled |
| Configuration data | Planning allowed | No secrets |
| Documentation data | Allowed | No PHI/secrets |
| Audit metadata | Future planning only | No live audit claim |
| Workflow metadata | Future planning only | No clinical-use claim |
| AI input/output data | Future planning only | Physician-supervised draft-only if ever authorized |
| FHIR/API payloads | Future planning only | No implementation in this document |
| Logs | Planning allowed only as sanitized examples | No sensitive logs |

---

## 11. Trust Boundaries

Future diagrams should explicitly identify trust boundaries, including:

- User boundary.
- Browser/client boundary.
- OpenEMR application boundary.
- OpenEMR IM Core customization boundary.
- Database boundary.
- Logging boundary.
- Audit boundary.
- Backup boundary.
- External interface boundary.
- Future AI boundary.
- Non-production sandbox boundary.
- Production boundary.

No production trust boundary may be crossed by this phase.

---

## 12. Data Lifecycle Planning

Future diagrams should consider the data lifecycle:

1. Data creation.
2. Data entry.
3. Data validation.
4. Data processing.
5. Data storage.
6. Data retrieval.
7. Data display.
8. Data export.
9. Data logging.
10. Data retention.
11. Data deletion.
12. Data archival.

For current phase, only planning discussion is permitted.

---

## 13. Security and Privacy Review Points

Future data flow diagrams must support review of:

- PHI exclusion.
- Synthetic-only planning.
- Authentication boundary.
- Authorization boundary.
- RBAC assumptions.
- Audit logging assumptions.
- Logging and monitoring assumptions.
- Secret handling assumptions.
- Data retention assumptions.
- Backup/restore assumptions.
- External interface assumptions.
- AI data boundary assumptions.
- Incident response assumptions.

This document does not implement any security or privacy control.

---

## 14. Clinical Safety Review Points

Future diagrams should help reviewers identify:

- Where clinician review occurs.
- Where draft outputs may appear.
- Where patient-facing exposure could occur.
- Where false reassurance could occur.
- Where alert fatigue could occur.
- Where automation bias could occur.
- Where delayed review could occur.
- Where unsafe workflow assumptions could occur.

Future AI outputs, if ever introduced, must remain physician-supervised and draft-only.

---

## 15. Human Factors Review Points

Future diagrams should support human factors review of:

- User roles.
- Workflow touchpoints.
- Information display points.
- Review and confirmation points.
- Error recovery points.
- Alert or notification points.
- Training and support touchpoints.
- Handoff points.

No UI/workflow implementation is authorized by this document.

---

## 16. AI Data Boundary

Current project state includes no AI implementation.

Future AI-related diagrams, if authorized later, must show:

- Input source.
- Data minimization boundary.
- Synthetic/non-production boundary.
- Model/service boundary.
- Draft output boundary.
- Physician review point.
- Rejection/editing path.
- Audit path.
- Human accountability owner.

AI must not be autonomous.

AI must not diagnose, prescribe, triage emergencies, or replace clinician judgment.

---

## 17. FHIR/API Boundary

Current project state includes no FHIR/API implementation.

Future FHIR/API diagrams, if authorized later, must define:

- Source system.
- Destination system.
- Payload category.
- Authentication boundary.
- Authorization boundary.
- Error handling.
- Logging boundary.
- Consent/privacy considerations.
- Data minimization.
- Verification evidence.

No FHIR/API endpoint, payload, integration, or runtime behavior is implemented by this document.

---

## 18. Database Boundary

Current project state includes no SQL or database migration.

Future database-related diagrams, if authorized later, must define:

- Data entity categories.
- Read/write boundaries.
- Storage boundaries.
- Migration assumptions.
- Backup assumptions.
- Restore assumptions.
- Retention assumptions.
- Audit requirements.
- Access control requirements.

No SQL is introduced by this document.

No database migration is introduced by this document.

---

## 19. Diagram Evidence Template

Future diagram evidence should include:

| Field | Required Content |
|---|---|
| Diagram ID | Unique identifier |
| Diagram level | L0 / L1 / L2 / L3 |
| Version | Diagram version |
| Date | Review date |
| Owner | Responsible owner |
| Scope | What the diagram covers |
| Data categories | Data classifications shown |
| Trust boundaries | Boundaries shown |
| Risks linked | Related risk IDs |
| Requirements linked | Related requirement IDs |
| Reviewers | Required reviewer roles |
| Decision | Accept / revise / reject |
| Evidence link | Link to approved artifact |

---

## 20. Review Workflow

Future data flow diagrams should follow this workflow:

1. Draft diagram scope.
2. Identify actors.
3. Identify systems/components.
4. Identify data categories.
5. Identify trust boundaries.
6. Identify data lifecycle steps.
7. Link risks.
8. Link requirements.
9. Review privacy/security.
10. Review clinical safety.
11. Review human factors.
12. Review technical architecture.
13. Record decision.
14. Update traceability.

No diagram should authorize implementation by itself.

---

## 21. Stop Rules

Stop data flow diagram work if:

- PHI is introduced.
- Real patient data is introduced.
- Secrets are included.
- Production credentials are included.
- Sensitive logs are included.
- SQL or migration is proposed as part of this PR.
- Runtime implementation is introduced.
- FHIR/API implementation is introduced.
- Frontend implementation is introduced.
- AI implementation is introduced.
- OpenEMR core-sensitive change is introduced.
- Diagram implies clinical validation.
- Diagram implies production readiness.
- Diagram implies regulatory compliance.
- Diagram implies cybersecurity certification.
- Diagram authorizes implementation without gate approval.

---

## 22. Exit Criteria

This plan is complete when:

- Diagram objectives are defined.
- Diagram levels are defined.
- Candidate actors are defined.
- Candidate systems/components are defined.
- Data categories are classified.
- Trust boundaries are defined.
- Data lifecycle planning is defined.
- Security/privacy review points are defined.
- Clinical safety review points are defined.
- Human factors review points are defined.
- AI boundary is defined.
- FHIR/API boundary is defined.
- Database boundary is defined.
- Diagram evidence template is defined.
- Review workflow is defined.
- Stop rules are defined.
- No PHI is introduced.
- No runtime implementation is introduced.
- No unsupported claim is introduced.

---

## 23. Relationship to Phase 2 Controlled Design Roadmap V0.1

Phase 2 Controlled Design Roadmap V0.1 identifies Data Flow Diagram Plan V0.1 as the next controlled design deliverable.

This document implements that planning step.

This document does not expand Phase 2 into implementation.

---

## 24. Relationship to Gate Review Package V0.1

Gate Review Package V0.1 allowed a conditional transition to Phase 2 controlled design planning.

This document remains inside that conditional gate.

This document does not authorize runtime, sandbox execution, clinical use, pilot use, production use, or commercial use.

---

## 25. Relationship to Prior Documentation

This plan depends on:

- Evidence Registry and Evidence Templates V0.1.
- Traceability Matrix V0.1.
- Risk Register V0.1.
- Pull Request Template and Stop Rules V0.1.
- Clinical Safety Case V0.1.
- Human Factors and Usability Risk Plan V0.1.
- Security / Privacy / RBAC / Audit / Backup Gap Refinement V0.1.
- Threat Model and Data Governance V0.1.
- OpenEMR Integration Boundary Map V0.1.
- ADR Baseline V0.1.
- Non-Production Reproducible Install Plan V0.1.
- Synthetic Demo Data and Demo Boundary V0.1.
- Training and Support Package V0.1.
- Commercial Claims Policy and Claims Register V0.1.
- Documentation Index and Review Cadence V0.1.
- Gate Review Package V0.1.
- Phase 2 Controlled Design Roadmap V0.1.

This document does not replace those documents.

---

## 26. Reviewer Checklist

Reviewers should confirm:

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
- No clinical, pilot, production, or commercial use claim.
- Data flow plan remains planning-only.
- Relationship to Phase 2 roadmap is accurate.
- Unicode/Bidi warning is checked if GitHub displays one.

---

## 27. After-Merge Action

After this PR is merged, the next planned documentation step is:

Requirements Baseline V0.1.

Do not start the next PR until:

- This PR is merged.
- master is updated locally.
- Working tree is clean.
- The PR body file is removed locally.
- custom/im-core/docs/architecture/data-flow-diagram-plan-v0.1.md exists on master.

---

## 28. Status

Phase 2 data flow diagram planning.

No runtime implementation.

No SQL.

No database migration.

No PHI.

No real patient data.

No AI implementation.

No FHIR/API implementation.

No frontend implementation.

No OpenEMR core-sensitive change.

Not clinically validated.

Not usability validated.

Not human factors validated.

Not regulatory compliant.

Not cybersecurity certified.

Not demo-ready.

Not pilot-ready.

Not production-ready.

Not commercially deployment-ready.
