# Internal Medicine Follow-Up V1 — Rule-based Clinical Review Checks

## 1. Purpose

This document defines documentation-only rule-based clinical review checks for the Internal Medicine Follow-Up V1 module in OpenEMR IM Core.

The purpose is to translate the Clinical Intelligence Architecture into deterministic, explainable, clinician-reviewed rule families that can support:

- clinical documentation completeness
- red-flag documentation review
- medication review completeness
- chronic disease follow-up consistency
- safety-net documentation checks
- assessment and plan consistency
- open-loops tracking
- trend-review readiness
- future validation planning

This document does not implement runtime rules, SQL, OpenEMR core changes, machine learning, predictive analytics, autonomous diagnosis, autonomous treatment recommendation, autonomous prescribing, autonomous triage, or production clinical decision support.

---

## 2. Current Project Context

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

Preceding documentation milestone:

```text
custom/im-core/docs/clinical-intelligence/internal-medicine-follow-up-v1-clinical-intelligence-architecture.md
```

---

## 3. Architecture Position

This document is the second documentation artifact in the Clinical Intelligence phase.

It follows the Clinical Intelligence Architecture document and defines rule families only.

Current scope:

```text
Documentation-only deterministic clinical review checks.
```

Out of scope:

```text
Runtime implementation.
SQL execution.
OpenEMR core changes.
Machine learning.
Predictive risk model.
Autonomous clinical decision support.
Production clinical decision support.
```

---

## 4. Core Rule Design Principles

All future rule-based checks must be:

- deterministic
- explainable
- traceable to source field categories
- clinician-reviewed
- auditable
- overrideable with reason
- markable as false positive
- non-autonomous
- non-prescriptive
- non-diagnostic
- non-final until reviewed by a clinician

Rules must identify documentation gaps or consistency gaps.

Rules must not make independent clinical conclusions.

---

## 5. Rule Output Requirements

Every future rule output should include:

- rule ID
- rule name
- source LBF group or field category
- trigger condition
- alert text
- severity
- required clinician action
- false-positive considerations
- safety boundary
- audit note requirement
- review state
- reviewer identity in future implementation
- timestamp in future implementation
- rule version in future implementation

A rule result must not become final clinical documentation unless accepted or edited by a clinician.

---

## 6. Severity Categories

The proposed documentation-only severity categories are:

| Severity | Meaning | Expected clinician action |
|---|---|---|
| High | Potentially important safety or follow-up documentation gap | Review before closing encounter if applicable |
| Medium | Important completeness or consistency gap | Review and complete, defer, or mark false positive |
| Low | Lower-risk documentation improvement item | Review when feasible |
| Informational | Reminder or quality improvement prompt | Optional review unless locally required |

Severity does not equal diagnosis, triage category, clinical instability, or medical urgency.

Severity only describes the importance of the documentation review gap.

---

## 7. Rule Family Summary

| Rule family | Main purpose | Main LBF groups | Output type |
|---|---|---|---|
| Clinical Completeness | Detect missing expected documentation | All groups | Completeness alert |
| Red Flag Review | Detect missing red-flag review documentation | Symptoms, Vitals, Assessment, Plan, Safety | Safety review alert |
| Medication Review | Detect incomplete medication review documentation | Medication, Symptoms, Plan, Safety | Medication completeness alert |
| Chronic Disease Review | Detect missing chronic status or monitoring documentation | Chronic, Vitals, Assessment, Plan, Safety | Chronic follow-up alert |
| Safety Net Review | Detect missing precautions, follow-up, or owner | Plan, Safety, Symptoms | Safety-net alert |
| Plan Consistency | Detect mismatch between assessment and plan | Assessment, Plan, Symptoms, Exam | Consistency alert |
| Open Loops | Detect unresolved pending items | Plan, Safety, Visit Context | Open-loop alert |
| Trend Readiness | Prepare structured data for future trend review | Vitals, Chronic, Medication, Symptoms, Assessment | Trend-readiness note |

---

## 8. Rule 1 — Red Flags Not Reviewed

Rule ID:

```text
IMFU-RULE-001
```

Rule name:

```text
Red flags not reviewed
```

Input field categories:

- Symptoms Review
- Vital Signs Review
- Patient Safety and Follow-up

Trigger condition:

```text
Concerning symptom or abnormal vital sign is documented
AND red-flag review or safety-net review field is empty.
```

Alert text:

```text
Concerning symptom or abnormal vital sign is documented, but red-flag review is not documented. Please review and document whether red flags were assessed.
```

Severity:

```text
High
```

Required clinician action:

- complete red-flag review
- document safety-net assessment
- defer with reason
- mark false positive with reason

