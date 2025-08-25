@extends('layouts.app')

@section('title', 'Edit Apply Job')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col col-md-7">
                <div class="card">
                    <div class="card-header">
                        Edit Apply Job
                        <a href="{{ route('apply-jobs.index') }}" class="btn btn-sm btn-secondary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('apply-jobs.update', ['id' => $applyJobs->id]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-2">
                                <label for="category" class="form-label">
                                    Category ( Position ) <span class="text-danger">*</span>
                                </label><br>
                                <select name="careers_id" id="category" class="form-control form-select">
                                    <option value="" selected disabled> -- select category -- </option>
                                    @foreach ($careers->unique('category') as $career)
                                        <option value="{{ $career->id }}"
                                            {{ $career->id == $applyJobs->careers_id ? 'selected' : '' }}>
                                            {{ Str::upper($career->category) }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('careers_id')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label><br>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $applyJobs->name }}" placeholder="Enter name">
                                @error('name')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <label for="email" class="form-label">Email</label><br>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ $applyJobs->email }}" placeholder="Enter email">
                                @error('email')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <label for="phone_no" class="form-label">Phone No</label><br>
                                <input type="tel" name="phone_no" id="phone_no" class="form-control"
                                    value="{{ $applyJobs->phone_no }}" placeholder="Enter phone no">
                                @error('phone_no')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <label for="summary" class="form-label">Summary <span
                                        class="text-danger">*</span></label><br>
                                <textarea name="summary" id="summary" class="form-control" placeholder="Enter summary">{{ $applyJobs->summary }}</textarea>
                                @error('summary')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <label for="resume" class="form-label">Resume</label><br>
                                <input type="file" name="resume" id="resume" class="form-control"
                                    value="{{ $applyJobs->resume }}">
                                @error('resume')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <button type="submit" class="btn btn-md btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
