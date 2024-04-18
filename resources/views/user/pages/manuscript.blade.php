@extends('user.layout.master')
@push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
@section('content')
    <section id="first-section" class="px-8 mt-10 md:px-24">
        <div class="flex flex-col md:flex-row md:justify-between md:gap-6">
            <!-- right section -->

            @if (session('success'))
                <script>
                    Swal.fire({
                        icon: "success",
                        title: "Success!!",
                        text: "{{ session('success') }}",

                    });
                </script>
                @endif

            @if (session('error'))
                <script>
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "{{ session('error') }}",
                    });
                </script>
            @endif

            <div class="space-y-6 md:w-8/12 lg:w-9/12">
                        <!-- Display Validation Errors -->
                        @if ($errors->any())
                        <div class="p-4 text-red-700 bg-red-100 border-l-4 border-red-500" role="alert">
                            <p class="font-bold">Please fix the following errors:</p>
                            <ul class="pl-6 list-disc">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                <h2 class="text-3xl font-bold text-center md:text-left">
                    Create Manuscript
                </h2>
                <form action="{{ route('manuscript.store') }}" method="post" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('post')
                    <div class="flex flex-col">
                        <label for="title" class="font-semibold">Title</label>
                        <input type="text" id="title" name="title" required
                               class="px-4 py-2 border rounded-md focus:outline-none focus:border-green-500"
                               value="{{ old('title') }}">
                    </div>
                    <div class="flex flex-col">
                        <label for="author" class="font-semibold">Author</label>
                        <input type="text" id="author" name="authors" required
                               class="px-4 py-2 border rounded-md focus:outline-none focus:border-green-500"
                               value="{{ old('authors') }}">
                    </div>
                    <div class="flex flex-col">
                        <label for="abstract" class="font-semibold">Abstract</label>
                        <textarea id="abstract" name="abstract" required
                                  class="h-32 px-4 py-2 border rounded-md focus:outline-none focus:border-green-500">{{ old('abstract') }}</textarea>
                    </div>
                    <div class="flex flex-col">
                        <label for="file" class="font-semibold">Article File <span class="text-sm text-gray-600">Note:
                                submit article in PDF format</span></label>
                        <input type="file" id="file" name="file" required
                               class="px-4 py-2 border rounded-md focus:outline-none focus:border-green-500">
                        <!-- Note: Old value for file input is generally not retained for security reasons -->
                    </div>
                    <div>
                        <input type="submit" value="submit"
                               class="px-4 py-2 text-white rounded-md cursor-pointer bg-fpiGreen hover:bg-green-400">
                    </div>
                </form>

            </div>
            <!-- right section end-->

            <!-- left section -->
            @include('user.layout.inv_notification_bar')
            <!-- left section end -->
        </div>
    </section>
@endsection
