# LS-1 — Bounded Local-Synthetic Engineering Policy V0.1

## 1. Document Control

- Policy ID: `POL-GOV-LS1-001`
- Policy category: `LS-1 — BOUNDED LOCAL-SYNTHETIC ENGINEERING`
- Project: OpenEMR IM Core
- Version: V0.1
- Policy owner: Project Owner
- Internal review model:
  `GPT_MULTIDISCIPLINARY_ADVISORY_REVIEW` +
  `PROJECT_OWNER_FINAL_ACCOUNTABLE_DECISION`
- Independence: AI-assisted and non-independent
- Status: proposed governance amendment pending Project Owner decision and
  merge to the controlled base branch
- Runtime effect of this document: none
- Implementation authorization created by this document alone: none
- Clinical-use authorization: none
- PHI or real-patient-data authorization: none

This policy becomes effective only after the Project Owner records adoption
and the governance amendment is merged to the controlled base branch. A work
item then requires its own current Project Owner decision record before the
authorized activity begins.

For eligible LS-1 work, separate specialist-human approvals are not mandatory
internal execution or merge gates. GPT remains advisory and cannot claim
professional licensure, independent assurance, certification, regulatory
authority, risk-acceptance authority, or final accountable authority. The
Project Owner personally reviews the evidence and records the final
accountable internal decision.

## 2. Purpose

LS-1 permits a narrow, reversible engineering objective to be prepared and,
only after work-item authorization, implemented in a local development
environment using synthetic configuration or test data. It is intended to
make a small local customization reproducible without opening a general
implementation, runtime, database, clinical-use, or release gate.

AI assistance may be used for repository authoring and advisory review.
Nothing in LS-1 authorizes execution of an OpenEMR IM Core AI, model, prompt,
agent, clinical decision-support, or autonomous-tool capability.

## 3. Eligibility — All Conditions Required

A work item is eligible only when evidence establishes every condition below:

- local development environment only;
- synthetic configuration or test data only;
- no PHI, real patient data, or de-identified real data;
- no patient or encounter record is required;
- one narrow and reversible engineering objective;
- isolated, disposable Docker project and volumes when containers are used;
- no interaction with unrelated containers or volumes;
- no deployment, pilot, production, or external release;
- no clinical-use or patient-care authorization;
- no runtime AI, model, prompt, or agent execution;
- no operational API or FHIR integration;
- no schema migration;
- no OpenEMR core-sensitive change unless a separate applicable gate is
  completed;
- no new dependency without explicit Project Owner authorization;
- exact allowed database tables and row identities are declared;
- parameterized transactional writes only;
- fail-closed conflict detection;
- exact-match idempotency;
- guarded rollback;
- objective tests and retained evidence; and
- no validation, compliance, certification, regulatory, security-
  certification, production-readiness, or independent-assurance claim.

Eligibility is evidence-based. A file path, extension, local environment, or
synthetic label does not establish eligibility by itself. An unresolved or
partially established condition means `HOLD`.

## 4. Allowed Scope

An authorized LS-1 work item may include only the scope in its decision record:

- one repository-tracked local work item;
- a dedicated implementation branch based on the recorded base SHA;
- narrowly scoped implementation and isolated tests;
- synthetic fixtures that cannot be confused with real people or records;
- metadata-only reads needed to verify declared table and row boundaries;
- parameterized, transactional writes to the declared rows only, but only
  under the applicable execution/evidence authorization;
- conflict, idempotency, rollback, and objective verification behavior;
- documentation and evidence updates required by the same objective; and
- local disposable Docker resources whose exact project and volume names are
  recorded before use.

Scope not explicitly recorded is prohibited.

## 5. Prohibited Scope and Preserved External Gates

LS-1 never authorizes:

- PHI, real patient data, de-identified real data, or production-derived data;
- patient, encounter, billing, audit, result, prescription, order, scheduling,
  insurance, claim, payment, or other clinical/operational record access;
- clinical use or patient-care operation;
- AI/CDS/model/prompt/agent execution;
- operational API or FHIR integration;
- schema changes or migrations;
- production database changes;
- production security implementation;
- unrelated container, volume, database, table, or row access;
- a new dependency without explicit authorization;
- OpenEMR core-sensitive changes without a separate gate;
- deployment, pilot, production, or external release;
- clinical validation, compliance, regulatory, legal, contractual,
  cybersecurity, privacy, certification, production-readiness, or independent-
  assurance claims; or
- waiver of an obligation imposed by law, contract, regulator, certification
  body, licensed professional, organization, or other external authority.

Qualified-human or external review remains required where applicable before
PHI or real-data use, clinical use, patient-care operation, runtime AI/CDS,
operational API/FHIR integration, production migrations, production security
implementation, pilot, deployment, production or external release, clinical
validation claims, compliance or regulatory claims, cybersecurity/privacy
certification, or legal/contractual action requiring external authority.

## 6. Boundary Matrix

| Boundary | LS-1 control |
|---|---|
| Data | Synthetic configuration/test data only; no real or de-identified real data |
| Records | No patient or encounter record may be required or created |
| Environment | Local development only; never shared, pilot, staging for real use, or production |
| Docker | Unique recorded project name; disposable dedicated volumes; no unrelated container, network, bind mount, or volume interaction |
| Database | Existing schema only; exact named tables and row identities; no broad table access |
| Writes | Parameterized and transactional; no string-built SQL; fail closed on any mismatch |
| Dependencies | None added unless the decision record grants explicit authorization |
| Git | Dedicated recorded branch and base SHA; one work item and objective |
| GitHub | Issue deferral is allowed only under Section 7; implementation publication requires an issue first |
| Runtime integrations | No AI/model/prompt/agent, API, or FHIR operation |
| Claims | Local engineering evidence only; no validation, assurance, readiness, compliance, certification, or clinical claim |

## 7. Local-First Work-Item and GitHub Publication Control

A significant local-first customization may begin with a stable,
repository-tracked work-item identifier such as `IMCORE-LS-001`. The work item
must be recorded in an authoritative repository artifact and linked to its
customization-ledger entry, decision record, base SHA, branch, and evidence.
Untracked customization is prohibited.

A GitHub issue may be deferred until the first external publication checkpoint
only when the Project Owner records the deferral, rationale, responsible owner,
and publication trigger. The issue must exist before the implementation branch
is pushed or a Pull Request is opened. The deferral expires if the branch,
scope, owner, base, or publication plan changes.

The governance-amendment branch and Pull Request are not the implementation
branch or implementation publication and do not satisfy the future work-item
issue requirement.

## 8. Database, Transaction, Conflict, and Idempotency Controls

Every database-capable work item must declare:

- table names;
- primary-key or equivalent row identities;
- expected before-state classes: absent, exact match, or prohibited conflict;
- exact intended after-state;
- permitted statement types;
- parameter-binding mechanism;
- transaction boundary;
- rollback trigger and guarded rollback predicate; and
- proof that unrelated rows remain unchanged.

The implementation must:

1. open a transaction before any write;
2. read only the declared keys needed for conflict classification;
3. perform no write when all target rows exactly match the expected state;
4. stop with no mutation on any partial, duplicate-key, or non-exact conflict;
5. write only declared absent rows using parameterized statements;
6. verify the exact intended state and unrelated-row invariants before commit;
7. roll back the transaction on any error or failed invariant; and
8. expose no broad delete, overwrite, upsert, replace, or best-effort mode.

Post-commit rollback may remove only rows proven to have been created by the
authorized work item and still matching its exact expected values. Missing
provenance, changed values, dependent rows, or ambiguity means `HOLD`; the
rollback must not guess.

## 9. Docker Isolation Rules

Before container use, the owner-authorized record must name the Docker project,
services, networks, bind mounts, and volumes. Resources must be disposable and
dedicated to the work item. No default project-name inference is allowed.

Pre-use evidence must show that the selected names do not collide with
unrelated resources. Commands may address only the declared project. Cleanup
may remove only the verified work-item resources. An unresolved name, mount,
network, volume, or container conflict is `HOLD`.

## 10. Authorization Layers and Lifecycle Alignment

LS-1 uses distinct authorization layers:

1. **Policy adoption:** adopts the category; authorizes no work item by itself.
2. **Phase 11 work-item authorization:** permits only the exact recorded
   preparation and implementation scope on the recorded local branch.
