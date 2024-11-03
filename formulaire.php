<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <title>Demande de service</title>
    <style>
        body {
            font-family:Poppins;
            background-color: white;
             padding:0px; 
            overflow-x:hidden;
            margin: 0;
           
        }
        header{
    width: 100%;
    /* max-width: 100%; */
    margin: auto;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    z-index: 100;
    background-color: #333;
}
.logo{
           width: 100px;
           height: 50px;
           position: relative;
           left:50px;
          
}
header a{
    font-size: 18px;
    color: #c8e50b;
    font-weight: 700;
    margin-right: 40px;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    transition: 0.4s;
    text-decoration: none;
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
.para{
    width:400px;
    height:550px;
    background-color: #286204;
    position: relative;
    left:340px;
    top:511px;
    border: 5px solid #286204;
    border-radius: 10px;

}

       .para h4 {
            text-align: center;
            color: white;
            position: relative;
            top:180px;
            left:5px;
            font-family: Poppins;
            font-size: 20px;
           
            font-weight: bold;
            font-style: italic;

        }
       

        form {
            max-width: 400px;
            height:auto;
            margin: 0 auto;
            background-color:white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            position:relative;
            bottom:50px;
            left:210px;
            border: 5px solid #286204;
           
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color:#286204;
            font-size: 20px;
        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 7px;
            margin-bottom: 15px;
            border-bottom:2px solid #286204 ;
            border-top: none;
            border-left: none;
            border-right: none;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: transparent;
            outline:none;
            color:black;

            
        }
        .forms{
            position: relative;
            bottom: 450px;
        }

        button[type="submit"] {
            background-color: #286204 ;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
        /* .one {
            font-size: 100px;
            color:#286204;
            position:relative;
            bottom: 30px; 
            transform: rotate(430deg);
        } */
       
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
    <!-- <span class='one'>
<i class="fa-solid fa-leaf" class="one" ></i></span> -->
<div class=forms>
<div class="para">

    <h4>N'hésitez pas à demander le service,</h4>
        <h4> nous sommes à votre disposition</h4>

    </div>
    <form id="requestForm" action="submit_form.php" method="POST">
        <label for="full_name">Nom Complet:</label>
        <input type="text" id="full_name" name="full_name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="phone_number">Numéro de Téléphone:</label>
        <input type="text" id="phone_number" name="phone_number" required>
        
        <label for="service">Service:</label>
        <select id="service" name="service" required>
            <option value="goutte à goutte">Goutte à Goutte</option>
            <option value="pompage">Pompage</option>
            <option value="schemas electriques">Schémas Électriques</option>
            <option value="vsat">VSAT</option>
            <option value="autre">Autre</option>
        </select>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit">Envoyer</button>
    </form>
</div>
    <div id="successMessage" style="display: none; color: green; text-align: center;">
        Demande a été envoyée avec succès.
    </div>
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
