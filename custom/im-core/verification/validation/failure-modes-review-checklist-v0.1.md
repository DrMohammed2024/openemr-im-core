# Failure Modes Review Checklist V0.1 — OpenEMR IM Core

## Status

Documentation-only checklist.

## Purpose

This checklist verifies that PR #81 remains limited to the Failure Modes and Safe Response Library V0.1 and does not introduce runtime implementation, unsupported claims, PHI, secrets, SQL, AI, frontend, FHIR/API, demo, pilot, production, or commercial-readiness work.

## PR Scope Check

- [ ] This PR is PR #81 or intended PR #81.
- [ ] PR #80 is verified merged before creating this PR.
- [ ] PR #81 did not already exist before creating this branch.
- [ ] No PR #82 work is included.
- [ ] Scope is limited to failure modes and safe response documentation.

## File Separation Check

- [ ] Markdown files contain documentation content only.
- [ ] PR body is not pasted into Markdown file content.
- [ ] PR body is kept only in GitHub PR description.
- [ ] File names and paths match the intended PR #81 scope.

## Safety and Privacy Check

- [ ] No PHI.
- [ ] No real patient data.
- [ ] No real patient names.
- [ ] No real dates of birth.
- [ ] No real phone numbers.
- [ ] No real addresses.
- [ ] No real MRNs.
- [ ] No credentials.
- [ ] No passwords.
- [ ] No API keys.
- [ ] No private tokens.
- [ ] No secrets.
- [ ] No sensitive logs.
- [ ] No database dumps.
- [ ] No production data.
- [ ] No real screenshots with identifiers.

## Architecture Boundary Check

- [ ] No SQL execution.
- [ ] No database-changing script.
- [ ] No runtime OpenEMR changes.
- [ ] No OpenEMR core-sensitive changes.
- [ ] No runtime AI.
- [ ] No frontend implementation.
- [ ] No FHIR/API implementation.
- [ ] No demo implementation.
- [ ] No pilot implementation.
- [ ] No production deployment work.
- [ ] No commercial deployment work.

## Claims Check

- [ ] No production-readiness claim.
- [ ] No pilot-readiness claim.
- [ ] No paid-pilot-readiness claim.
- [ ] No commercial-readiness claim.
- [ ] No clinical-validation claim.
- [ ] No regulatory-compliance claim.
- [ ] No legal-approval claim.
- [ ] No HIPAA-compliance claim.
- [ ] No GDPR-compliance claim.
- [ ] No MDR/FDA-readiness claim.
- [ ] No cybersecurity-certification claim.
- [ ] No AI-readiness claim.
- [ ] No FHIR-readiness claim.
- [ ] No patient-safety assurance claim.
- [ ] No safe-live-patient-use claim.

## Metadata Consistency Check

- [ ] Layout ID uses `LBFim_followup_v1`.
- [ ] Metadata baseline is labeled as user-provided unless independently verified.
- [ ] ROW_COUNT is listed as 51 only within the provided baseline.
- [ ] GROUP_COUNT is listed as 9.
- [ ] GROUP_IDS are listed as 1,2,3,4,5,6,7,8,9.
- [ ] FIELD_DISTRIBUTION is listed as 4,7,7,5,6,6,4,7,5.
- [ ] METADATA_VERIFICATION_STATUS is listed as PASS only within the provided baseline.
- [ ] Clinical groups match the known 9 groups.

## Known Clinical Groups Check

- [ ] Visit Context
- [ ] Vital Signs Review
- [ ] Chronic Conditions Review
- [ ] Medication Review
- [ ] Symptoms Review
- [ ] Physical Exam Summary
- [ ] Assessment
- [ ] Plan
- [ ] Patient Safety and Follow-up

## Failure Mode Coverage Check

- [ ] GitHub workflow failure modes included.
- [ ] Documentation hygiene failure modes included.
- [ ] Privacy failure modes included.
- [ ] Security failure modes included.
- [ ] LBF metadata failure modes included.
- [ ] Clinical workflow failure modes included.
- [ ] Medication review failure modes included.
- [ ] Allergy review failure modes included.
- [ ] Safety-net failure modes included.
- [ ] Open-loop follow-up failure modes included.
- [ ] Pending result follow-up failure modes included.
- [ ] Abnormal vital sign follow-up failure modes included.
- [ ] RBAC/ACL failure modes included.
- [ ] Audit/logging failure modes included.
- [ ] Backup/restore failure modes included.
- [ ] Clean-install reproducibility failure modes included.
- [ ] AI boundary failure modes included.
- [ ] Frontend deferral failure modes included.
- [ ] FHIR/API deferral failure modes included.
- [ ] Demo/pilot/commercial/production claim failure modes included.

## Safe Response Coverage Check

- [ ] Each listed failure mode has a detection method.
- [ ] Each listed failure mode has a safe response.
- [ ] Each listed failure mode has an escalation path.
- [ ] Each listed failure mode identifies at least one blocked claim.
- [ ] Safe responses do not introduce runtime implementation.
- [ ] Safe responses do not recommend SQL.
- [ ] Safe responses do not recommend autonomous diagnosis, prescribing, treatment recommendation, emergency triage, or clinical decision support.

## Required Evidence Check

- [ ] Runtime verification evidence is required before runtime claims.
- [ ] Encounter preview evidence is required before encounter preview claims.
- [ ] Metadata evidence is required before metadata claims beyond the baseline.
- [ ] RBAC test evidence is required before access-control claims.
- [ ] Audit review evidence is required before auditability claims.
- [ ] Backup/restore evidence is required before operational resilience claims.
- [ ] Clean-install evidence is required before reproducibility claims.
- [ ] Clinical governance evidence is required before clinical validation claims.
- [ ] Legal/regulatory review evidence is required before compliance claims.
- [ ] Security assessment evidence is required before cybersecurity claims.

## Repository Hygiene Commands

Run before commit:

    git status --short
    git diff --check
    git diff --stat
    grep -RInE "api[_-]?key|password|secret|token|DOB|date of birth|MRN|phone|address|patient name" custom/im-core || true

## Final Review Decision

Status:

- [ ] Acceptable for PR #81
- [ ] Requires revision
- [ ] Blocked

Reviewer notes:
