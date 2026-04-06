
@forelse ($users as $key=> $user )
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->device }}</td>
        <td>{{ $user->browser }}</td>
        <td>{{ $user->platform }}</td>
        <td>{{ $user->role }}</td>
        <td>
            <button class="btn btn-sm change-status {{ $user->status == 'active' ? 'btn-success' : 'btn-danger' }}"
                data-id="{{ $user->id }}" data-status="{{ $user->status }}">
                {{ ucfirst($user->status) }}
            </button>
        </td>
        <td>{{ $user->last_seen ? \Carbon\Carbon::parse($user->last_seen)->diffForHumans() : 'Never' }}</td>
       <td>
    <!-- Edit Button -->
    <button class="btn btn-sm btn-outline-success edit-btn"
        data-id="{{ $user->id }}"
        data-name="{{ $user->name }}"
        data-email="{{ $user->email }}"
        data-role="{{ $user->role }}"
        data-role="{{ $user->password }}"
        data-status="{{ $user->status }}">
        Edit
    </button>

    <!-- Delete Button (ডিলিটের জন্য শুধু ID যথেষ্ট) -->
    <button class="btn btn-sm btn-outline-danger delete-btn"
        data-id="{{ $user->id }}">
        Delete
    </button>
</td>
    </tr>
@empty
   <tr>
        <td colspan="10" class="text-center text-danger font-bold"><b>No users found.</b></td>
    </tr>

@endforelse ($users as $key => $user)



