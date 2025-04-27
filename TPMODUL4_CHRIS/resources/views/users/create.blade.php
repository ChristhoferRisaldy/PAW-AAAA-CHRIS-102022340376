@extends('layouts.app')

@section('title', 'Tambah Pengguna')

@section('content')
    <h2 style="font-size: 24px; margin-bottom: 20px; text-align: center;">Add User</h2>

    {{-- 1. Fill in the form action so that the data can be processed by the controller --}}
    <form action="{{ route('users.store') }}" method="POST" style="max-width: 500px; margin: 0 auto; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #fff;">
        @csrf

        <div style="margin-bottom: 15px;">
            <label for="name" style="display: block; font-weight: bold; margin-bottom: 5px;">Nama:</label>
            <input type="text" name="name" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="email" style="display: block; font-weight: bold; margin-bottom: 5px;">Email:</label>
            <input type="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="phone" style="display: block; font-weight: bold; margin-bottom: 5px;">Telepon:</label>
            <input type="text" name="phone" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
        </div>

        <button type="submit" style="background-color: #4caf50; color: white; padding: 12px 20px; border-radius: 5px; font-size: 16px; width: 100%; cursor: pointer; border: none; transition: background-color 0.3s;">
            Simpan
        </button>
    </form>
@endsection
