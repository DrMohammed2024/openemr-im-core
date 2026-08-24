# Pharmacy, Billing, and Administrative Linkage Plans V0.1 - OpenEMR IM Core

## AI-Assisted Solo-Owner Applicability

Eligible documentation-stage changes to these plans may use GPT
multidisciplinary boundary review and the Project Owner decision record under
the AI-Assisted Solo-Owner Governance Policy V0.1. The reviewer column is
advisory for eligible internal work.

Operational prescribing, pharmacy, billing, claims, PHI, API/FHIR, runtime,
deployment, compliance, legal, payer, or external-release activity remains
outside this model and retains applicable qualified-human and external gates.

## 1. Purpose

This document defines documentation-only planning for pharmacy linkage, medication documentation boundaries, billing linkage boundaries, administrative workflow linkage, and related safety controls in OpenEMR IM Core.

It supports future Internal Medicine clinic workflow planning while preserving clinician authority, evidence-gated implementation, OpenEMR-native alignment, and non-claims boundaries.

This document does not implement pharmacy, prescribing, billing, coding, claims, payment, insurance, revenue cycle, or administrative automation.

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
- Automated refill approval.
- Automated pharmacy communication.
- Automated billing.
- Automated coding.
- Automated claims submission.
- Automated insurance eligibility checks.
- Automated patient messaging.
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
- Pharmacy integration readiness.
- Billing integration readiness.
- Claims processing readiness.

Golden rule:

The system must support clinicians and authorized staff.
It must not replace clinicians, billing professionals, pharmacy workflows, compliance review, or payer-specific requirements.

---

## 2. Scope

This linkage plan covers:

- Pharmacy linkage planning.
- Medication documentation boundary.
- Refill and prescription boundary.
- Billing linkage planning.
- Coding and claims boundary.
- Administrative workflow linkage planning.
- Role ownership expectations.
- Evidence required before runtime implementation.

This document is documentation-only.

---

## 3. Out of Scope

This document does not create or approve:

- Runtime pharmacy integration.
- Electronic prescribing implementation.
- Refill automation.
- Medication decision support.
- Pharmacy messaging automation.
- Automated billing workflow.
- Automated coding.
- Automated claims submission.
- Insurance eligibility automation.
- Payment processing.
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
| Runtime pharmacy integration | Not implemented |
| Runtime billing integration | Not implemented |
| Runtime coding automation | Not implemented |
| SQL execution | Not approved |
| Runtime AI | Not approved |
| Automated prescribing | Not included |
| Automated billing | Not included |
| Frontend implementation | Not included |
| FHIR/API implementation | Not included |
| OpenEMR core changes | Not included |
| Clinical validation | Not claimed |
| Production readiness | Not claimed |

---

## 5. Pharmacy Linkage Overview

Pharmacy linkage planning must preserve clinician authority and approved pharmacy workflows.

High-level future workflow concept:

1. Medication information is reviewed using approved OpenEMR-native workflow.
2. Clinician documents medication-related assessment or plan where relevant.
3. Any prescription, refill, or pharmacy communication must remain under approved clinician and organizational workflow.
4. Medication-related open loops are documented when follow-up is needed.
5. Medication-related closure evidence is documented when resolved.
6. No automated prescribing or refill approval is introduced by this project documentation.

No step may replace clinician judgment.

---

## 6. Medication Documentation Boundary

| Area | Planning boundary | Required control |
|---|---|---|
| Medication list review | May be documented as reviewed. | Clinician review required. |
| Medication adherence | May be documented where clinically relevant. | No autonomous judgment. |
| Medication side effects | May be documented where clinically relevant. | Clinician interpretation required. |
| Medication plan | Must remain clinician-authored. | No autonomous treatment recommendation. |
| Medication monitoring | May create future follow-up planning need. | Follow-up owner required. |
| Allergy relationship | Must be considered by clinician where relevant. | No automated safety clearance claim. |

This document does not implement medication reconciliation automation.

---

## 7. Prescription and Refill Boundary

Prescription and refill workflows are safety-sensitive.

| Workflow item | Boundary |
|---|---|
| New prescription | Not implemented by this document. |
| Refill request | Not automated by this document. |
| Refill approval | Must not be automated without formal governance, clinical validation, and authorized workflow. |
| Medication change | Must remain clinician-authored. |
| Pharmacy communication | Not automated by this document. |
| Medication safety check | Not claimed by this document. |
| Controlled substances | Not addressed or approved by this document. |
| Patient notification | Not automated by this document. |

