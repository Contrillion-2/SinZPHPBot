<?php

#
#    S P Y C
#      a simple php yaml class
#
# license: [MIT License, http://www.opensource.org/licenses/mit-license.php]
#

include('spyc.php');

$array = Spyc::YAMLLoad('test.yaml');
array_push($array, "test");

echo '<pre><a href="spyc.yaml">spyc.yaml</a> loaded into PHP:<br/>';
print_r($array);
echo '</pre>';


echo '<pre>YAML Data dumped back:<br/>';
echo Spyc::YAMLDump($array);
echo '</pre>';