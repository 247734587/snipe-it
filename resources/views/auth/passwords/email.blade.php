@extends('layouts/basic')


{{-- Page content --}}
@section('content')
    <form class="form" role="form" method="POST" action="{{ url('/password/email') }}">
        {!! csrf_field() !!}
    <div class="container">
        <div class="row">



            <div class="col-md-4 col-md-offset-4">

                    <div class="box login-box">
                        <div class="box-header">
                            <h3 class="box-title"> {{ trans('auth/general.send_password_link')  }}</h3>
                        </div>


                        <div class="login-box-body">
                            <div class="row">

                                <!-- Notifications -->
                                @include('notifications')



                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                        <div class="col-md-12">
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ trans('admin/users/table.email') }}">
                                            {!! $errors->first('email', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}
                                        </div>
                                    </div>



                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">
                                {{ trans('auth/general.email_reset_password')  }}
                                </button>
                        </div>

                    </div>
            </div>
        </div>
    </div>

    </form>
@stop

