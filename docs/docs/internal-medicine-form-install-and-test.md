# Internal Medicine Form — Install and Test

## Target path inside OpenEMR
Place these files in:

`interface/forms/internal_medicine/`

Files:
- `info.txt`
- `table.sql`
- `new.php`
- `report.php`
- `view.php`
- `save.php`

## Current repository source
Repository folder:

`interface/forms/internal_medicine/`

## Installation steps
1. Copy the full folder `interface/forms/internal_medicine/` into the target OpenEMR codebase under:
   - `interface/forms/internal_medicine/`

2. In OpenEMR, go to:
   - Administration
   - Forms
   - Forms Administration

3. Check whether **Internal Medicine** appears in the available custom forms list.

4. Install or enable the form if it is listed.

5. Ensure the database table is created:
   - `form_internal_medicine`

## Runtime expectations
The form currently uses:
- `new.php` for create/edit/save flow
- `report.php` for report rendering
- `view.php` as compatibility wrapper
- `save.php` as compatibility wrapper

## Required database object
Expected table:

`form_internal_medicine`

Source schema file:

`interface/forms/internal_medicine/table.sql`

## Test checklist
### A. Repository/file presence
- Confirm all 6 files exist in `interface/forms/internal_medicine/`

### B. Registration
- Confirm the form appears in Forms Administration
- Confirm it can be enabled or installed

### C. Encounter workflow
- Open a patient encounter
- Add the Internal Medicine form
- Open the form
- Save a new entry
- Reopen the same entry
- Update the same entry
- Open the report view

### D. Security and behavior
- Confirm no obvious PHP fatal error
- Confirm form opens only inside patient/encounter context
- Confirm report does not display deleted rows
- Confirm output is escaped in report rendering

### E. Compatibility notes
- `new.php` currently contains the primary create/edit/save logic
- `save.php` is a compatibility wrapper
- `view.php` is a compatibility wrapper
- If runtime integration fails, inspect OpenEMR branch-specific form registration behavior before changing core files

## Known current status
Current GitHub package contains:
- `info.txt`
- `table.sql`
- `new.php`
- `report.php`
- `view.php`
- `save.php`

## Next runtime gate
Before any core OpenEMR patching:
1. deploy these files into a real OpenEMR instance
2. test registration
3. test encounter create/save/edit/report
4. only patch deeper integration points if a real failure is observed
