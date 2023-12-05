 <?php afficher("header") ?><hr>

    <div class="container col-md-6 bg-dark-subtle">
        <h1 class="text-center">Inscription</h1> 
        <form action="./controllers/page_connexion.php" method="post">
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group my-3 "> 
                        <label for="nom">Nom</label> 
                        <input type="text" class="form-control" id="nom"
                        name="nom" aria-describedby="emailHelp" required>    
                    </div>
                    <div class="form-group my-3"> 
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
                    <div class="form-group my-3"> 
                        <label for="tel">Numéro de téléphone</label> 
                        <input type="tel" class="form-control" id="tel"
                        name="tel" aria-describedby="emailHelp" required>   
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group my-3"> 
                        <label for="adresse">Votre adresse</label> 
                        <input type="text" class="form-control" id="adresse"
                        name="adresse" aria-describedby="emailHelp" required>   
                    </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group my-2 "> 
                        <label for="password">Mot de passe</label> 
                        <input type="password" class="form-control" id="password"
                        name="password" aria-describedby="emailHelp" required>    
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group my-2 "> 
                        <label for="cpassword">Confirmation du mot de passe</label> 
                        <input type="password" class="form-control" id="cpassword"
                        name="cpassword" aria-describedby="emailHelp"required>    
                    </div>
                </div>
            </div>
                <small id="emailHelp" class="form-text text-muted">
                Assurez-vous d'écrire le même mot de passe.
                </small> 
                <br>
                
            <button type="submit" class="col-md-8 btn btn-primary my-1" name="ok" style="margin-left: 15%;">
            S'inscrire !
            </button> 
        </form> 
    </div>

    

