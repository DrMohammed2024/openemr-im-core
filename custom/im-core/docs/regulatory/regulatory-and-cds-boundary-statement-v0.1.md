# Regulatory and CDS Boundary Statement V0.1 — OpenEMR IM Core

## 1. Purpose

This document defines the regulatory, Clinical Decision Support, and medical software boundary statement for OpenEMR IM Core.

It clarifies the current intended-use boundary between:

- administrative EHR workflow
- clinical documentation support
- clinician-reviewed documentation quality support
- future Clinical Intelligence planning
- Clinical Decision Support risk
- Software as a Medical Device / medical device software risk
- prohibited autonomous clinical functions

This document is a planning and governance artifact only.

It does not provide legal advice.

It does not certify regulatory compliance.

It does not claim that OpenEMR IM Core is production-ready, clinically validated, cybersecurity certified, clean-install reproducible, commercially deployable, or medical-device-ready.

It does not authorize runtime AI, SQL execution, autonomous Clinical Decision Support, diagnosis automation, treatment automation, prescribing automation, emergency triage automation, or patient-facing AI.

---

## 2. Current Safe Intended-Use Statement

The safest current intended-use statement is:

`OpenEMR IM Core is a documentation-governed OpenEMR-based project for developing clinician-reviewed Internal Medicine workflow support, structured follow-up documentation, evidence-gated validation planning, and future non-autonomous clinical documentation assistance.`

Current safe positioning:

| Area | Safe current positioning |
|---|---|
| Product type | OpenEMR-based clinical workflow and documentation planning project |
| Clinical specialty | Internal Medicine, beginning with follow-up workflow |
| Current maturity | Documentation foundation / pre-runtime validation planning |
| AI status | Future planning only; no runtime AI approved |
| CDS status | Documentation-only boundary planning; no autonomous CDS |
| Deployment status | Not production-ready |
| Validation status | Not clinically validated |
| Regulatory status | Not regulatory-compliant by default |
| Cybersecurity status | Not cybersecurity certified |
| Commercial status | Not commercially deployment-ready |

---

## 3. Relationship to Prior Documents

This document follows the current governance sequence:

| Prior document | Relationship |
|---|---|
| `custom/im-core/docs/project-state/current-project-state.md` | Defines project-state baseline and known limitations. |
| `custom/im-core/docs/index.md` | Provides documentation index and project document map. |
| `custom/im-core/docs/golden-catalog-alignment/golden-catalog-gap-assessment-v0.1.md` | Defines the Golden Catalog gap baseline. |
| `custom/im-core/docs/golden-catalog-alignment/master-execution-guide-v0.1.md` | Defines the master execution doctrine. |
| `custom/im-core/docs/validation/validation-evidence-plan-v0.1.md` | Defines required evidence before stronger readiness claims. |
| `custom/im-core/docs/security-privacy/no-phi-safe-repository-development-policy-v0.1.md` | Defines repository safety and no-PHI boundaries. |
| `custom/im-core/docs/clinical-intelligence/` | Defines documentation-only Clinical Intelligence boundaries and future human-in-the-loop planning. |

This document does not replace those documents.

It defines the boundary language required before future implementation, validation, pilot, or commercial planning.

---

## 4. Current Regulatory Posture

OpenEMR IM Core must currently be treated as:

| Category | Current posture |
|---|---|
| Administrative EHR support | Planned / partially documented, not fully validated |
| Clinical documentation support | Planned / partially documented |
| Rule-based documentation review | Documentation-only planning |
| Clinical Decision Support | Not implemented as runtime CDS |
| AI documentation assistance | Future planning only |
| Predictive analytics | Future research planning only / not implemented |
| SaMD / medical device software | Not claimed |
| Clinical validation | Not claimed |
| Regulatory compliance | Not claimed |
| Cybersecurity certification | Not claimed |
| Production readiness | Not claimed |
| Commercial deployment readiness | Not claimed |

---

## 5. Administrative EHR Boundary

Administrative EHR functionality may include workflow support such as:

- patient registration
- appointment scheduling
- queue or patient status tracking
- user role assignment
- document organization
- billing or cashier workflow
- operational reporting
- backup and restore procedures
- support and training materials

Administrative EHR functionality must still follow:

- privacy rules
- security controls
- RBAC / least privilege
- audit expectations
- backup and restore planning
- local legal and regulatory requirements

Administrative EHR functionality must not be represented as clinical validation, medical-device functionality, diagnosis support, treatment support, prescribing automation, or emergency triage.

---

## 6. Clinical Documentation Support Boundary

Clinical documentation support may include structured clinician-entered documentation fields, such as:

- visit context
- vital signs review
- chronic conditions review
- medication review
- symptoms review
- physical exam summary
- assessment
- plan
- patient safety and follow-up
- safety-net documentation
- open-loop documentation

Allowed documentation-support behavior:

- structure clinician-authored information
- remind users that documentation fields are incomplete
- display source fields
- support clinician review
- allow clinician editing
- allow clinician rejection of draft content
- preserve auditability
- support follow-up responsibility tracking

Prohibited documentation-support behavior without future evidence gates:

- autonomous diagnosis
- autonomous treatment recommendation
- autonomous prescribing
- autonomous emergency triage
- autonomous risk classification for care
- final clinical documentation without clinician approval
- patient-facing medical advice without clinician review
- hidden or silent clinical alert closure

---

## 7. Clinical Decision Support Boundary

Clinical Decision Support risk increases when the system:

- interprets patient-specific data
- recommends diagnosis
- recommends treatment
- recommends medication changes
- prioritizes urgent clinical action
- predicts clinical deterioration
- produces patient-specific risk scores
- tells clinicians what action to take
- generates patient-facing clinical advice
- influences clinical management without transparent rationale

OpenEMR IM Core must not claim runtime Clinical Decision Support readiness unless future evidence proves:

- intended use is defined
- clinical safety boundary exists
- human-in-the-loop workflow is implemented
- source data is traceable
- audit trail is implemented
- validation evidence exists
- false-positive handling exists
- false-negative handling exists
- override and deferral workflow exists
- RBAC and privacy controls are verified
- clinician review and acceptance are required
- regulatory boundary review is completed

Current status:

`Runtime Clinical Decision Support is not implemented or approved by this document.`

---

## 8. SaMD / Medical Device Software Risk Boundary

The project may approach Software as a Medical Device or medical device software risk if future functionality performs or claims to perform any of the following:

- diagnosis
- differential diagnosis generation for clinical action
- treatment recommendation
- medication recommendation
- prescribing support beyond documentation review
- emergency triage
- clinical risk prediction
- deterioration prediction
- automated prioritization of patient care
- autonomous alerting that changes clinical management
- patient-facing clinical advice
- clinical scoring used for medical decisions
- replacement of clinician judgment

The project must not claim to be outside regulatory scope for all future use cases.

Instead, each future capability must be assessed by intended use, functionality, user, claims, risk, jurisdiction, and evidence.

No regulatory compliance claim may be made without formal review.

---

## 9. AI Boundary

Future AI in OpenEMR IM Core must remain:

- clinician-supervised
- draft-only
- source-traceable
- explainable
- auditable
- rejectable
- editable
- non-autonomous
- non-final until clinician review
- disabled or safely controllable if needed

AI must not:

- diagnose autonomously
- prescribe autonomously
- recommend treatment autonomously
- triage emergencies autonomously
- produce final clinical documentation without clinician acceptance
- generate patient-facing medical advice without clinician approval
- create hidden clinical actions
- close open loops silently
- claim clinical validation without evidence
- claim regulatory compliance without formal review

Runtime AI is not approved by this document.

---

## 10. Rule-Based Review Boundary

Rule-based review may be lower risk when it is limited to documentation completeness and transparent source-field review.

Allowed future rule-based planning examples:

- missing required documentation field
- missing safety-net documentation
- missing follow-up timeframe
- missing open-loop owner
- medication review not documented
- allergy status not documented
- result review status missing

Higher-risk rule behavior requiring stronger review:

- diagnosing a condition
- suggesting a medication
- recommending escalation
- predicting deterioration
- ranking patient urgency
- generating patient-facing instructions
- blocking encounter closure based on clinical interpretation without governance
- changing clinical workflow without clinician override

All future rules must be:

- deterministic where possible
- source-traceable
- versioned
- auditable
- clinician-reviewed
- false-positive trackable
- false-negative reviewable
- non-autonomous

---

## 11. Patient-Facing Output Boundary

Patient-facing output is not approved by this document.

Before any future patient-facing output, the project must document and verify:

- intended audience
- clinician review and approval process
- source data
- clinical safety review
- readability and language review
- local language requirements
- emergency warning boundaries
- privacy review
- audit logging
- liability and claims boundary
- patient communication policy
- local regulatory/legal review

Patient-facing AI output must remain prohibited until explicit future approval and evidence exist.

---

## 12. Commercial Claims Boundary

The project must not use unsupported commercial claims.

Prohibited claims at the current stage:

- production-ready
- pilot-ready
- paid-pilot-ready
- commercially deployable
- clinically validated
- regulatory compliant
- cybersecurity certified
- medical-device-ready
- AI-ready
- predictive analytics ready
- autonomous clinical decision support
- autonomous diagnosis
- autonomous treatment recommendation
- autonomous prescribing
- autonomous emergency triage
- guaranteed safety
- guaranteed compliance
- certified secure
- validated for clinical use

Allowed cautious commercial language:

- documentation-governed project
- evidence-gated roadmap
- OpenEMR-based workflow planning
- Internal Medicine workflow layer under development
- clinician-reviewed documentation support planning
- future pilot candidate after validation and safety gates
- future commercial planning subject to evidence, legal review, support readiness, and local compliance

---

## 13. Jurisdiction and Local Verification

Regulatory, privacy, medical software, professional responsibility, licensing, billing, hosting, and data protection requirements vary by jurisdiction.

Before pilot or commercial use, the project must verify:

- local healthcare software rules
- privacy/data protection requirements
- medical device or SaMD rules
- CDS rules if applicable
- AI governance expectations
- patient consent requirements
- data retention requirements
- audit and access logging requirements
- hosting and backup requirements
- clinical documentation requirements
- billing and claims requirements
- OpenEMR/GPL commercial positioning
- professional liability considerations

This document does not replace local legal, regulatory, privacy, or clinical governance review.

---

## 14. Required Evidence Before Stronger Claims

| Future claim | Required evidence before claim |
|---|---|
| Documentation baseline complete | Documentation index, rendered Markdown, no unsupported claims |
| Runtime LBF valid | Non-production runtime screenshots and workflow test evidence |
| Metadata reproducible | Independent metadata reproduction and verification |
| Clean-install reproducible | Fresh environment reproduction and post-install verification |
| Demo-ready | Synthetic demo data, no-PHI review, demo script, reset plan |
| Pilot-ready | RBAC, audit, backup/restore, training, support, incident response, validation evidence |
| Runtime Clinical Intelligence ready | HITL implementation, audit/explainability, validation cases, clinician review, RBAC, safety controls |
| AI documentation assistant ready | Draft-only workflow, source traceability, clinician acceptance/rejection, safety review |
| Commercially deployable | deployment model, support model, legal review, claims policy, security/privacy baseline |
| Clinically validated | formal clinical validation protocol, clinician reviewers, results, sign-off |
| Regulatory reviewed | jurisdiction-specific legal/regulatory review |
| Cybersecurity reviewed | security testing, access review, dependency review, incident response, backup/restore evidence |

---

## 15. Required Future Documents

Before runtime, pilot, or commercial claims expand, the project should create or complete:

