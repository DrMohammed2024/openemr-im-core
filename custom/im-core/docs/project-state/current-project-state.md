# OpenEMR IM Core — Current Project State

## 1. Purpose

This document records the latest verified state of the OpenEMR IM Core project.

It is intended to help future AI-assisted sessions, maintainers, and reviewers continue the project from the latest verified stopping point without restarting from zero.

This document should be updated after meaningful merged milestones.

## 2. Project Identity

- Project name: OpenEMR IM Core
- Repository: DrMohammed2024/openemr-im-core
- Base system: Controlled OpenEMR fork
- Current clinical focus: Internal Medicine Follow-Up V1
- Current build method: OpenEMR LBF-first customization
- Current execution style: small controlled documentation PRs

## 3. Standing Project Principles

The project follows these principles:

- Upstream-first
- LBF-first for clinical forms
- Configuration-first before code changes
- Avoid OpenEMR core-sensitive changes unless explicitly justified
- No PHI in GitHub
- No real patient data in GitHub
- No credentials in GitHub
- No sensitive logs in GitHub
- No database dumps in GitHub
- No production-readiness claim without completed evidence gates
- No commercial deployment claim without legal, privacy, security, and clinical review
- Runtime LBF configuration must later be converted to seed/script before scalable deployment
- Preferred future deployment model: independent instance per clinic, center, or hospital

## 4. Current Verified Clinical MVP

The current completed clinical MVP is:

- Layout name: Internal Medicine Follow-Up V1
- Layout ID: `LBFim_followup_v1`
- Status: Local LBF MVP verified and documented
- Production readiness: Not claimed
- Clinical validation: Not claimed
- Clean-install reproducibility: Not yet verified
- Seed/script implementation: Not yet implemented
- Seed script draft: Documented
- Clean install validation evidence template: Documented

## 5. Verified Metadata Baseline

The current documented metadata baseline is:

```text
form_id: LBFim_followup_v1
ROW_COUNT: 51
GROUP_COUNT: 9
GROUP_IDS: 1,2,3,4,5,6,7,8,9
FIELD_DISTRIBUTION: 4,7,7,5,6,6,4,7,5
METADATA_VERIFICATION_STATUS: PASS
