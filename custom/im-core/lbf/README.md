# LBF Artifacts

This directory is reserved for verified Layout Based Forms (LBF) artifacts for the IM Core customization layer.

## Current status

The first clinic-visible LBF customization is now in progress and partially verified:

- Internal Medicine Follow-Up V1 layout has been created in the local OpenEMR runtime.
- Visit Context batch 1 has runtime and database metadata verification documentation.
- Vital Signs Review batch 1 has runtime and database metadata verification documentation.
- Chronic Conditions Review batch 1 has runtime and database metadata verification documentation.

The LBF customization is still not production-ready.

Current work remains local-runtime verified and documentation-backed. It has not yet been converted into a re-runnable seed/script.

## Verified documentation currently present

- `internal-medicine-follow-up-v1-fields.md`
- `internal-medicine-follow-up-v1-runtime-skeleton.md`
- `runtime-verification.md`
- `visit-context-fields-batch-1.md`
- `visit-context-fields-batch-1-runtime-confirmation.md`
- `visit-context-fields-batch-1-database-snapshot.md`
- `vital-signs-review-fields-batch-1-runtime-confirmation.md`
- `vital-signs-review-fields-batch-1-database-snapshot.md`
- `chronic-conditions-review-batch-1-runtime-confirmation.md`
- `chronic-conditions-review-batch-1-database-snapshot.md`

## Rules

- Do not add LBF artifacts from memory or assumptions.
- Do not modify OpenEMR core-sensitive paths.
- Do not store PHI, credentials, logs, database dumps, or real patient data.
- Document verification evidence before adding the next clinic-visible LBF feature batch.
- Keep each batch small, reviewable, and reversible.

## Next planned feature area

Continue Internal Medicine Follow-Up V1 in controlled batches.

The next candidate batch is:

Chronic Conditions Review batch 2

Candidate fields:
- CKD status
- Cardiovascular disease status
- Respiratory disease status
- Other chronic condition notes

Do not create the next batch until the current documentation status is merged and confirmed.
