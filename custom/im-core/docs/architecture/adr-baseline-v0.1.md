# ADR Baseline V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines the initial Architecture Decision Record baseline for OpenEMR IM Core.

The purpose is to record foundational project decisions before any runtime implementation, sandbox implementation, FHIR/API implementation, frontend implementation, AI implementation, SQL, database migration, OpenEMR core-sensitive change, pilot, production deployment, or commercial claim.

This document is documentation-stage only.

Golden rule:

The system must support clinicians. It must not replace clinicians.

---

## 2. Document Status and Identity

| Field | Value |
|---|---|
| Document | ADR Baseline V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage only |
| Version | v0.1 |
| Owner Role | Technical Owner / Governance Owner |
| Reviewer Roles | Clinical Safety Owner, Human Factors Reviewer, Privacy/Security Owner, Documentation Owner, Operations Owner, Release Owner |
| Runtime Status | No runtime implementation |
| Clinical Use Status | Not for clinical use |

This document records decisions.

This document does not implement decisions.

This document does not authorize runtime work.

---

## 3. Scope

This ADR baseline records foundational architecture and governance decisions for:

- Documentation-first governance.
- PR scope control.
- No PHI in GitHub.
- No runtime before gate approval.
- No SQL before gate approval.
- No OpenEMR core-sensitive changes before gate approval.
- OpenEMR-native / structured data preference.
- No autonomous clinical decision support.
- No FHIR/API before explicit approval.
- No frontend before human factors review.
- No unsupported readiness, validation, compliance, or certification claims.
- Evidence-driven lifecycle progression.
- Clinician authority preservation.

---

## 4. Out of Scope

This document does not include:

- Runtime code.
- PHP implementation.
- JavaScript implementation.
- SQL.
- SQL execution.
- Database migration.
- Schema change.
- OpenEMR core-sensitive change.
- FHIR/API implementation.
- Frontend implementation.
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

## 5. ADR Format

Each ADR in this baseline uses:

| Field | Meaning |
|---|---|
| ADR ID | Unique decision identifier |
| Decision | The decision made |
| Status | Current status |
| Context | Why the decision is needed |
| Rationale | Why this decision is preferred |
| Consequences | Expected impact |
| Controls | Boundaries or safeguards |
| Future Review Trigger | When decision must be revisited |

---

## 6. ADR-001: Documentation-First Governance

| Field | Value |
|---|---|
| ADR ID | ADR-001 |
| Decision | OpenEMR IM Core will use documentation-first governance before runtime implementation. |
| Status | Accepted for documentation-stage |
| Context | The project is medical-context software and must avoid premature implementation without safety, privacy, risk, traceability, and evidence planning. |
| Rationale | Documentation-first work reduces uncontrolled scope expansion and prevents unsupported readiness claims. |
| Consequences | More PRs are documentation-only before code is introduced. Runtime progress is slower but safer. |
| Controls | Runtime code requires separate gate approval. |
| Future Review Trigger | Revisit at Gate Review Package V0.1 and Implementation Gate 1. |

---

## 7. ADR-002: One PR, One Primary Purpose

| Field | Value |
|---|---|
| ADR ID | ADR-002 |
| Decision | Each PR should have one primary purpose and one primary scope. |
| Status | Accepted |
| Context | Mixed documentation/runtime PRs increase review risk and can hide unsafe scope expansion. |
| Rationale | The PR #98 and PR #100 sequence demonstrated the value of separating documentation-only changes from runtime fixes. |
| Consequences | Some work requires more PRs, but review clarity improves. |
| Controls | Documentation PRs must not include runtime fixes. Runtime fixes must be separate. |
| Future Review Trigger | Revisit if project adopts a formal release train. |

---

## 8. ADR-003: No PHI in GitHub

| Field | Value |
|---|---|
| ADR ID | ADR-003 |
| Decision | No PHI, real patient data, sensitive logs, secrets, credentials, or database dumps may be committed to GitHub. |
| Status | Accepted |
| Context | The project operates in a healthcare context and may later involve sensitive workflows. |
| Rationale | Preventing PHI in source control is a foundational privacy and security control. |
| Consequences | Examples, tests, screenshots, and logs must be synthetic or sanitized. |
| Controls | PR verification must check for PHI/secrets/sensitive logs. |
| Future Review Trigger | Revisit before sandbox, validation, pilot, and production phases. |

---

## 9. ADR-004: No Runtime Before Gate Approval

| Field | Value |
|---|---|
| ADR ID | ADR-004 |
| Decision | Runtime implementation is not allowed until explicit gate approval. |
| Status | Accepted for current stage |
| Context | Runtime behavior can affect workflows, safety assumptions, security posture, and user interpretation. |
| Rationale | Prevents premature implementation before requirements, risks, and verification plans exist. |
| Consequences | The project remains documentation-stage until a later gate allows controlled implementation. |
| Controls | Runtime PRs require implementation authorization, traceability, risk update, and verification plan. |
| Future Review Trigger | Revisit at First Code PR Authorization. |

---

## 10. ADR-005: No SQL or Database Migration Before Gate Approval

| Field | Value |
|---|---|
| ADR ID | ADR-005 |
| Decision | SQL, database migrations, schema changes, seed data, and database dumps are blocked unless explicitly authorized. |
| Status | Accepted |
| Context | Database changes can affect data integrity, privacy, rollback, and upgrade behavior. |
| Rationale | Avoiding database changes at documentation-stage prevents irreversible or poorly reviewed impact. |
| Consequences | Early work must not depend on schema changes. |
| Controls | Any future SQL requires migration review, rollback plan, data governance review, and verification evidence. |
| Future Review Trigger | Revisit during sandbox and implementation planning. |

---

## 11. ADR-006: OpenEMR Core-Sensitive Changes Require Separate Authorization

| Field | Value |
|---|---|
| ADR ID | ADR-006 |
| Decision | OpenEMR core-sensitive changes are prohibited in documentation PRs and require separate authorization. |
| Status | Accepted |
| Context | OpenEMR core files affect system stability and upstream compatibility. |
| Rationale | Core-sensitive changes must be isolated, justified, reviewed, and tested separately. |
| Consequences | Documentation PRs remain low-risk. Runtime fixes are handled separately, as in PR #100. |
| Controls | PR review must verify no unintended OpenEMR core-sensitive changes. |
| Future Review Trigger | Revisit when implementation scope includes OpenEMR integration. |

---

## 12. ADR-007: Prefer OpenEMR-Native and Structured Data Before Free Text

| Field | Value |
|---|---|
| ADR ID | ADR-007 |
| Decision | Future design should prefer OpenEMR-native structured data and LBF-style structured boundaries before free-text/NLP approaches. |
| Status | Accepted for planning |
| Context | Structured data is easier to classify, trace, verify, and govern than free text. |
| Rationale | Reduces ambiguity, privacy risk, and uncontrolled clinical interpretation. |
| Consequences | Free-text and NLP are deferred until stronger governance exists. |
| Controls | Any free-text use requires a separate gate and stronger privacy/safety evidence. |
| Future Review Trigger | Revisit during data flow and requirements phases. |

---

## 13. ADR-008: No Autonomous Clinical Decision Support

| Field | Value |
|---|---|
| ADR ID | ADR-008 |
| Decision | The system must not provide autonomous clinical decision support, diagnosis, prescribing, or emergency triage automation. |
| Status | Accepted |
| Context | Autonomous clinical recommendations can create safety, regulatory, usability, and liability risks. |
| Rationale | The project principle is clinician support, not clinician replacement. |
| Consequences | Future features must preserve clinician authority and avoid unsupported medical claims. |
| Controls | Clinical safety review and claims review required for any workflow-affecting feature. |
| Future Review Trigger | Revisit only through formal clinical, regulatory, and safety review. |

---

## 14. ADR-009: No FHIR/API Implementation Before Explicit Gate Approval

| Field | Value |
|---|---|
| ADR ID | ADR-009 |
| Decision | FHIR/API implementation is out of scope until explicitly authorized by a future gate. |
| Status | Accepted |
| Context | API integration can introduce authentication, authorization, privacy, audit, and interoperability risks. |
| Rationale | FHIR/API work requires interface control, data flow, security, privacy, and verification evidence. |
| Consequences | Current work may document API boundaries but must not implement API behavior. |
| Controls | Future API PRs require interface control document and gate approval. |
| Future Review Trigger | Revisit during interoperability strategy or implementation planning. |

