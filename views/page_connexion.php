<?php afficher('header') ?><hr><br>

    <div class="container col-md-6 bg-dark-subtle shadow">
        <h1 class="text-center">Connexion</h1> 
        <form action="" method="post">
            
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group my-3"> 
                            <label for="mail">E-mail</label> 
                            <input type="mail" class="form-control" id="mail"
                            name="mail" aria-describedby="emailHelp" required>    
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                       <div class="form-group my-3 "> 
                            <label for="password">Mot de passe</label> 
                            <input type="password" class="form-control" id="password"
                            name="password" aria-describedby="emailHelp" required>    
                        </div>
                    </div>
                </div><br>  
            <button type="submit" class="col-md-6 btn btn-primary my-1" name="connexion">
            Se connecter !
            </button> 
        </form>
    </div><br>