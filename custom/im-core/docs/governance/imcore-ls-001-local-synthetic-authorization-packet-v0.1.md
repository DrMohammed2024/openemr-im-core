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
- Reconfirmation-state alignment: PR #268 merged at
  `70ad9016af4d9e706bbd7b20fbd9d5848f41f44b`
- Blocker-resolution decision:
  `DEC-LS1-IMCORE-LS-001-P11-BLOCKER-RESOLUTION-001`
- Blocker-resolution final decision: `APPROVE_WITH_CONDITIONS`
- Proposed implementation branch:
  `codex/feat-im-core-lbf-visit-context-seed`
- Candidate state: reserved/proposed future work item; `HOLD`
- Canonical manifest: approved; 124 controlled values; SHA-256 recorded in
  Section 8
- Ownership receipt: append-only `PREPARED` and `COMMITTED` design approved
  with conditions
- Future test environment: dedicated general-purpose WSL2 selected; provisioning
  is not authorized by this decision
- Phase 11 owner condition: strict clean `master`
- Phase 11 authorization: not yet recorded; `HOLD`
- Phase 11 implementation branch creation: not authorized
- Phase 12 execution/evidence authorization: not granted; `HOLD`
- Implementation status: not started
- Docker execution: not authorized by this packet state
- Database reads or writes: not authorized by this packet state
- Phase 11 Project Owner decision: not recorded
- Current gate result: `HOLD`; current required checks are not clean, the WSL2
  environment is not provisioned, exact implementation scope is not recorded,
  and a separate Phase 11 Project Owner decision is absent

This packet identifies the initial LS-1 candidate. It is not implementation,
runtime, database-write, Docker, merge, clinical-use, deployment, validation,
compliance, certification, or release authorization.

### Policy Prerequisite and Workflow Limitations

Policy adoption and reconfirmation satisfy the policy prerequisite only. At the
blocker-resolution gate, Whitespace run `32879084778` remained failed on
inherited `CUSTOMIZATION_POLICY.md` content outside PR #268's Markdown-only
scope. Test All Configurations run `32879085498` remained failed with 169
successful jobs and two failed MySQL services jobs. No successful rerun is
recorded.

These results are not established as caused by PR #268 and are not passing
runtime, verification, validation, readiness, compliance, certification, or
clinical evidence. Under the selected strict clean-`master` condition they
block Phase 11 authorization. Whitespace correction and CI investigation remain
separate work items and do not authorize this candidate or either lifecycle
phase.

## 2. Objective

Prepare one future implementation slice that can install the owner-approved,
deterministic canonical Visit Context configuration for
`LBFim_followup_v1` in an isolated, disposable, local-synthetic OpenEMR
development environment. The canonical objective does not claim exact
reproduction of unknown historical values.

The slice must be reversible, parameterized, transactional, fail closed on
conflict, exact-match idempotent, and bounded to the rows in Section 8.

## 3. Evidence Classification

### Repository-verified facts

The SHA roles for this packet are:

- `DOCUMENT_REVISION_BASIS_SHA`:
  `70ad9016af4d9e706bbd7b20fbd9d5848f41f44b`;
- `HISTORICAL_MERGE_SHA` for PR #267:
  `76548a0f714177cde38d4d1201aa6095bcba0dfd`;
- `HISTORICAL_MERGE_SHA` for PR #268:
  `70ad9016af4d9e706bbd7b20fbd9d5848f41f44b`;
- `LIVE_MASTER_SHA_AT_GATE`: refreshed from Git and GitHub, observed as
  `70ad9016af4d9e706bbd7b20fbd9d5848f41f44b` on 2026-08-26; and
- `DECISION_BASE_SHA` for the blocker-resolution decision:
  `70ad9016af4d9e706bbd7b20fbd9d5848f41f44b`.

The live value is point-in-time evidence and must be refreshed at a later gate.
Embedded SHAs do not permanently define live `master`.

At the document revision basis:

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

The deterministic canonical manifest fixes all 20 schema columns for both
rows:

| Column | Layout row | Visit Context group row |
|---|---|---|
| `grp_form_id` | `LBFim_followup_v1` | `LBFim_followup_v1` |
| `grp_group_id` | `""` | `"1"` |
| `grp_title` | `Internal Medicine Follow-Up V1` | `Visit Context` |
| `grp_subtitle` | `""` | `""` |
| `grp_mapping` | `Clinical` | `""` |
| `grp_seq` | `0` | `0` |
| `grp_activity` | `1` | `1` |
| `grp_repeats` | `0` | `0` |
| `grp_columns` | `4` | `0` |
| `grp_size` | `9` | `0` |
| `grp_issue_type` | `""` | `""` |
| `grp_aco_spec` | `""` | `""` |
| `grp_save_close` | `0` | `0` |
| `grp_init_open` | `0` | `0` |
| `grp_referrals` | `0` | `0` |
| `grp_unchecked` | `0` | `0` |
| `grp_services` | `""` | `""` |
| `grp_products` | `""` | `""` |
| `grp_diags` | `""` | `""` |
| `grp_last_update` | `null` | `null` |

The layout values `Clinical`, `4`, and `9` follow the repository's native
new-layout defaults. The group uses native/schema defaults for values not
supplied by native group creation. The explicit initial
`grp_last_update=null` value is included in equality and digest checks. A later
native timestamp change is a value change and makes rollback ineligible.

No other row in `layout_group_properties` is authorized.

### 8.2 `layout_options`

Exactly these four row identities and controlled values are permitted:

| `form_id` | `field_id` | `group_id` | `seq` | Title | `data_type` | `uor` | `fld_length` | `max_length` | `titlecols` | `datacols` | `fld_rows` | `source` |
|---|---|---:|---:|---|---:|---:|---:|---:|---:|---:|---:|---|
| `LBFim_followup_v1` | `followup_reason` | `1` | 10 | Follow-up reason | 2 | 1 | 40 | 255 | 1 | 3 | 0 | `F` |
| `LBFim_followup_v1` | `visit_type` | `1` | 20 | Visit type | 2 | 1 | 30 | 100 | 1 | 3 | 0 | `F` |
| `LBFim_followup_v1` | `main_complaint` | `1` | 30 | Main complaint | 2 | 1 | 40 | 255 | 1 | 3 | 0 | `F` |
| `LBFim_followup_v1` | `interval_history` | `1` | 40 | Interval history since last visit | 2 | 1 | 60 | 200 | 1 | 3 | 0 | `F` |

The remaining eight schema columns have these explicit values on each of the
four rows:

| Column | Exact value |
|---|---|
| `list_id` | `""` |
| `default_value` | `""` |
| `edit_options` | `""` |
| `description` | `""` |
| `list_backup_id` | `""` |
| `conditions` | `null` |
| `validation` | `null` |
| `codes` | `""` |

No other `layout_options` row is authorized.

### 8.3 Manifest Canonicalization and Digest

- Manifest version: `IMCORE-LS-001-MANIFEST-1`
- Controlled row count: `6`
- Controlled manifest value count: `124`
  (`2 * 20 layout_group_properties` values plus
  `4 * 21 layout_options` values)
- Row order: layout row, Visit Context group row, then the four option rows in
  ascending integer `seq`
- Object-key order: ascending Unicode code point; all defined keys are ASCII
- Strings: UTF-8, Unicode NFC
- Empty string: JSON `""`
- Null: JSON `null`, distinct from an empty string
- Integers: canonical base-10 JSON integers; no floating-point values
- Serialization: no insignificant whitespace, no BOM, and no trailing newline
- SHA-256 input: the exact UTF-8 bytes of the single JSON line between the
  markers below

