<div>
    <div class="row">
        <div class="col-auto">
    <button wire:navigate href="/customers/create" class="btn btn-success btn-sm">Create</button>
    </div>
    <div class="colo-auto">
        <input type="text" class="form-control" wire:model.live.debounce.150ms="search" placeholder="Search Customers">
    </div>
</div>
    <livewire:flash-message />

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($customers as $customer)
                <tr>
                    <th scope="row">{{ $customer->id }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" wire:navigate
                            href="/customers/{{ $customer->id }}">View</button>
                        <button class="btn btn-secondary btn-sm" wire:navigate
                            href="/customers/{{ $customer->id }}/edit">Edit</button>
                        {{-- <button class="btn btn-danger btn-sm" wire:click="deleteCustomer({{$customer->id}})" onclick="return confirm('Sure to delete?')">Delete</button> --}}
                        <button class="btn btn-danger btn-sm"
                            onclick="if (!confirm('Sure to delete?')) { event.stopPropagation(); return false; } else { @this.deleteCustomer({{ $customer->id }}) }">Delete</button>

                    </td>
                </tr>
                <tr>
            @endforeach


        <tbody>
    </table>
</div>
