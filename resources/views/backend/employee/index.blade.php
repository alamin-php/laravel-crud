@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Employee Table') }} <a href="{{ route('employee.create') }}" class="float-right">Add New Employee</a></div>
                    <div class="card-body">
                        @if ($message = Session::get('message'))
                            <div id="message">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <table id="example" class="cell-border" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                            <tbody>
                                @foreach ($employee as $row)
                                <tr>
                                    <td><img width="40" src="{{asset('files/upload/employee/'.$row->photo)}}" alt="" srcset=""></td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->position}}</td>
                                    <td>{{$row->office}}</td>
                                    <td>{{$row->age}}</td>
                                    <td>{{$row->start_date}}</td>
                                    <td>{{ number_format($row->salary,2) }} Tk</td>
                                    <td>
                                        @if ($row->active == true)
                                        <span class="text-success">Enable</span>
                                        @else
                                        <span class="text-danger">Disable</span>
                                        @endif
                                    </td>
                                    <td><a href="{{ route('employee.edit', $row->id) }}"><i class="fa fa-pencil"></i></a> | <a href="{{ route('employee.destroy', $row->id) }}" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></a></td>
                                    </tr>

                                @endforeach

                                </tbody>
                            <tfoot>
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
