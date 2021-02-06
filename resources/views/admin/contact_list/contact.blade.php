@extends('admin.layouts.master')
@section('title', 'Contact')
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
                                <h4 class="pull-left page-title">Contact List</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Contact List</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    {{-- <div class="panel-heading">
                                        <h3 class="panel-title">Contact List</h3>
                                    </div> --}}
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
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="example" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">ID</th>
                                                            <th class="text-center">Name</th>
                                                            <th class="text-center">Email</th>
                                                            <th class="text-center">Phone</th>
                                                            <th class="text-center">Service Type</th>
                                                            <th class="text-center">Message</th>
                                                            {{-- <th class="text-center">Message Status</th> --}}
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
                                                        @foreach ($ContactDetails as $contact)
                                                        <tr>
                                                            <td class="text-center">{{ $contact->id }}</td>
                                                            <td class="text-center">{{ $contact->name }}</td>
                                                            
                                                            <td class="text-center">{{ $contact->email }}</td>
                                                            <td class="text-center">{{ $contact->phone }}</td>
                                                            <td class="text-center">{{ $contact->service_type }}</td>
                                                            <td class="text-center">{{ $contact->message }}</td>
                                                            {{-- <td class="text-center">
                                                                @if( $contact->message_status ==1 )
                                                                <span class="label label-success">Active</span>
                                                                @else
                                                                <span class="label label-danger">Inactive</span>
                                                                @endif
                                                            </td>                                                            --}}
                                                        </tr>
                                                        @endforeach
                                                     
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

                

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
@endsection