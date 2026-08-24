# Governance Review Checklist for Pull Requests V0.1

## AI-Assisted Solo-Owner Applicability

For work classified as eligible by the AI-Assisted Solo-Owner Governance Policy
V0.1, this checklist is completed through GPT multidisciplinary advisory review
and Project Owner evidence review. The Project Owner records the final
accountable internal decision.

The roles in Section 13 are advisory-domain coverage for eligible work; their
separate approvals are not mandatory internal merge gates. References to
required roles elsewhere in this checklist mean the Project Owner decision
record for eligible work, or the applicable specialist/external reviewer for
non-eligible work and triggered future/external gates. All stop boundaries and
passing-check requirements remain mandatory.

## 1. Document Status

Status: Draft for governance review.

Document type: Operational pull request governance checklist.

Scope: Documentation-only.

Current stage: Planning and governance only.

This checklist applies the Clinical AI Governance and Scientific Evaluation Framework V0.1 to pull request review.

This document does not introduce runtime code, AI implementation, prompt execution, model integration, API/FHIR implementation, SQL, database migration, database schema change, OpenEMR core-sensitive change, PHI, real patient data, production readiness, clinical validation, regulatory compliance, or cybersecurity certification.

---

## 2. Purpose

The purpose of this checklist is to provide a concise operational review tool for every pull request in OpenEMR IM Core.

It translates the Clinical AI Governance and Scientific Evaluation Framework V0.1 into a practical checklist that reviewers can use before merge.

This checklist helps determine whether a pull request should be classified as:

- GO.
- CONDITIONAL GO.
- NO-GO.
- DEFER.

This checklist is intended to prevent scope creep, unsupported medical claims, premature runtime implementation, premature AI implementation, PHI exposure, secrets exposure, uncontrolled API/FHIR changes, uncontrolled SQL/database changes, OpenEMR core-sensitive changes, ambiguous reviewer responsibility, unsafe clinical workflow assumptions, and unsupported readiness or compliance claims.

---

## 3. Scope

This checklist applies to pull requests involving:

- Documentation.
- Governance documents.
- Architecture documents.
- Clinical workflow specifications.
- Risk mappings.
- AI-assisted concept documents.
- Future prompt proposal documents.
- Future AI-output review proposal documents.
- Safety claims.
- Privacy claims.
- Readiness claims.
- Documentation index updates.
- Implementation proposal documents.

This checklist may also be used for future higher-risk PRs, but it does not authorize runtime implementation.

---

## 4. Out of Scope

This checklist does not create or authorize:

- Runtime behavior.
- AI implementation.
- Prompt execution.
- Model integration.
- Autonomous diagnosis.
- Autonomous prescribing.
- Autonomous triage.
- API/FHIR implementation.
- SQL.
- Database migration.
- Database schema change.
- OpenEMR core-sensitive change.
- Production deployment.
- Use with PHI.
- Use with real patient data.
- Clinical validation.
- Regulatory compliance.
- Cybersecurity certification.

This checklist is not a substitute for qualified clinical, technical, privacy, security, legal, or regulatory review.

---

## 5. Pre-Review Pull Request Scope Check

Before detailed review, confirm:

- [ ] PR title follows project naming style.
- [ ] PR has one clear purpose.
- [ ] PR scope is narrow.
- [ ] PR does not mix unrelated changes.
- [ ] PR description explains why the change is needed.
- [ ] PR description states whether the change is documentation-only.
- [ ] PR changed-files list has been reviewed.
- [ ] PR does not include temporary local files.
- [ ] PR does not include generated artifacts unless explicitly expected.
- [ ] PR does not include unrelated formatting changes.

If the PR mixes multiple scopes, classify as CONDITIONAL GO or NO-GO until split.

---

## 6. Documentation-Only Check

For documentation-only PRs, confirm:

- [ ] Only documentation files are changed.
- [ ] No runtime code is changed.
- [ ] No PHP runtime behavior is changed.
- [ ] No JavaScript runtime behavior is changed.
- [ ] No frontend implementation is changed.
- [ ] No backend implementation is changed.
- [ ] No GitHub Actions workflow is changed.
- [ ] No npm or package-lock file is changed.
- [ ] No composer dependency behavior is changed.
- [ ] No database, API, FHIR, AI, or OpenEMR core behavior is changed.

If a PR claims to be documentation-only but changes runtime behavior, classify as NO-GO.

---

## 7. PHI, Real Patient Data, and Secrets Check

Confirm the PR does not include:

- [ ] PHI.
- [ ] Real patient data.
- [ ] Patient identifiers.
- [ ] Real patient names.
- [ ] Dates of birth for real patients.
- [ ] Medical record numbers.
- [ ] Phone numbers.
- [ ] Addresses.
- [ ] Insurance identifiers.
- [ ] Production logs.
- [ ] Secrets.
- [ ] API keys.
- [ ] Tokens.
- [ ] Passwords.
- [ ] Credentials.
- [ ] Private certificates.
- [ ] Database dumps.
- [ ] Sensitive operational logs.

Any PHI, real patient data, secret, API key, credential, production log, or database dump is a NO-GO.

---

## 8. Runtime, API, FHIR, SQL, Database, and OpenEMR Core Check

Confirm the PR does not introduce unauthorized:

- [ ] Runtime behavior.
- [ ] PHP runtime code.
- [ ] JavaScript runtime code.
- [ ] Frontend behavior.
- [ ] Backend behavior.
- [ ] API implementation.
- [ ] FHIR implementation.
- [ ] SQL.
- [ ] Database migration.
- [ ] Database schema change.
- [ ] OpenEMR core-sensitive change.
- [ ] Configuration behavior change.
- [ ] Deployment behavior change.
- [ ] GitHub Actions workflow change.

If any such change is present, the PR must have an approved implementation gate. Without an approved gate, classify as NO-GO or DEFER.

---

## 9. AI, Prompt, and Model Integration Check

Confirm the PR does not introduce unauthorized:

- [ ] AI runtime behavior.
- [ ] AI model integration.
- [ ] Prompt execution.
- [ ] Automated AI output generation.
- [ ] AI output treated as final clinical documentation.
- [ ] Autonomous clinical reasoning.
- [ ] Autonomous diagnosis.
- [ ] Autonomous prescribing.
- [ ] Autonomous triage.
- [ ] AI behavior using PHI.
- [ ] AI behavior using real patient data.
- [ ] Claims that AI output is clinically validated.
- [ ] Claims that AI output is safe for real patient use.

Documentation-stage AI concepts are allowed only if they remain documentation-only, non-runtime, non-autonomous, human-supervised, draft-only when future AI output is discussed, and not authorized for clinical use.

Unauthorized AI behavior is NO-GO.

---

## 10. Clinical Safety Check

For clinical or workflow-related PRs, confirm:

- [ ] Clinical purpose is clear.
- [ ] Human responsibility boundary is explicit.
- [ ] Physician review checkpoint is defined when clinical content is involved.
- [ ] Red flags are considered when clinically relevant.
- [ ] Safety-netting is considered when clinically relevant.
- [ ] Escalation triggers are considered when clinically relevant.
- [ ] Follow-up and open-loop risks are considered.
- [ ] Medication safety risks are considered when relevant.
- [ ] Diagnostic risk is considered when relevant.
- [ ] Workflow does not imply autonomous clinical decision-making.
- [ ] Workflow does not remove clinician review.
- [ ] Workflow does not create false reassurance.
- [ ] Workflow does not claim clinical validation without evidence.

Missing clinical safety boundaries may require CONDITIONAL GO or NO-GO.

---

## 11. Evidence and Readiness Claim Check

Confirm the PR avoids unsupported claims of:

- [ ] Clinical validation.
- [ ] Production readiness.
- [ ] Regulatory compliance.
- [ ] Cybersecurity certification.
- [ ] AI safety.
- [ ] FHIR readiness.
- [ ] API readiness.
- [ ] Interoperability readiness.
- [ ] Commercial readiness.
- [ ] Legal readiness.
- [ ] Performance readiness.
- [ ] Safety for real patient use.

