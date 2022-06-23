<?php
/**
 * API class
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
 * API class
 *
 * @category Class
 * @package  ToneIndicator
 * @author   Sam <sam@theresnotime.co.uk>
 * @license  <https://opensource.org/licenses/MIT> MIT
 * @link     #
 */
class Api
{
    public array $validActions = ['getDefinition', 'getIndicators'];
    public string $action;
    public string $indicator;
    public Indicators $indicators;

    public function __construct()
    {
        $this->indicators = new Indicators();
    }

    public function execute()
    {
        if ($this->haveParams()) {
            $this->action = $this->getAction();
            $this->indicator = $this->getIndicator();
            if ($this->validAction($this->action)) {
                if ($this->action === 'getDefinition') {
                    $this->getDefinition();
                } elseif ($this->action === 'getIndicators') {
                    $this->getIndicators();
                }
            } else {
                $this->returnJson(
                    [
                        'error' => 'Invalid action',
                    ],
                    false
                );
            }
        } else {
            $this->returnJson(
                [
                    'error' => 'Missing paramaters',
                ],
                false
            );
        }
    }

    public function getDefinition()
    {
        if ($this->indicators->exists($this->indicator)) {
            $indicator = new Indicator($this->indicator);
            $this->returnJson($indicator, true);
        } else {
            $this->returnJson(
                [
                    'error' => 'Indicator does not exist',
                ],
                false
            );
        }
    }

    public function getIndicators()
    {
        $this->returnJson($this->indicators, true);
    }

    public function haveParams()
    {
        if (isset($_GET['action'], $_GET['indicator'])) {
            return true;
        } else {
            return false;
        }
    }

    public function getAction()
    {
        if ($this->haveParams()) {
            return $_GET['action'];
        } else {
            return false;
        }
    }

    public function getIndicator()
    {
        if ($this->haveParams()) {
            return $_GET['indicator'];
        } else {
            return false;
        }
    }

    public function validAction(string $action)
    {
        if (in_array($action, $this->validActions)) {
            return true;
        } else {
            return false;
        }
    }

    public function returnJson(array|object $data, bool $success)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'success' => $success,
            'data' => $data,
        ]);
    }
}
