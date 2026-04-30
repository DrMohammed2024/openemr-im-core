# Golden Catalog Master Execution Guide V0.1 - OpenEMR IM Core

## 1. Purpose

This document is the master execution guide for building OpenEMR IM Core from its current documentation-governed foundation toward a safe, evidence-gated, clinician-supportive, OpenEMR-based healthcare operating platform.

This guide uses the merged Golden Catalog Gap Assessment V0.1 as its baseline.

Baseline file:

`custom/im-core/docs/golden-catalog-alignment/golden-catalog-gap-assessment-v0.1.md`

This document is documentation-only.

It does not implement runtime behavior.

It does not approve SQL execution.

It does not activate runtime AI.

It does not modify OpenEMR core-sensitive paths.

It does not claim production readiness, pilot readiness, clinical validation, regulatory compliance, cybersecurity certification, clean-install reproducibility, or commercial deployment readiness.

---

## 2. Master Doctrine

OpenEMR IM Core must be built under the following doctrine:

| Principle | Meaning |
|---|---|
| Documentation-first | Every major capability must be defined before implementation. |
| Evidence-gated | No readiness claim is allowed without documented evidence. |
| Safety-first | Clinical safety and patient protection override speed and feature expansion. |
| Clinician-supportive | The system supports clinicians. It must not replace clinicians. |
| OpenEMR-first | Use existing OpenEMR capabilities before custom development. |
| Configuration-first | Prefer configuration and LBF customization before code changes. |
| LBF-first for clinical forms | Clinical documentation modules should begin with OpenEMR LBF where appropriate. |
| Upstream-first | Avoid unnecessary fork divergence from upstream OpenEMR. |
| Fork-minimal | OpenEMR core-sensitive changes require explicit justification and review. |
| No-PHI development | No real patient data, PHI, credentials, logs, or database dumps in GitHub. |
| Human accountability | Clinical responsibility remains with licensed clinicians. |
| AI as draft support only | AI may assist documentation in the future only after governance and validation. |
| Local verification required | Legal, privacy, billing, clinical, and regulatory requirements must be verified locally. |

---

## 3. Current Baseline

Current project state after PR #74:

| Area | Current status |
|---|---|
| PR #73 | Trend Review Plan merged before PR #74. |
| PR #74 | Golden Catalog Gap Assessment V0.1 and Documentation Index merged. |
| Current stage | Documentation foundation / pre-prototype planning stage. |
| Core clinical module | Internal Medicine Follow-Up V1. |
| Known layout ID | `LBFim_followup_v1`. |
| Metadata baseline | ROW_COUNT 51, GROUP_COUNT 9, GROUP_IDS 1-9, FIELD_DISTRIBUTION 4,7,7,5,6,6,4,7,5, verification PASS based on project evidence. |
| Runtime implementation | Not approved by this guide. |
| SQL execution | Not approved. |
| Runtime AI | Not approved. |
| Production readiness | Not claimed. |
| Clinical validation | Not claimed. |
| Regulatory compliance | Not claimed. |
| Cybersecurity certification | Not claimed. |
| Commercial deployment readiness | Not claimed. |

---

## 4. Non-Negotiable Safety Boundaries

The following are prohibited until explicitly approved by future evidence gates:

- PHI in GitHub
- Real patient data in GitHub
- Credentials in GitHub
- Sensitive logs in GitHub
- Database dumps in GitHub
- Executable SQL
- SQL execution
- Executable seed/script execution
- Runtime AI
- Machine learning implementation
- Predictive model implementation
- Autonomous clinical decision support
- Autonomous diagnosis
- Autonomous treatment recommendation
- Autonomous prescribing
- Autonomous emergency triage
- Patient-facing AI
- OpenEMR core-sensitive changes without explicit justification and review
- Production deployment
- Pilot deployment
- Commercial deployment
- Production-readiness claims
- Clinical validation claims
- Regulatory compliance claims
- Cybersecurity certification claims
- Commercial deployment readiness claims

---

## 5. Target Product Direction

OpenEMR IM Core should evolve into a managed OpenEMR-based clinical operating layer beginning with Internal Medicine workflows.

The long-term target is:

| Layer | Target |
|---|---|
| Patient Core | Safe patient identity, registration, demographics, duplicate prevention, and patient status tracking. |
| Clinical Workflow | Structured Internal Medicine follow-up, medications, allergies, problem list, vitals, assessment, plan, safety-net, and follow-up. |
| Service Workflow | Lab, results, critical results, imaging, pharmacy, referrals, and open-loop tracking. |
| Administrative Workflow | Reception, appointments, cashier, billing linkage, reports, and administrative workflow. |
| Safety and Governance | RBAC, audit, backup, incident response, release gates, and ownership. |
| Clinical Intelligence | Future clinician-reviewed documentation support only after validation and governance. |
| Analytics and Quality | Documentation quality, care gaps, open loops, and operational metrics. |
| Security and Privacy | No-PHI development, least privilege, access review, audit, backup, and incident response. |
| Deployment | Reproducible non-production setup first, then demo, then controlled pilot. |
| Commercialization | Services, workflow packages, training, support, hosting, governance, and specialty modules without misrepresenting OpenEMR. |

---

## 6. Capability Execution Framework

Every future capability must follow this structure before implementation:

| Field | Required content |
|---|---|
| Capability name | Clear name. |
| Golden Catalog requirement | What the Golden Catalog requires. |
| Current project status | Existing, planned, absent, partial, blocked, or unknown. |
| OpenEMR native support | Native, configurable, LBF, module, integration, custom, or unknown. |
| Customization needed | None, configuration, LBF, extension, integration, or core-sensitive. |
| Safety rules | Clinical risk boundaries. |
| Privacy/security rules | PHI, RBAC, audit, least privilege, and data handling. |
| AI rules | Blocked, draft-only, clinician-reviewed, or not applicable. |
| Data impact | Existing OpenEMR data, LBF metadata, new table proposed, or unknown. |
| Audit impact | What must be logged. |
| Acceptance criteria | Pass/fail conditions. |
| Failure modes | What can go wrong. |
| Monitoring metrics | What must be monitored. |
| Evidence required | What proof is needed. |
| Release stage | Documentation, prototype, demo candidate, pilot candidate, production candidate. |
| PR sequence | Where it belongs in the roadmap. |

No capability is implementation-ready unless this framework is completed.

---

## 7. Capability Build Plan

### 7.1 Patient Core

| Capability | Current status | Execution direction | Evidence required | Priority |
|---|---|---|---|---|
| Patient registration | Not project-specific yet | Map OpenEMR native registration workflow before customization. | Synthetic patient workflow screenshots, RBAC review. | Foundation |
| Duplicate prevention | Missing | Define search-before-create workflow and duplicate check SOP. | Duplicate test cases using synthetic patients. | Foundation |
| Demographics update | Missing | Define update, audit, and role rules. | Audit behavior evidence. | Foundation |
| Patient status tracking | Missing | Define patient status model before implementation. | Workflow simulation. | Foundation |
| Patient timeline | Not verified | Assess OpenEMR native timeline-like capabilities. | Runtime review. | Near-term |
| Documents/attachments | Not assessed | Define privacy and access rules before use. | Role-based access test. | Near-term |

### 7.2 Clinical Workflow

| Capability | Current status | Execution direction | Evidence required | Priority |
|---|---|---|---|---|
| Internal Medicine Follow-Up V1 | Metadata baseline exists | Validate runtime rendering and usability. | Screenshots without PHI, clinician review. | Foundation |
| Encounter documentation | Partial | Map LBF form to encounter workflow. | End-to-end synthetic encounter test. | Foundation |
| Vitals review | Partial | Map LBF vitals group to OpenEMR vitals source of truth. | Runtime verification. | Foundation |
| Chronic conditions review | Partial | Map chronic condition documentation to problem list strategy. | Clinician review. | Near-term |
| Medication review | Partial | Map medication review to medication list and reconciliation strategy. | Medication review synthetic cases. | Foundation |
| Allergy status | Not complete | Define Known / No known / Unknown workflow. | Allergy workflow test. | Foundation |
| Assessment and plan | Partial | Add documentation quality rules. | Clinician review and completeness checks. | Foundation |
| Safety-net | Partial | Define patient-facing safety-net boundaries. | Clinician-approved examples. | Foundation |
| Follow-up plan | Partial | Define owner, due date, and closure logic. | Follow-up task simulation. | Foundation |

### 7.3 Service Workflow

| Capability | Current status | Execution direction | Evidence required | Priority |
|---|---|---|---|---|
| Lab orders | Missing | Assess OpenEMR native orders before customization. | Workflow screenshots. | Near-term |
| Lab results | Missing | Define result review workflow. | Result review synthetic test. | Near-term |
| Critical results | Missing | Define escalation model and owner. | Critical result scenario test. | Foundation |
| Imaging/radiology | Missing | Future workflow assessment. | Imaging workflow review. | Advanced |
| Pharmacy workflow | Missing | Assess native prescription workflow and pharmacy linkage. | Prescription/dispensing boundary review. | Near-term |
| Referrals | Missing | Define referral tracking as open-loop workflow. | Referral closure test. | Near-term |

### 7.4 Administrative and Financial Workflow

| Capability | Current status | Execution direction | Evidence required | Priority |
|---|---|---|---|---|
| Reception workflow | Missing | Define registration, queue, appointment, and status model. | Front desk synthetic workflow. | Foundation |
| Appointment scheduling | Not assessed | Review OpenEMR scheduling capabilities. | Appointment/no-show workflow test. | Foundation |
| No-show management | Missing | Define follow-up and risk handling. | No-show test cases. | Near-term |
| Billing linkage | Missing | Map OpenEMR billing to clinical/service workflow cautiously. | Billing reconciliation test. | Near-term |
| Cashier workflow | Missing | Define payment and receipt workflow. | Synthetic payment test. | Near-term |
| Admin dashboard | Missing | Define metrics and RBAC. | Dashboard source validation. | Advanced |

### 7.5 Safety and Governance

| Capability | Current status | Execution direction | Evidence required | Priority |
|---|---|---|---|---|
| RBAC | Missing as project baseline | Create permission matrix and least privilege plan. | Role-based access test. | Foundation |
| Audit trail | Missing as project baseline | Map OpenEMR audit behavior. | Audit evidence without PHI. | Foundation |
| Backup/restore | Not proven | Create test evidence template and non-production restore test. | Restore log. | Foundation |
| Incident response | Missing | Create incident logging and escalation plan. | Tabletop scenario. | Foundation |
| Release gates | Missing | Define release states and go/no-go criteria. | Release checklist. | Foundation |
| Governance ownership | Missing | Define owners and reviewers. | Ownership model. | Foundation |

### 7.6 Clinical Intelligence

Clinical Intelligence remains documentation-only until future evidence gates are satisfied.

| Module | Current status | Allowed direction | Prohibited direction | Priority |
|---|---|---|---|---|
| Rule-based checks | Planned/documented | Documentation gap detection after validation. | Autonomous CDS. | Future |
| Human-in-the-loop | Planned/documented | Clinician review, edit, approve, reject. | Auto-approval. | Future |
| Audit/explainability | Planned/documented | Source/context traceability. | Black-box clinical decisions. | Future |
| Clinical summary generator | Boundary documented | Draft-only summary after validation. | Final note generation without clinician approval. | Future |
| Trend review | PR #73 merged | Descriptive longitudinal review only. | Prediction or deterioration claims. | Future |
| AI documentation draft | Not implemented | Future draft-only support. | Autonomous diagnosis/treatment/prescribing. | Deferred |
| Predictive analytics | Out of scope | Research-only planning later. | Clinical-use prediction. | Excluded now |

---

## 8. Evidence Gates

No project stage may advance without evidence.

| Gate | Required before | Required evidence |
|---|---|---|
| Gate 1 | New documentation PR | Correct path, rendered Markdown, no unsupported claims. |
| Gate 2 | LBF runtime claim | Runtime screenshots, metadata verification, clinician review. |
| Gate 3 | Clean-install claim | Fresh install reproduction, logs, screenshots without PHI. |
| Gate 4 | SQL candidate creation | Target table mapping, rollback plan, non-production environment. |
| Gate 5 | SQL execution | Explicit approval, backup, rollback, non-production execution, post-execution verification. |
| Gate 6 | Runtime workflow prototype | Workflow test cases, RBAC review, audit behavior review. |
| Gate 7 | Runtime Clinical Intelligence | Validation plan, HITL, audit, no-PHI, safety review, clinician acceptance. |
| Gate 8 | Demo | Synthetic data, no-PHI scan, reset process, demo disclaimers. |
| Gate 9 | Pilot | Privacy/security baseline, RBAC, audit, backup/restore, training, support, incident response. |
| Gate 10 | Paid pilot | Pilot scope, contract, support model, claims policy, legal/commercial review. |
| Gate 11 | Production candidate | Full validation, deployment evidence, security review, backup/restore, monitoring, support. |
| Gate 12 | Commercial deployment | Production candidate evidence plus legal, licensing, support, and customer operations readiness. |

---

## 9. Release States

| State | Meaning | Allowed claim |
|---|---|---|
| Documentation | Planning only | Documentation-only. |
| Prototype | Non-production technical test | Prototype only, not for real care. |
| Demo candidate | Synthetic demo only | Demo only, no PHI. |
| Controlled pilot candidate | Limited live workflow candidate after gates | Controlled pilot candidate only. |
| Paid pilot candidate | Commercially bounded limited pilot | Paid pilot candidate, not production-ready. |
| Production candidate | Full readiness package under review | Production candidate, not automatically production-ready. |
| Commercial deployment candidate | Supported deployment package after evidence | Commercial candidate only after approval. |
| Production ready | Requires formal evidence and approvals | Do not use this term until formally proven. |

Current state:

`Documentation foundation / pre-prototype planning stage.`

---

## 10. PR Roadmap

The corrected roadmap after PR #74 is:

| PR | Purpose | Type |
|---|---|---|
| #75 | Master Execution Guide V0.1 | Documentation-only |
| #76 | Validation Evidence Plan | Documentation-only |
| #77 | No-PHI / Safe Repository Development Policy | Documentation-only |
| #78 | Regulatory and CDS Boundary Statement | Documentation-only |
| #79 | Security / Privacy / RBAC / Audit / Backup Baseline | Documentation-only |
| #80 | Testing and Verification Plan | Documentation-only |
| #81 | Failure Modes and Safe Response Library | Documentation-only |
| #82 | Daily Operating Model and Patient Status Model | Documentation-only |
| #83 | SOP Framework | Documentation-only |
| #84 | Data Model Starter and OpenEMR Mapping | Documentation-only |
| #85 | Clinical Documentation Quality Rules | Documentation-only |
| #86 | Minimum Viable Safe Platform and Release Readiness Gates | Documentation-only |
| #87 | Governance Ownership Model | Documentation-only |
| #88 | Registration, duplicate prevention, encounter, allergy, medication, vitals workflow plans | Documentation-only |
| #89 | Follow-up, no-show, open loops, safety-net workflow plans | Documentation-only |
| #90 | Lab result and critical result plans | Documentation-only |
| #91 | Pharmacy and billing linkage plans | Documentation-only |
| #92 | RBAC, audit, backup evidence templates | Documentation-only |
| #93 | Non-production reproducible install plan | Documentation-only |
| #94 | Synthetic demo data and demo environment plan | Documentation-only |
| #95 | Training and support package | Documentation-only |
| #96 | Commercial claims, GPL positioning, and pilot packaging memo | Documentation-only |

Implementation PRs must not begin until the relevant documentation, validation, security, privacy, and release gates exist.

---

## 11. Validation Strategy

Validation must be layered.

| Validation layer | Purpose | Evidence |
|---|---|---|
| Documentation validation | Confirm documents are complete and safe. | Markdown review, no unsupported claims. |
| Metadata validation | Confirm LBF metadata integrity. | Row/group counts and verification output. |
| Runtime validation | Confirm forms load and work in OpenEMR. | Non-PHI screenshots and test logs. |
| Workflow validation | Confirm end-to-end clinical/admin workflow. | Synthetic patient test scripts. |
| Safety validation | Confirm unsafe states are detected or blocked. | Failure mode tests. |
| RBAC validation | Confirm users only see what they need. | Role test matrix. |
| Audit validation | Confirm important actions are traceable. | Audit evidence without PHI. |
| Backup validation | Confirm restore works. | Backup and restore test log. |
| AI validation | Future only; confirm draft-only, HITL, audit, boundaries. | Synthetic cases and clinician review. |
| Pilot validation | Confirm safe limited workflow use. | Pilot report and issue log. |

---

## 12. Security and Privacy Plan

Before demo:

- No-PHI policy
- Synthetic data policy
- No credentials
- No logs
- No database dumps
- Sanitized screenshots
- Repository safety review

Before pilot:

- RBAC baseline
- Least privilege policy
- Audit trail review
- Backup/restore test
- Incident response SOP
- Privacy boundary
- Support access policy
- Staff training

Before paid deployment:

- Vulnerability/dependency review
- Backup encryption strategy
- Support access logging
- Hosting baseline
- Data retention policy
- Customer agreement
- Commercial claims policy
- Legal and privacy review

No cybersecurity certification is claimed by this guide.

---

## 13. Regulatory and Clinical Boundary Plan

Current safe intended-use wording:

`OpenEMR IM Core is a documentation-governed OpenEMR-based workflow and clinical documentation support project for clinician-reviewed healthcare operations.`

Unsafe claims are prohibited:

- Diagnoses disease
- Recommends treatment
- Prescribes medication
- Triage emergencies
- Predicts clinical deterioration
- Clinically validated
- Regulatory compliant
- Medical-device-ready
- Cybersecurity certified
- Production-ready

Future regulatory work must include:

- Regulatory and CDS Boundary Statement
- AI use boundary
- Medical software boundary review
- Risk management planning
- Clinical evaluation planning if applicable
- Local legal/privacy review
- Open-source/GPL positioning review

---

## 14. Deployment Strategy

| Environment | Data allowed | Purpose | Current status |
|---|---|---|---|
| Local development | Synthetic only | Documentation and non-PHI technical work. | Future |
| Non-production validation | Synthetic only unless formally approved otherwise | Reproducibility and workflow tests. | Future |
| Demo | Synthetic only | Demonstration and training. | Future |
| Controlled pilot | Real data only after gates | Limited clinic workflow. | Not ready |
| Paid pilot | Real data only with agreement and gates | Commercially bounded trial. | Not ready |
| Production candidate | Real data after full review | Operational deployment candidate. | Not ready |
| Commercial deployment | Real data after full readiness | Supported paid deployment. | Not ready |

---

## 15. Demo and Synthetic Data Strategy

Demo must use only synthetic data.

Demo must show:

- Patient registration
- Appointment or encounter flow
- Internal Medicine Follow-Up V1
- Vitals documentation
- Medication/allergy/problem review boundaries
- Assessment and plan documentation
- Safety-net and follow-up concepts
- Open-loop examples
- Admin/reception concepts if available

Demo must not show:

- Real patients
- PHI
- Credentials
- Logs
- Database dumps
- Production claims
- Clinical validation claims
- Regulatory compliance claims
- Runtime AI claims
- Autonomous diagnosis/treatment/prescribing/triage

---

## 16. Pilot Readiness Strategy

Pilot readiness requires:

- Approved pilot scope
- No-PHI development policy
- Privacy/security review
- RBAC baseline
- Audit trail review
- Backup/restore test
- Incident response SOP
- Training package
- Support model
- Workflow validation
- Rollback plan
- Clinical owner review
- Non-claims policy
- Local legal/privacy review where applicable

The project is not pilot-ready until these items are evidenced.

---

## 17. Commercial Productization Strategy

The commercial value must come from services and governed implementation, not from misrepresenting ownership of OpenEMR.

Potential value areas:

- OpenEMR-based implementation
- Internal Medicine workflows
- Arabic/English workflow support
- Configuration and LBF packages
- Training
- Support
- Hosting or managed deployment
- Reporting
- Safety governance
- Specialty templates
- Documentation quality package
- Future clinician-reviewed Clinical Intelligence after validation

The project must not sell:

- OpenEMR ownership
- Guaranteed regulatory compliance
- Guaranteed cybersecurity certification
- Autonomous AI doctor
- AI diagnosis
- AI prescribing
- Production readiness before evidence
- Clinical validation before evidence

Commercial planning is allowed.

Commercial deployment is not approved by this guide.

---

## 18. Risk Register

| Risk | Severity | Mitigation | Blocks commercialization? |
|---|---|---|---|
| Wrong patient record | Critical | Duplicate prevention and identity verification. | Yes |
| Missing allergy | High | Allergy status workflow and required review. | Yes |
| Medication error | High | Medication review and reconciliation plan. | Yes |
| Unreviewed result | Critical | Open-loop and result owner workflow. | Yes |
| Critical result delay | Critical | Critical result escalation SOP. | Yes |
| False reassurance | Critical | No autonomous CDS and clear clinician accountability. | Yes |
| Alert fatigue | High | Rule governance and false-positive review. | Yes |
| AI hallucination | Critical | No runtime AI until validation and HITL. | Yes |
| PHI in GitHub | Critical | No-PHI policy and repository review. | Yes |
| Weak RBAC | High | Permission matrix and access testing. | Yes |
| Audit gaps | High | Audit baseline and review. | Yes |
| Backup failure | Critical | Backup/restore test. | Yes |
| Fork divergence | High | Upstream-first and fork-minimal discipline. | Yes |
| Clean-install failure | High | Reproducible install plan and evidence. | Yes |
| Unsupported regulatory claims | Critical | Regulatory boundary statement. | Yes |
| Unsupported commercial claims | High | Claims policy and legal review. | Yes |
| Poor usability | High | Human factors and clinician testing. | Yes |
| Weak support model | High | Support SOP and escalation path. | Yes |
| Licensing misunderstanding | Medium/High | GPL/OpenEMR positioning memo. | Yes |

---

## 19. Definition of Done

A future PR is done only when:

- Scope is clear.
- Out of scope is clear.
- File path is correct.
- Markdown renders cleanly.
- It is documentation-only unless explicitly approved otherwise.
- It contains no PHI.
- It contains no real patient data.
- It contains no credentials.
- It contains no sensitive logs.
- It contains no database dumps.
- It contains no executable SQL.
- It does not approve SQL execution.
- It does not introduce runtime AI.
- It does not introduce ML or predictive models.
- It does not introduce autonomous CDS.
- It does not automate diagnosis, treatment, prescribing, or emergency triage.
- It does not introduce patient-facing AI.
- It does not touch OpenEMR core-sensitive paths unless explicitly approved.
- It does not claim production readiness.
- It does not claim clinical validation.
- It does not claim regulatory compliance.
- It does not claim cybersecurity certification.
- It does not claim commercial deployment readiness.
- It identifies next dependency.
- It identifies evidence required for future stages.

---

## 20. Current Best Next Step

After this PR is merged, create PR #76:

`docs(im-core): add validation evidence plan v0.1`

PR #76 must define the evidence model required before any future claims about:

- LBF runtime validity
- Metadata reproduction
- Clean-install reproducibility
- Workflow validation
- RBAC validation
- Audit trail behavior
- Backup/restore readiness
- Clinical documentation quality
- Clinical Intelligence runtime readiness
- Demo readiness
- Pilot readiness
- Commercial readiness

No implementation PR should start before PR #76 is merged.

---

## 21. Status

```text
Documentation-only master execution guide.
Uses Golden Catalog Gap Assessment V0.1 as baseline.
No runtime implementation.
No SQL.
No SQL execution approval.
No runtime AI.
No OpenEMR core-sensitive changes.
Not production-ready.
Not clinically validated.
Not regulatory compliant by default.
Not cybersecurity certified.
Not commercially deployment-ready.
