<!DOCTYPE html>
<html>
<head>
    <title>Customer Management</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional: Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
        .container {
            max-width: 1200px;
        }
        .table thead th {
            vertical-align: middle;
            text-align: center;
        }
        .table tbody td {
            vertical-align: middle;
            text-align: center;
        }
        .filter-links a {
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Customer Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Optional: Additional Navigation Items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <!-- Add more nav items here if needed -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="mb-0">Customer List</h1>
            <div class="filter-links">
                <a href="{{ url('/') }}" class="btn btn-outline-primary btn-sm">Show All Customers</a>
                <a href="{{ url('/filter/gender/Male') }}" class="btn btn-outline-secondary btn-sm">Show Male Customers</a>
                <a href="{{ url('/filter/gender/Female') }}" class="btn btn-outline-secondary btn-sm">Show Female Customers</a>
                <a href="{{ url('/filter/birthday') }}" class="btn btn-outline-success btn-sm">Born After 2000</a>
            </div>
        </div>

        <!-- Customer Table -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name <i class="bi bi-person-fill"></i></th>
                        <th scope="col">Email <i class="bi bi-envelope-fill"></i></th>
                        <th scope="col">Address <i class="bi bi-geo-alt-fill"></i></th>
                        <th scope="col">Phone Number <i class="bi bi-telephone-fill"></i></th>
                        <th scope="col">Gender <i class="bi bi-gender-ambiguous"></i></th>
                        <th scope="col">Birthday <i class="bi bi-gift-fill"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($customers as $index => $customer)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->phoneNumber }}</td>
                            <td>{{ $customer->gender }}</td>
                            <td>{{ \Carbon\Carbon::parse($customer->birthday)->format('F d, Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No customers found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and Dependencies (Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Optional: Include jQuery if needed for additional scripts -->
</body>
</html>
