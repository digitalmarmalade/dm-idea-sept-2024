@extends('vendor.digitalmarmalade.MarmaladeSuite.master')

@section('main')
	
@section('site_navigation')

@parent
<ul class="suite-quicklinks">
    <li><a href="{{ route('msuiteHome') }}">Dashboard</a></li>
</ul>
<form class="search-holder">
    <label for="search" class="visuallyhidden">Search</label>
    <input type="search" placeholder="Search" /> <button type="submit"><span class="glyph-icon flaticon-interface" aria-hidden="true"></span> <span class="visuallyhidden">Search</span></button>
</form>
@stop

<!--PAGE HEADER-->
<header class="page-header">

    <h1 class="page-title">Admin Users</h1>

    <p class="page-header-cta"><a href="{{ route('msuiteUsersCreateView') }}" class="btn btn-primary">Add an Admin User</a></p>

</header>
<!--PAGE HEADER ENDS-->


<!--LISTER PANEL-->
<div class="panel lister-panel">

    <div class="num-results-holder">

        <p>
            @if($users->count() == 0 || $users->count() > 1)
            <span class="lister-total-results">{{$users->count()}} Users</span>
            @else
            <span class="lister-total-results">{{$users->count()}} Users</span>
            @endif
        </p>

    </div><!--/num-results-holder-->

    <form action="" method="get" onchange="this.submit()">
    
    <table class="list-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Email</th>
            <th>Created</th>
            <th>Updated</th>
            <th class="lister-actions" colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->id }}</td>		
            <td>{{ $user->email }}</td>		
            <td>{{ $user->created_at->format('d/m/Y') }}</td> 
            <td>{{ $user->updated_at->format('d/m/Y') }}</td>
            <td class="icon-action">
                <a href="{{ route('msuiteUserEdit', ['userId' => $user->id]) }}" class="btn-edit">
                    <span class="glyph-icon flaticon-edit" aria-hidden="true"></span>
                    <span class="visuallyhidden"> Edit</span>
                </a>
            </td>		
            <td class="icon-action">
                <form method="post" action="{{ route('msuiteUserDelete', ['userId' => $user->id]) }}">
                                {!! csrf_field() !!}
                                <button type="submit" class="btn-icon">
                                <span class="glyph-icon flaticon-tool" aria-hidden="true"></span>
                                <span class="visuallyhidden"> Delete</span>
                                </button>
                </form>
            </td>
            
        </tr>
        @endforeach
    </tbody>
    
    </table>
    
    <div class="num-results-holder">

        <p>
            @if($users->count() == 0 || $users->count() > 1)
            <span class="lister-total-results">{{$users->count()}} Users</span>
            @else
            <span class="lister-total-results">{{$users->count()}} Users</span>
            @endif
        </p>

    </div><!--/num-results-holder-->
    
    
    </form>
</div>
        
@endsection