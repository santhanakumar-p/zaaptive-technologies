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
                                <label for="category" class="form-label">Category <span
                                        class="text-danger">*</span></label><br>
                                <select name="category" id="category" class="form-control form-select" required>
                                    <option selected disabled> -- select category</option>
                                    <option value="engineering">Engineering</option>
                                    <option value="design">Design</option>
                                    <option value="operation">Operation</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="position" class="form-label">Position <span
                                        class="text-danger">*</span></label><br>
                                <input type="text" name="position" id="position" class="form-control"
                                    placeholder="Enter position" required>
                            </div>
                            <div class="mb-2">
                                <label for="experience" class="form-label">Experience</label><br>
                                <input type="text" name="experience" id="experience" class="form-control"
                                    placeholder="Enter experience">
                            </div>
                            <div class="mb-2">
                                <label for="skills" class="form-label">Skills</label><br>
                                <input type="text" name="skills" id="skills" class="form-control"
                                    placeholder="Enter skills">
                            </div>
                            <div class="mb-2">
                                <label for="location" class="form-label">Location <span
                                        class="text-danger">*</span></label><br>
                                <input type="text" name="location" id="location" class="form-control"
                                    placeholder="Enter location" required>
                            </div>
                            <div class="mb-2">
                                <label for="salary" class="form-label">Salary</label><br>
                                <input type="text" name="salary" id="salary" class="form-control"
                                    placeholder="Enter salary">
                            </div>
                            <div class="mb-2">
                                <label for="description" class="form-label">Description <span
                                        class="text-danger">*</span></label><br>
                                <textarea name="description" id="description" class="form-control" placeholder="Enter description" required></textarea>
                            </div>
                            <div class="mb-2">
                                <label for="status" class="form-label">Status <span
                                        class="text-danger">*</span></label><br>
                                <select name="status" id="status" class="form-control form-select" required>
                                    <option selected disabled> -- select status -- </option>
                                    <option value="active">Active</option>
                                    <option value="in_active">In Active</option>
                                </select>
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
