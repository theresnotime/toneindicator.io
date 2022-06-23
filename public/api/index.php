<?php
/**
 * API endpoint
 *
 * PHP version 8
 *
 * @category  API
 * @package   ToneIndicator
 * @author    Sam <sam@theresnotime.co.uk>
 * @copyright 2022 Sam
 * @license   <https://opensource.org/licenses/MIT> MIT
 * @link      #
 */
declare(strict_types=1);
require_once __DIR__ . '/../../vendor/autoload.php';
$api = new ToneIndicator\Api();
$api->execute();
