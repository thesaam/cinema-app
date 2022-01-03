@extends('layouts.app')

@section('content')

  <div class="container-fluid d-flex justify-content-center px-5 text-wrap text-center">
    <form action="/venues" method="POST" enctype="multipart/form-data">
      @csrf

      <select class="form-control-sm mb-3" name="show_venues">
        <option>Pick Venue</option>
        <option>Ikeja</option>
        <option>Maryland</option>
        <option>Ajah</option>
      </select>

      <button class="btn form-control-sm " type="submit">
        Submit
      </button>
      <select class="form-control-sm mb-3" name="show_venues">
        <option>Pick Venue</option>
        <option>Ikeja</option>
        <option>Maryland</option>
        <option>Ajah</option>
      </select>

      <button class="btn form-control-sm " type="submit">
        Submit
      </button>
      <select class="form-control-sm mb-3" name="show_venues">
        <option>Pick Venue</option>
        <option>Ikeja</option>
        <option>Maryland</option>
        <option>Ajah</option>
      </select>

      <button class="btn form-control-sm " type="submit">
        Submit
      </button>
    </form>
@endsection

