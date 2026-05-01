# SOP Framework V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines a documentation-only Standard Operating Procedure framework for OpenEMR IM Core.

It provides a controlled structure for future SOPs related to Internal Medicine clinic workflows, documentation quality, patient status handling, open loops, safety-net follow-up, privacy, access control, support, incident handling, and operational review.

This document does not implement runtime workflows.

This document does not authorize:

- PHI.
- Real patient data.
- Credentials.
- Secrets.
- Sensitive logs.
- Database dumps.
- SQL.
- SQL execution.
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

This SOP framework applies to future documentation for:

- Patient registration and identity review.
- Duplicate patient prevention.
- Encounter preparation.
- Internal Medicine Follow-Up V1 documentation.
- Vital signs review.
- Medication review.
- Allergy review.
- Chronic condition follow-up.
- Symptom review.
- Physical exam documentation.
- Assessment and plan documentation.
- Patient safety and follow-up.
- Open-loop handling.
- Pending result handling.
- Referral follow-up.
- No-show and delayed follow-up handling.
- Documentation quality review.
- Role-based access expectations.
- Audit expectations.
- Backup and restore expectations.
- Incident reporting.
- Support escalation.
- Training and onboarding.

This framework is documentation-only.

---

## 3. Out of Scope

This framework does not create:

- Runtime workflow automation.
- SQL scripts.
- Database migrations.
- Clinical decision automation.
- Patient messaging automation.
- Frontend dashboards.
- FHIR/API implementation.
- Production SOP approval.
- Legal approval.
- Regulatory approval.
- Cybersecurity certification.
- Clinical validation.

---

## 4. SOP Categories

| SOP category | Purpose | Required before implementation? |
|---|---|---|
| Registration SOP | Defines safe patient identity and registration workflow. | Yes. |
| Duplicate Prevention SOP | Defines how staff should reduce duplicate patient records. | Yes. |
| Encounter Documentation SOP | Defines expected encounter documentation workflow. | Yes. |
| Internal Medicine Follow-Up SOP | Defines use expectations for Internal Medicine Follow-Up V1. | Yes. |
| Medication Review SOP | Defines medication review documentation responsibilities. | Yes. |
| Allergy Review SOP | Defines allergy status review expectations. | Yes. |
| Vital Signs SOP | Defines capture, review, and clinician acknowledgement expectations. | Yes. |
| Open Loops SOP | Defines owner, timing, status, and closure expectations. | Yes. |
| Pending Results SOP | Defines pending result review and responsibility expectations. | Yes. |
| Referral Follow-up SOP | Defines referral tracking and responsibility expectations. | Yes. |
| No-show SOP | Defines no-show review and follow-up boundaries. | Yes. |
| Safety-net SOP | Defines return precautions, follow-up, and patient instruction expectations. | Yes. |
| Documentation Quality SOP | Defines review and correction expectations. | Yes. |
| RBAC SOP | Defines role-based access and least privilege expectations. | Yes. |
| Audit Review SOP | Defines audit review expectations and evidence boundaries. | Yes. |
| Backup and Restore SOP | Defines operational backup/restore expectations. | Yes. |
| Incident Response SOP | Defines issue reporting, escalation, and safe response. | Yes. |
| Support SOP | Defines support routing, severity, and escalation. | Yes. |
| Training SOP | Defines onboarding and competency documentation. | Yes. |

---

## 5. Required SOP Template

Every future SOP should include:

| Section | Required content |
|---|---|
| Title | SOP name and version. |
| Purpose | Why the SOP exists. |
| Scope | What workflow or process it covers. |
| Out of Scope | What it does not authorize. |
| Roles | Responsible roles and boundaries. |
| Preconditions | Required setup or evidence before use. |
| Procedure | Step-by-step workflow. |
| Safety boundaries | Non-automation and clinician-review limits. |
| Privacy boundaries | No-PHI and access restrictions. |
| Evidence | Required screenshots, logs, checklists, or review records. |
| Exceptions | How exceptions are handled. |
| Escalation | Who is notified when unsafe or unclear conditions appear. |
| Audit notes | What must be documented and by whom. |
| Definition of Done | Completion criteria. |
| Review cadence | When the SOP must be reviewed. |

---

## 6. Role and Responsibility Boundary

| Role | SOP responsibility | Boundary |
|---|---|---|
| Reception / Front Desk | Follow registration, appointment, and identity workflow SOPs. | No clinical triage or diagnosis. |
| Nurse / Medical Assistant | Follow vitals, preparation, medication support, and safety-net support SOPs. | No independent diagnosis or prescribing. |
| Clinician | Own clinical assessment, plan, follow-up, and final review. | Clinical judgment must not be replaced. |
| Clinical Reviewer | Review documentation quality and safety-boundary adherence. | Cannot create unsupported validation claims. |
| Administrator | Maintain operational readiness, staffing workflow, and documentation control. | Cannot approve clinical safety without qualified review. |
| IT / Support | Support system availability, access, and issue handling. | No unauthorized PHI access. |
| Governance Reviewer | Review boundaries, claims, evidence, and readiness gates. | No unsupported compliance or certification claims. |

---

## 7. SOP Safety Rules

All future SOPs must preserve:

1. Clinician-reviewed care.
2. Human accountability for clinical judgment.
3. No autonomous diagnosis.
4. No autonomous treatment recommendation.
5. No autonomous prescribing.
6. No autonomous emergency triage.
7. No autonomous clinical decision support.
8. No runtime AI without governance and validation.
9. No SQL execution unless explicitly approved after safety gates.
10. No OpenEMR core-sensitive changes unless justified and reviewed.
11. No production, demo, pilot, or commercial readiness claim without evidence.
12. No clinical validation, regulatory compliance, or cybersecurity certification claim without formal evidence.

---

## 8. SOP Evidence Requirements

Future SOPs should define evidence requirements for:

- Workflow review.
- Role-based review.
- Clinician review.
- Privacy review.
- RBAC review.
- Audit review.
- Backup/restore review.
- Failure modes review.
- Training completion.
- Support escalation review.
- Incident response review.
- Documentation quality review.
- Clean-install or reproducibility review, if applicable.

Evidence must not contain PHI, credentials, sensitive logs, or database dumps.

---

## 9. Priority SOP Roadmap

| Priority | SOP | Reason |
|---|---|---|
| Foundation | No-PHI Development SOP | Prevents unsafe repository content. |
| Foundation | Registration and Identity SOP | Reduces identity and workflow risk. |
| Foundation | Encounter Documentation SOP | Supports consistent clinical documentation. |
| Foundation | Internal Medicine Follow-Up V1 SOP | Defines safe use of the current clinical module. |
| Foundation | Medication and Allergy Review SOP | Reduces clinical documentation gaps. |
| Foundation | Open Loops and Pending Results SOP | Supports safety-net planning. |
| Foundation | RBAC and Audit SOP | Supports privacy and accountability. |
| Foundation | Incident Response SOP | Supports safe response to issues. |
| Near-term | Training SOP | Supports onboarding and consistent use. |
| Near-term | Support SOP | Supports operational continuity. |
| Near-term | Backup and Restore SOP | Supports operational resilience. |
| Deferred | Commercial Support SOP | Requires legal, privacy, security, and operational review. |
| Deferred | AI-Assisted Documentation SOP | Requires governance, validation, bias, monitoring, and human review boundaries. |
| Deferred | FHIR/API SOP | Requires interoperability design, authentication, authorization, mapping, and testing evidence. |

---

## 10. Required Review Before Real Use

Before any SOP is used in real care settings, it must undergo:

- Clinical review.
- Operational review.
- Privacy review.
- Security review.
- Legal or regulatory review where applicable.
- Training review.
- Evidence review.
- Governance approval.

This framework does not approve real-world clinical use.

---

## 11. Definition of Done

This framework is complete when:

- SOP categories are defined.
- SOP template requirements are defined.
- Role and responsibility boundaries are defined.
- SOP safety rules are defined.
- SOP evidence requirements are defined.
- Priority SOP roadmap is documented.
- No runtime implementation is introduced.
- No SQL is introduced.
- No runtime AI is introduced.
- No frontend or FHIR/API implementation is introduced.
- No PHI, credentials, sensitive logs, or database dumps are included.
- No OpenEMR core-sensitive files are modified.
- No unsupported readiness, validation, compliance, certification, or commercial claims are introduced.

---

## 12. After-Merge Action

After this PR is merged, the next planned documentation step is PR #84:

docs(im-core): add data model starter and OpenEMR mapping v0.1

Do not start PR #84 until PR #83 is merged and reviewed.

---

## 13. Status

Documentation-only SOP framework.

No runtime implementation.
No SQL.
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
