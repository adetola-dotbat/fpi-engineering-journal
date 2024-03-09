@extends('administration.layout.app')
@section('title')
    Announcement
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
                            <h3>Announcement</h3>
                            <br />
                            <!-- Nav pills -->
                            <ul class="nav nav-pills gap-3" role="tablist">
                                <li class="nav-item pill-1">
                                    <a class="nav-link active" data-bs-toggle="pill" href="#home">Create Announcement</a>
                                </li>
                                <li class="nav-item pill-2">
                                    <a class="nav-link" data-bs-toggle="pill" href="#menu1">Announcements</a>
                                </li>
                            </ul>
                            <hr />
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="home" class="container tab-pane active">
                                    <br />
                                    <form class="col-md-8" action="{{ route('announcement.store') }}" method="POST">
                                        @csrf
                                        @method('post')
                                        <div class="form-group row mb-3">
                                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                                <input type="text"
                                                    class="form-control @error('title') is-invalid @enderror" id="title"
                                                    name="title" placeholder="Announcement Title"
                                                    value="{{ old('title') }}">
                                                @error('title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                                    placeholder="Description" rows="6">{{ old('description') }}</textarea>
                                                @error('description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                                <div class="col-sm-10">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="status"
                                                            name="status" {{ old('status') ? 'checked' : '' }}>
                                                    </div>
                                                </div>
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
                                                @foreach ($announcements as $announcement)
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $announcement->title }}</td>
                                                        <td>
                                                            <form method="POST"
                                                                action="{{ route('announcement.update', $announcement->id) }}"
                                                                class="status-form">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="id"
                                                                    value="{{ $announcement->id }}">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input status-switch"
                                                                        type="checkbox" name="status"
                                                                        value="{{ $announcement->status == 'activated' ? 'pending' : 'activated' }}"
                                                                        {{ $announcement->status == 'activated' ? 'checked' : '' }}>
                                                                    <button type="submit"
                                                                        class="btn btn-sm {{ $announcement->status == 'activated' ? 'btn-warning' : 'btn-success' }}">
                                                                        {{ $announcement->status == 'activated' ? 'Deactivate' : 'Activate' }}
                                                                    </button>
                                                                </div>
                                                            </form>

                                                        </td>
                                                        <td>
                                                            <div>
                                                                <a
                                                                    href="{{ route('announcement.edit', $announcement->id) }}">
                                                                    <i class="bi bi-pencil text-success"></i>
                                                                </a>

                                                                <form
                                                                    action="{{ route('announcement.destroy', $announcement->id) }}"
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