Current status:

Prescription and refill linkage is planning-only.

---

## 8. Pharmacy Workflow Plan

| Step | Planned workflow concept | Owner role | Evidence required before implementation |
|---|---|---|---|
| PHARM-001 | Review medication-related documentation using approved workflow. | Clinician | Medication workflow review. |
| PHARM-002 | Identify medication-related open loop if follow-up is needed. | Clinician / follow-up owner | Open-loop workflow evidence. |
| PHARM-003 | Document medication-related next step where clinically relevant. | Clinician | Clinical documentation review. |
| PHARM-004 | Escalate unclear medication issue to clinician. | Clinical support / follow-up owner | Escalation SOP. |
| PHARM-005 | Document closure of medication-related open loop. | Clinician / follow-up owner | Closure evidence. |
| PHARM-006 | Review pharmacy linkage claims before external use. | Claims reviewer | Claims review evidence. |

No pharmacy integration is implemented by this document.

---

## 9. Billing Linkage Overview

Billing linkage planning must remain administrative and evidence-gated.

High-level future concept:

1. Encounter documentation exists.
2. Clinician documentation may support administrative review.
3. Billing or coding review must follow approved OpenEMR-native and organizational workflow.
4. No automated coding, billing, claims, or payer logic is introduced.
5. Any future billing linkage must be reviewed by authorized billing, compliance, privacy, and governance reviewers.

This document does not make billing, coding, or reimbursement claims.

---

## 10. Coding and Claims Boundary

| Area | Boundary |
|---|---|
| Coding support | Not implemented. |
| Code suggestion | Not implemented. |
| Automated coding | Not permitted by this document. |
| Claim generation | Not implemented. |
| Claim submission | Not implemented. |
| Insurance eligibility | Not implemented. |
| Prior authorization | Not implemented. |
| Payment workflow | Not implemented. |
| Revenue cycle optimization | Not claimed. |
| Compliance with payer rules | Not claimed. |

Billing and coding workflows require qualified review before any implementation claim.

---

## 11. Billing Workflow Plan

| Step | Planned workflow concept | Owner role | Evidence required before implementation |
|---|---|---|---|
| BILL-001 | Confirm encounter documentation exists. | Billing/admin role | Encounter workflow evidence. |
| BILL-002 | Review whether documentation is administratively complete. | Billing/admin role | Documentation review workflow. |
| BILL-003 | Escalate missing documentation to appropriate role. | Billing/admin role | Escalation SOP. |
| BILL-004 | Preserve clinician-authored clinical content. | Clinician / billing role | Governance boundary review. |
| BILL-005 | Avoid automated coding or claims logic. | Technical reviewer / billing reviewer | Claims boundary review. |
| BILL-006 | Require qualified billing/compliance review before any future billing claim. | Billing/compliance reviewer | Review evidence. |

No billing automation is implemented by this document.

---

## 12. Administrative Linkage Plan

Administrative linkage supports workflow continuity without creating unauthorized automation.

| Administrative area | Planned linkage concept | Boundary |
|---|---|---|
| Scheduling | May relate to follow-up timing. | No automated scheduling. |
| No-show | May relate to follow-up workflow. | No automated outreach. |
| Registration | May relate to encounter readiness. | No production procedure claim. |
| Documentation completion | May relate to workflow status. | No runtime dashboard claim. |
| Referral status | Future workflow planning only. | No referral automation here. |
| Billing review | Future administrative review only. | No coding or claims automation. |
| Support escalation | Future support workflow planning only. | No production support claim. |

---

## 13. Role Ownership Expectations

| Area | Suggested owner role | Required reviewer |
|---|---|---|
| Medication documentation | Clinician | Clinical Safety Reviewer |
| Pharmacy linkage | Clinician / operations role | Clinical Safety Reviewer |
| Refill boundary | Clinician / governance role | Clinical Safety Reviewer |
| Billing linkage | Billing/admin role | Billing/compliance reviewer |
| Coding boundary | Billing/compliance reviewer | Claims Reviewer |
| Administrative linkage | Operations reviewer | Governance Reviewer |
| Privacy boundary | Security/Privacy Reviewer | Governance Reviewer |
| External claims | Claims Reviewer | Release Owner |

Actual role assignment must follow the Governance Ownership Model.

---

## 14. Evidence Required Before Runtime Implementation

Before any runtime pharmacy, billing, or administrative linkage implementation, the project must provide:

