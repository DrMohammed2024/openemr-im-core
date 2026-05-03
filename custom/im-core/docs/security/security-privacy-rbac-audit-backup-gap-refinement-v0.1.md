# Security, Privacy, RBAC, Audit, and Backup Gap Refinement V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines the documentation-stage security, privacy, RBAC, audit, and backup/restore gap refinement plan for OpenEMR IM Core.

The purpose is to identify security and privacy evidence gaps before any future runtime implementation, demo environment, pilot environment, production deployment, integration work, AI work, FHIR/API work, frontend work, or OpenEMR core-sensitive change is proposed.

This document supports planning only.

This document does not create:

- Runtime security evidence.
- Runtime privacy evidence.
- RBAC implementation evidence.
- Audit verification evidence.
- Backup or restore execution evidence.
- Cybersecurity certification evidence.
- Regulatory compliance evidence.
- Clinical validation evidence.
- Demo readiness evidence.
- Pilot readiness evidence.
- Production readiness evidence.
- Commercial readiness evidence.
- Medical-device readiness evidence.

Golden rule:

The system must support clinicians. It must not replace clinicians.

---

## 2. Document Status and Identity

| Field | Value |
|---|---|
| Document | Security, Privacy, RBAC, Audit, and Backup Gap Refinement V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage only |
| Version | v0.1 |
| Owner Role | Privacy/Security Owner |
| Reviewer Roles | Documentation Owner, Technical Owner, Privacy/Security Owner, Clinical Safety Owner, Release Owner, Governance Owner |
| Review Status | Draft documentation artifact |
| Runtime Status | No runtime implementation |
| Clinical Use Status | Not for clinical use |
| Security Certification Status | Not cybersecurity certified |
| Compliance Status | No regulatory compliance claim |

This document is a planning artifact only.

This document is not a security validation report.

This document is not a privacy compliance report.

This document is not a cybersecurity certification artifact.

---

## 3. Scope

This document covers documentation-stage security and privacy planning for OpenEMR IM Core.

It addresses:

- Security and privacy boundaries.
- No-PHI expectations.
- GitHub evidence sanitation.
- RBAC planning gaps.
- Audit evidence planning gaps.
- Backup and restore evidence planning gaps.
- Security/privacy ownership.
- Future non-production evidence expectations.
- Future demo/pilot/production security prerequisites.
- Relationship to evidence, traceability, risk, stop rules, clinical safety, and human factors artifacts.

This document references:

- PR #92 Evidence Registry and Evidence Templates V0.1.
- PR #93 Traceability Matrix V0.1.
- PR #94 Risk Register V0.1.
- PR #95 Pull Request Template and Stop Rules V0.1.
- PR #96 Clinical Safety Case V0.1.
- PR #97 Human Factors and Usability Risk Plan V0.1.

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
- Live RBAC configuration.
- Live audit log verification.
- Live backup execution.
- Live restore testing.
- Production access review.
- Penetration testing.
- Vulnerability certification.
- HIPAA compliance certification.
- GDPR compliance certification.

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
- Clean-install reproducibility.
- Medical-device readiness.
- HIPAA compliance.
- GDPR compliance.
- FDA readiness.
- MDR readiness.
- CE marking.
- FDA clearance.

---

## 5. Security and Privacy Principles

The security and privacy principles for OpenEMR IM Core are:

1. No PHI may be committed to GitHub.
2. No real patient data may be committed to GitHub.
3. No credentials, secrets, tokens, keys, private configuration, or sensitive logs may be committed.
4. No database dumps may be committed.
5. Demo or example content must be synthetic and clearly labeled.
6. Security evidence committed to GitHub must be sanitized.
7. Screenshots, if ever used, must contain synthetic data only.
8. Logs, if ever used, must be sanitized and must not contain identifiers.
9. RBAC planning must preserve least privilege.
10. Audit planning must preserve accountability and traceability.
11. Backup/restore planning must not use production data at the current stage.
12. Future runtime work requires security/privacy review before implementation.
13. Future FHIR/API or external integration work requires separate data governance and security review.
14. Future AI or analytics work requires separate privacy, security, clinical safety, and validation governance.
15. Security planning does not equal cybersecurity certification.
16. Privacy planning does not equal regulatory compliance.

---

## 6. Current Security and Privacy Boundaries

Current project boundaries are:

- Documentation-stage only.
- No runtime implementation.
- No production patient data.
- No PHI.
- No SQL.
- No database migration.
- No database dump.
- No production database testing.
- No runtime AI.
- No FHIR/API implementation.
- No frontend implementation.
- No OpenEMR core-sensitive change.
- No live RBAC configuration.
- No live audit verification.
- No live backup/restore execution.
- No cybersecurity certification claim.
- No HIPAA compliance claim.
- No GDPR compliance claim.
- No regulatory compliance claim.
- No demo, pilot, or production readiness claim.

These boundaries must remain active until future governance, evidence, risk review, traceability, security/privacy review, clinical safety review, human factors review, and release gates approve a new scope.

---

## 7. Security and Privacy Gap Categories

| Gap Category | Description | Current Status | Required Future Evidence |
|---|---|---|---|
| No-PHI governance | Ensure GitHub artifacts do not contain PHI or real patient data. | Documentation-stage boundary exists. | No-PHI review checklist and evidence. |
| Secrets handling | Prevent credentials, tokens, keys, and private config exposure. | Stop rules exist. | Secrets scanning / review evidence if needed. |
| RBAC planning | Define expected roles, least privilege, and access boundaries. | Required future evidence. | RBAC matrix and access review evidence. |
| Audit planning | Define what events should be reviewable in future environments. | Required future evidence. | Audit evidence template and review evidence. |
| Backup/restore planning | Define future backup and restore expectations. | Required future evidence. | Backup/restore evidence template and non-production restore review. |
| Synthetic data governance | Prevent demo data from resembling real patients. | Required future evidence. | Synthetic demo data plan and no-PHI review. |
| Integration security | Prevent unsafe FHIR/API or external data integration. | Out of scope. | Future integration boundary map and data governance. |
| Runtime security | Establish runtime access, logging, monitoring, and hardening if runtime is approved. | Blocked. | Future runtime security plan. |
| Privacy review | Review data use, collection, retention, and exposure risk. | Required future evidence. | Privacy/security review checklist. |
| Claims control | Prevent unsupported cybersecurity or compliance claims. | Stop rules exist. | Claims register and review process. |

---

## 8. Initial RBAC Planning Boundary

This document does not implement RBAC.

Future RBAC planning should define role boundaries before any runtime, demo, pilot, or production claim.

Initial planning roles may include:

| Role | Future Access Boundary | Current Planning Limitation |
|---|---|---|
| Clinician | Clinical review and documentation within assigned care context. | No runtime role configured. |
| Nurse / Medical Assistant | Intake and workflow support within assigned care context. | No runtime role configured. |
| Front Desk / Registration | Registration and scheduling support. | No runtime role configured. |
| Billing / Administrative Staff | Administrative and billing-linked review. | Must not influence clinical judgment. |
| Privacy/Security Reviewer | Security/privacy evidence review. | No live access review. |
| Technical Reviewer | Technical configuration and architecture review. | No runtime configuration. |
| Auditor | Future read-only audit review where appropriate. | No audit implementation. |
| Support Role | Future time-limited support access if approved. | No support access configured. |
| Administrator | Future controlled administrative configuration. | No runtime administrator configuration. |

Future RBAC design must follow least privilege.

Future support access must be approved, time-limited, and auditable.

Future administrative access must be controlled and reviewed.

---

## 9. RBAC Gap Register

| Gap ID | Gap | Risk | Required Future Control | Evidence Reference | Status |
|---|---|---|---|---|---|
| RBAC-GAP-001 | No approved OpenEMR role mapping exists for IM Core. | Excessive or unclear access. | Future RBAC matrix. | EVID-SEC-FUTURE-001 | Required future evidence |
| RBAC-GAP-002 | Least privilege has not been reviewed. | Overexposure of sensitive data. | Future least privilege review. | EVID-SEC-FUTURE-001 | Required future evidence |
| RBAC-GAP-003 | Support access process is not defined. | Uncontrolled support access. | Future support access policy. | EVID-SUPPORT-FUTURE-001 | Required future evidence |
| RBAC-GAP-004 | Administrative access boundaries are not defined. | Misconfiguration or unauthorized change. | Future admin access review. | EVID-SEC-FUTURE-001 | Required future evidence |
| RBAC-GAP-005 | Audit role and read-only review expectations are not defined. | Weak accountability. | Future auditor role planning. | EVID-AUDIT-FUTURE-001 | Required future evidence |

