@extends('administration.layout.app')
@section('title')
    {{ $title_page }}
@endsection
@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-black">{{ $title_page }}</h5>
                    <form action="{{ route('paper-template.update', $paper->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3 ">
                            <label for="title" class="form-label">title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $paper->title }}" required>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea rows="8" class="form-control" id="description" name="description"> {{ $paper->description }} </textarea>
                            </div>
                        </div>
                          @if ($paper->file)
                                <div>
                                    <a href="{{ asset($paper->file) }}" target="_blank">View Paper Template</a>
                                </div>
                            @else
                                <p>No paper template file available</p>
                            @endif
                        <div class="mb-3 ">
                            <label for="file" class="col-form-label">Document file</label>
                            <input type="file"
                                class="form-control @error('file') is-invalid @enderror" id="file"
                                name="file" placeholder="file">
                            @error('file')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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