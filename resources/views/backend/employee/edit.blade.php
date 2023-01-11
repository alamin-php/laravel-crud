@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit Employee') }} <a href="{{ route('employee.index') }}" class="float-right">Employee Table</a></div>
                    <div class="card-body">
                        <form action="{{ route('employee.update', $employee->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{ $employee->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Position</label>
                                <input type="text" name="position" value="{{ $employee->position }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Office Location</label>
                                <input type="text" name="office" value="{{ $employee->office }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Age</label>
                                <input type="number" name="age" value="{{ $employee->age }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" name="start_date" value="{{ $employee->start_date }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Salary</label>
                                <input type="number" name="salary" value="{{ $employee->salary }}" required>
                            </div>
                            <div class="form-group">
                                <button type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
