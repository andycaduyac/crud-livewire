<div>
    <div class="container col-md-6 offset-md-3 mt-3">
        <div class="card">
            <div class="card-header">
                Are you sure about that?
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <td>{{$this->booking->name}}</td>
                    </tr>
                    <tr>
                        <th>Room Type</th>
                        <td>{{$this->booking->room_type}}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
            <div class="d-flex float-end">
                <button class="btn btn-danger" wire:click="delete()">Delete</button>
                <button class="btn btn-secondary mx-2" wire:click="back()">Back</button>
            </div>
        </div>

        </div>
    </div>
</div>
