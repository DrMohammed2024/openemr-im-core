<?php

require_once("../../globals.php");
require_once("$srcdir/api.inc.php");
require_once("$srcdir/forms.inc.php");
require_once("$srcdir/patient.inc.php");

use OpenEMR\Common\Csrf\CsrfUtils;
use OpenEMR\Common\Session\SessionWrapperFactory;
use OpenEMR\Core\Header;

$formid = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$session = SessionWrapperFactory::getInstance()->getActiveSession();

$pid = (int) ($pid ?? $session->get('pid'));
$encounter = (int) ($encounter ?? $session->get('encounter'));
$userauthorized = (int) ($userauthorized ?? ($session->get('authUserID') ?? 0));

if (empty($pid) || empty($encounter)) {
    die(xlt('Missing patient or encounter context'));
}

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
        "SELECT * FROM form_internal_medicine WHERE id = ? AND pid = ? AND encounter = ? AND deleted = 0",
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
        $data[$key] = trim((string) ($_POST[$key] ?? ''));
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
                disposition = ?,
                updated_at = NOW()
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
                pid, encounter, date, user, groupname, authorized, activity, deleted,
                visit_type, clinician_name, chief_complaint, hpi, pmh, psh,
                medications, allergies, family_history, social_history,
                review_of_systems, physical_exam, assessment, differential_diagnosis,
                plan, follow_up, red_flags, disposition
            ) VALUES (
                ?, ?, NOW(), ?, ?, ?, 1, 0,
                ?, ?, ?, ?, ?, ?,
                ?, ?, ?, ?,
                ?, ?, ?, ?,
                ?, ?, ?, ?
            )",
            [
                $pid,
                $encounter,
                (string) ($session->get('authUser') ?? ''),
                (string) ($session->get('authProvider') ?? ''),
                (int) $userauthorized,
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
        header("Location: new.php?id=" . urlencode((string) $formid));
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
    <style>
        .im-wrap { max-width: 1100px; margin: 20px auto; }
        .im-section { margin-bottom: 18px; }
        .im-section label { display: block; font-weight: bold; margin-bottom: 6px; }
        .im-section textarea { width: 100%; min-height: 120px; }
        .im-section input[type="text"] { width: 100%; }
        .im-actions { margin-top: 24px; display: flex; gap: 10px; flex-wrap: wrap; }
    </style>
</head>
<body class="body_top">
<div class="container im-wrap">
    <h2><?php echo xlt('Internal Medicine'); ?></h2>

    <form method="post" action="new.php<?php echo $formid ? '?id=' . attr_url($formid) : ''; ?>">
        <input type="hidden" name="csrf_token_form" value="<?php echo attr(CsrfUtils::collectCsrfToken($session)); ?>">

        <div class="im-section">
            <label><?php echo xlt('Visit Type'); ?></label>
            <input type="text" name="visit_type" value="<?php echo attr($data['visit_type']); ?>">
        </div>

        <div class="im-section">
            <label><?php echo xlt('Clinician Name'); ?></label>
            <input type="text" name="clinician_name" value="<?php echo attr($data['clinician_name']); ?>">
        </div>

        <div class="im-section">
            <label><?php echo xlt('Chief Complaint'); ?></label>
            <textarea name="chief_complaint"><?php echo text($data['chief_complaint']); ?></textarea>
        </div>

        <div class="im-section">
            <label><?php echo xlt('HPI'); ?></label>
            <textarea name="hpi"><?php echo text($data['hpi']); ?></textarea>
        </div>

        <div class="im-section">
            <label><?php echo xlt('PMH'); ?></label>
            <textarea name="pmh"><?php echo text($data['pmh']); ?></textarea>
        </div>

        <div class="im-section">
            <label><?php echo xlt('PSH'); ?></label>
            <textarea name="psh"><?php echo text($data['psh']); ?></textarea>
        </div>

        <div class="im-section">
            <label><?php echo xlt('Medications'); ?></label>
            <textarea name="medications"><?php echo text($data['medications']); ?></textarea>
        </div>

        <div class="im-section">
            <label><?php echo xlt('Allergies'); ?></label>
            <textarea name="allergies"><?php echo text($data['allergies']); ?></textarea>
        </div>

        <div class="im-section">
            <label><?php echo xlt('Family History'); ?></label>
            <textarea name="family_history"><?php echo text($data['family_history']); ?></textarea>
        </div>

        <div class="im-section">
            <label><?php echo xlt('Social History'); ?></label>
            <textarea name="social_history"><?php echo text($data['social_history']); ?></textarea>
        </div>

        <div class="im-section">
            <label><?php echo xlt('Review of Systems'); ?></label>
            <textarea name="review_of_systems"><?php echo text($data['review_of_systems']); ?></textarea>
        </div>

        <div class="im-section">
            <label><?php echo xlt('Physical Exam'); ?></label>
            <textarea name="physical_exam"><?php echo text($data['physical_exam']); ?></textarea>
        </div>

        <div class="im-section">
            <label><?php echo xlt('Assessment'); ?></label>
            <textarea name="assessment"><?php echo text($data['assessment']); ?></textarea>
        </div>

        <div class="im-section">
            <label><?php echo xlt('Differential Diagnosis'); ?></label>
            <textarea name="differential_diagnosis"><?php echo text($data['differential_diagnosis']); ?></textarea>
        </div>

        <div class="im-section">
            <label><?php echo xlt('Plan'); ?></label>
            <textarea name="plan"><?php echo text($data['plan']); ?></textarea>
        </div>

        <div class="im-section">
            <label><?php echo xlt('Follow Up'); ?></label>
            <textarea name="follow_up"><?php echo text($data['follow_up']); ?></textarea>
        </div>

        <div class="im-section">
            <label><?php echo xlt('Red Flags'); ?></label>
            <textarea name="red_flags"><?php echo text($data['red_flags']); ?></textarea>
        </div>

        <div class="im-section">
            <label><?php echo xlt('Disposition'); ?></label>
            <input type="text" name="disposition" value="<?php echo attr($data['disposition']); ?>">
        </div>

        <div class="im-actions">
            <button type="submit" name="bn_save" class="btn btn-primary"><?php echo xlt('Save'); ?></button>
            <button type="submit" name="bn_save_continue" value="1" class="btn btn-secondary"><?php echo xlt('Save and Continue'); ?></button>
            <button type="button" class="btn btn-link" onclick="window.history.back();"><?php echo xlt('Cancel'); ?></button>
        </div>
    </form>
</div>
</body>
</html>
