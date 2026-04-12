# Internal Medicine Real Files Bundle - 03

## Objective
Prepare the final real-files bundle definition so the next step can generate the actual production-ready OpenEMR files for the custom Internal Medicine form.

---

## Final Real Target Directory
`interface/forms/internal_medicine/`

---

## Final Real Files To Generate
1. `interface/forms/internal_medicine/new.php`
2. `interface/forms/internal_medicine/report.php`
3. `interface/forms/internal_medicine/table.sql`

---

## Final Source Documents To Use
Use these already-prepared docs as the authoritative build source:

1. `clinic/docs/internal-medicine-table-sql-final-01.md`
2. `clinic/docs/internal-medicine-new-php-actual-01.md`
3. `clinic/docs/internal-medicine-report-php-actual-01.md`
4. `clinic/docs/internal-medicine-registry-actual-02.md`
5. `clinic/docs/internal-medicine-final-implementation-pack-03.md`

---

## Required Final Naming
### Directory
`internal_medicine`

### Display Name
`Internal Medicine`

### forms table formdir
`internal_medicine`

### SQL table name
`form_internal_medicine`

---

## Final Runtime Intent

### `new.php`
- opens in encounter context
- reads patient + encounter from OpenEMR runtime context
- loads existing saved data if record exists
- inserts new record on first save
- calls:
  `addForm($encounter, "Internal Medicine", $newid, "internal_medicine", $pid, $userauthorized);`
- updates existing record on subsequent saves
- supports:
  - Save
  - Save and Continue
  - Cancel

### `report.php`
- loads saved record by id
- displays read-only report
- safely escapes output
- hides empty fields when practical

### `table.sql`
- creates `form_internal_medicine`
- includes V1 Internal Medicine fields
- includes useful indexes

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

## V1 Build Decision
Proceed as:
- direct custom OpenEMR form
- non-LBF
- minimal implementation
- fastest valid internal workflow

---

## Out of Scope For This Bundle
- portal support
- billing integration
- AI generation
- print flow
- advanced JavaScript
- AJAX
- plugin extensions
- template engine complexity

---

## Ready State
After this bundle, the next step should be to generate the actual final copy-ready file contents in one implementation pack.

---

## Next File
After this, create:

`clinic/docs/internal-medicine-production-files-pack-03.md`
