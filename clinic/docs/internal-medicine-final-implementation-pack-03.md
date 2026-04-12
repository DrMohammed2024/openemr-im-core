# Internal Medicine Final Implementation Pack - 03

## Objective
Assemble the final implementation-ready package definition for the custom OpenEMR Internal Medicine form so the next step can generate the real production files.

---

## Final Intended Real Directory
`interface/forms/internal_medicine/`

---

## Final Intended Real Files
1. `interface/forms/internal_medicine/new.php`
2. `interface/forms/internal_medicine/report.php`
3. `interface/forms/internal_medicine/table.sql`

---

## Registry Alignment
The implementation must remain aligned with:

- **directory**: `internal_medicine`
- **display name**: `Internal Medicine`
- **new file**: `new.php`
- **report file**: `report.php`
- **sql file**: `table.sql`

---

## Final V1 Data Fields
The real implementation package must support these fields:

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

## Final V1 Runtime Behavior

### `new.php`
Must:
- open from encounter context
- detect current patient and encounter
- load existing record when editing
- insert new record on first save
- call:
  `addForm($encounter, "Internal Medicine", $newid, "internal_medicine", $pid, $userauthorized);`
- update existing record on subsequent saves
- support:
  - Save
  - Save and Continue
  - Cancel

### `report.php`
Must:
- load record by form id
- display read-only stored values
- hide empty sections when practical
- safely escape output

### `table.sql`
Must:
- create table `form_internal_medicine`
- include context columns
- include core Internal Medicine narrative fields
- include useful indexes for `pid`, `encounter`, `date`

---

## V1 Non-Goals
Do not include in this phase:
- LBF
- portal support
- AI generation
- billing integration
- print engine
- AJAX
- advanced JS
- plugin extensions
- template engine complexity

---

## Practical Build Decision
The project should continue as a **direct custom OpenEMR form**.

Reason:
- simplest path
- fastest path
- lowest ambiguity
- easiest first test inside encounter workflow

---

## Ready-for-Build Status
At this point the documentation set is sufficient to start generating the real implementation files.

---

## Next File
After this, create:

`clinic/docs/internal-medicine-real-files-bundle-03.md`
