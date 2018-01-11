@extends ('layouts.main')

@section('content')
<h3>Alle Gästebucheinträge</h3>
<p><a href='/post/'>Eintrag hinzufügen</a></p>
@foreach($posts as $post)
<table>
  <tr>
    <th class='name'>{{$post->name}}</th>
    <th class='date'>{{$post->created_at}}</th>
    </tr>
    <tr>
      <td class='message' colspan='2'>{{$post->message}}</td>
    </tr>
</table>
@endforeach

@endsection
