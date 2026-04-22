# Architecture Overview

## Repository Role

`openemr-im-core` is intended to function as a governed Internal Medicine customization layer on top of OpenEMR upstream.

## Architectural Intent

The repository should evolve under the following model:

- upstream-first
- fork-minimal
- customization-explicit
- maintainable
- auditable

## Layering Strategy

### Upstream Base
OpenEMR upstream remains the primary application base.

### Clinic Layer
Clinic-owned planning, documentation, specs, mappings, and governance artifacts should live under:

- `clinic/`

### Customization Layer
Where feasible, custom forms, templates, low-risk overrides, and isolated workflow support should live under:

- `custom/`
- `modules/`

### Core Layer
Direct modifications to upstream-sensitive core paths should be minimized and treated as exceptional.

## Current Near-Term Architectural Priorities

1. Governance foundation
2. Upstream sync discipline
3. Customization traceability
4. Low-risk workflow-oriented customization
5. Basic validation / CI visibility

## High-Risk Areas

The following require heightened review before modification:

- authentication-related logic
- access-control-sensitive behavior
- patient data handling paths
- schema changes
- API contract changes
- broad UI logic inside core paths

## AI Boundary

No AI-assisted production workflow should be treated as active or ready until supervised review controls, traceability, and operational safeguards are explicitly defined.
