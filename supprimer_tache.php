<div style="display: flex;justify-content: center;align-items: center;flex-direction: column;margin-top: 50vh">
<?php
    $id_tache = $_GET['id_tache'];

    //suppression de la tache de la base de données

    $db = new PDO('mysql:host=localhost;dbname=todoapp', 'root', '');
    $rq = 'DELETE FROM tache WHERE id = :id';
    $v = array('id' => $id_tache);
    $res = $db->prepare($rq);
    $res->execute($v);

    echo 'Tache supprimee. ';
    echo '<a href="iu.php">Retourner a vos taches</a>';
?>
</div>