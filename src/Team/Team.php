<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 17.10.17
 * Time: 23.19
 */
declare(strict_types=1);

namespace OopProject\Team;

use OopProject\Workers\Worker;
class Team
{
    public $totalSalary;
    public $nameOfTeam;

    public function __construct (string $nameOfTeam)
    {
       $this->nameOfTeam=$nameOfTeam;
    }

    public function addWorker(Worker $worker):void
    {
        $this->totalSalary+=$worker->сountSalary();
    }

    public function printTotalSalary():void
    {
        echo "Team:".$this->nameOfTeam."<br>";
        echo "Total salary:".$this->totalSalary;
    }
}