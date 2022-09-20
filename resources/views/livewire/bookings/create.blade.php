<div>
    <div class="card">
        <div class="card-header">
            <h3>Add Booking</h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="name">
                <label for="name">Name</label>
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" wire:model.defer="contact_number">
                <label for="contact_number">Contact Number</label>
                @error('contact_number')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="room_type" class="form-select" wire:model.defer="room_type">
                    <option hidden="true">Select Room</option>
                    <option selected disabled>Select Room</option>
                    <option value="Single">Single</option>
                    <option value="Double">Double</option>
                </select>
                <label for="room_type">Room Type</label>
                @error('room_type')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" wire:model.defer="checkin_date">
                <label for="checkin_date">Check-in Date</label>
                @error('checkin_date')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" wire:model.defer="checkout_date">
                <label for="checkout_date">Check-out Date</label>
                @error('checkout_date')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mb-3 d-flex float-end">
                <button class="btn btn-primary" type="submit" wire:click='addBooking()'>
                    Add
                </button>
            </div>
        </div>
    </div>
</div>
