@extends('layouts.base')

@section('content')

    <div class="row">
         <div class="col">
            <h1>Edit Report {{ $report->id }}</h1>
         </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $err)
                            <li>{{ $err}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif 
            <form action="/expense_reports/{{$report->id}}" method="POST">
                @csrf
                @method("put")
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="type a title" value="{{ old('title',$report->title)}}">
                </div>
                <button class="btn btn-primary" type="submit"> submit</button>
            </form>
        </div> 
    </div>