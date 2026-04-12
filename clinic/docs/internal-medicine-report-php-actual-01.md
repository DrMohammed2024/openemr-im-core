# Internal Medicine report.php Actual - 01

## Target Final Path
`interface/forms/internal_medicine/report.php`

---

## Objective
Provide the first actual copy-ready PHP implementation draft for the custom OpenEMR Internal Medicine encounter form report view.

---

## Copy-Ready PHP Draft
```php
<?php

require_once("../../globals.php");
require_once("$srcdir/api.inc.php");

use OpenEMR\Core\Header;

$formid = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if (!$formid) {
    die("Missing Internal Medicine form id.");
}

$row = sqlQuery(
    "SELECT * FROM form_internal_medicine WHERE id = ?",
    [$formid]
);

if (empty($row)) {
    die("Internal Medicine form record not found.");
}

$fields = [
    'visit_type' => xl('Visit Type'),
    'clinician_name' => xl('Clinician Name'),
    'chief_complaint' => xl('Chief Complaint'),
    'hpi' => xl('HPI'),
    'pmh' => xl('PMH'),
    'psh' => xl('PSH'),
    'medications' => xl('Medications'),
    'allergies' => xl('Allergies'),
    'family_history' => xl('Family History'),
    'social_history' => xl('Social History'),
    'review_of_systems' => xl('Review of Systems'),
    'physical_exam' => xl('Physical Exam'),
    'assessment' => xl('Assessment'),
    'differential_diagnosis' => xl('Differential Diagnosis'),
    'plan' => xl('Plan'),
    'follow_up' => xl('Follow Up'),
    'red_flags' => xl('Red Flags'),
    'disposition' => xl('Disposition'),
];

function im_report_value($value): string
{
    $value = trim((string)$value);
    if ($value === '') {
        return '';
    }
    return nl2br(text($value));
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php Header::setupHeader(); ?>
    <title><?php echo xlt('Internal Medicine Report'); ?></title>
    <style>
        .im-report-wrapper {
            max-width: 1000px;
            margin: 20px auto;
            padding: 0 16px;
        }
        .im-report-title {
            margin-bottom: 24px;
        }
        .im-report-section {
            margin-bottom: 18px;
            padding: 12px 14px;
            border: 1px solid #dcdcdc;
            border-radius: 8px;
        }
        .im-report-label {
            font-weight: bold;
            margin-bottom: 8px;
        }
        .im-report-value {
            white-space: normal;
        }
    </style>
</head>
<body class="body_top">
    <div class="im-report-wrapper">
        <h2 class="im-report-title"><?php echo xlt('Internal Medicine Report'); ?></h2>

        <?php foreach ($fields as $key => $label): ?>
            <?php $value = im_report_value($row[$key] ?? ''); ?>
            <?php if ($value === '') { continue; } ?>
            <div class="im-report-section">
                <div class="im-report-label"><?php echo text($label); ?></div>
                <div class="im-report-value"><?php echo $value; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
