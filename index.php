<?php
include_once('openerp.class.php');

print "<pre/>\nOpenERP PHP connector : It support version 5 and 6.0<br/>\n Author : Tejas Tank, Tejas.tank.mca@gmail.com\n";
print "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n";

$rpc = new OpenERP();

$x = $rpc->login("demo", "demo", "demo", "http://demo.snippetbucket.com/xmlrpc/");

print_r($x);
echo "<textarea>user id : ", $x. "</textarea>";

$fields = array(
    //'id','name','model'
);

$ids = range(1,20);
$partners = $rpc->read($ids, $fields, "vehicle.model.brand");

print_r($partners);
/////print $partners = $x->unlink(array(19), "res.partner");

?>
