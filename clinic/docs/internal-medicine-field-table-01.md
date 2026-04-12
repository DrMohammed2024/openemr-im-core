# Internal Medicine Field Table - 01

## Target Form
- formdir / formname: `LBFim_internal_medicine`

## Purpose
This file defines the first implementation field table for the Internal Medicine LBF form.

---

## Field Table

| Section | Field Label | Candidate field_id | Candidate data_type | Source | Required | Notes |
|---|---|---|---|---|---|---|
| Encounter Meta | Encounter Date | encounter_date | date | F | Yes | default current date |
| Encounter Meta | Clinician | clinician_name | text / select | F | Yes | rendering decision later |
| Encounter Meta | Visit Type | visit_type | select | F | Yes | new / follow-up / urgent |
| Encounter Meta | Note Status | note_status | select | F | No | draft / final |

| Chief Concern | Chief Complaint | chief_complaint | text | F | Yes | short structured headline |
| Chief Concern | Visit Reason / Agenda | visit_reason | textarea | F | No | optional context |

| HPI | HPI Narrative | hpi_narrative | textarea | F | Yes | main narrative |
| HPI | Symptom Onset | symptom_onset | text | F | No | e.g. 2 days / 3 months |
| HPI | Duration | symptom_duration | text | F | No | free text initially |
| HPI | Course | symptom_course | select | F | No | improving / worsening / fluctuating |
| HPI | Severity | symptom_severity | select | F | No | mild / moderate / severe |
| HPI | Associated Symptoms | associated_symptoms | textarea | F | No | |
| HPI | Aggravating Factors | aggravating_factors | textarea | F | No | |
| HPI | Relieving Factors | relieving_factors | textarea | F | No | |

| ROS | Constitutional | ros_constitutional | textarea | F | No | |
| ROS | Cardiovascular | ros_cardiovascular | textarea | F | No | |
| ROS | Respiratory | ros_respiratory | textarea | F | No | |
| ROS | Gastrointestinal | ros_gastrointestinal | textarea | F | No | |
| ROS | Neurologic | ros_neurologic | textarea | F | No | |
| ROS | Genitourinary | ros_genitourinary | textarea | F | No | |
| ROS | Musculoskeletal | ros_musculoskeletal | textarea | F | No | |
| ROS | Endocrine | ros_endocrine | textarea | F | No | |
| ROS | Other ROS Notes | ros_other | textarea | F | No | |

| Vital Signs | BP | vital_bp | text | F | No | keep as text first version |
| Vital Signs | HR | vital_hr | text | F | No | |
| Vital Signs | RR | vital_rr | text | F | No | |
| Vital Signs | Temperature | vital_temp | text | F | No | |
| Vital Signs | SpO2 | vital_spo2 | text | F | No | |
| Vital Signs | Weight | vital_weight | text | F | No | |
| Vital Signs | Height | vital_height | text | F | No | |
| Vital Signs | BMI | vital_bmi | text | F | No | manual/derived later |

| Physical Exam | General Appearance | exam_general | textarea | F | No | |
| Physical Exam | CVS Exam | exam_cvs | textarea | F | No | |
| Physical Exam | Respiratory Exam | exam_respiratory | textarea | F | No | |
| Physical Exam | Abdomen Exam | exam_abdomen | textarea | F | No | |
| Physical Exam | Neuro Exam | exam_neuro | textarea | F | No | |
| Physical Exam | Extremities Exam | exam_extremities | textarea | F | No | |
| Physical Exam | Other Exam Notes | exam_other | textarea | F | No | |

| Assessment | Problem List Summary | assessment_problem_list | textarea | F | No | |
| Assessment | Working Diagnosis | working_diagnosis | textarea | F | Yes | |
| Assessment | Differential Diagnosis | differential_diagnosis | textarea | F | No | |
| Assessment | Clinical Impression Narrative | clinical_impression | textarea | F | No | |

| Plan | Investigations Ordered | plan_investigations | textarea | F | No | |
| Plan | Medications / Changes | plan_medications | textarea | F | No | |
| Plan | Non-Pharmacologic Plan | plan_nonpharm | textarea | F | No | |
| Plan | Follow-up Interval | followup_interval | text | F | No | |
| Plan | Referral Needed | referral_needed | select | F | No | yes / no |
| Plan | Safety Net / Return Precautions | safety_net | textarea | F | No | |

---

## Initial Design Decisions
- Source is `F` for first version unless a strong reason emerges to bind to another table.
- Prefer simple field types first.
- Avoid premature dynamic logic in version 1.
- Keep candidate field_id values lowercase, stable, and implementation-friendly.

## Open Questions
- Which fields should later bind to encounter-level shared data?
- Which vital fields should be numeric vs text in version 1?
- Which sections deserve coded select lists in version 2?

## Immediate Next Step
After this file:
create a grouped layout draft showing
- section order
- group titles
- suggested columns per row
- suggested textarea-heavy vs compact rows
