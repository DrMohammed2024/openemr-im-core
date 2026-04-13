# Internal Medicine Form — Current Status

## Branch
`integration`

## Repository folder
`interface/forms/internal_medicine/`

## Current files
- `info.txt`
- `table.sql`
- `new.php`
- `report.php`
- `view.php`
- `save.php`

## Current continuity state
- GitHub package assembled
- `new.php` repaired and committed
- `report.php` hardened and committed
- `view.php` created
- `save.php` created
- install/test guide added under `docs/`

## Current execution choice
GitHub-only continuation for now

## Next pending runtime phase
When a real OpenEMR instance is available:
1. copy folder into `interface/forms/internal_medicine/`
2. register/install form in OpenEMR
3. test encounter create/save/edit/report
4. inspect deeper integration only if real runtime failure appears
