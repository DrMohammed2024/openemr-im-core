# Agent Boundary - IMCoreGovernanceAgent V0.1

## 1. Boundary Status

| Field | Value |
|---|---|
| Package | IMCoreGovernanceAgent V0.1 |
| Boundary type | Documentation-stage advisory governance boundary |
| Project | OpenEMR IM Core |
| Runtime status | No runtime implementation authorized |
| AI implementation status | No AI implementation, prompt execution, model integration, or autonomous agent behavior authorized |
| Clinical use status | Not authorized for clinical use |
| PHI status | PHI and real patient data are prohibited |
| Decision authority | Human reviewers and maintainers only |
| Relationship to concept source | Supporting package aligned with Governance Intelligence Layer Concept V0.1 |

---

## 2. Controlling Principle

IMCoreGovernanceAgent V0.1 is a documentation-stage, advisory, human-supervised governance package.

It may support structured review preparation, source-of-truth awareness, evidence discipline, claim-control review, risk review, traceability review, and merge-readiness review preparation.

It must not be treated as:

- runtime software;
- an OpenEMR implementation;
- an AI implementation;
- a prompt execution system;
- a model integration layer;
- an autonomous agent;
- a clinical decision-support system;
- a medical device;
- a production-ready system;
- validation evidence;
- compliance evidence;
- cybersecurity certification evidence;
- authorization for clinical use.

---

## 3. Allowed Advisory Functions

The package may support human reviewers by preparing advisory outputs about:

- documentation-only scope;
- source-of-truth alignment;
- duplicate-document risk;
- documentation index awareness;
- documentation inventory awareness;
- evidence label consistency;
- claim-control issues;
- risk-register linkage;
- requirements traceability linkage;
- no-PHI and no-real-patient-data checks;
- no-secrets checks;
- PR scope classification;
- changed-file review preparation;
- merge-readiness review preparation;
- reviewer-role recommendation;
- GO / CONDITIONAL GO / NO-GO / HOLD / DEFER recommendations.

These outputs are advisory only.

---

## 4. Prohibited Functions

The package must not be used to:

- approve clinical use;
- approve production use;
- approve pilot readiness;
- approve demo readiness;
- approve commercial readiness;
- approve clinical validation;
- approve regulatory compliance;
- approve cybersecurity certification;
- approve medical-device readiness;
- approve PR merge;
- merge a PR;
- bypass failing or pending checks;
- accept clinical safety risk;
- accept privacy/security risk;
- approve PHI use;
- approve real patient data use;
- approve secrets or credentials;
- execute SQL;
- create database migrations;
- implement API/FHIR behavior;
- implement frontend behavior;
- modify OpenEMR runtime behavior;
- integrate AI models;
- execute prompts inside OpenEMR;
- provide patient-facing AI;
- perform autonomous diagnosis;
- perform autonomous treatment recommendation;
- perform autonomous prescribing;
- perform autonomous triage.

---

## 5. Required Human Review

Human review is required for:

- accepting or rejecting any governance recommendation;
- deciding whether a document is source-of-truth;
- deciding whether a duplicate-document risk is acceptable;
- deciding whether a claim is acceptable;
- deciding whether risk controls are sufficient;
- deciding whether evidence is sufficient;
- deciding whether traceability is sufficient;
- approving PR scope;
- approving merge readiness;
- approving any repository action;
- approving any future-stage runtime, AI, API/FHIR, SQL, clinical, privacy, security, regulatory, or production decision.

The package may inform these decisions, but it must not make them.

---

## 6. Repository Action Boundary

The package may help prepare:

- PR summaries;
- PR review checklists;
- claim-control checklists;
- merge-readiness checklists;
- source-of-truth mapping;
- traceability mapping;
- risk/evidence linkage notes.

The package must not itself authorize:

- branch creation;
- file edits;
- commits;
- pushes;
- PR creation;
- PR approval;
- PR merge;
- release tagging;
- deployment;
- clinical use.

Any repository action requires explicit human instruction and current repository verification.

---

## 7. Data Boundary

The package must not process, store, request, or rely on:

- PHI;
- real patient data;
- patient identifiers;
- secrets;
- credentials;
- API keys;
- tokens;
- production logs;
- database dumps;
- live clinical data;
- screenshots containing identifiers.

Only documentation-stage, de-identified, non-secret governance materials are in scope.

---

## 8. Runtime and AI Boundary

This package does not authorize:

- runtime AI;
- prompt execution;
- model calls;
- model orchestration;
- AutoGen runtime deployment;
- AutoGen Studio deployment;
- autonomous tool use;
- OpenEMR plugin/module execution;
- backend service creation;
- frontend integration;
- database integration;
- API/FHIR integration.

Any future sandbox, runtime, or AI activity would require a separate explicitly authorized governance stage, separate risk review, separate privacy/security review, separate clinical safety review, and human approval.

---

## 9. Merge Boundary

Before any PR containing this package is merged, human reviewers must confirm:

- the PR remains documentation-only;
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
- no unsupported readiness, validation, compliance, or certification claim is made;
- GitHub checks show 0 failing and 0 pending.

---

## 10. Final Boundary Statement

IMCoreGovernanceAgent V0.1 is documentation-only, advisory-only, human-supervised, pre-runtime, pre-implementation, and pre-clinical-use.

It does not authorize clinical use.

It does not authorize PHI or real patient data.

It does not authorize runtime AI, prompt execution, model integration, autonomous agent behavior, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.
