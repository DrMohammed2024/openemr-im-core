# Internal Medicine Layout Options Grid - 01

## Purpose
This file converts the approved Internal Medicine outpatient form structure into a near-build row-by-row implementation grid.

This is still a planning artifact, but it is intentionally close to actual OpenEMR layout construction.

---

## Version
- Target: V1
- Scope: outpatient Internal Medicine encounter
- Build style: clinician-friendly, low-risk, readable, practical
- Strategy: documentation-first before advanced automation

---

## Legend

### Width Behavior
- compact = short field in shared row
- wide = large readable field
- full = full-width narrative field

### Candidate Data Type Guidance
These are planning assumptions only:
- date = date
- text = single-line text
- textarea = multi-line narrative
- select = list-backed choice
- numeric = numeric entry

---

## Top-Level Grid

| Seq | Group | Field ID | Title | Candidate Type | Width | Priority | Notes |
|-----|-------|----------|-------|----------------|-------|----------|-------|
| 1 | Encounter Meta | im_note_date | Note Date | date | compact | must | encounter note date |
| 2 | Encounter Meta | im_provider | Provider | select/text | compact | must | rendering decision later |
| 3 | Encounter Meta | im_visit_type | Visit Type | select | compact | must | new/follow-up/urgent etc |
| 4 | Encounter Meta | im_setting | Setting | select | compact | should | clinic/telemedicine/etc |
| 5 | Encounter Meta | im_chief_complaint | Chief Complaint | textarea | full | must | one-line or short narrative |

| 6 | HPI | im_hpi_summary | HPI Summary | textarea | full | must | primary history narrative |
| 7 | HPI | im_duration | Duration | text | compact | should | duration phrase |
| 8 | HPI | im_onset | Onset | select/text | compact | should | acute/subacute/chronic |
| 9 | HPI | im_course | Course | select/text | compact | should | improving/worsening/fluctuating |
| 10 | HPI | im_severity | Severity | text/select | compact | should | mild/moderate/severe or scale |
| 11 | HPI | im_context | Context | textarea | wide | should | trigger/context/background |
| 12 | HPI | im_associated_symptoms | Associated Symptoms | textarea | wide | should | supporting symptom cluster |

| 13 | ROS | im_ros_general | ROS General | textarea | wide | optional | constitutional symptoms |
| 14 | ROS | im_ros_respiratory | ROS Respiratory | textarea | wide | optional | cough/dyspnea/wheeze etc |
| 15 | ROS | im_ros_cardiovascular | ROS Cardiovascular | textarea | wide | optional | chest pain/palpitations/edema |
| 16 | ROS | im_ros_gastrointestinal | ROS Gastrointestinal | textarea | wide | optional | GI review |
| 17 | ROS | im_ros_neurologic | ROS Neurologic | textarea | wide | optional | neuro review |
| 18 | ROS | im_ros_genitourinary | ROS Genitourinary | textarea | wide | optional | GU review |
| 19 | ROS | im_ros_endocrine | ROS Endocrine | textarea | wide | optional | endocrine review |

| 20 | Vital Signs | im_vs_bp | Blood Pressure | text | compact | should | BP formatted text in V1 |
| 21 | Vital Signs | im_vs_hr | Heart Rate | numeric/text | compact | should | pulse |
| 22 | Vital Signs | im_vs_rr | Respiratory Rate | numeric/text | compact | should | RR |
| 23 | Vital Signs | im_vs_temp | Temperature | text | compact | should | temp value |
| 24 | Vital Signs | im_vs_spo2 | SpO2 | text | compact | should | oxygen saturation |
| 25 | Vital Signs | im_vs_weight | Weight | text | compact | optional | defer units logic if needed |
| 26 | Vital Signs | im_vs_height | Height | text | compact | optional | defer units logic if needed |
| 27 | Vital Signs | im_vs_bmi | BMI | text | compact | optional | manual entry in V1 |

| 28 | Physical Examination | im_pe_general | General Examination | textarea | wide | should | general appearance |
| 29 | Physical Examination | im_pe_heent | HEENT | textarea | wide | optional | HEENT findings |
| 30 | Physical Examination | im_pe_chest | Chest / Respiratory | textarea | wide | should | respiratory exam |
| 31 | Physical Examination | im_pe_cardiovascular | Cardiovascular | textarea | wide | should | CVS exam |
| 32 | Physical Examination | im_pe_abdomen | Abdomen | textarea | wide | should | abdominal exam |
| 33 | Physical Examination | im_pe_extremities | Extremities | textarea | wide | optional | edema/perfusion etc |
| 34 | Physical Examination | im_pe_neuro | Neurologic | textarea | wide | optional | neuro exam |
| 35 | Physical Examination | im_pe_skin | Skin | textarea | wide | optional | skin findings |

