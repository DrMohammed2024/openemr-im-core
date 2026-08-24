# Risk Register Structure V0.1

## AI-Assisted Solo-Owner Applicability

For eligible work, GPT may perform the multidisciplinary risk and evidence
mapping in this structure and the Project Owner makes the final accountable
internal documentation-stage decision under the AI-Assisted Solo-Owner
Governance Policy V0.1. Separate Risk Owner or domain-owner approval is not a
mandatory internal merge gate for eligible work.

This does not give GPT risk-acceptance authority or permit the Project Owner
decision to claim independent, clinical, production, regulatory, certified, or
externally accepted residual risk. Operational or clinical risk acceptance and
any triggered qualified-human gate remain future or external controls.

## 1. Document Status

| Field | Value |
|---|---|
| Document title | Risk Register Structure V0.1 |
| Document type | Documentation-only governance structure |
| Project | OpenEMR IM Core |
| Version | V0.1 |
| Stage | Documentation-only, pre-runtime, pre-implementation governance |
| Intended use | Define a documentation-stage structure for capturing hazards, causes, hazardous situations, harms, controls, owners, evidence, residual-risk questions, and human review status |
| Clinical use status | Not authorized for clinical use |
| Runtime status | No runtime implementation authorized |
| AI implementation status | No AI implementation, prompt execution, model integration, or autonomous agent authorized |
| PHI status | PHI and real patient data are prohibited |
| Approval authority | Human reviewers and maintainers only |
| Merge requirement | Human review plus GitHub checks showing 0 failing and 0 pending |
| Formal compliance status | This document does not claim ISO 14971, IEC 62304, regulatory, cybersecurity, clinical, or production compliance |
| Status | Proposed for documentation-only PR review |

---

## 2. Purpose

This document defines the recommended structure for a documentation-stage risk register for OpenEMR IM Core.

The purpose is to create a consistent way to capture and review:

- Hazards.
- Causes.
- Hazardous situations.
- Potential harms.
- Foreseeable misuse.
- Risk controls.
- Risk owners.
- Verification questions.
- Residual-risk questions.
- Review status.
- Human decisions.

This document supports risk-aware governance planning.

It does not create a final risk register.

It does not approve risk acceptability.

It does not claim ISO 14971 compliance.

It does not authorize runtime code, clinical use, PHI use, AI implementation, prompt execution, model integration, production readiness, regulatory approval, or cybersecurity certification.

---

## 3. Scope

This structure applies to documentation-stage governance work in OpenEMR IM Core.

It may be used for:

- Governance documents.
- Clinical safety planning.
- Internal Medicine workflow planning.
- AI governance planning.
- Prompt governance planning.
- Privacy/security planning.
- Synthetic test data planning.
- Sandbox-readiness planning.
- Future prototype planning.
- Future implementation planning.

This document is documentation-only.

---

## 4. Out of Scope

This document does not authorize:

- Runtime implementation.
- AI implementation.
- Prompt execution.
- Model integration.
- API/FHIR implementation.
- SQL.
- Database migration.
- Database schema change.
- OpenEMR core-sensitive behavior.
- Clinical decision-making.
- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- Use of PHI.
- Use of real patient data.
- Risk acceptance by AI.
- Automated risk closure.
- Clinical validation.
- Production readiness.
- Regulatory compliance claim.
- Cybersecurity certification.

---

## 5. Core Principle

The core principle is:

Risk information must be traceable, human-reviewed, and bounded before it can influence project decisions.

Risk identification may be supported by documentation, checklists, or AI-assisted advisory review, but risk ownership and risk acceptability remain human responsibilities.

No GPT output, AI-assisted review, checklist, matrix, or governance concept may accept residual risk.

---

## 6. Risk Register Record Structure

Each risk register item should use this structure:

