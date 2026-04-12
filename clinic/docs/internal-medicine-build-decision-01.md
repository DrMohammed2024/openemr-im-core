# Internal Medicine Build Decision - 01

## Decision
Build the first implementation of the Internal Medicine encounter form as a new **LBF-based form**.

---

## Final Recommendation
Use a new dedicated LBF form directory for version 1:

- recommended formdir: `LBFim_internal_medicine`
- implementation base: OpenEMR `forms/LBF`
- layout source: `layout_options`
- value storage: `lbf_data`
- encounter registration: `forms`

---

## Why This Is The Right Version-1 Choice

### 1. Fastest safe implementation path
A new LBF-based form allows faster execution with lower structural risk than creating a fully custom standard form from zero.

### 2. Native OpenEMR form behavior already exists
The LBF stack already provides:
- encounter-linked save flow
- `addForm(...)` registration to `forms`
- `lbf_data` persistence
- layout-driven field rendering
- validation hooks
- grouped section rendering
- historical display patterns
- standard save / save-continue / save-print patterns

### 3. Better fit for evolving clinic requirements
Internal Medicine documentation will likely change during real use.
LBF is easier to adjust in early phases because fields and layout can be changed with less code movement.

### 4. Lower maintenance overhead in version 1
A standard dedicated form would require more custom controller/view/service maintenance from the start.

### 5. Better for phased rollout
LBF enables:
- version 1 minimal release
- version 2 section expansion
- version 3 workflow hardening
without committing too early to heavy custom architecture.

---

## Why We Are NOT Choosing a Standard Dedicated Form First

### Not chosen for version 1 because:
- slower build path
- more moving parts
- higher code surface area
- higher testing burden
- more custom rendering work
- less flexible during early clinic adaptation

### A dedicated standard form may be justified later if:
- structured repeatable sub-records become complex
- advanced UI interactions become necessary
- workflow logic becomes too custom for LBF
- API/service abstraction becomes a first-class requirement

---

## Practical Build Consequences

### We will create:
- a new LBF form identity
- a new layout definition in `layout_options`
- a form directory derived from LBF behavior
- Internal Medicine clinic-specific grouped fields
- a first minimal operational set for real encounter use

### We will avoid in version 1:
- over-engineered custom services
- complex JS-first architecture
- premature dedicated persistence layers
- broad feature sprawl

---

## Version-1 Build Scope
The first executable scope should include only:

1. Encounter Meta
2. Chief Concern
3. HPI
4. ROS
5. Vital Signs
6. Physical Examination
7. Assessment
8. Plan

---

## Minimal Technical Direction

### Base reference
Use `forms/LBF/new.php` as the behavioral reference model.

### Data model direction
Use standard LBF persistence:
- form registration in `forms`
- field values in `lbf_data`

### Field-definition direction
Define fields through `layout_options` for the new form.

### Naming direction
Use a clear internal medicine form identity consistently across:
- directory naming
- form title
- layout form_id naming
- implementation notes

---

## Risks
- LBF UI can become dense if too many fields are added too early
- field naming discipline must be maintained from the beginning
- layout quality will determine usability more than raw field count

---

## Risk Controls
- keep version 1 minimal
- prefer grouped sections
- prefer wide text areas only where clinically necessary
- keep vitals compact
- keep assessment and plan prominent
- avoid adding secondary specialty sections in version 1

---

## Immediate Next Build Artifact
After this decision file, create the first implementation-ready field specification file that lists:

- exact field_id
- label
- section
- datatype intent
- source expectation
- whether required or optional
- whether compact row or wide row

This next file should be the bridge between planning and actual `layout_options` implementation.
