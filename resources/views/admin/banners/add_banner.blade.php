@extends('admin.layouts.master')
@section('title', 'Add Banner')
@section('admin_content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Add Slider</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Moltran</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">Add Slider</li>
                    </ol>
                </div>
            </div>

            <!-- Form-validation -->
            <div class="row">
                <p class="alert-success">
                    <?php
                    $message = Session::get('message');
                    if($message){
                        echo $message;
                        Session::put('message',null);
                    }
                    ?>
                </p>
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Add Slider</h3></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="m-b-30">
                                        <a href="{{url('/admin/banners')}}" class="btn btn-primary">View Slider <i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class=" form">
                            <form class="cmxform form-horizontal tasi-form" method="post" action="{{url('/admin/add-banner')}}" enctype="multipart/form-data"> {{ csrf_field() }}
                                    <div class="form-group ">
                                        {{-- <label for="manufacture_name" class="control-label col-lg-2">Manufacture ID *</label> --}}
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="id" name="id" type="hidden" required>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="product_name" class="control-label col-lg-2">Slider Name *</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="slider_name" name="slider_name" type="text" required>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="selectError3" class="control-label col-lg-2"> Slider Order *</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="sort_order" name="sort_order" type="text" required>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="selectError3" class="control-label col-lg-2"> Text Style *</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="slider_text_style" name="slider_text_style" type="text" required>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="selectError3" class="control-label col-lg-2"> Slider Description *</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="content" name="content" type="text" required>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="selectError3" class="control-label col-lg-2"> Slider Link *</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="link" name="link" type="text" required>
                                        </div>
                                    </div> 
                                    
                                    
                                                                        
                                    <div class="form-group ">
                                        <label for="slider_image" class="control-label col-lg-2">Image *</label>
                                        <div class="col-lg-10">
                                            <input class="" id="slider_image" name="slider_image" type="file" required>
                                        </div>
                                    </div>

                                                                     
                                     
                                    
                                <div class="form-group ">
                                    <label for="status" class="control-label col-lg-2 col-sm-3">Publication Status</label>
                                    <div class="col-lg-10 col-sm-9">
                                        <input type="hidden" name="status" value="0"/>
                                        <input type="checkbox"  style="width: 16px"  class="checkbox form-control" id="status" name="status" value="1" {{ old('status', isset($category) ? 'checked' : '') }}/>
                                        {{-- <input type="checkbox" style="width: 16px" class="checkbox form-control" id="publication_status" name="publication_status"> --}}
                                    </div>
                                </div>
                                    

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-success waves-effect waves-light" type="submit">Add Slider</button>
                                            <button class="btn btn-default waves-effect" type="button">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- .form -->

                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->

            </div> <!-- End row -->



        </div> <!-- container -->                   
    </div> <!-- content -->    
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
@endsection
