@extends('layouts.template')
@section('content')
<div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static"
    data-keyboard="false" aria-hidden="true"></div>
<div class="container mt-5 p-4 bg-light rounded">
    <div class="row">
        <!-- Profile Image and Edit Button -->
        <div class="col-md-4 text-center">
            <div class="p-4">
                <div class="mb-4">
                    <img class="rounded-circle border" width="200px" src="{{ asset($user->foto) }}" alt="User Image">
                </div>
                <button class="btn btn-outline-primary w-75" onclick="modalAction('{{ url('/profile/' . session('user_id') . '/edit_foto') }}')">
                    <i class="fas fa-camera"></i> Edit Foto
                </button>
            </div>
        </div>

        <!-- Profile Information -->
        <div class="col-md-8">
            <div class="p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="mb-0">Pengaturan Profil</h4>
                    <button class="btn btn-outline-success" onclick="modalAction('{{ url('/profile/' . session('user_id') . '/edit_ajax') }}')">
                        <i class="fas fa-edit"></i> Edit Profil
                    </button>
                </div>
                <div class="row mt-3">
                    <table class="table table-bordered bg-white shadow-sm">
                        <tr>
                            <th>ID Pengguna</th>
                            <td>{{ $user->user_id }}</td>
                        </tr>
                        <tr>
                            <th>Level</th>
                            <td>{{ $user->level->level_nama }}</td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td>{{ $user->username }}</td>
                        </tr>
                        <tr>
                            <th>Nama Lengkap</th>
                            <td>{{ $user->nama }}</td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><span class="text-muted">********</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<style>
    .rounded-circle {
        object-fit: cover;
        height: 200px;
        width: 200px;
    }

    .profile-button {
        transition: background-color 0.3s, transform 0.3s;
    }

    .profile-button:hover {
        background-color: #007bff;
        color: #fff;
        transform: translateY(-2px);
    }

    th {
        background-color: #f8f9fa;
        font-weight: bold;
        text-align: center;
    }

    td {
        text-align: center;
    }
</style>
@endpush

@push('js')
<script>
    function modalAction(url = '') {
        $('#myModal').load(url, function() {
            $('#myModal').modal('show');
        });
    }
</script>
@endpush
