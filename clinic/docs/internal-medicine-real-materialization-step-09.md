# Internal Medicine Real Materialization Step - 09

## Objective
This document defines the first real materialization step for turning the prepared Internal Medicine documentation into the actual OpenEMR production files.

---

## Final Target Directory
`interface/forms/internal_medicine/`

---

## Real Files To Materialize
1. `interface/forms/internal_medicine/table.sql`
2. `interface/forms/internal_medicine/new.php`
3. `interface/forms/internal_medicine/report.php`

---

## Materialization Source Documents
Use these files as the direct materialization sources:

1. `clinic/docs/internal-medicine-sql-file-output-08.md`
2. `clinic/docs/internal-medicine-new-file-output-08.md`
3. `clinic/docs/internal-medicine-report-file-output-08.md`

---

## Exact Materialization Order

### Step 1
Create the real directory:

`interface/forms/internal_medicine/`

### Step 2
Materialize the real SQL file:

`interface/forms/internal_medicine/table.sql`

### Step 3
Materialize the real form file:

`interface/forms/internal_medicine/new.php`

### Step 4
Materialize the real report file:

`interface/forms/internal_medicine/report.php`

---

## Final Rules
- keep directory exact
- keep filenames exact
- keep `form_internal_medicine` exact
- keep `internal_medicine` as `forms.formdir`
- do not convert to LBF
- do not add portal logic
- do not add billing logic
- do not add AI logic
- do not add AJAX in V1

---

## Expected Outcome
After materialization:
- the real SQL file should exist
- the real `new.php` should exist
- the real `report.php` should exist
- the project will be ready for first placement/testing phase

---

## Next File
After this, create:

`clinic/docs/internal-medicine-real-directory-step-09.md`
