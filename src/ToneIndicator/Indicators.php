<?php
/**
 * Indicators class
 *
 * PHP version 8
 *
 * @category  Class
 * @package   ToneIndicator
 * @author    Sam <sam@theresnotime.co.uk>
 * @copyright 2022 Sam
 * @license   <https://opensource.org/licenses/MIT> MIT
 * @link      #
 */
declare(strict_types=1);
namespace ToneIndicator;

require_once __DIR__ . '/../../vendor/autoload.php';

use Exception;

/**
 * Indicators class
 *
 * @category Class
 * @package  ToneIndicator
 * @author   Sam <sam@theresnotime.co.uk>
 * @license  <https://opensource.org/licenses/MIT> MIT
 * @link     #
 */
class Indicators
{
    public array $indicators;

    public function __construct()
    {
        try {
            $indicatorJson = file_get_contents(
                __DIR__ . '/../../indicators.json'
            );
            if ($indicatorJson) {
                $this->indicators = json_decode($indicatorJson, true);
                return $this;
            } else {
                throw new Exception('Error loading indicators');
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    public function exists(string $indicator)
    {
        if (key_exists($indicator, $this->indicators)) {
            return true;
        } else {
            return false;
        }
    }

    public function getDefinition(string $indicator)
    {
        if ($this->exists($indicator)) {
            return $this->indicators[$indicator];
        } else {
            return false;
        }
    }
}
