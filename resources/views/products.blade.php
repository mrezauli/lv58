@extends('master')
@section('title', 'Products')

@section('content')
    <div class="container">
        <div class="row banner">

            <div class="col-12">

                <h1 class="text-center mt-5 editContent">
                    Learning Laravel 5
                </h1>

                <h4 class="text-center margin-top-100 editContent">Building Practical Applications</h4>
                <h4 class="text-center margin-top-100 editContent">{!! trans('main.subtitle') !!}</h4>

                <div class="text-center">
                    <img src="https://learninglaravel.net/img/LearningLaravel5_cover0.png" width="302" height="391" alt="">
                </div>

            </div>

        </div>
    </div>

@endsection
