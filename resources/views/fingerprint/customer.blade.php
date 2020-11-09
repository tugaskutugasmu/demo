@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="row">
			<div class="col-md-12">
                <a href=" {{route('user.create.ui')}} " class="btn btn-success">Add</a>
			</div>
		</div>
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama </th>
                            <!-- <th scope="col">Dibuat</th>
                            <th scope="col">Diperbarui</th> -->
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($customer as $users)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td> <code><?php echo $users['name']?> </code></td>
                            {{-- <!-- <td>{{ $users->created_at }} </td> --}}
                            {{-- <td>{{ $users->updated_at }}</td> --> --}}
                            <td> <code>
                            <a href="#" class="btn btn-danger">Delete</a>
                            <a href=""></a>
                            </code> </td>
                            
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection