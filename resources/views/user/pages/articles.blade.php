@extends('user.layout.master')
@section('content')
<section id="first-section" class="px-8 mt-10 md:px-24">
    <div class="flex flex-col space-y-9 md:space-y-0 md:flex-row md:justify-between md:gap-6">
        <!-- right section -->
        <div class="space-y-6 text-center md:text-left md:w-8/12 lg:w-8/12">
            <div class="flex">
                <!-- Tab Links -->
                <div class="flex flex-col w-40 p-4 space-y-2 bg-gray-200">
                  <button class="tab-link focus:outline-none active" onclick="openTab(event, 'Tab1')">Tab 1</button>
                  <button class="tab-link focus:outline-none" onclick="openTab(event, 'Tab2')">Tab 2</button>
                  <button class="tab-link focus:outline-none" onclick="openTab(event, 'Tab3')">Tab 3</button>
                </div>

                <!-- Tab Content -->
                <div id="Tab1" class="p-4 tab-content">
                  <h2>Tab 1 Content</h2>
                  <p>Content for Tab 1...</p>
                </div>
                <div id="Tab2" class="hidden p-4 tab-content">
                  <h2>Tab 2 Content</h2>
                  <p>Content for Tab 2...</p>
                </div>
                <div id="Tab3" class="hidden p-4 tab-content">
                  <h2>Tab 3 Content</h2>
                  <p>Content for Tab 3...</p>
                </div>
              </div>
        </div>
        <!-- right section end-->
        <!-- left section -->
       @include('user.layout.inv_notification_bar')
    </div>
        <!-- left section end -->
    </div>
</section>
@endsection
