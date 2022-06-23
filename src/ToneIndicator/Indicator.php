<?php
/**
 * Indicator class
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
 * Indicator class
 *
 * @category Class
 * @package  ToneIndicator
 * @author   Sam <sam@theresnotime.co.uk>
 * @license  <https://opensource.org/licenses/MIT> MIT
 * @link     #
 */
class Indicator
{
    public string $indicator;
    public string $definition;

    public function __construct(string $indicator)
    {
        $indicators = new Indicators();
        if ($indicators->exists($indicator)) {
            $this->indicator = $indicator;
            $this->definition = $indicators->getDefinition($indicator);
            return $this;
        } else {
            throw new Exception('Indicator does not exist');
        }
    }
}
