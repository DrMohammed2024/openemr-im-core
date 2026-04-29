# Internal Medicine Follow-Up V1 — Clinical Intelligence Architecture

## 1. Purpose

This document defines the documentation-only Clinical Intelligence Architecture for the Internal Medicine Follow-Up V1 module in OpenEMR IM Core.

The purpose is to design a safe, explainable, clinician-reviewed clinical intelligence layer that can support documentation completeness, follow-up quality, safety-net review, medication review completeness, chronic disease follow-up consistency, open-loops tracking, trend review planning, and future predictive analytics governance.

This document does not implement clinical AI, machine learning, runtime automation, SQL, OpenEMR core changes, production clinical decision support, or autonomous clinical decision-making.

---

## 2. Current Verified Project Context

Current project:

```text
OpenEMR IM Core
```

Current clinical module:

```text
Internal Medicine Follow-Up V1
```

Current layout ID:

```text
LBFim_followup_v1
```

Known metadata baseline:

```text
ROW_COUNT: 51
GROUP_COUNT: 9
GROUP_IDS: 1,2,3,4,5,6,7,8,9
FIELD_DISTRIBUTION: 4,7,7,5,6,6,4,7,5
```

Current known clinical groups:

1. Visit Context
2. Vital Signs Review
3. Chronic Conditions Review
4. Medication Review
5. Symptoms Review
6. Physical Exam Summary
7. Assessment
8. Plan
9. Patient Safety and Follow-up

Current project state:

```text
Seed/script governance documentation phase closed.
Current project state updated after PR #63.
Next phase: documentation-only Clinical Intelligence Architecture.
```

---

## 3. Architecture Decision

Selected approach:

```text
Documentation-only Clinical Intelligence Architecture
```

This is the safest next controlled milestone because it defines the future clinical intelligence layer without changing OpenEMR runtime behavior, executing SQL, modifying OpenEMR core files, or creating autonomous clinical decision support.

Deferred approaches:

```text
Runtime AI module
Machine learning model
Predictive risk model
SQL implementation
OpenEMR core modification
Autonomous clinical decision support
```

Reason for deferral:

- Runtime clinical AI should not be implemented before governance, validation, human-in-the-loop workflow, auditability, privacy review, and regulatory boundary planning are documented.
- Predictive risk models should not be implemented before data governance, clinical validation planning, bias and fairness review, monitoring plan, and formal clinical review.
- OpenEMR core-sensitive changes should not be introduced while documentation-first and configuration-first paths remain sufficient.

---

## 4. Core Safety Rule

The system must support the clinician.

It must not replace the clinician.

All future clinical intelligence outputs must remain:

- clinician-reviewed
- explainable
- traceable to source field categories
- editable where relevant
- auditable
- non-autonomous
- non-final until reviewed or accepted by a clinician

---

## 5. Strict Prohibitions

This architecture does not allow:

- autonomous diagnosis
- autonomous treatment recommendation
- autonomous prescribing
- autonomous emergency triage
- autonomous risk classification used for care without clinician review
- unsupported medical-device-software compliance claim
- unsupported clinical validation claim
- unsupported production-readiness claim
- unsupported clean-install reproducibility claim
- unsupported cybersecurity certification claim
- use of PHI in GitHub
- use of real patient data in GitHub
- credentials in GitHub
- database dumps in GitHub
- sensitive logs in GitHub
- SQL execution
- OpenEMR runtime modification
- OpenEMR core-sensitive change

---

## 6. Evidence-Informed Design Principles

This architecture should follow these design principles:

1. EHR safety and safe-use thinking.
2. Clinical Decision Support Five Rights:
   - right information
   - right person
   - right intervention format
   - right channel
   - right time in workflow
3. Explainable and traceable outputs.
4. Clinician ability to independently review the basis of any alert or recommendation.
5. Human-in-the-loop review before clinical use.
6. Auditability of alerts, edits, overrides, false positives, deferrals, and resolution.
7. Privacy-by-design and no-PHI development.
8. Rule-based checks before predictive analytics.
9. Predictive analytics deferred until validation and governance are mature.
10. Future interoperability may consider FHIR, SMART App Launch, and CDS Hooks, but no integration is implemented in this document.

---

## 7. Staged Clinical Intelligence Roadmap

### Stage 1 — Documentation-only Clinical Intelligence Architecture

Define modules, boundaries, source field categories, expected outputs, and human-in-the-loop requirements.

Status:

```text
Current stage
```

### Stage 2 — Rule-based Clinical Completeness and Safety-Net Checks

Design deterministic rules for documentation completeness, red-flag review support, medication review completeness, chronic disease follow-up consistency, safety-net review, plan consistency, and open-loops tracking.

No machine learning is required.

### Stage 3 — Human-in-the-loop Review Workflow and Audit States

Define alert states, clinician actions, audit notes, false-positive handling, deferral logic, and resolution workflow.

### Stage 4 — Open Loops and Safety-Net Tracking Plan

Define how pending labs, imaging, referrals, medication monitoring, unresolved symptoms, and follow-up responsibilities should be tracked.

### Stage 5 — Trend Review Planning

Plan future comparison of current and previous visits, including symptoms, vital signs, medication changes, chronic disease status, assessment changes, plan changes, and safety-net status.

### Stage 6 — Clinician-reviewed Summary Generation Boundary

Define how future summaries may be generated as drafts only, requiring clinician review and edit before use.

### Stage 7 — Validation Evidence Plan and Safety Testing Framework

Define test cases, expected outputs, false-positive review, false-negative review, clinician review, usability review, and safety boundary testing.

### Stage 8 — Predictive Analytics Research and Governance Plan

Plan predictive analytics only as future research.

No predictive risk flagging should be implemented without governance, validation, bias review, monitoring plan, and regulatory review.

### Stage 9 — Formal Validation and Regulatory Boundary Review

Before any clinical-use claim, require formal clinical validation planning, regulatory boundary review, and evidence gates.

---

## 8. Clinical Intelligence Modules

### 8.1 Clinical Completeness Checker

Purpose:

Checks whether required or expected follow-up documentation is missing.

Potential detected gaps:

- missing assessment summary
- missing plan details
- missing follow-up interval
- missing patient instructions
- missing safety-net notes
- missing status classification for chronic disease review
- missing owner for pending follow-up items

Output type:

```text
Documentation completeness alert for clinician review
```

Must not:

- diagnose
- recommend treatment
- close documentation automatically
- alter patient chart without clinician action

---

### 8.2 Red Flag Review Assistant

Purpose:

Flags documentation gaps around concerning symptoms or findings.

Examples:

- chest pain
- shortness of breath
- syncope
- low oxygen saturation
- neurological deficit
- severe pain
- fever with systemic illness
- abnormal vital signs

Output type:

```text
Red-flag documentation review alert
```

Important boundary:

This module must not autonomously triage emergencies.

It only flags documentation gaps for clinician review.

---

### 8.3 Medication Review Assistant

Purpose:

Checks medication review completeness.

Review areas:

- medications reviewed
- medication changes documented
- adherence concerns documented
- side effects documented
- refill needs documented
- medication safety review documented where relevant
- monitoring plan documented where relevant

Output type:

```text
Medication review completeness alert
```

Must not:

- prescribe
- stop medication
- change medication
- recommend medication adjustment autonomously

---

### 8.4 Chronic Disease Follow-up Review

Purpose:

Reviews consistency of chronic disease follow-up documentation.

Conditions may include:

- hypertension
- diabetes
- dyslipidemia
- CKD
- cardiovascular disease
- respiratory disease
- other chronic conditions

Output type:

```text
Chronic disease follow-up documentation gap alert
```

Must not:

- grade disease control autonomously for care decisions
- make treatment recommendations
- replace clinician assessment

---

### 8.5 Follow-up Safety Net Checker

Purpose:

Checks whether safety-net and follow-up documentation is complete.

Review areas:

- return precautions
- follow-up responsibility
- pending results follow-up
- escalation instructions
- follow-up interval
- patient instructions

Output type:

```text
Safety-net documentation gap alert
```

Must not:

- decide patient disposition
- provide emergency triage
- issue patient-facing instructions without clinician review

---

### 8.6 Plan Consistency Checker

Purpose:

Checks whether assessment and plan fields align in documentation completeness.

Review areas:

- assessment summary
- problem list update
- treatment plan
- medication plan
- lab orders plan
- imaging plan
- referrals plan
- follow-up interval
- patient instructions

Output type:

```text
Assessment-plan consistency alert
```

Must not:

- infer diagnosis
- generate final plan
- change orders

---

### 8.7 Open Loops Tracker

Purpose:

Identifies unresolved follow-up responsibilities.

Review areas:

- pending labs
- pending imaging
- pending referrals
- medication monitoring
- unresolved symptoms
- planned follow-up
- missing result review plan

Output type:

```text
Open-loop follow-up responsibility alert
```

Must not:

- assign clinical responsibility without clinician confirmation
- close pending follow-up automatically

---

### 8.8 Trend Review Assistant

Future stage.

Purpose:

Compares current and previous follow-up documentation, vital signs, symptoms, chronic disease status, medication changes, assessment, plan, and safety-net status.

Output type:

```text
Clinician-reviewed trend review draft
```

Must not:

- generate autonomous deterioration diagnosis
- generate autonomous risk classification
- replace clinician longitudinal review

---

### 8.9 Clinical Summary Generator

Future stage.

Purpose:

Generates clinician-reviewable summaries only.

Requirements:

- editable
- source-traceable
- clearly marked as draft
- no independent correctness claim
- final only after clinician review

Must distinguish:

```text
Source-derived content
AI-drafted text
Clinician-authored final note
```

---

### 8.10 Predictive Risk Flagging

Future research/planning stage only.

No implementation without:

- data governance
- validation plan
- clinical review
- bias analysis
- monitoring and drift review
- regulatory boundary review
- human-in-the-loop controls

---

## 9. Mapping to Existing LBF Groups

| LBF group | Intelligence checks | Documentation gaps detected | Output | Clinician review required | Must not infer automatically |
|---|---|---|---|---|---|
| Visit Context | Completeness, open-loop context | Missing reason, visit type, follow-up context | Completeness alert | Yes | Clinical priority |
| Vital Signs Review | Red flag review, chronic review, trend review | Abnormal vital without assessment/plan | Vital review alert | Yes | Instability/risk class |
| Chronic Conditions Review | Chronic follow-up review, plan consistency | Missing status, monitoring, follow-up plan | Chronic review alert | Yes | Disease control classification |
| Medication Review | Medication review completeness, safety-net linkage | Medication change/side effect without plan | Medication alert | Yes | Prescribing action |
| Symptoms Review | Red flag review, assessment consistency | New/concerning symptoms without assessment or safety-net | Symptom review alert | Yes | Emergency triage |
| Physical Exam Summary | Assessment consistency | Abnormal exam not reflected in assessment | Exam-assessment alert | Yes | Diagnosis |
| Assessment | Completeness, plan consistency | Missing assessment with populated plan | Assessment alert | Yes | Diagnostic conclusion |
| Plan | Plan consistency, open loops, safety-net | Missing follow-up, owner, monitoring, instructions | Plan alert | Yes | Treatment appropriateness |
| Patient Safety and Follow-up | Safety-net, open loops, result tracking | Missing return precautions, owner, interval | Safety-net alert | Yes | Safe disposition |

---

## 10. Example Rule Families

Future rule-based checks may include:

1. Red flags not reviewed
2. New symptoms documented but assessment summary missing
3. Medication side effects documented but medication plan missing
4. Unstable chronic disease status but follow-up interval missing
5. Lab orders plan documented but pending results follow-up missing
6. Return precautions missing when symptoms review contains concerning symptoms
7. Patient instructions missing when treatment plan exists
8. Assessment summary missing while plan fields are populated
9. Abnormal vital sign documented but no assessment or plan note
10. Medication change documented but follow-up monitoring missing
11. CKD documented but renal monitoring plan missing
12. Referral plan documented but follow-up responsibility missing
13. Pending result documented but no owner assigned
14. Physical exam abnormality documented but not reflected in assessment
15. Chronic disease reviewed but no status classification documented

Detailed trigger logic, alert text, severity, required clinician action, false-positive handling, and audit note requirements should be defined in a separate rule-based clinical review checks document.

---

## 11. Human-in-the-loop Review Workflow

Future review states should include:

