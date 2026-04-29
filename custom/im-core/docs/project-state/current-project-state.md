# OpenEMR IM Core — Current Project State

## 1. Purpose

This document records the latest verified state of the OpenEMR IM Core project.

It is intended to help future AI-assisted sessions, maintainers, and reviewers continue the project from the latest verified stopping point without restarting from zero.

This document should be updated after meaningful merged milestones.

This document is a project-state source of truth for planning and documentation continuity only.

It does not claim production readiness, clinical validation, regulatory compliance, cybersecurity certification, commercial deployment readiness, or clean-install reproducibility.

---

## 2. Project Identity

- Project name: OpenEMR IM Core
- Repository: `DrMohammed2024/openemr-im-core`
- Base system: Controlled OpenEMR fork
- Current clinical focus: Internal Medicine Follow-Up V1
- Current layout ID: `LBFim_followup_v1`
- Current build method: OpenEMR LBF-first customization
- Current execution style: small controlled documentation PRs
- Current implementation posture: documentation-first, evidence-gated, no PHI, no production claim

---

## 3. Standing Project Principles

The project follows these principles:

- Upstream-first
- LBF-first for clinical forms
- Configuration-first before code changes
- Documentation-first before implementation
- Evidence-gated development
- Small controlled PRs
- Avoid OpenEMR core-sensitive changes unless explicitly justified
- No PHI in GitHub
- No real patient data in GitHub
- No credentials in GitHub
- No API keys or secrets in GitHub
- No sensitive logs in GitHub
- No database dumps in GitHub
- No production configuration exports in GitHub
- No SQL execution unless explicitly approved later
- No runtime modification unless explicitly approved later
- No production-readiness claim without completed evidence gates
- No clinical validation claim without formal clinical review evidence
- No clean-install reproducibility claim until clean-install evidence exists
- No regulatory compliance claim without formal compliance review
- No cybersecurity certification claim without formal security evidence
- No autonomous clinical decision support
- No predictive AI implementation before governance, validation, bias review, monitoring, and human-in-the-loop controls
- Runtime LBF configuration must later be converted to seed/script before scalable deployment
- Preferred future deployment model: independent instance per clinic, center, or hospital

---

## 4. Current Verified Clinical MVP

The current completed clinical MVP remains:

- Layout name: Internal Medicine Follow-Up V1
- Layout ID: `LBFim_followup_v1`
- Status: Local LBF MVP verified and documented from prior evidence
- Production readiness: Not claimed
- Clinical validation: Not claimed
- Clean-install reproducibility: Not yet verified
- Seed/script implementation: Not yet implemented
- SQL execution: Not approved
- Runtime modification in this documentation phase: Not approved
- OpenEMR core-sensitive change in this phase: Not approved

---

## 5. Current Verified Metadata Baseline

The current verified metadata baseline is:

```text
form_id: LBFim_followup_v1
ROW_COUNT: 51
GROUP_COUNT: 9
GROUP_IDS: 1,2,3,4,5,6,7,8,9
FIELD_DISTRIBUTION: 4,7,7,5,6,6,4,7,5
METADATA_VERIFICATION_STATUS: PASS
