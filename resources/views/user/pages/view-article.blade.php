@extends('user.layout.master')
@section('content')

    <section id="first-section" class="mt-10 px-8 md:px-24">
        <div class="flex flex-col space-y-9  md:space-y-0 md:flex-row md:justify-between md:gap-6">
            <!-- right section -->
            <div class="text-center space-y-6 md:text-left md:w-8/12 lg:w-8/12">
                <h2 class="font-bold text-3xl">
                    {{ $article->title }}
                </h2>
                <p class="text-gray-500 text-lg ">
                    {{ $article->abstract }}
                </p>
                <button
                    class="bg-fpiGreen p-2 sm:p-3 rounded-full text-white px-4 sm:px-6 text-lg sm:text-xl hover:bg-[#2b6b26dd]">
                    <a href="{{ asset($article->file) }}" target="_blank"> Download Article </a>
                </button>

            </div>
            <!-- right section end-->
            <!-- left section -->
            @include('user.layout.inv_notification_bar')
        </div>
        <!-- left section end -->
        </div>
    </section>
@endsection
