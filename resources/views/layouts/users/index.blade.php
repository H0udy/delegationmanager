@extends('layouts.app')

@section('content')
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">E-mail</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Company</th>
      <th scope="col">PESEL</th>
      <th scope="col">NIP</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
        <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->email }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->surname }}</td>
        <td>{{ $user->company }}</td>
        <td>{{ $user->PESEL }}</td>
        <td>{{ $user->NIP }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
