<!-- @extends('layouts.app') -->
  
@section('content')
<div class="container"   >
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"   style="background-color:#f8f8e8; width:100% ; margin-top:-7px; height:68px ">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  
                    You are a User.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
