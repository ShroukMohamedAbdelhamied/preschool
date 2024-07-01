<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard.includesdash.head', ['title' => $title])
</head>
<body>

@include('dashboard.includesdash.sideBar')
@include('dashboard.includesdash.navBar')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Teachers Tables</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home {{ request()->is('main') ? 'active' : '' }}">
                    <a href="{{ route('main') }}">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item {{ request()->is('course') ? 'active' : '' }}">
                    <a href="{{ route('course') }}">Classes</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item {{ request()->is('teachers') ? 'active' : '' }}">
                    <a href="{{ route('teachers') }}">{{ $title }}</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Teacher Name</th>
                                    <th>Title</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Facebook</th>
                                    <th>Twitter</th>
                                    <th>Instagram</th>
                                    <th>Teacher Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($teachers as $teacher)
                                    <tr>
                                        <td>{{ $teacher->teachername }}</td>
                                        <td>{{ $teacher->title }}</td>
                                        <td>{{ $teacher->email }}</td>
                                        <td>{{ $teacher->password }}</td>
                                        <td>{{ $teacher->facebook }}</td>
                                        <td>{{ $teacher->twitter }}</td>
                                        <td>{{ $teacher->instagram }}</td>
                                        <td>
                                            @if ($teacher->teacherimage)
                                                <img class="rounded-circle" src="{{ asset('storage/' . $teacher->teacherimage) }}" alt="Teacher Image" style="width: 45px; height: 45px;">
                                            @else
                                                <span class="text-danger">No image available</span>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('delTeacher', $teacher->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
