# Evidence and Claim-Control Register V0.1

## 1. Document Status

| Field | Value |
|---|---|
| Document title | Evidence and Claim-Control Register V0.1 |
| Document type | Documentation-only governance register |
| Project | OpenEMR IM Core |
| Version | V0.1 |
| Stage | Documentation-only, pre-runtime, pre-implementation governance |
| Intended use | Define a documentation-stage structure for controlling project claims, evidence references, unsupported statements, prohibited claims, reviewer ownership, and claim-related merge readiness |
| Clinical use status | Not authorized for clinical use |
| Runtime status | No runtime implementation authorized |
| AI implementation status | No AI implementation, prompt execution, model integration, or autonomous agent authorized |
| PHI status | PHI and real patient data are prohibited |
| Approval authority | Human reviewers and maintainers only |
| Merge requirement | Human review plus GitHub checks showing 0 failing and 0 pending |
| Formal compliance status | This document does not claim clinical validation, regulatory compliance, IEC 62304 compliance, ISO 14971 compliance, cybersecurity certification, production readiness, or authorization for clinical use |
| Status | Proposed for documentation-only PR review |

---

## 2. Purpose

This document defines a documentation-stage Evidence and Claim-Control Register for OpenEMR IM Core.

The purpose is to prevent unsupported, premature, ambiguous, or unsafe claims from entering project documentation, pull requests, release notes, governance summaries, or future planning documents.

This register helps human reviewers answer:

- What claim is being made?
- Is the claim supported by evidence?
- Is the evidence direct, partial, planned, or missing?
- Is the claim allowed in the current project phase?
- Is the claim prohibited because it implies clinical validation, production readiness, regulatory compliance, cybersecurity certification, AI implementation, runtime implementation, or clinical use?
- Which reviewer role owns the claim?
- What correction is required before merge?

This document does not validate any project feature.

This document does not approve clinical use.

This document does not approve runtime implementation.

This document does not approve AI implementation.

This document does not prove regulatory, cybersecurity, clinical, or production readiness.

---

## 3. Scope

This document applies to documentation-stage governance work in OpenEMR IM Core.

It applies to claims appearing in:

- Governance documents.
- Clinical workflow documents.
- Clinical safety documents.
- Risk documents.
- Traceability documents.
- AI governance documents.
- Sandbox-readiness documents.
- Synthetic test data documents.
- PR descriptions.
- PR review summaries.
- Documentation Index entries.
- Future roadmap documents.
- Future release-readiness documents.

This document is documentation-only.

---

## 4. Out of Scope

This document does not authorize:

- Runtime code.
- AI implementation.
- Prompt execution.
- Model integration.
- API/FHIR implementation.
- SQL.
- Database migration.
- Database schema change.
- OpenEMR core-sensitive behavior.
- Clinical validation.
- Clinical-use authorization.
- Production readiness.
- Regulatory compliance claim.
- Cybersecurity certification claim.
- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- Autonomous treatment recommendation.
- Use of PHI.
- Use of real patient data.
- Automated claim approval.
- Automated evidence acceptance.
- Automated risk acceptance.

---

## 5. Core Principle

The core principle is:

No claim should be stronger than the evidence that supports it.

If evidence is missing, incomplete, indirect, planned, or not yet reviewed, the claim must be corrected, weakened, deferred, or removed.

Documentation may describe boundaries, plans, concepts, and governance structures, but it must not imply implementation, validation, certification, compliance, production readiness, or clinical-use authorization unless direct evidence exists and human reviewers approve the wording.

---

## 6. Claim Definition

A claim is any statement that asserts, implies, or may reasonably be interpreted as asserting that the project has a capability, status, approval, evidence, validation, certification, readiness, safety property, or compliance state.

Examples of claims include:

- This feature is implemented.
- This workflow is clinically safe.
- This process is validated.
- This system is production-ready.
- This document establishes compliance.
- AI is integrated.
- The system supports clinical decision-making.
- The system uses FHIR.
- The system is secure.
- The system is ready for clinical use.
- The project has a complete risk register.
- The project has closed all safety risks.

Claims may be explicit or implied.

Reviewers must evaluate both wording and likely interpretation.

---

## 7. Evidence Definition

Evidence is a direct, reviewable artifact that supports a claim.

Evidence may include:

- File path.
- PR number.
- Commit reference.
- Test result.
- GitHub check result.
- Documentation section.
- Review record.
- Traceability entry.
- Risk-control entry.
- Human reviewer decision.
- Synthetic test evidence.
- Verification report.
- Validation report, if one exists in a future phase.

During the current project phase, most evidence is expected to be documentation evidence.

Documentation evidence must not be mistaken for runtime, clinical, validation, regulatory, or cybersecurity evidence.

---

## 8. Claim Categories

Claims should be classified into categories.

| Claim Category | Description |
|---|---|
| Documentation claim | Statement about the existence or content of a document |
| Governance claim | Statement about governance process, review, ownership, or merge criteria |
| Boundary claim | Statement about prohibited or allowed scope |
| Planning claim | Statement about future intended work |
| Implementation claim | Statement that runtime code, workflow, integration, or system behavior exists |
| AI claim | Statement about AI use, AI implementation, prompt execution, or model integration |
| Clinical claim | Statement about clinical safety, clinical workflow, diagnosis, prescribing, triage, treatment, or clinical use |
| Validation claim | Statement that something is verified, validated, effective, safe, or clinically proven |
| Compliance claim | Statement about IEC 62304, ISO 14971, regulatory compliance, GMLP, or other formal framework status |
| Cybersecurity claim | Statement about security certification, security validation, or production security readiness |
| Privacy claim | Statement about PHI, real patient data, data minimization, consent, or privacy protection |
| Production-readiness claim | Statement that a feature, workflow, system, or process is production-ready |

---

## 9. Claim Status Values

Each claim should have a status.

| Status | Meaning |
|---|---|
| Supported | Direct evidence exists and wording is appropriate |
| Partially supported | Some evidence exists, but wording must remain limited |
| Planned | Future work is described but not implemented |
| Proposed | Idea is suggested but not approved or implemented |
| Unsupported | No direct evidence supports the claim |
| Prohibited | Claim is not allowed in the current project phase |
| Needs specialist review | Claim requires review by a responsible human role |
| Deferred | Claim may be revisited later after additional evidence |
| Removed | Claim was removed or rewritten |
| Unknown | Evidence is incomplete or not yet reviewed |

---

## 10. Evidence Strength Levels

Evidence should be classified by strength.

| Evidence Strength | Meaning |
|---|---|
| Direct documentation evidence | File or section directly supports the claim as documentation |
| Direct implementation evidence | Runtime code, configuration, migration, integration, or test directly supports implementation |
| Direct verification evidence | Test or verification artifact directly supports behavior |
| Direct validation evidence | Approved validation artifact supports clinical or intended-use claim |
| Partial evidence | Evidence supports only part of the claim |
| Indirect evidence | Evidence is related but does not directly prove the claim |
| Planned evidence | Evidence is expected later but does not currently exist |
| No evidence | No verified evidence found |
| Contradictory evidence | Existing documents contradict the claim |

During the current phase, direct documentation evidence may support documentation claims, but it must not support implementation, clinical validation, production-readiness, regulatory compliance, or cybersecurity certification claims.

---

## 11. Claim-Control Register Fields

Each claim-control record should use this structure:

| Field | Description |
|---|---|
| Claim ID | Unique identifier for the claim |
| Claim text | Exact or summarized claim under review |
| Claim category | Documentation, governance, clinical, AI, validation, compliance, cybersecurity, privacy, implementation, or other |
| Source | PR, file path, section, comment, review, or roadmap where the claim appears |
| Evidence reference | File path, PR, section, check result, or review artifact supporting the claim |
| Evidence strength | Direct, partial, indirect, planned, none, or contradictory |
| Claim status | Supported, partially supported, planned, proposed, unsupported, prohibited, deferred, removed, or unknown |
| Owner role | Human role accountable for the claim |
| Required correction | Rewrite, weaken, remove, add evidence, defer, or specialist review |
| Risk if overclaimed | Safety, privacy, regulatory, AI, clinical, implementation, or trust risk |
| Decision | GO, CONDITIONAL GO, NO-GO, or DEFER |
| Notes | Additional reviewer notes |

---

## 12. Claim ID Format

Claim IDs should use a stable format.

Recommended format:

```text
CLAIM-<DOMAIN>-<NUMBER>
```

Examples:

```text
CLAIM-GOV-001
CLAIM-CLIN-001
CLAIM-AI-001
CLAIM-PRIV-001
CLAIM-SEC-001
CLAIM-COMP-001
CLAIM-VAL-001
CLAIM-RUNTIME-001
CLAIM-FHIR-001
```

Claim IDs must not contain PHI, patient identifiers, secrets, credentials, incident details, or production data.

---

## 13. Allowed Claims in Current Phase

The following claim types may be allowed if directly supported by repository evidence and worded conservatively:

- A document exists at a specified path.
- A PR added a documentation-only file.
- A documentation index references a document.
- A document states a boundary.
- A document prohibits PHI.
- A document prohibits runtime implementation.
- A document prohibits AI implementation.
- A document prohibits clinical use.
- A document defines a proposed structure.
- A document defines a future planning concept.
- GitHub checks showed 0 failing and 0 pending before merge, if directly verified.
- A file is present on master, if directly verified.

Allowed claims must not be expanded into stronger claims.

For example:

Allowed:

```text
Clinical Safety Case Structure V0.1 is documented.
```

Not allowed:

```text
The system is clinically safe.
```

---

## 14. Prohibited Claims in Current Phase

The following claims are prohibited unless a future approved phase provides direct evidence and human approval:

- The project is clinically validated.
- The project is safe for clinical use.
- The project is production-ready.
- The project is regulatory-compliant.
- The project is IEC 62304 compliant.
- The project is ISO 14971 compliant.
- The project is cybersecurity-certified.
- The project is GMLP-compliant.
- The system is AI-enabled.
- AI is integrated into OpenEMR.
- Prompt execution is implemented.
- Model integration is implemented.
- Autonomous diagnosis is supported.
- Autonomous prescribing is supported.
- Autonomous triage is supported.
- Autonomous treatment recommendation is supported.
- FHIR interoperability is implemented.
- API integration is implemented.
- Database migration is implemented.
- Real patient data is supported.
- PHI use is approved.
- Clinical deployment is approved.
- Risk acceptance is complete.
- Clinical safety approval is complete.
- Validation evidence is complete.

If any prohibited claim appears, the required decision is NO-GO or CONDITIONAL GO until corrected.

---

## 15. Claim Wording Rules

Claim wording should be conservative, evidence-based, and phase-appropriate.

Use:

- Documentation-only.
- Proposed.
- Planned.
- Future.
- Conceptual.
- Human-supervised.
- Advisory.
- Not authorized for clinical use.
- No runtime implementation authorized.
- No AI implementation authorized.
- No PHI or real patient data.

Avoid:

- Validated.
- Certified.
- Compliant.
- Production-ready.
- Clinically safe.
- Approved for clinical use.
- Automated clinical decision-making.
- AI-enabled.
- Integrated.
- Deployed.
- Operational.
- Complete risk acceptance.
- Complete clinical safety approval.

---

## 16. Evidence Review Questions

Reviewers should ask:

- What exactly is being claimed?
- Is the claim explicit or implied?
- Is the evidence direct?
- Is the evidence only documentation evidence?
- Does the claim imply implementation?
- Does the claim imply clinical use?
- Does the claim imply validation?
- Does the claim imply compliance?
- Does the claim imply cybersecurity certification?
- Does the claim imply AI implementation?
- Does the claim imply PHI or real patient data support?
- Is specialist review required?
- Should the claim be weakened, removed, or deferred?

---

## 17. Human Accountability

| Activity | Advisory Support Allowed? | Human Accountable Role |
|---|---:|---|
| Claim identification | Yes | Documentation Owner / Governance Owner |
| Evidence mapping | Yes | Documentation Owner |
| Clinical claim review | Yes | Clinical Safety Owner / Internal Medicine Clinical Reviewer |
| AI claim review | Yes | AI Governance Owner |
| Privacy claim review | Yes | Privacy-Security Owner |
| Compliance-related wording review | Yes | Governance Owner / Risk Owner |
| Runtime implementation claim review | Yes | Technical Owner |
| Final claim acceptance | No final AI authority | Responsible human reviewer |
| Merge decision | No final AI authority | Maintainer |

AI or GPT-assisted review may help identify claims, but it must not approve claims, accept evidence, or authorize merge.

---

## 18. Hard NO-GO Stop Rules

| Stop Rule ID | Stop Rule | Required Action |
|---|---|---|
| ECCR-HNG-001 | Claim states or implies clinical validation without approved evidence | Remove or correct |
| ECCR-HNG-002 | Claim states or implies clinical-use authorization | Remove authorization |
| ECCR-HNG-003 | Claim states or implies production readiness | Remove or correct |
| ECCR-HNG-004 | Claim states or implies regulatory compliance | Remove or correct |
| ECCR-HNG-005 | Claim states or implies cybersecurity certification | Remove or correct |
| ECCR-HNG-006 | Claim states or implies AI implementation, prompt execution, or model integration without evidence | Remove or correct |
| ECCR-HNG-007 | Claim states or implies autonomous diagnosis, prescribing, triage, or treatment recommendation | Remove |
| ECCR-HNG-008 | Claim states or implies PHI or real patient data use is allowed | Remove |
| ECCR-HNG-009 | Claim states or implies API/FHIR implementation without evidence | Remove or correct |
| ECCR-HNG-010 | Claim states or implies database migration or schema implementation without evidence | Remove or correct |
| ECCR-HNG-011 | Claim is stronger than evidence | Weaken or remove |
| ECCR-HNG-012 | Required human owner is missing | DEFER or block merge |
| ECCR-HNG-013 | GitHub checks are failing | Block merge |
| ECCR-HNG-014 | GitHub checks are pending | Block merge |

---

## 19. Decision Model

| Finding | Recommended Decision |
|---|---|
| Claim is directly supported and appropriately worded | GO, pending human review and GitHub checks |
| Claim is partially supported but wording is too strong | CONDITIONAL GO |
| Claim is planned but written as implemented | CONDITIONAL GO or NO-GO until corrected |
| Claim has no evidence | NO-GO or DEFER |
| Claim is prohibited in current phase | NO-GO |
| Claim requires specialist review | DEFER |
| Evidence is incomplete | CONDITIONAL GO or DEFER |
| GitHub checks are failing | NO-GO |
| GitHub checks are pending | NO-GO for merge readiness |

---

## 20. Example Claim-Control Register

| Claim ID | Claim Text | Category | Evidence | Status | Required Correction | Owner | Decision |
|---|---|---|---|---|---|---|---|
| CLAIM-GOV-001 | Traceability Matrix Policy V0.1 exists | Documentation | File path and index entry | Supported | None | Documentation Owner | GO |
| CLAIM-CLIN-001 | The system is clinically safe | Clinical validation | No validation evidence | Prohibited | Remove claim | Clinical Safety Owner | NO-GO |
| CLAIM-AI-001 | AI is implemented in OpenEMR IM Core | AI implementation | No runtime/model evidence | Prohibited | Rewrite as future concept if applicable | AI Governance Owner | NO-GO |
| CLAIM-RUNTIME-001 | The project is documentation-only | Boundary | Runtime boundary and governance documents | Supported | Keep wording phase-limited | Governance Owner | GO |
| CLAIM-FHIR-001 | FHIR integration is implemented | Interoperability | No implementation evidence | Prohibited | Remove or rewrite as future/deferred | Technical Owner | NO-GO |
| CLAIM-PRIV-001 | PHI is prohibited | Privacy | No-PHI boundary documents | Supported | None | Privacy-Security Owner | GO |
| CLAIM-VAL-001 | Clinical validation is planned | Validation planning | Future planning document, if present | Planned | Ensure not written as completed | Clinical Safety Owner | CONDITIONAL GO |

Examples are synthetic and do not include PHI or real patient data.

---

## 21. Relationship to Existing Documents

