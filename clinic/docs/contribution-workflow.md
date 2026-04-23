# Contribution Workflow

## Purpose
Document the expected contribution workflow for work performed in `openemr-im-core`.

## Repository Position
This repository is a governed derivative of OpenEMR and is not production-ready. All non-trivial work should remain reviewable, traceable, and aligned with repository governance.

## Expected Contribution Sequence
1. Identify the task or problem to be addressed.
2. Create or update a related GitHub issue when applicable.
3. Review repository governance files before making non-trivial changes.
4. Work from a branch, not directly on the protected default branch.
5. Update `clinic/docs/customization-ledger.md` when the change is non-trivial or governance-relevant.
6. Open a pull request with a clear title and structured summary.
7. Allow checks to complete before merge.
8. Merge only when the change is appropriately reviewed and repository conditions are satisfied.

## Minimum Contribution Rules
- Do not commit secrets
- Do not commit patient data
- Do not bypass repository governance intentionally
- Do not introduce deep core changes without clear justification
- Keep changes narrow, reviewable, and reversible when possible

## Pull Request Expectations
A pull request should clearly describe:
- what changed
- why the change is needed
- which paths were affected
- whether governance-sensitive areas were touched
- whether rollback is straightforward

## Notes
This document is an initial contribution workflow guide and should be expanded as project practices mature.
