<?php
$arUrlRewrite = array(
    0 =>
        array(
            'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
            'RULE' => 'componentName=$1',
            'ID' => NULL,
            'PATH' => '/bitrix/services/mobileapp/jn.php',
            'SORT' => 100,
        ),
    2 =>
        array(
            'CONDITION' => '#^/bitrix/services/ymarket/#',
            'RULE' => '',
            'ID' => '',
            'PATH' => '/bitrix/services/ymarket/index.php',
            'SORT' => 100,
        ),
    1 =>
        array(
            'CONDITION' => '#^/rest/#',
            'RULE' => '',
            'ID' => NULL,
            'PATH' => '/bitrix/services/rest/index.php',
            'SORT' => 100,
        ),
    3 =>
        array (
            'CONDITION' => '#^/services/([0-9a-z\\-]+)#',
            'RULE' => '',
            'ID' => 'bitrix:news',
            'PATH' => '/services/index.php',
            'SORT' => 100,
        ),
    4 =>
        array (
            'CONDITION' => '#^/news/([0-9a-z\\-]+)#',
            'RULE' => '',
            'ID' => 'bitrix:news',
            'PATH' => '/news/index.php',
            'SORT' => 100,
        ),
    5 =>
        array (
            'CONDITION' => '#^/nunc/([0-9a-z\\-]+)#',
            'RULE' => '',
            'ID' => 'bitrix:news',
            'PATH' => '/nunc/index.php',
            'SORT' => 100,
        ),
    6 =>
        array (
            'CONDITION' => '#^/catalog/#',
            'RULE' => '',
            'ID' => 'bitrix:catalog',
            'PATH' => '/catalog/index.php',
            'SORT' => 100,
        ),

);

