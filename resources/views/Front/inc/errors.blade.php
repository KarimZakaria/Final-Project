@if ($errors->any())
    <ul class="bg-dark list-unstyled mb-5">
        @foreach ($errors->all() as $error)
            <li class="text-danger">{{$error}}</li>
        @endforeach    
    </ul>
@endif