# No-PHI and Safe Repository Development Policy V0.1 - OpenEMR IM Core

## 1. Purpose

This document defines the repository safety rules for OpenEMR IM Core.

Its purpose is to prevent unsafe, sensitive, private, clinical, or regulated material from being committed to GitHub.

This policy must be followed before any validation evidence, screenshots, demo data, logs, deployment notes, support artifacts, training examples, or commercial materials are added to the repository.

This document is documentation-only.

It does not implement runtime behavior, execute SQL, approve SQL execution, activate AI, modify OpenEMR core files, approve production deployment, approve pilot deployment, or approve commercial deployment.

---

## 2. Policy Scope

This policy applies to:

- Markdown documentation
- Screenshots
- Validation evidence
- Test cases
- Demo data
- Example patient records
- Logs
- Configuration examples
- Deployment notes
- Support notes
- Training materials
- Commercial planning documents
- Clinical Intelligence planning documents
- LBF metadata exports
- Seed or script planning files
- Any future generated artifacts

This policy applies to all contributors, maintainers, reviewers, AI-assisted development sessions, and any external support process.

---

## 3. Absolute Prohibitions

The following must never be committed to the repository:

- PHI
- Real patient data
- Patient names
- Patient phone numbers
- Patient email addresses
- Patient addresses
- Patient identifiers
- National IDs
- Insurance IDs
- Medical record numbers from real systems
- Real appointment data
- Real clinical notes
- Real lab results
- Real radiology reports
- Real prescriptions
- Real billing records
- Real payment records
- Real claim data
- Real consent forms
- Real scanned documents
- Real images containing patient data
- Real screenshots containing PHI
- Database dumps
- Production database exports
- Backup files
- Credentials
- Passwords
- API keys
- Tokens
- SSH keys
- Private certificates
- OAuth secrets
- Environment files containing secrets
- Sensitive logs
- Server logs containing identifiers
- Error logs containing PHI
- Access logs containing patient identifiers
- Production configuration files
- Unreviewed SQL
- Executable SQL intended for real environments
- Any file that could identify a real patient, clinician, staff member, facility, payer, or customer without explicit approval and sanitization

---

## 4. Allowed Content

The following content is allowed if it contains no PHI, no credentials, no sensitive logs, and no unsupported claims:

- Documentation-only planning files
- Synthetic test scenarios
- Synthetic patient examples
- Sanitized screenshots
- Placeholder IDs
- Example workflows
- Validation templates
- Evidence templates
- Risk registers
- Governance policies
- Clinical safety boundaries
- Non-production deployment plans
- Training outlines
- Support process templates
- Commercial planning documents with non-claims boundaries
- OpenEMR IM Core-specific operating guides
- LBF metadata summaries that contain no patient data
- Redacted examples clearly marked as synthetic or sanitized

---

## 5. Synthetic Data Rules

Synthetic data is allowed only when it is clearly fictional.

Synthetic examples must not be derived from a real patient record.

Synthetic data must use obviously fake identifiers, such as:

```text
SYN-PAT-0001
SYN-ENC-0001
SYN-LAB-0001
