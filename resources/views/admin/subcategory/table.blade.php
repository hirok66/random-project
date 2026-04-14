@forelse ($subcategorys as $key => $subcategory)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $subcategory->category->name}}</td>

        <td>
            <strong>{{ $subcategory->name }}</strong>
            @if ($subcategory->slug)
                <br>
                <small class="text-muted">({{ $subcategory->slug }})</small>
            @endif
        </td>

     <td>
          <button class="btn btn-sm change-status {{ $subcategory->status == 'active' ? 'btn-success' : 'btn-danger' }}"
                data-id="{{ $subcategory->id }}" data-status="{{ $subcategory->status }}">
                {{ ucfirst($subcategory->status) }}
            </button>
        </td>


        <td>
            @if ($subcategory->image)
                <img src="{{ asset('images/subcategory/' . $subcategory->image) }}"
                     alt="{{ $subcategory->name }}"
                     width="50"
                     class="img-thumbnail">
            @else
                <span class="text-muted">No Image</span>
            @endif
        </td>



        <td>
            <span class="badge bg-info">{{ $subcategory->order }}</span>
        </td>



        <td>
            <!-- Edit Button -->
            <button class="btn btn-sm btn-outline-primary edit-btn me-1"
                data-id="{{ $subcategory->id }}"
                data-name="{{ $subcategory->name }}"
                data-slug="{{ $subcategory->slug }}"
                data-parent_id="{{ $subcategory->parent_id ?? '' }}"
                data-order="{{ $subcategory->order }}"
                data-status="{{ $subcategory->is_active ? 1 : 0 }}"
                data-image="{{ $subcategory->image ?? '' }}">
                <i class="fas fa-edit"></i> Edit
            </button>

            <!-- Delete Button -->
            <button class="btn btn-sm btn-outline-danger delete-btn"
                data-id="{{ $subcategory->id }}">
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
