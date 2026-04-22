# Customization Policy

## Purpose

This file defines the mandatory rules for customizing `openemr-im-core`.

## Governing Principles

1. Upstream OpenEMR remains the primary architectural baseline.
2. Customization must be explicit, reviewable, and documented.
3. Configuration is preferred over code modification.
4. Extension/module patterns are preferred over direct core patching.
5. Direct core patches are allowed only when clearly necessary and justified.
6. Every significant customization should be linked to a GitHub issue.
7. Every significant customization should be recorded in the customization ledger.
8. No secrets, credentials, or patient data may be committed.
9. No production AI workflow should be activated until supervised review controls are defined and validated.

## Customization Categories

All proposed changes must be classified as one of the following:

- Documentation
- Governance
- Configuration
- Extension / Module
- UI / Template customization
- Core patch
- Verification / CI
- Upstream sync

## Core Patch Rule

Direct modification of upstream-sensitive paths such as the following is restricted:

- `interface/`
- `library/`
- `src/`
- `controllers/`
- `apis/`

A core patch is permitted only when all of the following are true:

1. Configuration is insufficient
2. Extension/module pattern is insufficient
3. The change is justified in writing
4. The change is recorded in the customization ledger
5. A validation plan exists
6. A rollback path is defined

## Required Traceability

For each non-trivial customization, document:

- Objective
- Reason upstream is insufficient
- Affected paths
- Risk level
- Upstream compatibility impact
- Validation requirement
- Related issue / PR

## Default Workflow

1. Open or identify an issue
2. Classify the change
3. Record it in the ledger if applicable
4. Implement on a branch
5. Open a pull request
6. Review risk and validation impact
7. Merge only after review

## Prohibited Practices

- Untracked customization
- Direct unreviewed main-branch editing
- Silent core drift
- Committing secrets
- Using the repository as a storage location for operational patient material

## Review Standard

A customization is not considered mature merely because it works locally.  
It must also be understandable, reviewable, maintainable, and reasonably upstream-compatible.
