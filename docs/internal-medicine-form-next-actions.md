# Internal Medicine Form — Next Actions

## Completed on GitHub
- Form folder assembled under `interface/forms/internal_medicine/`
- `new.php` repaired
- `report.php` updated
- `view.php` created
- `save.php` created
- install/test guide created
- status file created
- direct links file created
- folder README created

## Next runtime actions
1. Copy `interface/forms/internal_medicine/` into a real OpenEMR instance
2. Open Forms Administration
3. Check whether `Internal Medicine` appears
4. Install/enable the form
5. Verify table creation for `form_internal_medicine`
6. Test encounter open
7. Test save
8. Test reopen/edit
9. Test report rendering
10. Only inspect deeper integration if a real runtime failure occurs

## Blocking item
A real OpenEMR runtime environment is still needed for execution testing.
