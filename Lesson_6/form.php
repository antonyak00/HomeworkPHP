

<body>
<form method="post" enctype="multipart/form-data">
    <input name="fileDownloader" type="file" value="1">
    <input value="Отправить" type="submit">
</form>
</body>

<?php
require __DIR__ . '/Uploader.php';

$download = new Uploader('fileDownloader');
$download ->isUploaded();
$download->isUploaded()->upload();
