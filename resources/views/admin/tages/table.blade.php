
@forelse ($tages as $key=> $tage )
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $tage->name }}</td>


        <td>
            <button class="btn btn-sm change-status status {{ $tage->status == 'active' ? 'btn-success' : 'btn-danger' }}"
                data-id="{{ $tage->id }}" data-status="{{ $tage->status }}">
                {{ ucfirst($tage->status) }}
            </button>
        </td>

       <td>
    <!-- Edit Button -->
    <button class="btn btn-sm btn-outline-success edit-btn"
        data-id="{{ $tage->id }}"
        data-name="{{ $tage->name }}"

        data-status="{{ $tage->status }}">
        Edit
    </button>

    <!-- Delete Button (ডিলিটের জন্য শুধু ID যথেষ্ট) -->
    <button class="btn btn-sm btn-outline-danger delete-btn"
        data-id="{{ $tage->id }}">
        Delete
    </button>
</td>
    </tr>
@empty
   <tr>
        <td colspan="7" class="text-center text-danger font-bold"><b>No categories found.</b></td>
    </tr>

@endforelse ($categories as $key => $tage)



