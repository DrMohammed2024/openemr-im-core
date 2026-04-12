# Internal Medicine Actual Build Step - 01

## Objective
Move from planning documents to actual file creation for the OpenEMR custom Internal Medicine encounter form.

Target final directory:

`interface/forms/internal_medicine/`

---

## Decision
Start actual build now.

Do not create more planning documents before starting the real form files.

---

## Actual Build Sequence

### Step 1
Create final directory target plan for:

`interface/forms/internal_medicine/`

### Step 2
Create real file content for:

- `info.txt`
- `table.sql`
- `new.php`
- `report.php`

### Step 3
Place those files into the correct OpenEMR form directory.

### Step 4
Run first encounter workflow validation:
- open new form
- save form
- reopen saved form
- display report

---

## Immediate Implementation Priority
Build files in this exact order:

1. `info.txt`
2. `table.sql`
3. `new.php`
4. `report.php`

---

## V1 Execution Rule
Use minimal working implementation only.

Avoid adding:
- AI logic
- extra helper files
- billing integration
- portal logic
- LBF dependency
- JavaScript-heavy behavior
- advanced styling

---

## Required Outcome
At the end of the first actual build pass, OpenEMR should have a basic but working custom Internal Medicine encounter form.

---

## Acceptance Criteria
This build step is complete if it directly leads to creation of the real production-target files under:

`interface/forms/internal_medicine/`

---

## Next File After This
After this step file, create:

`clinic/docs/internal-medicine-info-txt-final-01.md`
