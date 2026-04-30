# Validation Evidence Plan V0.1 — OpenEMR IM Core

## 1. Purpose

This document defines the validation evidence model for OpenEMR IM Core.

It establishes what evidence is required before the project can make stronger claims about:

- Internal Medicine Follow-Up V1 runtime validity
- LBF metadata reproducibility
- clean-install reproducibility
- workflow validation
- documentation quality
- role-based access control
- audit trail behavior
- backup and restore readiness
- privacy and repository safety
- Clinical Intelligence readiness
- demo readiness
- pilot readiness
- paid pilot readiness
- commercial readiness

This document is a planning and evidence-governance artifact only.

It does not include validation results.

It does not claim that validation has been completed.

---

## 2. Relationship to Prior Documentation

This document depends on the following prior project baselines:

| Prior document | Relationship |
|---|---|
| `custom/im-core/docs/project-state/current-project-state.md` | Defines the current project state and known LBF baseline. |
| `custom/im-core/docs/clinical-intelligence/` | Defines Clinical Intelligence boundaries and documentation-only safety posture. |
| `custom/im-core/docs/golden-catalog-alignment/golden-catalog-gap-assessment-v0.1.md` | Defines the gap baseline against the Golden Digital Health Operating Catalog. |
| `custom/im-core/docs/golden-catalog-alignment/master-execution-guide-v0.1.md` | Defines the master execution doctrine and roadmap. |
| `custom/im-core/lbf/scripts/` | Contains seed/script governance and SQL non-execution planning. |

This document does not replace those documents.

It defines the evidence model required to prove future readiness claims.

---

## 3. Scope

This document covers validation evidence planning for:

- documentation quality
- LBF metadata verification
- LBF runtime rendering
- clean-install reproducibility
- workflow validation
- clinician usability review
- safety boundary review
- privacy and no-PHI controls
- RBAC review
- audit trail review
- backup and restore evidence
- Clinical Intelligence documentation validation
- demo readiness evidence
- pilot readiness evidence
- commercial readiness evidence

---

## 4. Out of Scope

This document does not include:

- runtime implementation
- SQL creation
- SQL execution
- executable seed/script execution
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
- paid pilot deployment
- commercial deployment
- clinical validation claim
- regulatory compliance claim
- cybersecurity certification claim

---

## 5. Evidence Classification

All project evidence must be classified before it is used to support any claim.

| Evidence class | Meaning | Acceptable use | Not acceptable for |
|---|---|---|---|
| User-provided | Information provided by the project owner or prior session | Planning and traceability | Independent validation claim |
| Repository-verified | File, PR, commit, or repository state directly verified | Documentation baseline | Clinical validation claim |
| Runtime-observed | Behavior observed in a running non-production environment | Prototype validation | Production claim |
| Independently reproduced | Repeated by another reviewer or clean environment | Stronger validation evidence | Regulatory compliance by itself |
| Clinician-reviewed | Reviewed by qualified clinician or clinical informatics reviewer | Clinical usability and safety input | Regulatory approval by itself |
| Security-reviewed | Reviewed for access, secrets, PHI, logs, and baseline controls | Security readiness planning | Cybersecurity certification |
| Legally/regulatorily reviewed | Reviewed by qualified legal/regulatory reviewer | Boundary and claims discipline | Universal compliance claim |
| Commercially reviewed | Reviewed for support, packaging, pricing, claims, and delivery | Commercial planning | Production readiness by itself |

---

## 6. Required Evidence Domains

The project must collect evidence in the following domains before moving toward demo, pilot, paid pilot, or production candidate status.

