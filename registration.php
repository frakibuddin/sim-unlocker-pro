<?php include('inc/header.php') ?>

<!--============ Start Login Section ============-->
<section class="login-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="section-heading text-center mb-5 pb-5">
                    <h2>Registration<span class="text-blue"></span></h2>
                    <h3 class="text-color subtitle mt-3">Don't share your login info with anyone</h3>
                </div>
                <form action="congratulations.php">
                    <!-- error -->
                    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>Please fill the require input
                    </div> -->
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="text-color d-flex align-items-start gap-2">First Name
                                <span class="text-danger fs-1">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text search-field"><i class="fa-regular fa-user"></i></span>
                                <input type="text" class="form-control search-field" placeholder="Jone">
                            </div>
                        </div>
                        <div class="col-md-6 mt-lg-0 mt-md-0 mt-4">
                            <label for="" class="text-color d-flex align-items-start gap-2">Last Name
                                <span class="text-danger fs-1">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text search-field"><i class="fa-regular fa-user"></i></span>
                                <input type="text" class="form-control search-field" placeholder="smit">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <label for="" class="text-color d-flex align-items-start gap-2">Username
                                <span class="text-danger fs-1">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text search-field"><i class="fa-regular fa-user"></i></span>
                                <input type="text" class="form-control search-field" placeholder="jonesmit101">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <label for="" class="text-color d-flex align-items-start gap-2">Whatsapp Number
                                <span class="text-danger fs-1 opacity-0">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text search-field"><i class="fa-regular fa-user"></i></span>
                                <input type="text" class="form-control search-field" placeholder="979302283">
                            </div>
                        </div>
                        <div class="col-md-6 mt-lg-0 mt-md-0 mt-4">
                            <label for="" class="text-color d-flex align-items-start gap-2">Telegram
                                <span class="text-danger fs-1 opacity-0">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text search-field"><i class="fa-brands fa-telegram"></i></span>
                                <input type="text" class="form-control search-field" placeholder="smit012">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <label for="" class="text-color d-flex align-items-start gap-2">Email
                                <span class="text-danger fs-1">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text search-field"><i class="fa-regular fa-envelope"></i></span>
                                <input type="text" class="form-control search-field" placeholder="demo@gmail.com">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <label for="" class="text-color d-flex align-items-start gap-2">Country
                                <span class="text-danger fs-1">*</span></label>
                            <div class="input-group">
                                <select name="" id="" class="form-control search-field">
                                    <option value="">Select Country</option>
                                    <option value="" class="text-dark">Pakistan</option>
                                    <option value="" class="text-dark">Bangladsah</option>
                                    <option value="" class="text-dark">India</option>
                                    <option value="" class="text-dark">USA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <label for="" class="text-color d-flex align-items-start gap-2">Password
                                <span class="text-danger fs-1">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text search-field"><i class="fa-solid fa-key"></i></span>
                                <input type="password" class="form-control search-field" placeholder="********">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <label for="" class="text-color d-flex align-items-start gap-2">Confirm password
                                <span class="text-danger fs-1">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text search-field"><i class="fa-solid fa-key"></i></span>
                                <input type="password" class="form-control search-field" placeholder="********">
                            </div>
                        </div>
                    </div>

                    <div class="form-check d-flex align-items-center justify-content-between mt-4 pt-2">
                        <div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-color text-color" for="flexCheckDefault">
                                I agree to the terms and conditions Terms & Conditions
                            </label>
                        </div>

                    </div>
                    <div class="input-group pt-5">
                        <button class="mybtn dark-btn d-flex align-items-center gap-3">
                            <i class="fa-solid fa-arrow-right-to-bracket "></i>
                            Registration
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 text-center  mt-lg-0 mt-md-0 mt-5">
                <img src="assets/img/login1.svg" class="sign-image scrolled fade-in-bottom" alt="">
            </div>
        </div>
    </div>
</section>
<!--============ End Login Section============-->

<?php include('inc/footer.php') ?>