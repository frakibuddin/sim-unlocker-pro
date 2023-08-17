<?php include('inc/header.php') ?>



<!--============ Start Login Section ============-->
<section class="login-section">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="congratulations.php">
                    <div class="reseller-box">
                        <div class="position-relative">
                            <div class=" text-center">
                                <h2 class="text-blue fs-1">Please enter the one time password <br> to verify your account</h2>
                                <div class="text-color my-4"> <span>A code has been sent to</span> <small>*******8470</small> </div>
                                <div id="otp" class="otp-inputs d-flex flex-row justify-content-center my-5">
                                    <input class="m-2 text-center form-control " type="text" id="first" maxlength="1" /> <input class="m-2 text-center form-control" type="text" id="second" maxlength="1" /> <input class="m-2 text-center form-control" type="text" id="third" maxlength="1" /> <input class="m-2 text-center form-control" type="text" id="fourth" maxlength="1" /> <input class="m-2 text-center form-control" type="text" id="fifth" maxlength="1" /> <input class="m-2 text-center form-control" type="text" id="sixth" maxlength="1" />
                                </div>
                                <div class="mt-4">
                                    <button class="mybtn dark-btn d-flex text-center justify-content-center w-100">
                                        Verify OTP
                                    </button>
                                </div>
                                <p class="text-color mt-4">Didn't get the code <a href="" class="text-blue text-decoration-none">Resend</a></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
<!--============ End Login Section============-->



<?php include('inc/footer.php') ?>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        function OTPInput() {
            const inputs = document.querySelectorAll('#otp > *[id]');
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].addEventListener('keydown', function(event) {
                    if (event.key === "Backspace") {
                        inputs[i].value = '';
                        if (i !== 0) inputs[i - 1].focus();
                    } else {
                        if (i === inputs.length - 1 && inputs[i].value !== '') {
                            return true;
                        } else if (event.keyCode > 47 && event.keyCode < 58) {
                            inputs[i].value = event.key;
                            if (i !== inputs.length - 1) inputs[i + 1].focus();
                            event.preventDefault();
                        } else if (event.keyCode > 64 && event.keyCode < 91) {
                            inputs[i].value = String.fromCharCode(event.keyCode);
                            if (i !== inputs.length - 1) inputs[i + 1].focus();
                            event.preventDefault();
                        }
                    }
                });
            }
        }
        OTPInput();


    });
</script>