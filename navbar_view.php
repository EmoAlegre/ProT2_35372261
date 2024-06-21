<!--barra de navegación-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand me-auto barra" href="<?php echo base_url('principalultimo')?>">  
                <img src="<?php echo base_url('assets/img/genericologo.jpg') ?>" alt="Logo" width="50" height="50" class="img-fluid">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('quienes_somos')?>">Soy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('acercade')?>">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('registro')?>">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('login')?>">Login</a>
                </li>
                <li class="nav-item">
                    <form class="d-flex" role="buscar">
                        <input class="form-control me-2" type="search" placeholder="buscar" aria-label=" search">
                        <button class="btn-outline-success" type="submit"> Buscar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>



<!-----barra de navegación fin-->