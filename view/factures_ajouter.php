<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title>COGIP : <?= $titre ?></title>
</head>
<body><?php include '_navig.php' ?>
    <h1><?= $titre ?></h1>

    <form action="" method="post">
        <div>
            <label for="numero">Numéro : </label>
            <input type="text" name="numero" value="<?= $nmro ?>" required>
        </div>
        <div>
            <label for="date_facturation">Date : </label>
            <input type="date" name="date_facturation" value="<?= $datef ?>" required>
        </div>
        <div>
            <label for="motif_prestation">Motif : </label>
            <input type="text" name="motif_prestation" value="<?= $motif ?>" required>
        </div>
        <div>
            <label for="personne_id"> Contact : </label>
            <select name="personne_id" required>
                <option value="" selected></option>
                <?php foreach ($contacts as $key => $value){?>
                    <option value="<?= $value['id']?>"<?php if ($personne_id == $value['id']) {echo ' selected';}; ?>><?= $value['nom_societe']?> : <?= $value['prenom']?> <?= $value['nom']?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="btn"></label>
            <button type="submit" name="btn"> Ajouter la facture</button>
        </div>
    </form>

    <div class="rouge">
        <?= $message?>
    </div>
</body>
</html>
