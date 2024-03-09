@extends('administration.layout.app')

@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-black">About Us</h5>
                    <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <input type="text" name="id" value="{{ $about->id }}" hidden>
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $about->name }}" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" value="{{ $about->location }}"
                                    name="location">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="{{ $about->email }}"
                                    name="email">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" value="{{ $about->phone }}"
                                    name="phone">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description"> {{ $about->description }} </textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="welcome_message" class="form-label">Welcome Message</label>
                                <textarea class="form-control" id="welcome_message" name="welcome_message"> {{ $about->welcome_message }} </textarea>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    </main>
    <!-- End #main -->

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    @endpush
@endsection
