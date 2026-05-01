# Human Factors and Usability Risk Plan V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines the documentation-stage human factors and usability risk plan for OpenEMR IM Core.

The purpose is to identify and control human-use risks before any future runtime implementation, clinical intelligence workflow, prompt design, alert design, user interface design, or human-in-the-loop workflow is proposed.

This document supports planning only.

This document does not create:

- Runtime usability evidence.
- Human factors validation evidence.
- Clinical validation evidence.
- Regulatory compliance evidence.
- Cybersecurity certification evidence.
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
| Document | Human Factors and Usability Risk Plan V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage only |
| Version | v0.1 |
| Owner Role | Clinical Safety Owner / Human Factors Reviewer |
| Reviewer Roles | Documentation Owner, Clinical Safety Owner, Operations Owner, Technical Owner, Privacy/Security Owner, Release Owner |
| Review Status | Draft documentation artifact |
| Runtime Status | No runtime implementation |
| Clinical Use Status | Not for clinical use |

This document is a planning artifact only.

This document is not a usability validation report.

This document is not a human factors validation report for a deployed system.

---

## 3. Scope

This document covers documentation-stage human factors and usability risks for OpenEMR IM Core.

The current scope is limited to planning for adult, stable, outpatient Internal Medicine follow-up workflows in a non-emergency clinic setting.

This document considers human-use risks related to:

- Clinician review.
- Documentation workflow.
- Future prompts.
- Future alerts.
- Future rules.
- Future open-loop review.
- Future critical result review.
- Future documentation quality review.
- Future false-positive handling.
- Future not-useful prompt feedback.
- Future safety-net workflow support.

This document references:

- PR #92 Evidence Registry and Evidence Templates V0.1.
- PR #93 Traceability Matrix V0.1.
- PR #94 Risk Register V0.1.
- PR #95 Pull Request Template and Stop Rules V0.1.
- PR #96 Clinical Safety Case V0.1.

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

## 5. Relationship to PR #96 Clinical Safety Case

PR #96 created the Clinical Safety Case V0.1.

This human factors plan builds on the following clinical safety case concepts:

- Human-in-the-loop boundary.
- Current clinical scope boundary.
- Safety red lines.
- High-risk clinical scenarios.
- False-positive and not-useful prompt policy.
- Data boundary for future rules.
- Prohibited clinical uses.
- Documentation-stage limitations.
- Required future evidence.

This document does not replace the Clinical Safety Case.

This document does not convert the Clinical Safety Case into runtime validation, clinical validation, usability validation, regulatory compliance, cybersecurity certification, demo readiness, pilot readiness, or production readiness.

---

## 6. Human Factors Principles

The human factors principles for OpenEMR IM Core are:

1. Clinicians remain the final decision-makers.
2. The system must support clinicians and must not replace clinicians.
3. Future prompts, alerts, or rules must be understandable to clinicians.
4. Future prompts must not interrupt critical clinical work unnecessarily.
5. Absence of a prompt must not be interpreted as clinical clearance.
6. Future prompts must not create false reassurance.
7. Future prompts must not create automation bias.
8. Future prompts must not encourage documentation distortion.
9. Future critical safety prompts should require documented clinician rationale if dismissed.
10. Future prompt design should account for workload, time pressure, fatigue, interruptions, and clinic flow.
11. Any future feedback mechanism must avoid PHI collection at the current stage.
12. Future rules, if approved, should start with structured OpenEMR-native / LBF data elements only.
13. Free-text NLP, external data, FHIR/API, image interpretation, ECG interpretation, predictive analytics, and autonomous AI remain out of scope.

---

## 7. Intended Users and Human Roles

| Role | Future Human Factors Concern | Current Planning Boundary |
|---|---|---|
| Clinician | Alert fatigue, automation bias, documentation burden, conflicting prompts | Clinician remains final decision-maker. |
| Nurse / Medical Assistant | Workflow interruption, unclear task ownership, escalation ambiguity | Support role only; no autonomous clinical decision-making. |
| Front Desk / Registration | Duplicate patient handling, administrative overload | No clinical decision authority. |
| Billing / Administrative Staff | Billing pressure influencing clinical documentation | Billing must not influence clinical judgment. |
| Privacy/Security Reviewer | PHI exposure, screenshots, logs, access review | No PHI or real patient data in GitHub. |
| Technical Reviewer | Unsafe runtime assumptions, core-sensitive changes | Runtime remains blocked. |
| Clinical Safety Owner | Safety boundary drift and unsafe clinical wording | May block unsafe scope. |
| Release Owner | Unsupported readiness claims | No demo, pilot, production, or commercial readiness claims. |

---

## 8. Initial Human Factors and Usability Risks

| HF Risk ID | Human Factors Risk | Related Risk ID | Cause | Potential Impact | Current Control | Evidence Reference | Status | Limitation |
|---|---|---|---|---|---|---|---|---|
| HF-001 | Alert fatigue | RISK-HF-001 | Too many future prompts or low-value alerts | Clinicians may ignore important prompts | Future prompt prioritization and severity review | EVID-HF-FUTURE-001 | Documentation-stage planning | No runtime usability validation. |
| HF-002 | Automation bias | RISK-AUTO-001 | Clinicians may overtrust future system prompts | Unsafe reliance on unvalidated rules | Human-in-the-loop boundary | EVID-SAFETY-FUTURE-001 | Documentation-stage planning | No clinical validation. |
| HF-003 | False reassurance | RISK-CDS-001 | Absence of a prompt may be interpreted as absence of risk | Missed clinical concern | Explicit limitation language | EVID-CQ-085 | Documentation-stage planning | No runtime behavior exists. |
| HF-004 | Cognitive overload | RISK-HF-001 | Excessive prompts, fields, or workflow steps | Lower documentation quality or clinician fatigue | Future workflow burden review | EVID-HF-FUTURE-001 | Required future evidence | No usability testing. |
| HF-005 | Workflow interruption | RISK-OPS-001 | Prompt timing may interrupt clinical flow | Delayed care or poor adoption | Future timing and placement review | EVID-OPS-082 | Documentation-stage planning | No UI design yet. |
| HF-006 | Ambiguous responsibility | RISK-GOV-001 | Unclear owner for prompt review or escalation | Missed follow-up or delayed action | Governance owner and workflow owner planning | EVID-GOV-087 | Documentation-stage planning | No runtime workflow. |
| HF-007 | Critical prompt dismissal without rationale | RISK-LAB-001 | Future safety prompt could be dismissed too easily | Missed critical action | Future documented clinician rationale requirement | EVID-WF-090 | Documentation-stage planning | No runtime prompt. |
| HF-008 | Open-loop ownership confusion | RISK-FUP-001 | Future tracking may lack clear owner | Lost follow-up | Safety-net workflow planning | EVID-WF-089 | Documentation-stage planning | No automated tracking. |
| HF-009 | Documentation burden | RISK-DOC-001 | Too many structured fields or prompts | Lower-quality notes, clinician frustration | Future burden review | EVID-CQ-085 | Documentation-stage planning | No live workflow evaluation. |
| HF-010 | Misinterpretation of documentation support as CDS | RISK-CDS-001 | Rule wording may sound like medical advice | Unsafe clinical interpretation | Documentation-only wording and stop rules | PR #95 Stop Rules V0.1 | Documentation-stage governance | No runtime CDS. |
| HF-011 | Billing influence on clinical documentation | RISK-BILL-001 | Administrative linkage may bias wording | Documentation distortion | Billing boundary planning | EVID-WF-091 | Documentation-stage planning | No billing automation. |
| HF-012 | Prompt conflict with clinician judgment | RISK-SAF-001 | Future prompt may contradict clinical context | Confusion or unsafe reliance | Clinician authority and documented rationale | EVID-SAFETY-FUTURE-001 | Documentation-stage planning | No runtime prompts. |
| HF-013 | Poor explainability | RISK-EVID-001 | Future prompt lacks clear rationale | Clinician distrust or misuse | Future explainability requirement | EVID-TRACE-FUTURE-001 | Documentation-stage planning | No explainability implementation. |
| HF-014 | Unsafe localization or ambiguous language | RISK-HF-001 | Future translations or labels may alter meaning | Misinterpretation | Future language review required | EVID-HF-FUTURE-001 | Required future evidence | No localization work now. |
| HF-015 | Feedback mechanism collects PHI | RISK-PHI-001 | Future false-positive feedback may include real patient data | Privacy breach | No-PHI rule and future data governance | EVID-SEC-FUTURE-001 | Required future evidence | No feedback implementation. |
| HF-016 | Hidden workflow dependency | RISK-TRACE-001 | Future workflow depends on undocumented assumptions | Poor auditability | Traceability matrix and risk register references | EVID-TRACE-FUTURE-001 | Documentation-stage planning | Traceability must be maintained. |

---

## 9. Usability Safety Controls

| Control ID | Control | Related HF Risk | Evidence Reference | Current Status | Limitation |
|---|---|---|---|---|---|
| CTRL-HF-001 | Future prompts should be prioritized by safety relevance. | HF-001 | EVID-HF-FUTURE-001 | Planning control | No runtime design. |
| CTRL-HF-002 | Future prompts should be explainable to a non-technical clinician. | HF-013 | EVID-TRACE-FUTURE-001 | Planning control | No explainability implementation. |
| CTRL-HF-003 | Future critical safety prompt dismissal should require documented clinician rationale. | HF-007 | EVID-SAFETY-FUTURE-001 | Planning control | No runtime prompt. |
| CTRL-HF-004 | Future prompt burden should be reviewed before implementation. | HF-004 | EVID-HF-FUTURE-001 | Planning control | No usability validation. |
| CTRL-HF-005 | Future workflow timing should align with outpatient IM clinic flow. | HF-005 | EVID-OPS-082 | Planning control | No UI design. |
| CTRL-HF-006 | Clinician authority must remain explicit. | HF-002 | EVID-SAFETY-FUTURE-001 | Documentation-stage control | No clinical validation. |
| CTRL-HF-007 | Absence of prompt must not imply clinical clearance. | HF-003 | EVID-CQ-085 | Documentation-stage control | No runtime behavior. |
| CTRL-HF-008 | Future feedback mechanisms must avoid PHI collection. | HF-015 | EVID-SEC-FUTURE-001 | Required future evidence | No feedback implementation. |
| CTRL-HF-009 | Future labels and translations must preserve clinical meaning. | HF-014 | EVID-HF-FUTURE-001 | Required future evidence | No localization work. |
| CTRL-HF-010 | Future prompt rules should use structured OpenEMR-native / LBF data first. | HF-013 | EVID-DATA-084 | Planning control | No runtime rules. |

---

## 10. Future Prompt Design Constraints

Any future prompt, rule, checklist, or alert must follow these constraints before runtime consideration:

- Must be clinician-reviewed.
- Must be explainable.
- Must show source or rationale where possible.
- Must not diagnose.
- Must not prescribe.
- Must not recommend final treatment.
- Must not perform emergency triage.
- Must not close open loops autonomously.
- Must not classify critical results autonomously.
- Must not send patient messages autonomously.
- Must not collect PHI in feedback artifacts committed to GitHub.
- Must not imply that absence of prompt equals clinical safety.
- Must not interrupt workflow without safety justification.
- Must allow documented clinician rationale for future high-risk prompt override.
- Must remain traceable to requirement, risk, control, test, and evidence IDs.

At the current stage, these are documentation-stage constraints only.

No future prompt, rule, checklist, or alert is implemented by this document.

---

## 11. Future False-Positive and Not-Useful Prompt Handling

The Clinical Safety Case V0.1 introduced a future false-positive and not-useful prompt policy.

