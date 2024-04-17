@extends('user.layout.master')
@section('content')
<section id="first-section" class="px-8 mt-10 md:px-24">
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
        <div class="grid grid-cols-1 gap-4 text-center md:grid-cols-3">
            <!-- Email Card -->
            <div class="p-4 transition-shadow bg-white rounded-lg shadow-md hover:shadow-lg">
                <div class="text-blue-500">
                    <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 2a2 2 0 012 2v7m-1.5 2.5a5.5 5.5 0 11-11 0m11 0a11.06 11.06 0 01-11 11V4a2 2 0 012-2h10zm0 0L12 11.5m0 0L8.5 9"></path></svg>
                </div>
                <h2 class="text-lg font-semibold">Email Us</h2>
                <p>{{ $about->email }}</p>
            </div>

            <!-- Phone Card -->
            <div class="p-4 transition-shadow bg-white rounded-lg shadow-md hover:shadow-lg">
                <div class="text-green-500">
                    <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v6a9 9 0 009 9h3a9 9 0 009-9V5a9 9 0 00-9-9H12a9 9 0 00-9 9z"></path></svg>
                </div>
                <h2 class="text-lg font-semibold">Call Us</h2>
                <p>{{ $about->phone }}</p>
            </div>

            <!-- Address Card -->
            <div class="p-4 transition-shadow bg-white rounded-lg shadow-md hover:shadow-lg">
                <div class="text-red-500">
                    <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5a1 1 0 011-1h16a1 1 0 011 1v11.382a1 1 0 01-.553.894L15 20m-3-18v10m0 0l-3.32-3.32m3.32 3.32l3.31-3.32"></path></svg>
                </div>
                <h2 class="text-lg font-semibold">Visit Us</h2>
                <p>{{ $about->location }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
