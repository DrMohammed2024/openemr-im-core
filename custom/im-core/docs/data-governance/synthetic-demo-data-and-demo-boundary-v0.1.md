# Synthetic Demo Data and Demo Boundary V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines the synthetic demo data and demo boundary for OpenEMR IM Core.

The purpose is to prevent real patient data, PHI, secrets, production credentials, sensitive logs, unsupported clinical claims, or production assumptions from entering demo, training, sandbox, documentation, or presentation activities.

This document is documentation-stage only.

Golden rule:

The system must support clinicians. It must not replace clinicians.

---

## 2. Document Status and Identity

| Field | Value |
|---|---|
| Document | Synthetic Demo Data and Demo Boundary V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage only |
| Version | v0.1 |
| Scope | Synthetic demo data and demo boundary planning only |
| Owner Role | Data Governance Owner / Privacy-Security Owner |
| Reviewer Roles | Governance Owner, Clinical Safety Owner, Human Factors Reviewer, Documentation Owner, Technical Owner |
| Runtime Status | No runtime implementation |
| Demo Status | Not demo-ready |
| Clinical Use Status | Not for clinical use |

This document does not create demo data.

This document does not authorize real demos with real patient data.

This document does not authorize clinical, pilot, production, or commercial use.

---

## 3. Scope

This document covers:

- Synthetic demo data principles.
- Demo boundary rules.
- Prohibited data.
- Permitted synthetic data characteristics.
- PHI exclusion rules.
- Screenshot and recording boundaries.
- Log and artifact boundaries.
- Training and presentation boundaries.
- Review requirements before future demo activity.
- Stop rules for unsafe demo content.

---

## 4. Out of Scope

This document does not include:

- Real patient data.
- PHI.
- Production screenshots.
- Production logs.
- Real patient identifiers.
- Real clinician credentials.
- Real facility credentials.
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
- Pilot execution.
- Production release.
- Commercial deployment.

This document does not claim:

- Demo readiness.
- Pilot readiness.
- Production readiness.
- Commercial readiness.
- Regulatory compliance.
- Cybersecurity certification.
- HIPAA compliance.
- GDPR compliance.
- FDA readiness.
- MDR readiness.
- Medical-device readiness.

---

## 5. Synthetic Demo Data Definition

Synthetic demo data is data created for demonstration, training, testing, or documentation purposes that is not copied from, derived from, or traceable to a real patient, real clinician, real facility, or real clinical event.

Synthetic demo data must be:

- Artificial.
- Clearly labeled as synthetic.
- Non-identifiable.
- Non-production.
- Non-clinical.
- Safe for documentation and internal review.
- Reviewable before use.

Synthetic demo data must not be:

- Real patient data.
- Modified real patient data.
- De-identified production data unless explicitly approved through a separate process.
- Pseudonymized PHI.
- Real screenshots with blurred PHI.
- Real logs with masked identifiers unless explicitly approved.
- Real database exports.
- Real clinical records.

---

## 6. Demo Boundary

A demo is any presentation, screenshot, walkthrough, recording, training session, internal review, external review, or prototype demonstration showing OpenEMR IM Core concepts, documents, workflows, or future planned behavior.

A demo must remain:

- Non-production.
- Synthetic-only.
- Non-clinical.
- Non-patient-facing.
- Non-commercial unless separately reviewed.
- Free of PHI.
- Free of secrets.
- Free of unsupported readiness claims.

A demo must not be used for:

- Real patient care.
- Clinical decision-making.
- Emergency triage.
- Diagnosis.
- Prescribing.
- Billing.
- Production workflow.
- Pilot use.
- Commercial proof of readiness.

---

## 7. Prohibited Data

The following data is prohibited in demo, training, screenshots, documentation, logs, artifacts, and presentations:

- Patient names.
- Patient IDs.
- Medical record numbers.
- Birth dates tied to real persons.
- Addresses.
- Phone numbers.
- Email addresses.
- Social security or national IDs.
- Insurance identifiers.
- Real encounter notes.
- Real diagnoses.
- Real medications.
- Real allergies.
- Real lab results.
- Real imaging reports.
- Real clinical documents.
- Real clinician credentials.
- Real facility credentials.
- Production URLs.
- Production tokens.
- API keys.
- Database dumps.
- Sensitive logs.
- Audit logs containing PHI.
- Screenshots from production systems.