3. **Phase 12 execution/evidence authorization:** a separate, later Project
   Owner decision is required before Docker execution, database writes, or
   local-synthetic runtime evidence collection.
4. **GitHub publication authorization:** requires the work-item issue and a
   current decision before the implementation branch is pushed or its Pull
   Request is opened.
5. **Future/external gates:** remain separate and cannot be satisfied by LS-1.

A Phase 11 decision does not authorize Phase 12. Static or isolated tests that
do not start Docker, access a database, or exercise OpenEMR runtime may be
included in Phase 11 when declared. The work-item record must state exactly
which tests are authorized in each layer.

## 11. Mandatory Tests

The decision record must list commands, expected results, and the authorization
layer for each applicable test. At minimum, the implementation and later
execution evidence must cover:

- changed-file and prohibited-path scope;
- syntax, lint, repository governance, and spelling checks;
- unit or isolated tests for parameter binding and transaction handling;
- absent-target creation success;
- exact-match second-run no-op;
- partial, duplicate, and non-exact conflict fail-closed behavior;
- injected failure with complete transaction rollback;
- guarded post-commit rollback behavior;
- exact target row count and values;
- proof that unrelated rows/tables remain unchanged;
- no schema change;
- no patient or encounter record creation;
- no runtime AI, API, or FHIR activity;
- Docker project/volume isolation when Phase 12 authorizes Docker; and
- repository diff, PHI/identifier, secret, hidden-Unicode, path/link, and
  prohibited-claim checks.

Unavailable tools or unexecuted tests must be reported as such. They cannot be
recorded as passing.

## 12. Evidence Requirements

Evidence must be synthetic-safe, reproducible, and sufficient for personal
Project Owner review. Record at least:

- work-item and customization-ledger identifiers;
- policy and decision-record identifiers;
- repository, base branch/SHA, head branch/SHA, and exact changed files;
- artifact classification and dependency diff;
- declared environment and Docker isolation identifiers;
- synthetic-data and no-record attestations;
- exact database tables, keys, expected values, and before-state class;
- commands actually run, timestamps, status, and limitations;
- test results for success, no-op, conflict, failure, and rollback paths;
- sanitized before/after metadata limited to the authorized rows;
- unrelated-row invariants without database dumps or sensitive logs;
- rollback result and remaining resources;
- GPT advisory findings and their disposition; and
- Project Owner evidence personally reviewed, rationale, decision, conditions,
  and invalidation triggers.

Evidence is engineering evidence for the bounded local objective only. It is
not clinical validation, independent assurance, certification, compliance, or
production-readiness evidence.

## 13. GPT Advisory Review

GPT must review and record:

- eligibility against every Section 3 condition;
- repository/base/head and changed-file evidence;
- allowed/prohibited path and dependency classification;
- data, environment, Docker, database/table/row, Git, and GitHub boundaries;
- parameterization, transaction, conflict, idempotency, and rollback design;
- test sufficiency and actual results;
- PHI/real-data, patient-identifier, secret, and sensitive-log indicators
  without reproducing suspected sensitive content;
- source-of-truth, duplicate-policy, and lifecycle conflicts;
- claims and non-independence language;
- blocking, non-blocking, unresolved, and future-gated findings; and
- an advisory recommendation of `APPROVE`, `REVISE`, or `HOLD`.

GPT analysis is advisory. It is not professional, independent, regulatory,
certification, or final accountable review.

## 14. Project Owner Decision Record

Every LS-1 decision must record:

- decision-record identifier and date;
- work-item and customization-ledger identifiers;
- Project Owner name or identifier;
- exact objective and authorization layer;
- policy version;
- repository and work-item issue/deferral record;
- base branch/SHA and head branch/SHA;
- exact changed files and artifact classification;
- exact allowed/prohibited scope;
- data and record boundary;
- environment and Docker boundary;
- database tables, row identities, statement types, and expected states;
- dependency boundary;
- Git and GitHub publication boundary;
- tests required, tests run, results, and limitations;
- rollback plan and evidence;
- GPT evidence and advisory findings reviewed;
- evidence personally reviewed by the Project Owner;
- blocking and non-blocking findings and disposition;
- unresolved limitations and conditions;
- author/owner/reviewer relationship and conflicts of interest;
- AI-assisted, non-independent disclosure;
- decision rationale;
- final decision;
- follow-up actions, owners, and due points; and
- decision invalidation triggers.

