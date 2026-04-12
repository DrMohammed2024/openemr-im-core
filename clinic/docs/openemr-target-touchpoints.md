# OpenEMR Target Touchpoints

## Purpose
This document identifies the first OpenEMR areas to inspect before making any code-level customization for the structured Internal Medicine encounter foundation.

## Immediate Goal
Find the safest and smallest implementation path for introducing structured encounter documentation without uncontrolled modification of core workflow.

## First Areas To Inspect
- Encounter entry points
- Existing form integration points
- Patient encounter documentation rendering areas
- Candidate locations for structured section insertion
- Existing customization or extension patterns already present in OpenEMR

## Candidate Technical Zones To Review
- `interface/`
- `library/`
- `src/`
- `custom/`
- `templates/`

## Preferred Early Review Questions
1. Where does OpenEMR currently handle encounter documentation entry?
2. What existing form or section mechanism can be reused?
3. Can the first slice be implemented with minimal UI injection rather than broad workflow redesign?
4. Is there an existing customization pattern safer than direct patching?
5. What is the smallest reversible implementation path?

## What Not To Do Yet
- Do not modify multiple core areas at once
- Do not redesign scheduling or billing
- Do not introduce AI execution logic
- Do not commit undocumented exploratory patches
- Do not change database structure before documenting the need

## Initial Inspection Output Required
- list of files to inspect first
- likely insertion strategy
- likely rollback approach
- configuration vs extension vs core patch recommendation
- risk notes for each candidate area

## Working Rule
Inspection comes before modification.
Documentation comes before patching.
Small reversible change comes before broad redesign.
