# AI-Assisted Governance Review Procedure V0.1

## 1. Document Status

| Field | Value |
|---|---|
| Document title | AI-Assisted Governance Review Procedure V0.1 |
| Document type | Documentation-only operational governance procedure |
| Project | OpenEMR IM Core |
| Version | V0.1 |
| Stage | Documentation-only, pre-runtime, pre-implementation governance |
| Intended use | Define how GPT may support governance review as an AI-assisted advisory reviewer |
| Clinical use status | Not authorized for clinical use |
| Runtime status | No runtime implementation authorized |
| AI status | No AI implementation, prompt execution, or model integration authorized |
| PHI status | PHI and real patient data are prohibited |
| Approval authority | Human reviewers and maintainers only |
| Merge requirement | Human review plus GitHub checks showing 0 failing and 0 pending |
| Formal compliance status | This document does not claim clinical validation, regulatory compliance, cybersecurity certification, production readiness, or formal certification |
| Status | Proposed for documentation-only PR review |

---

## 2. Purpose

This procedure defines how GPT may be used as an AI-assisted governance reviewer for OpenEMR IM Core documentation-stage work.

It supports structured review of:

- Governance documents.
- Clinical workflow documents.
- Internal Medicine workflow documents.
- AI-output review concepts.
- Prompt governance documents.
- Sandbox-readiness documents.
- Synthetic test data documents.
- Risk documents.
- Traceability documents.
- Pull Request review artifacts.

This procedure preserves:

- Human accountability.
- Clinical safety.
- Privacy and security.
- Risk management discipline.
- AI governance boundaries.
- Evidence and claim control.
- Traceability and auditability.
- Documentation-only project boundaries.

This procedure does not authorize clinical use, runtime implementation, AI model integration, prompt execution, PHI processing, production deployment, clinical validation, regulatory approval, or cybersecurity certification.

---

## 3. Scope

This procedure applies to documentation-only review activities in the OpenEMR IM Core project.

It applies when GPT is used to assist review of:

- Governance documentation.
- Clinical safety documentation.
- Internal Medicine workflow documentation.
- AI-assisted clinical documentation concepts.
- Prompt governance documentation.
- AI-output evaluation documentation.
- Sandbox readiness documentation.
- Synthetic test data documentation.
- Risk management documentation.
- Privacy/security governance documentation.
- Traceability documentation.
- Pull Request review summaries.
- Documentation Index updates.

This procedure is documentation-only and supports governance review only.

---

## 4. Out of Scope

This procedure does not authorize:

- PHI.
- Real patient data.
- Patient identifiers.
- Secrets.
- API keys.
- Credentials.
- Production logs.
- Sensitive logs.
- Database dumps.
- Runtime code.
- AI implementation.
- Prompt execution.
- AI model integration.
- API/FHIR implementation.
- SQL.
- Database migration.
- Database schema change.
- OpenEMR core-sensitive change.
- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous treatment recommendation.
- Autonomous triage.
- Clinical validation claim.
- Production readiness claim.
- Regulatory compliance claim.
- Cybersecurity certification claim.
- Authorization for clinical use.
- Authorization for use with real patient data.
- Replacement of physician review.
- Replacement of privacy/security review.
- Replacement of risk owner approval.
- Replacement of regulatory review.

---

## 5. Core Principle

GPT may assist governance review, but GPT is not the final authority.

GPT output is:

- Advisory.
- Draft.
- Non-authoritative.
- Non-validating.
- Non-certifying.
- Non-regulatory.
- Not authorization for clinical use.
- Subject to human review and approval.

Human reviewers remain accountable for:

- Clinical safety decisions.
- Internal Medicine content decisions.
- Risk acceptance or escalation.
- Privacy/security decisions.
- AI governance decisions.
- Pull Request approval.
- Merge readiness.
- Final repository changes.

No PR may be merged solely because GPT recommends GO.

---

## 6. Role of GPT as AI-Assisted Reviewer

GPT may support review by:

- Detecting missing sections.
- Identifying unsafe claims.
- Checking project-boundary consistency.
- Screening for clinical safety concerns.
- Checking Internal Medicine clinical coherence.
- Identifying risk management gaps.
- Screening for PHI and privacy/security concerns.
- Checking prompt governance boundaries.
- Detecting unsupported claims.
- Checking traceability gaps.
- Producing structured review outputs.
- Drafting PR review comments for human review.
- Supporting consolidated decision summaries.

GPT must be instructed to:

- Stay within the documentation-only phase.
- Use synthetic examples only.
- Avoid PHI and real patient data.
- Avoid claims of validation, compliance, certification, or production readiness.
- Separate observed facts from assumptions.
- State uncertainty explicitly.
- Recommend CONDITIONAL GO or DEFER when evidence is incomplete.
- Recommend NO-GO when hard stop rules are triggered.
- Require human sign-off.

GPT must not be instructed to:

- Make final clinical decisions.
- Approve clinical use.
- Certify compliance.
- Validate the system.
- Approve risk acceptability.
- Approve privacy/security adequacy.
- Approve production readiness.
- Execute prompts on patient data.
- Generate or process PHI.
- Integrate into runtime workflows.
- Modify OpenEMR behavior.

---

## 7. Mandatory No-PHI and No-Secrets Pre-Check

GPT review must not begin until a human reviewer confirms that the review input package contains:

- No PHI.
- No real patient data.
- No patient identifiers.
- No secrets.
- No API keys.
- No credentials.
- No production logs.
- No sensitive logs.
- No database dumps.
- No unredacted screenshots.

If this confirmation cannot be made, GPT review must be deferred.

Correct review status:

DEFER - input package requires human sanitization before GPT-assisted review.

GPT must not be used to inspect or sanitize suspected PHI, real patient data, secrets, credentials, production logs, or database dumps.

The human reviewer must sanitize the material before GPT-assisted review begins.

---

## 8. Human Accountability Model

Human reviewers remain accountable for all review decisions.

GPT may recommend:

- GO.
- CONDITIONAL GO.
- NO-GO.
- DEFER.

Only authorized human reviewers may decide:

- Approved.
- Changes requested.
- Deferred.
- Rejected.

### 8.1 Accountability Matrix

| Area | GPT Role | Human Accountable Role |
|---|---|---|
| Clinical safety | AI-assisted issue detection and draft recommendation | Clinical Safety Owner |
| Internal Medicine content | AI-assisted clinical coherence review | Internal Medicine Clinical Reviewer |
| Risk management | AI-assisted hazard, control, and traceability review | Risk Owner |
| Privacy/security | AI-assisted PHI, secrets, and security screening | Privacy/Security Owner |
| AI governance | AI-assisted boundary, prompt, and output governance review | AI Governance Owner |
| PR merge | AI-assisted merge-readiness summary | Human maintainer |
| Final approval | Not permitted | Authorized human reviewer or maintainer |

### 8.2 Non-Delegable Human Decisions

The following decisions cannot be delegated to GPT:

- Clinical safety approval.
- Clinical content approval.
- Risk acceptance.
- Privacy/security approval.
- Regulatory interpretation.
- Cybersecurity certification.
- Clinical validation.
- Production readiness approval.
- Clinical-use authorization.
- Merge approval.
- Human reviewer sign-off.

---

## 9. Required Reviewer Roles

The following reviewer roles are used when the PR scope touches their domain:

- Clinical Safety Owner.
- Internal Medicine Clinical Reviewer.
- Risk Owner.
- Privacy/Security Owner.
- AI Governance Owner.

### 9.1 Role Applicability Matrix

| PR Content Type | Clinical Safety Owner | Internal Medicine Clinical Reviewer | Risk Owner | Privacy/Security Owner | AI Governance Owner |
|---|---:|---:|---:|---:|---:|
| Clinical workflow document | Required | Required | Required if risk-related | Required if examples or data are included | Required if AI-related |
| AI-output review document | Required | Required if clinical content | Required | Required | Required |
| Prompt governance document | Required if clinical prompts | Required if clinical content | Required | Required | Required |
| Sandbox-readiness document | Required if clinical workflow | Required if clinical content | Required | Required | Required |
| Synthetic test data document | Required if clinical examples | Required if medical content | Required | Required | Required if AI-related |
| Risk document | Required if patient harm is possible | Required if medical content | Required | Required if privacy/security risk exists | Required if AI-related |
| Documentation Index update only | Optional unless content changes introduce risk | Optional | Optional | Optional | Optional |

---

## 10. Clinical Safety Owner Review Procedure

The Clinical Safety Owner review checks whether the document creates unsafe clinical interpretation, unsafe future implementation, autonomous clinical behavior, false reassurance, or unsupported patient-safety claims.

### 10.1 GPT Review Focus

GPT should check:

- Whether the document states it is not for clinical use.
- Whether human clinician review is required.
- Whether autonomous diagnosis is prohibited.
- Whether autonomous prescribing is prohibited.
- Whether autonomous triage is prohibited.
- Whether autonomous treatment recommendation is prohibited.
- Whether clinical validation or safety claims are unsupported.
- Whether red-flag and safety-net boundaries are preserved when relevant.
- Whether future implementation is gated behind governance review.
- Whether any possible patient harm implication is acknowledged and controlled.

### 10.2 GPT Must Not Approve

GPT must not approve:

- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- Autonomous treatment recommendation.
- Final clinical recommendations.
- Clinical-use authorization.
- Clinical validation claims.
- Patient-safety claims without evidence.
- Real patient data.
- PHI.
- Unsupported guideline claims.
- Documentation that could reasonably be misread as authorizing runtime clinical AI.

### 10.3 GO Criteria

GPT may recommend GO only when:

- No hard NO-GO rule is triggered.
- The document is clearly documentation-only.
- Human clinician review is explicit.
- No autonomous clinical action is authorized.
- No clinical validation or clinical-use claim is present.
- Safety-net and red-flag boundaries are adequate for the document type.
- Any clinical examples are synthetic and labeled.
- Safety risks are traceable to controls or required future review.

