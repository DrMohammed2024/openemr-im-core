# Internal Medicine new.php Final - 01

## Target Final Path
`interface/forms/internal_medicine/new.php`

---

## Objective
Define the final V1 implementation blueprint for the actual `new.php` file of the custom OpenEMR Internal Medicine encounter form.

---

## Core Responsibilities
The final `new.php` must do the following:

1. open as a new encounter form
2. load existing record if form already exists
3. render a simple Internal Medicine form UI
4. save submitted data into `form_internal_medicine`
5. create matching row in OpenEMR `forms` table on first save
6. update existing custom table row on later saves
7. support:
   - Save
   - Save and Continue
   - Cancel

---

## Required Data Fields
The file must handle these fields:

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

---

## Required Context
The file must correctly use current OpenEMR encounter context:
- patient id (`pid`)
- encounter id (`encounter`)
- current authorized user/session
- form id when editing existing form

---

## Save Logic Rule
### First save
- insert into `form_internal_medicine`
- get inserted custom table id
- call `addForm(...)`
- link `formdir = internal_medicine`

### Later save
- update existing row in `form_internal_medicine`
- do not insert duplicate `forms` rows

---

## UI Rule
Use a minimal V1 HTML form layout with:
- text inputs where needed
- textarea for narrative sections
- action buttons at bottom

No advanced JavaScript needed in V1.

---

## Security Rule
The final PHP implementation should include:
- `require_once("../../globals.php");`
- standard OpenEMR form includes as needed
- safe handling of `$_GET`
- safe handling of `$_POST`
- escape output where appropriate

---

## Minimal Layout Suggestion
Suggested section order:
1. Visit Type
2. Clinician Name
3. Chief Complaint
4. HPI
5. PMH
6. PSH
7. Medications
8. Allergies
9. Family History
10. Social History
11. ROS
12. Physical Exam
13. Assessment
14. Differential Diagnosis
15. Plan
16. Follow-up
17. Red Flags
18. Disposition

---

## V1 Constraint
Do not include:
- AI generation
- billing
- portal mode
- LBF logic
- dynamic templates
- print logic
- AJAX helpers

---

## Deliverable Rule
This document defines what the real final `new.php` must contain.

The next step after this document is to generate the actual copy-ready PHP content.

---

## Next File
After this, create:

`clinic/docs/internal-medicine-new-php-actual-01.md`
