# Medication Review Batch 1 — Database Snapshot

## 1. Purpose

This document records the non-PHI database metadata verification for Medication Review batch 1 in the OpenEMR IM Core LBF-based Internal Medicine customization.

## 2. Project Context

- Repository: DrMohammed2024/openemr-im-core
- Operational branch: master
- Runtime environment: Android / Termux
- OpenEMR runtime path: /data/data/com.termux/files/home/openemr_im_git
- LBF layout name: Internal Medicine Follow-Up V1
- LBF layout ID: LBFim_followup_v1
- LBF group: Medication Review
- Batch: 1

## 3. Verification Command Summary

The verification was performed locally using a PHP command that:

- reads OpenEMR database settings from `sites/default/sqlconf.php`
- queries only the `layout_options` metadata table
- filters only the five Medication Review batch 1 field IDs
- does not print database credentials
- does not query patient tables
- does not export or dump the database

Fields checked:

- `meds_reviewed`
- `med_changes`
- `med_adherence_concerns`
- `med_side_effects`
- `refill_needs`

## 4. Verified Non-PHI Metadata Output

```text
form_id	group_id	seq	source	field_id	title	uor	data_type	fld_length	max_length	titlecols	datacols
LBFim_followup_v1	4	10	F	meds_reviewed	Current medication list reviewed	1	2	30	100	1	3
LBFim_followup_v1	4	20	F	med_changes	Medication changes since last visit	1	2	60	255	1	3
LBFim_followup_v1	4	30	F	med_adherence_concerns	Medication adherence concerns	1	2	60	255	1	3
LBFim_followup_v1	4	40	F	med_side_effects	Medication side effects	1	2	60	255	1	3
LBFim_followup_v1	4	50	F	refill_needs	Refill needs	1	2	40	150	1	3
ROW_COUNT=5
