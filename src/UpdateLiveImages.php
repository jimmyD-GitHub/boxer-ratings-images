<?php

namespace App\Deploy;

define('APPLICATION_ROOT_DIR', dirname(__DIR__));

require APPLICATION_ROOT_DIR . '/vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\S3\Transfer;
use Aws\Exception\AwsException;

$client = new S3Client([
    'profile' => 'default',
    'version' => 'latest',
    'region' => 'us-west-2'
]);

$dest = 's3://images.boxeratings.com';
$source = APPLICATION_ROOT_DIR . '/public/';

$manager = new Transfer($client, $source, $dest, ['debug' => true]);

try {
    $manager->transfer();
} catch (AwsException $exception) {
    print $exception->getMessage();
}
