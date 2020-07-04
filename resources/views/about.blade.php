@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row block">
          <div class="col-lg-9">
            <ul class="breadcrumb">
              <li class="breadcrumb-item" href=""></li>
              <li class="breadcrumb-item">About Us</li>
            </ul>
            <h1>About <?php echo Config::get('app.name'); ?></h1>
            <p class="lead">This organization was created by a group of zealous people seeking to promote human welfare and provide a springboard for individuals and corporate organizations alike to thrive via financial empowerment.</p>
            <p style="text-align:justify">It is a well known fact that there is a huge gap between the rich and the poor. Our organization aims to significantly reduce that gap with the aim of creating a platform that enables all our members attain a higher standard of living and all round financial freedom. This works by evenly distributing all investments among members to bring everybody up at the same time.</p>
            <p style="text-align:justify">Join our organization today and say goodbye to poverty and financial struggles.</p>
          </div>
        </div>
        <div class="row d-flex align-items-center block">
          <div class="col-lg-6 text">
            <p>You are already a winner with <?php echo Config::get('app.name'); ?>, what can be lacking, is the start-up investment. We, at <?php echo Config::get('app.name'); ?>, are convinced that through our on-line system you will be able to achieve your personal, professional and financial goals.</p>
          </div>
        </div>
@endsection
