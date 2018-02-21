@extends('Master.home')

@section('content')
<div class="row pt-5">
    <div class="col-md-8">
        <!--Card Wider-->
        <div class="card card-cascade wider">

            <!--Card image-->
            <div class="view overlay">
                <img src="{{ asset('img/hassam.jpg') }}" class="img-fluid">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <!--/Card image-->

            <!--Card content-->
            <div class="card-body text-center">
                <!--Title-->
                <h4 class="card-title"><strong>Hassam Ali</strong></h4>
                <h5 class="indigo-text"><strong>Full Stack Web Developer</strong></h5>

                <p class="card-text">This blog is about me, my tutorials related to be a full stack web developer, freelancing guides and 
                    a type of approach which makes you professional developer.
                </p>

            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card Wider-->
    </div>

    <div class="col-md-4">
        <p class="text-center">Website is under development.</p>
    </div>
</div>

@endsection