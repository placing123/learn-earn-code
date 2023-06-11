@extends('admin.layouts.master')
@section('title', 'Instructor Subscription Settings - Admin')
@section('maincontent')
<?php
$data['heading'] = 'Instructor Subscription Settings';
$data['title'] = 'Instructor Subscription Settings';
?>
@include('admin.layouts.topbar',$data)
<div class="contentbar">
    <div class="row">
      <div class="col-lg-12">
        <div class="card dashboard-card m-b-30">
          <div class="card-header">
            <h5 class="card-title">{{ __("Instructor Subscription Settings")}} </h5>
          </div>
          <div class="card-body">
            
            <form action="{{ action('SubscriptionEnableController@settings') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('POST') }}
            
            <div class="row">
              <div class="form-group col-md-6">
                <div class="row">
                  <div class="col-lg-6">
                    <label class="mb-0" for="">{{ __('InstructorSubscription') }}: </label>
                    <div>
                      <small class="text-info">({{ __('Enable Instructor subcription plans') }})</small>
                        
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <input  class="custom_toggle" {{ old('purchase_code') ? "checked" : "" }} type="checkbox"  id="subscription" name="ENABLE_INSTRUCTOR_SUBS_SYSTEM" {{ env('ENABLE_INSTRUCTOR_SUBS_SYSTEM') == 1 ? 'checked' : '' }} />
              
                  </div>
                </div>
                <div class="{{ !old('purchase_code') ? "d-none" : "" }} form-group mt-4" id="code">
                
                    <label for="validationCustom02">{{ __('Purchase Code') }}:<sup class="redstar">*</sup></label>
                    <input name="purchase_code" type="password" class="form-control" id="validationCustom02" placeholder="{{ __('Enter envanto purchase code') }}" value="{{ old('purchase_code') }}" autocomplete="off" required>
                    

                  <small class="text-info"><i class="fa fa-question-circle"></i>{{ __('Enter envanto purchase code') }} .</small>
                
             </div>

                  @if($errors->any())
                  <h6 class="text-danger alert alert-error">{{$errors->first()}}</h6>
                @endif
              @error('code')
              <div class="invalid-feedback">
                {{$message}}
              </div> 
              @enderror 

             
           <div class="form-group mt-4">
                <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> {{ __("Reset")}}</button>
                <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                {{ __("Update")}}</button>
            </div>

           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection
@section('scripts')
<script>
 "use strict";
    $('#subscription').on('change',function(){
      if($('#subscription').is(':checked')){
        $('#code').addClass('d-block').removeClass('d-none');
      }else{
        $('#code').addClass('d-none').removeClass('d-block');
      }
    });
  </script>
  @endsection