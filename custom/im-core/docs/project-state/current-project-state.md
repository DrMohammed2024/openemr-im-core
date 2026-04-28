# OpenEMR IM Core — Current Project State

## 1. Purpose

This document records the latest verified state of the OpenEMR IM Core project.

It is intended to help future AI-assisted sessions, maintainers, and reviewers continue the project from the latest verified stopping point without restarting from zero.

This document should be updated after meaningful merged milestones.

This document is a project-state source of truth for planning and documentation continuity only. It does not claim production readiness, clinical validation, regulatory compliance, cybersecurity certification, or clean-install reproducibility.

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
```

This baseline is documentation evidence only.

It does not prove:

- clean-install reproducibility
- production readiness
- clinical validation
- regulatory compliance
- cybersecurity certification
- commercial deployment readiness

---

## 6. Current Verified Clinical Groups

The Internal Medicine Follow-Up V1 LBF structure contains these clinical groups:

1. Visit Context
2. Vital Signs Review
3. Chronic Conditions Review
4. Medication Review
5. Symptoms Review
6. Physical Exam Summary
7. Assessment
8. Plan
9. Patient Safety and Follow-up

---

## 7. Recently Completed Documentation Milestones

The project has completed a controlled documentation sequence around LBF verification, metadata documentation, clean-install planning, seed/script governance, SQL non-execution boundaries, and project-state update planning.

The current documentation set includes planning or governance documents for:

- Internal Medicine Follow-Up V1 LBF MVP verification
- final verification summary
- clinical review checklist
- seed/script conversion planning
- metadata export planning
- sanitized metadata export evidence
- metadata verification
- clean install validation planning
- clean install validation evidence template
- executable seed script proposal
- seed script review planning
- seed script candidate safety gate
- pre-SQL candidate evidence checklist
- target table mapping review
- non-production environment requirements
- backup and rollback planning
- SQL candidate non-execution policy
- SQL candidate review template
- end-of-session project state update planning

These documents support controlled future work, but they do not authorize SQL execution, runtime changes, production deployment, clinical-use claims, or regulatory claims.

---

## 8. Recently Merged Governance Milestones

The following recent governance milestones are treated as the latest known documentation sequence based on available project evidence:

- PR #46 — Clean install validation plan
- PR #51 — Executable seed script proposal package
- PR #54 — Seed script review plan
- PR #55 — Seed script candidate safety gate
- PR #56 — Pre-SQL candidate evidence checklist
- PR #57 — Target table mapping review
- PR #58 — Non-production environment requirements
- PR #59 — Backup and rollback plan
- PR #60 — SQL candidate non-execution policy
- PR #61 — SQL candidate review template
- PR #62 — End-of-session project state update plan

Important caution:

GitHub UI evidence may occasionally show stale or inconsistent PR listings. Future maintainers should verify PR status directly from GitHub before treating any PR as the latest repository truth.

---

## 9. Current Active Stage

Current active stage:

```text
Close seed/script governance documentation phase and prepare for documentation-only Clinical Intelligence Architecture.
```

Immediate next step:

```text
Update current-project-state.md after the seed/script governance documentation sequence.
```

Next stage after this project-state update:

```text
Start documentation-only Clinical Intelligence Architecture for Internal Medicine Follow-Up V1.
```

---

## 10. Seed / Script Governance Status

Current status:

- Seed/script governance: documented
- SQL candidate review boundary: documented
- SQL non-execution policy: documented
- Backup and rollback planning: documented
- Non-production environment requirements: documented
- Target table mapping review: documented
- Pre-SQL evidence checklist: documented
- SQL candidate review template: documented
- Executable SQL seed script: not implemented
- SQL execution: not approved
- Runtime OpenEMR modification: not approved
- OpenEMR core-sensitive change: not approved
- Clean-install reproducibility: not claimed

Required future evidence before any SQL candidate execution:

- explicit approval to create SQL candidate
- explicit approval to execute SQL candidate
- non-production environment confirmation
- backup confirmation
- rollback path confirmation
- target table mapping review
- pre-SQL evidence checklist completion
- post-execution metadata verification plan
- failure handling plan
- no PHI
- no credentials
- no database dumps
- no sensitive logs

---

## 11. Clinical Intelligence Readiness

The project is ready to begin a documentation-only Clinical Intelligence Architecture phase after this state update.

The Clinical Intelligence phase must remain:

- clinician-reviewed
- documentation-first
- rule-based before predictive
- explainable
- traceable to LBF fields
- human-in-the-loop
- audit-ready by design
- non-autonomous
- non-production
- non-clinically validated until formal evidence exists
- non-regulatory-compliant unless formal compliance review is completed

The Clinical Intelligence phase must not implement:

- machine learning
- predictive risk models
- autonomous diagnosis
- autonomous treatment recommendation
- autonomous prescribing
- autonomous emergency triage
- autonomous clinical decision support
- production clinical decision support
- OpenEMR runtime modification
- OpenEMR core-sensitive change

---

## 12. Recommended Next Documentation Package

Recommended next PR after this current-project-state update:

```text
custom/im-core/docs/clinical-intelligence/internal-medicine-follow-up-v1-clinical-intelligence-architecture.md
```

Recommended architecture:

```text
Documentation-only Clinical Intelligence Architecture
```

Recommended future modules to define:

1. Clinical Completeness Checker
2. Red Flag Review Assistant
3. Medication Review Assistant
4. Chronic Disease Follow-up Review
5. Follow-up Safety Net Checker
6. Plan Consistency Checker
7. Open Loops Tracker
8. Trend Review Assistant
9. Clinical Summary Generator
10. Predictive Risk Flagging — future planning only

---

## 13. Future Clinical Intelligence Documentation Roadmap

After this project-state update, the recommended documentation sequence is:

1. Clinical Intelligence Architecture
2. Rule-based Clinical Review Checks
3. Human-in-the-loop Review Workflow
4. Clinical Safety Boundary
5. Open Loops and Safety-Net Tracking Plan
6. Audit and Explainability Plan
7. Clinical Summary Generator Boundary
8. Trend Review Plan
9. Validation Evidence Plan
10. Regulatory Boundary Statement
11. No-PHI Development Policy
12. Predictive Analytics Research Plan
13. Future SMART/FHIR/CDS Hooks Integration Boundary
14. EHR Safety and Human Factors Review Plan
15. False Positive / False Negative Handling Plan
16. Future Risk Management Plan

All items in this roadmap are documentation-only until explicitly approved otherwise.

---

## 14. Safety and Regulatory Boundary

OpenEMR IM Core currently supports structured clinical documentation planning.

It must not be described as:

- autonomous diagnosis
- treatment automation
- prescribing automation
- emergency triage automation
- clinically validated
- production-ready
- regulatory compliant
- medical-device-ready
- cybersecurity certified
- clean-install reproducible
- commercially deployable

Any future clinical intelligence output must support clinician review only and must not replace clinician judgment.

---

## 15. Privacy and Security Boundary

The repository must not contain:

- PHI
- real patient data
- credentials
- API keys
- secrets
- sensitive logs
- database dumps
- production configuration exports
- identifiable screenshots

Synthetic examples and sanitized documentation may be used when needed.

Future privacy/security evidence may include:

- PHI scan evidence
- secrets scan evidence
- screenshot sanitization review
- RBAC review
- audit logging review
- non-production environment confirmation

None of those are claimed as completed by this document unless separately evidenced.

---

## 16. Known Unknowns / Evidence Gaps

The following remain unknown or not yet proven:

- current open PR count if GitHub UI/API surfaces disagree
- final resolution of any stale or duplicate PRs if GitHub displays inconsistent PR state
- clean-install reproducibility
- runtime seed/script execution
- SQL candidate execution
- clinical validation
- regulatory compliance
- cybersecurity certification
- production readiness
- commercial deployment readiness
- formal RBAC/security review
- formal human factors review
- formal clinical intelligence validation plan
- predictive analytics governance package
- model bias/fairness review
- monitoring and drift review for any future predictive model

---

## 17. Next-Step Decision

The strongest next controlled step is:

```text
Update this current project state file after the seed/script governance documentation sequence.
```

After this file is merged, the next controlled step should be:

```text
Create the documentation-only Clinical Intelligence Architecture package.
```

No SQL, runtime modification, machine learning, predictive model, production deployment, autonomous clinical decision support, or OpenEMR core-sensitive change should be performed at this stage.

---

## 18. What Not To Do Yet

Do not do the following at the current stage:

- Do not create an executable `.sql` candidate.
- Do not execute SQL.
- Do not modify OpenEMR runtime behavior.
- Do not modify OpenEMR core files.
- Do not build a machine learning model.
- Do not build a predictive risk model.
- Do not implement autonomous clinical decision support.
- Do not implement autonomous triage.
- Do not implement autonomous prescribing.
- Do not build a diagnosis engine.
- Do not build a treatment recommendation engine.
- Do not deploy to production.
- Do not use real patient data.
- Do not include PHI.
- Do not include credentials, secrets, logs, or database dumps.
- Do not claim clinical validation.
- Do not claim production readiness.
- Do not claim clean-install reproducibility.
- Do not claim regulatory compliance.
- Do not claim cybersecurity certification.

---

## 19. Last Updated Context

- Update reason: close seed/script governance documentation phase and prepare the project for Clinical Intelligence Architecture.
- Update type: documentation-only.
- Latest known merged project-state planning milestone: PR #62.
- No PHI included.
- No real patient data included.
- No credentials included.
- No sensitive logs included.
- No database dumps included.
- No SQL included.
- No SQL execution approved.
- No runtime modification approved.
- No OpenEMR core-sensitive change included.
- No machine learning included.
- No predictive model included.
- No autonomous clinical decision support included.
- No production-readiness claim included.
- No clinical validation claim included.
- No clean-install reproducibility claim included.
- No regulatory compliance claim included.
