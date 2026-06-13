# Human Review Policy - IMCoreGovernanceAgent V0.1

## 1. Policy Status

| Field | Value |
|---|---|
| Package | IMCoreGovernanceAgent V0.1 |
| Policy type | Documentation-stage human-review policy |
| Project | OpenEMR IM Core |
| Decision authority | Human reviewers and maintainers only |
| Agent authority | Advisory only |
| Runtime status | No runtime implementation authorized |
| Clinical use status | Not authorized for clinical use |
| PHI status | PHI and real patient data are prohibited |

---

## 2. Core Rule

IMCoreGovernanceAgent V0.1 may support human review preparation.

It must not replace human review.

It must not approve, reject, merge, validate, certify, deploy, or authorize any repository, clinical, privacy, security, regulatory, production, or medical-device decision.

All final decisions remain with designated human reviewers and maintainers.

---

## 3. Advisory Outputs

The package may help prepare advisory outputs such as:

- source-of-truth alignment notes;
- duplicate-document risk notes;
- claim-control findings;
- no-PHI and no-secrets findings;
- evidence label consistency notes;
- requirements traceability notes;
- risk register linkage notes;
- reviewer-role recommendations;
- PR scope review summaries;
- merge-readiness checklists;
- GO / CONDITIONAL GO / NO-GO / HOLD / DEFER recommendations.

These outputs are recommendations only.

---

## 4. Decisions Requiring Human Authority

Human authority is required for:

- approving repository edits;
- approving branch creation;
- approving file creation;
- approving commits;
- approving pushes;
- approving PR creation;
- approving PR review conclusions;
- approving PR merge;
- accepting any risk;
- accepting unresolved uncertainty;
- determining source-of-truth status;
- determining whether a duplicate document is justified;
- accepting evidence sufficiency;
- accepting traceability sufficiency;
- approving privacy/security closure;
- approving clinical safety closure;
- approving regulatory interpretation;
- approving cybersecurity posture;
- approving any future sandbox, runtime, AI, API/FHIR, SQL, clinical, production, pilot, demo, commercial, or medical-device stage.

---

## 5. Decisions the Package Must Not Make

The package must not decide:

- that clinical use is authorized;
- that PHI use is authorized;
- that real patient data use is authorized;
- that production use is authorized;
- that pilot readiness is achieved;
- that demo readiness is achieved;
- that commercial readiness is achieved;
- that clinical validation is achieved;
- that regulatory compliance is achieved;
- that cybersecurity certification is achieved;
- that a PR may be merged;
- that failing checks may be bypassed;
- that pending checks may be ignored;
- that risk has been accepted;
- that privacy/security review is complete;
- that clinical safety review is complete;
- that evidence is sufficient for reliance beyond documentation-stage governance;
- that OpenEMR runtime behavior may be changed;
- that AI models may be integrated;
- that prompt execution may occur inside OpenEMR.

---

## 6. Reviewer Roles

Depending on the artifact and risk class, human review may require one or more of the following roles:

- Governance Owner;
- Documentation Owner;
- Technical Owner;
- Clinical Safety Owner;
- Privacy-Security Owner;
- Risk Owner;
- Evidence Reviewer;
- Requirements Owner;
- Traceability Reviewer;
- Maintainer;
- Project Owner.

The package may recommend reviewer roles, but it must not assign final accountability or replace named human reviewers.

---

## 7. GO / CONDITIONAL GO / NO-GO Semantics

### GO

A GO recommendation means the package found no obvious documentation-stage blocker based on available information.

A GO recommendation does not authorize action unless a human reviewer explicitly accepts it.

### CONDITIONAL GO

A CONDITIONAL GO recommendation means action may be possible only after stated conditions are satisfied and verified by a human reviewer.

### NO-GO

A NO-GO recommendation means the package detected a blocker that should prevent the proposed action until resolved by human governance review.

### HOLD

A HOLD recommendation means required verification is missing, uncertain, stale, or contradictory.

### DEFER

A DEFER recommendation means the proposed action belongs to a future stage or should be postponed until prerequisite governance artifacts are completed.

---

## 8. Required Escalation Conditions

The package must escalate to human review if it detects or suspects:

- PHI;
- real patient data;
- patient identifiers;
- secrets or credentials;
- production logs;
- database dumps;
- runtime code;
- AI implementation;
- prompt execution;
- model integration;
- API/FHIR implementation;
- SQL;
- database migration;
- OpenEMR core-sensitive behavior change;
- unsupported readiness claim;
- unsupported validation claim;
- unsupported compliance claim;
- unsupported certification claim;
- clinical-use authorization claim;
- unclear source-of-truth status;
- duplicate-document risk;
- unresolved evidence gap;
- unresolved traceability gap;
- failing GitHub checks;
- pending GitHub checks;
- unclear reviewer ownership.

---

## 9. Repository Action Rule

Repository action requires all of the following:

- explicit human instruction;
- current branch verification;
- clean working tree verification;
- changed-file scope verification;
- source-of-truth conflict review;
- duplicate-document review;
- claim-control review;
- no-PHI/no-secrets review;
- human reviewer acceptance.

The package may help prepare these checks, but it must not independently authorize repository action.

---

## 10. Final Human Review Statement

IMCoreGovernanceAgent V0.1 is advisory only.

Human reviewers and maintainers remain accountable for all repository, governance, safety, privacy, evidence, risk, traceability, PR, merge, and future-stage decisions.

No output from this package is approval, validation, certification, compliance evidence, production-readiness evidence, clinical-use authorization, or authorization to use PHI or real patient data.
