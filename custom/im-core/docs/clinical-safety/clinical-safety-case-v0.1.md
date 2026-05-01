# Clinical Safety Case V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines the documentation-stage clinical safety case for OpenEMR IM Core.

The purpose is to summarize the current clinical safety argument, safety assumptions, known hazards, planned controls, evidence references, human-in-the-loop expectations, prohibited clinical uses, and current limitations.

This document supports safety planning only.

This document does not create:

- Runtime clinical safety evidence.
- Runtime verification evidence.
- Clinical validation evidence.
- Regulatory compliance evidence.
- Cybersecurity certification evidence.
- Demo readiness evidence.
- Pilot readiness evidence.
- Production readiness evidence.
- Commercial readiness evidence.
- Medical-device readiness evidence.

Golden rule:

The system must support clinicians.
It must not replace clinicians.

---

## 2. Scope

This clinical safety case covers documentation-stage safety reasoning for OpenEMR IM Core.

It includes:

- Clinical safety assumptions.
- Human-in-the-loop boundaries.
- Prohibited clinical uses.
- Initial safety claims.
- Safety hazards.
- Safety controls.
- Evidence references.
- Traceability references.
- Risk register references.
- Stop-rule references.
- Residual safety concerns.
- Required future evidence before runtime use.

This document references:

- PR #92 Evidence Registry and Evidence Templates V0.1.
- PR #93 Traceability Matrix V0.1.
- PR #94 Risk Register V0.1.
- PR #95 Pull Request Template and Stop Rules V0.1.

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
- CE marking.
- FDA clearance.

---

## 4. Top-Level Documentation-Stage Safety Claim

The current documentation-stage safety claim is:

OpenEMR IM Core is being planned as a documentation-stage, governance-first, evidence-gated, clinician-supporting project.

At the current stage, the project is not intended for clinical use, demo deployment, pilot deployment, production deployment, or commercial deployment.

The system must support clinicians.

The system must not replace clinicians.

This top-level documentation-stage claim is a planning claim only.

It is not clinical validation.

It is not regulatory compliance.

It is not cybersecurity certification.

It is not medical-device readiness.

---

## 5. Clinical Safety Assumptions

The current clinical safety assumptions are:

- The project is documentation-stage only.
- No runtime clinical functionality is implemented.
- No production patient environment is used.
- No PHI is included in repository artifacts.
- No real patient data is used.
- No SQL is executed.
- No database migration is introduced.
- No runtime AI is implemented.
- No predictive model is implemented.
- No autonomous clinical decision support is implemented.
- No autonomous diagnosis is implemented.
- No autonomous treatment recommendation is implemented.
- No autonomous prescribing is implemented.
- No autonomous emergency triage is implemented.
- No patient-facing AI is implemented.
- No automated patient messaging is implemented.
- No FHIR/API implementation is introduced.
- No frontend implementation is introduced.
- No OpenEMR core-sensitive changes are introduced.
- Clinical staff remain responsible for clinical judgment.
- Any future runtime clinical feature would require separate governance, evidence, traceability, risk review, validation planning, training, and release gating.

---

## 6. Human-in-the-Loop Boundary

All clinical workflows, documentation quality review, safety-net review, critical result review, follow-up review, medication-related review, and administrative linkage review must remain human-reviewed.

At the current stage, OpenEMR IM Core must not:

- Make clinical decisions.
- Replace clinician judgment.
- Diagnose.
- Prescribe.
- Recommend final treatment.
- Perform autonomous triage.
- Perform emergency triage automation.
- Communicate autonomously with patients.
- Classify critical results autonomously.
- Close open loops autonomously.
- Determine medical necessity.
- Submit claims autonomously.
- Override clinician judgment.

Any future rule, prompt, checklist, workflow, or support artifact must preserve clinician authority.

---

## 7. Prohibited Clinical Uses

OpenEMR IM Core must not be used for:

- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous treatment recommendation.
- Autonomous emergency triage.
- Autonomous clinical decision support.
- Unsupervised AI output.
- Patient-facing AI.
- Automated patient messaging.
- Automated critical result triage.
- Automated abnormal result classification.
- Automated medication decision support.
- Automated billing decision support that influences clinical documentation.
- Production clinical workflow.
- Real patient care without future approved gates.
- Regulatory or medical-device claims without independent evidence and approval.

These prohibitions apply unless and until future governance, clinical safety review, risk review, validation, security/privacy evidence, training, monitoring, and release gates explicitly approve a new scope.

---

## 8. Initial Safety Hazards

