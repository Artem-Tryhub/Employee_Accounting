<?php

class Post
{
    public static function getIdAndName()
    {
        $db = Db::getConnection();
        $query = "SELECT id, name FROM posts";
        $result = $db->query($query);
        $idName = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $idName[$i]['id'] = $row['id'];
            $idName[$i]['name'] = $row['name'];
            $i++;
        }
        return $idName;
    }
}