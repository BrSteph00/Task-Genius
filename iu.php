<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter</title>
  <link rel="stylesheet" href="interface.css">
</head>

<body>

  <div class="sidebar close">
    <div class="logo-details">
      <i><img src="./images/logo.png" alt="" style="height: 2.5em;"></i>
    </div>
    <ul class="nav-links">
      <li>
        <div class="iocn-link">
          <a href="./iu.php">
            <i><img src="./images/admin.png" alt="" style="height: 1em;"></i>
            <span class="link_name">Mes Taches</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="./iu.php">Mes Taches</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="./nouvelle_tache.php">
            <i><img src="./images/formulaire.png" alt="" style="height: 1em;"></i>
            <span class="link_name">Nouvelle tache</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="./nouvelle_tache.php">Nouvelle demamde</a></li>
        </ul>
      </li>
    </ul>
  </div>



  <section class="home-section">

    <div style="display: flex;justify-content: center;align-content: center;">

      <?php
        $db = new PDO('mysql:host=localhost; dbname=todoapp', 'root', '');
        $rq = 'SELECT * FROM tache';
        $v = array();
        $res = $db->prepare($rq);
        $res->execute($v);
    
        $i = 0;
        while($t = $res->fetch(PDO::FETCH_OBJ))
        {
            $i++;
        }
        
        echo  "<h1 id='liste'>Liste de mes taches </h1>";
    ?>
    </div>

    <div style="display: flex;;justify-content: center;align-items: center;">
      <?php
    $db = new PDO('mysql:host=localhost; dbname=todoapp', 'root', '');
    $rq = 'SELECT * FROM tache';
    $v = array();
    $res = $db->prepare($rq);
    $res->execute($v);

    $i = 1;
    while($t = $res->fetch(PDO::FETCH_OBJ))
    {
        echo '
            <div style="border: 1px solid;
            padding: 20px;margin: 20px;">
                
                  <p style="text-align: center;font-weight: bold;text-transform: uppercase;font-size: 20px;">'.$t->description.'</p>
                
                <div style="display: flex;justify-content: center;align-items: center;flex-direction:column">
                  <p>'.$t->date_debut.  '</p>
                  <p> '.$t->date_fin.'</p>,
                </div>
                <div style="display: flex;justify-content: center;align-items: center;flex-direction:column;">
                  <button>
                    <a style="color:#000;text-decoration: none;
                  margin: 0 1rem;
                  font-size: 1rem;
                  transition: color 0.3s ease-in-out;" href="conf_sup_tache.php?id_tache='.$t->id.'">Supprimer</a><br>
                  </button>
                </div>  
            </div>
        ';
        $i++;
    }
?>
    </div>
  </section>

</body>

</html>