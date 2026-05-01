# Evidence Registry and Evidence Templates V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines a documentation-only evidence registry and evidence template baseline for OpenEMR IM Core.

It creates a structured way to track existing documentation evidence, required future evidence, evidence ownership, review status, release-gate linkage, and evidence limitations.

This document does not create runtime evidence.

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

This evidence registry covers:

- Evidence ID format.
- Evidence status definitions.
- Existing documentation evidence from prior PRs.
- Required future evidence.
- Evidence ownership expectations.
- Evidence template structure.
- Evidence review rules.
- Evidence limitations.
- Release-gate linkage.

This document is documentation-only.

---

## 3. Out of Scope

This document does not create or approve:

- Runtime verification evidence.
- Runtime test execution.
- SQL execution evidence.
- Database migration evidence.
- Production evidence.
- Clinical validation evidence.
- Regulatory compliance evidence.
- Cybersecurity certification evidence.
- Demo readiness evidence.
- Pilot readiness evidence.
- Production readiness evidence.
- Commercial readiness evidence.

---

## 4. Evidence Principles

Evidence for OpenEMR IM Core must follow these principles:

1. Evidence must be linked to a specific artifact.
2. Evidence must identify an owner or responsible role.
3. Evidence must identify review status.
4. Evidence must identify the related PR when applicable.
5. Evidence must identify the related release gate when applicable.
6. Evidence must not include PHI.
7. Evidence must not include real patient data.
8. Evidence must not include credentials or secrets.
9. Evidence must not include sensitive logs.
10. Evidence must not include database dumps.
11. Evidence must not imply clinical validation unless formal validation evidence exists.
12. Evidence must not imply regulatory compliance unless independently established.
13. Evidence must not imply cybersecurity certification unless formally assessed.
14. Evidence must not imply demo, pilot, production, or commercial readiness unless release gates are satisfied.

---

## 5. Evidence ID Format

Evidence IDs should use a stable prefix and number.

Recommended format:

| Pattern | Meaning |
|---|---|
| `EVID-VAL-###` | Validation or verification evidence. |
| `EVID-FM-###` | Failure mode or safe response evidence. |
| `EVID-OPS-###` | Operations or workflow evidence. |
| `EVID-SOP-###` | SOP evidence. |
| `EVID-DATA-###` | Data model or mapping evidence. |
| `EVID-CQ-###` | Clinical documentation quality evidence. |
| `EVID-REL-###` | Release readiness evidence. |
| `EVID-GOV-###` | Governance evidence. |
| `EVID-WF-###` | Workflow evidence. |
| `EVID-SEC-###` | Security, privacy, RBAC, or audit evidence. |
| `EVID-BACKUP-###` | Backup or restore evidence. |
| `EVID-DEMO-###` | Synthetic demo evidence. |
| `EVID-TRAIN-###` | Training evidence. |
| `EVID-SUPPORT-###` | Support evidence. |
| `EVID-CLAIMS-###` | Claims or commercial boundary evidence. |

---

## 6. Evidence Status Definitions

| Status | Meaning |
|---|---|
| Existing documentation evidence | Document exists and supports documentation-stage governance only. |
| Required future evidence | Evidence is required later before a gate can be passed. |
| Pending review | Artifact exists but needs owner or reviewer confirmation. |
| In progress | Evidence is being prepared but is not complete. |
| Passed | Evidence was reviewed and accepted for its stated scope. |
| Failed | Evidence did not satisfy the stated requirement. |
| Blocked | Evidence is missing or insufficient for the claimed gate. |
| Retired | Evidence has been replaced or withdrawn. |

Important boundary:

Existing documentation evidence does not equal runtime proof, clinical validation, regulatory compliance, cybersecurity certification, or production readiness.

---

## 7. Existing Documentation Evidence Index

