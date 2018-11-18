<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
<title>Sanatatea pe intelesul copiilor</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="body.css">
<link rel="stylesheet" href="responsive.css">
<link rel="shortcut icon" href="\doctor.jpg"/>


<style>

<!--Meniu dropdown 1-->
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}


.dropdown:hover .dropdown-content {
    display: block;
}


.desc {
    padding: 10px;
    text-align: center;
}

body {
  font-size: 150%;
}
</style>
</head>
<body>

<div class="header">
  <h1>Sanatatea pe intelesul copiilor</h1>
</div>


<div class="row">

<div><p><?php include('meniu.html'); ?></p></div>

<div class="col-9">
  <h1>Bine ati venit </h1>
  <div class="dropdown">
  <img src="/p2.jpg" alt="pastila1" align="left"  width="220" height="400">
  <div class="dropdown-content"><div class="desc">Buna, noi suntem Domnul P si Doamna I.</div>
  </div>
  </div>
  <img src="/siringa.jpg" alt="siringa" align="right" width="220" height="400">
  <p>Noi suntem Domnul P si Doamna I si impreuna vom invata de ce nu trebuie sa ne fie frica de Domnul Doctor si cateva lucruri despre corpul vostru. </p>
  <p>Speram ca o sa ne distram si invatam multe impreuna.</p>
</div>

</div>

</body>
</html>
