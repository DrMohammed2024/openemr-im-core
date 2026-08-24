# Clinical Safety Case Structure V0.1

## AI-Assisted Solo-Owner Applicability

A documentation-only change to this structure may use GPT clinical-boundary
advisory review and the Project Owner decision record when it is eligible under
the AI-Assisted Solo-Owner Governance Policy V0.1. Separate clinical or other
specialist-human approval is not a mandatory internal merge gate for eligible
work.

A completed clinical safety case, clinical validation, patient-care use,
clinical risk acceptance, or any applicable qualified-clinician review remains
outside this model and is a future or external gate. Missing such a triggered
review remains HOLD.

## 1. Document Status

| Field | Value |
|---|---|
| Document title | Clinical Safety Case Structure V0.1 |
| Document type | Documentation-only clinical safety governance structure |
| Project | OpenEMR IM Core |
| Version | V0.1 |
| Stage | Documentation-only, pre-runtime, pre-implementation governance |
| Intended use | Define a documentation-stage structure for organizing clinical safety arguments, assumptions, hazards, controls, evidence needs, reviewer roles, and human sign-off expectations |
| Clinical use status | Not authorized for clinical use |
| Runtime status | No runtime implementation authorized |
| AI implementation status | No AI implementation, prompt execution, model integration, or autonomous agent authorized |
| PHI status | PHI and real patient data are prohibited |
| Approval authority | Human clinical safety reviewers and maintainers only |
| Merge requirement | Human review plus GitHub checks showing 0 failing and 0 pending |
| Formal compliance status | This document does not claim clinical validation, regulatory approval, IEC 62304 compliance, ISO 14971 compliance, cybersecurity certification, production readiness, or authorization for clinical use |
| Status | Proposed for documentation-only PR review |

---

## 2. Purpose

This document defines the recommended structure for a documentation-stage Clinical Safety Case for OpenEMR IM Core.

The purpose is to provide a clear way to organize future clinical safety reasoning before any runtime implementation, AI implementation, prototype, sandbox workflow, or clinical use is considered.

This structure supports:

- Clinical safety governance.
- Internal Medicine workflow reasoning.
- Clinical assumption tracking.
- Hazard identification.
- Harm analysis.
- Risk-control linkage.
- Human clinical review.
- Traceability to governance documents.
- Evidence planning.
- Future verification and validation planning.

This document does not create a completed clinical safety case.

This document does not establish clinical validation.

This document does not authorize clinical use.

This document does not authorize diagnosis, prescribing, triage, treatment recommendation, or autonomous clinical decision-making.

This document does not authorize use of PHI or real patient data.

---

## 3. Scope

This document applies to documentation-stage governance planning for OpenEMR IM Core.

It may be used to structure future clinical safety reasoning for:

- Internal Medicine workflow concepts.
- AI-assisted clinical governance concepts.
- Clinical documentation review concepts.
- Future sandbox workflow planning.
- Future synthetic-only simulation planning.
- Future non-production prototype planning.
- Clinical risk and hazard review.
- Human clinical reviewer sign-off planning.
- Traceability between clinical claims, risks, controls, and evidence.

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
- Clinical deployment.
- Production use.
- Clinical validation.
- Clinical effectiveness claim.
- Regulatory compliance claim.
- Cybersecurity certification claim.
- Diagnosis.
- Prescribing.
- Triage.
- Treatment recommendation.
- Autonomous clinical decision-making.
- Use of PHI.
- Use of real patient data.
- Clinical safety approval by AI.
- Risk acceptance by AI.
- Automated clinical sign-off.

---

## 5. Core Principle

The core principle is:

A clinical safety case is a human-reviewed argument supported by evidence, traceability, and risk controls.

It must not be treated as proof of clinical safety unless the required evidence, review, validation, and approvals exist.

During the current project phase, the clinical safety case structure is only a planning and governance artifact.

It is not clinical validation.

It is not authorization for clinical use.

It is not proof that any workflow, AI output, prototype, sandbox, or future implementation is safe for patients.

---

## 6. Clinical Safety Case Definition

For this project, a Clinical Safety Case means a structured set of documentation that explains:

- What clinical workflow or concept is being considered.
- What assumptions are being made.
- What hazards may exist.
- What harms could occur.
- What controls reduce risk.
- What evidence is required.
- Which human roles must review the content.
- What remains unresolved.
- Whether the current state is GO, CONDITIONAL GO, NO-GO, or DEFER.

The safety case must remain proportional to the project stage.

In the current phase, the safety case is documentation-stage only.

---

## 7. Recommended Clinical Safety Case Sections

A future clinical safety case should include the following sections:

| Section | Purpose |
|---|---|
| Clinical scope | Defines the clinical workflow, topic, or concept under review |
| Intended use boundary | States what the concept is and is not intended to support |
| Clinical-use prohibition | Confirms that clinical use is not authorized in the current phase |
| Assumptions | Lists clinical, workflow, data, user, and system assumptions |
| Hazard analysis | Identifies clinical hazards and hazardous situations |
| Potential harms | Identifies possible patient, clinician, workflow, or safety harms |
| Risk controls | Links hazards to governance controls or future controls |
| Evidence needs | Defines evidence required before future progression |
| Reviewer roles | Identifies clinical and non-clinical reviewers |
| Traceability | Links clinical claims, hazards, controls, and evidence |
| Open questions | Lists unresolved issues requiring human review |
| Decision status | Records GO, CONDITIONAL GO, NO-GO, or DEFER |
| Limitations | States what the safety case does not prove |
| After-review actions | Defines required next steps |

---

## 8. Clinical Scope Structure

Clinical scope should define:

- Clinical domain.
- Clinical workflow area.
- User role.
- Patient population assumptions, if any.
- Data type assumptions.
- Clinical task category.
- Decision-support boundary.
- Human-supervision requirement.
- Exclusions.
- Current project phase.

Clinical scope must avoid unsupported claims.

Clinical scope must not imply clinical authorization.

Clinical scope must not include PHI or real patient data.

---

## 9. Intended Use Boundary

Each clinical safety case should state the intended use boundary clearly.

Allowed documentation-stage intended use may include:

- Governance planning.
- Clinical workflow analysis.
- Safety reasoning.
- Risk identification.
- Review-role mapping.
- Evidence planning.
- Synthetic-only scenario planning.
- Future sandbox-readiness planning.

Prohibited intended use includes:

- Real clinical decision-making.
- Diagnosis.
- Prescribing.
- Triage.
- Treatment recommendation.
- Patient-specific recommendations.
- Production use.
- Real patient data use.
- Autonomous clinical decision-making.
- Replacement of clinician judgment.

---

## 10. Clinical Assumption Register

Clinical assumptions should be captured explicitly.

Recommended fields:

| Field | Description |
|---|---|
| Assumption ID | Unique identifier |
| Assumption statement | Clear statement of the assumption |
| Clinical area | Internal Medicine topic or workflow area |
| Source | Document, PR, reviewer input, or planning note |
| Evidence status | Verified, partially verified, assumed, or unknown |
| Safety relevance | Low, medium, high, or critical |
| Owner role | Human role accountable for review |
| Risk link | Related hazard or risk item |
| Status | Open, reviewed, revised, deferred, or closed |

Assumptions should not be treated as facts unless evidence supports them.

Unknown assumptions should remain open or deferred.

---

## 11. Clinical Hazard Structure

Clinical hazards should be structured consistently.

Recommended fields:

| Field | Description |
|---|---|
| Hazard ID | Unique clinical hazard identifier |
| Clinical hazard | Potential source of clinical harm |
| Cause | Reason the hazard could arise |
| Hazardous situation | Situation where the hazard could affect a clinician, workflow, or patient |
| Potential harm | Possible adverse clinical or workflow outcome |
| Foreseeable misuse | How the concept could be misunderstood or misused |
| Existing control | Current governance control |
| Proposed control | Additional documentation or future control |
| Owner role | Clinical Safety Owner, Internal Medicine Clinical Reviewer, Risk Owner, or other |
| Residual safety question | Remaining clinical safety concern |
| Evidence need | Evidence required before future progression |
| Decision | GO, CONDITIONAL GO, NO-GO, or DEFER |

---

## 12. Clinical Harm Categories

Potential harm categories may include:

- Incorrect clinical interpretation.
- Delayed recognition of urgency.
- False reassurance.
- Overreliance on AI output.
- Inappropriate workflow prioritization.
- Missed red-flag condition.
- Unsafe documentation wording.
- Misleading clinical claim.
- Incomplete differential framing.
- Confusion between governance concept and clinical tool.
- Misinterpretation of synthetic examples as real clinical evidence.
- Privacy-related harm from inappropriate data handling.
- Operational harm from unclear responsibility.

These categories are planning aids only.

They do not prove clinical risk completeness.

---

## 13. Internal Medicine Coherence Review

For Internal Medicine-related content, the safety case should include an Internal Medicine coherence review.

This review should ask:

- Is the clinical framing medically plausible?
- Are clinical terms used conservatively?
- Is the workflow description clear?
- Could the language imply diagnosis, prescribing, triage, or treatment recommendation?
- Are red-flag concepts handled carefully?
- Are safety-net boundaries explicit?
- Are limitations clearly stated?
- Is specialist review needed?
- Is the content appropriate for documentation-stage governance only?

This review must be performed or accepted by a human Internal Medicine Clinical Reviewer.

AI output may support drafting or issue spotting, but it must not approve clinical content.

---

## 14. Clinical Claim-Control Register

Clinical claims should be controlled.

