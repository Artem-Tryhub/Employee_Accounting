<?php

return array(
    'employees/page-([0-9+])' => 'employee/index/$1',
    'employees' => 'employee/index',
    'department/([a-z]+)' => 'departments/index/$1',
    'departments' => 'department/index',
    '' => 'home/index'
);