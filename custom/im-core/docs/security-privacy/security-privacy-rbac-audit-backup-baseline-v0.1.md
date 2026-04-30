# Security, Privacy, RBAC, Audit, and Backup Baseline V0.1 — OpenEMR IM Core

## 1. Purpose

This document defines the baseline security, privacy, role-based access control, audit, backup, restore, incident response, and support-access expectations for OpenEMR IM Core.

This baseline is required before future demo, pilot, paid pilot, production-candidate, or commercial deployment claims can be considered.

This document is documentation-only.

It does not implement runtime security controls.

It does not configure OpenEMR roles.

It does not modify OpenEMR runtime behavior.

It does not approve SQL execution.

It does not activate runtime AI.

It does not claim production readiness, pilot readiness, commercial deployment readiness, clinical validation, regulatory compliance, cybersecurity certification, or clean-install reproducibility.

---

## 2. Current Status

| Area | Current status |
|---|---|
| Project maturity | Documentation foundation / pre-runtime validation planning |
| Runtime security validation | Not proven |
| RBAC implementation evidence | Not proven |
| Audit trail behavior evidence | Not proven |
| Backup and restore evidence | Not proven |
| Incident response workflow | Planned by this baseline |
| Support access workflow | Planned by this baseline |
| No-PHI repository policy | Documented in prior PR |
| Regulatory/CDS boundary | Documented in prior PR |
| Runtime AI | Not approved |
| SQL execution | Not approved |
| Production readiness | Not claimed |
| Pilot readiness | Not claimed |
| Cybersecurity certification | Not claimed |

---

## 3. Relationship to Prior Documents

This document depends on the current OpenEMR IM Core governance sequence:

| Prior document | Relationship |
|---|---|
| `custom/im-core/docs/project-state/current-project-state.md` | Defines current project state and known limits. |
| `custom/im-core/docs/index.md` | Provides documentation index. |
| `custom/im-core/docs/golden-catalog-alignment/golden-catalog-gap-assessment-v0.1.md` | Defines Golden Catalog gaps. |
| `custom/im-core/docs/golden-catalog-alignment/master-execution-guide-v0.1.md` | Defines master execution doctrine. |
| `custom/im-core/docs/validation/validation-evidence-plan-v0.1.md` | Defines validation evidence gates. |
| `custom/im-core/docs/security-privacy/no-phi-safe-repository-development-policy-v0.1.md` | Defines repository safety and no-PHI rules. |
| `custom/im-core/docs/regulatory/regulatory-and-cds-boundary-statement-v0.1.md` | Defines regulatory, CDS, SaMD, AI, and claims boundaries. |

This document defines the minimum baseline for security, privacy, RBAC, audit, backup, restore, incident response, and support access planning.

It does not prove that these controls are implemented.

---

## 4. Scope

This baseline covers:

- security responsibilities
- privacy responsibilities
- no-PHI handling
- role-based access control expectations
- least-privilege principles
- audit trail expectations
- backup expectations
- restore expectations
- incident response expectations
- support access boundaries
- screenshot and evidence safety
- demo security baseline
- pilot security baseline
- commercial deployment prerequisites
- minimum evidence required before stronger claims

---

## 5. Out of Scope

This document does not include:

- runtime implementation
- OpenEMR role configuration
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

## 6. Security Principles

OpenEMR IM Core must follow these security principles:

| Principle | Meaning |
|---|---|
| Least privilege | Users should access only what they need for their role. |
| Need-to-know access | Clinical, administrative, billing, and support access should be separated. |
| No shared accounts | Each user should have an individually accountable account in future runtime environments. |
| Auditability | Important access, changes, review actions, and administrative actions should be traceable. |
| No secrets in GitHub | Credentials, API keys, tokens, private keys, and passwords must not be committed. |
| No sensitive logs in GitHub | Logs must be sanitized before documentation or evidence use. |
| No PHI in GitHub | No real patient identifiers or clinical patient data may be committed. |
| Secure-by-default planning | Future demo, pilot, and deployment plans must start with restrictive access. |
| Defense in depth | RBAC, audit, backup, incident response, and support controls must work together. |
| Evidence before claims | Security readiness must not be claimed without evidence. |

---

