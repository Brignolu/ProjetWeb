<div class="of-container of-header">

    <h1 class="of-header-title">

        <a href="index.php?home" class="of-header-title-item">OpenFive</a>

    </h1>

    <div class="of-header-nav">
        <form action="index.php?logout" method="post">
            <ul>
                <li class="of-header-nav-item">
                    <a href="index.php?attraction" class="of-header-nav-item-href">
                        Attractions
                    </a>
                </li>

                <li class="of-header-nav-item">
                    <a href="index.php?propos" class="of-header-nav-item-href">
                        A propos
                    </a>
                </li>

                <li class="of-header-nav-item of-header-nav-item-title">
                     <?php
                        echo $_SESSION["pseudo"];
                     ?>
                </li>

                <li class="of-header-nav-item">
                    <a href="index.php?user_log" class="of-header-nav-item-href">
                        Espace perso
                    </a>
                </li>

                <li class="of-header-nav-item of-header-nav-item-left">
                    <button type="submit" class="of-header-nav-item-button" name="logout">
                        Déconnexion
                    </button>
                </li>

                <li class="of-header-nav-item">
                    <a href="index.php?reservform=reserv" class="of-header-nav-item-href of-header-nav-item-right">
                        Reservation
                    </a>
                </li>
            </ul>
        </form>
    </div>

</div>