| Field | Description |
|---|---|
| Risk ID | Unique identifier for the risk item |
| Source | PR, document, section, review, or planning activity where the risk was identified |
| Governance category | Clinical safety, AI governance, privacy/security, risk management, traceability, runtime boundary, API/FHIR boundary, database boundary, or other |
| Hazard | Potential source of harm |
| Cause | Reason or trigger that may lead to the hazard |
| Hazardous situation | Circumstance where people, workflow, data, or system behavior may be exposed to the hazard |
| Potential harm | Possible adverse outcome |
| Foreseeable misuse | Reasonably foreseeable misuse, misunderstanding, or unsafe interpretation |
| Existing boundary/control | Current project boundary, policy, or control that mitigates the risk |
| Proposed additional control | Suggested additional documentation or governance control |
| Owner role | Human role accountable for review |
| Verification question | Question used to confirm the control is present or effective at the documentation stage |
| Residual-risk question | Question that remains after controls are applied |
| Evidence link | PR, document, section, or review evidence |
| Status | Open, mitigated, deferred, accepted by human owner, or closed |
| Human decision | GO, CONDITIONAL GO, NO-GO, or DEFER |
| Notes | Additional review notes |

---

## 7. Risk ID Format

Risk IDs should use a stable, readable format.

Recommended format:

```text
RISK-<DOMAIN>-<NUMBER>
```

Examples:

```text
RISK-CLIN-001
RISK-AI-001
RISK-PRIV-001
RISK-SEC-001
RISK-RUNTIME-001
RISK-DB-001
RISK-TRACE-001
RISK-GOV-001
```

Risk IDs should not contain PHI, patient identifiers, secrets, credentials, issue titles containing sensitive data, or production incident details.

---

## 8. Risk Domains

Recommended risk domains include:

| Domain | Description |
|---|---|
| Clinical safety | Risk related to patient safety, clinical interpretation, clinical workflow, or medical claims |
| Internal Medicine coherence | Risk related to medical plausibility, workflow consistency, or unsafe clinical framing |
| AI governance | Risk related to AI output, hallucination, unsupported claims, human oversight, or AI boundaries |
| Prompt governance | Risk related to prompts, prompt execution, prompt misuse, or prompt scope creep |
| Privacy | Risk related to PHI, real patient data, patient identifiers, or data minimization |
| Security | Risk related to secrets, credentials, API keys, logs, database dumps, or threat exposure |
| Runtime boundary | Risk of premature runtime implementation |
| API/FHIR boundary | Risk of unauthorized API/FHIR implementation |
| Database boundary | Risk of unauthorized SQL, schema, or migration changes |
| Traceability | Risk of unclear linkage between PRs, documents, risks, controls, reviewers, and decisions |
| Documentation integrity | Risk of outdated, duplicated, contradictory, or unsupported documentation |
| Governance process | Risk of missing review, missing owner, missing index update, or premature merge |

---

## 9. Severity, Probability, and Detectability

During the current documentation-only phase, numeric scoring is optional.

If used, scoring must be treated as preliminary and non-final.

Recommended qualitative values:

| Attribute | Values |
|---|---|
| Severity | Low, Medium, High, Critical |
| Probability | Unlikely, Possible, Likely, Unknown |
| Detectability | Easy, Moderate, Difficult, Unknown |
| Evidence confidence | Verified, Partially verified, Assumed, Unknown |

Unknown values should not be forced into false precision.

If evidence is incomplete, the correct review status should be CONDITIONAL GO or DEFER.

---

## 10. Risk Control Types

Risk controls may include:

- Documentation boundary.
- Human review requirement.
- Clinical Safety Owner review.
- Internal Medicine Clinical Reviewer review.
- Risk Owner review.
- Privacy/Security Owner review.
- AI Governance Owner review.
- Hard NO-GO rule.
- Acceptance criterion.
- After-merge index action.
- Synthetic-only data rule.
- No-PHI rule.
- No-runtime rule.
- No-AI-implementation rule.
- No-decision-automation rule.
- Traceability requirement.
- Future sandbox gate.
- Future verification requirement.

Risk controls in the current phase are governance controls, not runtime controls.

---

## 11. Residual-Risk Review

Each risk item should include a residual-risk question.

Examples:

- Does any ambiguity remain after the boundary is added?
- Could the document still be misread as authorizing runtime behavior?
- Could the document still be misread as authorizing clinical use?
- Could the document still imply AI validation or compliance?
- Could the document still allow PHI or real patient data?
- Is a specialist reviewer needed before merge?
- Is the mitigation sufficient for documentation-stage governance?

Residual-risk questions must be reviewed by humans.

This document does not allow AI to accept residual risk.

---

## 12. Human Accountability

