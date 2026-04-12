# Internal Medicine new.php Draft - 01

## Objective
Create the first implementation draft for:

`interface/forms/internal_medicine/new.php`

This draft should follow standard OpenEMR encounter-form behavior and stay as simple as possible in V1.

---

## V1 Goal
The form should:

- open inside the encounter workflow
- support new record creation
- support editing existing record
- save one row into `form_internal_medicine`
- register itself in OpenEMR `forms` table
- remain simple and close to standard OpenEMR form patterns

---

## Core Design Decision
Use a **direct custom form approach** modeled after standard OpenEMR encounter forms.

Do not use LBF for this Internal Medicine V1 build.

Reason:
- better control
- easier future expansion
- cleaner long-form Internal Medicine workflow
- easier structured assessment/plan evolution later

---

## Expected Responsibilities of new.php

### 1. Bootstrap / Includes
Expected includes:
- `../../globals.php`
- encounter/form helpers as needed
- csrf support
- session access
- db access helpers

### 2. Read context
Read:
- patient id
- encounter id
- existing form id if editing

### 3. Load existing row if present
If `id` exists:
- load existing row from `form_internal_medicine`

If no `id`:
- prepare empty defaults

### 4. Save logic
On POST save:
- if new form:
  - insert into `form_internal_medicine`
  - call `addForm(...)`
- if existing form:
  - update `form_internal_medicine`

### 5. Render form
Render a V1 clean form with these sections:

- Visit Identity
- Chief Complaint / HPI
- PMH / PSH
- Medications / Allergies
- Family / Social History
- ROS / Physical Exam
- Assessment / Differential
- Plan / Follow-up / Red Flags / Disposition

### 6. Buttons
Need at least:
- Save
- Save and Continue
- Cancel

---

## Proposed Initial Field Set

### Visit Identity
- date
- visit_type
- clinician_name

### Clinical Narrative
- chief_complaint
- hpi
- pmh
- psh
- medications
- allergies
- family_history
- social_history
- review_of_systems
- physical_exam
- assessment
- differential_diagnosis
- plan
- follow_up
- red_flags
- disposition

---

## Proposed UI Style
Keep V1 simple:
- bootstrap form layout
- label + textarea / input / select
- no tabs in first build
- no JavaScript complexity except basic validation if needed

---

## Proposed Save Rules
- `pid` required
- `encounter` required
- if creating new row:
  - insert into `form_internal_medicine`
  - capture inserted id
  - call `addForm($encounter, 'Internal Medicine', $newid, 'internal_medicine', $pid, $userauthorized);`
- if updating existing row:
  - update row by `id`

---

## Proposed File Structure For V1
Expected future files:

- `interface/forms/internal_medicine/info.txt`
- `interface/forms/internal_medicine/new.php`
- `interface/forms/internal_medicine/save.php` optional later
- `interface/forms/internal_medicine/report.php`
- `interface/forms/internal_medicine/table.sql`

For first V1 build:
- acceptable to keep save logic inside `new.php`

---

## Safety / Scope Rules
Do not add yet:
- AI generation
- auto coding
- medication reconciliation engine
- diagnosis search engine
- ROS smart macros
- physical exam dynamic builder

V1 must first:
- open
- save
- edit
- display

---

## Acceptance Criteria
This draft is correct if it supports:

1. open form from encounter
2. save first record
3. create corresponding row in `forms`
4. reopen saved form
5. update saved form
6. no dependency on LBF

---

## Next File After This
After this draft, create:

`clinic/docs/internal-medicine-report-php-draft-01.md`
