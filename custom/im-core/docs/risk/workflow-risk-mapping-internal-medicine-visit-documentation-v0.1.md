# Workflow Risk Mapping: Internal Medicine Visit Documentation V0.1

## AI-Assisted Solo-Owner Applicability

Eligible documentation-stage risk-mapping changes may use GPT risk and
clinical-boundary advisory review and the Project Owner decision record under
the AI-Assisted Solo-Owner Governance Policy V0.1. Listed reviewer roles are
advisory for eligible work.

GPT may not accept risk. Clinical or operational residual-risk acceptance,
runtime use, patient-care use, PHI, validation, or deployment remains outside
this model and retains applicable qualified-human or external gates.

## 1. Document Status

Status: Draft for governance review.

Document type: Workflow-specific risk mapping.

Scope: Documentation-only.

Current stage: Planning only.

This document does not authorize runtime implementation, clinical use, AI use, FHIR/API implementation, database changes, or OpenEMR core modification.

---

## 2. Purpose

This document maps planning-stage risks for the Internal Medicine Visit Documentation Workflow V0.1.

The purpose is to connect workflow steps, clinical safety concerns, privacy/security boundaries, AI boundaries, audit expectations, failure modes, and safe fallbacks before any implementation begins.

This document supports traceability and safety review only.

---

## 3. Scope

This risk mapping applies to:

- Internal Medicine Visit Documentation Workflow V0.1.
- Visit documentation planning.
- Physician review checkpoints.
- Documentation completeness risks.
- Red-flag documentation risks.
- Safety-netting documentation risks.
- Privacy and PHI avoidance.
- AI boundary risks.
- API/FHIR boundary risks.
- Database boundary risks.
- OpenEMR customization boundary risks.

---

## 4. Out of Scope

This document does not define or implement:

- Runtime risk controls.
- Clinical validation.
- Production risk acceptance.
- AI implementation.
- Prompt execution.
- Model integration.
- API/FHIR implementation.
- SQL.
- Database migration.
- Database schema change.
- OpenEMR core change.
- Patient-facing workflow.
- Real patient data processing.
- Regulatory compliance claim.

---

## 5. Related Documents

This risk mapping relates to:

- Internal Medicine Visit Documentation Workflow V0.1.
- Internal Medicine Workflow Specification Template V0.1.
- Runtime Boundary Specification V0.1.
- Database Boundary and Migration Policy V0.1.
- API/FHIR Boundary Specification V0.1.
- AI Clinical Support Boundary Specification V0.1.
- Documentation Index and Review Cadence V0.1.
- Risk Register V0.1.
- Clinical Safety Case V0.1.
- Threat Model and Data Governance V0.1.

---

## 6. Risk Classification

Risk severity levels:

- Critical: potential for serious patient harm, unsafe autonomous action, PHI exposure, or unsafe production use.
- High: potential for safety-relevant documentation error, privacy breach, or workflow misuse.
- Medium: potential for incomplete review, traceability gap, or operational confusion.
- Low: documentation clarity issue with limited safety impact.

Risk status values:

- Open.
- Needs review.
- Mitigated by documentation boundary.
- Future implementation control required.
- Blocked until later gate.

---

## 7. Risk Mapping Table

| Risk ID | Workflow area | Risk | Severity | Current control | Future required control | Status |
|---|---|---|---|---|---|---|
| IM-VD-R001 | Visit context | Incorrect or incomplete visit context may lead to poor documentation structure. | Medium | Workflow requires visit context identification and physician review. | Structured validation and clinician review before runtime use. | Needs review |
| IM-VD-R002 | Documentation sections | Missing key documentation sections may reduce clinical usefulness. | Medium | Workflow defines expected documentation sections and completeness checks. | Runtime completeness checks only after approved implementation gate. | Future implementation control required |
| IM-VD-R003 | Red flags | Red flags may be missed or under-documented. | High | Workflow defines red-flag review as physician-controlled. | Clinician-approved red-flag rules, local protocol review, and audit trail. | Needs review |
| IM-VD-R004 | Safety-netting | Safety-netting documentation may be absent or incomplete. | High | Workflow requires safety-netting planning and physician review. | Validated safety-netting workflow and local protocol approval. | Needs review |
| IM-VD-R005 | Physician review | Draft documentation may be treated as final without physician approval. | Critical | Workflow states physician review is mandatory. | Technical enforcement of approval workflow before clinical use. | Future implementation control required |
| IM-VD-R006 | AI output | AI-assisted text may be mistaken for verified clinical documentation. | Critical | AI is not implemented and future AI must be draft-only. | AI output labeling, physician approval, audit trail, and safety testing. | Blocked until later gate |
| IM-VD-R007 | Autonomous decision-making | Workflow could be misused to support autonomous diagnosis, prescribing, or triage. | Critical | Document explicitly prohibits autonomous diagnosis, prescribing, and triage. | Runtime guardrails and governance enforcement if AI/runtime is ever introduced. | Blocked until later gate |
| IM-VD-R008 | PHI exposure | Real patient data could be inserted into planning documents or examples. | Critical | No PHI and no real patient data are allowed. | PHI scanning, privacy review, access controls, and secure environment controls. | Needs review |
| IM-VD-R009 | API/FHIR misuse | Future API/FHIR assumptions may be interpreted as implementation authorization. | High | Workflow states no API/FHIR implementation is authorized. | API/FHIR implementation gate, security review, test coverage, and audit controls. | Mitigated by documentation boundary |
| IM-VD-R010 | Database misuse | Future persistence assumptions may be interpreted as database authorization. | High | Workflow states no SQL, migration, schema change, or persistence implementation. | Database change control, rollback plan, migration review, and backup validation. | Mitigated by documentation boundary |
| IM-VD-R011 | OpenEMR core sensitivity | Future customization could modify OpenEMR core unsafely. | High | Workflow states no OpenEMR core modification is authorized. | Upgrade-safe customization strategy and technical review. | Needs review |
| IM-VD-R012 | Audit gap | Future workflow actions may not be traceable. | Medium | Workflow identifies audit expectations. | Implemented audit logging design and validation before runtime. | Future implementation control required |
| IM-VD-R013 | Local protocol mismatch | Workflow assumptions may conflict with local clinical documentation policy. | High | Workflow requires local protocol review. | Site-specific clinical approval and change control. | Needs review |
| IM-VD-R014 | Human factors | Workflow may increase clinician cognitive burden. | Medium | Workflow requires human factors review before implementation. | Usability testing and workflow simulation. | Future implementation control required |
| IM-VD-R015 | Unsupported readiness claims | Planning document may be misread as clinical validation or production readiness. | High | Document states planning-only limitations. | Release gating and labeling controls. | Mitigated by documentation boundary |

