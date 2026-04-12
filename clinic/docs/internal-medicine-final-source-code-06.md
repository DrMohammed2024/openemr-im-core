# Internal Medicine Final Source Code - 06

## Objective
This document marks the final source-code stage for the custom OpenEMR Internal Medicine form. It defines the exact final code deliverables that must now be materialized as real production files.

---

## Final Real Directory
`interface/forms/internal_medicine/`

---

## Final Real Production Files
1. `interface/forms/internal_medicine/table.sql`
2. `interface/forms/internal_medicine/new.php`
3. `interface/forms/internal_medicine/report.php`

---

## Final Authoritative Source Set
Use the following documents as the final source-of-truth references:

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
12. `clinic/docs/internal-medicine-deliverable-code-pack-06.md`

---

## Final Naming Contract
- **directory**: `internal_medicine`
- **display name**: `Internal Medicine`
- **forms.formdir**: `internal_medicine`
- **SQL table**: `form_internal_medicine`

---

## Final Code Contract

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
- run in OpenEMR encounter context
- resolve patient and encounter correctly
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
- render simple read-only report
- escape output safely
- hide empty sections when practical

---

## Final V1 Scope
### Included
- direct custom OpenEMR form
- SQL schema
- encounter save flow
- report display
- forms linkage

### Excluded
- LBF
- portal logic
- billing integration
- print engine
- AI generation
- AJAX
- advanced JS
- plugin extensions

---

## Final Ready State
After this file, the next step should be to create the first actual copy-ready real code file output, beginning with the SQL file.

---

## Next File
After this, create:

`clinic/docs/internal-medicine-table-sql-copyready-07.md`
