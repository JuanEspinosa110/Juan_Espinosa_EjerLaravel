

<form action="{{ url('/Admin/'.$admin->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('Admin.form')

</form>