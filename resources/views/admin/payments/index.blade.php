@extends('admin/dashboard')

@section('content')
<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-header bg-light">
            <h3 class="h5 pt-2">Dashboard</h3>
        </div>
        <div class="card-body">
            <p>You are logged in !!</p>

            <!-- Menampilkan pesan sukses -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <hr>

            <h5 class="mt-4">Daftar Bukti Transfer</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama User</th>
                        <th>Email</th>
                        <th>File Bukti Transfer</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($payments as $payment)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $payment->user->name }}</td>
                            <td>{{ $payment->user->email }}</td>
                            <td>
                                <a href="{{ asset('storage/' . $payment->proof_path) }}" target="_blank">Lihat File</a>
                            </td>
                            <td>
                                <span class="badge bg-{{ $payment->status == 'approved' ? 'success' : ($payment->status == 'rejected' ? 'danger' : 'warning') }}">
                                    {{ ucfirst($payment->status) }}
                                </span>
                            </td>
                            <td>
                                <form action="{{ route('admin.payment.updateStatus', $payment->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="status" value="approved">
                                    <button type="submit" class="btn btn-success btn-sm">Approve</button>
                                </form>
                                <form action="{{ route('admin.payment.updateStatus', $payment->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="status" value="rejected">
                                    <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada bukti transfer.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
