# AI-Assisted Solo-Owner Governance Policy V0.1

## 1. Document Control

- Policy ID: `POL-GOV-AISO-001`
- Project: OpenEMR IM Core
- Version: V0.1
- Policy owner: Project Owner
- Governance model: AI-ASSISTED SOLO-OWNER GOVERNANCE
- Internal review model:
  `GPT_MULTIDISCIPLINARY_ADVISORY_REVIEW` +
  `PROJECT_OWNER_FINAL_ACCOUNTABLE_DECISION`
- Scope: eligible documentation-stage/pre-runtime work and separately
  owner-authorized LS-1 bounded local-synthetic engineering
- Independence: AI-assisted and non-independent
- Status: OWNER-ADOPTED INTERNAL GOVERNANCE — AI-ASSISTED,
  NON-INDEPENDENT, DOCUMENTATION/PRE-RUNTIME SCOPE
- Adoption control: effective only after the Project Owner records adoption and
  the policy is merged to the controlled base branch; until then it is a
  proposed amendment
- Runtime effect: none
- Clinical-use authorization: none
- PHI or real-patient-data authorization: none

This policy is the authoritative source for determining whether a change is
eligible for the AI-Assisted Solo-Owner model and which internal review and
decision path applies to that eligible change.

For eligible work only, this policy supersedes statements in earlier
current-stage governance documents that make separate specialist-human
approvals mandatory internal merge gates. It does not supersede no-PHI,
no-secrets, non-runtime, evidence, claim-control, test, lifecycle, external
release, legal, regulatory, contractual, certification, or qualified-human
review obligations. An unresolved material source-of-truth conflict is HOLD.

The LS-1 — Bounded Local-Synthetic Engineering Policy V0.1 is the
authoritative classifier and boundary control for that category. LS-1 uses the
same internal review model and non-independence disclosure. This policy alone
does not authorize an LS-1 work item, implementation, Docker execution, or
database write; the LS-1 policy and a current Project Owner work-item decision
must also apply. Until the LS-1 amendment is owner-adopted and merged, it is a
proposal only.

## 2. Purpose and Non-Authorization Boundary

The purpose of this policy is to permit narrow documentation-stage and
pre-runtime changes to receive multidisciplinary GPT advisory analysis and a
single final accountable internal decision from the Project Owner.

This policy does not authorize:

- clinical use or clinical decision support execution;
- PHI or real patient data processing;
- runtime code or runtime behavior;
- AI model, prompt, or autonomous agent execution;
- API or FHIR operation;
- SQL, database schema changes, or database migrations;
- production security-control implementation;
- a pilot, deployment, production use, or external release;
- phase transition or lifecycle authorization;
- clinical validation, regulatory approval, compliance, certification,
  production readiness, or independent assurance.

This internal governance model does not waive applicable law, contract,
certification rules, regulatory requirements, organizational duties, or any
other external obligation.

## 3. Active Internal Actors

### 3.1 GPT — Multidisciplinary Advisory Reviewer

GPT may act as:

- multidisciplinary advisory reviewer;
- repository and evidence analyst;
- technical and documentation reviewer;
- risk and evidence mapper;
- clinical-boundary reviewer;
- privacy-security boundary reviewer;
- regulatory-claims reviewer;
- AI-governance reviewer; and
- test and consistency reviewer.

GPT is not:

- a legal person;
- an independent human reviewer;
- a licensed professional;
- an external certification authority;
- a regulatory authority;
- a risk-acceptance authority; or
- the final accountable project decision-maker.

GPT findings are advisory. GPT must distinguish repository-verified facts,
external or user-provided information, inferences, assumptions, unknowns, and
evidence still needed. GPT must not invent repository state, test results,
professional review, approval, validation, compliance, or certification.

### 3.2 Project Owner — Final Accountable Internal Decision-Maker

For eligible work, the Project Owner:

- reviews the underlying evidence;
- reviews GPT findings;
- accepts, edits, rejects, or overrides GPT recommendations;
- records the decision rationale; and
- makes the final internal accountable decision.

The Project Owner may also be the author. That relationship must be disclosed
and must not be described as independent review. The Project Owner may consult
specialists voluntarily, but separate specialist-human approvals are not
mandatory internal merge gates for eligible work.

The Project Owner may not use this policy to claim specialist qualifications,
independent assurance, or authority granted only by law, contract, regulator,
certification body, licensed professional, organization, or external party.

## 4. Eligible Work Classification

The model may be used only when evidence establishes every condition below:

