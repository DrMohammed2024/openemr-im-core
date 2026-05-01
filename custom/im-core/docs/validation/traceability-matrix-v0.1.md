# Traceability Matrix V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines the documentation-only traceability matrix for OpenEMR IM Core.

The purpose is to connect documentation-stage requirements, risks, controls, tests, evidence artifacts, owners, review status, and limitations.

The traceability model is:

Requirement → Risk → Control → Test → Evidence → Owner → Review Status

This document is intended to support controlled documentation review only.

This document does not create:

- Runtime proof.
- Runtime functionality evidence.
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

This traceability matrix covers documentation-stage traceability for OpenEMR IM Core artifacts created or planned through the current governance sequence.

This includes traceability for:

- Testing and verification planning.
- Failure modes and safe response planning.
- Daily operating model.
- SOP framework.
- Data model and OpenEMR mapping.
- Clinical documentation quality rules.
- Release readiness gates.
- Governance ownership model.
- Core clinic workflows.
- Follow-up, open loops, and safety-net workflows.
- Lab results and critical results workflows.
- Pharmacy, billing, and administrative linkage workflows.
- Evidence registry and evidence templates.

This document references the Evidence Registry and Evidence Templates V0.1 created by PR #92.

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

---

## 4. Traceability Model

The OpenEMR IM Core traceability model is:

Requirement → Risk → Control → Test → Evidence → Owner → Review Status

Each row should identify:

- What requirement is being controlled.
- What risk is associated with the requirement.
- What control mitigates the risk.
- What test or review activity checks the control.
- What evidence supports the trace.
- Who owns the trace.
- What the current review status is.
- What the trace does not prove.

---

## 5. Requirement ID Format

Requirement IDs should use the following pattern:

| Pattern | Meaning |
|---|---|
| `REQ-TRACE-###` | Traceability requirements. |
| `REQ-EVID-###` | Evidence management requirements. |
| `REQ-SAF-###` | Clinical safety requirements. |
| `REQ-PRIV-###` | Privacy and no-PHI requirements. |
| `REQ-SEC-###` | Security requirements. |
| `REQ-OPS-###` | Operations requirements. |
| `REQ-SOP-###` | SOP requirements. |
| `REQ-DATA-###` | Data model and OpenEMR mapping requirements. |
| `REQ-REL-###` | Release readiness requirements. |
| `REQ-GOV-###` | Governance requirements. |
| `REQ-WF-###` | Workflow requirements. |
| `REQ-RISK-###` | Risk management requirements. |
| `REQ-HF-###` | Human factors requirements. |
| `REQ-DEMO-###` | Synthetic demo requirements. |
| `REQ-CLAIM-###` | Claims and commercial wording requirements. |

---

## 6. Risk ID Format

Risk IDs should use the following pattern:

| Pattern | Meaning |
|---|---|
| `RISK-DOC-###` | Documentation quality or documentation sprawl risks. |
| `RISK-EVID-###` | Evidence management risks. |
| `RISK-SAF-###` | Clinical safety risks. |
| `RISK-CDS-###` | Clinical decision support or automation boundary risks. |
| `RISK-PRIV-###` | Privacy or PHI risks. |
| `RISK-SEC-###` | Security risks. |
| `RISK-OPS-###` | Operational workflow risks. |
| `RISK-SOP-###` | SOP risks. |
| `RISK-DATA-###` | Data model or mapping risks. |
| `RISK-REL-###` | Release readiness risks. |
| `RISK-GOV-###` | Governance risks. |
| `RISK-WF-###` | Workflow risks. |
| `RISK-FUP-###` | Follow-up and open-loop risks. |
| `RISK-LAB-###` | Lab and critical result risks. |
| `RISK-BILL-###` | Billing or administrative linkage risks. |
| `RISK-HF-###` | Human factors or usability risks. |
| `RISK-DEMO-###` | Demo or synthetic data risks. |
| `RISK-CLAIM-###` | Claims or commercial overstatement risks. |

