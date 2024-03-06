<?php

namespace App\Services;

use App\Models\About;
use App\Traits\UploadImage;

class AboutService
{
    use UploadImage;
    public function __construct(protected About $about)
    {
    }

    public function all()
    {
        return $this->about->get();
    }
    public function getAboutById($about)
    {
        return $this->about->findOrFail($about);
    }
    public function store($data)
    {
        $store = $this->about->create([
            'name' => $data['name'],
            'location' => $data['location'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'description' => $data['description'],
            'image' => $this->uploadImage($data['image'], 'image', 'about/images'),
            'welcome_message' => $data['welcome_message'],
        ]);
        dd($store);
    }
    public function update($about, array $data)
    {
        $about = $this->getAboutById($about);
        return $about->update($data);
    }
    public function first()
    {
        return $this->about->first();
    }
}
