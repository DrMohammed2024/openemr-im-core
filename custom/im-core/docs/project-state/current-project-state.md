# OpenEMR IM Core — Current Project State

## 1. Record Control

- Project: OpenEMR IM Core
- Repository: `DrMohammed2024/openemr-im-core`
- Record date: 2026-08-26
- Controlled branch: `master`
- `DOCUMENT_REVISION_BASIS_SHA`:
  `70ad9016af4d9e706bbd7b20fbd9d5848f41f44b`
- PR #267 `HISTORICAL_MERGE_SHA`:
  `76548a0f714177cde38d4d1201aa6095bcba0dfd`
- PR #268 `HISTORICAL_MERGE_SHA`:
  `70ad9016af4d9e706bbd7b20fbd9d5848f41f44b`
- `LIVE_MASTER_SHA_AT_GATE`: observed as
  `70ad9016af4d9e706bbd7b20fbd9d5848f41f44b`; point-in-time evidence that must
  be refreshed at each later gate
- Blocker-resolution `DECISION_BASE_SHA`:
  `70ad9016af4d9e706bbd7b20fbd9d5848f41f44b`
- Source-of-truth role: current repository and governance state without treating
  an embedded SHA as a permanent live-`master` assertion
- Runtime effect: none
- Clinical-use authorization: none

This record distinguishes repository-verified state, historical off-repository
manual-runtime attestations, proposed work, unverified claims, and future work.
A statement in a historical artifact does not become a current verified fact
merely because the artifact is tracked.

## 2. Controlled Repository State

The repository was freshly verified before the blocker-decision alignment:

- local `master`, local `origin/master`, and live remote `master` matched the
  document revision basis and decision base;
- the working tree was clean;
- `core.ignorecase=false`;
- directory case sensitivity was enabled;
- PR #267 adoption/reconfirmation evidence and PR #268 merge/owner-approval
  evidence remained present; and
- PR #265 remained open, unmerged, excluded, and unchanged by this work.

Repository, PR, and check status are point-in-time evidence. Live Git and GitHub
must be refreshed before a later decision, publication, or merge. Historical
merge SHAs remain immutable evidence and are not rewritten when `master`
advances.

## 3. Current Governance Model

For eligible work, the internal review model is:

```text
GPT_MULTIDISCIPLINARY_ADVISORY_REVIEW
+
PROJECT_OWNER_FINAL_ACCOUNTABLE_DECISION
```

The review is AI-assisted and non-independent. GPT is advisory and cannot claim
professional licensure, independent assurance, certification, regulatory
authority, risk-acceptance authority, or final accountable authority. The
Project Owner personally reviews the evidence and records the final accountable
internal decision.

`POL-GOV-LS1-001` is adopted and active on `master` under
`POL-GOV-LS1-001-ADOPTION-001` and PR #267, historically merged at
`76548a0f714177cde38d4d1201aa6095bcba0dfd`. The Project Owner reconfirmed that
adoption with limitations under
`POL-GOV-LS1-001-ADOPTION-001-RECONFIRMATION-001`; PR #268 later merged the
reconfirmation-state alignment at
`70ad9016af4d9e706bbd7b20fbd9d5848f41f44b`.

### Current Master Workflow Limitations

- Whitespace run `32879084778` remains failed on inherited
  `CUSTOMIZATION_POLICY.md` content outside PR #268's Markdown-only scope.
- Test All Configurations run `32879085498` remains failed with 169 successful
  jobs and two failed MySQL services jobs. No successful rerun is recorded.

These failures are not established as caused by PR #268. They remain failed
and are not passing runtime, verification, validation, readiness, compliance,
certification, or clinical evidence. Under
`DEC-LS1-IMCORE-LS-001-P11-BLOCKER-RESOLUTION-001`, strict clean `master` is a
Phase 11 owner condition. Whitespace correction and CI investigation remain
separate work items. This documentation alignment does not authorize merge.

