<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css">
    <title>formulaire d'inscrption</title>
    
</head>
<body class="contenu-form">
<div class="liste-input">
        <form action="" method="post">
        
        <input name="nom" type="text" placeholder="Entrez votre nom">
        
       <input name="prenom" type="text" placeholder="Entrez votre prenom">
        
        
        <div class="form-group"> 
         <div>
          <label for="m">Etes vous musiciens?</label>
         </div>
           <input type="radio" name="y" value="oui">oui
           <input type="radio" name="n" value="non">non
        </div>
      

        <div class="form-group"> 
         <div>
          <label for="intru">vous jouez de quel instrument?</label>
         </div>
           <input type="text" name="instru" placeholder="Entrer le nom de l'instrument">
        </div>



        <div class="form-group"> 
         <div>
          <label for="niveau">A quel niveau vous evaluez-vous?</label>
         </div>
           <input type="radio" name="niveau" value="debutant">débutant
           <input type="radio" name="niveau" value="intermediaire">Intermediare
           <input type="radio" name="niveau" value="avancé">Avancé
           <!-- ajouter un texte pour definir les niveaux  -->
        </div>
            
        <div class="form-group"> 
         <div>
          <label for="opinion">Etes vous partant a ce que la musique classique evolue en Haiti?</label>
         </div>
           <input type="radio" name="opinion" value="oui">oui
           <input type="radio" name="opinion" value="non">non
           <!-- sinon le formulaire doit s'arreter ici -->
        </div>    


        <div class="form-group"> 
         <div>
          <label for="etape1"><strong>L'etape 1 est d'avoir un compte facebook,instagram,tiktok et de créer un chanel youtube</strong><br>Avez-vous déja ces comptes?
          </label>
         </div>
           <input type="radio" name="etape1" value="face">Facebook
           <input type="radio" name="etape1" value="insta">Instagram
           <input type="radio" name="etape1" value="tiktok">tiktok
           <input type="radio" name="etape1" value="youtube">Chanel youtube
        </div>
        <div><i>si vous avez des difficultés a créer votre chanel youtube contacter-nous</i></div>    

        <div class="form-group"> 
         <div>
          <label for="etape2"><strong>L'etape 2 est d'avoir au moins trois(3) vidéos de vous entrain de performer sur tous les comptes</strong><br>Avez-vous au moins trois(3) vidéos sur chacun de vos comptes ?
          </label>
         </div>
           <input type="radio" name="etape2" value="oui">oui
           <input type="radio" name="etapes2" value="non">non
        </div>
         <!-- demander de partager avec nous les liens -->


         <div class="form-group"> 
         <div>
          <label for="entraide"><strong>L'etape 3 consite a se serrer les coudes,savoir qu'on a besoin les uns des autres.<br>Chaque musicien doit obligatoirement publier au moins une des videos des autres musiciens du groupe sur sa page .</strong><br>j'accepte de publier au moins une video des autres musiciens pour les aider a avoir plus de visibilité
          </label>
         </div>
           <input type="radio" name="entraide" value="oui">oui
           <input type="radio" name="entraide" value="non">non
        </div>
         <!-- ajouter le texte de notepad <formulaire.text> dans cette partie -->

        
         <div class="form-group"> 
         <div>
          <label for="piece"><strong>L'etape 4 consite a nous interprete une des pieces classiques choisi dans la liste qu'on vous communiquera tres prochainement</strong><br>je promets de cooperer 
          </label>
         </div>
           <input type="radio" name="piece" value="oui">oui
           <input type="radio" name="piece" value="non">non
        </div>
         

        <!-- <div class="form-group"> 
         <div>
          <label for="page"><strong>L'etape 4 vous creer un page web</strong><br>
          </label>
         </div>
           <input type="radio" name="entraide" value="oui">oui
           <input type="radio" name="entraide" value="non">non
        </div> -->

        </form>

</body>
</html>