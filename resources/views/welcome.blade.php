@extends('layouts.main')

@section('content')

<style>
    .landing-hero {
        background: linear-gradient(135deg, #0ba3df 0%, #395764 100%);
        color: #fff;
        padding: 6rem 0 5rem;
    }
    .landing-hero .lead { opacity: .9; }
    .landing-icon {
        width: 64px;
        height: 64px;
        line-height: 64px;
        border-radius: 50%;
        background: rgba(13, 110, 253, .1);
        color: #0d6efd;
        font-size: 1.6rem;
        margin: 0 auto 1rem;
    }
    .feature-card {
        transition: transform .2s ease, box-shadow .2s ease;
    }
    .feature-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 .5rem 1.25rem rgba(0, 0, 0, .12) !important;
    }
</style>

{{-- Hero --}}
<section class="landing-hero text-center">
    <div class="container">
        <h1 class="display-4 font-weight-bold mb-3">Your contacts, organized in one place</h1>
        <p class="lead mx-auto mb-4" style="max-width: 640px;">
            Keep track of the people you work with and the companies they belong to.
            Find anyone in seconds, and never lose a phone number or email again.
        </p>
        <div>
            <a href="{{ route('contacts.index') }}" class="btn btn-light btn-lg px-4 mr-2 mb-2 font-weight-bold">
                <i class="fa fa-address-book-o mr-1"></i> View Contacts
            </a>
            <a href="{{ route('companies.index') }}" class="btn btn-outline-light btn-lg px-4 mb-2">
                <i class="fa fa-building-o mr-1"></i> View Companies
            </a>
        </div>
    </div>
</section>

{{-- Features --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="font-weight-bold">Everything you need</h2>
            <p class="text-muted mb-0">A simple way to manage your professional network.</p>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm feature-card text-center">
                    <div class="card-body p-4">
                        <div class="landing-icon"><i class="fa fa-user-o"></i></div>
                        <h5 class="card-title font-weight-bold">Manage Contacts</h5>
                        <p class="card-text text-muted">
                            Store names, phone numbers, emails and notes for everyone you deal with.
                        </p>
                        <a href="{{ route('contacts.index') }}" class="stretched-link small font-weight-bold">
                            Go to contacts <i class="fa fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm feature-card text-center">
                    <div class="card-body p-4">
                        <div class="landing-icon"><i class="fa fa-building-o"></i></div>
                        <h5 class="card-title font-weight-bold">Track Companies</h5>
                        <p class="card-text text-muted">
                            Group contacts by the company they work for and see the full picture at a glance.
                        </p>
                        <a href="{{ route('companies.index') }}" class="stretched-link small font-weight-bold">
                            Go to companies <i class="fa fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm feature-card text-center">
                    <div class="card-body p-4">
                        <div class="landing-icon"><i class="fa fa-search"></i></div>
                        <h5 class="card-title font-weight-bold">Find Quickly</h5>
                        <p class="card-text text-muted">
                            Browse your full list of contacts and companies whenever you need a name or number.
                        </p>
                        <a href="{{ route('contacts.index') }}" class="stretched-link small font-weight-bold">
                            Start searching <i class="fa fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Quick start --}}
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="font-weight-bold mb-3">Get started in three steps</h2>
                <ol class="pl-3 text-muted">
                    <li class="mb-2"><strong class="text-dark">Add a company</strong> so your contacts have somewhere to belong.</li>
                    <li class="mb-2"><strong class="text-dark">Add your contacts</strong> and link them to their company.</li>
                    <li><strong class="text-dark">Keep it updated</strong> whenever someone changes jobs or numbers.</li>
                </ol>
            </div>
            <div class="col-lg-6 text-center">
                <div class="card border-0 shadow-sm p-4">
                    <h5 class="font-weight-bold mb-3">Ready when you are</h5>
                    <div>
                        <a href="{{ route('companies.index') }}" class="btn btn-primary btn-block mb-2">
                            <i class="fa fa-building-o mr-1"></i> Browse Companies
                        </a>
                        <a href="{{ route('contacts.index') }}" class="btn btn-outline-primary btn-block">
                            <i class="fa fa-address-book-o mr-1"></i> Browse Contacts
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
