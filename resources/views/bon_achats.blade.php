<x-app-layout>
    @section('title')
        {{ 'Article' }}
    @endsection
    @section('content')
        <table class="table table-striped-columns">
            <thead>
            <tr>
                <th scope="col">numBA</th>
                <th scope="col">dateBA</th>
                <th scope="col">typeAchat</th>
                <th scope="col">tauxchange</th>
                <th scope="col">valeurOR</th>
                <th scope="col">fraisApproche</th>
                <th scope="col">codeMoney</th>
                <th scope="col">numcmd</th>
                <th scope="col">datecmd</th>
                <th scope="col">codefacture</th>
                <th scope="col">datefacture</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($bon_achats as $bon_achat)
                <tr>
                    <td>{{ $bon_achat->numBA }}</td>
                    <td>{{ $bon_achat->dateBA }}</td>
                    <td>{{ $bon_achat->typeAchat }}</td>
                    <td>{{ $bon_achat->tauxchange }}</td>
                    <td>{{ $bon_achat->valeurOR }}</td>
                    <td>{{ $bon_achat->fraisApproche }}</td>
                    <td>{{ $bon_achat->codeMoney }}</td>
                    <td>{{ $bon_achat->numcmd }}</td>
                    <td>{{ $bon_achat->datecmd }}</td>
                    <td>{{ $bon_achat->codefacture }}</td>
                    <td>{{ $bon_achat->datefacture }}</td>

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
