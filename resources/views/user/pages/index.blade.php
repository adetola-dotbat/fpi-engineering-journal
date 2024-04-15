@extends('user.layout.master')
@section('content')
    <section
        class="flex flex-col items-center px-6 space-y-8 sm:px-12 md:flex-row md:justify-between md:space-y-0 lg:px-24 xl:px-36"
        id="hero-section">
        <div class="space-y-6 md:w-7/12 lg:space-y-8">
            <h1
                class="text-4xl font-bold text-center sm:text-5xl md:font-extrabold md:text-left lg:text-[4em] xl:text-[4.6em] w-full lg:w-[90%] xl:w-[110%]">
                Journal of Measurements in
                <span class="text-fpiGreen">Engineering</span>
            </h1>
            <p class="text-slate-400 text-lg max-w-xl">
                Theoretical and practical advancements in the field of measurements,
                including instrumentation, sensor technology, data processing, and
                diverse engineering applications.
            </p>
            <div class="text-center md:text-left">
                <button
                    class="bg-fpiGreen p-2 sm:p-3 rounded-full text-white px-4 sm:px-6 text-lg sm:text-xl hover:bg-[#2b6b26dd]">
                    Send Manuscript
                </button>
            </div>
        </div>
        <div class="relative mt-12 md:mt-0">
            <div class="absolute top-20 sm:top-24 md:top-72 -left-4 md:-left-14">
                <button class="p-2 px-6 text-white bg-orange-500 rounded-full sm:p-3 sm:px-8">
                    Latest Volume
                </button>
            </div>
            <img src="{{ asset($volume->image) }}" alt=""
                class="w-56 h-48 sm:w-64 sm:h-[18rem] md:w-72 md:h-[28rem] lg:w-96 lg:h-[32rem] xl:w-[28rem] xl:h-[35rem] rounded-tl-[15rem] rounded-tr-[15rem] rounded-br-[3rem] rounded-bl-[14rem] shadow-lg" />
            <div class="absolute bottom-6 md:bottom-16 left-20 md:left-60 z-10">
                <div class="bg-orange-600 w-36 h-36 sm:w-44 sm:h-44 md:w-52 md:h-52 blur-[50px]"></div>
            </div>
        </div>
    </section>
    <section class="px-4 mt-10 md:px-10 lg:px-20 xl:px-56 py-10" id="about-us">
        <div class="flex flex-col-reverse gap-8 md:flex-row md:gap-12">
            <div class="hidden sm:hidden md:block lg:w-4/12">
                <img src="{{ asset($editor->image) }}" alt="" class="w-96 rounded-lg" />
            </div>
            <div class="flex flex-col justify-center space-y-6 text-center md:text-left md:w-8/12 lg:space-y-9">
                <h1 class="text-2xl font-bold sm:text-3xl">About Us</h1>
                <p class="text-md sm:text-lg text-darkGrayishBlue">
                    {{ $about->description }}
                </p>
                <div>
                    <button
                        class="p-2 px-4 font-bold border rounded-full sm:p-2 sm:px-5 border-fpiGreen text-fpiGreen hover:text-white hover:bg-fpiGreen md:px-5 lg:p-3 lg:px-8">
                        <a href="{{ route('about.index') }}"> Read more</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="articles" class="bg-articleColor mt-9 py-20 px-6 md:px-12 lg:px-24 w-[100%]">
        <div class="">
            <div class="flex flex-col space-y-9 md:space-y-0 md:flex-row md:justify-between">
                <!-- Right seciton -->
                <div class="text-center md:text-left md:w-8/12 lg:w-8/12">
                    <div class="flex justify-between mb-10">
                        <h1 class="text-3xl font-bold">Articles</h1>
                        <p class="text-xl font-bold text-fpiGreen">
                            <a href="{{ route('article.index') }}"> See All </a>
                        </p>
                    </div>

                    <div class="flex mb-8">
                        <div class="flex gap-3 justify-center md:w-[80%]" id="myTab" data-tabs-toggle="#myTabContent"
                            role="tablist">
                            <div class="md:w-full">
                                <button
                                    class="w-full p-2 px-5 text-sm font-bold border rounded-full border-fpiGreen text-fpiGreen hover:text-white hover:bg-fpiGreen md:p-3 md:px-3 lg:p-3 lg:px-4"
                                    data-tab-target="#tab1" role="tab">
                                    Editor's Pick
                                </button>
                            </div>
                            <div class="md:w-full">
                                <button
                                    class="w-full p-2 px-5 text-sm font-bold border rounded-full border-fpiGreen text-fpiGreen hover:text-white hover:bg-fpiGreen md:p-3 md:px-3 lg:p-3 lg:px-4"
                                    data-tab-target="#tab2" role="tab">
                                    Recently Published
                                </button>
                            </div>
                            <div class="md:w-full">
                                <button
                                    class="w-full p-2 px-5 text-sm font-bold border rounded-full border-fpiGreen text-fpiGreen hover:text-white hover:bg-fpiGreen md:p-3 md:px-3 lg:p-3 lg:px-4"
                                    data-tab-target="#tab3" role="tab">
                                    Popularity
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="myTabContent">
                        <div class="space-y-4" id="tab1" data-tab-content role="tabpanel">
                            <div class="flex flex-col md:flex-row md:items-center md:gap-4 lg:items-center">
                                <img src="{{ asset('images/img/eng-image-bg.jpg') }}" alt=""
                                    class="hidden md:block md:w-1/3" />
                                <div
                                    class="space-y-4 md:space-y-1 md:text-sm md:w-[55%] lg:text-[1em] lg:w-[60%] lg:space-y-2">
                                    <h1 class="text-3xl font-bold md:text-2xl">
                                        Characterization of 3D-Radar img of pavement devoid
                                        damage based on FDTD
                                    </h1>
                                    <p class="text-darkGrayishBlue">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Magni, minus. Dignissimos minima placeat
                                        repudiandae, veritatis unde quas magni explicabo tenetur
                                        illo similique, voluptate vel laboriosam architecto id
                                        eveniet, libero error?
                                    </p>
                                    <div class="lg:text-left">
                                        <button class="font-bold text-fpiGreen hover:text-white">
                                            Read more
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col md:flex-row md:items-center md:gap-4 lg:items-center">
                                <img src="{{ asset('images/img/eng-image-bg.jpg') }}" alt=""
                                    class="hidden md:block md:w-1/3" />
                                <div
                                    class="space-y-4 md:space-y-1 md:text-sm md:w-[55%] lg:text-[1em] lg:w-[60%] lg:space-y-2">
                                    <h1 class="text-3xl font-bold md:text-2xl">
                                        Characterization of 3D-Radar img of pavement devoid
                                        damage based on FDTD
                                    </h1>
                                    <p class="text-darkGrayishBlue">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Magni, minus. Dignissimos minima placeat
                                        repudiandae, veritatis unde quas magni explicabo tenetur
                                        illo similique, voluptate vel laboriosam architecto id
                                        eveniet, libero error?
                                    </p>
                                    <div class="lg:text-left">
                                        <button class="font-bold text-fpiGreen hover:text-white">
                                            Read more
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden space-y-4" id="tab2" data-tab-content role="tabpanel">
                            <div class="flex flex-col md:flex-row md:items-center md:gap-4 lg:items-center">
                                <img src="{{ asset('images/img/eng-image-bg.jpg') }}" alt=""
                                    class="hidden md:block md:w-1/3" />
                                <div
                                    class="space-y-4 md:space-y-1 md:text-sm md:w-[55%] lg:text-[1em] lg:w-[60%] lg:space-y-2">
                                    <h1 class="text-3xl font-bold md:text-2xl">
                                        Recent published of 3D-Radar img of pavement devoid
                                        damage based on FDTD
                                    </h1>
                                    <p class="text-darkGrayishBlue">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Magni, minus. Dignissimos minima placeat
                                        repudiandae, veritatis unde quas magni explicabo tenetur
                                        illo similique, voluptate vel laboriosam architecto id
                                        eveniet, libero error?
                                    </p>
                                    <div class="lg:text-left">
                                        <button class="font-bold text-fpiGreen hover:text-white">
                                            Read more
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col md:flex-row md:items-center md:gap-4 lg:items-center">
                                <img src="{{ asset('images/img/eng-image-bg.jpg') }}" alt=""
                                    class="hidden md:block md:w-1/3" />
                                <div
                                    class="space-y-4 md:space-y-1 md:text-sm md:w-[55%] lg:text-[1em] lg:w-[60%] lg:space-y-2">
                                    <h1 class="text-3xl font-bold md:text-2xl">
                                        Recent published of 3D-Radar img of pavement devoid
                                        damage based on FDTD
                                    </h1>
                                    <p class="text-darkGrayishBlue">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Magni, minus. Dignissimos minima placeat
                                        repudiandae, veritatis unde quas magni explicabo tenetur
                                        illo similique, voluptate vel laboriosam architecto id
                                        eveniet, libero error?
                                    </p>
                                    <div class="lg:text-left">
                                        <button class="font-bold text-fpiGreen hover:text-white">
                                            Read more
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left section -->
                <div class="space-y-5 md:w-4/12 lg:w-4/12">
                    <div class="md:text-sm">
                        <h1 class="bg-fpiGreen p-2 w-[90%] text-2xl text-center mx-auto text-white font-bold">
                            Notice Board
                        </h1>
                        <ul class="list-disc w-[55%] mx-auto mt-4 font-semibold">
                            <li>
                                Lorem Ipsum is simply dummy text, Lorem Ipsum is simply
                                dummy text.
                            </li>
                            <li>of the printing and typesetting</li>
                            <li>industry. Lorem Ipsum has been</li>
                            <li>the industry's standard dummy</li>
                            <li>text ever since the 1550s, when an unknown</li>
                        </ul>
                    </div>
                    <div class="md:text-sm">
                        <h1 class="bg-fpiGreen p-2 w-[90%] text-2xl text-center mx-auto text-white font-bold">
                            Quick Links
                        </h1>
                        <ul class="list-disc w-[55%] mx-auto mt-4 font-semibold text-fpiGreen">
                            <li>
                                <a href="" class="underline">
                                    Federal Polytechnic, Ilaro, Science journal
                                </a>
                            </li>
                            <li>
                                <a href="" class="underline">
                                    Federal Polytechnic, Ilaro, WITED journal
                                </a>
                            </li>
                            <li>
                                <a href="" class="underline">
                                    Federal Polytechnic, Ilaro, Humanity journal
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="volumes" class="px-6 mt-10 md:px-12 lg:px-24">
        <div>
            <div class="flex justify-between mb-10">
                <h1 class="text-3xl font-bold">Volumes</h1>
                <p class="text-xl font-bold text-fpiGreen">
                    <a href=""> See All </a>
                </p>
            </div>
            <!-- card- start -->
            <div class="">
                <div class="flex flex-wrap justify-center -mx-4">
                    <!-- Card 1 -->
                    <div class="w-full px-4 py-4 sm:w-[22rem] md:max-w-lg lg:max-w-xl xl:max-w-2xl">
                        <div class="relative w-full rounded-md">
                            <img src="./img/eng-image.jpg" alt="" class="w-full h-auto rounded-3xl" />
                            <div
                                class="absolute inset-0 opacity-100 rounded-3xl bg-gradient-to-t from-green-500 to-green-10">
                            </div>
                            <div class="absolute bottom-0 flex flex-col items-center justify-end w-full pb-4">
                                <h1 class="text-xl font-bold text-white sm:text-2xl">
                                    Volume 1
                                </h1>
                                <p class="tracking-wide text-white text-md sm:text-lg">
                                    02 April, 2024.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 py-4 sm:w-[22rem] md:max-w-lg lg:max-w-xl xl:max-w-2xl">
                        <div class="relative w-full rounded-md">
                            <img src="./img/eng-image.jpg" alt="" class="w-full h-auto rounded-3xl" />
                            <div
                                class="absolute inset-0 opacity-100 rounded-3xl bg-gradient-to-t from-green-500 to-green-10">
                            </div>
                            <div class="absolute bottom-0 flex flex-col items-center justify-end w-full pb-4">
                                <h1 class="text-xl font-bold text-white sm:text-2xl">
                                    Volume 1
                                </h1>
                                <p class="tracking-wide text-white text-md sm:text-lg">
                                    02 April, 2024.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 py-4 sm:w-[22rem] md:max-w-lg lg:max-w-xl xl:max-w-2xl">
                        <div class="relative w-full rounded-md">
                            <img src="./img/eng-image.jpg" alt="" class="w-full h-auto rounded-3xl" />
                            <div
                                class="absolute inset-0 opacity-100 rounded-3xl bg-gradient-to-t from-green-500 to-green-10">
                            </div>
                            <div class="absolute bottom-0 flex flex-col items-center justify-end w-full pb-4">
                                <h1 class="text-xl font-bold text-white sm:text-2xl">
                                    Volume 1
                                </h1>
                                <p class="tracking-wide text-white text-md sm:text-lg">
                                    02 April, 2024.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 py-4 sm:w-[22rem] md:max-w-lg lg:max-w-xl xl:max-w-2xl">
                        <div class="relative w-full rounded-md">
                            <img src="./img/eng-image.jpg" alt="" class="w-full h-auto rounded-3xl" />
                            <div
                                class="absolute inset-0 opacity-100 rounded-3xl bg-gradient-to-t from-green-500 to-green-10">
                            </div>
                            <div class="absolute bottom-0 flex flex-col items-center justify-end w-full pb-4">
                                <h1 class="text-xl font-bold text-white sm:text-2xl">
                                    Volume 1
                                </h1>
                                <p class="tracking-wide text-white text-md sm:text-lg">
                                    02 April, 2024.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card-slide end -->
        </div>
    </section>
@endsection
