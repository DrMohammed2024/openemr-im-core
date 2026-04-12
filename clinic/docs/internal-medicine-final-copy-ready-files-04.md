# Internal Medicine Final Copy-Ready Files - 04

## Objective
Lock the project into the final copy-ready stage before generating the actual production source files for the custom OpenEMR Internal Medicine form.

---

## Final Real Production Directory
`interface/forms/internal_medicine/`

---

## Final Production Files To Materialize
1. `interface/forms/internal_medicine/table.sql`
2. `interface/forms/internal_medicine/new.php`
3. `interface/forms/internal_medicine/report.php`

---

## Final Source of Truth
Use these documents as the final authoritative source set:

1. `clinic/docs/internal-medicine-table-sql-final-01.md`
2. `clinic/docs/internal-medicine-new-php-actual-01.md`
3. `clinic/docs/internal-medicine-report-php-actual-01.md`
4. `clinic/docs/internal-medicine-registry-actual-02.md`
5. `clinic/docs/internal-medicine-final-implementation-pack-03.md`
6. `clinic/docs/internal-medicine-real-files-bundle-03.md`
7. `clinic/docs/internal-medicine-production-files-pack-03.md`

---

## Final Naming Contract
- **directory**: `internal_medicine`
- **display name**: `Internal Medicine`
- **forms.formdir**: `internal_medicine`
- **SQL table**: `form_internal_medicine`

---

## Final V1 Functional Contract

### `table.sql`
Must create:
- `form_internal_medicine`

Must include:
- context columns
- V1 Internal Medicine narrative fields
- indexes for `pid`, `encounter`, `date`

### `new.php`
Must:
- run inside encounter context
- resolve patient and encounter safely
- load existing record if editing
- insert a new record on first save
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
- display read-only report
- safely escape output
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

## V1 Constraints
Do not add in this phase:
- LBF
- portal logic
- billing integration
- print engine
- AI logic
- AJAX
- advanced JS dependencies
- plugin-specific behavior

---

## Build Readiness Statement
After this file, the next step should generate the final real source code bundle in a single implementation-oriented document.

---

## Next File
After this, create:

`clinic/docs/internal-medicine-production-code-bundle-04.md`
