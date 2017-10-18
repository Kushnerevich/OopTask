<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 17.10.17
 * Time: 23.04
 */

declare(strict_types=1);

namespace OopProject\Workers;

abstract class Worker
{
    protected $informationAboutWorker;
    public $salary;
    protected $times;

    public function сountSalary():int
    {
        if ($this->times===0)
        {
            return $this->salary;
        }
        else
        {
            return $this->salary*$this->times;
        }
    }
}