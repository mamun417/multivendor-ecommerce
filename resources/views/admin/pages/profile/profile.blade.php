@extends('admin.layouts.app')

@section('title', 'Profile')

@section('content')

    <div class="row wrapper border-bottom white-bg py-3">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Profile</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row m-t-lg">
            <div class="col-md-4 mb-lg-0 jumbotron">
                <div class="profile-image">
                    <img
                        src="{{ isset(Auth::user()->image) ? Auth::user()->image->url : asset('backend/img/profile/man.svg') }}"
                        class="rounded-circle circle-border m-b-md"
                        alt="profile">
                </div>

                <div class="profile-info">
                    <div class="">
                        <div>
                            <h2 class="no-margins">
                                <b>@auth {{ auth()->user()->name }} @endauth</b>
                            </h2>
                            <p class="lead no-margins">Administrator</p>
                            <p>
                                <b>Email :</b> @auth {{ auth()->user()->email }} @endauth
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tabs-container">
                    @php($active_menu = false)
                    @error('current_password')
                    @php($active_menu = true)
                    @enderror
                    @error('password')
                    @php($active_menu = true)
                    @enderror
                    @if(session('warning'))
                        @php($active_menu = true)
                    @endif
                    <ul class="nav nav-tabs" role="tablist">
                        <li>
                            <a class="nav-link {{ $active_menu ? '' : 'active show' }} text-dark" data-toggle="tab"
                               href="#profile-tab">
                                <h3>Change Info</h3>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link {{ $active_menu ? 'active show' : '' }} text-dark" data-toggle="tab"
                               href="#password-tab">
                                <h3>Change Password</h3>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" id="profile-tab" class="tab-pane {{ $active_menu ? '' : 'active show' }}">
                            <form action="{{ route('admin.profile.update', Auth::id()) }}" method="post"
                                  enctype="multipart/form-data">
                                @method('patch')
                                @csrf
                                <div class="panel-body">

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" value="{{ auth()->user()->name }}" type="text" name="name"
                                               class="form-control">
                                        @error('name')
                                        <span class="help-block m-b-none text-danger">
                                            {{ $message }}
                                         </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" value="{{ auth()->user()->email }}" id="email"
                                               class="form-control">

                                        @error('email')
                                        <span class="help-block m-b-none text-danger">
                                            {{ $message }}
                                         </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Profile Image</label>
                                        <div class="custom-file">
                                            <input id="image" name="profile_image" type="file"
                                                   class="custom-file-input">
                                            <label for="image" class="custom-file-label">Choose file...</label>
                                        </div>

                                        @error('image')
                                        <span class="help-block m-b-none text-danger">
                                                {{ $message }}
                                             </span>
                                        @enderror
                                    </div>

                                    <button class="btn btn-sm btn-info" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" id="password-tab" class="tab-pane {{ $active_menu ? 'active show' : '' }}">
                            <form action="{{ route('admin.password.change') }}" method="post">
                                @method('patch')
                                @csrf
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="current_password">Old Password</label>
                                        <input type="password" id="current_password" name="current_password"
                                               class="form-control">

                                        @error('current_password')
                                        <span class="help-block m-b-none text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password">New Password</label>
                                        <input type="password" id="password" name="password" class="form-control">

                                        @error('password')
                                        <span class="help-block m-b-none text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                               class="form-control">
                                    </div>

                                    <button class="btn btn-sm btn-info" type="submit">Change</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
