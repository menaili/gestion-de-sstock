<x-app-layout>
    @section('title')
        {{ 'Project' }}
    @endsection
    @section('content')
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Seting</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->project_name}}</td>
                    <td><img style="height: 120px; width: 100px;" src="ProjectImages/{{$project->image}}" alt="image"></td>
                    <td>{{$project->desc}}</td>
                    <td>
                        <a href="{{route('project.edit',$project->id)}}">
                            <button type="button" class="btn btn-primary">Edit</button>
                        </a>
                        <form method="post" action="{{route('project.destroy',$project->id)}}">
                            @csrf
                            @method('DELETE')

                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    @endsection

</x-app-layout>