| State | Meaning | Allowed action | Safety note |
|---|---|---|---|
| New | Alert generated but not reviewed | Open/review | No clinical effect |
| Needs Clinician Review | Clinician must assess item | Acknowledge, edit, resolve, defer, mark false positive | Clinician judgment required |
| Acknowledged | Clinician saw alert | Continue editing or resolve later | Not proof of correctness |
| Edited | Clinician changed documentation | Resolve or continue editing | Edited text is clinician responsibility |
| Resolved | Clinician closed item | Close | Reviewed item only; not proof of clinical validation |
| False Positive | Alert not applicable | Close as false positive | Useful for rule tuning |
| Deferred | Clinician intentionally postpones action | Set reason, owner, timeframe | Must not silently disappear |

Only a clinician or authorized clinical reviewer should close, override, or mark clinical intelligence items as resolved.

Detailed workflow rules should be defined in a separate human-in-the-loop review workflow document.

---

## 12. Clinical Output Rules

Every future alert or summary must:

- show why it was generated
- identify the source field category
- identify the trigger condition
- avoid unsupported diagnosis or treatment advice
- remain editable where relevant
- require clinician review before use
- allow false-positive marking
- support auditability
- not become final clinical documentation until clinician accepts or edits it
- avoid patient-facing output unless separately reviewed and approved

---

## 13. Predictive AI Strategy — Future Only

### Stage 1 — Deterministic Rules

Use explainable rule-based checks.

Allowed as future documentation and later controlled implementation after approval.

### Stage 2 — Trend Analysis

Compare visits longitudinally after data model, privacy review, and validation planning.

### Stage 3 — Statistical Anomaly Detection

Consider only after data governance, validation data, and false-positive review are available.

### Stage 4 — Predictive Risk Model Research

Research only.

Requires:

- data governance
- synthetic data or approved de-identified datasets
- bias and fairness review
- model limitation documentation
- clinical validation plan
- monitoring and drift review
- regulatory boundary review
- human-in-the-loop design

### Stage 5 — Formal Validation Before Clinical Use

No clinical-use claim before formal validation and governance review.

---

## 14. Auditability and Explainability Requirements

Every future alert, summary, or rule result should include:

- rule or output ID
- rule version
- source field category
- trigger condition
- severity
- alert text
- required clinician action
- reviewer identity
- timestamp
- review state
- false-positive option
- defer or override reason if applicable
- whether documentation was edited
- whether output was accepted, rejected, edited, deferred, or marked false positive

No future alert should be accepted as final clinical documentation unless clinician-reviewed.

---

## 15. Privacy and Security Boundary

This architecture must not introduce:

- PHI in GitHub
- real patient data in GitHub
- credentials
- secrets
- API keys
- database dumps
- sensitive logs
- production configuration exports
- identifiable screenshots

Future implementation should include privacy and security review before any runtime work.

---

## 16. Regulatory Boundary

This architecture is documentation-only.

It does not claim:

- medical-device readiness
- clinical validation
- regulatory compliance
- production readiness
- cybersecurity certification
- commercial deployment readiness

Any future patient-specific clinical intelligence that influences care decisions may require formal lifecycle controls, risk management, verification, validation, usability review, cybersecurity review, and regulatory boundary analysis.

---

## 17. Recommended Next Documentation Package

Recommended next artifact after this architecture document:

```text
custom/im-core/docs/clinical-intelligence/internal-medicine-follow-up-v1-rule-based-clinical-review-checks.md
```

Purpose:

```text
Define deterministic, explainable, clinician-reviewed rule-based checks for documentation completeness, red-flag review support, medication review completeness, chronic disease follow-up consistency, safety-net review, plan consistency, and open-loop tracking.
```

---

## 18. Safety and Privacy Confirmation

This document confirms:

- No PHI is included.
- No real patient data is included.
- No credentials are included.
- No database dumps are included.
- No sensitive logs are included.
- No SQL is included.
- No SQL execution is approved.
- No runtime modification is included.
- No OpenEMR core-sensitive change is included.
- No machine learning model is included.
- No autonomous clinical decision support is included.
- No autonomous diagnosis is included.
- No autonomous treatment recommendation is included.
- No autonomous prescribing is included.
- No autonomous emergency triage is included.
- No production-readiness claim is made.
- No clinical validation claim is made.
- No clean-install reproducibility claim is made.
- No regulatory compliance claim is made.

---

## 19. Status

Status:

```text
Documentation-only Clinical Intelligence Architecture.
No SQL created.
No SQL executed.
No runtime AI implemented.
No OpenEMR core changes.
Not production-ready.
Not clinically validated.
Not regulatory compliant by default.
```
