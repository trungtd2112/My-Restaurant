<main>
    <article>
        <!-- Block_4 -->
        <section id="block_4" class='_1row wow fadeInUp'>
            <div class="block_1-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-12 mx-auto text-center title">
                            <h5>Booking a table online is easy</h5>
                            <h4>Make A Reservation</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Booking Table -->
        <section id="booking-table" class='_1row wow fadeInUp'>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 mx-auto text-center col-12 booking">
                        <p>Booking a table has never been so easy with free & instant online restaurant reservations, booking now!!
                        </p>
                        <p>onday to Friday <span>9:00 am - 23:00 pm</span> Saturday to Sunday <span>10:00 am - 22:00 pm</span> <br>
                            Note: Arctica Restaurant is closed on holidays.</p>
                        <p class='phone-number'>0844.335.1211</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="title mx-auto text-center">
                        <h4>Book Your Table Onlie</h4>
                    </div>
                    <form action="<?php echo base_url()?>Home/booking" id="form2" name="form2" method="post">
                        <p class="col-sm-4 col-12 valid-form" id="field-1">
                            <input type="text" name="customer_name" placeholder="Your Name *" required>
                        </p>
                        <p class="col-sm-4 col-12 valid-form" id="field-2">
                            <input type="email" name="customer_email" placeholder="Your Email *" required>
                        </p>
                        <p class="col-sm-4 col-12 valid-form" id="field-3">
                            <input type="number" name="customer_phone" placeholder="Your Number *" required>
                        </p>
                        <p class="col-sm-4 col-12 valid-form" id="field-4">
                            <input type="date" name="reservation_date" placeholder="Date *" required>
                        </p>
                        <p class="col-sm-4 col-12 valid-form" id="field-5">
                            <input type="time" name="reservation_time" placeholder="Time *" required>
                        </p>
                        <p class="col-sm-4 col-12 valid-form" id="field-6">
                            <input type="number" name="number_customer" placeholder="No. of Persons *" required>
                        </p>
                        <p class="col-sm-2 col-12 mx-auto">
                            <button id='send' class="mx-auto text-center btn btn-success book" type='submit'>Book Now</button>
                        </p>
                    </form>
                </div>
            </div>
        </section>
        <!-- Block 5 -->
        <section id="block_5" class='_1row wow fadeInUp'>
            <div class="block_1-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-12 mx-auto text-center title">
                            <h5>Enjoy Pleasant Pastime With Friends and Partners</h5>
                            <h4>Relaxing Atmosphere</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Meeting -->
        <section id="meeting" class='_1row wow fadeInUp'>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-12 content wow fadeInLeft">
                        <div class="title">
                            <h5>Gorgeous Halls</h5>
                            <h4>Find Perfect Place For Any Meeting</h4>
                        </div>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <h6>Seat Up 155 Company Meatings</h6>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        <h6>Traditional Home hall</h6>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        <a href="#" class="read-more">Book Now</a>
                    </div>
                    <div class="col-sm-3 col-6 picture-1 wow zoomIn">
                        <img src="images/meeting-1.jpg" alt="">
                    </div>
                    <div class="col-sm-3 col-6 picture-2 wow zoomIn">
                        <img src="images/meeting-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>