| Evidence domain | Required evidence | Required before |
|---|---|---|
| Documentation integrity | Markdown renders cleanly, correct paths, no unsupported claims | Every PR |
| No-PHI repository safety | No PHI, no credentials, no logs, no database dumps | Any public repository work |
| LBF metadata verification | Row count, group count, group IDs, field distribution, metadata PASS | LBF reproducibility claim |
| LBF runtime rendering | Screenshots or reviewed runtime evidence using synthetic data only | Prototype/demo claim |
| Clean-install reproducibility | Repeatable non-production install with documented steps | Clean-install claim |
| Workflow validation | End-to-end workflow tests using synthetic data | Demo/pilot claim |
| Clinician usability review | Clinician checklist and feedback | Clinical workflow maturity claim |
| Safety boundary review | Confirmation of no autonomous clinical decisions | Any Clinical Intelligence work |
| RBAC review | Role matrix and least-privilege tests | Demo/pilot claim |
| Audit trail review | Access/change/action trace evidence | Pilot readiness claim |
| Backup/restore test | Backup and restore evidence in non-production | Pilot readiness claim |
| Incident response | Incident logging and escalation process | Pilot readiness claim |
| Clinical Intelligence validation | Synthetic test cases, expected outputs, HITL review | Runtime Clinical Intelligence claim |
| Demo readiness | Synthetic data, reset procedure, disclaimers | Demo claim |
| Pilot readiness | Security, privacy, validation, training, support, rollback evidence | Pilot claim |
| Commercial readiness | Support model, legal review, GPL/OpenEMR positioning, claims policy | Paid deployment claim |

---

## 7. Validation Gates

The following gates must be passed in sequence.

| Gate | Name | Purpose | Minimum evidence | Blocks |
|---|---|---|---|---|
| Gate 0 | Documentation Integrity Gate | Ensure documentation is readable and safe | Clean Markdown, correct path, no unsupported claims | All PR merges |
| Gate 1 | Repository Safety Gate | Prevent PHI/secrets/logs/dumps | No-PHI review and safe repository policy | Demo data, screenshots, evidence uploads |
| Gate 2 | LBF Metadata Gate | Verify Internal Medicine Follow-Up V1 metadata | Row/group/field distribution verification | Reproducibility claims |
| Gate 3 | Runtime Rendering Gate | Prove form renders in OpenEMR non-production environment | Screenshots or runtime notes using synthetic data | Prototype/demo claims |
| Gate 4 | Clean-Install Gate | Prove repeatable non-production installation | Fresh install evidence and metadata reproduction | Clean-install claims |
| Gate 5 | Workflow Validation Gate | Prove workflows are usable end-to-end | Synthetic workflow test scripts and results | Demo/pilot claims |
| Gate 6 | Security and Privacy Gate | Prove baseline access and data handling controls | RBAC, audit, no-PHI, backup, incident evidence | Pilot claims |
| Gate 7 | Clinical Review Gate | Obtain clinical usability and safety review | Clinician review checklist | Clinical workflow maturity claims |
| Gate 8 | Clinical Intelligence Gate | Validate any future AI/rule-based support before runtime use | HITL, audit, source display, synthetic test cases | Runtime Clinical Intelligence |
| Gate 9 | Demo Readiness Gate | Prepare safe non-production demo | Synthetic data, reset, disclaimers, no-PHI evidence | Demo use |
| Gate 10 | Pilot Readiness Gate | Prepare controlled real-world pilot | Security, privacy, training, support, rollback, validation evidence | Pilot use |
| Gate 11 | Commercial Readiness Gate | Prepare paid deployment model | Legal, GPL/OpenEMR positioning, support model, claims policy | Paid deployment |
| Gate 12 | Production Candidate Gate | Prepare production-candidate deployment | Full validation, security, backup, monitoring, support evidence | Production candidate claim |

---

## 8. Evidence Artifact Template

Each evidence artifact should use this structure.

```markdown
# Evidence Artifact — [Name]

## 1. Artifact ID

## 2. Related gate

## 3. Related capability

## 4. Evidence type
User-provided / repository-verified / runtime-observed / independently reproduced / clinician-reviewed / security-reviewed / regulatory-reviewed / commercial-reviewed

## 5. Environment
Local / non-production / demo / pilot / production-candidate

## 6. Data type
Synthetic only / de-identified with approval / real patient data with formal approval

## 7. Evidence summary

## 8. Method

## 9. Expected result

## 10. Actual result

## 11. Pass/fail status

## 12. Reviewer

## 13. Date

## 14. Files or screenshots
No PHI allowed.

## 15. Limitations

## 16. Follow-up actions

## 17. Claims allowed after this evidence

## 18. Claims still prohibited
