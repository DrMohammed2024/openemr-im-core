# Internal Medicine Form — Runtime Deferred

## Current decision
Runtime testing is deferred.

## Reason
The current local Termux Apache/PHP-CGI environment is not sufficiently stable for reliable OpenEMR execution testing.

## What is completed
- Internal Medicine form package assembled in:
  - `interface/forms/internal_medicine/`
- Core files present:
  - `info.txt`
  - `table.sql`
  - `new.php`
  - `report.php`
  - `view.php`
  - `save.php`
  - `README.md`
- Supporting docs created in `docs/`

## What is not yet validated
- Real OpenEMR runtime execution
- Form registration in Forms Administration
- Database creation via actual runtime install path
- Create/edit/save/report behavior inside a working OpenEMR instance

## Next approved path
Use a clean OpenEMR runtime environment later, then test the package there.

## Status
GitHub/package work continues.
Runtime work is paused.
