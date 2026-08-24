# Comprehensive Governance and Future Clinical-Use Readiness Roadmap V0.1 - OpenEMR IM Core

## AI-Assisted Solo-Owner Applicability

Eligible documentation-stage roadmap edits may use GPT multidisciplinary
advisory review and the Project Owner decision record under the AI-Assisted
Solo-Owner Governance Policy V0.1. Separate specialist-human approvals are not
mandatory internal merge gates for those edits.

All roadmap reviewer approvals tied to phase transition, clinical use, PHI,
runtime, pilot, deployment, production, external claims or release, validation,
compliance, certification, or regulation remain future or external gates.

## 1. Purpose and Non-Authorization Notice

This document defines the comprehensive governance, documentation, safety, requirements, risk, traceability, evidence, workflow, and future-readiness roadmap for OpenEMR IM Core.

This roadmap describes a controlled path from the current documentation-stage foundation toward possible future clinical-use readiness.

This document is documentation-stage only.

This document is planning-stage only.

This document is future-gated.

This document is not an authorization for clinical use.

This document does not authorize:

- Runtime implementation.
- SQL execution.
- Database migration.
- FHIR/API implementation.
- Frontend implementation.
- OpenEMR core-sensitive changes.
- Runtime AI.
- Prompt execution.
- AI/model integration.
- Demo execution.
- Pilot execution.
- Production deployment.
- Commercial deployment.
- Clinical validation claim.
- Regulatory compliance claim.
- Cybersecurity certification claim.
- Medical-device readiness claim.
- Clinical-use authorization claim.

Future clinical-use readiness is a target-state definition, not a current project status.

All implementation, runtime verification, demo, pilot, production, clinical, regulatory, cybersecurity, or commercial-readiness activities remain future-gated and require separate documented approval, evidence, review, and authorization.

Golden rule:

The system must support clinicians. It must not replace clinicians.

---

## 2. Document Status and Identity

| Field | Value |
|---|---|
| Document | Comprehensive Governance and Future Clinical-Use Readiness Roadmap V0.1 |
| Project | OpenEMR IM Core |
| Version | V0.1 |
| Stage | Documentation-stage only / planning-stage only |
| Scope | Governance, readiness roadmap, and future clinical-use pathway planning |
| Owner Role | Governance Owner / Documentation Owner |
| Reviewer Roles | Technical Owner / Clinical Safety Owner / Privacy-Security Owner / Risk Owner / Evidence Reviewer / Operations Owner / Regulatory Reviewer if applicable |
| Runtime Status | No runtime implementation |
| Clinical Use Status | Not for clinical use |
| Production Status | Not production-ready |
| Regulatory Status | No regulatory compliance claim |
| Cybersecurity Status | No cybersecurity certification claim |

---

## 3. Relationship to Existing Roadmap Artifacts

This document complements existing roadmap artifacts.

Existing related roadmap artifacts include:

- custom/im-core/docs/openemr-im-core-product-readiness-roadmap.md
- custom/im-core/docs/roadmap/master-execution-and-governance-roadmap-v0.1.md
- custom/im-core/docs/roadmap/phase-2-controlled-design-roadmap-v0.1.md

This document does not supersede any existing roadmap unless a future controlled PR explicitly marks an artifact as superseded.

Where wording differs, current-stage safety, non-authorization, evidence-gated, and future-gated boundaries control interpretation.

This document must not be used to downgrade or bypass stop rules, claims controls, evidence requirements, privacy/security controls, clinical safety review, or phase gate controls.

---

## 4. Symbols

| Symbol | Meaning |
|---|---|
| ✅ | Completed or established |
| ⏳ | In progress |
| ⬜ | Not started / required later |
| ⚠️ | Requires review or evidence |
| 🚫 | Prohibited at current stage |

---

## 5. Current Project Status

Current stage:

- Documentation-only.
- Planning-only.
- Evidence-gated.
- Future-gated.
- Not for clinical use.
- Not production-ready.

Recent confirmed PR sequence:

| PR | Status | Purpose |
|---|---|---|
| #184 | ✅ MERGED | Added Requirements Management Plan V0.1 |
| #185 | ✅ MERGED | Updated documentation index for Requirements Management Plan |
| #186 | ✅ MERGED | Added Requirements Register Starter V0.1 |
| #187 | ✅ MERGED | Updated documentation index for Requirements Register Starter |
| #188 | ✅ MERGED | Corrected documentation index path for Traceability Matrix V0.1 |
| #189 | ✅ MERGED | Updated Traceability Matrix for requirements artifacts |
| #190 | ✅ MERGED | Updated Master Roadmap for requirements traceability readiness |

