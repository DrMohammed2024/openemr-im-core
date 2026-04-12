# Internal Medicine Final Code Output - 05

## Objective
Provide the final all-in-one implementation output definition for the custom OpenEMR Internal Medicine form. This is the last documentation step before materializing the actual real source files.

---

## Final Real Directory
`interface/forms/internal_medicine/`

---

## Final Real Files To Materialize
1. `interface/forms/internal_medicine/table.sql`
2. `interface/forms/internal_medicine/new.php`
3. `interface/forms/internal_medicine/report.php`

---

## Final Authoritative Build Sources
Use the following prepared documents as final source-of-truth inputs:

1. `clinic/docs/internal-medicine-table-sql-final-01.md`
2. `clinic/docs/internal-medicine-new-php-actual-01.md`
3. `clinic/docs/internal-medicine-report-php-actual-01.md`
4. `clinic/docs/internal-medicine-registry-actual-02.md`
5. `clinic/docs/internal-medicine-final-implementation-pack-03.md`
6. `clinic/docs/internal-medicine-real-files-bundle-03.md`
7. `clinic/docs/internal-medicine-production-files-pack-03.md`
8. `clinic/docs/internal-medicine-final-copy-ready-files-04.md`
9. `clinic/docs/internal-medicine-production-code-bundle-04.md`

---

## Final Naming Contract
- **directory**: `internal_medicine`
- **display name**: `Internal Medicine`
- **forms.formdir**: `internal_medicine`
- **SQL table**: `form_internal_medicine`

---

## Final Production Contract

### 1) `table.sql`
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
- include V1 narrative fields:
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
- include useful indexes for:
  - `pid`
  - `encounter`
  - `date`

### 2) `new.php`
Must:
- run inside OpenEMR encounter context
- resolve patient and encounter correctly
- load existing record if editing
- insert new record on first save
- call:
  `addForm($encounter, "Internal Medicine", $newid, "internal_medicine", $pid, $userauthorized);`
- update existing record on later saves
- support:
  - Save
  - Save and Continue
  - Cancel

### 3) `report.php`
Must:
- load saved record by id
- render simple read-only report
- safely escape output
- hide empty sections when practical

---

## Final V1 Scope
### Included
- direct custom form
- SQL table
- encounter save flow
- report display
- OpenEMR forms linkage

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

## Final Delivery Goal
The next step after this document should be the generation of the actual copy-ready source code bundle for:
- `table.sql`
- `new.php`
- `report.php`

---

## Next File
After this, create:

`clinic/docs/internal-medicine-actual-source-files-05.md`
