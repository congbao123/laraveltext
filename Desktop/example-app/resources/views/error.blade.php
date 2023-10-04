@if(count($error)>0)
<div>
    <ul>
        @foreach ($error->all() as $error)
        <li>{!! $error !!} </li>
        @endforeach
    </ul>
</div>
@endif