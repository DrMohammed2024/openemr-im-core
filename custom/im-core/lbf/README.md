# LBF Artifacts

This directory is reserved for verified Layout Based Forms (LBF) artifacts for the IM Core customization layer.

## Current status

No LBF clinical feature artifact is added yet.

Before adding the first Internal Medicine Follow-Up V1 form, the team must verify the exact OpenEMR runtime mechanics for:

- LBF form creation
- LBF export or backup format
- LBF import or restore process
- LBF storage location or database representation
- encounter workflow visibility
- rollback process

## Rules

- Do not add LBF artifacts from memory or assumptions.
- Do not modify OpenEMR core-sensitive paths.
- Do not store PHI, credentials, logs, database dumps, or real patient data.
- Document verification evidence before adding the first clinic-visible LBF feature.

## Next planned feature

The first planned clinic-visible feature is:

Internal Medicine Follow-Up V1

Scope:
- LBF-first
- no-core-touch
- clinic-visible
- fast to validate
