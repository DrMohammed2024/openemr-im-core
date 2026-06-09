# Formal Reviewer Approval Matrix V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines the formal reviewer approval matrix for OpenEMR IM Core Phase 0 governance artifacts.

The purpose is to clarify which reviewer roles should review which artifact types, what each review means, and what each review does not authorize.

This matrix is a planning-stage governance artifact only.

This matrix does not grant approval.

This matrix does not confirm that any listed reviewer has approved any artifact.

This matrix does not close Phase 0.

This matrix does not authorize runtime implementation, clinical use, production use, demo use, pilot use, commercial use, regulatory compliance claims, cybersecurity certification claims, medical-device readiness claims, or clinical-use authorization.

---

## 2. Scope

This matrix covers reviewer-role expectations for current and future Phase 0 documentation artifacts, including:

- Governance artifacts.
- Documentation index artifacts.
- Roadmap artifacts.
- Requirements artifacts.
- Traceability artifacts.
- Risk artifacts.
- Evidence artifacts.
- Regulatory boundary artifacts.
- Standards-awareness artifacts.
- Privacy and security artifacts.
- Human factors artifacts.
- Clinical safety artifacts.
- AI governance boundary artifacts.
- Phase-gate readiness artifacts.

This matrix is intended to support controlled documentation review and future audit-readiness planning.

---

## 3. Out of Scope

This matrix does not include:

- Actual reviewer signatures.
- Actual approval records.
- Regulatory approval.
- Ethics approval.
- Clinical validation approval.
- Cybersecurity certification approval.
- Medical-device classification decision.
- Production release approval.
- Runtime implementation approval.
- SQL execution approval.
- Database migration approval.
- FHIR/API implementation approval.
- Frontend implementation approval.
- Runtime AI approval.
- Prompt execution approval.
- AI/model integration approval.
- PHI or real patient data approval.
- Phase 0 closure approval.

---

## 4. Reviewer Role Definitions

| Reviewer role | Primary responsibility | Boundary |
|---|---|---|
| Governance Owner | Confirms governance consistency, scope control, and phase-gate discipline | Does not approve clinical use, production use, or regulatory compliance |
| Documentation Owner | Confirms document structure, indexability, versioning, and review cadence alignment | Does not approve technical implementation |
| Technical Owner | Confirms technical feasibility boundaries and OpenEMR-sensitive change awareness | Does not authorize runtime implementation unless separately approved in a later phase |
| Clinical Safety Owner | Reviews clinical safety implications, workflow safety boundaries, and clinical-risk language | Does not authorize clinical use or clinical validation |
| Risk Owner | Reviews risk identification, risk-control planning, and risk linkage expectations | Does not confirm risk controls are implemented or validated |
| Evidence Reviewer | Reviews evidence needs, evidence placeholders, and evidence traceability expectations | Does not confirm evidence completion unless evidence is actually present |
| Privacy-Security Owner | Reviews privacy, no-PHI, secrets, security, and cybersecurity boundary language | Does not grant cybersecurity certification |
| Regulatory Reviewer | Reviews regulatory boundary language, claims control, and standards-awareness framing | Does not grant regulatory compliance or clearance |
| AI Governance Owner | Reviews AI/ML boundary language, no-runtime-AI restrictions, and future-gated AI claims | Does not authorize AI/model integration |
| Operations Owner | Reviews operational readiness boundaries and future release-control implications | Does not authorize production deployment |
| Human Factors Reviewer | Reviews usability, human factors, user-risk, and workflow interaction implications | Does not confirm usability validation |
| Release Owner | Reviews release-readiness constraints and future release-gate needs | Does not authorize production release at Phase 0 |

---

## 5. Approval Meaning

A reviewer approval in future controlled review records may mean:

- The reviewer has reviewed the artifact within their role boundary.
- The reviewer did not identify unresolved blocking issues within their review scope.
- The reviewer agrees that the artifact may proceed within the current documentation-only phase.
- The reviewer agrees that the artifact maintains documented non-authorization boundaries.
- The reviewer agrees that the artifact does not introduce unsupported claims.

