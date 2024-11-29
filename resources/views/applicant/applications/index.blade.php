<x-app-layout>

    <h2>My Applications</h2>


    <table>
        <tbody>

        @foreach($applications as $application)
            <tr class="">
                <td><a href="/jobs/${{$application->job_id}}">{{$application->job->title}}</a></td>
                <td>{{$application->job->company->name}}</td>
                <td>{{$application->status}}</td>
                <td>{{$application->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</x-app-layout>
