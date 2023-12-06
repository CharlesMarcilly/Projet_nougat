<?php 
$title = "Inscription";
?>

 
 <?php afficher("header") ?><hr><br>

    <div class="container col-md-6 bg-dark-subtle shadow">
        <h1 class="text-center">Inscription</h1> 
        <form action="" method="post">
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group my-3 "> 
                        <label for="nom">Nom</label> 
                        <input type="text" class="form-control" id="nom"
                        name="nom" aria-describedby="emailHelp" required>    
                    </div>
                    <div class="form-group"> 
                        <label for="mail">E-mail</label> 
                        <input type="mail" class="form-control" id="mail"
                        name="mail" aria-describedby="emailHelp" required>    
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group my-3"> 
                        <label for="prenom">prenom</label> 
                        <input type="text" class="form-control" id="prenom"
                        name="prenom" aria-describedby="emailHelp" required>    
                    </div>
                    <div class="form-group my-2"> 
                        <label for="tel">Numéro de téléphone</label> 
                        <input type="tel" class="form-control" id="tel"
                        name="tel" aria-describedby="emailHelp" required>   
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group my-2"> 
                        <label for="adresse">Votre adresse</label> 
                        <input type="text" class="form-control" id="adresse"
                        name="adresse" aria-describedby="emailHelp" required>   
                    </div>
            </div>

            
                <div class="col-md-6">
                    <div class="form-group my-2 px-0 "> 
                        <label for="password">Mot de passe</label> 
                        <input type="password" class="form-control" id="password"
                        name="password" aria-describedby="emailHelp" required>    
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group my-2"> 
                        <label for="cpassword">Confirmation du mot de passe</label> 
                        <input type="password" class="form-control" id="cpassword"
                        name="cpassword" aria-describedby="emailHelp"required>    
                    </div>
                </div>
            </div>
                <small id="emailHelp" class="form-text text-muted">
                Le mot de passe doit contenir au moins 12 caractères, avec une majuscule, une minuscule, un chiffre et un caractère spécial. 
                </small> 
                <br>
                
            <button type="submit" class="col-md-8 btn btn-primary my-2" name="ok">
            S'inscrire !
            </button> 
        </form> 
    </div><br>

    

