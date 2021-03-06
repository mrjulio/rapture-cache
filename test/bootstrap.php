<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'rapture\\cache\\adapter\\apcu' => '/../src/Adapter/Apcu.php',
                'rapture\\cache\\adapter\\file' => '/../src/Adapter/File.php',
                'rapture\\cache\\adapter\\memcached' => '/../src/Adapter/Memcached.php',
                'rapture\\cache\\adapter\\memory' => '/../src/Adapter/Memory.php',
                'rapture\\cache\\definition\\cacheinterface' => '/../src/Definition/CacheInterface.php',
                'rapture\\cache\\definition\\cachetrait' => '/../src/Definition/CacheTrait.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd
