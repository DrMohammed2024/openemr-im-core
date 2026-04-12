# Internal Medicine Final Materialization Plan - 08

## Objective
This document defines the final materialization plan for converting the prepared documentation into the real production OpenEMR source files for the custom Internal Medicine form.

---

## Final Target Directory
`interface/forms/internal_medicine/`

---

## Real Files To Materialize
1. `interface/forms/internal_medicine/table.sql`
2. `interface/forms/internal_medicine/new.php`
3. `interface/forms/internal_medicine/report.php`

---

## Final Source Documents To Materialize From
1. `clinic/docs/internal-medicine-table-sql-copyready-07.md`
2. `clinic/docs/internal-medicine-new-php-copyready-07.md`
3. `clinic/docs/internal-medicine-report-php-copyready-07.md`
4. `clinic/docs/internal-medicine-registry-copyready-07.md`

---

## Materialization Order
### Step 1
Materialize:
`interface/forms/internal_medicine/table.sql`

### Step 2
Materialize:
`interface/forms/internal_medicine/new.php`

### Step 3
Materialize:
`interface/forms/internal_medicine/report.php`

---

## Final Naming Contract
- directory: `internal_medicine`
- display name: `Internal Medicine`
- forms.formdir: `internal_medicine`
- SQL table: `form_internal_medicine`

---

## Final Rules During Materialization
- keep file names exact
- keep directory exact
- keep SQL table exact
- do not convert to LBF
- do not add portal logic
- do not add billing integration
- do not add AI features
- do not add AJAX unless explicitly requested later
- keep implementation V1 minimal and direct

---

## Final Expected Outcome
After materialization, the custom Internal Medicine form should have:
- SQL schema file
- new form data-entry file
- report display file

and be ready for the next integration phase.

---

## Next File
After this, create:

`clinic/docs/internal-medicine-sql-file-output-08.md`
