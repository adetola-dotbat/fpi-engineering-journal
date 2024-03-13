<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Volume</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($volumes as $volume)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $volume->title }}</td>
                <td>
                    <form method="POST" action="{{ route('volume.update', $volume->id) }}" class="status-form">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $volume->id }}">
                        <div class="form-check form-switch">
                            <input class="form-check-input status-switch" type="checkbox" name="status"
                                value="{{ $volume->status == 'activated' ? 'pending' : 'activated' }}"
                                {{ $volume->status == 'activated' ? 'checked' : '' }}>
                            <button type="submit"
                                class="btn btn-sm {{ $volume->status == 'activated' ? 'btn-warning' : 'btn-success' }}">
                                {{ $volume->status == 'activated' ? 'Deactivate' : 'Activate' }}
                            </button>
                        </div>
                    </form>
                </td>
                <td>
                    <div>
                        <a href="{{ route('volume.edit', $volume->id) }}">
                            <i class="bi bi-pencil text-success"></i>
                        </a>
                        <form action="{{ route('volume.destroy', $volume->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: none; border: none; padding: 0; margin: 0;">
                                <i class="bi bi-trash text-danger"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
