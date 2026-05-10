# OpenEMR IM Core Master Execution and Governance Roadmap V0.1

## Document Status

| Field | Value |
|---|---|
| Document type | Master execution and governance roadmap |
| Version | V0.1 |
| Project | OpenEMR IM Core |
| Repository | DrMohammed2024/openemr-im-core |
| Stage | Documentation-stage governance planning |
| Status | Draft for current governance stage |
| Scope | Roadmap, governance, phase gates, and safe execution planning |

This roadmap is a documentation-stage governance and execution planning document. It does not authorize production use, clinical use, pilot execution, AI implementation, FHIR/API implementation, OpenEMR core runtime changes, or regulatory/compliance claims. Any transition between phases requires documented gate review and explicit GO decision.

---

## 1. Purpose

This document defines the master execution and governance roadmap for the OpenEMR IM Core project.

It converts long-form lifecycle planning into a concise, reviewable, phase-based roadmap that supports safe progression from documentation-stage governance toward controlled design, non-production implementation, validation planning, pilot planning, production readiness planning, rollout governance, surveillance, and lifecycle renewal.

This roadmap is not a production plan. It is not a clinical validation claim. It is not a regulatory compliance claim. It is a controlled planning document.

---

## 2. Scope

This roadmap covers:

- Governance and documentation baseline.
- Controlled non-runtime design readiness.
- Controlled non-production prototype preparation.
- Limited sandbox implementation planning.
- Non-production validation planning and execution.
- Non-production release planning.
- Pre-pilot and pilot planning boundaries.
- Production readiness planning boundaries.
- Controlled rollout governance.
- Post-deployment surveillance and lifecycle governance.
- Renewal, retirement, or next-generation decision planning.

---

## 3. Non-Scope

This document does not authorize:

- Production use.
- Clinical use.
- Pilot execution.
- Live patient data use.
- AI implementation.
- FHIR/API implementation.
- OpenEMR core runtime changes.
- GitHub Actions workflow changes.
- npm/package-lock changes.
- SQL or database migrations.
- Regulatory compliance claims.
- Cybersecurity certification claims.
- Clinical validation claims.
- Commercial readiness claims.

---

## 4. Current Project State

The current project stage is:

Documentation-first / governance-first / safety-gated development.

The project is currently building:

- Governance documents.
- Risk and safety documentation.
- Traceability and evidence planning.
- Security and privacy boundaries.
- Architecture and data-flow planning.
- SOPs for CI handling and merge safety.
- Documentation index and review cadence.
- Roadmap and gate review artifacts.

The project is not currently claiming:

- Production readiness.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.
- Pilot readiness.
- Commercial readiness.

---

## 5. Non-Negotiable Rules

### 5.1 PR and CI Rule

One PR / one scope / no merge before 0 failing and 0 pending.

A PR is not merge-ready if any of the following exist:

- Failing check.
- Pending check.
- In-progress check.
- Unknown CI state.
- Unexplained cancelled check.
- Unclear diff scope.

### 5.2 Clinical Safety Rule

The system must support clinicians. It must not replace clinicians.

### 5.3 Privacy Rule

Do not include:

- PHI.
- Real patient data.
- Secrets.
- API keys.
- Passwords.
- Database dumps.
- Sensitive logs.

### 5.4 Claims Rule

Do not claim:

- Production readiness.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.
- Legal readiness.
- Commercial readiness.

unless supported by explicit evidence, review, and approval.

---

## 6. Master Phase Model

The project lifecycle is organized into 15 controlled phases.

### Phase 1 — Governance and Documentation Baseline

Goal: establish the core governance documentation foundation.

Includes:

- Evidence Registry.
- Traceability Matrix.
- Risk Register.
- Clinical Safety Case.
- Human Factors Plan.
- Security and Privacy Gap Analysis.
- Threat Model.
- Data Governance.
- Integration Boundary Map.
- ADR Baseline.
- Documentation Index.
- Gate Review Package.

Exit decision: NO-GO / CONDITIONAL GO / GO to controlled design readiness.

### Phase 2 — Controlled Non-Runtime Design Readiness

Goal: convert governance artifacts into controlled design documentation without runtime implementation.

Includes:

- Controlled Design Roadmap.
- Data Flow Diagram Plan.
- Requirements Baseline.
- Verification Plan.
- Controlled Prototype Boundary.
- Non-Production Sandbox Authorization.
- First Implementation Candidate Review.
- Implementation Gate 1.

No runtime implementation is authorized in this phase.

### Phase 3 — Controlled Non-Production Prototype Preparation

Goal: prepare a non-production prototype environment and evidence structure.

Includes:

- Prototype Scope Lock.
- Synthetic Dataset Specification.
- Sandbox Environment Design.
- Prototype Risk Control Update.
- Prototype Verification Protocol.
- Sandbox Access and RBAC Plan.
- Prototype Execution Runbook.
- Prototype Results Evidence Template.
- Prototype Gate Review.

Restrictions:

- Synthetic data only.
- No PHI.
- No clinical use.
- No production use.
- No pilot use.

### Phase 4 — Limited Non-Production Technical Implementation

Goal: authorize limited sandbox-only technical implementation after documented gate approval.

Includes:

- Implementation Scope Lock.
- Minimal Technical Architecture.
- Implementation Traceability Update.
- Sandbox Build Plan.
- First Code PR Authorization.
- Minimal Implementation PR.
- Prototype Verification Execution.
- Risk Register Update After Prototype.
- Human Factors Review After Prototype.
- Security and Privacy Review After Prototype.
- Prototype Outcome Gate.

No implementation begins without explicit gate approval.

### Phase 5 — Controlled Non-Production Validation Planning

Goal: prepare validation protocols before executing validation.

Includes:

- Validation Scope Lock.
- Validation Protocol.
- Synthetic Scenario Test Set.
- Usability Evaluation Protocol.
- Safety Validation Planning.
- Security Test Protocol.
- Privacy and Data Governance Validation Protocol.
- Traceability Verification Package.
- Deviation and CAPA Planning.
- Validation Evidence Collection Plan.
- Validation Readiness Gate.

This phase plans validation. It does not claim validation completion.

### Phase 6 — Controlled Non-Production Validation Execution

Goal: execute approved non-production validation protocols.

Includes:

- Validation Execution Kickoff.
- Synthetic Scenario Execution.
- Usability Evaluation Execution.
- Safety Scenario Review.
- Security Test Execution.
- Privacy and Data Governance Verification.
- Traceability Verification.
- Deviation Log.
- Validation Evidence Package.
- Validation Execution Report.
- Validation Outcome Gate.

This phase does not authorize clinical use or production use.

### Phase 7 — Controlled Non-Production Release Planning and Execution

Goal: prepare and execute a controlled sandbox release.

Includes:

- Non-Production Release Scope Lock.
- Release Risk Assessment.
- Known Issues Register.
- Sandbox Deployment Plan.
- Rollback Plan.
- Access Approval Package.
- Training Readiness Review.
- Support Readiness Review.
- Release Evidence Package.
- Non-Production Release Gate.
- Sandbox Deployment Execution.
- Smoke Test.
- Audit and Log Review.

### Phase 8 — Pre-Pilot Readiness Assessment

Goal: assess whether pilot planning may be considered.

Includes:

- Pre-Pilot Scope Definition.
- Clinical Safety Evidence Gap Review.
- Human Factors Evidence Gap Review.
- Security and Privacy Evidence Gap Review.
- Data Governance Evidence Gap Review.
- Regulatory Pathway Planning.
- Operational Readiness Gap Review.
- Support Model Gap Review.
- Claims Boundary Review.
- Pilot Risk Assessment.
- Pre-Pilot Gate Review.

Possible decisions:

- NO-GO to pilot.
- CONDITIONAL GO to formal pilot planning.
- GO to formal pilot planning.

### Phase 9 — Formal Pilot Planning

Goal: define a controlled pilot plan before any pilot execution.

Includes:

- Pilot Protocol Draft.
- Pilot Site Selection Criteria.
- Participant and Role Definition.
- Pilot Data Governance Plan.
- Clinical Safety Monitoring Plan.
- Incident and Escalation Plan.
- Pilot Training Plan.
- Pilot Support Plan.
- Legal and Regulatory Review Plan.
- Pilot Evidence Collection Plan.
- Pilot Authorization Gate.

This phase does not execute the pilot.

### Phase 10 — Controlled Pilot Execution

Goal: execute a limited pilot only after explicit authorization.

Includes:

- Pilot Kickoff.
- Site Onboarding.
- User Training Completion.
- Access Provisioning.
- Pilot Monitoring.
- Incident Tracking.
- Safety Signal Review.
- Privacy and Security Monitoring.
- Usability Feedback.
- Pilot Evidence Review.
- Pilot Closure Report.

Pilot completion does not automatically imply production readiness.

### Phase 11 — Production Readiness Planning

Goal: plan production readiness without claiming readiness.

Includes:

- Production Scope Definition.
- Production Risk Assessment.
- Production Security Review.
- Production Privacy Review.
- RBAC, Audit, and Backup Evidence.
- Performance and Reliability Planning.
- Operational SOPs.
- Support and SLA Planning.
- Regulatory and Legal Review.
- Commercial Claims Review.
- Production Readiness Gate.

### Phase 12 — Controlled Production Rollout

Goal: execute limited, monitored rollout only after explicit production authorization.

Includes:

- Production Rollout Scope Lock.
- Site or Clinic Eligibility Criteria.
- Deployment Runbook.
- Monitoring Plan.
- Safety Monitoring Plan.
- Privacy and Security Monitoring Plan.
- Incident Response Plan.
- Rollback and Disablement Plan.
- Training Completion Evidence.
- Rollout Authorization Gate.
- Limited Rollout Execution.

### Phase 13 — Post-Deployment Surveillance and Change Control

Goal: monitor safety, privacy, security, usability, and performance after deployment.

Includes:

- Safety Signal Surveillance.
- Incident Trend Review.
- Privacy and Security Event Review.
- User Feedback Trend Review.
- False Positive and False Negative Review.
- Alert Fatigue Review.
- Clinical Oversight Review.
- Corrective Action Tracking.
- Change Impact Assessment.
- Periodic Risk Review.
- Surveillance Report.
- Change Control.
- Maintenance Release Governance.

### Phase 14 — Scale-Up, Regulatory Maturation, and Enterprise Governance

Goal: prepare future multi-site, regulatory, and enterprise maturity.

Includes:

- Scale-Up Assessment.
- Multi-Site Governance.
- Regulatory and QMS Maturation.
- IEC 62304 alignment planning.
- ISO 14971 alignment planning.
- IEC 62366 usability alignment planning.
- Cybersecurity mapping.
- Supplier and SOUP management.
- Enterprise governance integration.
- AI/data ethics governance if needed.

This is a future phase and does not authorize current expansion.

### Phase 15 — Lifecycle Renewal, Retirement, or Next-Generation Program

Goal: decide long-term continuation, renewal, replacement, retirement, or successor program.

Includes:

- Strategic Review.
- Benefit-Risk Reassessment.
- Cost and Sustainability Review.
- Technical Debt Review.
- Retirement Planning.
- Evidence Archive.
- Knowledge Transfer.
- Successor Program Charter.
- Final Lifecycle Decision.

---

## 7. Phase Gate Decision Model

Each phase must end with one of:

- NO-GO.
- CONDITIONAL GO.
- GO.

Do not proceed to the next phase if any of the following exist:

- Critical unresolved risks.
- Missing traceability.
- Missing evidence plan.
- Unclear privacy boundary.
- Unclear security boundary.
- Unsupported claims.
- Failing or pending CI.
- Unreviewed PHI or secrets concern.
- No clear owner.
- No reviewer confidence.

---

## 8. GitHub PR Execution Model

Each PR should be:

- Small.
- Scope-limited.
- One file when possible.
- Documentation-only unless gate-approved.
- Reviewed before merge.
- Merged only after 0 failing and 0 pending.

Each PR should include:

- Summary.
- Scope.
- Files changed.
- Safety and privacy notes.
- Verification.
- Not production/compliance claim.
- Merge criteria.

---

## 9. Documentation Package Map

The project documentation package may include:

- custom/im-core/docs/evidence/
- custom/im-core/docs/validation/
- custom/im-core/docs/risk/
- custom/im-core/docs/governance/
- custom/im-core/docs/clinical-safety/
- custom/im-core/docs/human-factors/
- custom/im-core/docs/security/
- custom/im-core/docs/integration/
- custom/im-core/docs/architecture/
- custom/im-core/docs/deployment/
- custom/im-core/docs/data-governance/
- custom/im-core/docs/training/
- custom/im-core/docs/claims/
- custom/im-core/docs/index/
- custom/im-core/docs/gate-review/
- custom/im-core/docs/roadmap/

The documentation index should be updated when major governance documents are added.

---

## 10. Current / Next / Not-Now Strategy

### Current

The current project focus is governance documentation and roadmap control.

### Next

The next appropriate work items should remain small and documentation-only unless explicitly gate-approved.

Examples:

- Documentation Index updates.
- Merge readiness checklist.
- Documentation-only PR SOP.
- Phase-specific roadmap refinements.
- Gate review refinements.
- Requirements register population.
- Requirements-to-risk traceability execution.
- Requirements-to-evidence traceability execution.
- Risk register population.
- Evidence record population.
- Standards-aware planning updates without compliance claims.

### Not Now

Do not start now:

- Runtime implementation.
- AI implementation.
- FHIR/API implementation.
- Production planning.
- Pilot execution.
- Workflow restructuring.
- npm/package-lock changes.
- Large multi-file governance packages.

---

## 11. Stop Rules

Stop immediately if any of the following occur:

- More than one unexpected file in diff.
- Runtime file touched unintentionally.
- Workflow file touched unintentionally.
- npm or package-lock touched unintentionally.
- PHI or secrets detected.
- Unsupported readiness or compliance claim appears.
- CI has pending or failing checks.
- Scope becomes unclear.
- No reviewer confidence.

---

## 12. Evidence and Traceability Expectations

Future work should maintain traceability among:

- Requirements.
- Risks.
- Controls.
- Verification.
- Evidence.
- Gate decisions.
- Change requests.
- Review records.

No claim should exceed the available evidence.

---

## 13. Medical Software Governance Constraints

The project must preserve:

- Human supervision.
- Clinician support, not clinician replacement.
- Explicit safety boundaries.
- Privacy by design.
- Security by design.
- Auditability.
- Change control.
- Evidence discipline.
- No unsupported readiness claims.

---

## 13A. Recent Governance Control Dependencies

The roadmap should be interpreted together with the following recently added governance controls:

| Governance control | File path | Roadmap relevance |
|---|---|---|
| Decision Automation Boundary Policy V0.1 | custom/im-core/docs/governance/decision-automation-boundary-policy-v0.1.md | Preserves human accountability and prevents automated approval, automated risk acceptance, automated clinical safety approval, and automated merge readiness decisions. |
| Traceability Matrix Policy V0.1 | custom/im-core/docs/governance/traceability-matrix-policy-v0.1.md | Defines documentation-stage traceability expectations linking PRs, documents, risks, controls, reviewer roles, findings, decisions, merge status, and Documentation Index updates. |
| Risk Register Structure V0.1 | custom/im-core/docs/governance/risk-register-structure-v0.1.md | Defines the structure for future risk records, risk ownership, residual-risk review, and human-owned risk acceptance without claiming ISO 14971 compliance. |
| Clinical Safety Case Structure V0.1 | custom/im-core/docs/governance/clinical-safety-case-structure-v0.1.md | Defines the documentation-stage structure for clinical safety claims, assumptions, hazards, controls, evidence needs, reviewer roles, and safety conclusions without claiming clinical validation or clinical-use authorization. |
| Evidence and Claim-Control Register V0.1 | custom/im-core/docs/governance/evidence-and-claim-control-register-v0.1.md | Controls project claims, evidence strength, prohibited wording, overclaiming risk, and human-owned claim acceptance. |

