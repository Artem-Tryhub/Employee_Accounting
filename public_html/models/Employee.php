<?php

class Employee
{
    public static function getAll($showDefault = 0, $page = 1)
    {
        $offset = ($page - 1) * $showDefault;
        $db = Db::getConnection();
        $query = 'SELECT * '
            . 'FROM employees ORDER BY id ASC '
            . 'LIMIT ' . $showDefault
            . ' OFFSET ' . $offset;
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

    public static function getTotalAmount()
    {
        $db = Db::getConnection();
        $query = "SELECT COUNT(id) FROM employees";
        $result = $db->query($query);
        $result = $result->fetch();
        return $result['COUNT(id)'];
    }

    public static function getByDepart($departName)
    {
        $db = Db::getConnection();
        $departId = Department::getDepartId($departName);
        $query = "SELECT * FROM employees WHERE id_departments = :departId";
        $result = $db->prepare($query);
        $result->bindParam(':departId', $departId, PDO::PARAM_INT);
        $result->execute();
        $employeesList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $employeesList[$i]['id'] = $row['id'];
            $employeesList[$i]['name'] = $row['name'];
            $employeesList[$i]['surname'] = $row['surname'];
            $employeesList[$i]['patronymic'] = $row['patronymic'];
            $employeesList[$i]['birthday'] = $row['birthday'];
            $employeesList[$i]['id_posts'] = $row['id_posts'];
            $employeesList[$i]['payment_type'] = $row['payment_type'];
            $employeesList[$i]['salary'] = $row['salary'];
            $i++;
        }
        return $employeesList;
    }

    public static function getByPost($postId)
    {
        $db = Db::getConnection();
        $query = "SELECT * FROM employees WHERE  id_posts = :postId";
        $result = $db->prepare($query);
        $result->bindParam(':postId', $postId, PDO::PARAM_INT);
        $result->execute();
        $employeesList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $employeesList[$i]['id'] = $row['id'];
            $employeesList[$i]['name'] = $row['name'];
            $employeesList[$i]['surname'] = $row['surname'];
            $employeesList[$i]['patronymic'] = $row['patronymic'];
            $employeesList[$i]['birthday'] = $row['birthday'];
            $employeesList[$i]['id_departments'] = $row['id_departments'];
            $employeesList[$i]['payment_type'] = $row['payment_type'];
            $employeesList[$i]['salary'] = $row['salary'];
            $i++;
        }

        return $employeesList;
    }
}