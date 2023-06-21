<x-app-layout>
    @section('title')
        {{ 'Article' }}
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

                    <td>{{ $article->codePN }}</td>
                    <td>{{ $article->typeMagasin }}</td>
                    <td>{{ $article->designation }}</td>
                    <td>{{ $article->stkMin }}</td>
                    <td>{{ $article->stkMax }}</td>
                    <td>{{ $article->stkActuel }}</td>
                    <td>{{ $article->valeurActuel }}</td>
                    <td>{{ $article->unitemesure }}</td>
                    <td>{{ $article->CUMP }}</td>
                    <td>{{ $article->codesection }}</td>
                    <td>{{ $article->created_at }}</td>
                    <td>{{ $article->updated_at }}</td>
                    <td>
                        <a href="">
                            <button type="button" class="btn btn-primary">Show</button>
                        </a>
                        <form method="post" action="">
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
