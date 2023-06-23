<div style="display: flex;justify-content: center;align-items: center;align-content: center;flex-direction: column;margin-top: 50vh">
    <?php
    $id_tache = $_GET['id_tache'];
    echo 'Voulez-vous vraiment supprimer cette tache? '; ?>


    <div style="display: flex;flex-direction: row;justify-content: space-around;">
    <?php echo '<a href="iu.php">Non</a> / ';
        echo '<a href="supprimer_tache.php?id_tache='.$id_tache.'">Oui</a>'; ?>
    </div><?php
?>
</div>