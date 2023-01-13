@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Add New Employee') }} <a href="{{ route('employee.index') }}" class="float-right">Employee Table</a></div>
                    <div class="card-body">
                        <form action="{{ route('employee.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" placeholder="Enter employee name" required>
                            </div>
                            <div class="form-group">
                                <label for="">Position</label>
                                <input type="text" name="position" placeholder="Enter position" required>
                            </div>
                            <div class="form-group">
                                <label for="">Office Location</label>
                                <input type="text" name="office" placeholder="Enter office location" required>
                            </div>
                            <div class="form-group">
                                <label for="">Age</label>
                                <input type="number" name="age" placeholder="Enter age" required>
                            </div>
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" name="start_date" placeholder="Enter start date" required>
                            </div>
                            <div class="form-group">
                                <label for="">Salary</label>
                                <input type="number" name="salary" placeholder="Enter salary amount" required>
                            </div>
                            <div class="form-group">
                                <label for="">Upload Image</label>
                                <input type="file" name="photo" required>
                            </div>
                            <div class="form-group">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
