# Risk Register V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines the documentation-only risk register for OpenEMR IM Core.

The purpose is to identify, structure, and maintain project risks related to clinical safety, privacy, security, documentation quality, evidence management, traceability, governance, release readiness, and unsupported claims.

This risk register supports planning and review only.

This document does not create:

- Runtime risk management evidence.
- Runtime verification evidence.
- Clinical validation evidence.
- Regulatory compliance evidence.
- Cybersecurity certification evidence.
- Demo readiness evidence.
- Pilot readiness evidence.
- Production readiness evidence.
- Commercial readiness evidence.

Golden rule:

The system must support clinicians.
It must not replace clinicians.

---

## 2. Scope

This risk register covers documentation-stage risks for OpenEMR IM Core.

It includes risks related to:

- PHI and real patient data.
- Clinician replacement or automation bias.
- Clinical decision support misunderstanding.
- SQL or database changes.
- Runtime implementation.
- AI, predictive models, and autonomous CDS.
- FHIR/API integration.
- Documentation evidence limitations.
- Evidence registry maintenance.
- Traceability maintenance.
- Lab and critical result workflows.
- Follow-up and open-loop workflows.
- Billing and administrative linkage.
- Security, RBAC, audit, and backup planning.
- Non-production reproducibility.
- Synthetic demo planning.
- Training and support planning.
- Human factors.
- Governance ownership.
- PR scope control.
- Hidden or bidirectional Unicode review ambiguity.
- Unsupported readiness, validation, compliance, certification, or commercial claims.

This document references PR #92 Evidence Registry and Evidence Templates V0.1.

This document references PR #93 Traceability Matrix V0.1.

---

## 3. Out of Scope

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
- Runtime AI.
- Machine learning models.
- Predictive models.
- Autonomous clinical decision support.
- Autonomous diagnosis.
- Autonomous treatment recommendation.
- Autonomous prescribing.
- Autonomous emergency triage.
- Patient-facing AI.
- Automated patient messaging.
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
- HIPAA compliance.
- GDPR compliance.
- FDA readiness.
- MDR readiness.

---

## 4. Risk Register Principles

Risk register entries are planning controls only and must not be interpreted as validated clinical risk controls.

Risk entries must:

- Have a stable Risk ID.
- Describe the risk clearly.
- Identify cause and impact.
- Identify severity and likelihood.
- Identify an initial risk level.
- Identify a control or planned control.
- Link to evidence where available.
- Link to traceability where applicable.
- Identify an owner role.
- Identify residual risk status.
- Identify limitations.
- Avoid unsupported readiness, validation, compliance, certification, or commercial claims.

Risk entries must not:

- Include PHI.
- Include real patient data.
- Include credentials or secrets.
- Include sensitive logs.
- Include database dumps.
- Approve SQL execution.
- Approve runtime implementation.
- Approve runtime AI.
- Approve FHIR/API implementation.
- Approve frontend implementation.
- Approve OpenEMR core-sensitive changes.
- Claim clinical validation.
- Claim regulatory compliance.
- Claim cybersecurity certification.
- Claim demo, pilot, production, or commercial readiness.

---

## 5. Risk ID Format

Risk IDs should use stable prefixes.

| Pattern | Meaning |
|---|---|
| `RISK-PHI-###` | PHI or real patient data risk. |
| `RISK-AUTO-###` | Clinician replacement or automation bias risk. |
| `RISK-CDS-###` | Clinical decision support interpretation risk. |
| `RISK-SQL-###` | SQL or database modification risk. |
| `RISK-SCHEMA-###` | Schema or OpenEMR-native boundary risk. |
| `RISK-RUNTIME-###` | Runtime implementation risk. |
| `RISK-AI-###` | Runtime AI, predictive model, or autonomous CDS risk. |
| `RISK-FHIR-###` | FHIR/API integration risk. |
| `RISK-DOC-###` | Documentation quality or documentation evidence risk. |
| `RISK-EVID-###` | Evidence registry or evidence quality risk. |
| `RISK-TRACE-###` | Traceability quality or staleness risk. |
| `RISK-LAB-###` | Lab or critical result workflow risk. |
| `RISK-FUP-###` | Follow-up or open-loop workflow risk. |
| `RISK-BILL-###` | Billing or administrative linkage risk. |
| `RISK-CLAIM-###` | Claims or commercial overstatement risk. |
| `RISK-SEC-###` | Security, RBAC, or access control risk. |
| `RISK-AUDIT-###` | Audit evidence risk. |
| `RISK-BACKUP-###` | Backup or restore evidence risk. |
| `RISK-INSTALL-###` | Non-production reproducibility risk. |
| `RISK-DEMO-###` | Synthetic demo or demo boundary risk. |
| `RISK-TRAIN-###` | Training readiness risk. |
| `RISK-SUPPORT-###` | Support and escalation readiness risk. |
| `RISK-HF-###` | Human factors or usability risk. |
| `RISK-GOV-###` | Governance ownership or escalation risk. |
| `RISK-PR-###` | Pull request scope control risk. |
| `RISK-UNICODE-###` | Hidden or bidirectional Unicode review risk. |

---

## 6. Severity Scale

| Severity | Meaning |
|---|---|
| Low | Limited documentation or operational impact. |
| Medium | Could affect workflow quality, review quality, maintainability, or evidence interpretation. |
| High | Could affect patient safety, privacy, security, governance, unsupported claims, or future release decisions. |

---

## 7. Likelihood Scale

| Likelihood | Meaning |
|---|---|
| Low | Unlikely under current documentation-only process. |
| Medium | Plausible without continued controls and review. |
| High | Likely if controls, ownership, or review are missing. |

---

## 8. Residual Risk Scale

| Residual Risk | Meaning |
|---|---|
| Low | Risk is reduced by current documentation-stage controls, but not eliminated. |
| Medium | Risk remains meaningful and requires future evidence or review. |
| High | Risk remains significant and blocks stronger claims or implementation. |
| Pending review | Residual risk requires owner review or future evidence before classification. |

---

## 9. Risk Owner Roles

| Owner role | Responsibility |
|---|---|
| Clinical Safety Owner | Clinical safety, human-in-the-loop boundaries, safety-net, critical result, and automation bias risks. |
| Privacy/Security Owner | PHI, privacy, RBAC, audit, backup, security, and access-related risks. |
| Technical Owner | OpenEMR-native design, SQL, schema, runtime, FHIR/API, install, and implementation boundary risks. |
| Documentation Owner | Documentation quality, evidence structure, traceability, PR hygiene, and maintenance risks. |
| Operations Owner | Workflow, follow-up, support, training, and administrative process risks. |
| Release Owner | Release gates, readiness boundaries, claims review, demo/pilot/production/commercial boundaries. |
| Claims Reviewer | External wording, commercial claims, validation/compliance/certification wording, and marketing risk. |
| Governance Owner | Stop-work authority, escalation, owner assignment, and governance conflict resolution. |

---

## 10. Initial Risk Register

