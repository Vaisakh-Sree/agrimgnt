<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post"  action="phpexe/addcropdetailexe.php" enctype="multipart/form-data" name="form1" id="form1">
  <p>
    <label for="cropname">Crop Name:</label>
    <input type="text" name="cropname" id="cropname">
  </p>
  <p>Scientific Name
    <input type="text" name="sname" id="sname">
  </p>
  <p><br> 
    <label for="cropdetail">Crop Details:</label>
    <textarea name="cropdetail" id="cropdetail"></textarea>
  </p>
  <p>
    <label for="category">Crop Category:</label>
    <select name="category" id="category">
      <option selected="selected">Cereals</option>
      <option>Fruits</option>
      <option>Vegetables</option>
    </select>
  </p>
  <p>
    <label for="harvest">Harvesting:</label>
    <textarea name="harvest" id="harvest"></textarea>
  </p>
  <p>
    <label for="uses">Uses:</label>
    <textarea name="uses" id="uses"></textarea>
  </p>
  <p>
    <label for="fileField">Crop Image:</label>
  <input type = "file" name = "image" />
  </p>
  <p>
    <input name="submit" type="submit" id="submit" formaction="addcropdetailexe.php" value="Submit">
    <br>
  </p>
</form>
</body>
</html>