@extends('frontend.default.layouts.app')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start">
            @include('frontend.default.user.client.inc.sidebar')
            <div class="aiz-user-panel">
                <div class="aiz-titlebar mb-4">
                    <div class="row align-items-center">
                        <div class="col">
                            <h1 class="fs-16 fw-700">{{ translate('Cancel Service') }} - {{ $purchased_service->servicePackage->service->title }}</h1>
                        </div>
                    </div>
                </div>
                <div class="card rounded-2 border-gray-light">
                    <div class="card-header">
                        <h2 class="text-dark h6 fw-600 mb-0">{{ translate('Send Project Cancel Request') }}</h2>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('services.cancel.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="purchased_service_id" value="{{ $purchased_service->id }}">
                            <div class="form-group">
                                <label class="form-label">
                                    {{translate('Why do you want to Cancel?')}}
                                    <span class="text-danger">*</span>
                                </label>
                                <textarea class="form-control form-control-sm editor" rows="3" name="cancel_reason" required data-buttons="bold,underline,italic,|,ul,ol,|,undo,redo"></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1 rounded-1">{{translate('Send Request')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
