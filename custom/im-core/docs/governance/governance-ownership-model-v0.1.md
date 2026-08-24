# Governance Ownership Model V0.1 - OpenEMR IM Core

## AI-Assisted Solo-Owner Applicability

For work classified as eligible by the AI-Assisted Solo-Owner Governance Policy
V0.1, the Project Owner is the sole final accountable internal decision-maker.
GPT supplies multidisciplinary advisory review. The specialist roles and RACI
assignments below identify review domains and may be consulted, but their
separate approvals are not mandatory internal merge gates for eligible work.

For non-eligible work and triggered future or external gates, the specialized
roles below retain their stated responsibilities. Nothing in this applicability
rule authorizes clinical use, PHI, runtime behavior, deployment, external
release, validation, compliance, certification, or regulatory claims.

## 1. Purpose

This document defines a documentation-only governance ownership model for OpenEMR IM Core.

It identifies ownership roles, review responsibilities, stop-work authority, escalation paths, and go/no-go decision boundaries required before stronger project claims or release-stage decisions are made.

This document does not assign legal, clinical, regulatory, cybersecurity, commercial, production, or medical-device approval.

This document does not authorize:

- PHI.
- Real patient data.
- Credentials.
- Secrets.
- Sensitive logs.
- Database dumps.
- SQL.
- SQL execution.
- Database migrations.
- Runtime AI.
- Machine learning models.
- Predictive models.
- Autonomous clinical decision support.
- Autonomous diagnosis.
- Autonomous treatment recommendation.
- Autonomous prescribing.
- Autonomous emergency triage.
- Patient-facing AI.
- Frontend implementation.
- FHIR/API implementation.
- OpenEMR core-sensitive changes.
- Demo deployment.
- Pilot deployment.
- Production deployment.
- Commercial deployment.

This document does not claim:

- Demo readiness.
- Pilot readiness.
- Paid-pilot readiness.
- Production readiness.
- Commercial readiness.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.
- Clean-install reproducibility.
- Medical-device readiness.

Golden rule:

The system must support clinicians.
It must not replace clinicians.

---

## 2. Scope

This governance model applies to:

- Documentation changes.
- Safety-boundary reviews.
- Clinical workflow documentation.
- OpenEMR IM Core planning.
- Internal Medicine Follow-Up V1 documentation.
- Evidence planning.
- Release readiness gates.
- Claims review.
- Stop-work decisions.
- Escalation decisions.
- Future demo, pilot, production, and commercial candidate planning.

This document is documentation-only.

---

## 3. Out of Scope

This document does not create:

- Legal approval.
- Regulatory approval.
- Clinical validation.
- Cybersecurity certification.
- Production authorization.
- Pilot authorization.
- Commercial authorization.
- Runtime governance automation.
- Runtime access control.
- Runtime audit workflow.
- Runtime AI governance tooling.
- Medical-device quality system certification.

---

## 4. Governance Principles

Governance for OpenEMR IM Core must follow these principles:

1. Safety before speed.
2. Evidence before claims.
3. Documentation before runtime implementation.
4. OpenEMR-native capability before custom implementation.
5. Configuration before code when appropriate.
6. LBF-first where clinically appropriate.
7. Fork-minimal and upstream-first posture.
8. No PHI in repository content.
9. No unsupported readiness, validation, compliance, certification, or commercial claims.
10. No runtime AI or autonomous clinical decision support without future governance, validation, and explicit approval.
11. No SQL execution without explicit future approval and evidence gates.
12. No OpenEMR core-sensitive changes without explicit review and justification.

---

## 5. Governance Roles

| Role | Purpose | Required before stronger claims? |
|---|---|---|
| Project Owner | Owns project direction, scope discipline, and sequencing. | Yes. |
| Documentation Owner | Maintains documentation structure, formatting, and file hygiene. | Yes. |
| OpenEMR Technical Reviewer | Reviews OpenEMR-native alignment, LBF posture, and fork-minimal boundaries. | Yes before implementation claims. |
| Clinical Safety Reviewer | Reviews clinical safety boundaries, clinician authority, and patient-safety risks. | Yes before clinical workflow claims. |
| Security and Privacy Reviewer | Reviews PHI, secrets, RBAC, audit, backup, and privacy boundaries. | Yes before demo or pilot claims. |
| Operations Reviewer | Reviews daily workflow, SOP alignment, handoffs, and support model. | Yes before operational claims. |
| Evidence Reviewer | Reviews evidence completeness, traceability, and verification status. | Yes before readiness claims. |
| Release Owner | Owns go/no-go recommendation for release-stage decisions. | Yes before release claims. |
| Claims Reviewer | Reviews public, demo, pilot, commercial, validation, compliance, and certification language. | Yes before external claims. |
| Governance Reviewer | Reviews overall adherence to project rules and escalation decisions. | Yes. |

---

## 6. RACI Matrix

| Activity | Project Owner | Documentation Owner | Technical Reviewer | Clinical Safety Reviewer | Security/Privacy Reviewer | Operations Reviewer | Evidence Reviewer | Release Owner | Claims Reviewer |
|---|---|---|---|---|---|---|---|---|---|
| Documentation PR scope | A | R | C | C | C | C | C | I | C |
| Markdown/file hygiene | I | R/A | I | I | I | I | I | I | I |
| OpenEMR-native alignment | C | I | R/A | C | C | I | C | I | I |
| LBF alignment | C | I | R/A | C | I | I | C | I | I |
| Clinical safety boundary | C | I | C | R/A | C | C | C | I | C |
| PHI/secrets boundary | C | I | C | C | R/A | I | C | I | C |
| Evidence completeness | C | C | C | C | C | C | R/A | C | I |
| Release readiness gate | A | C | C | C | C | C | C | R | C |
| Claims review | A | C | C | C | C | C | C | C | R |
| Stop-work decision | A | C | C | C | C | C | C | C | C |

Legend:

- R = Responsible.
- A = Accountable.
- C = Consulted.
- I = Informed.

---

## 7. Stop-Work Authority

Work must stop if any of the following appear:

- PHI.
- Real patient data.
- Credentials.
- Secrets.
- Sensitive logs.
- Database dumps.
- SQL execution.
- Unauthorized database migration.
- Runtime AI.
- Autonomous diagnosis.
- Autonomous treatment recommendation.
- Autonomous prescribing.
- Autonomous emergency triage.
- Autonomous clinical decision support.
- Patient-facing AI.
- OpenEMR core-sensitive change without review.
- Demo readiness claim without evidence.
- Pilot readiness claim without evidence.
- Production readiness claim without evidence.
- Commercial readiness claim without evidence.
- Clinical validation claim without evidence.
- Regulatory compliance claim without qualified review.
- Cybersecurity certification claim without formal assessment.

Stop-work may be raised by any reviewer or contributor.

The Project Owner and Governance Reviewer must review the stop-work condition before work resumes.

---

## 8. Escalation Model

| Escalation trigger | First reviewer | Escalation path | Required response |
|---|---|---|---|
| PHI or real patient data found | Security/Privacy Reviewer | Project Owner and Governance Reviewer | Stop work, remove content, review exposure. |
| Secret or credential found | Security/Privacy Reviewer | Project Owner and Governance Reviewer | Stop work, remove secret, rotate if applicable. |
| SQL execution proposed | Technical Reviewer | Project Owner and Evidence Reviewer | Block until explicit evidence gates exist. |
| Runtime AI proposed | Clinical Safety Reviewer | Governance Reviewer and Claims Reviewer | Defer until formal AI governance exists. |
| Clinical automation implied | Clinical Safety Reviewer | Governance Reviewer | Remove autonomous wording and preserve clinician authority. |
| OpenEMR core change proposed | Technical Reviewer | Project Owner | Require justification, review, and safer alternatives. |
| Readiness claim proposed | Claims Reviewer | Release Owner and Evidence Reviewer | Require evidence or remove claim. |
| Failed PR checks | Documentation Owner | Technical Reviewer if needed | Fix before merge. |
| Scope creep | Project Owner | Governance Reviewer | Reduce PR scope or split work. |

---

## 9. Go / No-Go Authority

Go/no-go decisions must be evidence-gated.

| Decision type | Required authority | Minimum evidence |
|---|---|---|
| Documentation merge | Project Owner or Documentation Owner | Clean diff, passing checks, scope match. |
| Runtime implementation candidate | Project Owner, Technical Reviewer, Evidence Reviewer | Runtime plan, safety boundaries, non-production scope. |
| Demo candidate | Release Owner, Security/Privacy Reviewer, Claims Reviewer | Synthetic-data-only plan, demo safety evidence, no unsupported claims. |
| Pilot candidate | Release Owner, Clinical Safety Reviewer, Security/Privacy Reviewer, Evidence Reviewer | Clinical, privacy, security, RBAC, audit, backup, support, training, and validation evidence. |
| Production candidate | Release Owner and Governance Reviewer | Full release package, qualified reviews, validation evidence, operational support evidence. |
| Commercial candidate | Project Owner, Claims Reviewer, Release Owner, qualified legal/commercial review | Claims review, support model, legal boundary review, production evidence if applicable. |

This document does not approve any of these candidate states.

---

## 10. Review Cadence

| Review type | Suggested cadence | Trigger |
|---|---|---|
| Documentation review | Every documentation PR | Any documentation change. |
| Safety boundary review | Every safety-related PR | Any clinical, AI, SQL, PHI, or claims-related change. |
| Evidence review | Before readiness claims | Any claim requiring proof. |
| Governance review | Before release gates | Demo, pilot, production, or commercial candidate planning. |
| Security/privacy review | Before demo or pilot planning | Any data, access, audit, backup, or privacy scope. |
| Clinical safety review | Before clinical workflow or quality-rule use | Any clinical workflow, documentation quality, or safety-net scope. |
| Claims review | Before external communication | Any public, pilot, commercial, validation, compliance, or certification statement. |

