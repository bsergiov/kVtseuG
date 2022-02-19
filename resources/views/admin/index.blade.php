@extends('layouts.master')

@section('title')
    {{--@section('sidebar')--}}
    @parent
@stop
@section('content')
    <h2>Purchase Id {{!empty($subscribe) ? $subscribe[0]['status'] : "Note date"}}</h2>
    <form action="" method="POST">
        @csrf
        <div class="mb-1">
            <label for="exampleFormControlTitle" class="form-label">Purchase id</label>
            @foreach($subscribe as $value)
            <input
                type="text"
                class="form-control"
                id="exampleFormControlTitle"
                name="purchase_id_{{$value['id']}}" required
                placeholder="{{$value['purchase_id']}}"
            >
            @endforeach
        </div>
        <div class="mb-1">
            <label for="exampleFormControlTitle" class="form-label">Status</label>
            <select class="form-control" id="exampleFormControlTitle" name="status" required>
                <option value="true">true</option>
                <option value="false">false</option>
            </select>
        </div>
        <div class="mb-1">
            <label for="exampleFormControlTitle" class="form-label">KeyWord</label>
            <input type="text" class="form-control" id="exampleFormControlTitle" name="keyword" required>
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <hr>







@stop
