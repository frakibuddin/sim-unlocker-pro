<?php include('inc/header.php') ?>

<!--============ Start Login Section ============-->
<section class="login-section">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-3"> </div>
            <div class="col-lg-6 col-md-12">
                <div class="section-heading text-center mb-5 pb-5">
                    <h2>Forget Your <span class="text-blue">Password</span></h2>
                    <h3 class="text-color subtitle mt-3">Please enter your email which you use create accout.</h3>
                </div>
                <form action="">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>Email is wrong!
                    </div>
                    <div class="mb-3">
                        <label for="" class="text-color d-flex align-items-start gap-2">Email
                            <span class="text-danger fs-1">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text search-field"><i class="fa-regular fa-user"></i></span>
                            <input type="text" class="form-control search-field" placeholder="example@gmail.com">
                        </div>
                    </div>
                    <div class="input-group pt-5">
                        <button class="mybtn dark-btn d-flex align-items-center gap-3">
                            <i class="fa-solid fa-arrow-right-to-bracket "></i>
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2"> </div>
        </div>
    </div>
</section>
<!--============ End Login Section============-->

<?php include('inc/footer.php') ?>