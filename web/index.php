<?php
require __DIR__ . '/../vendor/autoload.php';
$simplon_root = __DIR__ . '/../vendor/simplonphp/simplonphp/src/SimplOn';

SimplOn\Main::run(array(
    'DEFAULT_ELEMENT' => '\Tutorial\Elements\Student',
    'DEV_MODE' => true,
    'DATA_STORAGE' => new SimplOn\DataStorages\MySql(
        getenv('IP'),
        'c9',
        getenv('C9_USER'),
        null),
    ////////////////////////////////////////
    'LOCAL_ROOT' => __DIR__,
    'REMOTE_ROOT' => '.',

    'SimplOn_PATH' => realpath($simplon_root),
    'MASTER_TEMPLATE' => realpath($simplon_root . '/Renderers/Html5.html'),
    'DEFAULT_METHOD' => 'index',
    'DEFAULT_RENDERER' => new SimplOn\Renderers\Html5(),
    'CREATE_LAYOUT_TEMPLATES' => true,
    'OVERWRITE_LAYOUT_TEMPLATES' => true,
    'USE_LAYOUT_TEMPLATES' => true,

    'CREATE_FROM_TEMPLATES' => true,
    'OVERWRITE_FROM_TEMPLATES' => true,
    'USE_FROM_TEMPLATES' => true,
    'JS_FLAVOUR' => 'jQuery',
    'LIMIT_ELEMENTS' => '20',
));