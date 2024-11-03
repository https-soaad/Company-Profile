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
    height: 600px;
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
    font-size: 17px;
    font-weight: bold;
}
.wrapper{
    width: 550px;
    height: 350px;
    overflow:hidden;
    position:relative;
    bottom: 450px;
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
            bottom:400px;
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
    <h1>Irrigation Goutte à Goutte</h1>

    <p>Chez SEIPIA, nous sommes fiers d'être le leader dans le domaine de l'irrigation et du goutte-à-goutte. 
         Forts de notre expérience acquise depuis 1995. 
         Nous avons développé une expertise inégalée qui nous permet de fournir des solutions innovantes et efficaces pour répondre aux besoins de nos clients.
         Notre service d'irrigation et de goutte-à-goutte est conçu pour optimiser l'utilisation de l'eau, garantir une distribution uniforme et améliorer la productivité agricole. 
         Nous utilisons des technologies avancées et des techniques éprouvées pour assurer que chaque plante reçoit la quantité d'eau nécessaire, minimisant ainsi le gaspillage et maximisant les rendements.</p>
<p>Les avantages de notre service incluent :</p>
  <p><span> - Économie d'eau :</span> Grâce à un système de distribution précis, nous réduisons la consommation d'eau, contribuant ainsi à la préservation des ressources naturelles.</p>
 <p> <span> - Augmentation des rendements :</span> En assurant une irrigation régulière et contrôlée, nous aidons les agriculteurs à obtenir des récoltes plus abondantes et de meilleure qualité.</p>
 <p> <span> - Durabilité : </span> solutions sont conçues pour être respectueuses de l'environnement, en réduisant l'empreinte écologique de l'agriculture.</p>
 <p> <span> - Support technique :</span> Notre équipe d'experts est toujours disponible pour offrir des conseils et un soutien technique, garantissant ainsi le bon fonctionnement des systèmes d'irrigation.</p>
<p>
Avec SEIPIA, vous bénéficiez d'une approche personnalisée et d'un service client exceptionnel, assurant que vos besoins en irrigation sont parfaitement satisfaits. 
Rejoignez-nous pour exploiter le plein potentiel de vos cultures grâce à des solutions d'irrigation innovantes et efficaces.</p>

<div class="wrapper">
    <div style="background-image: url(bn.png)"></div>
    <div style="background-image: url(vig.jpg)"></div>
    <div style="background-image: url(drip.jpg)"></div>    
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