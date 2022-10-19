geohash-php-extension
=====
## Introduce

geohash is a php extension,it can convert between “longitude and latitude” and "geohash".

geohash是一个用于转换经纬度和geohash的php扩展。

相似的代码，使用扩展进行转换的速度比使用纯php代码快10倍以上。

## support
- php5.x
- php7.x

## from
- [geohash](https://github.com/taogogo/geohash-php-extention)


## Install:
```shell
phpize
./configure 
make
make install
echo "extension=geohash.so" >> /etc/php.ini

```


## Example:

Geohash::decode(geohash string);

Geohash::encode(latitude,longtitude);

Geohash::encode(latitude,longtitude,precision=12);

```php
<?php
print_r( Geohash::decode("wm3yr31d2524") );
print_r( Geohash::encode(30.635780068114,104.03160111979,12) );
?>
```
## output:

```php
Array
(
    [latitude] => 30.635780068114
    [longitude] => 104.03160111979
)

wm3yr31d2524

```

##contact
here

##docs

google专利： http://www.google.fr/patents/US20130097163

维基百科： http://en.wikipedia.org/wiki/Geohash
