@extends('layouts.master2') <!-- นำไฟล์เข้า -->
@section('title', 'Insert') <!-- กำหนดหัวเว็บชื่อ Homepage -->
@section('content')
<style>
  a.D { color: #005CA2; 
      text-decoration: none; /* underline  อันนี้คือมีขีดเส้นใต้*/
      font-size: 1em;
      line-height: 50px;
  }
</style>
        <div align="center">
        <hr>   
        <a class="D" href="showall" >🏠 Show all data from mytb1 Back</a><h2> Insert new data <i class="fa fa-plus-circle"></i></h2>
        <hr>
            <form id="chackdata" class="form-horizontal" method="post" action="{{url('insert')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

{{--                 <div class="form-group">
                  <label class="col-sm-5 control-label">สถานที่ <span class="required">*</span></label>
                  <div class="col-sm-3 place">
                    <input type="text" class="form-control" name="place" id="place" required="required" onBlur="chkplace();"></input>
                  </div>
                </div> --}}

                <div class="form-group">
                  <label for="id" class="col-sm-5 control-label">ID :</label>
                  <div class="col-sm-3 id">
                    <input type="text" name="id" maxlength="5" class="form-control" id="id" placeholder="ID" required="required" onBlur="chkid();">
                  </div>
                </div>
                <div class="form-group">
                  <label for="fname" class="col-sm-5 control-label">FirtName :</label>
                  <div class="col-sm-3 fname">
                    <input type="text" name="fname" class="form-control" id="fname" placeholder="ชื่อ" required="required" onBlur="chkfname();">
                  </div>
                </div>
                <div class="form-group">
                    <label for="lname" class="col-sm-5 control-label">LastName :</label>
                    <div class="col-sm-3 lname">
                      <input type="text" name="lname" class="form-control" id="lname" placeholder="นามสกุล" required="required" onBlur="chklname();">
                    </div>
                  </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-8">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-default" onClick="confirmdata();">Save</button>
                  </div>
                </div>
              </form>
              {{--<br>
                 <form method="post" action="{{url('insert')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label for="id">ID :</label>
                    <input type="text" name="id" calss="form-control">
                </div>
                <div class="form-group">
                    <label for="fname">FirtName :</label>
                    
                    <input type="text" name="fname" calss="form-control">
                </div>
                <div class="form-group">
                    <label for="lname">LastName :</label>
                    <input type="text" name="lname" calss="form-control">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
             --}}
        </div>
        <script>
          	function chkid(){
              if(document.getElementById('id').value == "")
              {
                  //alert('กรุณากรอกวันที่คืนด้วย');
                //$('#id').focus();
                $('#chackdata .id').addClass('has-error');
                $('#chackdata .id').removeClass('has-success');
                return false;
                }else{
                $('#chackdata .id').addClass('has-success');
                $('#chackdata .id').removeClass('has-error');
              }
            }
            function chkfname(){
              if(document.getElementById('fname').value == "")
              {
                  //alert('กรุณากรอกวันที่คืนด้วย');
                //$('#fname').focus();
                $('#chackdata .fname').addClass('has-error');
                $('#chackdata .fname').removeClass('has-success');
                return false;
                }else{
                $('#chackdata .fname').addClass('has-success');
                $('#chackdata .fname').removeClass('has-error');
              }
            }
            function chklname(){
              if(document.getElementById('lname').value == "")
              {
                  //alert('กรุณากรอกวันที่คืนด้วย');
                //$('#lname').focus();
                $('#chackdata .lname').addClass('has-error');
                $('#chackdata .lname').removeClass('has-success');
                return false;
                }else{
                $('#chackdata .lname').addClass('has-success');
                $('#chackdata .lname').removeClass('has-error');
              }
            }
            function confirmdata(){
              if(document.getElementById('id').value == "")
              {
                  chkplace();
              $('#id').focus();
              return false;
              }
              if(document.getElementById('fname').value == "")
              {
                  chkplace();
              $('#fname').focus();
              return false;
              }
              if(document.getElementById('lname').value == "")
              {
                  chkplace();
              $('#lname').focus();
              return false;
              }
            }
        </script>

@endsection