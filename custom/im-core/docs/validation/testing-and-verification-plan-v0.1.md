# Testing and Verification Plan V0.1 — OpenEMR IM Core

## 1. Purpose

This document defines the testing and verification planning baseline for OpenEMR IM Core.

It establishes what must be tested, verified, documented, and reviewed before any stronger claims are made about:

- documentation quality
- LBF metadata stability
- runtime LBF rendering
- Internal Medicine workflow usability
- role-based access control
- audit trail behavior
- backup and restore readiness
- no-PHI evidence safety
- clinical safety boundaries
- future Clinical Intelligence boundaries
- demo readiness
- pilot readiness
- commercial readiness

This document is documentation-only.

It does not execute tests.

It does not provide validation results.

It does not approve SQL execution.

It does not activate runtime AI.

It does not modify OpenEMR runtime behavior.

It does not modify OpenEMR core-sensitive paths.

It does not claim production readiness, pilot readiness, commercial deployment readiness, clinical validation, regulatory compliance, cybersecurity certification, or clean-install reproducibility.

---

## 2. Current Status

| Area | Current status |
|---|---|
| Project maturity | Documentation foundation / pre-runtime validation planning |
| Testing framework | Planned by this document |
| Runtime test execution | Not performed by this document |
| LBF metadata baseline | Previously documented; independent reproduction still required |
| Runtime LBF rendering | Not proven by this document |
| Workflow validation | Not proven by this document |
| RBAC validation | Not proven by this document |
| Audit validation | Not proven by this document |
| Backup/restore validation | Not proven by this document |
| Clinical Intelligence runtime validation | Not approved |
| SQL execution | Not approved |
| Runtime AI | Not approved |
| Production readiness | Not claimed |
| Pilot readiness | Not claimed |
| Commercial readiness | Not claimed |

---

## 3. Relationship to Prior Documents

This document depends on the current OpenEMR IM Core governance sequence:

| Prior document | Relationship |
|---|---|
| `custom/im-core/docs/project-state/current-project-state.md` | Defines known project state and current limitations. |
| `custom/im-core/docs/index.md` | Provides documentation map. |
| `custom/im-core/docs/golden-catalog-alignment/golden-catalog-gap-assessment-v0.1.md` | Defines Golden Catalog gaps. |
| `custom/im-core/docs/golden-catalog-alignment/master-execution-guide-v0.1.md` | Defines master execution doctrine and roadmap. |
| `custom/im-core/docs/validation/validation-evidence-plan-v0.1.md` | Defines evidence gates and validation evidence model. |
| `custom/im-core/docs/security-privacy/no-phi-safe-repository-development-policy-v0.1.md` | Defines repository safety and no-PHI rules. |
| `custom/im-core/docs/regulatory/regulatory-and-cds-boundary-statement-v0.1.md` | Defines regulatory, CDS, SaMD, AI, and claims boundaries. |
| `custom/im-core/docs/security-privacy/security-privacy-rbac-audit-backup-baseline-v0.1.md` | Defines security, privacy, RBAC, audit, backup, restore, incident, and support-access baseline. |

This document translates those baselines into a testing and verification plan.

It does not prove that tests have been completed.

---

## 4. Scope

This plan covers testing and verification planning for:

- documentation tests
- Markdown rendering checks
- path and naming checks
- no-PHI and no-secret checks
- LBF metadata tests
- runtime LBF rendering tests
- Internal Medicine Follow-Up V1 workflow tests
- patient registration and duplicate prevention tests
- medication and allergy workflow tests
- vitals workflow tests
- follow-up and safety-net workflow tests
- open-loop workflow tests
- lab/result/critical-result workflow tests
- RBAC and least-privilege tests
- audit trail tests
- backup and restore tests
- incident response tabletop tests
- support access tests
- future Clinical Intelligence boundary tests
- demo readiness tests
- pilot readiness tests
- commercial readiness verification planning

---

## 5. Out of Scope

This document does not include:

- runtime implementation
- actual test execution
- validation results
- SQL creation
- SQL execution
- seed/script execution
- database migration
- OpenEMR runtime modification
- OpenEMR core-sensitive changes
- runtime AI
- machine learning implementation
- predictive analytics implementation
- autonomous clinical decision support
- autonomous diagnosis
- autonomous treatment recommendation
- autonomous prescribing
- autonomous emergency triage
- patient-facing AI
- production deployment
- pilot deployment
- commercial deployment
- cybersecurity certification
- regulatory compliance claim
- clinical validation claim

---

## 6. Testing Principles

All future testing must follow these principles:

| Principle | Meaning |
|---|---|
| Evidence before claims | No readiness claim without documented evidence. |
| Synthetic-first testing | Use synthetic data unless a later approved pilot gate permits otherwise. |
| No PHI in evidence | Screenshots, logs, and artifacts must not include PHI. |
| Traceability | Every test should identify what requirement or risk it verifies. |
| Repeatability | Important tests should be repeatable in a clean non-production environment. |
| Least privilege | Access testing must confirm users can only do what they need. |
| Safety-first | Clinical safety tests override feature-completeness tests. |
| Failure-aware | Tests must include failure modes, not only happy paths. |
| Human accountability | Clinical decisions remain clinician-owned. |
| Documentation separation | Test plan documents are not the same as test evidence artifacts. |

---

## 7. Test Environment Levels

| Environment | Purpose | Data allowed | Claims allowed |
|---|---|---|---|
| Local documentation work | Markdown and planning | No PHI / no secrets | Documentation-only |
| Non-production validation | Runtime and workflow testing | Synthetic only unless formally approved | Non-production evidence only |
| Demo environment | Customer/internal demonstration | Synthetic only | Demo only, not production-ready |
| Controlled pilot environment | Limited real-world workflow after gates | Real data only after formal approval | Pilot candidate only |
| Paid pilot environment | Commercially bounded limited trial | Real data only with governance | Paid pilot candidate only |
| Production candidate | Final readiness review environment | Real data only after full controls | Production candidate only |
| Commercial deployment | Supported operational deployment | Real data under agreement and local rules | Commercial only after evidence and approval |

This document does not approve any environment beyond documentation planning.

---

## 8. Test Categories

| Category | Purpose | Evidence artifact |
|---|---|---|
| Documentation testing | Confirm clean Markdown, correct paths, no unsupported claims | PR checklist / rendered preview |
| Repository safety testing | Confirm no PHI, secrets, logs, dumps | No-PHI checklist / scan summary |
| Metadata testing | Confirm LBF layout metadata counts and structure | Metadata verification report |
| Runtime rendering testing | Confirm form opens and displays correctly | Sanitized screenshots / runtime notes |
| Workflow testing | Confirm end-to-end operational flow | Synthetic workflow test script |
| Clinical safety testing | Confirm red flags, safety-net, follow-up, open loops are handled safely | Safety test case report |
| RBAC testing | Confirm role-based access and least privilege | Role test matrix |
| Audit testing | Confirm important actions are traceable | Sanitized audit evidence |
| Backup/restore testing | Confirm backup can be restored | Restore test report |
| Incident testing | Confirm incident escalation and response | Tabletop test record |
| AI boundary testing | Confirm future AI remains non-autonomous and clinician-reviewed | Synthetic AI boundary cases |
| Demo testing | Confirm demo is safe, resettable, and synthetic | Demo readiness checklist |
| Pilot testing | Confirm readiness before real workflow use | Pilot readiness checklist |
| Commercial verification | Confirm claims/support/deployment readiness | Commercial readiness review |

---

## 9. Documentation Test Plan

Documentation PRs must be checked for:

- correct file path
- correct file name
- clean Markdown rendering
- no compressed long-line Markdown
- no PR body pasted inside file content
- no unsupported readiness claims
- no PHI
- no credentials
- no sensitive logs
- no database dumps
- no executable SQL unless explicitly approved in a later gate
- no SQL execution approval
- no runtime AI approval
- no OpenEMR core-sensitive changes
- clear after-merge action
- relationship to prior documents where relevant

