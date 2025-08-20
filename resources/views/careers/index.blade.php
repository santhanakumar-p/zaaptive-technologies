@extends('layouts.app')

@section('title', 'Career List')

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
                        Career List
                        <a href="{{ route('careers.create') }}" class="btn btn-sm btn-success float-end">Create</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S. No</th>
                                    <th>Category</th>
                                    <th>Position</th>
                                    <th>Location</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($careers as $career)
                                    <tr>
                                        <td>{{ $career->id }}</td>
                                        <td>{{ Str::title($career->category) }}</td>
                                        <td>{{ Str::title($career->position) }}</td>
                                        <td>{{ Str::title($career->location) }}</td>
                                        <td>{{ Str::title($career->description) }}</td>
                                        <td>{{ Str::title($career->status) }}</td>
                                        <td>{{ $career->created_at }}</td>
                                        <td>
                                            <a href="{{ route('careers.edit', ['id' => $career->id]) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('careers.destroy', ['id' => $career->id]) }}"
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
