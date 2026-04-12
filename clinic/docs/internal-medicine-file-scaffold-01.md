# Internal Medicine File Scaffold - 01

## Objective
Define the exact first file scaffold for the V1 Internal Medicine encounter form.

---

## Target Directory
`interface/forms/internal_medicine/`

---

## V1 Files To Create
1. `info.txt`
2. `table.sql`
3. `new.php`
4. `save.php`
5. `view.php`
6. `report.php`

---

## File Purpose

### 1) info.txt
Purpose:
- register the form metadata
- define form title
- define category/type
- support OpenEMR form discovery

Status:
- must be created in the first build slice

---

### 2) table.sql
Purpose:
- create the database table for `form_internal_medicine`

Status:
- must be created in the first build slice

---

### 3) new.php
Purpose:
- load the form UI
- if current encounter already has this form, reopen existing record
- if not, allow new entry flow
- render the V1 fields

Status:
- must be created in the first build slice

---

### 4) save.php
Purpose:
- receive POST payload
- insert/update `form_internal_medicine`
- register entry in `forms` table if new
- update existing row if already linked to current encounter

Status:
- must be created in the first build slice

---

### 5) view.php
Purpose:
- read-only encounter display of saved Internal Medicine form

Status:
- may be minimal in first build slice

---

### 6) report.php
Purpose:
- printable/report-style output for saved Internal Medicine form

Status:
- may be minimal in first build slice

---

## V1 Build Order
1. `info.txt`
2. `table.sql`
3. `new.php`
4. `save.php`
5. `view.php`
6. `report.php`

---

## V1 Minimal Build Rule
The first running version only needs:
- form registration
- SQL table creation
- create/edit flow
- save flow
- basic read-only view

Pretty UI and advanced formatting are not required for V1.

---

## Deferred Items
Do not build yet:
- portal integration
- AI integration
- billing integration
- graphs
- advanced validation engine
- multi-note rows inside one encounter form
- attachments
- templates
- autocomplete diagnosis search

---

## First Code Slice After This File
After this scaffold file, the next document must be:

`clinic/docs/internal-medicine-info-txt-draft-01.md`

That file will define the exact content of:
`interface/forms/internal_medicine/info.txt`
