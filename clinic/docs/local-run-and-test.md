# Local Run and Test

## Purpose
Document the initial local validation and test expectations for work performed in `openemr-im-core`.

## Current Position
This repository is a governed derivative of OpenEMR and is not production-ready. Local validation should be used to reduce risk before review and merge.

## Minimum Local Validation Expectations
Before opening or merging a pull request, contributors should try to confirm the following when applicable:
- the changed file renders or parses correctly
- no obvious formatting or structural errors were introduced
- repository governance files remain consistent
- customization traceability is updated when required
- no secrets or patient data were introduced

## Repository-Level Checks
As this repository matures, contributors should document and use the relevant local commands for:
- PHP linting
- Composer validation
- targeted test execution
- workflow-specific validation
- file-level review for governance-sensitive changes

## Pull Request Readiness
A pull request should not be considered ready unless the contributor has:
- reviewed the changed file content
- checked for obvious syntax or formatting issues
- updated the customization ledger when applicable
- confirmed that the change matches repository governance expectations

## Notes
This document is an initial local-run and test guidance file and should be expanded as local development workflows become more concrete.
