<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Admin.css">
    <title>Admin</title>
</head>
<body>
    <!--navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="fs-1 ml-3">Admin</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse ml-5" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2" id="header_element">
            <li class="nav-item active" >
              <a name="home" class="nav-link " href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active ml-3 ">
              <a name="Creer" class="nav-link" id="client_element" href="#">Créer Un Client</a>
            </li>
            <li class="nav- active ">
              <a name="client" id="client_element2" class="nav-link ml-3 " href="#">Client</a>
            </li>
            <li class="nav-item active">
                <a name="deposer" id="deposer" class="nav-link ml-3" href="#">Déposer</a>
              </li>
              <li class="nav-item active">
                <a name="profile" id="profile" class="nav-link ml-3" href="#">Profile</a>
              </li>
              
          </ul>
          <!--serach-->
          <form class="form-inline my-2 mr-3 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <!--End serach-->
        </div>
      </nav>
    <!--End navbar -->
      <div id="element_form" class="card Client-form-card  col-6 bg-transparent border-0">
        <div class="Form-body">
            <!--Form header-->
            
                <form  action="connect.php" method="post" id="element_form">
                    <h1 class="form-header card-title">
                        <i class="fa fa-adit"><img style="height: 50px;" src="th (20).jpg" alt=""></i> Client
                    </h1>
                    <div class="form-row">
                        <div class="col">
                            <label for="inputName4">Nom</label>
                          <input type="text" class="form-control" placeholder="Nom" name="nom">
                        </div>
                        <div class="col">
                            <label for="inputName4">Prénom</label>
                          <input type="text" class="form-control" placeholder="Prénom" name="prenom">
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Enter Password">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Ville</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder=" Enter Ville">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Code</label>
                      <input type="text" name="address" class="form-control" id="inputEmail4" placeholder="Enter Code Client">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Date</label>
                      <input type="date" name="address" class="form-control" id="inputEmail4" placeholder="Enter Code Client">
                    </div>
                    <!--Form choose -->
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Sélectionner Type De Compte</label>
                        <select class="form-control" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option value="">--Sélectionner Type De Compte--</option>
                            <option value="Cheque">Chèque</option>
                            <option value="Economies">Des économies</option>
                            <option value="Entreprise">Entreprise</option>
                        </select>
                        <button type="submit" class="btn btn-primary my-3">Submit</button>
                        <small class="text-warning">
                            <i class="fa fa-arrow-alt-circle-left me-2"><img src="th (19).jpg" alt="" style="height: 30px; border-radius: 200px; margin-left: 290px;"></i> <a href="Admin.html">Derrière</a> 
                        </small>
                      
                      <!--Form choose -->
                </form>
                
                  <!--End Form-->
        </div>
      </div>
      <!--Card: deposer card-->
      <div id="form_deposer" class="card deposer-card w-50 m-auto mt-5 border-0">
        <!--card body-->
        <div class="card-body">

        <!--deposit form-->
        <form action="" class="deposer-form">
                <!--form group-->
                <div class="form-group mb-2">
                    <label for="">Saisir Le Montant Du Déposer</label>
                    <input type="text" name="deposer_account" class="form-control" id="" placeholder="Saisir Le Montant Du Déposer">
                </div>
                <!--End form group-->
                <!--code client-->
                <div class="form-group">
                  <label for="inputAddress">Code</label>
                  <input type="text" name="address" class="form-control" id="inputEmail4" placeholder="Enter Code Client">
                </div>
                <!-- End code client-->
                <!--form group-->
                <div class="form-group">
                    <label for="">Sélectionner Le Compte</label>
                <!--select account option-->
                <select name="account_id" class="form-control my-3" id="">
                    <option value="">--Sélectionner Le Compte--</option>
                </select>
                <!--End select account option-->
                </div>
                <!--End form group-->
                
            
                <!--form group-->
                <div class="form-group  my-2">
                    <button id="transact-btn" class="btn btn-md" style="background-color: rgb(0, 179, 255);">Déposer</button>
                </div>
                <!--End form group-->
        </form>
        <!--End deposit form-->

        </div>
        <!--End card body-->
    </div>
    <!--End Card: Déposer card-->
    <!--table client -->
    <div class="container" id="container1">
        
      <!--search-->
      <form action="Admin.php" method="post">
          <div style="margin-bottom: 10px;">
          <input  type="text" name="search" placeholder="rechercher par Code Client">
          <input type="submit" value="rechercher" name="submit">
          <input type="submit" value="actualiser" name="submit">
          <input style=" background-color: #2badc4; color:white; width: 80px;" value="clair" type="reset" name="submit">
          </div>
      </form>
      <table class="table2">
          <tr id="items">
              <th>Liste Des Clients</th>
          </tr>
          <tr id="items">
              <th>Nom</th>
              <th>Prénom</th>
              <th>Password</th>
              <th>Ville</th>
              <th>Code</th>
              <th>Type de compte</th>
              <th>Date</th>
              
          </tr>
          <?php 
              //include la page de connexion
              include_once "connect.php";
              //requête pour afficher la liste des Paiments
              $req = mysqli_query($con , "SELECT * FROM paymnets");
              if(isset($_POST['search']) && $_POST['search']!=""){
                  $req = mysqli_query($con, "SELECT * FROM paymnets where payment_id=".$_POST['search'].";");
              }
              else{
                  $req = mysqli_query($con , "SELECT * FROM paymnets");
              }
              if(mysqli_num_rows($req) == 0){
                  //s'il n'existe pas
                  echo " Il n'y a pas encore Client ajouter !" ;
                  
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
    <!--End table client -->
    <!-- table admin -->
    
    <div class="container" id="container2">
        
      <!--search-->
      <form action="Admin.php" method="post">
          <div style="margin-bottom: 10px;">
          <input  type="text" name="search" placeholder="rechercher par Prénom">
          <input type="submit" value="rechercher" name="submit">
          <input type="submit" value="actualiser" name="submit">
          <input style=" background-color: #2badc4; color:white; width: 80px;" value="clair" type="reset" name="submit">
          </div>
      </form>
      <table class="table2">
          <tr id="items">
              <th>Admin</th>
          </tr>
          <tr id="items">
              <th>Nom</th>
              <th>Prénom</th>
              <th>Password</th>
              <th>Confirm Password</th>
              <th>Email</th>
              <th>Type</th>
              
              
          </tr>
          <?php 
              //include la page de connexion
              include_once "connect.php";
              //requête pour afficher la liste des admin
              $req = mysqli_query($con , "SELECT * FROM paymnets");
              if(isset($_POST['search']) && $_POST['search']!=""){
                  $req = mysqli_query($con, "SELECT * FROM paymnets where payment_id=".$_POST['search'].";");
              }
              else{
                  $req = mysqli_query($con , "SELECT * FROM paymnets");
              }
              if(mysqli_num_rows($req) == 0){
                  //s'il n'existe pas
                  echo "" ;
                  
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
    
    <!--End table admin-->
       <script src="admin.js"></script> 
</body>
</html>