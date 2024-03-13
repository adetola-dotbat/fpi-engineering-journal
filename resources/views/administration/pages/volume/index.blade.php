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
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container mt-4">
                            <h3>{{ $title_page }}</h3>
                            <hr />
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="home" class="row">
                                    <br />
                                    <div class="col-md-6">
                                        <form action="{{ route('volume.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('post')
                                            <div class="form-group mb-3">
                                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                        class="form-control @error('title') is-invalid @enderror"
                                                        id="title" name="title" placeholder="Title">
                                                    @error('title')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="image" class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file"
                                                        class="form-control @error('image') is-invalid @enderror"
                                                        id="image" name="image" placeholder="image">
                                                    @error('image')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="description" class="col-sm-2 col-form-label">description</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="6" type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                                                        name="description" placeholder="description"> </textarea>
                                                    @error('description')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <button class="btn btn-success" type="submit">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        @include('administration.pages.volume.table')
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
