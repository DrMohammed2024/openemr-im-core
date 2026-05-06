# Traceability Matrix Policy V0.1

## 1. Document Status

| Field | Value |
|---|---|
| Document title | Traceability Matrix Policy V0.1 |
| Document type | Documentation-only governance policy |
| Project | OpenEMR IM Core |
| Version | V0.1 |
| Stage | Documentation-only, pre-runtime, pre-implementation governance |
| Intended use | Define traceability expectations linking PRs, documents, boundaries, risks, controls, reviewer roles, findings, decisions, merge status, and Documentation Index updates |
| Clinical use status | Not authorized for clinical use |
| Runtime status | No runtime implementation authorized |
| AI implementation status | No AI implementation, prompt execution, model integration, or autonomous agent authorized |
| PHI status | PHI and real patient data are prohibited |
| Approval authority | Human reviewers and maintainers only |
| Merge requirement | Human review plus GitHub checks showing 0 failing and 0 pending |
| Formal compliance status | This document does not claim IEC 62304, ISO 14971, regulatory, cybersecurity, clinical, or production compliance |
| Status | Proposed for documentation-only PR review |

---

## 2. Purpose

This policy defines how OpenEMR IM Core should maintain documentation-stage traceability across governance work.

The purpose is to ensure that project decisions can be followed from:

```text
PR -> changed file -> document -> boundary or requirement -> risk/control -> reviewer role -> finding -> mitigation -> human decision -> merge status -> Documentation Index update
```

This policy supports:

- Audit readiness.
- Human accountability.
- Risk management discipline.
- Clinical safety governance.
- Privacy/security review.
- AI governance review.
- Documentation consistency.
- Change control.
- Evidence-based project decisions.

This policy does not authorize runtime code, AI implementation, prompt execution, model integration, clinical use, PHI use, production readiness, regulatory compliance, or cybersecurity certification.

---

## 3. Scope

This policy applies to documentation-stage governance work for OpenEMR IM Core.

It applies to:

- Governance documents.
- Boundary specifications.
- Risk-related documents.
- Clinical safety documents.
- Internal Medicine workflow documents.
- AI governance documents.
- Prompt governance documents.
- AI-output review documents.
- Synthetic test data documents.
- Sandbox-readiness documents.
- Decision automation boundary documents.
- PR review outputs.
- Documentation Index updates.
- After-merge verification.

This policy is documentation-only.

---

## 4. Out of Scope

This policy does not authorize:

- Runtime implementation.
- AI implementation.
- Prompt execution.
- Model integration.
- Agentic automation.
- API/FHIR implementation.
- SQL.
- Database migration.
- Database schema change.
- OpenEMR core-sensitive behavior.
- Automated traceability enforcement.
- Automated PR approval.
- Automated merge.
- Clinical decision-making.
- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- Production deployment.
- Clinical validation.
- Regulatory compliance claim.
- Cybersecurity certification.
- Use with PHI.
- Use with real patient data.

---

## 5. Core Principle

The core principle is:

Every important governance decision should be traceable to its source, rationale, reviewer role, and final human decision.

Traceability should be:

- Clear.
- Proportional.
- Human-readable.
- Reviewable in GitHub.
- Connected to the Documentation Index.
- Stronger for high-risk or clinically relevant PRs.
- Lighter for low-risk documentation-only PRs.

Traceability must not become excessive bureaucracy.

The project should use proportional traceability based on PR risk, clinical relevance, privacy/security relevance, AI-governance relevance, and future audit value.

---

## 6. Minimum Traceability Chain

For applicable governance PRs, the minimum traceability chain is:

```text
PR -> changed file -> document title -> governance category -> reviewer role -> decision -> merge status -> index status
```

For higher-risk, clinically relevant, privacy/security relevant, AI-governance relevant, or risk-related PRs, the expanded traceability chain is:

```text
PR -> changed file -> document section -> boundary or requirement -> hazard/risk/control -> reviewer role -> finding -> mitigation -> human sign-off -> GitHub checks -> merge -> Documentation Index update
```

Traceability must remain documentation-stage and human-supervised.

