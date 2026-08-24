# Phase 2 Controlled Design Roadmap V0.1 - OpenEMR IM Core

## AI-Assisted Solo-Owner Applicability

Eligible documentation-stage edits to this roadmap may use GPT
multidisciplinary advisory review and the Project Owner decision record under
the AI-Assisted Solo-Owner Governance Policy V0.1. Required reviewer tables are
advisory for those eligible edits.

No such decision authorizes Phase 2 execution or a lifecycle transition.
Runtime, clinical, PHI, pilot, deployment, production, validation, compliance,
certification, regulatory, or external-release gates remain unchanged.

## 1. Purpose

This document defines the Phase 2 Controlled Design Roadmap for OpenEMR IM Core.

The purpose is to move from documentation-stage governance into controlled design planning without authorizing runtime implementation, sandbox execution, real data use, clinical use, pilot use, production use, or commercial deployment.

This document is documentation-stage and design-planning-stage only.

Golden rule:

The system must support clinicians. It must not replace clinicians.

---

## 2. Document Status and Identity

| Field | Value |
|---|---|
| Document | Phase 2 Controlled Design Roadmap V0.1 |
| Project | OpenEMR IM Core |
| Stage | Phase 2 controlled design planning |
| Version | v0.1 |
| Scope | Controlled design roadmap only |
| Owner Role | Governance Owner / Technical Owner |
| Reviewer Roles | Clinical Safety Owner, Human Factors Reviewer, Privacy/Security Owner, Data Governance Owner, Documentation Owner, Operations Owner, Release Owner |
| Runtime Status | No runtime implementation |
| Clinical Use Status | Not for clinical use |
| Gate Source | Gate Review Package V0.1 |

This document does not authorize implementation.

This document does not authorize sandbox execution.

This document does not authorize clinical, pilot, production, or commercial use.

---

## 3. Phase 2 Entry Basis

Phase 2 entry is based on Gate Review Package V0.1.

Gate recommendation:

CONDITIONAL GO to Phase 2 Controlled Design Roadmap.

Phase 2 is allowed only within these boundaries:

- Controlled design planning.
- No runtime implementation.
- No PHI.
- No real patient data.
- No SQL.
- No database migration.
- No FHIR/API implementation.
- No frontend implementation.
- No AI implementation.
- No OpenEMR core-sensitive change.
- No unsupported readiness, validation, compliance, certification, or commercial claim.

---

## 4. Scope

This roadmap covers:

- Phase 2 objectives.
- Phase 2 deliverables.
- Controlled design boundaries.
- Planned document sequence.
- Design review gates.
- Required reviewers.
- Evidence expectations.
- Stop rules.
- Phase 2 exit criteria.
- Conditions before any future implementation candidate.

---

## 5. Out of Scope

This roadmap does not include:

- Runtime code.
- SQL execution.
- Database migration.
- FHIR/API implementation.
- Frontend implementation.
- AI implementation.
- Machine learning model execution.
- Autonomous clinical decision support.
- OpenEMR core-sensitive changes.
- Sandbox execution.
- Prototype execution.
- Clinical use.
- Pilot use.
- Production use.
- Commercial deployment.
- Real patient data.
- PHI.
- Secrets.
- Production credentials.
- Sensitive logs.
- Database dumps.

This roadmap does not claim:

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

## 6. Phase 2 Objective

The objective of Phase 2 is to prepare a controlled design baseline that can support a future implementation candidate review.

Phase 2 should answer:

- What is the intended controlled design scope?
- What data flows may exist in a future controlled environment?
- What requirements will govern future implementation?
- What verification approach will be required?
- What prototype boundaries must exist?
- What sandbox authorization is required before execution?
- What evidence must exist before first code is considered?

---

## 7. Phase 2 Deliverables

Planned Phase 2 deliverables:

1. Phase 2 Controlled Design Roadmap V0.1.
2. Data Flow Diagram Plan V0.1.
3. Requirements Baseline V0.1.
4. Verification Plan V0.1.
5. Controlled Prototype Boundary V0.1.
6. Non-Production Sandbox Authorization Package V0.1.
7. First Implementation Candidate Review V0.1.
8. Implementation Gate 1 V0.1.

Each deliverable must be handled as a separate PR unless explicitly justified.

---

## 8. Controlled Design Boundary

Controlled design planning may describe:

- Proposed design boundaries.
- Proposed data flows.
- Proposed requirements.
- Proposed verification strategy.
- Proposed non-production sandbox constraints.
- Proposed prototype scope.
- Proposed evidence requirements.

Controlled design planning must not include:

- Runtime code.
- Working feature implementation.
- Database changes.
- OpenEMR workflow changes.
- Live integration.
- Real patient data.
- Production configuration.
- Patient-facing functionality.
- Clinical decision automation.

---

## 9. Design Review Model

Each Phase 2 document should be reviewed for:

- Scope control.
- Safety boundary.
- Privacy/security boundary.
- Data governance boundary.
- Human factors boundary.
- Architecture and integration boundary.
- Claims boundary.
- Evidence expectations.
- Stop-rule alignment.

A design document may be approved for planning without authorizing implementation.

---

## 10. Required Reviewers by Area

| Area | Required Reviewers |
|---|---|
| Data flow | Technical Owner, Privacy/Security Owner, Data Governance Owner |
| Requirements | Governance Owner, Technical Owner, Clinical Safety Owner |
| Verification | Technical Owner, Quality/Verification Reviewer, Governance Owner |
| Prototype boundary | Technical Owner, Clinical Safety Owner, Human Factors Reviewer |
| Sandbox authorization | Operations Owner, Privacy/Security Owner, Data Governance Owner |
| Implementation candidate | Governance Owner, Technical Owner, Clinical Safety Owner, Release Owner |
| Gate decision | Governance Owner, Release Owner, Documentation Owner |

---

## 11. Evidence Expectations

Phase 2 should create planning evidence, not runtime evidence.

Expected evidence:

- Design roadmap.
- Data flow plan.
- Requirements baseline.
- Verification plan.
- Prototype boundary.
- Sandbox authorization package.
- Implementation candidate review.
- Gate decision.

Not expected yet:

- Runtime test results.
- Prototype execution evidence.
- Clinical validation evidence.
- Production readiness evidence.
- Security certification evidence.
- Regulatory submission evidence.

---

## 12. Stop Rules

Stop Phase 2 work if:

- PHI is introduced.
- Real patient data is introduced.
- Secrets or production credentials are introduced.
- SQL or migration is proposed without authorization.
- Runtime implementation appears before gate approval.
- FHIR/API implementation appears before gate approval.
- Frontend implementation appears before human factors review.
- AI/CDS implementation appears before explicit authorization.
- OpenEMR core-sensitive change appears before review.
- Unsupported readiness, validation, compliance, certification, or commercial claim appears.
- Phase 2 scope expands into implementation.

---

## 13. Phase 2 Exit Criteria

Phase 2 may be considered ready for Implementation Gate 1 only when:

- Data Flow Diagram Plan exists.
- Requirements Baseline exists.
- Verification Plan exists.
- Controlled Prototype Boundary exists.
- Non-Production Sandbox Authorization Package exists.
- First Implementation Candidate Review exists.
- Risks and claims are reviewed.
- No PHI is introduced.
- No unsupported claim is introduced.
- CI is green for all Phase 2 PRs.
- Gate decision is documented.

Phase 2 exit does not equal production readiness, pilot readiness, clinical validation, regulatory compliance, or cybersecurity certification.

---

## 14. Relationship to Gate Review Package V0.1

Gate Review Package V0.1 recommended:

CONDITIONAL GO to Phase 2 Controlled Design Roadmap.

This roadmap implements that next planning step.

This document does not expand the gate into implementation.

---

## 15. Relationship to Prior Documentation

This roadmap depends on:

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

This roadmap does not replace those documents.

---

## 16. Post-PR #216 Phase 2 Readiness Planning Decision

Post-PR #216 inspection selected this Phase 2 Controlled Design Roadmap as the single source-of-truth target for recording the next planning decision.

Decision: CONDITIONAL GO for documentation-only Phase 2 readiness planning.

This decision authorizes only narrow documentation planning to record Phase 2 readiness conditions.

It does not authorize Phase 2 execution, implementation, runtime behavior, sandbox execution, real patient data use, PHI use, SQL execution, database migration, API/FHIR implementation, AI/CDS runtime, clinical use, pilot use, production use, deployment, validation, regulatory compliance, cybersecurity certification, production readiness, medical-device readiness, commercial readiness, or Phase closure.

Conditions and missing evidence that remain open:

- Future gate execution is still required before any Phase 2 execution claim.
- Requirements, risk, evidence, and traceability artifacts still contain needs-population and required-future-evidence signals.
- Evidence registry population and future evidence review remain required.
- Risk control linkage, residual risk review, and clinical safety review remain required.
- Traceability maintenance and complete requirements-risk-control-test-evidence linkage remain required.
- Any future stronger gate must preserve safety, privacy, claim-control, no-PHI, no-runtime, no-SQL, no-API/FHIR, no-AI/CDS-runtime, and no-clinical-use boundaries.

This entry is documentation-only and records a planning decision only.

## 17. Reviewer Checklist

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
- Phase 2 remains controlled design planning only.
- Relationship to Gate Review Package V0.1 is accurate.
- Unicode/Bidi warning is checked if GitHub displays one.

---

## 18. Definition of Done

This document is complete when:

- Purpose is defined.
- Entry basis is documented.
- Scope is defined.
- Out-of-scope is defined.
- Phase 2 objective is documented.
- Phase 2 deliverables are documented.
- Controlled design boundary is documented.
- Review model is documented.
- Required reviewers are documented.
- Evidence expectations are documented.
- Stop rules are documented.
- Exit criteria are documented.
- Relationship to Gate Review Package V0.1 is documented.
- Reviewer checklist is included.
- No PHI is introduced.
- No SQL is introduced.
- No runtime implementation is introduced.
- No unsupported readiness, validation, compliance, certification, or commercial claim is introduced.

---

## 19. After-Merge Action

After this PR is merged, the next planned documentation step is:

Data Flow Diagram Plan V0.1.

Do not start the next PR until:

- This PR is merged.
- master is updated locally.
- Working tree is clean.
- The PR body file is removed locally.
- custom/im-core/docs/roadmap/phase-2-controlled-design-roadmap-v0.1.md exists on master.

---

## 20. Status

Phase 2 controlled design roadmap.

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
