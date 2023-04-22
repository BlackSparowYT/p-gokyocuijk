<nav>
    <div id="navbar-v1">
        <div class="navbar-v1-sitelogo">
            <a><img src="../images/navbar-logo.png"></a>
        </div>
        <div class="navbar-v1-items">
            <a href="../index.html" class="active hoverbtn"><h3>Home</h3></a>
            <div class="dropdown">
                <a onclick="myFunction3()" class="dropbtn hoverbtn"><h3 class="dropbtn">Informatie</h3></a>
                <div id="dropdownMenu" class="dropdown-content">
                    <a href="https://www.facebook.com/gokyocuijk/">Nieuws</a>
                    <a href="../informatie/lestijden/index.html">Les Tijden</a>
                    <a href="../informatie/agenda/index.html">Agenda</a>
                    <a href="../informatie/huisregels/index.html">Huisregels</a>
                    <a href="../informatie/examens/index.html">Examens</a>
                    <a href="../informatie/inschrijven/index.php#gokyo">Inschrijven Gokyo</a>
                    <a href="../informatie/inschrijven/index.php#toernooi">Inschrijven Toernooien</a>
                    <a href="../informatie/protocollen/index.html">Gedragsregels & Protocollen</a>
                    <a href="../informatie/recent/index.html">Recent</a>
                </div>
            </div>
            <a href="../contact/index.html" class="hoverbtn"><h3>Contact</h3></a>
            <a href="../over-ons/index.html" class="hoverbtn"><h3>Over Ons</h3></a>
            <a href="../sponsors/index.html" class="hoverbtn"><h3>Sponsors</h3></a>
        </div>
    </div>

    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction3() {
            document.getElementById("dropdownMenu").classList.toggle("show");
        }
        
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
                }
            }
            }
        }
    </script>


    
    <div id="navbar-v2">
        <div class="navbar-v2-sitelogo">
            <a><img src="../images/navbar-logo.png"></a>
        </div>
        <div class="navbar-v2-items">
            <a onclick="openNav()"><h2>&#9776;</h2></a>
        </div>
        <div id="navbar-v2-fullscreen" class="nav-overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="nav-overlay-content">
                <a href="../index.html" class="active"><h3>Home</h3></a>
                <a href="../informatie/index.html"><h3>Informatie</h3></a>
                <a href="../contact/index.html"><h3>Contact</h3></a>
                <a href="../over-ons/index.html"><h3>Over Ons</h3></a>
                <a href="../sponsors/index.html"><h3>Sponsors</h3></a>
            </div>
        </div>
    </div>


    <script>
        function openNav() { document.getElementById("navbar-v2-fullscreen").style.height = "100%"; }
        function closeNav() { document.getElementById("navbar-v2-fullscreen").style.height = "0%"; }
    </script>
</nav>