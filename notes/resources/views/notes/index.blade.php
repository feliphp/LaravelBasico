<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Notas</title>
  </head>
  <body>
    <ul>
    @foreach($notes as $note)
      <li>
        <a href="notes/{{$note->id}}">
          {{$note->title}}
          @if ($note->isImportant())
            *
          @endif
        </a>
      </li>
    @endforeach
  </ul>
  </body>
</html>
