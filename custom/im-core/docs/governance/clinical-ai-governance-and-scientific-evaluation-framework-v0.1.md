# Clinical AI Governance and Scientific Evaluation Framework V0.1

## AI-Assisted Solo-Owner Applicability

For eligible documentation-stage work, reviewer-role requirements in this
framework are GPT multidisciplinary advisory lenses and the Project Owner makes
the final accountable internal decision under the AI-Assisted Solo-Owner
Governance Policy V0.1. Separate specialist-human approvals are not mandatory
internal merge gates.

Any AI or prompt execution, clinical workflow use, clinical claim, PHI,
validation, deployment, production, regulatory, compliance, certification, or
external-release activity remains outside this model and retains every
applicable qualified-human or external gate.

## 1. Document Status

Status: Draft for governance review.

Document type: Governance and scientific evaluation framework.

Scope: Documentation-only.

Current stage: Planning and governance only.

This document does not authorize runtime implementation, clinical use, AI implementation, prompt execution, model integration, FHIR/API implementation, database changes, SQL, OpenEMR core modification, or use with PHI or real patient data.

This framework is not an autonomous clinical AI agent.

It is a structured, human-supervised review framework for project governance, scientific evaluation, risk awareness, and traceability.

---

## 2. Purpose

The purpose of this framework is to define a repeatable, human-supervised method for reviewing OpenEMR IM Core project components before they are accepted, merged, implemented, or used as a basis for future work.

The framework supports review of:

- Governance documents.
- Architecture documents.
- Clinical workflow documents.
- Risk mapping documents.
- AI-assisted concepts.
- Future prompt proposals.
- Future AI-output review proposals.
- Feature proposals.
- Implementation proposals.
- Safety claims.
- Privacy claims.
- Readiness claims.

The framework is intended to reduce the risk of:

- Unsupported medical claims.
- Unsafe workflow assumptions.
- Premature AI implementation.
- Premature runtime implementation.
- Unclear physician responsibility boundaries.
- Privacy or security leakage.
- Weak traceability.
- Unsafe clinical autonomy.
- Unsupported production-readiness, validation, compliance, or certification claims.

---

## 3. Scope

This framework applies to documentation-stage review of OpenEMR IM Core project artifacts.

It may be used to review whether a proposed component is appropriate for the current project phase.

The framework applies to:

- Documentation-only PRs.
- Clinical workflow specifications.
- Internal Medicine workflow planning.
- Risk mappings.
- Boundary specifications.
- AI governance concepts.
- Prompt governance concepts.
- Scientific review criteria.
- Privacy and safety review criteria.
- Implementation-readiness proposals.
- Documentation Index entries.
- Future sandbox planning proposals.

This framework supports human reviewers by defining structured criteria, scoring dimensions, stop rules, and decision categories.

---

## 4. Out of Scope

This framework does not create, authorize, or implement:

- Runtime functionality.
- PHP runtime code.
- JavaScript runtime code.
- AI implementation.
- Prompt execution.
- Model integration.
- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- Autonomous clinical documentation finalization.
- Clinical decision automation.
- API/FHIR implementation.
- SQL.
- Database migration.
- Database schema change.
- OpenEMR core-sensitive change.
- Production deployment.
- Use with PHI.
- Use with real patient data.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.

This framework must not be used as evidence that the project is clinically validated, production-ready, regulatory compliant, cybersecurity certified, or safe for use with real patients.

---

## 5. Non-Autonomous Role

This framework is non-autonomous.

It may support human reviewers by providing:

- Review criteria.
- Scoring dimensions.
- Decision categories.
- Stop rules.
- Traceability expectations.
- Required reviewer roles.
- Required limitation statements.

It must not:

- Diagnose.
- Prescribe.
- Triage.
- Override clinicians.
- Make final clinical decisions.
- Process real patient data.
- Process PHI.
- Execute prompts.
- Call AI models.
- Integrate AI models.
- Produce final clinical documentation.
- Authorize clinical use.
- Authorize production deployment.
- Replace clinical, technical, privacy, security, or regulatory review.

All decisions supported by this framework require human review.

A qualified physician or designated clinical reviewer remains responsible for any clinical interpretation, workflow approval, or future clinical decision.

---

## 6. Scientific Validity Review

Each proposed component should be reviewed for scientific and clinical coherence.

Scientific validity review should assess whether the component:

- Has a clear clinical, technical, governance, or safety purpose.
- Uses medically coherent logic when clinical content is present.
- Fits the Internal Medicine context when applicable.
- Avoids unsupported diagnostic, therapeutic, or prognostic claims.
- Avoids overclaiming certainty.
- Makes assumptions explicit.
- Distinguishes known facts from proposed design.
- Distinguishes current documentation-only scope from future implementation.
- Includes safety-relevant limitations.
- Avoids vague claims such as AI-safe, clinically validated, production-ready, or ready for clinical use unless supported by formal evidence.

A component should be flagged if it:

- Uses clinical language without defining responsibility boundaries.
- Presents unverified clinical logic as established fact.
- Omits clinically important safety checks.
- Omits physician review requirements.
- Uses unsupported claims of effectiveness, safety, validation, compliance, or certification.
- Suggests that AI can independently make clinical decisions.

Scientific validity review does not establish clinical validation.

---

## 7. Evidence-Awareness Check

Evidence-awareness review evaluates whether clinical, technical, safety, privacy, or readiness claims are appropriately supported or clearly limited.

The review should check whether the component:

- Names relevant guideline families, standards, policies, or governance principles when appropriate.
- Avoids fabricated citations.
- Avoids unsupported numeric thresholds.
- Avoids unsupported claims of clinical validation.
- Avoids unsupported claims of regulatory compliance.
- Avoids unsupported claims of production readiness.
- Labels uncertainty clearly.
- Uses local verification markers when site-specific, jurisdiction-specific, or policy-dependent requirements are involved.
- Distinguishes general clinical logic from validated project behavior.
- Distinguishes documentation-stage planning from implementation.

Evidence-awareness review may refer to accepted clinical reasoning, recognized medical software safety principles, privacy/security principles, and healthcare AI governance principles.

Evidence-awareness review does not prove regulatory compliance, clinical validation, cybersecurity certification, or production readiness.

---

## 8. Clinical Safety Review

Clinical safety review evaluates whether a proposed component could create patient-safety risk if misunderstood, misused, or prematurely implemented.

The review should assess:

- Red flags.
- Must-not-miss clinical risks.
- Diagnostic risk.
- Medication-related risk.
- Allergy risk.
- Contraindication risk.
- Pregnancy-related risk when relevant.
- Renal or hepatic impairment considerations when relevant.
- Anticoagulant or high-risk medication considerations when relevant.
- Follow-up and open-loop risk.
- Safety-netting requirements.
- Escalation triggers.
- Physician review checkpoints.
- Human responsibility boundaries.
- Risk of automation bias.
- Risk of false reassurance.
- Risk of unsupported AI-generated clinical content.

A component should be marked NO-GO if it creates or implies:

- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- AI output treated as final clinical documentation.
- Clinical use without physician review.
- Patient-facing clinical advice without approved governance.
- Missing safety-netting for clinically meaningful risk.
- Missing escalation criteria for high-risk situations.
- Unsupported claim that the workflow is clinically validated.

Clinical safety review does not authorize clinical use.

---

## 9. Privacy and Security Review

Privacy and security review evaluates whether a proposed component introduces sensitive data, secrets, or unsafe data-handling assumptions.

The review must confirm absence of:

- PHI.
- Real patient data.
- Patient identifiers.
- Names of real patients.
- Dates of birth for real patients.
- Phone numbers for real patients.
- Addresses for real patients.
- Medical record numbers.
- Insurance identifiers.
- Production logs containing patient data.
- Secrets.
- API keys.
- Tokens.
- Passwords.
- Credentials.
- Private certificates.
- Unnecessary sensitive operational data.

A component should be marked NO-GO if it includes PHI, real patient data, secrets, API keys, credentials, production logs with sensitive content, or any sensitive data not explicitly approved by project governance.

Privacy/security review should also check whether the component could encourage future collection of unnecessary sensitive data.

This framework does not establish privacy-law compliance or cybersecurity certification.

---

## 10. AI Boundary Review

AI boundary review evaluates whether a component respects the current project prohibition on AI implementation and unsafe clinical autonomy.

At the current project stage, a component must not introduce:

- AI runtime behavior.
- AI model integration.
- Prompt execution.
- Automated AI output generation.
- Autonomous clinical reasoning.
- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- AI-generated final clinical documentation.
- AI recommendations without physician review.
- AI behavior using PHI or real patient data.
- Claims that AI outputs are clinically validated.
- Claims that AI outputs are safe for real patients.

Allowed AI-related content at this stage is limited to documentation-stage concepts, governance boundaries, review criteria, future planning language, and human-supervised draft-support principles.

All AI-related concepts must remain:

- Documentation-only.
- Non-runtime.
- Non-autonomous.
- Human-supervised.
- Draft-only if future AI outputs are discussed.
- Clearly not authorized for real patient use.

---

## 11. Workflow Integrity Review

Workflow integrity review evaluates whether a clinical or governance workflow is logical, complete, reviewable, and safe for its documented purpose.

The review should assess whether the workflow:

- Has a clear start point.
- Has a clear end point.
- Defines responsible human roles.
- Defines handoff points.
- Defines review checkpoints.
- Avoids hidden assumptions.
- Avoids unsafe shortcuts.
- Avoids ambiguous decision authority.
- Includes escalation or stop rules when appropriate.
- Includes safety-netting when clinically relevant.
- Links to risk mapping when relevant.
- Links to documentation index and review cadence when relevant.
- Avoids mixing documentation-stage planning with runtime implementation.

A workflow should be flagged if it is clinically plausible but incomplete, difficult to review, missing safety steps, or unclear about physician responsibility.

A workflow should be marked NO-GO if it enables unsafe automation or removes necessary clinician review.

---

## 12. Traceability Review

Traceability review evaluates whether a proposed component can be reviewed, audited, and connected to existing project governance.

Each reviewed component should identify:

- Document title.
- Version.
- File path.
- PR number when available.
- Related issue when available.
- Related governance documents.
- Related boundary documents.
- Related risk documents.
- Reviewer roles.
- Decision state.
- Required corrections if any.
- Open questions.
- After-merge action.

Traceability review should ensure that a component does not appear in isolation when it depends on existing boundary, risk, privacy, or safety documents.

A component should be flagged if it lacks clear relationships to relevant governance documents or if it makes claims that are not traceable to project evidence.

---

## 13. Implementation Readiness Scoring

Implementation readiness scoring is a documentation-stage review tool.

It does not establish:

- Clinical validation.
- Production readiness.
- Regulatory compliance.
- Cybersecurity certification.
- Permission to implement.
- Permission to deploy.
- Permission to use real patient data.

Each component may be scored from 0 to 10 across the following dimensions:

| Dimension | Meaning |
|---|---|
| Clinical safety | Degree to which patient-safety risks are identified and controlled for the current phase |
| Scientific validity | Degree to which the component is clinically coherent and logically structured |
| Evidence alignment | Degree to which claims are supported, limited, or uncertainty-labeled |
| Privacy/security | Degree to which PHI, real patient data, secrets, and sensitive data are excluded |
| AI boundary compliance | Degree to which the component avoids unauthorized AI behavior |
| Human supervision | Degree to which human review and physician responsibility are explicit |
| Traceability | Degree to which the component links to relevant documents, PRs, risks, and decisions |
| Workflow integrity | Degree to which workflow steps are logical, reviewable, and complete |
| Testability | Degree to which future validation or review criteria can be defined |
| Usability | Degree to which human reviewers can understand and apply the component |
| Maintainability | Degree to which the component can be updated without governance confusion |
| Phase-appropriate readiness | Degree to which the component fits the current documentation-only project phase |

Suggested interpretation:

| Score | Interpretation |
|---|---|
| 0-2 | Not acceptable; major safety, privacy, evidence, or governance failure |
| 3-5 | Weak; substantial correction required |
| 6-7 | Partially acceptable; correction required before merge |
| 8 | Acceptable for limited documentation-stage use if no stop rule is triggered |
| 9 | Strong documentation-stage readiness |
| 10 | Excellent documentation-stage readiness with clear limits and traceability |

A high score does not override a NO-GO stop rule.

A high score does not authorize clinical use.

A high score does not authorize runtime implementation.

A high score does not prove validation or compliance.

---

## 14. Decision Model

Each reviewed component should receive one of four decision states.

### GO

GO means the component is acceptable for documentation-only progression in the current project phase.

GO requires:

- No NO-GO stop rule triggered.
- Scope is documentation-only.
- Human responsibility boundaries are clear.
- Privacy/security constraints are respected.
- Claims are supported or appropriately limited.
- Traceability is adequate.
- Required reviewers have no blocking concerns.