---

## 10. Audit Evidence Planning Boundary

This document does not implement audit logging.

Future audit planning should define what must be reviewable before any runtime, demo, pilot, production, or commercial claim.

Future audit evidence may need to address:

- Login events.
- Failed login events.
- Role changes.
- Access changes.
- Configuration changes.
- Documentation changes.
- Export actions.
- Backup events.
- Restore events.
- Support access events.
- Administrative actions.
- Security/privacy review actions.

At the current stage:

- No audit log evidence is created.
- No runtime audit configuration is changed.
- No production audit review is performed.
- No audit trail implementation is created.
- No cybersecurity certification claim is made.

---

## 11. Audit Gap Register

| Gap ID | Gap | Risk | Required Future Control | Evidence Reference | Status |
|---|---|---|---|---|---|
| AUDIT-GAP-001 | Audit evidence template is not yet created. | Inconsistent evidence capture. | Future audit evidence template. | EVID-AUDIT-FUTURE-001 | Required future evidence |
| AUDIT-GAP-002 | Audit event categories are not approved. | Missing accountability. | Future audit scope review. | EVID-AUDIT-FUTURE-001 | Required future evidence |
| AUDIT-GAP-003 | Audit log review owner is not confirmed. | Weak governance. | Future owner assignment. | EVID-GOV-087 | Required future evidence |
| AUDIT-GAP-004 | Sanitized audit evidence process is not defined. | PHI exposure risk. | No-PHI audit evidence process. | EVID-SEC-FUTURE-002 | Required future evidence |
| AUDIT-GAP-005 | Support and administrative actions are not audit-planned. | Untracked privileged activity. | Future privileged action audit review. | EVID-AUDIT-FUTURE-001 | Required future evidence |

---

## 12. Backup and Restore Planning Boundary

This document does not execute backup or restore.

Future backup and restore planning should define evidence expectations before any runtime, demo, pilot, production, or commercial claim.

Current boundaries:

- No production database testing.
- No production backup evidence.
- No database dump committed to GitHub.
- No real patient data committed to GitHub.
- No restore test performed by this PR.
- No backup method approved by this PR.
- No production recovery claim.
- No business continuity claim.

Future backup/restore evidence must be sanitized before any GitHub reference.

---

## 13. Backup and Restore Gap Register

| Gap ID | Gap | Risk | Required Future Control | Evidence Reference | Status |
|---|---|---|---|---|---|
| BACKUP-GAP-001 | Backup method is not approved. | Data loss risk in future runtime environments. | Future backup method review. | EVID-BACKUP-FUTURE-001 | Required future evidence |
| BACKUP-GAP-002 | Restore process is not tested. | Backup may be unusable. | Future non-production restore test. | EVID-BACKUP-FUTURE-001 | Required future evidence |
| BACKUP-GAP-003 | Recovery objective is not defined. | Unclear resilience expectations. | Future RPO/RTO planning. | EVID-BACKUP-FUTURE-001 | Required future evidence |
| BACKUP-GAP-004 | Sanitized restore evidence process is not defined. | PHI exposure risk. | No-PHI restore evidence rules. | EVID-SEC-FUTURE-001 | Required future evidence |
| BACKUP-GAP-005 | Backup responsibility is not assigned. | Operational gap. | Future owner assignment. | EVID-GOV-087 | Required future evidence |

---

## 14. No-PHI and Sanitization Boundary

GitHub artifacts must not include:

- Patient names.
- Real dates of birth.
- Real phone numbers.
- Real addresses.
- Real MRNs.
- Real insurance identifiers.
- Real lab results.
- Real medication lists.
- Real visit notes.
- Real screenshots.
- Real logs.
- Database dumps.
- Credentials.
- Tokens.
- Secrets.
- Private configuration.
- Production identifiers.

Future examples must be synthetic and clearly labeled.

Future screenshots, if used, must contain synthetic data only.

Future logs, if used, must be sanitized and must not include identifiers or secrets.

---

## 15. Security and Privacy Risk Register