Current maturity judgment:

| Area | Current Status |
|---|---|
| Governance foundation | ✅ Strong |
| Documentation discipline | ✅ Strong |
| Requirements management | ✅ Strong start |
| Documentation index alignment | ✅ Improving |
| Traceability matrix | ✅ Exists |
| Requirements-to-traceability alignment | ✅ Started |
| Requirements register population | ⚠️ Still required |
| Risk register population | ⚠️ Still required |
| Evidence record population | ⚠️ Still required |
| Runtime implementation | ⬜ Not started |
| Verification evidence | ⬜ Not started |
| Clinical validation | 🚫 Not started / no claim |
| Clinical use | 🚫 Prohibited |
| Production use | 🚫 Prohibited |
| Regulatory compliance claim | 🚫 Prohibited |
| Cybersecurity certification claim | 🚫 Prohibited |

---

## 6. Governing Principles

The project must follow:

- Documentation-first.
- Evidence-gated.
- Safety-first.
- OpenEMR-first.
- LBF-first.
- Configuration-first.
- Upstream-first.
- Fork-minimal.
- Small PRs.
- One branch per PR.
- One narrow scope per PR.
- One intended file unless explicitly justified.
- Local-only PR body helper files.
- No broad staging.
- No unsupported readiness claims.
- No premature implementation.

A merged PR supports change-control evidence.

A merged PR does not prove clinical safety, regulatory compliance, cybersecurity certification, production readiness, or clinical validation.

---

## 7. Absolute Prohibited Boundaries

At the current stage, the following are prohibited:

- No PHI.
- No real patient data.
- No credentials.
- No secrets.
- No sensitive logs.
- No database dumps.
- No SQL execution.
- No database migration.
- No runtime AI.
- No prompt execution.
- No AI/model integration.
- No autonomous clinical decision support.
- No autonomous diagnosis.
- No autonomous treatment recommendation.
- No autonomous prescribing.
- No autonomous emergency triage.
- No patient-facing AI.
- No frontend implementation.
- No FHIR/API implementation.
- No OpenEMR core-sensitive changes.
- No demo readiness claim.
- No pilot readiness claim.
- No paid-pilot readiness claim.
- No production readiness claim.
- No commercial readiness claim.
- No clinical validation claim.
- No regulatory compliance claim.
- No cybersecurity certification claim.
- No medical-device readiness claim.
- No clinical-use authorization claim.

---

## 8. Critical Claims Rule

The project must never be described as:

- Clinically validated.
- Production-ready.
- Regulatory compliant.
- Cybersecurity certified.
- Commercially ready.
- Medically compliant.
- Safe for live-patient use.

unless formal evidence, human review, authorization, and applicable regulatory basis exist.

Allowed wording at the current stage:

- Documentation-stage only.
- Planning-stage only.
- Future-gated.
- Not for clinical use.
- Not production-ready.
- Not clinically validated.
- Not regulatory compliant.
- Not cybersecurity certified.

---

## 9. Comprehensive Phase Roadmap

### Phase 0 — Project Identity and Boundaries

Objective:

Define what OpenEMR IM Core is, what it builds, and what it does not claim.

Current status:

- ✅ Project name established.
- ✅ Repository established.
- ✅ OpenEMR-centered project.
- ✅ Documentation-first.
- ✅ Safety-first.
- ✅ Evidence-gated.
- ✅ Current stage is documentation-only and planning-only.
- ✅ No clinical readiness claim.
- ✅ No production readiness claim.

Remaining:

- ⬜ Executive project charter.
- ⬜ Phase 0 closure report.
- ⬜ Formal approval of project boundaries.
- ⬜ Role assignment by named individuals or approved roles.
- ⬜ Phase 0 evidence package.

### Phase 1 — Safety Boundaries and Stop Rules

Objective:

Prevent unsafe or premature activities before evidence and governance exist.

Current status:

- ✅ Safety boundaries documented.
- ✅ Stop rules documented.
- ✅ Claims boundaries documented.
- ✅ No-PHI boundary documented.
- ✅ No runtime AI boundary documented.
- ✅ No autonomous CDS boundary documented.
- ✅ No production or clinical-use claims allowed.

Remaining:

- ⬜ Automated PHI scanning.
- ⬜ Secret scanning / push protection.
- ⬜ Pre-commit checks.
- ⬜ CI rules for prohibited paths or file types.
- ⬜ CODEOWNERS.
- ⬜ Required reviewers.
- ⬜ Branch protection for master.

### Phase 2 — GitHub and PR Execution Governance

Objective:

Ensure each change is small, controlled, reviewable, and traceable.

Required workflow:

- One branch per PR.
- One narrow scope per PR.
- One intended file unless justified.
- PR body helper local-only.
- Stage only the intended file.
- Wait for checks.
- Merge only after 0 failing and 0 pending.
- Clean after merge.

Remaining:

- ⬜ Repository rule for local-only PR body helpers.
- ⬜ Branch protection.
- ⬜ Required status checks.
- ⬜ Required reviews.
- ⬜ CODEOWNERS.
- ⬜ Official merge policy.
- ⬜ Standard PR checklist in repository.

### Phase 3 — Documentation Foundation

Objective:

Create a controlled documentation system with ownership, review cadence, and status.

Current status:

- ✅ Documentation index exists.
- ✅ Review cadence exists.
- ✅ Roadmap documents exist.
- ✅ Governance addenda exist.
- ✅ Controlled vocabulary / glossary exists.
- ✅ Requirements Management Plan indexed.
- ✅ Requirements Register Starter indexed.
- ✅ Traceability Matrix path corrected to custom/im-core/docs/validation/traceability-matrix-v0.1.md.

Remaining:

- ⬜ Phase 0 document inventory.
- ⬜ Artifact status matrix.
- ⬜ Active / future / retired document classification.
- ⬜ Owner/status/version consistency review.
- ⬜ Naming convention cleanup.

### Phase 4 — Governance and Human Accountability

Objective:

Define who owns, reviews, approves, and stops work.

Current status:

- ✅ Governance Ownership Model exists.
- ✅ Human Accountability RACI exists.
- ✅ Governance Execution Checklist exists.
- ✅ PR Audit Trail Template exists.
- ✅ Lifecycle Phase Gate Control exists.
- ✅ Intended Use / Scope / Users / Claims exists.
- ✅ Human responsibility is documented.

Remaining:

- ⬜ Named reviewer assignment.
- ⬜ Reviewer assignment policy.
- ⬜ CODEOWNERS.
- ⬜ Evidence of review.
- ⬜ Governance decision log.
- ⬜ Go/No-Go records.
- ⬜ Reviewer signoff records.
- ⬜ Stop-work log.
- ⬜ Governance dashboard.

### Phase 5 — Requirements Management

Objective:

Define how requirements are written, numbered, reviewed, changed, retired, and linked.

Current status:

- ✅ Requirements Management Plan V0.1 exists.
- ✅ Requirements Register Starter V0.1 exists.
- ✅ Requirement types defined.
- ✅ Requirement ID scheme defined.
- ✅ Requirement status model defined.
- ✅ Change control and retirement rules defined.
- ✅ Requirements do not authorize implementation.

Remaining:

- ⚠️ Requirements register population.
- ⬜ First requirements baseline.
- ⬜ Actual requirement IDs fully populated.
- ⬜ Requirements-to-risk links.
- ⬜ Requirements-to-evidence links.
- ⬜ Requirements-to-test links.
- ⬜ Requirements-to-release-gate links.
- ⬜ Reviewer approval by requirement group.
- ⬜ Requirement change history.

### Phase 6 — Traceability

Objective:

Connect requirements, risks, controls, tests, evidence, owners, reviewers, release gates, and limitations.

Required traceability model:

Requirement to Risk to Control to Test or Review Method to Evidence to Owner to Reviewer to Release Gate to Limitation.

Current status:

- ✅ Traceability Matrix V0.1 exists.
- ✅ Traceability Matrix Policy exists.
- ✅ Documentation index path corrected.
- ✅ Traceability Matrix updated for requirements artifacts.

Remaining:

- ⚠️ Full traceability matrix population.
- ⬜ Bidirectional traceability.
- ⬜ Link every requirement to source.
- ⬜ Link safety requirements to risks.
- ⬜ Link risks to controls.
- ⬜ Link controls to verification.
- ⬜ Link verification to evidence.
- ⬜ Link evidence to reviewer.
- ⬜ Link release gates to evidence package.
- ⬜ Evidence Reviewer traceability review.

