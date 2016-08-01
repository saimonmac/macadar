<?php

function getConfigName()
{
  switch (DEPLOY) {
    case LOCAL: return 'local';
    case DEV: return 'server';
    case PREPROD: return 'server';
    case PROD: return 'server';
    default: return null;
  }
}

include(__DIR__ . '/lib/log4php/src/main/php/Logger.php');
include(__DIR__ . '/logwrapper.php');
$configPath = __DIR__ . '/config/' . getConfigName() . '.xml';

if (DEPLOY == LOCAL && !file_exists($configPath))
{
  $configTmplPath = __DIR__ . '/config/local.xml.tmpl';
  copy($configTmplPath, $configPath);
}

Logger::configure($configPath);
$logger = new \Log\LogWrapper("logconfig");
$logger->trace("Log configured");