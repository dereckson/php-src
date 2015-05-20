--TEST--
PostgreSQL pg_select() - basic test using schema
--SKIPIF--
<?php include("skipif.inc"); ?>
--FILE--
<?php

include('config.inc');

$conn = pg_connect($conn_str);

foreach (array('', '.', '..') as $table) {
	var_dump(pg_insert($conn, '',  array('id' => 1, 'id2' => 1)));
}
?>
Done
--EXPECTF--

Warning: pg_insert(): The table name must be specified in %s on line %d
bool(false)

Warning: pg_insert(): The table name must be specified in %s on line %d
bool(false)

Warning: pg_insert(): The table name must be specified in %s on line %d
bool(false)
Done