<?php return array(
    'root' => array(
        'name' => 'merterciyescagan/framework',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => null,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'laminas/laminas-diactoros' => array(
            'pretty_version' => '3.6.0',
            'version' => '3.6.0.0',
            'reference' => 'b068eac123f21c0e592de41deeb7403b88e0a89f',
            'type' => 'library',
            'install_path' => __DIR__ . '/../laminas/laminas-diactoros',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'merterciyescagan/framework' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => null,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/http-factory' => array(
            'pretty_version' => '1.1.0',
            'version' => '1.1.0.0',
            'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/http-factory',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '^1.0',
            ),
        ),
        'psr/http-message' => array(
            'pretty_version' => '2.0',
            'version' => '2.0.0.0',
            'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/http-message',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '^1.1 || ^2.0',
            ),
        ),
    ),
);
