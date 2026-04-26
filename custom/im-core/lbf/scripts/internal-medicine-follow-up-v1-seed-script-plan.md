# Internal Medicine Follow-Up V1 — Seed Script Conversion Plan

## 1. Purpose

This document defines the seed/script conversion plan for the Internal Medicine Follow-Up V1 LBF customization in OpenEMR IM Core.

The current LBF model was created and verified locally through the OpenEMR Layout Editor UI.

This document does not create, execute, or approve a seed script.

It only defines the controlled plan for converting the verified runtime LBF configuration into a reproducible script in a later stage.

## 2. Project Context

- Repository: DrMohammed2024/openemr-im-core
- Project: OpenEMR IM Core
- Base system: Controlled OpenEMR fork
- Layout name: Internal Medicine Follow-Up V1
- Layout ID: `LBFim_followup_v1`
- Current status: Local LBF MVP verified
- Current configuration source: OpenEMR runtime database
- Current verified table: `layout_options`
- Current stage: Seed/script conversion planning
- Execution status: Planning only

## 3. Current Verified Scope

The Internal Medicine Follow-Up V1 LBF MVP currently includes these verified groups:

- Visit Context
- Vital Signs Review
- Chronic Conditions Review
- Medication Review
- Symptoms Review
- Physical Exam Summary
- Assessment
- Plan
- Patient Safety and Follow-up

## 4. Why Seed/Script Conversion Is Needed

The current form exists as local runtime configuration.

This means the model is usable in the current OpenEMR instance, but not yet reliably reproducible on a clean OpenEMR installation.

Seed/script conversion is needed to support:

- reproducible installation
- clean-instance validation
- future deployment preparation
- version-controlled configuration
- controlled review
- safer migration between environments
- repeatable demo setup
- future client-instance provisioning

## 5. Current State

Current state:

- LBF form was created using OpenEMR UI.
- Groups and fields were verified in Encounter Preview.
- Metadata was verified using non-PHI `layout_options` checks.
- Documentation PRs were merged.
- Final verification summary was merged.
- Clinical review checklist was merged.

Current limitations:

- No reusable seed script exists yet.
- No clean install has been validated yet.
- No automated LBF creation script has been tested yet.
- Runtime configuration still depends on the current local database.
- Production readiness is not claimed.

## 6. Conversion Principle

The conversion must be:

- evidence-based
- reversible
- testable
- documented
- non-PHI
- non-destructive
- compatible with OpenEMR configuration practices
- safe for clean-instance testing before any broader use

The conversion must not be performed directly on a production database.

## 7. Safety Rules

The following rules are mandatory:

- No PHI.
- No real patient data.
- No credentials.
- No database dumps.
- No sensitive logs.
- No direct production execution.
- No unreviewed SQL insert/update.
- No destructive SQL.
- No changes to OpenEMR core-sensitive paths unless explicitly justified.
- No production-readiness claim after script creation alone.
- Script must be tested on a clean non-production OpenEMR instance before broader use.

## 8. Candidate Script Type

The preferred script type should be evaluated before implementation.

Candidate options:

### Option A — PHP seed script

A PHP script that reads OpenEMR configuration and inserts/updates LBF metadata in a controlled way.

Potential advantages:

- Can use OpenEMR runtime configuration.
- Can be easier to run inside the OpenEMR environment.
- Can include validation logic.
- Can avoid exposing credentials.

Potential risks:

- Must avoid unsafe SQL.
- Must carefully handle existing records.
- Must include idempotency checks.
- Must be tested on a clean instance.

### Option B — SQL migration script

A raw SQL script that inserts required LBF metadata.

Potential advantages:

- Simple to inspect.
- Direct representation of target metadata.

Potential risks:

- Higher risk if executed incorrectly.
- May be less environment-aware.
- More dangerous if not idempotent.
- Should not be the first choice without strong safeguards.

### Option C — OpenEMR-native module or installer

A controlled OpenEMR module/installer approach.

Potential advantages:

- More structured long term.
- Better for future packaged deployment.

Potential risks:

- More complex.
- May be premature at the current MVP stage.

## 9. Preferred Initial Direction

The preferred initial direction is:

```text
PHP seed script planning first