## 4. Repository-Merged Implementation

No executable IM Core implementation currently exists on `master`.

At the controlled baseline:

- all tracked files under `custom/im-core/` are Markdown documents;
- no executable Visit Context seed exists;
- no clean-install reproduction mechanism exists in the repository;
- no Docker or database operation is authorized by the baseline merely because
  historical planning documents exist; and
- no implementation, dependency, workflow, schema, migration, API/FHIR, or
  runtime AI change is merged for IM Core.

The repository does contain extensive governance, planning, LBF documentation,
and historical manual-runtime records. Those are not executable
implementation.

## 5. Historical Off-Repository Manual-Runtime Evidence

Tracked documents report that an earlier Android/Termux OpenEMR 8.1.1-dev
environment was manually configured with:

- layout title: Internal Medicine Follow-Up V1;
- layout ID: `LBFim_followup_v1`;
- category: Clinical;
- nine documented groups; and
- historical Encounter Preview and metadata observations.

The documents also report the following aggregate metadata:

```text
form_id: LBFim_followup_v1
ROW_COUNT: 51
GROUP_COUNT: 9
GROUP_IDS: 1,2,3,4,5,6,7,8,9
FIELD_DISTRIBUTION: 4,7,7,5,6,6,4,7,5
METADATA_VERIFICATION_STATUS: PASS
```

These are historical off-repository manual-runtime attestations recorded in
Git. This governance task did not access the environment, query a database,
open OpenEMR, or independently reproduce the aggregate. The record therefore
does not establish current runtime availability, clean-install
reproducibility, validation, production readiness, or independent assurance.

## 6. Controlled Visit Context Baseline

Historical documents consistently identify group `1` / Visit Context and these
four fields:

| Sequence | Field ID | Controlled title | Data type | Maximum length | Behavior |
|---:|---|---|---:|---:|---|
| 10 | `followup_reason` | Follow-up reason | 2 | 255 | Single line |
| 20 | `visit_type` | Visit type | 2 | 100 | Single line |
| 30 | `main_complaint` | Main complaint | 2 | 255 | Single line |
| 40 | `interval_history` | Interval history since last visit | 2 | 200 | Single line |

For the first LS-1 slice, `interval_history` is controlled as `data_type=2`,
`max_length=200`, `fld_rows=0`, single-line behavior. The earlier
textarea/2,000-character statement is superseded for this slice and deferred to
a separate redesign work item. It is not a runtime ambiguity or accepted
alternative for `IMCORE-LS-001`.

## 7. Identified Implementation Candidate — Not Authorized

The initial reserved/proposed future candidate is:

- work item: `IMCORE-LS-001`;
- customization: reserved/proposed `IM-0005`;
- title: Reproducible Local-Synthetic Visit Context LBF Seed;
- proposed branch: `codex/feat-im-core-lbf-visit-context-seed`;
- target: `LBFim_followup_v1`, group `1` / Visit Context, and the four
  Section 6 fields;
- database row boundary: exactly two declared
  `layout_group_properties` rows and four declared `layout_options` rows; and
- candidate packet:
  `custom/im-core/docs/governance/imcore-ls-001-local-synthetic-authorization-packet-v0.1.md`.

Policy adoption, reconfirmation, and blocker-resolution decision
`DEC-LS1-IMCORE-LS-001-P11-BLOCKER-RESOLUTION-001` identify and constrain the
candidate but do not authorize or begin it. The decision approves the four-SHA
model, the deterministic 124-value canonical manifest with SHA-256
`9fd062558f2284f770468dd44d7332ada976311b2c3167e19ab846325edbc163`, the
conditional external ownership-receipt design, the future WSL2 selection, and
the strict clean-`master` condition only. The implementation branch is not
authorized and does not exist. No implementation code, dependency installation,
Docker action, image pull, database connection, database read/write, runtime
operation, or evidence run is established by those decisions or this alignment.