| Hazard ID | Hazard | Related Risk ID | Potential Impact | Current Control | Evidence Reference | Status |
|---|---|---|---|---|---|---|
| HAZ-PHI-001 | PHI or real patient data exposed in repository artifacts. | RISK-PHI-001 | Privacy breach and trust loss. | No-PHI boundary and stop rules. | EVID-SEC-FUTURE-001 | Required future evidence |
| HAZ-AUTO-001 | Clinician replacement or automation bias. | RISK-AUTO-001 | Unsafe reliance on project artifacts. | Human-in-the-loop boundary. | EVID-FM-081 | Open documentation-stage risk |
| HAZ-CDS-001 | Documentation rules interpreted as clinical decision support. | RISK-CDS-001 | Unsafe clinical interpretation. | Documentation-only limitations and clinician review. | EVID-CQ-085 | Open documentation-stage risk |
| HAZ-SQL-001 | Premature SQL or database modification. | RISK-SQL-001 | Data corruption or privacy risk. | SQL remains blocked. | EVID-DATA-084 | Open documentation-stage risk |
| HAZ-RUNTIME-001 | Runtime implementation begins before gates. | RISK-RUNTIME-001 | Unsafe implementation and unsupported readiness claims. | Release gates and stop rules. | EVID-REL-086 | Open documentation-stage risk |
| HAZ-AI-001 | Runtime AI or autonomous CDS introduced before governance and validation. | RISK-AI-001 | Clinical safety, privacy, and compliance risk. | AI remains blocked. | EVID-SAFETY-FUTURE-001 | Required future evidence |
| HAZ-FHIR-001 | FHIR/API integration begins before security/privacy gates. | RISK-FHIR-001 | Data leakage and integration risk. | FHIR/API remains blocked. | EVID-SEC-FUTURE-002 | Required future evidence |
| HAZ-LAB-001 | Critical result workflow lacks human escalation ownership. | RISK-LAB-001 | Patient safety risk. | Human escalation workflow planning. | EVID-WF-090 | Open documentation-stage risk |
| HAZ-FUP-001 | Open-loop or follow-up item is lost. | RISK-FUP-001 | Missed follow-up or safety-net failure. | Follow-up and safety-net workflow planning. | EVID-WF-089 | Open documentation-stage risk |
| HAZ-BILL-001 | Billing or administrative linkage influences clinical documentation. | RISK-BILL-001 | Documentation distortion and trust risk. | Billing boundary and clinician authority. | EVID-WF-091 | Open documentation-stage risk |
| HAZ-CLAIM-001 | Unsupported readiness, validation, compliance, certification, or commercial claim. | RISK-CLAIM-001 | Legal, safety, trust, and governance risk. | Claims boundaries and stop rules. | EVID-REL-086 | Open documentation-stage risk |
| HAZ-HF-001 | Human factors issues such as alert fatigue, automation bias, or cognitive overload. | RISK-HF-001 | Workflow burden or unsafe reliance. | Future human factors planning required. | EVID-HF-FUTURE-001 | Required future evidence |
| HAZ-GOV-001 | Governance ownership unclear for stop-work or escalation. | RISK-GOV-001 | Unsafe merge or delayed correction. | Governance ownership and stop rules. | EVID-GOV-087 | Open documentation-stage risk |

---

## 9. Initial Safety Controls

