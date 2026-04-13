# Internal Medicine Form

## Folder
`interface/forms/internal_medicine/`

## Files
- `info.txt`
- `table.sql`
- `new.php`
- `report.php`
- `view.php`
- `save.php`

## Purpose
Custom OpenEMR Internal Medicine encounter form package.

## Current behavior
- `new.php` = create / edit / save flow
- `report.php` = report rendering
- `view.php` = compatibility wrapper
- `save.php` = compatibility wrapper
- `table.sql` = schema
- `info.txt` = form label metadata

## Related docs
- `docs/internal-medicine-form-install-and-test.md`
- `docs/internal-medicine-form-status.md`
- `docs/internal-medicine-form-direct-links.md`

## Next runtime phase
Deploy this folder into a real OpenEMR instance and test:
1. registration
2. encounter open
3. save
4. edit
5. report
