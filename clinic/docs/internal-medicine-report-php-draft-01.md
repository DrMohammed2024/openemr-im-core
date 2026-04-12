# Internal Medicine report.php Draft - 01

## Objective
Define the first V1 draft for:

`interface/forms/internal_medicine/report.php`

This file should display the saved Internal Medicine encounter form in a clean, readable OpenEMR-compatible format.

---

## V1 Goal
The report page should:

- load one saved Internal Medicine form row
- display the encounter note in readable clinical sections
- support standard OpenEMR encounter review workflow
- remain simple and low-risk

---

## Core Design Decision
Use a plain PHP report page similar to common OpenEMR encounter form reports.

Do not add advanced print formatting or AI rendering in V1.

---

## Expected Responsibilities of report.php

### 1. Bootstrap / Includes
Expected includes:
- `../../globals.php`
- common db helpers
- formatting helpers if needed

### 2. Read identifiers
Read:
- `id` or `formid`
- patient / encounter context when needed

### 3. Load saved row
Read one record from:

`form_internal_medicine`

using the saved form id

### 4. Render output
Display the saved content in clear sections.

---

## Required Display Sections

### Header
- Internal Medicine
- patient id or encounter context if needed by OpenEMR flow
- date
- clinician_name
- visit_type

### Clinical Sections
- Chief Complaint
- History of Present Illness
- Past Medical History
- Past Surgical History
- Medications
- Allergies
- Family History
- Social History
- Review of Systems
- Physical Examination
- Assessment
- Differential Diagnosis
- Plan
- Follow-up
- Red Flags
- Disposition

---

## Rendering Rules
- if field empty: either hide section or show simple placeholder
- use safe escaped output
- preserve line breaks for long narrative fields
- keep layout readable on desktop first
- avoid JavaScript complexity in V1

---

## Proposed Output Style
Simple block layout:

- section title
- section content beneath
- horizontal separation between major sections

Example style direction:
- readable
- clinical
- print-friendly enough
- not overdesigned

---

## V1 Technical Rule
Use:
- `text()`
- safe escaping helpers
- `nl2br()` only when appropriate with escaped text

Do not:
- inject raw HTML from saved fields
- add markdown rendering
- add PDF generation in V1

---

## Acceptance Criteria
This report draft is correct if it supports:

1. loading one saved Internal Medicine form
2. showing all major sections clearly
3. readable clinician review
4. safe escaped rendering
5. compatibility with standard OpenEMR encounter review expectations

---

## Deferred From V1
Do not add yet:
- special print stylesheet
- export to PDF
- smart section collapsing
- AI summary block
- coding recommendation block
- medication table rendering
- diagnosis linking logic

---

## Dependency Note
This report draft assumes:
- `table.sql` structure is fixed
- `new.php` stores one row per form instance
- OpenEMR `forms` table row is already created

---

## Next File After This
After this draft, create:

`clinic/docs/internal-medicine-info-txt-spec-01.md`