| Risk ID | Risk Statement | Cause | Impact | Severity | Likelihood | Initial Risk Level | Control ID | Control Summary | Evidence ID | Traceability Link | Owner | Residual Risk | Status | Limitations |
|---|---|---|---|---|---|---|---|---|---|---|---|---|---|---|
| RISK-PHI-001 | PHI or real patient data committed to GitHub. | Screenshots, logs, examples, issue text, PR text, or demo content may include real patient identifiers. | Privacy breach, legal exposure, loss of trust. | High | Medium | High | CTRL-NOPHI-001 | No-PHI review and future no-PHI checklist evidence. | EVID-SEC-FUTURE-001 | REQ-PRIV-001 | Privacy/Security Owner | Medium | Required future evidence | No runtime privacy audit yet. |
| RISK-AUTO-001 | Clinician replacement or automation bias. | Project language may overstate intelligence or decision support. | Unsafe reliance and erosion of clinician authority. | High | Medium | High | CTRL-HITL-001 | Human-in-the-loop boundary and clinician-support-only rule. | EVID-FM-081 | REQ-SAF-001 | Clinical Safety Owner | Medium | Open | No clinical validation claim. |
| RISK-CDS-001 | Documentation rules misinterpreted as clinical decision support. | Quality rules may be read as diagnosis, triage, or treatment logic. | Unsafe clinical interpretation. | High | Medium | High | CTRL-HITL-002 | Documentation quality rules remain clinician-reviewed and non-autonomous. | EVID-CQ-085 | REQ-SAF-002 | Clinical Safety Owner | Medium | Open | Documentation-stage only. |
| RISK-SQL-001 | Premature SQL execution or database modification. | Seed/import enthusiasm or early configuration attempts before gates. | Data corruption, privacy risk, upgrade burden. | High | Medium | High | CTRL-OPENEMR-001 | No SQL execution and OpenEMR-native planning boundary. | EVID-DATA-084 | REQ-DATA-001 | Technical Owner | Low | Open | No SQL authorization. |
| RISK-SCHEMA-001 | Premature schema change or OpenEMR-native boundary violation. | Custom table or migration before design maturity. | Upgrade risk and maintenance burden. | High | Medium | High | CTRL-OPENEMR-001 | Prefer OpenEMR-native mapping and avoid schema changes. | EVID-DATA-084 | REQ-DATA-001 | Technical Owner | Low | Open | No schema change evidence. |
| RISK-RUNTIME-001 | Premature runtime implementation before governance and release gates. | Pressure to move from documentation to implementation before evidence is ready. | Unsafe implementation or unsupported readiness claims. | High | Medium | High | CTRL-REL-001 | Release gates and runtime-blocking boundary. | EVID-REL-086 | REQ-RUNTIME-001 | Release Owner | Medium | Open | Runtime remains blocked. |
| RISK-AI-001 | Runtime AI, predictive model, or autonomous CDS introduced before governance and validation. | AI functionality may be introduced before safety, privacy, validation, and monitoring controls. | Clinical safety, privacy, and compliance risk. | High | Medium | High | CTRL-HITL-003 | Runtime AI and autonomous CDS remain blocked. | EVID-SAFETY-FUTURE-001 | REQ-SAF-003 | Clinical Safety Owner | High | Required future evidence | No runtime AI evidence. |
| RISK-FHIR-001 | FHIR/API integration introduced before security, privacy, and data governance gates. | Integration work may begin before governance and access controls exist. | Data leakage, privacy risk, integration risk. | High | Medium | High | CTRL-SEC-001 | Integration blocked until security, privacy, and governance gates exist. | EVID-SEC-FUTURE-002 | REQ-SEC-001 | Technical Owner | High | Required future evidence | No FHIR/API implementation. |
| RISK-DOC-001 | Documentation evidence mistaken for runtime proof. | Readers may overinterpret documentation-stage artifacts. | Unsafe release or readiness decisions. | High | Medium | High | CTRL-DOC-001 | Explicit limitations and evidence status definitions. | EVID-TRACE-FUTURE-001 | REQ-TRACE-001 | Documentation Owner | Medium | Open | No runtime proof. |
| RISK-EVID-001 | Evidence item lacks owner, status, or limitation. | Evidence may be created without structured metadata. | Poor auditability and weak release decisions. | Medium | Medium | Medium | CTRL-EVID-001 | Evidence template and evidence review rules. | EVID-TRACE-FUTURE-001 | REQ-EVID-001 | Documentation Owner | Medium | Open | Evidence registry is documentation-stage only. |
| RISK-TRACE-001 | Traceability matrix becomes stale or inconsistent. | Future PRs may not update traceability when scope changes. | Poor auditability and weak governance. | Medium | Medium | Medium | CTRL-DOC-002 | Traceability maintenance rules. | EVID-TRACE-FUTURE-001 | REQ-TRACE-001 | Documentation Owner | Medium | Open | Requires future review cadence. |
| RISK-LAB-001 | Critical result workflow lacks human escalation ownership. | Workflow roles or escalation expectations may be unclear. | Patient safety risk. | High | Medium | High | CTRL-ESCALATION-001 | Human clinical review and escalation ownership. | EVID-WF-090 | REQ-WF-003 | Clinical Safety Owner | Medium | Open | No emergency triage automation. |
| RISK-FUP-001 | Open loop or follow-up item is lost. | Follow-up owner, status, or closure evidence may be missing. | Missed follow-up and safety-net failure. | High | Medium | High | CTRL-SAFETYNET-001 | Follow-up, open-loop, and safety-net planning. | EVID-WF-089 | REQ-WF-002 | Clinical Safety Owner | Medium | Open | No automated patient messaging. |
| RISK-BILL-001 | Billing or administrative linkage influences clinical documentation. | Administrative or revenue-cycle pressure may affect clinical documentation behavior. | Documentation distortion and trust risk. | Medium | Medium | Medium | CTRL-WF-004 | Billing and administrative boundaries preserve clinician authority. | EVID-WF-091 | REQ-WF-004 | Operations Owner | Low | Open | No claims automation. |
| RISK-CLAIM-001 | Unsupported readiness, validation, compliance, certification, or commercial claim. | Ambiguous marketing, PR text, demo language, or documentation wording. | Legal, trust, safety, and governance risk. | High | Medium | High | CTRL-CLAIMS-001 | Release gates, claims boundaries, and future claims review. | EVID-REL-086 | REQ-REL-001 | Release Owner | Medium | Open | No readiness claim. |
| RISK-SEC-001 | Undefined RBAC or excessive access privileges. | Access roles may be unclear before runtime planning. | Privacy and security risk. | High | Medium | High | CTRL-SEC-001 | Future RBAC and access review evidence required. | EVID-SEC-FUTURE-002 | REQ-SEC-001 | Privacy/Security Owner | High | Required future evidence | No cybersecurity certification claim. |
| RISK-AUDIT-001 | Audit evidence missing or insufficient. | Audit template and review evidence not yet created. | Poor accountability and weak security posture. | High | Medium | High | CTRL-SEC-002 | Audit evidence template and review evidence required. | EVID-AUDIT-FUTURE-001 | REQ-AUDIT-001 | Privacy/Security Owner | High | Required future evidence | No audit verification claim. |
| RISK-BACKUP-001 | Backup or restore process unavailable or untested. | Backup/restore evidence does not yet exist. | Data loss risk in future runtime context. | High | Medium | High | CTRL-SEC-003 | Backup and restore evidence required before deployment gates. | EVID-BACKUP-FUTURE-001 | REQ-BACKUP-001 | Privacy/Security Owner | High | Required future evidence | No production database testing. |
| RISK-INSTALL-001 | Clean install or non-production reproducibility not proven. | No reproducible non-production install evidence yet. | Unreliable demo or runtime planning decisions. | Medium | Medium | Medium | CTRL-OPENEMR-002 | Non-production reproducible install planning required. | EVID-INSTALL-FUTURE-001 | REQ-INSTALL-001 | Technical Owner | Medium | Required future evidence | No clean-install reproducibility claim. |
| RISK-DEMO-001 | Synthetic demo data resembles real patient data or implies demo readiness. | Demo data may be insufficiently synthetic or demo scope may be overstated. | Privacy and unsupported readiness risk. | High | Medium | High | CTRL-SYNTHETIC-001 | Synthetic data planning and demo boundary evidence required. | EVID-DEMO-FUTURE-001 | REQ-DEMO-001 | Release Owner | Medium | Required future evidence | No demo readiness claim. |
| RISK-TRAIN-001 | Training not completed before stronger gate claims. | Training package and acknowledgements do not yet exist. | Misuse or misunderstanding of limitations. | Medium | Medium | Medium | CTRL-OPS-002 | Training package and acknowledgement evidence required. | EVID-TRAIN-FUTURE-001 | REQ-TRAIN-001 | Operations Owner | Medium | Required future evidence | No training readiness claim. |
| RISK-SUPPORT-001 | Support and escalation model insufficient for future demo, pilot, or production gates. | Support categories, escalation, and ownership may be incomplete. | Unsafe issue handling or unsupported readiness claim. | Medium | Medium | Medium | CTRL-OPS-003 | Support and escalation model evidence required. | EVID-SUPPORT-FUTURE-001 | REQ-SUPPORT-001 | Operations Owner | Medium | Required future evidence | No production support claim. |
| RISK-HF-001 | Human factors risk such as alert fatigue, automation bias, or cognitive overload. | Future prompts, rules, or workflow burden may affect clinician behavior. | Usability and safety risk. | High | Medium | High | CTRL-HITL-003 | Human factors and usability risk planning required. | EVID-HF-FUTURE-001 | REQ-HF-001 | Clinical Safety Owner | Medium | Required future evidence | No usability validation claim. |
| RISK-GOV-001 | Governance ownership unclear for stop-work, escalation, or approval decisions. | Owners or review responsibilities may be unclear during growth. | Delayed correction or unsafe merge decisions. | High | Medium | High | CTRL-GOV-001 | Governance ownership and stop-work authority. | EVID-GOV-087 | REQ-GOV-001 | Governance Owner | Medium | Open | Governance planning only. |
| RISK-PR-001 | PR scope expands beyond one documentation artifact or includes unintended files. | Broad changes, local files, or generated PR body files may be accidentally committed. | Review burden and unintended changes. | Medium | Medium | Medium | CTRL-STOP-001 | Small controlled PRs and file-diff review. | EVID-TRACE-FUTURE-001 | REQ-TRACE-001 | Documentation Owner | Low | Open | Requires continued PR discipline. |
| RISK-UNICODE-001 | Hidden or bidirectional Unicode control characters create review ambiguity or audit risk. | Copied text may contain invisible Unicode control characters. | Review ambiguity and audit risk. | Medium | Medium | Medium | CTRL-STOP-002 | Unicode/Bidi scan when GitHub warning appears. | EVID-TRACE-FUTURE-001 | REQ-TRACE-001 | Documentation Owner | Low | Open | Does not prohibit normal Unicode symbols when reviewed. |

---

## 11. Risk Review Rules

Risk register entries must be reviewed for:

- Clear Risk ID.
- Clear risk statement.
- Clear cause.
- Clear impact.
- Appropriate severity.
- Appropriate likelihood.
- Appropriate initial risk level.
- Appropriate control ID.
- Appropriate control summary.
- Correct evidence linkage.
- Correct traceability linkage.
- Correct owner role.
- Clear residual risk.
- Clear status.
- Clear limitations.
- No PHI.
- No real patient data.
- No SQL authorization.
- No runtime authorization.
- No AI authorization.
- No FHIR/API authorization.
- No frontend authorization.
- No OpenEMR core-sensitive change authorization.
- No unsupported readiness, validation, compliance, certification, or commercial claim.

Risk entries must not be used to claim that risk controls are validated, implemented, clinically effective, regulatory compliant, or cybersecurity certified.

---

## 12. Risk Maintenance Rules

This risk register should be updated when:

- A new clinical workflow is added.
- A new evidence artifact is merged.
- A traceability row is added or changed.
- A release gate changes.
- A new implementation scope is proposed.
- Security, privacy, RBAC, audit, or backup assumptions change.
- A new external claim is proposed.
- A stop rule is triggered.
- A governance owner changes.
- A risk is retired, superseded, reclassified, or escalated.

