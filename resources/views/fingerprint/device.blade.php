@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="row">
			<div class="col-md-12">
                <a href="{{ route('device.create') }}" class="btn btn-success">Add</a>
			</div>
		</div>
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Device</th>
                            <th scope="col">SN</th>
                            <th scope="col">VC</th>
                            <th scope="col">AC</th>
                            <th scope="col">VKey</th>
                            <!-- <th scope="col">Dibuat</th>
                            <th scope="col">Diperbarui</th> -->
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($device as $devices)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            {{-- <td> <code>{{ $devices->device_name}} </code></td> --}}
                            {{-- <td><code> {{ $devices->sn }} </code></td>
                            <td> <code>{{ $devices->vc }}</code></td>
                            <td> <code>{{ $devices->ac }} </code></td>
                            <td> <code> {{ $devices->vkey }} </code></td> --}}
                            <td> <code><?php echo $devices['device_name'] ?> </code></td>
                            <td> <code><?php echo $devices['sn'] ?> </code></td>
                            <td> <code><?php echo $devices['vc'] ?> </code></td>
                            <td> <code><?php echo $devices['ac'] ?> </code></td>
                            <td> <code><?php echo $devices['vkey'] ?> </code></td>
                            {{-- <!-- <td>{{ $devices->created_at }} </td> --}}
                            {{-- <td>{{ $devices->updated_at }}</td> --> --}}
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection