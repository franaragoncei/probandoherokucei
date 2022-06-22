<?php
session_name('test');
session_start();
$host = 'nuepp3ddzwtnggom.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
$dbname = 'wt2ctnjcys6zand6';
$username = 'vfps24ai3j6kda6v';
$password = 'w4bfjjvd3bfz49f7';

$options = [
    \PDO::ATTR_ERRMODE  => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE  => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES  => false
];