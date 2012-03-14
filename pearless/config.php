<?php

/*	Config.php
 *	Pearless Configuration File
 *	@author Henrik Volckmer
 */

// This is the document root, normally one level above htdocs.
$doc_root = $_SERVER["DOCUMENT_ROOT"];

// htdocs directory
$htdocs = $doc_root."/htdocs";

// CSS path relative 
$css_path = $htdocs."/css";

// Pearless path
$pearless = $doc_root."/pearless/pearless";

// Database configuration
$db_type = "";
$db_host = "";
$db_user = "";
$db_pass = "";
$db_name = "";

// Memcached (optional)
$memcache_host = "localhost";
$memcache_port = 11211;

// Include database object
require_once($pearless."/config.".$db_type.".php");
$db = new PLDB($db_host,$db_user,$db_pass,$db_name);

?>