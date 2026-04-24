# Internal Medicine Follow-Up V1 Field Set

## Purpose

Define the first clinic-visible LBF form scope before creating it in the OpenEMR Layout Editor.

## Feature name

Internal Medicine Follow-Up V1

## Scope

- LBF-first
- no-core-touch
- clinic-visible
- fast to validate
- suitable for outpatient Internal Medicine follow-up visits

## V1 Sections and Fields

### Visit Context

- Visit date
- Visit type
- Follow-up reason
- Main complaint
- Interval history since last visit

### Vital Signs Review

- Blood pressure
- Heart rate
- Respiratory rate
- Temperature
- Oxygen saturation
- Weight
- BMI note

### Chronic Conditions Review

- Hypertension status
- Diabetes status
- Dyslipidemia status
- Cardiovascular disease status
- Respiratory disease status
- Kidney disease status
- Other chronic condition notes

### Medication Review

- Medication adherence
- Medication side effects
- Medication changes since last visit
- Refill needs

### Symptoms Review

- Chest pain
- Shortness of breath
- Palpitations
- Dizziness or syncope
- Edema
- Fever
- Weight change
- Gastrointestinal symptoms
- Urinary symptoms
- Other symptoms

### Assessment

- Clinical impression
- Problems addressed today
- Risk flags or red flags
- Stability assessment

### Plan

- Medication plan
- Lab orders needed
- Imaging or diagnostic orders needed
- Referral needed
- Patient education provided
- Follow-up interval
- Return precautions

## Exclusions From V1

This V1 does not include:

- automated scoring
- external integrations
- custom PHP forms
- OpenEMR core modifications
- billing automation
- decision support rules
- patient portal workflows

## Safety Notes

- Do not include PHI in repository artifacts.
- Do not modify OpenEMR core-sensitive paths.
- Validate field behavior in the local Layout Editor before using clinically.
- Keep the first version small and reversible.

## Next Step

Create this form manually in the verified Layout Editor path:

Admin → Forms → Layouts
