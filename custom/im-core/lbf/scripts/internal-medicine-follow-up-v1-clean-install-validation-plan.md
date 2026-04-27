# Internal Medicine Follow-Up V1 — Clean Install Validation Plan

## 1. Purpose

This document defines the clean install validation plan for the Internal Medicine Follow-Up V1 LBF customization in OpenEMR IM Core.

The purpose is to prepare a controlled validation path for confirming, in a future stage, that the Internal Medicine Follow-Up V1 LBF configuration can be recreated in a clean or controlled non-production OpenEMR environment.

This document is planning-only.

This document does not create a seed script.

This document does not execute SQL.

This document does not modify OpenEMR runtime configuration.

This document does not claim clean-install reproducibility.

This document does not claim production readiness.

## 2. Project Context

- Repository: DrMohammed2024/openemr-im-core
- Project: OpenEMR IM Core
- Base system: Controlled OpenEMR fork
- Layout name: Internal Medicine Follow-Up V1
- Layout ID: `LBFim_followup_v1`
- Current verified metadata:
  - `ROW_COUNT=51`
  - `GROUP_COUNT=9`
  - `GROUP_IDS=1,2,3,4,5,6,7,8,9`
  - `FIELD_DISTRIBUTION=4,7,7,5,6,6,4,7,5`
- Current stage: Clean Install Validation Planning

## 3. Evidence Basis

This plan is based on the following completed documentation stages:

- Internal Medicine Follow-Up V1 final verification summary
- Internal Medicine Follow-Up V1 clinical review checklist
- Internal Medicine Follow-Up V1 seed/script conversion plan
- Internal Medicine Follow-Up V1 metadata export plan
- Internal Medicine Follow-Up V1 sanitized metadata export evidence
- Internal Medicine Follow-Up V1 metadata verification

The latest metadata verification confirmed:

```text
ROW_COUNT=51
GROUP_COUNT=9
GROUP_IDS=1,2,3,4,5,6,7,8,9
FIELD_DISTRIBUTION=4,7,7,5,6,6,4,7,5
METADATA_VERIFICATION_STATUS=PASS
