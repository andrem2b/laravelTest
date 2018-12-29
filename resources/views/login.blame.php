<!-- Stored in resources/views/login.blade.php -->

@extends('layouts.master')

@section('title', 'homeeez')

@section('sidebar')
    @parent

    <p> home</p>

@endsection

@section('content')

    <p> content</p>

 <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="" class="btn btn-info sidebarCollapse">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
            </div>
        </nav>
    </div>

@endsection