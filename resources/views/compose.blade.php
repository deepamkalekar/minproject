@extends('layout.master')
@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="/" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="/"><i class="fa fa-inbox"></i> Inbox</a></li>
                
                
                
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div >
            

              
            </div>
            <!-- /.box-header -->
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
            <!-- /.box-header -->
            <div style="text-align:center;">
                @if (session()->has('messagee'))
                    <div class="alert alert-info">
                        {{ session('messagee') }}
                    </div>
                @endif
            </div><br>
            <form action="/submitcompose" method="post">
            {{ csrf_field() }}
            <div class="box-body">
            
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Title:" name="to" id="to">
              </div>
              
              <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" type="text" style="height: 300px" name="discription" id="discription">
                      
                    </textarea>
              </div>
              
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
            </div>
            </form>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection