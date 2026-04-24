# LBF Runtime Verification Evidence

Date: 2026-04-24

## Environment

- Android / Termux
- Apache httpd on port 8080
- MariaDB local server
- OpenEMR local runtime path: /data/data/com.termux/files/home/openemr_im_git
- OpenEMR version observed: 8.1.1-dev

## Runtime recovery notes

The OpenEMR login page initially rendered without required frontend assets.

Root cause:
- public/assets/jquery/dist/jquery.min.js was missing
- public/assets/bootstrap/dist/js/bootstrap.bundle.min.js was missing
- public/themes/style_light.css was missing

Resolution:
- npm install --no-audit --no-fund
- npx gulp -b

Verification:
- /public/assets/jquery/dist/jquery.min.js returned HTTP 200
- /public/assets/bootstrap/dist/js/bootstrap.bundle.min.js returned HTTP 200
- /public/themes/style_light.css returned HTTP 200

## Product registration modal

The product registration modal rendered correctly after frontend assets were built.

A local runtime database opt-out was recorded for product_registration:
- opt_out = 1
- telemetry_disabled = 1
- last_ask_version = 8.1.1

No repository core files were modified.

## LBF access path verified

The Layout Based Forms / Layout Editor path was verified in the OpenEMR UI:

Admin → Forms → Layouts

The Layout Editor screen was reached successfully.

Observed controls:
- Edit layout dropdown
- Include inactive checkbox
- New Layout button

Observed existing layout groups include:
- Core
- Demographics
- Facility Specific User Information
- History
- Transactions
- Billing
- Legal
- Patient Request
- Physician Request
- Referral

## Status

LBF runtime navigation is verified.

The first clinical form has not been created yet.

Next step:
- Define Internal Medicine Follow-Up V1 field set
- Create only after confirming the safest layout naming and rollback approach
