# Internal Medicine Form Identity - 01

## Decision
The first Internal Medicine structured encounter slice will be implemented as an LBF-based form.

## Proposed Form Identity
- formdir / formname candidate: `LBFim_internal_medicine`

## Why This Naming Style
- preserves clear LBF identity
- makes the form purpose explicit
- separates the form from generic or legacy note forms
- supports future clinic-owned structured Internal Medicine workflows

## Confirmed Technical Basis
- `LBF/new.php` reads field definitions from `layout_options`
- `LBF/new.php` uses `formname` as the active form identity
- on first save, `LBF/new.php` creates native LBF data and calls `addForm(...)`
- `FormService::addForm()` inserts the encounter linkage row into the `forms` table

## Implication
A first working Internal Medicine form should be achievable without first modifying `FormService::addForm()` or directly patching the LBF runtime.

## Immediate Next Step
Define the minimum field set and section structure for:
`LBFim_internal_medicine`

## Rule
Do not modify core runtime before defining the field map and layout strategy.
