<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <style>h2 { margin-top: 50px; } h3 { margin-left: 10px; } p { margin-left: 20px; }</style>
</head>
<body>
    <h1><?= (string) $xml->Document->name ?></h1>
    <h2><?= (string) $xml->Document->description ?></h2>
    <?php foreach ($xml->Document->Folder as $folder) { ?>
        <h2><?= (string) $folder->name ?></h2>
        <div>
        <?php foreach ($folder->Placemark as $place) { ?>
            <?php if (isset($place->Point)) { ?>
                <h3><a href="<?= getUrl($place); ?>"><?= (string) $place->name ?></a></h3>
                <p><?= (string) $place->description ?></p>
            <?php } ?>
        <?php } ?>
        </div>
    <?php } ?>
</body>
</html>
