# Internal Medicine Follow-Up V1 — Executable Seed Script Proposal Draft

## 1. Purpose

This document defines the proposal for a future executable seed script for recreating the Internal Medicine Follow-Up V1 LBF configuration.

This is a proposal document only.

This document does not include executable SQL.

This document does not execute SQL.

This document does not modify OpenEMR runtime configuration.

This document does not claim clean-install reproducibility.

This document does not claim production readiness.

## 2. Project Context

- Repository: DrMohammed2024/openemr-im-core
- Project: OpenEMR IM Core
- Base system: Controlled OpenEMR fork
- Clinical module: Internal Medicine Follow-Up V1
- Layout ID: `LBFim_followup_v1`
- Current implementation method: OpenEMR UI-based LBF configuration
- Current seed/script status: Proposal draft only
- Runtime modification: Not performed by this document
- SQL execution: Not performed by this document

## 3. Prior Completed Documentation Milestones

The following milestones exist before this proposal:

- Internal Medicine Follow-Up V1 final verification summary
- Internal Medicine Follow-Up V1 clinical review checklist
- Internal Medicine Follow-Up V1 seed/script conversion plan
- Internal Medicine Follow-Up V1 metadata export plan
- Internal Medicine Follow-Up V1 sanitized metadata export evidence
- Internal Medicine Follow-Up V1 metadata verification
- Internal Medicine Follow-Up V1 clean install validation plan
- Internal Medicine Follow-Up V1 seed script draft
- Internal Medicine Follow-Up V1 clean install validation evidence template
- Current project state updates through PR #50

## 4. Verified Metadata Baseline

The future executable seed script must reproduce this expected metadata baseline:

```text
form_id: LBFim_followup_v1
ROW_COUNT: 51
GROUP_COUNT: 9
GROUP_IDS: 1,2,3,4,5,6,7,8,9
FIELD_DISTRIBUTION: 4,7,7,5,6,6,4,7,5
METADATA_VERIFICATION_STATUS: PASS
```

## 5. Proposed Future Script Name

The future executable SQL script, if explicitly approved later, should use this file name:

```text
internal-medicine-follow-up-v1-seed.sql
```

Proposed future path:

```text
custom/im-core/lbf/scripts/internal-medicine-follow-up-v1-seed.sql
```

## 6. Proposal Scope

The future executable seed script should aim to recreate:

1. Internal Medicine Follow-Up V1 layout identity
2. The 9 clinical groups
3. The 51 expected metadata rows
4. The expected group order
5. The expected field distribution
6. Field labels, field types, and display sequence
7. Post-execution metadata verification queries

## 7. Out of Scope

This proposal does not include:

- executable SQL
- SQL execution
- runtime OpenEMR modification
- production deployment
- clinical validation
- clean-install reproducibility claim
- PHI
- real patient data
- credentials
- database dumps
- sensitive logs
- OpenEMR core-sensitive changes

## 8. Required Approval Before SQL Creation

Before creating the future `.sql` file, the project owner must explicitly approve:

- [ ] SQL file creation
- [ ] target environment
- [ ] non-production-only testing
- [ ] backup/rollback plan
- [ ] metadata table review
- [ ] conflict handling approach
- [ ] post-execution verification method

## 9. Required Approval Before SQL Execution

Before executing any SQL, the project owner must explicitly approve:

- [ ] SQL execution
- [ ] non-production target instance
- [ ] backup completed
- [ ] rollback method confirmed
- [ ] no PHI present
- [ ] no real patient data present
- [ ] no credentials committed
- [ ] no database dump committed
- [ ] no sensitive logs committed

## 10. Proposed Script Architecture

The future executable script should be structured as:

```text
1. Safety header
2. Environment warnings
3. Layout existence check
4. Conflict handling block
5. Group metadata insert/update logic
6. Field metadata insert/update logic
7. Ordering and display configuration
8. Verification queries
9. Rollback notes
10. Documentation references
```

## 11. Required Non-Destructive Defaults

The future executable script should be non-destructive by default.

It must not:

- delete unrelated layouts
- overwrite unrelated LBF forms
- modify unrelated OpenEMR tables
- assume production use
- silently replace existing clinical configuration
- include PHI
- include credentials
- include database dumps
- include sensitive logs

## 12. Conflict Handling Proposal

If `LBFim_followup_v1` already exists, the future script should not silently overwrite it.

The future script should use one of these controlled options:

- stop with a clear message
- skip existing entries
- update only matching known fields after explicit approval
- require manual review before execution

Final conflict handling must be selected before SQL creation.

## 13. Expected Clinical Groups

The future executable script must preserve these 9 groups:

1. Visit Context
2. Vital Signs Review
3. Chronic Conditions Review
4. Medication Review
5. Symptoms Review
6. Physical Exam Summary
7. Assessment
8. Plan
9. Patient Safety and Follow-up

## 14. Expected Field Distribution

| Group ID | Expected field count |
|---:|---:|
| 1 | 4 |
| 2 | 7 |
| 3 | 7 |
| 4 | 5 |
| 5 | 6 |
| 6 | 6 |
| 7 | 4 |
| 8 | 7 |
| 9 | 5 |

Total expected rows:

```text
51
```

## 15. Required Post-Execution Verification

If a future SQL script is created and executed in a controlled non-production environment, verification must confirm:

```text
form_id: LBFim_followup_v1
ROW_COUNT: 51
GROUP_COUNT: 9
GROUP_IDS: 1,2,3,4,5,6,7,8,9
FIELD_DISTRIBUTION: 4,7,7,5,6,6,4,7,5
METADATA_VERIFICATION_STATUS: PASS
```

Additional verification:

- [ ] Form visible in OpenEMR
- [ ] Layout ID present
- [ ] Encounter preview opens
- [ ] Groups display in expected order
- [ ] Fields render correctly
- [ ] No unrelated layout modified
- [ ] No PHI introduced
- [ ] No credentials committed
- [ ] No database dump committed
- [ ] Clean install validation evidence captured separately

## 16. Failure Handling

| Failure mode | Detection method | Immediate action | Recovery path | Escalation |
|---|---|---|---|---|
| SQL review fails | Manual review | Do not execute | Rewrite proposal/script | Project maintainer |
| Layout conflict exists | Pre-check | Stop execution | Decide skip/update/manual path | Project owner |
| Row count mismatch | Metadata verification | Do not claim success | Compare script against baseline | Project maintainer |
| Group count mismatch | Metadata verification | Do not claim success | Review group creation logic | Project maintainer |
| Field distribution mismatch | Metadata verification | Do not claim success | Review field mapping | Project maintainer |
| Encounter preview fails | UI check | Stop validation | Review LBF metadata | OpenEMR reviewer |
| PHI found in evidence | Privacy review | Remove immediately | Sanitize evidence | Privacy reviewer |
| SQL affects unrelated tables | Review/test failure | Block merge | Rewrite script | Technical reviewer |

## 17. Merge Criteria for This Proposal

This proposal may be merged only if:

- [ ] It remains documentation-only
- [ ] It contains no executable SQL
- [ ] It performs no SQL execution
- [ ] It performs no runtime modification
- [ ] It includes explicit non-claims
- [ ] It includes approval gates before SQL creation
- [ ] It includes approval gates before SQL execution
- [ ] It includes metadata baseline
- [ ] It includes failure handling
- [ ] It includes no PHI
- [ ] It includes no credentials
- [ ] It includes no database dumps
- [ ] It includes no sensitive logs

## 18. Explicit Non-Claims

This document does not claim:

- production readiness
- clinical validation
- legal approval
- regulatory compliance
- cybersecurity certification
- commercial deployment readiness
- clean-install reproducibility
- executable seed script completion
- SQL execution
- runtime OpenEMR modification
- OpenEMR core modification

## 19. Current Status

Current status:

```text
Executable seed script proposal drafted.
Executable SQL not yet created.
SQL execution not approved.
Runtime modification not approved.
Clean-install reproducibility not yet claimed.
Production readiness not claimed.
Clinical validation not claimed.
```

## 20. Recommended Next Stage After Merge

After this proposal is merged, the next controlled stage should be:

```text
Decision gate: approve or defer non-production SQL seed script draft creation
```

The project owner must explicitly decide whether to approve creation of a future non-production SQL seed script draft.

That future stage must remain non-production-only until separate execution approval and validation evidence exist.
