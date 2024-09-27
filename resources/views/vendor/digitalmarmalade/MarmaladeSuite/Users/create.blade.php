@extends('vendor.digitalmarmalade.MarmaladeSuite.master')

@section('main')

        <h1 class="page-header">{{ Config::get('msuite.app.name') }} {{ Config::get('msuite.app.version') }} - Create User</h1>
          
        <form action="{{ route('msuiteUserCreate') }}" method="post">
            
            <label>Email: </label><input type="email" name="email" />

        <table class="table table-striped">
            <thead>
              <th>ID</th>
              <th>Email</th>
              <th>Name</th>
              <th>Created</th>
              <th>Updated</th>
              <th></th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td><a href="{{ route('msuitePageEdit', ['pageId' => $user->id]) }}" target="_blank">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection