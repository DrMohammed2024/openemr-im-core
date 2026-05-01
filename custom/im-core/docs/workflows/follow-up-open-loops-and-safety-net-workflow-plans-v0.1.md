# Follow-up, Open Loops, and Safety-Net Workflow Plans V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines documentation-only workflow plans for follow-up, open loops, no-show awareness, pending items, safety-net documentation, handoffs, and closure evidence in OpenEMR IM Core.

It supports future Internal Medicine clinic workflow planning while preserving clinician authority and evidence-gated implementation.

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

- Follow-up workflow planning.
- No-show workflow planning.
- Open-loop awareness planning.
- Pending item workflow planning.
- Safety-net documentation planning.
- Handoff workflow planning.
- Closure evidence planning.
- Evidence required before runtime implementation.

This document is documentation-only.

---

## 3. Out of Scope

This document does not create or approve:

- Runtime follow-up automation.
- Automated patient outreach.
- Automated patient messaging.
- Autonomous triage.
- Autonomous diagnosis.
- Autonomous treatment recommendation.
- Autonomous prescribing.
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
| Runtime workflow automation | Not implemented |
| SQL execution | Not approved |
| Runtime AI | Not approved |
| Patient messaging automation | Not included |
| Frontend implementation | Not included |
| FHIR/API implementation | Not included |
| OpenEMR core changes | Not included |
| Clinical validation | Not claimed |
| Production readiness | Not claimed |

---

## 5. Follow-up Workflow Overview

Follow-up workflow planning must ensure that follow-up needs are documented, owned, time-bounded, and closed with evidence.

High-level future workflow:

1. Clinician identifies whether follow-up is needed.
2. Follow-up reason is documented.
3. Follow-up owner or responsible role is identified.
4. Follow-up timing or due date is documented.
5. Pending items are tracked through a future approved workflow.
6. Safety-net instructions are documented where relevant.
7. Closure evidence is documented when follow-up is completed.
8. Unclear or overdue follow-up is escalated.

No step may replace clinician judgment.

---

## 6. Follow-up Workflow Plan

| Step | Planned workflow concept | Owner role | Evidence required before implementation |
|---|---|---|---|
| FUP-001 | Identify whether follow-up is needed. | Clinician | Clinical workflow review. |
| FUP-002 | Document follow-up reason. | Clinician | Documentation quality review. |
| FUP-003 | Document follow-up timing or target date. | Clinician / operations role | Follow-up SOP evidence. |
| FUP-004 | Assign responsible owner or role. | Clinician / operations role | Ownership model evidence. |
| FUP-005 | Document follow-up status. | Follow-up owner | Operating model evidence. |
| FUP-006 | Escalate overdue or unclear follow-up. | Follow-up owner / operations reviewer | Escalation SOP. |
| FUP-007 | Document closure evidence. | Follow-up owner / clinician | Closure evidence model. |

Current status:

Follow-up workflow is planning-only.

---

## 7. No-Show Workflow Plan

No-show workflow planning must support continuity without creating automated patient contact or patient-facing AI.

| Step | Planned workflow concept | Owner role | Safety boundary |
|---|---|---|---|
| NS-001 | Identify missed appointment or no-show using approved workflow. | Scheduling / operations role | No patient-facing automation. |
| NS-002 | Review whether clinical follow-up is needed. | Clinician / operations reviewer | Clinician review required. |
| NS-003 | Document next step or deferral if applicable. | Clinician / follow-up owner | No autonomous triage. |
| NS-004 | Assign owner for outreach or follow-up if approved. | Operations role | Must follow privacy policy. |
| NS-005 | Document closure or unresolved status. | Follow-up owner | Closure evidence required. |

This document does not implement automated outreach.

---

## 8. Open-Loop Awareness Plan

An open loop is a documented item that requires future action, review, confirmation, or closure.

Examples may include:

- Follow-up appointment needed.
- Pending result review.
- Referral status unclear.
- Medication monitoring needed.
- Patient contact needed.
- Safety-net follow-up needed.
- Documentation pending.
- Unclear ownership.

| Step | Planned control | Required boundary |
|---|---|---|
| OL-001 | Identify open-loop item. | Documentation-only planning. |
| OL-002 | Assign owner or responsible role. | No dashboard implementation claim. |
| OL-003 | Document due date or timing. | No automated escalation claim. |
| OL-004 | Document current status. | No runtime tracking claim. |
| OL-005 | Document closure evidence. | Evidence required before readiness claim. |
| OL-006 | Escalate unclear or overdue item. | Governance and SOP alignment required. |

Current status:

Open-loop tracking is not implemented by this document.

---

## 9. Pending Item Workflow Plan

Pending items require clear ownership and closure logic.

| Pending item type | Example | Required future evidence |
|---|---|---|
| Pending result | Lab result, imaging report, outside record. | Result workflow evidence. |
| Pending referral | Specialist referral or external appointment. | Referral workflow evidence. |
| Pending patient contact | Outreach or clarification needed. | Privacy and communication policy. |
| Pending documentation | Encounter note incomplete. | Documentation review workflow. |
| Pending medication monitoring | Follow-up lab or medication tolerance check. | Medication workflow review. |
| Pending safety-net follow-up | Return precautions or risk follow-up. | Clinical safety review. |

No pending item may be used for autonomous triage, diagnosis, treatment recommendation, or prescribing.

---

## 10. Safety-Net Documentation Plan

Safety-net documentation supports clinician-directed instructions and follow-up awareness.

