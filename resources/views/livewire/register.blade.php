<div class="card offset-3 col-6">
    <div class="card-header">
     Register User
    </div>
    <div class="card-body">
        <form wire:submit="storeUser">

            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="name" class="form-control" id="" aria-describedby="" wire:model="name">

              </div>

              <div>
                @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>



            <div class="mb-3">
              <label for="" class="form-label">Email address</label>
              <input type="email" class="form-control" id="" aria-describedby=""  wire:model="email">

            </div>

            <div>
                @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>


            <div class="mb-3">
              <label for="" class="form-label">Password</label>
              <input type="password" class="form-control" id=""  wire:model="password">
            </div>

            <div>
                @error('password')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

          <div class="mb-3">
            Already Have An Account? <button class="btn btn-success" wire:navigate href="/login">Login</button>
          </div>
    </div>

  </div>
