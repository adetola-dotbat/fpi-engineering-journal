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
                    <form action="{{ route('call-for-paper.update', $paper->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea rows="10" class="form-control" id="description" name="description"> {{ $paper->description }} </textarea>
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
