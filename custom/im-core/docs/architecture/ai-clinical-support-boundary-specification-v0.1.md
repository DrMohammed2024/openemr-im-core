# AI Clinical Support Boundary Specification V0.1

## 1. Document Status

Status: Draft for governance review.

Document type: Architecture / clinical safety / AI governance planning.

Scope: Documentation-only.

Current stage: Planning only.

This document does not authorize AI runtime implementation.

This document does not authorize clinical AI use.

This document does not authorize autonomous diagnosis, autonomous prescribing, autonomous triage, autonomous clinical decision-making, or use with real patient data.

---

## 2. Purpose

This document defines the AI clinical support boundary for the OpenEMR IM Core project.

Its purpose is to establish the minimum safety, privacy, audit, physician-supervision, and validation boundaries that must exist before any AI-assisted clinical feature is considered.

This document supports future planning for physician-supervised Internal Medicine workflows only.

---

## 3. Scope

This document covers:

- AI clinical support principles.
- Current AI implementation status.
- Allowed documentation-stage AI planning.
- Forbidden AI behaviors.
- Physician-supervised AI boundary.
- Draft-only AI output requirements.
- Human review and approval expectations.
- Prompt governance expectations.
- AI output labeling expectations.
- Audit and traceability expectations.
- Data minimization expectations.
- De-identification expectations.
- Logging boundaries.
- External LLM/API boundary considerations.
- Failure and fallback expectations.
- AI implementation entry criteria.
- AI clinical validation prerequisites.

---

## 4. Out of Scope

This document does not define or implement:

- AI runtime code.
- Prompt execution.
- Model integration.
- LLM API calls.
- Clinical decision support runtime.
- Diagnosis automation.
- Prescribing automation.
- FHIR/API implementation.
- Database persistence.
- OpenEMR core modifications.
- Frontend AI features.
- Production deployment.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.

---

## 5. AI Clinical Support Principle

AI may only be considered as a physician-supervised assistant.

AI must not act as an autonomous clinician.

AI output must remain draft-only until reviewed, edited if needed, and approved by a qualified clinician.

The system must never represent AI-generated content as final clinical judgment.

The physician remains responsible for clinical interpretation, documentation acceptance, and patient-care decisions.

---

## 6. Current AI Implementation Status

Current status: Not implemented.

The project currently has no approved AI runtime implementation.

The project currently has no approved clinical AI workflow.

The project currently has no approved model integration.

The project currently has no approved prompt execution layer.

The project currently has no approved real-patient-data AI processing.

The project currently has no approved FHIR/API-based AI clinical exchange.

Any AI-related implementation remains a future phase.

---

## 7. Allowed Documentation-Stage AI Planning

At this stage, the project may document:

- Candidate AI-assisted documentation workflows.
- Physician review checkpoints.
- AI safety assumptions.
- AI risk categories.
- Prompt governance rules.
- Audit requirements.
- Labeling requirements.
- Data minimization rules.
- De-identification requirements.
- Synthetic-data-only sandbox concepts.
- Validation prerequisites.
- Stop rules.
- Human factors concerns.
- Clinical safety review expectations.

Documentation must not be treated as implementation.

---

## 8. Forbidden AI Behaviors

The project must not implement or claim:

- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- Autonomous order entry.
- Autonomous medication changes.
- Autonomous risk scoring used without physician review.
- Autonomous care-plan generation.
- Autonomous patient messaging.
- Autonomous interpretation of critical results.
- Autonomous emergency advice.
- Autonomous discharge decisions.
- Autonomous referral decisions.
- AI use with real patient data before approved privacy, security, audit, and validation gates.
- AI use with PHI before explicit approved controls.
- AI readiness, clinical validation, production readiness, or regulatory compliance.

---

## 9. Physician-Supervised AI Boundary

Any future AI-assisted feature must require:

- Identified responsible clinician.
- Explicit physician review.
- Clear draft labeling.
- Ability to edit AI-generated content.
- Ability to reject AI-generated content.
- Final clinician approval before clinical use.
- Audit trail showing AI generation and clinician action.
- Clear distinction between AI draft and clinician-finalized note.
- No hidden AI-generated clinical recommendations.
- No automatic insertion into the medical record without clinician acceptance.

---

## 10. Draft-Only Output Boundary

AI-generated content must be labeled as draft.

Draft content must not be treated as:

- Final diagnosis.
- Final assessment.
- Final treatment plan.
- Final medication recommendation.
- Final patient instruction.
- Final safety-netting advice.
- Final billing/coding support.
- Final clinical documentation.

A qualified clinician must review and approve all AI-assisted content before clinical use.

---

## 11. Prompt Governance Expectations

Before any prompt is used in a future sandbox or implementation phase, the project must define:

- Prompt ownership.
- Prompt purpose.
- Approved clinical context.
- Forbidden prompt content.
- Data minimization requirements.
- PHI prohibition rules.
- Synthetic-data-only testing rules.
- Review and approval workflow.
- Versioning.
- Change history.
- Failure mode review.
- Safety review.
- Bias review.
- Local protocol dependency review.

Prompt changes must be reviewed as controlled changes.

---

## 12. AI Output Labeling Expectations

Future AI output must clearly identify:

- That the content was AI-assisted.
- The feature or workflow that generated the draft.
- Whether the output has been reviewed by a clinician.
- Whether the output was accepted, edited, or rejected.
- Timestamp of generation.
- Timestamp of clinician approval.
- Responsible reviewer role.
- Any known limitation or uncertainty marker.

AI-generated draft content must never be silently merged into clinician-authored content.

---

## 13. Audit and Traceability Expectations

Future AI use must support auditability for:

- Prompt version.
- Input category.
- Output generated.
- Clinician reviewer.
- Review decision.
- Edits made before approval.
- Rejection reason if rejected.
- Timestamp of generation.
- Timestamp of approval.
- System version.
- Workflow context.
- Error/failure events.

Audit logs must avoid unnecessary PHI exposure and must follow privacy and retention rules.

---

## 14. Data Minimization Boundary

Future AI workflows must minimize input data.

AI input must be limited to what is necessary for the specific supervised workflow.

The project must avoid sending:

- Full charts when a narrow context is sufficient.
- Unneeded identifiers.
- Unneeded demographic data.
- Unneeded free-text notes.
- Unneeded attachments.
- Sensitive content not required for the task.

Minimum necessary data principles must be documented before any AI runtime work.

---

## 15. De-Identification Boundary

Before any AI sandbox testing, the project must define:

- Synthetic data rules.
- De-identification expectations.
- Re-identification risk review.
- Test data provenance.
- Prohibition of real patient data unless approved gates are met.
- Handling of edge cases where de-identification is incomplete.

Synthetic data is preferred for early AI testing.

Real patient data must remain blocked until privacy, security, governance, legal, clinical, and operational gates are approved.

---

## 16. Logging Boundary

Future AI-related logs must not contain unnecessary PHI.

The project must define:

- What AI events are logged.
- What data is excluded from logs.
- How logs are protected.
- Retention period.
- Access controls.
- Review procedures.
- Incident response expectations.
- Redaction expectations.
- Debug logging restrictions.

Sensitive prompts and outputs must not be casually logged.

---

## 17. External LLM/API Boundary

No external AI service may be used until the project defines and reviews:

- Data transfer boundaries.
- PHI restrictions.
- Vendor/privacy review requirements.
- Contractual and legal requirements.
- Data retention rules.
- Training-use restrictions.
- Regional/data residency considerations.
- Auditability.
- Security controls.
- Failure handling.
- Model update risks.
- Clinical validation impact.

External LLM use must not be assumed safe.

---

## 18. Failure and Fallback Expectations

Future AI workflows must define safe behavior for:

- Model unavailability.
- Network failure.
- Timeout.
- Low-quality output.
- Hallucinated output.
- Contradictory output.
- Missing context.
- Unsafe clinical suggestion.
- Unsupported medication recommendation.
- Unsupported diagnosis suggestion.
- Prompt injection.
- Malformed response.
- Audit failure.

The safe fallback must be clinician-only workflow without AI dependency.

---

## 19. Internal Medicine Workflow Boundary

AI planning must focus on supervised Internal Medicine workflow support, such as future documentation drafting or checklist assistance.

AI must not replace physician reasoning.

Internal Medicine workflows must define:

- Clinical context.
- Physician role.
- Review step.
- Red flags.
- Safety-netting requirements.
- Local protocol dependency.
- Required documentation quality.
- Audit expectations.
- Escalation rules.

No AI workflow may be approved without clinical safety review.

---

## 20. AI Clinical Validation Prerequisites

Before clinical AI use, the project must define and approve:

- Intended use.
- Clinical workflow specification.
- Risk analysis.
- Data governance controls.
- Privacy/security review.
- Prompt governance.
- Physician review workflow.
- Audit trail.
- Human factors review.
- Usability review.
- Synthetic-data testing.
- Failure mode testing.
- Bias and performance monitoring plan.
- Clinical validation plan.
- Rollback plan.
- Incident response plan.
- Claims limitation review.

Documentation alone does not equal validation.

---

## 21. AI Implementation Entry Criteria

No AI runtime implementation may begin until all of the following are available and reviewed:

- AI Clinical Support Boundary Specification approved.
- AI risk register entries approved.
- Prompt governance document approved.
- AI audit requirements approved.
- Physician review workflow approved.
- Synthetic-data-only test plan approved.
- Privacy/security review completed for the intended AI workflow.
- Clinical safety review completed.
- Human factors concerns documented.
- Stop rules defined.
- Rollback approach defined.
- No open PRs.
- Clean master.
- Separate runtime PR scope approved.

---

## 22. Forbidden Actions in Documentation PRs

Documentation PRs must not modify:

- AI runtime code.
- Prompt execution code.
- Model integration code.
- API/FHIR runtime code.
- OpenEMR core files.
- PHP runtime files.
- JavaScript runtime files.
- Database schema.
- SQL migrations.
- GitHub Actions workflows.
- npm/package-lock files.
- Secrets.
- Configuration containing credentials.

Documentation PRs must remain documentation-only.

---

## 23. Review Questions

Reviewers should ask:

- Does this document authorize AI implementation?
- Does this document imply clinical validation?
- Does this document imply AI readiness?
- Does this document allow autonomous diagnosis?
- Does this document allow autonomous prescribing?
- Does this document allow real patient data?
- Does this document define physician review?
- Does this document define audit expectations?
- Does this document preserve privacy boundaries?
- Does this document avoid unsupported readiness claims?

---

## 24. Relationship to Existing Documentation

This specification relates to:

- System Context Diagram Plan V0.1.
- Data Flow Diagram Level 0 Plan V0.1.
- Trust Boundary Register V0.1.
- Component Inventory V0.1.
- Runtime Boundary Specification V0.1.
- Database Boundary and Migration Policy V0.1.
- API/FHIR Boundary Specification V0.1.
- Risk Register V0.1.
- Clinical Safety Case V0.1.
- Threat Model and Data Governance V0.1.
- Documentation Index and Review Cadence V0.1.

---

## 25. Exit Criteria

This document is complete when it defines:

- AI clinical support principle.
- Current AI status.
- Allowed planning scope.
- Forbidden AI behaviors.
- Physician-supervised AI boundary.
- Draft-only output boundary.
- Prompt governance expectations.
- Output labeling expectations.
- Audit expectations.
- Data minimization expectations.
- De-identification expectations.
- Logging boundaries.
- External LLM/API boundaries.
- Failure and fallback expectations.
- AI implementation entry criteria.
- Status and limitations.

---

## 26. After-Merge Action

After merge:

- Update master locally.
- Confirm working tree is clean.
- Confirm no open PRs remain.
- Confirm this document exists on master.
- Create a separate documentation-index update PR if needed.

Do not start AI runtime implementation from this document alone.

---

## 27. Status and Limitations

This document is planning-only.

It does not prove:

- AI safety.
- Clinical safety.
- Clinical validation.
- Usability validation.
- Human factors validation.
- Regulatory compliance.
- Cybersecurity certification.
- Production readiness.
- Pilot readiness.
- Commercial readiness.

No runtime implementation.

No AI implementation.

No prompt execution.

No model integration.

No API implementation.

No FHIR implementation.

No SQL.

No database migration.

No database schema change.

No PHI.

No real patient data.

No frontend implementation.

No OpenEMR core-sensitive change.
