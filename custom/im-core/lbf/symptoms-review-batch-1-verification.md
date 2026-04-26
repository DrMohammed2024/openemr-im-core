# Symptoms Review Batch 1 — Verification

## 1. Purpose

This document records the combined runtime and database metadata verification for Symptoms Review batch 1 in the OpenEMR IM Core LBF-based Internal Medicine customization.

This follows the improved single-PR verified batch workflow:

OpenEMR UI → Encounter Preview → Termux metadata verification → one GitHub documentation PR

## 2. Project Context

- Repository: DrMohammed2024/openemr-im-core
- Operational branch: master
- Runtime environment: Android / Termux
- OpenEMR runtime path: /data/data/com.termux/files/home/openemr_im_git
- LBF layout name: Internal Medicine Follow-Up V1
- LBF layout ID: LBFim_followup_v1
- LBF group: Symptoms Review
- Batch: 1

## 3. Runtime Execution Method

The group and fields were created through the OpenEMR Layout Editor:

Admin → Forms → Layouts → Internal Medicine Follow-Up V1

The group created was:

Symptoms Review

The fields were added using OpenEMR UI only.

No SQL insert/update was used to create the fields.

## 4. Fields Verified

| Order | Source | Field ID | Label | UOR | Data Type | Size Width | Max Size | Label Cols | Data Cols |
|---:|---|---|---|---|---|---:|---:|---:|---:|
| 10 | F | new_symptoms | New symptoms since last visit | Optional | Textbox | 60 | 255 | 1 | 3 |
| 20 | F | chest_pain | Chest pain | Optional | Textbox | 30 | 100 | 1 | 3 |
| 30 | F | shortness_of_breath | Shortness of breath | Optional | Textbox | 30 | 100 | 1 | 3 |
| 40 | F | dizziness_syncope | Dizziness or syncope | Optional | Textbox | 40 | 150 | 1 | 3 |
| 50 | F | edema | Edema | Optional | Textbox | 30 | 100 | 1 | 3 |
| 60 | F | other_symptom_notes | Other symptom notes | Optional | Textbox | 60 | 255 | 1 | 3 |

## 5. Runtime Confirmation

Confirmed locally in OpenEMR Encounter Preview:

- Symptoms Review group renders.
- New symptoms since last visit field renders.
- Chest pain field renders.
- Shortness of breath field renders.
- Dizziness or syncope field renders.
- Edema field renders.
- Other symptom notes field renders.
- Field order is 10, 20, 30, 40, 50, 60.
- No OpenEMR core files were modified for this batch.

## 6. Database Metadata Verification

The verification was performed locally using a PHP command that:

- reads OpenEMR database settings from `sites/default/sqlconf.php`
- queries only the `layout_options` metadata table
- filters only the six Symptoms Review batch 1 field IDs
- does not print database credentials
- does not query patient tables
- does not export or dump the database

Fields checked:

- `new_symptoms`
- `chest_pain`
- `shortness_of_breath`
- `dizziness_syncope`
- `edema`
- `other_symptom_notes`

## 7. Verified Non-PHI Metadata Output

```text
form_id	group_id	seq	source	field_id	title	uor	data_type	fld_length	max_length	titlecols	datacols
LBFim_followup_v1	5	10	F	new_symptoms	New symptoms since last visit	1	2	60	255	1	3
LBFim_followup_v1	5	20	F	chest_pain	Chest pain	1	2	30	100	1	3
LBFim_followup_v1	5	30	F	shortness_of_breath	Shortness of breath	1	2	30	100	1	3
LBFim_followup_v1	5	40	F	dizziness_syncope	Dizziness or syncope	1	2	40	150	1	3
LBFim_followup_v1	5	50	F	edema	Edema	1	2	30	100	1	3
LBFim_followup_v1	5	60	F	other_symptom_notes	Other symptom notes	1	2	60	255	1	3
ROW_COUNT=6
