@extends('layouts.master')

@section('content')
    
     
    

     <!-- CONTACT -->

     <section id="contact">
        <div class="container">
           <div class="row">
            <div class="col-md-12 col-sm-12">
               <div class="section-title">
                  <h2>Create Your Order</h2>
               </div>
              </div>

            <form id="contact-form" role="form" action="#" method="post">
               <div class="form-row">
                 <div class="form-group col-md-6 text-left">
                   <label for="inputEmail4">Email</label>
                      <input type="text" class="form-control" value="{{old('userid')}}" placeholder="User Id" id="cf-userid" name="userid" required="">
                       @if($errors->has('userid'))
                        <label id="userid-error" class="text-danger" for="userid">{{ $errors->first('userid') }}</label>
                       @endif
                   {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                 </div>

                 <div class="form-group col-md-6 text-left">
                  <label for="inputEmail4">Order Name</label>
                     <input type="text" class="form-control" value="{{old('userid')}}" placeholder="Order Name" id="cf-userid" name="userid" required="">
                      @if($errors->has('userid'))
                       <label id="userid-error" class="text-danger" for="userid">{{ $errors->first('userid') }}</label>
                      @endif
                  {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                </div>

                <div class="form-group col-md-6 text-left">
                  <label for="inputEmail4">Order Date</label>
                     <input type="date" class="form-control" value="{{old('userid')}}" placeholder="Order Date" id="cf-userid" name="userid" required="">
                      @if($errors->has('userid'))
                       <label id="userid-error" class="text-danger" for="userid">{{ $errors->first('userid') }}</label>
                      @endif
                  {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                </div>

                <div class="form-group col-md-6 text-left">
                  <label for="inputArticle">Article Type</label>
                  <select id="inputArticle" class="form-control">
                    <option selected>Premium</option>
                    <option>...</option>
                  </select>
                </div>

                <div class="form-group col-md-6 text-left">
                  <label for="inputOrder">Order Type</label>
                  <select id="inputOrder" class="form-control">
                    <option selected>Review</option>
                    <option>...</option>
                  </select>
                </div>

                <div class="form-group col-md-6 text-left">
                  <label for="inputEmail4">Submit Date</label>
                     <input type="date" class="form-control" value="{{old('userid')}}" placeholder="Submit Date" id="cf-userid" name="userid" required="">
                      @if($errors->has('userid'))
                       <label id="userid-error" class="text-danger" for="userid">{{ $errors->first('userid') }}</label>
                      @endif
                  {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                </div>

                <div class="form-group col-md-6 text-left">
                  <label for="inputEmail4">Required Date</label>
                     <input type="date" class="form-control" value="{{old('userid')}}" placeholder="Required Date" id="cf-userid" name="userid" required="">
                      @if($errors->has('userid'))
                       <label id="userid-error" class="text-danger" for="userid">{{ $errors->first('userid') }}</label>
                      @endif
                  {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                </div>

                <div class="form-group col-md-6 text-left">
                  <label for="inputTWC">Total Word Count</label>
                  <input type="text" class="form-control" id="inputTWC" placeholder="Total Word Count">
                </div>

                <div class="form-group col-md-6 text-left">
                  <label for="inputMK">Main Keyword</label>
                  <input type="text" class="form-control" id="inputMK" placeholder="Main Keyword">
                </div>

                <div class="form-group col-md-6 text-left">
                  <label for="inputRD">Required Document</label>
                  <input type="text" class="form-control" id="inputRD" placeholder="Required Document">
                </div>

                <div class="form-group col-md-6 text-left">
                  <label for="inputSAL">Sample Article Link</label>
                  <input type="text" class="form-control" id="inputSAL" placeholder="Sample Article Link">
                </div>

                <div class="form-group col-md-6 text-left">
                  <label for="inputOAI">Over All Instruction</label>
                  <textarea class="form-control" rows="4"  placeholder="Over All Instruction" id="cf-message" name="message" required="">{{old('message')}}</textarea>
                     @if($errors->has('message'))
                        <label id="message-error" class="text-danger" for="message">{{ $errors->first('message') }}</label>
                     @endif
                </div>
               </div>

               

                {{-- <div class="form-group col-md-6 text-left">
                  <label for="inputOAI">Over All Instruction</label>
                  <input type="text" class="form-control" id="inputOAI" placeholder="Over All Instruction">
                </div> --}}

                

               </div>
                            
               {{-- <div class="form-group text-left">
                 <div class="form-check col-md-12">
                   
                 </div>
               </div> --}}


               <div class="col-md-4 col-sm-12">
                  <input type="submit" class="form-control" name="submit" value="Submit Order">
                 @if(!empty($errors->all()))       
                  {{ implode(' | ',$errors->all()) }}
                  @elseif(\Session::has('success'))
                  {{ session('success') }}
                  @elseif(\Session::has('error'))
                  {{ session('error') }}
                   @endif
               </div>

             </form>


             
           

        </div>
     </section>


     


{{-- 
     <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
           <div class="row">
              <hr>
              <div class="col-md-12 col-sm-12">
               <div class="section-title">
                  <h2>Create Your Order</h2>
               </div>
              </div>
                 <form id="contact-form" role="form" action="#" method="post">
                    @csrf
                    <div class="col-md-4 col-sm-6">
                       <input type="text" class="form-control" value="{{old('userid')}}" placeholder="User Id" id="cf-userid" name="userid" required="">
                       @if($errors->has('userid'))
                        <label id="userid-error" class="text-danger" for="userid">{{ $errors->first('userid') }}</label>
                       @endif
                    </div>
                    <div class="col-md-4 col-sm-6">
                       <input type="text" class="form-control" value="{{old('orderName')}}" placeholder="Your Order Name" id="cf-orderName" name="orderName" required="">
                       @if($errors->has('orderName'))
                           <label id="orderName-error" class="text-danger" for="orderName">{{ $errors->first('orderName') }}</label>
                        @endif
                    </div>
                    <div class="col-md-4 col-sm-6">
                       <input type="date" class="form-control" value="{{old('orderDate')}}" id="cf-orderDate" name="orderDate" required="">
                       @if($errors->has('orderDate'))
                           <label id="orderDate-error" class="text-danger" for="orderDate">{{ $errors->first('orderDate') }}</label>
                        @endif
                    </div>
                    <div class="col-md-4 col-sm-6">
                       <label for="">Article Type</label>
                       <select class="form-control" id="cf-articleType"  name="articleType" required="">
                          <option disabled selected>Article Type</option>
                          <option value="Professional">Professional</option>
                          <option value="Premium">Premium</option>
                          <option value="Untimate">Untimate</option>
                       </select>
                       @if($errors->has('articleType'))
                           <label id="articleType-error" class="text-danger" for="articleType">{{ $errors->first('articleType') }}</label>
                        @endif
                    </div>
                    <div class="col-md-4 col-sm-6">
                     <select class="form-control" id="cf-orderType" name="orderType" required="">
                        <option disabled selected>Order Type</option>
                        <option value="Review">Review</option>
                     </select>
                     @if($errors->has('orderType'))
                         <label id="orderType-error" class="text-danger" for="orderType">{{ $errors->first('orderType') }}</label>
                      @endif
                  </div>

                  <div class="col-md-4 col-sm-6">
                     <input type="date" class="form-control" value="{{old('submitDate')}}" id="cf-submitDate" name="submitDate" required="">
                     @if($errors->has('submitDate'))
                         <label id="submitDate-error" class="text-danger" for="submitDate">{{ $errors->first('submitDate') }}</label>
                      @endif
                  </div>

                  <div class="col-md-4 col-sm-6">
                     <input type="date" class="form-control" value="{{old('requiredOn')}}" id="cf-requiredOn" name="requiredOn" required="">
                     @if($errors->has('requiredOn'))
                         <label id="requiredOn-error" class="text-danger" for="requiredOn">{{ $errors->first('requiredOn') }}</label>
                      @endif
                  </div>

                  <div class="col-md-4 col-sm-6">
                     <input type="text" class="form-control" value="{{old('totalWordCount')}}"  id="cf-totalWordCount" name="totalWordCount" placeholder="Your Total Word Count" required="">
                     @if($errors->has('totalWordCount'))
                         <label id="totalWordCount-error" class="text-danger" for="totalWordCount">{{ $errors->first('totalWordCount') }}</label>
                      @endif
                  </div>

                  <div class="col-md-4 col-sm-6">
                     <input type="text" class="form-control" value="{{old('mainKeyword')}}" id="cf-mainKeyword" name="mainKeyword" placeholder="Your main keyword" required="">
                     @if($errors->has('mainKeyword'))
                         <label id="mainKeyword-error" class="text-danger" for="mainKeyword">{{ $errors->first('mainKeyword') }}</label>
                      @endif
                  </div>

                  <div class="col-md-4 col-sm-6">
                     <input type="text" class="form-control" value="{{old('overAllInstruction')}}" id="cf-overAllInstruction" name="overAllInstruction" placeholder="Over All Instruction" required="">
                     @if($errors->has('overAllInstruction'))
                         <label id="overAllInstruction-error" class="text-danger" for="overAllInstruction">{{ $errors->first('overAllInstruction') }}</label>
                      @endif
                  </div>

                  <div class="col-md-4 col-sm-6">
                     <input type="text" class="form-control" value="{{old('sampleArticleLink')}}" id="cf-sampleArticleLink" name="sampleArticleLink" placeholder="Sample Article Link" required="">
                     @if($errors->has('sampleArticleLink'))
                         <label id="sampleArticleLink-error" class="text-danger" for="sampleArticleLink">{{ $errors->first('sampleArticleLink') }}</label>
                      @endif
                  </div>
                  <hr><br>

                  <div class="col-md-12 col-sm-12">
                     
                     <hr>
                  </div>                    
                    <div class="col-md-4 col-sm-12">
                       <input type="submit" class="form-control" name="submit" value="Submit Order">
                      @if(!empty($errors->all()))       
                       {{ implode(' | ',$errors->all()) }}
                       @elseif(\Session::has('success'))
                       {{ session('success') }}
                       @elseif(\Session::has('error'))
                       {{ session('error') }}
                        @endif
                    </div>

                 </form>                 
              </div>             
           </div>
        </div>
     </section> --}}

     
     
     
@endsection