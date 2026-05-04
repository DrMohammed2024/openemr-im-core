# Internal Medicine Visit Documentation Workflow V0.1

## 1. Document Status

Status: Draft for governance review.

Document type: Clinical workflow specification.

Scope: Documentation-only.

Current stage: Planning only.

This document does not authorize runtime implementation, clinical use, AI use, FHIR/API implementation, database changes, or OpenEMR core modification.

---

## 2. Purpose

This document defines a planning-only workflow for Internal Medicine visit documentation.

The purpose is to describe how a future Internal Medicine visit documentation workflow may be structured, reviewed, and governed before any runtime implementation.

This document supports safe clinical workflow planning, physician review, privacy protection, auditability, and future traceability.

---

## 3. Scope

This workflow covers documentation planning for a general Internal Medicine visit.

The workflow may include planning for:

- Visit context capture.
- Chief concern or visit reason documentation.
- History documentation structure.
- Problem-oriented assessment planning.
- Medication and allergy documentation review prompts.
- Preventive care documentation reminders.
- Follow-up documentation planning.
- Safety-netting documentation planning.
- Physician review checkpoints.

This workflow is documentation-only and does not implement clinical behavior.

---

## 4. Out of Scope

This workflow does not define or implement:

- Runtime code.
- PHP code.
- JavaScript code.
- OpenEMR core behavior.
- Database schema changes.
- SQL migrations.
- API/FHIR behavior.
- AI model integration.
- Prompt execution.
- Clinical decision automation.
- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- Patient-facing messaging.
- Production workflows.
- Real patient data workflows.
- Regulatory compliance evidence.
- Clinical validation evidence.

---

## 5. Workflow Identification

Workflow title: Internal Medicine Visit Documentation Workflow.

Version: V0.1.

Status: Draft for governance review.

Owner role: Documentation Owner.

Clinical reviewer role: Internal Medicine Clinical Reviewer.

Technical reviewer role: Technical Owner.

Privacy/security reviewer role: Privacy-Security Owner.

Safety reviewer role: Clinical Safety Owner.

Related template:

- Internal Medicine Workflow Specification Template V0.1.

Related boundary documents:

- Runtime Boundary Specification V0.1.
- Database Boundary and Migration Policy V0.1.
- API/FHIR Boundary Specification V0.1.
- AI Clinical Support Boundary Specification V0.1.

---

## 6. Clinical Context

This workflow applies to planning documentation for a general Internal Medicine visit.

The clinical context may include:

- New patient visit.
- Follow-up visit.
- Chronic disease review visit.
- Medication review visit.
- Preventive care discussion.
- Problem-focused visit.
- Care coordination visit.

This workflow does not define a clinical protocol.

This workflow does not replace physician judgment.

Any future clinical use must be reviewed against local clinical policies, local documentation rules, applicable privacy requirements, and qualified clinician review.

---

## 7. Intended Users

Planned user roles may include:

- Internal Medicine physician.
- Resident physician.
- Nurse.
- Medical assistant.
- Care coordinator.
- Documentation reviewer.
- Privacy/security reviewer.
- Technical maintainer.

Physician review is mandatory before any visit documentation output could be considered clinically usable in any future approved phase.

---

## 8. Patient Data Boundary

At this stage:

- No PHI is allowed.
- No real patient data is allowed.
- No real clinical notes are allowed.
- No real laboratory results are allowed.
- No real prescriptions are allowed.
- No real identifiers are allowed.
- No screenshots containing patient data are allowed.
- Synthetic examples only may be used in future documentation, if explicitly marked synthetic.

This document must not be used with real patient data.

---

## 9. Inputs

Potential future workflow inputs may include:

- Visit type.
- Visit reason.
- Clinician-entered history.
- Synthetic problem list.
- Synthetic medication list.
- Synthetic allergy list.
- Synthetic vital sign summary.
- Synthetic laboratory context.
- Preventive care checklist item.
- Follow-up plan text.
- Local protocol reference.

Input classification:

- Required: visit type, clinician review role, planning context.
- Optional: synthetic problem list, synthetic medication list, synthetic laboratory context.
- Forbidden: PHI, real patient identifiers, production logs, real clinical notes.
- Future-phase only: structured OpenEMR fields, API/FHIR resources, AI draft context.

---

## 10. Outputs

Potential future outputs may include:

- Draft documentation structure.
- Visit documentation checklist.
- Missing-section reminder.
- Physician review checklist.
- Safety-netting documentation checklist.
- Follow-up documentation reminder.
- Audit requirement checklist.
- Traceability link to workflow review.

Outputs must not be treated as final clinical documentation unless reviewed and approved by a licensed clinician in an approved future phase.

---

## 11. Workflow Steps

Suggested planning workflow:

### Step 1: Identify visit context

Actor: Clinician or documentation reviewer.

Action: Identify the visit type and general visit purpose.

Output: Visit context category.

Clinical review required: Yes.

Runtime status: Not implemented.

### Step 2: Capture documentation sections

Actor: Clinician.

Action: Identify required documentation sections for the visit.

Potential sections:

- Visit reason.
- Relevant history.
- Medication review note.
- Allergy review note.
- Problem-oriented assessment.
- Follow-up plan.
- Safety-netting note.

Output: Draft documentation structure.

Clinical review required: Yes.

Runtime status: Not implemented.

### Step 3: Review safety-sensitive areas

Actor: Physician.

Action: Check whether visit documentation includes possible red flags, unresolved abnormal findings, medication concerns, or follow-up risks.

Output: Safety review checklist.

Clinical review required: Yes.

Runtime status: Not implemented.

### Step 4: Confirm physician review

Actor: Physician.

Action: Review and approve documentation content before any future clinical use.

Output: Physician-reviewed documentation state.

Clinical review required: Yes.

Runtime status: Not implemented.

### Step 5: Record audit expectations

Actor: Documentation reviewer or system planner.

Action: Identify which future actions would require audit logging.

Output: Audit planning notes.

Runtime status: Not implemented.

---

## 12. Decision Points

Decision points include:

- Is the visit documentation complete enough for physician review?
- Are there safety-sensitive findings requiring escalation?
- Is medication-related documentation present and reviewed?
- Is follow-up documentation required?
- Is safety-netting documentation required?
- Is any content AI-assisted in a future approved phase?
- Is any data real patient data or PHI?

All clinical decisions remain physician-controlled.

AI must not make autonomous clinical decisions.

---

## 13. Red Flags

Potential documentation red flags include:

- Symptoms suggesting urgent or emergency evaluation.
- Critical or unresolved abnormal findings.
- Medication discrepancy.
- Allergy discrepancy.
- Missing follow-up for a clinically important concern.
- Conflicting documentation.
- Unclear diagnosis or unresolved assessment.
- High-risk comorbidity context.
- Patient safety concern requiring escalation.
- Documentation suggesting possible deterioration.

This document does not define clinical triage rules.

Workflow-specific red flags must be reviewed by qualified clinicians and local protocols before any implementation.

---

## 14. Safety-Netting Requirements

Safety-netting documentation planning may include:

- Explicit follow-up plan.
- Escalation instruction placeholder.
- Physician review checkpoint.
- Documentation completeness check.
- Abnormal result follow-up reminder.
- Medication safety review reminder.
- Return precautions documentation placeholder.
- Local protocol reference.

No automated safety-netting message is authorized by this document.

No patient-facing instruction is authorized by this document.

---

## 15. Physician Review Checkpoints

Physician review is required:

- Before finalizing any visit documentation.
- Before accepting any future AI-assisted draft.
- Before documenting assessment or plan.
- Before documenting medication-related recommendations.
- Before documenting patient instructions.
- Before closing any abnormal result follow-up.
- Before using workflow output in the medical record.

The physician remains responsible for clinical judgment.

---

## 16. AI Role Boundary

At this stage, AI is not implemented.

Future AI, if separately approved, may only support:

- Draft structure suggestions.
- Documentation completeness prompts.
- Non-final wording suggestions.
- Synthetic-data-only sandbox testing.

AI must not perform:

- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- Autonomous order entry.
- Autonomous patient messaging.
- Autonomous critical result handling.
- Silent insertion into the medical record.
- Replacement of physician review.

All AI output must be draft-only and physician-reviewed if AI is ever approved in a future phase.

---

## 17. API/FHIR Boundary

This workflow does not implement API or FHIR behavior.

Future API/FHIR planning must follow the API/FHIR Boundary Specification V0.1.

At this stage:

- No FHIR resources are read.
- No FHIR resources are written.
- No API endpoint is created.
- No interoperability readiness is claimed.
- No PHI exchange is authorized.

---

## 18. Database Boundary

This workflow does not implement database behavior.

At this stage:

- No SQL.
- No migration.
- No schema change.
- No persistence implementation.
- No database write behavior.
- No real patient records.

Future persistence must follow the Database Boundary and Migration Policy V0.1.

---

## 19. OpenEMR Customization Boundary

This workflow is OpenEMR-related planning only.

At this stage:

- No OpenEMR core modification.
- No OpenEMR module implementation.
- No UI implementation.
- No database change.
- No OpenEMR behavior change.

Future implementation must remain upgrade-aware and avoid unsafe OpenEMR core-sensitive changes.

---

## 20. Audit Expectations

Future implementation planning may require audit events for:

- Documentation draft creation.
- Documentation review.
- Physician approval.
- Physician rejection.
- AI draft generation if separately approved in future.
- Safety escalation.
- Follow-up documentation closure.
- Error or fallback event.

This document does not implement audit logging.

Audit planning must avoid unnecessary PHI exposure.

---

## 21. Privacy and Security Expectations

Minimum planning expectations:

- No PHI in examples.
- No real patient data.
- No secrets.
- No credentials.
- No production logs.
- No sensitive screenshots.
- Minimum necessary data principle.
- Role-based access assumptions documented before implementation.
- External service assumptions documented before any use.

