# Inspection Decision 01

## Decision
The first implementation-path candidate for the structured Internal Medicine encounter foundation will be evaluated through `interface/forms/clinical_notes`.

## Why This Was Chosen
`clinical_notes` appears to provide a more complete existing form pattern than the other first-pass candidates reviewed.

## Evidence From Initial Inspection
Visible components include:
- `new.php`
- `save.php`
- `report.php`
- `view.php`
- `table.sql`
- `clinical-notes.js`
- `templates/`
- `info.txt`

This suggests an existing workflow that includes data entry, save behavior, rendering, reporting, templates, and likely form metadata.

## Secondary Candidates
- `interface/forms/clinic_note`
- `interface/forms/LBF`

## Current Recommendation
Inspect `clinical_notes` more deeply before deciding whether:
- to extend a similar pattern
- to clone/adapt a form pattern
- or to move to LBF as a safer structured framework

## What We Are Not Doing Yet
- no code modification
- no database change
- no cloning of form code
- no form registration
- no AI integration

## Immediate Next Step
Inspect the contents of:
- `info.txt`
- `new.php`
- `save.php`
- `table.sql`
- `templates/`

## Rule
Decision remains provisional until the above files are reviewed.
