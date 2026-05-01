# Clinical Documentation Quality Rules V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines documentation-only clinical documentation quality rules for OpenEMR IM Core.

The purpose is to support future clinician-reviewed documentation quality review for Internal Medicine Follow-Up V1 without introducing runtime automation, autonomous clinical decision support, diagnosis automation, treatment recommendation automation, prescribing automation, emergency triage automation, patient-facing AI, SQL execution, frontend implementation, FHIR/API implementation, or OpenEMR core-sensitive changes.

This document is a planning baseline only.

It does not implement rules in OpenEMR.

It does not authorize:

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

This document covers documentation-quality planning for:

- Internal Medicine Follow-Up V1.
- Layout ID `LBFim_followup_v1`.
- Visit context documentation.
- Vital signs review documentation.
- Chronic conditions review documentation.
- Medication review documentation.
- Symptoms review documentation.
- Physical exam summary documentation.
- Assessment documentation.
- Plan documentation.
- Patient safety and follow-up documentation.
- Open-loop awareness.
- Safety-net documentation.
- Future clinician-reviewed quality checks.
- Future validation evidence planning.

This document is documentation-only.

---

## 3. Out of Scope

This document does not create or approve:

- Runtime quality checking.
- Automated alerts.
- Autonomous clinical decision support.
- Autonomous diagnosis.
- Autonomous treatment recommendation.
- Autonomous prescribing.
- Autonomous emergency triage.
- Patient-facing AI.
- Predictive analytics.
- AI-generated clinical conclusions.
- SQL scripts.
- Database migrations.
- Frontend dashboards.
- FHIR/API implementation.
- OpenEMR core changes.
- Production deployment.
- Pilot deployment.
- Commercial deployment.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.

---

## 4. Current Project Context

| Item | Current status |
|---|---|
| Project | OpenEMR IM Core |
| Base system | Controlled OpenEMR fork |
| Clinical module | Internal Medicine Follow-Up V1 |
| Layout ID | `LBFim_followup_v1` |
| Documentation posture | Documentation-first and evidence-gated |
| Runtime rule engine | Not implemented |
| SQL execution | Not approved |
| Runtime AI | Not approved |
| Frontend implementation | Not included |
| FHIR/API implementation | Not included |
| OpenEMR core changes | Not included |
| Clinical validation | Not claimed |
| Production readiness | Not claimed |

---

## 5. Known Internal Medicine Follow-Up V1 Groups

| Group number | Group name | Quality-rule relevance |
|---|---|---|
| 1 | Visit Context | Confirms reason, continuity, encounter context, and follow-up purpose. |
| 2 | Vital Signs Review | Supports review of recorded vitals and clinician acknowledgement where needed. |
| 3 | Chronic Conditions Review | Supports chronic disease follow-up completeness. |
| 4 | Medication Review | Supports medication reconciliation, adherence, side effects, and monitoring documentation. |
| 5 | Symptoms Review | Supports review of new, persistent, worsening, or unresolved symptoms. |
| 6 | Physical Exam Summary | Supports documentation of relevant physical findings. |
| 7 | Assessment | Supports clinician-authored interpretation and problem framing. |
| 8 | Plan | Supports documented follow-up, treatment plan, monitoring, and patient instructions. |
| 9 | Patient Safety and Follow-up | Supports safety-net instructions, open-loop awareness, and follow-up responsibility. |

---

## 6. Quality Rule Principles

Future quality rules must follow these principles:

1. Rules must support clinicians, not replace clinicians.
2. Rules must be explainable in plain language.
3. Rules must be clinician-reviewed before use.
4. Rules must not make autonomous decisions.
5. Rules must not diagnose.
6. Rules must not recommend treatment autonomously.
7. Rules must not prescribe.
8. Rules must not triage emergencies autonomously.
9. Rules must not be patient-facing by default.
10. Rules must be evidence-gated before runtime implementation.
11. Rules must allow clinician override or dismissal in future workflow design.
12. Rules must document false-positive handling before implementation.
13. Rules must not rely on PHI in repository examples.
14. Rules must not imply clinical validation.
15. Rules must not imply regulatory compliance or medical-device readiness.

---

## 7. Rule Severity Levels

| Severity | Meaning | Required response before implementation |
|---|---|---|
| Informational | Documentation may be improved but no immediate safety concern is implied. | Clinician review and optional correction workflow. |
| Low | Minor documentation gap may affect clarity or continuity. | Documentation-quality review and optional correction. |
| Medium | Documentation gap may affect follow-up, continuity, or handoff quality. | Clinician review, owner assignment, and evidence plan. |
| High | Documentation gap may affect patient safety if unresolved. | Clinical governance review and safe-response workflow before implementation. |
| Critical | Documentation gap may relate to urgent risk, emergency triage, critical result, severe medication issue, or unresolved safety concern. | Do not automate. Define escalation policy with qualified clinical governance before any runtime use. |

Severity labels in this document are planning labels only.

They do not perform triage.

They do not replace clinician judgment.

