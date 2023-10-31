<?php afficher('header');?>  <hr> 
    
    <div class="container">
        <h1>Votre Panier</h1>
        <table>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix unitaire</th>
                    <th>Quantité</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <!-- Lignes du panier -->
                <tr>
                    <td>Nom du produit 1</td>
                    <td>19.99 €</td>
                    <td>2</td>
                    <td>39.98 €</td>
                </tr>
                <tr>
                    <td>Nom du produit 2</td>
                    <td>24.99 €</td>
                    <td>1</td>
                    <td>24.99 €</td>
                </tr>
                <!-- Ajoutez d'autres lignes de produits ici -->
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total</td>
                    <td>64.97 €</td>
                </tr>
            </tfoot>
        </table>
    </div>


<?php afficher('footer');?>    


