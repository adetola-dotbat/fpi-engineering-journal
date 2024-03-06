<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Services\AboutService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct(protected AboutService $aboutService)
    {
    }
    public function index()
    {
        $data = [
            'about' => $this->aboutService->first()
        ];
        return view('user.pages.about-us', $data);
    }
    public function about()
    {
        $data = [
            'about' => $this->aboutService->first()
        ];
        return view('administration.pages.about', $data);
    }
    public function createOrUpdate(AboutRequest $request, $about)
    {
        if ($about) {
            $this->aboutService->update($about, $request->validated());
        }
        return back()->with('message', 'Update Successful');
    }

    public function updateAboutImage(AboutRequest $request)
    {
        $about = $this->about->first();
        if ($about) {
            $fileNameToStore = $this->fileUpload('image', 'storage/logo/');
            Storage::delete('storage/logo/' . $about->image);
            $about->image = $fileNameToStore;
            $about->save();
            return redirect()->back()->with('message', 'Image updated Successful');
        } else {
            $fileNameToStore = $this->fileUpload('image', 'storage/logo/');
            $about->image = $fileNameToStore;
            $about->save();
            return redirect()->back()->with('message', 'Image Update Successful');
        }
    }
}