Allowed final decisions are `APPROVE`, `APPROVE_WITH_CONDITIONS`, `HOLD`, and
`REJECT`. Eligibility, safety, scope, source-of-truth, or required-check
conditions cannot remain unresolved at implementation or merge.

## 15. Mandatory Non-Independence Disclosure

Every approving or conditional record must state, or use substantially
equivalent language:

> This is an AI-assisted, non-independent Project Owner review. GPT performed
> multidisciplinary advisory analysis. The Project Owner personally reviewed
> the recorded evidence and made the final accountable internal decision.
> Separate specialist-human approval is not claimed. No independent assurance,
> professional licensure, clinical validation, compliance, certification,
> regulatory approval, production readiness, clinical-use authorization, PHI
> authorization, deployment, or external release is claimed.

## 16. Automatic HOLD and Stop Conditions

The work item is automatically `HOLD`, and active work must stop safely, if:

- any eligibility condition is unresolved or becomes false;
- scope, base, branch, changed files, dependencies, tables, rows, or expected
  values differ from the decision record;
- PHI, real data, de-identified real data, patient/encounter records, secrets,
  sensitive logs, or production-derived data appear;
- an unrelated Docker resource, database object, row, or environment may be
  affected;
- parameterization, transactionality, exact-match idempotency, fail-closed
  conflict behavior, or guarded rollback is absent or fails;
- a schema change, core-sensitive change, runtime AI/API/FHIR activity, pilot,
  deployment, production, or external-release scope appears;
- a required test fails, is pending, becomes stale, or was not actually run;
- a material source-of-truth conflict is found;
- a prohibited claim is made;
- the GitHub issue is absent at the implementation publication checkpoint;
- a separate Phase 12 or external gate is required but not current; or
- the Project Owner decision is missing, stale, ambiguous, or invalidated.

Containment, rollback, and evidence preservation must remain within the
authorized scope. Do not inspect, copy, or publish suspected sensitive values.

## 17. Decision Invalidation

A decision is invalid when the base/head SHA, branch, objective, file scope,
dependency set, environment, Docker resources, database schema, table/row
boundary, expected values, test plan, evidence, risk, check status, or external
obligation changes materially. It is also invalid after any automatic HOLD
trigger or if implementation behavior differs from the reviewed design.

An invalid decision cannot be repaired by assumption. GPT must reassess the
current evidence and the Project Owner must record a new decision.

## 18. Post-Implementation Verification

Before implementation merge, verify:

- the committed diff remains the exact authorized scope;
- no runtime files outside the recorded paths or dependencies changed;
- all required repository and isolated tests passed;
- no Docker/database/runtime action occurred unless separately authorized;
- any authorized Phase 12 run left only the exact expected rows;
- rerun was an exact-match no-op;
- conflict and injected-failure paths were fail-closed;
- rollback was verified or its documented limitation is blocking;
- unrelated resources remained unchanged;
- no prohibited data, secret, hidden Unicode, or claim is present;
- the implementation issue and PR traceability are complete; and
- the Project Owner decision remains current.

After merge, a new verification record must confirm the merged SHA and retained
boundaries. Merge does not authorize clinical use, deployment, production,
external release, or any later lifecycle phase.

## 19. Initial Candidate

The first proposed LS-1 work item is `IMCORE-LS-001 — Reproducible Local-
Synthetic Visit Context LBF Seed`, recorded in
`imcore-ls-001-local-synthetic-authorization-packet-v0.1.md` and reserved as
customization `IM-0005`.

The candidate is identified, not executed or owner-authorized, by this policy
package. Its proposed implementation branch must not be created by this
governance task.

## 20. Relationship and Precedence

This policy is the controlling narrow exception to older current-stage
statements that prohibit all implementation or database work. It does not
weaken their no-PHI, no-secrets, clinical, AI/API/FHIR, migration, deployment,
release, evidence, claim-control, or external-gate protections.

Where the LS-1 exception does not expressly apply, the stricter existing
boundary controls. An unresolved conflict is `HOLD`.