### Phase 7 — Risk Management

Objective:

Move from risk structure to a populated risk management file.

Current status:

- ✅ Risk Register V0.1 exists.
- ✅ Risk Register Structure exists.
- ✅ Failure Modes and Safe Response Library exists.
- ✅ Clinical Safety Case Structure exists.
- ✅ No autonomous clinical decision boundaries exist.

Remaining:

- ⬜ Actual risk entries.
- ⬜ Hazard IDs.
- ⬜ Harm scenarios.
- ⬜ Hazardous situations.
- ⬜ Initial risk estimation.
- ⬜ Risk controls.
- ⬜ Residual risk.
- ⬜ Benefit-risk rationale where applicable.
- ⬜ Verification of risk controls.
- ⬜ Clinical safety reviewer signoff.
- ⬜ Risk acceptability criteria.
- ⬜ Requirements/risk/evidence linkage.

### Phase 8 — Evidence System

Objective:

Convert evidence needs into evidence IDs, records, owners, reviewers, status, and locations.

Current status:

- ✅ Evidence Registry and Templates exist.
- ✅ Evidence and Claim-Control Register exists.
- ✅ Evidence-gated principle exists.
- ✅ PR Audit Trail exists.
- ✅ Requirements Management Plan supports evidence links.

Remaining:

- ⬜ Populated evidence registry.
- ⬜ Evidence IDs.
- ⬜ Evidence acceptance criteria.
- ⬜ Evidence owner.
- ⬜ Evidence reviewer.
- ⬜ Evidence status.
- ⬜ Evidence date.
- ⬜ Evidence location.
- ⬜ Link evidence to requirements.
- ⬜ Link evidence to risks.
- ⬜ Link evidence to tests.
- ⬜ Link evidence to release gates.

### Phase 9 — Clinical Workflow Planning

Objective:

Define future clinical workflows clearly before any runtime implementation.

This phase does not authorize clinical operation.

Planned workflow areas:

- Registration Workflow.
- Duplicate Patient Prevention.
- Encounter Preparation.
- Vitals Workflow.
- Allergy Review.
- Medication Review.
- Chronic Conditions Review.
- Assessment and Plan Workflow.
- Follow-Up Workflow.
- No-Show Workflow.
- Open Loops Workflow.
- Pending Results Workflow.
- Critical Results Workflow.
- Referral Workflow.
- Billing and Administrative Boundary.

Exit criteria:

- ⬜ Each workflow has a document or controlled section.
- ⬜ Each workflow has an owner.
- ⬜ Each workflow has risk links.
- ⬜ Each workflow has requirement links.
- ⬜ Each workflow has evidence expectations.
- ⬜ Each workflow has SOP linkage.
- ⬜ Each workflow has synthetic-data-only future test plan.
- ⬜ Clinical review completed.
- ⬜ No PHI.
- ⬜ No patient-facing automation.
- ⬜ No autonomous CDS.
- ⬜ No production claim.

### Phase 10 — Clinical Documentation Quality

Objective:

Improve documentation quality without replacing clinical judgment.

Current status:

- ✅ Clinical Documentation Quality Rules exist.
- ✅ Severity concepts exist.
- ✅ False-positive handling exists.
- ✅ Clinician review boundary exists.
- ✅ No autonomous CDS boundary exists.
- ✅ Clinical safety boundary exists.

Remaining:

- ⬜ Rule catalog with IDs.
- ⬜ Link rules to requirements.
- ⬜ Link rules to risks.
- ⬜ Test rules using synthetic data only, if future-gated.
- ⬜ Clinician review feedback.
- ⬜ Usability review.
- ⬜ Audit evidence.
- ⬜ Runtime activation gate.
- ⬜ Prevent rule from becoming autonomous CDS.

### Phase 10A — AI/ML and Decision Automation Governance — Future-Gated Only

Objective:

Prevent any AI/ML or decision automation from entering runtime before a separate formal phase gate.

Current status:

- 🚫 OpenEMR IM Core is not currently an AI/ML project.
- 🚫 OpenEMR IM Core is not currently SaMD-AI.
- 🚫 No runtime AI.
- 🚫 No prompt execution.
- 🚫 No AI/model integration.
- 🚫 No autonomous CDS.
- 🚫 No autonomous diagnosis.
- 🚫 No autonomous treatment recommendation.
- 🚫 No autonomous prescribing.
- 🚫 No autonomous emergency triage.
- 🚫 No patient-facing AI.

