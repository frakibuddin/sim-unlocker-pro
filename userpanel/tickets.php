<?php include('inc/header.php') ?>

<!--============ Start model-list section ============-->
<section class="recent-activity dashboard top-section">
    <div class="blur-shadow blur-shadow3"></div>
    <div class="container">
        <div class="section-heading text-center mb-5 pb-5">
            <h2>Your <span class="text-blue">Tickets</span></h2>
        </div>
        <div class="row">
            <div class="col">
                <div class="reseller-box">
                    <form action="">
                        <div class="row">
                            <div class="col-md-12 mt-lg-0 mt-md-0 mt-4">
                                <label for="" class="text-color d-flex align-items-start gap-2">Ticket
                                    <span class="text-danger fs-1">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text search-field"><i class="fa-solid fa-ticket"></i>
                                    </span>
                                    <input type="text" class="form-control search-field" placeholder="Ticket">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12 mt-lg-0 mt-md-0 mt-4">
                                <label for="" class="text-color d-flex align-items-start gap-2">File (file must be jpg or png)
                                    <span class="text-danger fs-1">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text search-field"><i class="fa-regular fa-file"></i>
                                    </span>
                                    <input type="file" class="form-control search-field">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12 mt-lg-0 mt-md-0 mt-4">
                                <label for="" class="text-color d-flex align-items-start gap-2">Description
                                    <span class="text-danger fs-1">*</span> </label>
                                <div class="input-group">
                                    <span class="input-group-text search-field"><i class="fa-regular fa-user"></i>
                                    </span>
                                    <textarea rows="5" class="form-control search-field"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="input-group pt-5">
                            <button class="mybtn dark-btn d-flex align-items-center gap-3">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="reseller-box table-responsive ">
            <table id="model-list" class="ticket-list table table-border text-start">
                <thead>
                    <tr>
                        <th scope="col" width="50">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Credit</th>
                        <th scope="col">Date</th>
                        <th scope="col">Exp Date</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <th>Test Ticket</th>
                        <td>20</td>
                        <td>20 jun 2023</td>
                        <td>12 Sep 2023</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <th>Test Ticket</th>
                        <td>20</td>
                        <td>20 jun 2023</td>
                        <td>12 Sep 2023</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <th>Test Ticket</th>
                        <td>20</td>
                        <td>20 jun 2023</td>
                        <td>12 Sep 2023</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <th>Test Ticket</th>
                        <td>20</td>
                        <td>20 jun 2023</td>
                        <td>12 Sep 2023</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <th>Test Ticket</th>
                        <td>20</td>
                        <td>20 jun 2023</td>
                        <td>12 Sep 2023</td>
                        <td>Completed</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--============ End model-list section ============-->

<?php include('inc/footer.php') ?>