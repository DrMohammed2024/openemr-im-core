# Internal Medicine Follow-Up V1 — SQL Candidate Review Template

## 1. Purpose

This document defines the review template that must be completed if a future executable SQL seed candidate is drafted for the Internal Medicine Follow-Up V1 LBF layout.

This is a documentation-only review template.

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
- Internal Medicine Follow-Up V1 backup and rollback plan
- Internal Medicine Follow-Up V1 SQL candidate non-execution policy

Current status:

- Executable SQL file: not created
- SQL execution: not approved
- Runtime modification: not approved
- Clean-install reproducibility: not proven
- Production readiness: not claimed
- Clinical validation: not claimed

---

## 3. Review Template Scope

This template applies only if a future SQL seed candidate is drafted for non-production review.

It must be completed before any SQL execution is considered.

---

## 4. Candidate Identification

| Field | Value |
|---|---|
| Candidate file name | To be documented |
| Candidate branch | To be documented |
| Candidate PR | To be documented |
| Target layout ID | `LBFim_followup_v1` |
| Candidate status | Review only, not approved for execution |
| Reviewer | To be documented |
| Review date | To be documented |

---

## 5. Required Candidate Warning

Any future SQL candidate must include a warning equivalent to:

```text
WARNING: REVIEW ONLY.
This SQL candidate is not approved for execution.
Do not run this file in production.
Do not run this file against any database containing PHI or real patient data.
Execution requires separate explicit approval and documented evidence.
