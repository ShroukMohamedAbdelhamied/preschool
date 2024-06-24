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
            <h3 class="fw-bold mb-3">{{ $title }}</h3>
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
                <li class="nav-item {{ request()->is('Teachers') ? 'active' : '' }}">
                    <a href="{{ route('Teachers') }}">Teachers</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ $title }}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('insertTeacher') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Input fields for teacher data -->
                            <div class="mb-3">
                                <label for="teachername" class="form-label">Teacher name:</label>
                                <input type="text" class="form-control" id="teachername" name="teachername" placeholder="Enter teacher name" value="{{ old('teachername') }}">
                                @error('teachername')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ old('title') }}">
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="facebook" class="form-label">Facebook:</label>
                                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Enter Facebook URL" value="{{ old('facebook') }}">
                                @error('facebook')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="twitter" class="form-label">Twitter:</label>
                                <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter Twitter handle" value="{{ old('twitter') }}">
                                @error('twitter')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="instagram" class="form-label">Instagram:</label>
                                <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Enter Instagram username" value="{{ old('instagram') }}">
                                @error('instagram')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="teacherimage" class="form-label">Teacher Image:</label>
                                <input type="file" class="form-control" id="teacherimage" name="teacherimage">
                                @error('teacherimage')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Teachers List</h4>
                    </div>
                    <div class="card-body">
                        <p>No teachers listed while adding a new teacher.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