| Step | Planned workflow concept | Owner role | Safety boundary |
|---|---|---|---|
| SN-001 | Clinician determines whether safety-net documentation is relevant. | Clinician | Clinician judgment required. |
| SN-002 | Safety-net instruction is documented where relevant. | Clinician | No autonomous emergency triage. |
| SN-003 | Follow-up timing or return guidance is documented where appropriate. | Clinician | No patient-facing AI. |
| SN-004 | Safety-net related open loops are identified if needed. | Clinician / follow-up owner | No automated escalation claim. |
| SN-005 | Unclear safety-net needs are escalated for clinician review. | Clinical safety reviewer | Governance review if needed. |

This document does not define emergency triage or emergency response procedures.

---

## 11. Handoff Workflow Plan

Handoffs must make responsibility clear.

| Handoff | Required information | Required evidence |
|---|---|---|
| Clinician to follow-up owner | Follow-up reason, timing, owner, status, closure expectation. | Follow-up SOP evidence. |
| Clinician to operations reviewer | Open loops, unresolved items, escalation needs. | Operating model evidence. |
| Follow-up owner to clinician | Failed contact, unresolved issue, patient concern, or unclear plan. | Escalation evidence. |
| Operations reviewer to governance reviewer | Workflow failure, PHI risk, unsupported claim, or safety concern. | Governance decision evidence. |
| Support role to project owner | Process gap, tooling limitation, or implementation blocker. | Support workflow evidence. |

---

## 12. Closure Evidence Plan

Closure evidence is required before an open loop or pending item is considered resolved.

| Closure type | Required closure evidence |
|---|---|
| Follow-up completed | Date/status, responsible role, and outcome summary without PHI in repository. |
| Result reviewed | Reviewer role, review status, and next step where applicable. |
| Referral completed | Referral status and documented next step. |
| Patient contact completed | Contact status according to privacy-approved workflow. |
| Deferred follow-up | Deferral reason, owner, and review timing. |
| No action needed | Clinician-reviewed rationale. |
| Escalated | Escalation owner, reason, and status. |

This document does not create runtime closure tracking.

---

## 13. Evidence Required Before Runtime Implementation

Before any runtime follow-up or open-loop workflow implementation, the project must provide:

- Follow-up SOP.
- No-show workflow review.
- Open-loop ownership model.
- Pending item workflow review.
- Safety-net documentation review.
- Handoff workflow review.
- Closure evidence template.
- Privacy and communication policy.
- RBAC review.
- Audit review.
- Security review.
- Clinical safety review.
- Synthetic workflow test.
- No-PHI evidence.
- Governance approval.
- Release gate approval.

---

## 14. Risks

| Risk | Impact | Control |
|---|---|---|
| Follow-up has no owner | Missed follow-up. | Owner assignment and due date planning. |
| Pending result is not reviewed | Patient safety risk. | Pending item workflow and closure evidence. |
| No-show is ignored | Continuity risk. | No-show workflow planning. |
| Safety-net instruction missing | Patient safety and continuity risk. | Safety-net documentation plan. |
| Open loop is not closed | Operational risk. | Closure evidence plan. |
| Automated outreach introduced too early | Privacy and safety risk. | No patient-facing automation boundary. |
| Autonomous triage implied | Clinical safety risk. | Clinician review boundary. |
| PHI enters examples or evidence | Privacy breach. | No-PHI and synthetic evidence rules. |
| Unsupported readiness claim | Trust and compliance risk. | Claims review and release gates. |

---

## 15. Relationship to Prior PRs

| Prior PR | Relationship |
|---|---|
| PR #82 | Daily Operating Model and Patient Status Model defines operational status context. |
| PR #83 | SOP Framework defines future procedure structure. |
| PR #85 | Clinical Documentation Quality Rules includes follow-up and safety-net quality checks. |
| PR #86 | Release Readiness Gates define evidence required before stronger claims. |
| PR #87 | Governance Ownership Model defines owners and stop-work authority. |
| PR #88 | Core Clinic Workflow Plans define upstream clinic workflow context. |
| PR #89 | This document defines follow-up, open-loop, and safety-net workflow planning. |

---

## 16. Definition of Done

This document is complete when:

- Follow-up workflow planning is documented.
- No-show workflow planning is documented.
- Open-loop awareness planning is documented.
- Pending item workflow planning is documented.
- Safety-net documentation planning is documented.
- Handoff workflow planning is documented.
- Closure evidence planning is documented.
- Evidence required before runtime implementation is documented.
- Risks and controls are documented.
- Relationship to prior PRs is documented.
- No runtime implementation is introduced.
- No SQL is introduced.
- No database migration is introduced.
- No runtime AI is introduced.
- No frontend or FHIR/API implementation is introduced.
- No automated patient messaging is introduced.
- No autonomous CDS is introduced.
- No autonomous diagnosis, treatment recommendation, prescribing, or emergency triage is introduced.
- No PHI, credentials, sensitive logs, or database dumps are included.
- No OpenEMR core-sensitive files are modified.
- No unsupported readiness, validation, compliance, certification, or commercial claims are introduced.

---

## 17. After-Merge Action

After this PR is merged, the next planned documentation step is PR #90:

docs(im-core): add lab results and critical results workflow plans v0.1

Do not start PR #90 until PR #89 is merged and reviewed.

---

## 18. Status

Documentation-only follow-up, open-loops, and safety-net workflow plans.

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
