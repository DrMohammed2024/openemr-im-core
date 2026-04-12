# Internal Medicine Final File Pack - 01

## Objective
Define the exact V1 file pack that will be created inside OpenEMR for the custom Internal Medicine encounter form.

Target final directory:

`interface/forms/internal_medicine/`

---

## V1 Final File Pack
The first implementation pack must contain exactly these files:

1. `interface/forms/internal_medicine/info.txt`
2. `interface/forms/internal_medicine/table.sql`
3. `interface/forms/internal_medicine/new.php`
4. `interface/forms/internal_medicine/report.php`

---

## File 1 — info.txt

### Purpose
Minimal form identity for OpenEMR.

### Expected content
Line 1:
`Internal Medicine`

Line 2:
`Custom Internal Medicine encounter form for structured outpatient documentation.`

---

## File 2 — table.sql

### Purpose
Define the custom form table.

### Expected table
`form_internal_medicine`

### Required V1 columns
- `id`
- `pid`
- `encounter`
- `date`
- `user`
- `groupname`
- `authorized`
- `activity`
- `deleted`
- `visit_type`
- `clinician_name`
- `chief_complaint`
- `hpi`
- `pmh`
- `psh`
- `medications`
- `allergies`
- `family_history`
- `social_history`
- `review_of_systems`
- `physical_exam`
- `assessment`
- `differential_diagnosis`
- `plan`
- `follow_up`
- `red_flags`
- `disposition`
- `created_at`
- `updated_at`

---

## File 3 — new.php

### Purpose
Handle:
- opening new form
- editing existing form
- saving form data
- creating linked row in `forms`

### Required V1 behaviors
- read patient / encounter context
- load existing row if `id` exists
- insert new row if form is new
- update row if form already exists
- call `addForm(...)` on first save
- provide buttons:
  - Save
  - Save and Continue
  - Cancel

---

## File 4 — report.php

### Purpose
Display saved Internal Medicine note in readable encounter-report style.

### Required V1 display sections
- Header
- Chief Complaint
- HPI
- PMH
- PSH
- Medications
- Allergies
- Family History
- Social History
- ROS
- Physical Exam
- Assessment
- Differential Diagnosis
- Plan
- Follow-up
- Red Flags
- Disposition

---

## Build Rule
Do not add extra files in first V1 pack.

Do not add yet:
- save.php
- javascript modules
- css files
- AI helpers
- portal integration
- billing helpers

---

## Purpose of This File Pack
This pack is enough to prove the complete V1 workflow:

1. form exists
2. form opens
3. form saves
4. form links to encounter
5. form reopens
6. form displays as report

---

## Acceptance Criteria
This file pack is correct if it allows the next phase to generate the actual OpenEMR files directly.

---

## Next File After This
After this pack, create:

`clinic/docs/internal-medicine-actual-build-step-01.md`
