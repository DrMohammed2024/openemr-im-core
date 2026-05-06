# Decision Automation Boundary Policy V0.1

## 1. Document Status

| Field | Value |
|---|---|
| Document title | Decision Automation Boundary Policy V0.1 |
| Document type | Documentation-only governance policy |
| Project | OpenEMR IM Core |
| Version | V0.1 |
| Stage | Documentation-only, pre-runtime, pre-implementation governance |
| Intended use | Define boundaries between advisory support, automated recommendations, automated decisions, and human approval |
| Clinical use status | Not authorized for clinical use |
| Runtime status | No runtime implementation authorized |
| AI implementation status | No AI implementation, prompt execution, model integration, or autonomous agent authorized |
| Automation status | No decision automation authorized |
| PHI status | PHI and real patient data are prohibited |
| Approval authority | Human reviewers and maintainers only |
| Merge requirement | Human review plus GitHub checks showing 0 failing and 0 pending |
| Formal compliance status | This document does not claim IEC 62304, ISO 14971, regulatory, cybersecurity, clinical, or production compliance |
| Status | Proposed for documentation-only PR review |

---

## 2. Purpose

This policy defines the boundary between:

- Advisory support.
- Human-supervised recommendations.
- Automated workflow assistance.
- Automated decision-making.
- Human approval.

The purpose is to prevent any OpenEMR IM Core governance document, AI-assisted review, governance intelligence concept, workflow concept, prompt policy, or future sandbox plan from being misinterpreted as permission for automated decisions.

This policy protects:

- Human accountability.
- Clinical safety.
- Privacy and security.
- Risk management discipline.
- Auditability.
- Governance traceability.
- Documentation-only project boundaries.

This policy does not authorize runtime code, AI implementation, prompt execution, model integration, autonomous clinical decision-making, PHI use, production deployment, or clinical use.

---

## 3. Scope

This policy applies to OpenEMR IM Core documentation-stage governance work.

It applies to:

- Governance documents.
- AI-assisted governance review.
- Governance Intelligence Layer concepts.
- Clinical safety documents.
- Internal Medicine workflow documents.
- Risk documents.
- Privacy/security documents.
- Prompt governance documents.
- AI-output review documents.
- Sandbox-readiness documents.
- Synthetic test data documents.
- PR review summaries.
- Documentation Index updates.

This policy is documentation-only.

---

## 4. Out of Scope

This policy does not authorize:

- Runtime implementation.
- AI implementation.
- Prompt execution.
- Model integration.
- Agentic automation.
- GitHub Actions automation.
- API/FHIR implementation.
- SQL.
- Database migration.
- Database schema change.
- OpenEMR core-sensitive behavior.
- Automated PR approval.
- Automated merge.
- Automated clinical decision-making.
- Automated diagnosis.
- Automated prescribing.
- Automated triage.
- Automated treatment recommendation.
- Automated risk acceptance.
- Automated privacy/security approval.
- Automated clinical safety approval.
- Automated regulatory approval.
- Clinical validation.
- Production readiness.
- Cybersecurity certification.
- Regulatory compliance claim.
- Clinical-use authorization.
- Use with PHI.
- Use with real patient data.

---

## 5. Core Principle

The core principle is:

Decision support may be advisory, but decision authority remains human.

No system, document, GPT output, AI-assisted review, governance intelligence concept, checklist, or future sandbox plan may be treated as final approval.

Human reviewers remain accountable for:

- Clinical safety decisions.
- Internal Medicine content decisions.
- Risk acceptance decisions.
- Privacy/security decisions.
- AI governance decisions.
- Merge decisions.
- Production-readiness decisions.
- Clinical-use decisions.
- Regulatory or compliance interpretations.

---

## 6. Decision Boundary Definitions

