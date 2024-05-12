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
                            <!-- Tab panes -->
                                <div class="container">
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
                                                @foreach ($manuscripts as $manuscript)
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $manuscript->title }}</td>
                                                        <td>
                                                            <form method="POST"
                                                                action="{{ route('manuscript.update', $manuscript->id) }}"
                                                                class="status-form">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="id"
                                                                    value="{{ $manuscript->id }}">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input status-switch"
                                                                        type="checkbox" name="status"
                                                                        value="{{ $manuscript->status == 'activated' ? 'pending' : 'activated' }}"
                                                                        {{ $manuscript->status == 'activated' ? 'checked' : '' }}>
                                                                    <button type="submit"
                                                                        class="btn btn-sm {{ $manuscript->status == 'activated' ? 'btn-warning' : 'btn-success' }}">
                                                                        {{ $manuscript->status == 'activated' ? 'Deactivate' : 'Activate' }}
                                                                    </button>
                                                                </div>
                                                            </form>

                                                        </td>
                                                        <td>
                                                            <div>
                                                                <a class="btn btn-success" href="{{ route('manuscript.edit', $manuscript->id) }}">
                                                                    <i class="bi bi-pencil text-success"></i> Edit as article
                                                                </a>

                                                                <form
                                                                    action="{{ route('manuscript.destroy', $manuscript->id) }}"
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
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </main>

@endsection
