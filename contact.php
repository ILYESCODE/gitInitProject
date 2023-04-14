<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style.css">

    </head>

    <body>
        <nav>
            <ul>
            <li><a href="index.html">Acceuil</a></li> 
            <li><a href="art_detail.html">Detail</a></li> 
            <li><a href="contact.html">Contact</a></li> 
            </ul>
        </nav>
        <form action="contact_traitement.php" method="get">

            <label for="">Nom</label>
            <input type="text" name="nom">

            <label for="">Prenom</label>
            <input type="text" name="prenom">

            <label for="">Telelphone</label>
            <input type="tel" name="tel">

            <label for="">Email</label>
            <input type="email" name="mail">

            <input type="submit">

        </form>

    </body>

</html>