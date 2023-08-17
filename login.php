<?php include('inc/header.php') ?>

<!--============ Start Login Section ============-->
<section class="login-section">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 col-md-12">
                <div class="section-heading text-center mb-5 pb-5">
                    <h2>Log <span class="text-blue">in</span></h2>
                    <h3 class="text-color subtitle mt-3"> To access your account, please provide your login
                        credentials</h3>
                </div>
                <form action="">
                    <div class="alert alert-warning alert-dismissible fade  message" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="mb-5">
                        <label for="" class="text-color d-flex align-items-start gap-2">Username
                            <span class="text-danger fs-1">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text search-field"><i class="fa-regular fa-user"></i></span>
                            <input type="text" class="form-control search-field" placeholder="username">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="text-color d-flex align-items-start gap-2">Password
                            <span class="text-danger fs-1">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text search-field"><i class="fa-solid fa-lock"></i></span>
                            <input type="text" class="form-control search-field" placeholder="password">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="input-group mb-3">

                                <input type="text" disabled="" readonly="" class="form-control text-center captch_box" value="">

                                <span class="input-group-text refresh_button cursor-pointer" id="basic-addon1"><i class="fa-solid fa-rotate-right"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="text-color d-flex align-items-start gap-2">Enter Captcha
                            <span class="text-danger fs-1">*</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control search-field captch_input" placeholder="">
                        </div>
                    </div>



                    <div class="form-check d-flex flex-wrap align-items-center justify-content-between mt-4 pt-2">
                        <div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-color text-color" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                        <a href="forget-password.php" class="text-color">Forget password</a>
                    </div>
                    <div class="input-group pt-5">
                        <button class="mybtn dark-btn d-flex align-items-center gap-3 login-btn">
                            <i class="fa-solid fa-arrow-right-to-bracket "></i>
                            Login
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 text-center  mt-lg-0 mt-md-0 mt-5">
                <img src="assets/img/login.svg" class="sign-image scrolled fade-in-bottom" alt="">
            </div>
        </div>
    </div>
</section>
<!--============ End Login Section============-->

<?php include('inc/footer.php') ?>