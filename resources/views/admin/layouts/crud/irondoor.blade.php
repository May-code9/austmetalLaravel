@extends('admin.base')
@section('content')

<div class="wrapper row-offcanvas row-offcanvas-left">
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.layouts.sidebar.leftbar')

  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('aust_dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Forms</li>
      </ol>
    </section>

    <div class="col-md-8 col-md-push-2" style="padding-left:0px">
      @if(session('success_status'))
      <div class = "alert alert-success">
        <i class="fa fa-check"></i>
        {{session('success_status')}}
      </div>
      @endif

      @if(session('failure_status'))
      <div class = "alert alert-danger">
        <i class="fa fa-check"></i>
        {{session('failure_status')}}
      </div>
      @endif
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8 col-md-push-2">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Iron Door</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form role="form" method="post" action="{{ route('irondoor.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('image_title') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="image_title" id="image_title" placeholder="Image Title"/>
                    @if ($errors->has('image_title'))
                    <span class="help-block">
                      <strong>{{ $errors->first('image_title') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('project_number') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="project_number" id="project_number" maxlength="25" placeholder="Project Description"/>
                    @if ($errors->has('project_number'))
                    <span class="help-block">
                      <strong>{{ $errors->first('project_number') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    <label>Mini Image</label>
                    <input type="file" name="image" id="image" >
                    <p style="padding-left:10px">Image Ratio: 1.5 (width/height)</p>
                    @if ($errors->has('image'))
                    <span class="help-block">
                      <strong>{{ $errors->first('image') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <input type = "submit" name = "add_blog" value = "Upload Image" class = "btn btn-success" />
              </div>
            </form>
          </div><!-- /.box -->
        </div><!--/.col (left) -->
        <!-- right column -->

      </div>   <!-- /.row -->
    </section><!-- /.content -->
  </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

@endsection
