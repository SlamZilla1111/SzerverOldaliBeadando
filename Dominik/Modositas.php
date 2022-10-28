<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Mod.css">
    <link rel="stylesheet" href="TermekGridwievJavitott.css">
    <script src="sticky-header.js" defer></script>
    <link rel="icon" type="image/png" href="Pictures/Icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Profil</title>
</head>
<nav>
    <div class="topnav" id="topnav">
        <a href="Index.html">Főoldal</a>
        <a class="active" href="Profil.html">Profil</a>
        <a href="Feltöltés.html">Feltöltés</a>
        <a href="Elozmenyek.html">Előzmények</a>
        <!--<a href="Register.html">Regisztráció</a>Ezt kivettem , mert  ahozz  ,hogy regisztrálj ki kell jelentkezned.
          Helyette az "Előzmények" kerül be-->
        <button class="kijelentkezes" id="belepes" name="belepes">Kijelentkezés</button>
    </div>
</nav>
<body>  
      <style>
          .alert {
            padding: 2px;
            background-color: red;
            color: black;
            opacity: 1;
            margin-top:5px;
            margin-left:  25%;
            transition: opacity 0.6s;
            font-size:15px;
            font-weight:bold;
            position:relative;
            width: 50%;
            text-align:center;
            border-radius:5px;
            border:2px solid  #84A98C;
          }

          .alert.warning {background-color: yellow;}
          .alert.success {background-color: green;}

          .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
          }

          .closebtn:hover {
            color: black;
          }
       </style>
      
      <script>
      var close = document.getElementsByClassName("closebtn");
          var i;

          for (i = 0; i < close.length; i++) {
            close[i].onclick = function(){
              var div = this.parentElement;
              div.style.opacity = "0";
              setTimeout(function(){ div.style.display = "none"; }, 600);
            }
          }
</script>    

<?php  
                  
                    if (isset($_POST["submit"]))
                    {                                   
                      
                        //----------------------------------Vezetéknév-----------------------------//
                        $vezeteknev=trim($_POST["veznev"]);  
                        $validveznev=preg_match("/^([a-zA-Z' ]+)$/",$vezeteknev);  
                        if($validveznev)
                        {       
                                
                          echo "<div class='alert success'>
                          <span class='closebtn'onclick=this.parentElement.style.display='none';>&times;</span>  
                          <p>Sikeres volt a mentés!</p>
                                </div>";
                        }
                        else if($vezeteknev==null)
                        {
                          echo "<div class='alert  warning'>
                          <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                             <p>Nem  adtál meg vezetéknevet!</p>
                          </div>";
                        }
                        else{
                          echo "<div class='alert'>
                                  <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                                     <p>A vezetékneved nem tartalmazhat számokat!</p>
                                </div>";
                        }


                        //------------------------------------------Keresztnév------------------------------//
                        $keresztnev=trim($_POST["kernev"]);             
                        $validkernev=preg_match("/^([a-zA-Z' ]+)$/",$keresztnev);

                        if($validkernev)
                        {
                          echo "<div class='alert success'>
                          <span class='closebtn'onclick=this.parentElement.style.display='none';>&times;</span>  
                          <p>Sikeres volt a mentés!</p>
                                </div>";
                        }
                        else if($keresztnev==null)
                        {
                          echo "<div class='alert  warning'>
                          <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                             <p>Nem  adtál meg keresztnevet!</p>
                          </div>";
                        }
                        else
                        {
                          
                         echo "<div class='alert'>
                          <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                             <p>A keresztneved nem tartalmazhat számokat!</p>
                            </div>";
                        }

                         //------------------------------------Város-----------------------------------------------//
                        $varos=trim($_POST["varos"]);             
                        $validvaros=preg_match("/^([a-zA-Z' ]+)$/",$varos);

                        if($validvaros)
                        {
                          echo "<div class='alert success'>
                          <span class='closebtn'onclick=this.parentElement.style.display='none';>&times;</span>  
                          <p>Sikeres volt a mentés!</p>
                                </div>";
                        }
                        else if($varos==null)
                        {
                          echo"<div class='alert  warning'>
                          <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                             <p>Nem adtad meg a város nevét!</p>
                          </div>";
                        }
                        else
                        {
                          echo "<div class='alert'>
                          <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                             <p>A város nem tartalmazhat számokat!</p>
                        </div>";
                        }


                        //-----------------------------------Utca/házszám----------------------------------//
                        $utca=trim($_POST["utca"]);             
                        $validutca=preg_match("/[a-zA-Z1-9À-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-Z1-9À-ÖØ-öø-ÿ]+\.?)* (((#|[nN][oO]\.?) 
                        ?)?\d{1,4}(( ?[a-zA-Z0-9\-]+)+)?)/",$utca);

                        if($validutca)
                        {
                          echo "<div class='alert success'>
                          <span class='closebtn'onclick=this.parentElement.style.display='none';>&times;</span>  
                          <p>Sikeres volt a mentés!</p>
                                </div>";
                        }
                        else if($utca==null)
                        {
                          echo "<div class='alert  warning'>
                          <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                             <p>Nem  adtál meg utca/házszámot!</p>
                          </div>";
                        }
                        else
                        {
                          echo "<div class='alert'>
                          <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                             <p>Az utca/házszámot hibás formátumban adtad meg!</p>
                        </div>";
                        }

                        //----------------------------------------E-mail---------------------------------------------------//
                        $email=trim($_POST["email"]);
                        $validemail=preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email);
                        if($validemail)
                        {	
                          echo "<div class='alert success'>
                          <span class='closebtn'onclick=this.parentElement.style.display='none';>&times;</span>  
                          <p>Sikeres volt a mentés!</p>
                                </div>";
                        }
                        else if($email==null)
                        {
                          echo"<div class='alert  warning'>
                          <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                             <p>Nem adtad meg  az E-mail címedet!</p>
                          </div>";
                        }
                        else if ($validemail==false) {
                          echo "<div class='alert'>
                          <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                             <p>Hibás E-mail formátum!</p>
                        </div>";
                        }

                        //------------------------------------------Jelszó-----------------------------------------------//
                        $jelszo=trim($_POST["jelszo"]);
                        $validjelszo=preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*]).{8,}$/",$jelszo);
                          /*Should contain at least a capital letter
                            Should contain at least a small letter
                            Should contain at least a number
                            Should contain at least a special character
                            And minimum length */
                        if($validjelszo)
                          {
                            echo "<div class='alert success'>
                            <span class='closebtn'onclick=this.parentElement.style.display='none';>&times;</span>  
                            <p>Sikeres volt a mentés!</p>
                                  </div>";
                          }
                          else if($jelszo==null)
                          {
                           echo "<div class='alert  warning'>
                          <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                             <p>Nem  adtál meg jelszót<p>
                          </div>";
                          }
                          else if(!$validjelszo)  /*Ezt nem tudtam megcsinálni*/
                          {
                            "<div class='alert'>
                            <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                               <p>Nem megfelelő jelszó ! Legalább 8 karakterből álljon!<i>Nem tartalmazhat:,$,*,[,],%, és szóközöket.</i><p>
                          </div>";
                          }
                        //---------------------------------------Telefonszám---------------------------------------------//
                        $tel=trim($_POST["tel"]);            
                        $validtel=preg_match("/((?:\+?3|0)6)(?:-|\()?(\d{1,2})(?:-|\))?(\d{3})-?(\d{3,4})/",$tel);

                        if($validtel)
                        {
                          echo "<div class='alert success'>
                          <span class='closebtn'onclick=this.parentElement.style.display='none';>&times;</span>  
                          <p>Sikeres volt a mentés!</p>
                                </div>";
                        }
                        else if($tel==null)
                        {
                          echo "<div class='alert  warning'>
                          <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                             <p>Nincs telefonszám!<p>
                          </div>";
                        }
                        else
                        {
                          echo "<div class='alert'>
                          <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                             <p>Hibás telefonszám!<i>Jó formátum:+36(12)345-6789;+36123456789;06123456789</i><p>
                        </div>";
                        }
                        
                        //--------------------------------------Jogsi---------------------------------------------//
                        $jogsi=trim($_POST["jogsi"]);            
                        $validjogsi=preg_match("/^[A-Z]{2}\d{7}$/",$jogsi);

                        if($validjogsi)
                        {
                          echo "<div class='alert success'>
                          <span class='closebtn'onclick=this.parentElement.style.display='none';>&times;</span>  
                          <p>Sikeres volt a mentés!</p>
                                </div>";
                        }
                        else if($jogsi==null)
                        {
                           echo "<div class='alert  warning'>
                           <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                              <p>Nincs jogsid ????<p>
                           </div>";
                        }
                        else
                        {
                          echo "<div class='alert'>
                          <span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
                             <p>Helytelen jogosítvány azonosító!<i>Probáld ki mondjuk így:AB1234567</i><p>
                        </div>";
                        }                                
                    }
                    ?>
<div class="user-data">   
    <img  id="chad"src="chadrick.jpg">
    <form method="post" action="Modositas.php">
  <table>
    
    <tr>
      <th>Vezetéknév</th>
      <td><input type="text" class="beiras" name="veznev" ></td>  
    </tr>
    <tr>
      <th>Keresztnév</th>
      <td><input type="text" class="beiras" name="kernev" ></td>
    </tr>
    <tr>
      <th>Város</th>
      <td><input type="text" class="beiras" name="varos" ></td>
    </tr>
    <tr>
      <th>Utca/házszám</th>
      <td><input type="text" class="beiras" name="utca" ></td>
    </tr>
    <tr>
      <th>Születési idő</th>
      <td><input type="date" class="beiras" name="szulido" ></td>
    </tr>
    <tr>
      <th>E-mail cím</th>
      <td><input type="text" class="beiras" name="email" ></td>
    </tr>
    <tr>
      <th>Jelszó</v>
      <td><input type="password"  name="jelszo"  id="id_password" class="passwordshow"></td>
    </tr>
    <tr>
        <th>Telefonszám</th>
        <td><input type="tel" class="beiras" name="tel" ></td>
     </tr>
      <tr>
        <th>Jogosítvány azonosító</th>
        <td><input type="text" class="beiras" name="jogsi" ></td>
      </tr>
    </table>
        <input type="submit" class="opcio" id="modositas" name="submit" value="Mentés">
    </form>
  <button class="opcio" id="modositas" name="kepfeltoltes" >Új Profilkép Feltöltése</button>
  <button class="opcio" id="torles" name="torles">Fiók Törlése</button>
</div>
    
<footer>
    <a target="_blank" href="https://icons8.com/icon/X9Cx8uz1dywz/uchiha-eyes">Uchiha Eyes</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>
    <a target="_blank" href="https://icons8.com/icon/6deTh43sfBTt/eyelashes-2d">Eyelashes 2D</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>
</footer>
</html>