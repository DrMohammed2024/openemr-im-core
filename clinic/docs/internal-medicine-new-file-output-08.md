# Internal Medicine new File Output - 08

## Objective
This document contains the final output definition for the real `new.php` production file of the custom OpenEMR Internal Medicine form.

---

## Final Real Output File
`interface/forms/internal_medicine/new.php`

---

## Final Real PHP Content
```php
<?php

require_once("../../globals.php");
require_once("$srcdir/api.inc.php");
require_once("$srcdir/forms.inc.php");
require_once("$srcdir/patient.inc.php");

use OpenEMR\Common\Csrf\CsrfUtils;
use OpenEMR\Common\Session\SessionWrapperFactory;
use OpenEMR\Core\Header;

$formid = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$session = SessionWrapperFactory::getInstance()->getActiveSession();

$pid = (int)($pid ?? $session->get('pid'));
$encounter = (int)($encounter ?? $session->get('encounter'));
$userauthorized = $userauthorized ?? 0;

$data = [
    'visit_type' => '',
    'clinician_name' => '',
    'chief_complaint' => '',
    'hpi' => '',
    'pmh' => '',
    'psh' => '',
    'medications' => '',
    'allergies' => '',
    'family_history' => '',
    'social_history' => '',
    'review_of_systems' => '',
    'physical_exam' => '',
    'assessment' => '',
    'differential_diagnosis' => '',
    'plan' => '',
    'follow_up' => '',
    'red_flags' => '',
    'disposition' => ''
];

if ($formid) {
    $row = sqlQuery(
        "SELECT * FROM form_internal_medicine WHERE id = ? AND pid = ? AND encounter = ?",
        [$formid, $pid, $encounter]
    );
    if (!empty($row)) {
        foreach ($data as $key => $value) {
            $data[$key] = $row[$key] ?? '';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!CsrfUtils::verifyCsrfToken($_POST['csrf_token_form'] ?? '')) {
        die(xlt('Invalid CSRF token'));
    }

    foreach ($data as $key => $value) {
        $data[$key] = $_POST[$key] ?? '';
    }

    if ($formid) {
        sqlStatement(
            "UPDATE form_internal_medicine SET
                visit_type = ?,
                clinician_name = ?,
                chief_complaint = ?,
                hpi = ?,
                pmh = ?,
                psh = ?,
                medications = ?,
                allergies = ?,
                family_history = ?,
                social_history = ?,
                review_of_systems = ?,
                physical_exam = ?,
                assessment = ?,
                differential_diagnosis = ?,
                plan = ?,
                follow_up = ?,
                red_flags = ?,
                disposition = ?
             WHERE id = ? AND pid = ? AND encounter = ?",
            [
                $data['visit_type'],
                $data['clinician_name'],
                $data['chief_complaint'],
                $data['hpi'],
                $data['pmh'],
                $data['psh'],
                $data['medications'],
                $data['allergies'],
                $data['family_history'],
                $data['social_history'],
                $data['review_of_systems'],
                $data['physical_exam'],
                $data['assessment'],
                $data['differential_diagnosis'],
                $data['plan'],
                $data['follow_up'],
                $data['red_flags'],
                $data['disposition'],
                $formid,
                $pid,
                $encounter
            ]
        );
    } else {
        $newid = sqlInsert(
            "INSERT INTO form_internal_medicine (
                pid, encounter, date, user, groupname, authorized,
                visit_type, clinician_name, chief_complaint, hpi, pmh, psh,
                medications, allergies, family_history, social_history,
                review_of_systems, physical_exam, assessment,
                differential_diagnosis, plan, follow_up, red_flags, disposition
            ) VALUES (
                ?, ?, NOW(), ?, '', ?,
                ?, ?, ?, ?, ?, ?,
                ?, ?, ?, ?,
                ?, ?, ?,
                ?, ?, ?, ?, ?
            )",
            [
                $pid,
                $encounter,
                $session->get('authUser'),
                $userauthorized,
                $data['visit_type'],
                $data['clinician_name'],
                $data['chief_complaint'],
                $data['hpi'],
                $data['pmh'],
                $data['psh'],
                $data['medications'],
                $data['allergies'],
                $data['family_history'],
                $data['social_history'],
                $data['review_of_systems'],
                $data['physical_exam'],
                $data['assessment'],
                $data['differential_diagnosis'],
                $data['plan'],
                $data['follow_up'],
                $data['red_flags'],
                $data['disposition']
            ]
        );

        addForm($encounter, "Internal Medicine", $newid, "internal_medicine", $pid, $userauthorized);
        $formid = $newid;
    }

    if (!empty($_POST['bn_save_continue'])) {
        header("Location: new.php?id=" . urlencode((string)$formid));
        exit;
    }

    formHeader("Redirecting...");
    formJump();
    formFooter();
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php Header::setupHeader(); ?>
    <title><?php echo xlt('Internal Medicine'); ?></title>
</head>
<body class="body_top">
    <form method="post" action="new.php<?php echo $formid ? '?id=' . attr_url($formid) : ''; ?>">
        <input type="hidden" name="csrf_token_form" value="<?php echo attr(CsrfUtils::collectCsrfToken($session)); ?>">

        <label><?php echo xlt('Visit Type'); ?></label><br>
        <input type="text" name="visit_type" value="<?php echo attr($data['visit_type']); ?>"><br><br>

        <label><?php echo xlt('Clinician Name'); ?></label><br>
        <input type="text" name="clinician_name" value="<?php echo attr($data['clinician_name']); ?>"><br><br>

        <label><?php echo xlt('Chief Complaint'); ?></label><br>
        <textarea name="chief_complaint"><?php echo text($data['chief_complaint']); ?></textarea><br><br>

        <label><?php echo xlt('HPI'); ?></label><br>
        <textarea name="hpi"><?php echo text($data['hpi']); ?></textarea><br><br>

        <label><?php echo xlt('PMH'); ?></label><br>
        <textarea name="pmh"><?php echo text($data['pmh']); ?></textarea><br><br>

        <label><?php echo xlt('PSH'); ?></label><br>
        <textarea name="psh"><?php echo text($data['psh']); ?></textarea><br><br>

        <label><?php echo xlt('Medications'); ?></label><br>
        <textarea name="medications"><?php echo text($data['medications']); ?></textarea><br><br>

        <label><?php echo xlt('Allergies'); ?></label><br>
        <textarea name="allergies"><?php echo text($data['allergies']); ?></textarea><br><br>

        <label><?php echo xlt('Family History'); ?></label><br>
        <textarea name="family_history"><?php echo text($data['family_history']); ?></textarea><br><br>

        <label><?php echo xlt('Social History'); ?></label><br>
        <textarea name="social_history"><?php echo text($data['social_history']); ?></textarea><br><br>

        <label><?php echo xlt('Review of Systems'); ?></label><br>
        <textarea name="review_of_systems"><?php echo text($data['review_of_systems']); ?></textarea><br><br>

        <label><?php echo xlt('Physical Exam'); ?></label><br>
        <textarea name="physical_exam"><?php echo text($data['physical_exam']); ?></textarea><br><br>

        <label><?php echo xlt('Assessment'); ?></label><br>
        <textarea name="assessment"><?php echo text($data['assessment']); ?></textarea><br><br>

        <label><?php echo xlt('Differential Diagnosis'); ?></label><br>
        <textarea name="differential_diagnosis"><?php echo text($data['differential_diagnosis']); ?></textarea><br><br>

        <label><?php echo xlt('Plan'); ?></label><br>
        <textarea name="plan"><?php echo text($data['plan']); ?></textarea><br><br>

        <label><?php echo xlt('Follow Up'); ?></label><br>
        <textarea name="follow_up"><?php echo text($data['follow_up']); ?></textarea><br><br>

        <label><?php echo xlt('Red Flags'); ?></label><br>
        <textarea name="red_flags"><?php echo text($data['red_flags']); ?></textarea><br><br>

        <label><?php echo xlt('Disposition'); ?></label><br>
        <input type="text" name="disposition" value="<?php echo attr($data['disposition']); ?>"><br><br>

        <button type="submit" name="bn_save"><?php echo xlt('Save'); ?></button>
        <button type="submit" name="bn_save_continue" value="1"><?php echo xlt('Save and Continue'); ?></button>
        <button type="button" onclick="window.history.back();"><?php echo xlt('Cancel'); ?></button>
    </form>
</body>
</html>
