@extends('layouts.lay')
@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->

    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact-text">
                        <h3>Get in touch!</h3>
                        <p>If you have any questions, feel free to reach out via WhatsApp or Email. We're here to help you!</p>

                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Phone</h5>
                                <ul>
                                    <li>+20 1280021316</li>

                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Email</h5>
                                <p>ahmedashraf200255@yahoo.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact-form">
                        <h3>Work with Me!</h3>
                        <form action="{{ route('contacts.store') }}" method="POST">
                            @csrf
                            <input type="text" name="name" placeholder="Name" required>
                            <input type="email" name="email" placeholder="Email" required>
                            <input type="text" name="phone_number" placeholder="Phone Number" required>
                            {{-- <input type="date" id="datepicker" name="date" placeholder="Select a date" required> --}}
                            <textarea name="comments" placeholder="Message" required></textarea>
                            <button type="submit" class="site-btn">Submit</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            flatpickr('#datepicker', {
                disable: [
                    function(date) {
                        // Disable Saturdays (6) and Sundays (0)
                        return (date.getDay() === 0 || date.getDay() === 6);
                    }
                ],
                dateFormat: 'Y-m-d',
            });
        });
    </script> --}}

@endsection
