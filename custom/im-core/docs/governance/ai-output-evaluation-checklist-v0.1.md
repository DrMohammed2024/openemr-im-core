# AI-Output Evaluation Checklist V0.1

## AI-Assisted Solo-Owner Applicability

When an AI-assisted governance or documentation output is itself an eligible
non-executable artifact, GPT may apply this checklist as multidisciplinary
advisory review and the Project Owner makes the final accountable internal
decision. Separate specialist-human approvals are not mandatory internal merge
gates.

This does not authorize prompt/model execution, clinical use, PHI, or reliance
on GPT as an independent reviewer. Any triggered qualified-human or external
gate remains mandatory.

## 1. Document Status

Status: Draft for governance review.

Document type: AI-output evaluation checklist.

Scope: Documentation-only.

Current stage: Planning and governance only.

This checklist applies to future AI-output review concepts and AI-assisted drafting proposals in OpenEMR IM Core.

This document does not introduce runtime code, AI implementation, prompt execution, model integration, API/FHIR implementation, SQL, database migration, database schema change, OpenEMR core-sensitive change, PHI, real patient data, clinical validation, production readiness, regulatory compliance, or cybersecurity certification.

---

## 2. Purpose

The purpose of this checklist is to define how future AI-generated outputs must be reviewed before they can be considered acceptable for documentation-stage planning.

This checklist supports:

- Human-supervised AI-output review.
- Clinical safety review.
- Evidence and claim control.
- Privacy/security review.
- Traceability review.
- Draft-only AI-output handling.
- GO / CONDITIONAL GO / NO-GO / DEFER decisions.

This checklist does not authorize AI output generation or use with real patients.

---

## 3. Scope

This checklist applies to:

- Future AI-output review proposals.
- AI-assisted drafting concepts.
- Prompt governance documents.
- AI-related clinical workflow proposals.
- Future sandbox planning documents.
- Future AI review examples using synthetic or non-patient content only.

This checklist does not authorize prompt execution, model integration, or runtime AI behavior.

---

## 4. Out of Scope

This checklist does not create or authorize:

- AI runtime behavior.
- Prompt execution.
- Model integration.
- AI-generated final clinical documentation.
- AI-generated final medical advice.
- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- Use with PHI.
- Use with real patient data.
- Production deployment.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.

---

## 5. Core Review Rule

Any future AI output must be treated as:

- Draft-only.
- Non-final.
- Non-authoritative.
- Subject to physician review.
- Subject to clinical safety review.
- Subject to privacy/security review.
- Subject to evidence-awareness review.
- Subject to local policy verification when relevant.
- Not authorized for clinical use.

AI output must never be treated as final clinical documentation or final clinical advice.

---

## 6. AI-Output Content Review

Reviewers must check whether the AI output:

- Has a clear purpose.
- Matches the intended workflow context.
- Avoids unsupported medical claims.
- Avoids invented facts.
- Avoids fabricated references.
- Avoids overconfident language.
- Labels uncertainty where needed.
- Distinguishes known facts from assumptions.
- Avoids implying clinical validation.
- Avoids implying production readiness.
- Avoids implying regulatory compliance.

Unsupported or misleading output requires correction or NO-GO classification.

---

## 7. Clinical Safety Review

Reviewers must check for:

- Missed red flags.
- Missed escalation triggers.
- Missed safety-netting.
- Missed physician review checkpoints.
- Diagnostic risk.
- Medication risk.
- Allergy risk.
- Contraindication risk.
- False reassurance.
- Automation bias.
- Hallucinated clinical content.
- Unsafe triage implication.
- Unsafe prescribing implication.
- Unsafe diagnostic conclusion.

Any AI output that implies autonomous diagnosis, prescribing, or triage is NO-GO.

---

## 8. Privacy and Security Review

Reviewers must confirm the AI output does not contain:

- PHI.
- Real patient data.
- Patient identifiers.
- Real patient names.
- Dates of birth for real patients.
- Medical record numbers.
- Phone numbers.
- Addresses.
- Insurance identifiers.
- Production logs.
- Secrets.
- API keys.
- Tokens.
- Passwords.
- Credentials.
- Database dumps.
- Sensitive operational data.

Any PHI, real patient data, secret, credential, or sensitive production content is NO-GO.

---

## 9. Evidence and Claim Review

Reviewers must confirm the AI output does not claim:

- Clinical validation.
- Production readiness.
- Regulatory compliance.
- Cybersecurity certification.
- AI safety.
- FDA clearance.
- CE marking.
- Clinical decision support readiness.
- Real patient readiness.
- Medication safety validation.
- Diagnostic accuracy validation.