This document expands that policy at a planning level only.

A future design should allow a responsible clinician to mark a prompt as:

- Not useful.
- False positive.
- Not applicable.
- Requires wording revision.
- Requires escalation rule review.

Any future feedback should include:

- Clinician role.
- Timestamp.
- Prompt ID.
- Reason category.
- Optional rationale.

At the current stage:

- No PHI may be collected.
- No real patient data may be collected.
- No runtime feedback mechanism is implemented.
- No audit trail implementation is created.
- No clinical validation evidence is created.

Detailed workflow design is deferred until after human factors review and future runtime governance.

---

## 12. Future Critical Prompt Override Boundary

Future safety-related prompts, if approved, should not be dismissible without documented clinician rationale.

This applies especially to future prompts related to:

- Critical result review.
- Significant abnormal result review.
- Safety-net follow-up.
- Open-loop closure.
- Medication-related documentation concerns.
- Red flag documentation concerns.

At the current stage:

- No critical prompt exists.
- No runtime alert exists.
- No override mechanism exists.
- No audit trail implementation exists.
- No clinical validation is claimed.

This section defines a planning boundary only.

---

## 13. Data Boundary for Human Factors Work

Human factors documentation must not include:

- PHI.
- Real patient data.
- Real clinical screenshots.
- Real visit notes.
- Real lab reports.
- Real medication lists.
- Real identifiers.
- Sensitive logs.
- Database dumps.

Future usability examples, if needed, must use synthetic examples only.

Future rules, if approved, should first be limited to structured OpenEMR-native / LBF data elements.

The following remain out of scope:

- Free-text NLP.
- External data.
- FHIR/API integration.
- Image interpretation.
- ECG or waveform interpretation.
- Predictive analytics.
- Autonomous AI.

---

## 14. Relationship to PR #92

PR #92 created the Evidence Registry and Evidence Templates V0.1.

This human factors plan references evidence IDs from PR #92.

This PR addresses EVID-HF-FUTURE-001 at documentation-stage level only.

It does not create runtime usability evidence, human factors validation evidence, clinical validation evidence, regulatory compliance evidence, cybersecurity certification evidence, demo readiness evidence, pilot readiness evidence, production readiness evidence, or commercial readiness evidence.

This human factors plan does not replace the evidence registry.

---

## 15. Relationship to PR #93

PR #93 created the Traceability Matrix V0.1.

This human factors plan depends on traceability to keep human factors risks, controls, evidence references, and owner responsibilities traceable.

This human factors plan does not replace the traceability matrix.

It does not convert documentation-stage traceability into runtime verification, usability validation, or clinical validation.

---

## 16. Relationship to PR #94

PR #94 created the Risk Register V0.1.

This human factors plan references selected risks from the risk register and expands the human-use dimension of those risks.

This human factors plan does not replace the risk register.

It does not prove that listed controls are implemented, clinically validated, usability validated, regulatory compliant, cybersecurity certified, or production-ready.

---

## 17. Relationship to PR #95

PR #95 created the Pull Request Template and Stop Rules V0.1.

This human factors plan depends on stop rules as governance controls to prevent unsafe PRs from being merged.

Stop rules are governance controls and not runtime clinical controls.

This human factors plan does not replace stop rules.

It does not convert governance stop rules into runtime usability validation.

---

## 18. Relationship to PR #96

PR #96 created the Clinical Safety Case V0.1.

This human factors plan builds on PR #96 by analyzing human-use risks associated with:

- Human-in-the-loop boundary.
- Safety red lines.
- Future prompts and alerts.
- High-risk clinical scenarios.
- False-positive handling.
- Data boundary for future rules.

This human factors plan does not replace the Clinical Safety Case.

It does not create clinical validation or usability validation.

---

## 19. Required Future Evidence

Before any future runtime, demo, pilot, production, clinical, or commercial claim, the project would require future evidence such as:

