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
                            <span class="input-group-text search-field"><i class="fa-regular fa-circle"></i> </span>
                            <input type="text" class="form-control search-field" placeholder="09897">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="text-color d-flex align-items-start gap-2">Method
                            <span class="text-danger fs-1">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text search-field">
                                <i class="fa-brands fa-paypal"></i>
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