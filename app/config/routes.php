<?php
return [
    ''=> [
    'controller' => 'main',
    'action' => 'index'
    ],

    'admin/login' => [
        'controller' => 'admin',
        'action' => 'auth'
    ],
    'admin/signup' => [
        'controller' => 'admin',
        'action' => 'signup'
    ],
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],

    'admin' => [
        'controller' => 'admin',
        'action' => 'admin'
    ],

];