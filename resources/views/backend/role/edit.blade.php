@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Update Role
                </div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{ route('app.roles.index') }}" class="shadow-md btn-md btn btn-info rounded-0">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form action="{{ route('app.roles.update', $Edit->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control rounded-0 shadow-sm" pattern="[A-Za-z]" max="20" placeholder="Role Name">
                        </div>
                        <div class="form-row">
                            <div class="col-xl-6 col-sm-6 col-12">

                            </div>
                            <div class="col-xl-6 col-sm-6 col-12">

                            </div>
                        </div>
                        <button type="submit" class="btn btn-md btn-info rounded-0 shadow-sm">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
