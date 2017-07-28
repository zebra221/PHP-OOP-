<?php

include_once 'models/animals.php';

function animalsAction() {

    $color = $_GET['color'] ?? NULL;

    $listOfAnimals = [
        'rabbit',
        'bear',
        'rat',
        'dog',
        'cat',
        'mouse'
    ];


    $animals = new Animals($listOfAnimals);
    $listOfAnimals = $animals->getListOfAnimals();

    $templateVariables = ['color' => $color, 'animals' => $listOfAnimals];
    $template = 'views/animals.view.php';

    return render($template, $templateVariables);
}

function smallAnimalsAction()
{
    return 'this is small animals action';
}

?>