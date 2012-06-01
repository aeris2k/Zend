<?php

$lib_path = Bundle::path('zend').'libraries';

set_include_path(get_include_path() . PATH_SEPARATOR . $lib_path);

Autoloader::underscored(array(
    'Zend' => $lib_path . '/Zend',
));