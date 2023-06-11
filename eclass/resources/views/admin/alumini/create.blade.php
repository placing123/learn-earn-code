@extends('admin.layouts.master')
@section('title', 'Alumini  - Admin')
@section('maincontent')
<?php
$data['heading'] = 'Dashboard';
$data['title'] = 'Alumini';
$data['title1'] = 'Add Alumini';
?>
@include('admin.layouts.topbar',$data)
<div class="contentbar">
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
        <p>{{ $error}}<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" class="text-danger">&times;</span></button></p>
        @endforeach
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card dashboard-card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">{{ __('Alumini') }}</h5>
                    <div>
                        <div class="widgetbar">
                          <a href="{{url('alumini')}}" class="btn btn-primary-rgba"><i class="feather icon-arrow-left mr-2"></i>{{ __("Back")}}</a>
                      
                        </div>
                      </div>
                </div>
                <div class="card-body">
                    <form class="form" action="{{ route('alumini.store') }}" method="POST" novalidate
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="text-dark" for="user_id">{{ __('Select User') }}: </label>
                            <select  class="form-control select2" name="user_id">
                              <option value="none" selected disabled hidden>
                                {{ __('Please') }}{{ __('Select an Option') }}
                              </option>
                              @foreach ($users as $user)
                              <option value="{{ $user->id }}">{{ $user->fname }}</option>
                              @endforeach
                            </select>
                          </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i>
                                {{ __("Reset")}}</button>
                            <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                {{ __("Create")}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection