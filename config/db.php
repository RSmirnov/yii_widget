<?php

return [
    //'class' => 'yii\db\Connection',
    'class' => 'apaoww\oci8\Oci8DbConnection',
    'dsn' => 'oci:dbname=//office.avkcom.ru:61521/tbeacon;charset=CL8MSWIN1251',
    'username' => 'basdb',
    'password' => 'EckeubDsxbcktybq',
    'attributes' => [
                        PDO::ATTR_STRINGIFY_FETCHES => true
                    ]
];
