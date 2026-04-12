# Internal Medicine Production Code Bundle - 04

## Objective
Prepare the final production code bundle definition so the next step can generate the actual real source code files for the custom OpenEMR Internal Medicine form without ambiguity.

---

## Final Real Production Directory
`interface/forms/internal_medicine/`

---

## Final Production Source Files
1. `interface/forms/internal_medicine/table.sql`
2. `interface/forms/internal_medicine/new.php`
3. `interface/forms/internal_medicine/report.php`

---

## Final Source Documents To Build From
Use these as the final authoritative references:

1. `clinic/docs/internal-medicine-table-sql-final-01.md`
2. `clinic/docs/internal-medicine-new-php-actual-01.md`
3. `clinic/docs/internal-medicine-report-php-actual-01.md`
4. `clinic/docs/internal-medicine-registry-actual-02.md`
5. `clinic/docs/internal-medicine-final-implementation-pack-03.md`
6. `clinic/docs/internal-medicine-real-files-bundle-03.md`
7. `clinic/docs/internal-medicine-production-files-pack-03.md`
8. `clinic/docs/internal-medicine-final-copy-ready-files-04.md`

---

## Final Naming Contract
- **directory**: `internal_medicine`
- **display name**: `Internal Medicine`
- **forms.formdir**: `internal_medicine`
- **SQL table**: `form_internal_medicine`

---

## Final Production Contract

### `table.sql`
Must:
- create `form_internal_medicine`
- include context columns
- include final V1 Internal Medicine narrative fields
- include useful indexes for:
  - `pid`
  - `encounter`
  - `date`

### `new.php`
Must:
- run inside OpenEMR encounter context
- resolve patient and encounter correctly
- load existing saved record if editing
- insert a new record on first save
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
- render a simple read-only report
- escape output safely
- hide empty sections when practical

---

## Final V1 Data Fields
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

## Out Of Scope In This Phase
- LBF
- portal logic
- billing integration
- print engine
- AI generation
- AJAX
- advanced JS
- plugin extensions

---

## Build Readiness
After this file, the next step should be to create the actual final all-in-one implementation output that contains the copy-ready real contents for:
- `table.sql`
- `new.php`
- `report.php`

---

## Next File
After this, create:

`clinic/docs/internal-medicine-final-code-output-05.md`
