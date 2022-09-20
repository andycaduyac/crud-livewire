<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID No.</th>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Room Type</th>
                <th>Check-in Date</th>
                <th>Check-out Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{$booking->id}}</td>
                    <td>{{$booking->name}}</td>
                    <td>{{$booking->contact_number}}</td>
                    <td>{{$booking->room_type}}</td>
                    <td>{{$booking->checkin_date}}</td>
                    <td>{{$booking->checkout_date}}</td>
                    <td>
                        <a href="{{url('edit', ['booking' => $booking->id])}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href="{{url('delete', ['booking' => $booking->id])}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
