# Core Clinic Workflow Plans V0.1 - OpenEMR IM Core

## AI-Assisted Solo-Owner Applicability

Eligible documentation-stage changes to these plans may use GPT
multidisciplinary boundary review and the Project Owner decision record under
the AI-Assisted Solo-Owner Governance Policy V0.1. Separate specialist-human
approvals are not mandatory internal merge gates.

Clinical or operational use, PHI, runtime implementation, validation, pilot,
deployment, production, or external release remains outside this model and
retains applicable qualified-human and external gates.

## 1. Purpose

This document defines documentation-only core clinic workflow plans for OpenEMR IM Core.

It describes future workflow planning for registration, duplicate-patient awareness, encounter preparation, vital signs review, allergy review, medication review, and Internal Medicine Follow-Up V1 documentation.

This document does not implement runtime workflow automation.

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

This workflow plan covers:

- Registration workflow planning.
- Duplicate-patient awareness planning.
- Encounter preparation workflow planning.
- Vital signs workflow planning.
- Allergy review workflow planning.
- Medication review workflow planning.
- Internal Medicine Follow-Up V1 workflow alignment.
- Documentation handoff expectations.
- Evidence required before runtime implementation.

This document is documentation-only.

---

## 3. Out of Scope

This document does not create or approve:

- Runtime workflow automation.
- Patient-facing workflow automation.
- SQL scripts.
- Database migrations.
- OpenEMR core changes.
- Frontend dashboards.
- FHIR/API implementation.
- Runtime AI.
- Autonomous diagnosis.
- Autonomous treatment recommendation.
- Autonomous prescribing.
- Autonomous emergency triage.
- Clinical validation.
- Production deployment.
- Pilot deployment.
- Commercial deployment.

---

## 4. Current Project Context

| Item | Current status |
|---|---|
| Project | OpenEMR IM Core |
| Base system | Controlled OpenEMR fork |
| Clinical module | Internal Medicine Follow-Up V1 |
| Layout ID | `LBFim_followup_v1` |
| Workflow posture | Documentation-only and evidence-gated |
| Runtime workflow automation | Not implemented |
| SQL execution | Not approved |
| Runtime AI | Not approved |
| Frontend implementation | Not included |
| FHIR/API implementation | Not included |
| OpenEMR core changes | Not included |
| Clinical validation | Not claimed |
| Production readiness | Not claimed |

---

## 5. Core Clinic Workflow Overview

The core clinic workflow is planned as a clinician-supporting process.

High-level future workflow:

1. Patient registration or appointment context is reviewed.
2. Duplicate-patient risk is considered using approved OpenEMR-native workflow.
3. Encounter context is prepared.
4. Vital signs are recorded or reviewed using approved workflow.
5. Allergy status is reviewed where clinically relevant.
6. Medication status is reviewed where clinically relevant.
7. Internal Medicine Follow-Up V1 documentation is completed by the clinician.
8. Assessment and plan are documented by the clinician.
9. Follow-up and safety-net instructions are documented where relevant.
10. Open loops are identified for future follow-up workflow planning.

No step in this workflow may replace clinician judgment.

---

## 6. Registration Workflow Plan

| Step | Planned workflow concept | Owner role | Evidence required before implementation |
|---|---|---|---|
| REG-001 | Confirm patient identity using approved OpenEMR workflow. | Registration / front desk role | Registration workflow review. |
| REG-002 | Confirm appointment or visit context. | Registration / front desk role | Scheduling workflow review. |
| REG-003 | Avoid entering PHI into GitHub, documentation examples, logs, or screenshots. | All roles | No-PHI policy evidence. |
| REG-004 | Confirm encounter creation follows OpenEMR-native practice. | Registration / clinical support role | Encounter workflow evidence. |
| REG-005 | Escalate unclear identity or registration mismatch. | Registration / operations reviewer | Escalation SOP. |

This document does not define production registration procedures.

---

## 7. Duplicate-Patient Awareness Plan

Duplicate-patient risk can affect safety, documentation continuity, medications, allergies, results, billing, and follow-up.

| Step | Planned control | Required boundary |
|---|---|---|
| DUP-001 | Use OpenEMR-native patient search and matching practices where available. | Do not create custom duplicate logic here. |
| DUP-002 | Escalate suspected duplicate records to an authorized reviewer. | Do not merge records without approved procedure. |
| DUP-003 | Document duplicate-patient handling in future SOP. | Do not include real patient examples. |
| DUP-004 | Define evidence required before any duplicate-prevention claim. | Do not claim duplicate prevention is implemented. |

Current status:

Duplicate-patient prevention is not implemented by this document.

---

## 8. Encounter Preparation Workflow Plan

| Step | Planned workflow concept | Owner role | Evidence required |
|---|---|---|---|
| ENC-001 | Confirm correct patient chart. | Clinical support / clinician | Synthetic workflow evidence. |
| ENC-002 | Confirm visit context. | Clinical support / clinician | Encounter context review. |
| ENC-003 | Confirm correct encounter date and type using OpenEMR-native workflow. | Clinical support / clinician | Encounter workflow review. |
| ENC-004 | Confirm Internal Medicine Follow-Up V1 is used only in intended context. | Clinician | Clinical workflow review. |
| ENC-005 | Escalate unclear chart, encounter, or visit context. | Clinician / operations reviewer | Escalation SOP. |

No runtime encounter workflow is implemented by this document.

---

## 9. Vital Signs Workflow Plan

Vital signs review must remain clinician-reviewed.

| Step | Planned workflow concept | Owner role | Safety boundary |
|---|---|---|---|
| VIT-001 | Record or review vitals using approved OpenEMR workflow. | Clinical support / clinician | No autonomous triage. |
| VIT-002 | Clinician reviews relevant vital signs. | Clinician | System does not replace clinician judgment. |
| VIT-003 | Abnormal vitals require documented clinician review workflow before any runtime rule. | Clinician / clinical safety reviewer | No emergency triage automation. |
| VIT-004 | Vitals workflow evidence must use synthetic or sanitized examples only. | Evidence reviewer | No PHI. |
| VIT-005 | Future documentation quality rules may ask whether vitals were reviewed. | Clinician | No autonomous clinical decision support. |

Current status:

Vital signs workflow is planning-only.

---

## 10. Allergy Review Workflow Plan

Allergy review is a safety-sensitive workflow.

| Step | Planned workflow concept | Owner role | Evidence required |
|---|---|---|---|
| ALG-001 | Review allergy status using approved OpenEMR-native workflow. | Clinician / clinical support | Allergy workflow review. |
| ALG-002 | Document allergy uncertainty or missing status where relevant. | Clinician | Clinical documentation review. |
| ALG-003 | Review medication-related allergy relevance before medication decisions. | Clinician | Medication/allergy workflow evidence. |
| ALG-004 | Escalate unclear or conflicting allergy information. | Clinician | Escalation SOP. |
| ALG-005 | No repository example may contain real allergy data. | All roles | No-PHI evidence. |

This document does not approve medication safety clearance.

---

## 11. Medication Review Workflow Plan

Medication review must remain clinician-led.

| Step | Planned workflow concept | Owner role | Safety boundary |
|---|---|---|---|
| MED-001 | Review medication list using approved OpenEMR-native workflow where applicable. | Clinician | No autonomous prescribing. |
| MED-002 | Document medication adherence where clinically relevant. | Clinician | Documentation support only. |
| MED-003 | Document side effects or tolerance where clinically relevant. | Clinician | No autonomous treatment recommendation. |
| MED-004 | Review medication/allergy relationship where clinically relevant. | Clinician | Clinician judgment required. |
| MED-005 | Identify medication-related open loops for future follow-up planning. | Clinician / operations reviewer | No dashboard claim. |
| MED-006 | Require evidence before any medication workflow readiness claim. | Evidence reviewer | Not clinically validated. |

This document does not implement prescribing, medication reconciliation automation, or medication decision support.

---

## 12. Internal Medicine Follow-Up V1 Workflow Alignment

Known clinical groups:

| Group number | Group name | Workflow role |
|---|---|---|
| 1 | Visit Context | Captures reason and continuity context. |
| 2 | Vital Signs Review | Supports clinician review of vitals. |
| 3 | Chronic Conditions Review | Supports chronic disease follow-up documentation. |
| 4 | Medication Review | Supports medication review documentation. |
| 5 | Symptoms Review | Supports symptom review documentation. |
| 6 | Physical Exam Summary | Supports physical exam summary documentation. |
| 7 | Assessment | Captures clinician-authored assessment. |
| 8 | Plan | Captures clinician-authored plan. |
| 9 | Patient Safety and Follow-up | Captures safety-net and follow-up documentation. |

This document does not alter the LBF layout.

---

## 13. Handoff Expectations

Core workflow handoffs must be documented before runtime use.

| Handoff | Expected information | Required evidence |
|---|---|---|
| Registration to clinical support | Patient identity context, appointment context, encounter readiness. | Registration workflow evidence. |
| Clinical support to clinician | Vitals availability, basic visit readiness, known workflow gaps. | Clinical support workflow review. |
| Clinician to follow-up owner | Plan, follow-up timing, pending items, safety-net instructions. | Follow-up workflow evidence. |
| Clinician to operations reviewer | Open loops, unresolved items, escalation needs. | Operating model review. |
| Support to governance reviewer | Any workflow failure, PHI risk, or readiness claim concern. | Governance escalation evidence. |

---

## 14. Evidence Required Before Runtime Implementation

Before any runtime workflow implementation, the project must provide:

- OpenEMR-native workflow review.
- Registration workflow review.
- Encounter workflow review.
- Vital signs workflow review.
- Allergy review workflow review.
- Medication review workflow review.
- Clinical safety review.
- Security and privacy review.
- RBAC review.
- Audit review.
- Backup/restore review.
- No-PHI evidence.
- Synthetic test workflow.
- Reviewer approval.
- Go/no-go decision under governance model.

---

## 15. Risks

| Risk | Impact | Control |
|---|---|---|
| Wrong patient context | Patient safety and documentation risk. | Registration and encounter checks. |
| Duplicate patient records | Fragmented history and follow-up risk. | Duplicate awareness and escalation. |
| Missing allergy review | Medication safety risk. | Allergy review workflow. |
| Medication review incomplete | Medication safety and continuity risk. | Medication review workflow. |
| Abnormal vitals not acknowledged | Clinical safety risk. | Clinician review boundary. |
| Open loops not handed off | Follow-up failure. | Handoff expectations and future follow-up workflow. |
| Workflow automation introduced too early | Unsafe implementation risk. | Documentation-only and evidence-gated boundary. |
| PHI enters evidence | Privacy risk. | No-PHI and synthetic evidence rules. |
| Unsupported readiness claim | Trust and compliance risk. | Claims review and release gates. |

---

## 16. Definition of Done

This document is complete when:

- Registration workflow planning is documented.
- Duplicate-patient awareness planning is documented.
- Encounter preparation workflow planning is documented.
- Vital signs workflow planning is documented.
- Allergy review workflow planning is documented.
- Medication review workflow planning is documented.
- Internal Medicine Follow-Up V1 workflow alignment is documented.
- Handoff expectations are documented.
- Evidence required before runtime implementation is documented.
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

After this PR is merged, the next planned documentation step is PR #89:

docs(im-core): add follow-up open loops and safety-net workflow plans v0.1

Do not start PR #89 until PR #88 is merged and reviewed.

---

## 18. Status

Documentation-only core clinic workflow plans.

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
