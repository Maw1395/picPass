<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>Pic PassI</title>

<link rel="stylesheet" href="style.css">
<script src="sha256.js"></script>
<script src="enc-base64.js"></script>
<script src="register.js"></script>

</head>
<body>
<div id="page-wrapper">

  <h1>Image File Reader</h1>
  <div>
    Select an image file:
    <input type="file" id="fileInput">
<!--  TODO: make the inputs invisible and put the info in label instead    -->
    <form action="/cgi-bin/register.cgi" method="post">
      <input type="text" id="uname" name="uname" value="<?php echo $_POST['uname']; ?>" ><br>
      <label>Nth sha256</label><br>
      <input type="textarea" id="sha" name="sha" value="" ><br>
      <label>Nth sha256 in base64</label><br>
      <input type="textarea" id="shab64" name="shab64" value="" ><br>
      <input id="register" type="submit" value="register" disabled="true">
      <!-- TESTING: This will actually be a session variable  -->
      <input type="checkbox" value="True" name="reset"><label>reset pw</label>
    </form>
    <a id="download" download="image.png"><input id="dlButton" type="button" onClick="download()" value="Download" disabled="true"></a>
  </div>
  <h2>Stego Image</h2>
  <canvas id="canvas" width=500 height=500>Don't use Microsoft Browsers L0000000SER!!!!</canvas>
  <h2>Original Image</h2>
  <div id="fileDisplayArea"></div>

</div>

</body>
</html>