These controls do not authorize runtime implementation, AI implementation, prompt execution, model integration, API/FHIR implementation, SQL, database migrations, OpenEMR core behavior changes, clinical validation, production readiness, regulatory compliance, cybersecurity certification, or clinical use.

They strengthen roadmap governance by clarifying that future progression requires evidence, traceability, risk review, clinical safety review, privacy/security review, technical review, human approval, and GitHub checks showing 0 failing and 0 pending.

---

## 13B. Requirements and Traceability Readiness Dependencies

The roadmap should also be interpreted together with the current requirements and traceability artifacts added or aligned after the initial roadmap baseline:

| Artifact | File path | Roadmap relevance |
|---|---|---|
| Requirements Management Plan V0.1 | custom/im-core/docs/requirements/requirements-management-plan-v0.1.md | Defines documentation-stage requirements management rules, requirement ID expectations, change control, review responsibilities, safety and claims controls, and traceability expectations. |
| Requirements Register Starter V0.1 | custom/im-core/docs/requirements/requirements-register-starter-v0.1.md | Provides the starter structure for planning-stage requirements using the `IMC-REQ-` pattern and identifies future risk, evidence, verification, and release-gate linkage needs. |
| Traceability Matrix V0.1 | custom/im-core/docs/validation/traceability-matrix-v0.1.md | Provides documentation-stage traceability structure and now references requirements artifacts as sources for future-ready requirements traceability. |

These artifacts do not authorize runtime implementation, clinical validation, production use, pilot execution, regulatory compliance claims, cybersecurity certification claims, or clinical-use authorization.

Requirements register population, traceability execution, evidence record population, and risk register population remain future documentation-stage work until separately approved and completed through controlled PRs.

---

## 13C. AI/ML and Decision Automation Boundary — Future-Gated Only

OpenEMR IM Core is not currently an AI/ML project and is not currently a SaMD-AI implementation.

Current-stage boundaries remain:

- No runtime AI.
- No prompt execution.
- No AI/model integration.
- No autonomous clinical decision support.
- No autonomous diagnosis.
- No autonomous treatment recommendation.
- No autonomous prescribing.
- No autonomous emergency triage.
- No patient-facing AI.

AI/ML, prompt execution, model integration, decision automation, or GMLP-aware implementation planning may only be considered through a separate future phase gate with documented intended use, data governance, model governance, bias and performance evaluation planning, human oversight, cybersecurity review, clinical safety review, regulatory classification review, validation evidence planning, claims boundary review, and explicit governance approval.

This section does not authorize AI/ML implementation.

## 14. Roadmap Maintenance and Review Cadence

This roadmap should be reviewed when:

- A major governance document is added.
- A phase gate decision is reached.
- A major CI/CD process changes.
- The implementation stage changes.
- A new risk class is identified.
- A pilot or production planning question arises.

Recommended review cadence:

- At each major gate review.
- After major roadmap PRs.
- Before any non-documentation implementation phase.

---

## 15. Status and Limitations

This roadmap is a planning and governance document only.

It does not claim:

- Production readiness.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.
- Commercial readiness.
- Legal readiness.
- Pilot authorization.
- Production authorization.
Any transition between phases requires documented review, explicit ownership, evidence, and a recorded gate decision.
