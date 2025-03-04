<?php
include (".includes/header.php");
$title = "Dashboard";
// menyertakan file untuk menampilakn notifikasi (jika ada) 
include '.includes/toast_notification.php';
?>
 <!-- Content wrapper -->
 <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-10 mb-4 order-0 w-100">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Selamat Datang Ahmad! 🎉</h5>
                          <p class="mb-4">
                            You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                            your profile.
                          </p>
                          <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                      <div class="row mb-5">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="container">
              <h1 class="text-center py-3">Dalam Negeri</h1>
              <div class="row">
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-80">
                  <img class="card-img-top" src="assets/img/penerbangan/jakarta-1.jpg" alt="Jakarta" />
                    <div class="card-body">
                      <h5 class="card-title">Jakarta</h5>
                        <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Lihat</a>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/img/elements/2.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Lihat</a>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/img/elements/2.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Lihat</a>
                    </div>
                </div>
              </div>
              <div class="d-grid gap-2 col-lg-6 mx-auto mb-5 mt-3">
                <button class="btn btn-primary btn-lg" type="button">View More</button>
              </div>
              <h1 class="text-center py-3">Luar Negeri</h1>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/img/elements/2.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Lihat</a>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/img/elements/2.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Lihat</a>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/img/elements/2.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Lihat</a>
                    </div>
                </div>
              </div>
              <div class="d-grid gap-2 col-lg-6 mx-auto mb-5 mt-3">
                <button class="btn btn-primary btn-lg" type="button">View More</button>
              </div>
            </div>
          </div>

<?php 
include (".includes/footer.php");
?>