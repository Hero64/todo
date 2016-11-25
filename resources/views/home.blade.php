  @extends('layout.master')
  @section('title', 'TODOAPP')
  @section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
  @endsection
  @section('content')
    @include('layout.header')
    @include('layout.section')
  @endsection
  @section('js')
      <script src="{{ asset('js/app.js') }}"></script>
  @endsection