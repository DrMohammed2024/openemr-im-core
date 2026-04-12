# Internal Medicine report.php Final - 01

## Target Final Path
`interface/forms/internal_medicine/report.php`

---

## Objective
Define the final V1 implementation blueprint for the actual `report.php` file of the custom OpenEMR Internal Medicine encounter form.

---

## Core Responsibilities
The final `report.php` must do the following:

1. load the saved Internal Medicine form record
2. show a readable encounter report view
3. display the stored narrative sections clearly
4. work from OpenEMR form context using the form id
5. fail safely if the record is missing

---

## Required Data Fields to Display
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
The file should correctly use:
- `id` from query string as the custom form record id
- OpenEMR globals/session includes as needed

---

## Display Rule
Use a simple V1 read-only report layout.

Each major field should be shown with:
- clear section title
- stored value underneath

Empty fields may either:
- be hidden
- or show blank text

V1 preference: hide fully empty sections when practical.

---

## Security Rule
The final PHP implementation should include:
- `require_once("../../globals.php");`
- safe handling of `$_GET`
- escaped output
- no unsafe direct rendering

---

## V1 Constraint
Do not include:
- print engine
- advanced styling
- AJAX
- AI logic
- portal logic
- LBF logic
- billing logic

---

## Deliverable Rule
This document defines what the real final `report.php` must contain.

The next step after this document is to generate the actual copy-ready PHP content.

---

## Next File
After this, create:

`clinic/docs/internal-medicine-report-php-actual-01.md`