| Security Risk ID | Risk | Related Project Risk | Current Control | Required Future Evidence | Status |
|---|---|---|---|---|---|
| SEC-PRIV-001 | PHI committed to GitHub. | RISK-PHI-001 | No-PHI boundary and stop rules. | No-PHI review checklist. | Required future evidence |
| SEC-PRIV-002 | Credentials or secrets committed to GitHub. | RISK-SEC-001 | Stop rules. | Secrets review process. | Required future evidence |
| SEC-PRIV-003 | Excessive future role privileges. | RISK-SEC-001 | RBAC planning boundary. | RBAC matrix. | Required future evidence |
| SEC-PRIV-004 | Missing audit evidence. | RISK-AUDIT-001 | Audit planning boundary. | Audit evidence template. | Required future evidence |
| SEC-PRIV-005 | Backup cannot be restored. | RISK-BACKUP-001 | Backup planning boundary. | Backup/restore evidence template. | Required future evidence |
| SEC-PRIV-006 | Synthetic data resembles real patient data. | RISK-DEMO-001 | No-PHI and synthetic data boundary. | Synthetic demo data plan. | Required future evidence |
| SEC-PRIV-007 | FHIR/API integration leaks data. | RISK-FHIR-001 | FHIR/API remains blocked. | Future integration boundary and data governance. | Required future evidence |
| SEC-PRIV-008 | Runtime AI uses sensitive data without governance. | RISK-AI-001 | Runtime AI remains blocked. | Future AI governance if ever proposed. | Required future evidence |
| SEC-PRIV-009 | Unsupported compliance or cybersecurity claim. | RISK-CLAIM-001 | Claims boundary and stop rules. | Claims register. | Required future evidence |
| SEC-PRIV-010 | Local evidence contains hidden PHI in screenshots or logs. | RISK-PHI-001 | No-PHI review expectation. | Future review checklist. | Required future evidence |

---

## 16. Future Security Evidence Requirements

Future security/privacy evidence may include:

- No-PHI review checklist.
- RBAC matrix.
- Least privilege review.
- Administrative access review.
- Support access review.
- Audit evidence template.
- Audit event category review.
- Backup evidence template.
- Restore evidence template.
- Non-production restore review.
- Synthetic data review.
- Secrets review process.
- Data governance document.
- Threat model.
- Incident response process.
- Security/privacy owner sign-off.
- Claims review for any compliance or cybersecurity wording.

These future evidence items do not authorize runtime implementation by themselves.

---

## 17. Relationship to PR #92

PR #92 created the Evidence Registry and Evidence Templates V0.1.

This document references required future evidence items from PR #92, including:

- EVID-SEC-FUTURE-001.
- EVID-SEC-FUTURE-002.
- EVID-AUDIT-FUTURE-001.
- EVID-BACKUP-FUTURE-001.

This PR addresses these evidence needs at a gap-refinement planning level only.

It does not create runtime security evidence, privacy compliance evidence, audit verification evidence, backup execution evidence, restore execution evidence, cybersecurity certification evidence, demo readiness evidence, pilot readiness evidence, production readiness evidence, or commercial readiness evidence.

This document does not replace the evidence registry.

---

## 18. Relationship to PR #93

PR #93 created the Traceability Matrix V0.1.

This security/privacy gap refinement document depends on traceability to keep security risks, privacy risks, controls, evidence references, and owner responsibilities traceable.

This document does not replace the traceability matrix.

It does not convert documentation-stage traceability into runtime verification, security validation, privacy compliance, or cybersecurity certification.

---

## 19. Relationship to PR #94

PR #94 created the Risk Register V0.1.

This document expands the security, privacy, RBAC, audit, and backup dimensions of selected project risks.

This document does not replace the risk register.

It does not prove that listed controls are implemented, validated, regulatory compliant, cybersecurity certified, or production-ready.

---

## 20. Relationship to PR #95

PR #95 created the Pull Request Template and Stop Rules V0.1.

This document depends on stop rules as governance controls to prevent unsafe PRs from being merged.

Relevant stop rules include:

- STOP-PHI-001.
- STOP-SECRET-001.
- STOP-SQL-001.
- STOP-RUNTIME-001.
- STOP-AI-001.
- STOP-FHIR-001.
- STOP-CORE-001.
- STOP-CLAIM-001.
- STOP-SCOPE-001.
- STOP-EVIDENCE-001.
- STOP-REVIEW-001.

