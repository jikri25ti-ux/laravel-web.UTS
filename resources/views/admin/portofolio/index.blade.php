<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Manage Portofolio - Volt Dashboard</title>
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
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div>
                <h2>Manage User Profiles</h2>
            </div>
            <div>
                <a href="{{ route('portofolio.create') }}" class="btn btn-primary"><i class="fas fa-plus me-2"></i>Create New Profile</a>
            </div>
        </div>

        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <table class="table table-hover align-items-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Foto</th>
                        <th>Nama Lengkap</th>
                        <th>Profile Title</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($portofolios as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if($p->photo)
                                <img src="{{ asset('storage/' . $p->photo) }}" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            @else
                                <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">{{ substr($p->first_name, 0, 1) }}</div>
                            @endif
                        </td>
                        <td>{{ $p->first_name }} {{ $p->last_name }}</td>
                        <td>{{ $p->profile_title }}</td>
                        <td>{{ $p->email }}</td>
                        <td>
                            <a href="{{ route('portofolio.show', $p->id) }}" target="_blank" class="btn btn-sm btn-info text-white">Lihat Hasil</a>
                            <a href="{{ route('portofolio.edit', $p->id) }}" class="btn btn-sm btn-warning text-white">Edit</a>
                            <form action="{{ route('portofolio.destroy', $p->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus portofolio ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4">Belum ada portofolio yang dibuat.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

    <script src="{{ asset('assets-admin/js/volt.js') }}"></script>
</body>
</html>