### 10.4 CONDITIONAL GO Criteria

GPT may recommend CONDITIONAL GO when:

- No immediate hard NO-GO issue exists.
- Minor wording changes are needed.
- Human review language is present but should be strengthened.
- Synthetic-data labeling is incomplete but no real data are present.
- A safety-net statement needs clarification.
- A claim requires softening but does not yet authorize unsafe action.

Conditions must be resolved before merge.

### 10.5 NO-GO Criteria

GPT must recommend NO-GO if any of the following are present:

- PHI or real patient data.
- Autonomous clinical decision-making.
- Clinical-use authorization.
- Unsupported clinical validation claim.
- Unsupported patient-safety claim.
- Missing human clinician review for clinical content.
- Emergency or triage-related automation.
- Unresolved patient harm risk.
- Runtime AI behavior introduced in the current phase.

### 10.6 DEFER Criteria

GPT should recommend DEFER when:

- Clinical scope is unclear.
- Intended use is ambiguous.
- Required related governance documents are missing.
- Clinical claims require guideline verification.
- The reviewer cannot determine whether examples are synthetic.
- Specialist clinical review is required.

---

## 11. Internal Medicine Clinical Reviewer Review Procedure

The Internal Medicine Clinical Reviewer review checks medical coherence, conservative wording, and documentation-stage suitability.

### 11.1 GPT Review Focus

GPT should check:

- Internal Medicine clinical coherence.
- Chronic disease documentation logic.
- Medication review language.
- Symptom review language.
- Physical exam summary language.
- Follow-up and safety-net documentation.
- Unsupported guideline-like claims.
- Whether examples are synthetic.
- Whether assessment and plan language remains clinician-owned or clinician-reviewed.
- Whether documentation support is clearly separated from clinical decision-making.

### 11.2 GPT Must Not Approve

GPT must not approve:

- Autonomous diagnosis.
- Autonomous treatment plans.
- Autonomous medication changes.
- Autonomous prescribing.
- Autonomous triage.
- Unsupported guideline claims.
- Claims that documentation completeness equals clinical quality.
- Claims that GPT can determine patient safety.
- Use of real patient cases.

### 11.3 GO Criteria

GPT may recommend GO when:

- Clinical content is coherent.
- All medical content is documentation-stage only.
- Human clinician review is explicit.
- No autonomous clinical action is authorized.
- No unsupported guideline or treatment claim is present.
- Clinical examples are synthetic.
- Follow-up and safety-net content are conservative.

### 11.4 CONDITIONAL GO Criteria

GPT may recommend CONDITIONAL GO when:

- Minor clinical wording requires clarification.
- Guideline-like wording requires source verification or removal.
- Clinical examples need stronger synthetic labeling.
- Follow-up wording needs clearer human review boundary.
- Assessment and plan wording needs stronger clinician ownership language.

### 11.5 NO-GO Criteria

GPT must recommend NO-GO when:

- The document authorizes or implies autonomous diagnosis.
- The document authorizes or implies autonomous treatment.
- The document authorizes or implies autonomous prescribing.
- The document authorizes or implies autonomous triage.
- Clinical claims are unsafe, unsupported, or likely to mislead.
- Real patient data or PHI are present.
- Clinical validation is claimed without evidence.

### 11.6 DEFER Criteria

GPT should recommend DEFER when:

- Clinical content requires specialist verification.
- Guideline references cannot be verified.
- Medical logic is ambiguous.
- Related clinical workflow documents are missing.
- The intended clinical workflow is unclear.

---

## 12. Risk Owner Review Procedure

The Risk Owner review checks ISO 14971-style risk management discipline without claiming ISO 14971 compliance.

The review focuses on identifying hazards, hazardous situations, harms, controls, residual-risk questions, owners, and verification evidence.

### 12.1 GPT Review Focus

GPT should check:

- Hazards.
- Causes.
- Hazardous situations.
- Potential harms.
- Risk controls.
- Residual-risk questions.
- Verification evidence.
- Risk ownership.
- Traceability.
- Stop rules.
- Phase-appropriate mitigation.

### 12.2 GPT Must Not Approve

GPT must not approve:

- Risk acceptance.
- Missing patient-harm analysis.
- Vague risk controls.
- Unsupported risk-controlled statements.
- Unsupported acceptable-residual-risk statements.
- Runtime implementation as mitigation in the current phase.
- Missing human risk owner.
- Missing traceability to controls.
- Claims of formal ISO 14971 compliance.

### 12.3 GO Criteria

GPT may recommend GO when:

- Hazards, harms, controls, verification, and owners are defined.
- Risk control language is phase-appropriate.
- Residual-risk questions are documented.
- No GPT-based risk acceptance occurs.
- No hard NO-GO rule is triggered.
- Human Risk Owner sign-off is required.

### 12.4 CONDITIONAL GO Criteria

GPT may recommend CONDITIONAL GO when:

- Minor risk mapping gaps exist.
- Risk owner field needs completion.
- Verification evidence needs clarification.
- Control classification needs improvement.
- Residual-risk language needs strengthening.

### 12.5 NO-GO Criteria

GPT must recommend NO-GO when:

- Serious hazard is missing.
- Patient harm is not considered.
- Risk acceptance is claimed without human approval.
- GPT is treated as risk approver.
- Runtime mitigation is proposed in the current phase.
- Clinical safety, PHI, or unsupported claim risk is unresolved.
- No risk owner is assigned for material risk.

### 12.6 DEFER Criteria

GPT should recommend DEFER when:

- Intended use is unclear.
- Risk scope is unclear.
- Related boundary documents are unavailable.
- Hazard severity cannot be assessed.
- Specialist review is needed.
- Evidence is insufficient.

---

## 13. Privacy/Security Owner Review Procedure

The Privacy/Security Owner review checks whether PR content exposes PHI, real patient data, patient identifiers, secrets, credentials, production logs, database dumps, or unsupported privacy/security claims.

### 13.1 GPT Review Focus

GPT should check:

- PHI.
- Real patient data.
- Patient identifiers.
- Secrets, tokens, credentials, API keys, or private keys.
- Production logs or sensitive logs.
- Database dumps.
- Unredacted screenshots.
- Synthetic-data labeling.
- Unsupported privacy/security claims.
- Cybersecurity certification claims.

### 13.2 GPT Must Not Approve

GPT must not approve:

- PHI.
- Real patient data.
- Patient identifiers.
- Secrets.
- API keys.
- Credentials.
- Production logs.
- Sensitive logs.
- Database dumps.
- Unredacted screenshots.
- Prompt execution with PHI.
- Use of real patient data with GPT.
- Unsupported cybersecurity certification claims.
- Unsupported privacy compliance claims.

### 13.3 GO Criteria

GPT may recommend GO when:

- No PHI is present.
- No real patient data is present.
- No secrets are present.
- No production logs or database dumps are present.
- All examples are synthetic and labeled.
- GPT prompt templates prohibit PHI.
- Privacy/security claims are bounded and supportable.
- Human Privacy/Security Owner sign-off is required.

### 13.4 CONDITIONAL GO Criteria

GPT may recommend CONDITIONAL GO when:

- Synthetic labels need improvement.
- Privacy wording needs strengthening.
- Redaction instructions need clarification.
- Unsupported privacy/security wording can be removed before merge.
- No actual PHI or secrets are present.

### 13.5 NO-GO Criteria

GPT must recommend NO-GO when:

- PHI is present.
- Real patient data is present.
- Patient identifiers are present.
- Secrets or credentials are present.
- Production logs are present.
- Database dumps are present.
- Unredacted screenshots are present.
- Prompt templates allow PHI.
- Privacy/security compliance or certification is claimed without evidence.

### 13.6 DEFER Criteria

GPT should recommend DEFER when:

- It is unclear whether data are synthetic.
- It is unclear whether a screenshot is fully redacted.
- It is unclear whether logs are production-derived.
- The reviewer cannot determine whether an identifier is real.
- Privacy/security expertise is required.

---

## 14. AI Governance Owner Review Procedure

The AI Governance Owner review checks that GPT use remains bounded, advisory, human-supervised, auditable, non-runtime, and aligned with project AI governance boundaries.

### 14.1 GPT Review Focus

GPT should check:

- GPT role boundaries.
- Human-in-the-loop requirements.
- Prompt governance.
- AI-output review controls.
- Hallucination prevention.
- Unsupported claim prevention.
- Audit trail.
- Traceability.
- Future-stage gating.
- Prohibited uses.

### 14.2 GPT Must Not Approve

GPT must not approve:

- GPT as final approver.
- GPT as final clinical authority.
- GPT as regulatory authority.
- GPT as validator.
- GPT as clinical-use authorizer.
- AI runtime implementation in the current phase.
- Model integration.
- Prompt execution.
- AI processing of PHI.
- Autonomous clinical decision-making.
- Unsupported AI performance, safety, compliance, or validation claims.

### 14.3 GO Criteria

GPT may recommend GO when:

- GPT role is advisory only.
- Human sign-off is mandatory.
- AI-output review is structured.
- Prompt governance boundaries are clear.
- No runtime AI is authorized.
- No PHI use is authorized.
- No unsupported claims are present.
- Traceability and audit storage are defined.

### 14.4 CONDITIONAL GO Criteria

GPT may recommend CONDITIONAL GO when:

- Advisory-only language needs strengthening.
- Human sign-off language needs clarification.
- Prompt template boundaries need refinement.
- Audit storage path needs clarification.
- Hallucination-control language needs strengthening.
- No hard NO-GO issue exists.

### 14.5 NO-GO Criteria

GPT must recommend NO-GO when:

