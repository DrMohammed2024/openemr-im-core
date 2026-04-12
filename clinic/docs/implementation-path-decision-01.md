# Implementation Path Decision 01

## Decision
The preferred first implementation path for the structured Internal Medicine encounter foundation will be based on `interface/forms/LBF`.

## Why LBF Was Chosen
LBF appears to provide a more general structured-form framework than `clinical_notes`, which makes it a better fit for the first Internal Medicine slice.

## Supporting Observations
- `LBF/new.php` appears framework-oriented rather than narrowly topic-specific
- `LBF/view.php` reuses `new.php`, suggesting a unified form/view pattern
- LBF appears more suitable for structured field composition and long-term maintainability

## Role Of clinical_notes
`clinical_notes` remains useful as a reference implementation pattern for:
- expected workflow shape
- save/view/report behavior
- possible naming and UX ideas

But it is not the preferred primary implementation base.

## Current Recommendation
Use:
- `LBF` as the primary implementation-path candidate
- `clinical_notes` as a secondary reference pattern

## What Not To Do Yet
- no code modification
- no database modification
- no form cloning yet
- no registration changes
- no production deployment assumptions

## Immediate Next Step
Inspect the top-level contents of:
- `interface/forms/LBF`
and identify the next most important files after:
- `new.php`
- `view.php`

## Rule
Decision is implementation-guiding but still inspection-driven until file-level targets are fully documented.
