# Database Boundary and Migration Policy V0.1

This document is documentation-stage architecture planning guidance.

It does not modify runtime code, GitHub Actions workflows, npm dependencies, database schema, SQL files, migrations, clinical workflows, AI behavior, API behavior, FHIR behavior, frontend behavior, or OpenEMR core behavior.

## 1. Document Status

| Field | Value |
|---|---|
| Document | Database Boundary and Migration Policy V0.1 |
| Project | OpenEMR IM Core |
| Stage | Documentation-stage architecture planning |
| Scope | Database boundary and migration policy planning only |
| Runtime Status | No runtime implementation |
| Database Status | No SQL or database migration |
| API/FHIR Status | No API or FHIR implementation |
| AI Status | No AI implementation |
| Clinical Status | Not clinical validation evidence |
| Compliance Status | Not regulatory compliance evidence |
| Security Status | Not cybersecurity certification evidence |

Golden rule:

The system must support clinicians. It must not replace clinicians.

---

## 2. Purpose

This document defines the planned database boundary and migration policy for OpenEMR IM Core before any database implementation, schema change, SQL execution, migration, data storage, or persistence behavior is introduced.

The purpose is to prevent uncontrolled data model changes, unsafe migrations, PHI exposure, production database assumptions, or OpenEMR core-sensitive database changes before the required controls are defined.

---

## 3. Scope

This policy covers:

- Database boundary principles.
- Current database status.
- Future database implementation entry criteria.
- Data classification expectations.
- Migration planning expectations.
- Rollback expectations.
- Backup and restore expectations.
- Synthetic data boundary.
- PHI and real patient data prohibition.
- Audit and logging considerations.
- OpenEMR database sensitivity.
- Review and approval expectations.

---

## 4. Out of Scope

This document does not include:

- SQL execution.
- Database schema changes.
- Database migration files.
- Data storage implementation.
- Runtime persistence implementation.
- PHP runtime changes.
- JavaScript runtime changes.
- API/FHIR implementation.
- AI implementation.
- Frontend implementation.
- OpenEMR core-sensitive change.
- Production deployment.
- Clinical validation.
- Regulatory compliance claim.
- Cybersecurity certification claim.
- Commercial deployment claim.

---

## 5. Database Boundary Principle

A database boundary separates documentation-stage planning from any action that stores, modifies, migrates, reads, deletes, or exposes data.

For OpenEMR IM Core, no database-related implementation may begin until the project defines:

- Data classification.
- Storage purpose.
- Ownership.
- Access control assumptions.
- Audit expectations.
- Migration plan.
- Rollback plan.
- Backup/restore expectations.
- Test strategy.
- Privacy/security review.
- Risk traceability.
- Review approval.

This document defines the policy only. It does not implement database behavior.

---

## 6. Current Database Status

Current status:

- No IM Core database schema is implemented by this document.
- No SQL is introduced by this document.
- No migration is introduced by this document.
- No table, column, index, constraint, view, trigger, or stored procedure is introduced by this document.
- No OpenEMR production database assumption is authorized.
- No real patient data is authorized.

| Area | Status |
|---|---|
| SQL | Not implemented |
| Database migration | Not implemented |
| Runtime persistence | Not implemented |
| Real patient data use | Not authorized |
| PHI use | Not authorized |
| Backup/restore validation | Not implemented |
| Production database readiness | Not implemented |

---

## 7. Data Classification Rules

Before any future database work, data must be classified.

Minimum classifications:

| Classification | Meaning | Current Permission |
|---|---|---|
| Synthetic planning data | Fake data used for planning or documentation | Allowed with review |
| Synthetic test data | Fake test-only data | Future phase with test controls |
| De-identified example data | Data with identifiers removed and reviewed | Needs verification and governance approval |
| PHI | Protected health information | Not allowed |
| Real patient data | Any real patient information | Not allowed |
| Secrets | Tokens, passwords, API keys, private keys | Not allowed |
| Sensitive logs | Logs that may include identifiers or secrets | Not allowed |

This policy does not authorize PHI, real patient data, secrets, or database dumps.

---

## 8. Database Change Categories

Future database changes must be categorized before implementation.

Possible categories:

| Category | Example | Current Status |
|---|---|---|
| No database change | Documentation-only PR | Allowed if scope remains documentation-only |
| Read-only query planning | Candidate query documentation | Documentation-only |
| Local synthetic test storage | Existing-schema metadata rows only | LS-1 only after exact Phase 11 and separate Phase 12 owner decisions |
| New IM Core table | Project-owned table | Future phase |
| OpenEMR core table modification | Change to existing OpenEMR schema | High-risk future phase |
| Migration script | Schema/data migration | Future phase |
| Backup/restore control | Backup and recovery operation | Future phase |
| Audit logging storage | Audit persistence | Future phase |

No category is implemented by this document.

### 8.1 LS-1 Existing-Schema Metadata Exception

`POL-GOV-LS1-001` permits a database-capable work item only when every LS-1
condition and lifecycle decision is current. This is not a migration category.

For `IMCORE-LS-001`, the only future database boundary is:

- existing table `layout_group_properties`: exactly the layout row
  `(LBFim_followup_v1, empty group ID)` and Visit Context group row
  `(LBFim_followup_v1, 1)`;
- existing table `layout_options`: exactly the four declared Visit Context rows
  for `followup_reason`, `visit_type`, `main_complaint`, and
  `interval_history`; and
- no other table or row.

The complete row manifest, parameter-binding mechanism, transaction, exact-
match no-op, fail-closed conflict behavior, guarded rollback, tests, and
unrelated-row invariants must be owner-reviewed before database access.
`interval_history` is controlled as `data_type=2`, `max_length=200`,
`fld_rows=0`, single-line behavior for this slice.

Phase 11 may authorize preparation/implementation only. A separate Phase 12
Project Owner decision is required before Docker execution, database access,
writes, or local-synthetic runtime evidence. No patient or encounter record is
required or authorized. Any unresolved schema, table, row, value, environment,
or rollback condition is `HOLD`.

---

## 9. Migration Policy

No migration may be introduced without a dedicated implementation-phase PR.

A future migration PR must define:

- Migration purpose.
- Tables affected.
- Columns affected.
- Indexes affected.
- Constraints affected.
- Data transformation, if any.
- Compatibility assumptions.
- Upgrade behavior.
- Downgrade or rollback behavior.
- Backup expectation before migration.
- Test strategy.
- Risk and safety linkage.
- Security/privacy review.
- Review owner.

Migration PRs must not be mixed with unrelated documentation or runtime changes.

---

## 10. Rollback Policy

Every future database implementation or migration must define rollback expectations before merge.

Rollback planning should include:

- Whether rollback is possible.
- What files are reverted.
- What schema changes are reverted.
- What data changes are reversible.
- What backup is needed.
- What manual steps are required.
- What verification proves rollback worked.
- What risks remain after rollback.

If rollback is not possible, the PR must state that clearly and require additional review.

---

## 11. Backup and Restore Expectations

Before any database implementation involving persistent data, the project must define backup and restore expectations.

At minimum:

- What data is backed up.
- Backup frequency assumption.
- Restore process.
- Restore test method.
- Data integrity checks.
- Access control for backups.
- Encryption expectations where applicable.
- Retention expectations.
- Evidence of restore success.

This document does not prove backup or restore readiness.

---

## 12. OpenEMR Database Sensitivity

OpenEMR database changes are high-risk because they may affect:

- Patient records.
- Clinical workflows.
- Billing workflows.
- Scheduling.
- Audit logs.
- Access control.
- Reporting.
- Upgrade compatibility.
- Data integrity.
- Regulatory exposure.
- Clinical safety.

Any OpenEMR core database change must be treated as core-sensitive and requires explicit controlled review.

This document does not authorize OpenEMR core database changes.

---

## 13. Synthetic Data Boundary

Only synthetic data may be used in documentation-stage database planning.

Synthetic data must:

- Not identify real patients.
- Not be derived from real patient records.
- Not include real identifiers.
- Not include real contact details.
- Not include real insurance data.
- Not include real clinical notes.
- Not include real lab results.
- Not include secrets.
- Be clearly marked as synthetic.

Synthetic data does not prove clinical validation or production readiness.

---

## 14. PHI and Real Patient Data Prohibition

This project stage does not allow:

- PHI.
- Real patient data.
- Patient identifiers.
- Real clinical notes.
- Real lab data.
- Real prescriptions.
- Real billing data.
- Real appointment records.
- Production database dumps.
- Sensitive logs.
- Secrets or API keys.

If any such material is discovered, work must stop immediately and the incident must be handled according to repository governance and privacy/security rules.

---

## 15. Audit and Logging Expectations

Future database work may require audit logging.

