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
                                        <form action="{{ route('designation.update', $designation->id) }}" method="POST">
                                            @csrf
                                            @method('put')
                                            <div class="form-group mb-3">
                                                <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                                                <input type="text"
                                                    class="form-control @error('designation') is-invalid @enderror"
                                                    id="designation" name="designation"
                                                    value="{{ $designation->designation }}" placeholder="Designation">
                                                @error('designation')
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
                                        <table class="table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Designation</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($designations as $designation)
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $designation->designation }}</td>
                                                        <td>
                                                            <div>
                                                                <a href="{{ route('designation.edit', $designation->id) }}">
                                                                    <i class="bi bi-pencil text-success"></i>
                                                                </a>
                                                                <form
                                                                    action="{{ route('designation.destroy', $designation->id) }}"
                                                                    method="POST" style="display:inline;">
                                                                    @csrf
                                                                    @method('DELETE')
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
