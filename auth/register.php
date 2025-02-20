<?php include(".layouts/header.php"); ?>
<!-- Register Card -->
<div class="card">
  <div class="card-body">
    <!-- Logo -->
    <div class="app-brand justify-content-center">
      <a href="index.html" class="app-brand-link gap-2">
        <span class="app-brand-logo demo"></span>
        <span class="app-brand-text demo text-uppercase fw-bolder">IdeKreatif</span>
      </a>
    </div>
    <!-- /Logo -->
    <form action="register_process.php" class="mb-3" method="POST">
      <div class="mb-3">
        <label for="email" class="form-label">Nama</label>
        <input type="text" class="form-control" name="name" placeholder="Masukkan Nama" />
      </div>
      <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>
      </div>
      <div class="d-grid gap-2 col-lg-10 mx-auto">
        <button class="btn btn-primary btn-lg" type="button" >Daftar</button>
      </div>

    </form>
    <p class="text-center">
      <span>Sudah memiliki akun?</span><a href="login.php"><span> Masuk</span></a>
    </p>
  </div>
</div>
<!-- Register Card -->
<?php include(".layouts/footer.php"); ?>