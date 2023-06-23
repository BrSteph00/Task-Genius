<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskGenius</title>
    <link rel="stylesheet" href="interface.css">
    <link rel="stylesheet" href="nouvelle_tache.css">
</head>

<body>

    <div class="sidebar close">
        <div class="logo-details">
            <i><img src="./images/admin.png" alt="" style="height: 2.5em;"></i>
            <span class="logo_name">ONEE - BO</span>
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

        <div style="display: flex;flex-direction: column;justify-content: center;align-items: center;">
            <h3>Creer une nouvelle tache</h3>
        <form method="post" action="creer_tache.php">
            Description : <input type="text" name="description" /><br />
            Date debut : <input type="date" name="date_debut" /><br />
            Date fin : <input type="date" name="date_fin" /> <br />
            <input style="margin-top: 5px;" type="submit" value="Creer" />
        </form>
        </div>

    </section>
</body>

</html>