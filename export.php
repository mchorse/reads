<?php

/* Dependencies */
require 'vendor/autoload.php';

/* Crystal Edge's imports */
use crystal\edge\FileSystemExport;
use crystal\edge\FileSystemExtract;
use crystal\edge\Logger as ILogger;
use crystal\edge\Site;

use mchorse\Logger;

/* Default stuff */
date_default_timezone_set('Europe/London');

/** Filters */
$read = '\mchorse\read';
$md = '\mchorse\process';

$extension = crystal\edge\remap('\mchorse\remap');

/* Logger and constants */
const SRC = __DIR__ . DIRECTORY_SEPARATOR . 'content';
const DEST = __DIR__ . DIRECTORY_SEPARATOR . 'build';

echo SRC;

$logger = new Logger();

/* Website */
$site = new Site(new FileSystemExtract(SRC));
$site->plugins = [$read, $md, $extension];

$logger->log(ILogger::INFO, "Building wesbite to %s from %s", [SRC, DEST]);

/* Build and ship it */
(new FileSystemExport($site, DEST))->export($logger);