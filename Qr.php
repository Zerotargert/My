<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9371976363197718"
     crossorigin="anonymous"></script>
     <title>Qr Code generate</title>
    </head>
    <body>

<header class="header">
  <a class="logo">Generate Qr Code here </a>
  

  <input type="checkbox" name="" id="check">
  <label for="check" class="icon">
    <span class="material-symbols-outlined">
<img src="img/menu.svg" alt="">
</span>
  </label>
  
  
  <nav class="navbar">
    <a href="home.php" style="--i:0;">Home</a>
    <a href="Qr.php" style="--i:1;" id="active">Qr Code generate</a>
    <a href="tem.php" style="--i:1;">Template Of Graphics</a>
    <a href="scan.php" style="--i:3;">Scan Qr Code</a>
  </nav>
</header>

<div class="con">
    <p>Enter your text or URL</p>
    <input type="text" placeholder="Text or URL" id="qrText">
    
    <div class="imgBox">
        <img src="" id="qrI">
    </div>
    
    <button onclick="generateQr()" class="g">Generation QR Code</button>
    <div class="a">
    <a href="https://quickchart.io/qr?text= + qrText.value" id="save">Save image</a>
    <a href="scan.php" id="scan">Scan Qr Code </a>
    </div>
</div>

<script>

let imgBox= document.getElementById("imgBox")
let qrI= document.getElementById("qrI")
let qrText= document.getElementById("qrText")

function generateQr(){
    qrI.src = "https://quickchart.io/qr?text=" + qrText.value;
    imgBox.classList.add("show-img");
}

</script>




	
    </body>
</html>		