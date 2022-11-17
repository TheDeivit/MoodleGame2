@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h4>Home Page</h4>
<h4>Contenido Público</h4>
@role('admin')
<p>Panel de admin</p>
@endrole

@role('teacher')
<p>Panel de maestro</p>
@endrole

@role('student')
<p>Panel de estudiante</p>
@endrole
@endsection
