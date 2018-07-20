@extends('backend.layouts.app')

@section('content')
<header class="section-header">
  <div class="tbl">
    <div class="tbl-row">
      <div class="tbl-cell">
        <h3>Register New Teacher</h3>
        <div class="subtitle">Add New Teacher</div>
      </div>
    </div>
  </div>
</header>
<section class="tabs-section">
  <div class="tabs-section-nav">
   <div class="tbl">
    <ul class="nav nav-justified" role="tablist">
     <li class="nav-item">
      <a class="nav-link active" href="#tabs-1-tab-1" role="tab" data-toggle="tab">
       <span class="nav-link-in">
        Basic Information
      </span>
    </a>
  </li>
</ul>
</div>
</div><!--.tabs-section-nav-->

<div class="tab-content">
 <div role="tabpanel" class="tab-pane fade in active show" id="tabs-1-tab-1">
  {{Form::open(['route' => 'admin.planner.restaurant.create', 'enctype' => 'multipart/form-data', 'id' => 'needs-validation', 'method' => 'POST','novalidate'=> ''])}}
    <h4 class="ui header">Student Information</h4>
    <div class="row">
    <div class="col-md-4">
    <fieldset class="form-group">
    {{-- {{Form::label('Admission No', 'Admission No')}}
    {{Form::text('admission_no', $last_admission, ['placeholder' => 'Admission No','class' => 'form-control','readonly','required' => 'required'])}}
    </fieldset> --}}
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {{Form::label('Admission date', 'Admission date')}}
    {{Form::text('admission_date', date('Y-m-d'), ['placeholder' => 'Admission date','class' => 'form-control','readonly','required' => 'required'])}}
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {{Form::label('Student  ID', 'Student  ID')}}
    {{Form::text('student_id', null, ['placeholder' => 'Student  ID','class' => 'form-control','required' => 'required'])}}
    </fieldset>
    </div>
    </div>
    <div class="ui divider"></div>
    <h4 class="ui header">Parent Information</h4>
    <div class="row">
    <div class="col-md-4">
    <fieldset class="form-group">
    {{Form::label('First name', 'First name')}}
    {{Form::text('first_name', null, ['class' => 'form-control','placeholder' => 'First Name','required' => 'required'])}}
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {{Form::label('Middle name', 'Middle name')}}
    {{Form::text('middle_name', null, ['class' => 'form-control','placeholder' => 'Middle name','required' => 'required'])}}
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {{Form::label('Last name', 'Last name')}}
    {{Form::text('last_name', null, ['class' => 'form-control','placeholder' => 'Last Name','required' => 'required'])}}
    </fieldset>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4">
    <fieldset class="form-group">
    {{-- {!! Form::Label('Batch', 'Batch') !!}
    {{ Form::select('batch_id', $batch, null, ['placeholder' => trans('Choose Batch'),'class' => 'form-control','required' => 'required']) }}
    </fieldset> --}}
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {{-- {!! Form::Label('Student Category', 'Student Category') !!}
    {{ Form::select('category_id', $category, null, ['placeholder' => trans('Choose Category'),'class' => 'form-control','required' => 'required']) }} --}}
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {{Form::label('Gender', 'Gender')}}
    {{Form::select('gender', array( '' => 'Select', 'male' => 'Male', 'female' => 'Female'),null, ['class' => 'form-control','required' => 'required'])}}
    </fieldset>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4">
    <fieldset class="form-group">
    {!! Form::Label('Email', 'Email') !!}
    {{ Form::email('email',null,  ['placeholder' => trans('Email'),'class' => 'form-control','required' => 'required']) }}
     <div class="invalid-feedback">
        Please provide a valid and unique Email.
      </div>
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {{Form::label('Phone 1', 'Phone 1')}}
    {{Form::text('phone1', null, ['placeholder' => 'Phone 1','class' => 'form-control','required' => 'required'])}}
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {{Form::label('Phone 2', 'Phone 2')}}
    {{Form::text('phone2', null, ['placeholder' => 'Phone 2','class' => 'form-control','required' => 'required'])}}
    </fieldset>
    </div>
    </div>
    <div class="ui divider"></div>
    <h4 class="ui header">A header</h4>
    <div class="row">
    <div class="col-md-4">
    <fieldset class="form-group">
    {!! Form::Label('Parent Email', 'Parent Email') !!}
    {{ Form::email('parent_email',null,  ['placeholder' => trans('Parent Email'),'class' => 'form-control','required' => 'required']) }}
     <div class="invalid-feedback">
        Please provide a valid and unique Email.
      </div>
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {{Form::label('first name', 'first name')}}
    {{Form::text('parent_first_name', null, ['placeholder' => 'first name','class' => 'form-control','required' => 'required'])}}
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {{Form::label('Last name', 'Last name')}}
    {{Form::text('parent_last_name', null, ['placeholder' => 'Last name','class' => 'form-control','required' => 'required'])}}
    </fieldset>
    </div>
    </div>
    <div class="ui divider"></div>
    <div class="row">
    <div class="col-md-4">
    <fieldset class="form-group">
    {{Form::label('date_of_birth', 'Date of birth')}}
    {{Form::text('date_of_birth', null, ['placeholder' => 'Date of birth','class' => 'form-control','required' => 'required'])}}
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {!! Form::Label('Blood group', 'Blood group') !!}
    {{ Form::select('blood_group', array( 'select' => 'select', 'A+' => 'A+', 'A-' => 'A-','B+' => 'B+', 'B-' => 'B-','O+' => 'O+', 'O-' => 'AB-','AB+' => 'O+', 'AB-' => 'AB-'),null, ['class' => 'form-control']) }}
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {{Form::label('Birth place', 'Birth place')}}
    {{Form::text('birth_place', null, ['class' => 'form-control','placeholder' => 'Birth place'])}}
    </fieldset>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4">
    <fieldset class="form-group">
    {{-- {!! Form::Label('Nationality', 'Nationality') !!}
    {{ Form::select('nationality_id',  $country,null,['placeholder' => trans('select'),'class' => 'form-control']) }} --}}
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {{Form::label('Language', 'Language')}}
    {{Form::text('language', null, ['placeholder' => 'Language','class' => 'form-control'])}}
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {!! Form::Label('Religion', 'Religion') !!}
    {{ Form::text('religion',null,  ['placeholder' => trans('Religion'),'class' => 'form-control']) }}
    </fieldset>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4">
    <fieldset class="form-group">
    {{Form::label('Address Line 1', 'Address Line 1')}}
    {{Form::text('address_line1', null, ['placeholder' => 'Address Line 1','class' => 'form-control'])}}
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {!! Form::Label('Address Line 2 ', 'Address Line 2 ') !!}
    {{ Form::text('address_line2',null,  ['placeholder' => trans('Address Line 2 '),'class' => 'form-control']) }}
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {!! Form::Label('City', 'City') !!}
    {{ Form::text('city',null,  ['placeholder' => trans('City'),'class' => 'form-control']) }}
    </fieldset>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4">
    <fieldset class="form-group">
    {{Form::label('State', 'State')}}
    {{Form::text('state', null, ['placeholder' => 'State','class' => 'form-control'])}}
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {!! Form::Label('Pin code', 'Pin code') !!}
    {{ Form::text('pin_code',null,  ['placeholder' => trans('Pin code'),'class' => 'form-control']) }}
    </fieldset>
    </div>
    <div class="col-md-4">
    <fieldset class="form-group">
    {{-- {!! Form::Label('Country id', 'Country id') !!}
    {{ Form::select('country_id', $country,null,['placeholder' => trans('select'),'class' => 'form-control']) }} --}}
    </fieldset>
    </div>
    </div>
    </div>
    <div class="row">
  <div class="col-md-4">
  <fieldset class="form-group">
    <label class="custom-file">
      {{ Form::file('photos'),null,[ 'placeholder' => 'Photo', 'class' => 'custom-file-input'] }}
      <span class="custom-file-control"></span>
    </label>
    </fieldset>
  </div>
</div>
    {{Form::submit('Create Student', ['class' => 'btn btn-success'])}}
    {{Form::close()}}
</div><!--.tab-pane-->

</div><!--.tab-content-->
</section><!--.tabs-section-->

@endsection
 @stack('before-styles')
 {{ style('css/lib/flatpickr/flatpickr.min.css') }}
 {{ style('css/separate/vendor/flatpickr.min.css') }}
 @stack('after-styles')
@push('after-scripts')
{!!script('js/lib/flatpickr/flatpickr.min.js') !!}
<script>
(function($) {
  'use strict';
  window.addEventListener('load', function() {
    var form = document.getElementById('needs-validation');
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  }, false);
  $('.flatpickr').flatpickr();
      $("#flatpickr-disable-range").flatpickr({
        disable: [
          {
            from: "2016-08-16",
            to: "2016-08-19"
          },
          "2016-08-24",
          new Date().fp_incr(30) // 30 days from now
        ]
      });
})(jQuery);
</script>
@endpush