---

## 7. Control ID Format

Control IDs should use the following pattern:

| Pattern | Meaning |
|---|---|
| `CTRL-DOC-###` | Documentation control. |
| `CTRL-EVID-###` | Evidence control. |
| `CTRL-HITL-###` | Human-in-the-loop control. |
| `CTRL-NOPHI-###` | No-PHI control. |
| `CTRL-SEC-###` | Security control. |
| `CTRL-OPS-###` | Operations control. |
| `CTRL-SOP-###` | SOP control. |
| `CTRL-OPENEMR-###` | OpenEMR-native or OpenEMR-safe control. |
| `CTRL-REL-###` | Release readiness control. |
| `CTRL-GOV-###` | Governance control. |
| `CTRL-WF-###` | Workflow control. |
| `CTRL-ESCALATION-###` | Human escalation control. |
| `CTRL-SAFETYNET-###` | Safety-net control. |
| `CTRL-CLAIMS-###` | Claims control. |
| `CTRL-STOP-###` | Stop-rule control. |
| `CTRL-SYNTHETIC-###` | Synthetic-data control. |

---

## 8. Test ID Format

Test IDs in this document are documentation-stage review checks only.

They do not represent runtime tests, clinical validation tests, production tests, cybersecurity certification tests, or regulatory compliance tests.

| Pattern | Meaning |
|---|---|
| `TEST-DOC-###` | Documentation review check. |
| `TEST-EVID-###` | Evidence review check. |
| `TEST-SAF-###` | Clinical safety wording review check. |
| `TEST-PRIV-###` | No-PHI / privacy review check. |
| `TEST-SEC-###` | Security documentation review check. |
| `TEST-OPS-###` | Operations documentation review check. |
| `TEST-SOP-###` | SOP documentation review check. |
| `TEST-DATA-###` | Data mapping review check. |
| `TEST-REL-###` | Release readiness wording review check. |
| `TEST-GOV-###` | Governance review check. |
| `TEST-WF-###` | Workflow review check. |
| `TEST-CLAIMS-###` | Claims wording review check. |
| `TEST-TRACE-###` | Traceability completeness review check. |

---

## 9. Evidence ID Linkage

Evidence IDs must reference the Evidence Registry and Evidence Templates V0.1.

Current evidence IDs from PR #92 include:

- `EVID-VAL-080`
- `EVID-FM-081`
- `EVID-OPS-082`
- `EVID-SOP-083`
- `EVID-DATA-084`
- `EVID-CQ-085`
- `EVID-REL-086`
- `EVID-GOV-087`
- `EVID-WF-088`
- `EVID-WF-089`
- `EVID-WF-090`
- `EVID-WF-091`

Required future evidence IDs from PR #92 include:

- `EVID-SEC-FUTURE-001`
- `EVID-SEC-FUTURE-002`
- `EVID-AUDIT-FUTURE-001`
- `EVID-BACKUP-FUTURE-001`
- `EVID-INSTALL-FUTURE-001`
- `EVID-RUNTIME-FUTURE-001`
- `EVID-DEMO-FUTURE-001`
- `EVID-TRAIN-FUTURE-001`
- `EVID-SUPPORT-FUTURE-001`
- `EVID-CLAIMS-FUTURE-001`
- `EVID-TRACE-FUTURE-001`
- `EVID-RISK-FUTURE-001`
- `EVID-HF-FUTURE-001`
- `EVID-SAFETY-FUTURE-001`

This PR satisfies `EVID-TRACE-FUTURE-001` at documentation-stage level only.

This does not create runtime evidence.

---

## 10. Initial Traceability Table

| Requirement ID | Requirement | Risk ID | Control ID | Test ID | Evidence ID | Owner | Review Status | Limitations |
|---|---|---|---|---|---|---|---|---|
| REQ-TRACE-001 | Maintain documentation-stage traceability across IM Core governance artifacts. | RISK-DOC-001 | CTRL-DOC-001 | TEST-TRACE-001 | EVID-TRACE-FUTURE-001 | Documentation Owner | Pending review | Documentation-only; no runtime proof. |
| REQ-EVID-001 | Maintain evidence registry and evidence templates for documentation-stage artifacts. | RISK-EVID-001 | CTRL-EVID-001 | TEST-EVID-001 | EVID-TRACE-FUTURE-001 | Documentation Owner | Existing documentation evidence | Evidence registry does not prove runtime functionality. |
| REQ-SAF-001 | Preserve clinician-support-only safety boundary. | RISK-SAF-001 | CTRL-HITL-001 | TEST-SAF-001 | EVID-FM-081 | Clinical Safety Owner | Existing documentation evidence | No clinical validation claim. |
| REQ-SAF-002 | Clinical documentation quality rules must not diagnose, prescribe, triage, or recommend treatment autonomously. | RISK-CDS-001 | CTRL-HITL-002 | TEST-SAF-002 | EVID-CQ-085 | Clinical Safety Owner | Existing documentation evidence | Documentation quality planning only. |
| REQ-OPS-001 | Daily clinic operations must define role boundaries and patient status planning. | RISK-OPS-001 | CTRL-OPS-001 | TEST-OPS-001 | EVID-OPS-082 | Operations Owner | Existing documentation evidence | Operational planning only. |
| REQ-SOP-001 | SOP framework must support controlled workflow documentation. | RISK-SOP-001 | CTRL-SOP-001 | TEST-SOP-001 | EVID-SOP-083 | Documentation Owner | Existing documentation evidence | SOP framework only. |
| REQ-DATA-001 | Data model planning must prefer OpenEMR-native mapping and avoid schema changes at this stage. | RISK-DATA-001 | CTRL-OPENEMR-001 | TEST-DATA-001 | EVID-DATA-084 | Technical Owner | Existing documentation evidence | No schema change or SQL authorization. |
| REQ-REL-001 | Prevent unsupported demo, pilot, production, commercial, validation, compliance, or certification claims. | RISK-CLAIM-001 | CTRL-CLAIMS-001 | TEST-CLAIMS-001 | EVID-REL-086 | Release Owner | Existing documentation evidence | No readiness claim. |
| REQ-GOV-001 | Define governance ownership and review responsibilities before stronger gates. | RISK-GOV-001 | CTRL-GOV-001 | TEST-GOV-001 | EVID-GOV-087 | Governance Owner | Existing documentation evidence | Role ownership planning only. |
| REQ-WF-001 | Core clinic workflows must define owner, inputs, outputs, documentation expectations, and failure modes. | RISK-WF-001 | CTRL-WF-001 | TEST-WF-001 | EVID-WF-088 | Operations Owner | Existing documentation evidence | Workflow planning only. |
| REQ-WF-002 | Follow-up, open loops, and safety-net workflows must preserve human ownership and escalation boundaries. | RISK-FUP-001 | CTRL-SAFETYNET-001 | TEST-WF-002 | EVID-WF-089 | Clinical Safety Owner | Existing documentation evidence | No automated patient messaging. |
| REQ-WF-003 | Lab and critical result workflows must require human clinical review and escalation ownership. | RISK-LAB-001 | CTRL-ESCALATION-001 | TEST-WF-003 | EVID-WF-090 | Clinical Safety Owner | Existing documentation evidence | No emergency triage automation. |
| REQ-WF-004 | Pharmacy, billing, and administrative linkage must not imply prescribing, billing, claims, or pharmacy automation. | RISK-BILL-001 | CTRL-WF-004 | TEST-WF-004 | EVID-WF-091 | Operations Owner | Existing documentation evidence | No pharmacy, billing, or claims automation. |
| REQ-PRIV-001 | Prevent PHI, real patient data, secrets, sensitive logs, and database dumps from GitHub evidence. | RISK-PRIV-001 | CTRL-NOPHI-001 | TEST-PRIV-001 | EVID-SEC-FUTURE-001 | Privacy/Security Owner | Required future evidence | No runtime privacy audit yet. |
| REQ-SEC-001 | Security, privacy, RBAC, audit, and backup evidence must be refined before runtime or demo claims. | RISK-SEC-001 | CTRL-SEC-001 | TEST-SEC-001 | EVID-SEC-FUTURE-002 | Privacy/Security Owner | Required future evidence | No cybersecurity certification claim. |
| REQ-AUDIT-001 | Audit evidence templates must exist before audit claims or stronger release gates. | RISK-SEC-002 | CTRL-SEC-002 | TEST-SEC-002 | EVID-AUDIT-FUTURE-001 | Privacy/Security Owner | Required future evidence | No audit verification claim yet. |
| REQ-BACKUP-001 | Backup and restore evidence must be defined before runtime or deployment gates. | RISK-SEC-003 | CTRL-SEC-003 | TEST-SEC-003 | EVID-BACKUP-FUTURE-001 | Privacy/Security Owner | Required future evidence | No production database testing. |
| REQ-INSTALL-001 | Non-production reproducible install planning must be documented before any clean-install or demo environment claim. | RISK-DATA-002 | CTRL-OPENEMR-002 | TEST-DATA-002 | EVID-INSTALL-FUTURE-001 | Technical Owner | Required future evidence | No clean-install reproducibility claim. |
| REQ-RUNTIME-001 | Runtime form visibility evidence must not be claimed until future non-production runtime gates are approved. | RISK-DATA-003 | CTRL-OPENEMR-003 | TEST-DATA-003 | EVID-RUNTIME-FUTURE-001 | Technical Owner | Required future evidence | Runtime remains blocked. |
| REQ-DEMO-001 | Demo planning must use synthetic data only and must not claim demo readiness until gates are satisfied. | RISK-DEMO-001 | CTRL-SYNTHETIC-001 | TEST-DOC-001 | EVID-DEMO-FUTURE-001 | Release Owner | Required future evidence | No demo readiness claim. |
| REQ-TRAIN-001 | Training package and acknowledgement evidence must exist before any training-readiness claim. | RISK-OPS-002 | CTRL-OPS-002 | TEST-OPS-002 | EVID-TRAIN-FUTURE-001 | Operations Owner | Required future evidence | No staff training completion claim. |
| REQ-SUPPORT-001 | Support and escalation model evidence must exist before support-readiness claims. | RISK-OPS-003 | CTRL-OPS-003 | TEST-OPS-003 | EVID-SUPPORT-FUTURE-001 | Operations Owner | Required future evidence | No production support claim. |
| REQ-CLAIM-001 | Commercial and external claims must be reviewed before use. | RISK-CLAIM-002 | CTRL-CLAIMS-002 | TEST-CLAIMS-002 | EVID-CLAIMS-FUTURE-001 | Claims Reviewer | Required future evidence | No commercial readiness claim. |
| REQ-RISK-001 | Maintain a risk register linking risks, controls, residual risk, owners, and evidence needs. | RISK-DOC-002 | CTRL-DOC-002 | TEST-TRACE-002 | EVID-RISK-FUTURE-001 | Clinical Safety Owner | Required future evidence | Planned for PR #94. |
| REQ-HF-001 | Human factors and usability risks must be documented before runtime planning. | RISK-HF-001 | CTRL-HITL-003 | TEST-SAF-003 | EVID-HF-FUTURE-001 | Clinical Safety Owner | Required future evidence | No usability validation claim. |
| REQ-SAF-003 | Clinical safety case must summarize assumptions, hazards, controls, evidence limitations, and open safety issues. | RISK-SAF-002 | CTRL-HITL-004 | TEST-SAF-004 | EVID-SAFETY-FUTURE-001 | Clinical Safety Owner | Required future evidence | No medical-device readiness claim. |

---

## 11. Traceability Review Rules

Traceability rows must be reviewed for:

- Correct requirement ID.
- Correct risk ID.
- Correct control ID.
- Correct test ID.
- Correct evidence ID.
- Correct owner role.
- Correct review status.
- Clear limitations.
- No unsupported readiness claim.
- No clinical validation claim.
- No regulatory compliance claim.
- No cybersecurity certification claim.
- No runtime implementation implication.

A traceability row must not be used to support a stronger claim than its evidence allows.

Existing documentation evidence does not prove:

- Runtime functionality.
- Runtime correctness.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.
- Demo readiness.
- Pilot readiness.
- Production readiness.
- Commercial readiness.

---

## 12. Traceability Maintenance Rules

This matrix should be updated when:

- A new requirement is added.
- A new evidence artifact is merged.
- A risk register item is added or changed.
- A control is added or changed.
- A test or review method is added.
- A release gate changes.
- A claim boundary changes.
- A future runtime implementation is proposed.
- An evidence item is retired, superseded, or reclassified.

Future PRs should reference this matrix when they introduce:

- New evidence IDs.
- New risk IDs.
- New control IDs.
- New review requirements.
- New release-gate implications.

---

## 13. Relationship to PR #92

PR #92 provides the Evidence Registry and Evidence Templates V0.1.

