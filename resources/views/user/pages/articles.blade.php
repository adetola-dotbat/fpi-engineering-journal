@extends('user.layout.master')
@push('style')
<style>
    /* Tab and Card Styles */
    .tab-content {
        display: none;
        background: white;
        border: 1px solid #ccc;
        padding: 20px;
    }

    .tab-content.active {
        display: block;
    }

    .tab-link {
        cursor: pointer;
        display: inline-block;
        margin-right: 10px; /* Space between tabs */
    }

    .tab-link.active {
        background-color: rgb(0, 128, 75); /* Green background for active tab */
        color: white;
    }

    .tab-link:not(.active) {
        background-color: transparent;
        color: rgb(0, 128, 75); /* Green text for inactive tabs */
        border: 1px solid rgb(0, 128, 75); /* Green border for inactive tabs */
    }

    .card img {
        width: 100%;
        height: auto;
    }

    @media (min-width: 768px) {
        .grid-cols-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }
    }
</style>
@endpush
@section('content')
<section id="first-section" class="px-8 mt-10 md:px-24">
    <div class="flex flex-col md:flex-row md:space-y-0 md:justify-between">
        <!-- right section -->
        <div class="md:w-8/12 lg:w-8/12 space-y-6 text-center md:text-left">
            <div class="flex mb-8">
                <div class="flex flex-wrap gap-3 justify-center md:w-full" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    @foreach ($volumes as $volume)
        <div class="">
            <button class="p-2 px-5 text-sm font-bold border rounded-full border-fpiGreen text-fpiGreen hover:text-white hover:bg-fpiGreen md:p-3 md:px-3 lg:p-3 lg:px-4"
                    data-tab-target="#tab{{ $volume->id }}" role="tab">
                Volume {{ $volume->id }}
            </button>
        </div>
        @endforeach
                </div>
            </div>
            <div id="myTabContent">
                @foreach ($volumes as $volume)
                <div class="space-y-4 hidden" id="tab{{ $volume->id }}" data-tab-content role="tabpanel">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach ($volume->articles as $article)
                        <div class="card">
                          <a href="{{ route('view.article', $article->slug) }}">  <img src="{{ asset($article->volume->image) }}" alt="Image Description" class="h-[5%] rounded-[2rem] shadow-md">
                            <div class="p-4">
                                <h3 class="font-bold">{{ $article->title }}</h3>
                                <p class="text-gray-600">{{ $article->author }}</p>
                            </div>
                        </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <!-- right section end-->
        <!-- left section -->
            @include('user.layout.inv_notification_bar')
        <!-- left section end -->
    </div>
</section>
@endsection
@push('script')
<script>
    function openTab(event, tabName) {
        var tabs = document.getElementsByClassName('tab-content');
        for (var i = 0; i < tabs.length; i++) {
            tabs[i].style.display = 'none';
        }

        var tabLinks = document.getElementsByClassName('tab-link');
        for (var i = 0; i < tabLinks.length; i++) {
            tabLinks[i].className = tabLinks[i].className.replace(' active', '');
        }

        document.getElementById(tabName).style.display = 'block';
        event.currentTarget.className += ' active';
    }

    // Keep the first tab open by default
    document.getElementById('Tab1').style.display = 'block';
    document.getElementById('Tab1').classList.add('active');
</script>
@endpush
