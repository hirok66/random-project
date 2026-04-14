@forelse ($categories as $key => $category)
    <tr>
        <td>{{ $key + 1 }}</td>

        <td>
            <strong>{{ $category->name }}</strong>
            @if ($category->slug)
                <br>
                <small class="text-muted">({{ $category->slug }})</small>
            @endif
        </td>
        <td>
            <strong>{!!  $category->description !!}</strong>

        </td>
     <td>
          <button class="btn btn-sm change-status {{ $category->status == 'active' ? 'btn-success' : 'btn-danger' }}"
                data-id="{{ $category->id }}" data-status="{{ $category->status }}">
                {{ ucfirst($category->status) }}
            </button>
        </td>


        <td>
            @if ($category->image)
                <img src="{{ asset('images/categories/' . $category->image) }}"
                     alt="{{ $category->name }}"
                     width="50"
                     class="img-thumbnail">
            @else
                <span class="text-muted">No Image</span>
            @endif
        </td>

         <td>
            @if ($category->parent)
                <span class="badge bg-secondary">{{ $category->parent->name }}</span>
            @else
                <span class="badge bg-primary">Main Category</span>
            @endif
        </td>

        <td>
            <span class="badge bg-info">{{ $category->order }}</span>
        </td>



        <td>
            <!-- Edit Button -->
            <button class="btn btn-sm btn-outline-primary edit-btn me-1"
                data-id="{{ $category->id }}"
                data-name="{{ $category->name }}"
                data-slug="{{ $category->slug }}"
                data-description="{{ $category->description ?? '' }}"
                data-parent_id="{{ $category->parent_id ?? '' }}"
                data-order="{{ $category->order }}"
                data-status="{{ $category->is_active ? 1 : 0 }}"
                data-image="{{ $category->image ?? '' }}">
                <i class="fas fa-edit"></i> Edit
            </button>

            <!-- Delete Button -->
            <button class="btn btn-sm btn-outline-danger delete-btn"
                data-id="{{ $category->id }}">
                <i class="fas fa-trash"></i> Delete
            </button>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="7" class="text-center py-4 text-danger">
            <b>No categories found.</b>
        </td>
    </tr>
@endforelse
