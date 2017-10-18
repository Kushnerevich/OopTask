<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 17.10.17
 * Time: 23.15
 */

declare(strict_types=1);

namespace OopProject\Workers;

class Designer extends Worker
{
    public function __construct(string $name,int $salary,int $countOfHours=0)
    {
        $this->informationAboutWorker=$name;
        $this->salary=$salary;
        $this->times=$countOfHours;
    }
}