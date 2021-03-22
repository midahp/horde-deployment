<?php
/**
 * Compatibility with Horde 5 expectations
 *
 * rpc url's like dav paths are generated from the horde webroot.
 * But horde webroot is no longer in the root dir of a horde installation.
 * Caldav does not like simple URL forwarding from outside what it thinks is webroot.
 *
 */
$_SERVER['REQUEST_URI'] = substr_replace($_SERVER['REQUEST_URI'], '/horde', -8, 0);
$_SERVER['SCRIPT_FILENAME'] = substr_replace($_SERVER['SCRIPT_FILENAME'], '/horde', -8, 0);
$_SERVER['SCRIPT_NAME'] = substr_replace($_SERVER['SCRIPT_NAME'], '/horde', -8, 0);
$_SERVER['PHP_SELF'] = substr_replace($_SERVER['PHP_SELF'], '/horde', -8, 0);

require __DIR__ . '/horde/rpc.php';