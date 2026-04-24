# Vital Signs Review Fields Batch 1 Database Snapshot

Date: 2026-04-24

## Purpose

Record a non-PHI database verification snapshot for the Internal Medicine Follow-Up V1 LBF Vital Signs Review fields.

## Runtime environment

- Android / Termux
- OpenEMR local runtime path: /data/data/com.termux/files/home/openemr_im_git
- OpenEMR version observed: 8.1.1-dev
- Database table checked: layout_options
- Form ID checked: LBFim_followup_v1
- Group ID checked: 2

## Snapshot result

The following fields were found for `LBFim_followup_v1` under group ID `2`:

| Group ID | Seq | Field ID | Title | UOR | Data type | Width | Max length | List |
|---:|---:|---|---|---:|---:|---:|---:|---|
| 2 | 10 | blood_pressure | Blood pressure | 1 | 2 | 20 | 50 | |
| 2 | 20 | heart_rate | Heart rate | 1 | 2 | 10 | 20 | |
| 2 | 30 | respiratory_rate | Respiratory rate | 1 | 2 | 10 | 20 | |
| 2 | 40 | temperature | Temperature | 1 | 2 | 10 | 20 | |
| 2 | 50 | oxygen_saturation | Oxygen saturation | 1 | 2 | 10 | 20 | |
| 2 | 60 | weight | Weight | 1 | 2 | 10 | 20 | |
| 2 | 70 | bmi_note | BMI note | 1 | 2 | 30 | 100 | |

## Observations

- The Vital Signs Review group uses `group_id = 2`.
- The seven Vital Signs Review fields are present in the runtime database.
- The fields render in Encounter Preview.
- In this runtime, `uor = 1` is observed for optional fields.
- In this runtime, `data_type = 2` is observed for text input fields.
- No list-backed fields were used in this batch.

## Safety status

This snapshot:

- does not include PHI
- does not include credentials
- does not include patient data
- does not include logs
- does not include database dumps
- records only field metadata required for runtime verification

## Next step

Begin Chronic Conditions Review batch 1 after this database snapshot is reviewed and merged.
