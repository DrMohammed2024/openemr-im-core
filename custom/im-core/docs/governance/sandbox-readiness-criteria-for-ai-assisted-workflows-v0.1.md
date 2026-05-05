# Sandbox Readiness Criteria for AI-Assisted Workflows V0.1

## 1. Document Status

Status: Draft for governance review.

Document type: Sandbox readiness criteria.

Scope: Documentation-only.

Current stage: Planning and governance only.

This document defines criteria that must be satisfied before any future sandbox planning for AI-assisted workflows may be considered in OpenEMR IM Core.

This document does not introduce runtime code, AI implementation, prompt execution, model integration, API/FHIR implementation, SQL, database migration, database schema change, OpenEMR core-sensitive change, PHI, real patient data, clinical validation, production readiness, regulatory compliance, or cybersecurity certification.

---

## 2. Purpose

The purpose of this document is to define readiness criteria for any future AI-assisted workflow sandbox.

This document helps prevent premature movement from documentation-stage governance to experimental workflow planning.

It establishes that sandbox planning must remain:

- Human-supervised.
- Non-production.
- Non-clinical-use.
- Non-PHI.
- Non-real-patient-data.
- Non-runtime until approved by future governance.
- Non-model-integrated until approved by future governance.

This document does not authorize sandbox implementation.

---

## 3. Scope

This document applies to future planning discussions related to:

- AI-assisted workflow sandbox concepts.
- Synthetic-data workflow simulations.
- AI-output review dry runs.
- Prompt proposal review.
- Human-supervised AI drafting concepts.
- Safety review of AI-assisted workflow ideas.
- Governance prerequisites before experimental planning.

This document applies only to documentation-stage readiness assessment.

---

## 4. Out of Scope

This document does not create or authorize:

- Runtime sandbox.
- Prompt execution.
- AI model integration.
- AI-generated clinical documentation.
- API/FHIR implementation.
- SQL.
- Database migration.
- Database schema change.
- OpenEMR core-sensitive changes.
- Use of PHI.
- Use of real patient data.
- Production deployment.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.

---

## 5. Core Sandbox Principle

A future sandbox may only be considered after governance prerequisites are complete.

Any future sandbox must be:

- Synthetic-data-only.
- Non-production.
- Isolated from real patient records.
- Human-supervised.
- Clinician-reviewed.
- Privacy-reviewed.
- Security-reviewed.
- Traceable.
- Reversible.
- Clearly labeled as experimental planning.
- Not connected to live clinical workflows.
- Not used to make clinical decisions.

---

## 6. Required Governance Prerequisites

Before sandbox planning may proceed, the following must exist and be indexed:

- Clinical AI Governance and Scientific Evaluation Framework V0.1.
- Governance Review Checklist for Pull Requests V0.1.
- Prompt Governance and AI-Output Review Policy V0.1.
- AI-Output Evaluation Checklist V0.1.
- AI Clinical Support Boundary Specification V0.1.
- Runtime Boundary Specification V0.1.
- API/FHIR Boundary Specification V0.1.
- Database Boundary and Migration Policy V0.1.
- Documentation Index and Review Cadence V0.1.

If any prerequisite is missing, sandbox planning is DEFER.

---

## 7. Synthetic Data Requirement

Any future sandbox concept must use synthetic or non-patient demonstration data only.

Synthetic data must not be derived from identifiable patient records unless a future approved governance process explicitly permits a compliant de-identification pathway.

At the current stage, prohibited data includes:

- PHI.
- Real patient data.
- Patient identifiers.
- Real clinical notes.
- Production logs.
- Database dumps.
- Exported OpenEMR patient records.
- Real medication lists from patients.
- Real lab results from patients.
- Real imaging reports from patients.
- Real appointment or billing data.

Any use of PHI or real patient data is NO-GO.

---

## 8. Isolation Requirement

Any future sandbox must be isolated from:

- Production OpenEMR instances.
- Live patient records.
- Production databases.
- Production credentials.
- Production logs.
- Live APIs.
- Live FHIR endpoints.
- Billing systems.
- Patient portals.
- Messaging systems.
- Clinical decision workflows.

Sandbox planning must not modify OpenEMR core behavior.

---

## 9. AI Boundary Requirement

A future sandbox must not proceed unless AI boundaries are explicit.

The sandbox must not enable:

- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- AI-generated final clinical documentation.
- AI output without physician review.
- Patient-facing AI advice.
- Prompt execution with PHI.
- Model integration with real clinical data.
- Claims of clinical validation or production readiness.

AI output, if discussed in future planning, must remain draft-only and human-reviewed.

---

## 10. Prompt and Output Review Requirement

Before any future sandbox planning involving prompts or outputs, the proposal must reference:

- Prompt Governance and AI-Output Review Policy V0.1.
- AI-Output Evaluation Checklist V0.1.
- Governance Review Checklist for Pull Requests V0.1.

The proposal must define:

- Intended prompt purpose.
- Allowed inputs.
- Prohibited inputs.
- Expected output type.
- Human review requirement.
- Stop rules.
- Failure modes.
- Traceability.
- Reviewer roles.

---

## 11. Clinical Safety Requirement

Future sandbox planning must include clinical safety review for:

- Red flags.
- Diagnostic risk.
- Medication risk.
- Allergy risk.
- Contraindication risk.
- False reassurance.
- Automation bias.
- Missing safety-netting.
- Missing escalation criteria.
- Missing physician review checkpoints.
- Hallucinated clinical content.
- Ambiguous responsibility boundaries.

Clinical safety concerns may result in CONDITIONAL GO, NO-GO, or DEFER.

---

## 12. Privacy and Security Requirement

Future sandbox planning must include privacy/security review.

The review must confirm:

- No PHI.
- No real patient data.
- No patient identifiers.
- No production logs.
- No secrets.
- No API keys.
- No credentials.
- No tokens.
- No passwords.
- No database dumps.
- No live system connection.
- No unnecessary sensitive operational data.

Any privacy/security breach is NO-GO.

---

## 13. Technical Readiness Requirement

Before any future sandbox implementation can be considered, a separate technical planning document must define:

- Sandbox architecture.
- Data isolation.
- Access control.
- Logging boundaries.
- No-PHI safeguards.
- Test data source.
- Rollback strategy.
- Failure handling.
- Review workflow.
- Human approval checkpoints.
- Security assumptions.
- Known limitations.

This document does not provide that technical implementation plan.

---

## 14. Human Supervision Requirement

A future sandbox proposal must identify reviewer roles.

Recommended roles:

- Clinical reviewer.
- Clinical safety reviewer.
- AI governance reviewer.
- Privacy/security reviewer.
- Technical reviewer.
- Architecture reviewer.
- Documentation owner.
- Risk owner.
- Operations owner.

Human reviewers remain accountable for decisions.

AI must not be treated as accountable.

---

## 15. Readiness Decision Model

A future sandbox-related proposal must be classified as:

- GO.
- CONDITIONAL GO.
- NO-GO.
- DEFER.

GO means documentation-stage sandbox planning may proceed.

CONDITIONAL GO means corrections are required before progression.

NO-GO means the proposal is blocked due to safety, privacy, autonomy, evidence, or governance failure.

DEFER means the idea may be appropriate later but is premature for the current project phase.

---

## 16. NO-GO Stop Rules

A sandbox-related proposal is NO-GO if it includes or enables:

