<x-app-layout>
    @section('title')
        {{ 'Message' }}
    @endsection
    @section('content')
     <h1>
        Subject : {{$message->subject}}
     </h1>
     <h1>
        From : {{$message->name}}
     </h1>
     <h3>Information : {{$message->email}} / {{$message->phone}}</h3>
     <br><br>
     <h3>
        Message content :
     </h3>
     <p>
        {{$message->msg}}
     </p><br>
     <b>
        sended at {{$message->created_at}}
     </b>
    @endsection

</x-app-layout>