| Control ID | Control | Related Hazard | Evidence Reference | Current Status | Limitation |
|---|---|---|---|---|---|
| CTRL-HITL-001 | Preserve clinician authority and human review. | HAZ-AUTO-001 | EVID-FM-081 | Documentation-stage control | Not runtime validated. |
| CTRL-HITL-002 | Keep documentation quality rules non-autonomous. | HAZ-CDS-001 | EVID-CQ-085 | Documentation-stage control | No clinical validation claim. |
| CTRL-NOPHI-001 | Prevent PHI and real patient data in repository artifacts. | HAZ-PHI-001 | EVID-SEC-FUTURE-001 | Required future evidence | No runtime privacy audit yet. |
| CTRL-SQL-BLOCK-001 | Block SQL execution and database migration at current stage. | HAZ-SQL-001 | EVID-DATA-084 | Documentation-stage control | No SQL authorization. |
| CTRL-RUNTIME-BLOCK-001 | Block runtime implementation before governance and release gates. | HAZ-RUNTIME-001 | EVID-REL-086 | Documentation-stage control | No runtime verification. |
| CTRL-AI-BLOCK-001 | Block runtime AI, predictive models, and autonomous CDS. | HAZ-AI-001 | EVID-SAFETY-FUTURE-001 | Required future evidence | No AI validation. |
| CTRL-FHIR-BLOCK-001 | Block FHIR/API implementation before privacy/security/data governance. | HAZ-FHIR-001 | EVID-SEC-FUTURE-002 | Required future evidence | No integration evidence. |
| CTRL-ESCALATION-001 | Require human escalation ownership for critical results. | HAZ-LAB-001 | EVID-WF-090 | Documentation-stage control | No runtime workflow automation. |
| CTRL-SAFETYNET-001 | Require owner, status, and closure expectations for follow-up/open loops. | HAZ-FUP-001 | EVID-WF-089 | Documentation-stage control | No automated patient messaging. |
| CTRL-BILLING-BOUNDARY-001 | Keep billing/admin linkage from influencing clinical judgment. | HAZ-BILL-001 | EVID-WF-091 | Documentation-stage control | No claims automation. |
| CTRL-CLAIMS-001 | Prevent unsupported readiness, validation, compliance, certification, or commercial claims. | HAZ-CLAIM-001 | EVID-REL-086 | Documentation-stage control | Requires future claims register. |
| CTRL-STOP-001 | Use PR template and stop rules to block unsafe PR scope. | HAZ-GOV-001 | PR #95 Stop Rules V0.1 / EVID-RISK-FUTURE-001 | Documentation/governance control | Stop rules are governance controls, not runtime clinical controls. |

---

## 10. Safety Argument

The current safety argument is:

1. The project is documentation-stage only.
2. The project explicitly blocks PHI, SQL, runtime implementation, AI, FHIR/API, frontend implementation, and OpenEMR core-sensitive changes.
3. Evidence Registry V0.1 identifies current documentation evidence and required future evidence.
4. Traceability Matrix V0.1 links requirements, risks, controls, tests, evidence, owners, and review status.
5. Risk Register V0.1 identifies safety, privacy, security, governance, documentation, and claims risks.
6. Stop Rules V0.1 convert selected risks into merge-blocking governance controls.
7. Stop rules are treated as governance controls and not as clinical risk controls implemented in runtime.
8. The clinical safety case documents human-in-the-loop expectations, hazards, controls, assumptions, limitations, and future evidence needs.

This safety argument is limited to documentation-stage planning.

It does not demonstrate clinical effectiveness.

It does not demonstrate runtime safety.

It does not demonstrate regulatory compliance.

It does not demonstrate cybersecurity certification.

It does not authorize clinical use.

---

## 11. Evidence References

| Evidence ID | Evidence Artifact | Current Use in Safety Case | Limitation |
|---|---|---|---|
| EVID-FM-081 | Failure Modes and Safe Response Library | Supports safety hazard and safe response planning. | Documentation-stage only. |
| EVID-CQ-085 | Clinical Documentation Quality Rules | Supports boundary that rules are documentation quality planning only. | No autonomous CDS. |
| EVID-REL-086 | Release Readiness Gates | Supports readiness claim controls and runtime blocking. | No readiness claim. |
| EVID-GOV-087 | Governance Ownership Model | Supports ownership and escalation planning. | Governance planning only. |
| EVID-WF-089 | Follow-up, Open Loops, and Safety-Net Workflow Plans | Supports safety-net and follow-up hazard planning. | No automated patient messaging. |
| EVID-WF-090 | Lab Results and Critical Results Workflow Plans | Supports critical result escalation planning. | No emergency triage automation. |
| EVID-WF-091 | Pharmacy, Billing, and Administrative Linkage Plans | Supports billing/admin boundary planning. | No prescribing, billing, or claims automation. |
| EVID-TRACE-FUTURE-001 | Traceability Matrix | Supports traceability of safety requirements and controls. | Documentation-stage only. |
| EVID-RISK-FUTURE-001 | Risk Register | Supports safety risk listing and owner planning. | No validated risk control claim. |
| EVID-SAFETY-FUTURE-001 | Clinical Safety Case | This PR addresses this item at documentation-stage level only. | No clinical validation. |
| EVID-HF-FUTURE-001 | Human Factors Plan | Required future safety evidence. | Not yet created. |
| EVID-SEC-FUTURE-001 | Security / Privacy Evidence | Required future privacy/security evidence. | Not yet created. |

---

## 12. Relationship to PR #92

PR #92 created the Evidence Registry and Evidence Templates V0.1.

This clinical safety case references evidence IDs from PR #92.

This PR addresses `EVID-SAFETY-FUTURE-001` at documentation-stage level only.