---

## 8. Allowed Synthetic Data Characteristics

Synthetic demo data may include:

- Fictional patient names.
- Fictional dates.
- Fictional medical record numbers.
- Fictional encounters.
- Fictional medications.
- Fictional allergies.
- Fictional lab values.
- Fictional clinical notes.
- Fictional care scenarios.
- Fictional facility names.
- Fictional users.
- Fictional roles.

Allowed data must be obviously synthetic when reviewed.

Example synthetic patient naming pattern:

    SYNTHETIC-PATIENT-001
    Demo Patient Alpha
    Example Internal Medicine Case 01

---

## 9. PHI Exclusion Rule

No PHI may be introduced into:

- Repository files.
- PR descriptions.
- Issues.
- Comments.
- Screenshots.
- Logs.
- Test data.
- Demo data.
- Training materials.
- Presentations.
- Attachments.
- CI artifacts.
- Local files intended for commit.

If PHI is discovered, stop work immediately and follow the correction process.

---

## 10. Screenshot and Recording Boundary

Screenshots and recordings must be synthetic-only.

Screenshots must not show:

- Real patient data.
- Production environment.
- Production URL.
- Credentials.
- Tokens.
- Secrets.
- Sensitive logs.
- Internal private infrastructure details unless approved.
- Unsupported clinical claims.

Any screenshot intended for documentation or PR discussion must be reviewed before posting.

---

## 11. Log and Artifact Boundary

Logs and artifacts must not include:

- PHI.
- Secrets.
- Credentials.
- Production URLs.
- Database dumps.
- Real identifiers.
- Sensitive operational details.
- Real patient clinical content.

CI logs and local logs must be reviewed before being copied into issues, PRs, or documentation.

---

## 12. Training Boundary

Training content must be synthetic-only.

Training must not imply:

- Clinical validation.
- Production readiness.
- Commercial readiness.
- Regulatory compliance.
- Cybersecurity certification.
- Medical-device readiness.
- Replacement of clinician judgment.

Training must preserve the principle:

The system must support clinicians. It must not replace clinicians.

---

## 13. External Presentation Boundary

External presentations must be reviewed before use.

External presentation materials must not include:

- PHI.
- Real patient data.
- Production screenshots.
- Production credentials.
- Unsupported claims.
- Confidential technical details beyond approved scope.
- Claims of validation, compliance, certification, readiness, or clinical effectiveness without evidence.

---

## 14. Synthetic Scenario Requirements

Synthetic scenarios should include:

- Scenario ID.
- Synthetic patient label.
- Clinical context.
- Intended learning or review purpose.
- Data elements used.
- Risk considerations.
- Reviewer.
- Approval status.

Synthetic scenarios must not be designed to appear as real patient records.

---

## 15. Demo Evidence Template

Future demo evidence should include:

| Field | Required Content |
|---|---|
| Demo ID | Unique identifier |
| Date | Demo date |
| Purpose | Training / review / sandbox / presentation |
| Data type | Synthetic-only confirmation |
| Environment | Non-production only |
| Screenshots | Reviewed synthetic-only screenshots if used |
| Logs | Sanitized or not included |
| Claims | Reviewed and evidence-linked |
| Reviewer | Reviewer role |
| Decision | Accept / correct / reject |

---

## 16. Demo Stop Rules

Stop demo preparation or demo execution if:

- PHI is found.
- Real patient data is found.
- Production screenshots are used.
- Production credentials are visible.
- Secrets are visible.
- Logs contain sensitive data.
- Demo uses real clinical workflow.
- Demo implies clinical validation.
- Demo implies production readiness.
- Demo implies regulatory compliance.
- Demo implies cybersecurity certification.
- Demo suggests autonomous diagnosis, prescribing, triage, or replacement of clinician judgment.
- Reviewer cannot confirm synthetic-only status.

---

## 17. Review Requirements

Before future demo use, reviewers should confirm:

- Data is synthetic-only.
- No PHI exists.
- No real patient identifiers exist.
- No production screenshot is used.
- No secrets are visible.
- No unsupported readiness claim is present.
- No unsupported compliance claim is present.
- No unsupported validation claim is present.
- Clinician-supporting boundary is preserved.
- Demo purpose is documented.
- Demo evidence is retained if applicable.

---

## 18. Relationship to PR #92

PR #92 created Evidence Registry and Evidence Templates V0.1.

Future demo evidence should follow evidence registry principles.

This document does not modify PR #92.

---

## 19. Relationship to PR #93

PR #93 created Traceability Matrix V0.1.

Future demo scenarios should be traceable to requirements, risks, controls, and evidence when applicable.

This document does not modify PR #93.

---

## 20. Relationship to PR #94

PR #94 created Risk Register V0.1.

Demo data and demo activities must consider risks such as PHI exposure, false claims, unsafe workflow assumptions, and clinician over-reliance.

This document does not modify PR #94.

---

## 21. Relationship to PR #95

PR #95 created Pull Request Template and Stop Rules V0.1.

This document reinforces stop rules for PHI, unsupported claims, and unsafe scope expansion.

This document does not modify PR #95.

---

## 22. Relationship to PR #96

PR #96 created Clinical Safety Case V0.1.

Demo activities must preserve clinician authority and must not imply diagnosis, prescribing, triage, or replacement of clinician judgment.

This document does not replace PR #96.

---

## 23. Relationship to PR #97

PR #97 created Human Factors and Usability Risk Plan V0.1.

Demo workflows must not be treated as validated usability or human factors evidence unless separately planned, executed, and approved.

This document does not replace PR #97.

---

## 24. Relationship to PR #98

PR #98 created Security / Privacy / RBAC / Audit / Backup Gap Refinement V0.1.

Demo activities must preserve privacy and security boundaries, and must not imply live RBAC, audit, backup, or restore implementation.

This document does not implement PR #98 controls.

---

## 25. Relationship to PR #100

PR #100 fixed a runtime CI/E2E blocker separately from documentation PRs.

This document preserves the principle that runtime fixes must remain separate from documentation-only PRs.

This document does not modify PR #100.

---

## 26. Relationship to PR #101

PR #101 created Threat Model and Data Governance V0.1.

This document applies data governance and no-PHI principles to demo and training activities.

This document does not replace PR #101.

---

## 27. Relationship to PR #102

PR #102 created OpenEMR Integration Boundary Map V0.1.

Demo activities must respect OpenEMR integration boundaries, including no SQL, no FHIR/API, no frontend, and no OpenEMR core-sensitive implementation without approval.

This document does not replace PR #102.

---

## 28. Relationship to PR #103

PR #103 created ADR Baseline V0.1.

This document applies ADR principles including documentation-first governance, no runtime before gate approval, no PHI in GitHub, no unsupported claims, and CI green before merge.

This document does not replace PR #103.

---

## 29. Relationship to PR #104

PR #104 created Non-Production Reproducible Install Plan V0.1.

This document builds on non-production, synthetic-only, and no-production-use boundaries.

This document does not replace PR #104.

---

## 30. Reviewer Checklist

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
- Synthetic-only demo boundary is clear.
- Relationship to PR #92 through PR #104 is accurate.
- Unicode/Bidi warning is checked if GitHub displays one.

---

## 31. Definition of Done

This document is complete when:

- Purpose is defined.
- Scope is defined.
- Out-of-scope is defined.
- Synthetic demo data definition is documented.
- Demo boundary is documented.
- Prohibited data is documented.
- Allowed synthetic data characteristics are documented.
- PHI exclusion rule is documented.
- Screenshot and recording boundary is documented.
- Log and artifact boundary is documented.
- Training boundary is documented.
- External presentation boundary is documented.
- Synthetic scenario requirements are documented.
- Demo evidence template is documented.
- Demo stop rules are documented.
- Review requirements are documented.
- Relationships to PR #92 through PR #104 are documented.
- Reviewer checklist is included.
- No PHI is introduced.
- No SQL is introduced.
- No runtime implementation is introduced.
- No unsupported readiness, validation, compliance, certification, or commercial claim is introduced.

---

## 32. After-Merge Action

After this PR is merged, the next planned documentation step is:

Training and Support Package V0.1.

Do not start the next PR until:

- This PR is merged.
- `master` is updated locally.
- Working tree is clean.
- The PR body file is removed locally.
- `custom/im-core/docs/data-governance/synthetic-demo-data-and-demo-boundary-v0.1.md` exists on `master`.

---

## 33. Status

Documentation-stage synthetic demo data and demo boundary.

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

Not demo-ready.

Not pilot-ready.

Not production-ready.

Not commercially deployment-ready.
