# Internal Medicine Follow-Up V1 — Executable Seed Script Proposal Draft

## 1. Purpose

This document defines the proposal for a future executable seed script for recreating the Internal Medicine Follow-Up V1 LBF configuration.

This is a proposal document only.

This document does not include executable SQL.

This document does not execute SQL.

This document does not modify OpenEMR runtime configuration.

This document does not claim clean-install reproducibility.

This document does not claim production readiness.

## 2. Project Context

- Repository: DrMohammed2024/openemr-im-core
- Project: OpenEMR IM Core
- Base system: Controlled OpenEMR fork
- Clinical module: Internal Medicine Follow-Up V1
- Layout ID: `LBFim_followup_v1`
- Current implementation method: OpenEMR UI-based LBF configuration
- Current seed/script status: Proposal draft only
- Runtime modification: Not performed by this document
- SQL execution: Not performed by this document

## 3. Prior Completed Documentation Milestones

The following milestones exist before this proposal:

- Internal Medicine Follow-Up V1 final verification summary
- Internal Medicine Follow-Up V1 clinical review checklist
- Internal Medicine Follow-Up V1 seed/script conversion plan
- Internal Medicine Follow-Up V1 metadata export plan
- Internal Medicine Follow-Up V1 sanitized metadata export evidence
- Internal Medicine Follow-Up V1 metadata verification
- Internal Medicine Follow-Up V1 clean install validation plan
- Internal Medicine Follow-Up V1 seed script draft
- Internal Medicine Follow-Up V1 clean install validation evidence template
- Current project state updates through PR #50

## 4. Verified Metadata Baseline

The future executable seed script must reproduce this expected metadata baseline:

```text
form_id: LBFim_followup_v1
ROW_COUNT: 51
GROUP_COUNT: 9
GROUP_IDS: 1,2,3,4,5,6,7,8,9
FIELD_DISTRIBUTION: 4,7,7,5,6,6,4,7,5
METADATA_VERIFICATION_STATUS: PASS
