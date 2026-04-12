# Internal Medicine First Real Validation Checklist - 10

## Objective
Provide the first real validation checklist for the custom OpenEMR Internal Medicine form after placing the real production files.

---

## Real Directory Under Validation
`interface/forms/internal_medicine/`

---

## Real Files Under Validation
- `interface/forms/internal_medicine/info.txt`
- `interface/forms/internal_medicine/table.sql`
- `interface/forms/internal_medicine/new.php`
- `interface/forms/internal_medicine/report.php`

---

## Validation Checklist

### Directory Validation
- [ ] Confirm directory exists:
  `interface/forms/internal_medicine/`

### File Validation
- [ ] Confirm `info.txt` exists
- [ ] Confirm `table.sql` exists
- [ ] Confirm `new.php` exists
- [ ] Confirm `report.php` exists

### Naming Validation
- [ ] Confirm directory is exactly:
  `internal_medicine`
- [ ] Confirm SQL table is exactly:
  `form_internal_medicine`
- [ ] Confirm form directory name used by `addForm(...)` is exactly:
  `internal_medicine`

### Runtime Validation
- [ ] Confirm form opens inside encounter context
- [ ] Confirm patient context is available
- [ ] Confirm encounter context is available
- [ ] Confirm save action completes without fatal error
- [ ] Confirm data is inserted into `form_internal_medicine`
- [ ] Confirm `addForm(...)` creates forms linkage
- [ ] Confirm report page loads
- [ ] Confirm report page shows saved values

### Scope Validation
- [ ] Non-LBF
- [ ] Non-portal
- [ ] Non-billing
- [ ] No AJAX
- [ ] Minimal V1 direct custom form

---

## Expected Outcome
After this checklist passes, the project should be ready for first practical runtime verification inside OpenEMR.

---

## Next File
After this, create:

`clinic/docs/internal-medicine-runtime-test-commands-11.md`
