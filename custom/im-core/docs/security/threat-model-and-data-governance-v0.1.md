# Threat Model and Data Governance V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines the documentation-stage threat model and data governance plan for OpenEMR IM Core.

The purpose is to identify security, privacy, data governance, misuse, abuse, and trust-boundary risks before any future runtime implementation, clinical workflow implementation, data integration, AI implementation, FHIR/API integration, frontend implementation, or OpenEMR core-sensitive change is proposed.

This document is planning-only.

This document does not create:
- Runtime security controls.
- Runtime privacy controls.
- Live RBAC configuration.
- Live audit implementation.
- Live backup implementation.
- Live restore testing.
- Clinical validation evidence.
- Regulatory compliance evidence.
- Cybersecurity certification evidence.
- HIPAA compliance evidence.
- GDPR compliance evidence.
- Demo readiness evidence.
- Pilot readiness evidence.
- Production readiness evidence.
- Commercial readiness evidence.

Golden rule:

The system must support clinicians. It must not replace clinicians.

---

## 2. Document Status and Identity

| Field | Value |
|---|---|
| Document | Threat Model and Data Governance V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage only |
| Version | v0.1 |
| Owner Role | Privacy/Security Owner / Data Governance Owner |
| Reviewer Roles | Clinical Safety Owner, Human Factors Reviewer, Documentation Owner, Governance Owner, Technical Owner, Operations Owner, Release Owner |
| Review Status | Draft documentation artifact |
| Runtime Status | No runtime implementation |
| Clinical Use Status | Not for clinical use |

This document is not a completed threat model for a deployed system.

This document is not a cybersecurity certification report.

This document is not a regulatory compliance report.

---

## 3. Scope

This document covers documentation-stage threat modeling and data governance planning for OpenEMR IM Core.

The current clinical planning scope remains limited to adult, stable, outpatient Internal Medicine follow-up workflows in a non-emergency clinic setting.

This document considers future risks related to:
- Data classification.
- Data ownership.
- Data minimization.
- Data retention planning.
- Trust boundaries.
- Access boundaries.
- Future RBAC planning.
- Future audit evidence planning.
- Future backup and restore governance.
- Future data flow review.
- Future prompt, rule, and workflow data inputs.
- Future synthetic data use.
- Future non-production demonstration data.
- Security and privacy review gates.

This document references:
- PR #92 Evidence Registry and Evidence Templates V0.1.
- PR #93 Traceability Matrix V0.1.
- PR #94 Risk Register V0.1.
- PR #95 Pull Request Template and Stop Rules V0.1.
- PR #96 Clinical Safety Case V0.1.
- PR #97 Human Factors and Usability Risk Plan V0.1.
- PR #98 Security / Privacy / RBAC / Audit / Backup Gap Refinement V0.1.
- PR #100 Birthday Reminder E2E Blocker Fix.

---

## 4. Out of Scope

This document does not authorize or create:
- PHI.
- Real patient data.
- Credentials.
- Secrets.
- Sensitive logs.
- Database dumps.
- SQL.
- SQL execution.
- Database migrations.
- Production database testing.
- Runtime implementation.
- Runtime security controls.
- Runtime privacy controls.
- Runtime AI.
- Machine learning models.
- Predictive models.
- Autonomous clinical decision support.
- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous emergency triage.
- Patient-facing AI.
- Automated patient messaging.
- Frontend implementation.
- FHIR/API implementation.
- OpenEMR core-sensitive changes.
- Live RBAC configuration.
- Live audit implementation.
- Live backup execution.
- Live restore testing.
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
- Human factors validation.
- Usability validation.
- Regulatory compliance.
- Cybersecurity certification.
- HIPAA compliance.
- GDPR compliance.
- FDA readiness.
- MDR readiness.
- CE marking.
- FDA clearance.
- Medical-device readiness.

---

## 5. Threat Modeling Principles

The threat modeling principles for OpenEMR IM Core are:

1. Patient safety, privacy, and clinician authority are primary design constraints.
2. The system must support clinicians and must not replace clinicians.
3. Threat modeling must occur before runtime implementation.
4. Data minimization must be preferred.
5. No real PHI may be used in GitHub documentation, examples, logs, or issues.
6. Future data flows must be traceable to requirements, risks, controls, and evidence.
7. Future security controls must be reviewed before implementation.
8. Future clinical rules must be limited first to structured OpenEMR-native / LBF data elements unless separately approved.
9. Free-text NLP, external data, FHIR/API, image interpretation, ECG interpretation, predictive analytics, and autonomous AI remain out of scope.
10. Absence of a security finding does not imply security clearance.
11. Absence of a clinical prompt must not imply clinical safety clearance.
12. Security and privacy review must not be used as a substitute for clinical safety review.

---

## 6. Data Governance Principles

The data governance principles for OpenEMR IM Core are:

1. No PHI in GitHub.
2. No real patient screenshots in GitHub.
3. No real patient notes in GitHub.
4. No real lab reports in GitHub.
5. No real medication lists in GitHub.
6. No credentials, secrets, tokens, or API keys in GitHub.
7. No sensitive logs in GitHub.
8. No database dumps in GitHub.
9. Synthetic data must be clearly labeled as synthetic.
10. Future demo data must not be mistaken for real patient data.
11. Future data retention must be defined before runtime use.
12. Future data deletion rules must be defined before runtime use.
13. Future audit events must be defined before runtime use.
14. Future data governance must include owner role, data class, purpose, retention, access boundary, and evidence reference.

---

## 7. Initial Data Classification

| Data Class | Example | Current Stage Status | Governance Boundary |
|---|---|---|---|
| Public documentation | Markdown planning documents | Allowed | Must not contain PHI, secrets, or unsupported claims. |
| Synthetic data | Future synthetic demo patient examples | Not created by this document | Must be clearly labeled synthetic. |
| Real PHI | Real patient demographics, notes, labs, medications | Prohibited | Must not be committed to GitHub. |
| Credentials and secrets | Passwords, tokens, API keys | Prohibited | Must not be committed to GitHub. |
| Sensitive logs | Runtime logs with identifiers or clinical details | Prohibited | Must not be committed to GitHub. |
| Database dumps | SQL exports or backups | Prohibited | Must not be committed to GitHub. |
| Structured OpenEMR-native / LBF data | Future structured fields | Planning only | May be considered first for future approved rules. |
| Free text clinical data | Progress notes, narratives | Out of scope | No NLP or free-text processing authorized. |
| External data | External systems or APIs | Out of scope | No FHIR/API or external integration authorized. |
| Image / waveform data | Images, ECG, waveforms | Out of scope | No interpretation authorized. |

---

## 8. Trust Boundaries

| Boundary ID | Trust Boundary | Current Status | Risk Concern | Planning Control |
|---|---|---|---|---|
| TB-001 | GitHub repository boundary | Active | PHI, secrets, sensitive logs, unsupported claims | No-PHI and stop-rule governance. |
| TB-002 | Documentation artifact boundary | Active | Documentation mistaken for validation or readiness | Explicit documentation-stage limitations. |
| TB-003 | OpenEMR runtime boundary | Not entered | Runtime behavior changed without review | Runtime implementation blocked. |
| TB-004 | Database boundary | Not entered | SQL or migration introduced prematurely | SQL and migration blocked. |
| TB-005 | Clinical workflow boundary | Planning only | Clinical action automated or misinterpreted | Human-in-the-loop boundary. |
| TB-006 | Security/privacy boundary | Planning only | RBAC, audit, backup claims overstated | PR #98 gap refinement controls. |
| TB-007 | AI boundary | Out of scope | Autonomous or predictive behavior introduced | No runtime AI. |
| TB-008 | FHIR/API boundary | Out of scope | External data flow introduced prematurely | No FHIR/API implementation. |
| TB-009 | Frontend/UI boundary | Out of scope | Alerts or workflow UI implemented prematurely | No frontend implementation. |
| TB-010 | Demo data boundary | Future planning | Synthetic data mistaken for real data | Future synthetic data plan required. |

---

## 9. Initial Threat Scenarios

| Threat ID | Scenario | Potential Impact | Current Control | Status | Limitation |
|---|---|---|---|---|---|
| THREAT-001 | PHI accidentally committed to GitHub | Privacy breach | No-PHI boundary and stop rules | Documentation-stage control | No automated PHI scanner added by this document. |
| THREAT-002 | Secret or token committed to GitHub | Unauthorized access | Secret prohibition and review rules | Documentation-stage control | No runtime secret management implemented. |
| THREAT-003 | Documentation mistaken for production readiness | Unsafe deployment assumptions | Explicit readiness limitations | Documentation-stage control | Does not prevent misuse outside governance. |
| THREAT-004 | Unsupported compliance claim made | Regulatory or trust risk | Claims limitation language | Documentation-stage control | No compliance certification created. |
| THREAT-005 | Future prompt uses ungoverned data | Unsafe clinical interpretation | Data boundary for future rules | Planning control | No runtime rules exist. |
| THREAT-006 | Future RBAC assumptions are incomplete | Unauthorized access | Future RBAC matrix required | Required future evidence | No live RBAC configured. |
| THREAT-007 | Future audit events are incomplete | Poor accountability | Future audit evidence planning | Required future evidence | No live audit implementation. |
| THREAT-008 | Future backup/restore is untested | Recovery failure | Future backup/restore evidence required | Required future evidence | No live backup or restore test. |
| THREAT-009 | Synthetic data mistaken for real data | Privacy, trust, or demo risk | Synthetic labeling requirement | Planning control | No synthetic dataset created. |
| THREAT-010 | False reassurance from absence of prompt | Missed clinical concern | Clinical Safety Case limitation | Documentation-stage control | No runtime behavior exists. |
| THREAT-011 | Automation bias from future prompts | Unsafe reliance | Human-in-the-loop boundary | Documentation-stage control | No runtime prompts exist. |
| THREAT-012 | Free-text NLP introduced prematurely | Privacy and clinical safety risk | NLP out-of-scope boundary | Documentation-stage control | No NLP implementation. |
| THREAT-013 | External API/FHIR data introduced prematurely | Data governance and trust risk | FHIR/API out-of-scope boundary | Documentation-stage control | No integration implementation. |
| THREAT-014 | Logs contain identifiers or clinical detail | Privacy breach | Sensitive log prohibition | Documentation-stage control | No runtime log review implemented. |
| THREAT-015 | OpenEMR core-sensitive change introduced without review | Stability and safety risk | Stop rules and scope controls | Governance control | No runtime enforcement added. |

