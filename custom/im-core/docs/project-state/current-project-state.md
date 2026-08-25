# OpenEMR IM Core — Current Project State

## 1. Record Control

- Project: OpenEMR IM Core
- Repository: `DrMohammed2024/openemr-im-core`
- Record date: 2026-08-25
- Controlled baseline branch: `master`
- Controlled baseline SHA:
  `76548a0f714177cde38d4d1201aa6095bcba0dfd`
- Source-of-truth role: current repository and governance state
- Runtime effect: none
- Clinical-use authorization: none

This record distinguishes repository-verified state, historical off-repository
manual-runtime attestations, proposed work, unverified claims, and future work.
A statement in a historical artifact does not become a current verified fact
merely because the artifact is tracked.

## 2. Controlled Repository State

The baseline was verified before this documentation alignment:

- local `master`, local `origin/master`, and live remote `master` matched the
  controlled SHA;
- the working tree was clean;
- `core.ignorecase=false`;
- directory case sensitivity was enabled;
- PR #267 was merged as the controlled baseline and adoption/reconfirmation
  evidence remained present; and
- PR #265 remained open, unmerged, excluded, and unchanged by this work.

PR/check status is point-in-time evidence and must be refreshed before a later
decision or merge.

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
`POL-GOV-LS1-001-ADOPTION-001` and PR #267, merged at the controlled SHA. The
Project Owner reconfirmed that adoption with limitations under
`POL-GOV-LS1-001-ADOPTION-001-RECONFIRMATION-001`.

### Post-Merge Workflow Limitations

- Whitespace run `32788377634` failed on unrelated inherited trailing
  whitespace in `CUSTOMIZATION_POLICY.md` and `README.md`; neither file was
  changed by PR #267.
- Test All Configurations run `32788377823` remains failed with 169 successful
  and two unresolved failed E2E jobs. No successful rerun exists.
- Scheduled run `32832190339` remains failed with 160 successful, two failed,
  and one skipped job. Its MySQL setup failure is external or environmental
  with the precise cascading cause partly unverified; its MariaDB E2E failure
  remains unresolved.

These failures are not established as caused by PR #267's 12-file
Markdown-only scope. They remain failed or unresolved and are not passing
runtime, verification, validation, readiness, compliance, certification, or
clinical evidence. Documentation alignment is conditionally authorized;
whitespace repair and CI investigation remain separate work items. Merge is
not authorized.

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

Policy adoption and reconfirmation identify the governing category but do not
authorize or begin this candidate. The implementation branch is not authorized
and does not exist. No implementation code, Docker action, image pull, database
connection, database read/write, runtime operation, or evidence run is
established by the policy or this alignment.

## 8. Lifecycle Authority

The LS-1 policy-adoption prerequisite is satisfied. Phase 11 remains `HOLD`
and may be authorized only for the exact `IMCORE-LS-001` preparation and
implementation scope after both remaining conditions are satisfied:

1. LS-1 eligibility is completely established; and
2. the Project Owner records a current Phase 11 work-item decision.

The work-item decision is not recorded, implementation-branch creation is not
authorized, and the candidate remains `HOLD`.

Phase 12 Docker/database/runtime local-synthetic evidence collection requires a
separate later Project Owner authorization. Phase 11 does not authorize Phase
12.

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

1. Validate and open the conditionally authorized documentation-alignment Pull
   Request; do not merge it under this authorization.
2. Project Owner personally reviews that Pull Request and current checks.
3. Separately prepare a Phase 11 work-item decision if the Project Owner elects
   to consider `IMCORE-LS-001`.
4. Only after a Phase 11 approval, create the proposed implementation branch.
5. Create the required GitHub issue before the implementation branch is pushed
   or its Pull Request is opened.
6. Obtain a separate Phase 12 owner decision before Docker, database, runtime,
   or local-synthetic evidence activity.

## 13. Explicit Non-Claims

This project-state record does not claim implementation completion,
clean-install reproducibility, clinical validation, clinical-use authorization,
PHI authorization, privacy/security certification, regulatory approval,
compliance, production readiness, deployment approval, external-release
approval, legal approval, medical-device status, or independent assurance.