## 7. Privacy Principles

OpenEMR IM Core must follow these privacy principles:

| Principle | Meaning |
|---|---|
| Data minimization | Collect and expose only what is needed for the workflow. |
| Purpose limitation | Data should be used only for its intended clinical or operational purpose. |
| No-PHI development | GitHub work must use synthetic or sanitized data only. |
| Role separation | Non-clinical users should not access unnecessary clinical data. |
| Sensitive evidence handling | Screenshots, logs, exports, and examples must be sanitized. |
| Local verification | Local privacy law and policy must be verified before pilot or deployment. |
| Patient-facing caution | Patient-facing outputs require clinician approval and privacy review. |
| Support access control | Support access must be limited, logged, and justified. |

---

## 8. Role-Based Access Control Baseline

Future RBAC planning must define role permissions before pilot or deployment.

Initial roles to map:

| Role | Intended access | Must not access unless approved | Safety notes |
|---|---|---|---|
| Reception | patient search, registration, appointment, arrival status | detailed clinical notes unless local policy permits | wrong-patient and duplicate prevention are safety-critical |
| Nurse | assigned vitals, pre-visit data, nursing notes, task handoff | billing-only functions, unrelated patient charts | abnormal vitals escalation must be defined |
| Physician | clinical chart, encounter, orders, assessment, plan, follow-up, open loops | unrestricted admin settings unless assigned | physician remains final clinical decision-maker |
| Laboratory | lab worklist, lab result entry or status | unrelated clinical notes, billing-only data | critical result escalation must be defined |
| Imaging / Radiology / Ultrasound / ECG | imaging orders, imaging result workflow | unrelated clinical/billing data | urgent result escalation must be defined |
| Pharmacy | prescription workflow, medication dispensing status where applicable | unrelated notes, admin settings | medication safety and allergy visibility must be governed |
| Cashier / Accounting | billing, invoice, payment, receipt | clinical notes not required for billing | financial access must be separated from clinical access |
| Admin | user management, configuration, operational settings | clinical records unless explicitly authorized | admin privileges require strict accountability |
| System Administrator | technical maintenance, backup, deployment support | direct clinical content unless required and authorized | support access must be logged and limited |
| Auditor / Quality Reviewer | audit reports, quality review materials | unrestricted editing unless authorized | should generally review, not alter, clinical care records |

Current implementation status:

`RBAC is not validated by this document. Runtime permissions must be tested later in non-production using synthetic data.`

---

## 9. Least-Privilege Requirements

Before demo or pilot, the project must define:

- role names
- role responsibilities
- allowed screens
- prohibited screens
- allowed actions
- prohibited actions
- patient search permissions
- chart access permissions
- encounter documentation permissions
- order/result permissions
- billing permissions
- administrative permissions
- export/download permissions
- print permissions
- support access permissions
- audit review permissions

No role should receive broad access by default.

High-risk permissions must require explicit justification.

High-risk permissions include:

- user administration
- role permission changes
- delete or void actions
- data export
- report export
- backup access
- restore actions
- system configuration
- direct database access
- access to audit logs
- access to all patient records
- support impersonation or support access

---

## 10. Audit Trail Baseline

Future runtime environments must define audit expectations for important actions.

Audit-relevant events include:

- user login
- failed login if available
- patient search
- patient record creation
- demographic updates
- encounter creation
- Internal Medicine Follow-Up form creation or update
- medication changes or medication review actions
- allergy status updates
- order creation
- result entry
- result review
- critical result acknowledgment
- open-loop creation
- open-loop assignment
- open-loop deferral
- open-loop closure
- safety-net documentation update
- AI draft generation if future AI is approved
- AI draft acceptance, rejection, or edit if future AI is approved
- export or print actions if available
- role/permission changes
- backup and restore actions
- administrative configuration changes

Audit evidence must not include PHI when committed to GitHub.

Audit evidence should be summarized or sanitized.

---

## 11. Backup Baseline

Before pilot or production-candidate use, the project must define and test backup procedures.

Backup planning must include:

- backup owner
- backup frequency
- backup scope
- database backup approach
- file/document backup approach
- configuration backup approach
- encryption expectations
- storage location
- retention period
- access control for backups
- backup verification method
- failure notification
- restore testing schedule

No backup readiness claim is allowed until backup evidence exists.

Backups must not be committed to GitHub.

Database dumps must not be committed to GitHub.

---

## 12. Restore Baseline

A backup is not sufficient unless restore is tested.

Restore planning must include:

- restore owner
- restore environment
- restore steps
- restore validation checklist
- expected restore duration
- known limitations
- failure handling
- post-restore verification
- rollback procedure
- evidence artifact
- reviewer sign-off

Restore evidence must use non-production or approved test environments.

Restore logs or screenshots must be sanitized before documentation.

No restore readiness claim is allowed until restore has been tested.

---

## 13. Incident Response Baseline

Before demo, pilot, or commercial planning, the project must define an incident response process.

Incident categories include:

- PHI exposure
- credential exposure
- repository leak
- wrong-patient access
- duplicate patient record
- unauthorized chart access
- missing or delayed critical result
- backup failure
- restore failure
- downtime
- suspected security breach
- AI output safety issue if future AI exists
- unsupported claim in documentation or marketing
- accidental SQL execution
- OpenEMR core-sensitive change without review

Incident response must define:

- incident owner
- severity level
- immediate containment action
- communication path
- documentation requirement
- patient safety review
- privacy/security review
- technical remediation
- follow-up prevention action
- closure criteria

---

## 14. Support Access Baseline

Support access must be controlled and auditable.

Future support access rules should include:

- named support accounts only
- no shared support accounts
- time-limited access where possible
- minimum necessary access
- documented reason for support access
- approval before accessing sensitive data
- audit of support actions
- no extraction of PHI into GitHub
- no screenshots with PHI
- no credentials shared in chat, tickets, or repository
- support issue closure notes

Support must not bypass RBAC.

Support must not make clinical decisions.

Support must not alter clinical documentation without authorized clinical instruction and auditability.

---

## 15. Evidence and Screenshot Safety

Screenshots and evidence artifacts must follow no-PHI rules.

Allowed evidence:

- synthetic patient screenshots
- sanitized configuration screenshots
- sanitized Markdown previews
- summarized logs without secrets or PHI
- test results without patient identifiers
- metadata counts without patient data
- role matrix tables
- backup/restore summary without database dumps

Prohibited evidence:

- real patient names
- phone numbers
- addresses
- medical record numbers
- national IDs
- real lab results
- real prescriptions
- real images
- real notes
- credentials
- API keys
- access tokens
- private keys
- raw database dumps
- sensitive logs
- production configuration exports

---

## 16. Demo Security Baseline

Before any demo-readiness claim, the project must have:

- synthetic demo data only
- no PHI review
- no credentials in demo documentation
- demo user roles defined
- demo limitations statement
- no production claim
- no clinical validation claim
- no regulatory compliance claim
- no cybersecurity certification claim
- demo reset procedure
- access control for demo users
- backup/reset plan if needed
- screenshot sanitization rules

Demo must not show real patients.

Demo must not imply autonomous AI.

Demo must not imply production readiness.

---

## 17. Pilot Security Baseline

Before any pilot-readiness claim, the project must have:

- approved pilot scope
- privacy review
- security review
- role matrix
- least-privilege access plan
- audit trail review
- backup and restore evidence
- incident response SOP
- support access policy
- training completion evidence
- rollback plan
- local legal/privacy verification
- clinical owner
- technical owner
- support owner
- risk register
- limitation statement

No real patient pilot should start until these requirements are satisfied and approved.

---

## 18. Commercial Deployment Security Baseline

Before any commercial deployment readiness claim, the project must have:

- pilot evidence
- deployment model
- hosting/security baseline
- RBAC testing
- audit trail testing
- backup/restore testing
- incident response process
- support process
- access review process
- customer onboarding process
- customer offboarding process
- data retention policy
- privacy/security review
- GPL/OpenEMR commercial positioning review
- claims policy review
- maintenance/update plan
- vulnerability/dependency review
- monitoring plan

No cybersecurity certification claim may be made without formal cybersecurity audit and certification evidence.

---

## 19. Minimum Evidence Required Before Claims

| Claim | Minimum evidence required |
|---|---|
| Repository is safe for public documentation | No-PHI policy, no secrets, no logs, no database dumps, review evidence |
| RBAC baseline exists | role matrix, permission mapping, least-privilege review |
| RBAC is validated | non-production role-based test evidence |
| Audit baseline exists | audit event list and audit expectations |
| Audit behavior is validated | runtime audit evidence without PHI |
| Backup plan exists | documented backup scope, owner, frequency, storage, retention |
| Backup is validated | backup test evidence |
| Restore is validated | restore test evidence |
| Demo security-ready | synthetic demo data, access rules, reset plan, no-PHI review |
| Pilot security-ready | RBAC, audit, backup/restore, incident response, support access, training evidence |
| Commercial security-ready | pilot evidence, deployment controls, support controls, legal/privacy/security review |

---

## 20. Risk Register

| Risk | Severity | Current control | Missing control | Blocks demo/pilot/commercial? |
|---|---:|---|---|---|
| PHI committed to GitHub | Critical | No-PHI policy | scan/review evidence | Yes |
| Credentials committed to GitHub | Critical | repository safety policy | secrets scanning evidence | Yes |
| Sensitive logs committed | High | policy prohibition | log sanitization checklist | Yes |
| Weak RBAC | High | this baseline | role test matrix | Yes |
| Excessive admin access | High | least-privilege principle | access review evidence | Yes |
| Reception sees unnecessary clinical notes | Medium/High | role separation principle | permission test | Pilot blocker |
| Billing sees unnecessary clinical content | Medium/High | role separation principle | permission test | Pilot blocker |
| Missing audit trail | High | audit event list | runtime audit evidence | Yes |
| Backup failure | Critical | backup planning requirement | tested backup evidence | Yes |
| Restore failure | Critical | restore planning requirement | tested restore evidence | Yes |
| Support access abuse | High | support access baseline | approval/logging process | Yes |
| Wrong-patient access | Critical | role/search workflow planning | patient identity workflow tests | Yes |
| Incident not escalated | High | incident response baseline | incident SOP/tabletop test | Pilot blocker |
| Cybersecurity overclaiming | High | claims boundary | formal audit if claiming | Commercial blocker |
| Commercial deployment before evidence | Critical | evidence-gated doctrine | release readiness gates | Commercial blocker |

---

## 21. Required Future Documents

This baseline should be followed by or connected to future documents:

- Testing and Verification Plan
- Failure Modes and Safe Response Library
- Daily Operating Model and Patient Status Model
- SOP Framework
- User Roles and Permission Matrix
- RBAC Test Evidence Template
- Audit Trail Evidence Template
- Backup and Restore Test Evidence Template
- Incident Response SOP
- Support Access Policy
- Synthetic Demo Data and Demo Environment Plan
- Pilot Readiness Checklist
- Commercial Claims and GPL/OpenEMR Positioning Memo

---

## 22. Definition of Done

This document is complete when:

- the file path is correct
- Markdown renders cleanly
- the document is documentation-only
- security principles are defined
- privacy principles are defined
- RBAC baseline is defined
- least-privilege requirements are defined
- audit trail baseline is defined
- backup baseline is defined
- restore baseline is defined
- incident response baseline is defined
- support access baseline is defined
- evidence and screenshot safety rules are defined
- demo security baseline is defined
- pilot security baseline is defined
- commercial deployment security baseline is defined
- minimum evidence before claims is defined
- risk register is included
- required future documents are listed
- after-merge action is identified
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

## 23. After-Merge Action

After this PR is merged, create the next PR:

`docs(im-core): add testing and verification plan v0.1`

That next PR should define the test planning baseline for:

- documentation tests
- metadata tests
- runtime LBF tests
- workflow tests
- RBAC tests
- audit tests
- backup/restore tests
- no-PHI evidence checks
- clinical safety boundary tests
- future Clinical Intelligence boundary tests
- demo and pilot readiness tests

---

## 24. Status

`Documentation-only security, privacy, RBAC, audit, and backup baseline. No runtime implementation. No SQL. No SQL execution. No runtime AI. No OpenEMR core changes. Not production-ready. Not clinically validated. Not regulatory compliant by default. Not cybersecurity certified. Not commercially deployment-ready.`
