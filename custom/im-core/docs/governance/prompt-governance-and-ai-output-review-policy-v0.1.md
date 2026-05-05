# Prompt Governance and AI-Output Review Policy V0.1

## 1. Document Status

Status: Draft for governance review.

Document type: Prompt governance and AI-output review policy.

Scope: Documentation-only.

Current stage: Planning and governance only.

This policy applies to future prompt proposals, AI-assisted drafting concepts, AI-output review concepts, and human-supervised AI workflow planning in OpenEMR IM Core.

This document does not introduce runtime code, AI implementation, prompt execution, model integration, API/FHIR implementation, SQL, database migration, database schema change, OpenEMR core-sensitive change, PHI, real patient data, clinical validation, production readiness, regulatory compliance, or cybersecurity certification.

---

## 2. Purpose

The purpose of this policy is to define how future prompts and AI-generated outputs must be governed before any AI-assisted workflow can be considered.

This policy prevents:

- Unsafe prompt use.
- Unsupported clinical claims.
- AI output treated as final medical documentation.
- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- Use of PHI or real patient data.
- Prompt execution before approved governance.
- Model integration before approved implementation gates.
- False claims of clinical validation or AI safety.

This policy supports physician-supervised, documentation-stage planning only.

---

## 3. Scope

This policy applies to:

- Future prompt proposal documents.
- AI-assisted drafting concepts.
- AI-output review proposals.
- Clinical workflow documents that mention AI support.
- Governance documents that define AI boundaries.
- Risk mappings involving AI-generated content.
- Future sandbox planning documents.
- Future AI review checklists.

This policy does not authorize prompt execution or model integration.

---

## 4. Out of Scope

This policy does not create or authorize:

- Runtime AI behavior.
- Prompt execution.
- Model integration.
- AI-generated clinical documentation.
- AI-generated patient instructions.
- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- AI use with PHI.
- AI use with real patient data.
- Production deployment.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.

---

## 5. Core Principle

All AI-related content in the current project phase must remain:

- Documentation-only.
- Non-runtime.
- Non-autonomous.
- Human-supervised.
- Draft-only when discussing future AI outputs.
- Not used with PHI.
- Not used with real patient data.
- Not authorized for clinical use.
- Not described as clinically validated.
- Not described as production-ready.

AI may be discussed only as a future governed support concept.

---

## 6. Prompt Proposal Requirements

Any future prompt proposal must define:

- Intended purpose.
- Intended user.
- Intended workflow context.
- Allowed input types.
- Prohibited input types.
- Expected output type.
- Human review requirement.
- Clinical safety limitations.
- Privacy limitations.
- Evidence limitations.
- Failure modes.
- Stop rules.
- Traceability to related governance documents.

Prompt proposals must not contain PHI, real patient data, secrets, API keys, credentials, or production logs.

---

## 7. Prohibited Prompt Content

Prompt proposals must not include:

- PHI.
- Real patient data.
- Patient identifiers.
- Secrets.
- API keys.
- Tokens.
- Passwords.
- Credentials.
- Production logs.
- Database dumps.
- Instructions for autonomous diagnosis.
- Instructions for autonomous prescribing.
- Instructions for autonomous triage.
- Instructions to bypass clinician review.
- Instructions to generate final clinical documentation.
- Unsupported claims of clinical validation.
- Unsupported claims of AI safety.
- Unsupported claims of production readiness.

Any such content is NO-GO.

---

## 8. AI-Output Review Requirements

Any future AI-output review concept must require human review before use.

AI output must be treated as:

- Draft-only.
- Non-final.
- Non-authoritative.
- Subject to physician review.
- Subject to clinical safety review.
- Subject to privacy/security review.
- Subject to local policy verification when relevant.

AI output must not be treated as final clinical documentation or final clinical advice.

---

## 9. Human Supervision Requirements

Human supervision is mandatory for all AI-related concepts.

Required review roles may include:

- Physician reviewer.
- Clinical safety reviewer.
- AI governance reviewer.
- Privacy/security reviewer.
- Technical reviewer.
- Documentation owner.
- Risk owner.

The responsible clinician remains accountable for any future clinical interpretation or use.

This policy does not transfer clinical responsibility to AI.

---

## 10. Clinical Safety Review

AI-related concepts must be reviewed for:

- Diagnostic risk.
- Medication risk.
- Red flag omission.
- False reassurance.
- Automation bias.
- Hallucinated clinical content.
- Missing safety-netting.
- Missing escalation criteria.
- Missing physician review checkpoint.
- Unsupported guideline claims.
- Ambiguous clinical responsibility.

Unsafe AI clinical autonomy is NO-GO.

---

## 11. Evidence and Claim Control

AI-related documents must not claim:

- Clinical validation.
- Production readiness.
- Regulatory compliance.
- Cybersecurity certification.
- AI safety.
- FDA clearance.
- CE marking.
- Clinical decision support readiness.
- Real patient readiness.

Unless supported by formal evidence, validation artifacts, regulatory analysis, and approved reviewer sign-off.

At this stage, such claims are prohibited.

---

## 12. Privacy and Security Requirements

AI-related concepts must exclude:

- PHI.
- Real patient data.
- Patient identifiers.
- Production logs.
- Secrets.
- API keys.
- Credentials.
- Database dumps.
- Sensitive operational data.

Future AI work must define data minimization and privacy boundaries before any implementation planning.

---

## 13. Stop Rules

A prompt or AI-output proposal is NO-GO if it includes or enables:

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
19. Missing human responsibility boundary.
20. Missing privacy/security review.

A NO-GO stop rule cannot be overridden by reviewer confidence or convenience.

---

## 14. Decision Model

AI-related proposals must be classified as:

- GO.
- CONDITIONAL GO.
- NO-GO.
- DEFER.

GO means documentation-stage progression only.

CONDITIONAL GO means corrections are required before merge.

NO-GO means the proposal is blocked due to safety, privacy, autonomy, evidence, or governance failure.

DEFER means the proposal may be appropriate later but is premature for the current project phase.

---

## 15. Relationship to Existing Documents

This policy is governed by:

- Clinical AI Governance and Scientific Evaluation Framework V0.1.
- Governance Review Checklist for Pull Requests V0.1.
- AI Clinical Support Boundary Specification V0.1.
- Runtime Boundary Specification V0.1.
- API/FHIR Boundary Specification V0.1.
- Database Boundary and Migration Policy V0.1.
- Workflow Risk Mapping for Internal Medicine Visit Documentation V0.1.
- Documentation Index and Review Cadence V0.1.

This policy does not replace those documents.

It provides prompt-specific and AI-output-specific governance rules.

---

## 16. Acceptance Criteria

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
- Reference this policy in future prompt, AI-output, AI-assisted workflow, and sandbox planning PRs.

---

## 18. Status and Limitations

This policy is a documentation-stage governance artifact.

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

This policy supports safer AI governance planning but does not prove that any AI feature is safe, validated, compliant, or ready for real patient use.
