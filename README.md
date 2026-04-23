# openemr-im-core

A governed Internal Medicine customization layer built on top of the official [OpenEMR](https://github.com/openemr/openemr) upstream repository.

## Repository Status

**Current status:** Planning / controlled customization baseline  
**Production readiness:** Not production-ready  
**Default strategy:** upstream-first, fork-minimal, customization-explicit

This repository is **not** the official OpenEMR repository.  
It is a clinic-driven derivative intended to support structured Internal Medicine workflow development while preserving upstream compatibility wherever feasible.

## Core Operating Principles

- Prefer configuration before code modification
- Prefer extension/module patterns before core patching
- Treat direct core modification as a last resort
- Document every customization decision
- Keep clinic-owned customization artifacts isolated where possible
- Do not commit secrets or patient data
- Do not introduce AI workflow activation until supervised review controls are defined

## Intended Near-Term Scope

- Structured Internal Medicine encounter framework
- Medication reconciliation workflow support
- Labs review structure
- Safety-net documentation support
- Chronic disease follow-up template foundation

## Governance Files

This repository is governed by the following project files:

- `CUSTOMIZATION_POLICY.md`
- `UPSTREAM_SYNC_POLICY.md`
- `ARCHITECTURE.md`
- `clinic/docs/customization-ledger.md`

## Contribution Model

Do not push unreviewed customization directly to the main branch.

Expected workflow:

1. Create or update a GitHub issue
2. Record the customization in the ledger when applicable
3. Work on a branch
4. Open a pull request
5. Require review before merge

## Important Notes

- Upstream OpenEMR remains the architectural baseline
- This repository should be maintained as a controlled derivative, not an uncontrolled long-lived fork
- Any divergence from upstream must be justified, documented, and reviewable

## Disabled / High-Review Components

- `modules/sms_email_reminder` is not approved for production use pending formal security and operational review.

## Immediate Priority

The immediate priority is to establish repository governance, upstream sync discipline, customization traceability, and basic validation workflow before deep feature customization.
