<div class="card offset-3 col-6">
    <h5 class="card-header">Create Customers</h5>
    <div class="card-body">
        <form wire:submit="save">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input wire:model="name" type="text" class="form-control" id="" aria-describedby="">
                <div>
                    @error('name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

            </div>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                    <div>
                        @error('email')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input wire:model="phone" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div>
                @error('phone')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
