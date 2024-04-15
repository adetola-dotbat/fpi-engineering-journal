@extends('administration.layout.app')
@section('title')
    {{ $title_page }}
@endsection
@section('content')
    <section class="section">
        <div class="row">
            <div class="card col-md-6">
                <div class="card-body">
                    <h5 class="card-title text-black">{{ $title_page }}</h5>
                    <form action="{{ route('guideline.update', $guideline->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-3 ">
                            <label for="title" class="form-label">title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $guideline->title }}" required>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea rows="10" class="form-control" id="description" name="description"> {{ $guideline->description }} </textarea>
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
