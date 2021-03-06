<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$db = parse_url(getenv("DATABASE_URL"));
 
$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = $db["host"];
$CFG->dbname    = ltrim($db["path"], "/"); // trim leading slash from path to get database name
$CFG->dbuser    = $db["user"];
$CFG->dbpass    = $db["pass"];
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => $db["port"],
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('WWWROOT');
$CFG->dataroot  = '/tmp';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;
$CFG->sslproxy = true;


require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
