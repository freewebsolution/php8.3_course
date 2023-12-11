<?php

if (!isset($_POST['firstname'])) {
    include __DIR__ . './../templates/form.html.php';
} else {
    $firstName = htmlspecialchars($_POST['firstname'], ENT_QUOTES, 'UTF-8');
    $lastName = htmlspecialchars($_POST['lastname'], ENT_QUOTES, 'UTF-8');

    if ($firstName === 'Lucio' && $lastName === 'Ticali') {
        $output = 'Benvenuto grandissimo ' . $firstName;
    } else {
        $output = 'Benvenuto nel mio sito web';
    }

    include __DIR__.'/../templates/welcome.html.php';
}