---

## 7. Traceability Levels

| Level | Use Case | Expected Traceability |
|---|---|---|
| Level 0 | Minor typo or formatting change | PR title, changed file, human review, GitHub checks |
| Level 1 | Low-risk documentation-only change | PR, changed file, document title, scope statement, merge status |
| Level 2 | New governance document | PR, document path, owner roles, acceptance criteria, after-merge index requirement |
| Level 3 | Clinical, AI, privacy/security, or risk-relevant governance document | PR, document sections, reviewer roles, findings, mitigations, sign-off, index update |
| Level 4 | Future sandbox planning document | PR, requirements, risks, controls, synthetic data boundary, sandbox gate, reviewer roles |
| Level 5 | Future implementation planning | Full requirements-risk-control-verification traceability before implementation may be considered |

Current project work should normally use Level 1, Level 2, or Level 3 traceability.

Level 4 and Level 5 are future-stage planning only.

---

## 8. Required Traceability Fields

For new major governance documents, the following fields should be traceable:

| Field | Description |
|---|---|
| PR number | GitHub PR number where the document was introduced |
| PR title | Human-readable PR title |
| Branch | Branch used for the PR |
| Document title | Official document title |
| Document path | Repository path |
| Document type | Policy, procedure, checklist, concept, framework, boundary specification, or index |
| Version | Document version |
| Stage | Current project phase |
| Owner roles | Human roles accountable for review |
| Scope | What the document covers |
| Out of scope | What the document does not authorize |
| Safety boundary | Clinical, privacy, AI, runtime, and implementation limits |
| Hard NO-GO rules | Blocking conditions |
| Acceptance criteria | Criteria before merge |
| After-merge action | Required follow-up action |
| Index status | Whether Documentation Index update is required and completed |
| Final decision | GO, CONDITIONAL GO, NO-GO, or DEFER |
| Merge evidence | GitHub checks showing 0 failing and 0 pending before merge |

---

## 9. PR-to-Document Traceability

Each major document PR should clearly identify:

- PR title.
- Changed file path.
- Whether the change is documentation-only.
- Whether the change adds a new document or updates an existing document.
- Whether a separate Documentation Index PR is required.
- Whether clinical safety review is relevant.
- Whether privacy/security review is relevant.
- Whether AI governance review is relevant.
- Whether risk review is relevant.
- Whether runtime boundaries are preserved.

The PR body should include enough information for a future reviewer to understand why the change was made.

---

## 10. Document-to-Document Traceability

Major governance documents should identify relationships to other relevant documents when appropriate.

Examples include relationships to:

- Documentation Index and Review Cadence V0.1.
- Runtime Boundary Specification V0.1.
- API/FHIR Boundary Specification V0.1.
- Database Boundary and Migration Policy V0.1.
- AI Clinical Support Boundary Specification V0.1.
- Clinical AI Governance and Scientific Evaluation Framework V0.1.
- Governance Review Checklist for Pull Requests V0.1.
- Prompt Governance and AI-Output Review Policy V0.1.
- AI-Output Evaluation Checklist V0.1.
- Sandbox Readiness Criteria for AI-Assisted Workflows V0.1.
- Synthetic Test Data Policy V0.1.
- AI-Assisted Governance Review Procedure V0.1.
- Governance Intelligence Layer Concept V0.1.
- Decision Automation Boundary Policy V0.1.

Document relationships should be descriptive and should not imply compliance, validation, production readiness, or clinical-use authorization.

---

## 11. Risk and Control Traceability

Risk-related PRs should support traceability between:

- Hazard.
- Cause.
- Hazardous situation.
- Potential harm.
- Risk control.
- Risk owner.
- Verification evidence.
- Residual-risk question.
- Human review decision.

This policy does not create or approve a formal risk register.

This policy does not claim ISO 14971 compliance.

It only defines documentation-stage traceability expectations.

---

## 12. Clinical Safety Traceability

Clinically relevant governance content should support traceability between:

- Clinical topic.
- Clinical workflow assumption.
- Internal Medicine coherence concern.
- Clinical safety boundary.
- Potential harm.
- Clinical reviewer role.
- Clinical Safety Owner review.
- Mitigation or clarification.
- Human sign-off.

This policy does not authorize clinical use.

This policy does not establish clinical validation.

This policy does not replace physician review.

---

## 13. Privacy and Security Traceability

Privacy/security relevant PRs should support traceability between:

- Data type.
- PHI boundary.
- Real patient data boundary.
- Secret or credential boundary.
- Production log boundary.
- Database dump boundary.
- Redaction or sanitization requirement.
- Privacy/Security Owner review.
- Required mitigation.
- Final human decision.

This policy does not authorize PHI, real patient data, secrets, credentials, production logs, or database dumps.

---

## 14. AI Governance Traceability

AI-governance relevant PRs should support traceability between:

- AI governance boundary.
- Prompt execution boundary.
- Model integration boundary.
- AI-output review requirement.
- Human oversight requirement.
- Hallucination or unsupported-claim risk.
- AI Governance Owner review.
- Required mitigation.
- Final human decision.

This policy does not authorize AI implementation, prompt execution, model integration, autonomous decision-making, or runtime AI behavior.

---

## 15. Documentation Index Traceability

New major governance documents should normally be indexed after merge using a separate documentation-only PR.

The Documentation Index PR should trace:

- Original document PR number.
- Document title.
- Document path.
- Owner roles.
- Current stage status.
- Whether the entry is approved for the current stage.

The correct Documentation Index path is:

```text
custom/im-core/docs/index/documentation-index-and-review-cadence-v0.1.md
```

Index PRs should remain small and should normally change only the Documentation Index file.

---

## 16. Review Evidence Storage

Traceability evidence should be proportional.

For low-risk documentation-only PRs, evidence may be limited to:

- PR body.
- Changed file list.
- GitHub checks.
- Human review.
- Merge status.

For high-risk, clinically relevant, privacy/security relevant, AI-governance relevant, or risk-related PRs, additional evidence may include:

- Role-specific review summaries.
- Consolidated governance review summary.
- Findings and mitigations.
- Human sign-off.
- Stored AI-assisted review output when appropriate and allowed by policy.

Review evidence must not contain PHI, real patient data, secrets, credentials, production logs, database dumps, or unredacted sensitive screenshots.

---

## 17. Traceability Matrix Template

A traceability matrix may use the following documentation-stage structure:

| Trace ID | Source | Linked Item | Owner Role | Evidence | Decision | Status |
|---|---|---|---|---|---|---|
| TR-001 | PR | Changed file | Documentation Owner | PR diff | GO / CONDITIONAL GO / NO-GO / DEFER | Open / Resolved |
| TR-002 | Document section | Boundary rule | Governance Owner | Section reference | GO / CONDITIONAL GO / NO-GO / DEFER | Open / Resolved |
| TR-003 | Risk finding | Risk control | Risk Owner | Review finding | GO / CONDITIONAL GO / NO-GO / DEFER | Open / Resolved |
| TR-004 | Clinical concern | Clinical mitigation | Clinical Safety Owner | Reviewer summary | GO / CONDITIONAL GO / NO-GO / DEFER | Open / Resolved |
| TR-005 | Privacy concern | Privacy mitigation | Privacy/Security Owner | Reviewer summary | GO / CONDITIONAL GO / NO-GO / DEFER | Open / Resolved |

This template is optional unless a future governance document makes it required for a specific PR type.

---

## 18. Decision Model

| Finding | Traceability Recommendation |
|---|---|
| Low-risk documentation-only PR with clear scope | Basic traceability is sufficient |
| New major governance document | Document-to-index traceability required |
| Clinically relevant governance document | Clinical safety traceability required |
| Privacy/security relevant document | Privacy/security traceability required |
| AI-governance relevant document | AI governance traceability required |
| Risk-related document | Risk/control traceability required |
| Missing document path | CONDITIONAL GO or DEFER |
| Missing owner role | CONDITIONAL GO or DEFER |
| Missing after-merge index action | CONDITIONAL GO |
| Missing required human review | NO-GO |
| GitHub checks failing | NO-GO |
| GitHub checks pending | NO-GO for merge readiness |
| PHI, secrets, or real patient data included | NO-GO |

