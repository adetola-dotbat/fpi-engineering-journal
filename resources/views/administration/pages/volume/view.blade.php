@extends('administration.layout.app')
@section('title')
    {{ $title_page }}
@endsection
@push('styles')
    <style>
        .nav-pills .nav-link.active {
            background-color: rgb(0, 128, 75);
        }

        .nav-pills .nav-link:not(.active) {
            color: rgb(0, 128, 75);
        }
    </style>
@endpush
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="container mt-4">
                            <h3>{{ $title_page }}</h3>
                            <hr />
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="home" class="row">
                                    <br />
                                    <div class="col-md-12">
                                        <form action="{{ route('volume.update', $volume->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div>
                                                <img src="{{ asset($volume->image) }}" alt="" style="width:10rem">
                                            </div>
                                            <label for="image" class=" col-form-label">Change Volume
                                                Image</label>
                                            <div>
                                                <input type="file"
                                                    class="form-control @error('image') is-invalid @enderror" id="image"
                                                    name="image" placeholder="image">
                                                @error('image')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="float-right">
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </form>
                                        <div class="form-group mb-3">
                                            <label for="title" class="col-form-label">Title</label>
                                            <div>
                                                <h3>{{ $volume->title }}</h3>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pt-3">
                                            <a href="{{ route('volume.create') }}" class="btn btn-danger">
                                                Cancle</a>
                                            <a href="{{ route('volume.edit', $volume->id) }}" class="btn btn-success">
                                                Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