---

## 8. Critical Stop Rules

Stop further implementation planning if any of the following occurs:

- PHI or real patient data is introduced.
- Autonomous diagnosis is proposed.
- Autonomous prescribing is proposed.
- Autonomous triage is proposed.
- AI output is treated as final clinical documentation.
- Runtime code is added without an approved implementation gate.
- API/FHIR behavior is implemented without approved boundary review.
- SQL or database migration is added.
- OpenEMR core behavior is modified.
- Production readiness or clinical validation is claimed without evidence.
- GitHub checks show failing or pending status before merge.

---

## 9. Risk Control Themes

Current documentation-stage controls:

- Documentation-only scope.
- No PHI.
- No real patient data.
- No runtime implementation.
- No AI implementation.
- No prompt execution.
- No model integration.
- No API/FHIR implementation.
- No SQL.
- No database migration.
- No OpenEMR core-sensitive change.
- Physician review required for future clinical use.
- Explicit planning-only limitations.

Future implementation controls would require separate approval and may include:

- Role-based access control.
- Audit logging.
- Clinical safety validation.
- Human factors testing.
- Synthetic test scenarios.
- Privacy/security review.
- AI output labeling if AI is introduced.
- Physician approval enforcement.
- Rollback and incident response plan.

---

## 10. Traceability Expectations

Each risk should be traceable to:

- Workflow section.
- Related safety boundary.
- Required reviewer role.
- Future test scenario if implementation is proposed.
- Risk owner.
- Mitigation status.
- Related PR.
- Related documentation index entry.

---

## 11. Reviewer Questions

Reviewers should ask:

- Does this risk map remain documentation-only?
- Does it introduce PHI or real patient data?
- Does it imply clinical validation?
- Does it imply production readiness?
- Does it identify safety-relevant workflow risks?
- Does it define stop rules?
- Does it preserve physician supervision?
- Does it avoid autonomous AI behavior?
- Does it avoid runtime implementation?
- Does it avoid API/FHIR implementation?
- Does it avoid SQL and database migration?
- Does it avoid OpenEMR core-sensitive change?
- Does it define future controls without claiming they are implemented?

---

## 12. Acceptance Criteria

This document is acceptable when:

- It maps risks to the Internal Medicine Visit Documentation Workflow.
- It includes clinical safety risks.
- It includes privacy/security risks.
- It includes AI boundary risks.
- It includes API/FHIR and database boundary risks.
- It defines stop rules.
- It identifies current controls and future controls.
- It avoids unsupported readiness claims.
- It avoids PHI and real patient data.
- It remains documentation-only.

---

## 13. After-Merge Action

After merge:

- Update master locally.
- Confirm working tree is clean.
- Confirm no open PRs remain.
- Confirm this document exists on master.
- Create a separate documentation-index update PR if needed.

Do not start runtime implementation from this document alone.

---

## 14. Status and Limitations

This document is planning-only.

It does not prove:

- Clinical safety.
- Clinical validation.
- Usability validation.
- Human factors validation.
- Regulatory compliance.
- Cybersecurity certification.
- Production readiness.
- Pilot readiness.
- Commercial readiness.

No runtime implementation.

No AI implementation.

No prompt execution.

No model integration.

No API implementation.

No FHIR implementation.

No SQL.

No database migration.

No database schema change.

No PHI.

No real patient data.

No frontend implementation.

No OpenEMR core-sensitive change.
