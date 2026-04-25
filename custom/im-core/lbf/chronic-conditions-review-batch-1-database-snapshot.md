# Chronic Conditions Review Batch 1 — Database Snapshot

## 1. Purpose

This document records the non-PHI database metadata verification for Chronic Conditions Review batch 1 in the OpenEMR IM Core LBF-based Internal Medicine customization.

## 2. Project Context

- Repository: DrMohammed2024/openemr-im-core
- Operational branch: master
- Runtime environment: Android / Termux
- OpenEMR runtime path: /data/data/com.termux/files/home/openemr_im_git
- LBF layout name: Internal Medicine Follow-Up V1
- LBF layout ID: LBFim_followup_v1
- LBF group: Chronic Conditions Review
- Batch: 1

## 3. Verification Command Summary

The verification was performed locally using a PHP command that:

- reads OpenEMR database settings from `sites/default/sqlconf.php`
- queries only the `layout_options` metadata table
- filters only the three Chronic Conditions Review batch 1 field IDs
- does not print database credentials
- does not query patient tables
- does not export or dump the database

Fields checked:

- `hypertension_status`
- `diabetes_status`
- `dyslipidemia_status`

## 4. Verified Non-PHI Metadata Output

```text
form_id	group_id	seq	source	field_id	title	uor	data_type	fld_length	max_length	titlecols	datacols
LBFim_followup_v1	3	10	F	hypertension_status	Hypertension status	1	2	30	100	1	3
LBFim_followup_v1	3	20	F	diabetes_status	Diabetes status	1	2	30	100	1	3
LBFim_followup_v1	3	30	F	dyslipidemia_status	Dyslipidemia status	1	2	30	100	1	3
ROW_COUNT=3
