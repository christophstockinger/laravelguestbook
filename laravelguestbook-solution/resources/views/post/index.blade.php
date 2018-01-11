@extends ('layouts.main')

@section('content')
<h3>Neuen Gästebuch-Eintrag erstellen</h3>
<form method="post" action="/post/">
  {{ csrf_field() }}
  <input type='text' name='name' placeholder="Dein Name" />
  <input type="email" name="email" placeholder="Deine E-Mail-Adresse" />
  <textarea name="message" placeholder="Dein Gästebucheintrag"></textarea>
  <button type="submit" name="eintragen" value="eingetragen">Eintrag absenden</button>
</form>
@endsection