---

## 15. ADR-010: No Frontend or Workflow UI Before Human Factors Review

| Field | Value |
|---|---|
| ADR ID | ADR-010 |
| Decision | Frontend, UI, alert, workflow, or user-facing implementation is blocked until human factors and clinical safety review authorize it. |
| Status | Accepted |
| Context | UI can influence clinician interpretation, workflow burden, alert fatigue, and false reassurance. |
| Rationale | Human factors review must precede user-facing behavior. |
| Consequences | UI implementation is delayed until appropriate evidence and review exist. |
| Controls | Future frontend PRs require usability boundary and verification plan. |
| Future Review Trigger | Revisit before prototype UI work. |

---

## 16. ADR-011: Evidence-Driven Progression

| Field | Value |
|---|---|
| ADR ID | ADR-011 |
| Decision | The project progresses through gates based on documented evidence, not assumptions or ambition. |
| Status | Accepted |
| Context | Medical-context projects require proof of controls, not unsupported declarations. |
| Rationale | Evidence-based gates reduce safety, privacy, and compliance risk. |
| Consequences | Every major phase must produce reviewable records. |
| Controls | Evidence registry, traceability matrix, risk register, and gate review documents are required. |
| Future Review Trigger | Revisit during Gate Review Package V0.1. |

---

## 17. ADR-012: No Unsupported Readiness or Compliance Claims

| Field | Value |
|---|---|
| ADR ID | ADR-012 |
| Decision | The project must not claim readiness, validation, compliance, certification, production suitability, or commercial readiness without evidence and formal review. |
| Status | Accepted |
| Context | Unsupported claims can mislead users, reviewers, customers, and regulators. |
| Rationale | Claims must match evidence. |
| Consequences | Documentation must explicitly state limitations. |
| Controls | PR body and documents must include stop boundaries and status limitations. |
| Future Review Trigger | Revisit at Commercial Claims Policy and Claims Register V0.1. |

---

## 18. ADR-013: CI Green Before Merge

| Field | Value |
|---|---|
| ADR ID | ADR-013 |
| Decision | PRs should not be merged with failing or pending required checks. |
| Status | Accepted |
| Context | CI failures can reveal unrelated but real runtime instability, as seen in the PR #98 / PR #100 sequence. |
| Rationale | Green CI maintains repository integrity and audit confidence. |
| Consequences | Documentation PRs may wait for unrelated CI fixes. |
| Controls | Merge only when checks are 0 failing and 0 pending unless maintainers explicitly document non-applicability. |
| Future Review Trigger | Revisit if branch protection or CI policy changes. |

---

## 19. ADR-014: Runtime Fixes Must Remain Separate from Documentation PRs

| Field | Value |
|---|---|
| ADR ID | ADR-014 |
| Decision | Runtime fixes must be handled in separate PRs from documentation-only work. |
| Status | Accepted |
| Context | PR #98 was documentation-only, while PR #100 fixed a birthday reminder runtime blocker. |
| Rationale | This preserves audit clarity and prevents scope creep. |
| Consequences | Separate PRs may be required before documentation can merge if CI is blocked. |
| Controls | Do not expand documentation PRs to fix runtime unless explicitly re-scoped. |
| Future Review Trigger | Revisit during release management process definition. |

---

## 20. ADR-015: Synthetic Data First

| Field | Value |
|---|---|
| ADR ID | ADR-015 |
| Decision | Synthetic data is required for demos, tests, examples, and sandbox planning unless a future data governance gate authorizes otherwise. |
| Status | Accepted |
| Context | Real patient data creates privacy, legal, security, and ethical obligations. |
| Rationale | Synthetic data enables safer early-stage development and review. |
| Consequences | Demo realism may be limited until formal data governance exists. |
| Controls | Synthetic data must be labeled and must not be copied from real records. |
| Future Review Trigger | Revisit during Synthetic Demo Data and Demo Boundary V0.1. |

---

## 21. ADR-016: Clinician Authority Must Be Preserved

