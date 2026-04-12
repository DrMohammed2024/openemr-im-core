# Internal Medicine Final Build Path - 01

## Objective
Finalize the implementation path for the Internal Medicine outpatient form inside the OpenEMR-based project.

This document converts prior inspection and planning into one clear build decision.

---

## Decision
Proceed with:

**Path A — Build a new Internal Medicine encounter form using the LBF framework as the primary implementation base.**

---

## Why This Path Is Preferred

### 1. Lowest-risk operational fit
LBF already supports:
- encounter-linked forms
- grouped layout structure
- field-based rendering
- built-in save flow
- form registration into the `forms` table
- standard encounter workflow integration

### 2. Better fit for structured Internal Medicine outpatient documentation
The intended form requires:
- grouped sections
- row/column field layout
- mixed short and long clinical fields
- practical encounter note workflow
- easy extension later

This is closer to LBF behavior than to the current Clinical Notes implementation.

### 3. Avoids over-coupling to Clinical Notes service architecture
Clinical Notes appears more specialized and service/template-driven.
It is useful for reference, but not the best base for a broad Internal Medicine outpatient encounter form.

### 4. Faster first runnable build
A focused LBF-derived form should allow a smaller, safer first executable slice.

---

## Rejected / Deferred Paths

### Path B — Adapt Clinical Notes as the main base
Rejected as the primary V1 path because:
- structure appears more custom/service-driven
- less obviously optimized for broad encounter-style row/field composition
- higher risk of hidden dependencies
- may increase implementation complexity earlier than needed

### Path C — Build a fully new custom architecture from scratch
Deferred because:
- higher engineering cost
- higher regression risk
- unnecessary before proving the workflow in a simpler first build

---

## Final V1 Strategy

### Build target
A new Internal Medicine encounter form that:
- is encounter-linked
- opens from the normal encounter workflow
- stores structured data safely
- supports practical Internal Medicine outpatient note capture
- stays simple in first release

### Implementation style
- documentation-first
- minimal-risk first slice
- no advanced automation in V1
- no heavy dynamic dependencies in V1
- no billing coupling in V1
- no AI generation inside the form in V1

---

## Recommended Build Shape

### Core build approach
Create a new Internal Medicine form modeled operationally on LBF patterns, but scoped to a simplified Internal Medicine workflow.

### V1 characteristics
- stable
- readable
- clinician-friendly
- fast to fill
- easy to review
- easy to extend later

---

## First Executable Build Slice

### Must include
- form identity
- form registration path
- encounter linkage
- a working save flow
- basic display/edit behavior
- a minimum practical field set

### Minimum practical field set
- note date
- provider
- visit type
- chief complaint
- HPI summary
- assessment summary
- plan summary

### Strongly recommended in first executable slice
- BP
- HR
- temperature
- general exam
- chest exam
- cardiovascular exam
- investigations
- treatment
- follow-up
- red flags

---

## What Should Be Avoided In First Build

Do **not** include these in the first executable slice unless clearly needed:
- complex skip logic
- dynamic calculated scoring
- deep ROS expansion
- billing/services/products integration
- graphing requirements
- patient portal special workflow
- historical-value complexity
- advanced plugin behavior
- complicated cross-table save logic
- AI-generated content inside form workflow

---

## Likely File / Build Impact Areas

These are planning-level targets, not yet final edit instructions.

### Likely create
- a new Internal Medicine form directory
- form metadata / registration support artifacts
- field definition artifact(s)
- documentation for deployment and registration

### Likely inspect again before first code edit
- LBF registration/loading path
- form loading entrypoint
- registry/form discovery behavior
- minimal save contract
- layout_options interaction model
- encounter open/load flow

### Likely avoid editing early
- core Clinical Notes service logic
- high-risk shared services unless necessary
- portal-specific logic
- fee-sheet related code
- unrelated encounter subsystems

---

## Current Technical Position

### We already know
- LBF new.php is a strong structural reference
- Clinical Notes new.php is useful for comparison, not primary base
- load_form.php is relevant to encounter form opening
- forms save/registration flow is important
- documentation path is progressing correctly

### We still need before code writing
- exact form directory naming decision
- exact registration strategy
- exact first field storage strategy
- exact initial table/layout structure decision

---

## Recommended Naming Direction

### Suggested form identity
- Directory idea: `internal_medicine`
- Display title idea: `Internal Medicine`
- Scope: outpatient encounter form

This remains provisional until the next artifact confirms exact naming and storage approach.

---

## Next Decision To Make
The next artifact must answer:

1. exact form directory name
2. whether V1 will be:
   - true LBF layout-driven
   - LBF-inspired custom form
   - hybrid minimal form
3. exact minimum field storage approach
4. exact first build files to create
5. exact first code artifact to write

---

## Recommended Next Artifact
Create:

`clinic/docs/internal-medicine-v1-implementation-slice-01.md`

That document must define:
- exact V1 implementation slice
- exact files to create first
- exact files to inspect once more before editing
- exact order of coding
- exact stop boundary for first runnable build

---

## Final Conclusion
The best current path is:

**Build a new Internal Medicine encounter form using the LBF path as the main implementation base, with a simplified V1 scope and a documentation-first controlled rollout.**
