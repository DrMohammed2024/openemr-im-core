# First Implementation Slice

## Title
Structured Internal Medicine Encounter Foundation

## Objective
Define and deliver the first safe, small, high-value customization slice for the Internal Medicine transformation of OpenEMR.

## Why This Slice First
This slice creates the structured documentation foundation required before disease-specific workflows, advanced UI adjustments, or supervised AI assistance.

## In Scope
- Structured encounter documentation shell
- Chief complaint section
- Focused HPI section
- Red flags section
- Vitals review section
- Medication reconciliation section
- Labs review section
- Assessment & Plan section
- Safety-net advice section

## Initial Visit Types
- New patient
- Follow-up
- Chronic disease review
- Lab review
- Medication refill

## Out of Scope For This Slice
- Autonomous AI behavior
- Disease-specific advanced automation
- Broad billing workflow redesign
- Scheduling redesign
- Deep core refactoring without documented need
- Patient portal redesign
- Prescription automation
- Unreviewed clinical decision support

## Safety Rules
- No patient data in repository commits
- No secrets or API keys in repository commits
- Prefer configuration before code modification
- Prefer extension or module patterns before core patching
- Any core modification must be justified and documented
- Human review required before adopting any AI-assisted output

## Intended Technical Direction
- Preserve upstream compatibility where feasible
- Keep clinic-owned structure under the `clinic/` layer when possible
- Document target OpenEMR touchpoints before modification
- Start with documentation and implementation mapping before UI or logic changes

## Expected First Technical Targets
- Encounter-related documentation entry points
- Candidate form/template integration points
- Safe storage or rendering strategy for structured sections
- Minimal UI insertion strategy for Internal Medicine encounter workflow

## Required Before Coding
- Confirm target OpenEMR encounter touchpoints
- Decide whether first implementation uses configuration, form strategy, module pattern, or limited core patch
- Document exact files to inspect before modification
- Define rollback approach for first code change

## Completion Criteria
- First slice scope clearly defined
- Scope boundaries clearly defined
- Safety boundaries clearly defined
- Initial technical targets identified
- Team can begin file-level inspection without ambiguity
