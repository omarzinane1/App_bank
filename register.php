<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <title>Document</title>
</head>
<body class="d-flex align-items-center justify-content-center">
    
    <!-- Registration de form-->
    <div class="card Registration-form-card col-6 bg-transparent border-0">
        <div class="Form-body">
            <!--Form header-->
            <h1 class="form-header card-title">
                <i class="fa fa-adit"><img style="height: 50px;" src="th (20).jpg" alt=""></i> Register
            </h1>
                <form  action="controle.php" method="post">
                    <div class="form-row">
                        <div class="col">
                            <label for="inputName4">Nom</label>
                          <input type="text" class="form-control" placeholder="Entre Nom" name="nom">
                        </div>
                        <div class="col">
                            <label for="inputName4">Prénom</label>
                          <input type="text" class="form-control" placeholder="Entre Prénom" name="prenom">
                        </div>
                    </div>
                    <div class="form-row mt-3">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Password</label>
                        <input type="password" name="pass" pattern=".{8,10}" class="form-control" id="inputPassword4" placeholder="Enter Password" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Confirm Password</label>
                        <input type="password" name="passc" class="form-control" id="inputPassword4" placeholder="Confirm">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Email</label>
                      <input type="email" name="address" class="form-control" id="inputEmail4" placeholder="Enter Email" required>
                    </div>
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Sélectionner Type De Compte</label>
                        <select name="select" class="form-control" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option value="">--Sélectionner Type utilisateur--</option>
                            <option value="Admin">Admin</option>
                            <option value="Client">Client</option>
                        </select>
                    <button type="submit" class="btn btn-primary mt-3" aria-placeholder="Connexion" name="button">Valider</button>
                  </form>
                  <!--End form-->
                  <p>Vous avez déjà un compte ?
                    <span class="ms-2 text-warning"><a href="login.html">S'identifier</a></span>
                  </p>
                  <small class="text-warning">
                    <i class="fa fa-arrow-alt-circle-left me-2"><img src="th (19).jpg" alt="" style="height: 30px; border-radius: 200px;"></i> <a href="index.html">Derrière</a> 
                  </small>
                  
        
            

        </div>

    </div>
    
</body>
</html>