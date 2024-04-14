@extends('user.layout.master')
@section('content')
<section id="first-section" class="mt-10 px-8 md:px-24">
    <div class="flex flex-col space-y-9  md:space-y-0 md:flex-row md:justify-between md:gap-6">
        <!-- right section -->
        <div class="text-center space-y-6 md:text-left md:w-8/12 lg:w-8/12">
            <h2 class="font-bold text-3xl">
                A Brief Introduction
            </h2>
            <p class="text-lg">
               {{$about->description}}
            </p>
        </div>
        <!-- right section end-->
        <!-- left section -->
     @include('user.layout.inv_notification_bar')
    </div>
        <!-- left section end -->
    </div>
</section>
@endsection
