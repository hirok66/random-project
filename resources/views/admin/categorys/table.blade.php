
@forelse ($categorys as $key=> $category )
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $category->name }}</td>
        <td>
            @if ($category->image)
                <img src="{{ asset('uploads/' . $category->image) }}" alt="{{ $category->name }}" width="50">
            @else
                <span>No Image</span>
            @endif
        </td>


        <td>
            <button class="btn btn-sm change-status status {{ $category->status == 'active' ? 'btn-success' : 'btn-danger' }}"
                data-id="{{ $category->id }}" data-status="{{ $category->status }}">
                {{ ucfirst($category->status) }}
            </button>
        </td>

       <td>
    <!-- Edit Button -->
    <button class="btn btn-sm btn-outline-success edit-btn"
        data-id="{{ $category->id }}"
        data-name="{{ $category->name }}"

        data-status="{{ $category->status }}">
        Edit
    </button>

    <!-- Delete Button (ডিলিটের জন্য শুধু ID যথেষ্ট) -->
    <button class="btn btn-sm btn-outline-danger delete-btn"
        data-id="{{ $category->id }}">
        Delete
    </button>
</td>
    </tr>
@empty
   <tr>
        <td colspan="7" class="text-center text-danger font-bold"><b>No categories found.</b></td>
    </tr>

@endforelse ($categories as $key => $category)



