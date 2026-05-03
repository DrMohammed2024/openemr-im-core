# Training and Support Package V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines the documentation-stage training and support package for OpenEMR IM Core.

The purpose is to define future training, support, escalation, user-role, reviewer-role, help material, known-issue, and support-boundary expectations without introducing runtime implementation, clinical use, production support, PHI, real patient data, or unsupported readiness claims.

This document is documentation-stage only.

Golden rule:

The system must support clinicians. It must not replace clinicians.

---

## 2. Document Status and Identity

| Field | Value |
|---|---|
| Document | Training and Support Package V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage only |
| Version | v0.1 |
| Scope | Training and support planning only |
| Owner Role | Training Owner / Support Owner |
| Reviewer Roles | Governance Owner, Clinical Safety Owner, Human Factors Reviewer, Privacy/Security Owner, Documentation Owner, Operations Owner |
| Runtime Status | No runtime implementation |
| Training Status | Planning only |
| Support Status | Planning only |
| Clinical Use Status | Not for clinical use |

This document does not create a live support service.

This document does not authorize production support.

This document does not authorize clinical use.

---

## 3. Scope

This package covers:

- Training principles.
- Intended training audiences.
- Support roles.
- Support boundaries.
- Escalation boundaries.
- Training content rules.
- Synthetic-data-only training rules.
- Help material expectations.
- Known issue handling.
- Feedback handling.
- Future support evidence requirements.
- Stop rules for unsafe training or support claims.

---

## 4. Out of Scope

This document does not include:

- Live clinical training.
- Production training.
- Patient-facing training.
- Real patient data.
- PHI.
- Credentials.
- Secrets.
- Sensitive logs.
- Database dumps.
- SQL execution.
- Database migration.
- Runtime implementation.
- Runtime AI.
- FHIR/API implementation.
- Frontend implementation.
- OpenEMR core-sensitive changes.
- Live RBAC configuration.
- Live audit implementation.
- Live backup execution.
- Live restore testing.
- Clinical validation.
- Usability validation.
- Human factors validation.
- Pilot support.
- Production support.
- Commercial support commitment.
- SLA commitment.

This document does not claim:

- Training readiness.
- Demo readiness.
- Pilot readiness.
- Production readiness.
- Commercial readiness.
- Clinical validation.
- Human factors validation.
- Usability validation.
- Regulatory compliance.
- Cybersecurity certification.
- HIPAA compliance.
- GDPR compliance.
- FDA readiness.
- MDR readiness.
- Medical-device readiness.

---

## 5. Training Principle

Training must explain the project boundaries clearly.

Training must reinforce that OpenEMR IM Core is currently documentation-stage and not a production, pilot, or clinically validated system.

Training must not imply that the system can diagnose, prescribe, triage emergencies, replace clinician judgment, or make autonomous clinical decisions.

Training must preserve this principle:

The system must support clinicians. It must not replace clinicians.

---

## 6. Intended Training Audiences

Future training materials may be prepared for:

- Governance reviewers.
- Documentation reviewers.
- Technical reviewers.
- Privacy/security reviewers.
- Clinical safety reviewers.
- Human factors reviewers.
- Operations reviewers.
- Release reviewers.
- Future sandbox users.
- Future support participants.

Training for clinicians or operational users must not be treated as clinical-use authorization.

---

## 7. Training Audience Boundaries

Training audiences must understand:

- The project stage.
- The documentation-only status where applicable.
- The no-PHI rule.
- The synthetic-only rule.
- The no-production-use rule.
- The no-clinical-use rule.
- The no-autonomous-CDS rule.
- The no-unsupported-claims rule.
- The escalation path for concerns.

---

## 8. Training Content Rules

Training content must be:

- Documentation-stage aligned.
- Synthetic-only.
- Non-production.
- Non-clinical.
- Clear about limitations.
- Clear about stop rules.
- Clear about reviewer responsibilities.
- Clear about evidence requirements.

Training content must not include:

- PHI.
- Real patient data.
- Production screenshots.
- Secrets.
- Credentials.
- Sensitive logs.
- Unsupported claims.
- Clinical recommendations.
- Diagnostic claims.
- Prescribing claims.
- Emergency triage claims.

---

## 9. Synthetic Training Data Rule

Training examples must use synthetic data only.

Synthetic training examples must be:

- Clearly labeled.
- Fictional.
- Non-identifiable.
- Not derived from real patient records.
- Not traceable to real patients, clinicians, facilities, or clinical events.
- Reviewed before use if shared externally.

---

## 10. Training Materials

Future training materials may include:

- Overview slides.
- Reviewer orientation notes.
- Quick-start guides.
- Stop-rule summaries.
- Role-specific checklists.
- Evidence capture examples.
- Synthetic scenario examples.
- FAQ documents.
- Support intake examples.
- Escalation path diagrams.

Training materials must include a status statement describing the project stage and limitations.

---

## 11. Required Training Statements

Training materials should include:

- This is documentation-stage planning unless explicitly stated otherwise.
- Do not use PHI.
- Do not use real patient data.
- Do not use production screenshots.
- Do not use production credentials.
- Do not claim clinical validation.
- Do not claim regulatory compliance.
- Do not claim production readiness.
- Do not claim cybersecurity certification.
- The system must support clinicians. It must not replace clinicians.

---

## 12. Support Principle

Support planning must define how questions, issues, concerns, and suspected boundary violations may be handled.

Support planning does not create a live production support obligation.

Support must not imply clinical, production, commercial, or regulatory readiness.

---

## 13. Support Scope

Future support planning may cover:

- Documentation questions.
- Reviewer questions.
- PR workflow questions.
- Evidence registry questions.
- Traceability questions.
- Risk register questions.
- Clinical safety documentation questions.
- Human factors documentation questions.
- Security/privacy boundary questions.
- Non-production sandbox planning questions.
- Future synthetic demo questions.

Support does not cover real patient care, clinical decision-making, emergency response, production operations, billing operations, or patient-facing use.

---

## 14. Support Roles

Future support roles may include:

| Role | Responsibility |
|---|---|
| Support Owner | Coordinates support process |
| Technical Owner | Reviews technical questions |
| Documentation Owner | Reviews documentation issues |
| Governance Owner | Reviews process and scope issues |
| Clinical Safety Owner | Reviews clinical safety concerns |
| Privacy/Security Owner | Reviews PHI, secrets, privacy, and security concerns |
| Human Factors Reviewer | Reviews usability and workflow concerns |
| Operations Owner | Reviews non-production operational concerns |
| Release Owner | Reviews release and gate questions |

---

## 15. Support Intake

Support intake should capture:

- Issue ID.
- Date.
- Reporter role.
- Summary.
- Affected document or area.
- Category.
- Severity.
- PHI/secrets check.
- Screenshot/log presence.
- Initial owner.
- Required escalation.
- Resolution status.
- Closure evidence.

Support intake must not contain PHI, secrets, sensitive logs, or real patient data.

---

## 16. Support Categories

Support issues may be categorized as:

- Documentation clarification.
- Governance question.
- Scope boundary concern.
- PHI concern.
- Security/privacy concern.
- Clinical safety concern.
- Human factors concern.
- Traceability concern.
- Risk register concern.
- Non-production setup concern.
- Demo/training boundary concern.
- CI/PR workflow concern.
- Unsupported claim concern.

---

## 17. Severity Levels

Suggested support severity levels:

| Level | Description |
|---|---|
| S0 | PHI, secrets, or serious boundary violation |
| S1 | Safety, privacy, or security concern requiring urgent review |
| S2 | Documentation or process issue requiring correction |
| S3 | Clarification or minor documentation improvement |
| S4 | General question or future enhancement idea |

S0 and S1 issues must be escalated immediately to the relevant owner.

---

## 18. Escalation Rules

Escalate immediately if:

- PHI is found.
- Real patient data is found.
- Secrets are found.
- Production credentials are found.
- Sensitive logs are found.
- Unsupported clinical claim is found.
- Unsupported readiness claim is found.
- Clinical safety concern is raised.
- Security/privacy concern is raised.
- User confusion may create unsafe assumptions.
- Demo or training material appears to imply clinical use.

