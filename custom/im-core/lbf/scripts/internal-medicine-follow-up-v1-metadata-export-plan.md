# Internal Medicine Follow-Up V1 — Metadata Export Plan

## 1. Purpose

This document defines the metadata export plan for the Internal Medicine Follow-Up V1 LBF customization in OpenEMR IM Core.

The goal is to prepare a safe, non-PHI, non-credential, non-database-dump method for extracting the verified LBF metadata required for future seed/script creation.

This document does not execute metadata export.

This document does not create a seed script.

This document does not modify OpenEMR runtime configuration.

This document does not claim clean-install reproducibility or production readiness.

## 2. Project Context

- Repository: DrMohammed2024/openemr-im-core
- Project: OpenEMR IM Core
- Base system: Controlled OpenEMR fork
- Layout name: Internal Medicine Follow-Up V1
- Layout ID: `LBFim_followup_v1`
- Current status: Local LBF MVP verified
- Current completed stage: Seed/script conversion planning
- Current stage: Metadata export planning
- Execution status: Planning only

## 3. Current Verified Scope

The Internal Medicine Follow-Up V1 LBF MVP includes these verified groups:

- Visit Context
- Vital Signs Review
- Chronic Conditions Review
- Medication Review
- Symptoms Review
- Physical Exam Summary
- Assessment
- Plan
- Patient Safety and Follow-up

## 4. Why Metadata Export Is Needed

The current LBF model exists as runtime configuration in the local OpenEMR database.

Before creating a seed script, the project needs a reviewed metadata evidence package that defines:

- which layout records are required
- which fields belong to the form
- which groups exist
- how fields are ordered
- what field IDs are used
- what labels are used
- what field data types are used
- what field sizes and max sizes are used
- whether additional metadata tables are needed later

This metadata export plan prepares that evidence step in a controlled way.

## 5. Safety Boundary

This plan allows only safe metadata planning.

This plan does not allow:

- PHI export
- patient table access
- credentials printing
- database dump creation
- sensitive log collection
- production database modification
- SQL insert/update/delete
- OpenEMR core changes
- seed script execution
- production readiness claim

## 6. Allowed Metadata Scope

The first metadata export should be limited to non-PHI LBF configuration metadata.

Primary table:

- `layout_options`

Initial allowed columns:

- `form_id`
- `group_id`
- `seq`
- `source`
- `field_id`
- `title`
- `uor`
- `data_type`
- `fld_length`
- `max_length`
- `titlecols`
- `datacols`

These fields describe layout configuration and do not require patient data.

## 7. Prohibited Metadata Scope

The metadata export must not include:

- patient demographics
- encounters
- clinical notes
- prescriptions
- billing records
- insurance records
- appointment data
- user passwords
- session data
- audit logs containing sensitive activity
- database credentials
- full database dumps
- raw production logs

## 8. Target Form Filter

The export must be limited to:

```text
form_id = LBFim_followup_v1
