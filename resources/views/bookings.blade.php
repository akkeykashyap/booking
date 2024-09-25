<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Booking System</a>
    </div>
</nav>

<div class="container mt-4">
    <h2 class="mb-4">Create a New Booking</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="customer_name" class="form-label">Customer Name</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="booking_date" class="form-label">Booking Date</label>
            <input type="date" class="form-control" id="booking_date" name="booking_date" required>
        </div>
        <div class="mb-3">
            <label for="time_slot" class="form-label">Time Slot</label>
            <input type="text" class="form-control" id="time_slot" name="time_slot" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Booking</button>
    </form>

    <h2 class="mt-5">Existing Bookings</h2>
    <div class="mt-3">
        <ul class="list-group">
            @foreach ($bookings as $booking)
                <li class="list-group-item">
                    <strong>{{ $booking->customer_name }}</strong> -
                    {{ $booking->booking_date }} at {{ $booking->time_slot }}
                </li>
            @endforeach
        </ul>
    </div>
</div>

<footer class="footer mt-4">
    <div class="container text-center">
        <span class="text-muted">© 2023 Booking System</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