This traceability matrix:

- References PR #92 evidence IDs.
- Does not replace the evidence registry.
- Does not create a second evidence registry.
- Does not upgrade documentation evidence into runtime evidence.
- Does not approve any release gate.
- Does not establish clinical validation.
- Does not establish regulatory compliance.
- Does not establish cybersecurity certification.

PR #92 identifies `EVID-TRACE-FUTURE-001` as the required future evidence item for traceability.

This PR satisfies `EVID-TRACE-FUTURE-001` at documentation-stage level only.

---

## 14. Risks

| Risk | Impact | Control |
|---|---|---|
| Traceability is mistaken for validation | Unsupported validation or readiness claims. | Limitations and review rules. |
| Documentation evidence is mistaken for runtime proof | Unsafe release decisions. | Evidence status and limitations. |
| Requirement IDs become inconsistent | Poor auditability. | ID format and maintenance rules. |
| Evidence IDs do not match PR #92 | Traceability failure. | PR #92 relationship section. |
| Risk register is not yet available | Traceability remains partial. | Mark risk register as required future evidence. |
| Security evidence is not yet available | Privacy/security readiness cannot be claimed. | Mark security evidence as required future evidence. |
| Claims are overstated | Legal, safety, and trust risk. | Claims controls and release limitations. |

---

## 15. Definition of Done

This document is complete when:

- Purpose is defined.
- Scope is defined.
- Out of scope is defined.
- Traceability model is defined.
- Requirement ID format is defined.
- Risk ID format is defined.
- Control ID format is defined.
- Test ID format is defined.
- Evidence ID linkage to PR #92 is defined.
- Initial traceability table is created.
- Current evidence IDs from PR #80 through PR #91 are referenced where appropriate.
- Required future evidence IDs from PR #92 are referenced where appropriate.
- Traceability review rules are defined.
- Traceability maintenance rules are defined.
- Relationship to PR #92 is documented.
- Risks are documented.
- No PHI is introduced.
- No SQL is introduced.
- No database migration is introduced.
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

## 16. After-Merge Action

After this PR is merged, the next planned documentation step is:

PR #94: docs(im-core): add risk register v0.1

Do not start PR #94 until:

- PR #93 is merged.
- `master` is updated locally.
- The working tree is clean.
- Any local PR body file is removed.
- The traceability matrix exists on `master`.

---

## 17. Status

Documentation-only traceability matrix.

No runtime implementation.

No SQL.

No database migration.

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