---

## 19. Hard NO-GO Stop Rules

| Stop Rule ID | Stop Rule | Required Action |
|---|---|---|
| TMP-HNG-001 | PHI or real patient data included in traceability evidence | Remove and require human sanitization |
| TMP-HNG-002 | Secrets, credentials, or API keys included | Remove and require security handling |
| TMP-HNG-003 | Production logs or database dumps included | Remove and re-review |
| TMP-HNG-004 | Traceability evidence authorizes clinical use | Remove authorization |
| TMP-HNG-005 | Traceability evidence claims validation, compliance, certification, or production readiness without evidence | Remove or correct claim |
| TMP-HNG-006 | Required human review is missing | Block merge |
| TMP-HNG-007 | GitHub checks are failing | Block merge |
| TMP-HNG-008 | GitHub checks are pending | Block merge |
| TMP-HNG-009 | AI output is treated as final traceability evidence without human review | Rewrite and require human review |
| TMP-HNG-010 | Runtime implementation is introduced in a documentation-only PR | Remove or defer to separate approved phase |

---

## 20. Quality Metrics

The project may monitor:

| Metric | Target |
|---|---|
| New major governance documents indexed after merge | 100% |
| PRs with changed files clearly identified | 100% |
| PRs with owner roles identified when applicable | 100% |
| High-risk PRs with documented findings and mitigations | 100% |
| PRs merged with failing GitHub checks | 0 |
| PRs merged with pending GitHub checks | 0 |
| PRs with PHI or real patient data in traceability evidence | 0 |
| PRs with unsupported validation or compliance claims | 0 |
| Missing after-merge index actions | Track and reduce |
| Traceability gaps found during review | Track and reduce |

These metrics are governance-quality indicators only.

They do not establish clinical validation, regulatory compliance, cybersecurity certification, production readiness, or clinical-use authorization.

---

## 21. Acceptance Criteria

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
- [ ] No secrets or credentials are included.
- [ ] Traceability remains human-reviewed.
- [ ] GitHub checks are required before merge.
- [ ] Merge requires 0 failing and 0 pending checks.

---

## 22. After-Merge Action

After this document is merged:

- Update local master.
- Confirm this file exists on master.
- Confirm working tree is clean.
- Confirm no open PR remains for this branch.
- Create a separate documentation-only PR to update the Documentation Index and Review Cadence document.
- Reference this policy in future risk, clinical safety, privacy/security, AI governance, and audit-readiness documents.
- Do not treat this policy as runtime implementation approval.
- Do not treat this policy as clinical-use authorization.

---

## 23. Status and Limitations

This policy is a documentation-stage governance artifact.

It is not:

- Runtime code.
- AI implementation.
- Prompt execution system.
- Model integration layer.
- Traceability automation engine.
- Formal risk register.
- Clinical decision support.
- Clinical validation evidence.
- Production readiness evidence.
- Regulatory compliance evidence.
- Cybersecurity certification evidence.
- Authorization for clinical use.
- Authorization for real patient data.

This policy supports safer documentation-stage traceability but does not prove that any workflow, AI feature, sandbox, prototype, implementation, or system is safe, validated, compliant, secure, production-ready, or ready for clinical use.

---

## 24. Final Safety Statement

Traceability improves governance only when it remains human-reviewed, evidence-based, proportional, and bounded.

This policy does not authorize runtime code.

This policy does not authorize AI implementation.

This policy does not authorize prompt execution.

This policy does not authorize model integration.

This policy does not authorize automated approval.

This policy does not authorize clinical use.

This policy does not authorize PHI or real patient data.

Human reviewers remain accountable for traceability interpretation and project decisions.

Final merge decisions require human review and GitHub checks showing:

0 failing.

0 pending.

This document preserves the current project phase:

Documentation-only. Pre-runtime. Pre-implementation. No PHI. No real patient data. No clinical use. No AI implementation. No model integration. No prompt execution.
