# Customization Register

## Purpose
This file is the official registry for clinic-specific customization decisions inside the OpenEMR implementation repository.

## Rules
- Prefer configuration before code modification
- Prefer extension/module patterns before core patching
- Core modification is allowed only when necessary
- Every customization must be documented before or with implementation
- Every customization should be linked to a GitHub issue when possible
- No patient data or secrets may be committed

## Initial Customization Strategy
1. Preserve upstream compatibility where feasible
2. Isolate clinic-owned assets under the `clinic/` layer when possible
3. Implement structured Internal Medicine documentation first
4. Delay AI workflow activation until supervised review controls are defined

## Initial Scope Targets
- Structured encounter framework
- Medication reconciliation workflow support
- Labs review structure
- Safety-net documentation support
- Chronic disease follow-up template foundation

## Notes
This file is the first documentation anchor inside the code repository and should be updated as implementation decisions evolve.
