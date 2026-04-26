# LBF Artifacts

This directory contains verified Layout Based Forms (LBF) documentation artifacts for the IM Core customization layer.

## Current status

The first clinic-visible LBF customization is in progress and partially verified:

- Internal Medicine Follow-Up V1 layout has been created in the local OpenEMR runtime.
- Visit Context batch 1 has runtime and database metadata verification documentation.
- Vital Signs Review batch 1 has runtime and database metadata verification documentation.
- Chronic Conditions Review batch 1 has runtime and database metadata verification documentation.
- Chronic Conditions Review batch 2 has runtime and database metadata verification documentation.
- Medication Review batch 1 has runtime and database metadata verification documentation.

The LBF customization is still not production-ready.

Current work remains local-runtime verified and documentation-backed. It has not yet been converted into a re-runnable seed/script.

## Verified clinical layout

- Layout name: Internal Medicine Follow-Up V1
- Layout ID: LBFim_followup_v1
- Runtime environment: Android / Termux
- Verification method:
  - OpenEMR Layout Editor
  - Encounter Preview
  - Non-PHI `layout_options` metadata snapshots

## Verified groups and fields

### Visit Context

- Follow-up reason
- Visit type
- Main complaint
- Interval history since last visit

### Vital Signs Review

- Blood pressure
- Heart rate
- Respiratory rate
- Temperature
- Oxygen saturation
- Weight
- BMI note

### Chronic Conditions Review

Batch 1:

- Hypertension status
- Diabetes status
- Dyslipidemia status

Batch 2:

- CKD status
- Cardiovascular disease status
- Respiratory disease status
- Other chronic condition notes

### Medication Review

Batch 1:

- Current medication list reviewed
- Medication changes since last visit
- Medication adherence concerns
- Medication side effects
- Refill needs

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
- `chronic-conditions-review-batch-2-runtime-confirmation.md`
- `chronic-conditions-review-batch-2-database-snapshot.md`
- `medication-review-batch-1-runtime-confirmation.md`
- `medication-review-batch-1-database-snapshot.md`

## Safety and privacy status

- No PHI is stored in this directory.
- No real patient data is stored in this directory.
- No credentials are stored in this directory.
- No sensitive logs are stored in this directory.
- No database dumps are stored in this directory.
- Documentation records local LBF runtime metadata only.

## Rules

- Do not add LBF artifacts from memory or assumptions.
- Do not modify OpenEMR core-sensitive paths.
- Do not store PHI, credentials, logs, database dumps, or real patient data.
- Document runtime verification before database metadata verification.
- Use non-PHI `layout_options` metadata snapshots only.
- Keep each batch small, reviewable, and reversible.
- Convert verified LBF metadata into a re-runnable seed/script only after the clinical MVP stabilizes.

## Next planned feature area

Continue Internal Medicine Follow-Up V1 in controlled batches.

Recommended next candidate area:

Symptoms Review

Potential future fields may include:

- New symptoms since last visit
- Chest pain
- Shortness of breath
- Dizziness or syncope
- Edema
- Constitutional symptoms
- Other symptom notes

Do not create the next batch until the current documentation status is merged and confirmed.
