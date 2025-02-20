<?php
$uri = service('uri'); // Mendapatkan instance URI
?>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            
        <h1 class="m-0" style="color: #15B392;"><img class="me-3" src="img/icons/logonu.png" alt="Icon" width="100">JEJAKMU</h1>

        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo base_url('/dashboard'); ?>" class="nav-item nav-link active">Dashboard</a>
                <a href="<?php echo base_url('/daftarkader'); ?>" class="nav-item nav-link">Daftar Kader</a>
              
                <div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle <?= ($uri->getSegment(1) == 'event') ? 'active' : '' ?>" data-bs-toggle="dropdown">Event</a>
    <div class="dropdown-menu border-0 m-0">
        <a href="<?php echo base_url('/event/rutinan'); ?>" class="dropdown-item <?= ($uri->getSegment(2) == 'rutinan') ? 'active' : '' ?>">Rutin</a>
        <a href="<?php echo base_url('/event/spesial'); ?>" class="dropdown-item <?= ($uri->getSegment(2) == 'spesial') ? 'active' : '' ?>">Spesial</a>
    </div>
</div>
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle <?= ($uri->getSegment(1) == 'jejakkabar') ? 'active' : '' ?>" data-bs-toggle="dropdown">Jejak Kabar</a>
    <div class="dropdown-menu border-0 m-0">
        <a href="<?php echo base_url('/jejakkabar/news'); ?>" class="dropdown-item <?= ($uri->getSegment(2) == 'news') ? 'active' : '' ?>">News</a>
        <a href="<?php echo base_url('/jejakkabar/artikel'); ?>" class="dropdown-item <?= ($uri->getSegment(2) == 'artikel') ? 'active' : '' ?>">Artikel</a>
    </div>
</div>               


</div>
<a href="" class="btn py-2 px-4 d-none d-lg-block" style="background-color: #15B392; border-color: #15B392; color: white;">Login</a>

    </nav>
    <!-- Navbar End -->