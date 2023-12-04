    <?php afficher("header") ?><hr><br>     

    <div class="container col-md-6 bg-dark-subtle">
        
        <h1 class="text-center">Inscription</h1> 
        <form action="views/traitement.php" method="post">
        
        <div class="col-md-6">
            <div class="form-group my-3 "> 
                <label for="nom">Nom</label> 
            <input type="text" class="form-control" id="nom"
                name="nom" aria-describedby="emailHelp" required>    
            </div>
            <div class="form-group my-3 "> 
                <label for="prenom">Prénom</label> 
            <input type="text" class="form-control" id="prenom"
                name="prenom" aria-describedby="emailHelp"required>    
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group my-3 mx-5"> 
                <label for="mail">E-mail</label> 
            <input type="mail" class="form-control" id="mail"
                name="mail" aria-describedby="emailHelp" required>    
            </div>
            <div class="form-group my-3 mx-5"> 
                <label for="numero">Numéro de téléphone</label> 
            <input type="tel" class="form-control" id="numero"
                name="numero" aria-describedby="emailHelp" required>   
            </div>
        </div>
        
            <div class="form-group my-3 mx-5"> 
                <label for="password">Mot de passe</label> 
                <input type="password" class="form-control"
                id="password" name="password" required> 
            </div>
        
            <div class="form-group mx-5"> 
                <label for="cpassword">Confirmation du mot de passe</label> 
                <input type="password" class="form-control"
                    id="cpassword" name="cpassword" required>
        
                <small id="emailHelp" class="form-text text-muted">
                Assurez-vous d'écrire le même mot de passe.
                </small> 
            </div><br>
        
            <button type="submit" class="btn btn-primary my-3" name="ok">
            S'inscrire !
            </button> 
        </form> 
    </div><br>

    <?php afficher("footer") ?>