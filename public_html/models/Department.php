<?php

class Department
{
    public static function getAll()
    {
        $db = Db::getConnection();
        $query = "SELECT * FROM departments";
        $result = $db->query($query);
        $departmentsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $departmentsList[$i]['id'] = $row['id'];
            $departmentsList[$i]['name'] = $row['name'];
            $i++;
        }
        return $departmentsList;
    }
}