## 8. Lifecycle Authority

The LS-1 policy-adoption prerequisite and blocker-resolution decision are
recorded. Phase 11 remains `HOLD` because:

1. current required `master` checks do not satisfy the selected strict clean-
   `master` condition;
2. the selected dedicated general-purpose WSL2 environment is not separately
   authorized, provisioned, or verified;
3. exact implementation/test file scope, branch authority, and dependency
   boundary are not recorded;
4. all LS-1 eligibility conditions have not yet been established for execution;
   and
5. the Project Owner has not recorded the separate current Phase 11 work-item
   decision.

Implementation-branch creation is not authorized and the candidate remains
`HOLD`. The approved receipt design also remains conditional on a future
owner-selected external path, permissions, and Phase 12 evidence controls.

Phase 12 Docker/database/runtime local-synthetic evidence collection remains
`HOLD` and requires a separate later Project Owner authorization. Phase 11 does
not authorize Phase 12.

## 9. Unverified Claims

The following remain unverified:

- that the historical Android/Termux runtime still exists or matches master;
- that all 51 historical metadata rows can be reproduced;
- that the six candidate rows can be cleanly seeded in a current local image;
- current Docker, OpenEMR, PHP, database-engine, or schema compatibility;
- exact absent/exact/conflict before-state in any future environment;
- parameterized transaction, idempotency, conflict, and rollback behavior;
- clean-install reproducibility;
- runtime rendering after a future seed;
- clinical completeness, usability, or clinical safety;
- RBAC, audit, backup, restore, security, privacy, pilot, deployment,
  production, or external-release readiness; and
- validation, compliance, regulatory, certification, legal, contractual, or
  independent-assurance status.

No stronger claim may be inferred from historical documentation or the proposed
LS-1 package.

## 10. Local-First Work-Item Control

`IMCORE-LS-001` is traceable through its candidate packet and `IM-0005` ledger
entry. A GitHub issue may be deferred only by an explicit Project Owner record
until the first implementation-publication checkpoint. The issue must exist
before the implementation branch is pushed or an implementation Pull Request
is opened. Untracked customization is prohibited.

## 11. Data, Clinical, Integration, and External Boundaries

Current and proposed LS-1 work permits no PHI, real patient data, de-identified
real data, patient/encounter records, clinical use, patient-care operation,
runtime AI/model/prompt/agent, operational API/FHIR integration, schema
migration, production security implementation, pilot, deployment, production,
or external release.

Qualified-human or external review remains required where applicable before
those activities and before clinical validation, compliance/regulatory,
cybersecurity/privacy certification, or legal/contractual claims or actions
requiring external authority.

## 12. Next Controlled Actions

1. Validate and open the authorized five-file blocker-decision documentation
   Pull Request; do not merge it under this task.
2. The Project Owner personally reviews that Pull Request and its current
   checks, then separately approves, requests revision, rejects, or merges it.
3. Separately authorize and complete the work needed to produce current passing
   strict clean-`master` evidence; do not treat existing failures as passes.
4. If still desired, separately authorize provisioning of the selected dedicated
   general-purpose WSL2 PHP/PHPUnit environment without Docker or database use.
5. After every recorded condition is satisfied, prepare the separate Phase 11
   work-item decision. Only that later decision may authorize the exact
   implementation branch and file scope.
6. Create the required GitHub issue before the implementation branch is pushed
   or its Pull Request is opened.
7. Obtain a separate Phase 12 owner decision before Docker, database, runtime,
   or local-synthetic execution/evidence activity.

## 13. Explicit Non-Claims

This project-state record does not claim implementation completion,
clean-install reproducibility, clinical validation, clinical-use authorization,
PHI authorization, privacy/security certification, regulatory approval,
compliance, production readiness, deployment approval, external-release
approval, legal approval, medical-device status, or independent assurance.