1. PHI.
2. Real patient data.
3. Patient identifiers.
4. Secrets.
5. API keys.
6. Production logs.
7. Database dumps.
8. Runtime AI behavior without approved gate.
9. Prompt execution without approved gate.
10. Model integration without approved gate.
11. API/FHIR implementation without approved gate.
12. SQL or database migration without approved gate.
13. Database schema change without approved gate.
14. OpenEMR core-sensitive change without approved gate.
15. Autonomous diagnosis.
16. Autonomous prescribing.
17. Autonomous triage.
18. AI output treated as final clinical documentation.
19. AI output used without physician review.
20. Patient-facing medical advice without approved governance.
21. Unsupported clinical-validation claim.
22. Unsupported production-readiness claim.
23. Unsupported regulatory-compliance claim.
24. Unsupported cybersecurity-certification claim.
25. Missing clinical safety review.
26. Missing privacy/security review.
27. Missing human responsibility boundary.

A NO-GO stop rule cannot be overridden by reviewer confidence or convenience.

---

## 17. Sandbox Readiness Checklist

Before future sandbox planning proceeds, confirm:

- [ ] Required governance documents exist.
- [ ] Required governance documents are indexed.
- [ ] Scope is documentation-stage only.
- [ ] No PHI is used.
- [ ] No real patient data is used.
- [ ] Synthetic-data-only requirement is explicit.
- [ ] No runtime implementation is introduced.
- [ ] No prompt execution is introduced.
- [ ] No model integration is introduced.
- [ ] No API/FHIR implementation is introduced.
- [ ] No SQL or database migration is introduced.
- [ ] No OpenEMR core-sensitive change is introduced.
- [ ] Human supervision is explicit.
- [ ] Physician review is explicit for clinical content.
- [ ] Clinical safety review is required.
- [ ] Privacy/security review is required.
- [ ] AI output remains draft-only.
- [ ] Unsupported readiness or validation claims are absent.
- [ ] GO / CONDITIONAL GO / NO-GO / DEFER decision is documented.

---

## 18. Relationship to Existing Documents

This document is governed by:

- Clinical AI Governance and Scientific Evaluation Framework V0.1.
- Governance Review Checklist for Pull Requests V0.1.
- Prompt Governance and AI-Output Review Policy V0.1.
- AI-Output Evaluation Checklist V0.1.
- AI Clinical Support Boundary Specification V0.1.
- Runtime Boundary Specification V0.1.
- API/FHIR Boundary Specification V0.1.
- Database Boundary and Migration Policy V0.1.
- Documentation Index and Review Cadence V0.1.

This document does not replace those documents.

It defines sandbox-readiness criteria only.

---

## 19. Acceptance Criteria

Before merge, confirm:

- [ ] Documentation-only scope.
- [ ] One new criteria file only.
- [ ] No PHI.
- [ ] No real patient data.
- [ ] No secrets.
- [ ] No runtime code.
- [ ] No AI implementation.
- [ ] No prompt execution.
- [ ] No model integration.
- [ ] No API/FHIR implementation.
- [ ] No SQL.
- [ ] No database migration.
- [ ] No OpenEMR core-sensitive change.
- [ ] No unsupported clinical-validation claim.
- [ ] No unsupported production-readiness claim.
- [ ] No unsupported regulatory-compliance claim.
- [ ] No unsupported cybersecurity-certification claim.
- [ ] Human supervision is explicit.
- [ ] Stop rules are explicit.
- [ ] GitHub checks show 0 failing and 0 pending.

---

## 20. After-Merge Action

After merge:

- Update local master.
- Confirm this file exists on master.
- Confirm working tree is clean.
- Remove temporary PR body files.
- Create a separate documentation-only PR to update the Documentation Index and Review Cadence document.
- Reference this document in future sandbox, AI-assisted workflow, prompt governance, and AI-output review PRs.

---

## 21. Status and Limitations

This document is a documentation-stage governance artifact.

It is not:

- Runtime sandbox.
- Runtime code.
- AI implementation.
- Prompt execution system.
- Model integration layer.
- Clinical decision support.
- Clinical validation evidence.
- Production readiness evidence.
- Regulatory compliance evidence.
- Cybersecurity certification evidence.
- Authorization for clinical use.
- Authorization for real patient data.

This document supports safer sandbox-readiness planning but does not prove that any sandbox, AI feature, workflow, or output is safe, validated, compliant, or ready for real patient use.
