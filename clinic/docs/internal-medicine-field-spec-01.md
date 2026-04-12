# Internal Medicine Field Specification - 01

## Purpose
This file defines the first implementation-ready field specification for the Internal Medicine encounter form.

This is the direct bridge between planning and actual LBF/layout implementation.

---

## Build Target
Version 1 minimal encounter form for Internal Medicine.

Implementation direction:
- form base: LBF
- storage path: standard OpenEMR forms + lbf_data + layout_options
- scope: first usable encounter form for outpatient Internal Medicine workflow

---

## Section 1: Encounter Meta

| field_id | title | section | data_type_intent | source | required | row_behavior | notes |
|---|---|---|---|---|---|---|---|
| im_note_date | Note Date | Encounter Meta | date | F | yes | compact | default current date |
| im_provider | Provider | Encounter Meta | provider/reference | F | yes | compact | rendering may use standard provider selection pattern |
| im_visit_type | Visit Type | Encounter Meta | list | F | yes | compact | new / follow-up / urgent / review |
| im_setting | Setting | Encounter Meta | list | F | no | compact | clinic / telemedicine / other |
| im_chief_complaint | Chief Complaint | Encounter Meta | short text | F | yes | wide | patient main reason for visit |

---

## Section 2: HPI

| field_id | title | section | data_type_intent | source | required | row_behavior | notes |
|---|---|---|---|---|---|---|---|
| im_hpi_summary | HPI Summary | HPI | long text | F | yes | full-width | primary free-text HPI |
| im_duration | Duration | HPI | short text | F | no | compact | e.g. 3 days / 2 months |
| im_onset | Onset | HPI | list | F | no | compact | sudden / gradual |
| im_course | Course | HPI | list | F | no | compact | improving / worsening / fluctuating / stable |
| im_severity | Severity | HPI | list | F | no | compact | mild / moderate / severe |
| im_context | Context | HPI | short text | F | no | wide | trigger / exposure / circumstance |
| im_associated_symptoms | Associated Symptoms | HPI | long text | F | no | wide | symptom cluster |

---

## Section 3: ROS

| field_id | title | section | data_type_intent | source | required | row_behavior | notes |
|---|---|---|---|---|---|---|---|
| im_ros_general | ROS General | ROS | long text | F | no | wide | constitutional symptoms |
| im_ros_respiratory | ROS Respiratory | ROS | long text | F | no | wide | cough / dyspnea / wheeze etc. |
| im_ros_cardiovascular | ROS Cardiovascular | ROS | long text | F | no | wide | chest pain / palpitations / edema |
| im_ros_gastrointestinal | ROS Gastrointestinal | ROS | long text | F | no | wide | abdominal symptoms |
| im_ros_neurologic | ROS Neurologic | ROS | long text | F | no | wide | weakness / numbness / headache |
| im_ros_genitourinary | ROS Genitourinary | ROS | long text | F | no | wide | urinary symptoms |
| im_ros_endocrine | ROS Endocrine | ROS | long text | F | no | wide | polyuria / weight change etc. |

---

## Section 4: Vital Signs

| field_id | title | section | data_type_intent | source | required | row_behavior | notes |
|---|---|---|---|---|---|---|---|
| im_vs_bp | Blood Pressure | Vital Signs | short text | F | no | compact | e.g. 130/80 |
| im_vs_hr | Heart Rate | Vital Signs | numeric/text | F | no | compact | bpm |
| im_vs_rr | Respiratory Rate | Vital Signs | numeric/text | F | no | compact | per minute |
| im_vs_temp | Temperature | Vital Signs | numeric/text | F | no | compact | °C or °F depending workflow |
| im_vs_spo2 | SpO2 | Vital Signs | numeric/text | F | no | compact | % |
| im_vs_weight | Weight | Vital Signs | numeric/text | F | no | compact | kg |
| im_vs_height | Height | Vital Signs | numeric/text | F | no | compact | cm |
| im_vs_bmi | BMI | Vital Signs | numeric/text | F | no | compact | optional manual or calculated later |

---

## Section 5: Physical Examination

| field_id | title | section | data_type_intent | source | required | row_behavior | notes |
|---|---|---|---|---|---|---|---|
| im_pe_general | General Appearance | Physical Examination | long text | F | no | wide | ill / stable / distress etc. |
| im_pe_heent | HEENT | Physical Examination | long text | F | no | wide | focused exam |
| im_pe_chest | Chest / Respiratory | Physical Examination | long text | F | no | wide | inspection / auscultation |
| im_pe_cardiovascular | Cardiovascular | Physical Examination | long text | F | no | wide | heart sounds / edema |
| im_pe_abdomen | Abdomen | Physical Examination | long text | F | no | wide | tenderness / organomegaly etc. |
| im_pe_extremities | Extremities | Physical Examination | long text | F | no | wide | edema / perfusion / joints |
| im_pe_neuro | Neurologic | Physical Examination | long text | F | no | wide | gross neuro findings |
| im_pe_skin | Skin | Physical Examination | long text | F | no | wide | rash / lesions |

---

## Section 6: Assessment

| field_id | title | section | data_type_intent | source | required | row_behavior | notes |
|---|---|---|---|---|---|---|---|
| im_assessment_summary | Assessment Summary | Assessment | long text | F | yes | full-width | clinician synthesis |
| im_problem_1 | Problem 1 | Assessment | short text | F | no | compact | optional structured problem list seed |
| im_problem_2 | Problem 2 | Assessment | short text | F | no | compact | optional |
| im_problem_3 | Problem 3 | Assessment | short text | F | no | compact | optional |
| im_diff_dx | Differential Diagnosis | Assessment | long text | F | no | full-width | optional ddx block |

---

## Section 7: Plan

| field_id | title | section | data_type_intent | source | required | row_behavior | notes |
|---|---|---|---|---|---|---|---|
| im_plan_summary | Plan Summary | Plan | long text | F | yes | full-width | primary plan |
| im_investigations | Investigations | Plan | long text | F | no | wide | labs / imaging / procedures |
| im_treatment | Treatment | Plan | long text | F | no | wide | medications / interventions |
| im_followup | Follow-up | Plan | long text | F | no | wide | timing / monitoring / return plan |
| im_red_flags | Red Flags / Return Precautions | Plan | long text | F | no | wide | safety-netting |

---

## Section Structure Order
1. Encounter Meta
2. HPI
3. ROS
4. Vital Signs
5. Physical Examination
6. Assessment
7. Plan

---

## Required Core Fields For Version 1
These should be treated as the minimum essential fields:

- im_note_date
- im_provider
- im_visit_type
- im_chief_complaint
- im_hpi_summary
- im_assessment_summary
- im_plan_summary

---

## Source Convention
Current working assumption:
- `F` = standard LBF form storage in `lbf_data`

Version 1 should avoid mixing sources unless clearly necessary.

---

## Layout Guidance
- compact fields should be grouped in rows
- long narrative fields should be wide
- assessment and plan should have strong visual prominence
- ROS should remain lightweight in version 1
- do not overload version 1 with specialty subsections

---

## Next Implementation Artifact
After this file, create a layout-options preparation file that converts these fields into implementation-oriented entries for:

- group structure
- labels
- edit options
- approximate data type mapping
- row/column arrangement
- required markers