- GPT is treated as final authority.
- Clinical use is authorized.
- Prompt execution is authorized.
- Model integration is authorized.
- PHI processing is authorized.
- Autonomous clinical decision-making is authorized.
- Unsupported AI performance, safety, validation, compliance, or certification claims are present.
- Human review is missing.

### 14.6 DEFER Criteria

GPT should recommend DEFER when:

- AI governance scope is unclear.
- Relationship to boundary specifications is unclear.
- Future-stage gating is unclear.
- Required AI governance documents are unavailable.
- Claims require external verification.

---

## 15. End-to-End PR Review Workflow

Every applicable PR should follow this workflow:

1. Create a scoped documentation branch.
2. Draft documentation-only changes.
3. Confirm no prohibited content is included.
4. Open a PR with clear documentation-only scope.
5. Review changed files for scope drift.
6. Prepare GPT review input package.
7. Run GPT-assisted role reviews when applicable.
8. Store GPT review outputs when risk level requires it.
9. Human reviewers assess GPT outputs.
10. Resolve NO-GO and CONDITIONAL GO findings.
11. Re-run review if material changes are made.
12. Confirm human sign-offs.
13. Confirm GitHub checks show 0 failing and 0 pending.
14. Squash merge according to project policy.
15. Delete branch after merge.
16. Update Documentation Index if needed.
17. Preserve review evidence where applicable.

---

## 16. Required GPT Input Package

Before using GPT for governance review, the human reviewer must prepare a no-PHI input package.

The package should include:

- PR number.
- PR title.
- Branch name.
- PR description.
- Changed file list.
- Full text of relevant changed files.
- Related governance documents.
- Intended scope of the PR.
- Explicit project phase statement.
- Explicit prohibited-content statement.
- Reviewer role requested.
- Known uncertainties.
- Specific review questions.
- Confirmation that the input contains no PHI, real patient data, secrets, credentials, production logs, or database dumps.

If this cannot be confirmed, GPT review must not proceed.

---

## 17. Required GPT Output Format

All GPT-assisted reviews should use this structure:

- Review metadata.
- Boundary statement.
- AI-assisted recommendation.
- Findings.
- Hard NO-GO check.
- Required mitigations before merge.
- Traceability requirements.
- Human review requirement.
- Final advisory statement.

### 17.1 Review Metadata

The review metadata should include:

- Project.
- PR number.
- PR title.
- Branch.
- Reviewer role.
- GPT model.
- Review date.
- Input package no-PHI/no-secrets confirmation.
- Project phase.
- Review status.

### 17.2 Recommendation Format

The recommendation must be one of:

- GO.
- CONDITIONAL GO.
- NO-GO.
- DEFER.

The rationale must be concise and tied to evidence in the reviewed content.

### 17.3 Findings Format

Each finding should include:

- Finding ID.
- Severity.
- Category.
- Finding.
- Evidence or location.
- Risk.
- Required mitigation.
- Status.

Severity options:

- Critical.
- Major.
- Minor.
- Advisory.

Category options:

- Clinical safety.
- Internal Medicine.
- Risk management.
- Privacy/security.
- AI governance.
- Evidence/claim control.
- Traceability.
- PR workflow.
- Other.

Status options:

- Open.
- Resolved.
- Deferred.
- Not applicable.

### 17.4 Final Advisory Statement

Every GPT-assisted review must include a final advisory statement:

GPT output is advisory only. Final approval and merge decisions require human review and successful GitHub checks showing 0 failing and 0 pending.

---

## 18. Consolidated Decision Model

| Decision | Meaning | Merge Eligible |
|---|---|---|
| GO | No blocking issue found in reviewed scope | Yes, only after human sign-off and GitHub checks show 0 failing and 0 pending |
| CONDITIONAL GO | Fixable issues exist | No, not until conditions are resolved and reviewed |
| NO-GO | Blocking issue exists | No |
| DEFER | Insufficient information or specialist review required | No |

The consolidated PR decision must follow the strictest applicable result:

| Role Results | Consolidated Decision |
|---|---|
| All applicable roles GO | GO, pending human sign-off and GitHub checks |
| Any role CONDITIONAL GO, no NO-GO or DEFER | CONDITIONAL GO |
| Any role NO-GO | NO-GO |
| Any role DEFER, no NO-GO | DEFER |
| Missing required role review | DEFER |
| GitHub checks failing or pending | NO-GO for merge readiness |

GPT may produce an AI-assisted consolidated recommendation.

Only human maintainers and required role reviewers may produce the final decision.

---

## 19. Hard NO-GO Stop Rules

If any stop rule is triggered, GPT must recommend NO-GO and human reviewers must block merge until resolved.