If AI/ML is ever proposed, a separate phase gate must include:

- ⬜ AI/ML intended use.
- ⬜ Clinical purpose analysis.
- ⬜ Regulatory classification review.
- ⬜ Data governance plan.
- ⬜ Training/validation data provenance.
- ⬜ Bias and representativeness assessment.
- ⬜ Model performance evaluation plan.
- ⬜ Human oversight model.
- ⬜ Failure mode analysis.
- ⬜ Cybersecurity review.
- ⬜ Change-control plan.
- ⬜ Monitoring plan.
- ⬜ Drift detection strategy, if applicable.
- ⬜ GMLP-aware planning.
- ⬜ Predetermined change-control planning, if applicable.
- ⬜ Clinical safety review.
- ⬜ Validation evidence.
- ⬜ Claims boundary review.
- ⬜ Explicit governance approval.

This section does not authorize AI/ML implementation.

### Phase 11 — Regulatory Strategy and Classification Planning

Objective:

Plan regulatory strategy without claiming compliance.

Required later:

- ⬜ Intended medical purpose analysis.
- ⬜ SaMD/MDSW qualification analysis.
- ⬜ Jurisdiction analysis.
- ⬜ Classification rationale.
- ⬜ Applicable standards matrix.
- ⬜ Regulatory pathway memo.
- ⬜ Claims boundary review.
- ⬜ Clinical evaluation strategy.
- ⬜ QMS strategy.

Current status:

- ⚠️ Standards-aware planning only.
- 🚫 No regulatory compliance claim.
- 🚫 No medical-device readiness claim.

### Phase 12 — QMS and Software Lifecycle Planning

Objective:

Prepare for controlled software lifecycle management if future gates authorize runtime development.

Required later:

- ⬜ Software Development Plan.
- ⬜ Software Safety Classification.
- ⬜ Software Requirements Specification.
- ⬜ Architecture Plan.
- ⬜ Design Plan.
- ⬜ Verification Plan.
- ⬜ Release Plan.
- ⬜ Maintenance Plan.
- ⬜ Problem Resolution Process.
- ⬜ Configuration Management Plan.
- ⬜ SOUP/Open Source Management Plan.

Current status:

- ⬜ Not active for implementation.
- 🚫 No runtime development authorization.

### Phase 13 — Architecture and OpenEMR Integration Planning

Objective:

Design a safe, minimal, OpenEMR-aligned architecture.

Principles:

- OpenEMR-first.
- Configuration-first.
- Fork-minimal.
- Upstream-first.
- No OpenEMR core-sensitive changes unless future-gated.

Required later:

- ⬜ Architecture Decision Records.
- ⬜ Component Inventory update.
- ⬜ Data-flow diagrams.
- ⬜ Trust boundary updates.
- ⬜ OpenEMR integration boundary update.
- ⬜ API/FHIR future boundary.
- ⬜ Database future boundary.
- ⬜ Audit logging plan.
- ⬜ Backup/restore plan.

Current status:

- ✅ Architecture planning exists.
- 🚫 Runtime architecture implementation not authorized.

### Phase 14 — Security / Privacy / RBAC / Audit / Backup

Objective:

Prepare safe future operation with permissions, auditability, backup, and privacy controls.

Current status:

- ✅ Security / Privacy / RBAC / Audit / Backup gap documentation exists.
- ✅ Threat Model and Data Governance exists.
- ✅ No-PHI boundary exists.
- ✅ Semgrep checks run in CI.
- ⬜ RBAC evidence not executed.
- ⬜ Audit evidence not executed.
- ⬜ Backup/restore evidence not executed.

Required later:

- ⬜ RBAC roles and permissions.
- ⬜ Least privilege matrix.
- ⬜ Audit event definition.
- ⬜ Backup plan.
- ⬜ Restore plan.
- ⬜ Non-production restore test, if future-gated.
- ⬜ No-PHI scan.
- ⬜ Secrets scan.
- ⬜ Data retention rules.
- ⬜ Screenshot review.

### Phase 15 — Evidence Execution

Objective:

Convert documentation evidence planning into actual evidence records.

Current status:

- ✅ Evidence structure exists.
- ⬜ Evidence records not populated.

Required later:

- ⬜ EV-REQ-001.
- ⬜ EV-RISK-001.
- ⬜ EV-RBAC-001.
- ⬜ EV-AUDIT-001.
- ⬜ EV-BACKUP-001.
- ⬜ EV-LBF-001.
- ⬜ EV-WORKFLOW-001.
- ⬜ Owner.
- ⬜ Reviewer.
- ⬜ Status.
- ⬜ Evidence location.
- ⬜ Review date.

### Phase 16 — Traceability Matrix Execution

Objective:

Populate the traceability matrix fully.

Required later:

- ⬜ Requirement IDs.
- ⬜ Risk IDs.
- ⬜ Control IDs.
- ⬜ Test IDs.
- ⬜ Evidence IDs.
- ⬜ Reviewer links.
- ⬜ Release gate links.
- ⬜ Gap list.

Exit criteria:

- ⬜ Every requirement has a source.
- ⬜ Every safety requirement has a risk.
- ⬜ Every risk has a control.
- ⬜ Every control has verification.
- ⬜ Every verification has evidence.
- ⬜ Every evidence has reviewer.
- ⬜ Every release gate has evidence package.

### Phase 17 — Risk Management File Execution

Objective:

Convert risk structure into a populated risk management file.

Required later:

- ⬜ Hazard identification.
- ⬜ Hazardous situation.
- ⬜ Harm.
- ⬜ Initial risk.
- ⬜ Risk control.
- ⬜ Residual risk.
- ⬜ Verification of risk control.
- ⬜ Benefit-risk rationale where applicable.
- ⬜ Clinical safety review.
- ⬜ Risk acceptability.

### Phase 18 — Clinical Safety Case

Objective:

Build a structured safety argument within defined boundaries.

Current status:

- ✅ Clinical Safety Case Structure exists.
- ⬜ Safety case evidence not complete.

Required later:

- ⬜ Safety claims.
- ⬜ Assumptions.
- ⬜ Limitations.
- ⬜ Hazards.
- ⬜ Controls.
- ⬜ Evidence links.
- ⬜ Reviewer notes.
- ⬜ Residual risk statements.
- ⬜ No-autonomous-care statement.
- ⬜ Clinician authority statement.

### Phase 19 — Usability and Human Factors

Objective:

Ensure future use does not create confusion, unsafe workflow, or preventable use errors.

Current status:

- ✅ Human Factors and Usability Risk Plan exists.
- ⬜ Usability testing not executed.

Required later:

- ⬜ Identify user groups.
- ⬜ Physician workflow review.
- ⬜ Nurse workflow review.
- ⬜ Front desk workflow review.
- ⬜ Admin workflow review.
- ⬜ Task analysis.
- ⬜ Use-error analysis.
- ⬜ Simulated-use testing.
- ⬜ Feedback collection.
- ⬜ Mitigation plan.

### Phase 20 — Training and Support

Objective:

Prepare users and support processes before any demo, pilot, or production gate.

Current status:

- ✅ Training and Support Package exists.
- ⬜ Training execution not performed.

Required later:

- ⬜ Training modules.
- ⬜ Role-based onboarding.
- ⬜ Clinician training.
- ⬜ Nurse training.
- ⬜ Admin training.
- ⬜ Support severity levels.
- ⬜ Escalation path.
- ⬜ Incident reporting.
- ⬜ Training completion records.
- ⬜ User feedback loop.

### Phase 21 — Runtime Verification — Future-Gated Only

Objective:

Verify future runtime behavior in a non-production OpenEMR environment if separately approved.

Current status:

- ✅ OpenEMR-first posture exists.
- ✅ Runtime boundary specification exists.
- ✅ OpenEMR integration boundary exists.
- ✅ Non-production reproducible install plan exists.
- ⬜ Runtime verification not executed.
- 🚫 Runtime verification not authorized at current stage.

Required future gate:

- ⬜ Approved non-production environment.
- ⬜ Synthetic data only.
- ⬜ No PHI.
- ⬜ Approved verification protocol.
- ⬜ Evidence IDs.
- ⬜ Risk links.
- ⬜ Reviewer assignment.
- ⬜ Privacy/security review.
- ⬜ Technical review.

### Phase 22 — Verification

Objective:

Verify that the system satisfies documented requirements.

Required later:

- ⬜ Verification plan.
- ⬜ Test protocols.
- ⬜ Test cases.
- ⬜ Expected results.
- ⬜ Actual results.
- ⬜ Deviation records.
- ⬜ Regression testing.
- ⬜ Requirement-to-test traceability.
- ⬜ Risk-control verification records.

Current status:

- ⬜ Not started.

### Phase 23 — Validation and Clinical Evaluation

Objective:

Evaluate whether the system is suitable for the intended clinical use if future gates permit.

Required later:

- ⬜ Clinical evaluation plan.
- ⬜ Clinical performance objectives.
- ⬜ Clinical safety endpoints.
- ⬜ Usability validation plan.
- ⬜ Representative user study plan.
- ⬜ Representative workflow evaluation.
- ⬜ Data governance plan.
- ⬜ Protocol.
- ⬜ Clinical evaluation report.
- ⬜ Benefit-risk assessment.

Current status:

- 🚫 No clinical validation.
- 🚫 No clinical evaluation claim.

### Phase 24 — Demo Readiness Gate — Future-Gated Only

Objective:

Allow only a controlled synthetic-data demonstration if authorized.

Current status:

- 🚫 Demo-ready: no.
- ✅ Synthetic demo planning exists.
- 🚫 Demo claim prohibited.

Required later:

- ⬜ Synthetic data only.
- ⬜ No PHI.
- ⬜ No real screenshots.
- ⬜ Demo script.
- ⬜ Demo reset plan.
- ⬜ Demo limitations statement.
- ⬜ Claims reviewer approval.
- ⬜ Security/privacy reviewer approval.
- ⬜ Clinical safety reviewer approval.

### Phase 25 — Pilot Readiness Gate — Future-Gated Only

Objective:

Prepare for a limited pilot only if formally authorized.

Current status:

- 🚫 Pilot-ready: no.
- 🚫 Pilot claim prohibited.

Required later:

- ⬜ Completed demo gate.
- ⬜ Clinical governance approval.
- ⬜ Privacy approval.
- ⬜ Security approval.
- ⬜ RBAC evidence.
- ⬜ Audit evidence.
- ⬜ Backup/restore evidence.
- ⬜ Support model.
- ⬜ Incident response.
- ⬜ Training completion.
- ⬜ Validation plan.
- ⬜ Pilot protocol.
- ⬜ Stop rules.
- ⬜ Legal/regulatory boundary review.

### Phase 26 — Production and Clinic Use Authorization — Future-Gated Only

Objective:

Authorize real-world clinical use only after all required evidence and approvals exist.

Current status:

- 🚫 Production-ready: no.
- 🚫 Clinical-use authorized: no.
- 🚫 Commercial-ready: no.

Required later:

- ⬜ Regulatory clearance or appropriate authorization, if required.
- ⬜ QMS readiness.
- ⬜ Software lifecycle evidence.
- ⬜ Risk management file complete.
- ⬜ Clinical evaluation complete, if applicable.
- ⬜ Cybersecurity evidence.
- ⬜ Privacy compliance.
- ⬜ Operational validation.
- ⬜ Training complete.
- ⬜ Support model active.
- ⬜ Post-market surveillance plan.
- ⬜ Formal release authorization.

Required sign-offs:

- ⬜ Clinical Safety Owner.
- ⬜ Privacy/Security Owner.
- ⬜ Technical Owner.
- ⬜ Operations Owner.
- ⬜ Release Owner.
- ⬜ Governance Owner.
- ⬜ Regulatory/Compliance Reviewer, if applicable.

### Phase 27 — Post-Deployment and Post-Market Monitoring

Objective:

Maintain safety, performance, security, and quality after future deployment.

Required later:

- ⬜ Incident monitoring.
- ⬜ Clinical safety monitoring.
- ⬜ User feedback process.
- ⬜ Security vulnerability response.
- ⬜ Change impact analysis.
- ⬜ Risk re-evaluation.
- ⬜ CAPA process.
- ⬜ Release management.
- ⬜ Post-market surveillance.
- ⬜ Periodic safety review.
- ⬜ Documentation updates.

Current status:

- ⬜ Future phase only.

---

## 10. Gate Model

| Gate | Name |
|---|---|
| Gate 0 | Documentation Foundation |
| Gate 1 | Requirements Foundation |
| Gate 2 | Traceability Foundation |
| Gate 3 | Risk Foundation |
| Gate 4 | Evidence Foundation |
| Gate 5 | Architecture Authorization |
| Gate 6 | Non-Production Development Authorization |
| Gate 7 | Runtime Verification Authorization |
| Gate 8 | Verification Readiness |
| Gate 9 | Validation Readiness |
| Gate 10 | Demo Readiness |
| Gate 11 | Pilot Readiness |
| Gate 12 | Production / Clinic Use Authorization |
| Gate 13 | Post-Deployment Monitoring |