| Activity | Advisory Support Allowed? | Human Accountable Role |
|---|---:|---|
| Risk identification | Yes | Risk Owner / Domain Owner |
| Hazard description | Yes | Risk Owner |
| Clinical harm review | Yes | Clinical Safety Owner / Internal Medicine Clinical Reviewer |
| Privacy/security risk review | Yes | Privacy/Security Owner |
| AI governance risk review | Yes | AI Governance Owner |
| Risk control proposal | Yes | Risk Owner / Domain Owner |
| Residual-risk question drafting | Yes | Risk Owner |
| Residual-risk acceptance | No final AI authority | Risk Owner / authorized human reviewer |
| Final merge decision | No final AI authority | Maintainer |

Human accountability must remain explicit.

---

## 13. Hard NO-GO Stop Rules

| Stop Rule ID | Stop Rule | Required Action |
|---|---|---|
| RRS-HNG-001 | Risk register content includes PHI or real patient data | Remove and require human sanitization |
| RRS-HNG-002 | Risk register content includes patient identifiers | Remove and re-review |
| RRS-HNG-003 | Risk register content includes secrets, credentials, API keys, or tokens | Remove and require security handling |
| RRS-HNG-004 | Risk register content includes production logs or database dumps | Remove and re-review |
| RRS-HNG-005 | AI output accepts residual risk | Rewrite and require human Risk Owner review |
| RRS-HNG-006 | Risk acceptability is approved without human owner | Block merge |
| RRS-HNG-007 | Runtime implementation is authorized | Remove or defer |
| RRS-HNG-008 | AI implementation, prompt execution, or model integration is authorized | Remove or defer |
| RRS-HNG-009 | Clinical use is authorized | Remove authorization |
| RRS-HNG-010 | Unsupported validation, compliance, certification, or production-readiness claim is present | Remove or correct |
| RRS-HNG-011 | GitHub checks are failing | Block merge |
| RRS-HNG-012 | GitHub checks are pending | Block merge |

---

## 14. Decision Model

| Finding | Recommended Decision |
|---|---|
| Risk structure is clear and bounded | GO, pending human review and GitHub checks |
| Minor missing field or wording ambiguity | CONDITIONAL GO |
| Required owner role is missing | CONDITIONAL GO or DEFER |
| Evidence is incomplete | CONDITIONAL GO or DEFER |
| Specialist review is required but unavailable | DEFER |
| PHI, secrets, or real patient data are present | NO-GO |
| AI accepts residual risk | NO-GO |
| Clinical use or runtime implementation is authorized | NO-GO |
| GitHub checks are failing | NO-GO |
| GitHub checks are pending | NO-GO for merge readiness |

---

## 15. Example Risk Register Template

The following template is documentation-stage only.

| Risk ID | Hazard | Cause | Hazardous Situation | Harm | Control | Owner | Residual-Risk Question | Status |
|---|---|---|---|---|---|---|---|---|
| RISK-GOV-001 | Boundary ambiguity | Document wording is unclear | Reviewer may misinterpret a concept as implementation approval | Premature implementation | Add explicit no-runtime boundary | Governance Owner | Could the wording still imply implementation permission? | Open |
| RISK-AI-001 | AI overreliance | GPT output is treated as authority | Human reviewer accepts AI summary without challenge | Unsafe governance decision | Require human sign-off | AI Governance Owner | Is reviewer accountability explicit? | Open |
| RISK-PRIV-001 | PHI exposure | Review input is not sanitized | PHI is pasted into AI-assisted review | Privacy breach | Mandatory No-PHI pre-check | Privacy/Security Owner | Is human sanitization required before GPT review? | Open |
| RISK-CLIN-001 | Clinical decision creep | Clinical language is too strong | Governance document appears to authorize diagnosis or treatment | Unsafe clinical interpretation | Add clinical-use prohibition | Clinical Safety Owner | Does the document clearly prohibit clinical use? | Open |

Examples must remain synthetic and must not include PHI or real patient data.

---

## 16. Relationship to Existing Documents

