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
        // return view('user.pages.about', $data);
    }
    public function create()
    {
        $data = [
            'about' => $this->aboutService->first()
        ];
        return view('administration.pages.about.about', $data);
    }
    public function store(AboutRequest $request)
    {
        $this->aboutService->store($request->validated());
        return redirect()->back();
    }
    public function update(AboutRequest $request)
    {
        if ($request->id) {
            $this->aboutService->update($request->id, $request->validated());
        }
        return back()->with('message', 'Update Successful');
    }
}