- OpenEMR-native pharmacy workflow review.
- Medication documentation workflow review.
- Prescription/refill boundary review.
- Billing workflow review.
- Coding and claims boundary review.
- Administrative workflow review.
- Privacy and communication policy.
- RBAC review.
- Audit review.
- Security review.
- Clinical safety review.
- Billing/compliance review where applicable.
- Claims review.
- Synthetic workflow test.
- No-PHI evidence.
- Governance approval.
- Release gate approval.

---

## 15. Risks

| Risk | Impact | Control |
|---|---|---|
| Prescribing automation is implied | Patient safety and legal risk. | Explicit no automated prescribing boundary. |
| Refill approval is automated too early | Patient safety risk. | Refill boundary and clinician authority. |
| Pharmacy communication is automated without review | Privacy and operational risk. | No automated pharmacy communication. |
| Billing automation is implied | Compliance and financial risk. | Billing boundary and qualified review. |
| Coding suggestion is implied | Compliance risk. | No coding automation boundary. |
| Patient messaging is automated without policy | Privacy and safety risk. | No automated patient messaging boundary. |
| Administrative status is treated as clinical status | Workflow and safety risk. | Role ownership and governance review. |
| Unsupported commercial claim is made | Trust and legal risk. | Claims review and release gates. |
| PHI enters examples or evidence | Privacy breach. | No-PHI and synthetic evidence rules. |

---

## 16. Relationship to Prior PRs

| Prior PR | Relationship |
|---|---|
| PR #82 | Daily Operating Model and Patient Status Model provides operational context. |
| PR #83 | SOP Framework defines future procedure structure. |
| PR #84 | Data Model Starter and OpenEMR Mapping defines data and source-of-truth boundaries. |
| PR #85 | Clinical Documentation Quality Rules includes medication and follow-up documentation checks. |
| PR #86 | Release Readiness Gates define evidence required before stronger claims. |
| PR #87 | Governance Ownership Model defines owners, stop-work authority, and claims review. |
| PR #88 | Core Clinic Workflow Plans define upstream clinic workflow context. |
| PR #89 | Follow-up, Open Loops, and Safety-Net Workflow Plans define follow-up and closure context. |
| PR #90 | Lab Results and Critical Results Workflow Plans define result-related workflow context. |
| PR #91 | This document defines pharmacy, billing, and administrative linkage planning. |

---

## 17. Definition of Done

This document is complete when:

- Pharmacy linkage planning is documented.
- Medication documentation boundary is documented.
- Prescription and refill boundary is documented.
- Pharmacy workflow planning is documented.
- Billing linkage planning is documented.
- Coding and claims boundary is documented.
- Billing workflow planning is documented.
- Administrative linkage planning is documented.
- Role ownership expectations are documented.
- Evidence required before runtime implementation is documented.
- Risks and controls are documented.
- Relationship to prior PRs is documented.
- No runtime implementation is introduced.
- No SQL is introduced.
- No database migration is introduced.
- No runtime AI is introduced.
- No automated prescribing is introduced.
- No automated refill approval is introduced.
- No automated pharmacy communication is introduced.
- No automated billing is introduced.
- No automated coding is introduced.
- No automated claims submission is introduced.
- No automated patient messaging is introduced.
- No frontend or FHIR/API implementation is introduced.
- No autonomous CDS is introduced.
- No autonomous diagnosis, treatment recommendation, prescribing, or emergency triage is introduced.
- No PHI, credentials, sensitive logs, or database dumps are included.
- No OpenEMR core-sensitive files are modified.
- No unsupported readiness, validation, compliance, certification, pharmacy readiness, billing readiness, claims processing, or commercial claims are introduced.

---

## 18. After-Merge Action

After this PR is merged, the next planned documentation step is PR #92:

docs(im-core): add evidence registry and evidence templates v0.1

Do not start PR #92 until PR #91 is merged and reviewed.

---

## 19. Status

Documentation-only pharmacy, billing, and administrative linkage plans.

No runtime implementation.
No SQL.
No database migration.
No runtime AI.
No frontend implementation.
No FHIR/API implementation.
No automated prescribing.
No automated refill approval.
No automated pharmacy communication.
No automated billing.
No automated coding.
No automated claims submission.
No automated patient messaging.
No OpenEMR core changes.
Not demo-ready.
Not pilot-ready.
Not production-ready.
Not clinically validated.
Not regulatory compliant by default.
Not cybersecurity certified.
Not pharmacy-integration-ready.
Not billing-integration-ready.
Not claims-processing-ready.
Not commercially deployment-ready.