Confirm:

- [ ] Uncertainty is labeled when needed.
- [ ] Local policy dependency is marked when relevant.
- [ ] Project-stage limitations are explicit.
- [ ] Documentation-stage scope is clear.
- [ ] Future implementation is not described as current capability.

Unsupported readiness, validation, compliance, or certification claims are NO-GO until corrected.

---

## 12. Traceability Check

Confirm the PR identifies or supports:

- [ ] Related document title.
- [ ] Related file path.
- [ ] Related PR number when available.
- [ ] Related governance document when applicable.
- [ ] Related boundary document when applicable.
- [ ] Related risk document when applicable.
- [ ] Reviewer roles.
- [ ] Acceptance criteria.
- [ ] After-merge action.
- [ ] Documentation index follow-up when applicable.

Missing traceability may require CONDITIONAL GO.

---

## 13. Reviewer Roles Check

Assign reviewer roles based on PR type.

Recommended roles:

- [ ] Documentation Owner.
- [ ] Technical Owner.
- [ ] Governance Owner.
- [ ] Architecture Reviewer.
- [ ] Privacy-Security Owner.
- [ ] Clinical Safety Owner.
- [ ] Internal Medicine Clinical Reviewer.
- [ ] AI Governance Owner.
- [ ] Risk Owner.
- [ ] Operations Owner.

Role guidance:

- Documentation-only index update: Documentation Owner and Governance Owner.
- Architecture or boundary document: Technical Owner, Architecture Reviewer, Governance Owner.
- Clinical workflow document: Internal Medicine Clinical Reviewer and Clinical Safety Owner.
- Risk mapping document: Risk Owner, Clinical Safety Owner, Privacy-Security Owner.
- AI-related concept: AI Governance Owner, Clinical Safety Owner, Privacy-Security Owner.
- Runtime proposal: Technical Owner, Architecture Reviewer, Governance Owner, and approved implementation gate.

One person may cover more than one role, but the roles must remain explicit.

---

## 14. Decision Model

Each PR should receive one decision.

### GO

Use GO when:

- [ ] PR scope is clear.
- [ ] No NO-GO rule is triggered.
- [ ] Required reviewer roles are identified.
- [ ] Claims are controlled.
- [ ] Documentation-only scope is preserved when claimed.
- [ ] Traceability is sufficient.
- [ ] GitHub checks show 0 failing and 0 pending.

### CONDITIONAL GO

Use CONDITIONAL GO when the PR is acceptable only after specific corrections.

Examples:

- Missing limitation statement.
- Missing reviewer role.
- Missing traceability link.
- Ambiguous AI language.
- Unsupported claim that can be removed.
- Missing privacy note.
- Missing after-merge action.
- Minor documentation structure issue.

Do not merge until corrections are completed.

### NO-GO

Use NO-GO when the PR triggers a stop rule.

Examples:

- PHI or real patient data.
- Secrets or API keys.
- Runtime implementation without approved gate.
- AI model integration.
- Prompt execution.
- Autonomous diagnosis, prescribing, or triage.
- SQL or database migration without approved gate.
- API/FHIR implementation without approved gate.
- OpenEMR core-sensitive change without approved gate.
- Unsupported clinical-validation or production-readiness claim.

Do not merge until corrected and re-reviewed.

### DEFER

Use DEFER when the idea may be appropriate later but is not ready for the current phase.

Examples:

- Runtime sandbox planning before governance prerequisites.
- Prompt execution planning before prompt governance.
- API/FHIR implementation planning before approved implementation gate.
- Medication workflow automation before safety controls are mature.

---

## 15. NO-GO Stop Rules

A PR is NO-GO if it includes or enables any of the following without explicit approved governance authorization:

1. PHI.
2. Real patient data.
3. Patient identifiers.
4. Secrets.
5. API keys.
6. Tokens.
7. Passwords.
8. Credentials.
9. Production logs with sensitive data.
10. Database dumps.
11. Autonomous diagnosis.
12. Autonomous prescribing.
13. Autonomous triage.
14. AI output treated as final clinical documentation.
15. AI output used without physician review.
16. Runtime code without approved implementation gate.
17. Prompt execution.
18. Model integration.
19. API/FHIR implementation.
20. SQL.
21. Database migration.
22. Database schema change.
23. OpenEMR core-sensitive change.
24. Unsupported production-readiness claim.
25. Unsupported clinical-validation claim.
26. Unsupported regulatory-compliance claim.
27. Unsupported cybersecurity-certification claim.
28. Unsupported AI-safe claim.
29. Missing physician review boundary for clinical content.
30. Missing privacy/security review for sensitive work.
31. Unclear responsibility boundary for clinical decisions.
32. Patient-facing medical advice without approved governance.
33. Use of a governance document as authorization for clinical use.

A high reviewer confidence score must not override a NO-GO stop rule.

---

## 16. Merge Criteria

Before merge, confirm:

- [ ] PR scope remains unchanged.
- [ ] Changed files match PR scope.
- [ ] Temporary local files are not committed.
- [ ] PR body clearly states scope and safety notes.
- [ ] Required reviewer roles are listed.
- [ ] Documentation-only PRs change documentation only.
- [ ] No PHI, real patient data, or secrets are present.
- [ ] No runtime code is introduced unless approved.
- [ ] No AI implementation is introduced unless approved.
- [ ] No prompt execution is introduced unless approved.
- [ ] No model integration is introduced unless approved.
- [ ] No API/FHIR implementation is introduced unless approved.
- [ ] No SQL or database migration is introduced unless approved.
- [ ] No OpenEMR core-sensitive change is introduced unless approved.
- [ ] No unsupported readiness, validation, compliance, or certification claims are present.
- [ ] GitHub checks show 0 failing.
- [ ] GitHub checks show 0 pending.
- [ ] Skipped checks, if any, are expected and non-blocking.

Do not merge with failing or pending checks.

---

## 17. After-Merge Verification

After merge, confirm:

- [ ] Switched to master.
- [ ] Pulled latest master with fast-forward only.
- [ ] Working tree is clean.
- [ ] No open PR remains unless intentionally expected.
- [ ] Added or updated document exists on master.
- [ ] Documentation index follow-up is created when required.
- [ ] Temporary PR body files are removed locally.
- [ ] Remote branch was deleted if expected.
- [ ] Local branch was deleted if expected.

Recommended commands:

    git switch master
    git pull --ff-only origin master
    git status --short
    gh pr list --state open

For file existence:

    test -f PATH_TO_EXPECTED_FILE && echo "expected file exists on master"

For index verification:

    grep -n "DOCUMENT_TITLE_OR_PATH" custom/im-core/docs/index/documentation-index-and-review-cadence-v0.1.md

---

## 18. Relationship to Existing Documents

This checklist operationalizes:

- Clinical AI Governance and Scientific Evaluation Framework V0.1.
- Documentation Index and Review Cadence V0.1.
- Runtime Boundary Specification V0.1.
- Database Boundary and Migration Policy V0.1.
- API/FHIR Boundary Specification V0.1.
- AI Clinical Support Boundary Specification V0.1.
- Internal Medicine Workflow Specification Template V0.1.
- Internal Medicine Visit Documentation Workflow V0.1.
- Workflow Risk Mapping for Internal Medicine Visit Documentation V0.1.

This checklist does not replace those documents.

It provides a practical review layer for PR execution.

---

## 19. Status and Limitations

This checklist is a documentation-stage governance tool.

It is not:

- Runtime code.
- AI implementation.
- Prompt execution.
- Model integration.
- Clinical decision support.
- Clinical validation evidence.
- Regulatory compliance evidence.
- Cybersecurity certification evidence.
- Production readiness evidence.
- Authorization for real patient data.
- Authorization for clinical use.

This checklist supports safer project governance but does not prove that the project is clinically validated, production-ready, regulatory compliant, cybersecurity certified, or safe for use with real patients.
