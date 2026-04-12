# Internal Medicine Minimum Field Map - 01

## Target Form
- formdir / formname: `LBFim_internal_medicine`

## Objective
Define the minimum safe first-version field map for an Internal Medicine structured encounter form built on the LBF framework.

## First Version Scope
This first version should support:
- structured Internal Medicine outpatient encounter capture
- clinician-friendly documentation
- future expansion without immediate core runtime modification

## Section Structure

### 1. Encounter Meta
- Encounter Date
- Clinician
- Visit Type
- Note Status

### 2. Chief Concern
- Chief Complaint
- Visit Reason / Agenda

### 3. History of Present Illness
- HPI Narrative
- Symptom Onset
- Duration
- Course
- Severity
- Associated Symptoms
- Aggravating Factors
- Relieving Factors

### 4. Review of Systems
- Constitutional
- Cardiovascular
- Respiratory
- Gastrointestinal
- Neurologic
- Genitourinary
- Musculoskeletal
- Endocrine
- Other ROS Notes

### 5. Vital Signs Snapshot
- BP
- HR
- RR
- Temperature
- SpO2
- Weight
- Height
- BMI

### 6. Physical Examination
- General Appearance
- CVS Exam
- Respiratory Exam
- Abdomen Exam
- Neuro Exam
- Extremities Exam
- Other Exam Notes

### 7. Assessment
- Problem List Summary
- Working Diagnosis
- Differential Diagnosis
- Clinical Impression Narrative

### 8. Plan
- Investigations Ordered
- Medications / Changes
- Non-Pharmacologic Plan
- Follow-up Interval
- Referral Needed
- Safety Net / Return Precautions

## Recommended Field Style by Section

### Encounter Meta
- mostly select / date / short text

### Chief Concern
- short text + textarea

### HPI
- textarea-heavy with selected structured helpers

### ROS
- checkbox / select / short text hybrid

### Vital Signs
- numeric fields

### Physical Examination
- structured short fields + textarea

### Assessment
- textarea-heavy

### Plan
- textarea + select + checkbox hybrid

## First Build Principle
Version 1 should prioritize:
- clinical usability
- rapid data entry
- safe readability
- future expandability

## Explicit Non-Goals for Version 1
- no advanced scoring engine
- no automated diagnosis engine
- no complex branching logic first
- no core runtime patching before field layout is finalized

## Immediate Next Step
After this file:
create a field-by-field implementation table with
- field label
- candidate field_id
- data type
- section/group
- source
- required vs optional
- notes
