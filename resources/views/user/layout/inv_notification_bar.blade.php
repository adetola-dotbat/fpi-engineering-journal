<div class="space-y-5 md:w-4/12 lg:w-4/12">
    <div class="md:text-sm">
        <h1 class="bg-fpiGreen p-2 w-[90%] text-2xl text-center mx-auto text-white font-bold">
            Notice Board
        </h1>
        <ul class="list-disc w-[55%] mx-auto mt-4 font-semibold text-fpiGreen">
            @forelse ($announcements as $anouncement )
            <li>
                <a href="{{ route('announcement.show', $anouncement->slug) }}" class="underline">
                    {{ $anouncement->title }}
                </a>
            </li>
            @empty
                <h4>No Announcement</h4>
            @endforelse
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
