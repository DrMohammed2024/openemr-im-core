# Internal Medicine Follow-Up V1 — Metadata Export Evidence

## 1. Purpose

This document records sanitized metadata export evidence for the Internal Medicine Follow-Up V1 LBF customization in OpenEMR IM Core.

The purpose is to preserve non-PHI, non-credential, read-only LBF configuration metadata evidence before future seed/script drafting.

This document does not create a seed script.

This document does not execute SQL modifications.

This document does not modify OpenEMR runtime configuration.

This document does not claim clean-install reproducibility or production readiness.

## 2. Project Context

- Repository: DrMohammed2024/openemr-im-core
- Project: OpenEMR IM Core
- Base system: Controlled OpenEMR fork
- Layout name: Internal Medicine Follow-Up V1
- Layout ID: `LBFim_followup_v1`
- Source table: `layout_options`
- Export type: Read-only metadata query
- Current stage: Sanitized metadata export evidence

## 3. Safety Boundary

This evidence contains only OpenEMR LBF layout configuration metadata.

This evidence contains:

- no PHI
- no real patient data
- no credentials
- no sensitive logs
- no database dumps
- no SQL insert/update/delete
- no OpenEMR core changes

## 4. Export Scope

The metadata export was limited to:

```text
form_id = LBFim_followup_v1