False-positive considerations:

- symptom may be historical
- abnormal vital may be known baseline
- red-flag assessment may be documented elsewhere
- symptom may have been clarified as non-concerning

Safety boundary:

```text
This rule does not triage the patient and does not diagnose an emergency. It only identifies a documentation gap for clinician review.
```

Audit note requirement:

```text
Record source category, trigger reason, clinician decision, and false-positive or defer reason if applicable.
```

---

## 9. Rule 2 — New Symptoms Documented but Assessment Summary Missing

Rule ID:

```text
IMFU-RULE-002
```

Rule name:

```text
New symptoms documented but assessment summary missing
```

Input field categories:

- Symptoms Review
- Assessment

Trigger condition:

```text
New symptom is documented
AND assessment summary is empty.
```

Alert text:

```text
New symptom is documented, but assessment summary is missing. Please add assessment summary or mark this alert as not applicable.
```

Severity:

```text
Medium
```

Required clinician action:

- complete assessment summary
- document that symptom was not clinically relevant
- mark false positive with reason
- defer with reason

False-positive considerations:

- symptom may be minor
- symptom may be historical
- assessment may be documented in another field
- symptom may be patient-reported but not part of current visit focus

Safety boundary:

```text
This rule does not infer diagnosis or clinical significance.
```

Audit note requirement:

```text
Record source symptom category, missing assessment status, and clinician action.
```

---

## 10. Rule 3 — Medication Side Effects Documented but Medication Plan Missing

Rule ID:

```text
IMFU-RULE-003
```

Rule name:

```text
Medication side effects documented but medication plan missing
```

Input field categories:

- Medication Review
- Symptoms Review
- Plan
- Patient Safety and Follow-up

Trigger condition:

```text
Medication side effect or intolerance is documented
AND medication plan or follow-up monitoring plan is empty.
```

Alert text:

```text
Medication side effect or intolerance is documented, but medication plan or monitoring plan is missing. Please review and document the medication follow-up plan.
```

Severity:

```text
High
```

Required clinician action:

- complete medication plan
- document monitoring plan
- document no action needed with reason
- defer with owner and timeframe
- mark false positive with reason

False-positive considerations:

- side effect may be historical
- medication may already be stopped elsewhere
- plan may be documented in free text
- patient may be managed by another clinician

Safety boundary:

```text
This rule does not prescribe, stop, change, or recommend medications.
```

Audit note requirement:

```text
Record medication review category, side-effect trigger, clinician action, and monitoring decision.
```

---

## 11. Rule 4 — Unstable Chronic Disease Status but Follow-up Interval Missing

Rule ID:

```text
IMFU-RULE-004
```

Rule name:

```text
Unstable chronic disease status but follow-up interval missing
```

Input field categories:

- Chronic Conditions Review
- Assessment
- Plan
- Patient Safety and Follow-up

Trigger condition:

```text
Chronic disease status is documented as unstable, uncontrolled, worsening, not at goal, or requiring review
AND follow-up interval is empty.
```

Alert text:

```text
Chronic disease status suggests need for follow-up, but follow-up interval is missing. Please document follow-up interval or reason for deferral.
```

Severity:

```text
High
```

Required clinician action:

- document follow-up interval
- document follow-up owner
- defer with reason
- mark false positive with reason

False-positive considerations:

- status wording may be provisional
- patient may already have scheduled follow-up
- specialist may own follow-up
- chronic disease status may be copied forward

Safety boundary:

```text
This rule does not classify disease severity or determine medical urgency.
```

Audit note requirement:

```text
Record chronic disease category, status trigger, follow-up decision, and owner if applicable.
```

---

## 12. Rule 5 — Lab Orders Plan Documented but Pending Results Follow-up Missing

Rule ID:

```text
IMFU-RULE-005
```

Rule name:

```text
Lab orders plan documented but pending results follow-up missing
```

Input field categories:

- Plan
- Patient Safety and Follow-up

Trigger condition:

```text
Lab order or investigation plan is documented
AND pending result follow-up plan is empty.
```

Alert text:

```text
Lab or investigation plan is documented, but pending result follow-up is missing. Please document who will review results and how follow-up will occur.
```

Severity:

```text
Medium
```

Required clinician action:

- assign result follow-up owner
- document review pathway
- document patient notification plan if applicable
- mark false positive with reason
- defer with reason

False-positive considerations:

- test may already be resulted
- test may be external
- result review may be handled by another workflow
- plan may not require follow-up

Safety boundary:

```text
This rule does not interpret test results or determine urgency.
```

Audit note requirement:

```text
Record planned investigation category, missing follow-up status, owner, and clinician response.
```

---

## 13. Rule 6 — Return Precautions Missing When Symptoms Review Contains Concerning Symptoms

Rule ID:

```text
IMFU-RULE-006
```

Rule name:

```text
Return precautions missing for concerning symptoms
```

Input field categories:

- Symptoms Review
- Patient Safety and Follow-up
- Plan

Trigger condition:

```text
Concerning symptom category is documented
AND return precautions or escalation instructions are empty.
```

Alert text:

```text
Concerning symptom is documented, but return precautions or escalation instructions are missing. Please review and document safety-net advice if appropriate.
```

Severity:

```text
High
```

Required clinician action:

- document return precautions
- document escalation advice
- document why return precautions are not needed
- mark false positive with reason

False-positive considerations:

- symptom may be mild after clarification
- symptom may be historical
- safety-net advice may be documented elsewhere
- patient may be referred immediately

Safety boundary:

```text
This rule does not provide patient-facing emergency instructions without clinician review.
```

Audit note requirement:

```text
Record symptom category, missing safety-net field, clinician action, and false-positive reason if applicable.
```

---

## 14. Rule 7 — Patient Instructions Missing When Treatment Plan Exists

Rule ID:

```text
IMFU-RULE-007
```

Rule name:

```text
Patient instructions missing when treatment plan exists
```

Input field categories:

- Plan
- Patient Safety and Follow-up

Trigger condition:

```text
Treatment plan, medication plan, lifestyle plan, referral plan, lab plan, or imaging plan is documented
AND patient instructions field is empty.
```

Alert text:

```text
A treatment or follow-up plan is documented, but patient instructions are missing. Please document patient instructions or reason not applicable.
```

Severity:

```text
Medium
```

Required clinician action:

- add patient instructions
- document that verbal instructions were provided
- document not applicable
- mark false positive with reason

False-positive considerations:

- patient instructions may be given in printed form
- instructions may be documented elsewhere
- plan may be internal only
- patient may not require additional instructions

Safety boundary:

```text
This rule does not generate final patient instructions.
```

Audit note requirement:

```text
Record plan category, missing instruction field, and clinician response.
```

---

## 15. Rule 8 — Assessment Summary Missing While Plan Fields Are Populated

Rule ID:

```text
IMFU-RULE-008
```

Rule name:

```text
Assessment summary missing while plan fields are populated
```

Input field categories:

- Assessment
- Plan

Trigger condition:

```text
One or more plan fields are populated
AND assessment summary is empty.
```

Alert text:

```text
Plan fields are populated, but assessment summary is missing. Please complete assessment summary or mark as not applicable.
```

Severity:

```text
Medium
```

Required clinician action:

- complete assessment summary
- link plan to clinical reasoning
- document not applicable
- mark false positive with reason

False-positive considerations:

- assessment may be documented in free text
- plan may be administrative
- assessment may be inherited from previous note

Safety boundary:

```text
This rule does not infer the diagnosis or generate assessment text.
```

Audit note requirement:

```text
Record populated plan categories and clinician action.
```

---

## 16. Rule 9 — Abnormal Vital Sign Documented but No Assessment or Plan Note

Rule ID:

```text
IMFU-RULE-009
```

Rule name:

```text
Abnormal vital sign documented but no assessment or plan note
```

Input field categories:

- Vital Signs Review
- Assessment
- Plan

Trigger condition:

```text
Vital sign is documented as abnormal, concerning, outside expected range, or requiring review
AND assessment and plan fields do not reference the finding.
```

Alert text:

```text
An abnormal vital sign is documented, but no assessment or plan note is present. Please review and document clinical relevance or mark as not applicable.
```

Severity:

```text
High
```

Required clinician action:

- document assessment
- document plan
- document baseline/non-concerning status
- mark false positive with reason

False-positive considerations:

- abnormal vital may be known baseline
- measurement may be erroneous
- repeat vital may normalize
- finding may be addressed elsewhere

Safety boundary:

```text
This rule does not classify instability or triage urgency.
```

Audit note requirement:

```text
Record vital category, trigger status, clinician response, and override reason if applicable.
```

---

## 17. Rule 10 — Medication Change Documented but Follow-up Monitoring Missing

Rule ID:

```text
IMFU-RULE-010
```

Rule name:

```text
Medication change documented but follow-up monitoring missing
```

Input field categories:

- Medication Review
- Plan
- Patient Safety and Follow-up

Trigger condition:

```text
Medication start, stop, dose change, switch, or adherence intervention is documented
AND monitoring or follow-up plan is empty.
```

Alert text:

```text
Medication change is documented, but follow-up monitoring plan is missing. Please document monitoring, follow-up, or reason not required.
```

Severity:

```text
High
```

Required clinician action:

- document monitoring plan
- document follow-up interval
- document no monitoring needed with reason
- mark false positive with reason

False-positive considerations:

- medication change may be historical
- medication may be low-risk
- monitoring may be managed externally
- monitoring may be documented elsewhere

Safety boundary:

```text
This rule does not recommend medication monitoring intervals or medication changes.
```

Audit note requirement:

```text
Record medication change category, missing monitoring status, and clinician response.
```

---

## 18. Rule 11 — CKD Documented but Renal Monitoring Plan Missing

Rule ID:

```text
IMFU-RULE-011
```

Rule name:

```text
CKD documented but renal monitoring plan missing
```

Input field categories:

- Chronic Conditions Review
- Medication Review
- Plan
- Patient Safety and Follow-up

Trigger condition:

```text
CKD or renal impairment is documented
AND renal monitoring, medication safety review, or follow-up plan is empty.
```

Alert text:

```text
CKD or renal impairment is documented, but renal monitoring or medication safety follow-up is missing. Please review and document the plan if applicable.
```

Severity:

```text
Medium
```

Required clinician action:

- document renal monitoring plan
- document medication safety review
- document specialist ownership
- defer with reason
- mark false positive with reason

False-positive considerations:

- CKD may be historical
- nephrology may own monitoring
- recent labs may already be reviewed
- CKD status may be uncertain

Safety boundary:

```text
This rule does not recommend renal dosing, medication changes, or lab intervals.
```

Audit note requirement:

```text
Record CKD category, missing monitoring field, owner, and clinician response.
```

---

## 19. Rule 12 — Referral Plan Documented but Follow-up Responsibility Missing

Rule ID:

```text
IMFU-RULE-012
```

Rule name:

```text
Referral plan documented but follow-up responsibility missing
```

Input field categories:

- Plan
- Patient Safety and Follow-up

Trigger condition:

```text
Referral plan is documented
AND follow-up owner, responsibility, or tracking plan is empty.
```

Alert text:

```text
Referral plan is documented, but follow-up responsibility is missing. Please document owner, tracking plan, or reason not applicable.
```

Severity:

```text
Medium
```

Required clinician action:

- document referral owner
- document tracking plan
- document patient responsibility
- defer with reason
- mark false positive with reason

False-positive considerations:

- referral may already be completed
- patient may self-book
- external system may track referral
- referral may be optional

Safety boundary:

```text
This rule does not determine referral urgency or specialty appropriateness.
```

Audit note requirement:

```text
Record referral category, owner status, and clinician action.
```

---

## 20. Rule 13 — Pending Result Documented but No Owner Assigned

Rule ID:

```text
IMFU-RULE-013
```

Rule name:

```text
Pending result documented but no owner assigned
```

Input field categories:

- Plan
- Patient Safety and Follow-up
- Visit Context

Trigger condition:

```text
Pending lab, imaging, referral, or report is documented
AND no follow-up owner is assigned.
```

Alert text:

```text
Pending result or follow-up item is documented, but no owner is assigned. Please assign responsibility or document external ownership.
```

Severity:

```text
High
```

Required clinician action:

- assign owner
- document external owner
- document patient responsibility
- defer with timeframe
- mark false positive with reason

False-positive considerations:

- result may not require follow-up
- responsibility may exist outside the form
- pending item may be duplicate
- owner may be implied by local workflow

Safety boundary:

```text
This rule does not interpret results or determine urgency.
```

Audit note requirement:

```text
Record pending item category, owner status, clinician action, and defer timeframe if applicable.
```

---

## 21. Rule 14 — Physical Exam Abnormality Documented but Not Reflected in Assessment

Rule ID:

```text
IMFU-RULE-014
```

Rule name:

```text
Physical exam abnormality documented but not reflected in assessment
```

Input field categories:

- Physical Exam Summary
- Assessment
- Plan

Trigger condition:

```text
Abnormal physical exam finding is documented
AND assessment summary does not reference or contextualize it.
```

Alert text:

```text
An abnormal physical exam finding is documented but not reflected in the assessment. Please review and document relevance or mark as not applicable.
```

Severity:

```text
Medium
```

Required clinician action:

- update assessment
- document finding as incidental or baseline
- document not applicable
- mark false positive with reason

False-positive considerations:

- finding may be chronic baseline
- finding may be not clinically relevant
- assessment may be documented elsewhere
- exam text may include copied-forward content

Safety boundary:

```text
This rule does not diagnose based on physical exam findings.
```

Audit note requirement:

```text
Record exam category, assessment gap status, and clinician response.
```

---

## 22. Rule 15 — Chronic Disease Reviewed but No Status Classification Documented

Rule ID:

```text
IMFU-RULE-015
```

Rule name:

```text
Chronic disease reviewed but no status classification documented
```

Input field categories:

- Chronic Conditions Review
- Assessment
- Plan

Trigger condition:

```text
Chronic disease is reviewed
AND status classification or follow-up status is empty.
```

Alert text:

```text
Chronic disease is reviewed, but status classification is missing. Please document status or reason not assessable.
```

Severity:

```text
Low to Medium
```

Required clinician action:

- document status
- document not assessable
- defer with reason
- mark false positive with reason

False-positive considerations:

- chronic disease may be mentioned but not assessed
- status may be outside visit scope
- patient may be managed by another clinician
- available data may be insufficient

Safety boundary:

```text
This rule does not classify chronic disease control automatically.
```

Audit note requirement:

```text
Record chronic disease category, missing status, and clinician decision.
```

---

## 23. Rule Review States

Future implementation should use the following review states:

| State | Meaning | Allowed action | Audit requirement |
|---|---|---|---|
| New | Rule result generated but not viewed | Open or review | Timestamp and rule ID |
| Needs Clinician Review | Clinician must decide | Acknowledge, edit, resolve, defer, mark false positive | Clinician identity and action |
| Acknowledged | Clinician saw item | Continue, defer, resolve | Acknowledgment note if required |
| Edited | Clinician changed documentation | Save and resolve | Edited field record |
| Resolved | Clinician closed item | Close | Resolution note |
| False Positive | Rule not applicable | Close as false positive | Reason required |
| Deferred | Action postponed | Assign owner and timeframe | Reason, owner, due date |

Rules must not self-resolve clinical items without clinician review.

---

## 24. False Positive Handling

Every rule must allow false-positive marking.

False-positive reason should be required for medium and high severity rule results.

Possible false-positive reasons:

- documented elsewhere
- historical issue
- not clinically relevant to this visit
- managed by another clinician
- external workflow handles this item
- duplicate alert
- incorrect source field interpretation
- not applicable after clinician review

False-positive data may later support rule refinement.

---

## 25. False Negative Considerations

This documentation recognizes that rule-based checks may miss documentation gaps.

Potential false-negative causes:

- free-text documentation not mapped to structured fields
- inconsistent wording
- copied-forward notes
- missing source field categories
- external documentation
- partial documentation outside the LBF form
- local workflow differences

Future validation should include false-negative review.

---

## 26. Audit and Traceability Requirements

Future implementation should record:

- rule ID
- rule version
- source group
- source field category
- trigger condition
- severity
- alert text
- clinician action
- review state
- false-positive reason if applicable
- defer reason if applicable
- owner if applicable
- timestamp
- reviewer identity
- final outcome

No patient-identifiable audit data should be committed to GitHub.

---

## 27. Safety Boundary

These rule-based checks are documentation-support tools only.

They must not be described as:

- diagnosis engine
- treatment recommendation engine
- prescribing support engine
- triage automation
- autonomous CDS
- clinical validation evidence
- production clinical AI
- regulatory-compliant medical device software

All outputs require clinician review.

---

## 28. Privacy and Security Boundary

This document includes no:

- PHI
- real patient data
- credentials
- secrets
- API keys
- database dumps
- sensitive logs
- production configuration exports
- identifiable screenshots

Future examples must use synthetic or sanitized data only.

---

## 29. Implementation Boundary

This document does not approve implementation.

Before any runtime implementation, the project must document:

- human-in-the-loop workflow
- audit and explainability plan
- validation evidence plan
- privacy and security review
- false positive / false negative review plan
- rollback plan
- non-production testing plan
- rule versioning plan
- OpenEMR upgrade-safety review
- regulatory boundary review

---

## 30. Recommended Next Documentation Package

Recommended next artifact:

```text
custom/im-core/docs/clinical-intelligence/internal-medicine-follow-up-v1-human-in-the-loop-review-workflow.md
```

Purpose:

```text
Define clinician review states, permitted actions, audit requirements, override rules, false-positive handling, deferral handling, and closure rules for future clinical intelligence outputs.
```

---

## 31. Safety and Privacy Confirmation

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
- No predictive model is included.
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

## 32. Status

Status:

```text
Documentation-only rule-based clinical review checks.
No runtime rules implemented.
No SQL created.
No SQL executed.
No OpenEMR core changes.
Not production-ready.
Not clinically validated.
Not regulatory compliant by default.
```