Before implementation, reviewers should define:

- What events are audited.
- Who can access audit logs.
- Whether logs may contain sensitive data.
- How logs are protected.
- How logs are retained.
- How logs are reviewed.
- How logs are redacted for evidence.
- How audit evidence avoids PHI and secrets.

This document does not implement audit logging.

---

## 16. Security and Privacy Review Criteria

Before any database implementation, reviewers should confirm:

- No PHI is introduced without authorization.
- No real patient data is used.
- No secrets are committed.
- Access control assumptions are documented.
- Audit expectations are documented.
- Backup/restore expectations are documented.
- Data minimization is considered.
- Error logs do not expose sensitive data.
- Migration rollback is addressed.
- Risk and traceability links exist.

---

## 17. Database Implementation Entry Criteria

A future database implementation PR may only be considered after:

For eligible LS-1 work, `POL-GOV-LS1-001`, the exact work-item packet, and the
current Phase 11 decision provide the narrow entry path. A separate Phase 12
decision is required before database access or execution.

- Component Inventory identifies the candidate component.
- Trust Boundary Register identifies related boundaries.
- Runtime Boundary Specification defines runtime constraints.
- This Database Boundary and Migration Policy is approved for current stage.
- Risk review is completed.
- Security/privacy review is completed.
- Test strategy is defined.
- Rollback strategy is defined.
- No PHI, secrets, or real patient data are included.
- Scope is limited to one database objective.
- CI checks show 0 failing and 0 pending before merge.

---

## 18. Forbidden Database Actions in Documentation PRs

Documentation-only PRs must not modify:

- SQL files.
- Migration files.
- Database schema.
- Database seed data.
- Database dumps.
- Runtime persistence code.
- OpenEMR database code.
- Composer dependencies.
- npm dependencies.
- GitHub Actions workflows.
- Docker runtime behavior.

Any database implementation must be performed in a separate controlled
implementation-phase PR. The documentation/governance Pull Request that
establishes LS-1 must not contain that implementation.

---

## 19. Review Questions

Reviewers should ask:

- Does this change introduce SQL?
- Does this change introduce a migration?
- Does this change affect OpenEMR core schema?
- Does this change store or expose data?
- Does this change touch PHI or real patient data?
- Does this change require backup/restore?
- Does this change require audit logging?
- Does this change have rollback expectations?
- Does this change need security/privacy review?
- Does this change remain one PR / one scope?
- Does this change avoid unsupported readiness claims?

---

## 20. Relationship to Existing Documentation

This policy relates to:

- System Context Diagram Plan V0.1.
- Data Flow Diagram Level 0 Plan V0.1.
- Trust Boundary Register V0.1.
- Component Inventory V0.1.
- Runtime Boundary Specification V0.1.
- OpenEMR Integration Boundary Map V0.1.
- Risk Register V0.1.
- Clinical Safety Case V0.1.
- Threat Model and Data Governance V0.1.
- Security / Privacy / RBAC / Audit / Backup Gap Refinement V0.1.
- Documentation Index and Review Cadence V0.1.

---

## 21. Exit Criteria

This document is complete when it defines:

- Purpose.
- Scope.
- Non-scope.
- Database boundary principle.
- Current database status.
- Data classification rules.
- Database change categories.
- Migration policy.
- Rollback policy.
- Backup and restore expectations.
- OpenEMR database sensitivity.
- Synthetic data boundary.
- PHI and real patient data prohibition.
- Audit and logging expectations.
- Security/privacy review criteria.
- Database implementation entry criteria.
- Forbidden database actions in documentation PRs.
- Status and limitations.

---

## 22. After-Merge Action

After merge:

- Update master locally.
- Confirm working tree is clean.
- Confirm no open PRs remain.
- Confirm this document exists on master.
- Create a separate documentation-index update PR if needed.

Do not start database implementation from this document alone.

---

## 23. Status and Limitations

This document is planning-only.

It does not prove:

- Clinical safety.
- Clinical validation.
- Usability validation.
- Human factors validation.
- Regulatory compliance.
- Cybersecurity certification.
- Production readiness.
- Pilot readiness.
- Commercial readiness.

No runtime implementation.

No PHP runtime change.

No JavaScript runtime change.

No SQL.

No database migration.

No database schema change.

No PHI.

No real patient data.

No AI implementation.

No FHIR/API implementation.

No frontend implementation.

No OpenEMR core-sensitive change.
