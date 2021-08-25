<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <img class="p-2" src="/src/assets/img/icon-website.png" alt="">
        <a class="navbar-brand text-white" href="/index.php">Douglas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="/index.php">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Projetos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/src/pages/bootstrap.php">Bootstrap</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/src/pages/jquery.php">jquery</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="https://doughour.vercel.app/" target="_blank">DougHour</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="https://beautiful-calculator.vercel.app/" target="_blank">Calculator</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/src/action/auth.php">Autenticação</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/src/pages/about.php">Sobre</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php

include_once '../helper/flashMessage/flash.php';

if (isset($_SESSION['flash_message'])) :
    echo getFlash();
endif;



?>