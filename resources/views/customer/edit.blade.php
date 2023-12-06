@extends('layouts.app', ['page' => __('Edit Customer'), 'pageSlug' => 'customer'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h5 class="title">{{ __('Edit Customer') }}</h5>
            </div>
            @foreach($customer as $cus)
            <form method="post" action="/Customer/Edit/{{ $cus->customer_id }}" autocomplete="off">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('alerts.success')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('customer_name') ? ' has-danger' : '' }}">
                                <label>{{ __('Nama') }}</label>
                                <input autocomplete="off" value="{{ $cus->customer_name }}" type="text" name="customer_name" class="form-control{{ $errors->has('customer_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nama') }}">
                                @include('alerts.feedback', ['field' => 'customer_name'])
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                <label>{{ __('Alamat') }}</label>
                                <input autocomplete="off" value="{{ $cus->address }}" type="text" name="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="{{ __('Alamat') }}">
                                @include('alerts.feedback', ['field' => 'suplier_address'])
                            </div>
                            <div class="form-group{{ $errors->has('contact') ? ' has-danger' : '' }}">
                                <label>{{ __('Kontak') }}</label>
                                <input autocomplete="off" value="{{ $cus->contact }}" type="tel" name="contact" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" placeholder="{{ __('Kontak') }}">
                                @include('alerts.feedback', ['field' => 'contact'])
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('membership_number') ? ' has-danger' : '' }}">
                                <label>{{ __('No Member') }}</label>
                                <input autocomplete="off" value="{{ $cus->membership_number }}" type="text" name="membership_number" class="form-control{{ $errors->has('membership_number') ? ' is-invalid' : '' }}" placeholder="{{ __('No Member') }}">
                                @include('alerts.feedback', ['field' => 'membership_number'])
                            </div>
                            <div class="form-group{{ $errors->has('expected_date') ? ' has-danger' : '' }}">
                                <label>{{ __('Berlaku Hingga') }}</label>
                                <input autocomplete="off" value="{{ $cus->expected_date }}" type="date" name="expected_date" class="form-control{{ $errors->has('expected_date') ? ' is-invalid' : '' }}" placeholder="{{ __('Catatan') }}">
                                @include('alerts.feedback', ['field' => 'expected_date'])
                            </div>
                            <div class="form-group{{ $errors->has('note') ? ' has-danger' : '' }}">
                                <label>{{ __('Catatan') }}</label>
                                <input autocomplete="off" value="{{ $cus->note }}" name="note" class="form-control{{ $errors->has('note') ? ' is-invalid' : '' }}" placeholder="{{ __('Catatan') }}"></note>
                                @include('alerts.feedback', ['field' => 'note'])
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
@endsection
