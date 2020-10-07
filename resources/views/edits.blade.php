@extends('layouts.master2') <!-- นำไฟล์เข้า -->
@section('title', 'Edit') <!-- กำหนดหัวเว็บชื่อ Homepage -->
@section('content')
<div align="center">
    <hr>   
    <h2>Edit data <i class="fa fa-plus-circle"></i></h2>
    <hr>
    <form class="form-horizontal" method="post" action="{{url('/edits')}}/<?php echo $_data[0]->id; ?>">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-5 control-label">ID :</label>
          <div class="col-sm-3">
            <input type="hidden" name="id" maxlength="5" class="form-control" id="id" value="{{$_data[0]->id}}">
          <input type="text" name="id_new" maxlength="5" class="form-control" id="id_new" value="{{$_data[0]->id}}" placeholder="" required="required">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-5 control-label">FirtName :</label>
          <div class="col-sm-3">
            <input type="text" name="fname" class="form-control" id="fname" value="{{$_data[0]->fname}}" placeholder="" required="required">
          </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-5 control-label">LastName :</label>
            <div class="col-sm-3">
              <input type="text" name="lname" class="form-control" id="lname" value="{{$_data[0]->lname}}" placeholder="" required="required">
            </div>
          </div>
{{--         <div class="form-group">
          <div class="col-sm-offset-2 col-sm-8">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Remember me
              </label>
            </div>
          </div>
        </div> --}}
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-8">
            <button type="submit" class="btn btn-primary">Change</button>
          </div>
        </div>
      </form>
@endsection