Minimum pass criteria:

`Documentation renders cleanly, stays within scope, and introduces no unsafe claims or unsafe content.`

---

## 10. Repository Safety Test Plan

Repository safety testing must confirm:

- no real patient names
- no real patient identifiers
- no phone numbers or addresses
- no national IDs
- no medical record numbers
- no real lab results
- no real imaging
- no real clinical notes
- no credentials
- no API keys
- no access tokens
- no passwords
- no private keys
- no database dumps
- no production configuration exports
- no sensitive logs
- no identifiable screenshots

Evidence must be summarized safely.

Raw sensitive findings must not be copied into GitHub.

---

## 11. LBF Metadata Test Plan

Internal Medicine Follow-Up V1 metadata testing must confirm:

| Item | Expected baseline |
|---|---|
| Layout ID | `LBFim_followup_v1` |
| Row count | `51` |
| Group count | `9` |
| Group IDs | `1,2,3,4,5,6,7,8,9` |
| Field distribution | `4,7,7,5,6,6,4,7,5` |
| Verification status | `PASS` based on documented baseline |

Future tests must verify:

- metadata can be independently reproduced
- metadata source is identified
- no PHI is included
- group structure is preserved
- field distribution matches baseline
- differences are documented
- reviewer notes are recorded

This document does not independently reproduce the metadata.

---

## 12. Runtime LBF Rendering Test Plan

Future runtime rendering tests should verify that the Internal Medicine Follow-Up V1 form:

- opens in a non-production OpenEMR environment
- is linked to the correct layout ID
- renders all 9 groups
- displays expected field labels
- supports test encounter documentation
- saves expected form content in a synthetic test
- does not generate runtime errors
- does not expose PHI in test screenshots
- does not imply production readiness

The 9 expected groups are:

1. Visit Context
2. Vital Signs Review
3. Chronic Conditions Review
4. Medication Review
5. Symptoms Review
6. Physical Exam Summary
7. Assessment
8. Plan
9. Patient Safety and Follow-up

Evidence should include sanitized screenshots or documented runtime notes.

---

## 13. Clinical Workflow Test Plan

Future clinical workflow tests should use synthetic patients only.

Minimum synthetic Internal Medicine follow-up workflow:

1. Create or select synthetic patient
2. Confirm patient identity
3. Open encounter
4. Record visit context
5. Record vitals review
6. Review chronic conditions
7. Review medications
8. Review symptoms
9. Record physical exam summary
10. Record assessment
11. Record plan
12. Record safety-net and follow-up
13. Confirm open loops if applicable
14. Confirm clinician remains final decision-maker
15. Confirm no autonomous diagnosis, prescribing, treatment recommendation, or triage occurs

Pass criteria:

- workflow can be completed
- documentation is understandable
- safety-net and follow-up fields can be completed
- no unsafe automation occurs
- no patient-facing AI output occurs
- limitations are documented

---

## 14. Patient Registration and Duplicate Prevention Test Plan

Future tests should verify:

- patient search before new record creation
- duplicate warning or duplicate prevention workflow if available
- demographic update workflow
- patient status or arrival workflow if implemented
- role access for reception
- wrong-patient risk mitigation
- audit trail for registration or demographic changes if available

Pass criteria:

- test user can search before creating a patient
- duplicate risk workflow is documented
- demographic updates are traceable if available
- no unnecessary clinical data is exposed to reception unless approved

Current status:

`Not verified by this document.`

---

## 15. Medication and Allergy Workflow Test Plan

Future tests should verify:

- medication list review workflow
- allergy status documentation
- unknown allergy status handling
- medication review documentation
- high-risk medication review boundary
- no autonomous prescribing
- no autonomous medication recommendation
- clinician responsibility preserved
- pharmacy handoff boundary if applicable

Pass criteria:

- clinician can document medication review
- allergy status is visible or documented according to workflow
- no prescribing automation occurs
- medication safety limitations are documented

Current status:

`Not verified by this document.`

---

## 16. Vitals Workflow Test Plan

Future tests should verify:

- vitals entry or review workflow
- nursing role boundaries
- abnormal vitals documentation
- escalation or handoff pathway if defined
- physician review linkage
- no autonomous triage
- no hidden clinical prioritization

Pass criteria:

- vitals can be entered or reviewed in the intended workflow
- abnormal findings can be documented
- escalation remains clinician/staff-governed
- no autonomous emergency triage occurs

Current status:

`Not verified by this document.`

---

## 17. Follow-Up, Safety-Net, and Open-Loop Test Plan

Future tests should verify:

- follow-up timeframe documentation
- safety-net documentation
- open-loop owner assignment
- due date or review timeframe
- deferral reason
- closure reason
- unresolved item visibility
- no silent closure
- clinician responsibility preserved

Open-loop examples for synthetic testing:

- pending lab result
- pending imaging result
- medication monitoring follow-up
- referral follow-up
- unresolved symptom review
- abnormal vital sign follow-up
- missed appointment or no-show follow-up

Pass criteria:

- open loops are visible and trackable if implemented
- closure requires documented action or reason
- patient-facing instructions are not generated without clinician review
- no autonomous clinical action occurs

Current status:

`Not verified by this document.`

---

## 18. Lab, Result, and Critical Result Test Plan

Future tests should verify:

- lab order workflow if available
- result entry or result review workflow if available
- pending result visibility
- critical result escalation pathway
- assigned owner
- acknowledgment or review status
- audit trail if available
- no critical result disappears silently

Pass criteria:

- pending results can be tracked or documented
- critical result workflow is defined before pilot
- escalation responsibility is clear
- no autonomous treatment or triage recommendation occurs

Current status:

`Not verified by this document.`

---

## 19. RBAC Test Plan

Future RBAC tests should verify role behavior for:

- Reception
- Nurse
- Physician
- Laboratory
- Imaging / Radiology / Ultrasound / ECG
- Pharmacy
- Cashier / Accounting
- Admin
- System Administrator
- Auditor / Quality Reviewer

Each role should be tested for:

- allowed screens
- prohibited screens
- allowed actions
- prohibited actions
- patient search access
- chart access
- encounter access
- order/result access
- billing access
- admin access
- export/print access
- audit access

Pass criteria:

- no role has unnecessary broad access
- non-clinical users do not access unnecessary clinical details
- support/admin access is justified
- high-risk permissions are documented

Current status:

`Not verified by this document.`

---

## 20. Audit Trail Test Plan

Future audit tests should verify whether important actions are traceable.

Audit events to test include:

- login
- patient search
- patient creation
- demographic update
- encounter creation
- LBF form creation/update
- medication review
- allergy status update
- order creation
- result review
- open-loop creation
- open-loop closure
- safety-net update
- role/permission change
- backup/restore event if available
- future AI draft generation if later approved
- future AI draft acceptance/rejection/edit if later approved

Pass criteria:

- key events are traceable where OpenEMR supports audit behavior
- audit evidence is sanitized
- audit gaps are documented
- no PHI is committed to GitHub

Current status:

`Not verified by this document.`

---

## 21. Backup and Restore Test Plan

Future backup/restore tests should verify:

- backup scope
- backup method
- backup owner
- backup frequency
- backup storage
- backup access control
- restore environment
- restore procedure
- restore success/failure
- post-restore verification
- RTO/RPO assumptions if defined
- rollback approach
- sanitized evidence artifact

Pass criteria:

- backup exists in non-production test
- restore is tested
- restored environment is verified
- no database dumps are committed to GitHub
- no sensitive logs are committed to GitHub

Current status:

`Not verified by this document.`

---

## 22. Incident Response Test Plan

Future incident response tests should include tabletop scenarios for:

