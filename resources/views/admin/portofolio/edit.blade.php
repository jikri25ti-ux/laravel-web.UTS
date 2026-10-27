<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Edit Profile - Volt Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets-admin/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets-admin/img/favicon/favicon-16x16.png') }}">

    <link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Sidebar Left -->
    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item">
                    <a href="{{ url('/admin/dashboard') }}" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                        </span>
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pelanggan.index') }}" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
                        </span>
                        <span class="sidebar-text">Pelanggan</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="{{ route('portofolio.index') }}" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h6a1 1 0 100-2H7zm0 4a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg>
                        </span>
                        <span class="sidebar-text">Portofolio</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content Area -->
    <main class="content">
        <div class="py-4">
            <h2>Edit User Profile</h2>
        </div>

        <form action="{{ route('portofolio.update', $portofolio->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Personal Information -->
            <div class="card card-body border-0 shadow mb-4">
                <h4 class="h5 mb-4">Personal Information</h4>
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>First name</label>
                                <input type="text" name="first_name" class="form-control" value="{{ $portofolio->first_name }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Last name</label>
                                <input type="text" name="last_name" class="form-control" value="{{ $portofolio->last_name }}" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Profile Title</label>
                            <input type="text" name="profile_title" class="form-control" value="{{ $portofolio->profile_title }}" required>
                        </div>
                        <div class="mb-3">
                            <label>About</label>
                            <textarea name="about" class="form-control" rows="3">{{ $portofolio->about }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <label>Foto Profil</label>
                        @if($portofolio->photo)
                            <img src="{{ asset('storage/' . $portofolio->photo) }}" class="rounded-circle mb-2" style="width: 100px; height: 100px; object-fit: cover;">
                        @endif
                        <input type="file" name="photo" class="form-control mb-2">
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="card card-body border-0 shadow mb-4">
                <h4 class="h5 mb-4">Contact Information</h4>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $portofolio->email }}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Phone number</label>
                        <input type="text" name="phone" class="form-control" value="{{ $portofolio->phone }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Website</label>
                        <input type="text" name="website" class="form-control" value="{{ $portofolio->website }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>LinkedIn</label>
                        <input type="text" name="linkedin" class="form-control" value="{{ $portofolio->linkedin }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Github</label>
                        <input type="text" name="github" class="form-control" value="{{ $portofolio->github }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Twitter</label>
                        <input type="text" name="twitter" class="form-control" value="{{ $portofolio->twitter }}">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success w-100 py-2 mb-5">Save Changes</button>
        </form>
    </main>

    <script src="{{ asset('assets-admin/js/volt.js') }}"></script>
</body>
</html>
