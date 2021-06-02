<html>
<head><title>Secure Key Generator</title> 
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
 

 
</head>

<body id="fd">


    <form method="post">
    <h6 class="area">Secure Key Generator</h6>
    <div id="mov">
             
         
               
              <div id = "caja1"></div>
                    <input  style = " border-radius: 10px;" class="form-group mx-sm-3 mb-2" type="text" readonly name="generador" placeholder="contraseña" id="gnc"/>
                    <div id = "t1" class = "box-style selct1" name="numeros"></div>
                    <label style="margin-top: 156px; left: 825px; position: absolute; color:black;  text-shadow:0px 0px 5px #fff,
        0px 0px 7px #fff; " for="t1">Números</label>
                    <div id = "t2" class = "box-style selct2" name="mayusculas"></div>
                    <label style="margin-top: 205px; left: 825px; position: absolute; color:black;  text-shadow:0px 0px 5px #fff,
        0px 0px 7px #fff; " for="t2">Minúsculas</label>
                    <div id = "t3" class = "box-style selct3" name="minusculas"></div>
                    <label style="margin-top: 254px; left: 825px; position: absolute; color:black;  text-shadow:0px 0px 5px #fff,
        0px 0px 7px #fff; " for="t3">Mayúsculas</label>
                    <div id = "t4" class = "box-style selct4" name="simbolos"></div>
                    <label style="margin-top: 305px; left: 825px; position: absolute; color:black;  text-shadow:0px 0px 5px #fff,
        0px 0px 7px #fff; " for="t4">Simbolos</label>
                  
                
                    <select class="custom-select" id="t5">
                    <option value="null">Longitud</option>
                    <option value="8">8</option>
                    <option value="16">16</option>
                    <option value="32">32</option>
                    </select>
                    
              

 
                   
<input class="form-group mx-sm-3 mb-2" style = "border-radius: 10px;" type="text" readonly name="generador" placeholder="Porcentaje de seguridad" id="bt2"/>
              <button class="btn btn-primary btn-lg" type="button"  id="btn">Generar</buton>
</div>
         </form>
         

         <footer style = "left: 30px;"> Copyright © 2020 by TwoFactorHack </footer>
      
</body>

<style>

img[alt="www.000webhost.com"] {

	display:none;
}

	</style>


<script src= "js/jquery-3.5.1.min.js"></script>
    <script src="js/jqmain.js"></script>

</html>