A reviewer approval does not mean:

- Clinical use is approved.
- Production use is approved.
- Regulatory compliance is achieved.
- Cybersecurity certification is achieved.
- Medical-device readiness is achieved.
- Clinical validation is complete.
- Risk controls are implemented.
- Evidence is complete.
- Runtime implementation is authorized.
- SQL execution is authorized.
- FHIR/API implementation is authorized.
- Frontend implementation is authorized.
- AI/model integration is authorized.
- PHI or real patient data use is authorized.
- Phase 0 is closed.

---

## 6. Artifact Review Matrix

| Artifact type | Governance Owner | Documentation Owner | Technical Owner | Clinical Safety Owner | Risk Owner | Evidence Reviewer | Privacy-Security Owner | Regulatory Reviewer | AI Governance Owner | Operations Owner | Human Factors Reviewer | Release Owner |
|---|---|---|---|---|---|---|---|---|---|---|---|---|
| Documentation index | Required | Required | Consulted | Optional | Optional | Optional | Optional | Optional | Optional | Optional | Optional | Optional |
| Documentation inventory | Required | Required | Consulted | Consulted | Consulted | Required | Consulted | Optional | Optional | Optional | Optional | Optional |
| Governance roadmap | Required | Required | Required | Consulted | Consulted | Consulted | Consulted | Consulted | Consulted | Consulted | Optional | Optional |
| Phase-gate artifact | Required | Required | Required | Required | Required | Required | Required | Consulted | Consulted | Required | Optional | Consulted |
| Root safety notice | Required | Required | Required | Required | Required | Required | Required | Required | Required | Optional | Optional | Optional |
| Requirements plan | Required | Required | Required | Consulted | Required | Consulted | Optional | Optional | Optional | Optional | Optional | Optional |
| Requirements register | Required | Required | Required | Required | Required | Required | Optional | Optional | Optional | Optional | Optional | Optional |
| Traceability matrix | Required | Required | Required | Required | Required | Required | Consulted | Optional | Consulted | Optional | Optional | Optional |
| Risk register | Required | Required | Required | Required | Required | Required | Consulted | Consulted | Consulted | Optional | Consulted | Optional |
| Evidence registry | Required | Required | Consulted | Consulted | Required | Required | Consulted | Optional | Optional | Optional | Optional | Optional |
| Regulatory boundary statement | Required | Required | Required | Required | Required | Consulted | Required | Required | Required if AI-related | Optional | Optional | Optional |
| Standards-awareness matrix | Required | Required | Required | Required | Required | Required | Consulted | Required | Required if AI-related | Optional | Optional | Optional |
| Privacy/security artifact | Required | Required | Required | Consulted | Required | Required | Required | Consulted | Consulted if AI-related | Optional | Optional | Optional |
| Human factors artifact | Required | Required | Consulted | Required | Required | Consulted | Optional | Optional | Optional | Optional | Required | Optional |
| AI governance artifact | Required | Required | Required | Required | Required | Required | Required | Required | Required | Optional | Consulted | Optional |
| Phase 0 closure readiness checklist | Required | Required | Required | Required | Required | Required | Required | Consulted | Consulted | Required | Consulted | Consulted |
| Future Phase 0 closure report | Required | Required | Required | Required | Required | Required | Required | Required | Required if AI-related | Required | Consulted | Required |

---

## 7. Review Status Legend

| Status | Meaning |
|---|---|
| Required | Reviewer role should review and approve before artifact is considered review-complete |
| Consulted | Reviewer role should be consulted when relevant issues are present |
| Optional | Reviewer role may review but is not normally required for the artifact type |
| Required if AI-related | Reviewer role is required if the artifact references AI/ML, prompt execution, model integration, autonomous CDS, or future AI governance |
| Future-gated | Review is deferred to a later phase and does not authorize current implementation |
| Not approved | Reviewer role has not approved the artifact |
| Approved for current stage | Artifact may proceed within documentation-only planning scope only |

