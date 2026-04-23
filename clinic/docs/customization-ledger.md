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
