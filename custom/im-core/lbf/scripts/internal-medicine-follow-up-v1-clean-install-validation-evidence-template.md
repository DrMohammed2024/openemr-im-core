# Internal Medicine Follow-Up V1 — Clean Install Validation Evidence Template

## 1. Purpose

This document provides the evidence template for future non-production clean install validation of the Internal Medicine Follow-Up V1 LBF configuration.

This is an evidence-capture template only.

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
- Current stage: Clean install validation evidence template
- Runtime modification: Not performed by this document
- SQL execution: Not performed by this document

## 3. Prior Completed Documentation Milestones

The following milestones are documented before this evidence template:

- Internal Medicine Follow-Up V1 final verification summary
- Internal Medicine Follow-Up V1 clinical review checklist
- Internal Medicine Follow-Up V1 seed/script conversion plan
- Internal Medicine Follow-Up V1 metadata export plan
- Internal Medicine Follow-Up V1 sanitized metadata export evidence
- Internal Medicine Follow-Up V1 metadata verification
- Internal Medicine Follow-Up V1 clean install validation plan
- Internal Medicine Follow-Up V1 seed script draft
- Current project state update after seed script draft

## 4. Expected Metadata Baseline

Future clean install validation must compare results against this baseline:

```text
form_id: LBFim_followup_v1
ROW_COUNT: 51
GROUP_COUNT: 9
GROUP_IDS: 1,2,3,4,5,6,7,8,9
FIELD_DISTRIBUTION: 4,7,7,5,6,6,4,7,5
METADATA_VERIFICATION_STATUS: PASS
