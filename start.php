<?php

set_include_path(get_include_path() . PATH_SEPARATOR . Bundle::path('zend').'libraries');

Autoloader::underscored(array(
    'Zend' => Bundle::path('zend').'libraries/Zend',
));