---

## 19. Known Issues Register

A future known issues register should include:

- Issue ID.
- Description.
- Affected document or process.
- Severity.
- Owner.
- Workaround if applicable.
- Correction plan.
- Evidence link.
- Status.
- Closure decision.

Known issues must not be hidden in informal messages only.

---

## 20. Feedback Handling

Feedback should be categorized as:

- Correction needed.
- Clarification needed.
- Risk concern.
- Safety concern.
- Privacy/security concern.
- Human factors concern.
- Training improvement.
- Support improvement.
- Future enhancement.

Feedback that changes project scope must go through gate review.

---

## 21. Training Evidence

Future training evidence may include:

- Training material version.
- Attendee role list.
- Training date.
- Trainer role.
- Training scope.
- Synthetic-only confirmation.
- Questions received.
- Corrections identified.
- Follow-up actions.
- Completion record.

Training completion does not equal clinical validation or production readiness.

---

## 22. Support Evidence

Future support evidence may include:

- Support intake records.
- Triage records.
- Escalation records.
- Resolution records.
- Correction PR links.
- Known issue updates.
- Review approvals.
- Closure decisions.

Support evidence must not contain PHI or secrets.

---

## 23. Communication Boundary

Communication must remain precise.

Allowed wording:

- Documentation-stage.
- Non-production planning.
- Synthetic-only.
- Clinician-supporting.
- Not clinician-replacing.
- Gate-controlled.
- Evidence-driven.
- Review draft.

Avoid unsupported wording:

- clinically validated.
- production-ready.
- commercially ready.
- regulatory compliant.
- cybersecurity certified.
- FDA-ready.
- MDR-ready.
- safe for clinical use.
- autonomous clinical decision support.

---

## 24. Training Stop Rules

Stop training activity if:

- PHI is used.
- Real patient data is used.
- Production screenshots are used.
- Secrets are visible.
- Unsupported clinical claims are made.
- Unsupported readiness claims are made.
- A participant may misunderstand the system as clinically validated.
- Training appears to authorize clinical, pilot, production, or commercial use.
- The clinician-supporting boundary is not clear.

---

## 25. Support Stop Rules

Stop support activity and escalate if:

- PHI is submitted.
- Secrets are submitted.
- Sensitive logs are submitted.
- Production credentials are submitted.
- Real patient data is submitted.
- The issue involves safety or privacy risk.
- The issue implies production failure.
- The issue implies real clinical use.
- The issue requires runtime correction outside documentation scope.

---

## 26. Relationship to PR #92

PR #92 created Evidence Registry and Evidence Templates V0.1.

Training and support evidence should follow evidence registry principles.

This document does not modify PR #92.

---

## 27. Relationship to PR #93

PR #93 created Traceability Matrix V0.1.

Training and support concerns may create traceability updates in future controlled PRs.

This document does not modify PR #93.

---

## 28. Relationship to PR #94

PR #94 created Risk Register V0.1.

Training and support concerns may identify risks such as user misunderstanding, unsafe assumptions, PHI exposure, and unsupported claims.

This document does not modify PR #94.

---

## 29. Relationship to PR #95

PR #95 created Pull Request Template and Stop Rules V0.1.

This document reinforces stop rules for documentation, training, support, PHI, and unsupported claims.

This document does not modify PR #95.

---

## 30. Relationship to PR #96

PR #96 created Clinical Safety Case V0.1.

Training and support must preserve clinician authority and must not imply diagnosis, prescribing, triage, or replacement of clinician judgment.

This document does not replace PR #96.

---

## 31. Relationship to PR #97

PR #97 created Human Factors and Usability Risk Plan V0.1.

Training and support feedback may inform future human factors review but is not itself human factors validation.

This document does not replace PR #97.

---

## 32. Relationship to PR #98

PR #98 created Security / Privacy / RBAC / Audit / Backup Gap Refinement V0.1.

Training and support must preserve privacy and security boundaries and must not imply live RBAC, audit, backup, or restore implementation.

This document does not implement PR #98 controls.

---

## 33. Relationship to PR #100

PR #100 fixed a runtime CI/E2E blocker separately from documentation PRs.

This document preserves the principle that runtime fixes must remain separate from documentation-only PRs.

This document does not modify PR #100.

---

## 34. Relationship to PR #101

PR #101 created Threat Model and Data Governance V0.1.

Training and support must follow data governance and no-PHI principles.

This document does not replace PR #101.

---

## 35. Relationship to PR #102

PR #102 created OpenEMR Integration Boundary Map V0.1.

Training and support must respect OpenEMR integration boundaries and must not imply SQL, FHIR/API, frontend, or OpenEMR core-sensitive implementation without approval.

This document does not replace PR #102.

---

## 36. Relationship to PR #103

PR #103 created ADR Baseline V0.1.

This document applies ADR principles including documentation-first governance, no runtime before gate approval, no PHI in GitHub, no unsupported claims, and CI green before merge.

This document does not replace PR #103.

---

## 37. Relationship to PR #104

PR #104 created Non-Production Reproducible Install Plan V0.1.

Training and support must align with non-production, synthetic-only, and no-production-use boundaries.

This document does not replace PR #104.

---

## 38. Relationship to PR #105

PR #105 created Synthetic Demo Data and Demo Boundary V0.1.

Training and support must use synthetic-only data and must not use PHI, real patient data, or production screenshots.

This document does not replace PR #105.

---

## 39. Reviewer Checklist

Reviewers should confirm:

- Documentation-only scope.
- Correct file path.
- No PHI.
- No secrets.
- No sensitive logs.
- No database dumps.
- No SQL.
- No database migration.
- No runtime implementation.
- No frontend implementation.
- No FHIR/API implementation.
- No AI implementation.
- No OpenEMR core-sensitive change.
- No live RBAC.
- No live audit.
- No live backup.
- No live restore testing.
- No unsupported readiness claim.
- No unsupported validation claim.
- No unsupported compliance claim.
- No unsupported cybersecurity certification claim.
- No real patient data.
- No production screenshots.
- Synthetic-only training boundary is clear.
- Support scope is planning-only.
- Relationship to PR #92 through PR #105 is accurate.
- Unicode/Bidi warning is checked if GitHub displays one.

---

## 40. Definition of Done

This document is complete when:

- Purpose is defined.
- Scope is defined.
- Out-of-scope is defined.
- Training principle is documented.
- Training audiences are documented.
- Training content rules are documented.
- Synthetic training data rule is documented.
- Support principle is documented.
- Support scope is documented.
- Support roles are documented.
- Support intake is documented.
- Support categories are documented.
- Severity levels are documented.
- Escalation rules are documented.
- Known issue handling is documented.
- Feedback handling is documented.
- Training evidence expectations are documented.
- Support evidence expectations are documented.
- Communication boundary is documented.
- Training stop rules are documented.
- Support stop rules are documented.
- Relationships to PR #92 through PR #105 are documented.
- Reviewer checklist is included.
- No PHI is introduced.
- No SQL is introduced.
- No runtime implementation is introduced.
- No unsupported readiness, validation, compliance, certification, or commercial claim is introduced.

---

## 41. After-Merge Action

After this PR is merged, the next planned documentation step is:

Commercial Claims Policy and Claims Register V0.1.

Do not start the next PR until:

- This PR is merged.
- `master` is updated locally.
- Working tree is clean.
- The PR body file is removed locally.
- `custom/im-core/docs/training/training-and-support-package-v0.1.md` exists on `master`.

---

## 42. Status

Documentation-stage training and support package.

No runtime implementation.

No SQL.

No database migration.

No PHI.

No real patient data.

No AI implementation.

No FHIR/API implementation.

No frontend implementation.

No OpenEMR core-sensitive change.

No live RBAC.

No live audit.

No live backup.

No restore testing.

Not clinically validated.

Not usability validated.

Not human factors validated.

Not regulatory compliant.

Not cybersecurity certified.

Not training-ready.

Not support-ready.

Not demo-ready.

Not pilot-ready.

Not production-ready.

Not commercially deployment-ready.
