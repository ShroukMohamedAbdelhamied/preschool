@extends('dashboard.layouts.main')

@section('content')

@include('dashboard.includesdash.upDash')

@include('dashboard.includesdash.classesStatistics')

@include('dashboard.includesdash.export')

@include('dashboard.includesdash.students')

@include('dashboard.includesdash.languages')

@include('dashboard.includesdash.teachers')

@include('dashboard.includesdash.transaction')

@endsection