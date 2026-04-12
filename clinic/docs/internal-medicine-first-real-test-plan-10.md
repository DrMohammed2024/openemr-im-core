# Internal Medicine First Real Test Plan - 10

## Objective
Define the first real testing plan for the custom OpenEMR Internal Medicine form after placing the real production files.

---

## Real Directory Under Test
`interface/forms/internal_medicine/`

---

## Real Files Under Test
1. `interface/forms/internal_medicine/info.txt`
2. `interface/forms/internal_medicine/table.sql`
3. `interface/forms/internal_medicine/new.php`
4. `interface/forms/internal_medicine/report.php`

---

## First Real Test Goals
- confirm the form directory exists
- confirm the form files exist
- confirm the SQL schema is ready
- confirm the new form page can load
- confirm data can be saved
- confirm the report page can load
- confirm the saved data is displayed

---

## Basic Test Sequence

### Step 1
Confirm these files exist:
- `interface/forms/internal_medicine/info.txt`
- `interface/forms/internal_medicine/table.sql`
- `interface/forms/internal_medicine/new.php`
- `interface/forms/internal_medicine/report.php`

### Step 2
Confirm the SQL table target is:
- `form_internal_medicine`

### Step 3
Open the new form page through OpenEMR encounter flow.

### Step 4
Enter sample values in the main fields:
- visit type
- clinician name
- chief complaint
- HPI
- assessment
- plan
- disposition

### Step 5
Press:
- Save

### Step 6
Confirm a row is created in:
- `form_internal_medicine`

### Step 7
Confirm a matching row is added through:
- `addForm(...)`
- form directory:
  `internal_medicine`

### Step 8
Open the report page and confirm saved values display correctly.

---

## Expected First-Pass Outcome
- form loads
- save works
- report works
- no fatal PHP error
- no missing-table error
- no missing-file error

---

## Common Failure Targets To Check
- wrong directory name
- wrong table name
- missing `addForm(...)`
- missing encounter context
- invalid include paths
- report not finding saved record
- SQL table not yet created

---

## Next File
After this, create:

`clinic/docs/internal-medicine-first-real-validation-checklist-10.md`