| Stop Rule ID | Hard NO-GO Stop Rule | Required Action |
|---|---|---|
| HNG-001 | PHI present | Remove or redact; re-review |
| HNG-002 | Real patient data present | Remove; replace with synthetic data; re-review |
| HNG-003 | Patient identifiers present | Remove or redact; re-review |
| HNG-004 | Secrets, API keys, credentials, tokens, or private keys present | Remove; rotate if exposed; re-review |
| HNG-005 | Production logs or sensitive logs present | Remove; re-review |
| HNG-006 | Database dumps present | Remove; re-review |
| HNG-007 | Runtime code introduced | Remove or defer to authorized future phase |
| HNG-008 | AI implementation introduced | Remove or defer to authorized future phase |
| HNG-009 | Prompt execution authorized | Remove authorization |
| HNG-010 | Model integration introduced | Remove or defer to authorized future phase |
| HNG-011 | API/FHIR implementation introduced | Remove or defer to authorized future phase |
| HNG-012 | SQL/database migration/schema change introduced | Remove or defer to authorized future phase |
| HNG-013 | OpenEMR core-sensitive change introduced | Remove or route to separate authorized governance review |
| HNG-014 | Autonomous diagnosis authorized | Remove and re-review |
| HNG-015 | Autonomous prescribing authorized | Remove and re-review |
| HNG-016 | Autonomous triage authorized | Remove and re-review |
| HNG-017 | Clinical validation claim without evidence | Remove or replace with accurate boundary |
| HNG-018 | Production readiness claim without evidence | Remove |
| HNG-019 | Regulatory compliance claim without evidence | Remove |
| HNG-020 | Cybersecurity certification claim without evidence | Remove |
| HNG-021 | Authorization for clinical use | Remove |
| HNG-022 | Authorization for real patient data | Remove |
| HNG-023 | GPT described as final authority | Rewrite |
| HNG-024 | Missing required human sign-off | Block merge |
| HNG-025 | GitHub checks failing | Block merge |
| HNG-026 | GitHub checks pending | Block merge |

---

## 20. Evidence and Claim-Control Rules

Preferred language:

- Documentation-only governance procedure.
- AI-assisted advisory review.
- Human reviewer sign-off required.
- Not authorized for clinical use.
- Not clinically validated.
- No PHI or real patient data.
- Future implementation requires separate governance approval.
- This document does not claim formal compliance or certification.

Prohibited language unless formally evidenced:

- Clinically validated.
- Regulatory compliant.
- Certified.
- Production-ready.
- Cybersecurity-certified.
- Approved for clinical use.
- AI-approved.
- GPT-validated.
- Safe for patient care.
- Automatically diagnoses.
- Automatically prescribes.
- Automatically triages.

Unsupported claims must be removed, softened, or deferred for verification.

Every factual or project-status claim should be classified as one of:

- Verified.
- Documented only.
- Proposed.
- Assumed.
- Unknown.
- Out of scope.

---

## 21. PHI and Privacy Protection Rules

The following must not be included in GPT inputs, repository documents, PR comments, screenshots, examples, or review outputs:

- Real patient names.
- Real addresses.
- Phone numbers.
- Medical record numbers.
- National IDs.
- Dates linked to real care episodes.
- Real clinical notes.
- Real lab reports.
- Real imaging reports.
- Real prescriptions.
- Patient photos.
- Unredacted screenshots.
- Patient-identifying information.

Only synthetic examples may be used.

Every synthetic example must include this meaning:

Synthetic example only. Not real patient data. Not for clinical use.

If PHI or suspected PHI is found:

1. Stop review.
2. Do not repeat the PHI.
3. Mark NO-GO.
4. Remove or redact the content.
5. Assess whether repository history remediation is required.
6. Re-review after remediation.
7. Require Privacy/Security Owner sign-off.

---

## 22. AI Hallucination and Uncertainty Control

GPT must be instructed not to invent:

- Citations.
- Guidelines.
- Laws.
- Regulations.
- Standards.
- Test results.
- Repository state.
- PR status.
- Clinical validation status.
- Compliance status.
- Security certification status.
- Clinical facts.
- Patient facts.
- Implementation status.

If GPT is uncertain, it must state:

- What is uncertain.
- Why it is uncertain.
- What evidence is missing.
- What must be verified.
- Whether the correct recommendation is CONDITIONAL GO, NO-GO, or DEFER.

GPT must not convert uncertainty into GO.

All GPT review prompts should include this instruction:

If evidence is missing, state not verified. If uncertainty affects safety, privacy, risk, governance, evidence, or merge readiness, recommend CONDITIONAL GO, NO-GO, or DEFER. Do not recommend GO based on assumptions.

---

## 23. Handling Disagreement Between GPT and Human Reviewers

Human reviewers are accountable for final decisions.

GPT-identified safety, privacy, risk, or governance concerns must not be ignored without documented rationale.

| Situation | Required Handling |
|---|---|
| GPT recommends GO, human reviewer finds issue | Human reviewer decision controls |
| GPT recommends NO-GO, human agrees | Block merge until resolved |
| GPT recommends NO-GO, human disagrees | Human must document rationale and evidence |
| GPT recommends DEFER, human wants GO | Human must verify missing evidence and document rationale |
| Two human reviewers disagree | Escalate to Governance Owner or maintainer |
| Clinical safety disagreement | Default to NO-GO or DEFER until resolved |
| Privacy/security disagreement | Default to NO-GO or DEFER until resolved |
| Risk acceptance disagreement | Risk Owner and Governance Owner must resolve |

