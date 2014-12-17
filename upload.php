<?php

$uploaddir = '/var/www/html/pupiltracker/data/videos/' . str_replace(' ', '', $_POST["name"]) . "/" . $_POST["pkey"] . "/";
mkdir($uploaddir, 0777, true);
$uploadfile = $uploaddir . basename($_FILES['vid']['name']);

echo '<pre>';
echo $uploadfile;
echo "\n";
if (move_uploaded_file($_FILES['vid']['tmp_name'], $uploadfile)) {
    echo "Done! Have a good day.\n";
} else {
    echo "File not uploaded! Try again.\n";
}
echo '</pre>';

?>
