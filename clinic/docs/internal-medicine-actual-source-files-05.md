# Internal Medicine Actual Source Files - 05

## Objective
Define the actual final source-file generation step for the custom OpenEMR Internal Medicine form. This step prepares the project to output the real copy-ready production source code files.

---

## Final Real Directory
`interface/forms/internal_medicine/`

---

## Actual Real Files To Generate
1. `interface/forms/internal_medicine/table.sql`
2. `interface/forms/internal_medicine/new.php`
3. `interface/forms/internal_medicine/report.php`

---

## Final Source Documents
Use these as the final authoritative source set:

1. `clinic/docs/internal-medicine-table-sql-final-01.md`
2. `clinic/docs/internal-medicine-new-php-actual-01.md`
3. `clinic/docs/internal-medicine-report-php-actual-01.md`
4. `clinic/docs/internal-medicine-registry-actual-02.md`
5. `clinic/docs/internal-medicine-final-implementation-pack-03.md`
6. `clinic/docs/internal-medicine-real-files-bundle-03.md`
7. `clinic/docs/internal-medicine-production-files-pack-03.md`
8. `clinic/docs/internal-medicine-final-copy-ready-files-04.md`
9. `clinic/docs/internal-medicine-production-code-bundle-04.md`
10. `clinic/docs/internal-medicine-final-code-output-05.md`

---

## Final Naming Contract
- **directory**: `internal_medicine`
- **display name**: `Internal Medicine`
- **forms.formdir**: `internal_medicine`
- **SQL table**: `form_internal_medicine`

---

## Actual Source File Contract

### `table.sql`
Must:
- create table `form_internal_medicine`
- include context columns:
  - `id`
  - `pid`
  - `encounter`
  - `date`
  - `user`
  - `groupname`
  - `authorized`
  - `activity`
  - `deleted`
- include V1 Internal Medicine narrative fields:
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
- include indexes for:
  - `pid`
  - `encounter`
  - `date`

### `new.php`
Must:
- run in OpenEMR encounter context
- resolve patient and encounter correctly
- load existing record on edit
- insert new record on first save
- call:
  `addForm($encounter, "Internal Medicine", $newid, "internal_medicine", $pid, $userauthorized);`
- update existing record on later saves
- provide:
  - Save
  - Save and Continue
  - Cancel

### `report.php`
Must:
- load saved record by id
- display a simple safe read-only report
- escape output correctly
- hide empty sections when practical

---

## Final V1 Scope
### Included
- direct custom OpenEMR form
- SQL schema
- new form save flow
- report display
- forms table linkage

### Excluded
- LBF
- portal support
- billing integration
- print engine
- AI generation
- AJAX
- advanced JS
- plugin extensions

---

## Ready State
After this file, the next step should generate the final code-delivery document containing the real copy-ready contents of:
- `table.sql`
- `new.php`
- `report.php`

---

## Next File
After this, create:

`clinic/docs/internal-medicine-deliverable-code-pack-06.md`
