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
                    <form action="{{ route('editorial-board.update', $editorial->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="fullname" class="form-label">Fullname</label>
                                <input type="text" class="form-control" id="fullname" value="{{ $editorial->fullname }}"
                                    name="fullname" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="institution" class="form-label">Institution</label>
                                <input type="text" class="form-control" id="institution"
                                    value="{{ $editorial->institution }}" name="institution">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="validationTooltip04">Designation</label>
                                <select class="form-select" name="designation_id" id="validationTooltip04" required>
                                    <option selected>
                                        Select Designation
                                    </option>
                                    @foreach ($designations as $designation)
                                        <option value="{{ $designation->id }}">{{ $designation->designation }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="{{ $editorial->email }}"
                                    name="email">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" value="{{ $editorial->phone }}"
                                    name="phone">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="position" class="form-label">Position</label>
                                <input type="text" class="form-control" id="position" value="{{ $editorial->position }}"
                                    name="position">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('editorial-board.create') }}" class="btn btn-danger"> Cancle</a>
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
