# Internal Medicine Implementation Order - 01

## Objective
Define the exact execution order for building the custom OpenEMR Internal Medicine form V1.

Target directory:

`interface/forms/internal_medicine/`

---

## V1 Build Goal
Deliver a working custom encounter form that can:

- open from encounter workflow
- create a new Internal Medicine note
- save one row into custom table
- create matching `forms` row
- reopen saved form
- display saved form via report page

---

## Final V1 File Targets
The implementation should produce these files:

- `interface/forms/internal_medicine/info.txt`
- `interface/forms/internal_medicine/table.sql`
- `interface/forms/internal_medicine/new.php`
- `interface/forms/internal_medicine/report.php`

---

## Execution Order

### Step 1 — Freeze identity
Finalize:
- form directory name = `internal_medicine`
- form label = `Internal Medicine`

### Step 2 — Freeze SQL schema
Finalize:
- custom table structure
- primary key
- pid
- encounter
- author/date tracking
- main clinical narrative fields

### Step 3 — Freeze info.txt
Create minimal OpenEMR-compatible identity file.

### Step 4 — Build new.php
Implement:
- create mode
- edit mode
- save mode
- insert/update logic
- `addForm(...)` linkage

### Step 5 — Build report.php
Implement:
- load saved record
- render readable clinical report

### Step 6 — Put files in final form directory
Create:
- `interface/forms/internal_medicine/`

and place the V1 files there.

### Step 7 — Run first workflow test
Test:
- open form
- save form
- reopen form
- report display

---

## Explicit Build Rule
Do not build everything at once.

Build in this order:
1. SQL
2. info.txt
3. new.php
4. report.php
5. file placement
6. test

---

## Risk Control
Why this order:
- avoids schema drift
- keeps save logic aligned with table fields
- reduces OpenEMR integration mistakes
- makes debugging much easier

---

## V1 Scope Lock
Do not include yet:
- AI text generation
- smart templates
- code search helpers
- billing integration
- diagnosis suggestion engine
- medication reconciliation logic
- patient portal workflow
- advanced print/PDF workflow

---

## Acceptance Criteria
Implementation order is correct if it leads to:

1. a minimal working Internal Medicine form
2. clean encounter integration
3. predictable save/edit/report cycle
4. low-risk first deployment path

---

## Decision
Proceed with a **direct custom form build**, not LBF.

---

## Immediate Next Build Artifact
After this file, create:

`clinic/docs/internal-medicine-final-file-pack-01.md`
