    
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="<?php echo base_url(); ?>" class="navbar-brand ms-4 ms-lg-0">
            
        <h1 class="m-0" style="color: #15B392;"><img class="me-3" src="img/icons/icon-1.png" alt="Icon" width="60">JEJAKMU</h1>

        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo base_url('/dashboard'); ?>" class="nav-item nav-link active">Dashboard</a>
                <a href="<?php echo base_url('daftarkader'); ?>" class="nav-item nav-link">Daftar Kader</a>

                <div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Event</a>
    <div class="dropdown-menu border-0 m-0">
        <a href="<?php echo base_url('/eventRutin'); ?>" class="dropdown-item">Rutin</a>
        <a href="<?php echo base_url('/ eventSpesial'); ?>" class="dropdown-item">Spesial</a>
    </div>
</div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jejak Kabar</a>
                    <div class="dropdown-menu border-0 m-0">
                    <a href="<?php echo base_url('/news'); ?>" class="dropdown-item">News</a>
                    <a href="<?php echo base_url('/artikel'); ?>" class="dropdown-item">Artikel</a>
                    </div>
                </div>
                </div>
                  <!-- Cek apakah user sudah login -->
            <?php if (session()->get('isLoggedIn')): ?>
                <a href="<?= base_url('/logout'); ?>" class="btn btn-danger py-2 px-4">Logout</a>
            <?php else: ?>
                <a href="#" class="btn btn-success py-2 px-4" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<!-- Modal Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('/login'); ?>" method="post">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
</a>


    </nav>
    <!-- Navbar End -->