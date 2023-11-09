            <header id="navbar">
            <nav class="navbar">
                <div class="sitename">
                    <?=logo('navbar-logo.png', 'navbar__logo')?>
                </div>
                <div class="other">
                    <div class="links">
                        <?php if ($page['name'] != "home") :?>
                            <a href="<?=$path?>" class="link">
                                Home
                            </a>
                        <?php endif; ?>
                        <div class="dropdown">
                            <a class="link">
                                Informatie
                            </a>
                            <div class="dropdown__items">
                                <a href="https://www.facebook.com/gokyocuijk/" class="link">
                                    Nieuws
                                </a>
                                <a class="link" href="<?=$path?>informatie/lestijden.php">Les Tijden</a>
                                <a class="link" href="<?=$path?>informatie/agenda.php">Agenda</a>
                                <a class="link" href="<?=$path?>informatie/huisregels.php">Huisregels</a>
                                <a class="link" href="<?=$path?>informatie/examens.php">Examens</a>
                                <a class="link" href="<?=$path?>informatie/inschrijven.php#gokyo">Inschrijven Gokyo</a>
                                <a class="link" href="<?=$path?>informatie/inschrijven.php#toernooi">Inschrijven Toernooien</a>
                                <a class="link" href="<?=$path?>informatie/protocollen.php">Gedragsregels & Protocollen</a>
                                <a class="link" href="<?=$path?>informatie/fotos.php">Foto's</a>
                            </div>
                        </div>
                        <a class="link" href="<?=$path?>contact/index.php" class="hoverbtn">Contact</a>
                        <a class="link" href="<?=$path?>over-ons/index.php" class="hoverbtn">Over Ons</a>
                        <a class="link" href="<?=$path?>sponsors/index.php" class="hoverbtn">Sponsors</a>
                    </div>
                </div>
            </nav>
        </header>