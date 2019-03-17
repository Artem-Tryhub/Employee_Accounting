<?php

class DepartmentController
{
    public function actionIndex()
    {
        $departments = Department::getAll();
        require_once (ROOT . '/views/department/index.php');
        return true;
    }

}