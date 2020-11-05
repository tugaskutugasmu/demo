@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <form action="{{ route('device.create')}}" method="POST" >
                    <div class="modal-body">
                        <div class="form-group">
                            <label >Device Name</label>
                            <input type="text"  name="device_name"  class="form-control" placeholder="Enter Name">
                            <label >Device SN</label>
                            <input type="text" name="sn" class="form-control" placeholder="Enter SN">
                            <label for="vc">Device VC</label>
                            <input type="text" name="vc"  class="form-control" placeholder="Enter VC">
                            <label for="ac">Device AC</label>
                            <input type="text" name="ac" class="form-control" placeholder="Enter AC">
                            <label for="vkey">Device VKEY</label>
                            <input type="text" name="vkey"  class="form-control" placeholder="Enter VKEY">
                        </div>
                    </div>    
                    <div class="modal-footer">
                    <a href="{{route('device.ui')}}" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-success" >Save</button>
                    @method('post')
                    @csrf
                    </div>
                </form>
			</div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection