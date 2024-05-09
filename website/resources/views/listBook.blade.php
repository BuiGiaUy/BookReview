@extends("layouts.adminLayoutPage")
@section("content")
<div class="iq-card">
    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title">Tables</h4>
        </div>
    </div>
    <div class="iq-card-body">
        <p>The <code>.table </code> class adds basic styling to a table.</p>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Type</th>
            </tr>
            </thead>
            <tbody>
               @foreach($books as $book)
                   <tr>
                       <th scope="col">{{$book->id}}</th>
                       <th scope="col">{{$book->name}}</th>
                       <th scope="col">{{$book->author}}</th>
                       <th scope="col">{{$book->type->name}}</th>
                   </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection()

