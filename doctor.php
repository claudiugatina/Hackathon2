<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
<title>Sanatatea pe intelesul copiilor</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="body.css">
<link rel="stylesheet" href="responsive.css">
<link rel="shortcut icon" href="/doctor.jpg"/>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".btn1").click(function(){
        $("p").animate({fontSize: "3em"});
    });
    $(".btn2").click(function(){
        $("p").animate({fontSize: "1em"});
    });
});
</script>

</head>
<body>

<script>
var contor = 1;
var text = 'text';
function initVis() {
  for(var i = 2; i < 7; i++) {
    document.getElementById('text' + i).style.display = "none";
  }
}
function nextSection() {
  document.getElementById('gifBtn').src = "gifs/doctorSimpatic.gif";
  var x = document.getElementById(text + contor);
  x.style.display = "none";
  contor++;
  x = document.getElementById(text + contor);
  x.style.display = "block";
  if(contor == 6) {
    document.getElementById('gifBtn').style.display = "none";
  }
}
window.onload = initVis;
</script>

<div class="header">
  <h1>Sanatatea pe intelesul copiilor</h1>
</div>

<div class="row">

<div class="col-3 menu">
  <ul>
    <a href="/site.html"><li>Acasa</li></a>
  </ul>
</div>

<div class="col-9">
<button class="btn1">Animate</button>
<button class="btn2">Reset</button>
  <p>Doctorul </p>

  <img src="/p2.jpg" alt="pastila1" align="left"  width="220" height="400">
  <img src="/siringa.jpg" alt="siringa" align="right" width="220" height="400">
  <img src="gifs/injectie.gif" onclick="nextSection()" id="gifBtn" align="center">
  <div id="text1"><p><?php include('doctor/text1.txt'); ?></p></div>
  <div id="text2"><p><?php include('doctor/text2.txt'); ?></p></div>
  <div id="text3"><p><?php include('doctor/text3.txt'); ?></p></div>
  <div id="text4"><p><?php include('doctor/text4.txt'); ?></p></div>
  <div id="text5"><p><?php include('doctor/text5.txt'); ?></p></div>
  <div id="text6"><p><?php include('doctor/text6.txt'); ?></p></div>
  
</div>
</div>

</body>
</html>
