<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HistoriqueP.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        
        <div id="bt">
        <div><a href="javascript:window.print()"><img id="imprimer" src="th (31).jpg"></a></div>
        <div class="re" style="margin-left: 300px;">
            <i><img src="th (19).jpg" alt="" style="height: 30px; border-radius: 200px;"></i> <a href="header.html" style=" text-decoration: none; color: #2badc4;">Derrière</a> 
        </div>
        </div>
        
        <!--search-->
        <form action="HistoriqueP.php" method="post">
            <div style="margin-bottom: 10px;">
            <input  type="text" name="search" placeholder="rechercher par numéro de beneficiaire">
            <input type="submit" value="rechercher" name="submit">
            <input type="submit" value="actualiser" name="submit">
            <input style=" background-color: #2badc4; color:white; width: 80px;" value="clair" type="reset" name="submit">
            </div>
        </form>
        <table class="table1">
        <tr>
           <th>Liste des Paiments</th>
        </tr>
        </table>
        <table>
            <tr id="items">
                <th>Id_Paiment</th>
                <th>Nom Bénéficiaire</th>
                <th>Numéro De Bénéficiaire</th>
                <th>Montant</th>
                <th>Statut</th>
                <th>Référence</th>
                <th>Date</th>
                
            </tr>
            <?php 
                //include la page de connexion
                include_once "connect.php";
                //requête pour afficher la liste des Trensactions
                $req = mysqli_query($con , "SELECT * FROM paymnets");
                if(isset($_POST['search']) && $_POST['search']!=""){
                    $req = mysqli_query($con, "SELECT * FROM paymnets where payment_id=".$_POST['search'].";");
                }
                else{
                    $req = mysqli_query($con , "SELECT * FROM paymnets");
                }
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas
                    echo " Il n'y a pas encore Paiment ajouter !" ;
                    
                }else {
                    //si non , affichons la liste 
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr class="cc">
                        
                            <td><?=$row['payment_id']?></td>
                            <td><?=$row['beneficiaire']?></td>
                            <td><?=$row['beneficiaire_acc_num']?></td>
                            <td><?=$row['montant']?></td>
                            <td><?=$row['referance_no']?></td>
                            <td><?=$row['statut']?></td>
                            <td><?=$row['create_at']?></td>
                            <!--Nous alons mettre l'id de chaque operation dans ce lien -->
                            <td><a href="modifier.php?id=<?=$row['id']?>"><img src="th (30).jpg"></a></td>
                            <td><a href="supprimer.php?id=<?=$row['id']?>"><img src="th (29).jpg"></a></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>
    </div>
</body>
</html>