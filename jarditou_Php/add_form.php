<?php 

include('header.php');

?>


<form action="add_script.php" method="POST" id="ajout_produit"  name="ajout_produit"  enctype="multipart/form-data"> 
        <fieldset>
         

        <div class="form-group row">
        <label for="pro_id" class="col-sm-2 col-form-label col-12">ID </label>
        <div class="col-sm-10 col-12"> 
        <input type="text" class="form-control" id="pro_id"  name="pro_id"   data-maxlength="10"   placeholder="ID (10 caractères MAX)"> <br>
        <div id="pro_idError" class="counter"><span></span></div> 
        </div>
        </div> 



    <div class="form-group row">
        <label for="pro_ref" class="col-sm-2 col-form-label col-12">Référence </label>
        <div class="col-sm-10 col-12"> 
        <input type="text" class="form-control" id="pro_ref"  name="pro_ref"   data-maxlength="10"   placeholder="Référence (10 caractères MAX)"> <br>
        <div id="pro_refError" class="counter"><span></span></div> 
        </div>
        </div> 
    <div class="form-group row">
        <label for="cat_id" class="col-sm-2 col-form-label" >Catégorie  </label>
        <div class="col-sm-10 col-12"> 
        <select name="cat_id" id="cat_id" class="form-control"> 
        <?php     $query2 = $db->prepare('SELECT cat_nom, cat_id  FROM  categories  ORDER BY cat_nom asc');
    $query2->execute();

    while ($cat = $query2->fetch(PDO::FETCH_ASSOC)) 
    {
     echo '<option value="'.$cat['cat_id'].'">'.$cat['cat_nom'].'</option>' ;
    }
    $query2->closeCursor();
?>

        </div>
    <div class="form-group row">
        <label for="pro_libelle" class="col-sm-2 col-form-label col-12">Libellé </label>
        <div class="col-sm-10 col-12"> 
        <input type="text" class="form-control" id="pro_libelle"  name="pro_libelle"  data-maxlength="200"   placeholder="Libelle (200 caractères MAX)"> <br>
        <div id="pro_libelleError" class="counter"><span></span></div> 
        </div>
        </div>  
    <div class="form-group row">
        <label for="pro_description" class="col-sm-2 col-form-label" >Description du produit  </label>
        <div class="col-sm-10 col-12"> 
        <textarea rows="8" name="pro_description"   id="pro_description"  data-maxlength="1000" class="form-control" cols="30" rows="10"  placeholder="description (1000 caractères MAX)"></textarea><br>
        <div id="pro_descriptionError" class="counter"><span></span></div> 
        </div>
        </div>
    <div class="form-group row">
        <label for="pro_prix" class="col-sm-2 col-form-label col-12">Prix </label>
        <div class="col-sm-10 col-12"> 
        <input type="number"  step="any" class="form-control" id="pro_prix"  name="pro_prix" > <br>
        </div>
        </div> 
    <div class="form-group row">
        <label for="pro_stock" class="col-sm-2 col-form-label col-12">Stock </label>
        <div class="col-sm-10 col-12"> 
        <input type="number"  class="form-control" id="pro_stock"  name="pro_stock" > <br>
        </div>
        </div>  
    <div class="form-group row">
        <label for="pro_couleur" class="col-sm-2 col-form-label col-12">Couleur </label>
        <div class="col-sm-10 col-12"> 
        <input type="text" class="form-control" id="pro_couleur"  name="pro_couleur"   data-maxlength="30"  placeholder="Couleur (30 caractères MAX)"> <br>
        <div id="pro_couleurError" class="counter"><span></span></div> 
        </div>
        </div>  
    <div class="form-group row">
        <label for="pro_img" class="col-sm-2 col-form-label col-12">Image </label>
        <div class="col-sm-10 col-12"> 
        <input type="file" id="pro_img"  name="pro_img" ><br>
        </div>
        </div>  
       
    

        <a href="liste.php" class="btn btn-secondary">Retour</a>
        <a href="add_script.php" class= "btn btn-success">Enregistrer</a>
       







      <?php include('footer.php');?>







      


