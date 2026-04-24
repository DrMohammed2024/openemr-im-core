# IM Core Customization Layer

This directory is the project-owned isolation and work-organization layer for Internal Medicine customization artifacts.

## Current status

- This directory is not assumed to be a proven OpenEMR runtime integration path.
- Runtime behavior must be verified before any artifact is treated as executable or loadable by OpenEMR.
- The first clinic-facing feature remains LBF-first and no-core-touch.

## Rules

- Do not store PHI, credentials, database dumps, logs, or real patient data here.
- Do not modify OpenEMR core-sensitive paths for the first clinical feature.
- Document significant changes in the customization ledger.
- Keep artifacts small, reviewable, and reversible.

## Planned next area

The next planned area is an LBF-first Internal Medicine Follow-Up V1 feature after LBF import/export/storage mechanics are verified.
