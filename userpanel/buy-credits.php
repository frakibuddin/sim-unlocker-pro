<?php include('inc/header.php') ?>
<!--============ Start Buy-credits section ============-->
<section class="recent-activity dashboard top-section">
    <div class="blur-shadow blur-shadow3"></div>
    <div class="container">
        <div class="section-heading text-center mb-5 pb-5">
            <h2>Buy <span class="text-blue">Credits</span></h2>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="">
                    <div class="mb-5">
                        <label for="" class="text-color d-flex align-items-start gap-2">Number
                            <span class="text-danger fs-1">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text search-field"><svg class="svg-inline--fa fa-circle" aria-hidden="true" focusable="false" data-prefix="far" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                </svg><!-- <i class="fa-regular fa-circle"></i> Font Awesome fontawesome.com --></span>
                            <input type="text" class="form-control search-field" placeholder="09897">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="text-color d-flex align-items-start gap-2">Method
                            <span class="text-danger fs-1">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text search-field">
                                <svg class="svg-inline--fa fa-paypal" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="paypal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4.7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9.7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z"></path>
                                </svg><!-- <i class="fa-brands fa-paypal"></i> Font Awesome fontawesome.com -->
                            </span>
                            <select class="form-control search-field ">
                                <option value="" selected="">Select</option>
                                <option value="" class="txt-black">Paypal</option>
                                <option value="" class="txt-black">Credit</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group pt-5">
                        <button class="mybtn dark-btn d-flex align-items-center gap-3">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>

        <h2 class="text-color fw-bold fs-1 mt-5 pt-5 ">Buy Credit List <span class="text-blue"></span></h2>
        <div class="reseller-box table-responsive ">
            <table id="model-list" class="cradit-list table table-border text-start model-list">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Number</th>
                        <th scope="col">Method</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">01</th>
                        <td>9837489</td>
                        <td>Paypal</td>
                        <td>12 jun 23</td>
                        <td>panding</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--============ End buy-credits section ============-->
<?php include('inc/footer.php') ?>