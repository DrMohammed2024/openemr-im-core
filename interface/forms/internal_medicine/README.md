# Internal Medicine Form

## Folder
`interface/forms/internal_medicine/`

## Files present in this package
- `README.md`
- `info.txt`
- `new.php`
- `report.php`
- `save.php`
- `table.sql`
- `view.php`

## Purpose
Traditional OpenEMR custom Internal Medicine encounter form package.

## Current structure
- `new.php` = create / edit / save flow
- `report.php` = report rendering
- `view.php` = view wrapper
- `save.php` = compatibility wrapper
- `table.sql` = schema
- `info.txt` = form metadata

## Status
- Structural package review: completed
- GitHub package repair: in progress
- Runtime validation: deferred
- Production readiness: not established

## Important boundary
This package has NOT yet been validated inside a clean working OpenEMR runtime.
Do not treat prior ad-hoc Apache/PHP-CGI experiments in unstable local environments as proof of application correctness.

## Next phase
After GitHub-side package repair is complete, validate in a clean OpenEMR instance:

1. registration
2. encounter open
3. create
4. save
5. edit
6. report/view
7. DB verification
8. error-path verification