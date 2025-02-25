<table class="table align-middle mb-4 bg-white"
    style=" position: absolute !important; width: 80% !important; height: 30% !important; left: 10% !important; top: 8% !important ">
    <thead>
        <tr>
            <th colspan="2" style="padding-left: 25% !important">
                <h3>Teachers</h3>

            </th>
            <th style="padding-left: 20% !important">
                <form class="d-flex float-end" role="search" id="search-teacher">
                    <input wire:model.live.debounce.500ms="search" type="search" placeholder="search ">

                </form>
            </th>
        </tr>
    </thead>
    <thead class="bg-light">
        <tr>
            <th style="padding-right: 100px !important ">Profile</th>
            <th>Email</th>
            <th>Teacher ID</th>
            <th>Full Name</th>
            <th>Gender</th>
            <th>subject</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
            <tr>
                <td>
                    <a href="{{ route('teacher.profile', $teacher->user->id) }}">
                        <div class="d-flex align-items-center">
                            @if ($teacher->user->image)
                                <img src="{{ asset('storage/images/' . $teacher->user->image) }}" alt="Student Image"
                                    style="width: 45px; height: 45px" class="rounded-circle" />
                            @else
                                <img src="{{ asset('build/assets/images/profile.jpg') }}" alt="profile"
                                    style="width: 45px; height: 45px" class="rounded-circle">
                            @endif
                        </div>
                    </a>
                </td>
                <td>{{ $teacher->user->email }}</td>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->user->first_name . ' ' . $teacher->user->last_name }}</td>
                <td>{{ $teacher->user->gender }}</td>
                <td>{{ $teacher->subjects[0]->name }}</td>

            </tr>
        @endforeach

    </tbody>

</table>
