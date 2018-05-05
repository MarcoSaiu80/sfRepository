<?php
//FRONT CONTROLLER DI DEFAULT

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend2', 'prod', false);
sfContext::createInstance($configuration)->dispatch();
