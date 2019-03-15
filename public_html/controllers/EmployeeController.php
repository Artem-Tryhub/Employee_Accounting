<?php

class EmployeeController
{
    public function actionIndex($count = 20, $page = 1)
    {
        $employees = Employee::getAll();
        $totalEmployees = count($employees);
        $pagination = new Pagination($totalEmployees, $page, $count, 'page-');
        
        require_once (ROOT .'/views/employee/index.php');
        return true;
    }
}