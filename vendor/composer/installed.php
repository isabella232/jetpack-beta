<?php return array(
    'root' => array(
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'automattic/jetpack-beta',
        'dev' => false,
    ),
    'versions' => array(
        'automattic/jetpack-autoloader' => array(
            'pretty_version' => '2.10.x-dev',
            'version' => '2.10.9999999.9999999-dev',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../automattic/jetpack-autoloader',
            'aliases' => array(),
            'reference' => '198e6ad84f889b5cc78051095a7896aece64ae05',
            'dev_requirement' => false,
        ),
        'automattic/jetpack-beta' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'composer/semver' => array(
            'pretty_version' => '3.2.6',
            'version' => '3.2.6.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/./semver',
            'aliases' => array(),
            'reference' => '83e511e247de329283478496f7a1e114c9517506',
            'dev_requirement' => false,
        ),
        'erusev/parsedown' => array(
            'pretty_version' => '1.7.4',
            'version' => '1.7.4.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../erusev/parsedown',
            'aliases' => array(),
            'reference' => 'cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
            'dev_requirement' => false,
        ),
    ),
);
