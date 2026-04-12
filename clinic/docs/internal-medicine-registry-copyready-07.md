# Internal Medicine registry Copyready - 07

## Objective
This file contains the final copy-ready registry definition for the custom OpenEMR Internal Medicine form.

---

## Final Registry Intent
Register the custom OpenEMR form so it appears as a standard encounter form using:

- **directory**: `internal_medicine`
- **name**: `Internal Medicine`
- **state**: `1`

---

## Final Registry Mapping
### Directory
`internal_medicine`

### Display Name
`Internal Medicine`

### forms.formdir
`internal_medicine`

### SQL Table
`form_internal_medicine`

---

## Final Copy-Ready Registry Definition
Use the form as a standard custom encounter form under:

`interface/forms/internal_medicine/`

Expected core files:
1. `new.php`
2. `report.php`
3. `table.sql`

---

## Final Notes
- keep directory name exactly:
  `internal_medicine`
- keep display name exactly:
  `Internal Medicine`
- keep table name exactly:
  `form_internal_medicine`
- use this registry definition as the final V1 reference
- no LBF
- no portal logic
- no plugin-specific behavior

---

## Next File
After this, create:

`clinic/docs/internal-medicine-final-materialization-plan-08.md`
