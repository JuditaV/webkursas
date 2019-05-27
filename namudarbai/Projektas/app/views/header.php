 <header>
    <section class="navbarRow">
        <div class="mainLogo">
            <span><img alt="Jurgitos logo" class="logo" src="../app/images/lotus.jpg"></span>
        </div>

        <div class="navbar" id="myTopnav">
            <a href="./frontpage.php">Home</a>
            <a href="./index.php">Gallery</a>
            <a href="#">Shopping</a>
            <a href="./contactform.php">Contacts</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </section>

     <script>
         function myFunction() {
             var x = document.getElementById("myTopnav");
             if (x.className === "navbar") {
                 x.className += " responsive";
             } else {
                 x.className = "navbar";
             }
         }
     </script>
</header>