No gate may be skipped.

---

## 11. PR Execution Model

All future work must follow the controlled PR execution model already used in the project.

Required principles:

- One branch per PR.
- One narrow scope per PR.
- One intended file unless explicitly justified.
- PR body helper files are local-only and must not be committed.
- Stage only the intended file.
- Merge only after 0 failing and 0 pending checks.
- After merge, return to master, pull, verify the merged PR, remove the local PR body helper, prune branches, verify clean status, and confirm no open PRs.

This document does not replace existing PR safety procedures, merge readiness checklists, CI failure handling procedures, or post-merge verification policies.

---

## 12. Near-Term Roadmap

Recommended candidates:

1. Requirements traceability population starter.
2. Evidence ID registry population starter.
3. Risk register initial entries starter.
4. Standards applicability matrix starter.
5. Documentation inventory and artifact status matrix.
6. Phase 0 closure report.
7. Comprehensive governance and readiness roadmap indexing.

Preferred next action:

Roadmap / gap scan.

No automatic PR creation.

---

## 13. Definition of Future Clinical-Use Readiness

OpenEMR IM Core may only be considered ready for practical clinical use after all of the following are complete:

- Approved intended use.
- Regulatory strategy resolved.
- Applicable regulatory authorization, if required.
- QMS process established.
- Software lifecycle evidence complete, if applicable.
- Risk management file complete.
- Requirements baseline complete.
- Traceability complete.
- Risk controls verified.
- Evidence records complete.
- Clinical safety case complete.
- Human factors validation complete, if applicable.
- Clinical evaluation complete, if applicable.
- Cybersecurity evidence complete.
- Privacy/data protection evidence complete.
- Deployment plan complete.
- Rollback plan tested.
- Training complete.
- Support process active.
- Incident response active.
- Post-deployment monitoring active.
- Formal release authorization signed.

Until then:

- Not for clinical use.
- Not production-ready.
- Not clinically validated.
- Not regulatory compliant.
- Not cybersecurity certified.
- Not commercially ready.

---

## 14. Final Executive Summary

OpenEMR IM Core is currently building a controlled foundation:

- Governance.
- Documentation discipline.
- Requirements structure.
- Traceability structure.
- Risk structure.
- Evidence structure.
- Clinical workflow planning.
- Safety boundaries.
- Claim-control discipline.

It has not yet built or authorized the clinical operational train.

The correct path is:

Documentation foundation to Requirements to Traceability to Risk to Evidence to Workflow planning to Regulatory strategy to QMS/software lifecycle planning to Architecture to Privacy/security to Clinical safety to Human factors to Future-gated non-production development to Verification to Validation to Operational readiness to Demo if authorized to Pilot if authorized to Clinical use if authorized to Post-deployment monitoring.

This roadmap does not authorize implementation or clinical use.

It defines the controlled path toward a possible future clinical-use system, subject to evidence, review, governance, safety controls, and applicable regulatory authorization.

---

## 15. Definition of Done

This document is complete when:

- Purpose and non-authorization notice are documented.
- Document status and identity are documented.
- Relationship to existing roadmap artifacts is documented.
- Current project status is documented.
- Governing principles are documented.
- Absolute prohibited boundaries are documented.
- Critical claims rule is documented.
- Comprehensive phase roadmap is documented.
- Gate model is documented.
- PR execution model is documented.
- Near-term roadmap is documented.
- Future clinical-use readiness definition is documented.
- Final executive summary is documented.
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

---

## 16. After-Merge Action

After this PR is merged, the next documentation step should be separately approved based on the current roadmap and open governance gaps.

A likely next step is to update the documentation index to include this roadmap.

Do not start the next PR until this PR is merged, reviewed, cleaned, and the repository state is verified.

---

## 17. Status

Documentation-only comprehensive governance and future clinical-use readiness roadmap.

Planning-stage only.

Future-gated only.

Not for clinical use.

Not production-ready.

Not clinically validated.

No regulatory compliance claim.

No cybersecurity certification claim.

No runtime implementation.

No SQL execution.

No database migration.

No FHIR/API implementation.

No frontend implementation.

No runtime AI.

No prompt execution.

No AI/model integration.
