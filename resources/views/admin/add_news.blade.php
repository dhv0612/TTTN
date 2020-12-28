@extends('admin_layout')
@section('admin_content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="title-operator">Add news</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add News </li>
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
                            <h3 class="card-title">Add News</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ URL::to('/save-news') }}" method="post" id="quickForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" required
                      
                                        placeholder="Enter title">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Link</label>
                                    <input type="url" name="newsurl" class="form-control" id="exampleInputPassword1"
                                        required oninvalid="this.setCustomValidity('You cannot leave the link blank')" placeholder="Enter URL">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Content</label>
                                    <textarea name="content" class="form-control" id="exampleInputPassword1" required
                                    oninvalid="this.setCustomValidity('You cannot leave the content blank')" placeholder="Enter content"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label>
                                    <input type="file" name="newsimage" class="form-control" id="exampleInputEmail1" required
                                    oninvalid="this.setCustomValidity('You cannot leave the file blank')" style="border: none"x`  >
                                </div>
                            </div>

                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-primary">Add news</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php
                                        $message = Session::get('message');
                                        if ($message) {
                                        if ($message == 'Add new fail') {
                                        echo '<span style="color: red;
                                                    font-style: bold;                                                
                                                    font-weight: bold;
                                                    font-size: 21px;" ;>',
                                            $message,
                                            '</span>';
                                        } else {
                                        echo '<span style="color: blue;
                                                font-style: bold;
                                                
                                                font-weight: bold;
                                                font-size: 21px;" ;>',
                                            $message,
                                            '</span>';
                                        }

                                        Session::put('message', null);
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </form>
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
