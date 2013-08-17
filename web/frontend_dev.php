<?php

// this check prevents access to debug front controllers that are deployed by accident to production servers.
// feel free to remove this, extend it or make something more sophisticated.
if (!in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1')))
{
  die('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}
define('SF_ROOT_DIR', realpath(dirname(__FILE__).'/..'));
define('SF_APP','frontend');
define('SF_ENVIRONMENT','dev');
define('SF_DEBUG', true);

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend',SF_ENVIRONMENT, true);
sfContext::createInstance($configuration)->dispatch();
