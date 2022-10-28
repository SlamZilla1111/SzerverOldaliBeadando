<?php
  session_start();

  
  $dbuser="root";
  $dbpw="";                                   //Létre  hoztam  egy példa adatbázist próbaként az  adatai: FelhasznalNev , ID , Jelszo
  $message = "";
  try
    {
         $conn = new PDO('mysql:host=localhost; dbname=proba', $dbuser, $dbpw);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
    }
    catch (PDOException $e)
    {
        echo "Adatbázis hiba: ".$e->getMessage(); die();
    }
    catch (Exception $e)
    {
        echo "Hiba: ".$e->getMessage(); die();
    }
        if(isset($_POST["login"]))//  Ha  rányomott a bejelentkezés gombra.
        {               
                $uname=trim($_POST["uname"]);
                $psw=($_POST["psw"]);

                if(empty($_POST["uname"]) || empty($_POST["psw"]))  //Ha üresek a bekért adatok
                    {
                        $message="<label>Nem adtad meg az adataidat!</label>";
                    }
                else                                                                    //Ha nem üresek
                    {
                        $sql="SELECT * FROM user WHERE FelhasznaloNev=:uname AND Jelszo=:psw";
                        $query=$conn->prepare($sql); 
                        $query->bindParam(":uname",$uname,PDO::PARAM_STR);
                        $query->bindParam(":psw",$psw,PDO::PARAM_STR);
                        $query->execute(
                            array('FelhasznaloNev' => $_POST["uname"],
                            'Jelszo'=>$_POST["psw"])
                        );
                                
                                
                        $count=$statement->rowCount();

                        if($count > 0)
                            {
                                $_SESSION["uname"]=$_POST["uname"];
                                header("location:Elozmenyek.php"); // Csak példaként 
                            }
                        else
                            {
                                $message = '<label>Nem jó</label>';
                            }
                    }
            }

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <!--xd-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="TermekGridview.css">
    <script src="search-bar.js" defer></script>
    <link rel="icon" type="image/png" href="Pictures/Icon.png">
    <title>Főoldal</title>
</head>
<nav>


            <?php 

                    if(isset($msg))
                        {
                            echo "<lablel class='text-danger'>".$msg."</label>";
                        }
            ?>





    <div class="topnav">
        <a class="active" href="Fooldal.php">Főoldal</a>
        <a href="ProfilJavitott.html">Profil</a>
        <a href="Feltöltés.html">Feltöltés</a>
        <a href="Register.html">Regisztráció</a>

        <form action="" method="post">
           <!-- Button to open the modal login form -->
            <button onclick="document.getElementById('id01').style.display='block'">Bejelentkezés</button>

            <!-- The Modal -->
            <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'"
            class="close" title="Close Modal">&times;</span>

            <!-- Modal Content -->
            <form class="modal-content animate" action="Fooldal.php" method="post">
                

                <div class="container" style="background-color: #00b6a1;">
                
                <input type="text" placeholder="Felhasználónév" name="uname" required><br>
                
                
                <input type="password" placeholder="Jelszó" name="psw" required>

                <input type="checkbox" name="jegyez" id="jegyez" value="1">Jegyezz meg
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Mégse</button>

                <button type="submit" name="login" >Bejelentkezés</button>

                
               
                </div>

                
              
                
                
            </form>
            </div>
        </form>
        
    </div>
</nav>
<body>
        <input type="text" id="search-input" placeholder="Keresés..." class="stickyHeader">
    <div id="content">

        <div class="termek">
            <img src="ProductPics/BMWi4.jpg">
            <p class="nev" data-text="Mindent Bele">BMW VALAMI Kocsi XD</p>
            <span class="leiras">-paradicsom szósz, papras dsad as df asika, oliva adsafdbogyó, dsfdsfds sajt ,pepperoni</span>
            <button class="more">Érdekel!</button>
        </div>
        <div class="termek">
            <img src="ProductPics/bmw_i4_m50_39.jpeg" >
            <p class="nev" data-text="Mindent Bele">Audi VALAMI Kocsi XD</p>
            <span class="leiras">-paradicsom szósz, paprika, oliva bogyó, sajt ,pepperoni</span>
            <button class="more">Érdekel!</button>
        </div>        
        <div class="termek">
            <img src="ProductPics/BMWi4.jpg" >
            <p class="nev" data-text="Mindent Bele">kecske VALAMI Kocsi XD</p>
            <span class="leiras">-paradicsom szósz, paprika, oliva bogyó, sajt ,pepperoni</span>
            <button class="more">Érdekel!</button>
        </div>
        <div class="termek">
            <img src="ProductPics/bmw_i4_m50_39.jpeg" >
            <p class="nev" data-text="Mindent Bele">BMW VALAMI Kocsi XD</p>
            <span class="leiras">-paradicsom szósz, paprika, oliva bogyó, sajt ,pepperoni</span>
            <button class="more">Érdekel!</button>
        </div>          
        <div class="termek">
            <img src="ProductPics/bmw_i4_m50_39.jpeg" >
            <p class="nev" data-text="Mindent Bele">BMW VALAMI Kocsi XD</p>
            <span class="leiras">-paradicsom szósz, paprika, oliva bogyó, sajt ,pepperoni</span>
            <button class="more">Érdekel!</button>
        </div>  
        <div class="termek">
            <img src="ProductPics/BMWi4.jpg">
            <p class="nev" data-text="Mindent Bele">BMW VALAMI Kocsi XD</p>
            <span class="leiras">-paradicsom szósz, paprikasdas dasd asd asda, oliva bogyó, sajt ,pepperoni</span>
            <button class="more">Érdekel!</button>
        </div>
        <div class="termek">
            <img src="ProductPics/BMWi4.jpg">
            <p class="nev" data-text="Mindent Bele">BMW VALAMI Kocsi XD</p>
            <span class="leiras">-paradfgdgdfgdfgfgfdgdfgfgfdgfdg dfgfdgfdgfgfggrt5zu kjk ztkkztkdicsom szósz, paprika, oliva bogyó, sajt ,pepperoni</span>
            <button class="more">Érdekel!</button>
        </div>

    </div>
</body>
</html>