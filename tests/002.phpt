--TEST--
test encode
--EXTENSIONS--
geohash
--SKIPIF--
<?php if(!extension_loaded("geohash")) print "skip"; ?>
--FILE--
<?php
var_dump(Geohash::encode(30.635780068114,104.03160111979,12));
?>
--EXPECT--
string(12) "wm3yr31d2524"