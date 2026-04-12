# Internal Medicine info.txt Spec - 01

## Objective
Define the V1 `info.txt` file for the custom OpenEMR encounter form:

`interface/forms/internal_medicine/info.txt`

This file identifies the form inside OpenEMR and allows it to appear correctly in the encounter forms workflow.

---

## V1 Goal
The `info.txt` file should be minimal, valid, and compatible with standard OpenEMR custom form registration behavior.

---

## Expected Identity
Form directory:

`internal_medicine`

Form display name:

`Internal Medicine`

Category:
Encounter form / clinical custom form

---

## Required V1 Behavior
The form should be recognizable by OpenEMR as a standard encounter form and should support:

- loading from encounter workflow
- new form creation
- reopening saved form
- report display

---

## Proposed V1 info.txt Content

### Line 1
Internal Medicine

### Line 2
Custom Internal Medicine encounter form for structured outpatient documentation.

---

## Naming Rules
- Keep the display name simple:
  - `Internal Medicine`
- Do not include:
  - version number
  - experimental label
  - AI wording
  - specialty sublabels

---

## Scope Rules
V1 `info.txt` should not attempt to encode:
- field definitions
- SQL metadata
- report metadata
- AI behavior
- advanced routing logic

It should remain minimal.

---

## Acceptance Criteria
This spec is correct if:
1. the form label is clean and professional
2. it is suitable for OpenEMR encounter form registration
3. it matches directory name `internal_medicine`
4. it stays minimal for V1

---

## Expected Final File Path
`interface/forms/internal_medicine/info.txt`

---

## Expected Final File Content
Internal Medicine
Custom Internal Medicine encounter form for structured outpatient documentation.

---

## Next File After This
After this spec, create:

`clinic/docs/internal-medicine-registry-spec-01.md`
