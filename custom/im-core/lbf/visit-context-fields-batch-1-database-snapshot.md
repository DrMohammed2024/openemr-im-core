# Visit Context Fields Batch 1 Database Snapshot

Date: 2026-04-24

## Purpose

Record a non-PHI database verification snapshot for the Internal Medicine Follow-Up V1 LBF Visit Context fields.

## Runtime environment

- Android / Termux
- OpenEMR local runtime path: /data/data/com.termux/files/home/openemr_im_git
- OpenEMR version observed: 8.1.1-dev
- Database table checked: layout_options
- Form ID checked: LBFim_followup_v1

## Verified columns

The local `layout_options` table contains the following relevant columns:

- form_id
- field_id
- group_id
- title
- seq
- data_type
- uor
- fld_length
- max_length
- list_id
- titlecols
- datacols
- fld_rows
- source

## Snapshot result

The following fields were found for `LBFim_followup_v1`:

| Field ID | Title | UOR | Data type | Width | Max length | List |
|---|---|---:|---:|---:|---:|---|
| followup_reason | Follow-up reason | 1 | 2 | 40 | 255 | |
| visit_type | Visit type | 1 | 2 | 30 | 100 | |
| main_complaint | Main complaint | 1 | 2 | 40 | 255 | |
| interval_history | Interval history since last visit | 1 | 2 | 60 | 200 | |

## Observations

- The four Visit Context fields are present in the runtime database.
- The fields render in Encounter Preview.
- In this runtime, `uor = 1` is observed for the optional fields.
- In this runtime, `data_type = 2` is observed for text input fields.
- `interval_history` currently has `max_length = 200`, not 2000.

## Safety status

This snapshot:

- does not include PHI
- does not include credentials
- does not include patient data
- does not include database dumps
- records only field metadata required for runtime verification

## Next step

Decide in a controlled follow-up whether to keep `interval_history` as a text input or update it to a larger textarea-style field.
