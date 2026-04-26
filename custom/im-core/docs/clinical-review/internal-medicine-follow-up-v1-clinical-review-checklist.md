# Internal Medicine Follow-Up V1 — Clinical Review Checklist

## 1. Purpose

This document defines the clinical review checklist for the Internal Medicine Follow-Up V1 LBF customization in OpenEMR IM Core.

The purpose is to support structured physician review before any real clinical, pilot, production, or commercial use.

This checklist does not claim that the form is clinically validated.

It provides a controlled review framework for clinical completeness, safety, usability, and documentation quality.

## 2. Project Context

- Repository: DrMohammed2024/openemr-im-core
- Project: OpenEMR IM Core
- Layout name: Internal Medicine Follow-Up V1
- Layout ID: `LBFim_followup_v1`
- Current status: Local LBF MVP verified
- Review type: Clinical review preparation
- Intended reviewer: Licensed physician or qualified clinical reviewer

## 3. Current Verified Form Scope

The Internal Medicine Follow-Up V1 form currently includes the following verified groups:

- Visit Context
- Vital Signs Review
- Chronic Conditions Review
- Medication Review
- Symptoms Review
- Physical Exam Summary
- Assessment
- Plan
- Patient Safety and Follow-up

## 4. Clinical Review Objectives

The reviewer should determine whether the current form is:

- clinically understandable
- appropriate for internal medicine follow-up visits
- sufficiently complete for common follow-up documentation
- safe from obvious omission of critical follow-up items
- usable by clinicians in routine workflow
- clear enough to reduce documentation ambiguity
- not misleading as a diagnostic or treatment decision tool

## 5. Review Boundary

This review is limited to the structure and content of the Internal Medicine Follow-Up V1 form.

This review does not validate:

- medical diagnosis accuracy
- treatment correctness
- medication dosing
- clinical decision support
- automated risk scoring
- regulatory compliance
- production readiness
- billing compliance
- real patient workflow safety
- legal suitability for any jurisdiction

## 6. General Clinical Completeness Checklist

The reviewer should verify:

- [ ] The form is appropriate for adult internal medicine follow-up visits.
- [ ] The visit context section captures why the patient is being seen.
- [ ] Vital signs review is clinically useful.
- [ ] Chronic condition review captures major common chronic diseases.
- [ ] Medication review captures key medication safety concerns.
- [ ] Symptoms review captures important interval symptoms.
- [ ] Physical exam summary is appropriate for follow-up documentation.
- [ ] Assessment section supports clinical reasoning documentation.
- [ ] Plan section supports clear next-step documentation.
- [ ] Patient Safety and Follow-up section supports safety-net communication.
- [ ] The form avoids unnecessary complexity.
- [ ] The form avoids clinically misleading labels.
- [ ] The form does not imply automated diagnosis.
- [ ] The form does not imply automated treatment recommendation.

## 7. Visit Context Review

Review fields:

- Follow-up reason
- Visit type
- Main complaint
- Interval history since last visit

Checklist:

- [ ] Follow-up reason is clinically clear.
- [ ] Visit type is useful for documentation.
- [ ] Main complaint is appropriately captured.
- [ ] Interval history supports continuity of care.
- [ ] No critical visit-context item is missing for routine follow-up.

Reviewer notes:

```text
