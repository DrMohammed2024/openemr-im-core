<?php

require_once("../../globals.php");
require_once("$srcdir/api.inc.php");
require_once("$srcdir/forms.inc.php");

use OpenEMR\Core\Header;

$formid = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if (empty($formid)) {
    die(xlt('Missing form id'));
}

$row = sqlQuery(
    "SELECT * FROM form_internal_medicine WHERE id = ? AND deleted = 0",
    [$formid]
);

if (empty($row)) {
    die(xlt('Form not found'));
}

$sections = [
    'visit_type' => xl('Visit Type'),
    'clinician_name' => xl('Clinician Name'),
    'chief_complaint' => xl('Chief Complaint'),
    'assessment' => xl('Assessment'),
    'plan' => xl('Plan'),
    'follow_up' => xl('Follow Up'),
    'red_flags' => xl('Red Flags'),
    'disposition' => xl('Disposition'),
    'hpi' => xl('HPI'),
    'pmh' => xl('PMH'),
    'psh' => xl('PSH'),
    'medications' => xl('Medications'),
    'allergies' => xl('Allergies'),
    'family_history' => xl('Family History'),
    'social_history' => xl('Social History'),
    'review_of_systems' => xl('Review of Systems'),
    'physical_exam' => xl('Physical Exam'),
    'differential_diagnosis' => xl('Differential Diagnosis')
];
?>
<!DOCTYPE html>
<html>
<head>
    <?php Header::setupHeader(); ?>
    <title><?php echo xlt('Internal Medicine Report'); ?></title>
    <style>
        .im-report-wrap { max-width: 1100px; margin: 20px auto; }
        .im-report-section { margin-bottom: 18px; padding: 12px 14px; border: 1px solid #dcdcdc; border-radius: 8px; }
        .im-report-section h4 { margin: 0 0 10px 0; }
    </style>
</head>
<body class="body_top">
<div class="container im-report-wrap">
    <h2><?php echo xlt('Internal Medicine Report'); ?></h2>

    <?php foreach ($sections as $key => $label): ?>
        <?php if (!empty($row[$key])): ?>
            <div class="im-report-section">
                <h4><?php echo text($label); ?></h4>
                <div><?php echo nl2br(text((string) $row[$key])); ?></div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
</body>
</html>
