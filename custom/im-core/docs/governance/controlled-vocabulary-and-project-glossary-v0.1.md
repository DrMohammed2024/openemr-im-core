# Controlled Vocabulary and Project Glossary V0.1

## AI-Assisted Solo-Owner Policy Relationship

The AI-Assisted Solo-Owner Governance Policy V0.1 is authoritative for its
governance-model, eligibility, actor, disclosure, and owner-decision terms. A
generic stricter-language rule does not reinstate separate specialist-human
approvals that the policy expressly supersedes for eligible work. Safety,
privacy, lifecycle, claims, and future/external gates remain unchanged.

## Document Status

| Field | Value |
|---|---|
| Document type | Governance glossary |
| Version | V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage governance |
| Scope | Documentation-only |
| Runtime status | Pre-runtime |
| Clinical-use status | Not authorized |
| PHI status | No PHI |
| Real patient data | Not permitted |
| AI implementation | Not permitted |

This document defines controlled vocabulary for OpenEMR IM Core.

It is intended to prevent semantic drift, overclaiming, ambiguous interpretation, and unsafe expansion of project terminology.

This document does not implement runtime behavior, artificial intelligence, clinical decision support, API/FHIR integration, SQL/database changes, OpenEMR core behavior changes, clinical-use authorization, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.

---

## 1. Purpose

The purpose of this glossary is to define sensitive project terms consistently.

Controlled vocabulary is required because terms such as runtime, implementation, clinical use, validation, AI, CDS, PHI, production readiness, and approval may be interpreted differently by contributors, reviewers, external tools, or future specialized AI reviewers.

The safest interpretation always applies.

---

## 2. Relationship to Governance System

This glossary supports the VFinal governance execution system and the VFinal Scientific Strengthening Addendum.

It does not replace either document.

If a term in this glossary appears to conflict with a stricter safety boundary in another governance document, the stricter safety boundary applies.

---

## 3. Non-Negotiable Language Boundary

The project remains:

- documentation-first
- governance-first
- human-supervised
- pre-runtime
- pre-implementation
- pre-clinical-use
- no PHI
- no real patient data
- no secrets
- no credentials
- no production logs
- no database dumps
- no autonomous diagnosis
- no autonomous treatment
- no autonomous prescribing
- no autonomous triage
- no AI implementation
- no prompt execution
- no model integration
- no API/FHIR implementation
- no SQL/database migration
- no OpenEMR core behavior change
- no clinical-use authorization
- no production-readiness claim
- no clinical-validation claim
- no regulatory-compliance claim
- no cybersecurity-certification claim

---

## 4. Controlled Terms

### Runtime

Runtime means executable system behavior in a running OpenEMR instance or related software environment.

In this project, runtime is not authorized unless explicitly approved by a future governance gate.

Safe wording:

- pre-runtime
- future runtime planning
- non-production synthetic runtime evidence, if later authorized

Unsafe wording without evidence:

- runtime ready
- runtime implemented
- live runtime
- active runtime behavior

---

### Implementation

Implementation means executable code, configuration, integration, automation, database change, or behavior that changes how the system operates.

Documentation, planning, and governance text are not implementation.

Safe wording:

- documentation-only
- planning-only
- future implementation consideration

Unsafe wording without evidence:

- implemented
- active
- live
- operational

---

### Clinical Use

Clinical use means use in patient care, clinician decision-making, clinical documentation for real patients, care coordination, diagnosis, treatment, prescribing, triage, or patient-facing activity.

Clinical use is not authorized in the current project stage.

Safe wording:

- not for clinical use
- no clinical-use authorization
- future clinical-use preparation only after governance gates

Unsafe wording without evidence:

- clinical-use ready
- approved for patient care
- ready for clinic deployment

---

### PHI

PHI means protected health information or patient-identifiable health information.

PHI is not permitted in the repository.

Safe wording:

- no PHI
- synthetic data only
- sanitized examples only

Unsafe wording:

- PHI-ready
- real patient data ready
- production patient data

---

### Real Patient Data

Real patient data means any data derived from actual patients, even if partially transformed, unless formally de-identified under applicable local policy and approved governance.

Real patient data is not permitted in the repository.

---

### Synthetic Data

Synthetic data means artificially created data that is not derived from a real patient.

Synthetic data may be used only if it does not identify or resemble a real person.

Synthetic data does not make the project clinically validated.

---

### AI Implementation

AI implementation means any runtime use of artificial intelligence, machine learning, model inference, model integration, prompt execution, or automated AI-generated output in the system.

AI implementation is not authorized.

Safe wording:

- future AI planning
- documentation-only AI boundary
- no AI implementation

Unsafe wording without evidence:

- AI-enabled
- AI-powered
- model-integrated
- AI live
- AI deployed

---

### Prompt Execution

Prompt execution means sending data or instructions to an AI model for processing as part of a system workflow.

Prompt execution is not authorized.

Documentation about future prompt governance is not prompt execution.

---

### Model Integration

Model integration means connecting the project to an AI model, model endpoint, model API, local model runtime, or model service.

Model integration is not authorized.

---

### Clinical Decision Support

Clinical Decision Support, or CDS, means functionality that supports or influences clinical decisions.

Production or runtime CDS is not authorized.

Safe wording:

- future CDS boundary planning
- documentation-only CDS boundary
- no production clinical decision support

Unsafe wording without evidence:

- CDS-ready
- active CDS
- clinical decision support implemented

---

### Autonomous Clinical Decision-Making

Autonomous clinical decision-making means the system makes or finalizes diagnosis, treatment, prescribing, triage, escalation, or clinical documentation decisions without clinician review and acceptance.

Autonomous clinical decision-making is prohibited.

---

### Human-in-the-Loop

Human-in-the-loop means a clinician or authorized reviewer remains responsible for reviewing, accepting, rejecting, editing, overriding, or closing outputs.

In this project, human-in-the-loop is currently a documentation-stage governance principle and future planning boundary.

It does not mean runtime implementation.

Safe wording:

- human-supervised
- clinician-reviewed
- documented for future planning

Unsafe wording without evidence:

- human-in-the-loop workflow implemented
- live HITL workflow
- active clinician review automation

---

### Validation

Validation means evidence that the system meets user needs and intended use in a defined context.

Clinical validation is not claimed.

Safe wording:

- validation planning
- future validation evidence required
- not clinically validated

Unsafe wording without evidence:

- validated
- clinically validated
- validation complete

---

### Verification

Verification means checking that specified requirements or documented expectations are met.

Documentation verification does not equal clinical validation.

Safe wording:

- verified file exists
- verified index coverage
- verified documentation-only change

---

### Production Readiness

Production readiness means the system is ready for deployment in a production environment.

Production readiness is not claimed.

Safe wording:

- not production-ready
- production readiness not claimed
- future production-readiness gates required

Unsafe wording without evidence:

- production-ready
- deployment-ready
- go-live ready

---

### Regulatory Compliance

Regulatory compliance means formal compliance with applicable legal or regulatory requirements.

Regulatory compliance is not claimed.

Safe wording:

- regulatory boundary planning
- future compliance review required
- not regulatory compliant

Unsafe wording without evidence:

- compliant
- regulatory-ready
- approved

---

### Cybersecurity Certification

Cybersecurity certification means formal evidence or certification that cybersecurity requirements have been satisfied.

Cybersecurity certification is not claimed.

Safe wording:

- cybersecurity planning
- future cybersecurity evidence required
- not cybersecurity certified

Unsafe wording without evidence:

- cybersecurity-certified
- secure by certification
- security approved

---

### API/FHIR Implementation

API/FHIR implementation means adding, changing, integrating, or activating API or FHIR behavior.

API/FHIR implementation is not authorized.

Safe wording:

- API/FHIR boundary planning
- no API/FHIR implementation

Unsafe wording without evidence:

- FHIR-ready
- API-ready
- FHIR implemented

---

### SQL/Database Migration

SQL/database migration means creating, modifying, executing, or approving SQL, schema changes, migrations, or database behavior changes.

SQL/database migration is not authorized.

Safe wording:

- no SQL/database migration
- future database planning only

Unsafe wording without evidence:

- database-ready
- schema implemented
- SQL approved

---

### OpenEMR Core Behavior Change

OpenEMR core behavior change means any modification that changes OpenEMR runtime behavior, core files, core workflows, or core-sensitive paths.

OpenEMR core behavior changes are not authorized.

---

### Approval

Approval means a human-owned documented decision.

GPT may recommend but does not make the final accountable decision. For eligible
work, approval means a recorded Project Owner decision under the AI-Assisted
Solo-Owner Governance Policy V0.1.

Safe wording:

- Project Owner APPROVE decision for eligible work
- Project Owner APPROVE_WITH_CONDITIONS decision for eligible work
- qualified-human or external approval when a triggered gate requires it

Unsafe wording:

- AI approved
- automatically approved
- independently approved when the review is non-independent
- specialist-approved when no specialist-human approval occurred
- model-approved

---

### AI-Assisted Solo-Owner Governance

AI-Assisted Solo-Owner Governance means the internal model for eligible
documentation-stage and pre-runtime work in which GPT performs multidisciplinary
advisory review and the Project Owner makes the final accountable decision.

It is not independent assurance, specialist-human approval, professional
certification, clinical validation, compliance, or regulatory approval.

---

### Eligible Work

Eligible work means a narrow documentation-stage or pre-runtime change that
satisfies every eligibility condition in the authoritative AI-Assisted
Solo-Owner Governance Policy V0.1.

Eligibility is evidence-based. If executable behavior, PHI, secrets, runtime,
deployment, an external claim, an applicable qualified-human obligation, or
classification uncertainty exists, the decision is HOLD.

---

### GPT Multidisciplinary Advisory Review

GPT Multidisciplinary Advisory Review means non-binding repository, evidence,
technical, documentation, risk, clinical-boundary, privacy-security-boundary,
regulatory-claims, AI-governance, test, and consistency analysis.

GPT is not an independent human reviewer, licensed professional, risk-acceptance
authority, regulator, certification authority, or final decision-maker.

---

### Project Owner Final Accountable Decision

Project Owner Final Accountable Decision means the human Project Owner's
evidence-based decision after personally reviewing the evidence and GPT
findings, recording the mandatory fields, and disclosing the
author-owner-reviewer relationship and non-independence.

It is an internal decision only and cannot satisfy an external or
qualified-human gate unless that external authority expressly permits it.

---

### Non-Independent Review

Non-independent review means the author, owner, reviewer, or advisory tool
relationships do not provide organizational or professional independence.

The relationship must be disclosed. Non-independent review must not be described
as independent assurance or independent verification.

---

### APPROVE

APPROVE means the Project Owner has found an eligible change internally
acceptable within the exact reviewed scope and current evidence.

It does not authorize activity outside the policy boundary.

---

### APPROVE_WITH_CONDITIONS

APPROVE_WITH_CONDITIONS means the Project Owner has found an eligible change
internally acceptable subject to explicit, owned conditions. Conditions needed
for eligibility, safety, privacy, source-of-truth integrity, or passing required
checks must be resolved before merge.

---

### HOLD

HOLD means the Project Owner cannot approve or reject safely until a blocking
condition, missing fact, classification uncertainty, or triggered external gate
is resolved.

---

### REJECT

REJECT means the Project Owner has decided the proposed eligible-work change
must not proceed in its reviewed form.

---

### Evidence

Evidence means specific, reviewable support for a project decision.

Evidence may include file paths, PR results, grep output, script output, reviewer findings, or documented governance records.

Weak or missing evidence cannot support strong claims.

---

### Source of Truth

Source of truth means the document or artifact currently governing a specific topic.

A new document must not duplicate or weaken an existing source of truth.

---

### Documentation Index

Documentation Index means the project's document visibility and review-cadence control artifact.

Indexing a document does not implement the document.

Indexing a document does not validate, approve, deploy, or authorize clinical use.

---

### Governance Gate

Governance gate means a documented decision point that controls whether a project may proceed to a higher-risk stage.

A governance gate must be human-owned and evidence-supported.

---

### GO

GO remains an advisory governance recommendation used by older artifacts and
GPT review procedures. Under the AI-Assisted Solo-Owner Governance Policy V0.1,
GO is not the final Project Owner decision value.

A GO recommendation expires if repository state, evidence, scope, branch, PR
status, or risk changes.

---

### NO-GO

NO-GO means the proposed action must not proceed in its current form.

NO-GO applies when safety boundaries, privacy boundaries, claim-control boundaries, or source-of-truth discipline are breached.

---

## 5. Preferred Safe Vocabulary

Use:

- documentation-only
- planning-only
- governance-stage
- pre-runtime
- pre-implementation
- future planning
- human-supervised
- clinician-reviewed, if future context is clear
- no PHI
- no real patient data
- no AI implementation
- no prompt execution
- no model integration
- no API/FHIR implementation
- no SQL/database migration
- no OpenEMR core behavior change
- not for clinical use
- not production-ready
- not clinically validated
- not regulatory compliant
- not cybersecurity certified

---

## 6. Prohibited or High-Risk Vocabulary Without Evidence

Avoid without formal evidence and explicit approval:

- implemented
- active
- live
- operational
- deployed
- validated
- clinically validated
- approved
- certified
- compliant
- production-ready
- deployment-ready
- clinical-use ready
- PHI-ready
- real-patient-data ready
- AI-enabled
- AI-powered
- CDS-enabled
- FHIR-ready
- API-ready
- database-ready
- autonomous
- diagnostic
- treatment-recommending
- prescribing
- triage-capable
- safe for patient care
- secure by certification

---

## 7. Interpretation Rule

When a term can be interpreted in more than one way, the safest interpretation applies.

When wording may imply runtime, clinical use, AI, PHI, production readiness, validation, regulatory compliance, or cybersecurity certification, the wording must be weakened or clarified.

---

## 8. Final Statement

This glossary is a documentation-stage governance control.

It does not authorize implementation, runtime behavior, AI integration, prompt execution, model integration, API/FHIR work, SQL/database work, OpenEMR core behavior changes, PHI handling, real patient data, clinical use, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.

The safest interpretation always prevails.
