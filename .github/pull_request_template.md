# OpenEMR IM Core Pull Request Template

## 1. PR Type

Select all that apply:

- [ ] Documentation only
- [ ] Governance
- [ ] Evidence
- [ ] Traceability
- [ ] Risk
- [ ] SOP / Workflow
- [ ] Security / Privacy
- [ ] Release readiness planning
- [ ] Claims control
- [ ] GitHub governance
- [ ] Runtime implementation - NOT ALLOWED unless explicitly approved by future gates
- [ ] SQL / database change - NOT ALLOWED unless explicitly approved by future gates
- [ ] AI / FHIR / API / frontend - NOT ALLOWED unless explicitly approved by future gates

## 2. Summary

Describe the purpose of this PR.

## 3. Scope

Files added or changed:

-

Scope statement:

-

## 4. Dependency

This PR depends on:

- [ ] PR #92 Evidence Registry and Evidence Templates V0.1
- [ ] PR #93 Traceability Matrix V0.1
- [ ] PR #94 Risk Register V0.1
- [ ] Other:

## 5. Immediate Stop Boundaries

This PR must stop and must not be merged if it includes any of the following:

- [ ] PHI
- [ ] Real patient data
- [ ] Credentials
- [ ] Secrets
- [ ] Sensitive logs
- [ ] Database dumps
- [ ] SQL
- [ ] SQL execution
- [ ] Database migration
- [ ] Production database testing
- [ ] Runtime implementation
- [ ] Runtime AI
- [ ] Machine learning model execution
- [ ] Predictive model execution
- [ ] Autonomous clinical decision support
- [ ] Autonomous diagnosis
- [ ] Autonomous treatment recommendation
- [ ] Autonomous prescribing
- [ ] Emergency triage automation
- [ ] Patient-facing AI
- [ ] Automated patient messaging
- [ ] FHIR/API implementation
- [ ] Frontend implementation
- [ ] OpenEMR core-sensitive changes
- [ ] Demo deployment
- [ ] Pilot deployment
- [ ] Production deployment
- [ ] Commercial deployment

## 6. Claims Boundary

This PR must not claim:

- [ ] Demo readiness
- [ ] Pilot readiness
- [ ] Paid-pilot readiness
- [ ] Production readiness
- [ ] Commercial readiness
- [ ] Clinical validation
- [ ] Regulatory compliance
- [ ] Cybersecurity certification
- [ ] Clean-install reproducibility
- [ ] Medical-device readiness
- [ ] HIPAA compliance
- [ ] GDPR compliance
- [ ] FDA readiness
- [ ] MDR readiness
- [ ] CE marking
- [ ] FDA clearance

## 7. Safety Confirmation

Confirm all applicable items:

- [ ] This PR is documentation/governance only.
- [ ] No PHI is included.
- [ ] No real patient data is included.
- [ ] No credentials, secrets, or tokens are included.
- [ ] No sensitive logs are included.
- [ ] No database dumps are included.
- [ ] No SQL or database migration is included.
- [ ] No runtime implementation is included.
- [ ] No runtime AI or autonomous CDS is included.
- [ ] No FHIR/API implementation is included.
- [ ] No frontend implementation is included.
- [ ] No OpenEMR core-sensitive change is included.
- [ ] No unsupported readiness, validation, compliance, certification, or commercial claim is included.

## 8. Evidence / Traceability / Risk

Evidence IDs:

-

Requirement IDs:

-

Risk IDs:

-

Control IDs:

-

Test IDs:

-

Traceability matrix impact:

- [ ] No update required
- [ ] Update required in this PR
- [ ] Update required in a later documentation PR

Risk register impact:

- [ ] No update required
- [ ] Update required in this PR
- [ ] Update required in a later documentation PR

## 9. Internal Review and Decision

Eligibility classification:

- [ ] Eligible documentation-stage/pre-runtime work under the AI-Assisted
      Solo-Owner Governance Policy V0.1
- [ ] Non-eligible or a future/external qualified-human gate is triggered
- [ ] HOLD — eligibility or applicable obligations are unresolved

For eligible work:

- [ ] GPT multidisciplinary advisory review is complete
- [ ] Project Owner personally reviewed the stated evidence
- [ ] Project Owner decision record is linked and current
- [ ] Decision is APPROVE or merge-permitting APPROVE_WITH_CONDITIONS
- [ ] Review is disclosed as AI-assisted and non-independent
- [ ] Author-owner-reviewer relationship and conflicts are disclosed
- [ ] No separate specialist-human approval is claimed

For non-eligible work or a triggered future/external gate, select the
applicable qualified-human reviewers:

- [ ] Documentation Owner
- [ ] Clinical Safety Owner
- [ ] Technical Owner
- [ ] Privacy/Security Owner
- [ ] Release Owner
- [ ] Governance Owner
- [ ] Claims Reviewer
- [ ] Legal/Regulatory Reviewer, if external claims are involved

## 10. Stop Rule Check

Confirm stop rules have been reviewed:

- [ ] STOP-PHI-001 reviewed
- [ ] STOP-SECRET-001 reviewed
- [ ] STOP-SQL-001 reviewed
- [ ] STOP-RUNTIME-001 reviewed
- [ ] STOP-AI-001 reviewed
- [ ] STOP-FHIR-001 reviewed
- [ ] STOP-FRONTEND-001 reviewed
- [ ] STOP-CORE-001 reviewed
- [ ] STOP-CLAIM-001 reviewed
- [ ] STOP-UNICODE-001 reviewed
- [ ] STOP-SCOPE-001 reviewed
- [ ] STOP-EVIDENCE-001 reviewed
- [ ] STOP-REVIEW-001 reviewed

## 11. Verification

Before merge:

- [ ] `git status --short` reviewed.
- [ ] `git diff --name-only master...HEAD` shows only intended files.
- [ ] Markdown renders cleanly.
- [ ] PR body file such as `prXX_body.md` is not committed.
- [ ] No hidden or bidirectional Unicode control characters are present, or any GitHub warning has been reviewed.
- [ ] Checks pass, or skipped/non-applicable checks are documented.

## 12. Rollback / Correction Plan

Describe how this PR can be reverted, corrected, or superseded.

## 13. After Merge

Describe required cleanup or next step.

## 14. Golden Rule

The system must support clinicians. It must not replace clinicians.
