@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="/css/datap.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                  <div class="d-flex flex-row">
                      <div class="flex-grow-1">
                      {{ __('Data Processing') }}
                      </div>
                      <div>
                        <button class="btn btn-sm btn-primary" id="get-latest-config" @click="downloadLatestConfig">Get Latest Config</button>
                      </div>
                  </div>
              </div>
            <div class="card-body">
              <div class="container">
                <div class="stepwizard col-md-offset-3">
                    <div class="stepwizard-row setup-panel">
                      <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                        <p>Step 1</p>
                      </div>
                      <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>Step 2</p>
                      </div>
                      <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Step 3</p>
                      </div>
                      <div class="stepwizard-step">
                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                        <p>Step 4</p>
                      </div>
                      <div class="stepwizard-step">
                        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                        <p>Step 5</p>
                      </div>
                      <div class="stepwizard-step">
                        <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                        <p>Step 6</p>
                      </div>
                      <div class="stepwizard-step">
                        <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
                        <p>Step 7</p>
                      </div>
                    </div>
                  </div>

              <div role="form" action="" method="post" class="mt-4" id="add-new-case-div">
              <div class=""></div>
                @include('_includes/step-1')

                @include('_includes/step-2')

                @include('_includes/step-3')

                @include('_includes/step-4')

                @include('_includes/step-5')

                @include('_includes/step-6')

                @include('_includes/step-7')

              </div>

              </div>
            </div>
            </div>
        </div>
    </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js'></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script src="https://cdn.jsdelivr.net/g/filesaver.js"></script>

<script src="/js/multiform.js"></script>
<!-- <script src="/js/datap.js"></script> -->

@endsection
