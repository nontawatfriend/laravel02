@extends('layouts.master2') <!-- นำไฟล์เข้า -->
@section('title', 'Tableall') <!-- กำหนดหัวเว็บชื่อ Homepage -->
@section('content')
        <div align="center">
        <hr>   
        <h2>Show all data from mytb1</h2>
        <hr>
        
            {{-- <table border="1"> --}}
                <div  class="bgtable">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr style="background-color: #9c76b3">
                    <th><h4>ID</h4></th>
                    <th><h4>FirtName</h4></th>
                    <th><h4>LastName</h4></th>
                    <th colspan="2"><h4><a href="{{url('new')}}" class="btn btn-primary" >Insert new record <i class="fa fa-plus-circle"></i></a></h4></th>
                    </tr>
                </thead>
                @if(count($_data)>0)
                <tbody>
                    @foreach($_data as $rec)
                    <tr>
                        <td>{{$rec->id}}</td>
                        <td>{{$rec->fname}}</td>
                        <td>{{$rec->lname}}</td>
                    <td><a href="edit/{{$rec->id}}" class="btn btn-warning">Change <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                        <td><a href="delete/{{$rec->id}}" class="btn btn-danger">Remove <i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
                @endif
        </div>
@endsection