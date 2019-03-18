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

    public static function getDepartId($departName)
    {
        $db = Db::getConnection();
        $query = "SELECT id FROM departments WHERE name = :departName";
        $result = $db->prepare($query);
        $result->bindParam(':departName', $departName, PDO::PARAM_STR);
        $result->execute();
        $result = $result->fetch();
        return $result['id'];
    }
}