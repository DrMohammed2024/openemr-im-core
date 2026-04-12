# LBF Field Definition Source - 01

## Key Finding
The LBF form engine is metadata-driven.

## Confirmed Source
Field definitions are loaded from the `layout_options` table.

## Evidence
In `interface/forms/LBF/new.php`, the form processing logic queries:

`SELECT * FROM layout_options WHERE form_id = ? ... ORDER BY group_id, seq`

Then loops through returned rows and uses fields such as:
- `field_id`
- `data_type`
- `source`

## Interpretation
This confirms that LBF is not primarily a narrowly hardcoded form. It is a reusable structured form engine driven by metadata in `layout_options`.

## Implication
The first Internal Medicine structured encounter slice should be designed as an LBF-based form definition strategy rather than as an uncontrolled direct code modification in `new.php`.

## What This Means For Build Strategy
Preferred next path:
1. define the Internal Medicine form identity
2. define the minimum field set
3. define how those fields should exist in `layout_options`
4. inspect how LBF forms are registered and discovered
5. delay direct code modification unless needed

## Current Recommendation
Proceed with registration/discovery inspection for LBF-compatible forms before any code modification.

## Rule
No direct patching of `LBF/new.php` should be the first implementation move for the first Internal Medicine slice.
