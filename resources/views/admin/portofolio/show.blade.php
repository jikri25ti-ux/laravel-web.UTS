<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $portofolio->first_name }}'s Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa; }
        .sidebar-dark { background-color: #0b0c10; color: #ffffff; min-height: 100vh; }
        .sidebar-dark a { color: #ffffff; text-decoration: none; word-break: break-all; }
        .section-title { color: #2e7d32; font-weight: bold; border-bottom: 2px solid #e0e0e0; padding-bottom: 5px; margin-bottom: 15px; text-transform: uppercase; }
        .skill-bar { height: 8px; background-color: #e0e0e0; border-radius: 4px; overflow: hidden; }
        .skill-progress { height: 100%; background-color: #4caf50; }
    </style>
</head>
<body>

<div class="container-fluid p-0">
    <div class="row g-0">
        <!-- Sidebar Kiri (Gelap) -->
        <div class="col-md-4 sidebar-dark p-5">
            <div class="text-center mb-4">
                @if($portofolio->photo)
                    <img src="{{ asset('storage/' . $portofolio->photo) }}" class="rounded-circle mb-3" style="width: 140px; height: 140px; object-fit: cover;">
                @else
                    <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 140px; height: 140px; font-size: 40px;">
                        {{ substr($portofolio->first_name, 0, 1) }}
                    </div>
                @endif
                <h2 class="fw-bold mb-0">{{ $portofolio->first_name }} {{ $portofolio->last_name }}</h2>
                <p class="text-secondary">{{ $portofolio->profile_title }}</p>
            </div>

            <div class="mb-4">
                <p><i class="fas fa-envelope me-2"></i> {{ $portofolio->email }}</p>
                @if($portofolio->phone)<p><i class="fas fa-phone me-2"></i> {{ $portofolio->phone }}</p>@endif
                @if($portofolio->website)<p><i class="fas fa-globe me-2"></i> <a href="{{ $portofolio->website }}">{{ $portofolio->website }}</a></p>@endif
                @if($portofolio->linkedin)<p><i class="fab fa-linkedin me-2"></i> <a href="{{ $portofolio->linkedin }}">{{ $portofolio->linkedin }}</a></p>@endif
                @if($portofolio->github)<p><i class="fab fa-github me-2"></i> <a href="{{ $portofolio->github }}">{{ $portofolio->github }}</a></p>@endif
                @if($portofolio->twitter)<p><i class="fab fa-twitter me-2"></i> <a href="{{ $portofolio->twitter }}">{{ $portofolio->twitter }}</a></p>@endif
            </div>

            @if(!empty($portofolio->education))
            <div class="mb-4">
                <h5 class="fw-bold border-bottom pb-1 text-uppercase">Education</h5>
                @foreach($portofolio->education as $edu)
                    <div class="mb-3">
                        <strong class="d-block">{{ $edu['degree'] ?? '' }}</strong>
                        <small class="text-secondary d-block">{{ $edu['institute'] ?? '' }}</small>
                        <small class="text-secondary">{{ $edu['start_date'] ?? '' }} - {{ $edu['end_date'] ?? '' }}</small>
                    </div>
                @endforeach
            </div>
            @endif

            @if(!empty($portofolio->languages))
            <div class="mb-4">
                <h5 class="fw-bold border-bottom pb-1 text-uppercase">Languages</h5>
                @foreach($portofolio->languages as $lang)
                    <p class="mb-1">{{ $lang['name'] ?? '' }} <small class="text-secondary">({{ $lang['level'] ?? '' }})</small></p>
                @endforeach
            </div>
            @endif

            @if(!empty($portofolio->interests))
            <div>
                <h5 class="fw-bold border-bottom pb-1 text-uppercase">Interests</h5>
                @foreach($portofolio->interests as $int)
                    <span class="badge bg-secondary me-1 mb-1">{{ $int['name'] ?? '' }}</span>
                @endforeach
            </div>
            @endif
        </div>

        <!-- Konten Kanan (Terang) -->
        <div class="col-md-8 p-5 bg-white">
            @if($portofolio->about)
            <div class="mb-5">
                <h5 class="section-title"><i class="fas fa-user me-2"></i>Career Profile</h5>
                <p class="text-muted">{{ $portofolio->about }}</p>
            </div>
            @endif

            @if(!empty($portofolio->experience))
            <div class="mb-5">
                <h5 class="section-title"><i class="fas fa-briefcase me-2"></i>Experiences</h5>
                @foreach($portofolio->experience as $exp)
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="fw-bold mb-0">{{ $exp['title'] ?? '' }}</h6>
                            <small class="text-muted">{{ $exp['start_date'] ?? '' }} - {{ $exp['end_date'] ?? '' }}</small>
                        </div>
                        <small class="text-success d-block mb-2">{{ $exp['organization'] ?? '' }}</small>
                        <p class="text-muted small">{{ $exp['description'] ?? '' }}</p>
                    </div>
                @endforeach
            </div>
            @endif

            @if(!empty($portofolio->projects))
            <div class="mb-5">
                <h5 class="section-title"><i class="fas fa-folder-open me-2"></i>Projects</h5>
                @foreach($portofolio->projects as $proj)
                    <div class="mb-3">
                        <h6 class="fw-bold mb-1">{{ $proj['title'] ?? '' }}</h6>
                        <p class="text-muted small">{{ $proj['description'] ?? '' }}</p>
                    </div>
                @endforeach
            </div>
            @endif

            @if(!empty($portofolio->skills))
            <div>
                <h5 class="section-title"><i class="fas fa-tasks me-2"></i>Skills & Proficiency</h5>
                <div class="row">
                    @foreach($portofolio->skills as $skill)
                        <div class="col-md-6 mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <small class="fw-bold">{{ $skill['name'] ?? '' }}</small>
                                <small class="text-muted">{{ $skill['percentage'] ?? 0 }}%</small>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: {{ $skill['percentage'] ?? 0 }}%;"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

</body>
</html>
