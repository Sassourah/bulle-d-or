<?php
session_start();

if (isset($_POST['submit'])) {
    $numero = $_POST['numero'];
    $transaction = $_POST['transaction'];
    $montant = $_POST['montant'];
    $solde = $_POST['solde'];
    $date = $_POST['date'];

    $personne = array("numero"=> $numero, "transaction" => $transaction, "montant" => $montant, "solde" => $solde, "date"=>$date);

    $_SESSION["personne"][] = $personne; //affectation de la session declaree
    $personne = $_SESSION["personne"];
}
    
    

   

    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <div class="cont-personne">
    <div class="personnes">
        <?php              // manque de comprehension...
    if (isset($personne))
    {
        ?>
            <div style="border: 1px solid grey;" class="pos">
            <h4>numero de compte</h4>
                <?php
                    for ($i=0; $i < sizeof($personne); $i++) { 
                        ?>
                            <p><?php echo $personne[$i]['numero'];?></p>
                            <br>
                            <hr>
                        <?php
                    }
                ?>
            </div>
            <div style="border: 1px solid grey;" class="nom">
            <h4>transaction</h4>
                <?php
                    for ($i=0; $i < sizeof($personne); $i++) { 
                        ?>
                            <p><?php echo $personne[$i]['transaction'];?></p>
                            <br>
                            <hr>
                        <?php
                    }
                ?>
            </div>
            <div style="border: 1px solid grey;" class="prenom">
            <h4>montant</h4>
                <?php
                    for ($i=0; $i < sizeof($personne); $i++) { 
                        ?>
                            <p><?php echo $personne[$i]['montant'];?></p>
                            <br>
                            <hr>
                        <?php
                    }
                ?>
            </div>
            <div style="border: 1px solid grey;" class="montants">
            <h4>solde</h4>
                <?php
                    for ($i=0; $i < sizeof($personne); $i++) { 
                        ?>
                            <p><?php echo $personne[$i]['solde'];?></p>
                            <br>
                            <hr>
                        <?php
                    }
                ?>
            </div>
            <div style="border: 1px solid grey;" class="date">
                <h4>Date</h4>
                <?php
                    for ($i=0; $i < sizeof($personne); $i++) { 
                        ?>
                            <p><?php echo $personne[$i]['date'];?></p>
                            <br>
                            <hr>
                        <?php
                    }
                ?>
            </div>
        <?php
        
        
    } 
      ?>
    </div>
    <br>
    <div class="liste-input">
        <form action="" method="post">
        <input name="numero" type="text" placeholder="numero de compte">
            <input name="transaction" type="text" placeholder="transaction">
            
            <input name="montant" type="text" placeholder="Montant">
            <input name="solde" type="text" placeholder="solde">
            <input name="date" type="date" placeholder="Date">
            <br> <br>
            <button name="submit">enregistrer</button>
        </form>

        <?php
          if(isset($personne))
          echo "les transactions";
          echo"<br>";
          for ($i=0; $i < sizeof($personne); $i++)
          {
              echo $transaction;
              echo"<br>";
          }
          
        
        ?>
        <?php
         $retrait=0;
         $depot=0;
            
            
               if(isset($personne)){

                for ($i=0; $i < sizeof($personne); $i++) { 
                    if($personne[$i]['transaction']=="retrait")
                    {
                    $retrait= $retrait +$personne[$i]['transaction'];
                    }
                    else
                    {
                        $depot= $depot +$personne[$i]['transaction'];
                    }
                    
                }
                }
                ?>

                <p class="montant">Le total des retraits est : <?php echo " ". $retrait;?></p>
                <p class="montant">Le total des depots est : <?php echo " ". $depot;?></p>
        
                </div>         
    
    
     
    
