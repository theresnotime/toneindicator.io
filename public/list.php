<?php
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';
$indicators = (new ToneIndicator\Indicators())->getIndicators();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>What are tone indicators?</title>
        <meta name="description" content="What are tone indicators?" />
        <meta property="og:url" content="https://toneindicator.io" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="toneindicator.io" />
        <meta property="og:description" content="What are tone indicators?" />
        <meta
            property="og:image"
            content="https://toneindicator.io/assets/tone_lh.png" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta property="twitter:domain" content="toneindicator.io" />
        <meta property="twitter:url" content="https://toneindicator.io" />
        <meta name="twitter:title" content="toneindicator.io" />
        <meta name="twitter:description" content="What are tone indicators?" />
        <meta
            name="twitter:image"
            content="https://toneindicator.io/assets/tone_lh.png" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous" />
        <link rel="stylesheet" href="/assets/style.css" />

        <script
            async
            src="https://www.googletagmanager.com/gtag/js?id=G-VLVMLH4SB8"></script>
        <script>
            window.dataLayer = window.dataLayer || []

            function gtag() {
                dataLayer.push(arguments)
            }
            gtag('js', new Date())

            gtag('config', 'G-VLVMLH4SB8')
        </script>
    </head>

    <body class="d-flex h-100 text-center text-white bg-dark vertical-center">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <main class="px-3">
                <h1 class="display-1 pb-4">Supported tone indicators</h1>
                <div class="w-full container-lg mx-auto flex-column">
                    <p>
                        As defined in
                        <a
                            href="https://github.com/theresnotime/toneindicator.io/blob/main/indicators.json"
                            >indicators.json</a
                        >
                    </p>

                    <hr />

                    <?php foreach ($indicators as $indicator => $definition) {
                        echo '
                    <p>
                        <strong>/' .
                            $indicator .
                            '</strong>: ' .
                            $definition .
                            '
                    </p>
                    ';
                    } ?>

                    <hr />

                    <p><a class="link-secondary" href="/">go back</a></p>
                </div>
            </main>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    </body>
</html>
