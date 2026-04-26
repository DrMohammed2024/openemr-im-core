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

## 5. Completed Internal Medicine Follow-Up V1 Groups

The following groups have been built, locally verified, metadata-checked in batches, and documented:

1. Visit Context
2. Vital Signs Review
3. Chronic Conditions Review
4. Medication Review
5. Symptoms Review
6. Physical Exam Summary
7. Assessment
8. Plan
9. Patient Safety and Follow-up

## 6. Completed Documentation Milestones

The following documentation milestones have been completed:

- Product Readiness Roadmap
- Internal Medicine Follow-Up V1 final verification summary
- Internal Medicine Follow-Up V1 clinical review checklist
- Internal Medicine Follow-Up V1 seed/script conversion plan

## 7. Latest Completed Stage

Latest completed stage:

```text
Seed/script conversion planning