| Evidence ID | Artifact | Related PR | Owner role | Status | Gate supported | Notes |
|---|---|---:|---|---|---|---|
| EVID-VAL-080 | Testing and Verification Plan | #80 | Validation Owner | Existing documentation evidence | Documentation-only | Planning evidence only. |
| EVID-FM-081 | Failure Modes and Safe Response Library | #81 | Clinical Safety Owner | Existing documentation evidence | Documentation-only | Safe response planning only. |
| EVID-OPS-082 | Daily Operating Model and Patient Status Model | #82 | Operations Owner | Existing documentation evidence | Documentation-only | Operational planning only. |
| EVID-SOP-083 | SOP Framework | #83 | Documentation Owner | Existing documentation evidence | Documentation-only | SOP framework only. |
| EVID-DATA-084 | Data Model Starter and OpenEMR Mapping | #84 | Technical Owner | Existing documentation evidence | Documentation-only | No schema change. |
| EVID-CQ-085 | Clinical Documentation Quality Rules | #85 | Clinical Safety Owner | Existing documentation evidence | Documentation-only | Documentation quality planning only. |
| EVID-REL-086 | Minimum Viable Safe Platform and Release Readiness Gates | #86 | Release Owner | Existing documentation evidence | Documentation-only | No readiness claim. |
| EVID-GOV-087 | Governance Ownership Model | #87 | Governance Owner | Existing documentation evidence | Documentation-only | Ownership planning only. |
| EVID-WF-088 | Core Clinic Workflow Plans | #88 | Operations Owner | Existing documentation evidence | Documentation-only | Workflow planning only. |
| EVID-WF-089 | Follow-up, Open Loops, and Safety-Net Workflow Plans | #89 | Clinical Safety Owner | Existing documentation evidence | Documentation-only | Follow-up and safety-net planning only. |
| EVID-WF-090 | Lab Results and Critical Results Workflow Plans | #90 | Clinical Safety Owner | Existing documentation evidence | Documentation-only | Critical result planning only. |
| EVID-WF-091 | Pharmacy, Billing, and Administrative Linkage Plans | #91 | Operations Owner | Existing documentation evidence | Documentation-only | No pharmacy, billing, or claims automation. |

---

## 8. Required Future Evidence Index

| Evidence ID | Artifact or evidence need | Related future scope | Owner role | Status | Gate supported | Notes |
|---|---|---|---|---|---|---|
| EVID-SEC-FUTURE-001 | No-PHI review checklist evidence | Security/privacy | Security and Privacy Reviewer | Required future evidence | Demo candidate and above | No PHI allowed. |
| EVID-SEC-FUTURE-002 | RBAC matrix and access review evidence | Security/RBAC | Security and Privacy Reviewer | Required future evidence | Demo candidate and above | Not runtime evidence yet. |
| EVID-AUDIT-FUTURE-001 | Audit evidence template and review evidence | Audit | Security and Privacy Reviewer | Required future evidence | Demo candidate and above | Sanitized only. |
| EVID-BACKUP-FUTURE-001 | Backup and restore evidence template | Backup/restore | Security and Privacy Reviewer | Required future evidence | Runtime and deployment gates | No production database testing at current stage. |
| EVID-INSTALL-FUTURE-001 | Non-production reproducible install plan | Deployment planning | Technical Owner | Required future evidence | Demo candidate | Planning only until executed. |
| EVID-RUNTIME-FUTURE-001 | Runtime form visibility evidence | Runtime verification | Technical Owner | Required future evidence | Runtime claim gate | Synthetic/non-production only. |
| EVID-DEMO-FUTURE-001 | Synthetic demo data plan | Demo planning | Release Owner | Required future evidence | Demo candidate | Synthetic data only. |
| EVID-TRAIN-FUTURE-001 | Training package and acknowledgement evidence | Training | Operations Owner | Required future evidence | Demo/pilot candidate | Not completed. |
| EVID-SUPPORT-FUTURE-001 | Support and escalation model evidence | Support | Operations Owner | Required future evidence | Demo/pilot candidate | Not production support. |
| EVID-CLAIMS-FUTURE-001 | Claims register and commercial claims review | Claims/commercial | Claims Reviewer | Required future evidence | Commercial review | No unsupported claims. |
| EVID-TRACE-FUTURE-001 | Traceability matrix | Traceability | Evidence Reviewer | Required future evidence | Release readiness | Future PR. |
| EVID-RISK-FUTURE-001 | Risk register | Risk management | Clinical Safety Owner | Required future evidence | Safety review | Future PR. |
| EVID-HF-FUTURE-001 | Human factors and usability risk plan | Human factors | Clinical Safety Owner | Required future evidence | Runtime planning | Future PR. |
| EVID-SAFETY-FUTURE-001 | Clinical safety case | Clinical safety | Clinical Safety Owner | Required future evidence | Clinical safety review | Future PR. |

---

## 9. Evidence Template

Future evidence items should use this structure.

| Field | Required content |
|---|---|
| Evidence ID | Stable evidence identifier. |
| Evidence title | Short descriptive title. |
| Evidence type | Documentation, review, test, checklist, screenshot, log summary, template, decision, or signoff. |
| Related PR | PR number or future PR reference. |
| Related requirement | Requirement ID when traceability exists. |
| Related risk | Risk ID when risk register exists. |
| Related control | Control ID when traceability exists. |
| Related test | Test ID when verification exists. |
| Related release gate | Documentation-only, demo candidate, pilot candidate, production candidate, or commercial candidate. |
| Owner role | Accountable role. |
| Reviewer role | Reviewer role. |
| Status | Evidence status. |
| Environment | Documentation-only, non-production, synthetic demo, or other approved environment. |
| PHI present? | Must be No for GitHub evidence. |
| Real patient data present? | Must be No for GitHub evidence. |
| Evidence location | Repository path or approved external evidence location. |
| Review date | Date reviewed. |
| Limitations | What the evidence does not prove. |
| Next action | Required next step. |

---

## 10. Evidence Review Rules

Evidence must be reviewed before being used to support stronger claims.

Review must confirm:

- Scope matches the evidence.
- Evidence does not include PHI.
- Evidence does not include real patient data.
- Evidence does not include credentials or secrets.
- Evidence does not include sensitive logs.
- Evidence does not include database dumps.
- Evidence does not overclaim readiness.
- Evidence does not imply clinical validation unless formally validated.
- Evidence does not imply regulatory compliance unless independently established.
- Evidence does not imply cybersecurity certification unless formally assessed.
- Evidence owner and reviewer are identified.
- Evidence limitations are documented.

---

## 11. Evidence Linkage to Release Gates

| Release gate | Required evidence type |
|---|---|
| Documentation foundation | Documentation artifacts, review status, scope control. |
| Controlled prototype candidate | Non-production plan, runtime plan, risk review, governance approval. |
| Demo candidate | Synthetic data plan, no-PHI review, demo boundary statement, training notes, claims review. |
| Pilot candidate | Clinical safety review, privacy/security review, RBAC evidence, audit evidence, backup/restore evidence, support plan, training evidence, validation plan. |
| Production candidate | Full deployment plan, validation evidence, security review, privacy review, backup/restore evidence, incident response, monitoring, training, release approval. |
| Commercial candidate | Production evidence if applicable, claims review, legal review, commercial support model, packaging boundaries. |

This document does not approve any release gate.

---

## 12. Evidence Limitations

The current evidence registry is limited to documentation-stage evidence.

It does not prove:

- Runtime functionality.
- Runtime correctness.
- Clean-install reproducibility.
- Clinical safety in real use.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.
- HIPAA compliance.
- GDPR compliance.
- FDA readiness.
- MDR readiness.
- Demo readiness.
- Pilot readiness.
- Production readiness.
- Commercial readiness.

---

## 13. Evidence Maintenance Rules

The evidence registry should be updated when:

- A new documentation artifact is merged.
- A release gate changes.
- A safety boundary changes.
- A new workflow plan is added.
- A new evidence template is added.
- A risk register item is added or changed.
- A traceability matrix item is added or changed.
- A claim is proposed or changed.
- A future runtime implementation is proposed.
- Evidence is retired or superseded.

---

## 14. Relationship to Prior PRs

| Prior PR | Relationship |
|---|---|
| PR #80 | Provides testing and verification planning evidence. |
| PR #81 | Provides failure mode and safe response planning evidence. |
| PR #82 | Provides operating model and patient status planning evidence. |
| PR #83 | Provides SOP framework evidence. |
| PR #84 | Provides data model and OpenEMR mapping planning evidence. |
| PR #85 | Provides clinical documentation quality planning evidence. |
| PR #86 | Provides release readiness gate planning evidence. |
| PR #87 | Provides governance ownership planning evidence. |
| PR #88 | Provides core clinic workflow planning evidence. |
| PR #89 | Provides follow-up, open-loop, and safety-net workflow planning evidence. |
| PR #90 | Provides lab results and critical results workflow planning evidence. |
| PR #91 | Provides pharmacy, billing, and administrative linkage planning evidence. |
| PR #92 | This document creates the evidence registry and evidence template baseline. |

---

## 15. Risks

| Risk | Impact | Control |
|---|---|---|
| Documentation evidence is mistaken for runtime proof | Unsupported readiness claims. | Evidence limitations section. |
| Evidence lacks owner | Review and accountability gaps. | Owner and reviewer fields. |
| Evidence includes PHI | Privacy breach. | No-PHI evidence rules. |
| Evidence is not linked to gates | Readiness confusion. | Release gate linkage. |
| Evidence is outdated | Incorrect decisions. | Maintenance rules. |
| Evidence overclaims clinical validation | Safety and legal risk. | Claims boundary and review rules. |
| Evidence structure becomes inconsistent | Audit and review burden. | Evidence template. |

---

## 16. Definition of Done

This document is complete when:

- Evidence principles are documented.
- Evidence ID format is documented.
- Evidence status definitions are documented.
- Existing documentation evidence index is documented.
- Required future evidence index is documented.
- Evidence template is documented.
- Evidence review rules are documented.
- Evidence release-gate linkage is documented.
- Evidence limitations are documented.
- Evidence maintenance rules are documented.
- Relationship to prior PRs is documented.
- Risks and controls are documented.
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

After this PR is merged, the next planned documentation step is PR #93:

docs(im-core): add traceability matrix v0.1

Do not start PR #93 until PR #92 is merged and reviewed.

---

## 18. Status

Documentation-only evidence registry and evidence templates.

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
