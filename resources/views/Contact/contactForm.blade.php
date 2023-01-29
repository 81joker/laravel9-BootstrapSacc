@extends('layouts.app')

@section('content')
    <section id="contact" class="get-started">
        <div class="container">
            <div class="row text-center">
                <h1 class="display-3 fw-bold text-capitalize">Get Started</h1>
                <div class="heading-line"></div>
                <p class="lh-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo maxime fuga dolorum!</p>
            </div>

            <!-- Start The CTA Conetnt -->
            <div class="row text-white">
                <div class="col-12 col-md-6 gradient shadow p-3">
                    <div class="cta-info w-100">
                        <h4 class="display-4 fw-bold">100% Statisfaction Guaranteed</h4>
                        <p class="lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic vero dolorum ab.</p>
                        <h3 class="display-3--brief">What will be the next step?</h3>

                        <ul class="cta-info__list">
                            <li>We'll prepare the proposal.</li>
                            <li>we'll discuss it together.</li>
                            <li>let's start the discussion.</li>
                        </ul>


                    </div>
                </div>
                <div class="col-12 col-md-6 bg-white shadow p-3">
                    <div class="form w-100">
                        <h4 class="display-3--title mb-5">startd your project</h4>
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form method="POST" class="row" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="col-lg-6 mb-3">
                                <input type="text" placeholder="First Name" id="inputFirstName" name="firstname"
                                    class="form-control form-control-lg shadow" value="{{ old('firstname') }}">
                                @if ($errors->has('firstname'))
                                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                @endif
                            </div>
                            <div class="col-lg-6 mb-3">
                                <input type="text" placeholder="Last Name" id="inputLastName" name="lastname"
                                    class="form-control form-control-lg shadow" value="{{ old('lastname') }}">
                                @if ($errors->has('lastname'))
                                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                @endif
                            </div>
                            <div class="col-lg-12 mb-3">
                                <input type="email" placeholder="Email address" id="inputEmail" name="email"
                                    class="form-control form-control-lg shadow" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="col-lg-12 mb-3">
                                <textarea name="message" id="message" placeholder="Message" class="form-control form-control-lg shadow" name="message"
                                    rows="8" value="{{ old('message') }}"></textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                            <div class="text-center d-grid mt-1">
                                <button type="submit" class="btn btn-primary rounded-pill pt-3 pb-3">submit
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
