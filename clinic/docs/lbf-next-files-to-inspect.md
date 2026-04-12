# LBF Next Files To Inspect

## Purpose
Define the next file-level inspection targets inside `interface/forms/LBF` after the first review of `new.php` and `view.php`.

## Already Reviewed
- `new.php`
- `view.php`

## Current Interpretation
LBF appears to be the strongest implementation-path candidate for the first structured Internal Medicine encounter slice.

## Next Inspection Priorities
1. identify all top-level files inside `interface/forms/LBF`
2. locate any save or persistence-related logic
3. locate form-definition or field-structure logic
4. locate any template or rendering support
5. identify the safest low-risk insertion path

## What We Need To Learn Next
- where field definitions come from
- how data is saved
- how data is rendered back
- whether LBF is metadata-driven or code-driven
- whether a new structured Internal Medicine form can be added with minimal core disruption

## Expected Output
- shortlist of next files to inspect
- recommendation on first low-risk implementation path
- risk notes
- whether LBF is sufficient on its own for first-slice implementation

## Rule
No code modification until file-level inspection targets are documented.
