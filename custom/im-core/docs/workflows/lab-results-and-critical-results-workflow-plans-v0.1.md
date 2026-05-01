# Lab Results and Critical Results Workflow Plans V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines documentation-only workflow plans for lab results, pending results, abnormal results, critical results, result ownership, escalation, follow-up, and closure evidence in OpenEMR IM Core.

It supports future Internal Medicine clinic workflow planning while preserving clinician authority and evidence-gated implementation.

This document does not implement runtime lab result workflow automation.

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

Golden rule:

The system must support clinicians.
It must not replace clinicians.

---

## 2. Scope

This workflow plan covers:

- Lab result workflow planning.
- Pending result awareness planning.
- Abnormal result review planning.
- Critical result escalation planning.
- Result ownership planning.
- Result follow-up planning.
- Result closure evidence planning.
- Evidence required before runtime implementation.

This document is documentation-only.

---

## 3. Out of Scope

This document does not create or approve:

- Runtime lab result automation.
- Automated abnormal result classification.
- Automated critical result triage.
- Automated patient outreach.
- Automated patient messaging.
- Autonomous clinical decision support.
- Autonomous diagnosis.
- Autonomous treatment recommendation.
- Autonomous prescribing.
- Emergency triage automation.
- Runtime AI.
- SQL scripts.
- Database migrations.
- Frontend dashboards.
- FHIR/API implementation.
- OpenEMR core changes.
- Demo deployment.
- Pilot deployment.
- Production deployment.
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
| Runtime result automation | Not implemented |
| SQL execution | Not approved |
| Runtime AI | Not approved |
| Patient messaging automation | Not included |
| Frontend implementation | Not included |
| FHIR/API implementation | Not included |
| OpenEMR core changes | Not included |
| Clinical validation | Not claimed |
| Production readiness | Not claimed |

---

## 5. Result Workflow Overview

Lab result workflow planning must ensure that results are documented, reviewed, owned, acted on when needed, escalated when needed, and closed with evidence.

High-level future workflow:

1. Result is received or identified through approved OpenEMR-native workflow.
2. Result status is reviewed.
3. Responsible reviewer or role is identified.
4. Result is categorized by clinician-reviewed workflow where applicable.
5. Abnormal or concerning results are reviewed by a clinician.
6. Critical results follow an approved escalation process.
7. Follow-up actions are documented.
8. Closure evidence is documented.
9. Unresolved results remain open until reviewed or escalated.

No step may replace clinician judgment.

---

## 6. Pending Result Workflow Plan

| Step | Planned workflow concept | Owner role | Evidence required before implementation |
|---|---|---|---|
| RES-001 | Identify pending result item. | Clinical support / operations role | Pending result workflow review. |
| RES-002 | Assign responsible reviewer or role. | Operations role / clinician | Ownership evidence. |
| RES-003 | Document expected review timing. | Clinician / operations role | Follow-up SOP evidence. |
| RES-004 | Track unresolved status through approved future workflow. | Follow-up owner | No runtime tracking claim. |
| RES-005 | Escalate overdue or unclear pending results. | Follow-up owner / clinician | Escalation SOP. |
| RES-006 | Document closure evidence when result is reviewed or resolved. | Clinician / follow-up owner | Closure evidence template. |

Current status:

Pending result tracking is planning-only.

---

## 7. Abnormal Result Review Plan

Abnormal result review must remain clinician-led.

| Step | Planned workflow concept | Owner role | Safety boundary |
|---|---|---|---|
| ABN-001 | Identify abnormal result through approved workflow. | Clinician / clinical support | No autonomous classification claim. |
| ABN-002 | Clinician reviews abnormal result in clinical context. | Clinician | Clinician judgment required. |
| ABN-003 | Document assessment or next step where clinically appropriate. | Clinician | No autonomous treatment recommendation. |
| ABN-004 | Assign follow-up owner if action is needed. | Clinician / operations role | Follow-up ownership required. |
| ABN-005 | Escalate unclear abnormal results for clinician review. | Clinical safety reviewer / clinician | No AI triage. |
| ABN-006 | Document closure evidence. | Clinician / follow-up owner | Evidence required before readiness claim. |

This document does not define abnormal result thresholds.

---

## 8. Critical Result Escalation Plan

Critical result handling is safety-sensitive and must follow approved clinical, operational, privacy, and legal policies before any runtime use.

| Step | Planned workflow concept | Owner role | Required boundary |
|---|---|---|---|
| CRIT-001 | Identify potential critical result through approved clinical workflow. | Clinician / authorized role | No autonomous emergency triage. |
| CRIT-002 | Confirm escalation pathway according to approved procedure. | Clinician / operations reviewer | Procedure required before use. |
| CRIT-003 | Notify appropriate responsible role according to approved policy. | Authorized clinical/operations role | No automated patient messaging. |
| CRIT-004 | Document escalation status. | Authorized role | No PHI in repository evidence. |
| CRIT-005 | Document clinician review and next step where applicable. | Clinician | No autonomous treatment recommendation. |
| CRIT-006 | Document closure or unresolved status. | Clinician / follow-up owner | Closure evidence required. |

Current status:

Critical result escalation is planning-only.

This document does not approve emergency response, emergency triage, automated escalation, or patient-facing alerts.

---

## 9. Result Ownership Plan

Every result requiring review should have a responsible owner or role before runtime workflow claims.

| Ownership item | Required future definition |
|---|---|
| Result reviewer | Role responsible for clinical review. |
| Follow-up owner | Role responsible for tracking action or unresolved status. |
| Escalation owner | Role responsible for escalation when timing or safety threshold is unclear. |
| Closure owner | Role responsible for documenting closure status. |
| Governance reviewer | Role responsible when workflow failure or claim risk occurs. |

Ownership must align with the Governance Ownership Model.

---

## 10. Result Follow-up Plan

| Follow-up type | Planned workflow concept | Evidence required |
|---|---|---|
| No follow-up needed | Clinician-reviewed rationale. | Closure evidence. |
| Repeat lab needed | Clinician-authored plan and timing. | Follow-up workflow evidence. |
| Medication monitoring needed | Clinician-authored plan. | Medication workflow review. |
| Referral needed | Clinician-authored referral plan. | Referral workflow evidence. |
| Patient contact needed | Privacy-approved communication workflow. | Privacy and communication policy. |
| Urgent review needed | Approved escalation procedure. | Critical result escalation evidence. |
| Unclear next step | Escalation to clinician or governance reviewer. | Escalation evidence. |

No follow-up type may be used for autonomous diagnosis, treatment recommendation, prescribing, or emergency triage.

---

## 11. Closure Evidence Plan

Closure evidence is required before a result-related item is considered resolved.

| Closure type | Required closure evidence |
|---|---|
| Result reviewed | Reviewer role, review status, and date/status evidence without PHI in repository. |
| Action completed | Action status and responsible role. |
| Follow-up scheduled | Follow-up status and responsible role. |
| Patient contacted | Contact status according to privacy-approved workflow. |
| Escalated | Escalation owner, reason, and status. |
| Deferred | Deferral reason, owner, and review timing. |
| No action needed | Clinician-reviewed rationale. |
| Unable to resolve | Responsible owner and escalation status. |

This document does not create runtime closure tracking.

---

## 12. Communication and Privacy Boundary

Result workflows may involve sensitive clinical information.

Before any communication workflow, the project must define:

- Approved communication methods.
- Who may contact a patient.
- What may be communicated.
- How identity is confirmed.
- How communication is documented.
- How failed contact is handled.
- How urgent or critical communication is escalated.
- How privacy and consent requirements are handled.
- How repository evidence avoids PHI.

This document does not approve automated patient messaging.

---

## 13. Evidence Required Before Runtime Implementation

Before any runtime lab result or critical result workflow implementation, the project must provide:

- Lab result workflow review.
- Pending result ownership model.
- Abnormal result review policy.
- Critical result escalation SOP.
- Communication and privacy policy.
- RBAC review.
- Audit review.
- Security review.
- Clinical safety review.
- Follow-up workflow alignment.
- Closure evidence template.
- Synthetic workflow test.
- No-PHI evidence.
- Governance approval.
- Release gate approval.

---

## 14. Risks

| Risk | Impact | Control |
|---|---|---|
| Pending result has no owner | Missed result review. | Result ownership plan. |
| Abnormal result is not reviewed | Patient safety risk. | Clinician review boundary. |
| Critical result escalation is unclear | Serious safety risk. | Critical result escalation SOP. |
| Automated triage is implied | Clinical safety risk. | No autonomous emergency triage boundary. |
| Patient messaging occurs without policy | Privacy and safety risk. | No automated messaging boundary. |
| Result closure is undocumented | Follow-up failure. | Closure evidence plan. |
| PHI enters examples or evidence | Privacy breach. | No-PHI and synthetic evidence rules. |
| Unsupported readiness claim | Trust and compliance risk. | Claims review and release gates. |

---

## 15. Relationship to Prior PRs

| Prior PR | Relationship |
|---|---|
| PR #82 | Daily Operating Model and Patient Status Model provides operational context. |
| PR #83 | SOP Framework defines future procedure structure. |
| PR #85 | Clinical Documentation Quality Rules includes pending result and follow-up quality checks. |
| PR #86 | Release Readiness Gates define evidence required before stronger claims. |
| PR #87 | Governance Ownership Model defines owners and stop-work authority. |
| PR #88 | Core Clinic Workflow Plans define upstream clinic workflow context. |
| PR #89 | Follow-up, Open Loops, and Safety-Net Workflow Plans define follow-up and closure context. |
| PR #90 | This document defines lab results and critical results workflow planning. |

---

## 16. Definition of Done

This document is complete when:

- Lab result workflow planning is documented.
- Pending result workflow planning is documented.
- Abnormal result review planning is documented.
- Critical result escalation planning is documented.
- Result ownership planning is documented.
- Result follow-up planning is documented.
- Result closure evidence planning is documented.
- Communication and privacy boundary is documented.
- Evidence required before runtime implementation is documented.
- Risks and controls are documented.
- Relationship to prior PRs is documented.
- No runtime implementation is introduced.
- No SQL is introduced.
- No database migration is introduced.
- No runtime AI is introduced.
- No automated patient messaging is introduced.
- No frontend or FHIR/API implementation is introduced.
- No autonomous CDS is introduced.
- No autonomous diagnosis, treatment recommendation, prescribing, or emergency triage is introduced.
- No PHI, credentials, sensitive logs, or database dumps are included.
- No OpenEMR core-sensitive files are modified.
- No unsupported readiness, validation, compliance, certification, or commercial claims are introduced.

---

## 17. After-Merge Action

After this PR is merged, the next planned documentation step is PR #91:

docs(im-core): add pharmacy billing and administrative linkage plans v0.1

Do not start PR #91 until PR #90 is merged and reviewed.

---

## 18. Status

Documentation-only lab results and critical results workflow plans.

No runtime implementation.
No SQL.
No database migration.
No runtime AI.
No frontend implementation.
No FHIR/API implementation.
No automated patient messaging.
No OpenEMR core changes.
Not demo-ready.
Not pilot-ready.
Not production-ready.
Not clinically validated.
Not regulatory compliant by default.
Not cybersecurity certified.
Not commercially deployment-ready.
