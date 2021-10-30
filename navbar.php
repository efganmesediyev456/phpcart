<?php include "core/db.php"; session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
               
            </ul>
            <ul class="navbar-nav float-right">
            <li class="nav-item active">
                    <a class="nav-link" href="cart.php">Cart<i class="fas fa-cart-plus"></i> <span class="badge badge-pill badge-danger" id="product_count"><?=isset($_SESSION["cart"]["total_count"]) ? $_SESSION["cart"]["total_count"] : 0?></span> <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    