# Plan Batch 1 — Verification

## 1. Purpose

This document records the combined runtime and database metadata verification for Plan batch 1 in the OpenEMR IM Core LBF-based Internal Medicine customization.

This follows the improved single-PR verified batch workflow:

OpenEMR UI → Encounter Preview → Termux metadata verification → one GitHub documentation PR

## 2. Project Context

- Repository: DrMohammed2024/openemr-im-core
- Operational branch: master
- Runtime environment: Android / Termux
- OpenEMR runtime path: /data/data/com.termux/files/home/openemr_im_git
- LBF layout name: Internal Medicine Follow-Up V1
- LBF layout ID: LBFim_followup_v1
- LBF group: Plan
- Batch: 1

## 3. Runtime Execution Method

The group and fields were created through the OpenEMR Layout Editor:

Admin → Forms → Layouts → Internal Medicine Follow-Up V1

The group created was:

Plan

The fields were added using OpenEMR UI only.

No SQL insert/update was used to create the fields.

## 4. Fields Verified

| Order | Source | Field ID | Label | UOR | Data Type | Size Width | Max Size | Label Cols | Data Cols |
|---:|---|---|---|---|---|---:|---:|---:|---:|
| 10 | F | treatment_plan | Treatment plan | Optional | Textbox | 60 | 255 | 1 | 3 |
| 20 | F | medication_plan | Medication plan | Optional | Textbox | 60 | 255 | 1 | 3 |
| 30 | F | lab_orders_plan | Lab orders plan | Optional | Textbox | 60 | 255 | 1 | 3 |
| 40 | F | imaging_plan | Imaging plan | Optional | Textbox | 60 | 255 | 1 | 3 |
| 50 | F | referrals_plan | Referrals plan | Optional | Textbox | 60 | 255 | 1 | 3 |
| 60 | F | followup_interval | Follow-up interval | Optional | Textbox | 40 | 150 | 1 | 3 |
| 70 | F | patient_instructions | Patient instructions | Optional | Textbox | 60 | 255 | 1 | 3 |

## 5. Runtime Confirmation

Confirmed locally in OpenEMR Encounter Preview:

- Plan group renders.
- Treatment plan field renders.
- Medication plan field renders.
- Lab orders plan field renders.
- Imaging plan field renders.
- Referrals plan field renders.
- Follow-up interval field renders.
- Patient instructions field renders.
- Field order is 10, 20, 30, 40, 50, 60, 70.
- No OpenEMR core files were modified for this batch.

## 6. Database Metadata Verification

The verification was performed locally using a PHP command that:

- reads OpenEMR database settings from `sites/default/sqlconf.php`
- queries only the `layout_options` metadata table
- filters only the seven Plan batch 1 field IDs
- does not print database credentials
- does not query patient tables
- does not export or dump the database

Fields checked:

- `treatment_plan`
- `medication_plan`
- `lab_orders_plan`
- `imaging_plan`
- `referrals_plan`
- `followup_interval`
- `patient_instructions`

## 7. Verified Non-PHI Metadata Output

```text
form_id	group_id	seq	source	field_id	title	uor	data_type	fld_length	max_length	titlecols	datacols
LBFim_followup_v1	8	10	F	treatment_plan	Treatment plan	1	2	60	255	1	3
LBFim_followup_v1	8	20	F	medication_plan	Medication plan	1	2	60	255	1	3
LBFim_followup_v1	8	30	F	lab_orders_plan	Lab orders plan	1	2	60	255	1	3
LBFim_followup_v1	8	40	F	imaging_plan	Imaging plan	1	2	60	255	1	3
LBFim_followup_v1	8	50	F	referrals_plan	Referrals plan	1	2	60	255	1	3
LBFim_followup_v1	8	60	F	followup_interval	Follow-up interval	1	2	40	150	1	3
LBFim_followup_v1	8	70	F	patient_instructions	Patient instructions	1	2	60	255	1	3
ROW_COUNT=7
