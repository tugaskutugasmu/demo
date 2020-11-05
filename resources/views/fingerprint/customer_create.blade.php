@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <form action="{{ route('user.create')}}" method="POST" >
                    <div class="modal-body">
                        <div class="form-group">
                            <label >Name</label>
                            <input type="text"  name="name"  class="form-control" placeholder="Enter Name">
                        </div>
                    </div>    
                    <div class="modal-footer">
                    <a href="{{route('user.ui')}}" class="btn btn-danger">Back</a>
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