<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->e($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/style.css">
</head>

<body class="d-flex h-100 text-center text-white bg-dark vertical-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <main class="px-3">
            <?php if ($main): ?>
            <h1 class="display-1 pb-4">Tone Indicators</h1>
            <p class="lead">Append a <a
                    href="https://web.archive.org/web/20220622143433/https://toneindicators.carrd.co/#introduction"
                    target="_blank">Tone Indicator</a> to this URL to view its definition.</p>
            <p> ~ ~ ~ </p>
            <p class="lead">Example: <a href="https://toneindicator.io/j" target="_blank">https://toneindicator.io/j</a>
            </p>
            <?php else: ?>
            <h1 class="display-1 pb-4"><?= $this->e($indicator) ?></h1>
            <p class="lead">This <a
                    href="https://web.archive.org/web/20220622143433/https://toneindicators.carrd.co/#introduction"
                    target="_blank">tone indicator</a> means: <i><?= $this->e(
                        $description
                    ) ?></i></p>
            <?php endif; ?>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>