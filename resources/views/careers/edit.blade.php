@extends('layouts.app')

@section('title', 'Edit Career')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col col-md-7">
                <div class="card">
                    <div class="card-header">
                        Edit Career
                        <a href="{{ route('careers.index') }}" class="btn btn-sm btn-secondary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('careers.update', ['id' => $career->id]) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="mb-2">
                                <label for="category" class="form-label">Category <span
                                        class="text-danger">*</span></label><br>
                                <select name="category" id="category" class="form-control form-select" required>
                                    <option selected disabled> -- select category</option>
                                    <option value="engineering" @selected($career->category == 'engineering')>Engineering</option>
                                    <option value="design" @selected($career->category == 'design')>Design</option>
                                    <option value="operation" @selected($career->category == 'operation')>Operation</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="position" class="form-label">Position <span
                                        class="text-danger">*</span></label><br>
                                <input type="text" name="position" id="position" class="form-control"
                                    value="{{ $career->position }}" placeholder="Enter position" required>
                            </div>
                            <div class="mb-2">
                                <label for="experience" class="form-label">Experience</label><br>
                                <input type="text" name="experience" id="experience" class="form-control"
                                    value="{{ $career->experience }}" placeholder="Enter experience">
                            </div>
                            <div class="mb-2">
                                <label for="skills" class="form-label">Skills</label><br>
                                <input type="text" name="skills" id="skills" class="form-control"
                                    value="{{ $career->skills }}" placeholder="Enter skills">
                            </div>
                            <div class="mb-2">
                                <label for="location" class="form-label">Location <span
                                        class="text-danger">*</span></label><br>
                                <input type="text" name="location" id="location" class="form-control"
                                    value="{{ $career->location }}" placeholder="Enter location" required>
                            </div>
                            <div class="mb-2">
                                <label for="salary" class="form-label">Salary</label><br>
                                <input type="text" name="salary" id="salary" class="form-control"
                                    value="{{ $career->salary }}" placeholder="Enter salary">
                            </div>
                            <div class="mb-2">
                                <label for="description" class="form-label">Description <span
                                        class="text-danger">*</span></label><br>
                                <textarea name="description" id="description" class="form-control" placeholder="Enter description" required>{{ $career->salary }}</textarea>
                            </div>
                            <div class="mb-2">
                                <label for="status" class="form-label">Status <span
                                        class="text-danger">*</span></label><br>
                                <select name="status" id="status" class="form-control form-select" required>
                                    <option selected disabled> -- select status -- </option>
                                    <option value="active" @selected($career->status == 'active')>Active</option>
                                    <option value="in_active" @selected($career->status == 'in_active')>In Active</option>
                                </select>
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
