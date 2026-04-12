# Internal Medicine Runtime Test Commands - 11

## Objective
Define the first practical runtime test commands and execution sequence for the custom OpenEMR Internal Medicine form.

---

## Real Directory
`interface/forms/internal_medicine/`

---

## Real Files Expected
- `interface/forms/internal_medicine/info.txt`
- `interface/forms/internal_medicine/table.sql`
- `interface/forms/internal_medicine/new.php`
- `interface/forms/internal_medicine/report.php`

---

## Runtime Test Command Intent
The first runtime test must confirm:

1. directory exists
2. files exist
3. SQL table is available
4. form can open
5. form can save
6. report can display saved record

---

## Runtime Test Sequence

### Step 1
Verify real files are present under:

`interface/forms/internal_medicine/`

### Step 2
Verify SQL target table name is:

`form_internal_medicine`

### Step 3
Open OpenEMR in browser.

### Step 4
Open a patient encounter.

### Step 5
Open the custom form:

`Internal Medicine`

### Step 6
Enter test data into these fields:
- visit type
- clinician name
- chief complaint
- HPI
- assessment
- plan
- disposition

### Step 7
Click:

`Save`

### Step 8
Confirm:
- no fatal PHP error
- no missing include error
- no SQL missing table error

### Step 9
Verify a new row exists in:

`form_internal_medicine`

### Step 10
Verify a matching linkage row exists in:

`forms`

with:
- `formdir = internal_medicine`

### Step 11
Open the report page for the saved record.

### Step 12
Confirm the saved values are displayed correctly.

---

## Expected Runtime Pass Result
- form opens
- save completes
- report loads
- saved values are visible
- no fatal runtime errors

---

## Common Runtime Failure Checks
- wrong directory
- wrong file names
- wrong table name
- bad include path
- missing `addForm(...)`
- missing encounter context
- bad redirect after save
- report cannot find saved record

---

## Next File
After this, create:

`clinic/docs/internal-medicine-real-runtime-smoke-test-11.md`
