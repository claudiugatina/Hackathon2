<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
<title>Sanatatea pe intelesul copiilor</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="body.css">
<link rel="stylesheet" href="responsive.css">
<link rel="shortcut icon" href="/doctor.jpg"/>

</head>
<body>

<script>
var contor = 1;
var text = 'text';
function initVis() {
  for(var i = 2; i < 8; i++) {
    document.getElementById('text' + i).style.display = "none";
  }
}
function nextSection() {
  var x = document.getElementById(text + contor);
  x.style.display = "none";
  contor++;
  x = document.getElementById(text + contor);
  x.style.display = "block";
  if(contor == 7) {
    document.getElementById('nextBtn').style.display = "none";
  }
}
window.onload = initVis;
</script>

<div class="header">
  <h1>Sanatatea pe intelesul copiilor</h1>
</div>

<div class="row">

<div><p><?php include('meniu.html'); ?></p></div>

<div class="col-9">
  <h1>De ce trebuie sa mancam fructe si legume ? </h1>
  <img src="/p2.jpg" alt="pastila1" align="left"  width="220" height="400">
  <img src="/siringa.jpg" alt="siringa" align="right" width="220" height="400">
  <div id="text1"><p><?php include('fructeSiLegume/text1.txt'); ?></p></div>
  <div id="text2"><p><?php include('fructeSiLegume/text2.txt'); ?></p></div>
  <div id="text3"><p><?php include('fructeSiLegume/text3.txt'); ?></p></div>
  <div id="text4"><p><?php include('fructeSiLegume/text4.txt'); ?></p></div>
  <div id="text5"><p><?php include('fructeSiLegume/text5.txt'); ?></p></div>
  <div id="text6"><p><?php include('fructeSiLegume/text6.txt'); ?></p></div>
  <div id="text7"><p><?php include('fructeSiLegume/text7.txt'); ?></p></div>
  <img src="gifs/dancingFruit.gif", id="nextBtn" onclick="nextSection()" align="center">
  </div>

</div>
  
</script>

</body>
</html>