- PHI exposure
- credential exposure
- wrong-patient access
- duplicate patient record
- delayed critical result
- missing allergy documentation
- backup failure
- restore failure
- downtime
- unauthorized access
- support access concern
- accidental SQL execution
- unsupported production/compliance claim
- future AI unsafe output if AI is later approved

Pass criteria:

- incident owner is identified
- severity is classified
- containment action is defined
- communication path is defined
- follow-up prevention action is defined
- closure criteria are documented

Current status:

`Not verified by this document.`

---

## 23. Future Clinical Intelligence Boundary Test Plan

No runtime Clinical Intelligence is approved by this document.

If future Clinical Intelligence is proposed, tests must verify:

- output is draft-only
- source fields are shown
- reasoning boundary is clear
- clinician review is required
- clinician can edit
- clinician can reject
- clinician can defer
- clinician can mark false positive
- audit trail captures review actions
- no autonomous diagnosis
- no autonomous treatment recommendation
- no autonomous prescribing
- no autonomous emergency triage
- no patient-facing AI without clinician approval
- false-positive handling exists
- false-negative review process exists
- disable or rollback mechanism exists

Pass criteria:

- outputs cannot become final without clinician action
- unsafe claims are not displayed
- auditability exists
- clinical responsibility remains with clinician

Current status:

`Runtime Clinical Intelligence is not approved.`

---

## 24. Demo Readiness Test Plan

Before demo-readiness claims, testing must verify:

- synthetic demo data only
- no PHI
- no credentials
- no sensitive logs
- no database dumps
- demo script exists
- demo reset process exists
- demo limitation statement exists
- user roles are clear
- no production claim
- no clinical validation claim
- no regulatory compliance claim
- no cybersecurity certification claim
- no autonomous AI claim

Pass criteria:

- demo can be shown safely
- demo data is clearly synthetic
- demo does not imply production readiness
- demo limitations are visible

Current status:

`Demo readiness is not proven by this document.`

---

## 25. Pilot Readiness Test Plan

Before pilot-readiness claims, testing must verify:

- workflow validation evidence
- clinician review evidence
- RBAC evidence
- audit evidence
- backup/restore evidence
- incident response evidence
- support access policy
- training evidence
- rollback plan
- privacy/security review
- local legal/regulatory review where applicable
- clinical owner
- technical owner
- support owner
- unresolved risk list

Pass criteria:

- no critical safety blocker remains
- no unresolved privacy blocker remains
- no unsupported claims are made
- pilot scope and limitations are documented
- escalation path is defined

Current status:

`Pilot readiness is not proven by this document.`

---

## 26. Commercial Readiness Verification Plan

Before commercial-readiness claims, verification must include:

- pilot evidence
- support model
- deployment model
- training model
- claims policy
- GPL/OpenEMR positioning review
- security/privacy review
- maintenance and update model
- customer onboarding
- customer offboarding
- service-level expectations
- pricing/packaging review
- local legal and regulatory review
- limitation statement

Pass criteria:

- claims are evidence-based
- OpenEMR is not misrepresented
- support responsibilities are clear
- deployment risks are documented
- no unsupported compliance/security/clinical claims are made

Current status:

`Commercial deployment readiness is not proven by this document.`

---

## 27. Test Case Template

Future test evidence should use this structure:

```markdown
# Test Case — [Name]

## 1. Test ID

## 2. Related requirement

## 3. Related risk

## 4. Test category

## 5. Environment
Local / non-production / demo / pilot / production-candidate

## 6. Data type
Synthetic only / de-identified with approval / real data with formal approval

## 7. Preconditions

## 8. Test steps

## 9. Expected result

## 10. Actual result

## 11. Pass/fail

## 12. Evidence
No PHI. No credentials. No sensitive logs. No database dumps.

## 13. Reviewer

## 14. Date

## 15. Defects found

## 16. Risk impact

## 17. Follow-up action

## 18. Claims allowed after this test

## 19. Claims still prohibited
