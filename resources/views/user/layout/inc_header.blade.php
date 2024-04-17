@if (!\Route::is('home'))
    <div class="absolute -left-20 -top-19">
        <div class="bg-myGold rounded-full blur-[100px] w-[20rem] h-[20rem] md:w-[27rem] md:h-[10rem]"></div>
    </div>
   @include('user.layout.inc_nav')
    <div class="bg-articleColor">
        <div class="py-[10rem]">
            <div class="text-center">
                <h3 class="text-4xl font-bold hover:text-fpiGreen">
                    {{ $title }}
                </h3>
                <p class="pt-3 text-2xl">
                    <a href="{{ route('home') }}">Home</a> > <a class="text-fpiGreen">{{ $title }}</a>
                </p>
            </div>
        </div>
    </div>
@else
    <div class="absolute -ml-6">
        <div class="bg-[#309229] w-32 h-32 blur-[100px]"></div>
    </div>
  @include('user.layout.inc_nav')
@endif