- Formal human factors review.
- Usability risk analysis.
- Simulated workflow review using synthetic scenarios.
- Clinician review of prompt wording.
- Review of alert frequency and severity.
- Review of prompt timing in clinic workflow.
- Review of critical prompt override rules.
- Review of false-positive and not-useful prompt handling.
- Security/privacy evidence.
- RBAC matrix.
- Audit evidence template and review evidence.
- Data governance.
- OpenEMR Integration Boundary Map.
- ADR Baseline.
- Non-production reproducible install plan.
- Synthetic demo data plan.
- Training package.
- Support and escalation model.
- Gate review package.

These future evidence items do not authorize runtime implementation by themselves.

---

## 20. Human Factors Review Rules

Human factors artifacts must be reviewed for:

- Clear clinician authority.
- Clear human-in-the-loop boundary.
- Clear warning against automation bias.
- Clear warning against alert fatigue.
- Clear warning against false reassurance.
- Clear critical prompt override boundary.
- Clear false-positive handling boundary.
- Clear no-PHI boundary.
- Clear data boundary.
- Clear relationship to Clinical Safety Case.
- Clear relationship to Risk Register.
- Clear relationship to Traceability Matrix.
- No PHI.
- No SQL authorization.
- No runtime authorization.
- No AI authorization.
- No FHIR/API authorization.
- No frontend authorization.
- No OpenEMR core-sensitive authorization.
- No unsupported readiness, validation, compliance, certification, or commercial claim.

Any future human factors claim stronger than documentation-stage planning requires new evidence, traceability update, risk update, clinical safety review, and release gate approval.

---

## 21. Risks of the Human Factors Plan

| Risk | Impact | Control |
|---|---|---|
| Human factors plan is mistaken for usability validation | Unsupported validation or readiness claim | Explicit limitations and status statements. |
| Future prompts are designed before understanding human workload | Alert fatigue or workflow interruption | Human factors review before workflow design. |
| Clinician authority is diluted | Automation bias or unsafe reliance | Human-in-the-loop boundary. |
| False-positive feedback collects PHI | Privacy breach | No-PHI boundary and future data governance. |
| Critical prompt override is too easy | Missed safety action | Future documented rationale requirement. |
| Prompt absence is misread as safety clearance | False reassurance | Explicit limitation language. |
| Billing or administrative prompts distort clinical documentation | Trust and documentation risk | Billing boundary from workflow planning. |
| Human factors evidence becomes stale | Poor design governance | Maintenance rules and review cadence. |

---

## 22. Definition of Done

This document is complete when:

- Purpose is defined.
- Document status and identity are defined.
- Scope is defined.
- Out of scope is defined.
- Relationship to Clinical Safety Case is documented.
- Human factors principles are defined.
- Intended users and human roles are listed.
- Initial human factors and usability risks are listed.
- Usability safety controls are listed.
- Future prompt design constraints are defined.
- Future false-positive and not-useful prompt handling is defined.
- Future critical prompt override boundary is defined.
- Data boundary for human factors work is defined.
- Relationship to PR #92 is documented.
- Relationship to PR #93 is documented.
- Relationship to PR #94 is documented.
- Relationship to PR #95 is documented.
- Relationship to PR #96 is documented.
- Required future evidence is documented.
- Human factors review rules are documented.
- Risks of the human factors plan are documented.
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

## 23. After-Merge Action

After this PR is merged, the next planned documentation step is:

PR #98: docs(im-core): add security privacy rbac audit backup gap refinement v0.1

Do not start PR #98 until:

- PR #97 is merged.
- `master` is updated locally.
- Working tree is clean.
- `pr97_body.md` is removed locally.
- Human factors and usability risk plan exists on `master`.

---

## 24. Status

Documentation-stage human factors and usability risk plan.

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

Not usability validated.

Not human factors validated.

Not clinically validated.

Not regulatory compliant.

Not cybersecurity certified.

Not demo-ready.

Not pilot-ready.

Not production-ready.

Not commercially deployment-ready.
