@extends('admin.layouts.master')
@section('title', 'Banners')
@section('admin_content')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Slider List</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Slider List</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Slider List</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p class="alert-success">
                                            <?php
                                            $message = Session::get('message');
                                            if($message){
                                                echo $message;
                                                Session::put('message',null);
                                            }
                        
                                            ?>
                                        </p>
                                        <div class="row">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="m-b-30">
                                                        <a href="{{url('/admin/add-banner')}}" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
                                                    {{-- <a href="{{url('/category')}}" id="addToTable" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="example" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">ID</th>
                                                            <th class="text-center">Name</th>
                                                            <th class="text-center">Image</th>
                                                            <th class="text-center">Sorting</th>
                                                            <th class="text-center">Content</th>
                                                            <th class="text-center">Link</th>
                                                            <th class="text-center">Status</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
                                                        {{-- @foreach ($sliderDetails as $slider)
                                                        <tr>
                                                            <td class="text-center">{{ $slider->id }}</td>
                                                            <td class="text-center">{{ $slider->name }}</td>
                                                            <td class="text-center">
                                                                @if (!@empty($slider->image ))
                                                                    <img src="{{ URL::to($slider->image ) }}"
                                                                        alt="" style="width: 50px; height: 50px;">
                                                                @endif
                                                            </td>
                                                            <td class="text-center">{{ $slider->sort_order }}</td>
                                                            <td class="text-center">{{ $slider->content }}</td>
                                                            <td class="text-center">{{ $slider->link }}</td>
                                                            <td class="text-center">{{ $slider->status }}</td>
                                                            
                                                            <td class="text-center">
                                                                @if( $slider->status ==1 )
                                                                <span class="label label-success">Active</span>
                                                                @else
                                                                <span class="label label-danger">Inactive</span>
                                                                @endif
                                                            </td>
                                                            <td class="text-center">
                                                                @if( $slider->status ==1 )
                                                                <a href="{{url('/unactive-slider/'.$slider->id)}}" class="on-default edit-row btn-success btn-sm"><i class="fa fa-thumbs-down"></i></a>
                                                                @else
                                                                <a href="{{url('/active-slider/'.$slider->id)}}" class="on-default edit-row btn-danger btn-sm"><i class="fa fa-thumbs-up"></i></a>
                                                                @endif
                                                                
                                                                <a href="{{url('/edit-slider/'.$slider->id)}}" class="on-default edit-row btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                                                <a href="{{url('/delete-slider/'.$slider->id)}}" class="on-default remove-row btn-danger btn-sm" id="delete"><i class="fa fa-trash-o"></i></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                      --}}
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- End Row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2020 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


          

            
@endsection