| Field | Value |
|---|---|
| ADR ID | ADR-016 |
| Decision | Clinicians remain the decision-makers; the system must support but not replace them. |
| Status | Accepted |
| Context | Medical software can create automation bias or false reassurance. |
| Rationale | Clinician authority is a core safety boundary. |
| Consequences | Future UX, workflow, and claims must reinforce human oversight. |
| Controls | Clinical safety and human factors review required for workflow features. |
| Future Review Trigger | Revisit at every clinical workflow gate. |

---

## 22. Decision Review Cadence

ADR baseline review should occur:

- At each gate review.
- Before first runtime implementation.
- Before sandbox authorization.
- Before prototype execution.
- Before validation planning.
- Before pilot planning.
- Before production readiness planning.
- After major incident or deviation.
- After significant regulatory, security, or architecture change.

---

## 23. Required Future ADRs

Future ADRs may be needed for:

- Sandbox architecture.
- Data flow design.
- Requirements baseline.
- Verification strategy.
- UI strategy.
- FHIR/API strategy.
- RBAC strategy.
- Audit strategy.
- Backup/restore strategy.
- AI/analytics prohibition or authorization.
- Deployment model.
- Support model.
- Release model.
- Change control model.

---

## 24. Relationship to PR #92

PR #92 created the Evidence Registry and Evidence Templates V0.1.

This ADR baseline depends on evidence-driven progression and future evidence capture.

This document does not modify PR #92.

---

## 25. Relationship to PR #93

PR #93 created the Traceability Matrix V0.1.

This ADR baseline supports traceability by recording foundational decisions that future requirements and risks can reference.

This document does not modify PR #93.

---

## 26. Relationship to PR #94

PR #94 created the Risk Register V0.1.

This ADR baseline supports risk controls by documenting architectural and governance decisions that reduce uncontrolled scope expansion.

This document does not modify PR #94.

---

## 27. Relationship to PR #95

PR #95 created Pull Request Template and Stop Rules V0.1.

This ADR baseline formalizes several stop-rule decisions as architecture decisions.

This document does not modify PR #95.

---

## 28. Relationship to PR #96

PR #96 created the Clinical Safety Case V0.1.

This ADR baseline reinforces clinician authority, non-replacement, and no autonomous clinical decision support.

This document does not replace PR #96.

---

## 29. Relationship to PR #97

PR #97 created the Human Factors and Usability Risk Plan V0.1.

This ADR baseline blocks frontend and workflow UI until human factors review authorizes it.

This document does not replace PR #97.

---

## 30. Relationship to PR #98

PR #98 created Security / Privacy / RBAC / Audit / Backup Gap Refinement V0.1.

This ADR baseline reinforces no live security/privacy/RBAC/audit/backup claims before implementation evidence exists.

This document does not implement PR #98 controls.

---

## 31. Relationship to PR #100

PR #100 fixed a runtime E2E blocker separately from documentation-only PRs.

This ADR baseline records the architectural governance lesson: runtime fixes must remain separate from documentation PRs.

This document does not modify PR #100.

---

## 32. Relationship to PR #101

PR #101 created Threat Model and Data Governance V0.1.

This ADR baseline reinforces no PHI, synthetic data first, and evidence-driven privacy/data governance.

This document does not replace PR #101.

---

## 33. Relationship to PR #102

PR #102 created OpenEMR Integration Boundary Map V0.1.

This ADR baseline reinforces OpenEMR core-sensitive boundary, FHIR/API boundary, frontend boundary, SQL boundary, and integration gate requirements.

This document does not replace PR #102.

---

## 34. Review Rules

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
- Relationship to PR #92 through PR #102 is accurate.
- Unicode/Bidi warning is checked if GitHub displays one.

---

## 35. Definition of Done

This ADR baseline is complete when:

- Purpose is defined.
- Scope is defined.
- Out of scope is defined.
- ADR format is defined.
- Foundational ADRs are documented.
- Review cadence is documented.
- Future ADR needs are documented.
- Relationship to PR #92 through PR #102 is documented.
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

## 36. After-Merge Action

After this PR is merged, the next planned documentation step is:

Non-Production Reproducible Install Plan V0.1.

Do not start the next PR until:

- This PR is merged.
- `master` is updated locally.
- Working tree is clean.
- The PR body file is removed locally.
- `custom/im-core/docs/architecture/adr-baseline-v0.1.md` exists on `master`.

---

## 37. Status

Documentation-stage ADR baseline.

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
