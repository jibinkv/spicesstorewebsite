<?php

require 'Controller/SpicesController.php';
$spicesController = new SpicesController();

if(isset($_POST['types']))
{
    //Fill page with spices of selected type
    $spicesTables = $spicesController->CreateSpicesTables($_POST['types']);
}
else
{
    //Page loaded first time, no type selected -> show all spices
    $spicesTables = $spicesController->CreateSpicesTables('%');
}

//Output page data
$title = 'Spices Shop';
$content = $spicesController->CreateSpicesDropdownList(). $spicesTables;

include 'template.php';
?>
