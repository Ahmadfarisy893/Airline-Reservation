<?php
include (".includes/header.php");
$title = "Akun";
// menyertakan file untuk menampilakn notifikasi (jika ada) 
include '.includes/toast_notification.php';
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
?>

<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>
<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
            </li>
        </ul>
    <div class="card mb-4">
        <h5 class="card-header">Profile Details</h5>
            <!-- Account -->
            <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
                <img
                src="assets/img/avatars/1.png"
                alt="user-avatar"
                class="d-block rounded"
                height="100"
                width="100"
                id="uploadedAvatar"
                />
            <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                <span class="d-none d-sm-block">Upload new photo</span>
                <i class="bx bx-upload d-block d-sm-none"></i>
            <input
                type="file"
                id="upload"
                class="account-file-input"
                hidden
                accept="image/png, image/jpeg"
            />
            </label>
            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                <i class="bx bx-reset d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Reset</span>
            </button>
                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
            </div>
            </div>
            </div>      
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="firstName"
                              value="John"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control" type="text" name="lastName" id="lastName" value="Doe" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              value="john.doe@example.com"
                              placeholder="john.doe@example.com"
                            />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">Country</label>
                            <select id="country" class="select2 form-select">
                              <option value="">Select</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="English">English</option>
                              <option value="Malaysia">Malaysia</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="language" class="form-label">Language</label>
                            <select id="language" class="select2 form-select">
                              <option value="">Select Language</option>
                              <option value="en">English</option>
                              <option value="de">Indonesia</option>
                              <option value="pt">Malaysia</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="currency" class="form-label">Currency</label>
                            <select id="currency" class="select2 form-select">
                              <option value="">Select Currency</option>
                              <option value="idr">IDR</option>
                              <option value="usd">USD</option>
                              <option value="myr">MYR</option>
                            </select>
                        </div>
                        </div>
                        <div class="mt-2 mb-3">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    

<?php 
include (".includes/footer.php");
?>