- the change is documentation-stage or pre-runtime;
- the purpose is narrow and coherent;
- no executable runtime behavior is introduced;
- no executable dependency is introduced;
- no model or prompt execution is introduced;
- no autonomous agent operation is introduced;
- no API or FHIR runtime integration is introduced;
- no SQL or database migration is introduced;
- no production security-control implementation is introduced;
- no PHI or real patient data is present;
- no secrets or credentials are present;
- no clinical-use authorization is granted;
- no pilot, deployment, or production authorization is granted;
- no compliance, certification, or regulatory approval is claimed; and
- no independent-assurance claim is made.

### 4.1 LS-1 Eligible Work

Executable or database-capable work is eligible under this internal review
model only when `POL-GOV-LS1-001` applies and evidence establishes every LS-1
condition, including the local-only and synthetic-only boundaries, no patient
or encounter record, exact table/row scope, no migration or new dependency,
parameterized transactional writes, fail-closed conflicts, exact-match
idempotency, guarded rollback, objective tests, separate lifecycle authority,
and preserved external gates.

Separate specialist-human approvals are not mandatory internal execution or
merge gates for eligible LS-1 work. The Project Owner must personally review
the work-item evidence and record the final accountable internal decision.

AI assistance for repository authoring and advisory review does not authorize
execution of an OpenEMR IM Core AI/model/prompt/agent capability. Unresolved
LS-1 eligibility is `HOLD`.

Eligibility is evidence-based, not extension-based. Markdown and other prose
documents are not automatically eligible merely because they look like
documentation.

Machine-readable YAML, JSON, JSON Schema, configuration-like examples, and
dependency placeholder files are eligible only when repository evidence
confirms that they are non-executable, non-integrated documentation artifacts
and cannot activate runtime behavior in the current repository state. If that
cannot be established, the decision is HOLD.

## 5. Required Internal Review Model

For eligible work, the required internal review model is:

    GPT_MULTIDISCIPLINARY_ADVISORY_REVIEW
    +
    PROJECT_OWNER_FINAL_ACCOUNTABLE_DECISION

Separate approvals from nine or any other number of different human specialist
roles are not mandatory internal merge gates for eligible work. Existing role
matrices remain useful advisory-domain maps and remain future-gated controls
for non-eligible, externally constrained, runtime, clinical, PHI, deployment,
release, validation, compliance, certification, and regulatory work.

The review must not be represented as independent human review. Passing tests,
automated checks, or GPT analysis do not themselves constitute the Project
Owner decision.

## 6. Mandatory GPT Advisory Review

Before the Project Owner decides, GPT must review and record, as applicable:

- repository, branch, base, head, and changed-file evidence;
- classification of every changed artifact as executable, non-executable, or
  unresolved;
- source-of-truth and duplicate-policy conflicts;
- runtime, dependency, AI/model/prompt/agent, API/FHIR, SQL/database, and
  production-security boundaries;
- PHI, real-patient-data, secrets, and credentials indicators without
  reproducing suspected sensitive values;
- clinical-use and clinical-claims boundaries;
- privacy-security, regulatory-claims, compliance, certification, and
  independence boundaries;
- risk, evidence, traceability, and unresolved limitations;
- applicable repository tests, workflows, and consistency checks; and
- blocking and non-blocking findings.

Suspected PHI, real patient data, secrets, or credentials must not be submitted
to GPT for inspection or sanitization. The work must stop and follow the
applicable incident or remediation process.

## 7. Mandatory Project Owner Decision Record

Every decision under this model must record all of the following:

- **Decision-record identifier:** stable unique identifier.
- **Decision date:** date of the final decision.
- **Project Owner name or identifier:** accountable human decision-maker.
- **Reviewed artifact or Pull Request:** exact title, identifier, and link or
  path.
- **Base branch and base SHA:** exact reviewed base.
- **Head branch and head SHA:** exact reviewed head.
- **Exact changed-file scope:** complete reviewed file list.
- **Artifact classification:** documentation/pre-runtime eligibility analysis
  for every artifact type.
- **Evidence reviewed by GPT:** repository, diff, tests, workflows, searches,
  and other reviewed evidence.
- **Evidence personally reviewed by the Project Owner:** evidence the owner
  directly inspected.
- **Test and workflow results:** command/check names, status, and limitations.
- **Identified blocking issues:** open or resolved blocking findings.
- **Identified non-blocking issues:** advisory findings and disposition.
- **Unresolved limitations:** known uncertainty, missing evidence, or scope
  limits.
- **AI-assisted review disclosure:** required disclosure in Section 8.
- **Author-owner-reviewer relationship:** whether the Project Owner also
  authored or otherwise participated in the change.
- **Non-independence disclosure:** explicit statement that the review is
  non-independent.
- **Conflicts of interest:** known conflicts or "None identified," with
  rationale where needed.
- **Decision rationale:** evidence-based reason for the decision.
- **Final decision:** one allowed value.
- **Conditions and follow-up actions:** owners, due points, and merge relevance.
- **Decision invalidation triggers:** events requiring a new review and
  decision.

