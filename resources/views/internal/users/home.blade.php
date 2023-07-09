@extends('internal.layouts.app')
@section('page_title', 'Kullanıcılar')
@section('page_description', 'Bu sayfadan tüm kullanıcıları görüntüleyebilirsiniz.')

@section('body')
    <div>
        <table class="table table-bordered table-responsive" id="usersTable">
            <thead class="bg-primary text-light">
            <tr>
                <th scope="col">Email</th>
                <th scope="col">Adı</th>
                <th scope="col">Soyadı</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td >{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname }}</td>
                    <td class="text-center"><a href="{{ route('view.admin.user.update', $user->id) }}" class="btn btn-primary btn-sm">Edit / Update</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
            $('#usersTable').DataTable();
        } );
    </script>
@endsection
