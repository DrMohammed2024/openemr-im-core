# Internal Medicine Layout Options Preparation - 01

## Purpose
This file translates the approved Internal Medicine field specification into a layout-oriented preparation artifact for future implementation in OpenEMR.

This is not yet the final SQL or final layout_options import file.
This is the controlled pre-implementation structure.

---

## Build Objective
Prepare a clean Version 1 Internal Medicine outpatient encounter form using an LBF-style structure with practical grouping, readable layout, and minimal-risk implementation.

---

## Global Layout Assumptions
- form base: LBF-compatible structure
- version target: V1 minimal usable outpatient Internal Medicine form
- storage assumption: form fields stored through standard form field path
- preferred design: readable, fast, clinician-friendly
- avoid excessive branching logic in V1
- avoid complex skip logic in V1 unless absolutely necessary

---

## Proposed Top-Level Group Order

1. Encounter Meta
2. HPI
3. ROS
4. Vital Signs
5. Physical Examination
6. Assessment
7. Plan

---

## Group Draft

### Group 1: Encounter Meta
Purpose:
Capture basic encounter identity and visit framing.

Suggested fields:
- im_note_date
- im_provider
- im_visit_type
- im_setting
- im_chief_complaint

Suggested layout:
- Row 1:
  - im_note_date
  - im_provider
  - im_visit_type
  - im_setting
- Row 2:
  - im_chief_complaint full-width

Columns guidance:
- compact row for first 4 fields
- chief complaint wide/full row

---

### Group 2: HPI
Purpose:
Capture the main narrative history of present illness with lightweight structured anchors.

Suggested fields:
- im_hpi_summary
- im_duration
- im_onset
- im_course
- im_severity
- im_context
- im_associated_symptoms

Suggested layout:
- Row 1:
  - im_hpi_summary full-width
- Row 2:
  - im_duration
  - im_onset
  - im_course
  - im_severity
- Row 3:
  - im_context wide
- Row 4:
  - im_associated_symptoms wide

---

### Group 3: ROS
Purpose:
Keep ROS lightweight and clinically useful without overbuilding V1.

Suggested fields:
- im_ros_general
- im_ros_respiratory
- im_ros_cardiovascular
- im_ros_gastrointestinal
- im_ros_neurologic
- im_ros_genitourinary
- im_ros_endocrine

Suggested layout:
- one wide field per row
- avoid checkbox explosion in V1
- narrative ROS style preferred initially

---

### Group 4: Vital Signs
Purpose:
Capture immediate clinically relevant measurements.

Suggested fields:
- im_vs_bp
- im_vs_hr
- im_vs_rr
- im_vs_temp
- im_vs_spo2
- im_vs_weight
- im_vs_height
- im_vs_bmi

Suggested layout:
- Row 1:
  - im_vs_bp
  - im_vs_hr
  - im_vs_rr
  - im_vs_temp
- Row 2:
  - im_vs_spo2
  - im_vs_weight
  - im_vs_height
  - im_vs_bmi

Notes:
- keep fields compact
- BMI may remain manually entered in V1
- auto-calculation can be deferred

---

### Group 5: Physical Examination
Purpose:
Support practical exam documentation without excessive fragmentation.

Suggested fields:
- im_pe_general
- im_pe_heent
- im_pe_chest
- im_pe_cardiovascular
- im_pe_abdomen
- im_pe_extremities
- im_pe_neuro
- im_pe_skin

Suggested layout:
- one wide field per row
- exam blocks should be readable and easy to scan

---

### Group 6: Assessment
Purpose:
Make clinician synthesis prominent and fast to review later.

Suggested fields:
- im_assessment_summary
- im_problem_1
- im_problem_2
- im_problem_3
- im_diff_dx

Suggested layout:
- Row 1:
  - im_assessment_summary full-width
- Row 2:
  - im_problem_1
  - im_problem_2
  - im_problem_3
- Row 3:
  - im_diff_dx full-width

Notes:
- assessment summary is high-priority
- differential remains optional in V1 but should exist

---

### Group 7: Plan
Purpose:
Document execution plan, tests, treatment, follow-up, and safety-netting.

Suggested fields:
- im_plan_summary
- im_investigations
- im_treatment
- im_followup
- im_red_flags

Suggested layout:
- Row 1:
  - im_plan_summary full-width
- Row 2:
  - im_investigations wide
- Row 3:
  - im_treatment wide
- Row 4:
  - im_followup wide
- Row 5:
  - im_red_flags wide

Notes:
- plan summary should be visually prominent
- follow-up and red flags improve clinical safety

---

## Approximate Layout Behavior Mapping

### Full-width fields
Use these as dominant narrative fields:
- im_hpi_summary
- im_assessment_summary
- im_diff_dx
- im_plan_summary

### Wide fields
Use these as readable narrative blocks:
- im_chief_complaint
- im_context
- im_associated_symptoms
- all ROS fields
- all Physical Examination fields
- im_investigations
- im_treatment
- im_followup
- im_red_flags

### Compact fields
Use these in short rows:
- im_note_date
- im_provider
- im_visit_type
- im_setting
- im_duration
- im_onset
- im_course
- im_severity
- all Vital Signs
- im_problem_1
- im_problem_2
- im_problem_3

---

## Required Field Priority

### Must-have for first runnable version
- im_note_date
- im_provider
- im_visit_type
- im_chief_complaint
- im_hpi_summary
- im_assessment_summary
- im_plan_summary

### Should-have for first clinically useful version
- im_vs_bp
- im_vs_hr
- im_vs_temp
- im_pe_general
- im_pe_chest
- im_pe_cardiovascular
- im_followup

### Optional but desirable in V1
- ROS subsections
- im_diff_dx
- full vitals set
- full exam set

---

## First Implementation Recommendation
For first actual build:
- create only one form
- no nested subgroup complexity
- no advanced skip rules
- no calculated field engine
- no auto-generated assessment logic
- no heavy medication or diagnosis integration in V1
- focus on stable documentation workflow first

---

## Mapping Direction Toward layout_options
Each final field later needs:
- form_id
- group_id
- seq
- title
- field_id
- data_type
- list_id where needed
- source
- required marker strategy
- titlecols / datacols
- edit_options if needed

This file intentionally stops one step before final implementation mapping.

---

## Decision
Proceed with:
- simple
- readable
- low-risk
- V1 documentation-first build

Do not yet build:
- complex automation
- billing integration
- diagnosis code search integration
- specialty branching sections
- inpatient complexity

---

## Next Artifact
Create the next file to convert this preparation into a near-build artifact:

`clinic/docs/internal-medicine-layout-options-grid-01.md`

That next file should include row-by-row implementation-oriented mapping for:
- section/group
- sequence
- field_id
- title
- likely data_type
- likely list usage
- compact/wide/full behavior
- implementation notes