| Term | Meaning | Current Phase Status |
|---|---|---|
| Advisory support | Non-binding support that helps a human reviewer reason, classify, or summarize | Allowed |
| Recommendation | A suggested next step requiring human review | Allowed only as advisory |
| Human approval | Explicit decision by an authorized human reviewer or maintainer | Required |
| Automated assistance | Tooling that helps prepare or organize information without deciding | Documentation planning only |
| Automated decision | A system action that determines approval, rejection, risk acceptance, clinical action, or merge readiness without human approval | Prohibited |
| Autonomous action | Any action performed without explicit human review and accountability | Prohibited |
| Clinical automation | Automated diagnosis, prescribing, triage, treatment, or patient-risk action | Prohibited |
| Merge automation | Automatic PR approval or merge based on AI or rule output alone | Prohibited |

---

## 7. Allowed Activities

The project may use documentation-stage advisory support to:

- Classify a PR by type.
- Identify related documents.
- Recommend reviewer roles.
- Identify missing documentation boundaries.
- Detect possible NO-GO conditions.
- Detect unsupported claims.
- Identify traceability gaps.
- Summarize GitHub check status for human review.
- Suggest next safe governance steps.
- Support PR body drafting.
- Support documentation wording improvements.
- Support risk-control mapping.
- Support human review preparation.

All outputs must remain advisory.

---

## 8. Prohibited Activities

The project must not allow automated systems, GPT, AI-assisted review, or governance intelligence concepts to:

- Approve a PR.
- Merge a PR.
- Accept risk.
- Approve clinical safety.
- Approve privacy/security adequacy.
- Approve AI governance adequacy.
- Approve regulatory readiness.
- Approve cybersecurity readiness.
- Approve production readiness.
- Approve clinical use.
- Authorize PHI use.
- Authorize real patient data use.
- Determine a patient diagnosis.
- Prescribe medication.
- Triage a patient.
- Recommend treatment as a final clinical decision.
- Determine clinical urgency.
- Replace physician review.
- Replace human maintainer review.
- Override failing or pending GitHub checks.

---

## 9. Human Accountability Model

| Decision Area | Advisory Support Allowed? | Automated Decision Allowed? | Human Accountable Role |
|---|---:|---:|---|
| PR classification | Yes | No | Governance Owner / Maintainer |
| Reviewer role recommendation | Yes | No | Governance Owner |
| Clinical safety review | Yes | No | Clinical Safety Owner |
| Internal Medicine review | Yes | No | Internal Medicine Clinical Reviewer |
| Risk review | Yes | No | Risk Owner |
| Privacy/security review | Yes | No | Privacy/Security Owner |
| AI governance review | Yes | No | AI Governance Owner |
| Documentation Index update | Yes | No | Documentation Owner |
| Merge readiness | Yes | No | Maintainer |
| Risk acceptance | No final authority | No | Risk Owner |
| Clinical-use authorization | No | No | Not authorized in current phase |

---

## 10. Automation Boundary Levels

| Level | Description | Current Phase Handling |
|---|---|---|
| Level 0 | Manual human review only | Allowed |
| Level 1 | Human uses advisory checklist or AI-assisted summary | Allowed with boundaries |
| Level 2 | Tool suggests reviewer roles, risks, or next steps | Allowed only as documentation-stage advisory support |
| Level 3 | Tool automatically labels, approves, blocks, or routes without human decision | Not authorized |
| Level 4 | Tool automatically executes workflow or PR decisions | Prohibited |
| Level 5 | Tool makes autonomous clinical or operational decisions | Prohibited |

Current project authorization is limited to Level 0, Level 1, and bounded documentation-stage Level 2 concepts.

---

## 11. GitHub Workflow Boundary

GitHub checks may inform merge readiness, but they do not replace human review.

Merge is prohibited unless:

- Required human review is complete.
- No unresolved NO-GO finding exists.
- Scope remains documentation-only.
- Changed files are verified.
- GitHub checks show 0 failing.
- GitHub checks show 0 pending.

No AI output may override a failing, pending, cancelled, unknown, or incomplete GitHub check.

---

## 12. Clinical Safety Boundary

Automated decision-making is prohibited for clinical content.

The project must not automate:

- Diagnosis.
- Prescribing.
- Triage.
- Treatment recommendation.
- Clinical urgency classification.
- Patient safety determination.
- Follow-up urgency determination.
- Clinical validation.
- Clinical-use authorization.

AI-assisted or governance-assisted review may only identify possible documentation risks for human clinical review.

---

## 13. Risk Management Boundary

Risk management decisions cannot be automated.

The project may use advisory support to identify:

- Hazards.
- Hazardous situations.
- Potential harms.
- Foreseeable misuse.
- Possible controls.
- Traceability gaps.
- Residual-risk questions.

The project must not allow advisory support to:

- Accept residual risk.
- Close unresolved risk.
- Declare risk acceptable.
- Claim ISO 14971 compliance.
- Replace Risk Owner approval.

---

## 14. Privacy and Security Boundary

Automated privacy/security approval is prohibited.

Advisory review may help identify possible issues, but human Privacy/Security Owner review remains required when privacy or security scope is relevant.

The project must not automate approval for:

- PHI handling.
- Real patient data handling.
- Secrets handling.
- Credential handling.
- Production log handling.
- Database dump handling.
- Screenshot redaction adequacy.
- Cybersecurity certification.
- Privacy compliance claims.

---

## 15. AI Governance Boundary

AI governance decisions cannot be delegated to GPT or any automated system.

AI-assisted outputs must be treated as:

- Draft.
- Advisory.
- Non-authoritative.
- Non-validating.
- Non-certifying.
- Subject to human review.

AI-assisted outputs must not be treated as:

- Final approval.
- Clinical validation.
- Compliance evidence.
- Cybersecurity evidence.
- Production-readiness evidence.
- Authorization for clinical use.

---

## 16. Hard NO-GO Stop Rules

| Stop Rule ID | Stop Rule | Required Action |
|---|---|---|
| DAB-HNG-001 | Automated clinical decision-making is authorized | Remove authorization and re-review |
| DAB-HNG-002 | Automated diagnosis is authorized | Remove authorization and re-review |
| DAB-HNG-003 | Automated prescribing is authorized | Remove authorization and re-review |
| DAB-HNG-004 | Automated triage is authorized | Remove authorization and re-review |
| DAB-HNG-005 | Automated treatment recommendation is authorized | Remove authorization and re-review |
| DAB-HNG-006 | Automated risk acceptance is authorized | Remove authorization and require Risk Owner review |
| DAB-HNG-007 | Automated privacy/security approval is authorized | Remove authorization and require Privacy/Security Owner review |
| DAB-HNG-008 | Automated PR approval or merge is authorized | Remove authorization |
| DAB-HNG-009 | AI output is treated as final authority | Rewrite |
| DAB-HNG-010 | GitHub checks may be bypassed | Remove bypass language |
| DAB-HNG-011 | PHI or real patient data use is authorized | Remove authorization |
| DAB-HNG-012 | Runtime AI implementation is authorized | Remove or defer to future approved phase |
| DAB-HNG-013 | Prompt execution or model integration is authorized | Remove or defer to future approved phase |
| DAB-HNG-014 | Unsupported validation, compliance, certification, or production-readiness claim is present | Remove or correct |

---

## 17. Decision Model

| Finding | Advisory Recommendation |
|---|---|
| No automation boundary issue found | GO, pending human review and GitHub checks |
| Minor wording ambiguity exists | CONDITIONAL GO |
| Required human approval language missing | CONDITIONAL GO or NO-GO depending on severity |
| Automated final decision implied | NO-GO |
| Automated clinical decision implied | NO-GO |
| PHI or real patient data use implied | NO-GO |
| Evidence unavailable | DEFER |
| Required reviewer unavailable | DEFER |
| GitHub checks pending | NO-GO for merge readiness |
| GitHub checks failing | NO-GO |

---

## 18. Relationship to Existing Documents

