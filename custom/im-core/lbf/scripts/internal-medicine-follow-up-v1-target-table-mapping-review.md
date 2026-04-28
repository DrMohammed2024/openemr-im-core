# Internal Medicine Follow-Up V1 — Target Table Mapping Review

## 1. Purpose

This document defines the target table mapping review required before drafting any future executable SQL seed script candidate for the Internal Medicine Follow-Up V1 LBF layout.

This is a documentation-only mapping review.

It does not create SQL, approve SQL execution, modify runtime configuration, or validate clean-install reproducibility.

---

## 2. Current Context

The project has completed the following documentation milestones:

- Internal Medicine Follow-Up V1 executable seed script proposal package
- Internal Medicine Follow-Up V1 seed script review plan
- Internal Medicine Follow-Up V1 seed script candidate safety gate
- Internal Medicine Follow-Up V1 pre-SQL candidate evidence checklist

Current status:

- Executable SQL file: not created
- SQL execution: not approved
- Runtime modification: not approved
- Clean-install reproducibility: not proven
- Production readiness: not claimed
- Clinical validation: not claimed

---

## 3. Mapping Review Objective

The objective of this review is to identify which OpenEMR configuration tables may be considered for a future non-production SQL seed candidate, and which tables must remain explicitly out of scope.

This review does not approve creating or executing SQL.

---

## 4. Candidate Configuration Scope

A future SQL candidate, if approved later, must be limited to recreating the LBF layout configuration for:

```text
LBFim_followup_v1
