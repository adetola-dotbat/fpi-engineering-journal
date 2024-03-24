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
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <strong>Fullname:</strong>
                            <p>{{ $editorial->fullname }}</p>
                        </div>
                        <div class="mb-3 col-md-6">
                            <strong>Institution:</strong>
                            <p>{{ $editorial->institution }}</p>
                        </div>
                        <div class="mb-3 col-md-6">
                            <strong>Email:</strong>
                            <p>{{ $editorial->email }}</p>
                        </div>
                        <div class="mb-3 col-md-6">
                            <strong>Phone:</strong>
                            <p>{{ $editorial->phone }}</p>
                        </div>
                        <div class="mb-3 col-md-6">
                            <strong>Position:</strong>
                            <p>{{ $editorial->position }}</p>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="image" class="form-label">Image</label>
                            @if ($editorial->image)
                                <div>
                                    <a href="{{ asset($editorial->image) }}" target="_blank">View Image</a>
                                    <img src="{{ asset($editorial->image) }}" alt="Editorial Image"
                                        style="max-width: 100%; max-height: 200px; display: block; margin-top: 10px;">
                                </div>
                            @else
                                <p>No image available</p>
                            @endif

                            <form action="{{ route('editorial-board.update', $editorial->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="mb-3 col-md-12">
                                    <label for="image" class="form-label">Change Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <div class="float-right">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                            <div class="d-flex justify-content-between pt-5">
                                <a href="{{ route('editorial-board.create') }}" class="btn btn-danger"> Cancle</a>
                                <a href="{{ route('editorial-board.edit', $editorial->id) }}" class="btn btn-success">
                                    Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@endpush