### CONDITIONAL GO

CONDITIONAL GO means the component may become acceptable after specific corrections.

Examples:

- Add missing limitation statement.
- Add physician review checkpoint.
- Remove unsupported readiness claim.
- Add privacy exclusion statement.
- Clarify that AI output is draft-only.
- Add relationship to existing boundary documents.
- Add missing stop rule.
- Correct ambiguous clinical language.

A CONDITIONAL GO must list required corrections.

The component should not be merged until required corrections are completed and re-reviewed.

### NO-GO

NO-GO means the component is blocked due to safety, privacy, evidence, autonomy, or governance failure.

NO-GO applies if a stop rule is triggered.

The component must not be merged until corrected and re-reviewed.

### DEFER

DEFER means the idea may be appropriate but is not ready for the current project phase.

Examples:

- Runtime sandbox planning before governance controls are complete.
- Prompt execution planning before AI boundary review is mature.
- API/FHIR implementation planning before boundary and safety controls are complete.
- OpenEMR module implementation before documentation-stage governance is complete.

DEFER does not mean the idea is rejected permanently.

---

## 15. NO-GO Stop Rules

A component must be marked NO-GO if it includes or enables any of the following at the current project stage:

1. PHI.
2. Real patient data.
3. Patient identifiers.
4. Secrets.
5. API keys.
6. Tokens.
7. Passwords.
8. Credentials.
9. Production logs containing sensitive data.
10. Autonomous diagnosis.
11. Autonomous prescribing.
12. Autonomous triage.
13. AI output treated as final clinical documentation.
14. AI output used without physician review.
15. Runtime code without an approved future gate.
16. Prompt execution.
17. Model integration.
18. API/FHIR implementation.
19. SQL.
20. Database migration.
21. Database schema change.
22. OpenEMR core-sensitive change.
23. Unsupported production-readiness claim.
24. Unsupported clinical-validation claim.
25. Unsupported regulatory-compliance claim.
26. Unsupported cybersecurity-certification claim.
27. Unsupported AI-safe claim.
28. Missing physician review boundary for clinical content.
29. Missing privacy/security review for sensitive work.
30. Unclear responsibility boundary for clinical decisions.
31. Patient-facing medical advice without approved governance.
32. Use of this framework as authorization for clinical use.

If a NO-GO stop rule is triggered, scoring must not be used to override the block.

---

## 16. Human Supervision Requirements

Human supervision is mandatory for all clinical, AI-related, privacy-related, safety-related, and implementation-readiness decisions.

The framework requires explicit human review for:

- Clinical workflow documents.
- AI-related documents.
- Safety claims.
- Privacy claims.
- Readiness claims.
- Risk mappings.
- Implementation proposals.
- Prompt proposal documents.
- Future AI-output proposal documents.
- Any component that could be interpreted as clinical decision support.

Human reviewers must confirm:

- The component is within project scope.
- No stop rule is triggered.
- Human responsibility boundaries are clear.
- AI does not act autonomously.
- Clinical use is not authorized.
- PHI and real patient data are not used.
- Unsupported readiness, validation, compliance, or certification claims are absent.

---

## 17. Reviewer Roles

Recommended reviewer roles include:

### Clinical Reviewer

Responsible for reviewing:

- Clinical coherence.
- Internal Medicine workflow logic.
- Safety-netting.
- Red flags.
- Must-not-miss risks.
- Physician review boundaries.
- Clinical assumptions.

### Governance Reviewer

Responsible for reviewing:

- Documentation-first scope.
- Project phase alignment.
- Traceability.
- Decision model use.
- Claims control.
- Relationship to existing governance documents.

### Technical Reviewer

Responsible for reviewing:

- Absence of runtime code.
- Absence of API/FHIR implementation.
- Absence of SQL or database migration.
- Absence of OpenEMR core-sensitive changes.
- Implementation boundary alignment.

### Privacy/Security Reviewer

Responsible for reviewing:

- Absence of PHI.
- Absence of real patient data.
- Absence of secrets.
- Absence of API keys or credentials.
- Absence of production logs containing sensitive data.
- Data minimization and privacy boundary alignment.

### Final PR Reviewer

Responsible for confirming:

- Required review roles were considered.
- Changed files are within scope.
- GitHub checks show 0 failing and 0 pending.
- Merge criteria are satisfied.
- No unresolved NO-GO issue remains.

One person may perform more than one role if appropriate, but the review role must still be explicit.

---

## 18. Review Scoring Table

Use this table when reviewing a component.

| Dimension | Score 0-10 | Reviewer notes | Required correction |
|---|---:|---|---|
| Clinical safety |  |  |  |
| Scientific validity |  |  |  |
| Evidence alignment |  |  |  |
| Privacy/security |  |  |  |
| AI boundary compliance |  |  |  |
| Human supervision |  |  |  |
| Traceability |  |  |  |
| Workflow integrity |  |  |  |
| Testability |  |  |  |
| Usability |  |  |  |
| Maintainability |  |  |  |
| Phase-appropriate implementation readiness |  |  |  |

Overall decision:

| Field | Value |
|---|---|
| Decision | GO / CONDITIONAL GO / NO-GO / DEFER |
| Stop rule triggered? | Yes / No |
| Required corrections |  |
| Reviewer roles completed |  |
| After-merge action |  |

Scoring note:

A score is a documentation-stage review aid only. It does not establish clinical validation, production readiness, regulatory compliance, cybersecurity certification, or permission for runtime implementation.

---

## 19. Component Review Checklist

Use this checklist before approving a component for documentation-only progression.

### Scope

- [ ] The component is documentation-only.
- [ ] The component is appropriate for the current project phase.
- [ ] The component does not introduce runtime behavior.
- [ ] The component does not introduce AI implementation.
- [ ] The component does not introduce prompt execution.
- [ ] The component does not introduce model integration.
- [ ] The component does not introduce API/FHIR implementation.
- [ ] The component does not introduce SQL.
- [ ] The component does not introduce database migration.
- [ ] The component does not introduce database schema change.
- [ ] The component does not introduce OpenEMR core-sensitive change.

### Privacy and Security

- [ ] No PHI is present.
- [ ] No real patient data is present.
- [ ] No patient identifiers are present.
- [ ] No secrets are present.
- [ ] No API keys are present.
- [ ] No tokens are present.
- [ ] No passwords are present.
- [ ] No credentials are present.
- [ ] No production logs containing sensitive data are present.

### Clinical Safety

- [ ] No autonomous diagnosis is introduced or implied.
- [ ] No autonomous prescribing is introduced or implied.
- [ ] No autonomous triage is introduced or implied.
- [ ] Physician review boundaries are explicit.
- [ ] Safety-netting is included when clinically relevant.
- [ ] Escalation triggers are included when clinically relevant.
- [ ] Must-not-miss risks are considered when clinically relevant.
- [ ] Medication safety risks are considered when relevant.

### Evidence and Claims

- [ ] Unsupported production-readiness claims are absent.
- [ ] Unsupported clinical-validation claims are absent.
- [ ] Unsupported regulatory-compliance claims are absent.
- [ ] Unsupported cybersecurity-certification claims are absent.
- [ ] Unsupported AI-safe claims are absent.
- [ ] Uncertainty is labeled where needed.
- [ ] Local verification markers are used where local policy or jurisdictional verification is required.

### Traceability

- [ ] Related documents are identified.
- [ ] Related risks are identified when relevant.
- [ ] Reviewer roles are identified.
- [ ] Decision state is documented.
- [ ] After-merge action is documented.

### Decision

- [ ] GO.
- [ ] CONDITIONAL GO with required corrections.
- [ ] NO-GO with stop rule identified.
- [ ] DEFER with reason and future trigger.

---

## 20. Relationship to Existing Documents

This framework should be used with, and not as a replacement for, existing and future OpenEMR IM Core governance documents.