Recommended fields:

| Field | Description |
|---|---|
| Claim ID | Unique claim identifier |
| Claim text | Exact or summarized claim |
| Claim type | Workflow, safety, evidence, validation, usability, clinical, regulatory, or implementation |
| Evidence status | Supported, partially supported, unsupported, or not applicable |
| Risk if misread | Possible unsafe interpretation |
| Required correction | Wording change or evidence requirement |
| Owner role | Clinical Safety Owner, Documentation Owner, or relevant reviewer |
| Decision | GO, CONDITIONAL GO, NO-GO, or DEFER |

Unsupported clinical validation, safety, compliance, production-readiness, or effectiveness claims must be removed or corrected.

---

## 15. Clinical Safety Controls

Clinical safety controls may include:

- Documentation-only boundary.
- No clinical-use statement.
- No autonomous diagnosis statement.
- No autonomous prescribing statement.
- No autonomous triage statement.
- No treatment recommendation statement.
- Human clinician review requirement.
- Clinical Safety Owner review.
- Internal Medicine Clinical Reviewer review.
- Risk Owner review.
- Traceability requirement.
- Synthetic-only example rule.
- No-PHI rule.
- Evidence-required-before-progression rule.
- Future sandbox gate.
- Future verification plan requirement.
- Future validation planning requirement.

Current controls are governance controls only.

They are not runtime controls.

---

## 16. Evidence Needs

A clinical safety case should identify evidence needed before future progression.

Evidence needs may include:

- Documented requirements.
- Clinical workflow rationale.
- Hazard analysis.
- Risk controls.
- Traceability matrix.
- Synthetic scenario review.
- Human factors review plan.
- Verification plan.
- Validation planning document.
- Privacy/security review.
- Threat model for future sandbox.
- Clinical reviewer sign-off.
- Maintainer approval.

Evidence needs do not equal evidence already achieved.

This document does not claim that any evidence is complete.

---

## 17. Human Reviewer Roles

Recommended human reviewer roles include:

| Role | Responsibility |
|---|---|
| Clinical Safety Owner | Owns clinical safety review and clinical safety boundaries |
| Internal Medicine Clinical Reviewer | Reviews Internal Medicine coherence and clinical framing |
| Risk Owner | Reviews hazards, controls, and residual-risk questions |
| Privacy/Security Owner | Reviews data, PHI, privacy, and security boundaries |
| AI Governance Owner | Reviews AI boundary, AI-output, and human oversight issues |
| Documentation Owner | Ensures documentation clarity and index follow-up |
| Technical Owner | Confirms no runtime, API/FHIR, SQL, database, or workflow changes |
| Maintainer | Makes final merge decision after required review and checks |

No reviewer role may be replaced by AI.

---

## 18. Clinical Safety Decision Model

| Finding | Recommended Decision |
|---|---|
| Clinical scope is clear and bounded | GO, pending human review and GitHub checks |
| Minor wording ambiguity exists | CONDITIONAL GO |
| Clinical assumption is unsupported but fixable | CONDITIONAL GO |
| Specialist review is required but unavailable | DEFER |
| Evidence is incomplete for future progression | DEFER or CONDITIONAL GO |
| Clinical-use authorization is present | NO-GO |
| Autonomous diagnosis, prescribing, triage, or treatment recommendation is authorized | NO-GO |
| Unsupported clinical validation or safety claim is present | NO-GO until removed or corrected |
| PHI or real patient data are present | NO-GO |
| Required human clinical review is missing | NO-GO or DEFER |
| GitHub checks are failing | NO-GO |
| GitHub checks are pending | NO-GO for merge readiness |

---

## 19. Hard NO-GO Stop Rules

| Stop Rule ID | Stop Rule | Required Action |
|---|---|---|
| CSCS-HNG-001 | Clinical use is authorized | Remove authorization |
| CSCS-HNG-002 | Autonomous diagnosis is authorized | Remove authorization |
| CSCS-HNG-003 | Autonomous prescribing is authorized | Remove authorization |
| CSCS-HNG-004 | Autonomous triage is authorized | Remove authorization |
| CSCS-HNG-005 | Autonomous treatment recommendation is authorized | Remove authorization |
| CSCS-HNG-006 | Unsupported clinical validation claim is present | Remove or correct claim |
| CSCS-HNG-007 | Unsupported clinical safety claim is present | Remove or correct claim |
| CSCS-HNG-008 | PHI or real patient data are present | Remove and require human sanitization |
| CSCS-HNG-009 | Patient identifiers are present | Remove and re-review |
| CSCS-HNG-010 | Required clinical reviewer is missing | Block or defer |
| CSCS-HNG-011 | AI output approves clinical safety | Rewrite and require human review |
| CSCS-HNG-012 | Runtime implementation is introduced | Remove or defer |
| CSCS-HNG-013 | AI implementation, prompt execution, or model integration is introduced | Remove or defer |
| CSCS-HNG-014 | GitHub checks are failing | Block merge |
| CSCS-HNG-015 | GitHub checks are pending | Block merge |

---

## 20. Relationship to Existing Documents

| Existing Document | Relationship |
|---|---|
| Risk Register Structure V0.1 | Provides risk item structure for clinical hazards and controls |
| Traceability Matrix Policy V0.1 | Provides traceability expectations linking clinical claims, risks, controls, reviewers, and evidence |
| Decision Automation Boundary Policy V0.1 | Prevents automated clinical safety approval or automated risk acceptance |
| Governance Intelligence Layer Concept V0.1 | May support advisory governance reasoning but cannot approve clinical safety |
| AI-Assisted Governance Review Procedure V0.1 | May support advisory clinical safety review under human supervision |
| Synthetic Test Data Policy V0.1 | Supports no-PHI and synthetic-only clinical examples |
| AI Clinical Support Boundary Specification V0.1 | Defines AI clinical support boundaries and no-autonomous-clinical-decision limits |
| Clinical AI Governance and Scientific Evaluation Framework V0.1 | Provides broader clinical AI governance context |
| Prompt Governance and AI-Output Review Policy V0.1 | Controls prompt and AI-output governance boundaries |
| Documentation Index and Review Cadence V0.1 | This document should be indexed after merge |

---

## 21. Quality Metrics

The project may monitor:

| Metric | Target |
|---|---|
| Clinical safety cases with explicit clinical-use prohibition | 100% |
| Clinical safety cases with human reviewer roles identified | 100% |
| Clinical assumptions with owner roles | 100% when applicable |
| Clinical hazards linked to controls | 100% when applicable |
| Unsupported clinical validation claims | 0 |
| Unsupported clinical-use authorization statements | 0 |
| AI-approved clinical safety decisions | 0 |
| PHI or real patient data in clinical safety documents | 0 |
| Clinically relevant PRs merged with failing checks | 0 |
| Clinically relevant PRs merged with pending checks | 0 |

These metrics are governance-quality indicators only.

They do not establish clinical validation, regulatory compliance, cybersecurity certification, production readiness, or clinical-use authorization.

---

## 22. Acceptance Criteria

Before merge, confirm:

- [ ] This document is documentation-only.
- [ ] Only the intended clinical safety case structure file is changed.
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
- [ ] Clinical use is not authorized.
- [ ] Clinical validation is not claimed.
- [ ] Clinical safety approval remains human-owned.
- [ ] GitHub checks are required before merge.
- [ ] Merge requires 0 failing and 0 pending checks.

---

## 23. After-Merge Action

After this document is merged:

- Update local master.
- Confirm this file exists on master.
- Confirm working tree is clean.
- Confirm no open PR remains for this branch.
- Create a separate documentation-only PR to update the Documentation Index and Review Cadence document.
- Reference this structure in future clinical safety, Internal Medicine workflow, risk management, AI governance, and sandbox-readiness documents.
- Do not treat this structure as clinical validation.
- Do not treat this structure as clinical-use authorization.
- Do not treat this structure as runtime implementation approval.

---

## 24. Status and Limitations

This document is a documentation-stage clinical safety governance structure.

It is not:

- A completed clinical safety case.
- Clinical validation evidence.
- Clinical effectiveness evidence.
- Regulatory approval evidence.
- Cybersecurity certification evidence.
- Production readiness evidence.
- Runtime code.
- AI implementation.
- Prompt execution system.
- Model integration layer.
- Clinical decision support.
- Authorization for diagnosis.
- Authorization for prescribing.
- Authorization for triage.
- Authorization for treatment recommendation.
- Authorization for clinical use.
- Authorization for PHI or real patient data.

This document supports safer clinical safety planning but does not prove that any workflow, AI feature, sandbox, prototype, implementation, or system is clinically safe, clinically validated, compliant, secure, production-ready, or ready for clinical use.

---

## 25. Final Safety Statement

Clinical safety case structure improves governance only when it remains human-reviewed, traceable, evidence-based, conservative, and bounded.

This document does not authorize runtime code.

This document does not authorize AI implementation.

This document does not authorize prompt execution.

This document does not authorize model integration.

This document does not authorize autonomous clinical decision-making.

This document does not authorize diagnosis.

This document does not authorize prescribing.

This document does not authorize triage.

This document does not authorize treatment recommendation.

This document does not authorize clinical use.

This document does not authorize PHI or real patient data.

Clinical safety approval remains a human responsibility.

Final merge decisions require human review and GitHub checks showing:

0 failing.

0 pending.

This document preserves the current project phase:

Documentation-only. Pre-runtime. Pre-implementation. No PHI. No real patient data. No clinical use. No AI implementation. No model integration. No prompt execution.
