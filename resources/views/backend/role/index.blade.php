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
                <div>Roles
                </div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="" class="shadow-md btn-md btn btn-info rounded-0">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-plus"></i>
                        </span>
                        Add new role
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="table-sm-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th class="text-center">Slug</th>
                                <th class="text-center">Note</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Role as $key=>$Roles)
                                <tr>
                                    <td class="text-center text-muted">{{ $key+1 }}</td>
                                    <td>{{ $Roles->name }}</td>
                                    <td class="text-center">{{ $Roles->slug }}</td>
                                    <td class="text-center">{{ $Roles->note }}</td>
                                    {{-- <td class="text-center">
                                        <div class="badge badge-info">On Hold</div>
                                    </td> --}}
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="{{ route('app.roles.edit', $Roles->id) }}">Edit</a>
                                            <button class="border-0 dropdown-item">Delete</button>
                                            <form action="{{ route('app.roles.destroy', $Roles->id) }}" method="POST">
                                                @csrf
                                            </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
