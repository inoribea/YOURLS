<?php
$databaseUrl = getenv('DATABASE_URL');

preg_match('/^(?:postgres|pgsql):\/\/([^:]+):([^@]+)@([^:]+):(\d+)\/(.+)$/', $databaseUrl, $matches);

if (!$matches) {
    die("Invalid DATABASE_URL format. Expected: postgres://user:pass@host:port/dbname");
}

define('YOURLS_DB_USER', $matches[1]);
define('YOURLS_DB_PASS', $matches[2]);
define('YOURLS_DB_HOST', $matches[3]);
define('YOURLS_DB_PORT', $matches[4]); 
define('YOURLS_DB_NAME', $matches[5]);
define('YOURLS_DB_DRIVER', 'pgsql'); 

define('YOURLS_SITE', getenv('YOURLS_SITE_URL'));
define('YOURLS_SECRET', getenv('YOURLS_SECRET'));