| Document | Relationship |
|---|---|
| Runtime Boundary Specification V0.1 | This framework uses the runtime boundary to block premature runtime behavior. |
| Database Boundary and Migration Policy V0.1 | This framework uses the database boundary to block SQL, migration, schema, or database changes at the current stage. |
| API/FHIR Boundary Specification V0.1 | This framework uses the API/FHIR boundary to block premature API/FHIR implementation or readiness claims. |
| AI Clinical Support Boundary Specification V0.1 | This framework uses the AI boundary to keep AI-related work non-autonomous, documentation-only, and physician-supervised. |
| Internal Medicine Workflow Specification Template V0.1 | This framework reviews workflow specifications for clinical coherence, safety, traceability, and human supervision. |
| Internal Medicine Visit Documentation Workflow V0.1 | This framework reviews visit documentation workflows for safety-netting, open loops, physician responsibility, and unsafe shortcut risk. |
| Workflow Risk Mapping for Internal Medicine Visit Documentation V0.1 | This framework generalizes risk review principles from the visit documentation workflow to future components. |
| Documentation Index and Review Cadence V0.1 | This framework should be added to the index after merge in a separate documentation-only PR. |
| Risk Register V0.1 | Risks identified through this framework may be candidates for entry into the risk register. |
| Clinical Safety Case V0.1 | This framework may provide review inputs for the clinical safety case, but does not replace the safety case. |
| Threat Model and Data Governance V0.1 | This framework should reference threat and data governance documents for privacy/security boundary checks when available. |

If a listed document does not yet exist on master, the relationship should be treated as planned or future-facing and verified before being cited as active project evidence.

---

## 21. Acceptance Criteria

This document may be merged only if all criteria below are met.

### Documentation Scope

- [ ] One new documentation file only, unless an explicitly justified documentation-only index update is included.
- [ ] Correct file path.
- [ ] Markdown headings are complete.
- [ ] No runtime code.
- [ ] No AI implementation.
- [ ] No prompt execution.
- [ ] No model integration.
- [ ] No API/FHIR implementation.
- [ ] No SQL.
- [ ] No database migration.
- [ ] No database schema change.
- [ ] No OpenEMR core-sensitive change.

### Privacy and Security

- [ ] No PHI.
- [ ] No real patient data.
- [ ] No patient identifiers.
- [ ] No secrets.
- [ ] No API keys.
- [ ] No credentials.
- [ ] No production logs.

### Clinical and AI Safety

- [ ] No autonomous diagnosis.
- [ ] No autonomous prescribing.
- [ ] No autonomous triage.
- [ ] No AI output treated as final clinical documentation.
- [ ] Physician review boundaries are explicit.
- [ ] Human supervision is required for clinical and AI-related decisions.
- [ ] NO-GO stop rules are included.

### Claims Control

- [ ] No production-readiness claim.
- [ ] No clinical-validation claim.
- [ ] No regulatory-compliance claim.
- [ ] No cybersecurity-certification claim.
- [ ] No unsupported AI-safe claim.
- [ ] Non-authorization for clinical use is explicit.

### GitHub Merge Criteria

- [ ] Changed-files review confirms only intended documentation file is included.
- [ ] PR body states scope, safety, non-authorization, and merge criteria.
- [ ] Required reviewer roles are listed.
- [ ] GitHub checks show 0 failing.
- [ ] GitHub checks show 0 pending.
- [ ] No unresolved NO-GO issue remains.

---

## 22. After-Merge Action

After this document is merged:

- Update local master.
- Confirm this file exists on master.
- Confirm the working tree is clean.
- Create a separate documentation-only PR to update the Documentation Index and Review Cadence document.
- Reference this framework in future clinical workflow, AI-related, risk, privacy, safety, and implementation-readiness PRs.
- Use this framework as a review gate before starting prompt governance, runtime sandbox planning, medication review workflows, lab result review workflows, chronic disease follow-up workflows, or OpenEMR implementation planning.

The documentation index follow-up PR should not introduce runtime code, AI implementation, prompt execution, model integration, API/FHIR implementation, SQL, database migration, PHI, real patient data, or OpenEMR core-sensitive changes.

---

## 23. Status and Limitations

This framework is a documentation-stage governance artifact.

It is not:

- A clinical decision support system.
- An AI model.
- An AI agent.
- A runtime module.
- A prompt execution system.
- A model integration layer.
- A validated medical device.
- A production-ready component.
- A regulatory compliance artifact.
- A cybersecurity certification artifact.
- Authorization for clinical use.
- Authorization for real patient data.
- Authorization for autonomous diagnosis.
- Authorization for autonomous prescribing.
- Authorization for autonomous triage.

This framework supports safer project governance, but it does not prove that the project is clinically validated, production-ready, regulatory compliant, cybersecurity certified, or safe for real patient use.

Future changes must remain aligned with documentation-first, privacy-preserving, GitHub-governed, and physician-supervised project discipline unless a formally approved governance process changes the project phase.
