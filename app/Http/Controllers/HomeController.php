<?php

namespace App\Http\Controllers;

use App\Services\AboutService;
use App\Services\AnnouncementService;
use App\Services\ArticleService;
use App\Services\EditorialBoardService;
use App\Services\QuickLinksService;
use App\Services\VolumeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected AnnouncementService $announcementService, protected AboutService $aboutService, protected VolumeService $volumeService, protected EditorialBoardService $editorialBoardService, protected ArticleService $articleService, protected QuickLinksService $quickLinksService)
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = [
            'announcements' => $this->announcementService->getAllActiveAnnouncement(),
            'quickLinks' => $this->quickLinksService->all(),
            'about' => $this->aboutService->first(),
            'volumes' => $this->volumeService->all(),
            'volume' => $this->volumeService->getLatestVolume(),
            'editor' =>$this->editorialBoardService->getEditorInChief(),
        ];
        // dd($data['about']);
        if(auth()->user()){
            $data['title_page'] = 'Dashboard';
            return view('administration.pages.dashboard.index', $data);
        }
        return view('user.pages.index', $data);

    }
}
