# Internal Medicine Real Directory Step - 09

## Objective
Define the exact real directory placement step for the custom OpenEMR Internal Medicine form.

---

## Final Real Directory
`interface/forms/internal_medicine/`

---

## Real Files Expected In Directory
1. `interface/forms/internal_medicine/info.txt`
2. `interface/forms/internal_medicine/table.sql`
3. `interface/forms/internal_medicine/new.php`
4. `interface/forms/internal_medicine/report.php`

---

## Placement Rule
All V1 real source files must be placed under:

`interface/forms/internal_medicine/`

Do not place them under:
- `interface/forms/LBF/`
- `interface/forms/clinical_notes/`
- any custom plugin directory
- any portal-specific directory

---

## Naming Rule
Keep exact names:

- `info.txt`
- `table.sql`
- `new.php`
- `report.php`

Keep exact directory:

- `internal_medicine`

---

## V1 Directory Rule
This directory is a standard custom encounter form directory.

It must remain:
- simple
- direct
- non-LBF
- non-portal
- non-billing
- ready for first encounter workflow testing

---

## Expected Outcome
After this step, the project is ready to place or copy the real source files into:

`interface/forms/internal_medicine/`

---

## Next File
After this, create:

`clinic/docs/internal-medicine-real-file-placement-checklist-09.md`
