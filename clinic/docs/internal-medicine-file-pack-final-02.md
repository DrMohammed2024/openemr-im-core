# Internal Medicine File Pack Final - 02

## Objective
Assemble the final V1 implementation file pack for the custom OpenEMR Internal Medicine form.

---

## Final Intended Real Files
The V1 implementation should produce these actual files:

1. `interface/forms/internal_medicine/new.php`
2. `interface/forms/internal_medicine/report.php`
3. `interface/forms/internal_medicine/table.sql`

---

## Current Source Docs Already Prepared
These documents now define the implementation:

1. `clinic/docs/internal-medicine-table-sql-final-01.md`
2. `clinic/docs/internal-medicine-new-php-final-01.md`
3. `clinic/docs/internal-medicine-new-php-actual-01.md`
4. `clinic/docs/internal-medicine-report-php-final-01.md`
5. `clinic/docs/internal-medicine-report-php-actual-01.md`

---

## V1 Scope Summary
### Included
- custom SQL table
- custom encounter new form
- custom report form
- forms table linkage through `addForm(...)`
- minimal OpenEMR-compatible workflow

### Excluded
- LBF
- portal support
- billing logic
- print engine
- AI generation
- advanced JavaScript
- AJAX helpers
- registry packaging in this step

---

## Final Build Order
1. finalize file pack spec
2. create registry spec
3. create actual registry draft
4. create final copy-ready implementation bundle
5. then build the real OpenEMR files

---

## V1 Real File Content Summary

### 1) `table.sql`
Creates table:
- `form_internal_medicine`

Main columns:
- context columns: `pid`, `encounter`, `date`, `user`, `groupname`, `authorized`, `activity`, `deleted`
- clinical columns:
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

### 2) `new.php`
Responsibilities:
- load encounter context
- load existing saved record if present
- render minimal HTML form
- save new record into custom table
- call `addForm(...)` on first save
- update existing record on later saves

### 3) `report.php`
Responsibilities:
- load saved record by id
- display read-only report
- hide empty sections when practical
- safely escape output

---

## Expected Real Directory
```text
interface/forms/internal_medicine/
