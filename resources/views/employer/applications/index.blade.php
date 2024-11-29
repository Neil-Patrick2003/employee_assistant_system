<x-employer-layout>

    <h2>My Applications</h2>


    <table>
        <tbody>
        <thead>
            <th>Job</th>
            <th>User</th>
            <th>Resume</th>
            <th>Status</th>
            <th>Created At</th>
        </thead>

        @foreach($applications as $application)
            <tr class="">
                <td><a href="/jobs/{{$application->job_id}}">{{$application->job->title}}</a></td>
                <td>{{$application->user->name}}</td>
                <td><a href="/resumes/${{$application->resume_id}}">View Resume</a></td>
                <td>{{$application->status}}</td>
                <td>{{$application->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    </x-employer-layout>
