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
                            <hr>
                            <form class="col-md-12" action="{{ route('article.update', $article->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="title" class="col-form-label">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            id="title" name="title"
                                            value="{{ $article->title }}">
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="pages" class="col-form-label">Pages</label>
                                        <input type="text" class="form-control @error('pages') is-invalid @enderror"
                                            id="pages" name="pages"
                                            value="{{ $article->pages }}">
                                        @error('pages')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="validationTooltip04">Volume</label>
                                        <select class="form-select" name="volume_id" id="validationTooltip04" required>
                                            <option disabled>Select volume</option>
                                            @foreach ($volumes as $volume)
                                                <option value="{{ $volume->id }}" {{ $article->volume_id == $volume->id ? 'selected' : '' }}>
                                                    {{ $volume->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-tooltip">
                                            Please select a valid state.
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="author" class="col-form-label">Authors</label>
                                        <input type="text" class="form-control @error('author') is-invalid @enderror"
                                            id="author" name="author"
                                            value="{{ $article->author }}">
                                        @error('author')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="file" class="col-form-label">Document file</label>
                                        <a href="{{ asset($article->file) }}">View document</a>
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label for="abstract" class="col-form-label">Abstract</label>
                                        <textarea class="form-control @error('abstract') is-invalid @enderror" id="abstract" name="abstract"
                                            rows="6">{{ $article->abstract }}</textarea>
                                        @error('abstract')
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