If a human reviewer overrides GPT, the review record should document:

- GPT recommendation.
- Human decision.
- Rationale for override.
- Evidence supporting override.
- Residual risk.
- Additional reviewer required, if any.
- Final decision.

---

## 24. Storage of GPT Review Outputs

### 24.1 Storage Principle

GPT review outputs should be stored when the PR is high-risk, clinically relevant, AI-governance relevant, privacy/security relevant, risk-related, or expected to require future audit traceability.

For low-risk documentation-only PRs, a concise GPT-assisted review summary may be included in the PR discussion or consolidated governance review summary instead of creating separate role-specific review files.

Storage should be proportional to PR risk, review complexity, and audit value.

### 24.2 Recommended Storage Path for High-Risk or Clinically Relevant PRs

For high-risk or clinically relevant PRs, GPT review outputs may be stored under:

custom/im-core/docs/governance/reviews/pr-<number>/

Recommended files:

- clinical-safety-owner-review.md
- internal-medicine-clinical-review.md
- risk-owner-review.md
- privacy-security-owner-review.md
- ai-governance-owner-review.md
- consolidated-governance-review-summary.md

Each stored review output should include:

- PR number.
- PR title.
- Branch.
- Reviewer role.
- GPT model.
- Date.
- Input scope.
- Files reviewed.
- Explicit exclusions.
- AI-assisted recommendation.
- Findings.
- Hard NO-GO check.
- Required mitigations.
- Human review decision.
- Human reviewer name or role.
- Final status.

Review outputs must not contain PHI, real patient data, secrets, credentials, production logs, database dumps, or sensitive screenshots.

---

## 25. Traceability Requirements

Every GPT-assisted review should support this traceability chain:

PR -> changed file -> reviewer role -> GPT finding -> risk/control -> mitigation -> human sign-off -> merge decision -> documentation index update

Traceability should show:

- Which file was reviewed.
- Which section triggered a finding.
- Which governance document controls the issue.
- Which human role owns the decision.
- Which mitigation is required.
- Whether the issue is open, resolved, deferred, or not applicable.
- Whether the Documentation Index requires update.

---

## 26. GitHub PR Integration

Applicable PRs should include:

- Summary.
- Scope.
- Documentation-only boundary.
- Safety and privacy boundary.
- AI-assisted review statement when applicable.
- Required review roles.
- Merge criteria.

Any GPT-assisted PR comment must be labeled:

AI-assisted advisory review. Human review required.

Merge is prohibited unless:

- Required human reviewer sign-offs are complete.
- All NO-GO findings are resolved.
- All CONDITIONAL GO findings are resolved or formally deferred with human approval.
- No required review is missing.
- GitHub checks show 0 failing.
- GitHub checks show 0 pending.
- Squash merge policy is followed.

The merge-readiness rule is absolute:

0 failing. 0 pending.

---

## 27. Quality Metrics for AI-Assisted Review

The project may monitor:

| Metric | Target |
|---|---:|
| Required GPT-assisted role reviews completed for applicable PRs | 100% |
| Required human sign-offs completed before merge | 100% |
| PRs merged with unresolved NO-GO findings | 0 |
| PRs merged with pending/failing GitHub checks | 0 |
| PHI or real patient data included in GPT review input | 0 |
| Secrets or credentials included in GPT review input | 0 |
| Unsupported validation/compliance claims merged | 0 |
| Review outputs stored for high-risk applicable PRs | 100% |
| Material changes re-reviewed | 100% |
| Documentation Index updated when needed | 100% |

Optional quality indicators include:

- Number of findings per PR.
- Repeat finding categories.
- GPT false positive rate.
- GPT false negative rate identified by humans.
- Human override rate.
- Time from PR open to review completion.
- Time from finding to mitigation.
- Number of deferred findings.
- Number of claim-control corrections.
- Number of privacy/security corrections.

---

## 28. Acceptance Criteria

Before merge, confirm:

- [ ] Documentation-only scope.
- [ ] One new governance procedure file only.
- [ ] GPT is advisory only.
- [ ] Human reviewers remain accountable.
- [ ] Merge requires human review and GitHub checks.
- [ ] Merge requires 0 failing and 0 pending checks.
- [ ] Mandatory no-PHI/no-secrets pre-check is included.
- [ ] No PHI.
- [ ] No real patient data.
- [ ] No patient identifiers.
- [ ] No secrets.
- [ ] No runtime code.
- [ ] No AI implementation.
- [ ] No prompt execution.
- [ ] No model integration.
- [ ] No API/FHIR implementation.
- [ ] No SQL/database migration/schema change.
- [ ] No OpenEMR core-sensitive change.
- [ ] No autonomous clinical action.
- [ ] No unsupported clinical validation claim.
- [ ] No unsupported production readiness claim.
- [ ] No unsupported regulatory compliance claim.
- [ ] No unsupported cybersecurity certification claim.
- [ ] Proportional GPT review output storage is defined.
- [ ] Hard NO-GO stop rules are explicit.

