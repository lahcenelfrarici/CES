<?php
var_dump($_FILES);

if (!empty($_FILES)) {
  $tmp = $_FILES['file']['tmp_name'];
  var_dump(is_uploaded_file($tmp));
  var_dump(getimagesize($tmp));
}
?>

<form method="post" enctype="multipart/form-data">
  <input type="file" name="file">
  <button>Upload</button>
</form>