<!-- IMCORE-LS-001-CANONICAL-MANIFEST-BEGIN -->
```json
{"manifest_version":"IMCORE-LS-001-MANIFEST-1","rows":[{"table":"layout_group_properties","values":{"grp_aco_spec":"","grp_activity":1,"grp_columns":4,"grp_diags":"","grp_form_id":"LBFim_followup_v1","grp_group_id":"","grp_init_open":0,"grp_issue_type":"","grp_last_update":null,"grp_mapping":"Clinical","grp_products":"","grp_referrals":0,"grp_repeats":0,"grp_save_close":0,"grp_seq":0,"grp_services":"","grp_size":9,"grp_subtitle":"","grp_title":"Internal Medicine Follow-Up V1","grp_unchecked":0}},{"table":"layout_group_properties","values":{"grp_aco_spec":"","grp_activity":1,"grp_columns":0,"grp_diags":"","grp_form_id":"LBFim_followup_v1","grp_group_id":"1","grp_init_open":0,"grp_issue_type":"","grp_last_update":null,"grp_mapping":"","grp_products":"","grp_referrals":0,"grp_repeats":0,"grp_save_close":0,"grp_seq":0,"grp_services":"","grp_size":0,"grp_subtitle":"","grp_title":"Visit Context","grp_unchecked":0}},{"table":"layout_options","values":{"codes":"","conditions":null,"data_type":2,"datacols":3,"default_value":"","description":"","edit_options":"","field_id":"followup_reason","fld_length":40,"fld_rows":0,"form_id":"LBFim_followup_v1","group_id":"1","list_backup_id":"","list_id":"","max_length":255,"seq":10,"source":"F","title":"Follow-up reason","titlecols":1,"uor":1,"validation":null}},{"table":"layout_options","values":{"codes":"","conditions":null,"data_type":2,"datacols":3,"default_value":"","description":"","edit_options":"","field_id":"visit_type","fld_length":30,"fld_rows":0,"form_id":"LBFim_followup_v1","group_id":"1","list_backup_id":"","list_id":"","max_length":100,"seq":20,"source":"F","title":"Visit type","titlecols":1,"uor":1,"validation":null}},{"table":"layout_options","values":{"codes":"","conditions":null,"data_type":2,"datacols":3,"default_value":"","description":"","edit_options":"","field_id":"main_complaint","fld_length":40,"fld_rows":0,"form_id":"LBFim_followup_v1","group_id":"1","list_backup_id":"","list_id":"","max_length":255,"seq":30,"source":"F","title":"Main complaint","titlecols":1,"uor":1,"validation":null}},{"table":"layout_options","values":{"codes":"","conditions":null,"data_type":2,"datacols":3,"default_value":"","description":"","edit_options":"","field_id":"interval_history","fld_length":60,"fld_rows":0,"form_id":"LBFim_followup_v1","group_id":"1","list_backup_id":"","list_id":"","max_length":200,"seq":40,"source":"F","title":"Interval history since last visit","titlecols":1,"uor":1,"validation":null}}]}
```
<!-- IMCORE-LS-001-CANONICAL-MANIFEST-END -->

- Canonical UTF-8 byte count: `2488`
- Canonical manifest SHA-256:
  `9fd062558f2284f770468dd44d7332ada976311b2c3167e19ab846325edbc163`
- Digest verification: independently required before commit and publication

Every column participates in exact comparison and the manifest digest. Strings
must be compared byte-exact after retrieval rather than by a case-insensitive
database collation. Any value change, including a later timestamp change,
invalidates exact-match and guarded-rollback eligibility.

### 8.4 Explicitly unauthorized tables

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

### 10.1 Approved External Ownership Receipt Contract

The Project Owner conditionally approved an append-only external receipt. No
extra database table, marker row, seventh configuration row, schema change, or
repository receipt file is permitted.

The future Phase 12 decision must select an exact absolute path within an
owner-controlled, local-synthetic evidence root outside the repository. It must
not be a shared path, symlink or reparse target, container filesystem, database,
repository subdirectory, or automatically deleted temporary location.

Each operation uses a new, exclusively created directory containing:

```text
receipt.prepared.json
receipt.committed.json
```

Both records use the manifest's canonical JSON and SHA-256 rules and contain at
minimum:

```text
receipt_schema_version
work_item_id
customization_id
phase11_decision_id
phase12_decision_id
repository_base_sha
implementation_commit_sha
manifest_version
manifest_sha256
operation_id
environment_id
synthetic_site_id
database_engine_and_version
before_state
created_row_keys
after_row_digests
prepared_at_utc
committed_at_utc
receipt_state
prepared_receipt_sha256
receipt_payload_sha256
```

Required behavior:

1. Fail before database activity if the operation ID or receipt path exists, is
   malformed, is not exclusively owned, or cannot be protected.
2. Create and flush `receipt.prepared.json` with
   `before_state=ALL_SIX_ABSENT`, exactly six ordered keys, the approved manifest
   digest, `receipt_state=PREPARED`, and `committed_at_utc=null`.
3. Begin the separately authorized database transaction, reclassify only the
   six identities, insert and verify exactly six rows, and commit.
4. Create, flush, and same-filesystem atomically rename a new file to the
   previously absent `receipt.committed.json`. It must link to the PREPARED
   digest, record all six full-row after-state digests, and set
   `receipt_state=COMMITTED`.
5. Never overwrite either final receipt. Retain both through teardown and the
   owner-approved retention period.

The future environment must enforce owner-only permissions (`0700` directory
and `0600` files on POSIX, or an equivalently restricted reviewed Windows ACL).
The receipt must contain no credential, token, password, connection string,
PHI, patient/encounter information, database dump, raw SQL, stack trace, or
sensitive exception content.

A PREPARED-only record after a database commit is `COMMIT_UNCERTAIN`; a missing,
malformed, altered, digest-invalid, wrong-environment, wrong-commit, or
wrong-manifest receipt is `HOLD`. Rows that match without a valid COMMITTED
receipt do not establish ownership. No automatic rollback is allowed in any
ambiguous state.

Post-commit rollback is eligible only under separate authorization when the
COMMITTED receipt, environment, decision IDs, implementation commit, manifest,
six keys, and all current full-row digests match exactly. Deletion must use the
six exact parameterized keys in one transaction and verify absence before
commit. Any changed value or dependent row blocks deletion.

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

## 13. Project Owner Blocker-Resolution Decision Record

- Decision-record ID:
  `DEC-LS1-IMCORE-LS-001-P11-BLOCKER-RESOLUTION-001`
- Decision date: 2026-08-26
- Project Owner: `DrMohammed2024`
- Decision layer: blocker-resolution and documentation alignment only; this is
  not the Phase 11 implementation decision
- Repository: `DrMohammed2024/openemr-im-core`
- Document revision basis and decision base:
  `master` at `70ad9016af4d9e706bbd7b20fbd9d5848f41f44b`
- Source-of-truth model: `FOUR_SHA_GATE_MODEL — APPROVED`
- Manifest objective: `DETERMINISTIC_CANONICAL — APPROVED`
- Manifest values: approved exactly as recorded in Section 8
- Controlled manifest value count: `124`, not 126
- Manifest SHA-256:
  `9fd062558f2284f770468dd44d7332ada976311b2c3167e19ab846325edbc163`
- Rollback provenance:
  `APPEND_ONLY_PREPARED_AND_COMMITTED_RECEIPT — APPROVED_WITH_CONDITIONS`
- Non-Docker test environment:
  `DEDICATED_GENERAL_PURPOSE_WSL2 — SELECTED_FOR_FUTURE_SEPARATELY_AUTHORIZED_PROVISIONING`
- Current workflow disposition:
  `STRICT_CLEAN_MASTER — SELECTED_AS_A_PHASE_11_OWNER_CONDITION`
- Current check evidence: Whitespace run `32879084778` and Test All
  Configurations run `32879085498` remain failed; no passing rerun is recorded
- Future documentation alignment: authorized only for the five Markdown files
  named below
- `IMCORE-LS-001` status: `HOLD`
- Phase 11 status: `HOLD`; not authorized
- Phase 12 status: `HOLD`; not authorized
- Implementation branch: absent and not authorized
- Dependency, Docker, database, runtime, API/FHIR, AI, PHI, clinical, deployment,
  validation, compliance, certification, and merge authority: none
- Author/owner/reviewer relationship: the Project Owner is the repository owner
  and accountable decision-maker; Codex performed AI-assisted advisory analysis
- Independence/conflict limitation: review is non-independent; no independent
  specialist or conflict-of-interest determination is claimed
