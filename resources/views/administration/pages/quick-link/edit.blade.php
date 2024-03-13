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
                                        <form action="{{ route('quick-link.update', $quickLink->id) }}" method="POST">
                                            @csrf
                                            @method('put')
                                            <div class="form-group mb-3">
                                                <label for="title" class=" col-form-label">Title</label>
                                                <input type="text"
                                                    class="form-control @error('title') is-invalid @enderror" id="title"
                                                    name="title" placeholder="title" value="{{ $quickLink->title }}">
                                                @error('title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="link" class="col-form-label">Link</label>
                                                <input type="text"
                                                    class="form-control @error('link') is-invalid @enderror" id="link"
                                                    name="url" placeholder="link" value="{{ $quickLink->url }}">
                                                @error('link')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <button class="btn btn-success" type="submit">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        @includeIf('administration.pages.quick-link.table')
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
