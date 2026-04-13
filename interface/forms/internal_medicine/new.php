<?php

require_once("../../globals.php");
require_once("$srcdir/api.inc.php");
require_once("$srcdir/forms.inc.php");
require_once("$srcdir/registry.inc.php");

use OpenEMR\Common\Acl\AccessDeniedHelper;
use OpenEMR\Common\Acl\AclMain;
use OpenEMR\Common\Csrf\CsrfUtils;
use OpenEMR\Common\Session\SessionWrapperFactory;
use OpenEMR\Core\Header;

$formid = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$session = SessionWrapperFactory::getInstance()->getActiveSession();

if (!AclMain::aclCheckForm('internal_medicine')) {
    $formLabel = xl_form_title(getRegistryEntryByDirectory('internal_medicine', 'name')['name'] ?? 'Internal Medicine');
    AccessDeniedHelper::denyWithTemplate("ACL check failed for form: " . $formLabel, $formLabel);
}

$pid = (int) ($pid ?? $session->get('pid') ?? 0);
$encounter = (int) ($encounter ?? $session->get('encounter') ?? 0);
$userauthorized = (int) ($userauthorized ?? $session->get('userauthorized') ?? 0);
$groupname = (string) ($groupname ?? $session->get('authProvider') ?? '');
$currentUser = (string) ($session->get('authUser') ?? '');

if (empty($pid) || empty($encounter)) {
    die(xlt('Missing patient or encounter context'));
}

$visitTypeOptions = [
    '' => '',
    'New Consultation' => xlt('New Consultation'),
    'Follow-up' => xlt('Follow-up'),
    'Urgent Visit' => xlt('Urgent Visit'),
    'Routine Review' => xlt('Routine Review'),
    'Hospital Follow-up' => xlt('Hospital Follow-up'),
    'Transitional Care' => xlt('Transitional Care')
];

$dispositionOptions = [
    '' => '',
    'Home' => xlt('Home'),
    'ED Referral' => xlt('ED Referral'),
    'Admit' => xlt('Admit'),
    'Urgent Specialty Referral' => xlt('Urgent Specialty Referral'),
    'Routine Follow-up' => xlt('Routine Follow-up'),
    'Observation / Recheck' => xlt('Observation / Recheck')
];

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

$errors = [];

if ($formid > 0) {
    $row = sqlQuery(
        "SELECT fim.*
           FROM form_internal_medicine AS fim
           INNER JOIN forms AS f
                   ON f.form_id = fim.id
                  AND f.formdir = 'internal_medicine'
                  AND f.pid = fim.pid
                  AND f.encounter = fim.encounter
                  AND f.deleted = 0
          WHERE fim.id = ?
            AND fim.pid = ?
            AND fim.encounter = ?
            AND fim.deleted = 0",
        [$formid, $pid, $encounter]
    );

    if (empty($row)) {
        die(xlt('Form not found or access denied'));
    }

    foreach ($data as $key => $value) {
        $data[$key] = (string) ($row[$key] ?? '');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!CsrfUtils::verifyCsrfToken($_POST['csrf_token_form'] ?? '')) {
        die(xlt('Invalid CSRF token'));
    }

    foreach (array_keys($data) as $key) {
        $data[$key] = trim((string) ($_POST[$key] ?? ''));
    }

    if ($data['visit_type'] === '') {
        $errors[] = xlt('Visit Type is required');
    }

    if ($data['chief_complaint'] === '') {
        $errors[] = xlt('Chief Complaint is required');
    }

    if (strlen($data['visit_type']) > 100) {
        $errors[] = xlt('Visit Type is too long');
    }

    if (strlen($data['clinician_name']) > 255) {
        $errors[] = xlt('Clinician Name is too long');
    }

    if (strlen($data['disposition']) > 255) {
        $errors[] = xlt('Disposition is too long');
    }

    if (!array_key_exists($data['visit_type'], $visitTypeOptions)) {
        $errors[] = xlt('Invalid Visit Type');
    }

    if (!array_key_exists($data['disposition'], $dispositionOptions)) {
        $errors[] = xlt('Invalid Disposition');
    }

    if (empty($errors)) {
        if ($formid > 0) {
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
                  WHERE id = ?
                    AND pid = ?
                    AND encounter = ?
                    AND deleted = 0",
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
                    $currentUser,
                    $groupname,
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

            if (empty($newid)) {
                die(xlt('Failed to create form record'));
            }

            $formsRowId = addForm($encounter, "Internal Medicine", $newid, "internal_medicine", $pid, $userauthorized);
            if (empty($formsRowId)) {
                die(xlt('Failed to register form in encounter forms table'));
            }

            $formid = (int) $newid;
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
        .im-section input[type="text"],
        .im-section select { width: 100%; }
        .im-actions { margin-top: 24px; display: flex; gap: 10px; flex-wrap: wrap; }
        .im-errors { margin-bottom: 18px; padding: 12px 14px; border: 1px solid #dc3545; border-radius: 8px; color: #842029; background: #f8d7da; }
    </style>
</head>
<body class="body_top">
<div class="container im-wrap">
    <h2><?php echo xlt('Internal Medicine'); ?></h2>

    <?php if (!empty($errors)) { ?>
        <div class="im-errors">
            <ul class="mb-0">
                <?php foreach ($errors as $error) { ?>
                    <li><?php echo text($error); ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>

    <form method="post" action="new.php<?php echo $formid ? '?id=' . attr_url($formid) : ''; ?>">
        <input type="hidden" name="csrf_token_form" value="<?php echo attr(CsrfUtils::collectCsrfToken($session)); ?>">

        <div class="im-section">
            <label for="visit_type"><?php echo xlt('Visit Type'); ?></label>
            <select id="visit_type" name="visit_type">
                <?php foreach ($visitTypeOptions as $value => $label) { ?>
                    <option value="<?php echo attr($value); ?>" <?php echo ($data['visit_type'] === $value) ? 'selected' : ''; ?>>
                        <?php echo text($label); ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div class="im-section">
            <label for="clinician_name"><?php echo xlt('Clinician Name'); ?></label>
            <input id="clinician_name" type="text" name="clinician_name" value="<?php echo attr($data['clinician_name']); ?>">
        </div>

        <div class="im-section">
            <label for="chief_complaint"><?php echo xlt('Chief Complaint'); ?></label>
            <textarea id="chief_complaint" name="chief_complaint"><?php echo text($data['chief_complaint']); ?></textarea>
        </div>

        <div class="im-section">
            <label for="hpi"><?php echo xlt('HPI'); ?></label>
            <textarea id="hpi" name="hpi"><?php echo text($data['hpi']); ?></textarea>
        </div>

        <div class="im-section">
            <label for="pmh"><?php echo xlt('PMH'); ?></label>
            <textarea id="pmh" name="pmh"><?php echo text($data['pmh']); ?></textarea>
        </div>

        <div class="im-section">
            <label for="psh"><?php echo xlt('PSH'); ?></label>
            <textarea id="psh" name="psh"><?php echo text($data['psh']); ?></textarea>
        </div>

        <div class="im-section">
            <label for="medications"><?php echo xlt('Medications'); ?></label>
            <textarea id="medications" name="medications"><?php echo text($data['medications']); ?></textarea>
        </div>

        <div class="im-section">
            <label for="allergies"><?php echo xlt('Allergies'); ?></label>
            <textarea id="allergies" name="allergies"><?php echo text($data['allergies']); ?></textarea>
        </div>

        <div class="im-section">
            <label for="family_history"><?php echo xlt('Family History'); ?></label>
            <textarea id="family_history" name="family_history"><?php echo text($data['family_history']); ?></textarea>
        </div>

        <div class="im-section">
            <label for="social_history"><?php echo xlt('Social History'); ?></label>
            <textarea id="social_history" name="social_history"><?php echo text($data['social_history']); ?></textarea>
        </div>

        <div class="im-section">
            <label for="review_of_systems"><?php echo xlt('Review of Systems'); ?></label>
            <textarea id="review_of_systems" name="review_of_systems"><?php echo text($data['review_of_systems']); ?></textarea>
        </div>

        <div class="im-section">
            <label for="physical_exam"><?php echo xlt('Physical Exam'); ?></label>
            <textarea id="physical_exam" name="physical_exam"><?php echo text($data['physical_exam']); ?></textarea>
        </div>

        <div class="im-section">
            <label for="assessment"><?php echo xlt('Assessment'); ?></label>
            <textarea id="assessment" name="assessment"><?php echo text($data['assessment']); ?></textarea>
        </div>

        <div class="im-section">
            <label for="differential_diagnosis"><?php echo xlt('Differential Diagnosis'); ?></label>
            <textarea id="differential_diagnosis" name="differential_diagnosis"><?php echo text($data['differential_diagnosis']); ?></textarea>
        </div>

        <div class="im-section">
            <label for="plan"><?php echo xlt('Plan'); ?></label>
            <textarea id="plan" name="plan"><?php echo text($data['plan']); ?></textarea>
        </div>

        <div class="im-section">
            <label for="follow_up"><?php echo xlt('Follow Up'); ?></label>
            <textarea id="follow_up" name="follow_up"><?php echo text($data['follow_up']); ?></textarea>
        </div>

        <div class="im-section">
            <label for="red_flags"><?php echo xlt('Red Flags'); ?></label>
            <textarea id="red_flags" name="red_flags"><?php echo text($data['red_flags']); ?></textarea>
        </div>

        <div class="im-section">
            <label for="disposition"><?php echo xlt('Disposition'); ?></label>
            <select id="disposition" name="disposition">
                <?php foreach ($dispositionOptions as $value => $label) { ?>
                    <option value="<?php echo attr($value); ?>" <?php echo ($data['disposition'] === $value) ? 'selected' : ''; ?>>
                        <?php echo text($label); ?>
                    </option>
                <?php } ?>
            </select>
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