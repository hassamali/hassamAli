@extends('Master.home')

@section('content')
<div class="row pt-5">
    <div class="col-md-8">
        <!--Card Wider-->
        <div class="card card-cascade wider">

            <!--Card content-->
            <div class="card-body">
                <!--Title-->
                @foreach($threads as $thread)
                <h5 class="indigo-text"><strong><a href="{{ $thread->path() }}">{{ $thread->title }}</a></strong></h5>
                <p class="card-text">{{ $thread->body }}</p>

                <hr>
                @endforeach
            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card Wider-->
    </div>
</div>

@endsection