External LLM or external API use is not authorized by this document.

---

## 22. Failure Modes

Possible future workflow failure modes include:

- Missing visit context.
- Incomplete documentation sections.
- Unreviewed draft.
- Conflicting information.
- Medication discrepancy not reviewed.
- Allergy discrepancy not reviewed.
- Red flag not escalated.
- Follow-up need not documented.
- AI unavailable if future AI is approved.
- Audit event missing.
- Incorrect user role.
- Unsafe suggestion.

Each failure mode requires safe fallback.

---

## 23. Safe Fallback

Default safe fallback:

- Stop assisted workflow.
- Return to clinician-only documentation.
- Require physician review.
- Avoid finalizing draft output.
- Avoid patient-facing action.
- Avoid database write.
- Avoid external transmission.
- Record review need if audit is applicable.

If safety concern exists, escalate to physician review.

---

## 24. Local Protocol Dependency

This workflow may depend on local policies for:

- Visit documentation standards.
- Medication reconciliation.
- Allergy review.
- Abnormal result follow-up.
- Preventive care documentation.
- Emergency escalation.
- Patient communication.
- Privacy and security.

No workflow output may claim clinical correctness without local protocol review where applicable.

---

## 25. Validation Prerequisites

Before moving toward implementation, this workflow requires:

- Internal Medicine clinical reviewer approval.
- Clinical Safety Owner review.
- Privacy/security review.
- Risk analysis.
- Red flag review.
- Safety-netting review.
- Audit requirement review.
- Synthetic test scenario plan.
- Human factors review.
- Rollback expectation.
- Stop rules.
- Traceability mapping.

Documentation approval does not equal clinical validation.

---

## 26. Traceability Expectations

This workflow should be traceable to:

- Internal Medicine workflow improvement objective.
- Internal Medicine Workflow Specification Template V0.1.
- Runtime Boundary Specification V0.1.
- Database Boundary and Migration Policy V0.1.
- API/FHIR Boundary Specification V0.1.
- AI Clinical Support Boundary Specification V0.1.
- Related risk register entries when created.
- Related safety controls when created.
- Related future test plans when created.
- Related PR.

---

## 27. Review Questions

Reviewers should ask:

- Does this workflow remain documentation-only?
- Does it include PHI or real patient data?
- Does it imply clinical validation?
- Does it imply production readiness?
- Does it define visit documentation context?
- Does it include red flags?
- Does it include safety-netting?
- Does it define physician review checkpoints?
- Does it avoid autonomous AI behavior?
- Does it avoid API/FHIR implementation?
- Does it avoid SQL and database migration?
- Does it avoid OpenEMR core-sensitive changes?
- Does it define safe fallback?
- Does it identify local protocol dependencies?

---

## 28. Acceptance Criteria

This workflow specification is acceptable when:

- It clearly defines visit documentation context.
- It identifies intended users.
- It defines inputs and outputs.
- It defines workflow steps.
- It defines decision points.
- It defines red flags.
- It defines safety-netting.
- It defines physician review checkpoints.
- It defines AI boundaries.
- It defines privacy/security expectations.
- It defines audit expectations.
- It defines failure modes and fallback.
- It states planning-only limitations.
- It avoids unsupported readiness claims.
- It avoids PHI and real patient data.
- It avoids runtime implementation.

---

## 29. Relationship to Existing Documentation

This workflow relates to:

- Internal Medicine Workflow Specification Template V0.1.
- Documentation Index and Review Cadence V0.1.
- System Context Diagram Plan V0.1.
- Data Flow Diagram Level 0 Plan V0.1.
- Trust Boundary Register V0.1.
- Component Inventory V0.1.
- Runtime Boundary Specification V0.1.
- Database Boundary and Migration Policy V0.1.
- API/FHIR Boundary Specification V0.1.
- AI Clinical Support Boundary Specification V0.1.
- Risk Register V0.1.
- Clinical Safety Case V0.1.
- Threat Model and Data Governance V0.1.

---

## 30. Exit Criteria

This workflow is complete when it defines:

- Workflow identity.
- Clinical context.
- Intended users.
- Patient data boundary.
- Inputs.
- Outputs.
- Workflow steps.
- Decision points.
- Red flags.
- Safety-netting.
- Physician review checkpoints.
- AI boundary.
- API/FHIR boundary.
- Database boundary.
- OpenEMR customization boundary.
- Audit expectations.
- Privacy/security expectations.
- Failure modes.
- Safe fallback.
- Local protocol dependency.
- Validation prerequisites.
- Traceability expectations.
- Review questions.
- Acceptance criteria.
- Status and limitations.

---

## 31. After-Merge Action

After merge:

- Update master locally.
- Confirm working tree is clean.
- Confirm no open PRs remain.
- Confirm this workflow exists on master.
- Create a separate documentation-index update PR if needed.

Do not start workflow implementation from this document alone.

---

## 32. Status and Limitations

This workflow is planning-only.

It does not prove:

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
