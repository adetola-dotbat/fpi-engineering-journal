<?php

namespace App\Http\Controllers;

use App\Services\AboutService;
use App\Services\AnnouncementService;
use App\Services\ArticleService;
use App\Services\ManuscriptService;
use App\Services\EditorialBoardService;
use App\Services\QuickLinksService;
use App\Services\VolumeService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(protected AnnouncementService $announcementService, protected AboutService $aboutService, protected VolumeService $volumeService, protected EditorialBoardService $editorialBoardService, protected ArticleService $articleService, protected QuickLinksService $quickLinksService, protected ManuscriptService $manuscriptService,)
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
            'editor' => $this->editorialBoardService->getEditorInChief(),
            'editorPicks' => $this->articleService->getEditorPicksArticle(),
            'articles' => $this->articleService->all(),
            'manuscripts' => $this->manuscriptService->all(),
            'popularity' => $this->articleService->getPopularArticle(),
        ];
        if(auth()->user()){
            $data['title_page'] = 'Dashboard';
            return view('administration.pages.dashboard.index', $data);
        }
        return view('user.pages.index', $data);
    }
}
