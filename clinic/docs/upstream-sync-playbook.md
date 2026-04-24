# Upstream Sync Playbook

## Purpose
Document the expected approach for syncing this repository with upstream OpenEMR while preserving controlled customization discipline.

## Repository Position
This repository is a governed derivative of OpenEMR and should be maintained as an upstream-aware customization layer, not an uncontrolled long-lived fork.

## Sync Principles
- Treat upstream OpenEMR as the architectural baseline
- Prefer staying close to upstream when feasible
- Avoid unnecessary divergence
- Review local customization impact before sync work
- Keep sync decisions documented and traceable

## Recommended Sync Sequence
1. Identify the upstream target to review or merge.
2. Review local customizations that may be affected.
3. Check `clinic/docs/customization-ledger.md` for relevant tracked changes.
4. Compare the local repository state against the intended upstream reference.
5. Identify conflicts, risky paths, or governance-sensitive changes.
6. Perform sync work in a branch, not directly on the protected default branch.
7. Open a pull request with a clear summary of the sync scope and risks.
8. Review validation results before merge.

## Sensitive Areas During Sync
Special caution is required for changes affecting:
- `interface/`
- `library/`
- `src/`
- `controllers/`
- `apis/`
- `.github/`
- `custom/`
- `modules/`

## Documentation Expectations
When non-trivial sync work is performed, contributors should document:
- the upstream target reviewed
- the local areas affected
- any conflicts or intentional divergences
- whether rollback is straightforward
- whether follow-up validation is required

## Notes
This document is an initial upstream sync playbook and should be expanded as repository sync practices become more concrete.
