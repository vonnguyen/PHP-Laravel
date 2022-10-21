@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('client')}}/assets/product.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/login.css">
@endsection

@section('content')
    <div class="pt-[110px]">

        <div class="slide-header">
            <div class="contain-slide">
                <p>CONTACT</p>
                <ul>
                    <li><a href="index.html">HOME</a> </li>
                    <li>/</li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
        <!-- Contain -->

        <div class="contact-about container">
            <div class="row">
                <div class="col-8">
                    <div class="fa-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62860.63914868925!2d105.72255070323611!3d10.034185113825915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0629f6de3edb7%3A0x527f09dbfb20b659!2zQ-G6p24gVGjGoSwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1658541299618!5m2!1svi!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
                <div class="col-4">
                    <ul class="contact-info">
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <div class="list-info">
                                <h5>PHONE</h5>
                                <p><span>Toll-Free:</span> 0000 - 123 - 456789</p>
                                <p><span>Fax:</span> 0000 - 123 - 456789</p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <div class="list-info ">
                                <h5>Email</h5>
                                <p><a href="">info@example.com</a> </p>
                                <p><a href="">support@example.com</a></p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-arrow"></i>
                            <div class="list-info">
                                <h5>PHONE</h5>
                                <p><span>Toll-Free:</span> 0000 - 123 - 456789</p>
                                <p><span>Fax:</span> 0000 - 123 - 456789</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="contact-from">
                <p>Contact Form</p>
                <div class="form-contact">
                    <form  action="" method="get">
                        <div class="name-email">
                            <input class="form-control" type="text" id="name" placeholder="Name">
                            <input class="form-control" type="text" id="Email" placeholder="Email">
                            <input class="form-control" type="text" id="PHONE" placeholder="Phone">
                        </div>
                        <div class="form-control" type="text">
                            <textarea name="Mesenger" id="" placeholder="Messenger" cols="100" rows="10"></textarea>
                        </div>
                        <div class="btn-contact">
                            <button>
                                <span>SEND</span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>


        </div>

@endsection