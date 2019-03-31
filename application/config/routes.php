<?php

return [

    '' => [
        'controller' => 'upload',
        'action'     => 'importView',
    ],

    'import' => [
        'controller' => 'upload',
        'action'     => 'importView',
    ],

    'results' => [
        'controller' => 'user',
        'action' => 'index',
    ],

    'upload/import' => [
        'controller' => 'upload',
        'action'     => 'importCsv',
    ],
    
    'users/clear' => [
        'controller' => 'user',
        'action'     => 'clearAll',
    ],

];