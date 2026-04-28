# Internal Medicine Follow-Up V1 — Backup and Rollback Plan

## 1. Purpose

This document defines the backup and rollback planning requirements that must exist before any future executable SQL seed candidate for the Internal Medicine Follow-Up V1 LBF layout can be reviewed or executed.

This is a documentation-only backup and rollback plan.

It does not create SQL, approve SQL execution, modify runtime configuration, or validate clean-install reproducibility.

---

## 2. Current Context

The project has completed the following documentation milestones:

- Internal Medicine Follow-Up V1 executable seed script proposal package
- Internal Medicine Follow-Up V1 seed script review plan
- Internal Medicine Follow-Up V1 seed script candidate safety gate
- Internal Medicine Follow-Up V1 pre-SQL candidate evidence checklist
- Internal Medicine Follow-Up V1 target table mapping review
- Internal Medicine Follow-Up V1 non-production environment requirements

Current status:

- Executable SQL file: not created
- SQL execution: not approved
- Runtime modification: not approved
- Clean-install reproducibility: not proven
- Production readiness: not claimed
- Clinical validation: not claimed

---

## 3. Backup and Rollback Objective

The objective of this document is to define the minimum backup, restore, and rollback controls required before any future SQL seed candidate can be considered for non-production execution.

This document keeps SQL execution blocked until a separate approval and evidence process is completed.

---

## 4. Backup Requirements

Before any future SQL execution is considered, the project must document:

- [ ] Environment is confirmed as non-production.
- [ ] No PHI is present.
- [ ] No real patient data is present.
- [ ] Backup method is documented.
- [ ] Backup timing is documented.
- [ ] Backup owner is identified.
- [ ] Backup storage location rule is documented.
- [ ] Backup restoration path is documented.
- [ ] Backup does not get committed to GitHub.
- [ ] Backup does not contain PHI or credentials in repository artifacts.

---

## 5. Restore Requirements

Before any future SQL execution is considered, the project must document:

- [ ] Restore method is documented.
- [ ] Restore owner is identified.
- [ ] Restore trigger is documented.
- [ ] Restore verification method is documented.
- [ ] Restore failure handling is documented.
- [ ] Restore process is tested or explicitly marked as untested.
- [ ] Restore evidence does not include PHI.
- [ ] Restore evidence does not include database dumps.
- [ ] Restore evidence does not include sensitive logs.

---

## 6. Rollback Requirements

Before any future SQL execution is considered, the project must document:

- [ ] Rollback trigger is documented.
- [ ] Rollback owner is identified.
- [ ] Rollback decision authority is documented.
- [ ] Rollback steps are documented at a high level.
- [ ] Rollback verification method is documented.
- [ ] Rollback failure handling is documented.
- [ ] Metadata mismatch triggers rollback or stop.
- [ ] Runtime visibility failure triggers rollback or stop.
- [ ] Encounter preview mismatch triggers rollback or stop.

---

## 7. Stop Conditions

Any future SQL review or execution must stop immediately if:

| Stop condition | Required action |
|---|---|
| Environment is production | Stop; do not execute |
| PHI is present | Stop; rebuild/sanitize environment |
| Real patient data is present | Stop; rebuild with synthetic data |
| Backup is absent | Stop; create backup plan |
| Restore path is unclear | Stop; document restore path |
| Rollback owner is unclear | Stop; assign owner |
| Target table mapping is uncertain | Stop; verify mapping |
| SQL execution approval is absent | Stop; obtain explicit approval |
| Metadata count mismatch occurs | Stop; investigate and rollback if needed |
| Runtime layout is not visible | Stop; investigate and rollback if needed |

---

## 8. Metadata Baseline To Restore

Any future rollback or validation process must preserve or restore:

```text
form_id: LBFim_followup_v1
ROW_COUNT: 51
GROUP_COUNT: 9
GROUP_IDS: 1,2,3,4,5,6,7,8,9
FIELD_DISTRIBUTION: 4,7,7,5,6,6,4,7,5
METADATA_VERIFICATION_STATUS: PASS
