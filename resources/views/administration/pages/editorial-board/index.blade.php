{{-- @extends('administration.layout.app')
@section('title')
    {{ $title_page }}
@endsection
@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-black">{{ $title_page }}</h5>
                    <form action="{{ route('editorial-board.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="fullname" class="form-label">Fullname</label>
                                <input type="text" class="form-control" id="fullname" name="fullname" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="institution" class="form-label">Institution</label>
                                <input type="text" class="form-control" id="institution" name="institution">
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
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="position" class="form-label">Position</label>
                                <input type="text" class="form-control" id="position" name="position">
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
@endsection --}}


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
                                    <a class="nav-link active" data-bs-toggle="pill" href="#home">Create Editorial
                                        Board</a>
                                </li>
                                <li class="nav-item pill-2">
                                    <a class="nav-link" data-bs-toggle="pill" href="#menu1">Editorial Boards</a>
                                </li>
                            </ul>
                            <hr />
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="home" class="container tab-pane active">
                                    <br />
                                    <form action="{{ route('editorial-board.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="fullname" class="form-label">Fullname</label>
                                                <input type="text" class="form-control" id="fullname" name="fullname"
                                                    required>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="institution" class="form-label">Institution</label>
                                                <input type="text" class="form-control" id="institution"
                                                    name="institution" required>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="validationTooltip04">Designation</label>
                                                <select class="form-select" name="designation_id" id="validationTooltip04"
                                                    required>
                                                    <option selected>
                                                        Select Designation
                                                    </option>
                                                    @foreach ($designations as $designation)
                                                        <option value="{{ $designation->id }}">
                                                            {{ $designation->designation }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-tooltip">
                                                    Please select a valid state.
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="phone" class="form-label">Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="position" class="form-label">Position</label>
                                                <input type="text" class="form-control" id="position" name="position">
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" class="form-control" id="image" name="image">
                                            </div>
                                        </div>
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="menu1" class="container tab-pane fade">
                                    <div class="row">
                                        <table class="table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Fullname</th>
                                                    <th scope="col">Institution</th>
                                                    <th scope="col">Designation</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($editorials as $editorial)
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $editorial->fullname }}</td>
                                                        <td>{{ $editorial->institution }}</td>
                                                        <td>{{ $editorial->designation->designation }}</td>
                                                        <td>
                                                            <form method="POST"
                                                                action="{{ route('editorial-board.update', $editorial->id) }}"
                                                                class="status-form">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="id"
                                                                    value="{{ $editorial->id }}">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input status-switch"
                                                                        type="checkbox" name="status"
                                                                        value="{{ $editorial->status == 'activated' ? 'pending' : 'activated' }}"
                                                                        {{ $editorial->status == 'activated' ? 'checked' : '' }}>
                                                                    <button type="submit"
                                                                        class="btn btn-sm {{ $editorial->status == 'activated' ? 'btn-warning' : 'btn-success' }}">
                                                                        {{ $editorial->status == 'activated' ? 'Deactivate' : 'Activate' }}
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <a
                                                                    href="{{ route('editorial-board.show', $editorial->id) }}">
                                                                    <i class="bi bi-pencil text-success"></i>
                                                                </a>

                                                                <form
                                                                    action="{{ route('editorial-board.destroy', $editorial->id) }}"
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
