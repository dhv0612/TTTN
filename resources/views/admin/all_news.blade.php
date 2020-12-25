@extends('admin_layout')
@section('admin_content')





<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="title-operator">All news</h3>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">All News </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header" style="    text-align: center;">
              
                                   
                                        <?php
                                        $message = Session::get('message');
                                        if ($message) {
                                        if ($message == 'Update new fail') {
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
                         
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Image(s)</th>
                                            <th>URL</th>
                                            <th>Operator</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       @foreach ($all_news as $key=> $news)
                                       <tr>
                                        <td>{{$news->title}}</td>
                                        <td>{{$news->content}}</td>
                                        <td><img src="public/upload/news/{{$news->newsimage}}" height = "100" width="300"></td>
                                        <td>{{$news->newsurl}}</td>
                                        <td>
                                            <a href="{{URL::to('/edit-news/'.$news->newsid)}}">
                                                <i class="fas fa-pen edit"></i> 
                                            </a>||
                                            <a href="{{URL::to('/delete-news/'.$news->newsid)}}" onclick="return confirm('Do you want delete ?')">
                                                <i class="fas fa-trash-alt delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                       @endforeach

                                    </tbody>
                                    {{-- <tfoot>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </tfoot> --}}
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

 


@endsection