| 36 | Assessment | im_assessment_summary | Assessment Summary | textarea | full | must | clinician synthesis |
| 37 | Assessment | im_problem_1 | Problem 1 | text | compact | should | first active problem |
| 38 | Assessment | im_problem_2 | Problem 2 | text | compact | optional | second problem |
| 39 | Assessment | im_problem_3 | Problem 3 | text | compact | optional | third problem |
| 40 | Assessment | im_diff_dx | Differential Diagnosis | textarea | full | optional | DDx block |

| 41 | Plan | im_plan_summary | Plan Summary | textarea | full | must | core management plan |
| 42 | Plan | im_investigations | Investigations | textarea | wide | should | labs/imaging/tests |
| 43 | Plan | im_treatment | Treatment | textarea | wide | should | meds/nonpharm/interventions |
| 44 | Plan | im_followup | Follow-up | textarea | wide | should | timing + ownership |
| 45 | Plan | im_red_flags | Red Flags / Safety Net | textarea | wide | should | return precautions |

---

## Proposed Row Mapping

### Encounter Meta
- Row 1: im_note_date | im_provider | im_visit_type | im_setting
- Row 2: im_chief_complaint

### HPI
- Row 1: im_hpi_summary
- Row 2: im_duration | im_onset | im_course | im_severity
- Row 3: im_context
- Row 4: im_associated_symptoms

### ROS
- Row 1: im_ros_general
- Row 2: im_ros_respiratory
- Row 3: im_ros_cardiovascular
- Row 4: im_ros_gastrointestinal
- Row 5: im_ros_neurologic
- Row 6: im_ros_genitourinary
- Row 7: im_ros_endocrine

### Vital Signs
- Row 1: im_vs_bp | im_vs_hr | im_vs_rr | im_vs_temp
- Row 2: im_vs_spo2 | im_vs_weight | im_vs_height | im_vs_bmi

### Physical Examination
- Row 1: im_pe_general
- Row 2: im_pe_heent
- Row 3: im_pe_chest
- Row 4: im_pe_cardiovascular
- Row 5: im_pe_abdomen
- Row 6: im_pe_extremities
- Row 7: im_pe_neuro
- Row 8: im_pe_skin

### Assessment
- Row 1: im_assessment_summary
- Row 2: im_problem_1 | im_problem_2 | im_problem_3
- Row 3: im_diff_dx

### Plan
- Row 1: im_plan_summary
- Row 2: im_investigations
- Row 3: im_treatment
- Row 4: im_followup
- Row 5: im_red_flags

---

## Required Set for First Runnable Version
These should be considered the minimum clinically useful starting set:

- im_note_date
- im_provider
- im_visit_type
- im_chief_complaint
- im_hpi_summary
- im_assessment_summary
- im_plan_summary

---

## Strongly Recommended Early Fields
These should be included in first practical build if possible:

- im_vs_bp
- im_vs_hr
- im_vs_temp
- im_pe_general
- im_pe_chest
- im_pe_cardiovascular
- im_followup
- im_investigations
- im_treatment
- im_red_flags

---

## Optional / Deferred Candidates
These may remain in V1 if build effort allows, or may be reduced in first pass:

- full ROS block
- im_pe_heent
- im_pe_extremities
- im_pe_neuro
- im_pe_skin
- im_problem_2
- im_problem_3
- im_diff_dx
- full vitals beyond BP/HR/temp

---

## Practical Implementation Guidance

### Keep V1 simple
- avoid nested groups
- avoid advanced conditional skip logic
- avoid calculated field complexity
- avoid automated diagnosis engine
- avoid billing coupling in first build

### Favor these characteristics
- fast data entry
- low click burden
- readable review
- strong note synthesis
- safe follow-up and red-flag capture

---

## Near-Build Interpretation
The next artifact after this should decide the exact implementation path:

Option A:
- Build as a new LBF-based form structure

Option B:
- Build by adapting Clinical Notes architecture

Option C:
- Build as a hybrid using standard encounter workflow with custom field set

This file does not finalize that choice, but it narrows the build target substantially.

---

## Current Recommendation
Based on current analysis, proceed toward:
- Internal Medicine custom encounter form
- documentation-first structure
- stable V1
- low-risk deployment path

---

## Next Artifact
Create:

`clinic/docs/internal-medicine-final-build-path-01.md`

That next file must answer:
1. exact implementation path
2. why that path is preferred
3. what files are likely to be created or modified
4. what should be avoided in the first build
5. what the first executable build slice should contain
