<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <h2 class="p-2">Pooja.com</h2>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="categories.php">Pooja Items</a></li>
                        <li><a class="dropdown-item" href="Bookpooja.php">Book Pooja</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Book poojari</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link enabled" href="#" tabindex="-1" aria-disabled="true">Contact US</a>
                </li>
            </ul>
            <?php
            if (isset($_SESSION['auth_user'])):
                ?>

                <li class="nav-item dropdown" style="list-style:none;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        <?= $_SESSION['auth_user']; ?>
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#">Action</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <form action="logout.php" method="post">
                            <button class="dropdown-item" type="submit" name="btnlogout">Logout</button>
                        </form>
                    </ul>
                </li>


                <?php
            else:
                ?>
                <div class="p-2">
                    <a href="login.php"><button type="button" class="btn btn-danger btn-square">Login</button></a>
                    <a href="userregistration.php"><button type="button"
                            class="btn btn-danger btn-square">Sign-up</button></a>
                </div>

            <?php endif; ?>
        </div>
    </div>
</nav>