@if ($errors->any())
    <ul class="bg-danger list-unstyled mb-5 px-5 py-3">
        @foreach ($errors->all() as $error)
            <li class="text-white">{{$error}}</li>
        @endforeach    
    </ul>
@endif