# Internal Medicine Registry Final - 02

## Objective
Define the final V1 registry requirements for registering the custom OpenEMR Internal Medicine form.

---

## Target Purpose
The custom form must become discoverable and loadable from the OpenEMR encounter form workflow.

That requires a valid registry definition aligned with:

- form directory name
- display name
- category
- state
- sql file
- report file
- new file

---

## Final Intended Form Directory
`internal_medicine`

---

## Final Intended Display Name
`Internal Medicine`

---

## Final Intended Actual File Set
Inside:

`interface/forms/internal_medicine/`

Expected files:
1. `new.php`
2. `report.php`
3. `table.sql`

---

## Registry Requirements
The final registry entry must support:

- loading from encounter form workflow
- opening `new.php`
- using `report.php`
- associating SQL install file `table.sql`
- matching directory name exactly:
  `internal_medicine`

---

## Required Final Registry Values
### Directory
`internal_medicine`

### Form Name
`Internal Medicine`

### State
`1`

### SQL File
`table.sql`

### New File
`new.php`

### Report File
`report.php`

---

## V1 Registry Design Rule
Keep registry simple for V1.

Do not add:
- portal complexity
- special ACL complexity
- LBF behavior
- custom package behavior

---

## Naming Consistency Rule
These names must remain aligned across all implementation files:

- directory: `internal_medicine`
- form title: `Internal Medicine`
- forms table `formdir`: `internal_medicine`

---

## Build Rule
After this registry spec, the next step is to create the actual registry draft content or exact insertion format needed for implementation.

---

## Next File
After this, create:

`clinic/docs/internal-medicine-registry-actual-02.md`
