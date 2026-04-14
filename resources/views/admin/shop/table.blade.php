
@forelse ($shops as $key=> $shop )
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $shop->name }}</td>
        <td>
            @if ($shop->image)
                <img src="{{ asset('frontend/shops/' . $shop->image) }}" alt="{{ $shop->name }}" width="50">
            @else
                <span>No Image</span>
            @endif
        </td>


        <td>
            <button class="btn btn-sm change-status status {{ $shop->status == 'active' ? 'btn-success' : 'btn-danger' }}"
                data-id="{{ $shop->id }}" data-status="{{ $shop->status }}">
                {{ ucfirst($shop->status) }}
            </button>
        </td>

       <td>
    <!-- Edit Button -->
    <button class="btn btn-sm btn-outline-success edit-btn"
        data-id="{{ $shop->id}}"
        data-name="{{ $shop->name}}"
         data-address="{{ $shop->address}}"
         data-image="{{ $shop->image ?? '' }}"
        data-status="{{ $shop->status}}">
        Edit
    </button>

    <!-- Delete Button (ডিলিটের জন্য শুধু ID যথেষ্ট) -->
    <button class="btn btn-sm btn-outline-danger delete-btn"
        data-id="{{ $shop->id }}">
        Delete
    </button>
</td>
    </tr>
@empty
   <tr>
        <td colspan="7" class="text-center text-danger font-bold"><b>No categories found.</b></td>
    </tr>

@endforelse ($categories as $key => $shop)



