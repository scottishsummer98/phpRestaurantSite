<?php include 'partials/menu.php' ?>

<!-- Main Content section starts here -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Dashboard</h1><br><br>

            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
            ?>

            <div class="col-4 text-center">
                <h1>4</h1><br>
                Categories
            </div>

            <div class="col-4 text-center">
                <h1>4</h1><br>
                Categories
            </div>

            <div class="col-4 text-center">
                <h1>4</h1><br>
                Categories
            </div>
            <div class="clearFix"></div>

        </div>
    </div>
<!-- Main Content section ends here -->

<?php include 'partials/footer.php' ?>       