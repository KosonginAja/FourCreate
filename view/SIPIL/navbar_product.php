<nav class="navbar navbar-expand-lg fixed-top text-dark shadow-5">
    <div class="container-fluid">
        <a class="navbar-brand mx-3" href="../../index.php">
            <img src="../../assets/img/logo_fourcreate.png" alt="logo" height="50" width="200">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav align-items-center">
            <li class="nav-item fw-bold">
                <form class="d-flex align-items-center" role="search">
                    <input class="form-control bg-transparent border-black me-2" type="search"
                        placeholder="&#xf002; Type here to search"
                        style="font-family:League Spartan, FontAwesome; width: 700px;">
                </form>
            </li>
            <li class="nav-item nava fw-bold">
                <a class="nav-link me-2" href="#"><i class="fa-solid  fa-lg"></i></a>
            </li>
            <li class="nav-item nava fw-bold">
                <a class="nav-link me-2" href="#"><i class="fa-solid fa-cart-shopping fa-lg"></i></a>
            </li>
            <li class="nav-item nava fw-bold">
                <a class="nav-link me-2" href="#"><i class="fa-solid fa-message fa-lg"></i></a>
            </li>
            <h3 class="me-2 line">|</h3>
            <br>
            <li class="nav-item">
                <a class="me-2 btn btn-login" href="../login.php" role="button">Masuk</a>
            </li>
            <li class="nav-item">
                <a class="me-2 btn btn-regis" href="../regis.php" role="button">Daftar</a>
            </li>
        </ul>
    </div>
</nav>
<!-- <div class="offcanvas offcanvas-start show" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                Content for the offcanvas goes here. You can place just about any Bootstrap component or custom
                elements here.
            </div>
        </div> -->
<style>
@import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap');

nav {
    background-color: #f0f0f0;
    font-family: League Spartan;
    font-weight: 400;
}

.nava:active {
    transform: translateY(1px);
}

.btn.btn-login {
    border: 1px solid #EFAC13;
    color: #EFAC13;
}

.btn.btn-login:active {
    transform: translateY(1px);
}

.btn.btn-regis:active {
    transform: translateY(1px);
}

.btn.btn-login:hover {
    border: 1px solid #F2C87E;
    color: #F2C87E;
}

.btn.btn-regis {
    border: 1px solid #EFAC13;
    color: #ffff;
    background-color: #EFAC13;
}

.btn.btn-regis:hover {
    border: 1px solid #F2C87E;
    color: #ffff;
    background-color: #F2C87E;
}
</style>