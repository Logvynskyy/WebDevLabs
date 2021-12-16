<?php

$errors = [];
$data = [];

if (empty($_POST['theme'])) {
    $errors['theme'] = 'Theme is required.';
}

if (empty($_POST['description'])) {
    $errors['description'] = 'Description is required.';
}

if (empty($_POST['datepicker'])) {
    $errors['datepicker'] = 'datepicker is required.';
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}

echo json_encode($data);
?>