# Lifecycle Phase Gate Control V0.1

## AI-Assisted Solo-Owner Applicability

Eligible documentation-stage/pre-runtime changes and separately eligible LS-1
work may use the internal review path in the AI-Assisted Solo-Owner Governance
Policy V0.1 without separate specialist-human approvals as
mandatory internal execution or merge gates.

A general Project Owner decision under that policy does not close a lifecycle
phase. For LS-1 only, `POL-GOV-LS1-001` and a current work-item decision may
authorize the exact Phase 11 preparation/implementation scope recorded below.
Phase 12 Docker/database/runtime evidence requires a separate later decision.
All clinical, PHI, AI/API/FHIR, pilot, deployment, production, release,
validation, compliance, certification, regulatory, and external gates remain.

## LS-1 Controlling Exception

`POL-GOV-LS1-001` is the controlling narrow exception to older blanket
pre-implementation and no-database statements in this document. It applies
only to an eligible, owner-authorized work item. Unresolved eligibility,
scope, evidence, or authority is `HOLD`. All default boundaries continue
outside that exact exception.

## Document Status

| Field | Value |
|---|---|
| Document type | Governance control document |
| Version | V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage governance plus proposed exact LS-1 gate alignment |
| Scope | Lifecycle control including the exact IMCORE-LS-001 Phase 11 candidate |
| Runtime status | No runtime in this amendment; Phase 12 requires separate owner authorization |
| Implementation status | IMCORE-LS-001 Phase 11 only after policy adoption and work-item decision |
| Clinical-use status | Not authorized |
| PHI status | No PHI |
| Real patient data | Not permitted |
| AI implementation | Not permitted |
| Prompt execution | Not permitted |
| Model integration | Not permitted |
| API/FHIR implementation | Not permitted |
| SQL/database migration | No migration; LS-1 metadata writes only under separate Phase 12 authorization |
| OpenEMR core behavior change | Not permitted |
| Production-readiness claim | Not permitted |
| Clinical-validation claim | Not permitted |
| Regulatory-compliance claim | Not permitted |
| Cybersecurity-certification claim | Not permitted |

This document defines lifecycle phase gate control for OpenEMR IM Core.

It is documentation-only.

It does not implement runtime behavior, artificial intelligence, clinical decision support, prompt execution, model integration, API/FHIR integration, SQL/database changes, OpenEMR core behavior changes, clinical-use authorization, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.

---

## 1. Purpose

The purpose of this document is to control lifecycle phase progression for OpenEMR IM Core.

This document prevents uncontrolled movement from current documentation-stage governance into future-gated activities such as implementation planning, runtime evidence, synthetic sandbox execution, pilot planning, deployment planning, clinic launch governance, or post-deployment operations.

Lifecycle phase gates are governance controls.

They are not authorization for:

- implementation
- runtime execution
- PHI handling
- real patient data use
- AI implementation
- prompt execution
- model integration
- API/FHIR implementation
- SQL/database migration
- OpenEMR core behavior change
- clinical use
- pilot execution
- deployment
- production use
- clinical validation
- regulatory compliance
- cybersecurity certification

This document is standards-aware lifecycle planning only.

It is not a compliance claim.

It is not certification.

It is not clinical validation.

It is not production readiness.

It is not clinical-use authorization.

---

## 2. Relationship to Existing Governance System

This document supports the existing OpenEMR IM Core governance system.

It does not replace:

- VFinal+ governance execution system
- VFinal++ Current-Stage Governance Addendum
- Governance Execution Checklist
- PR Audit Trail Template and Procedure
- Post-Merge Verification and Revert Policy
- Controlled Vocabulary and Project Glossary
- Documentation Index and Review Cadence

This document creates a dedicated lifecycle phase gate layer.

It strengthens the existing governance system by:

- making lifecycle phase status explicit
- preventing phase skipping
- defining current-stage allowed work
- defining future-gated work
- requiring entry criteria before phase progression
- requiring exit criteria before phase completion
- requiring documented evidence
- preserving human-owned decisions
- separating planning from execution
- separating merge readiness from release readiness
- separating documentation-stage work from clinical-use authorization

If this document conflicts with stricter existing governance controls, the stricter control applies.

---

## 3. Non-Negotiable Boundaries

OpenEMR IM Core remains:

- documentation-only
- governance-stage
- planning-only
- pre-runtime
- pre-implementation
- pre-clinical-use
- human-supervised
- no PHI
- no real patient data
- no secrets
- no credentials
- no production logs
- no database dumps
- no AI implementation
- no prompt execution
- no model integration
- no API/FHIR implementation
- no SQL/database migration
- no OpenEMR core behavior change
- no autonomous diagnosis
- no autonomous treatment
- no autonomous prescribing
- no autonomous triage
- no clinical-use authorization
- no production-readiness claim
- no clinical-validation claim
- no regulatory-compliance claim
- no cybersecurity-certification claim

These are the default boundaries. The only current exception model is an
eligible LS-1 work item governed by `POL-GOV-LS1-001`, its exact current
Project Owner decision, and the Phase 11/12 separation below.

Any other proposed violation is **NO-GO** unless separately authorized through
an applicable future or external gate. This governance amendment performs no
implementation, Docker, database, runtime, or evidence-collection activity.

---

## 4. Lifecycle Phase Gate Principles

The following principles apply to all lifecycle phase decisions:

1. No phase skipping.
2. No stale GO decisions.
3. No unclear phase status.
4. No future-gated activity without formal authorization.
5. Phase entry criteria must be met before a phase begins.
6. Phase exit criteria must be met before a phase is considered complete.
7. Evidence must be documented.
8. Risks and unresolved gaps must be recorded.
9. Human ownership is required for final decisions.
10. Specialized-domain analysis is required when triggered. Separate
    specialist-human approval is required only by a non-eligible or applicable
    future/external gate; it is not an internal gate for eligible LS-1 work.
11. The stricter boundary always prevails.
12. Completion of one phase does not automatically authorize the next phase.
13. Planning a future phase does not authorize executing that future phase.
14. Merge readiness is not release readiness.
15. Documentation-stage governance is not clinical validation, production readiness, regulatory compliance, cybersecurity certification, or clinical-use authorization.
16. If a phase decision can be interpreted in more than one way, the safest interpretation applies.

---

## 5. Decision States

| Decision state | Meaning |
|---|---|
| GO | The proposed documentation-stage action may proceed within approved scope and boundaries. |
| CONDITIONAL GO | The action may proceed only if documented conditions are satisfied before execution or merge. |
| SPLIT | The proposal contains more than one scope and must be divided into narrower PRs or documents. |
| DEFER | The proposal may be useful but is not appropriate for the current phase or lacks sufficient evidence. |
| NO-GO | The proposal must not proceed because it violates boundaries, lacks evidence, creates unsafe claims, or exceeds the authorized phase. |
| FUTURE-GATED ONLY | The topic may be retained as a future planning concept but is not authorized for current execution. |
| REVERT | A merged change must be reverted because it introduced a safety, privacy, claim-control, source-of-truth, or boundary breach. |

No decision is permanent.

Any GO decision expires when repository state, evidence, risk level, scope, branch, PR status, review status, or GitHub check status changes.

---

## 6. Phase List Overview

The controlled lifecycle phase model is:

| Phase | Name | Current authorization status |
|---:|---|---|
| 0 | Governance Foundation | Current |
| 1 | Documentation Architecture and Source-of-Truth Stabilization | Current |
| 2 | Intended Use, Scope, Users, and Claims Definition | Current / Next |
| 3 | Clinical Workflow Definition | Next / Planning-only |
| 4 | Requirements and Traceability Planning | Current / Next |
| 5 | Clinical Safety and Risk Management Planning | Current / Next |
| 6 | Privacy, Security, and Data Governance Planning | Current / Next |
| 7 | Technical Architecture Planning | Later / Planning-only |
| 8 | Configuration and Change-Control Planning | Current / Next |
| 9 | Synthetic Sandbox Planning | Later / Future-gated execution |
| 10 | Verification and Validation Planning | Later / Planning-only |
| 11 | Implementation Readiness Gate | Exact IMCORE-LS-001 scope only after policy adoption and work-item decision |
| 12 | Synthetic Runtime Evidence Gate | Separate owner authorization required for IMCORE-LS-001; otherwise future-gated |
| 13 | Usability and Clinical Review Planning | Later / Planning-only |
| 14 | Pilot Readiness Gate | Future-gated only |
| 15 | Controlled Pilot Planning | Future-gated only |
| 16 | Deployment Readiness Gate | Future-gated only |
| 17 | Clinic Launch Governance | Future-gated only |
| 18 | Monitoring, Maintenance, Incident Management, and Continuous Improvement | Future-gated only |

No broad future-gated phase is authorized. Phase 11 is aligned only for the
exact `IMCORE-LS-001` candidate after the LS-1 amendment is owner-adopted and
merged and a complete work-item decision is recorded. On this governance
branch, that decision is not recorded and the candidate remains `HOLD`.

---

## 7. Phase Detail Controls

Each lifecycle phase must be controlled by the following fields:

- phase number
- phase name
- objective
- current authorization status
- scope
- required documents
- required evidence
- suggested owners
- entry criteria
- exit criteria
- GitHub PR strategy
- main risks
- stop rules
- prohibited actions
- PHI status
- runtime status
- AI status
- SQL/database status
- API/FHIR status
- clinical-use status
- production-readiness status
- GO / NO-GO gate

The phase summaries below define the current control baseline.

---

## 8. Phase 0 — Governance Foundation

Objective: Establish mandatory governance execution discipline.

Current status: Current.

Scope:

- governance rules
- PR discipline
- audit trail
- boundary control
- claim-control
- post-merge verification
- revert protocol

Required documents may include:

- VFinal+ governance execution system
- VFinal++ Current-Stage Governance Addendum
- Governance Execution Checklist
- PR Audit Trail Template and Procedure
- Post-Merge Verification and Revert Policy
- Controlled Vocabulary and Project Glossary

Required evidence:

- merged governance documents
- PR audit trail
- repository checks
- post-merge verification

Suggested owners:

- governance owner
- human project owner

Entry criteria:

- repository exists
- project boundaries are known
- current stage is documentation-stage governance

Exit criteria:

- governance controls adopted for documentation-stage work
- no safety boundary breach
- no unsupported claim

GitHub PR strategy:

- one narrow governance PR at a time

Main risks:

- overclaiming
- stale GO
- mixed-scope PRs
- replacing governance baseline silently

Stop rules:

- stop if runtime, PHI, AI implementation, SQL, API/FHIR, OpenEMR behavior change, or clinical-use claim appears

Prohibited actions:

- runtime
- PHI
- real patient data
- AI implementation
- API/FHIR implementation
- SQL/database migration
- OpenEMR core behavior change
- clinical use

Boundary status:

- no PHI
- no runtime
- no AI
- no SQL
- no API/FHIR
- no clinical use
- not production ready

Gate decision:

- GO only for documentation-stage governance

---

## 9. Phase 1 — Documentation Architecture and Source-of-Truth Stabilization

Objective: Stabilize documentation structure and prevent duplicate or conflicting sources of truth.

Current status: Current.

Scope:

- Documentation Index
- review cadence
- source-of-truth control
- active versus historical document distinction
- documentation coverage measurement

Required documents may include:

- Documentation Index and Review Cadence
- source-of-truth notes
- index coverage evidence

Required evidence:

- file inventory
- index coverage measurement
- duplicate checks
- post-merge verification

Suggested owners:

- documentation owner
- governance owner

Entry criteria:

- Phase 0 controls active

Exit criteria:

- active source-of-truth documents identified
- duplicate risk controlled
- index coverage acceptable
- orphan documents explained or corrected

GitHub PR strategy:

- index-only PRs
- source-of-truth-only PRs
- one documentation architecture concern per PR

Main risks:

- conflicting documents
- unclear active/historical status
- index drift

Stop rules:

- stop if a new document duplicates an active source of truth
- stop if index changes are mixed with unrelated governance changes without approval

Prohibited actions:

- runtime
- implementation
- clinical-use claims
- production-readiness claims

Boundary status:

- planning-only

Gate decision:

- GO if documentation-only and non-duplicative

---

## 10. Phase 2 — Intended Use, Scope, Users, and Claims Definition

Objective: Define intended purpose, excluded scope, user groups, and allowable claims.

Current status: Current / Next.

Scope:

- intended-use planning
- excluded-use planning
- intended users
- prohibited users if applicable
- current-stage claims
- prohibited claims
- future-gated claims
- claim-control boundaries

Required documents may include:

- Intended Use, Scope, Users, and Claims document
- claims register
- exclusion register

Required evidence:

- human-reviewed scope statement
- prohibited claims list
- relationship to current governance boundaries

Suggested owners:

- product owner
- clinical safety reviewer
- governance owner

Entry criteria:

- Phase 0 and Phase 1 controls active

Exit criteria:

- intended use and exclusions documented without clinical-use authorization
- claims register created or planned
- no production, validation, compliance, certification, or clinical-use claim

GitHub PR strategy:

- one intended-use document PR
- no runtime or implementation content

Main risks:

- overclaiming
- implied clinical validation
- vague users
- excessive scope

Stop rules:

- stop if document claims clinical use, production readiness, regulatory compliance, cybersecurity certification, or clinical validation

Prohibited actions:

- clinical-use authorization
- validation claim
- compliance claim
- certification claim

Boundary status:

- no clinical use
- not validation
- not compliance

Gate decision:

- GO for planning-only scope control

---

## 11. Phase 3 — Clinical Workflow Definition

Objective: Define future clinical workflow assumptions without authorizing clinical use.

Current status: Next / Planning-only.

Scope:

- workflow description
- user tasks
- workflow assumptions
- excluded workflows
- workflow risks
- workflow handoff assumptions

Required documents may include:

- Clinical Workflow Planning document
- workflow assumptions register
- unresolved workflow questions

Required evidence:

- workflow assumptions
- reviewer comments
- unresolved gaps
- clinical safety review trigger if applicable

Suggested owners:

- clinical workflow owner
- clinician reviewer if available
- governance owner

Entry criteria:

- intended use and users defined or explicitly marked as pending

Exit criteria:

- workflow assumptions documented as planning-only
- no clinical-use authorization
- unresolved workflow hazards recorded

GitHub PR strategy:

- one workflow area per PR

Main risks:

- implied clinical use
- missed workflow hazards
- unsafe human role assumptions

Stop rules:

- stop if workflow is presented as validated, deployed, operational, or safe for patient care

Prohibited actions:

- clinical use
- autonomous diagnosis
- autonomous treatment
- autonomous prescribing
- autonomous triage

Boundary status:

- pre-clinical-use

Gate decision:

- CONDITIONAL GO with clinical review if needed

---

## 12. Phase 4 — Requirements and Traceability Planning

Objective: Establish requirements governance and traceability structure.

Current status: Current / Next.

Scope:

- user needs
- system requirements
- software requirements
- acceptance criteria
- RTM template
- traceability identifiers

Required documents may include:

- Requirements Management Plan
- Requirements Traceability Matrix
- requirements identifier scheme

Required evidence:

- requirement ID scheme
- RTM columns
- review evidence
- traceability gap list

Suggested owners:

- requirements owner
- governance owner
- risk owner when applicable

Entry criteria:

- intended use and scope available or explicitly marked as pending

Exit criteria:

- requirements process and RTM template created
- no implementation authorization
- traceability gaps identified

GitHub PR strategy:

- template PR first
- content PRs later
- no implementation content

Main risks:

- requirements imply implementation
- missing traceability
- acceptance criteria imply validation evidence

Stop rules:

- stop if requirements authorize code, runtime, clinical use, or validation claims

Prohibited actions:

- implementation
- runtime
- validation claims
- clinical-use authorization

Boundary status:

- planning-only

Gate decision:

- GO for documentation-only requirements planning

---

## 13. Phase 5 — Clinical Safety and Risk Management Planning

Objective: Establish risk management and clinical safety planning structure.

Current status: Current / Next.

Scope:

- risk management file structure
- hazard log
- hazardous situations
- harms
- risk controls as planning fields
- residual risk planning fields
- clinical safety case skeleton

Required documents may include:

- Risk Management File Index
- Hazard Log
- Risk-Control Traceability
- Clinical Safety Case Skeleton

Required evidence:

- hazard IDs
- risk-control fields
- unresolved risk list
- safety assumptions
- review status

Suggested owners:

- risk owner
- clinical safety owner
- human project owner

Entry criteria:

- intended use and workflow assumptions available or explicitly marked pending

Exit criteria:

- initial risk and safety artifact structure exists
- no risk control is claimed implemented
- no safety claim is presented as proven

GitHub PR strategy:

- one risk artifact per PR
- one clinical safety artifact per PR

Main risks:

- missing hazards
- false safety claims
- risk control implementation claims
- clinical validation implication

Stop rules:

- stop if risk controls are claimed implemented, verified, validated, or clinically accepted
- stop if the system is described as safe for patient care

Prohibited actions:

- clinical validation claims
- safe-for-clinical-use claims
- clinical-use authorization

Boundary status:

- planning-only
- not clinical validation

Gate decision:

- GO for planning artifacts only

---

## 14. Phase 6 — Privacy, Security, and Data Governance Planning

Objective: Define current no-PHI boundary and future privacy/security planning controls.

Current status: Current / Next.

Scope:

- no-PHI policy
- no-real-patient-data boundary
- data classification planning
- privacy review triggers
- security readiness planning
- secrets and credentials boundary

Required documents may include:

- Data Governance and No-PHI Plan
- Cybersecurity Readiness Gate
- privacy/security review trigger list

Required evidence:

- boundary checks
- no-PHI statement
- no real patient data statement
- future review triggers

Suggested owners:

- privacy owner
- security owner
- governance owner

Entry criteria:

- governance boundaries active

Exit criteria:

- privacy/security planning artifacts exist
- no PHI or real patient data introduced
- revert criteria documented

GitHub PR strategy:

- one privacy or security document per PR

Main risks:

- PHI exposure
- secrets
- credentials
- production logs
- database dumps

Stop rules:

- stop and revert if PHI, real patient data, secrets, credentials, production logs, or database dumps appear

Prohibited actions:

- PHI
- real patient data
- secrets
- credentials
- production logs
- database dumps

Boundary status:

- no PHI
- no real patient data

Gate decision:

- GO for planning-only controls

---

## 15. Phase 7 — Technical Architecture Planning

Objective: Define future architecture concepts without implementation.

Current status: Later / Planning-only.

Scope:

- architecture assumptions
- constraints
- non-runtime diagrams
- architecture decision records
- future technical boundary planning

Required documents may include:

- Technical Architecture Planning document
- ADR template
- architecture assumptions register

Required evidence:

- architecture assumptions
- boundary statements
- source-of-truth links

Suggested owners:

- technical owner
- architecture reviewer
- governance owner

Entry criteria:

- requirements and risk planning initiated or explicitly marked pending

Exit criteria:

- architecture planning documented without code, runtime, SQL, API/FHIR implementation, AI integration, or OpenEMR behavior change

GitHub PR strategy:

- one architecture concept per PR

Main risks:

- architecture interpreted as implementation readiness
- hidden implementation requirements
- FHIR/API/SQL scope creep

Stop rules:

- stop if code, runtime, SQL, API/FHIR, OpenEMR behavior change, AI integration, prompt execution, or model integration appears

Prohibited actions:

- runtime
- implementation
- SQL/database migration
- API/FHIR implementation
- AI/model integration
- OpenEMR core behavior change

Boundary status:

- pre-runtime

Gate decision:

- CONDITIONAL GO for planning-only architecture

---

## 16. Phase 8 — Configuration and Change-Control Planning

Objective: Define baselines, versioning, change impact, and controlled transitions.

Current status: Current / Next.

Scope:

- configuration management planning
- change impact assessment
- baseline naming
- versioning expectations
- affected-document review
- affected-risk review
- affected-claim review

Required documents may include:

- Configuration Management Plan
- Change Impact Assessment Template
- baseline register template

Required evidence:

- baseline rules
- change-control fields
- owner sign-off fields
- post-change verification plan

Suggested owners:

- configuration owner
- governance owner
- quality owner if applicable

Entry criteria:

- governance controls active

Exit criteria:

- change-control planning adopted
- no implementation or release claim introduced

GitHub PR strategy:

- one template or plan per PR

Main risks:

- uncontrolled baselines
- undocumented change impact
- accidental release-readiness implication

Stop rules:

- stop if change-control document authorizes implementation, release, deployment, or clinical use without future gate

Prohibited actions:

- implementation
- release claim
- deployment claim
- production-readiness claim

Boundary status:

- planning-only

Gate decision:

- GO for documentation-only planning

---

## 17. Phase 9 — Synthetic Sandbox Planning

Objective: Plan possible future non-production synthetic-only sandbox activity without authorizing runtime execution.

Current status: Later / future-gated execution.

Scope:

- synthetic-only data rules
- sandbox assumptions
- non-production constraints
- future privacy/security review triggers

Required documents may include:

- Synthetic Sandbox Planning document
- synthetic data boundary document
- sandbox stop rules

Required evidence:

- synthetic data boundary
- privacy review trigger
- security review trigger
- clinical safety review trigger if applicable

Suggested owners:

- technical owner
- privacy owner
- security owner
- governance owner

Entry criteria:

- privacy/security planning complete or explicitly marked pending

Exit criteria:

- sandbox plan exists without runtime authorization

GitHub PR strategy:

- planning-only PR

Main risks:

- real patient data
- PHI
- unauthorized runtime
- production-environment creep

Stop rules:

- stop if sandbox work begins, real data is implied, runtime is executed, or production environment is referenced as allowed

Prohibited actions:

- PHI
- real patient data
- production environment
- runtime execution unless future authorized

Boundary status:

- planning-only
- no runtime authorized

Gate decision:

- DEFER or FUTURE-GATED ONLY unless explicitly planning-only

---

## 18. Phase 10 — Verification and Validation Planning

Objective: Define future verification and validation planning without validation claims.

Current status: Later / Planning-only.

Scope:

- verification strategy
- validation master planning
- acceptance criteria model
- future evidence model
- traceability expectations

Required documents may include:

- Validation Master Plan Skeleton
- Verification Strategy
- Test Evidence Model

Required evidence:

- draft verification methods
- draft validation-planning assumptions
- acceptance criteria structure
- traceability expectations

Suggested owners:

- verification and validation owner
- requirements owner
- risk owner
- governance owner

Entry criteria:

- requirements and risk planning established or explicitly marked pending

Exit criteria:

- V&V planning document created without verification or validation claim

GitHub PR strategy:

- one V&V planning PR at a time

Main risks:

- false validation claim
- clinical validation implication
- production-readiness implication

Stop rules:

- stop if document says validated, clinically validated, production ready, or safe for clinical use

Prohibited actions:

- validation claims
- clinical validation claims
- production-readiness claims
- clinical-use claims

Boundary status:

- planning-only
- not validation

Gate decision:

- GO for planning-only V&V documents

---

## 19. Phase 11 — Implementation Readiness Gate

Objective: Authorize only the exact bounded preparation and implementation
scope for `IMCORE-LS-001 — Reproducible Local-Synthetic Visit Context LBF
Seed`.

Current status: Authorized only after all of these conditions are current:

- `POL-GOV-LS1-001` is Project-Owner-adopted and merged;
- the candidate packet is complete;
- the Project Owner records a Phase 11 work-item decision;
- the exact base SHA, branch, implementation/test files, and dependency
  boundary are recorded; and
- every LS-1 eligibility condition is established.

On this governance branch those conditions are not complete, no implementation
is authorized, and the candidate state is `HOLD`.

Allowed Phase 11 scope after authorization:

- create the recorded implementation branch from the recorded base SHA;
- prepare one bounded Visit Context seed implementation;
- prepare its guarded rollback behavior;
- run only declared static or isolated tests that do not start Docker, access a
  database, or execute OpenEMR runtime; and
- update directly related work-item and evidence documents.

Prohibited in Phase 11:

- Docker execution or image pulls;
- database connection, read, or write;
- runtime evidence collection;
- schema migration;
- patient or encounter records;
- PHI, real data, or de-identified real data;
- AI/model/prompt/agent or API/FHIR operation;
- dependency or OpenEMR core-sensitive change without separate authority; and
- pilot, deployment, production, external release, clinical use, validation,
  compliance, certification, regulatory, or independent-assurance claims.

Required evidence:

- complete `IMCORE-LS-001` packet and `IM-0005` traceability;
- owner-reviewed eligibility and non-independence disclosure;
- exact repository, base/head, file, dependency, data, database-design, Git,
  publication, test, rollback, and stop boundaries;
- GPT multidisciplinary advisory review; and
- a current Project Owner final accountable decision.

Exit criteria:

- authorized Phase 11 implementation is complete with passing required checks
  and current owner decision; or
- `HOLD`/`REJECT` is recorded.

Phase 11 completion does not authorize Phase 12.

---
## 20. Phase 12 — Synthetic Runtime Evidence Gate

Objective: Govern subsequent local-synthetic Docker/database/runtime evidence
for `IMCORE-LS-001` only under a separate later owner authorization.

Current status: Separate Project Owner authorization required. Future-gated and
`HOLD` until a Phase 12 decision is recorded.

Entry criteria:

- adopted LS-1 policy;
- eligible implementation commit identified;
- Phase 11 exit evidence accepted;
- complete six-row database manifest;
- current local environment and schema compatibility evidence;
- unique disposable Docker project, network, bind-mount, and volume identifiers;
- exact commands, tests, rollback, evidence destinations, and cleanup plan;
- GPT advisory review; and
- a separate Project Owner final accountable decision.

Allowed only after that decision:

- declared local disposable Docker resources;
- metadata-only reads of the six declared keys;
- parameterized transactional writes to the two
  `layout_group_properties` rows and four `layout_options` rows;
- absent, exact-match no-op, fail-closed conflict, injected-failure, guarded
  rollback, unrelated-invariant, and cleanup tests; and
- sanitized local-synthetic engineering evidence.

Prohibited:

- any other table or row;
- schema migration;
- patient or encounter records;
- PHI, real data, de-identified real data, database dumps, or sensitive logs;
- unrelated Docker resources;
- runtime AI/model/prompt/agent or operational API/FHIR;
- clinical use, pilot, deployment, production, or external release; and
- validation, compliance, certification, regulatory, production-readiness, or
  independent-assurance claims.

Exit criteria:

- evidence accepted, revised, rejected, or deferred by the Project Owner;
- exact-match idempotency and guarded rollback are verified; and
- disposable resources are accounted for without affecting unrelated
  resources.

A Phase 12 result remains local-synthetic engineering evidence only.

---
## 21. Phase 13 — Usability and Clinical Review Planning

Objective: Plan future usability and clinical review without clinical-use authorization.

Current status: Later / Planning-only.

Scope:

- use scenarios
- use-error risks
- clinician review planning
- human factors assumptions
- review protocol planning

Required documents may include:

- Human Factors and Usability Plan
- Clinical Review Plan
- use-error analysis template

Required evidence:

- use-error analysis
- reviewer criteria
- workflow assumptions
- unresolved usability risks

Suggested owners:

- human factors owner
- clinical reviewer
- clinical safety owner

Entry criteria:

- workflow and risk planning available or explicitly marked pending

Exit criteria:

- usability review plan exists without clinical-use claim or clinical validation claim

GitHub PR strategy:

- planning-only PR

Main risks:

- missed use error
- implied clinical validation
- unsafe clinical workflow assumptions

Stop rules:

- stop if review is framed as clinical validation, clinical approval, or safe-for-patient-care evidence

Prohibited actions:

- clinical validation
- clinical-use authorization
- patient-care claims

Boundary status:

- pre-clinical-use

Gate decision:

- CONDITIONAL GO for planning only

---

## 22. Phase 14 — Pilot Readiness Gate

Objective: Decide whether controlled pilot planning may begin.

Current status: Future-gated only.

Scope:

- readiness review only
- pilot planning authorization decision
- no pilot execution by default

Required documents may include:

- Pilot Readiness Review Report
- open-risk register
- local legal/regulatory verification trigger
- training/support/incident readiness summary

Required evidence:

- evidence package
- open-risk review
- privacy/security review
- clinical safety review
- human owner decision
- local legal/regulatory verification trigger

Suggested owners:

- human project owner
- clinical safety owner
- privacy owner
- security owner
- local legal/regulatory reviewer if applicable

Entry criteria:

- prior artifacts and evidence complete

Exit criteria:

- pilot planning authorized or rejected

GitHub PR strategy:

- gate PR only

Main risks:

- premature pilot
- missing local review
- clinical-use creep

Stop rules:

- stop if pilot begins without authorization

Prohibited actions:

- clinical use
- production use
- unsupported pilot

Boundary status:

- future-gated

Gate decision:

- FUTURE-GATED ONLY

---

## 23. Phase 15 — Controlled Pilot Planning

Objective: Plan a future controlled pilot if separately authorized.

Current status: Future-gated only.

Scope:

- pilot protocol
- site controls
- training
- support
- incident handling
- rollback expectations

Required documents may include:

- Controlled Pilot Plan
- pilot protocol
- training plan
- support model
- incident plan

Required evidence:

- human approval
- training plan
- support model
- incident process
- clinical safety review
- privacy/security review

Suggested owners:

- clinical operations owner
- clinical safety owner
- support owner
- human project owner

Entry criteria:

- pilot readiness gate approves planning

Exit criteria:

- pilot plan approved, deferred, split, or rejected

GitHub PR strategy:

- one pilot-planning PR per topic

Main risks:

- clinical-use creep
- inadequate support
- insufficient incident management

Stop rules:

- stop if pilot execution starts or clinical use is implied without authorization

Prohibited actions:

- clinic deployment
- production use
- unapproved patient care

Boundary status:

- future-gated

Gate decision:

- FUTURE-GATED ONLY

---

## 24. Phase 16 — Deployment Readiness Gate

Objective: Decide whether deployment planning or deployment may proceed.

Current status: Future-gated only.

Scope:

- deployment readiness assessment
- release readiness linkage
- backup and restore readiness
- disaster recovery readiness
- support and training readiness

Required documents may include:

- Deployment Readiness Report
- Backup/Restore Plan
- Disaster Recovery Plan
- Release Readiness Evidence
- support readiness report

Required evidence:

- evidence package
- support readiness
- training readiness
- risk review
- privacy/security review
- clinical safety review
- rollback plan

Suggested owners:

- release owner
- deployment owner
- clinical safety owner
- privacy/security owners
- human project owner

Entry criteria:

- pilot evidence and required reviews available if applicable

Exit criteria:

- deployment authorized, deferred, split, or rejected

GitHub PR strategy:

- gate PR only

Main risks:

- production-readiness overclaim
- operational gaps
- missing rollback
- unsupported clinical operations

Stop rules:

- stop if deployment starts without authorization

Prohibited actions:

- production readiness claim
- deployment claim
- clinical-use claim

Boundary status:

- future-gated

Gate decision:

- FUTURE-GATED ONLY

---

## 25. Phase 17 — Clinic Launch Governance

Objective: Govern future clinic launch only if separately authorized.

Current status: Future-gated only.

Scope:

- clinic launch controls
- accountable owners
- training
- support
- incident response
- monitoring readiness
- human sign-off

Required documents may include:

- Clinic Launch Governance Plan
- launch checklist
- clinical owner sign-off
- support escalation plan
- incident response plan

Required evidence:

- human sign-off
- site readiness
- support readiness
- incident process
- training completion
- local legal/regulatory verification if applicable

Suggested owners:

- clinical accountable owner
- operations owner
- clinical safety owner
- support owner
- human project owner

Entry criteria:

- deployment readiness gate approves

Exit criteria:

- launch authorized, limited, monitored, deferred, or rejected

GitHub PR strategy:

- gate and launch-control PRs only

Main risks:

- patient safety
- unsupported operations
- legal/regulatory mismatch
- unresolved critical risk

Stop rules:

- stop on missing authorization, missing support, missing training, unresolved critical risk, or missing escalation route

Prohibited actions:

- unauthorized clinical use
- production claim
- validation claim

Boundary status:

- future-gated

Gate decision:

- FUTURE-GATED ONLY

---

## 26. Phase 18 — Monitoring, Maintenance, Incident Management, and Continuous Improvement

Objective: Govern future operational monitoring and maintenance.

Current status: Future-gated only.

Scope:

- incident handling
- maintenance
- post-deployment monitoring
- continuous improvement
- corrective action planning
- safety/security issue escalation

Required documents may include:

- Incident Management Plan
- Maintenance Plan
- Monitoring Plan
- Post-Deployment Surveillance Plan
- corrective action planning process

Required evidence:

- incident records
- maintenance records
- monitoring evidence
- safety issue reviews
- corrective action records

Suggested owners:

- operations owner
- clinical safety owner
- quality owner
- privacy/security owner if applicable

Entry criteria:

- clinic launch authorized

Exit criteria:

- ongoing controlled monitoring and maintenance

GitHub PR strategy:

- narrow operational governance PRs
- no unreviewed clinical changes

Main risks:

- unresolved incidents
- weak monitoring
- unsafe drift
- uncontrolled changes

Stop rules:

- stop on critical safety/security issue without mitigation

Prohibited actions:

- uncontrolled production operation
- unreviewed clinical changes
- unreviewed safety-impacting changes

Boundary status:

- future-gated

Gate decision:

- FUTURE-GATED ONLY

---

## 27. Current-Stage Allowed Phases

Documentation-stage and planning-only work remains allowed in Phases 0, 1, 2,
4, 5, 6, and 8 under existing controls.

Phase 11 is additionally aligned only for the exact `IMCORE-LS-001`
preparation/implementation scope after `POL-GOV-LS1-001` is adopted and merged
and a complete current Project Owner work-item decision is recorded.

No other implementation is authorized. The governance amendment itself
performs no implementation, Docker execution, image pull, database activity,
runtime operation, or evidence collection.

All work remains no-PHI, no-real-data, no-clinical-use, no-runtime-AI/API/FHIR,
no-migration, no-deployment, no-release, and no prohibited-claim work.

---
## 28. Future-Gated Phases

The following remain future-gated:

- Phase 9 — Synthetic Sandbox Planning, except planning-only documentation;
- Phase 12 — Synthetic Runtime Evidence Gate, including `IMCORE-LS-001` until
  its separate owner authorization;
- Phase 14 — Pilot Readiness Gate;
- Phase 15 — Controlled Pilot Planning;
- Phase 16 — Deployment Readiness Gate;
- Phase 17 — Clinic Launch Governance; and
- Phase 18 — Monitoring, Maintenance, Incident Management, and Continuous
  Improvement.

Phase 11 remains future-gated for every work item except the exact eligible and
owner-authorized `IMCORE-LS-001` preparation/implementation scope.

No phase language authorizes PHI, real data, clinical use, production,
AI/model/prompt/agent execution, operational API/FHIR integration, schema
migration, external release, validation, compliance, certification, regulatory
claims, or independent assurance.

---
## 29. Phase Entry Checklist

Before entering any new phase, the following checklist must be completed:

- repository state verified
- current phase identified
- prior phase exit criteria satisfied or explicitly documented as not applicable
- risk level assigned
- source-of-truth checked
- duplicate-document risk checked
- evidence identified
- claim-control check completed
- boundary check completed
- controlled vocabulary check completed
- specialized review trigger assessed
- human owner identified
- smallest safe PR selected
- no pending checks if merge is involved
- no failing checks if merge is involved
- no stale GO decision

A new phase is not entered merely because a document was merged.

---

## 30. Phase Exit Checklist

Before declaring any phase complete, the following checklist must be completed:

- required documents exist
- required evidence is recorded
- open risks are listed
- unresolved gaps are listed
- claims checked
- boundaries preserved
- source-of-truth status confirmed
- post-merge verification completed if applicable
- re-measurement completed if applicable
- human owner accepts the result
- next phase is not automatically authorized
- any future-gated work remains future-gated unless separately approved

Phase completion means only that the defined phase exit criteria were satisfied.

It does not create clinical-use authorization, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.

---

## 31. No Phase Skipping Rule

No project work may skip from governance documentation into:

- runtime
- implementation
- prototype execution
- PHI handling
- real patient data use
- AI implementation
- prompt execution
- model integration
- API/FHIR implementation
- SQL/database migration
- OpenEMR core behavior change
- pilot execution
- deployment
- clinic launch
- production operations
- clinical use

Any attempt to skip phases is a NO-GO.

If a proposed change contains both current-stage documentation work and future-gated work, the decision is SPLIT, DEFER, or NO-GO.

---

## 32. Current-Stage Stop Rules

These default stop rules apply outside an exact current LS-1 decision. Within
LS-1, the stricter work-item HOLD/stop rules and Phase 11/12 authority boundary
apply.

Current-stage work must stop if any PR, document, branch, or proposed change introduces or implies:

- runtime activity
- PHI
- real patient data
- secrets
- credentials
- production logs
- database dumps
- AI implementation
- prompt execution
- model integration
- API/FHIR implementation
- SQL/database migration
- OpenEMR core behavior change
- autonomous diagnosis
- autonomous treatment
- autonomous prescribing
- autonomous triage
- clinical-use claim
- production-readiness claim
- clinical-validation claim
- regulatory-compliance claim
- cybersecurity-certification claim

If such content is discovered before merge, the PR must be blocked.

If such content is discovered after merge, it is an immediate revert candidate unless a safer documented corrective action is explicitly justified for a low-risk documentation defect.

Safety, privacy, runtime, clinical-use, and claim-control breaches are not fix-forward candidates by default.

---

## 33. Future Runtime Gate Boundary

This governance amendment authorizes no runtime activity.

For `IMCORE-LS-001` only, a later Phase 12 Project Owner decision may authorize
the exact local-synthetic Docker/database/runtime evidence scope declared in
`POL-GOV-LS1-001` and the candidate packet. The decision must define the
environment, Docker resources, synthetic data, six database rows, commands,
tests, rollback, evidence, stop rules, cleanup, and invalidation triggers.

No Phase 12 activity may begin from a Phase 11 decision alone. Until the
separate decision is recorded, Docker execution, image pulls, database access,
database writes, and runtime evidence remain `HOLD`.

All broader runtime, PHI, real-data, clinical, AI/API/FHIR, migration, pilot,
deployment, production, external-release, validation, compliance,
certification, regulatory, and independent-assurance activity remains
future/external-gated.

---

## 34. GitHub Execution Rules

Lifecycle phase changes must be executed in GitHub using the following rules:

- one PR
- one purpose
- one narrow change
- no mixed scope
- PR body must include an audit trail
- changed files must match the approved scope
- documentation-only boundary must be explicit
- safety and privacy boundary must be explicit
- claims boundary must be explicit
- source-of-truth and index impact must be stated
- 0 failing checks before merge
- 0 pending checks before merge
- human-owned GO before merge
- post-merge verification required
- re-measurement required when documentation coverage, source-of-truth status, governance structure, or phase status is affected
- no stale GO decisions

If repository state changes after a GO decision, the GO expires and the decision must be reassessed.

---

## 35. Acceptance Criteria

This document is acceptable only if:

- it remains a governance/documentation amendment
- it introduces no runtime behavior or execution
- its only implementation alignment is the conditional, exact
  `IMCORE-LS-001` Phase 11 scope
- it performs no implementation
- it introduces no AI implementation
- it introduces no prompt execution
- it introduces no model integration
- it introduces no API/FHIR implementation
- it introduces no SQL/database migration
- it introduces no OpenEMR core behavior change
- it introduces no PHI
- it introduces no real patient data
- it introduces no secrets
- it introduces no credentials
- it introduces no production logs
- it introduces no database dumps
- it makes no clinical-use authorization claim
- it makes no production-readiness claim
- it makes no clinical-validation claim
- it makes no regulatory-compliance claim
- it makes no cybersecurity-certification claim
- it strengthens lifecycle governance
- it prevents phase skipping
- it preserves human ownership
- it keeps future-stage work future-gated
- it uses conservative wording
- it remains standards-aware planning only

---

## 36. Final Statement

Lifecycle Phase Gate Control V0.1 retains conservative phase governance while
aligning one narrow exception:

- Phase 11 may authorize only the exact eligible `IMCORE-LS-001`
  preparation/implementation scope after policy adoption and a complete
  Project Owner work-item decision.
- Phase 12 local-synthetic Docker/database/runtime evidence requires a separate
  later Project Owner authorization.
- This governance amendment performs neither phase's implementation or
  execution.

The review model is GPT multidisciplinary advisory review plus the Project
Owner's final accountable internal decision. It is AI-assisted and
non-independent. Separate specialist-human approvals are not mandatory internal
gates for eligible LS-1 work.

Nothing here authorizes PHI, real or de-identified real data, patient-care
operation, clinical use, AI/model/prompt/agent execution, operational API/FHIR,
schema migration, production security changes, pilot, deployment, production,
external release, clinical validation, compliance, regulatory claims,
cybersecurity/privacy certification, legal/contractual authority, production
readiness, or independent assurance. The safest applicable interpretation
prevails.
