<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Quick link</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($quickLinks as $quickLink)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $quickLink->title }}</td>
                <td>
                    <div>
                        <a href="{{ route('quick-link.edit', $quickLink->id) }}">
                            <i class="bi bi-pencil text-success"></i>
                        </a>
                        <form action="{{ route('quick-link.destroy', $quickLink->id) }}" method="POST"
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
