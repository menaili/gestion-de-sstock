<x-app-layout>
    @section('title')
        {{ 'Messages' }}
    @endsection
    @section('content')
        <table class="table table-striped-columns">
            <thead>
            <tr>
                <th scope="col">codePN</th>
                <th scope="col">typeMagasin</th>
                <th scope="col">designation</th>
                <th scope="col">stkMin</th>
                <th scope="col">stkMax</th>
                <th scope="col">stkActuel</th>
                <th scope="col">valeurActuel</th>
                <th scope="col">unitemesure</th>
                <th scope="col">CUMP</th>
                <th scope="col">codesection</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($articles as $article)
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
