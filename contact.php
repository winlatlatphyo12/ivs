<?php
        include "includes/head.php";
        include "includes/nav.php";
        include "includes/header.php";
?>

    <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-7 col-lg-5 text-center shadow py-3">
                        <h4>Send us a message!</h4>
                        <div class="my-4">
                            
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Name</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
                                    <label for="phone">Phone Number</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="message">Message</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-warning text-uppercase" id="submitButton" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 ms-5">
                        <h4 class="mt-3">Contact Us </h4>
                        <br>
                        <p class="fs-6"> Mobile: 09 777 487 444 </p>
                        <p class="fs-6"> Email: info@ivs.com.mm </p>
                        <p class="fs-6"> Office Hour: 9:00 AM – 5:00 PM </p>
                        <p class="fs-6"> Location: No.207, Pyay Road, Sanchaung Township </p>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <!-- Facebook -->
                                <a href="https://www.facebook.com/ivsmm"
                                class="btn btn-outline-secondary btn-floating m-1"
                                class="text-secondary"
                                role="button"><i class="fab fa-facebook-f"></i>
                                </a>
                            </div>

                            <div class="col-md-3">
                                <!-- LinkedIn -->
                                <a href="https://www.linkedin.com/company/ivsm"
                                class="btn btn-outline-secondary btn-floating m-1"
                                class="text-secondary"
                                role="button"><i class="fab fa-linkedin"></i>
                                </a>
                            </div>

                            <div class="col-md-3">
                                <!-- Youtube -->
                                <a href="https://www.youtube.com/@ivs-mm"
                                class="btn btn-outline-secondary btn-floating m-1"
                                class="text-secondary"
                                role="button"><i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </main>

        <?php
            include "includes/footer6.php";
        ?>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
