<?php include(".layouts/header.php"); ?>
<!-- Register -->
<div class="card">
  <div class="card-body">
    <!-- Logo -->
    <div class="app-brand justify-content-center">
      <a href="index.html" class="app-brand-link gap-2">
        <span class="app-brand-text demo text-uppercase fw-bolder">IdeKreatif</span>
      </a>
    </div>
    <!-- /Logo -->
    <h4 class="mb-2">Selamat datang di IdeKreatif! 👋</h4>
    <form class="mb-3" action="login_auth.php" method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">Nama</label>
        <input type="text" class="form-control" name="name" placeholder="Masukkan Nama" />
      </div>
      <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>
      </div>
      <div class="d-grid gap-2 col-lg-10 mx-auto ">
        <button class="btn btn-primary btn-lg" type="button" >Masuk</button>
      </div>
    </form>
    <p class="text-center">
      <span>Belum punya akun?</span><a href="register.php"><span> Daftar</span></a>
    </p>
  </div>
</div>
<!-- /Register -->
<?php include(".layouts/footer.php"); ?>