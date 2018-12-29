<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.master')

@section('title', 'llamada')

@section('sidebar')
    @parent

    <p> home</p>

@endsection

@section('content')

    <p> desfiless lista</p>

 <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
            </div>
        </nav>
    </div>

@endsection