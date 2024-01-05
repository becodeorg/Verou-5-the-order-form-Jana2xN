<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions
session_start();

// Store the current input data in the session
$_SESSION['input_data'] = $_POST;

// Use the current input data, if available, otherwise return empty string
$inputData = $_SESSION['input_data'] ?? [];

// Use this function when you need to need an overview of these variables
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

$products = [
    ['name' => 'Spellbinding Serums', 'price' => 13.60],
    ['name' => 'Crystal Cauldrons', 'price' => 32.40],
    ['name' => 'Glowing Goblets', 'price' => 21.50],
    ['name' => 'Wand Whittling Kits', 'price' => 17.75],
    ['name' => 'Familiar Finders', 'price' => 42.85],
    ['name' => 'Incantation Instruction Manuals', 'price' => 8.25],
    ['name' => 'Grimoire Journals', 'price' => 13.95],
    ['name' => 'Mystic Mists', 'price' => 10.50],
];

$totalValue = 0;

function validate()
{
    // TODO: This function will send a list of invalid fields back
    return [];
}

function handleForm()
{
    // TODO: form related tasks (step 1)

    // Validation (step 2)
    $invalidFields = validate();
    if (!empty($invalidFields)) {
        // TODO: handle errors
    } else {
        // TODO: handle successful submission
    }
}

// TODO: replace this if by an actual check for the form to be submitted
$formSubmitted = false;
if ($formSubmitted) {
    handleForm();
}

require 'form-view.php';