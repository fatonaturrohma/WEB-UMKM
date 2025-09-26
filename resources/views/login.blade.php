@extends('layouts.app')

@section('content')
<div class="container">
  <h2 class="mb-4">Login UMKM</h2>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
  @endif

  <form action="{{ route('login.proses') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="nib" class="form-label">NIB</label>
      <input type="text" class="form-control" id="nib" name="nib" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
@endsection