| Existing Document | Relationship |
|---|---|
| Documentation Index and Review Cadence V0.1 | Provides discoverability and review status for controlled documents |
| Traceability Matrix Policy V0.1 | Links claims to documents, PRs, evidence, reviewers, decisions, and index updates |
| Risk Register Structure V0.1 | Links unsupported or unsafe claims to risk items and controls |
| Clinical Safety Case Structure V0.1 | Controls clinical safety, validation, and clinical-use claims |
| Decision Automation Boundary Policy V0.1 | Prevents automated claim approval or automated evidence acceptance |
| Governance Intelligence Layer Concept V0.1 | May support advisory claim detection but cannot approve evidence |
| AI-Assisted Governance Review Procedure V0.1 | May support human-supervised review of claim/evidence alignment |
| Prompt Governance and AI-Output Review Policy V0.1 | Supports review of AI-generated claims and unsupported statements |
| AI-Output Evaluation Checklist V0.1 | Supports detection of hallucinated or unsupported AI-generated claims |
| Synthetic Test Data Policy V0.1 | Supports no-PHI and synthetic-only evidence boundaries |
| API/FHIR Boundary Specification V0.1 | Controls API/FHIR implementation and interoperability claims |
| Database Boundary and Migration Policy V0.1 | Controls database, SQL, migration, and schema claims |
| Runtime Boundary Specification V0.1 | Controls runtime implementation and production-readiness claims |

---

## 22. Quality Metrics

The project may monitor:

| Metric | Target |
|---|---|
| Claims with owner role | 100% when applicable |
| Claims with evidence reference | 100% when applicable |
| Unsupported clinical validation claims merged | 0 |
| Unsupported production-readiness claims merged | 0 |
| Unsupported regulatory compliance claims merged | 0 |
| Unsupported cybersecurity certification claims merged | 0 |
| Unsupported AI implementation claims merged | 0 |
| Unsupported API/FHIR implementation claims merged | 0 |
| Unsupported PHI/real-data claims merged | 0 |
| Claims stronger than evidence | 0 |
| Claim-related NO-GO findings unresolved at merge | 0 |
| PRs merged with failing checks | 0 |
| PRs merged with pending checks | 0 |

These metrics are governance-quality indicators only.

They do not establish clinical validation, regulatory compliance, cybersecurity certification, production readiness, or clinical-use authorization.

---

## 23. Acceptance Criteria

Before merge, confirm:

- [ ] This document is documentation-only.
- [ ] Only the intended evidence and claim-control register file is changed.
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
- [ ] Clinical validation is not claimed.
- [ ] Production readiness is not claimed.
- [ ] Regulatory compliance is not claimed.
- [ ] Cybersecurity certification is not claimed.
- [ ] Claim acceptance remains human-owned.
- [ ] GitHub checks are required before merge.
- [ ] Merge requires 0 failing and 0 pending checks.

---

## 24. After-Merge Action

After this document is merged:

- Update local master.
- Confirm this file exists on master.
- Confirm working tree is clean.
- Confirm no open PR remains for this branch.
- Create a separate documentation-only PR to update the Documentation Index and Review Cadence document.
- Reference this register in future governance, clinical safety, AI governance, privacy/security, risk, traceability, and sandbox-readiness documents.
- Use this register to review future claims before merge.
- Do not treat this register as validation evidence.
- Do not treat this register as regulatory compliance evidence.
- Do not treat this register as production-readiness evidence.
- Do not treat this register as clinical-use authorization.

---

## 25. Status and Limitations

This document is a documentation-stage governance register.

It is not:

- A validation report.
- A clinical safety approval.
- A regulatory compliance report.
- A cybersecurity certification.
- A production-readiness assessment.
- Runtime code.
- AI implementation.
- Prompt execution system.
- Model integration layer.
- API/FHIR implementation.
- Database implementation.
- Clinical decision support.
- Authorization for clinical use.
- Authorization for PHI or real patient data.

This document supports safer claim control but does not prove that any workflow, AI feature, sandbox, prototype, implementation, or system is safe, validated, compliant, secure, production-ready, or ready for clinical use.

---

## 26. Final Safety Statement

Evidence and claim control improves governance only when claims remain human-reviewed, evidence-based, traceable, conservative, and phase-appropriate.

This document does not authorize runtime code.

This document does not authorize AI implementation.

This document does not authorize prompt execution.

This document does not authorize model integration.

This document does not authorize autonomous clinical decision-making.

This document does not authorize clinical validation.

This document does not authorize regulatory compliance claims.

This document does not authorize cybersecurity certification claims.

This document does not authorize production-readiness claims.

This document does not authorize clinical use.

This document does not authorize PHI or real patient data.

Claim acceptance remains a human responsibility.

Final merge decisions require human review and GitHub checks showing:

0 failing.

0 pending.

This document preserves the current project phase:

Documentation-only. Pre-runtime. Pre-implementation. No PHI. No real patient data. No clinical use. No AI implementation. No model integration. No prompt execution.
