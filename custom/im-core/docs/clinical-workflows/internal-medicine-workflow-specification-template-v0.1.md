# Internal Medicine Workflow Specification Template V0.1

## AI-Assisted Solo-Owner Applicability

Eligible documentation-stage changes to this template may use GPT
clinical-boundary advisory review and the Project Owner decision record under
the AI-Assisted Solo-Owner Governance Policy V0.1. Separate clinical or other
specialist-human approval is not a mandatory internal merge gate.

Use in real care, clinical validation, runtime execution, PHI processing, or
clinical authorization remains a future or external gate requiring applicable
qualified-human review.

## 1. Document Status

Status: Draft for governance review.

Document type: Clinical workflow specification template.

Scope: Documentation-only.

Current stage: Planning only.

This template does not authorize runtime implementation, clinical use, AI use, FHIR/API implementation, database changes, or OpenEMR core modification.

---

## 2. Purpose

This template defines a standard structure for documenting Internal Medicine workflows in the OpenEMR IM Core project.

The purpose is to ensure that future workflows are described consistently, safely, and reviewably before any implementation begins.

This template is intended to support physician-supervised workflow planning only.

---

## 3. Scope

This template may be used to document future Internal Medicine workflows, including but not limited to:

- Visit documentation workflows.
- Chronic disease follow-up workflows.
- Medication review workflows.
- Laboratory result review workflows.
- Referral and follow-up tracking workflows.
- Preventive care checklist workflows.
- Care-gap review workflows.
- Physician-supervised AI-assisted drafting concepts.

Each workflow created from this template must remain documentation-only unless a later approved implementation gate explicitly authorizes runtime work.

---

## 4. Out of Scope

This template does not define or implement:

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
- Production workflows.
- Real patient data workflows.
- Regulatory compliance evidence.
- Clinical validation evidence.

---

## 5. Workflow Identification

Each workflow specification created from this template should define:

- Workflow title.
- Workflow version.
- Workflow owner role.
- Clinical reviewer role.
- Technical reviewer role.
- Privacy/security reviewer role.
- Intended clinical setting.
- Intended user group.
- Workflow status.
- Related PR number when available.
- Related documents.

Example placeholder:

Workflow title:
Version:
Status:
Owner:
Clinical reviewer:
Technical reviewer:
Privacy/security reviewer:
Related documents:

---

## 6. Clinical Context

Each workflow must describe its clinical context.

The clinical context should include:

- Internal Medicine use case.
- Care setting.
- General patient category.
- Clinical purpose.
- Known limitations.
- Local protocol dependency.
- Required physician judgment.
- Safety-sensitive areas.

No real patient identifiers, real patient data, or PHI may be included.

---

## 7. Intended Users

Each workflow must identify intended users, such as:

- Internal Medicine physician.
- Resident physician.
- Nurse.
- Medical assistant.
- Care coordinator.
- Administrator.
- Documentation reviewer.
- Privacy/security reviewer.
- Technical maintainer.

The workflow must clarify which actions require physician review or approval.

---

## 8. Patient Data Boundary

Each workflow must define its patient data assumptions.

At documentation stage:

- No PHI.
- No real patient data.
- No screenshots containing patient data.
- No copied clinical notes.
- No real laboratory results.
- No real prescriptions.
- No real identifiers.
- Synthetic examples only if needed.

Any future real-patient-data use must require separate privacy, security, clinical, and governance approval.

---

## 9. Inputs

Each workflow must define expected inputs.

Examples:

- Clinician-entered observations.
- Structured checklist items.
- Synthetic visit context.
- Synthetic medication list.
- Synthetic laboratory trend summary.
- Synthetic problem list.
- Local protocol reference.
- Physician-entered assessment.

Inputs must be classified as:

- Required.
- Optional.
- Forbidden.
- Synthetic-only.
- Future-phase only.

---

## 10. Outputs

Each workflow must define expected outputs.

Examples:

- Draft note section.
- Review checklist.
- Follow-up reminder.
- Physician task list.
- Safety-netting checklist.
- Audit event requirement.
- Documentation completeness flag.

Outputs must not be represented as final clinical decisions unless reviewed and approved by a clinician.

---

## 11. Workflow Steps

Each workflow must describe steps in order.

Suggested structure:

Step number:
Actor:
Action:
Input:
Output:
Clinical review required:
Audit required:
Safety concern:
Failure mode:
Fallback:

Workflow steps should be clear enough for review but must not be treated as runtime implementation.

---

## 12. Decision Points

Each workflow must identify decision points.

For each decision point, document:

- Decision question.
- Responsible role.
- Required information.
- Possible outcomes.
- Safety implications.
- Escalation requirement.
- Whether physician approval is mandatory.

AI must not make autonomous clinical decisions.

---

## 13. Red Flags

Each workflow must define red flags relevant to the workflow.

Red flags may include:

- Potential emergency symptoms.
- Critical laboratory patterns.
- Medication safety concerns.
- Unresolved abnormal findings.
- Missing follow-up.
- Conflicting information.
- Unclear diagnosis.
- High-risk comorbidity context.
- Patient safety concern requiring escalation.

This template does not define clinical protocols. Workflow-specific red flags must be reviewed by qualified clinical reviewers and local protocols where applicable.

---

## 14. Safety-Netting Requirements

Each workflow must define safety-netting expectations.

Safety-netting may include:

- Clear escalation path.
- Physician review checkpoint.
- Follow-up requirement.
- Patient communication review.
- Documentation completeness check.
- Local protocol reference.
- Emergency warning handling.
- Failure fallback to clinician-only process.

No automated safety-netting message may be used without clinical review and approval.

---

## 15. Physician Review Checkpoints

Each workflow must define where physician review is required.

Examples:

- Before accepting any AI-assisted draft.
- Before finalizing assessment.
- Before treatment recommendation.
- Before medication-related documentation.
- Before patient instruction.
- Before referral decision.
- Before closing abnormal result review.
- Before using workflow output in the medical record.

The physician remains responsible for clinical judgment.

---

## 16. AI Role Boundary

Each workflow must state whether AI is:

- Not allowed.
- Allowed only for documentation planning.
- Allowed only for synthetic-data sandbox drafting in a future phase.
- Allowed only as physician-supervised draft support in a future approved phase.

AI must not perform:

- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- Autonomous order entry.
- Autonomous patient messaging.
- Autonomous critical result handling.
- Silent insertion into the medical record.

All AI output must be draft-only and physician-reviewed if AI is ever approved in a future phase.

---

## 17. API/FHIR Boundary

Each workflow must state whether API/FHIR behavior is:

- Not applicable.
- Documentation-only future planning.
- Synthetic-data-only future planning.
- Future implementation candidate.

This template does not authorize API or FHIR implementation.

Any future API/FHIR use must follow the API/FHIR Boundary Specification and must not use PHI unless approved gates are met.

---

## 18. Database Boundary

Each workflow must define database assumptions.

At this stage:

- No SQL.
- No migration.
- No schema change.
- No persistence implementation.
- No real patient records.
- No database write behavior.

Any future persistence must follow the Database Boundary and Migration Policy.

---

## 19. OpenEMR Customization Boundary

Each workflow must describe OpenEMR customization assumptions.

At this stage:

- No OpenEMR core modification.
- No runtime module implementation.
- No UI implementation.
- No database change.
- No OpenEMR behavior change.

Future implementation must remain upgrade-aware and must avoid unsafe OpenEMR core-sensitive changes.

---

## 20. Audit Expectations

Each workflow must define expected audit needs.

Audit expectations may include:

- User action.
- Review action.
- Approval action.
- Rejection action.
- AI draft generation if applicable in future.
- Workflow completion.
- Escalation.
- Error or fallback event.

Audit planning must avoid unnecessary PHI exposure.

---

## 21. Privacy and Security Expectations

Each workflow must define privacy and security expectations.

Minimum expectations:

- No PHI in documentation examples.
- No real patient data.
- No secrets.
- No credentials.
- No production logs.
- No sensitive screenshots.
- Minimum necessary data principle.
- Role-based access assumptions documented.
- External service assumptions documented if relevant.

---

## 22. Failure Modes

Each workflow must define possible failure modes.

Examples:

- Missing input.
- Conflicting information.
- Incomplete documentation.
- Unreviewed draft.
- Incorrect actor role.
- AI unavailable if future AI is approved.
- External service unavailable.
- Audit failure.
- Unsafe suggestion.
- Red flag missed.
- Workflow interrupted.

Each failure mode must include a safe fallback.

---

## 23. Safe Fallback

Each workflow must define safe fallback behavior.

Default safe fallback:

- Stop automated or assisted workflow.
- Return to clinician-only workflow.
- Require physician review.
- Avoid finalizing draft output.
- Avoid patient-facing action.
- Avoid database write.
- Avoid external transmission.
- Record review need if audit is applicable.

---

## 24. Local Protocol Dependency

Each workflow must state whether it depends on local protocols.

Examples:

- Medication management protocol.
- Abnormal result handling protocol.
- Referral protocol.
- Chronic disease follow-up protocol.
- Emergency escalation protocol.
- Documentation policy.
- Privacy/security policy.

No workflow may claim clinical correctness without local protocol review where applicable.

---

## 25. Validation Prerequisites

Before any workflow can move toward implementation, it must define:

- Clinical reviewer approval.
- Privacy/security review.
- Risk analysis.
- Safety-netting review.
- Red flag review.
- Audit requirement review.
- Synthetic test scenario plan.
- Human factors review.
- Rollback expectation.
- Stop rules.
- Traceability mapping.

Documentation approval does not equal clinical validation.

---

## 26. Traceability Expectations

Each workflow should be traceable to:

- Project goal.
- Related architecture boundary.
- Related risk entry.
- Related safety control.
- Related privacy/security control.
- Related test plan when available.
- Related reviewer role.
- Related PR.

Traceability should support audit readiness and future change control.

---

## 27. Review Questions

Reviewers should ask:

- Does this workflow remain documentation-only?
- Does it include PHI or real patient data?
- Does it imply clinical validation?
- Does it imply production readiness?
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

## 28. Acceptance Criteria for Workflow Specifications

A workflow specification using this template is acceptable when:

- It clearly defines clinical context.
- It identifies intended users.
- It defines inputs and outputs.
- It defines steps and decision points.
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

This template relates to:

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

This template is complete when it defines:

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
- Confirm this template exists on master.
- Create a separate documentation-index update PR if needed.

Do not start clinical workflow implementation from this template alone.

---

## 32. Status and Limitations

This template is planning-only.

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