Future PRs should update or reference this risk register when they introduce:

- New risk IDs.
- New controls.
- New evidence IDs.
- New release-gate implications.
- New privacy/security assumptions.
- New claims boundaries.
- New runtime proposals.

---

## 13. Relationship to PR #92

PR #92 provides the Evidence Registry and Evidence Templates V0.1.

This risk register references evidence IDs from PR #92 where applicable.

This PR satisfies `EVID-RISK-FUTURE-001` at documentation-stage level only.

It does not create runtime risk management evidence, clinical validation evidence, regulatory compliance evidence, cybersecurity certification evidence, demo readiness evidence, pilot readiness evidence, production readiness evidence, or commercial readiness evidence.

This risk register does not replace the evidence registry.

---

## 14. Relationship to PR #93

PR #93 provides the Traceability Matrix V0.1.

This risk register complements the Traceability Matrix V0.1.

It does not replace the traceability matrix and does not upgrade documentation-stage traceability into runtime verification or validation.

The risk IDs in this document should remain aligned with the traceability matrix where applicable.

---

## 15. Risks of the Risk Register

| Risk | Impact | Control |
|---|---|---|
| Risk register is mistaken for implemented risk control | Unsupported safety or readiness claim. | Status and limitations fields. |
| Risk ratings are treated as final | Incorrect release decisions. | Pending review and future evidence status. |
| Risk owner is missing or outdated | Accountability gap. | Owner role field and maintenance rules. |
| Evidence linkage is incorrect | Poor traceability and auditability. | Relationship to PR #92 and PR #93. |
| Risk register becomes stale | Governance drift. | Maintenance rules. |
| Risk register overclaims compliance or validation | Legal, safety, and trust risk. | Explicit claim boundaries. |

---

## 16. Definition of Done

This document is complete when:

- Purpose is defined.
- Scope is defined.
- Out of scope is defined.
- Risk register principles are defined.
- Risk ID format is defined.
- Severity scale is defined.
- Likelihood scale is defined.
- Residual risk scale is defined.
- Risk owner roles are defined.
- Initial risk register is created.
- Required risks recommended for v0.1 are included.
- Relationship to PR #92 is documented.
- Relationship to PR #93 is documented.
- Risk review rules are documented.
- Risk maintenance rules are documented.
- Risks of the risk register are documented.
- No PHI is introduced.
- No real patient data is introduced.
- No SQL is introduced.
- No database migration is introduced.
- No production database testing is introduced.
- No runtime implementation is introduced.
- No runtime AI is introduced.
- No machine learning or predictive model is introduced.
- No autonomous CDS is introduced.
- No diagnosis, treatment, prescribing, or emergency triage automation is introduced.
- No frontend implementation is introduced.
- No FHIR/API implementation is introduced.
- No OpenEMR core-sensitive change is introduced.
- No unsupported readiness, validation, compliance, certification, or commercial claim is introduced.

---

## 17. After-Merge Action

After this PR is merged, the next planned documentation step is:

PR #95: docs(im-core): add pull request template and stop rules v0.1

Do not start PR #95 until:

- PR #94 is merged.
- `master` is updated locally.
- The working tree is clean.
- Any local PR body file is removed.
- The risk register exists on `master`.

---

## 18. Status

Documentation-only risk register.

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
