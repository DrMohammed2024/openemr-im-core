# Requirements Register Starter V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines a documentation-only starter requirements register for OpenEMR IM Core.

It provides an initial controlled structure for recording future requirements using the Requirements Management Plan V0.1.

This document does not authorize implementation.

This document does not create approved runtime, clinical-use, AI, database, API/FHIR, deployment, production, pilot, commercial, or medical-device requirements.

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
- Prompt execution.
- AI/model integration.
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
- Clinical-use authorization.

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

This starter register applies to current-stage documentation and governance requirements only.

It may include planning-only or future-gated requirement placeholders for:

- Documentation governance.
- Requirements management.
- Traceability.
- Risk management planning.
- Evidence management planning.
- Clinical safety planning.
- Privacy and security planning.
- Verification and validation planning.
- Release gate planning.
- Human accountability.
- Claims control.
- Future OpenEMR alignment.

At the current stage, requirements in this register are not implementation authorization.

---

## 3. Out of Scope

This starter register does not create or approve:

- Runtime implementation.
- Clinical workflow automation.
- Autonomous clinical decision support.
- Autonomous diagnosis.
- Autonomous treatment recommendation.
- Autonomous prescribing.
- Autonomous emergency triage.
- Patient-facing AI.
- Prompt execution.
- AI/model integration.
- SQL scripts.
- SQL execution.
- Database migrations.
- Frontend implementation.
- FHIR/API implementation.
- OpenEMR core behavior changes.
- Demo deployment.
- Pilot deployment.
- Production deployment.
- Commercial deployment.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.
- Medical-device readiness.

---

## 4. Register Rules

Requirements in this starter register must follow these rules:

1. Every requirement must have a stable ID.
2. Every requirement must have a type.
3. Every requirement must have a source.
4. Every requirement must have a current-stage status.
5. Every requirement must identify an owner or reviewer role.
6. Every requirement must remain documentation-only or future-gated unless separately approved.
7. No requirement may authorize runtime implementation by existing in this register.
8. No requirement may introduce PHI, secrets, logs, dumps, SQL, AI, FHIR/API, frontend, OpenEMR core changes, or clinical-use authorization.
9. Every safety-sensitive requirement must be traceable to future risk and evidence records.
10. The safest interpretation always prevails.

---

## 5. Requirement Type Legend

| Type code | Requirement type | Current-stage status |
|---|---|---|
| DOC | Documentation/governance requirement | Current-stage planning allowed |
| SAF | Safety planning requirement | Planning-only / future-gated |
| SEC | Privacy/security requirement | Planning-only / future-gated |
| USE | Usability/human factors requirement | Planning-only / future-gated |
| VNV | Verification and validation planning requirement | Planning-only / future-gated |
| CFG | Configuration/change-control requirement | Planning-only / future-gated |
| CLN | Future clinical workflow requirement | Future-gated only |
| INT | Future interface/API/FHIR requirement | Future-gated only |
| DB | Future database requirement | Future-gated only |
| AI | Future AI/CDS requirement | Future-gated only |
| OPS | Future operations/maintenance requirement | Future-gated only |

---

## 6. Requirement Status Legend

| Status | Meaning |
|---|---|
| Draft | Proposed but not reviewed. |
| Planning-only | May guide documentation or governance planning only. |
| Active documentation-only | Approved for current-stage documentation work only. |
| Future-gated | Not approved for implementation until future gates are met. |
| Deferred | Intentionally postponed. |
| Rejected | Not accepted for the project. |
| Retired | Previously accepted but no longer applicable. |
| Superseded | Replaced by another requirement. |

A future-gated requirement is not implementation approval.

A documentation-only requirement is not runtime approval.

---

## 7. Starter Requirements Register

| Requirement ID | Type | Title | Requirement statement | Source | Status | Owner / Reviewer | Related risk | Related evidence | Related release gate |
|---|---|---|---|---|---|---|---|---|---|
| IMC-REQ-DOC-0001 | DOC | Maintain documentation-first posture | The project shall maintain documentation-first execution until a future phase gate explicitly approves runtime work. | Requirements Management Plan V0.1 | Active documentation-only | Documentation Owner / Governance Reviewer | Future risk link required | Future evidence link required | Documentation foundation gate |
| IMC-REQ-DOC-0002 | DOC | Maintain PR-scoped documentation changes | Documentation changes shall be introduced through small, scoped Pull Requests. | PR audit trail and governance procedures | Active documentation-only | Documentation Owner | Future risk link required | Future evidence link required | Documentation foundation gate |
| IMC-REQ-DOC-0003 | DOC | Keep PR body helpers local-only | PR body helper files shall remain local-only and shall not be committed. | GitHub execution workflow | Active documentation-only | Documentation Owner | Future risk link required | Future evidence link required | Documentation foundation gate |
| IMC-REQ-DOC-0004 | DOC | Avoid broad staging | Contributors shall not use `git add .` for controlled documentation PRs. | GitHub execution workflow | Active documentation-only | Documentation Owner | Future risk link required | Future evidence link required | Documentation foundation gate |
| IMC-REQ-SAF-0001 | SAF | Preserve clinician authority | The project shall preserve human clinician authority and shall not replace clinicians. | Human Accountability RACI Model | Planning-only | Clinical Safety Reviewer / Governance Reviewer | Future safety risk link required | Future evidence link required | Clinical safety gate |
| IMC-REQ-SAF-0002 | SAF | Prohibit autonomous clinical decisions | The project shall not authorize autonomous diagnosis, treatment recommendation, prescribing, emergency triage, or autonomous CDS at the current stage. | Decision Automation Boundary Policy | Planning-only | Clinical Safety Reviewer | Future safety risk link required | Future evidence link required | Clinical safety gate |
| IMC-REQ-SAF-0003 | SAF | Maintain safe-response planning | Safety-sensitive documentation shall remain aligned with failure modes and safe response expectations. | Failure Modes and Safe Response Library | Planning-only | Clinical Safety Reviewer | Future safety risk link required | Future evidence link required | Clinical safety gate |
| IMC-REQ-SEC-0001 | SEC | Prohibit PHI in repository | Repository content shall not include PHI or real patient data. | No-PHI project boundary | Planning-only | Security/Privacy Reviewer | Future privacy risk link required | Future evidence link required | Security/privacy gate |
| IMC-REQ-SEC-0002 | SEC | Prohibit credentials and secrets | Repository content shall not include credentials, secrets, sensitive logs, or database dumps. | Security and privacy boundary | Planning-only | Security/Privacy Reviewer | Future security risk link required | Future evidence link required | Security/privacy gate |
| IMC-REQ-SEC-0003 | SEC | Plan future RBAC evidence | Future access-control claims shall require RBAC evidence before demo, pilot, or production claims. | Release readiness gates | Future-gated | Security/Privacy Reviewer / Evidence Reviewer | Future security risk link required | Future evidence link required | Pilot candidate gate |
| IMC-REQ-VNV-0001 | VNV | Require evidence before readiness claims | Readiness, validation, compliance, certification, and clinical-use claims shall require documented evidence and review. | Evidence and Claim-Control Register | Planning-only | Evidence Reviewer / Claims Reviewer | Future risk link required | Future evidence link required | Release readiness gate |
| IMC-REQ-VNV-0002 | VNV | Plan verification traceability | Future verification planning shall trace requirements to risks, controls, evidence, reviewers, and release gates. | Traceability Matrix Policy | Planning-only | Evidence Reviewer | Future risk link required | Future evidence link required | Verification gate |
| IMC-REQ-VNV-0003 | VNV | Require clean evidence boundaries | Future evidence shall not include PHI, real patient data, credentials, secrets, sensitive logs, or database dumps. | Evidence and Claim-Control Register | Planning-only | Evidence Reviewer / Security Reviewer | Future risk link required | Future evidence link required | Evidence gate |
| IMC-REQ-CFG-0001 | CFG | Maintain phase-gated change control | Changes that expand scope into runtime, AI, SQL, FHIR/API, database, frontend, production, or clinical use shall remain phase-gated. | Lifecycle Phase Gate Control | Planning-only | Governance Reviewer | Future risk link required | Future evidence link required | Phase gate |
| IMC-REQ-CFG-0002 | CFG | Protect OpenEMR core boundaries | OpenEMR core-sensitive changes shall not be introduced without explicit review and future approval. | OpenEMR Integration Boundary Map | Future-gated | OpenEMR Technical Reviewer | Future technical risk link required | Future evidence link required | Technical gate |
| IMC-REQ-CLN-0001 | CLN | Future clinical workflow requirements are gated | Future clinical workflow requirements shall remain future-gated until clinical safety, usability, evidence, and governance review are complete. | Clinical workflow planning controls | Future-gated | Clinical Safety Reviewer / Operations Reviewer | Future clinical risk link required | Future evidence link required | Clinical workflow gate |
| IMC-REQ-INT-0001 | INT | Future API/FHIR requirements are gated | Future API or FHIR requirements shall remain future-gated and shall not authorize implementation at the current stage. | API/FHIR Boundary Specification | Future-gated | OpenEMR Technical Reviewer / Security Reviewer | Future integration risk link required | Future evidence link required | Interface gate |
| IMC-REQ-DB-0001 | DB | Future database requirements are gated | Future database requirements, SQL, and migrations shall remain future-gated and shall not authorize implementation at the current stage. | Database Boundary and Migration Policy | Future-gated | OpenEMR Technical Reviewer / Evidence Reviewer | Future data integrity risk link required | Future evidence link required | Database gate |
| IMC-REQ-AI-0001 | AI | Future AI requirements are gated | Future AI, model, prompt, or CDS requirements shall remain future-gated and shall not authorize runtime AI or clinical automation at the current stage. | Decision Automation Boundary Policy | Future-gated | Clinical Safety Reviewer / Governance Reviewer / Claims Reviewer | Future AI risk link required | Future evidence link required | AI governance gate |
| IMC-REQ-OPS-0001 | OPS | Future operations requirements are gated | Future operations and maintenance requirements shall remain future-gated until support, training, incident response, and release evidence exist. | Training and Support Package / Release Readiness Gates | Future-gated | Operations Reviewer / Release Owner | Future operations risk link required | Future evidence link required | Operations gate |

---

## 8. Traceability Expectations

Each starter requirement should eventually trace to:

- Source document.
- Risk ID.
- Control ID.
- Verification item.
- Evidence ID.
- Reviewer role.
- Release gate.
- Change history.

Minimum future traceability pattern:

Requirement -> Risk -> Control -> Verification -> Evidence -> Reviewer -> Release Gate

This document does not create completed traceability.

---

## 9. Review Expectations

| Requirement type | Required reviewer |
|---|---|
| DOC | Documentation Owner or Governance Reviewer |
| SAF | Clinical Safety Reviewer |
| SEC | Security/Privacy Reviewer |
| USE | Clinical Safety Reviewer or Human Factors Reviewer |
| CLN | Clinical Safety Reviewer and Operations Reviewer |
| INT | OpenEMR Technical Reviewer and Security/Privacy Reviewer |
| DB | OpenEMR Technical Reviewer and Evidence Reviewer |
| AI | Clinical Safety Reviewer, Governance Reviewer, and Claims Reviewer |
| CFG | OpenEMR Technical Reviewer |
| VNV | Evidence Reviewer |
| OPS | Operations Reviewer |

If reviewer ownership is unclear, the requirement must remain draft or future-gated.

---

## 10. Safety and Claims Controls

This starter register must not be used to claim:

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
- Clinical-use authorization.

Allowed wording should remain:

- Documentation-only.
- Planning-only.
- Future-gated.
- Requires evidence.
- Not yet verified.
- Not implemented.
- Not approved for clinical use.

---

## 11. Relationship to Existing Artifacts

| Artifact | Relationship |
|---|---|
| Requirements Management Plan V0.1 | Defines how this register should be controlled. |
| Traceability Matrix Policy | Defines future traceability expectations. |
| Risk Register Structure | Provides future risk linkage structure. |
| Evidence and Claim-Control Register | Provides future evidence and claim-control linkage. |
| Clinical Safety Case Structure | Provides future clinical safety argument structure. |
| Lifecycle Phase Gate Control | Keeps future requirements phase-gated. |
| Intended Use, Scope, Users, and Claims | Defines claims and intended-use boundaries. |
| Human Accountability RACI Model | Defines human accountability for review and decisions. |

---

## 12. Risks

| Risk | Impact | Control |
|---|---|---|
| Requirements are mistaken for implementation approval | Scope creep or unsafe execution. | Future-gated status and explicit no-implementation boundary. |
| Requirements are not linked to risks | Weak auditability and safety review. | Future traceability expectations. |
| Requirements are not linked to evidence | Unsupported readiness or validation claims. | Evidence-gated requirement records. |
| Requirements include prohibited scope | Safety, privacy, or governance risk. | Register rules and reviewer ownership. |
| Requirements lack owner or reviewer | Delayed or unsafe acceptance. | Human accountability and reviewer mapping. |
| Future-gated requirements are treated as active | Premature implementation. | Phase gate control and claims control. |

---

## 13. Definition of Done

This document is complete when:

- Purpose is documented.
- Scope is documented.
- Out-of-scope boundaries are documented.
- Register rules are documented.
- Requirement type legend is documented.
- Requirement status legend is documented.
- Starter requirements register is documented.
- Traceability expectations are documented.
- Review expectations are documented.
- Safety and claims controls are documented.
- Relationship to existing artifacts is documented.
- Risks and controls are documented.
- No runtime implementation is introduced.
- No SQL is introduced.
- No database migration is introduced.
- No runtime AI is introduced.
- No prompt execution is introduced.
- No frontend or FHIR/API implementation is introduced.
- No PHI, credentials, sensitive logs, or database dumps are included.
- No OpenEMR core-sensitive files are modified.
- No unsupported readiness, validation, compliance, certification, commercial, or clinical-use claims are introduced.

---

## 14. After-Merge Action

After this PR is merged, the next documentation step should be separately approved based on the current roadmap and open governance gaps.

Do not start the next PR until this PR is merged and reviewed.

---

## 15. Status

Documentation-only requirements register starter.

No runtime implementation.
No SQL.
No database migration.
No runtime AI.
No prompt execution.
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
