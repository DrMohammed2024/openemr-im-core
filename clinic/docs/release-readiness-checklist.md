# Release Readiness Checklist

## Purpose
Document the minimum readiness expectations before treating a repository state as a release candidate or operationally safer baseline.

## Repository Position
This repository is a governed derivative of OpenEMR and is not production-ready by default. A release-readiness review should be explicit, documented, and conservative.

## Minimum Readiness Checks
Before considering a release-oriented baseline, confirm the following as applicable:
- repository governance files are present and consistent
- non-trivial changes are traceable in `clinic/docs/customization-ledger.md`
- pull request checks completed successfully
- no unreviewed high-risk customization is being treated as production-ready
- no secrets or patient data were introduced
- rollback expectations are understood
- recent changes were reviewed in a controlled branch and pull request flow

## Customization Review
Release readiness should consider:
- whether core-sensitive paths were modified
- whether upstream compatibility risk is low, understood, or explicitly accepted
- whether local divergence is documented
- whether follow-up validation is still pending

## Operational Caution
A repository state should not be described as production-ready unless:
- repository conditions justify that claim
- major risks are known and documented
- high-review components are not being treated as approved by accident

## Notes
This checklist is an initial release-readiness guide and should be expanded as project governance and validation practices mature.
