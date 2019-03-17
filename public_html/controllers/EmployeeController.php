<?php

class EmployeeController
{
    public function actionIndex($page = 1)
    {
        if(isset($_POST['numberEmployees'])){
            $numberEmployees = $_POST['numberEmployees'];
        } else {
            $numberEmployees = 20;
        }
        $employees = Employee::getAll($numberEmployees,$page);
        $totalEmployees = Employee::getTotalAmount();
        $pagination = new Pagination($totalEmployees, $page, $numberEmployees, 'page-');

        require_once (ROOT .'/views/employee/index.php');
        return true;
    }

    public function actionByDepart($departName)
    {
        $emplByDepart = Employee::getByDepart($departName);
        require_once (ROOT.'/views/employee/byDepart.php');
    }
}