# Root Safety and Non-Authorization Notice V0.1 - OpenEMR IM Core

## 1. Purpose

This document provides a clear root-level safety and non-authorization notice for OpenEMR IM Core.

The purpose is to prevent misunderstanding of the current project state by reviewers, contributors, maintainers, auditors, clinical stakeholders, technical stakeholders, and future AI-assisted development tools.

This document is a governance and safety-boundary artifact only.

It does not authorize implementation, clinical use, production use, demo use, pilot use, commercial use, regulatory claims, cybersecurity certification claims, medical-device readiness claims, or clinical-use authorization.

---

## 2. Current Project Status

OpenEMR IM Core is currently:

- Documentation-stage only.
- Planning-stage only.
- Governance-first.
- Safety-gated.
- Evidence-gated.
- Future-gated.
- Not for clinical use.
- Not production-ready.
- Not clinically validated.
- Not regulatory compliant.
- Not cybersecurity certified.
- Not medical-device ready.

The current repository state must not be interpreted as a deployable, clinically usable, commercially usable, validated, certified, or regulated medical software product.

---

## 3. Current Non-Authorization Boundary

The current project state does not authorize:

- Runtime implementation.
- SQL execution.
- Database migration.
- FHIR/API implementation.
- Frontend implementation.
- OpenEMR core-sensitive changes.
- Runtime AI.
- Prompt execution.
- AI/model integration.
- Autonomous clinical decision support.
- Autonomous diagnosis.
- Autonomous treatment recommendation.
- Autonomous prescribing.
- Autonomous emergency triage.
- Patient-facing AI.
- PHI or real patient data use.
- Credentials or secrets use.
- Sensitive logs use.
- Database dumps use.
- Clinical use.
- Production use.
- Demo use.
- Pilot use.
- Commercial use.
- Regulatory compliance claims.
- Cybersecurity certification claims.
- Medical-device readiness claims.
- Clinical-use authorization claims.

---

## 4. Repository Visitor Notice

Any person or tool reviewing this repository should understand the following:

OpenEMR IM Core is currently a controlled documentation and governance foundation for possible future development.

The project currently defines boundaries, plans, governance artifacts, traceability starters, risk planning artifacts, evidence planning artifacts, and standards awareness artifacts.

These artifacts are not evidence of clinical readiness, production readiness, regulatory compliance, cybersecurity certification, or medical-device readiness.

No document in this repository should be interpreted as authorizing patient care, clinical workflow execution, diagnosis, treatment, prescribing, emergency triage, autonomous clinical decision support, or patient-facing AI.

---

## 5. Contributor Notice

Contributors must not introduce:

- Runtime implementation.
- SQL execution.
- Database migration.
- FHIR/API implementation.
- Frontend implementation.
- OpenEMR core-sensitive changes.
- Runtime AI.
- Prompt execution.
- AI/model integration.
- PHI.
- Real patient data.
- Credentials.
- Secrets.
- Sensitive logs.
- Database dumps.
- Clinical-use claims.
- Production-readiness claims.
- Demo-readiness claims.
- Pilot-readiness claims.
- Commercial-readiness claims.
- Regulatory-compliance claims.
- Cybersecurity-certification claims.
- Medical-device-readiness claims.
- Clinical-validation claims.

Any future exception must require explicit separate approval through controlled governance, risk review, traceability review, evidence planning, and human review.

---

## 6. AI-Assisted Development Notice

AI-assisted development tools must not infer that this repository is ready for runtime implementation, clinical use, production use, AI/ML integration, or regulatory claims.

AI-assisted development must preserve the following boundaries:

- Do not create runtime code.
- Do not create SQL migrations.
- Do not create FHIR/API implementation.
- Do not create frontend implementation.
- Do not create prompt execution logic.
- Do not create AI/model integration.
- Do not create clinical decision support logic.
- Do not create diagnosis logic.
- Do not create treatment recommendation logic.
- Do not create prescribing logic.
- Do not create emergency triage logic.
- Do not create patient-facing AI.
- Do not introduce PHI, real patient data, credentials, secrets, sensitive logs, or database dumps.
- Do not claim clinical validation, regulatory compliance, cybersecurity certification, production readiness, medical-device readiness, or clinical-use authorization.

AI-assisted development may help create documentation-only governance artifacts if the work remains within approved project boundaries.

---

## 7. Claim-Control Wording

Approved wording includes:

- Documentation-stage only.
- Planning-stage only.
- Governance-first.
- Safety-gated.
- Evidence-gated.
- Future-gated.
- Not for clinical use.
- Not production-ready.
- Not clinically validated.
- No regulatory compliance claim.
- No cybersecurity certification claim.
- No medical-device readiness claim.
- No runtime implementation authorized.
- No SQL execution authorized.
- No AI/model integration authorized.
- No PHI or real patient data authorized.

---

## 8. Forbidden Wording

The following wording must not be introduced unless future evidence, governance approval, and qualified human review explicitly support it:

- Clinically ready.
- Production-ready.
- Deployment-ready.
- Validated clinical system.
- Regulatory compliant.
- IEC 62304 compliant.
- ISO 14971 compliant.
- ISO 13485 compliant.
- IEC 62366 compliant.
- IEC 82304 compliant.
- Cybersecurity certified.
- Medical-device ready.
- Authorized for clinical use.
- Safe for live-patient use.
- AI clinical decision support system.
- Autonomous diagnosis system.
- Autonomous treatment recommendation system.
- Autonomous prescribing system.
- Autonomous emergency triage system.
- Patient-facing AI system.

---

## 9. Relationship to Existing Governance Artifacts

| Source ID | Artifact | File path | Relationship |
|---|---|---|---|
| SRC-ROADMAP-001 | Comprehensive Governance and Future Clinical-Use Readiness Roadmap V0.1 | custom/im-core/docs/roadmap/comprehensive-governance-and-future-clinical-use-readiness-roadmap-v0.1.md | Defines future-gated roadmap and non-authorization boundaries. |
| SRC-REG-001 | Regulatory and CDS Boundary Statement V0.1 | custom/im-core/docs/regulatory/regulatory-and-cds-boundary-statement-v0.1.md | Defines regulatory and clinical decision support boundaries. |
| SRC-STD-001 | Standards Applicability and Awareness Matrix V0.1 | custom/im-core/docs/regulatory/standards-applicability-and-awareness-matrix-v0.1.md | Defines standards-awareness only and no-compliance boundary. |
| SRC-INV-001 | Documentation Inventory and Artifact Status Matrix V0.1 | custom/im-core/docs/index/documentation-inventory-and-artifact-status-matrix-v0.1.md | Defines artifact status and documentation gaps. |
| SRC-INDEX-001 | Documentation Index and Review Cadence V0.1 | custom/im-core/docs/index/documentation-index-and-review-cadence-v0.1.md | Provides documentation discoverability and review indexing. |

---

## 10. Risks

| Risk | Impact | Control |
|---|---|---|
| Repository is mistaken for clinical software | Unsafe use or unsupported expectations | Root safety and non-authorization notice |
| Governance documents are mistaken for validation evidence | Unsupported readiness claims | Explicit distinction between planning and evidence |
| Standards awareness is mistaken for compliance | Unsupported regulatory claims | No-compliance and no-certification language |
| Future-gated AI language is mistaken for AI implementation | Premature AI development | Explicit no-runtime-AI and no-model-integration boundary |
| Documentation progress is mistaken for production readiness | Premature deployment assumptions | Repeated not-production-ready language |
| External reviewers misunderstand project maturity | Incorrect scientific or regulatory conclusions | Clear current-status and visitor notice |

---

## 11. Review Expectations

This notice should be reviewed when:

- A new major governance artifact is added.
- A future phase gate is proposed.
- Any runtime implementation is proposed.
- Any clinical workflow implementation is proposed.
- Any SQL, database, FHIR/API, frontend, AI, or PHI-related change is proposed.
- Any claim-control wording is changed.
- Any regulatory, cybersecurity, clinical validation, production, demo, pilot, or medical-device readiness claim is proposed.

Reviewer roles may include:

- Governance Owner.
- Documentation Owner.
- Technical Owner.
- Clinical Safety Owner.
- Risk Owner.
- Evidence Reviewer.
- Privacy-Security Owner.
- Regulatory Reviewer if applicable.
- AI Governance Owner if applicable.

---

## 12. Definition of Done

This document is complete when:

- Purpose is documented.
- Current project status is documented.
- Non-authorization boundary is documented.
- Repository visitor notice is documented.
- Contributor notice is documented.
- AI-assisted development notice is documented.
- Claim-control wording is documented.
- Forbidden wording is documented.
- Relationship to existing governance artifacts is documented.
- Risks are documented.
- Review expectations are documented.
- No runtime implementation is introduced.
- No SQL execution is introduced.
- No database migration is introduced.
- No FHIR/API implementation is introduced.
- No frontend implementation is introduced.
- No OpenEMR core-sensitive change is introduced.
- No runtime AI is introduced.
- No prompt execution is introduced.
- No AI/model integration is introduced.
- No PHI, real patient data, credentials, secrets, sensitive logs, or database dumps are introduced.
- No unsupported demo, pilot, production, commercial, clinical validation, regulatory compliance, cybersecurity certification, medical-device readiness, or clinical-use authorization claim is introduced.

---

## 13. Status

Documentation-only root safety and non-authorization notice.

Planning-stage only.

Future-gated only.

Not for clinical use.

Not production-ready.

Not clinically validated.

No regulatory compliance claim.

No cybersecurity certification claim.

No medical-device readiness claim.

No runtime implementation.

No SQL execution.

No database migration.

No FHIR/API implementation.

No frontend implementation.

No runtime AI.

No prompt execution.

No AI/model integration.