---

## 29. Relationship to Existing Documents

This procedure operationalizes and connects existing project governance documents:

- Clinical AI Governance and Scientific Evaluation Framework V0.1.
- Governance Review Checklist for Pull Requests V0.1.
- Prompt Governance and AI-Output Review Policy V0.1.
- AI-Output Evaluation Checklist V0.1.
- Sandbox Readiness Criteria for AI-Assisted Workflows V0.1.
- Synthetic Test Data Policy V0.1.
- AI Clinical Support Boundary Specification V0.1.
- Runtime Boundary Specification V0.1.
- API/FHIR Boundary Specification V0.1.
- Database Boundary and Migration Policy V0.1.
- Documentation Index and Review Cadence V0.1.

This procedure does not replace those documents.

It provides the operational method for using GPT-assisted review within their boundaries.

---

## 30. After-Merge Action

After this document is merged:

- Update local master.
- Confirm this file exists on master.
- Confirm working tree is clean.
- Remove temporary PR body files.
- Create a separate documentation-only PR to update the Documentation Index and Review Cadence document.
- Reference this procedure in future PR governance review workflows.
- Use this procedure as the operating procedure for GPT-assisted governance reviews.
- Reassess after first operational pilot use.

---

## 31. Status and Limitations

This document is a documentation-stage governance procedure.

It does not establish:

- Clinical validation.
- Clinical safety certification.
- Regulatory compliance.
- Cybersecurity certification.
- Production readiness.
- Deployment readiness.
- Authorization for clinical use.
- Authorization for PHI processing.
- Authorization for real patient data.
- Authorization for AI runtime implementation.

Any future move beyond documentation-only governance requires separate documented approval, risk review, privacy/security review, technical architecture review, validation planning, and human governance sign-off.

---

## 32. Quality Self-Assessment

This self-assessment is a documentation-stage readiness review.

It does not claim perfect quality, formal validation, regulatory compliance, cybersecurity certification, or proven operational performance.

The procedure is designed to target high operational quality through pilot use, human review, and governance feedback.

| Criterion | Target | Self-Assessment | Gaps | Required Improvement |
|---|---:|---|---|---|
| Operational clarity | 10/10 target | High, pending first operational pilot | Not yet tested on a real PR review cycle | Pilot the procedure on the first applicable documentation-only PR |
| Clinical safety coverage | 10/10 target | High, pending clinical-safety review pilot | Needs confirmation against a clinically relevant PR | Map review output to the AI Clinical Support Boundary Specification |
| Internal Medicine review usefulness | 10/10 target | High, pending Internal Medicine workflow review | No disease-specific examples included | Add or reference a separate Internal Medicine Clinical Coherence Checklist if needed |
| Risk management completeness | 10/10 target | High, pending risk-document review pilot | Risk register linkage depends on actual PR content | Link findings to a future Risk Register when available |
| Privacy/security completeness | 10/10 target | High, pending privacy/security review pilot | Repository-history remediation is not detailed here | Add a privacy/security incident handling SOP if needed |
| AI governance boundary control | 10/10 target | Very high, pending pilot confirmation | Prompt-template performance requires use in real PRs | Compare outputs against Prompt Governance and AI-Output Review Policy |
| Traceability and audit readiness | 10/10 target | High, pending stored review artifact pilot | Storage burden may vary by PR risk level | Use proportional storage and evaluate after first pilot |
| Human accountability clarity | 10/10 target | Very high, pending human reviewer confirmation | Practicality requires real reviewer use | Confirm sign-off fields during first PR use |
| Merge-readiness and PR workflow alignment | 10/10 target | Very high, pending first PR cycle | Exact CLI commands are not embedded here | Add commands-only SOP if needed |
| Prevention of unsupported claims | 10/10 target | Very high, pending pilot confirmation | Effectiveness depends on reviewer enforcement | Track claim-control corrections in early PRs |

---

## 33. Final Safety Statement

GPT may be used in OpenEMR IM Core as an AI-assisted reviewer for documentation-stage governance review.

GPT must remain advisory.

GPT is not the final clinical authority.

GPT is not a regulatory authority.

GPT does not provide clinical validation.

GPT does not approve clinical use.

GPT does not replace physician review.

GPT does not replace privacy/security review.

GPT does not replace risk owner approval.

GPT output must be reviewed by accountable human reviewers.

Final merge decisions require human review plus successful GitHub checks.

Merge is not allowed unless GitHub checks show:

0 failing. 0 pending.

Any NO-GO finding must block merge until resolved.

Any uncertainty affecting safety, privacy, risk, AI governance, evidence, or merge readiness must result in CONDITIONAL GO, NO-GO, or DEFER.

This procedure preserves the current OpenEMR IM Core project phase:

Documentation-only. Pre-runtime. Pre-implementation. No PHI. No real patient data. No clinical use. No AI implementation. No model integration. No prompt execution.
