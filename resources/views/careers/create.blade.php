@extends('layouts.app')

@section('title', 'Create Career')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col col-md-7">
                <div class="card">
                    <div class="card-header">
                        Create Career
                        <a href="{{ route('careers.index') }}" class="btn btn-sm btn-secondary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('careers.store') }}" method="post">
                            @csrf

                            <div class="mb-2">
                                <label for="category" class="form-label">
                                    Category <span class="text-danger">*</span>
                                </label><br>
                                <select name="category" id="category" class="form-control form-select">
                                    <option value="" selected disabled> -- select category -- </option>
                                    <option value="engineering" {{ old('category') == 'engineering' ? 'selected' : '' }}>
                                        Engineering</option>
                                    <option value="design" {{ old('category') == 'design' ? 'selected' : '' }}>Design
                                    </option>
                                    <option value="operation" {{ old('category') == 'operation' ? 'selected' : '' }}>
                                        Operation</option>
                                </select>

                                @error('category')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="position" class="form-label">Position <span
                                        class="text-danger">*</span></label><br>
                                <input type="text" name="position" id="position" class="form-control"
                                    value="{{ old('position') }}" placeholder="Enter position">

                                @error('position')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="experience" class="form-label">Experience</label><br>
                                <input type="text" name="experience" id="experience" class="form-control"
                                    value="{{ old('experience') }}" placeholder="Enter experience">

                                @error('experience')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="skills" class="form-label">Skills</label><br>
                                <input type="text" name="skills" id="skills" class="form-control"
                                    value="{{ old('skills') }}" placeholder="Enter skills">

                                @error('skills')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="location" class="form-label">Location <span
                                        class="text-danger">*</span></label><br>
                                <input type="text" name="location" id="location" class="form-control"
                                    value="{{ old('location') }}" placeholder="Enter location">

                                @error('location')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="salary" class="form-label">Salary</label><br>
                                <input type="text" name="salary" id="salary" class="form-control"
                                    value="{{ old('salary') }}" placeholder="Enter salary">

                                @error('salary')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="description" class="form-label">Description <span
                                        class="text-danger">*</span></label><br>
                                <textarea name="description" id="description" class="form-control summernote" placeholder="Enter description">{{ old('description') }}</textarea>

                                @error('description')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="status" class="form-label">Status <span
                                        class="text-danger">*</span></label><br>
                                <select name="status" id="status" class="form-control form-select">
                                    <option selected disabled> -- select status -- </option>
                                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="in_active" {{ old('status') == 'in_active' ? 'selected' : '' }}>In
                                        Active</option>
                                </select>

                                @error('status')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <button type="submit" class="btn btn-md btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
