@extends('admin.layouts.master')
@section('title','Order')
@section('maincontent')
<?php
$data['heading'] = 'Order';
$data['title'] = 'Order';
$data['title1'] = 'Order';
?>
@include('admin.layouts.topbar',$data)
<div class="contentbar">
  <div class="row">
    <div class="col-md-12">
      <div class="card dashboard-card m-b-30">
        <div class="card-header">
          <h5 class="card-box">{{ __('Orders') }}</h5>
          <div>
            <div class="widgetbar">
              @can('orders.manage')
              <a href="{{route('order.create')}}" class="btn btn-primary-rgba mr-2"><i class="feather icon-plus mr-2"></i>{{ __('Enroll User') }}</a>
              <a href="{{ route('order.fileexport') }}" class="btn btn-primary-rgba"> <i class="feather icon-download mr-2"></i>{{ __('Export Offline Payments') }}</a>
              @endcan
            </div>
          </div>
        </div>
        <div class="card-body">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                aria-controls="pills-home" aria-selected="true">{{ __('Order') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                aria-controls="pills-profile" aria-selected="false">{{ __('Refund Order') }}</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              @include('admin.order.index')
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              @include('admin.refund_order.index')
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection