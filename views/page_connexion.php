    <div class="container col-md-6 bg-dark-subtle">
        <h1 class="text-center">Connexion</h1> 
        <form action="../controllers/page_accueil.php" method="post">
            
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group my-3"> 
                            <label for="mail">E-mail</label> 
                            <input type="mail" class="form-control" id="mail"
                            name="mail" aria-describedby="emailHelp" required>    
                        </div>
                        <div class="form-group my-3 "> 
                            <label for="password">Mot de passe</label> 
                            <input type="password" class="form-control" id="password"
                            name="password" aria-describedby="emailHelp" required>    
                        </div>
                    </div>
                </div>
            <button type="submit" class="col-md-8 btn btn-primary my-1" name="connexion" style="margin-left: 15%;">
            Se connecter !
            </button> 
        </form>
    </div>