---

## 8. Current Phase 0 Reviewer Coverage Assessment

| Area | Current coverage | Gap |
|---|---|---|
| Documentation governance | Strong | Formal review records still needed |
| Safety boundaries | Strong | Ongoing consistency review needed |
| Claims control | Strong | Continued PR-level claim review needed |
| Requirements foundation | Partial | More formal requirements review needed |
| Traceability foundation | Partial | Populated traceability review needed |
| Risk foundation | Partial | Risk scoring and review records needed |
| Evidence foundation | Partial | Evidence ID population and evidence review records needed |
| Standards awareness | Partial to strong | Future standards applicability review needed |
| Privacy/security | Partial | Future cybersecurity framework and evidence needed |
| Human factors | Partial | More formal human factors review needed |
| AI governance boundary | Strong for prohibition | Future AI applicability review needed if AI work is proposed |
| Phase 0 closure readiness | Partial | Formal closure gap summary and review records needed |

---

## 9. No-Authorization Rules

This matrix must not be interpreted as authorizing:

- Runtime implementation.
- SQL execution.
- Database migration.
- FHIR/API implementation.
- Frontend implementation.
- OpenEMR core-sensitive changes.
- Runtime AI.
- Prompt execution.
- AI/model integration.
- Autonomous clinical decision support.
- Autonomous diagnosis.
- Autonomous treatment recommendation.
- Autonomous prescribing.
- Autonomous emergency triage.
- Patient-facing AI.
- PHI or real patient data use.
- Credentials or secrets use.
- Sensitive logs use.
- Database dumps use.
- Clinical use.
- Production use.
- Demo use.
- Pilot use.
- Commercial use.
- Regulatory compliance.
- Cybersecurity certification.
- Medical-device readiness.
- Clinical-use authorization.
- Phase 0 closure.

---

## 10. Future Review Record Expectations

A future formal review record should identify:

- Artifact title.
- Artifact path.
- Artifact version.
- Review date.
- Review scope.
- Reviewer role.
- Reviewer name or identifier if applicable.
- Review decision.
- Open comments.
- Blocking issues.
- Non-blocking issues.
- Follow-up actions.
- Explicit non-authorization statement.
- Approval limitations.

This document does not create actual review records.

---

## 11. Relationship to Existing Artifacts

| Source ID | Artifact | File path | Relationship |
|---|---|---|---|
| SRC-ROADMAP-001 | Comprehensive Governance and Future Clinical-Use Readiness Roadmap V0.1 | custom/im-core/docs/roadmap/comprehensive-governance-and-future-clinical-use-readiness-roadmap-v0.1.md | Defines future governance and closure-readiness roadmap |
| SRC-PHASE0-001 | Phase 0 Closure Readiness Checklist V0.1 | custom/im-core/docs/roadmap/phase-0-closure-readiness-checklist-v0.1.md | Identifies reviewer roles needed before future closure |
| SRC-SAFETY-001 | Root Safety and Non-Authorization Notice V0.1 | custom/im-core/docs/governance/root-safety-and-non-authorization-notice-v0.1.md | Defines no-authorization boundaries |
| SRC-INDEX-001 | Documentation Index and Review Cadence V0.1 | custom/im-core/docs/index/documentation-index-and-review-cadence-v0.1.md | Provides documentation discoverability |
| SRC-INVENTORY-001 | Documentation Inventory and Artifact Status Matrix V0.1 | custom/im-core/docs/index/documentation-inventory-and-artifact-status-matrix-v0.1.md | Provides artifact visibility and review status |
| SRC-STD-001 | Standards Applicability and Awareness Matrix V0.1 | custom/im-core/docs/regulatory/standards-applicability-and-awareness-matrix-v0.1.md | Defines standards awareness without compliance claims |
| SRC-REQ-001 | Requirements Management Plan V0.1 | custom/im-core/docs/requirements/requirements-management-plan-v0.1.md | Defines requirements management process |
| SRC-TRACE-001 | Requirements Traceability Population Starter V0.1 | custom/im-core/docs/requirements/requirements-traceability-population-starter-v0.1.md | Defines traceability population expectations |
| SRC-RISK-001 | Risk Register V0.1 | custom/im-core/docs/risk/risk-register-v0.1.md | Defines risk register basis |
| SRC-EVID-001 | Evidence Registry and Templates V0.1 | custom/im-core/docs/evidence/evidence-registry-and-templates-v0.1.md | Defines evidence registry and evidence template basis |

---

## 12. Risks

| Risk | Impact | Control |
|---|---|---|
| Matrix is mistaken for actual approval | Premature governance or closure claims | Explicit no-approval language |
| Reviewer role is mistaken for regulatory authority | Unsupported compliance claims | Explicit no-compliance and no-certification language |
| Technical review is mistaken for implementation authorization | Premature runtime work | No-authorization rules |
| Clinical safety review is mistaken for clinical-use approval | Unsafe clinical assumptions | Explicit no-clinical-use language |
| Evidence review is mistaken for evidence completion | Unsupported validation claims | Evidence limitations and future review record expectations |
| Phase 0 closure review is mistaken for closure | Premature Phase 0 closure | Explicit no-closure language |

---

## 13. Review Expectations

This matrix should be reviewed before:

- Any future Phase 0 closure report is drafted.
- Any reviewer approval record template is created.
- Any artifact is described as approved by a reviewer.
- Any artifact changes approval expectations.
- Any runtime implementation is proposed.
- Any SQL, database, FHIR/API, frontend, AI, or PHI-related change is proposed.
- Any clinical-use, production-use, regulatory-compliance, cybersecurity-certification, or medical-device readiness claim is proposed.

---

## 14. Definition of Done

This document is complete when:

- Purpose is documented.
- Scope is documented.
- Out of scope is documented.
- Reviewer role definitions are documented.
- Approval meaning is documented.
- Artifact review matrix is documented.
- Review status legend is documented.
- Current Phase 0 reviewer coverage is documented.
- No-authorization rules are documented.
- Future review record expectations are documented.
- Relationship to existing artifacts is documented.
- Risks are documented.
- Review expectations are documented.
- No actual approval is granted.
- No runtime implementation is introduced.
- No SQL execution is introduced.
- No database migration is introduced.
- No FHIR/API implementation is introduced.
- No frontend implementation is introduced.
- No OpenEMR core-sensitive change is introduced.
- No runtime AI is introduced.
- No prompt execution is introduced.
- No AI/model integration is introduced.
- No PHI, real patient data, credentials, secrets, sensitive logs, or database dumps are introduced.
- No unsupported demo, pilot, production, commercial, clinical validation, regulatory compliance, cybersecurity certification, medical-device readiness, or clinical-use authorization claim is introduced.
- No Phase 0 closure claim is introduced.

---

## 15. After-Merge Action

After this PR is merged, the next documentation step should be separately approved based on current roadmap and remaining Phase 0 gaps.

The formal reviewer approval record template and Phase 0 governance closure gap summary now exist; the next documentation step should be separately approved based on remaining Phase 0 gaps, evidence population needs, and formal reviewer record completion.

Do not treat this matrix as actual reviewer approval.

---

## 16. Status

Documentation-only formal reviewer approval matrix.

Planning-stage only.

Future-gated only.

No actual approval granted.

Not a Phase 0 closure artifact.

No Phase 0 closure claim.

Not for clinical use.

Not production-ready.

Not clinically validated.

No regulatory compliance claim.

No cybersecurity certification claim.

No medical-device readiness claim.

No runtime implementation.

No SQL execution.

No database migration.

No FHIR/API implementation.

No frontend implementation.

No runtime AI.

No prompt execution.

No AI/model integration.