Allowed final decision values are:

- APPROVE
- APPROVE_WITH_CONDITIONS
- HOLD
- REJECT

APPROVE_WITH_CONDITIONS may permit merge only when the record explicitly states
which conditions may remain after merge. A condition required for eligibility,
safety, privacy, scope, source-of-truth integrity, or passing required checks
must be resolved before merge.

A decision becomes invalid when the base or head changes materially, the exact
changed-file scope changes, eligibility evidence changes, a required check
fails or becomes pending, a source-of-truth conflict is discovered, a
prohibited boundary is crossed, or an external obligation is identified.

## 8. Mandatory Disclosure

Every qualifying owner review must include the following or substantially
equivalent language:

> This is an AI-assisted, non-independent Project Owner review.
>
> GPT performed multidisciplinary advisory analysis. The Project Owner
> reviewed the available evidence and made the final internal decision.
>
> No independent assurance, specialist-human approval, clinical validation,
> privacy-security certification, regulatory approval, compliance
> determination, production-readiness determination, or clinical-use
> authorization is claimed.
>
> No PHI or real patient data is authorized.
>
> No runtime, AI-model, prompt, API/FHIR, SQL, database, pilot, deployment,
> production, compliance, or certification activity is authorized by this
> decision.

## 9. Prohibited Claims

The following claims must not be made solely on the basis of this model:

- Independently reviewed.
- Independently assured.
- Clinically validated.
- Clinically approved.
- Safe for clinical use.
- Approved for real patient data.
- Fit for PHI.
- Regulatory approved.
- Regulatory compliant.
- Legally approved.
- Cybersecurity certified.
- Privacy certified.
- Production ready.
- Deployment approved.
- Independently accepted risk.
- Independently verified evidence.
- Medical-device approved or cleared.

## 10. Automatic HOLD and Escalation

The decision must be HOLD if any of the following is found:

- runtime or executable behavior outside a current, exact LS-1 Phase 11 or
  separately required Phase 12 authorization;
- executable AI, model, or prompt integration;
- autonomous agent operation;
- clinical decision-support execution;
- PHI or real patient data;
- credentials or secrets;
- security-sensitive production implementation;
- operational API or FHIR integration;
- SQL/database work outside current LS-1 table/row/write authority, or any
  database migration;
- pilot, deployment, production, or external release activity;
- a validation, compliance, certification, or regulatory claim;
- an applicable external obligation requiring qualified human review;
- insufficient evidence to classify the work as eligible documentation/
  pre-runtime work or eligible LS-1 work; or
- an unresolved material source-of-truth conflict.

HOLD may be cleared only by removing the triggering scope or by completing the
separate authorized review or external gate. This policy cannot waive or
self-satisfy that gate.

## 11. Future External and Qualified-Human Gates

External or qualified-human review remains a future gate where applicable
before:

- real clinical use;
- PHI or patient-data processing;
- AI model or prompt execution in a clinical workflow;
- autonomous tool execution;
- security-sensitive production implementation;
- operational FHIR or API integration;
- production database migrations;
- pilot deployment;
- production deployment;
- external commercial release;
- formal clinical validation claims;
- regulatory or medical-device claims;
- compliance claims; or
- cybersecurity or privacy certification.

These future gates do not block eligible internal documentation-stage work
unless the documentation itself crosses one of those boundaries or an
applicable external obligation makes qualified-human review a present gate.

## 12. Relationship to Existing Governance

Existing governance artifacts retain the following roles:

- safety, privacy, no-PHI, no-secrets, runtime, API/FHIR, database, AI, and
  claims policies continue to define domain boundaries;
- the Formal Reviewer Approval Matrix maps specialist domains and applies as a
  mandatory gate only to non-eligible work or a triggered future/external gate;
- the Formal Reviewer Approval Record Template remains available for a
  specialist or external review when one is required or voluntarily obtained;
- PR, evidence, risk, traceability, lifecycle, and merge-readiness controls
  continue to require complete evidence and passing checks; and
- the Project Owner decision record in this policy is the required internal
  approval record for eligible work.

Where an older artifact uses GO, CONDITIONAL GO, NO-GO, or DEFER, GPT may
continue to use those terms as advisory findings. The controlling Project Owner
decision under this policy must use one of the four values in Section 7.

## 13. Adoption and Review

Adoption requires a recorded Project Owner decision on the governance-amendment
Pull Request. The policy becomes active only after that decision and merge to
the controlled base branch. Opening the Pull Request does not itself adopt the
policy.

This policy must be reviewed again if project stage, repository integration,
actor authority, applicable external obligations, or any prohibited boundary
changes.

The LS-1 amendment is effective only after its own recorded Project Owner
adoption decision and merge. Existing adoption of this policy does not
pre-adopt LS-1.
