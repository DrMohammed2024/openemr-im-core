# Failure Modes and Safe Response Library V0.1 — OpenEMR IM Core

## Status

Documentation-only / Evidence-gated / Not production-ready.

## Purpose

This document defines known and anticipated failure modes for OpenEMR IM Core and the safe responses required before any stronger readiness claim is made.

It is intended to protect the project from unsafe assumptions, unsupported claims, premature implementation, PHI exposure, SQL execution, runtime AI, frontend implementation, FHIR/API implementation, or OpenEMR core-sensitive changes.

## Scope

This document applies to:

- OpenEMR IM Core
- Internal Medicine Follow-Up V1
- Layout ID: `LBFim_followup_v1`
- GitHub documentation workflow
- Validation and evidence workflow
- Clinical safety documentation risks
- Repository hygiene
- Future AI, frontend, FHIR/API, demo, pilot, and commercial boundaries

## Out of Scope

This document does not implement or approve:

- Runtime OpenEMR changes
- SQL execution
- Seed/script execution
- OpenEMR core-sensitive changes
- Runtime AI
- Frontend implementation
- FHIR/API implementation
- Demo readiness
- Pilot readiness
- Paid-pilot readiness
- Production readiness
- Commercial readiness
- Clinical validation
- Regulatory compliance
- Cybersecurity certification

## User-Provided Metadata Baseline

The following baseline is treated as project-owner-provided unless independently reproduced in future validation evidence.

| Item | Value |
|---|---|
| Layout ID | `LBFim_followup_v1` |
| ROW_COUNT | 51 |
| GROUP_COUNT | 9 |
| GROUP_IDS | 1,2,3,4,5,6,7,8,9 |
| FIELD_DISTRIBUTION | 4,7,7,5,6,6,4,7,5 |
| METADATA_VERIFICATION_STATUS | PASS |

This baseline must not be expanded into a production-readiness, clinical-validation, runtime-safety, RBAC, audit, backup, restore, clean-install, frontend, AI, FHIR, demo, pilot, or commercial-readiness claim.

## Known Clinical Groups

1. Visit Context
2. Vital Signs Review
3. Chronic Conditions Review
4. Medication Review
5. Symptoms Review
6. Physical Exam Summary
7. Assessment
8. Plan
9. Patient Safety and Follow-up

## Failure Mode Library

| ID | Failure mode | Category | Detection method | Safe response | Escalation | Blocked claim |
|---|---|---|---|---|---|---|
| FM-001 | PR #81 is created before PR #80 is verified merged | GitHub workflow | `gh pr view 80` | Stop and verify `master` first | Maintainer | PR sequence complete |
| FM-002 | PR #81 already exists but duplicate branch is created | GitHub workflow | `gh pr view 81` | Stop and review existing PR #81 only | Maintainer | Current PR ready |
| FM-003 | PR body is pasted into Markdown file content | Documentation hygiene | Manual review | Remove PR body from file content | Maintainer | Documentation clean |
| FM-004 | PHI or real patient data is included | Privacy | Manual review / repository scan | Remove immediately and block merge | Privacy reviewer | Repository safe |
| FM-005 | Credentials, secrets, sensitive logs, or database dumps are included | Security | Manual review / repository scan | Remove immediately and rotate secret if needed | Security reviewer | Repository safe |
| FM-006 | Layout ID mismatch is introduced | LBF metadata | Compare with `LBFim_followup_v1` | Correct documentation or require evidence | OpenEMR builder | Metadata consistent |
| FM-007 | Metadata baseline is overstated as runtime readiness | Claims control | Claims review | Rewrite as user-provided baseline only | Maintainer | Runtime verified |
| FM-008 | Clinical groups are documented incorrectly | Clinical documentation | Compare with known 9 groups | Correct group names/order | Clinical reviewer | Clinical structure verified |
| FM-009 | Assessment lacks corresponding plan | Clinical workflow | Clinical checklist | Mark as documentation risk and require clinician review | Clinical reviewer | Workflow safety assured |
| FM-010 | Medication review is incomplete | Clinical safety | Medication checklist | Add review checkpoint; no autonomous prescribing | Clinical reviewer | Medication safety assured |
| FM-011 | Allergy status is missing or unclear | Clinical safety | Allergy checklist | Require allergy status review in future workflow | Clinical reviewer | Allergy safety assured |
| FM-012 | Safety-net follow-up is incomplete | Clinical safety | Safety-net checklist | Require safety-net documentation checkpoint | Clinical reviewer | Patient safety assured |
| FM-013 | Open loop lacks owner or due date | Clinical operations | Open-loop checklist | Require owner, due date, status, and closure rule | Clinical/operations reviewer | Open-loop tracking implemented |
| FM-014 | Pending result follow-up is undocumented | Clinical operations | Pending-result checklist | Define responsibility and follow-up requirement | Clinical reviewer | Results safety assured |
| FM-015 | Abnormal vital sign lacks acknowledgement | Clinical safety | Vitals checklist | Require clinician acknowledgement model; no autonomous triage | Clinical reviewer | Triage safety |
| FM-016 | RBAC is assumed without testing | Security/RBAC | RBAC checklist | Mark as unknown until tested | Security reviewer | Access control verified |
| FM-017 | Audit logging is assumed without evidence | Security/audit | Audit checklist | Mark as unknown until sanitized audit evidence exists | Security reviewer | Auditability verified |
| FM-018 | Clean-install reproducibility is assumed | Operations | Clean-install checklist | Mark as not verified until reproduced | Operations reviewer | Clean-install reproducible |
| FM-019 | Backup/restore is assumed | Operations | Backup checklist | Require backup and restore test evidence | Operations reviewer | Operational resilience |
| FM-020 | Runtime AI is implied or marketed | AI governance | Documentation/code review | Remove claim or defer to future governed plan | Clinical/compliance reviewer | AI ready |
| FM-021 | AI output appears final or authoritative | AI safety | Documentation/UI review | Require draft-only and clinician review wording | Clinical reviewer | AI safety assured |
| FM-022 | Autonomous diagnosis, prescribing, treatment, or triage is suggested | Clinical safety/compliance | Claims review | Remove immediately and block merge if unresolved | Clinical/compliance reviewer | CDS/SaMD readiness |
| FM-023 | Frontend/dashboard implementation is started too early | Architecture | Scope review | Defer to future documentation-only planning | Architect | UI implemented |
| FM-024 | FHIR/API implementation is started too early | Interoperability | Scope review | Defer until API/runtime evidence exists | Architect | FHIR implemented |
| FM-025 | Demo, pilot, commercial, or production readiness is implied | Claims control | Claims review | Replace with evidence-gated not-ready wording | Maintainer | Readiness claim |
| FM-026 | Runtime form visibility is assumed without evidence | Runtime verification | Runtime checklist | Mark unknown until sanitized runtime evidence exists | OpenEMR builder | Runtime form verified |
| FM-027 | Encounter preview behavior is assumed without evidence | Runtime verification | Encounter checklist | Require synthetic encounter preview evidence | OpenEMR builder | Encounter preview verified |
| FM-028 | Field-level metadata is assumed beyond baseline | Metadata verification | Metadata checklist | Keep unknown unless observed evidence exists | OpenEMR builder | Field metadata verified |
| FM-029 | Clinical validation is implied from documentation completeness | Clinical governance | Claims review | State documentation completeness is not clinical validation | Clinical reviewer | Clinically validated |
| FM-030 | Legal, regulatory, HIPAA, GDPR, MDR, FDA, or cybersecurity compliance is implied | Compliance boundary | Compliance review | Replace with requires qualified review and evidence | Compliance/security reviewer | Compliant/certified |

## Safe Response Rules

1. Stop the PR if PHI, real patient data, credentials, secrets, sensitive logs, database dumps, SQL execution, runtime AI, frontend implementation, or FHIR/API implementation appears.
2. Rewrite unsupported claims as `not yet verified`, `requires evidence`, or `documentation-only`.
3. Do not proceed to PR #82 until PR #81 is merged.
4. Keep PR body separate from Markdown file content.
5. Preserve OpenEMR-first, LBF-first, configuration-first, upstream-first, and fork-minimal posture.
6. Treat future AI, frontend, FHIR/API, demo, pilot, and commercial plans as deferred unless separately scoped and verified.
7. Do not claim production readiness, clinical validation, regulatory compliance, cybersecurity certification, or safe live-patient use.

## Required Evidence Before Stronger Claims

| Claim | Required evidence |
|---|---|
| Runtime form verified | Sanitized runtime evidence showing the form opens in the expected OpenEMR workflow |
| Encounter preview verified | Synthetic-patient encounter preview evidence |
| Metadata verified | Metadata evidence matching documented baseline and field-level review |
| RBAC verified | Role-based access test evidence |
| Audit behavior verified | Sanitized audit review evidence |
| Backup/restore verified | Backup and restore procedure evidence from a test environment |
| Clean-install reproducible | Clean environment recreation evidence |
| Demo-ready | Synthetic-data-only demo safety evidence and explicit demo-scope review |
| Pilot-ready | Runtime, clinical, privacy, security, RBAC, audit, backup/restore, clean-install, and legal/compliance boundary evidence |
| Production-ready | Full production readiness gates and qualified reviews |
| Clinical validation | Formal clinical governance and validation evidence |
| Regulatory/compliance readiness | Qualified legal/regulatory review and evidence |
| Cybersecurity certification | Formal security assessment/certification evidence, if required |
| Runtime AI readiness | AI governance, human review workflow, audit model, and validation evidence |
| FHIR/API readiness | Runtime API configuration, authentication, authorization, mapping, testing, privacy, and conformance evidence |

## Final Boundary Statement

This document is a documentation-only failure mode and safe response library. It does not implement runtime controls, modify OpenEMR, execute SQL, introduce AI, implement frontend or FHIR/API capabilities, or claim demo, pilot, production, commercial, clinical, regulatory, or cybersecurity readiness.
