@extends('user.layout.master')
@section('content')
    <section id="first-section" class="px-8 mt-10 md:px-24">
        <div class="flex flex-col space-y-9 md:space-y-0 md:flex-row md:justify-between md:gap-6">
            <!-- right section -->
            <div class="space-y-6 text-center md:text-left md:w-8/12 lg:w-8/12">
                <h2 class="text-3xl font-bold">

                </h2>
                <figure class="p-8 md:flex md:bg-transparent bg-slate-100 rounded-xl md:p-0">
                    <img class="w-24 h-24 mx-auto rounded-full md:mx-0 md:w-48 md:h-auto md:rounded-md"
                        src="{{ asset('images/img/eng-image.jpg') }}" alt="" width="384" height="512">
                    <div class="pt-6 space-y-4 text-center md:p-8 md:text-left">
                        <h1 class="flex-auto text-lg font-semibold text-slate-900 ">
                           {{$editorInChief->designation->designation}}
                        </h1>
                        <hr>
                        <figcaption class="font-medium">
                            <div class="text-fpiGreen">
                                <h3> {{ $editorInChief->fullname }} </h3>
                            </div>
                            <div class="text-slate-700 dark:text-slate-500">
                                {{ $editorInChief->institution }}
                            </div>
                        </figcaption>
                    </div>
                </figure>

                @foreach ($designations as $designation)
                <div class="pt-10">
                    <h2 class="pb-5 text-2xl font-bold">{{ $designation->designation }}</h2>
                    <div class="flex flex-wrap w-full gap-3">
                    @foreach ($designation->editors as $editor)
                        <div class="flex flex-col p-4 bg-slate-100 rounded-xl md:p-0 w-full md:w-[32%]">
                            <img class="w-full mx-auto rounded-lg shadow-md shadow-fpiGreen h-52"
                                 src="{{ asset($editor->image) }}" alt="Editor Image" width="384" height="512">
                            <div class="pt-6 space-y-4 text-center md:space-y-2 md:p-4 md:flex-auto">
                                <h1 class="text-lg font-semibold text-slate-900">{{ $editor->designation->designation }}</h1>
                                <hr>
                                <figcaption class="font-medium">
                                    <div class="text-fpiGreen">
                                        <h3>{{ $editor->fullname }}</h3>
                                    </div>
                                    <div class="text-slate-700 dark:text-slate-500">
                                        {{ $editor->position }}
                                    </div>
                                    <p class="text-sm text-slate-700">
                                        {{ $editor->institution }}
                                    </p>
                                </figcaption>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endforeach

            </div>
            <!-- right section end-->
            <!-- left section -->
            @include('user.layout.inv_notification_bar')
        </div>
        <!-- left section end -->
        </div>
    </section>
@endsection
