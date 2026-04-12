# Internal Medicine Production Files Pack - 03

## Objective
Prepare the final production-ready file pack definition for the custom OpenEMR Internal Medicine form so the next step can generate the real final code files without ambiguity.

---

## Final Production Target Directory
`interface/forms/internal_medicine/`

---

## Final Production Files
1. `interface/forms/internal_medicine/new.php`
2. `interface/forms/internal_medicine/report.php`
3. `interface/forms/internal_medicine/table.sql`

---

## Canonical Source Documents
Use these as the final authoritative sources:

1. `clinic/docs/internal-medicine-table-sql-final-01.md`
2. `clinic/docs/internal-medicine-new-php-actual-01.md`
3. `clinic/docs/internal-medicine-report-php-actual-01.md`
4. `clinic/docs/internal-medicine-registry-actual-02.md`
5. `clinic/docs/internal-medicine-final-implementation-pack-03.md`
6. `clinic/docs/internal-medicine-real-files-bundle-03.md`

---

## Final Naming Contract
### Directory
`internal_medicine`

### Display Name
`Internal Medicine`

### SQL Table
`form_internal_medicine`

### forms.formdir
`internal_medicine`

---

## Final Production Behavior

### new.php
Must:
- run inside OpenEMR encounter context
- resolve `pid` and `encounter`
- load existing record when editing
- insert on first save
- call:
  `addForm($encounter, "Internal Medicine", $newid, "internal_medicine", $pid, $userauthorized);`
- update on later saves
- support:
  - Save
  - Save and Continue
  - Cancel

### report.php
Must:
- load saved record by id
- display a clean read-only report
- safely escape output
- hide empty sections when practical

### table.sql
Must:
- create table `form_internal_medicine`
- include core context columns
- include all V1 narrative fields
- include indexes for:
  - `pid`
  - `encounter`
  - `date`

---

## Final V1 Fields
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

## Production Constraints
Keep V1:
- simple
- direct
- non-LBF
- non-portal
- non-billing
- no AI generation
- no print engine
- no AJAX
- no advanced JS dependencies

---

## Production Readiness Statement
After this file, the documentation should be sufficient to generate the final real copy-ready source code files directly.

---

## Next File
After this, create:

`clinic/docs/internal-medicine-final-copy-ready-files-04.md`
