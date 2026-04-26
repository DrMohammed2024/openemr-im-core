# OpenEMR IM Core — Product Readiness Roadmap

## 1. Purpose

This document defines the practical execution roadmap for building OpenEMR IM Core from the current local OpenEMR LBF customization into a controlled, documented, medically reviewable, security-aware, and eventually deployable healthcare product path.

This roadmap is intended to preserve the working method used in the project and prevent uncontrolled expansion, unsafe shortcuts, undocumented changes, or premature production claims.

## 2. Project Identity

- Project name: OpenEMR IM Core
- Repository: DrMohammed2024/openemr-im-core
- Upstream: openemr/openemr
- Operational branch: master
- Current architecture: Controlled OpenEMR fork
- Current customization method: LBF-first clinical customization
- Current runtime environment: Android / Termux
- Current local runtime path: `/data/data/com.termux/files/home/openemr_im_git`

## 3. Core Architecture Decision

The project will continue as:

- a controlled OpenEMR fork
- upstream-first
- LBF-first for the first clinical customization
- configuration-first before code changes
- no OpenEMR core-sensitive path modification unless explicitly justified
- GitHub-based documentation and verification evidence
- local runtime database configuration until later seed/script conversion

The project will not be treated as:

- a standalone EMR replacement
- a production-ready medical product at the current stage
- an uncontrolled divergent fork
- a multi-tenant platform at the current stage
- a cloud deployment project before MVP stabilization
- an AI clinical decision system before formal safety boundaries

## 4. Current Build Philosophy

The current build method is:

**Controlled, incremental, evidence-based, configuration-first OpenEMR LBF customization**

This means:

1. Create fields using OpenEMR Layout Editor UI.
2. Verify rendering in Encounter Preview.
3. Verify non-PHI metadata from `layout_options`.
4. Document evidence in GitHub.
5. Use small batches or controlled milestones.
6. Avoid OpenEMR core modification.
7. Avoid PHI, credentials, sensitive logs, and database dumps.
8. Convert verified metadata into seed/script only after the clinical MVP stabilizes.

## 5. Current Verified Clinical MVP Scope

The current LBF layout is:

- Layout name: Internal Medicine Follow-Up V1
- Layout ID: LBFim_followup_v1

Verified or in-progress groups include:

### Visit Context

- Follow-up reason
- Visit type
- Main complaint
- Interval history since last visit

### Vital Signs Review

- Blood pressure
- Heart rate
- Respiratory rate
- Temperature
- Oxygen saturation
- Weight
- BMI note

### Chronic Conditions Review

Batch 1:

- Hypertension status
- Diabetes status
- Dyslipidemia status

Batch 2:

- CKD status
- Cardiovascular disease status
- Respiratory disease status
- Other chronic condition notes

### Medication Review

Batch 1:

- Current medication list reviewed
- Medication changes since last visit
- Medication adherence concerns
- Medication side effects
- Refill needs

### Symptoms Review

Batch 1:

- New symptoms since last visit
- Chest pain
- Shortness of breath
- Dizziness or syncope
- Edema
- Other symptom notes

### Physical Exam Summary

Batch 1:

- General appearance
- Cardiovascular exam
- Respiratory exam
- Abdominal exam
- Extremities exam
- Neurological exam

### Assessment

Batch 1:

- Assessment summary
- Problem list update
- Clinical risk level
- Differential notes

## 6. Evidence Types Used So Far

The project relies on the following evidence layers:

### 6.1 Runtime evidence

Evidence that the LBF group and fields render in OpenEMR Encounter Preview.

### 6.2 Database metadata evidence

Evidence from the OpenEMR `layout_options` table confirming:

- `form_id`
- `group_id`
- `seq`
- `source`
- `field_id`
- `title`
- `uor`
- `data_type`
- `fld_length`
- `max_length`
- `titlecols`
- `datacols`

### 6.3 GitHub traceability evidence

Evidence committed through Pull Requests, including:

- runtime confirmation
- database metadata snapshot
- README/status updates
- milestone verification files

### 6.4 Safety evidence

Evidence that the documentation contains:

- no PHI
- no patient data
- no credentials
- no sensitive logs
- no database dumps
- no OpenEMR core modifications

## 7. Improved Batch Workflow

The project initially used separate PRs for runtime confirmation and database snapshots.

After the workflow was proven, the process was improved to reduce execution time.

The improved workflow is:

1. OpenEMR UI field creation.
2. Encounter Preview verification.
3. Termux metadata verification.
4. One combined verification PR.
5. README update only at milestones, not after every small batch.

This workflow is called:

**Single-PR verified batch workflow**

For multi-group milestones, the workflow is:

**Multi-group verified milestone workflow**

## 8. Rules for Future LBF Work

### 8.1 Field creation rules

Use OpenEMR UI for creating LBF groups and fields.

Do not use SQL insert/update for field creation at the current stage.

For each new field:

1. Click Add Field.
2. Enter field values.
3. Click Save New Field.
4. Repeat for the next field.
5. After all fields are added, click Save Changes.
6. Verify in Encounter Preview.

### 8.2 Metadata verification rules

Use Termux/PHP only for verification.

The verification command must:

- read DB settings from `sites/default/sqlconf.php`
- query only `layout_options`
- avoid patient tables
- avoid printing credentials
- avoid database dumps
- report expected `ROW_COUNT`

### 8.3 GitHub documentation rules

Each verification file must include:

- purpose
- project context
- runtime execution method
- fields verified
- Encounter Preview confirmation
- database metadata output
- safety status
- status/next step

### 8.4 Prohibited actions

Do not:

- commit PHI
- commit credentials
- commit sensitive logs
- commit database dumps
- use real patient data
- modify OpenEMR core-sensitive paths without justification
- claim production readiness
- start deployment before MVP stabilization
- start AI integration before safety boundaries
- start multi-tenant architecture prematurely

## 9. Remaining MVP Build Plan

The remaining clinical MVP should be completed in controlled milestones.

### 9.1 Plan Batch 1

Recommended fields:

- Treatment plan
- Medication plan
- Lab orders plan
- Imaging plan
- Referrals plan
- Follow-up interval
- Patient instructions

### 9.2 Patient Safety / Follow-up Batch

Recommended fields:

- Red flags reviewed
- Return precautions
- Follow-up responsibility
- Pending results follow-up
- Safety-net notes

### 9.3 Final Internal Medicine Follow-Up V1 Verification

Create final verification file:

`custom/im-core/lbf/internal-medicine-follow-up-v1-final-verification.md`

This file should summarize:

- all groups
- all fields
- all verification evidence
- known limitations
- production readiness status
- next required evidence packages

## 10. Product Readiness Evidence Package

After the LBF clinical MVP is complete, the project must build a stronger evidence package before production or sale.

This package must include:

### 10.1 Clinical Review Package

Path:

`custom/im-core/docs/clinical-review/`

Recommended files:

- `internal-medicine-follow-up-v1-clinical-review-checklist.md`
- `clinical-mvp-scope.md`
- `clinical-risk-review.md`
- `clinical-review-signoff-template.md`

Purpose:

- confirm clinical relevance
- confirm field order and completeness
- identify missing clinical safety elements
- confirm usability for internal medicine follow-up
- document physician review

### 10.2 Seed/Script Package

Path:

`custom/im-core/lbf/scripts/`

Recommended file:

- `apply_lbfim_followup_v1.php`

Alternative SQL file:

- `custom/im-core/lbf/sql/lbfim_followup_v1_seed.sql`

Purpose:

- rebuild the LBF layout from GitHub
- avoid manual recreation
- make the project portable
- support future client deployments

The script must be:

- idempotent
- non-destructive
- safe to run more than once
- able to create/update layout groups
- able to create/update fields
- not delete patient data
- not touch OpenEMR core-sensitive paths
- not print credentials or PHI

### 10.3 Clean Install Verification Package

Path:

`custom/im-core/docs/deployment/`

Recommended file:

- `clean-install-verification-report.md`

Purpose:

- verify that the project can be rebuilt on a clean OpenEMR instance
- prove that the LBF seed/script works outside the original Termux runtime
- confirm portability

### 10.4 Security and Privacy Package

Path:

`custom/im-core/docs/security/`

Recommended files:

- `security-baseline.md`
- `rbac-matrix.md`
- `backup-restore-sop.md`
- `no-phi-github-policy.md`
- `access-review-checklist.md`
- `audit-log-review-checklist.md`

Purpose:

- define safe access controls
- prevent PHI leakage
- define backup/restore procedures
- define role-based access
- define audit log expectations
- prepare for real deployment review

### 10.5 Demo Safety Package

Path:

`custom/im-core/docs/demo/`

Recommended files:

- `demo-safety-rules.md`
- `demo-clinic-deployment.md`
- `demo-reset-plan.md`
- `demo-user-permissions.md`

Purpose:

- support safe demo deployment
- prohibit real patient data
- define synthetic/demo data usage
- define demo reset process
- define limited demo user access

### 10.6 Compliance and Legal Boundary Package

Path:

`custom/im-core/docs/compliance/`

Recommended files:

- `medical-device-software-boundary.md`
- `eu-gdpr-notes.md`
- `gulf-data-protection-notes.md`
- `africa-market-entry-notes.md`
- `open-source-license-notes.md`

Purpose:

- define the boundary between EMR customization and medical device software
- document privacy considerations
- document regional data protection considerations
- document OpenEMR licensing considerations
- avoid unsupported compliance claims

## 11. Production Readiness Gates

The project is not production-ready until all of the following are completed.

### Gate 1 — Clinical MVP Complete

- all planned LBF groups are created
- all fields render in Encounter Preview
- all metadata checks pass
- final LBF verification document is merged

### Gate 2 — Clinical Review Complete

- physician review checklist completed
- clinical gaps documented
- safety-net elements reviewed
- usability concerns documented

### Gate 3 — Seed/Script Complete

- LBF seed/script created
- script tested locally
- script tested on clean instance
- output matches expected fields and groups

### Gate 4 — Security Baseline Complete

- RBAC matrix drafted
- backup/restore SOP drafted
- no-PHI GitHub policy documented
- audit log review documented
- secrets handling documented

### Gate 5 — Demo Safety Complete

- demo rules documented
- demo has no PHI
- demo reset plan documented
- demo user permissions documented

### Gate 6 — Deployment Validation Complete

- clean install test completed
- server deployment guide drafted
- HTTPS requirement documented
- backup verification completed

### Gate 7 — Compliance Boundary Review Complete

- medical-device-software boundary documented
- region-specific privacy notes drafted
- OpenEMR license notes drafted
- legal/regulatory review marked as required before commercial sale

## 12. Product Readiness Classification

### Current state

The project is currently:

**Local-runtime verified LBF MVP in progress**

It is not:

- production-ready
- clinically validated
- security-validated
- clean-install validated
- legally/commercially cleared

### Target state

The target state is:

**OpenEMR IM Core MVP**

The MVP should be:

- locally verified
- rebuildable from GitHub
- clinically reviewable
- demo-safe
- security-baseline documented
- deployment-ready for controlled non-production testing
- prepared for legal/regulatory review before commercial use

## 13. Recommended Execution Sequence

The recommended sequence is:

1. Complete Internal Medicine Follow-Up V1 LBF model.
2. Create final LBF verification summary.
3. Create clinical review checklist.
4. Perform clinical review.
5. Create seed/script for LBF rebuild.
6. Test seed/script locally.
7. Test seed/script on clean OpenEMR instance.
8. Create security/privacy baseline.
9. Create backup/restore SOP.
10. Create demo safety package.
11. Create deployment guide.
12. Create compliance/legal boundary notes.
13. Run controlled demo with no PHI.
14. Perform production-readiness review.
15. Consider commercial pilot only after professional review.

## 14. What This Roadmap Does Not Claim

This roadmap does not claim:

- the system is ready for production
- the system is legally compliant
- the system is a certified medical device
- the system is safe for real patient data
- the system is commercially cleared
- the system is deployable without further review

It only defines a controlled execution path toward those goals.

## 15. Immediate Next Step

Continue the current LBF clinical MVP build.

The next controlled milestone after the Physical Exam Summary and Assessment verification is:

Plan batch 1

Recommended fields:

- Treatment plan
- Medication plan
- Lab orders plan
- Imaging plan
- Referrals plan
- Follow-up interval
- Patient instructions

This milestone should use the improved workflow:

OpenEMR UI → Encounter Preview → Termux metadata verification → one GitHub documentation PR

## 16. Safety Rules

These rules remain mandatory:

- No PHI in GitHub.
- No credentials in GitHub.
- No sensitive logs in GitHub.
- No database dumps in GitHub.
- No real patient data in demo.
- No OpenEMR core modification unless justified.
- No SQL insert/update for LBF creation at the current stage.
- No production claims before evidence gates are complete.
- No commercial deployment before legal, privacy, security, and clinical review.

## 17. Quality Gate

Current roadmap quality:

- Practical execution clarity: 9/10
- Safety discipline: 9/10
- Traceability support: 9/10
- Production-readiness realism: 9/10
- Current technical feasibility: 8.5/10

To reach 10/10, the project must execute the evidence packages, not merely document the plan.

## 18. Final Statement

OpenEMR IM Core should continue as a controlled, incremental, evidence-based OpenEMR customization.

The correct path is:

Local verified LBF MVP  
→ clinical review  
→ seed/script conversion  
→ clean install validation  
→ security/privacy package  
→ demo safety package  
→ compliance/legal boundary review  
→ controlled pilot readiness

This roadmap is the governing product-readiness path for the current project unless replaced by a later approved roadmap.