- Validation Evidence Plan
- No-PHI and Safe Repository Development Policy
- Regulatory and CDS Boundary Statement
- Security / Privacy / RBAC / Audit / Backup Baseline
- Testing and Verification Plan
- Failure Modes and Safe Response Library
- Daily Operating Model
- SOP Framework
- Data Model Starter and OpenEMR Mapping
- Clinical Documentation Quality Rules
- Minimum Viable Safe Platform and Release Readiness Gates
- Governance Ownership Model
- Non-production Reproducible Install Plan
- Synthetic Demo Data and Demo Environment Plan
- Training and Support Package
- Commercial Claims, GPL Positioning, and Pilot Packaging Memo

This document defines the regulatory/CDS boundary; it does not complete those future documents.

---

## 16. Governance Requirements for Future CDS or AI Work

Future CDS or AI work must include:

- intended-use statement
- user role definition
- clinical safety boundary
- source-field traceability
- evidence requirements
- validation test cases
- false-positive handling
- false-negative handling
- human-in-the-loop workflow
- clinician override process
- audit trail
- versioning
- rollback or disable switch
- data privacy review
- RBAC review
- local regulatory review
- unsupported-claims review

No future CDS or AI PR should proceed to runtime implementation without those prerequisites.

---

## 17. Risk Register

| Risk | Category | Severity | Current control | Missing control |
|---|---|---:|---|---|
| Unsupported regulatory claim | Regulatory | High | Boundary documentation | Formal legal review |
| Autonomous CDS introduced accidentally | Clinical safety | Critical | Prohibition in documentation | Runtime gates and code review |
| AI output mistaken as final clinical decision | AI safety | Critical | Draft-only principle | Runtime HITL and UI labeling |
| Patient-facing advice generated without review | Clinical/legal | Critical | Explicit prohibition | Patient communication policy |
| SQL executed before safety gates | Technical/data | High | SQL non-execution policy | Approval workflow and rollback evidence |
| PHI committed to GitHub | Privacy | Critical | No-PHI policy | Scanning and review evidence |
| Weak RBAC | Security/privacy | High | Planned RBAC review | Role matrix and testing |
| Audit gaps | Governance | High | Audit planning | Runtime audit evidence |
| Commercial overclaiming | Product/legal | High | Claims boundary | Commercial claims policy |
| OpenEMR/GPL misunderstanding | Legal/commercial | Medium/High | Future GPL memo planned | Legal/commercial review |

---

## 18. Definition of Done

This document is complete when:

- the file path is correct
- Markdown renders cleanly
- current safe intended-use statement is defined
- administrative EHR boundary is defined
- clinical documentation support boundary is defined
- Clinical Decision Support boundary is defined
- SaMD / medical device software risk boundary is defined
- AI boundary is defined
- rule-based review boundary is defined
- patient-facing output boundary is defined
- commercial claims boundary is defined
- jurisdiction/local verification needs are stated
- required evidence before stronger claims is defined
- required future documents are listed
- future CDS/AI governance requirements are defined
- risk register is included
- no PHI is included
- no real patient data is included
- no credentials are included
- no sensitive logs are included
- no database dumps are included
- no executable SQL is included
- no SQL execution is approved
- no runtime AI is introduced
- no machine learning model is introduced
- no predictive model is introduced
- no autonomous CDS is introduced
- no diagnosis, treatment, prescribing, or triage automation is introduced
- no patient-facing AI is introduced
- no OpenEMR core-sensitive changes are introduced
- no production readiness claim is introduced
- no clinical validation claim is introduced
- no regulatory compliance claim is introduced
- no cybersecurity certification claim is introduced
- no commercial deployment readiness claim is introduced

---

## 19. After-Merge Action

After this PR is merged, create the next PR:

`docs(im-core): add security privacy rbac audit backup baseline v0.1`

That next PR should define the baseline for:

- security responsibilities
- privacy responsibilities
- RBAC model
- least privilege
- audit trail expectations
- backup and restore expectations
- incident response expectations
- support access boundaries
- minimum evidence before demo or pilot

---

## 20. Status

`Documentation-only regulatory and CDS boundary statement. No legal certification. No regulatory compliance claim. No runtime implementation. No SQL. No SQL execution. No runtime AI. No OpenEMR core changes. Not production-ready. Not clinically validated. Not cybersecurity certified. Not commercially deployment-ready.`
