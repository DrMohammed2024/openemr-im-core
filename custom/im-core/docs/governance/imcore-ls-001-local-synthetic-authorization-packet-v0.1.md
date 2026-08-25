# IMCORE-LS-001 — Local-Synthetic Authorization Packet V0.1

## 1. Candidate Status

- Work-item ID: `IMCORE-LS-001`
- Customization ledger ID: `IM-0005`
- Title: Reproducible Local-Synthetic Visit Context LBF Seed
- Governing category: `LS-1 — BOUNDED LOCAL-SYNTHETIC ENGINEERING`
- Governing policy: `POL-GOV-LS1-001`
- Governing policy status: adopted and active on `master`; reconfirmed with
  limitations
- Adoption decision: `POL-GOV-LS1-001-ADOPTION-001`
- Adoption PR and merge: PR #267 at
  `76548a0f714177cde38d4d1201aa6095bcba0dfd`
- Reconfirmation decision:
  `POL-GOV-LS1-001-ADOPTION-001-RECONFIRMATION-001`
- Proposed implementation branch:
  `codex/feat-im-core-lbf-visit-context-seed`
- Candidate state: reserved/proposed future work item; `HOLD`
- Phase 11 authorization: not yet recorded
- Phase 11 implementation branch creation: not authorized
- Phase 12 execution/evidence authorization: not granted
- Implementation status: not started
- Docker execution: not authorized by this packet state
- Database writes: not authorized by this packet state
- Final Project Owner decision: not recorded
- Current gate result: `HOLD`; the policy-adoption prerequisite is satisfied,
  but a complete current Phase 11 Project Owner decision is not recorded

This packet identifies the initial LS-1 candidate. It is not implementation,
runtime, database-write, Docker, merge, clinical-use, deployment, validation,
compliance, certification, or release authorization.

### Policy Prerequisite and Workflow Limitations

Policy adoption and reconfirmation satisfy the policy prerequisite only. The
post-merge Whitespace run `32788377634` failed on inherited content outside PR
#267's file scope. Test All Configurations run `32788377823` remains failed
with two unresolved E2E jobs and no successful rerun. Scheduled run
`32832190339` remains failed with an external or environmental MySQL setup
failure whose precise cascading cause is partly unverified, an unresolved
MariaDB E2E failure, and one skipped job.

These results are not established as caused by PR #267 and are not passing
runtime, verification, validation, readiness, compliance, certification, or
clinical evidence. Whitespace repair and CI investigation are separate work
items and do not authorize this candidate or either lifecycle phase.

## 2. Objective

Prepare one future implementation slice that can reproduce the Visit Context
group of the existing `LBFim_followup_v1` LBF configuration in an isolated,
disposable, local-synthetic OpenEMR development environment.

The slice must be reversible, parameterized, transactional, fail closed on
conflict, exact-match idempotent, and bounded to the rows in Section 8.

## 3. Evidence Classification

### Repository-verified facts

At the controlled baseline
`76548a0f714177cde38d4d1201aa6095bcba0dfd`:

- `custom/im-core/` contains Markdown documentation only;
- no executable IM Core seed implementation exists on `master`;
- the OpenEMR schema defines `layout_group_properties` with primary key
  `(grp_form_id, grp_group_id)`;
- the OpenEMR schema defines `layout_options` with primary key
  `(form_id, field_id, seq)`; and
- historical repository documents describe the layout, group, four fields, and
  prior off-repository observations.

### Historical off-repository manual-runtime evidence

Repository documents report an Android/Termux OpenEMR 8.1.1-dev manual runtime
in which the layout and Visit Context fields rendered. They report a
`layout_options` snapshot in which all four fields used `data_type=2` and
`interval_history` used `max_length=200` and rendered as a single-line input.

Those documents are historical attestations. This governance task did not
access or reproduce that runtime, and the attestations are not current runtime,
clean-install, validation, or independent-assurance evidence.

### Proposed and unverified

No seed implementation, clean local reproduction, Docker isolation run,
database write, idempotency result, conflict result, or rollback result exists
for this candidate yet. Those claims remain unverified until separately
authorized work produces evidence.

## 4. Phase 11 Preparation and Implementation Boundary

A future Phase 11 owner decision may authorize only:

- one bounded seed implementation for this Visit Context slice;
- one bounded rollback path;
- isolated/static tests that do not start Docker, access a database, or execute
  OpenEMR runtime;
