# Internal Medicine Follow-Up V1 — Non-Production Environment Requirements

## 1. Purpose

This document defines the non-production environment requirements that must be satisfied before any future executable SQL seed candidate for the Internal Medicine Follow-Up V1 LBF layout can be reviewed or executed.

This is a documentation-only environment requirements document.

It does not create SQL, approve SQL execution, modify runtime configuration, or validate clean-install reproducibility.

---

## 2. Current Context

The project has completed the following documentation milestones:

- Internal Medicine Follow-Up V1 executable seed script proposal package
- Internal Medicine Follow-Up V1 seed script review plan
- Internal Medicine Follow-Up V1 seed script candidate safety gate
- Internal Medicine Follow-Up V1 pre-SQL candidate evidence checklist
- Internal Medicine Follow-Up V1 target table mapping review

Current status:

- Executable SQL file: not created
- SQL execution: not approved
- Runtime modification: not approved
- Clean-install reproducibility: not proven
- Production readiness: not claimed
- Clinical validation: not claimed

---

## 3. Environment Requirement Objective

The objective of this document is to define the minimum environment conditions required before any future SQL seed candidate is reviewed or executed.

This document keeps SQL execution blocked until a separate approval and evidence process is completed.

---

## 4. Required Non-Production Environment Conditions

Before any future SQL candidate can be reviewed for possible execution, the environment must satisfy:

- [ ] Environment is explicitly non-production.
- [ ] Environment contains no real patient data.
- [ ] Environment contains no PHI.
- [ ] Environment contains no real credentials committed to the repository.
- [ ] OpenEMR version is documented.
- [ ] Database engine/version is documented.
- [ ] Backup method is documented.
- [ ] Restore method is documented.
- [ ] Rollback plan is documented.
- [ ] Maintainer has approved the environment for testing.
- [ ] SQL execution remains blocked until explicit approval.

---

## 5. Explicitly Forbidden Environments

The following environments must not be used for SQL seed candidate testing:

| Environment type | Status |
|---|---|
| Production clinic instance | Forbidden |
| Real patient database | Forbidden |
| Database containing PHI | Forbidden |
| Environment without backup | Forbidden |
| Environment without rollback plan | Forbidden |
| Environment with unclear OpenEMR version | Forbidden |
| Environment with real credentials in repository | Forbidden |
| Shared uncontrolled environment | Forbidden |

---

## 6. Required Environment Metadata

Before any future SQL execution is considered, document:

| Field | Required value |
|---|---|
| Environment name | Required |
| Environment purpose | Non-production review/testing only |
| OpenEMR version | Required |
| Database engine/version | Required |
| PHP version | Required if relevant |
| Backup method | Required |
| Restore method | Required |
| Rollback owner | Required |
| Test data type | Synthetic/fake only |
| PHI status | Must confirm none |
| Credentials status | Must confirm none committed |

---

## 7. SQL Execution Boundary

This document does not approve SQL execution.

Before any SQL execution, the project must separately document:

- explicit project owner approval
- non-production environment confirmation
- OpenEMR version confirmation
- database backup evidence
- restore/rollback procedure
- expected metadata verification steps
- failure handling plan
- privacy review
- security review
- maintainer review

---

## 8. Metadata Baseline To Preserve

Any future SQL seed candidate must preserve:

```text
form_id: LBFim_followup_v1
ROW_COUNT: 51
GROUP_COUNT: 9
GROUP_IDS: 1,2,3,4,5,6,7,8,9
FIELD_DISTRIBUTION: 4,7,7,5,6,6,4,7,5
METADATA_VERIFICATION_STATUS: PASS