- Final blocker-resolution decision:
  `APPROVE_WITH_CONDITIONS — BLOCKER RESOLUTION ONLY`

Authorized documentation paths:

1. `custom/im-core/docs/governance/ls-1-bounded-local-synthetic-engineering-policy-v0.1.md`
2. `custom/im-core/docs/governance/lifecycle-phase-gate-control-v0.1.md`
3. `custom/im-core/docs/governance/imcore-ls-001-local-synthetic-authorization-packet-v0.1.md`
4. `custom/im-core/docs/project-state/current-project-state.md`
5. `custom/im-core/docs/index/documentation-index-and-review-cadence-v0.1.md`

Conditions and follow-up:

- the canonical manifest bytes and digest must verify independently before
  commit and publication;
- the documentation-only Pull Request requires separate Project Owner review;
- current required checks must satisfy strict clean-`master` before any Phase 11
  approval;
- WSL2, PHP, Composer, packages, extensions, and dependencies require separate
  future provisioning authority and verified supply-chain evidence;
- exact implementation/test scope and a separate Phase 11 decision remain
  required; and
- a separate Phase 12 decision remains required for Docker, database, runtime,
  or local-synthetic execution evidence.

Invalidation triggers include digest mismatch, manifest value change, source-of-
truth drift, protected-scope change, receipt ambiguity, failed required checks,
missing separate authorization, or any prohibited data or activity.

> This is an AI-assisted, non-independent Project Owner blocker-resolution
> decision. GPT/Codex performed multidisciplinary advisory analysis. The Project
> Owner remains the final accountable internal decision-maker. This record does
> not authorize implementation, Phase 11, Phase 12, Docker, database activity,
> OpenEMR execution, PHI, patient or encounter data, API/FHIR, AI execution,
> deployment, clinical use, validation, compliance, certification, regulatory
> claims, or merge.

## 14. Project Owner Decision Record — Phase 11

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
- Blocking findings: the strict clean-`master` condition is not satisfied; the
  WSL2 environment is not provisioned; exact implementation/test scope, branch
  authority, and the separate Phase 11 decision remain outstanding
- Non-blocking findings: the four-SHA model, deterministic canonical manifest,
  and conditional external receipt design are recorded
- Unresolved limitations: no implementation or execution evidence exists; the
  current failed workflow results are not passing evidence
- Author/owner/reviewer relationship: not recorded
- Conflicts of interest: not recorded
- Non-independence disclosure: required, not yet signed
- Rationale: not recorded
- Final decision: `HOLD — NOT RECORDED`
- Conditions/follow-up: separate Phase 11 Project Owner review and decision
- Invalidation triggers: Sections 12 and `POL-GOV-LS1-001`

## 15. Project Owner Decision Record — Phase 12

- Decision-record ID: `DEC-LS1-IMCORE-LS-001-P12-001`
- Decision date: not recorded
- Project Owner: not recorded
- Eligible implementation commit SHA: not available
- Local environment and Docker identifiers: not recorded
- Complete six-row manifest: deterministic canonical design approved with 124 controlled values and recorded SHA-256; runtime/schema compatibility remains unverified
- Commands/tests/rollback/evidence destinations: not recorded
- Evidence personally reviewed: not recorded
- GPT advisory evidence reviewed: not recorded
- Non-independence disclosure: required, not yet signed
- Final decision: `HOLD — SEPARATE FUTURE AUTHORIZATION REQUIRED`
- Invalidation triggers: Sections 5 and 12 and `POL-GOV-LS1-001`

## 16. Mandatory Disclosure for a Future Decision

> This is an AI-assisted, non-independent Project Owner review. GPT performed
> multidisciplinary advisory analysis. The Project Owner personally reviewed
> the recorded evidence and made the final accountable internal decision.
> Separate specialist-human approval is not claimed. No independent assurance,
> professional licensure, clinical validation, compliance, certification,
> regulatory approval, production readiness, clinical-use authorization, PHI
> authorization, deployment, or external release is claimed.

## 17. Post-Implementation Verification and Future Gates

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
