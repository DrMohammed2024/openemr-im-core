# Customization Ledger

This file is the authoritative registry for non-trivial customization decisions in `openemr-im-core`.

## Status Key

- Proposed
- Approved
- In Progress
- Implemented
- Deferred
- Rejected
- Needs Verification

---

## Entry Template

### Customization ID
`IM-XXXX`

### Title
[Short descriptive title]

### Status
[Proposed / Approved / In Progress / Implemented / Deferred / Rejected / Needs Verification]

### Category
[Documentation / Governance / Configuration / Extension / Module / UI / Core Patch / Verification / Upstream Sync]

### Objective
[What this customization is trying to achieve]

### Why Upstream Is Insufficient
[Why standard upstream behavior is not enough]

### Affected Paths
- `path/example`

### Risk Level
[Low / Medium / High]

### Upstream Compatibility Impact
[Low / Medium / High / Unknown]

### Validation Requirement
[What must be checked before trusting or merging this]

### Rollback Note
[How this would be reversed or contained]

### Related Issue
[#issue-number or link]

### Related Pull Request
[#pr-number or link]

### Notes
[Optional notes]

---

## Seed Entries

### Customization ID
`IM-0001`

### Title
Repository governance foundation

### Status
Approved

### Category
Governance

### Objective
Establish repository-level governance files, contribution discipline, and customization traceability before deeper implementation work.

### Why Upstream Is Insufficient
The upstream repository does not define this clinic-specific governance model.

### Affected Paths
- `README.md`
- `CUSTOMIZATION_POLICY.md`
- `UPSTREAM_SYNC_POLICY.md`
- `ARCHITECTURE.md`
- `clinic/docs/customization-ledger.md`
- `.github/`

### Risk Level
Low

### Upstream Compatibility Impact
Low

### Validation Requirement
Review file clarity, consistency, and repository discoverability.

### Rollback Note
Governance files can be revised without affecting clinical runtime behavior.

### Related Issue
[add issue link]

### Related Pull Request
[add PR link]

### Notes
This is the governance bootstrap entry.

---

### Customization ID
`IM-0002`

### Title
Structured Internal Medicine documentation foundation

### Status
Proposed

### Category
Documentation

### Objective
Define the first Internal Medicine-oriented workflow/documentation customization layer.

### Why Upstream Is Insufficient
Generic upstream structure does not yet reflect the clinic’s specific Internal Medicine documentation workflow goals.

### Affected Paths
- `clinic/`
- `custom/` (future, if required)
- `modules/` (future, if required)

### Risk Level
Medium

### Upstream Compatibility Impact
Low to Medium

### Validation Requirement
Confirm scope, intended workflow, and whether this can remain outside core.

### Rollback Note
Keep initial work documentation-first until architecture is confirmed.

### Related Issue
[add issue link]

### Related Pull Request
[add PR link]

### Notes
Do not escalate to deep implementation before upstream sync and validation discipline are established.
---

### Customization ID
`IM-0004`

### Title
Project-specific CI guardrails

### Status
Proposed

### Category
Governance / Verification

### Objective
Add project-specific CI guardrails for customization traceability and risky-pattern scanning.

### Why Upstream Is Insufficient
The inherited upstream CI does not by itself enforce this repository's local customization governance requirements.

### Affected Paths
- `.github/workflows/customization-guard.yml`
- `.github/workflows/secret-and-logging-guard.yml`
- `.github/PULL_REQUEST_TEMPLATE.md`
- `clinic/docs/customization-ledger.md`

### Risk Level
Medium

### Upstream Compatibility Impact
Low

### Validation Requirement
Confirm that pull requests touching local/customized paths are subject to guard workflows and repository-specific review metadata.

### Rollback Note
Remove the added workflows and PR-template metadata if this guardrail model is replaced.

### Related Issue
[add issue link]

### Related Pull Request
[add PR link]

### Notes
This entry tracks the introduction of repository-specific CI governance beyond inherited upstream workflows.

---

### Customization ID
`IM-0005`

### Title
Reproducible Local-Synthetic Visit Context LBF Seed

### Status
Proposed

### Category
Configuration / Verification

### Objective
Prepare a bounded, reproducible local-synthetic seed for
`LBFim_followup_v1` group `1` / Visit Context under work item
`IMCORE-LS-001`.

### Why Upstream Is Insufficient
The IM Core Visit Context configuration is a project-specific LBF
customization. Repository history contains manual off-repository runtime
attestations but no executable, cleanly reproducible seed on `master`.

### Affected Paths
- Proposed one-file implementation under
  `custom/im-core/lbf/scripts/`; exact path requires the Phase 11 owner decision.
- Proposed isolated tests; exact paths require the Phase 11 owner decision.
- `custom/im-core/docs/governance/imcore-ls-001-local-synthetic-authorization-packet-v0.1.md`
- Directly related evidence/state updates only.

### Risk Level
Medium

### Upstream Compatibility Impact
Low, subject to current-schema verification before Phase 12.

### Validation Requirement
Establish all LS-1 eligibility conditions and verify parameterized
transactional writes, exact-match idempotency, fail-closed conflicts, guarded
rollback, the exact six-row boundary, unrelated-row invariants, no schema
change, no patient/encounter record, and isolated disposable Docker resources.
Docker/database/runtime tests require separate Phase 12 owner authorization.

### Rollback Note
The future implementation must roll back the active transaction on failure.
Post-commit rollback may remove only rows proven to have been inserted by this
work item and still exactly matching its manifest. Ambiguity is `HOLD`.

### Related Issue
Deferred under proposed owner-controlled local-first control. A GitHub issue
must exist before the implementation branch is pushed or an implementation
Pull Request is opened.

### Related Pull Request

Policy adoption PR #267 was merged to `master` at
`76548a0f714177cde38d4d1201aa6095bcba0dfd`. Adoption was reconfirmed with
limitations under `POL-GOV-LS1-001-ADOPTION-001-RECONFIRMATION-001`.
Implementation Pull Request: not created.

### Notes

Reserved/proposed future work item; current state `HOLD`. Its governing policy
is adopted and active, but Phase 11 implementation and local branch creation
are not authorized. A related GitHub issue is required before any future
implementation branch is pushed or its Pull Request is opened. Phase 12 remains
separately gated. The disclosed failed and unresolved workflows are not passing
runtime or validation evidence and remain separate corrective work.

No executable implementation, runtime or database evidence, Docker execution,
database write, clinical use, deployment, validation, compliance,
certification, or production-readiness claim is recorded by this entry.