---

## 10. Data Lifecycle Planning Boundary

| Lifecycle Stage | Current Stage Status | Governance Requirement Before Runtime |
|---|---|---|
| Data collection | Not implemented | Define data class, purpose, owner, and minimization. |
| Data entry | Not implemented | Define UI/workflow only after human factors review. |
| Data storage | Not implemented | Define retention, access, and encryption expectations. |
| Data processing | Not implemented | Define rules, traceability, and validation evidence. |
| Data display | Not implemented | Define clinician review and false-reassurance safeguards. |
| Data export | Not implemented | Define export controls and privacy review. |
| Data audit | Not implemented | Define audit events, owner, and review cadence. |
| Data backup | Not implemented | Define backup scope and restore evidence. |
| Data deletion | Not implemented | Define deletion and retention policy. |
| Data disposal | Not implemented | Define secure disposal responsibilities. |

---

## 11. Abuse and Misuse Cases

| Misuse ID | Abuse / Misuse Case | Current Prevention Boundary |
|---|---|---|
| MISUSE-001 | Using documentation as proof of clinical validation | Explicit validation limitation. |
| MISUSE-002 | Using planning documents as production readiness evidence | Explicit readiness limitation. |
| MISUSE-003 | Uploading real patient screenshots to issues | No-PHI rule. |
| MISUSE-004 | Adding sample SQL with real identifiers | SQL and PHI prohibition. |
| MISUSE-005 | Implementing alert UI before human factors review | Frontend and workflow implementation blocked. |
| MISUSE-006 | Using future prompts as autonomous CDS | Human-in-the-loop boundary and safety red lines. |
| MISUSE-007 | Using synthetic data without labeling | Synthetic labeling requirement. |
| MISUSE-008 | Creating compliance claims without evidence | Claims boundary and review rules. |
| MISUSE-009 | Expanding to emergency or inpatient use | Clinical scope boundary. |
| MISUSE-010 | Adding AI/NLP under documentation wording | AI and NLP out-of-scope boundary. |

---

## 12. Relationship to PR #92

PR #92 created the Evidence Registry and Evidence Templates V0.1.

This threat model and data governance plan references evidence concepts from PR #92.

This PR addresses future threat model and data governance evidence needs at documentation-stage level only.

This document does not replace the evidence registry.

---

## 13. Relationship to PR #93

PR #93 created the Traceability Matrix V0.1.

This threat model and data governance plan depends on traceability between:
- Threats.
- Data classes.
- Trust boundaries.
- Risks.
- Controls.
- Evidence references.
- Review owners.

This document does not replace the traceability matrix.

---

## 14. Relationship to PR #94

PR #94 created the Risk Register V0.1.

This threat model and data governance plan expands security, privacy, misuse, and data governance dimensions of selected risks.

This document does not replace the risk register.

---

## 15. Relationship to PR #95

PR #95 created the Pull Request Template and Stop Rules V0.1.

This threat model and data governance plan depends on stop rules to block:
- PHI.
- Secrets.
- SQL.
- Runtime changes.
- Unsupported readiness claims.
- Unsupported validation claims.
- Unsupported compliance claims.
- Unsupported cybersecurity certification claims.

Stop rules are governance controls and not runtime security controls.

---

## 16. Relationship to PR #96

PR #96 created the Clinical Safety Case V0.1.

This threat model and data governance plan supports the Clinical Safety Case by documenting:
- Data boundary risks.
- False reassurance risks.
- Automation bias risks.
- Human-in-the-loop dependency.
- Clinical scope boundary.
- Safety red lines.
- Future evidence needs.

This document does not replace the Clinical Safety Case.

---

## 17. Relationship to PR #97

PR #97 created the Human Factors and Usability Risk Plan V0.1.