- implementation documentation and this packet's evidence fields; and
- repository paths explicitly recorded in the final owner decision.

Permitted path classes for the future decision are:

- one new implementation entry point under `custom/im-core/lbf/scripts/`;
- isolated tests under the repository's existing isolated-test structure; and
- directly related IM Core documentation/evidence updates.

The exact implementation and test file list must be recorded before Phase 11
begins. Any other executable, dependency, workflow, Docker, OpenEMR core-
sensitive, API/FHIR, AI/model/prompt/agent, migration, or clinical path is
prohibited.

Phase 11 does not authorize Docker execution, a database connection, database
writes, or local runtime evidence collection.

## 5. Phase 12 Separate Authorization Boundary

A later, separate Project Owner decision is required before any of the
following:

- Docker command;
- image pull;
- container, network, bind mount, or volume creation;
- database connection;
- read or write against a local OpenEMR database; or
- runtime rendering or local-synthetic evidence collection.

The Phase 12 decision must record exact Docker isolation identifiers,
environment versions, schema compatibility, the target row manifest, commands,
tests, rollback, evidence destinations, and current checks. Phase 11 completion
does not imply Phase 12 approval.

## 6. Data and Record Boundary

Allowed:

- synthetic configuration metadata only;
- obviously synthetic test fixtures when required by isolated tests; and
- sanitized metadata evidence limited to the keys and values in Section 8.

Prohibited:

- PHI;
- real patient data;
- de-identified real data;
- production-derived data;
- patient or encounter creation;
- patient or encounter selection;
- any clinical record, billing record, audit record, result, prescription,
  order, appointment, insurance, claim, payment, or related table; and
- database dumps, sensitive logs, secrets, or credentials in repository
  evidence.

No patient or encounter record is required for this objective.

## 7. Environment, Docker, Dependency, Git, and Publication Boundaries

### Environment and Docker

Future Phase 12 execution, if approved, must use a local disposable Docker
project dedicated to `IMCORE-LS-001`. The decision must set and record a unique
project name, networks, bind mounts, and volume names. No unrelated container,
network, bind mount, or volume may be inspected, attached, modified, stopped,
or removed.

### Dependency

No new Composer, npm, system, image, model, prompt, agent, or other dependency
is authorized. A dependency change requires a new explicit Project Owner
decision and re-review of LS-1 eligibility.

### Git

The proposed implementation branch is
`codex/feat-im-core-lbf-visit-context-seed`. It must be created only after the
Phase 11 owner decision, from the exact recorded controlled base SHA. One work
item, one branch, one objective, and one implementation Pull Request apply.

This governance task must not create that branch.

### Local-first work item and GitHub issue deferral

`IMCORE-LS-001` is the repository-tracked local work-item identifier. Proposed
issue deferral is:

- accountable owner: Project Owner;
- rationale: keep preparation local until the first external publication
  checkpoint;
- traceability: this packet plus customization `IM-0005`;
- expiry/trigger: immediately before the implementation branch is pushed or an
  implementation Pull Request is opened; and
- current state: proposed, not effective until the Project Owner adopts or
  revises it in the work-item decision.

A GitHub issue must exist before the implementation branch is pushed or its
Pull Request is opened. Missing issue traceability at that point is automatic
`HOLD`. The deferral cannot authorize untracked customization.

## 8. Exact Future Database Boundary

Only the existing schema is permitted. No DDL, migration, table creation,
column change, index change, trigger, view, procedure, schema version change,
or broad seed is allowed.

### 8.1 `layout_group_properties`

Exactly these two row identities may be evaluated and, under Phase 12 only,
written if absent:

| `grp_form_id` | `grp_group_id` | Controlled identity |
|---|---|---|
| `LBFim_followup_v1` | empty string | Layout row: Internal Medicine Follow-Up V1, mapping/category Clinical |
| `LBFim_followup_v1` | `1` | Group row: Visit Context |

No other row in `layout_group_properties` is authorized. The future
implementation manifest must declare every written column value. If a complete
payload cannot be derived and reviewed against the current schema before the
Phase 12 decision, the decision is `HOLD`.

### 8.2 `layout_options`

Exactly these four row identities and controlled values are permitted:

| `form_id` | `field_id` | `group_id` | `seq` | Title | `data_type` | `uor` | `fld_length` | `max_length` | `titlecols` | `datacols` | `fld_rows` | `source` |
|---|---|---:|---:|---|---:|---:|---:|---:|---:|---:|---:|---|
| `LBFim_followup_v1` | `followup_reason` | `1` | 10 | Follow-up reason | 2 | 1 | 40 | 255 | 1 | 3 | 0 | `F` |
| `LBFim_followup_v1` | `visit_type` | `1` | 20 | Visit type | 2 | 1 | 30 | 100 | 1 | 3 | 0 | `F` |
| `LBFim_followup_v1` | `main_complaint` | `1` | 30 | Main complaint | 2 | 1 | 40 | 255 | 1 | 3 | 0 | `F` |
| `LBFim_followup_v1` | `interval_history` | `1` | 40 | Interval history since last visit | 2 | 1 | 60 | 200 | 1 | 3 | 0 | `F` |

The future manifest must also declare the exact values for all remaining
`layout_options` columns before Phase 12 authorization. Empty, default, or
`NULL` values must be explicit; they must not be guessed at execution time.

No other `layout_options` row is authorized.

### 8.3 Explicitly unauthorized tables

All other tables are prohibited, including every patient, encounter, billing,
audit, result, prescription, medication, order, appointment, insurance, claim,
payment, and other clinical or operational record table.

## 9. `interval_history` Controlled Decision

For this first slice, the controlled baseline is:

- `data_type=2`;
- `max_length=200`;
- `fld_rows=0`; and
- single-line behavior.

The earlier statement describing a textarea with a 2,000-character maximum is
superseded for `IMCORE-LS-001`. A textarea or longer-field design is deferred
to a separately identified redesign work item and must not be treated as
runtime ambiguity, an alternative accepted value, or an implementation option
in this slice.

## 10. Write, Conflict, Idempotency, and Rollback Design Requirements

The future implementation must:

- use the repository-approved database abstraction and parameter binding;
- begin a transaction before any write;
- select only the six declared primary-key identities for classification;
- treat all-six-absent as the only create state;
- treat all-six-exact as a successful no-op;
- treat any partial presence, different sequence, duplicate identity, or value
  mismatch as a fail-closed conflict with no mutation;
- insert only the six declared absent rows;
- re-read and verify all controlled values before commit;
- verify unrelated-row invariants before commit;
- roll back on exceptions, failed checks, or verification mismatch; and
- expose no update, replace, upsert, overwrite, broad delete, repair, or
  best-effort mode.

Guarded post-commit rollback may remove only rows proven by the execution
record to have been inserted by `IMCORE-LS-001` and still exactly matching the
authorized manifest. Pre-existing exact rows must never be deleted. Missing
provenance, changed values, dependent rows, or ambiguity is `HOLD`.

## 11. Mandatory Test and Evidence Matrix

| Test/evidence | Phase 11 | Phase 12 |
|---|---:|---:|
| Changed-file and dependency boundary | Required | Reconfirm |
| Syntax, lint, governance, spelling | Required | Reconfirm |
| Parameter-binding and transaction isolated tests | Required | Reconfirm |
| No Docker/database/runtime execution attestation | Required | Not applicable after authorization |
| Unique Docker project/resource preflight | Prohibited to execute | Required |
| Schema and exact column compatibility | Design review only | Required |
| All target rows absent: create exactly six | Prohibited to execute | Required |
| All target rows exact: no-op | Prohibited to execute | Required |
| Partial/non-exact conflict: no mutation | Isolated test required | Runtime test required |
| Injected failure: transaction rollback | Isolated test required | Runtime test required |
| Guarded post-commit rollback | Isolated test required | Runtime test required |
| Unrelated row/table invariants | Design review only | Required |
| No schema change | Required | Required |
| No patient/encounter record created or required | Required | Required |
| No AI/API/FHIR activity | Required | Required |
| Sanitized exact before/after evidence | Not applicable | Required |
| Disposable resource cleanup verification | Not applicable | Required |

Every result must name the command actually run, timestamp, environment,
expected outcome, actual outcome, status, and limitation. Unavailable or
unexecuted tests are not passes.

## 12. Automatic HOLD, Stop, and Invalidation Triggers

In addition to `POL-GOV-LS1-001`, this candidate is `HOLD` if:

- the controlled base is no longer the owner-recorded SHA;
- the target layout, group, field set, sequence, or `interval_history` decision
  changes;
- a complete six-row manifest is absent;
- a patient/encounter record or an undeclared table is required;
- the environment contains real, de-identified real, or production-derived
  data;
- Docker isolation identifiers are missing or collide;
- a dependency, migration, core-sensitive change, runtime AI/API/FHIR action,
  or broader seed appears;
- the implementation branch is pushed or a Pull Request is opened without the
  required issue;
- a required check fails, is pending, stale, unavailable without disposition,
  or was not run;
- exact-match, conflict, transaction, or guarded rollback behavior fails; or
- the policy, scope, evidence, owner decision, or external obligation changes.

On a trigger, stop before the next mutation, roll back the active transaction
when applicable, preserve synthetic-safe evidence, and obtain a new review and
Project Owner decision.

## 13. Project Owner Decision Record — Phase 11

- Decision-record ID: `DEC-LS1-IMCORE-LS-001-P11-001`
- Decision date: not recorded
- Project Owner: not recorded
- Policy adoption confirmed: yes — `POL-GOV-LS1-001-ADOPTION-001`, PR #267,
  merge `76548a0f714177cde38d4d1201aa6095bcba0dfd`, and reconfirmation
  `POL-GOV-LS1-001-ADOPTION-001-RECONFIRMATION-001`
- Work-item issue or adopted deferral: not recorded
- Base branch and SHA: not recorded
- Head branch and SHA: not created; branch creation is not authorized
- Exact implementation/test file scope: not recorded
- Artifact classification: not recorded
- Dependency diff: none proposed; not yet verified on an implementation branch
- Allowed/prohibited scope reviewed: not recorded
- Evidence personally reviewed: not recorded
- GPT advisory evidence reviewed: packet design retained; final Phase 11 review
  not recorded
- Required tests and results: not run
- Blocking findings: Phase 11 decision, exact scope, and branch authority remain
  outstanding; policy adoption is satisfied
- Non-blocking findings: post-merge workflow debt is separately controlled
- Unresolved limitations: no implementation or execution evidence exists; the
  recorded failed and skipped workflow results are not passing evidence
- Author/owner/reviewer relationship: not recorded
- Conflicts of interest: not recorded
- Non-independence disclosure: required, not yet signed
- Rationale: not recorded
- Final decision: `HOLD — NOT RECORDED`
- Conditions/follow-up: separate Phase 11 Project Owner review and decision
- Invalidation triggers: Sections 12 and `POL-GOV-LS1-001`

## 14. Project Owner Decision Record — Phase 12

- Decision-record ID: `DEC-LS1-IMCORE-LS-001-P12-001`
- Decision date: not recorded
- Project Owner: not recorded
- Eligible implementation commit SHA: not available
- Local environment and Docker identifiers: not recorded
- Complete six-row manifest: not recorded
- Commands/tests/rollback/evidence destinations: not recorded
- Evidence personally reviewed: not recorded
- GPT advisory evidence reviewed: not recorded
- Non-independence disclosure: required, not yet signed
- Final decision: `HOLD — SEPARATE FUTURE AUTHORIZATION REQUIRED`
- Invalidation triggers: Sections 5 and 12 and `POL-GOV-LS1-001`

## 15. Mandatory Disclosure for a Future Decision

> This is an AI-assisted, non-independent Project Owner review. GPT performed
> multidisciplinary advisory analysis. The Project Owner personally reviewed
> the recorded evidence and made the final accountable internal decision.
> Separate specialist-human approval is not claimed. No independent assurance,
> professional licensure, clinical validation, compliance, certification,
> regulatory approval, production readiness, clinical-use authorization, PHI
> authorization, deployment, or external release is claimed.

## 16. Post-Implementation Verification and Future Gates

Before implementation merge, verify the exact authorized diff, current checks,
issue traceability, dependency boundary, isolated tests, non-execution boundary
for any activity lacking Phase 12 approval, and current Project Owner decision.

If Phase 12 is separately approved, also verify exact six-row state, second-run
no-op, fail-closed conflicts, injected rollback, guarded rollback, unrelated
invariants, Docker cleanup, and absence of patient/encounter or other clinical
records.

A merged implementation remains local-synthetic engineering only. PHI, real
data, clinical use, patient care, runtime AI/CDS, operational API/FHIR,
production migration/security, pilot, deployment, production, external
release, validation claims, compliance/regulatory claims, certification, and
legal/contractual activities remain separately gated.
