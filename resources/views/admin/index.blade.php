@extends('layouts.master')
{{--@extends('layouts.app')--}}
@extends('layouts.navigation')


@section('title')
    {{--@section('sidebar')--}}
    @parent
@stop
@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
        </div>
    @endif
{{--    status --}}
    <form action="{{route('status.update', '1')}}" method="POST">
        @csrf
        @method("PUT")
        <label for="exampleFormControlTitle" class="form-label mt-3 mb-1">Status</label>
        <div class="row">
            <div class="col-md-10">
                <select class="form-control" id="exampleFormControlTitle" name="status" required>
                    <option value="{{$status ? "true" : "false"}}">{{$status ? "true" : "false"}}</option>
                    <option value="true">true</option>
                    <option value="false">false</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
{{--    Purchase id --}}
<label for="exampleFormControlTitle" class="form-label mt-3 mb-0">Purchase id</label>
@foreach($subscriptions as $subscribe)
    <form action="{{route('admin.update', $subscribe['id'])}}" method="POST">
        @csrf
        @method("PUT")
        <div class="row mt-1">
            <div class="col-md-10">
                <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlTitle"
                    name="purchase_id" required
                    value="{{$subscribe['purchase_id']}}"
                >
            </div>
           <div class="col-md-2">
               <button type="submit" class="btn btn-success">Update</button>
           </div>
        </div>

    </form>
@endforeach
    <hr>
@stop