| Existing Document | Relationship |
|---|---|
| Traceability Matrix Policy V0.1 | Provides traceability expectations that connect risk items to PRs, documents, controls, owners, and decisions |
| Decision Automation Boundary Policy V0.1 | Prevents risk decisions and residual-risk acceptance from becoming automated |
| Governance Intelligence Layer Concept V0.1 | May support advisory risk reasoning but must not accept risk |
| AI-Assisted Governance Review Procedure V0.1 | May support advisory detection of risk gaps under human review |
| Synthetic Test Data Policy V0.1 | Supports no-PHI/no-real-data risk controls |
| Prompt Governance and AI-Output Review Policy V0.1 | Supports risk controls around AI output and prompt misuse |
| AI-Output Evaluation Checklist V0.1 | Supports review of AI-generated outputs for unsupported claims or hallucinations |
| Sandbox Readiness Criteria for AI-Assisted Workflows V0.1 | Supports future sandbox risk gating |
| Runtime Boundary Specification V0.1 | Supports no-runtime implementation control |
| API/FHIR Boundary Specification V0.1 | Supports no API/FHIR implementation control |
| Database Boundary and Migration Policy V0.1 | Supports no SQL/database implementation control |
| Documentation Index and Review Cadence V0.1 | This document should be indexed after merge |

---

## 17. Quality Metrics

The project may monitor:

| Metric | Target |
|---|---|
| Major governance risks assigned an owner | 100% when applicable |
| Risk items with explicit control | 100% when applicable |
| Risk items with residual-risk question | 100% when applicable |
| Risk items with PHI or real patient data | 0 |
| Risk items with secrets or credentials | 0 |
| AI-accepted residual risk | 0 |
| Unsupported validation/compliance claims in risk records | 0 |
| Risk-related PRs merged with failing checks | 0 |
| Risk-related PRs merged with pending checks | 0 |
| Deferred risks without owner | 0 |

These metrics are governance-quality indicators only.

They do not establish ISO 14971 compliance, clinical validation, regulatory compliance, cybersecurity certification, production readiness, or clinical-use authorization.

---

## 18. Acceptance Criteria

Before merge, confirm:

- [ ] This document is documentation-only.
- [ ] Only the intended risk structure file is changed.
- [ ] No runtime code is added.
- [ ] No AI implementation is added.
- [ ] No prompt execution is authorized.
- [ ] No model integration is authorized.
- [ ] No API/FHIR implementation is added.
- [ ] No SQL is added.
- [ ] No database migration is added.
- [ ] No database schema change is added.
- [ ] No OpenEMR core-sensitive behavior is changed.
- [ ] No PHI is included.
- [ ] No real patient data is included.
- [ ] No secrets or credentials are included.
- [ ] Risk acceptance remains human-owned.
- [ ] GitHub checks are required before merge.
- [ ] Merge requires 0 failing and 0 pending checks.

---

## 19. After-Merge Action

After this document is merged:

- Update local master.
- Confirm this file exists on master.
- Confirm working tree is clean.
- Confirm no open PR remains for this branch.
- Create a separate documentation-only PR to update the Documentation Index and Review Cadence document.
- Reference this structure in future clinical safety, AI governance, privacy/security, traceability, and sandbox-readiness documents.
- Do not treat this structure as formal ISO 14971 compliance.
- Do not treat this structure as risk acceptability approval.
- Do not treat this structure as runtime implementation approval.

---

## 20. Status and Limitations

This document is a documentation-stage governance structure.

It is not:

- A final risk register.
- A risk acceptance record.
- A runtime control.
- A verification report.
- A validation report.
- A clinical safety case.
- ISO 14971 compliance evidence.
- Regulatory approval evidence.
- Cybersecurity certification evidence.
- Production readiness evidence.
- Authorization for clinical use.
- Authorization for PHI or real patient data.

This document supports safer documentation-stage risk structuring but does not prove that any workflow, AI feature, sandbox, prototype, implementation, or system is safe, validated, compliant, secure, production-ready, or ready for clinical use.

---

## 21. Final Safety Statement

Risk register structure improves governance only when it remains human-reviewed, traceable, evidence-based, and bounded.

This document does not authorize runtime code.

This document does not authorize AI implementation.

This document does not authorize prompt execution.

This document does not authorize model integration.

This document does not authorize automated risk acceptance.

This document does not authorize clinical use.

This document does not authorize PHI or real patient data.

Risk acceptance remains a human responsibility.

Final merge decisions require human review and GitHub checks showing:

0 failing.

0 pending.

This document preserves the current project phase:

Documentation-only. Pre-runtime. Pre-implementation. No PHI. No real patient data. No clinical use. No AI implementation. No model integration. No prompt execution.
