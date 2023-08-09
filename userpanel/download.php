<?php include('inc/header.php') ?>

<!--============ Start model-list section ============-->
<section class="recent-activity dashboard top-section">
    <div class="blur-shadow blur-shadow3"></div>
    <div class="container">
        <div class="section-heading text-center mb-5 pb-5">
            <h2>Your <span class="text-blue">Download</span> File</h2>
        </div>
        <div class="reseller-box table-responsive">
            <table id="model-list" class="valign-middle table table-border text-start download-list">
                <thead>
                    <tr>
                        <th scope="col" width="50">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Model</th>
                        <th scope="col">Version</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <th><img src="assets/img/android.svg" width="80" alt=""></th>
                        <td>Samsung</td>
                        <td>SM-3494</td>
                        <td>1.0.2</td>
                        <td>20 jun 23</td>
                        <td>Completed</td>
                        <td width="50">
                            <div class="software-btn">
                                <button type="button" class="mybtn mybtn-menu dark-btn d-flex align-items-center gap-2 px-4">
                                    <i class="fa-solid fa-download"></i>
                                    Download
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--============ End model-list section ============-->


<?php include('inc/footer.php') ?>