<?php

return array(
    'employees/page-([0-9+])' => 'employee/index/$1',
    'employees' => 'employee/index',
    'department/([A-z]+)' => 'employee/byDepart/$1',
    'departments' => 'department/index',
    'post/([0-9]+)' => 'employee/byPost/$1',
    'posts' => 'post/index',
    '' => 'home/index'
);