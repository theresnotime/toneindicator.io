<?php
/**
 * Index
 *
 * PHP version 8
 *
 * @category  File
 * @package   ToneIndicator
 * @author    Sam <sam@theresnotime.co.uk>
 * @copyright 2022 Sam
 * @license   <https://opensource.org/licenses/MIT> MIT
 * @link      #
 */
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';

$indicators = new ToneIndicator\Indicators();
$templates = new League\Plates\Engine(__DIR__ . '/../templates');
if ($_SERVER['REQUEST_URI'] === '/') {
    echo $templates->render('main', [
        'title' => 'toneindicator.io',
        'main' => true,
    ]);
} else {
    try {
        $indicator = new ToneIndicator\Indicator(
            substr($_SERVER['REQUEST_URI'], 1)
        );
        echo $templates->render('main', [
            'main' => false,
            'title' => 'toneindicator.io | /' . $indicator->indicator,
            'indicator' => '/' . $indicator->indicator,
            'description' => $indicator->definition,
        ]);
    } catch (Exception $e) {
        echo $templates->render('main', [
            'title' => 'toneindicator.io',
            'main' => true,
        ]);
    }
}
?>