---

## 11. Claims Ownership

Claims must be reviewed before being used in documentation, PR descriptions, demos, websites, presentations, or commercial material.

Prohibited unsupported claims include:

- Demo-ready.
- Pilot-ready.
- Paid-pilot-ready.
- Production-ready.
- Commercial-ready.
- Clinically validated.
- Regulatory compliant.
- HIPAA compliant.
- GDPR compliant.
- FDA ready.
- MDR compliant.
- Cybersecurity certified.
- Medical-device ready.
- AI-ready.
- FHIR-ready.
- Safe for live-patient use.

Allowed wording must remain evidence-gated, such as:

- Documentation-only.
- Planning baseline.
- Requires evidence.
- Not yet verified.
- Not implemented.
- Not production-ready.
- Not clinically validated.
- Not regulatory compliant by default.
- Not cybersecurity certified.

---

## 12. Evidence Ownership

Every future evidence item should identify:

- Evidence ID.
- Evidence owner.
- Reviewer.
- Related PR.
- Related requirement.
- Related risk.
- Related release gate.
- Evidence status.
- Review date.
- Location of sanitized evidence.

Evidence must not contain PHI, credentials, sensitive logs, database dumps, or real patient identifiers.

---

## 13. Governance Decisions Log

Future governance decisions should be documented using a consistent structure:

| Field | Description |
|---|---|
| Decision ID | Stable identifier. |
| Decision topic | What is being decided. |
| Related PR | Pull request or document reference. |
| Decision owner | Person or role accountable. |
| Reviewers | Required reviewers. |
| Evidence reviewed | Evidence IDs or document references. |
| Decision | Go, No-Go, Defer, or Needs More Evidence. |
| Rationale | Why the decision was made. |
| Limitations | What the decision does not approve. |
| Date | Review date. |

This PR does not create a runtime decision log.

---

## 14. Relationship to Prior PRs

| Prior PR | Relationship |
|---|---|
| PR #80 | Testing and Verification Plan defines testing expectations. |
| PR #81 | Failure Modes and Safe Response Library defines safety failures and responses. |
| PR #82 | Daily Operating Model and Patient Status Model defines workflow context. |
| PR #83 | SOP Framework defines procedural structure. |
| PR #84 | Data Model Starter and OpenEMR Mapping defines data and mapping boundaries. |
| PR #85 | Clinical Documentation Quality Rules defines documentation-quality planning. |
| PR #86 | Minimum Viable Safe Platform and Release Readiness Gates defines release gates. |
| PR #87 | This document defines governance ownership and decision responsibilities. |

---

## 15. Risks

| Risk | Impact | Control |
|---|---|---|
| No clear owner | Decisions become inconsistent or delayed. | Define governance roles and RACI. |
| Unsupported claim is made | Trust, legal, and safety risk. | Claims reviewer and claims gate. |
| Evidence is missing | Readiness cannot be substantiated. | Evidence owner and evidence review. |
| Clinical safety risk is missed | Potential patient-safety concern. | Clinical Safety Reviewer and stop-work rule. |
| PHI enters repository | Privacy breach. | Security/Privacy Reviewer and No-PHI stop-work rule. |
| OpenEMR core change is made too early | Upgrade and maintenance risk. | Technical review and fork-minimal posture. |
| Runtime AI is introduced too early | Clinical and governance risk. | AI blocked until governed and validated. |
| Release decision is informal | Readiness claims become unreliable. | Release Owner and Go/No-Go process. |

---

## 16. Definition of Done

This document is complete when:

- Governance principles are documented.
- Governance roles are documented.
- RACI matrix is documented.
- Stop-work authority is documented.
- Escalation model is documented.
- Go/no-go authority is documented.
- Review cadence is documented.
- Claims ownership is documented.
- Evidence ownership is documented.
- Governance decision log structure is documented.
- Relationship to prior PRs is documented.
- Risks and controls are documented.
- No runtime implementation is introduced.
- No SQL is introduced.
- No database migration is introduced.
- No runtime AI is introduced.
- No frontend or FHIR/API implementation is introduced.
- No PHI, credentials, sensitive logs, or database dumps are included.
- No OpenEMR core-sensitive files are modified.
- No unsupported readiness, validation, compliance, certification, or commercial claims are introduced.

---

## 17. After-Merge Action

After this PR is merged, the next planned documentation step is PR #88:

docs(im-core): add core clinic workflow plans v0.1

Do not start PR #88 until PR #87 is merged and reviewed.

---

## 18. Status

Documentation-only governance ownership model.

No runtime implementation.
No SQL.
No database migration.
No runtime AI.
No frontend implementation.
No FHIR/API implementation.
No OpenEMR core changes.
Not demo-ready.
Not pilot-ready.
Not production-ready.
Not clinically validated.
Not regulatory compliant by default.
Not cybersecurity certified.
Not commercially deployment-ready.
