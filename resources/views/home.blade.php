@extends('layout')

@section('content')

@if(count($users))

  <div class="table-responsive">
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Phone</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>

        @foreach($users as $user)
        <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->first}}</td>
          <td>{{$user->last}}</td>
          <td>{{$user->phone}}</td>
          <td>{{$user->handle}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  {{$users->links() }}
@else
<p>Not record...</p>
@endif
@endsection