# Non-Production Reproducible Install Plan V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines a non-production reproducible install plan for OpenEMR IM Core.

The purpose is to describe how future non-production environments may be prepared, reviewed, repeated, and verified without introducing production deployment, PHI, real patient data, secrets, runtime clinical use, or unsupported readiness claims.

This document is documentation-stage only.

Golden rule:

The system must support clinicians. It must not replace clinicians.

---

## 2. Document Status and Identity

| Field | Value |
|---|---|
| Document | Non-Production Reproducible Install Plan V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage only |
| Version | v0.1 |
| Scope | Non-production planning only |
| Owner Role | Technical Owner / Operations Owner |
| Reviewer Roles | Governance Owner, Privacy/Security Owner, Documentation Owner, Clinical Safety Owner, Release Owner |
| Runtime Status | No runtime implementation |
| Production Status | Not production-ready |
| Clinical Use Status | Not for clinical use |

This document does not perform installation.

This document does not authorize production deployment.

This document does not authorize clinical use.

---

## 3. Scope

This plan covers:

- Non-production installation planning.
- Reproducibility principles.
- Environment boundaries.
- Tooling assumptions.
- Dependency capture.
- Configuration handling.
- Synthetic-data-only expectations.
- Verification checks.
- Rollback and cleanup expectations.
- Evidence required before future sandbox execution.
- Stop rules for unsafe installation activity.

---

## 4. Out of Scope

This document does not include:

- Production installation.
- Pilot installation.
- Live clinical deployment.
- PHI.
- Real patient data.
- Credentials.
- Secrets.
- Sensitive logs.
- Database dumps.
- SQL execution.
- Database migration.
- OpenEMR core-sensitive runtime change.
- FHIR/API implementation.
- Frontend implementation.
- AI implementation.
- Machine learning model execution.
- Autonomous clinical decision support.
- Patient-facing AI.
- Emergency triage automation.
- Live RBAC configuration.
- Live audit implementation.
- Live backup execution.
- Live restore testing.
- Commercial deployment.

This document does not claim:

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

## 5. Non-Production Environment Definition

A non-production environment is any environment used only for planning, development, internal testing, sandbox verification, documentation review, or training simulation.

A non-production environment must not be used for:

- Real patient care.
- Clinical decision-making.
- Production workflow.
- Billing workflow.
- Operational clinical dependency.
- Patient-facing use.
- Real PHI processing.
- Commercial customer deployment.

---

## 6. Reproducibility Principle

A reproducible non-production installation should be capable of being repeated by an authorized reviewer using documented steps, pinned assumptions, known inputs, and recorded outputs.

Reproducibility requires:

- Documented source branch or commit.
- Documented installation environment.
- Documented dependency assumptions.
- Documented configuration boundaries.
- Documented synthetic-data assumptions.
- Documented verification steps.
- Documented expected results.
- Documented cleanup or rollback.

---

## 7. Environment Boundary

Future non-production installation planning must define:

| Area | Required Boundary |
|---|---|
| Host | Non-production host only |
| Network | Isolated or controlled network |
| Data | Synthetic-only |
| Credentials | Non-production only |
| Secrets | Not committed to repository |
| Logs | No PHI or sensitive data |
| Database | Non-production only |
| OpenEMR | Non-production instance only |
| Access | Authorized users only |
| Clinical Use | Prohibited |

---

## 8. Required Pre-Install Checks

Before any future non-production installation execution, reviewers must confirm:

- The target environment is not production.
- No real patient data is present.
- No production credentials are used.
- No secrets are committed.
- No database dump from production is used.
- No PHI appears in configuration, logs, test data, or screenshots.
- Installation purpose is documented.
- Authorized reviewers are identified.
- Rollback or cleanup path is documented.
- The installation is linked to an approved gate or sandbox authorization.

---

## 9. Source Control Requirements

A reproducible install must identify:

- Repository URL.
- Branch.
- Commit hash.
- PR number if applicable.
- Changed files.
- Expected documentation version.
- Dependency files if applicable.
- OpenEMR baseline assumptions.

No installation should rely on uncommitted local changes.

Temporary local files must not be committed unless explicitly intended and reviewed.

---

## 10. Dependency Capture

Future installation evidence should capture:

- PHP version.
- Node version.
- npm version.
- Composer version.
- Database version.
- Web server type.
- Container/runtime assumptions.
- OpenEMR version or branch.
- OS/environment details.

Dependency drift must be documented if installation results differ across environments.

---

## 11. Configuration Handling

Configuration must follow these rules:

- No production secrets.
- No real credentials.
- No PHI in configuration.
- No committed secret files.
- No uncontrolled local overrides.
- No production endpoint.
- No patient-facing endpoint.
- No external integration endpoint unless authorized.

Any required configuration must be documented using placeholders.

Example placeholder style:

    IM_CORE_NON_PRODUCTION_SETTING=<non-production-placeholder>

---

## 12. Data Boundary

The only acceptable data for early non-production installation is synthetic data.

Synthetic data must be:

- Clearly labeled.
- Not copied from real patient records.
- Not derived from identifiable patient data.
- Not containing real names, real identifiers, real contact details, or real clinical records.
- Suitable for testing without privacy exposure.

No screenshots should show real patient data.

No logs should contain PHI.

---

## 13. Installation Evidence Template

Future installation evidence should include:

| Field | Required Content |
|---|---|
| Install ID | Unique identifier |
| Date | Date performed |
| Performer | Role or reviewer |
| Environment | Non-production details |
| Source commit | Commit hash |
| Data type | Synthetic-only confirmation |
| Configuration | Non-secret summary |
| Commands | Commands executed |
| Result | Pass/fail |
| Deviations | Any deviations |
| Logs | Sanitized logs only |
| Reviewer | Reviewer role |
| Decision | Accept / reject / repeat |

---

## 14. Verification Checks

A future non-production install should verify:

- Repository checkout completed.
- Expected files exist.
- No unintended files are present.
- Dependencies installed as expected.
- Documentation files are readable.
- No PHI detected in test data.
- No secrets detected in committed files.
- No production endpoint is configured.
- No unsupported readiness claim is present.
- Cleanup path is available.

For documentation-only phases, verification may remain limited to repository and documentation checks.

---

## 15. Stop Rules

Stop installation planning or execution if any of the following occur:

- PHI is found.
- Real patient data is found.
- Production credentials are found.
- Secrets are found in files or logs.
- A production endpoint is configured.
- Database dump origin is unclear.
- SQL or migration is proposed without approval.
- Runtime implementation appears without gate approval.
- FHIR/API implementation appears without gate approval.
- Frontend implementation appears without human factors review.
- AI/CDS implementation appears without explicit authorization.
- Unsupported readiness or compliance claim appears.
- Reviewer cannot reproduce the steps.

---

## 16. Rollback and Cleanup Expectations

Any future non-production install must define how to clean up:

- Temporary files.
- Local credentials.
- Non-production containers.
- Non-production databases.
- Generated logs.
- Generated artifacts.
- Test data.
- Local branches if no longer needed.

Cleanup evidence should be captured when installation activity is performed.

---

## 17. Relationship to PR #92

PR #92 created Evidence Registry and Evidence Templates V0.1.

This install plan depends on evidence capture principles from PR #92.

This document does not modify PR #92.

---

## 18. Relationship to PR #93

PR #93 created Traceability Matrix V0.1.

Future installation steps should be traceable to requirements, risks, controls, and evidence.

This document does not modify PR #93.

---

## 19. Relationship to PR #94

PR #94 created Risk Register V0.1.

Installation risks such as PHI exposure, configuration error, and production confusion should be linked to risk controls.

This document does not modify PR #94.

---

## 20. Relationship to PR #95

PR #95 created Pull Request Template and Stop Rules V0.1.

This document reinforces stop rules for non-production installation planning.

This document does not modify PR #95.

---

## 21. Relationship to PR #96

PR #96 created Clinical Safety Case V0.1.

This document preserves the boundary that non-production installation must not support clinical use.

This document does not replace PR #96.

---

## 22. Relationship to PR #97

PR #97 created Human Factors and Usability Risk Plan V0.1.

This document blocks frontend or workflow use before appropriate human factors review.

This document does not replace PR #97.

---

## 23. Relationship to PR #98

PR #98 created Security / Privacy / RBAC / Audit / Backup Gap Refinement V0.1.

This document reinforces that live RBAC, audit, backup, and restore testing are not implemented by this plan.

This document does not implement PR #98 controls.

---

## 24. Relationship to PR #100

PR #100 fixed a runtime CI/E2E blocker separately from documentation PRs.

This document preserves the principle that runtime fixes must remain separate from documentation-only PRs.

This document does not modify PR #100.

---

## 25. Relationship to PR #101

PR #101 created Threat Model and Data Governance V0.1.

This document applies the no-PHI and synthetic-only boundaries from data governance planning.

This document does not replace PR #101.

---

## 26. Relationship to PR #102

PR #102 created OpenEMR Integration Boundary Map V0.1.

This document respects OpenEMR core-sensitive, SQL, FHIR/API, frontend, and sandbox boundaries.

This document does not replace PR #102.

---

## 27. Relationship to PR #103

PR #103 created ADR Baseline V0.1.

This document applies ADR principles including documentation-first governance, no runtime before gate approval, no PHI in GitHub, no unsupported claims, and CI green before merge.

This document does not replace PR #103.

---

## 28. Reviewer Checklist

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
- Relationship to PR #92 through PR #103 is accurate.
- Unicode/Bidi warning is checked if GitHub displays one.

---

## 29. Definition of Done

This document is complete when:

- Purpose is defined.
- Scope is defined.
- Out-of-scope is defined.
- Non-production boundary is defined.
- Reproducibility principle is defined.
- Environment boundary is defined.
- Pre-install checks are defined.
- Source control requirements are defined.
- Dependency capture is defined.
- Configuration handling is defined.
- Data boundary is defined.
- Installation evidence template is defined.
- Verification checks are defined.
- Stop rules are defined.
- Cleanup expectations are defined.
- Relationships to PR #92 through PR #103 are documented.
- Reviewer checklist is included.
- No PHI is introduced.
- No SQL is introduced.
- No runtime implementation is introduced.
- No unsupported readiness, validation, compliance, certification, or commercial claim is introduced.

---

## 30. After-Merge Action

After this PR is merged, the next planned documentation step is:

Synthetic Demo Data and Demo Boundary V0.1.

Do not start the next PR until:

- This PR is merged.
- `master` is updated locally.
- Working tree is clean.
- The PR body file is removed locally.
- `custom/im-core/docs/deployment/non-production-reproducible-install-plan-v0.1.md` exists on `master`.

---

## 31. Status

Documentation-stage non-production reproducible install plan.

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
