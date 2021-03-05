<?php

use EmployeesApp\Manager;
use EmployeesApp\Tester;
use EmployeesApp\Programmer;
use EmployeesApp\Render;
$managerProgram=new Manager("Jonas",'Jonaitis',"86461345");
$managerTest=new Manager("Zigmas",'Zigmaitis',"864623455");
$programmer1=new Programmer("Simas","Simaitis","86122345");
$programmer2=new Programmer("Juozas","Juozaitis","86672345");
$tester1=new Tester("Petras","Petraitis","86145345");
$tester2=new Tester("Giedrius","Giedraitis","86145345");

$managerProgram->setDepartament("Programming");
$managerTest->setDepartament("Testing");

$programmer1->setManager($managerProgram->getFullName());
$programmer1->setLanguage("PHP");
$programmer2->setManager($managerProgram->getFullName());
$programmer2->setLanguage("JavaScript");

$tester1->setManager($managerTest->getFullName());
$tester1->setTools("Selenium");
$tester2->setManager($managerTest->getFullName());
$tester2->setTools("Appium");

$managers=[$managerProgram->showData(),$managerTest->showData()];
$programmers=[$programmer1->showData(),$programmer2->showData()];
$testers=[$tester1->showData(),$tester2->showData()];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>
<h1>Managers</h1>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Phone</th>
        <th>Departament</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($managers as $value):?>
        <tr>
            <?php Render::printData($value);?>
        </tr>
    <?php endforeach;?>

    </tbody>
</table>
<h1>Programmers</h1>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Phone</th>
        <th>Language</th>
        <th>Manager</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($programmers as $value):?>
        <tr>
            <?php Render::printData($value);?>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
<h1>Testers</h1>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Phone</th>
        <th>Tool</th>
        <th>Manager</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($testers as $value):?>
        <tr>
            <?php Render::printData($value);?>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

</body>
</html>

