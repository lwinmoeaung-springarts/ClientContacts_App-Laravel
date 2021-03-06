@extends('layouts.master')
@section('title','Contact Profile')

@section('content')
    <div class="container">
      
        <div class="well">
            @if(session('status'))
                <p class="alert alert-success">{{session('status')}}</p>
            @endif
          
            <form method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                    <fieldset>
                        <legend>Profile Detail</legend>
                        <img class="card-img-top" src="{{asset('/Contactimage/'.$profiledata->file)}}" style="width:265px;height:220px" alt="Image Not Found">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                    <label for="Username" class="form-label mt-4">Contact's Name</label>
                                    <input type="text" class="form-control" name="name" id="Username"  value='{{$profiledata->name}}' placeholder="contact's name">
                                    {!! $errors->first('name', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                    <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                                    <input type="email" class="form-control" name="email" value='{{$profiledata->email}}'  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    {!! $errors->first('email', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>


                                <div class="form-group {{ $errors->has('company') ? 'has-error' : ''}}">
                                <label for="companyname" class="form-label mt-4">Job Name(eg . company or own business )</label>
                                <input class="form-control" type="text" name="company" id="companyname"  value='{{$profiledata->company}}' placeholder="company's name">
                                {!! $errors->first('company', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('position') ? 'has-error' : ''}}">
                                    <label for="position" class="form-label mt-4">Position</label>
                                    <input type="text" class="form-control" name="position" id="Username" value='{{$profiledata->position}}'  placeholder="position">
                                    {!! $errors->first('position', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>
                            </div>  <!-- End Column one -->

                            <div class="col-md-6">
                               

                                <div class="form-group {{ $errors->has('phonenumber') ? 'has-error' : ''}}">
                                    <label for="text" class="form-label mt-4">Phone Number</label>
                                    <input type="text" class="form-control" name="phonenumber" id="phonenumber" value='{{$profiledata->phonenumber}}' placeholder="phone number">
                                    {!! $errors->first('phonenumber', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('phonenumber2') ? 'has-error' : ''}}">
                                    <label for="text" class="form-label mt-4">Phone Number 2</label>
                                    <input type="text" class="form-control" name="phonenumber2" id="phonenumber2" value='{{$profiledata->phonenumber2}}' placeholder="phone number2">
                                    {!! $errors->first('phonenumber2', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('file') ? 'has-error' : ''}}">
                                <label for="formFile" class="form-label mt-4">Contact's Image</label>
                                <input class="form-control" name="file" type="file" value='{{$profiledata->file}}' id="formFile">
                                {!! $errors->first('file', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group">
                                    <label for="number" class="form-label mt-4">Total Projects</label>
                                    <input type="number" class="form-control" id="number"  name="totalproject" value='{{$profiledata->totalproject}}' readonly>
                                    <small id="emailHelp" class="form-text text-muted">This number shows the total project number that working with this contact.</small>
                                </div>
                            </div>  <!-- End Column two -->
                        </div>
                        <a href="/contacts" class="btn btn-primary">Back</a>
                        @if(Auth::User()->role=='Manager' || Auth::User()->role=='Staff')
                        <button type="submit" class="btn btn-primary">Update</button>
                        @endif
                  </fieldset>
            </form>
        </div>
    </div>
   
</div><!--End Side Bar Column -->
</div>  <!--Container Main end-->

@endsection
