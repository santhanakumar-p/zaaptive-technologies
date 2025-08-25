@extends('layouts.app')

@section('title', 'Apply Job List')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col col-md-12">

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        Apply Job List
                        <a href="{{ route('apply-jobs.create') }}" class="btn btn-sm btn-success float-end">Create</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S. No</th>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applyJobs as $applyJob)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ Str::title($applyJob->career->category) }}</td>
                                        <td>{{ Str::title($applyJob->name) }}</td>
                                        <td>{{ Str::title($applyJob->email) }}</td>
                                        <td>{{ Str::title($applyJob->phone_no) }}</td>
                                        <td>{{ $applyJob->created_at }}</td>
                                        <td>
                                            <a href="{{ route('apply-jobs.edit', ['id' => $applyJob->id]) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('apply-jobs.destroy', ['id' => $applyJob->id]) }}"
                                                class="d-inline-block" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