Stop rules are governance controls and not runtime security controls.

This document does not replace stop rules.

---

## 21. Relationship to PR #96

PR #96 created the Clinical Safety Case V0.1.

This document supports clinical safety by preserving privacy, security, no-PHI, auditability, and controlled access expectations.

This document does not replace the Clinical Safety Case.

It does not create clinical validation or runtime safety evidence.

---

## 22. Relationship to PR #97

PR #97 created the Human Factors and Usability Risk Plan V0.1.

This document supports human factors planning by defining privacy and security boundaries for future feedback, screenshots, logs, examples, synthetic data, and audit artifacts.

This document does not replace the Human Factors and Usability Risk Plan.

It does not create usability validation or human factors validation.

---

## 23. Security and Privacy Review Rules

Security/privacy artifacts must be reviewed for:

- No PHI.
- No real patient data.
- No credentials.
- No secrets.
- No sensitive logs.
- No database dumps.
- No SQL authorization.
- No runtime authorization.
- No AI authorization.
- No FHIR/API authorization.
- No frontend authorization.
- No OpenEMR core-sensitive authorization.
- Clear RBAC planning boundary.
- Clear audit planning boundary.
- Clear backup/restore planning boundary.
- Clear data governance need.
- Clear no-PHI evidence expectation.
- Clear claims boundary.
- No unsupported compliance claim.
- No cybersecurity certification claim.
- No demo, pilot, production, or commercial readiness claim.

Any future security/privacy claim stronger than documentation-stage planning requires new evidence, traceability update, risk update, privacy/security review, and release gate approval.

---

## 24. Risks of the Security and Privacy Gap Refinement

| Risk | Impact | Control |
|---|---|---|
| Security planning is mistaken for cybersecurity certification. | Unsupported certification or readiness claim. | Explicit limitation language. |
| Privacy planning is mistaken for HIPAA/GDPR compliance. | Unsupported compliance claim. | Claims boundary and stop rules. |
| RBAC planning is mistaken for implemented access control. | Unsafe access assumptions. | Documentation-stage status. |
| Audit planning is mistaken for verified audit logging. | False accountability assumption. | Audit planning boundary. |
| Backup planning is mistaken for tested restore capability. | False resilience assumption. | Backup/restore planning boundary. |
| Synthetic data resembles real patient data. | Privacy and trust risk. | Future synthetic data review. |
| Local screenshots or logs include hidden PHI. | Privacy breach. | No-PHI review process. |
| Security evidence becomes stale. | Poor governance. | Future review cadence. |

---

## 25. Definition of Done

This document is complete when:

- Purpose is defined.
- Document status and identity are defined.
- Scope is defined.
- Out of scope is defined.
- Security and privacy principles are defined.
- Current security and privacy boundaries are defined.
- Security and privacy gap categories are defined.
- Initial RBAC planning boundary is defined.
- RBAC gap register is defined.
- Audit evidence planning boundary is defined.
- Audit gap register is defined.
- Backup and restore planning boundary is defined.
- Backup and restore gap register is defined.
- No-PHI and sanitization boundary is defined.
- Security and privacy risk register is defined.
- Future security evidence requirements are defined.
- Relationship to PR #92 is documented.
- Relationship to PR #93 is documented.
- Relationship to PR #94 is documented.
- Relationship to PR #95 is documented.
- Relationship to PR #96 is documented.
- Relationship to PR #97 is documented.
- Security and privacy review rules are defined.
- Risks of this document are documented.
- No PHI is introduced.
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

## 26. After-Merge Action

After this PR is merged, the next planned documentation step is:

PR #99: docs(im-core): add threat model and data governance v0.1

Do not start PR #99 until:

- PR #98 is merged.
- `master` is updated locally.
- Working tree is clean.
- `pr98_body.md` is removed locally.
- Security/privacy gap refinement document exists on `master`.

---

## 27. Status

Documentation-stage security, privacy, RBAC, audit, and backup gap refinement.

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

No live RBAC configuration.

No live audit verification.

No live backup execution.

No live restore testing.

Not cybersecurity certified.

Not privacy compliant by claim.

Not regulatory compliant.

Not clinically validated.

Not demo-ready.

Not pilot-ready.

Not production-ready.

Not commercially deployment-ready.
