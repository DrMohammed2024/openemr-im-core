# Internal Medicine V1 Implementation Slice - 01

## Objective
Define the exact first runnable implementation slice for the Internal Medicine outpatient encounter form.

This document must convert the chosen LBF-based direction into a practical first build scope.

---

## V1 Build Model
Use a:

**Hybrid LBF-inspired custom encounter form**

Meaning:
- follow the encounter form loading and registration path used by OpenEMR forms
- borrow safe and proven workflow ideas from LBF
- keep V1 simpler than full generic LBF
- avoid unnecessary early dependency on deep layout_options complexity
- build a focused Internal Medicine form for first execution

---

## Exact V1 Goal
Deliver a first runnable Internal Medicine encounter form that can:

1. open from the encounter workflow
2. create a form record for the encounter
3. display a basic Internal Medicine outpatient structure
4. save structured values successfully
5. reopen the same saved form for editing/viewing

---

## Exact V1 Form Identity

### Directory
`internal_medicine`

### Display title
`Internal Medicine`

### Scope
Adult outpatient Internal Medicine encounter documentation

---

## Exact V1 Storage Strategy
Use a **dedicated form table** plus normal `forms` registration.

### Reason
This is clearer and lower-risk for V1 than trying to force everything into generic LBF storage immediately.

### V1 storage model
- dedicated table for Internal Medicine form rows
- one encounter form instance per encounter for V1
- normal registration entry in `forms` table

---

## Exact V1 Files To Create First

### Primary new form directory
`interface/forms/internal_medicine/`

### First expected files
- `interface/forms/internal_medicine/info.txt`
- `interface/forms/internal_medicine/new.php`
- `interface/forms/internal_medicine/save.php`
- `interface/forms/internal_medicine/view.php`
- `interface/forms/internal_medicine/report.php`
- `interface/forms/internal_medicine/table.sql`

---

## Exact V1 Files To Inspect Again Before Writing Code

### Must inspect
- `interface/forms/LBF/new.php`
- `interface/forms/LBF/view.php`
- `interface/forms/LBF/report.php`
- `library/forms.inc.php`
- `patient_file/encounter/load_form.php`

### Helpful reference only
- `interface/forms/clinical_notes/new.php`
- `interface/forms/clinical_notes/table.sql`

---

## Exact V1 Functional Scope

### Must work in V1
- form opens
- form shows fields
- form saves
- form reloads saved values
- form appears as encounter-linked form
- one form per encounter behavior for first version

### Will NOT be included in V1
- complex skip logic
- portal workflow
- graphs
- billing/products/services integration
- referral automation
- advanced plugins
- historical multi-instance comparison
- AI-generated text inside form

---

## Exact Minimum V1 Field Set

### Identity / encounter layer
- encounter date
- provider

### Clinical content
- visit_type
- chief_complaint
- hpi
- vital_signs_summary
- physical_exam_general
- physical_exam_chest
- physical_exam_cardiovascular
- assessment
- plan
- investigations
- treatment
- follow_up
- red_flags

---

## Recommended V1 Field Table Draft

### Suggested columns
- `id`
- `date`
- `pid`
- `encounter`
- `user`
- `groupname`
- `authorized`
- `activity`
- `external_id`
- `visit_type`
- `chief_complaint`
- `hpi`
- `vital_signs_summary`
- `physical_exam_general`
- `physical_exam_chest`
- `physical_exam_cardiovascular`
- `assessment`
- `plan`
- `investigations`
- `treatment`
- `follow_up`
- `red_flags`

---

## Exact V1 UI Layout Draft

### Section 1 — Visit Identity
- visit type
- encounter date
- provider

### Section 2 — Presenting Problem
- chief complaint
- HPI

### Section 3 — Clinical Summary
- vital signs summary
- general exam
- chest exam
- cardiovascular exam

### Section 4 — Impression And Management
- assessment
- investigations
- treatment
- plan
- follow-up
- red flags

---

## Exact First Coding Order

### Step 1
Create `table.sql`

### Step 2
Create `info.txt`

### Step 3
Create `new.php` with:
- encounter/session loading
- existing form lookup for current encounter
- base HTML form rendering

### Step 4
Create `save.php` with:
- insert/update into dedicated table
- insert into `forms` table if new
- update existing record if already present

### Step 5
Create `view.php`

### Step 6
Create `report.php`

---

## Exact Stop Boundary For First Runnable Build
V1 first runnable build is complete when all of the following are true:

1. the form can be opened
2. the form can be saved
3. the form can be reopened
4. saved values are displayed correctly
5. a `forms` table entry is created correctly
6. no Clinical Notes dependency is required for basic operation

---

## Immediate Next Build Artifact
After this document, create:

`clinic/docs/internal-medicine-table-sql-draft-01.md`

That next file must define:
- exact SQL table
- exact column names
- exact types
- exact nullability
- exact first safe schema for V1

---

## Final Conclusion
The correct next implementation move is:

**Build V1 as a hybrid LBF-inspired custom encounter form with its own dedicated table and standard `forms` registration path.**
