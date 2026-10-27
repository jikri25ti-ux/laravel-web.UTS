<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Create Profile - Volt Dashboard</title>
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
            <h2>Create User Profile</h2>
        </div>

        <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Personal Information -->
            <div class="card card-body border-0 shadow mb-4">
                <h4 class="h5 mb-4">Personal Information</h4>
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>First name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="First name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Last name</label>
                                <input type="text" name="last_name" class="form-control" placeholder="Last name" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Profile Title</label>
                            <input type="text" name="profile_title" class="form-control" placeholder="Profile Title" required>
                        </div>
                        <div class="mb-3">
                            <label>About</label>
                            <textarea name="about" class="form-control" rows="3" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <label>Foto Profil</label>
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
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Phone number</label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Website</label>
                        <input type="text" name="website" class="form-control" placeholder="Website">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>LinkedIn</label>
                        <input type="text" name="linkedin" class="form-control" placeholder="LinkedIn">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Github</label>
                        <input type="text" name="github" class="form-control" placeholder="Github">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Twitter</label>
                        <input type="text" name="twitter" class="form-control" placeholder="Twitter">
                    </div>
                </div>
            </div>

            <!-- Education -->
            <div class="card card-body border-0 shadow mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="h5 m-0">Education</h4>
                    <button type="button" class="btn btn-sm btn-primary" id="add-education">Add Education</button>
                </div>
                <div id="education-container">
                    <div class="border rounded p-3 mb-3">
                        <div class="mb-2"><input type="text" name="education[0][degree]" class="form-control" placeholder="Degree"></div>
                        <div class="mb-2"><input type="text" name="education[0][institute]" class="form-control" placeholder="Institute"></div>
                        <div class="row mb-2">
                            <div class="col"><input type="date" name="education[0][start_date]" class="form-control"></div>
                            <div class="col"><input type="date" name="education[0][end_date]" class="form-control"></div>
                        </div>
                        <div><textarea name="education[0][description]" class="form-control" placeholder="Description"></textarea></div>
                    </div>
                </div>
            </div>

            <!-- Experience -->
            <div class="card card-body border-0 shadow mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="h5 m-0">Experience</h4>
                    <button type="button" class="btn btn-sm btn-primary" id="add-experience">Add Experience</button>
                </div>
                <div id="experience-container">
                    <div class="border rounded p-3 mb-3">
                        <div class="mb-2"><input type="text" name="experience[0][title]" class="form-control" placeholder="Job Title"></div>
                        <div class="mb-2"><input type="text" name="experience[0][organization]" class="form-control" placeholder="Organization"></div>
                        <div class="row mb-2">
                            <div class="col"><input type="date" name="experience[0][start_date]" class="form-control"></div>
                            <div class="col"><input type="date" name="experience[0][end_date]" class="form-control"></div>
                        </div>
                        <div><textarea name="experience[0][description]" class="form-control" placeholder="Job Description"></textarea></div>
                    </div>
                </div>
            </div>

            <!-- Projects -->
            <div class="card card-body border-0 shadow mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="h5 m-0">Projects</h4>
                    <button type="button" class="btn btn-sm btn-primary" id="add-project">Add Project</button>
                </div>
                <div id="projects-container">
                    <div class="border rounded p-3 mb-3">
                        <div class="mb-2"><input type="text" name="projects[0][title]" class="form-control" placeholder="Project Title"></div>
                        <div><textarea name="projects[0][description]" class="form-control" placeholder="Project Description"></textarea></div>
                    </div>
                </div>
            </div>

            <!-- Skills & Proficiency -->
            <div class="card card-body border-0 shadow mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="h5 m-0">Skills & Proficiency</h4>
                    <button type="button" class="btn btn-sm btn-primary" id="add-skill">Add Skill</button>
                </div>
                <div id="skills-container">
                    <div class="row mb-2">
                        <div class="col-8"><input type="text" name="skills[0][name]" class="form-control" placeholder="Add Skill"></div>
                        <div class="col-4"><input type="number" name="skills[0][percentage]" class="form-control" placeholder="Percentage %"></div>
                    </div>
                </div>
            </div>

            <!-- Languages -->
            <div class="card card-body border-0 shadow mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="h5 m-0">Languages</h4>
                    <button type="button" class="btn btn-sm btn-primary" id="add-language">Add Language</button>
                </div>
                <div id="languages-container">
                    <div class="row mb-2">
                        <div class="col-8"><input type="text" name="languages[0][name]" class="form-control" placeholder="Add Language"></div>
                        <div class="col-4"><input type="text" name="languages[0][level]" class="form-control" placeholder="Level (Native, Fluent, etc)"></div>
                    </div>
                </div>
            </div>

            <!-- Interests -->
            <div class="card card-body border-0 shadow mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="h5 m-0">Interests</h4>
                    <button type="button" class="btn btn-sm btn-primary" id="add-interest">Add Interest</button>
                </div>
                <div id="interests-container">
                    <div class="mb-2"><input type="text" name="interests[0][name]" class="form-control" placeholder="Add Interest"></div>
                </div>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" required id="confirm">
                <label class="form-check-label" for="confirm">Are you sure you want to create new profile?</label>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2 mb-5">Create profile</button>
        </form>
    </main>

    <script src="{{ asset('assets-admin/js/volt.js') }}"></script>
    <script>
        let eduIdx = 1, expIdx = 1, projIdx = 1, skillIdx = 1, langIdx = 1, intIdx = 1;

        document.getElementById('add-education').addEventListener('click', () => {
            document.getElementById('education-container').insertAdjacentHTML('beforeend', `
                <div class="border rounded p-3 mb-3">
                    <div class="mb-2"><input type="text" name="education[${eduIdx}][degree]" class="form-control" placeholder="Degree"></div>
                    <div class="mb-2"><input type="text" name="education[${eduIdx}][institute]" class="form-control" placeholder="Institute"></div>
                    <div class="row mb-2">
                        <div class="col"><input type="date" name="education[${eduIdx}][start_date]" class="form-control"></div>
                        <div class="col"><input type="date" name="education[${eduIdx}][end_date]" class="form-control"></div>
                    </div>
                    <div><textarea name="education[${eduIdx}][description]" class="form-control" placeholder="Description"></textarea></div>
                </div>`);
            eduIdx++;
        });

        document.getElementById('add-experience').addEventListener('click', () => {
            document.getElementById('experience-container').insertAdjacentHTML('beforeend', `
                <div class="border rounded p-3 mb-3">
                    <div class="mb-2"><input type="text" name="experience[${expIdx}][title]" class="form-control" placeholder="Job Title"></div>
                    <div class="mb-2"><input type="text" name="experience[${expIdx}][organization]" class="form-control" placeholder="Organization"></div>
                    <div class="row mb-2">
                        <div class="col"><input type="date" name="experience[${expIdx}][start_date]" class="form-control"></div>
                        <div class="col"><input type="date" name="experience[${expIdx}][end_date]" class="form-control"></div>
                    </div>
                    <div><textarea name="experience[${expIdx}][description]" class="form-control" placeholder="Job Description"></textarea></div>
                </div>`);
            expIdx++;
        });

        document.getElementById('add-project').addEventListener('click', () => {
            document.getElementById('projects-container').insertAdjacentHTML('beforeend', `
                <div class="border rounded p-3 mb-3">
                    <div class="mb-2"><input type="text" name="projects[${projIdx}][title]" class="form-control" placeholder="Project Title"></div>
                    <div><textarea name="projects[${projIdx}][description]" class="form-control" placeholder="Project Description"></textarea></div>
                </div>`);
            projIdx++;
        });

        document.getElementById('add-skill').addEventListener('click', () => {
            document.getElementById('skills-container').insertAdjacentHTML('beforeend', `
                <div class="row mb-2">
                    <div class="col-8"><input type="text" name="skills[${skillIdx}][name]" class="form-control" placeholder="Add Skill"></div>
                    <div class="col-4"><input type="number" name="skills[${skillIdx}][percentage]" class="form-control" placeholder="Percentage %"></div>
                </div>`);
            skillIdx++;
        });

        document.getElementById('add-language').addEventListener('click', () => {
            document.getElementById('languages-container').insertAdjacentHTML('beforeend', `
                <div class="row mb-2">
                    <div class="col-8"><input type="text" name="languages[${langIdx}][name]" class="form-control" placeholder="Add Language"></div>
                    <div class="col-4"><input type="text" name="languages[${langIdx}][level]" class="form-control" placeholder="Level (Native, Fluent, etc)"></div>
                </div>`);
            langIdx++;
        });

        document.getElementById('add-interest').addEventListener('click', () => {
            document.getElementById('interests-container').insertAdjacentHTML('beforeend', `
                <div class="mb-2"><input type="text" name="interests[${intIdx}][name]" class="form-control" placeholder="Add Interest"></div>`);
            intIdx++;
        });
    </script>
</body>
</html>
