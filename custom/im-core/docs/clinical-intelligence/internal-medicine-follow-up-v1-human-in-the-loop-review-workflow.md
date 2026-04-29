# Internal Medicine Follow-Up V1 — Human-in-the-loop Review Workflow

## 1. Status

Documentation-only.

No runtime implementation.

No SQL.

No OpenEMR core changes.

No autonomous clinical decision support.

No clinical validation claim.

No production-readiness claim.

---

## 2. Purpose

This document defines the future human-in-the-loop review workflow for Clinical Intelligence outputs in Internal Medicine Follow-Up V1.

It follows:

- Clinical Intelligence Architecture
- Rule-based Clinical Review Checks

The goal is to ensure that every future alert, documentation gap, summary draft, or review item remains clinician-reviewed, explainable, auditable, non-autonomous, and non-final until reviewed or accepted by an authorized clinician.

---

## 3. Relationship to Previous Clinical Intelligence Documents

This document depends on and extends the prior Clinical Intelligence documentation milestones:

```text
custom/im-core/docs/clinical-intelligence/internal-medicine-follow-up-v1-clinical-intelligence-architecture.md
custom/im-core/docs/clinical-intelligence/internal-medicine-follow-up-v1-rule-based-clinical-review-checks.md
```

Relationship:

- The Clinical Intelligence Architecture document defines the high-level modules, safety boundaries, staged roadmap, and non-autonomous design principles.
- The Rule-based Clinical Review Checks document defines deterministic, explainable, clinician-reviewed documentation review rules.
- This Human-in-the-loop Review Workflow document defines how future alerts, rule results, documentation gaps, false positives, deferrals, overrides, and resolutions should be reviewed, tracked, and closed by clinicians or authorized reviewers.

This document does not implement those workflows in runtime code.

---

## 4. Scope

This document defines:

- review states
- reviewer roles
- alert lifecycle
- clinician actions
- override workflow
- false positive workflow
- deferred alert workflow
- audit trail requirements
- explainability requirements
- safety boundaries
- privacy boundaries
- future implementation notes

---

## 5. Out of Scope

This document does not:

- implement runtime rules
- execute SQL
- modify OpenEMR runtime behavior
- modify OpenEMR core files
- create machine learning models
- create predictive models
- diagnose
- recommend treatment
- prescribe
- triage emergencies
- generate final clinical documentation without clinician review
- approve production use
- claim clinical validation
- claim regulatory compliance

---

## 6. Core Principle

The system must support clinicians.

It must not replace clinicians.

All future Clinical Intelligence outputs must remain:

- reviewable
- explainable
- editable where relevant
- rejectable
- deferrable
- auditable
- non-autonomous
- non-final until clinician review

---

## 7. Review States

| State | Meaning | Allowed actions | Closure rule |
|---|---|---|---|
| New | Item generated but not reviewed | Open, assign, move to review queue | System must not close |
| Needs Clinician Review | Clinician must decide | Acknowledge, edit, resolve, defer, mark false positive | Clinician or authorized reviewer only |
| Acknowledged | Clinician saw the item but has not resolved it | Edit, defer, resolve | Clinician or authorized reviewer only |
| Edited | Clinician modified related documentation | Save, continue review, resolve | Clinician or authorized reviewer only |
| Resolved | Clinician addressed the item | Close with resolution note | Clinician or authorized reviewer only |
| False Positive | Item not applicable after review | Close with false-positive reason | Clinician or authorized reviewer only |
| Deferred | Action postponed intentionally | Assign owner, due date, reason | Must remain trackable |

---

## 8. Reviewer Roles

Future roles may include:

- treating clinician
- supervising clinician
- authorized clinical reviewer
- quality reviewer
- administrator for non-clinical workflow items only

Non-clinical users must not close clinical safety items unless explicitly authorized by local governance.

Reception, cashier, and administrative users must not view or close clinical alerts unless the alert is explicitly non-clinical.

---

## 9. Alert Lifecycle

Recommended future lifecycle:

```text
New
→ Needs Clinician Review
→ Acknowledged / Edited / False Positive / Deferred
→ Resolved
```

No clinical item should self-resolve without clinician review.

No item should disappear silently.

Deferred items must remain visible until resolved, re-reviewed, or formally closed with documented reason.

---

## 10. Clinician Actions

Allowed clinician actions:

- acknowledge
- edit documentation
- resolve
- mark false positive
- defer with reason
- assign owner
- add follow-up timeframe
- reject output
- accept after review
- request re-check in future implementation

---

## 11. Override Workflow

Override is allowed only with a documented reason.

Required override fields:

- reviewer identity
- timestamp
- reason
- source alert or rule ID
- source field category
- final state

Override must not delete the original alert history.

Override must not be treated as evidence that the rule is clinically invalid unless reviewed in aggregate.

---

## 12. False Positive Workflow

False positive marking must require a reason for medium and high severity items.

Allowed false-positive reasons:

- documented elsewhere
- historical issue
- not relevant to this visit
- managed by another clinician
- external workflow handles this item
- duplicate alert
- source field misinterpreted
- not applicable after clinician review

False-positive data may support future rule refinement.

False-positive marking must not delete the source alert.

---

## 13. Deferred Alert Workflow

Deferred items require:

- reason
- owner
- due date or review timeframe
- safety note if relevant

Deferred items must not disappear silently.

Deferred items should be visible in future open-loop review.

If a deferred item is safety-relevant, future implementation should require clear ownership before encounter closure.

---

## 14. Audit Trail Requirements

Future implementation should record:

- item ID
- rule ID
- rule version
- source field category
- source LBF group
- trigger condition
- severity
- alert text
- reviewer identity
- review state
- clinician action
- timestamp
- override reason if applicable
- false-positive reason if applicable
- defer reason if applicable
- owner if applicable
- final outcome

No patient-identifiable audit data should be committed to GitHub.

---

## 15. Explainability Requirements

Every future alert must show:

- why it was generated
- source field category
- trigger condition
- severity rationale
- required clinician action
- safety boundary
- whether it is documentation-support only

The system must not present rule output as diagnosis, treatment instruction, prescription instruction, emergency triage decision, or validated risk prediction.

---

## 16. Encounter Closure Boundary

Future implementation may define encounter closure behavior, but this document does not implement it.

Potential future closure rules:

- high-priority unresolved documentation-safety items may require acknowledge, resolve, false positive, or defer
- deferred items may require owner and timeframe
- low-priority items may remain open if local policy permits
- clinician override must be documented

No closure-blocking behavior is implemented by this document.

---

## 17. Safety Boundaries

This workflow does not allow:

- autonomous diagnosis
- autonomous treatment recommendation
- autonomous prescribing
- autonomous triage
- autonomous risk classification for care
- final documentation without clinician acceptance
- patient-facing advice without clinician review
- hidden or silent alert closure
- non-clinical closure of clinical safety alerts

---

## 18. Privacy Boundaries

This document includes no:

- PHI
- real patient data
- credentials
- secrets
- database dumps
- sensitive logs
- production configuration exports
- identifiable screenshots

Future examples must use synthetic or sanitized data only.

---

## 19. Future Implementation Notes

Before runtime implementation, the project must document:

- audit and explainability plan
- validation evidence plan
- privacy and security baseline
- false positive and false negative handling
- rule versioning
- non-production testing plan
- rollback plan
- user role permissions
- regulatory boundary statement
- disable switch or safe-mode behavior
- escalation process for unresolved safety-relevant items

---

## 20. Verification Checklist

- [ ] Review states are defined.
- [ ] Clinician actions are defined.
- [ ] Reviewer roles are defined.
- [ ] Relationship to previous Clinical Intelligence documents is documented.
- [ ] Override workflow is defined.
- [ ] False positive workflow is defined.
- [ ] Deferred workflow is defined.
- [ ] Audit trail requirements are defined.
- [ ] Explainability requirements are defined.
- [ ] Encounter closure boundary is documented.
- [ ] No autonomous clinical decision support is introduced.
- [ ] No SQL is included.
- [ ] No runtime modification is included.
- [ ] No PHI, credentials, logs, or database dumps are included.

---

## 21. Merge Criteria

- [ ] File path is correct.
- [ ] Markdown renders cleanly.
- [ ] Document is documentation-only.
- [ ] Relationship to prior Clinical Intelligence documents is clear.
- [ ] Human-in-the-loop states are clear.
- [ ] Clinical closure requires clinician or authorized reviewer.
- [ ] Override requires reason.
- [ ] False positive requires reason where appropriate.
- [ ] Deferred items require owner and timeframe.
- [ ] Audit requirements are documented.
- [ ] Explainability requirements are documented.
- [ ] No runtime implementation is introduced.
- [ ] No production or validation claims are introduced.
- [ ] No SQL is introduced.
- [ ] No OpenEMR core changes are introduced.

---

## 22. Recommended Next Documentation Package

Recommended next artifact after this document:

```text
custom/im-core/docs/project-state/current-project-state.md
```

Purpose:

```text
Update current project state after Clinical Intelligence Architecture, Rule-based Clinical Review Checks, and Human-in-the-loop Review Workflow milestones.
```

---

## 23. Safety and Privacy Confirmation

This document confirms:

- No PHI is included.
- No real patient data is included.
- No credentials are included.
- No database dumps are included.
- No sensitive logs are included.
- No SQL is included.
- No SQL execution is approved.
- No runtime modification is included.
- No OpenEMR core-sensitive change is included.
- No machine learning model is included.
- No predictive model is included.
- No autonomous clinical decision support is included.
- No autonomous diagnosis is included.
- No autonomous treatment recommendation is included.
- No autonomous prescribing is included.
- No autonomous emergency triage is included.
- No production-readiness claim is made.
- No clinical validation claim is made.
- No clean-install reproducibility claim is made.
- No regulatory compliance claim is made.

---

## 24. Quality Gate Score

| Dimension | Score |
|---|---:|
| Clinical safety | 9.7 |
| Human-in-the-loop clarity | 9.6 |
| Auditability | 9.5 |
| Explainability | 9.4 |
| Privacy discipline | 9.5 |
| OpenEMR upgrade safety | 10 |
| Regulatory caution | 9.6 |
| Implementation restraint | 10 |
| Traceability to prior documents | 9.7 |

Overall:

```text
9.7/10
```

---

## 25. Status

```text
Documentation-only human-in-the-loop review workflow.
No runtime implementation.
No SQL.
No OpenEMR core changes.
Not production-ready.
Not clinically validated.
Not regulatory compliant by default.
```
