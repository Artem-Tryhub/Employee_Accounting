<?php

class Employee
{
    public static function getAll()
    {
        $db = Db::getConnection();
        $query = 'SELECT * '
                .'FROM employees ORDER BY id ASC';
        $result = $db->query($query);
        $employeesList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $employeesList[$i]['id'] = $row['id'];
            $employeesList[$i]['name'] = $row['name'];
            $employeesList[$i]['surname'] = $row['surname'];
            $employeesList[$i]['patronymic'] = $row['patronymic'];
            $employeesList[$i]['birthday'] = $row['birthday'];
            $employeesList[$i]['id_departments'] = $row['id_departments'];
            $employeesList[$i]['id_posts'] = $row['id_posts'];
            $employeesList[$i]['payment_type'] = $row['payment_type'];
            $employeesList[$i]['salary'] = $row['salary'];
            $i++;
        }
        return $employeesList;
    }


}