---

## 8. Clinical Documentation Quality Rule Catalog

| Rule ID | Rule name | Documentation area | Quality concern | Suggested review question | Severity | Required evidence before runtime use |
|---|---|---|---|---|---|---|
| CDQ-001 | Visit reason present | Visit Context | Encounter lacks clear reason for follow-up. | Is the reason for the visit documented clearly? | Medium | Clinician review and encounter documentation evidence. |
| CDQ-002 | Follow-up context present | Visit Context | Continuity context may be unclear. | Is the follow-up context documented? | Low | Clinician review. |
| CDQ-003 | Vital signs reviewed | Vital Signs Review | Vitals may be recorded but not acknowledged. | Were relevant vital signs reviewed? | Medium | Runtime evidence and clinical workflow review. |
| CDQ-004 | Abnormal vitals acknowledged | Vital Signs Review | Abnormal vitals may lack acknowledgement. | If vitals are abnormal, is clinician acknowledgement documented? | High | Clinician safety review and false-positive handling. |
| CDQ-005 | Chronic conditions addressed | Chronic Conditions Review | Known chronic conditions may be omitted from follow-up. | Are relevant chronic conditions addressed? | Medium | Clinical reviewer checklist. |
| CDQ-006 | Medication list reviewed | Medication Review | Medication status may be unclear. | Is medication review documented? | High | Medication workflow review. |
| CDQ-007 | Medication adherence addressed | Medication Review | Adherence issues may be missed. | Is adherence or medication-taking behavior addressed where relevant? | Medium | Clinician review. |
| CDQ-008 | Medication side effects addressed | Medication Review | Side effects may be undocumented. | Are side effects or tolerability documented where relevant? | Medium | Clinician review. |
| CDQ-009 | Allergy status considered | Medication / Safety | Allergy status may be missing or unclear. | Is allergy status considered where medication decisions are discussed? | High | Allergy workflow review. |
| CDQ-010 | New symptoms documented | Symptoms Review | New symptoms may be omitted. | Are new or changed symptoms documented? | Medium | Clinical documentation review. |
| CDQ-011 | Worsening symptoms acknowledged | Symptoms Review | Worsening symptoms may lack follow-up. | If symptoms worsen, is acknowledgement or follow-up documented? | High | Clinician review and safe-response workflow. |
| CDQ-012 | Red-flag symptoms handled by clinician | Symptoms Review | Red-flag symptoms may require clinician judgment. | Is clinician review documented for concerning symptoms? | Critical | Governance review; no autonomous triage. |
| CDQ-013 | Physical exam relevance | Physical Exam Summary | Exam documentation may be absent or unrelated. | Is the exam summary relevant to the visit context? | Low | Clinician review. |
| CDQ-014 | Assessment linked to problems | Assessment | Assessment may not address documented issues. | Does the assessment address the documented concerns? | Medium | Clinical reviewer evidence. |
| CDQ-015 | Plan linked to assessment | Plan | Plan may not correspond to assessment. | Is there a plan for each relevant assessment item? | High | Clinician review and traceability evidence. |
| CDQ-016 | Follow-up timing documented | Patient Safety and Follow-up | Follow-up timing may be unclear. | Is follow-up timing or next step documented? | High | Workflow review and SOP alignment. |
| CDQ-017 | Safety-net instructions documented | Patient Safety and Follow-up | Patient safety instructions may be missing. | Are return precautions or safety-net instructions documented where relevant? | High | Clinician review. |
| CDQ-018 | Open-loop owner identified | Follow-up / Operations | Pending items may lack ownership. | Is an owner or responsible role identified for open items? | High | Operating model and SOP evidence. |
| CDQ-019 | Pending result follow-up documented | Follow-up / Results | Pending results may lack review plan. | Is follow-up for pending results documented? | High | Result workflow review. |
| CDQ-020 | Referral follow-up documented | Follow-up / Referrals | Referral status may be unclear. | Is referral follow-up responsibility documented? | Medium | Referral workflow review. |
| CDQ-021 | Patient status consistent | Operations | Patient status may be unclear or inconsistent. | Is the patient status concept consistent with the operating model? | Medium | Patient status model evidence. |
| CDQ-022 | Documentation completeness reviewed | General | Encounter may be incomplete. | Are required sections sufficiently complete for review? | Medium | Documentation review checklist. |
| CDQ-023 | No unsupported AI wording | Clinical Intelligence | AI or automation may be overstated. | Does the note avoid unsupported AI, predictive, or automation claims? | High | Claims review. |
| CDQ-024 | No autonomous CDS implication | Clinical Safety | Documentation may imply autonomous CDS. | Does the documentation preserve clinician authority? | Critical | Governance review. |
| CDQ-025 | No readiness claim | Claims Control | Documentation may imply readiness. | Does the documentation avoid demo, pilot, production, commercial, validation, compliance, or certification claims? | High | Claims review. |

---

## 9. Required Rule Metadata for Future Implementation

Any future runtime rule proposal must define:

| Metadata item | Required description |
|---|---|
| Rule ID | Stable unique identifier. |
| Rule name | Human-readable name. |
| Clinical area | Documentation section or workflow area. |
| Trigger condition | What condition causes the rule to appear. |
| Data source | Source field or OpenEMR concept. |
| Source-of-truth | Where the authoritative data lives. |
| Intended user | Clinician, nurse, admin, reviewer, or support role. |
| Suggested action | Human-reviewed action only. |
| Severity | Informational, Low, Medium, High, or Critical. |
| Explanation | Plain-language reason for the rule. |
| False-positive handling | How incorrect or irrelevant suggestions are handled. |
| Override behavior | How a clinician can dismiss or override the rule. |
| Audit requirement | What should be logged if implemented. |
| Validation requirement | Evidence needed before use. |
| Safety boundary | What the rule must not do. |

---

## 10. False-Positive Handling

Future documentation-quality rules may produce false positives.

Before runtime use, the project must define:

- How users report false positives.
- How reviewers classify false positives.
- How rule logic is revised.
- How clinician override is preserved.
- How false-positive trends are reviewed.
- How unsafe or noisy rules are disabled.
- How changes are documented.
- How reviewer decisions are audited.

No rule may be treated as clinically authoritative without formal review and validation.

---

## 11. Clinician Review Boundary

All future quality checks must preserve clinician authority.

The rules may support questions such as:

- Is documentation complete?
- Is a follow-up plan documented?
- Is a safety-net note present?
- Is a pending item assigned?
- Is the note internally consistent?

The rules must not:

- Diagnose.
- Prescribe.
- Recommend treatment autonomously.
- Triage emergencies autonomously.
- Replace clinician review.
- Present generated conclusions as final.
- Communicate directly with patients without review.
- Claim clinical validation without evidence.

---

## 12. Audit and Evidence Boundary

Before any runtime quality rule is implemented, the project must define evidence for:

- Rule specification.
- Data source mapping.
- User role mapping.
- Test cases.
- Expected behavior.
- False-positive cases.
- Override behavior.
- Audit trail behavior.
- Reviewer signoff.
- Safety review.
- Privacy review.
- Security review.
- Validation evidence.

Evidence must not include PHI, credentials, sensitive logs, or database dumps.

---

## 13. Risk Controls

| Risk | Potential issue | Control |
|---|---|---|
| Alert fatigue | Too many rules may distract users. | Use severity levels and false-positive review. |
| Overtrust | Users may treat rules as clinical authority. | Preserve clinician-review boundary. |
| Missing context | A rule may not understand the full clinical situation. | Require clinician review and override. |
| Data mismatch | Source data may be incomplete or outdated. | Define source-of-truth mapping. |
| False positives | Rule triggers when documentation is acceptable. | Define reporting and review workflow. |
| False negatives | Rule misses a documentation issue. | Use validation and reviewer feedback. |
| Privacy exposure | Examples or logs may contain PHI. | Use No-PHI policy and synthetic examples. |
| Unsupported claims | Documentation may imply validation or readiness. | Use claims-control review. |
| Premature automation | Rules may be implemented before governance. | Keep runtime implementation blocked until evidence gates. |
| Core modification risk | Implementation may require unsafe OpenEMR changes. | Prefer configuration, LBF, and native OpenEMR capabilities. |

---

## 14. Relationship to Prior PRs

| Prior PR | Relationship |
|---|---|
| PR #81 | Failure Modes and Safe Response Library identifies documentation and safety risks. |
| PR #82 | Daily Operating Model and Patient Status Model defines operational context for follow-up and open loops. |
| PR #83 | SOP Framework defines future procedure structure and role boundaries. |
| PR #84 | Data Model Starter and OpenEMR Mapping defines conceptual data and mapping boundaries. |
| PR #85 | This document defines clinical documentation quality rule planning. |

---

## 15. Evidence Required Before Runtime Use

Before any quality rule becomes runtime functionality, the project must provide:

- Clinical reviewer approval.
- Rule specification.
- Data source mapping.
- Runtime workflow design.
- User role design.
- False-positive handling process.
- Audit behavior plan.
- Privacy review.
- Security review.
- RBAC review.
- Validation evidence plan.
- Test cases.
- Non-production testing evidence.
- Governance approval.
- Release gate approval.

---

## 16. Definition of Done

This document is complete when:

- Clinical documentation quality principles are defined.
- Severity levels are defined.
- Rule catalog is documented.
- Future rule metadata requirements are documented.
- False-positive handling is documented.
- Clinician review boundary is documented.
- Audit and evidence boundary is documented.
- Risks and controls are documented.
- Relationship to prior PRs is documented.
- Runtime use evidence requirements are documented.
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

After this PR is merged, the next planned documentation step is PR #86:

docs(im-core): add minimum viable safe platform and release readiness gates v0.1

Do not start PR #86 until PR #85 is merged and reviewed.

---

## 18. Status

Documentation-only clinical documentation quality rules.

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