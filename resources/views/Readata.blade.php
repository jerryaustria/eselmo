<h1>This is a sample page to text</h1>



@isset($users)
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>

            <th>Status</th>
            <th>Role</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><img height="50" src="{{$user->userPhoto ? $user->userPhoto->path : 'no user photo '}}" /></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
                <td><a href="{{route('deleteUser',['id'=>$user->id])}}" type="button" class="btn btn-danger btn-sm" role="button">Delete</a></td>

            </tr>
        @endforeach
        @endisset

        </tbody>
    </table>

    <hr>