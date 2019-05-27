<footer>
    <div class="container">
        <p class="copyright">
        <?php
            $metai = 2019;
            $dabar = date('Y');
            if($metai < $dabar) {
                echo "&copy; $metai - $dabar ";
            } else {
                echo "&copy; $dabar ";
            }
        ?>Copyright</p>
    </div>
</footer>
