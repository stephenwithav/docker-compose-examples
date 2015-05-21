<?php

try {
    $m = new Memcached();

    if ($m->addServer('memcache', 11211)) {
        echo "Connected!";
    }
    else {
        echo "Connection failed.";
    }
}
catch (Exception $e) {
    echo "Boo: " . $e->getMessage() . "<br/>";
}
