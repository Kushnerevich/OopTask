<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 17.10.17
 * Time: 23.24
 */
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use OopProject\Workers\HtmlCoder;
use OopProject\Workers\Designer;
use OopProject\Workers\Developer;
use OopProject\Team\Team;

$myTeam = new Team("X");
$myTeam->addWorker($firstDeveloper=new Developer("Middle developer",1000));
$myTeam->addWorker($designer= new Designer("Designer",3000));
$myTeam->addWorker($secondDeveloper=new Developer("Second Middle developer",1000));
$myTeam->addWorker($htmlCoder= new HtmlCoder("Imposer",5,120));
$myTeam->addWorker($seniorDeveloper= new Developer("Senior developer",10,60));
$myTeam->printTotalSalary();