<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style>
        body{
            margin: 0;
            font-family: Poppins;
            font-size: 12px;
            overflow-x:hidden;
            background-color: #e9f5c2;
            box-sizing: border-box;
        }
        a{
    text-decoration: none;
}
header{
    width: 1400px;
    max-width: 80%;
    margin: auto;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    z-index: 100;
}
.logo{
           width: 100px;
           height: 50px;
           position: relative;
           right:70px;
          
}
header a{
    font-size: 18px;
    color: #c8e50b;
    font-weight: 700;
    margin-right: 40px;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    transition: 0.4s;
}
header a:hover{
    color: white;
   
}
footer {
    background-color:#333;
    color: #fff;
    padding: 50px 0;
}

.footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
}
.footer-contact {
    flex: 1;
    position: relative;
    left:1000px;
    justify-content: space-between;
}


.footer-bottom {
    border-top: 1px solid #444;
    padding-top: 10px;
    text-align: center;
}
.footer-bottom p{
    position: relative;
    top:250px;
}
.footer-logo img{
    width: 100px;
           height: 50px;
           position: relative;
           left:70px;
           top:35px;

}
.footer-map{
    position: relative;
    bottom:35px;
    
    left:100px;
}
.sec1{
    width: 100%;
    height: 700px;
}
.sec1 strong{
    margin-left: 20px;
    
}
.sec1 h1{
    font-family: Poppins;
    font-size: 30px;
    color:#286204;
    margin-left: 20px;
   text-decoration: underline black;
}
.sec1  p{
    width:700px;
    font-size: 12px;
    font-family: Poppins;
    margin: 20px;
}
.sec1 span{
    color:#286204;
    font-size: 15px;
    font-weight: bold;
   
}
.wrapper{
    width: 550px;
    height: 350px;
    overflow:hidden;
    position:relative;
    bottom: 600px;
    left:750px;
    border-radius: 15px;
    box-shadow: rgba(44, 125, 4, 0.4) 5px 5px, rgba(44, 125, 4, 0.4) 10px 10px, rgba(44, 125, 4, 0.4) 15px 15px, rgba(44, 125, 4, 0.4) 20px 20px, rgba(44, 125, 4, 0.4) 25px 25px;
}
.wrapper > div{
    width: 100%;
    height: 100%;
    position: absolute;
    animation: animate 25s infinite ;
    opacity: 0;
    background-size: cover;
    background-position: center center;


}
.wrapper > div:nth-child(2) {
    animation-delay: 5s;
}

.wrapper > div:nth-child(3) {
    animation-delay: 10s;
}

.wrapper > div:nth-child(4) {
    animation-delay: 15s;
}
@keyframes animate{
    10%{
        opacity: 1;
    }
    20%{
        opacity:1;
    }
    10%{
      transform: scale(1.2);
    }
}
.button-link {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #286204;
            background-color: transparent;
            border: 2px solid black;
            border-radius: 10px;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease ;
            position: relative;
            bottom:550px;
            left:930px;
            letter-spacing: 2px;
        }

        .button-link:hover {
            background-color:#286204 ;
            color:white;
           
        }

        .button-link:active {
            background-color: #004085;
        }



    </style>
</head>

<body>
<header>
       <img src="cropped-cropped-cropped-63-1.png" class="logo">
        <nav>
            <a href="index.php">Acceuil</a>
            <a href="index.php">Apropos</a>
           
            <a href="index.php">Contacter</a>
            
        </nav>
    </header>
<section class="sec1">
    <h1>Industriel</h1>

    <p>Nous réalisons les schémas électriques, le câblage des armoires électriques, la programmation des automates, des équipements de télégestion et de supervision.</p>
    <ul>
    <li><span> Conception, étude (schéma, calcul, CAO, DAO)</span>.</li>
 <li> <span> Installations électriques basse tension (équipement, câblage, mise en service)    </span> </li>
 <li> <span> Automatisme industriel </span> </li>
 <li> <span>  Coffrets et Armoires de démarrage moteurs et variateurs de vitesse</span></li>
</ul>

<strong>SEIPIA  dispose à ce titre de :</strong>
<ul>

  <li><span> Service Exécution</span>.</li>
 <li> <span>Atelier de chaudronnerie    </span> </li>
 <li> <span>Atelier de câblage d’armoires électriques </span> </li>
 <li> <span>Atelier de Maintenance et Rebobinage des Moteurs.</span></li>
 <li> <span>Monteurs hydrauliciens et électrotechniciens</span></li>
 <li> <span>Service approvisionnement</span></li>
</ul>

<strong>Matériels d’Intervention :</strong>
<ul>
  <li><span> -Camions Grue</span>.</li>
 <li> <span> -Véhicules utilitaires pick-up  </span> </li>
 <li> <span> -Camionnettes </span> </li>
 <li> <span> - Matériel de manutention : pont roulant, chariot élévateur</span></li>
 <li> <span> -Matériel de production (atelier de préfabrication,  Tours, Fraiseuses, postes de soudure…)</span></li>
 <li> <span> -Matériel mobile de chantier (groupes électrogènes, transpalettes, postes soudure, petits outillages…)</span></li>
 <li> <span> - Matériel de contrôle (wattmètres, mesureurs d’isolement, sondes lumineuses, appareils de mesure caméra infrarouge-vibrométres…)</span></li>
 <li> <span> -Matériel de sécurité (détecteurs multigaz, trépieds, stopchutes,…)</span></li>
 <li> <span> -Matériel de dépannage (groupes immergés, groupes de surface, pompes doseuses,…)</span></li>
</ul>


<div class="wrapper">
    <div style="background-image: url(elec1.jpg)"></div>
    <div style="background-image: url(elec2.jpg)"></div>
    <div style="background-image: url(cablage.png)"></div>    
    </div>
    <a href="formulaire.php" class="button-link">Demander ce service<i class="fa-solid fa-arrow-right"></i><a>
</section>

<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="cropped-cropped-cropped-63-1.png" class="foot">
            </div>
           
            <div class="footer-contact">
                <h3>Contacter Nous:</h3>
                <p><i class="fa-solid fa-envelope"></i> <a href="mailto:Seipia@seipia-maroc.com">Seipia@seipia-maroc.com</a></p>
               
                <p><i class="fa-solid fa-phone"></i>  05 28 52 12 88</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 SEIPIA. We love our clients!</p>
            
        </div>
        <div class="footer-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3441.709183349304!2d-9.218669225715038!3d30.387614902232148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3d7070a1a887b%3A0x30254c235a246387!2sSEIPIA%20sarl%20(Soci%C3%A9t%C3%A9%20des%20Equipements%20de%20l&#39;Investissement%20et%20Production%20Industriel%20et%20Agricole)!5e0!3m2!1sfr!2sma!4v1717079382337!5m2!1sfr!2sma" width="1100" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</footer>
</body>
</html>