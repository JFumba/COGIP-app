<?php include 'header.php' ?>

<h3><a href="index.php?page=lesboites_detail&id=<?=$personnes['id_societe']?>"><?=$personnes['nom_societe']?></a></h3>
   
   <div class="detail">
        <p><span class="detailtitle">Adresse société :</span> <?=$personnes['adresse_societe']?></p>
        <p><span class="detailtitle">Téléphone :</span> <?=$personnes['telephone']?></p>
        <p><span class="detailtitle">Email : </span> <?=$personnes['email']?></p>
   </div> 
   

    <?php if ($admin_level === 'god'): ?>
        <br>
        <a href="index.php?page=lesgens_modifier&id=<?=$idcontact?>"><button class="form" type="button" name="button">Modifier</button></a>
        <a href="index.php?page=lesgens_supprimer&id=<?=$idcontact?>"><button class="form" type="button" name="button">Supprimer</button></a>
    <?php endif; ?>


    <h3>Factures</h3>
    <table>
        <tr>
            <td class="tabtitle">Numéro</td>
            <td class="tabtitle">Date</td>
            <td class="tabtitle">Prestation</td>
        </tr>
        <?php foreach ($factures as $key => $value){?>
            <tr>
                <td class="tabrow"><a href="index.php?page=lepognon_detail&id=<?=$value['id']?>"><?=$value['numero']?></td>
                <td class="tabrow"><?=$value['date_facturation']?></td>
                <td class="tabrow"><?=$value['motif_prestation']?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>
