<x-app-layout>
    @section('title')
        {{ 'Messages' }}
    @endsection
    @section('content')
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">From</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Date</th>
                    <th scope="col">Seting</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($msgs as $msg)
                <tr>

                    <td>{{$msg->name}}</td>

                    <td>{{$msg->subject}}</td>
                    <td>{{$msg->created_at}}</td>
                    <td>
                        <a href="{{route('message.show',$msg->id)}}">
                            <button type="button" class="btn btn-primary">Show</button>
                        </a>
                        <form method="post" action="{{route('message.destroy',$msg->id)}}">
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
