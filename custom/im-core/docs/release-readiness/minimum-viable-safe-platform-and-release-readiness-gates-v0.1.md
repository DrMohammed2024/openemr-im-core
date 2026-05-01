# Minimum Viable Safe Platform and Release Readiness Gates V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines a documentation-only Minimum Viable Safe Platform and Release Readiness Gates baseline for OpenEMR IM Core.

It identifies the minimum evidence and governance gates required before the project can make stronger claims such as demo candidate, pilot candidate, production candidate, or commercial deployment candidate.

This document does not make any readiness claim.

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

This document covers release-readiness planning for:

- Documentation foundation.
- Internal Medicine Follow-Up V1 evidence.
- Clinical documentation quality rules.
- Failure modes and safe response.
- Daily operating model.
- SOP framework.
- Data model and OpenEMR mapping.
- Security and privacy evidence.
- RBAC evidence.
- Audit evidence.
- Backup and restore evidence.
- Clean-install reproducibility evidence.
- Synthetic demo data readiness.
- Training and support readiness.
- Governance review.
- Release go/no-go decision-making.

This document is documentation-only.

---

## 3. Out of Scope

This document does not create:

- Runtime release gates.
- Automated deployment gates.
- SQL scripts.
- Database migrations.
- OpenEMR core changes.
- Runtime AI.
- Frontend implementation.
- FHIR/API implementation.
- Demo environment implementation.
- Pilot environment implementation.
- Production deployment.
- Commercial service deployment.

---

## 4. Current Project Context

| Item | Current status |
|---|---|
| Project | OpenEMR IM Core |
| Base system | Controlled OpenEMR fork |
| Clinical module | Internal Medicine Follow-Up V1 |
| Layout ID | `LBFim_followup_v1` |
| Documentation posture | Documentation-first and evidence-gated |
| Runtime AI | Not approved |
| SQL execution | Not approved |
| Database migration | Not approved |
| Frontend implementation | Not included |
| FHIR/API implementation | Not included |
| OpenEMR core changes | Not included |
| Clinical validation | Not claimed |
| Production readiness | Not claimed |
| Commercial readiness | Not claimed |

---

## 5. Minimum Viable Safe Platform Definition

A Minimum Viable Safe Platform candidate is a future state where OpenEMR IM Core has enough documented evidence, governance review, and safety controls to be considered for controlled non-production demonstration or limited internal evaluation.

It is not the same as:

- Demo readiness.
- Pilot readiness.
- Paid-pilot readiness.
- Production readiness.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.
- Commercial readiness.

The Minimum Viable Safe Platform must remain evidence-gated.

---

## 6. Readiness Classification Ladder

| Classification | Meaning | Current status |
|---|---|---|
| Documentation foundation | Core planning, safety, workflow, data, and quality documents exist. | In progress. |
| Controlled prototype candidate | Non-production prototype may be considered after runtime and safety evidence exists. | Not reached. |
| Demo candidate | Synthetic-data-only demo may be considered after demo safety evidence exists. | Not reached. |
| Pilot candidate | Limited pilot may be considered after clinical, privacy, security, operational, and governance evidence exists. | Not reached. |
| Paid-pilot candidate | Paid pilot may be considered after pilot evidence plus legal and commercial claims review. | Not reached. |
| Production candidate | Production may be considered after full release readiness and qualified review. | Not reached. |
| Commercial deployment candidate | Commercial deployment may be considered after production evidence plus legal, support, security, and operational review. | Not reached. |

---

## 7. Release Gate Categories

| Gate | Purpose | Required before stronger claims |
|---|---|---|
| Documentation Gate | Confirms required documents exist and are current. | Yes. |
| No-PHI Gate | Confirms repository contains no PHI or real patient data. | Yes. |
| Security/Privacy Gate | Confirms privacy, secrets, RBAC, audit, and incident boundaries are documented and reviewed. | Yes. |
| Clinical Safety Gate | Confirms failure modes, safe responses, and clinician-review boundaries are documented. | Yes. |
| Runtime Verification Gate | Confirms runtime behavior using non-production evidence. | Yes before runtime claims. |
| Validation Planning Gate | Confirms validation plan, acceptance criteria, and evidence templates exist. | Yes before validation claims. |
| Clean-Install Gate | Confirms clean installation and reproduction evidence exists. | Yes before reproducibility claims. |
| Backup/Restore Gate | Confirms backup and restore evidence exists. | Yes before deployment claims. |
| Training Gate | Confirms users have training materials and competency expectations. | Yes before demo or pilot claims. |
| Support Gate | Confirms support, escalation, and incident handling expectations. | Yes before demo or pilot claims. |
| Governance Gate | Confirms owners, reviewers, approvals, and go/no-go authority are defined. | Yes. |
| Claims Gate | Confirms no unsupported readiness, validation, compliance, certification, or commercial claims are made. | Yes. |

---

## 8. Minimum Evidence Matrix

| Evidence area | Minimum evidence required | Current status |
|---|---|---|
| Project state | Current project state document and PR sequence evidence. | Partial. |
| LBF metadata | Documented metadata baseline and independent reproduction plan. | Partial. |
| Runtime form visibility | Sanitized non-production evidence that the form exists and opens. | Not proven. |
| Encounter preview | Synthetic-patient encounter preview evidence. | Not proven. |
| Clinical documentation rules | Documentation-only quality rule catalog. | Present after PR #85. |
| Failure modes | Failure Modes and Safe Response Library. | Present after PR #81. |
| Operating model | Daily Operating Model and Patient Status Model. | Present after PR #82. |
| SOP framework | SOP Framework. | Present after PR #83. |
| Data model | Data Model Starter and OpenEMR Mapping. | Present after PR #84. |
| No-PHI policy | Formal No-PHI repository policy. | Not complete. |
| RBAC | Role matrix and access test evidence. | Not proven. |
| Audit | Sanitized audit review evidence. | Not proven. |
| Backup/restore | Non-production backup and restore evidence. | Not proven. |
| Clean install | Clean install steps and reproduction evidence. | Not proven. |
| Security/privacy | Security and privacy baseline. | Not complete. |
| Training | Training package and role-based onboarding. | Not complete. |
| Support | Support and incident escalation model. | Not complete. |
| Governance ownership | Owners, reviewers, and go/no-go authority. | Not complete. |
| Release decision | Formal release readiness checklist. | Not complete. |

---

## 9. Go / No-Go Rules

| Decision area | Go condition | No-Go condition |
|---|---|---|
| Documentation completeness | Required documentation exists and is reviewed. | Required documentation is missing or outdated. |
| PHI safety | No PHI, credentials, logs, or database dumps are present. | PHI, credentials, sensitive logs, or database dumps are present. |
| SQL safety | SQL remains blocked unless explicitly approved after gates. | SQL is executed without approval. |
| Runtime safety | Runtime behavior is verified in non-production. | Runtime behavior is assumed without evidence. |
| Clinical safety | Clinician review boundary is preserved. | Autonomous diagnosis, treatment, prescribing, triage, or CDS is introduced. |
| AI safety | No runtime AI unless governed and validated. | Runtime AI is introduced without governance. |
| OpenEMR safety | OpenEMR-native and configuration-first posture is preserved. | Core-sensitive changes are introduced without review. |
| Validation | Validation evidence exists before validation claims. | Validation is claimed from documentation alone. |
| Security | RBAC, audit, privacy, backup, and incident expectations are reviewed. | Security or privacy readiness is claimed without evidence. |
| Claims | Claims are limited to evidence-supported status. | Demo, pilot, production, commercial, compliance, certification, or validation readiness is claimed without evidence. |

---

## 10. Release Readiness Checklist

Before any stronger readiness claim, the project must verify:

- Required documentation exists.
- Required documentation renders cleanly.
- No PHI is present.
- No real patient data is present.
- No credentials are present.
- No secrets are present.
- No sensitive logs are present.
- No database dumps are present.
- No SQL execution occurred without approval.
- No runtime AI is introduced without governance.
- No autonomous CDS is introduced.
- No autonomous diagnosis is introduced.
- No autonomous treatment recommendation is introduced.
- No autonomous prescribing is introduced.
- No autonomous emergency triage is introduced.
- No patient-facing AI is introduced.
- No OpenEMR core-sensitive changes are introduced without review.
- Runtime evidence exists before runtime claims.
- Validation evidence exists before validation claims.
- RBAC evidence exists before access-control claims.
- Audit evidence exists before auditability claims.
- Backup/restore evidence exists before deployment claims.
- Clean-install evidence exists before reproducibility claims.
- Training evidence exists before demo or pilot claims.
- Support evidence exists before demo or pilot claims.
- Governance approval exists before release claims.
- Claims are reviewed before public or commercial use.

---

## 11. Demo Candidate Gate

A future demo candidate requires:

- Synthetic data only.
- No PHI.
- No real patient data.
- No real screenshots with identifiers.
- Demo scope statement.
- Demo reset plan.
- Demo safety notes.
- Role-based demonstration script.
- No clinical validation claim.
- No production claim.
- No pilot claim.
- No commercial deployment claim.
- Reviewer approval.

Current status:

Not demo-ready.

---

## 12. Pilot Candidate Gate

A future pilot candidate requires:

- Completed demo gate.
- Clinical governance review.
- Privacy review.
- Security review.
- RBAC evidence.
- Audit evidence.
- Backup/restore evidence.
- Incident response plan.
- Training package.
- Support workflow.
- Validation plan.
- Legal and regulatory boundary review.
- Clear no-claims statement unless evidence supports specific claims.

Current status:

Not pilot-ready.

---

## 13. Production Candidate Gate

A future production candidate requires:

- Completed pilot gate or equivalent formal readiness path.
- Full deployment plan.
- Operational support plan.
- Security review.
- Privacy review.
- Backup/restore test evidence.
- Monitoring and incident response.
- Change control process.
- Clinical governance review.
- Validation evidence.
- Qualified legal/regulatory review where applicable.
- Release approval.

Current status:

Not production-ready.

---

## 14. Commercial Deployment Candidate Gate

A future commercial deployment candidate requires:

- Production candidate evidence.
- GPL/OpenEMR positioning review.
- Claims-control review.
- Commercial support model.
- Pricing and packaging boundaries.
- Legal review.
- Security/privacy review.
- Support escalation model.
- Client-facing non-claims language.
- Commercial release approval.

Current status:

Not commercially deployment-ready.

---

## 15. Relationship to Prior PRs

| Prior PR | Relationship |
|---|---|
| PR #80 | Testing and Verification Plan supports verification expectations. |
| PR #81 | Failure Modes and Safe Response Library supports clinical and operational safety gates. |
| PR #82 | Daily Operating Model and Patient Status Model supports workflow and status readiness. |
| PR #83 | SOP Framework supports procedure and training readiness. |
| PR #84 | Data Model Starter and OpenEMR Mapping supports source-of-truth and mapping readiness. |
| PR #85 | Clinical Documentation Quality Rules supports future documentation quality gate. |
| PR #86 | This document defines Minimum Viable Safe Platform and release readiness gates. |

---

## 16. Risks

| Risk | Impact | Control |
|---|---|---|
| Readiness is overstated | Unsafe expectations or misuse. | Claims gate and evidence review. |
| Demo uses real data | Privacy breach. | Synthetic-data-only demo gate. |
| Pilot starts without governance | Clinical and operational risk. | Pilot candidate gate. |
| Production claim is made too early | Safety, legal, and trust risk. | Production candidate gate. |
| Security is assumed | Privacy and operational risk. | Security/privacy/RBAC/audit evidence gates. |
| Validation is assumed from documentation | Clinical safety risk. | Validation planning and evidence gates. |
| OpenEMR core is modified prematurely | Upgrade and maintenance risk. | OpenEMR-first and fork-minimal posture. |
| SQL is executed too early | Data integrity risk. | SQL non-execution boundary. |
| Runtime AI is introduced too early | Clinical safety and governance risk. | AI governance and validation gate. |
| Support is undefined | Operational failure. | Support gate and incident response plan. |

---

## 17. Definition of Done

This document is complete when:

- Minimum Viable Safe Platform definition is documented.
- Readiness classification ladder is documented.
- Release gate categories are documented.
- Minimum evidence matrix is documented.
- Go / No-Go rules are documented.
- Release readiness checklist is documented.
- Demo candidate gate is documented.
- Pilot candidate gate is documented.
- Production candidate gate is documented.
- Commercial deployment candidate gate is documented.
- Relationship to prior PRs is documented.
- Risks and controls are documented.
- No runtime implementation is introduced.
- No SQL is introduced.
- No database migration is introduced.
- No runtime AI is introduced.
- No frontend or FHIR/API implementation is introduced.
- No PHI, credentials, sensitive logs, or database dumps are included.
- No OpenEMR core-sensitive files are modified.
- No unsupported readiness, validation, compliance, certification, or commercial claims are introduced.

---

## 18. After-Merge Action

After this PR is merged, the next planned documentation step is PR #87:

docs(im-core): add governance ownership model v0.1

Do not start PR #87 until PR #86 is merged and reviewed.

---

## 19. Status

Documentation-only Minimum Viable Safe Platform and release readiness gates.

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
