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
                            <br />
                            <!-- Nav pills -->
                            <ul class="nav nav-pills gap-3" role="tablist">
                                <li class="nav-item pill-1">
                                    <a class="nav-link active" data-bs-toggle="pill" href="#home">Create Article</a>
                                </li>
                                <li class="nav-item pill-2">
                                    <a class="nav-link" data-bs-toggle="pill" href="#menu1">Articles</a>
                                </li>
                            </ul>
                            <hr />
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="home" class="container tab-pane active">
                                    <br />
                                    {{-- <input type="text" name="id" value="{{ $about->id }}" hidden>
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $about->name }}" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" class="form-control" id="location"
                                            value="{{ $about->location }}" name="location">
                                    </div> --}}

                                    <form class="col-md-12" action="{{ route('article.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="title" class="col-form-label">Title</label>
                                                <input type="text"
                                                    class="form-control @error('title') is-invalid @enderror" id="title"
                                                    name="title" placeholder="Article Title" value="{{ old('title') }}">
                                                @error('title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="pages" class="col-form-label">Pages</label>
                                                <input type="text"
                                                    class="form-control @error('pages') is-invalid @enderror" id="pages"
                                                    name="pages" placeholder="Article pages" value="{{ old('pages') }}">
                                                @error('pages')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="validationTooltip04">Volume</label>
                                                <select class="form-select" name="volume_id" id="validationTooltip04"
                                                    required>
                                                    <option selected>
                                                        Select volume
                                                    </option>
                                                    @foreach ($volumes as $volume)
                                                        <option value="{{ $volume->id }}">
                                                            {{ $volume->title }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-tooltip">
                                                    Please select a valid state.
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="authors" class="col-form-label">Authors</label>
                                                <input type="text"
                                                    class="form-control @error('authors') is-invalid @enderror"
                                                    id="authors" name="author" placeholder="Article authors"
                                                    value="{{ old('authors') }}">
                                                @error('authors')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="file" class="col-form-label">Document file</label>
                                                <input type="file"
                                                    class="form-control @error('file') is-invalid @enderror" id="file"
                                                    name="file" placeholder="file">
                                                @error('file')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label for="abstract" class="col-form-label">Abstract</label>
                                                <textarea class="form-control @error('abstract') is-invalid @enderror" id="abstract" name="abstract"
                                                    placeholder="abstract" rows="6">{{ old('abstract') }}</textarea>
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
                                <div id="menu1" class="container tab-pane fade">
                                    <div class="row">
                                        <table class="table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($articles as $article)
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $article->title }}</td>
                                                        <td>
                                                            <form method="POST"
                                                                action="{{ route('article.update', $article->id) }}"
                                                                class="status-form">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="id"
                                                                    value="{{ $article->id }}">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input status-switch"
                                                                        type="checkbox" name="status"
                                                                        value="{{ $article->status == 'activated' ? 'pending' : 'activated' }}"
                                                                        {{ $article->status == 'activated' ? 'checked' : '' }}>
                                                                    <button type="submit"
                                                                        class="btn btn-sm {{ $article->status == 'activated' ? 'btn-warning' : 'btn-success' }}">
                                                                        {{ $article->status == 'activated' ? 'Deactivate' : 'Activate' }}
                                                                    </button>
                                                                </div>
                                                            </form>

                                                        </td>
                                                        <td>
                                                            <div>
                                                                <a href="{{ route('article.edit', $article->id) }}">
                                                                    <i class="bi bi-pencil text-success"></i>
                                                                </a>

                                                                <form
                                                                    action="{{ route('article.destroy', $article->id) }}"
                                                                    method="POST" style="display:inline;">
                                                                    @csrf
                                                                    @method('DELETE') {{-- This specifies the intended HTTP method --}}

                                                                    {{-- Use a button to submit the form. Style it as needed. --}}
                                                                    <button type="submit"
                                                                        style="background: none; border: none; padding: 0; margin: 0;">
                                                                        <i class="bi bi-trash text-danger"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="menu2" class="container tab-pane fade">
                                    <br />
                                    <h3>Menu 2</h3>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem accusantium doloremque laudantium, totam rem
                                        aperiam.
                                    </p>
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
