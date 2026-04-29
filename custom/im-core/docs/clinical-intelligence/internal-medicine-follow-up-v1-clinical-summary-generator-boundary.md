# Internal Medicine Follow-Up V1 — Clinical Summary Generator Boundary

## 1. Status

Documentation-only.

No runtime implementation.

No SQL.

No OpenEMR core changes.

No autonomous clinical decision support.

No clinical validation claim.

No production-readiness claim.

No regulatory compliance claim.

No cybersecurity certification claim.

---

## 2. Purpose

This document defines the documentation-only boundary for any future Clinical Summary Generator capability in the Internal Medicine Follow-Up V1 module of OpenEMR IM Core.

The purpose is to define how future clinical summaries may be drafted, reviewed, edited, accepted, rejected, traced to source fields, audited, and safely governed.

A future Clinical Summary Generator, if ever implemented, must remain clinician-reviewed and must not create final clinical documentation automatically.

This document does not implement summary generation logic, runtime AI, machine learning, predictive analytics, SQL, database schema changes, OpenEMR runtime behavior changes, OpenEMR core changes, autonomous diagnosis, autonomous treatment recommendation, autonomous prescribing, autonomous triage, or production clinical decision support.

---

## 3. Relationship to Previous Clinical Intelligence Documents

This document depends on and extends the prior Clinical Intelligence documentation milestones:

```text
custom/im-core/docs/clinical-intelligence/internal-medicine-follow-up-v1-clinical-intelligence-architecture.md
custom/im-core/docs/clinical-intelligence/internal-medicine-follow-up-v1-rule-based-clinical-review-checks.md
custom/im-core/docs/clinical-intelligence/internal-medicine-follow-up-v1-human-in-the-loop-review-workflow.md
custom/im-core/docs/clinical-intelligence/internal-medicine-follow-up-v1-audit-and-explainability-plan.md
custom/im-core/docs/clinical-intelligence/internal-medicine-follow-up-v1-clinical-safety-boundary.md
custom/im-core/docs/clinical-intelligence/internal-medicine-follow-up-v1-open-loops-and-safety-net-tracking-plan.md