| Existing Document | Relationship |
|---|---|
| Governance Intelligence Layer Concept V0.1 | This policy constrains the concept so it remains advisory and non-decision-making |
| AI-Assisted Governance Review Procedure V0.1 | This policy reinforces that GPT-assisted review is advisory only |
| Prompt Governance and AI-Output Review Policy V0.1 | This policy supports safe prompt/output boundaries |
| AI-Output Evaluation Checklist V0.1 | This policy prevents AI-output review from becoming approval automation |
| Clinical AI Governance and Scientific Evaluation Framework V0.1 | This policy supports human-supervised clinical AI governance |
| AI Clinical Support Boundary Specification V0.1 | This policy reinforces no autonomous clinical decision-making |
| Runtime Boundary Specification V0.1 | This policy reinforces no runtime authorization |
| API/FHIR Boundary Specification V0.1 | This policy reinforces no API/FHIR implementation authorization |
| Database Boundary and Migration Policy V0.1 | This policy reinforces no SQL/database implementation authorization |
| Synthetic Test Data Policy V0.1 | This policy reinforces no PHI or real patient data use |
| Documentation Index and Review Cadence V0.1 | This policy should be indexed after merge |

---

## 19. Quality Metrics

The project may monitor:

| Metric | Target |
|---|---|
| PRs with human review before merge | 100% |
| PRs merged with pending GitHub checks | 0 |
| PRs merged with failing GitHub checks | 0 |
| PRs with AI output treated as final approval | 0 |
| PRs with automated clinical decision language | 0 |
| PRs with automated risk acceptance language | 0 |
| PRs with automated privacy/security approval language | 0 |
| PRs requiring automation-boundary correction | Track and reduce |
| Human override rationale documented when applicable | 100% |

These are governance-quality indicators only.

They do not establish clinical validation, regulatory compliance, cybersecurity certification, production readiness, or clinical-use authorization.

---

## 20. Acceptance Criteria

Before merge, confirm:

- [ ] This document is documentation-only.
- [ ] Only the intended policy file is changed.
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
- [ ] No autonomous clinical decision-making is authorized.
- [ ] No automated final approval is authorized.
- [ ] No automated merge is authorized.
- [ ] Human accountability is explicit.
- [ ] GitHub checks are required before merge.
- [ ] Merge requires 0 failing and 0 pending checks.

---

## 21. After-Merge Action

After this document is merged:

- Update local master.
- Confirm this file exists on master.
- Confirm working tree is clean.
- Confirm no open PR remains for this branch.
- Create a separate documentation-only PR to update the Documentation Index and Review Cadence document.
- Reference this policy in future governance, AI-assisted review, sandbox, automation, and workflow planning documents.
- Do not treat this policy as runtime implementation approval.
- Do not treat this policy as clinical-use authorization.

---

## 22. Status and Limitations

This policy is a documentation-stage governance artifact.

It is not:

- Runtime code.
- AI implementation.
- Prompt execution system.
- Model integration layer.
- Automation engine.
- GitHub workflow.
- Clinical decision support.
- Clinical validation evidence.
- Production readiness evidence.
- Regulatory compliance evidence.
- Cybersecurity certification evidence.
- Authorization for clinical use.
- Authorization for real patient data.

This policy supports safer governance planning but does not prove that any workflow, AI feature, sandbox, prototype, or system is safe, validated, compliant, secure, production-ready, or ready for clinical use.

---

## 23. Final Safety Statement

Decision automation is not authorized in the current OpenEMR IM Core phase.

GPT may assist humans with advisory review.

Governance Intelligence Layer concepts may assist humans with advisory reasoning.

Human reviewers remain the final decision-makers.

No automated system may approve clinical safety, risk acceptability, privacy/security adequacy, AI governance adequacy, PR merge readiness, production readiness, clinical validation, regulatory compliance, or clinical use.

Final merge decisions require human review and GitHub checks showing:

0 failing.

0 pending.

This document preserves the current project phase:

Documentation-only. Pre-runtime. Pre-implementation. No PHI. No real patient data. No clinical use. No AI implementation. No model integration. No prompt execution. No decision automation.
