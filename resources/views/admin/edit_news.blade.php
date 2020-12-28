@extends('admin_layout')
@section('admin_content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="title-operator">Edit news</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit News </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit News</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach ($edit_news as $key=>$edit_value)
                            <form role="form" action="{{ URL::to('/update-news/'.$edit_value->newsid) }}" method="post" id="quickForm"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                            required oninvalid="this.setCustomValidity('You cannot leave the title blank')"
                                            value="{{$edit_value->title}}" placeholder="Enter title">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Link</label>
                                        <input type="url" name="newsurl" class="form-control" id="exampleInputPassword1"
                                            required oninvalid="this.setCustomValidity('You cannot leave the link blank')"
                                            value="{{$edit_value->newsurl}}" placeholder="Enter URL">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Content</label>
                                        <textarea name="content" class="form-control" id="exampleInputPassword1" required
                                            oninvalid="this.setCustomValidity('You cannot leave the content blank')"
                                             placeholder="Enter content">{{$edit_value->content}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label>
                                        <input type="file" name="newsimage" class="form-control" id="exampleInputEmail1" style="border: none">
                                            <img src="{{URL::to('public/upload/news/'.$edit_value->newsimage)}}" height="100" width="300">
                                    </div>
                                </div>

                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-primary">Update news</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </form>
                        @endforeach

                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
