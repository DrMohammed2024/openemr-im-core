# Internal Medicine Deliverable Code Pack - 06

## Objective
Prepare the final deliverable code-pack definition for the custom OpenEMR Internal Medicine form. This is the last packaging step before generating the actual copy-ready production code files.

---

## Final Real Directory
`interface/forms/internal_medicine/`

---

## Final Deliverable Files
1. `interface/forms/internal_medicine/table.sql`
2. `interface/forms/internal_medicine/new.php`
3. `interface/forms/internal_medicine/report.php`

---

## Final Source Documents To Use
Use these as the final authoritative references:

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
11. `clinic/docs/internal-medicine-actual-source-files-05.md`

---

## Final Naming Contract
- **directory**: `internal_medicine`
- **display name**: `Internal Medicine`
- **forms.formdir**: `internal_medicine`
- **SQL table**: `form_internal_medicine`

---

## Final Deliverable Contract

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
- include V1 Internal Medicine fields:
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
- run inside OpenEMR encounter context
- resolve `pid` and `encounter` correctly
- load existing record on edit
- insert new record on first save
- call:
  `addForm($encounter, "Internal Medicine", $newid, "internal_medicine", $pid, $userauthorized);`
- update existing record on later saves
- support:
  - Save
  - Save and Continue
  - Cancel

### `report.php`
Must:
- load saved record by id
- display read-only report safely
- escape output correctly
- hide empty sections when practical

---

## Final V1 Scope
### Included
- direct custom OpenEMR form
- SQL schema
- encounter save flow
- report display
- OpenEMR forms linkage

### Excluded
- LBF
- portal logic
- billing integration
- print engine
- AI logic
- AJAX
- advanced JS
- plugin extensions

---

## Delivery Readiness
After this file, the project is ready for the actual final code-generation document that should contain the real copy-ready contents of:
- `table.sql`
- `new.php`
- `report.php`

---

## Next File
After this, create:

`clinic/docs/internal-medicine-final-source-code-06.md`