Unless supported by formal evidence, validation artifacts, regulatory analysis, and approved human reviewer sign-off.

At the current stage, these claims are prohibited.

---

## 10. Human Review Requirements

AI-output review requires explicit human supervision.

Recommended reviewer roles:

- Physician reviewer.
- Clinical safety reviewer.
- AI governance reviewer.
- Privacy/security reviewer.
- Technical reviewer.
- Documentation owner.
- Risk owner.

The responsible clinician remains accountable for any future clinical interpretation or use.

This checklist does not transfer responsibility to AI.

---

## 11. Traceability Review

Each AI-output review proposal should identify:

- Related document title.
- Related file path.
- Related PR number when available.
- Related prompt governance document.
- Related AI boundary document.
- Related risk mapping when applicable.
- Reviewer roles.
- Decision state.
- Required corrections.
- After-merge action.

Missing traceability may require CONDITIONAL GO.

---

## 12. Decision Model

Each reviewed AI-output proposal must be classified as:

- GO.
- CONDITIONAL GO.
- NO-GO.
- DEFER.

GO means documentation-stage progression only.

CONDITIONAL GO means specific corrections are required before merge.

NO-GO means the proposal is blocked due to safety, privacy, autonomy, evidence, or governance failure.

DEFER means the proposal may be appropriate later but is premature for the current project phase.

---

## 13. NO-GO Stop Rules

An AI-output proposal is NO-GO if it includes or enables:

1. PHI.
2. Real patient data.
3. Patient identifiers.
4. Secrets.
5. API keys.
6. Prompt execution.
7. Model integration.
8. AI runtime behavior.
9. Autonomous diagnosis.
10. Autonomous prescribing.
11. Autonomous triage.
12. AI output treated as final clinical documentation.
13. AI output used without physician review.
14. Patient-facing medical advice without approved governance.
15. Unsupported clinical-validation claim.
16. Unsupported AI-safety claim.
17. Unsupported production-readiness claim.
18. Unsupported regulatory-compliance claim.
19. Fabricated clinical evidence.
20. Missing human responsibility boundary.
21. Missing privacy/security review.
22. Missing clinical safety review for clinical content.

A NO-GO stop rule cannot be overridden by reviewer confidence or convenience.

---

## 14. Evaluation Checklist

Before accepting an AI-output concept, confirm:

- [ ] Output is draft-only.
- [ ] Output is non-final.
- [ ] Output is human-reviewed.
- [ ] Output does not include PHI.
- [ ] Output does not include real patient data.
- [ ] Output does not include secrets or credentials.
- [ ] Output does not imply autonomous diagnosis.
- [ ] Output does not imply autonomous prescribing.
- [ ] Output does not imply autonomous triage.
- [ ] Output does not bypass physician review.
- [ ] Output does not contain unsupported clinical claims.
- [ ] Output does not contain fabricated references.
- [ ] Output does not claim clinical validation.
- [ ] Output does not claim production readiness.
- [ ] Output does not claim regulatory compliance.
- [ ] Output includes uncertainty labeling when needed.
- [ ] Output includes safety limitations when clinically relevant.
- [ ] Output identifies required reviewer roles.
- [ ] Output is traceable to governance documents.

---

## 15. Relationship to Existing Documents

This checklist is governed by:

- Clinical AI Governance and Scientific Evaluation Framework V0.1.
- Governance Review Checklist for Pull Requests V0.1.
- Prompt Governance and AI-Output Review Policy V0.1.
- AI Clinical Support Boundary Specification V0.1.
- Runtime Boundary Specification V0.1.
- API/FHIR Boundary Specification V0.1.
- Database Boundary and Migration Policy V0.1.
- Documentation Index and Review Cadence V0.1.

This checklist does not replace those documents.

It provides AI-output-specific review criteria.

---

## 16. Acceptance Criteria

Before merge, confirm:

- [ ] Documentation-only scope.
- [ ] One new checklist file only.
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

## 17. After-Merge Action

After merge:

- Update local master.
- Confirm this file exists on master.
- Confirm working tree is clean.
- Remove temporary PR body files.
- Create a separate documentation-only PR to update the Documentation Index and Review Cadence document.
- Reference this checklist in future prompt, AI-output, AI-assisted workflow, and sandbox planning PRs.

---

## 18. Status and Limitations

This checklist is a documentation-stage governance artifact.

It is not:

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

This checklist supports safer AI-output governance planning but does not prove that any AI output is safe, validated, compliant, or ready for real patient use.
