# Visit Context Fields Batch 1

Date: 2026-04-24

## Runtime environment

- Android / Termux
- OpenEMR local runtime path: /data/data/com.termux/files/home/openemr_im_git
- OpenEMR version observed: 8.1.1-dev
- LBF path: Admin → Forms → Layouts

## Layout

Layout title:

Internal Medicine Follow-Up V1

Layout ID:

LBFim_followup_v1

## Group

Visit Context

## Fields added in this batch

### Visit type

- Field ID: visit_type
- Data type: Textbox
- Order: 20
- Size width: 30
- Max size: 100
- Label cols: 1
- Data cols: 3

### Main complaint

- Field ID: main_complaint
- Data type: Textbox
- Order: 30
- Size width: 40
- Max size: 255
- Label cols: 1
- Data cols: 3

### Interval history since last visit

- Field ID: interval_history
- Data type: Textarea
- Order: 40
- Size width: 60
- Size height: 4
- Max size: 2000
- Label cols: 1
- Data cols: 3

## Verification

The Visit Context section was opened in Encounter Preview.

The following fields were expected to render:

- Follow-up reason
- Visit type
- Main complaint
- Interval history since last visit

## Safety status

This documentation:

- does not include PHI
- does not include credentials
- does not include logs
- does not include database dumps
- does not modify OpenEMR core-sensitive paths
- documents local runtime configuration only

## Next step

Add the next small field batch only after this batch renders correctly in Encounter Preview.
