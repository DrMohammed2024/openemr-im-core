# Internal Medicine report File Output - 08

## Objective
This document contains the final output definition for the real `report.php` production file of the custom OpenEMR Internal Medicine form.

---

## Final Real Output File
`interface/forms/internal_medicine/report.php`

---

## Final Real PHP Content
```php
<?php

require_once("../../globals.php");
require_once("$srcdir/api.inc.php");
require_once("$srcdir/forms.inc.php");

use OpenEMR\Core\Header;

$formid = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if (empty($formid)) {
    die(xlt('Missing form id'));
}

$row = sqlQuery(
    "SELECT * FROM form_internal_medicine WHERE id = ?",
    [$formid]
);

if (empty($row)) {
    die(xlt('Form not found'));
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
    'disposition' => xl('Disposition')
];
?>
<!DOCTYPE html>
<html>
<head>
    <?php Header::setupHeader(); ?>
    <title><?php echo xlt('Internal Medicine Report'); ?></title>
</head>
<body class="body_top">
    <div class="container mt-3">
        <h2><?php echo xlt('Internal Medicine Report'); ?></h2>

        <?php foreach ($fields as $key => $label): ?>
            <?php if (!empty($row[$key])): ?>
                <div class="mb-3">
                    <h4><?php echo text($label); ?></h4>
                    <div><?php echo nl2br(text($row[$key])); ?></div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>