This threat model and data governance plan supports human factors work by identifying data and trust-boundary issues that may affect:
- Future prompts.
- Future alerts.
- Future false-positive handling.
- Future clinician feedback.
- Future open-loop review.
- Future critical prompt override.

This document does not replace the Human Factors Plan.

---

## 18. Relationship to PR #98

PR #98 created the Security / Privacy / RBAC / Audit / Backup Gap Refinement V0.1.

This threat model and data governance plan builds on PR #98 by defining:
- Threat scenarios.
- Data governance principles.
- Trust boundaries.
- Data lifecycle planning boundaries.
- Abuse and misuse cases.
- Required future evidence.

This document does not replace PR #98.

This document does not implement RBAC, audit, backup, restore, or runtime security controls.

---

## 19. Relationship to PR #100

PR #100 fixed an E2E blocker related to birthday reminder runtime behavior.

This threat model and data governance plan references PR #100 only as a governance example of keeping documentation-only PRs separate from runtime bug fixes.

PR #100 does not change the scope of this document.

---

## 20. Required Future Evidence

Before any future runtime, demo, pilot, production, clinical, or commercial claim, the project would require future evidence such as:
- Detailed threat model review.
- Data flow diagram.
- Data inventory.
- Data classification register.
- RBAC matrix.
- Audit event specification.
- Backup and restore evidence.
- Data retention policy.
- Synthetic data plan.
- Demo boundary plan.
- Security review.
- Privacy review.
- OpenEMR Integration Boundary Map.
- ADR Baseline.
- Non-production reproducible install plan.
- Training and support package.
- Gate review package.

These future evidence items do not authorize runtime implementation by themselves.

---

## 21. Review Rules

This document must be reviewed for:
- No PHI.
- No secrets.
- No sensitive logs.
- No database dumps.
- No SQL.
- No runtime authorization.
- No AI authorization.
- No FHIR/API authorization.
- No frontend authorization.
- No OpenEMR core-sensitive authorization.
- No unsupported readiness claims.
- No unsupported validation claims.
- No unsupported compliance claims.
- No unsupported cybersecurity certification claims.
- Clear relationship to PR #92 through PR #98.
- Clear relationship to PR #100 as a separate runtime fix.
- Clear documentation-stage limitation.

---

## 22. Risks of This Document

| Risk | Impact | Control |
|---|---|---|
| Threat model mistaken for completed security validation | Unsupported security claim | Explicit documentation-stage limitation. |
| Data governance plan mistaken for privacy compliance | Unsupported compliance claim | Explicit compliance limitation. |
| Future teams skip data flow review | Incomplete governance | Required future evidence section. |
| Future teams use real PHI in examples | Privacy breach | No-PHI rule. |
| Future teams implement prompts before data governance | Unsafe workflow | Runtime and frontend implementation blocked. |
| Future synthetic data is unclear | Confusion with real patient data | Synthetic labeling requirement. |
| Future logs contain identifiers | Privacy risk | Sensitive log prohibition. |

---

## 23. Definition of Done

This document is complete when:
- Purpose is defined.
- Document status and identity are defined.
- Scope is defined.
- Out of scope is defined.
- Threat modeling principles are defined.
- Data governance principles are defined.
- Initial data classification is documented.
- Trust boundaries are documented.
- Initial threat scenarios are documented.
- Data lifecycle planning boundary is documented.
- Abuse and misuse cases are documented.
- Relationship to PR #92 is documented.
- Relationship to PR #93 is documented.
- Relationship to PR #94 is documented.
- Relationship to PR #95 is documented.
- Relationship to PR #96 is documented.
- Relationship to PR #97 is documented.
- Relationship to PR #98 is documented.
- Relationship to PR #100 is documented.
- Required future evidence is documented.
- Review rules are documented.
- Risks of this document are documented.
- No PHI is introduced.
- No SQL is introduced.
- No database migration is introduced.
- No runtime implementation is introduced.
- No AI implementation is introduced.
- No FHIR/API implementation is introduced.
- No frontend implementation is introduced.
- No OpenEMR core-sensitive change is introduced.
- No unsupported readiness, validation, compliance, certification, or commercial claim is introduced.

---

## 24. After-Merge Action

After this PR is merged, the next planned documentation step is:

OpenEMR Integration Boundary Map V0.1.

Do not start the next PR until:
- This PR is merged.
- `master` is updated locally.
- Working tree is clean.
- The PR body file is removed locally.
- `custom/im-core/docs/security/threat-model-and-data-governance-v0.1.md` exists on `master`.

---

## 25. Status

Documentation-stage threat model and data governance plan.

No runtime implementation.

No SQL.

No database migration.

No PHI.

No real patient data.

No AI implementation.

No FHIR/API implementation.

No frontend implementation.

No OpenEMR core-sensitive change.

No RBAC implementation.

No audit implementation.

No backup implementation.

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
