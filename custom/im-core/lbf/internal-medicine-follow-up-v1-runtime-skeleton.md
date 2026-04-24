# Internal Medicine Follow-Up V1 Runtime Skeleton

Date: 2026-04-24

## Runtime environment

- Android / Termux
- OpenEMR local runtime path: /data/data/com.termux/files/home/openemr_im_git
- OpenEMR version observed: 8.1.1-dev
- LBF path: Admin → Forms → Layouts

## Created layout

Layout title:

Internal Medicine Follow-Up V1

Observed Layout ID used:

LBFim_followup_v1

Category:

Clinical

## Created group

Visit Context

## First test field

Field label:

Follow-up reason

Field ID:

followup_reason

Observed type:

Textbox

Observed layout behavior:

- The form opens in Encounter Preview.
- The Visit Context section appears.
- The Follow-up reason field appears after opening the Visit Context section.
- This confirms that the LBF layout, group, and first field render successfully.

## Safety status

This runtime skeleton:

- does not modify OpenEMR core-sensitive paths
- does not store PHI
- does not store credentials
- does not include patient data
- remains a local runtime configuration until exported or otherwise documented

## Next step

Add the remaining V1 fields in small batches after confirming the safest export or rollback approach.