It does not create runtime clinical safety evidence, clinical validation evidence, regulatory compliance evidence, cybersecurity certification evidence, demo readiness evidence, pilot readiness evidence, production readiness evidence, or commercial readiness evidence.

This clinical safety case does not replace the evidence registry.

---

## 13. Relationship to PR #93

PR #93 created the Traceability Matrix V0.1.

This clinical safety case depends on the traceability matrix to keep safety claims, hazards, controls, evidence, and owner responsibilities traceable.

This clinical safety case does not replace the traceability matrix.

It does not convert documentation-stage traceability into runtime verification or validation.

---

## 14. Relationship to PR #94

PR #94 created the Risk Register V0.1.

This clinical safety case references selected risks from the risk register and groups them into clinical safety hazards and controls.

This clinical safety case does not replace the risk register.

It does not prove that listed risk controls are implemented, clinically validated, regulatory compliant, cybersecurity certified, or production-ready.

---

## 15. Relationship to PR #95

PR #95 created the Pull Request Template and Stop Rules V0.1.

This clinical safety case depends on stop rules as governance controls to prevent unsafe PRs from being merged.

Stop rules are treated as governance controls and not as clinical risk controls implemented in runtime.

This clinical safety case does not replace stop rules.

It does not convert governance stop rules into runtime safety validation.

---

## 16. Required Future Evidence

Before any future runtime, demo, pilot, production, clinical, or commercial claim, the project would require future evidence such as:

- Human factors and usability risk plan.
- Security and privacy evidence.
- RBAC matrix.
- Audit evidence template and review evidence.
- Backup and restore evidence.
- Non-production reproducible install plan.
- Synthetic demo data plan.
- Training package.
- Support and escalation model.
- Incident response process.
- Clinical safety review checklist.
- Runtime verification evidence, if runtime scope is ever approved.
- Validation planning, if clinical claims are ever proposed.
- Claims register and claims review process.

These future evidence items do not authorize runtime implementation by themselves.

---

## 17. Safety Review Rules

Clinical safety case entries must be reviewed for:

- Clear human-in-the-loop boundary.
- Clear prohibited clinical uses.
- Clear safety assumptions.
- Clear hazards.
- Clear controls.
- Correct evidence references.
- Correct risk references.
- Correct traceability relationship.
- Correct stop-rule relationship.
- Clear limitations.
- No PHI.
- No SQL authorization.
- No runtime authorization.
- No AI authorization.
- No FHIR/API authorization.
- No frontend authorization.
- No OpenEMR core-sensitive authorization.
- No unsupported readiness, validation, compliance, certification, or commercial claim.

Any future clinical safety claim stronger than documentation-stage planning requires new evidence, traceability update, risk update, safety review, and release gate approval.

---

## 18. Risks of the Clinical Safety Case

| Risk | Impact | Control |
|---|---|---|
| Safety case is mistaken for clinical validation | Unsupported validation or readiness claim. | Explicit limitations and status statements. |
| Safety controls are mistaken for implemented runtime controls | Unsafe release decision. | Documentation-stage limitation language. |
| Hazards become stale | Poor safety oversight. | Maintenance through future PRs. |
| Evidence references become outdated | Weak traceability. | Relationship to evidence registry and traceability matrix. |
| Human-in-the-loop boundary becomes diluted | Automation bias or unsafe reliance. | Stop rules and clinical safety review. |
| Claims are overstated externally | Legal, trust, and safety risk. | Claims boundary and required future claims review. |

---

## 19. Definition of Done

This document is complete when:

- Purpose is defined.
- Scope is defined.
- Out of scope is defined.
- Top-level documentation-stage safety claim is defined.
- Clinical safety assumptions are defined.
- Human-in-the-loop boundary is defined.
- Prohibited clinical uses are defined.
- Initial safety hazards are listed.
- Initial safety controls are listed.
- Safety argument is documented.
- Evidence references are documented.
- Relationship to PR #92 is documented.
- Relationship to PR #93 is documented.
- Relationship to PR #94 is documented.
- Relationship to PR #95 is documented.
- Required future evidence is documented.
- Safety review rules are documented.
- Risks of the clinical safety case are documented.
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

## 20. After-Merge Action

After this PR is merged, the next planned documentation step is:

PR #97: docs(im-core): add human factors and usability risk plan v0.1

Do not start PR #97 until:

- PR #96 is merged.
- `master` is updated locally.
- Working tree is clean.
- `pr96_body.md` is removed locally.
- Clinical safety case exists on `master`.

---

## 21. Status

Documentation-stage clinical safety case.

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
