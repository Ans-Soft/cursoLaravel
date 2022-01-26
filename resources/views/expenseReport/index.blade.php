@extends('layouts.base')

@section('content')

    <div class="row">
         <div class="col">
            <h1>Reports</h1>
         </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="expense_reports/create">Create new report</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if(session('success'))
            <div class="alert alert-success">   
                {{ session('success')}}
            </div>
            @endif
            {{session('success') }}
            <table class="table">
                @foreach($expenseReports as $expenseReport)
                    <tr>
                        <td> <a href="/expense_reports/{{ $expenseReport->id }}">{{$expenseReport->title}}</a></td>
                        <td> <a href="/expense_reports/{{ $expenseReport->id }}/edit">Edit</a></td>
                        <td> <a href="/expense_reports/{{ $expenseReport->id }}/confirmDelete">Delete</a> </td>
                    </tr>
                @endforeach
            </table>
        </div> 
    </div>