# Daily Operating Model and Patient Status Model V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines a documentation-only daily operating model and patient status model for OpenEMR IM Core.

It supports future planning for Internal Medicine clinic operations, patient status tracking, handoffs, open-loop awareness, and safety-net follow-up.

This document does not implement runtime workflow automation.

Golden rule:

The system must support clinicians.
It must not replace clinicians.

---

## 2. Scope

This document covers:

- Daily clinic operating flow.
- Patient status concepts.
- Role-based workflow responsibilities.
- Internal Medicine Follow-Up V1 workflow alignment.
- Open-loop and safety-net awareness.
- Handoff expectations.
- Escalation boundaries.
- Evidence needed before implementation.

This document is documentation-only.

---

## 3. Out of Scope

This document does not authorize:

- PHI.
- Real patient data.
- Credentials.
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

---

## 4. Current Project Context

| Item | Current status |
|---|---|
| Project | OpenEMR IM Core |
| Base system | Controlled OpenEMR fork |
| Current clinical module | Internal Medicine Follow-Up V1 |
| Layout ID | `LBFim_followup_v1` |
| Current posture | Documentation-first, evidence-gated, safety-first |
| Runtime AI | Not approved |
| SQL execution | Not approved |
| Production readiness | Not claimed |
| Clinical validation | Not claimed |
| Regulatory compliance | Not claimed |
| Cybersecurity certification | Not claimed |

---

## 5. Known Internal Medicine Follow-Up V1 Groups

The known Internal Medicine Follow-Up V1 groups are:

1. Visit Context
2. Vital Signs Review
3. Chronic Conditions Review
4. Medication Review
5. Symptoms Review
6. Physical Exam Summary
7. Assessment
8. Plan
9. Patient Safety and Follow-up

These groups may inform future operating workflows, but this document does not implement workflow automation.

---

## 6. Daily Operating Model

The proposed documentation-only daily operating flow is:

1. Patient registration or visit confirmation.
2. Visit preparation.
3. Clinician encounter.
4. Internal Medicine Follow-Up V1 documentation.
5. Assessment and plan documentation.
6. Patient safety and follow-up documentation.
7. Open-loop identification.
8. Follow-up responsibility assignment.
9. End-of-day unresolved item review.
10. Documentation quality review.
11. Escalation of unresolved operational issues.

This is a planning model only.

---

## 7. Patient Status Model

| Status | Meaning | Required evidence before implementation |
|---|---|---|
| Scheduled | Patient has an upcoming appointment. | Scheduling workflow review. |
| Checked In | Patient has arrived for a visit. | Reception workflow review. |
| In Encounter | Clinician encounter is active. | Clinical workflow review. |
| Documentation Pending | Encounter occurred but documentation is incomplete. | Documentation verification rules. |
| Follow-up Needed | Follow-up action is expected. | Owner and timing model. |
| Pending Result | A result or report is expected. | Lab/result workflow review. |
| Referral Pending | Referral action is expected. | Referral ownership model. |
| Patient Contact Needed | Outreach may be needed. | Privacy and communication policy. |
| Resolved | Required follow-up is completed. | Closure evidence model. |
| Deferred | Follow-up is intentionally postponed. | Deferral reason and owner. |
| Unknown / Needs Review | Status is unclear. | Reviewer assignment model. |

No status may be used for autonomous triage, autonomous diagnosis, autonomous treatment, or autonomous risk classification.

---

## 8. Role-Based Responsibilities

| Role | Documentation-only responsibility | What must not be automated |
|---|---|---|
| Reception / Front Desk | Registration, arrival status, and appointment workflow notes. | Clinical triage or medical prioritization. |
| Nurse / Medical Assistant | Vitals workflow support and preparation notes. | Diagnosis or treatment decisions. |
| Clinician | Assessment, plan, follow-up decisions, clinical review, and override decisions. | Clinician judgment must not be replaced. |
| Clinical Reviewer | Documentation quality and safety-boundary review. | Autonomous approval of care. |
| Administrator | Operational monitoring and policy enforcement. | Clinical decision-making. |
| IT / Support | Access support, issue tracking, and system availability support. | Viewing PHI unless authorized and governed. |

---

## 9. Open Loops and Safety-Net Alignment

The daily operating model should support future review of:

- Pending laboratory results.
- Pending imaging results.
- Pending referrals.
- Follow-up interval documentation.
- Return precautions documentation.
- Patient instruction documentation.
- Medication monitoring documentation.
- Unresolved documentation gaps.
- Deferred follow-up items.
- Assigned owner and due date concepts.

This document does not implement tracking logic.

---

## 10. Handoff Model

| Handoff element | Requirement |
|---|---|
| Item description | What needs attention. |
| Source | Which workflow or documentation area generated the item. |
| Owner | Who is responsible for the next action. |
| Timing | When the item should be reviewed. |
| Status | Current state of the item. |
| Safety note | Any non-autonomous safety boundary. |
| Audit note | Who reviewed or changed the item and when. |

No handoff item may be treated as autonomous clinical advice.

---

## 11. Escalation Boundary

Future escalation workflows must not:

- Diagnose.
- Prescribe.
- Recommend treatment autonomously.
- Perform emergency triage.
- Classify patient risk for care without clinician review.
- Contact patients automatically without policy and clinician-approved workflow.
- Claim safety or clinical validation without evidence.

---

## 12. Evidence Required Before Implementation

| Evidence area | Required evidence |
|---|---|
| Workflow review | Role-by-role workflow review. |
| Privacy review | No-PHI policy and communication boundary. |
| RBAC review | Role matrix and least privilege review. |
| Audit review | Audit trail expectations and evidence. |
| Usability review | Clinician and staff review of workflow burden. |
| Safety review | Failure modes and safe response review. |
| Validation planning | Validation evidence plan alignment. |
| OpenEMR compatibility | Confirmation that implementation avoids core-sensitive changes. |
| Clean-install path | Reproducibility plan if configuration is introduced. |

---

## 13. Safety and Non-Claims Boundary

This document remains documentation-only.

It does not claim or provide:

- Production readiness.
- Demo readiness.
- Pilot readiness.
- Paid-pilot readiness.
- Commercial readiness.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.
- Clean-install reproducibility.
- Medical-device readiness.
- Autonomous clinical decision support.
- Autonomous diagnosis.
- Autonomous treatment recommendation.
- Autonomous prescribing.
- Autonomous emergency triage.

---

## 14. Definition of Done

This document is complete when:

- Daily operating flow is documented.
- Patient status model is documented.
- Role responsibilities are documented.
- Open-loop and safety-net alignment is documented.
- Handoff expectations are documented.
- Escalation boundaries are documented.
- Evidence required before implementation is documented.
- No runtime implementation is introduced.
- No SQL is introduced.
- No runtime AI is introduced.
- No PHI or credentials are included.
- No OpenEMR core-sensitive files are modified.
- No unsupported readiness, validation, compliance, certification, or commercial claims are introduced.

---

## 15. After-Merge Action

After this PR is merged, the next planned documentation step is PR #83:

docs(im-core): add SOP framework v0.1

PR #83 must not start until PR #82 is merged and reviewed.

---

## 16. Status

Documentation-only daily operating model and patient status model.

No runtime implementation.
No SQL.
No runtime AI.
No OpenEMR core changes.
Not production-ready.
Not clinically validated.
Not regulatory compliant by default.
Not cybersecurity certified.
Not commercially deployment-ready.
