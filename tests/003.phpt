--TEST--
test decode
--EXTENSIONS--
geohash
--SKIPIF--
<?php if(!extension_loaded("geohash")) print "skip"; ?>
--FILE--
<?php
var_dump(Geohash::decode("wm3yr31d2524"));
?>
--EXPECT--
array(2) {
  ["latitude"]=>
  float(30.635780068114)
  ["longitude"]=>
  float(104.03160111979)
}