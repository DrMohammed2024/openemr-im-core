# IMCoreGovernanceAgent V0.1

## 1. Status

| Field | Value |
|---|---|
| Package name | IMCoreGovernanceAgent V0.1 |
| Project | OpenEMR IM Core |
| Package type | Documentation-only advisory governance-agent package |
| Stage | Documentation-stage only, planning-stage only, governance-stage only |
| Runtime status | No runtime implementation authorized |
| AI implementation status | No AI implementation, no prompt execution, no model integration, no autonomous agent behavior authorized |
| Clinical use status | Not authorized for clinical use |
| PHI status | PHI and real patient data are prohibited |
| Decision authority | Human reviewers and maintainers only |
| Production status | Not production-ready |
| Validation status | Not clinically validated |
| Compliance status | Not regulatory compliant |
| Cybersecurity status | Not cybersecurity certified |

---

## 2. Relationship to Governance Intelligence Layer Concept V0.1

This package operationalizes, for documentation-stage advisory review only, selected governance reasoning concepts described in:

`custom/im-core/docs/governance/governance-intelligence-layer-concept-v0.1.md`

This package does not replace that concept document.

This package is a supporting documentation package for human-supervised governance review, source-of-truth awareness, evidence discipline, claim-control review, risk and traceability support, PR review preparation, and merge-readiness review preparation.

It does not create runtime AI, prompt execution, model integration, autonomous agent behavior, clinical decision support, clinical-use authorization, production readiness, clinical validation, regulatory compliance, cybersecurity certification, or medical-device readiness.

---

## 2.1 Repository-Verified Source-of-Truth Routing

The package must route each material governance question to the
applicable repository-verified controlling artifact before producing
an advisory recommendation.

| Governance area | Repository-verified routing source |
|---|---|
| Current-stage governance coordination only | `custom/im-core/docs/governance/vfinalpp-current-stage-governance-addendum-v0.1.md` |
| Intended use, scope, users, stage, and claims | `custom/im-core/docs/product/intended-use-scope-users-claims-v0.1.md` |
| Decision-automation boundary | `custom/im-core/docs/governance/decision-automation-boundary-policy-v0.1.md` |
| Traceability rules | `custom/im-core/docs/governance/traceability-matrix-policy-v0.1.md` |
| Populated current-stage traceability | `custom/im-core/docs/validation/traceability-matrix-v0.1.md` |
| Requirements governance | `custom/im-core/docs/requirements/requirements-management-plan-v0.1.md` and `custom/im-core/docs/requirements/requirements-register-starter-v0.1.md` |
| Risk governance | `custom/im-core/docs/risk/risk-register-v0.1.md` |
| Evidence governance | `custom/im-core/docs/evidence/evidence-registry-and-templates-v0.1.md` |
| Runtime boundary | `custom/im-core/docs/architecture/runtime-boundary-specification-v0.1.md` |
| Database and migration boundary | `custom/im-core/docs/architecture/database-boundary-and-migration-policy-v0.1.md` |
| API/FHIR boundary | `custom/im-core/docs/architecture/api-fhir-boundary-specification-v0.1.md` |
| Documentation discoverability and status | `custom/im-core/docs/index/documentation-index-and-review-cadence-v0.1.md` and `custom/im-core/docs/index/documentation-inventory-and-artifact-status-matrix-v0.1.md` |

The VFinal++ addendum is a current-stage coordination and routing layer
only. It does not replace the specialist artifacts listed above,
package-local Safety Gates, or named human reviewers.

This table lists repository-verified routing sources only. An uploaded,
external, historical, or otherwise non-repository instruction must not
be represented as repository evidence unless it is separately added,
reviewed, and verified through the controlled repository process.

If a required source is missing, stale, contradictory, or unclear, the
advisory decision must be `HOLD` until a human reviewer resolves the
source-of-truth question.

Presence of a document in the repository does not prove implementation,
validation, compliance, certification, production readiness, clinical
readiness, or authorization for reliance beyond the current
documentation stage.

---

## 3. Intended Advisory Purpose

IMCoreGovernanceAgent V0.1 is intended to support documentation-stage governance work for OpenEMR IM Core by helping human reviewers reason about:

- source-of-truth alignment;
- documentation index awareness;
- documentation inventory awareness;
- claim-control review;
- evidence registry review;
- requirements traceability review;
- risk register review;
- no-PHI and no-secrets checks;
- PR governance review;
- merge-readiness review preparation;
- human reviewer decision support.

All outputs are advisory only.

Human reviewers remain responsible for decisions, approvals, risk acceptance, clinical safety judgments, privacy/security judgments, PR approval, and merge decisions.

---

## 4. Explicit Non-Authorization

This package does not authorize:

- clinical use;
- use with PHI;
- use with real patient data;
- runtime AI;
- prompt execution inside OpenEMR;
- model integration;
- autonomous diagnosis;
- autonomous treatment recommendation;
- autonomous prescribing;
- autonomous triage;
- patient-facing AI;
- frontend implementation;
- API/FHIR implementation;
- SQL execution;
- database migration;
- database schema change;
- OpenEMR core-sensitive behavior change;
- GitHub Actions automation;
- automatic PR approval;
- automatic merge;
- production readiness;
- pilot readiness;
- demo readiness;
- commercial readiness;
- clinical validation;
- regulatory compliance;
- cybersecurity certification;
- medical-device readiness.

---

## 5. Human-Supervision Rule

The agent package may help prepare review outputs, but it must not be treated as a decision-maker.

It may recommend:

- GO;
- CONDITIONAL GO;
- NO-GO;
- HOLD;
- DEFER;
- needs verification.

It must not approve clinical use, production use, PR merge, risk acceptance, privacy/security closure, clinical safety closure, regulatory compliance, cybersecurity certification, or validation.

---

## 6. Current Package Contents

This package is expected to contain documentation-stage governance support artifacts only, such as:

- boundary documentation;
- role definitions;
- workflow maps;
- skill catalogs;
- evidence labels;
- safety gates;
- human review policy;
- optional environment notes;
- advisory output schemas;
- golden tests;
- red-team tests;
- expected safety responses.

These artifacts are documentation and governance planning materials only.

---

## 7. Merge and PR Boundary

Any PR for this package must remain documentation-only.

Before merge, confirm:

- no runtime code is added;
- no AI implementation is added;
- no prompt execution is authorized;
- no model integration is authorized;
- no API/FHIR implementation is added;
- no SQL is added;
- no database migration is added;
- no OpenEMR core-sensitive behavior is changed;
- no PHI is included;
- no real patient data is included;
- no secrets or credentials are included;
- no production logs or database dumps are included;
- no unsupported clinical, production, validation, compliance, or certification claims are made;
- human review remains required;
- GitHub checks show 0 failing and 0 pending before merge.

---

## 8. Documentation Index Handling

This package should not update the Documentation Index in the same PR unless explicitly authorized.

A separate documentation-only PR should normally update:

`custom/im-core/docs/index/documentation-index-and-review-cadence-v0.1.md`

after this package is merged and verified on `master`.

---

## 9. Final Safety Statement

IMCoreGovernanceAgent V0.1 is a documentation-stage, advisory, human-supervised governance package.

It is not runtime software.

It is not an OpenEMR implementation.

It is not a clinical decision-support system.

It is not approved for clinical use.

It is not validated, production-ready, regulatory compliant, or cybersecurity certified.
