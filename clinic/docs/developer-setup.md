# Developer Setup

## Purpose
Document the minimum developer setup expectations for working safely in `openemr-im-core`.

## Repository Position
This repository is a governed derivative of OpenEMR and is not production-ready.

## Minimum Expectations
- Work from a branch, not directly on the protected default branch
- Open or update a related GitHub issue before non-trivial work
- Update `clinic/docs/customization-ledger.md` when applicable
- Open a pull request for review before merge
- Avoid deep core changes unless clearly justified and documented

## Local Development Expectations
Document the following as this repository matures:
- local environment prerequisites
- PHP / Composer requirements
- database/bootstrap expectations
- local validation and test workflow
- upstream sync precautions before deeper customization

## Contribution Safety Rules
- Do not commit secrets
- Do not commit patient data
- Do not enable experimental or unreviewed production-sensitive components
- Treat direct core modification as a last resort

## Related Governance Files
- `README.md`
- `CUSTOMIZATION_POLICY.md`
- `UPSTREAM_SYNC_POLICY.md`
- `ARCHITECTURE.md`
- `clinic/docs/customization-ledger.md`

## Status
Initial developer setup document created as part of repository hardening and governance maturation.
