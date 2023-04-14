<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="public/css/structure.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <img src="public/img/art1.jpg" alt="" />
      <h1>Titre du site</h1>
      <button id="btnNav">Menu</button>
      <button id="btnBlock">Block</button>
      <button id="btnGrid">Grille</button>
    </header>
    <nav id="nav">
      <ul>
        <li><a href="structure.html">Acceuil</a></li>
        <li><a href="articles.html">Articles</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="register.html">register</a></li>
      </ul>
      <span id="btnNav2"> <img src="public/img/nav.png" alt="" /> </span>
    </nav>
    <div class="content">
      <div class="form_register">
        <form action="">
          <div class="form_input">
            <label for="nom">nom</label>
            <input type="text" name="nom" id="nom" />
            <span class="error_msg">erreur</span>
          </div>
          <div class="form_input">
            <label for="prenom">prenom</label>
            <input type="text" name="prenom" id="prenom" />
            <span class="error_msg">erreur</span>
          </div>
          <div class="form_input">
            <label for="age">age</label>
            <input type="text" name="age" id="age" />
            <span class="error_msg">erreur</span>
          </div>

          <div class="form_input">
            <label for="civilite">vous etes :</label>
            <input type="radio" name="civilite" id="civilite1" value="h" />homme
            <input type="radio" name="civilite" id="civilite2" value="f" />femme
            <span class="error_msg">erreur</span>
          </div>
          <div class="form_input">
            <label for="mail">email</label>
            <input type="email" name="mail" id="mail" />
            <span class="error_msg">erreur</span>
          </div>
          <div class="form_input">
            <label for="tel">telephone</label>
            <input type="text" name="tel" id="tel" />
            <span class="error_msg">erreur</span>
          </div>
          <div class="form_input">
            <label for="username">identifiant</label>
            <input type="text" name="username" id="username"/>
            <span class="error_msg">erreur</span>
          </div>
          <div class="form_input">
            <label for="password">mot de passe</label>
            <input type="text" name="password" id="password"/>
            <span class="error_msg">erreur</span>
          </div>
          <input type="submit" value="s'inscrire" />
        </form>
      </div>
    </div>
    <footer>
      <p>developper par aec19</p>
    </footer>
  </body>

  <script src="public/js/dom.js"></script>
  <script src="public/js/form_validator.js"></script>

</html>
