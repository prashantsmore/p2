<?php
require('includes/Form.php');

$form = new DWA\Form($_GET);

if ($form->isSubmitted()) {
    $errors = $form->validate(
        [
            'tab' => 'required|numeric|min:2',
            'tip' => 'required',
            'split' => 'required|numeric|min:0|max:5',
        ]
    );
}