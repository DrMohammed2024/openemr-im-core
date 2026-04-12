# Internal Medicine Layout Draft - 01

## Target Form
- formdir / formname: `LBFim_internal_medicine`

## Purpose
This file defines the first grouped layout draft for the Internal Medicine LBF form.

---

## Proposed Section Order

1. Encounter Meta
2. Chief Concern
3. HPI
4. ROS
5. Vital Signs
6. Physical Examination
7. Assessment
8. Plan

---

## Group Draft

### Group 1 — Encounter Meta
- Group title: Encounter Meta
- Suggested columns per row: 4
- Suggested fields:
  - encounter_date
  - clinician_name
  - visit_type
  - note_status

### Group 2 — Chief Concern
- Group title: Chief Concern
- Suggested columns per row: 2
- Suggested fields:
  - chief_complaint
  - visit_reason

### Group 3 — HPI
- Group title: History of Present Illness
- Suggested columns per row: 2
- Suggested fields:
  - symptom_onset
  - symptom_duration
  - symptom_course
  - symptom_severity
  - aggravating_factors
  - relieving_factors
  - associated_symptoms
  - hpi_narrative
- Layout note:
  - hpi_narrative should span a wide row
  - associated_symptoms should also allow longer text

### Group 4 — ROS
- Group title: Review of Systems
- Suggested columns per row: 2
- Suggested fields:
  - ros_constitutional
  - ros_cardiovascular
  - ros_respiratory
  - ros_gastrointestinal
  - ros_neurologic
  - ros_genitourinary
  - ros_musculoskeletal
  - ros_endocrine
  - ros_other
- Layout note:
  - keep ROS mostly textarea-based in version 1

### Group 5 — Vital Signs
- Group title: Vital Signs
- Suggested columns per row: 4
- Suggested fields:
  - vital_bp
  - vital_hr
  - vital_rr
  - vital_temp
  - vital_spo2
  - vital_weight
  - vital_height
  - vital_bmi

### Group 6 — Physical Examination
- Group title: Physical Examination
- Suggested columns per row: 2
- Suggested fields:
  - exam_general
  - exam_cvs
  - exam_respiratory
  - exam_abdomen
  - exam_neuro
  - exam_extremities
  - exam_other

### Group 7 — Assessment
- Group title: Assessment
- Suggested columns per row: 1
- Suggested fields:
  - assessment_problem_list
  - working_diagnosis
  - differential_diagnosis
  - clinical_impression

### Group 8 — Plan
- Group title: Plan
- Suggested columns per row: 1
- Suggested fields:
  - plan_investigations
  - plan_medications
  - plan_nonpharm
  - followup_interval
  - referral_needed
  - safety_net

---

## Row Strategy

### Compact rows
Use compact rows for:
- encounter_date
- clinician_name
- visit_type
- note_status
- symptom_onset
- symptom_duration
- symptom_course
- symptom_severity
- vital_bp
- vital_hr
- vital_rr
- vital_temp
- vital_spo2
- vital_weight
- vital_height
- vital_bmi
- followup_interval
- referral_needed

### Wide rows
Use wide rows for:
- chief_complaint
- visit_reason
- associated_symptoms
- aggravating_factors
- relieving_factors
- hpi_narrative
- all ROS narrative fields
- all exam narrative fields
- assessment_problem_list
- working_diagnosis
- differential_diagnosis
- clinical_impression
- plan_investigations
- plan_medications
- plan_nonpharm
- safety_net

---

## Draft Design Rules
- Keep version 1 simple and documentation-friendly.
- Prefer fewer dynamic dependencies at first.
- Prefer readability over dense compression.
- Keep assessment and plan sections visually prominent.
- Keep vitals compact and quick to scan.

---

## Immediate Next Step
After this file:
create a first implementation decision note for
- whether to build the form as a new dedicated standard form
- or build it as a new LBF form
- with explicit final recommendation
