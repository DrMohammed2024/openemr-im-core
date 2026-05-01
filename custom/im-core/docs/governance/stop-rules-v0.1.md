# Stop Rules V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines mandatory stop rules for OpenEMR IM Core pull requests.

The purpose is to prevent unsafe or unsupported changes from entering the project before appropriate governance, evidence, traceability, risk review, and release gates exist.

These stop rules convert the current project boundaries into explicit merge-blocking conditions.

Golden rule:

The system must support clinicians.
It must not replace clinicians.

---

## 2. Scope

These stop rules apply to OpenEMR IM Core work, including:

- Documentation PRs.
- Governance PRs.
- Evidence PRs.
- Traceability PRs.
- Risk PRs.
- SOP and workflow PRs.
- Security and privacy PRs.
- Release readiness planning PRs.
- Claims control PRs.
- GitHub governance PRs.

These stop rules also apply to any future proposed runtime, SQL, AI, FHIR/API, frontend, OpenEMR core-sensitive, demo, pilot, production, or commercial work.

---

## 3. Out of Scope

This document does not:

- Implement runtime functionality.
- Execute SQL.
- Create database migrations.
- Modify OpenEMR core.
- Implement AI.
- Implement FHIR/API.
- Implement frontend functionality.
- Deploy a demo environment.
- Deploy a pilot environment.
- Deploy a production environment.
- Establish clinical validation.
- Establish regulatory compliance.
- Establish cybersecurity certification.
- Establish commercial readiness.

---

## 4. Stop Rule Principles

A stop rule is a mandatory merge-blocking condition.

If a stop rule is triggered:

1. Pause the PR.
2. Do not merge.
3. Identify the unsafe content or scope.
4. Remove, correct, or split the change.
5. Request the required owner review.
6. Update evidence, traceability, or risk references if needed.
7. Re-run checks.
8. Merge only after the stop condition is resolved.

Stop rules are governance controls only.

They do not create runtime validation, clinical validation, regulatory compliance, cybersecurity certification, demo readiness, pilot readiness, production readiness, or commercial readiness.

---

## 5. Stop Rule Register

| Stop Rule ID | Stop Condition | Required Action | Required Owner Review | Related Risk ID |
|---|---|---|---|---|
| STOP-PHI-001 | PHI or real patient data appears in a PR, issue, screenshot, log, example, demo content, or documentation artifact. | Stop PR, remove content, document correction, escalate if exposure occurred. | Privacy/Security Owner | RISK-PHI-001 |
| STOP-SECRET-001 | Credentials, secrets, tokens, keys, sensitive logs, or private configuration appear. | Stop PR, remove content, rotate affected secret if applicable, document correction. | Privacy/Security Owner / Technical Owner | RISK-SEC-001 |
| STOP-SQL-001 | SQL execution, SQL script, database migration, seed data, database dump, or production database testing appears before future gates. | Stop PR, remove SQL/database content, require future SQL governance if ever proposed. | Technical Owner / Privacy/Security Owner | RISK-SQL-001 |
| STOP-RUNTIME-001 | Runtime implementation appears before approved governance and release gates. | Stop PR, remove runtime change, defer to future approved runtime planning. | Technical Owner / Release Owner | RISK-RUNTIME-001 |
| STOP-AI-001 | Runtime AI, machine learning model, predictive model, autonomous CDS, autonomous diagnosis, autonomous prescribing, autonomous treatment recommendation, or emergency triage automation appears. | Stop PR, remove AI/autonomous content, require future AI governance and validation planning. | Clinical Safety Owner / Technical Owner | RISK-AI-001 |
| STOP-FHIR-001 | FHIR/API implementation appears before security, privacy, and data governance gates. | Stop PR, remove integration implementation, defer to future integration governance. | Technical Owner / Privacy/Security Owner | RISK-FHIR-001 |
| STOP-FRONTEND-001 | Frontend implementation appears before runtime gates. | Stop PR, remove frontend implementation, defer to future approved runtime scope. | Technical Owner / Release Owner | RISK-RUNTIME-001 |
| STOP-CORE-001 | OpenEMR core-sensitive change appears without last-resort governance and architecture decision record. | Stop PR, revert core-sensitive change, require ADR and owner approvals if ever proposed. | Technical Owner / Release Owner | RISK-SCHEMA-001 |
| STOP-CLAIM-001 | Unsupported demo, pilot, production, validation, compliance, certification, commercial, HIPAA, GDPR, FDA, MDR, CE, or medical-device readiness claim appears. | Stop PR, replace claim with limitation language, request claims review. | Release Owner / Claims Reviewer | RISK-CLAIM-001 |
| STOP-UNICODE-001 | GitHub hidden or bidirectional Unicode warning appears and has not been locally reviewed. | Stop merge, run Unicode/Bidi control check, remove unsafe controls if found. | Documentation Owner / Technical Owner | RISK-UNICODE-001 |
| STOP-SCOPE-001 | PR includes unintended files, generated artifacts, PR body files, logs, dumps, broad unrelated scope, or multiple unrelated objectives. | Stop PR, split or remove unintended scope. | Documentation Owner / Technical Owner | RISK-PR-001 |
| STOP-EVIDENCE-001 | PR introduces or changes requirements, risks, controls, tests, claims, or release implications without appropriate evidence or traceability reference. | Stop PR, add evidence/traceability/risk linkage or defer to a dedicated PR. | Documentation Owner / Governance Owner | RISK-EVID-001 |
| STOP-REVIEW-001 | Required owner review is missing for clinical safety, privacy/security, release, governance, claims, or technical boundary changes. | Stop PR until required reviewer is assigned and review is completed. | Governance Owner | RISK-GOV-001 |

---

## 6. Required Review Mapping

| Change Type | Required Reviewer |
|---|---|
| Clinical safety wording | Clinical Safety Owner |
| Human-in-the-loop boundary | Clinical Safety Owner |
| Privacy, PHI, secrets, logs, RBAC, audit, backup, or data governance | Privacy/Security Owner |
| OpenEMR-native boundary, architecture, SQL, runtime, FHIR/API, frontend, or core-sensitive concern | Technical Owner |
| Release gate, readiness, demo, pilot, production, or rollback wording | Release Owner |
| Claims, commercial language, compliance/certification wording, or external positioning | Claims Reviewer |
| Legal, regulatory, HIPAA, GDPR, FDA, MDR, CE, or medical-device wording | Legal/Regulatory Reviewer |
| Evidence, traceability, risk, SOP, workflow, or documentation structure | Documentation Owner / Governance Owner |

---

## 7. Relationship to PR #92

PR #92 created the Evidence Registry and Evidence Templates V0.1.

These stop rules depend on the evidence registry because a PR must not use evidence to support claims beyond its documented evidence status.

These stop rules do not replace the evidence registry.

These stop rules do not create runtime evidence, clinical validation evidence, regulatory compliance evidence, cybersecurity certification evidence, demo readiness evidence, pilot readiness evidence, production readiness evidence, or commercial readiness evidence.

---

## 8. Relationship to PR #93

PR #93 created the Traceability Matrix V0.1.

These stop rules depend on traceability because new requirements, risks, controls, tests, or evidence references must remain traceable.

These stop rules do not replace the traceability matrix.

These stop rules do not convert documentation-stage traceability into runtime verification or validation.

---

## 9. Relationship to PR #94

PR #94 created the Risk Register V0.1.

These stop rules operationalize selected risks from the risk register as merge-blocking conditions.

These stop rules do not replace the risk register.

These stop rules do not prove that risk controls are clinically validated, regulatory compliant, cybersecurity certified, or production-ready.

---

## 10. Unicode / Bidi Review Rule

If GitHub displays a hidden or bidirectional Unicode warning, the PR must not be merged until the file is locally checked for Unicode control characters including:

- LRE
- RLE
- PDF
- LRO
- RLO
- LRI
- RLI
- FSI
- PDI

If unsafe Unicode control characters are found, they must be removed before merge.

Unicode symbols used as visible plain text, such as arrows, may be acceptable only after local review confirms no hidden control characters are present.

---

## 11. Claims Boundary

A PR must be stopped if it claims or implies:

- Demo readiness.
- Pilot readiness.
- Paid-pilot readiness.
- Production readiness.
- Commercial readiness.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.
- HIPAA compliance.
- GDPR compliance.
- FDA readiness.
- MDR readiness.
- CE marking.
- FDA clearance.
- Medical-device readiness.
- Outcome improvement.
- Medical error reduction.
- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous treatment recommendation.
- Emergency triage automation.

Allowed current wording:

- Documentation-stage planning.
- Governance-first.
- Evidence-gated.
- Traceability-controlled.
- Risk-register planning.
- Human-in-the-loop.
- OpenEMR-native planning.
- Not clinically validated.
- Not regulatory compliant.
- Not cybersecurity certified.
- Not demo-ready.
- Not pilot-ready.
- Not production-ready.
- Not commercially deployment-ready.

---

## 12. Merge-Blocking Criteria

A PR must not be merged if:

- Any stop rule is triggered and unresolved.
- Required reviewer approval is missing.
- PR scope is broader than stated.
- Unintended files are present.
- `prXX_body.md` or other local PR body files are committed.
- Evidence, traceability, or risk references are inconsistent.
- GitHub checks are failing.
- GitHub checks are pending and required by project workflow.
- Skipped checks are relevant and unexplained.
- Hidden Unicode warnings are unresolved.
- Unsupported claims are present.

---

## 13. Correction Path

When a stop rule is triggered:

1. Leave the PR open if correction is simple.
2. Remove unsafe or unintended content.
3. Commit a corrective change.
4. Push the correction.
5. Re-run checks.
6. Request required owner review.
7. Document the correction in the PR conversation.

If the scope is fundamentally unsafe or too broad:

1. Close the PR.
2. Create a corrected documentation-only successor PR.
3. Reference the closed PR and explain the correction.

---

## 14. Definition of Done

This document is complete when:

- Stop rule principles are defined.
- Stop rule register is defined.
- Required review mapping is defined.
- Relationship to PR #92 is documented.
- Relationship to PR #93 is documented.
- Relationship to PR #94 is documented.
- Unicode/Bidi review rule is documented.
- Claims boundary is documented.
- Merge-blocking criteria are documented.
- Correction path is documented.
- No PHI is introduced.
- No SQL is introduced.
- No runtime implementation is introduced.
- No AI, FHIR/API, frontend, or OpenEMR core-sensitive change is introduced.
- No unsupported readiness, validation, compliance, certification, or commercial claim is introduced.

---

## 15. After-Merge Action

After this PR is merged, the next planned documentation step is:

PR #96: docs(im-core): add clinical safety case v0.1

Do not start PR #96 until:

- PR #95 is merged.
- `master` is updated locally.
- Working tree is clean.
- `pr95_body.md` is removed locally.
- Pull request template exists on `master`.
- Stop rules document exists on `master`.

---

## 16. Status

Documentation/governance only.

No runtime implementation.

No SQL.

No database migration.

No production database testing.

No runtime AI.

No machine learning model.

No predictive model.

No autonomous CDS.

No autonomous diagnosis.

No autonomous prescribing.

No emergency triage automation.

No frontend implementation.

No FHIR/API implementation.

No OpenEMR core-sensitive change.

Not clinically validated.

Not regulatory compliant.

Not cybersecurity certified.

Not demo-ready.

Not pilot-ready.

Not production-ready.

Not commercially deployment-ready.
