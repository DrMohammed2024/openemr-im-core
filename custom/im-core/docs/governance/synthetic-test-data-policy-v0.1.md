# Synthetic Test Data Policy V0.1

## 1. Document Status

Status: Draft for governance review.

Document type: Synthetic test data policy.

Scope: Documentation-only.

Current stage: Planning and governance only.

This policy defines requirements for synthetic or non-patient test data that may be referenced in future OpenEMR IM Core documentation-stage planning, workflow simulation concepts, AI-output review concepts, and sandbox-readiness discussions.

This document does not introduce runtime code, AI implementation, prompt execution, model integration, API/FHIR implementation, SQL, database migration, database schema change, OpenEMR core-sensitive change, PHI, real patient data, clinical validation, production readiness, regulatory compliance, or cybersecurity certification.

---

## 2. Purpose

The purpose of this policy is to prevent accidental use of PHI, real patient data, production records, or sensitive operational data in future documentation, examples, sandbox-readiness planning, AI-output review planning, or workflow simulation concepts.

This policy supports:

- Synthetic-data-only planning.
- Privacy-preserving examples.
- Safe demonstration data.
- Documentation-stage workflow review.
- Future sandbox-readiness governance.
- AI-output evaluation without real patient data.
- Traceable review of test-data assumptions.

This policy does not authorize real patient data use.

---

## 3. Scope

This policy applies to:

- Future synthetic test data examples.
- Future non-patient demonstration data.
- Future workflow simulation examples.
- Future AI-output review examples.
- Future prompt proposal examples.
- Future sandbox planning examples.
- Future clinical workflow documentation examples.
- Future governance review examples.

This policy applies only to documentation-stage planning unless a future approved governance document extends its use.

---

## 4. Out of Scope

This policy does not create or authorize:

- Use of PHI.
- Use of real patient data.
- Use of patient identifiers.
- Use of production logs.
- Use of database dumps.
- Use of OpenEMR production records.
- Use of real clinical notes.
- Use of real medication lists.
- Use of real lab results.
- Use of real imaging reports.
- Use of real appointment or billing data.
- Runtime test-data generation.
- AI model integration.
- Prompt execution.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.

---

## 5. Core Principle

All future test or demonstration data must be:

- Synthetic.
- Non-patient.
- Non-identifiable.
- Non-production.
- Non-derived from real patient records unless a future approved governance pathway explicitly permits compliant de-identification.
- Clearly labeled as synthetic.
- Not used to claim clinical validation.
- Not used to claim production readiness.
- Not used to claim real-world performance.
- Not used to imply regulatory compliance.

At the current project stage, synthetic data is for documentation-stage examples only.

---

## 6. Prohibited Data

The following are prohibited:

- PHI.
- Real patient data.
- Patient identifiers.
- Real patient names.
- Real dates of birth.
- Real phone numbers.
- Real addresses.
- Real medical record numbers.
- Real insurance identifiers.
- Real appointment data.
- Real billing data.
- Real clinical notes.
- Real medication lists.
- Real allergy lists.
- Real lab results.
- Real imaging reports.
- Real problem lists.
- Real visit summaries.
- Real discharge summaries.
- Production logs.
- Database dumps.
- Secrets.
- API keys.
- Tokens.
- Passwords.
- Credentials.
- Private certificates.

Any prohibited data is NO-GO.

---

## 7. Allowed Synthetic Data

Allowed synthetic data may include fictional examples such as:

- Fictional patient labels that are clearly synthetic.
- Fictional ages using broad non-identifying examples.
- Fictional symptoms.
- Fictional vital signs.
- Fictional medication names for documentation examples only.
- Fictional lab values for demonstration only.
- Fictional workflow states.
- Fictional encounter scenarios.
- Fictional clinician roles.
- Fictional review outcomes.
- Synthetic identifiers that cannot match real systems.

Allowed synthetic data must not be copied from real patient records.

Allowed synthetic data must not be realistic enough to be confused with a real patient record unless clearly labeled as synthetic.

---

## 8. Synthetic Data Labeling Requirement

Any synthetic example must be labeled clearly.

Recommended labels:

- Synthetic example.
- Fictional demonstration data.
- Non-patient test data.
- Not real patient data.
- Not for clinical use.
- Not clinically validated.
- Not production data.

Synthetic examples should avoid ambiguity.

If a reader could reasonably mistake the data for real patient data, the example must be corrected before merge.

---

## 9. De-Identification Boundary

At the current project stage, de-identified real patient data is not authorized.

This policy does not define a compliant de-identification pathway.

Any future proposal to use de-identified data must require separate governance review covering:

- Legal basis.
- Privacy requirements.
- Data source.
- De-identification method.
- Re-identification risk.
- Access controls.
- Security controls.
- Human review.
- Regulatory implications.
- Local policy verification.
- Approval authority.

Until such a pathway is approved, only synthetic or non-patient demonstration data is allowed.

---

## 10. Clinical Safety Boundary

Synthetic examples must not be used to claim:

- Clinical accuracy.
- Diagnostic accuracy.
- Medication safety.
- Triage safety.
- Workflow validation.
- Clinical validation.
- Real-patient readiness.
- Production readiness.

Synthetic examples are useful for documentation review, but they do not prove safety or effectiveness.

---

## 11. AI and Prompt Boundary

Synthetic data may be referenced in future AI-related documentation only if:

- No prompt execution occurs.
- No model integration occurs.
- No AI runtime behavior is introduced.
- No PHI is included.
- No real patient data is included.
- AI output remains draft-only if discussed.
- Human review remains mandatory.
- Unsupported AI-safety claims are absent.

Synthetic data examples must not be used to bypass AI governance controls.

---

## 12. Sandbox Boundary

Future sandbox planning may reference synthetic data only if:

- Sandbox use remains documentation-stage or separately approved.
- Synthetic-data-only scope is explicit.
- No production connection exists.
- No live OpenEMR patient records are accessed.
- No API/FHIR implementation is introduced.
- No SQL or database migration is introduced.
- No OpenEMR core-sensitive change is introduced.
- Privacy/security review is required.
- Clinical safety review is required.

This policy does not authorize sandbox implementation.

---

## 13. Review Requirements

Any PR containing synthetic examples must be reviewed for:

- Clear synthetic labeling.
- Absence of PHI.
- Absence of real patient data.
- Absence of secrets.
- Absence of production logs.
- Absence of database dumps.
- No unsupported validation claims.
- No clinical-use authorization.
- No production-readiness claim.
- Traceability to this policy.
- Reviewer role assignment.

Reviewers should classify unclear examples as CONDITIONAL GO or NO-GO depending on risk.

---

## 14. Reviewer Roles

Recommended reviewer roles include:

- Documentation owner.
- Privacy/security reviewer.
- Clinical safety reviewer.
- AI governance reviewer when AI examples are involved.
- Technical reviewer when system examples are involved.
- Risk owner.
- Governance owner.

One person may cover multiple roles, but the role should remain explicit.

---

## 15. NO-GO Stop Rules

A synthetic-data-related proposal is NO-GO if it includes or enables:

1. PHI.
2. Real patient data.
3. Patient identifiers.
4. Real clinical notes.
5. Real medication lists from patients.
6. Real lab results from patients.
7. Real imaging reports from patients.
8. Real appointment or billing data.
9. Production logs.
10. Database dumps.
11. Secrets.
12. API keys.
13. Tokens.
14. Passwords.
15. Credentials.
16. De-identified real patient data without approved governance.
17. Synthetic data used to claim clinical validation.
18. Synthetic data used to claim production readiness.
19. Synthetic data used to claim regulatory compliance.
20. Synthetic data used to claim cybersecurity certification.
21. Synthetic data used with prompt execution at the current stage.
22. Synthetic data used with model integration at the current stage.
23. Missing synthetic-data label.
24. Unclear data provenance.
25. Missing privacy/security review.

A NO-GO stop rule cannot be overridden by convenience.

---

## 16. Decision Model

Synthetic-data-related proposals must be classified as:

- GO.
- CONDITIONAL GO.
- NO-GO.
- DEFER.

GO means documentation-stage progression only.

CONDITIONAL GO means specific corrections are required before merge.

NO-GO means the proposal is blocked due to privacy, safety, evidence, data provenance, or governance failure.

DEFER means the proposal may be appropriate later but is premature for the current project phase.

---

## 17. Synthetic Data Checklist

Before accepting a synthetic-data-related proposal, confirm:

- [ ] Data is synthetic or non-patient.
- [ ] Data is clearly labeled as synthetic.
- [ ] No PHI is present.
- [ ] No real patient data is present.
- [ ] No patient identifiers are present.
- [ ] No production logs are present.
- [ ] No database dumps are present.
- [ ] No secrets or credentials are present.
- [ ] Data is not copied from real patient records.
- [ ] Data does not imply clinical validation.
- [ ] Data does not imply production readiness.
- [ ] Data does not imply regulatory compliance.
- [ ] Data does not imply cybersecurity certification.
- [ ] Clinical-use authorization is absent.
- [ ] Privacy/security review is considered.
- [ ] Clinical safety review is considered when clinically relevant.
- [ ] Reviewer roles are identified.
- [ ] GO / CONDITIONAL GO / NO-GO / DEFER decision is documented.

---

## 18. Relationship to Existing Documents

This policy is governed by:

- Clinical AI Governance and Scientific Evaluation Framework V0.1.
- Governance Review Checklist for Pull Requests V0.1.
- Prompt Governance and AI-Output Review Policy V0.1.
- AI-Output Evaluation Checklist V0.1.
- Sandbox Readiness Criteria for AI-Assisted Workflows V0.1.
- AI Clinical Support Boundary Specification V0.1.
- Runtime Boundary Specification V0.1.
- API/FHIR Boundary Specification V0.1.
- Database Boundary and Migration Policy V0.1.
- Documentation Index and Review Cadence V0.1.

This policy does not replace those documents.

It defines synthetic-test-data governance only.

---

## 19. Acceptance Criteria

Before merge, confirm:

- [ ] Documentation-only scope.
- [ ] One new policy file only.
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
- [ ] Synthetic-data-only boundary is explicit.
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
- Reference this policy in future sandbox, AI-output, prompt governance, workflow simulation, and test-data PRs.

---

## 21. Status and Limitations

This policy is a documentation-stage governance artifact.

It is not:

- Runtime code.
- AI implementation.
- Prompt execution system.
- Model integration layer.
- Test-data generator.
- De-identification method.
- Clinical validation evidence.
- Production readiness evidence.
- Regulatory compliance evidence.
- Cybersecurity certification evidence.
- Authorization for clinical use.
- Authorization for real patient data.

This policy supports safer synthetic-data governance planning but does not prove that any synthetic dataset, sandbox, AI feature, workflow, or output is safe, validated, compliant, or ready for real patient use.
