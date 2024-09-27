<a href="{{ route('admin.pages.create') }}">Create New Page</a>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th>Published</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pages as $page)
        <tr>
            <td>{{ $page->title }}</td>
            <td>{{ $page->slug }}</td>
            <td>{{ $page->is_published ? 'Yes' : 'No' }}</td>
            <td>
                <a href="{{ route('admin.pages.edit', $page->id) }}">Edit</a>
                <form action="{{ route('admin.pages.destroy', $page->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
