# Upstream Sync Policy

## Purpose

This file defines how `openemr-im-core` should remain aligned with the official OpenEMR upstream repository.

## Baseline Rule

The official upstream repository is:

- `openemr/openemr`

This repository should be maintained as a controlled derivative, not as an uncontrolled divergent fork.

## Sync Objectives

- Reduce security lag
- Reduce maintenance drift
- Preserve upgrade feasibility
- Keep customization reviewable

## Sync Principles

1. Upstream compatibility should be preserved wherever feasible.
2. Custom changes should be isolated from core whenever possible.
3. Long-lived undocumented divergence is not acceptable.
4. Before major customization work, upstream lag should be reviewed.

## Required Sync Discipline

For each sync cycle, document:

- Upstream reference point reviewed
- Current branch under review
- Files or areas likely to conflict
- Custom patches at risk
- Result of sync attempt
- Follow-up actions required

## When Sync Review Is Mandatory

A sync review is mandatory before:

- major architecture changes
- deep core patches
- release candidate preparation
- deployment decisions
- AI workflow introduction

## Conflict Handling Rule

If an upstream sync reveals conflict with local customization:

1. Prefer preserving upstream behavior unless the local change is strongly justified
2. Re-evaluate whether the local change should move into a module, template, or configuration layer
3. Record the conflict and resolution path

## Documentation Requirement

Any major unresolved divergence must be documented in:

- `clinic/docs/customization-ledger.md`
- architecture notes or risk notes if applicable

## Practical Default

If the repository has little true custom implementation, the preferred strategy is:

- rebase / resync first
- then continue customization on a cleaner baseline
