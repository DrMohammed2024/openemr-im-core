# Internal Medicine Follow-Up V1 — Seed Script Review Plan

## 1. Purpose

This document defines the review plan required before creating any executable seed script candidate for the Internal Medicine Follow-Up V1 LBF layout.

This is a documentation-only review plan.

It does not create, approve, execute, or validate SQL.

---

## 2. Current Verified Repository State

The project has completed a documentation-only executable seed script proposal package.

The current seed/script status is:

- Seed/script proposal package: documented
- Executable SQL file: not created
- SQL execution: not approved
- Runtime modification: not approved
- Clean-install reproducibility: not proven
- Production readiness: not claimed
- Clinical validation: not claimed

---

## 3. Review Objective

The objective of this review stage is to decide whether the project is ready to draft an executable seed script candidate for non-production review only.

The review must confirm:

- verified metadata baseline is sufficient
- source metadata is clearly defined
- target OpenEMR tables are identified safely
- no unrelated runtime data will be touched
- rollback assumptions are documented
- SQL execution remains blocked until later explicit approval
- clean-install reproducibility is not claimed prematurely

---

## 4. Scope

This review plan covers:

- metadata baseline review
- seed proposal review
- table/field mapping review
- non-production safety review
- rollback and failure-handling review
- approval requirements before creating a future `.sql` candidate
- approval requirements before any future SQL execution

---

## 5. Out of Scope

This review plan does not include:

- executable SQL
- SQL execution
- OpenEMR runtime modification
- OpenEMR core changes
- database dumps
- real patient data
- credentials
- sensitive logs
- clinical validation
- production deployment
- legal or regulatory approval
- cybersecurity certification

---

## 6. Required Inputs Before Review

The reviewer must inspect or confirm the following before approving a future executable seed script candidate:

| Required input | Status required |
|---|---|
| Current project state file | Must reflect latest merged milestone |
| Seed script proposal file | Must exist and be documentation-only |
| Verified metadata baseline | Must match documented baseline |
| Clean install validation plan | Must exist |
| Failure handling notes | Must exist |
| Safety/privacy boundaries | Must be explicit |
| SQL execution approval | Must not be assumed |

---

## 7. Metadata Baseline To Preserve

Any future seed script candidate must preserve this baseline:

```text
form_id: LBFim_followup_v1
ROW_COUNT: 51
GROUP_COUNT: 9
GROUP_IDS: 1,2,3,4,5,6,7,8,9
FIELD_DISTRIBUTION: 4,7,7,5,6,6,4,7,5
METADATA_VERIFICATION_STATUS: PASS
