<?php
return array (
    'backend' =>
        array (
            'frontName' => 'admin',
        ),
    'install' =>
        array (
            'date' => 'Fri, 12 Feb 2016 05:29:44 +0000',
        ),
    'crypt' =>
        array (
            'key' => '910acedf14252adcfc7761294ddab1e7',
        ),
    'session' =>
        array (
            'save' => 'files',
        ),
    'db' =>
        array (
            'table_prefix' => '',
            'connection' =>
                array (
                    'default' =>
                        array (
                            'host' => '127.0.0.1',
                            'dbname' => 'magento2_functional_tests',
                            'username' => 'root',
                            'password' => 'mysql',
                            'active' => '1',
                        ),
                ),
        ),
    'resource' =>
        array (
            'default_setup' =>
                array (
                    'connection' => 'default',
                ),
        ),
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'cache_types' =>
        array (
            'config' => 0,
            'layout' => 0,
            'block_html' => 0,
            'collections' => 0,
            'reflection' => 0,
            'db_ddl' => 0,
            'eav' => 0,
            'config_integration' => 0,
            'config_integration_api' => 0,
            'full_page' => 0,
            'translate' => 0,
            'config_webservice' => 0,
        ),
);
