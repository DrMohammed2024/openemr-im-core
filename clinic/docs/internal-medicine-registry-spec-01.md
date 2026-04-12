# Internal Medicine registry Spec - 01

## Objective
Define how the custom Internal Medicine encounter form should be registered and recognized inside OpenEMR.

Target form directory:

`internal_medicine`

---

## Goal
Ensure the form can be:

- discovered by OpenEMR
- loaded from the encounter workflow
- opened as a new encounter form
- reopened after save
- displayed through report workflow

---

## Registration Identity

### Directory
`internal_medicine`

### Display Name
`Internal Medicine`

### Type
Encounter form

### Status
Custom clinic form

---

## Core Registration Requirements
The registration layer must map the form to:

- `new.php`
- `report.php`
- `info.txt`

and support standard encounter-form behavior.

---

## Expected OpenEMR Integration Points

### 1. Directory presence
Expected final form directory:

`interface/forms/internal_medicine/`

### 2. Required base files
Expected V1 files:
- `new.php`
- `report.php`
- `info.txt`

### 3. Database linkage
Saved form instances must create and use a matching row in:
- custom form table
- `forms` table

### 4. Encounter workflow compatibility
The form should behave like a standard encounter-linked form.

---

## Registry Expectations
OpenEMR should be able to identify:

- form directory name
- form display label
- encounter usage context

No AI-specific registration is needed in V1.

---

## V1 Registration Rule
Keep registration simple and standard.

Do not add:
- plugin loader logic
- custom dispatcher
- external routing
- nonstandard hooks
- portal-specific behavior in registration layer

---

## Compatibility Rule
The form should follow existing OpenEMR custom encounter-form conventions rather than inventing a new registration model.

---

## Acceptance Criteria
This spec is correct if it supports the following outcome:

1. `internal_medicine` is recognized as a form directory
2. OpenEMR can load `new.php`
3. OpenEMR can display `report.php`
4. `info.txt` provides readable identity
5. saved instances are linked through the `forms` table

---

## Not In Scope
Do not define here:
- SQL schema details
- field-level layout
- validation logic
- report rendering details
- billing logic
- AI summarization logic

Those belong to other specs and implementation files.

---

## Final Expected Form Path
`interface/forms/internal_medicine/`

---

## Final Expected V1 File Set
- `interface/forms/internal_medicine/info.txt`
- `interface/forms/internal_medicine/new.php`
- `interface/forms/internal_medicine/report.php`

---

## Next File After This
After this spec, create:

`clinic/docs/internal-medicine-implementation-order-01.md`
