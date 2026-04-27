# Internal Medicine Follow-Up V1 — Seed Script Draft

## 1. Purpose

This document defines the controlled seed script draft for recreating the Internal Medicine Follow-Up V1 LBF configuration in OpenEMR IM Core.

This is a documentation-only draft.

This document does not execute SQL.

This document does not modify OpenEMR runtime configuration.

This document does not create or deploy a working seed script.

This document does not claim clean-install reproducibility.

This document does not claim production readiness.

## 2. Project Context

- Repository: DrMohammed2024/openemr-im-core
- Project: OpenEMR IM Core
- Base system: Controlled OpenEMR fork
- Layout name: Internal Medicine Follow-Up V1
- Layout ID: `LBFim_followup_v1`
- Current implementation method: OpenEMR UI-based LBF configuration
- Current seed/script status: Draft planning stage only
- Current clean-install reproducibility status: Not yet verified

## 3. Evidence Basis

This seed script draft is based on completed and documented prior stages:

- Internal Medicine Follow-Up V1 local LBF MVP verification
- Internal Medicine Follow-Up V1 final verification summary
- Internal Medicine Follow-Up V1 clinical review checklist
- Internal Medicine Follow-Up V1 seed/script conversion plan
- Internal Medicine Follow-Up V1 metadata export plan
- Internal Medicine Follow-Up V1 sanitized metadata export evidence
- Internal Medicine Follow-Up V1 metadata verification
- Internal Medicine Follow-Up V1 clean install validation plan

The verified metadata baseline is:

```text
form_id: LBFim_followup_v1
ROW_COUNT: 51
GROUP_COUNT: 9
GROUP_IDS: 1,2,3,4,5,6,7,8,9
FIELD_DISTRIBUTION: 4,7,7,5,6,6,4,7,5
METADATA_VERIFICATION_STATUS: PASS
