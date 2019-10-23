@extends('admin.admin-layout')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card p-5">
                <h2>Update Staff Profile</h2>
                    <form action="{{url("admin/update-staff")}}" class="form-horizontal" method="post">
                        @csrf
                        <input type="hidden" name="staff_id" value="{{$staff->staff_id}}">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name"
                                   value="{{$staff->name}}">
                            @if($errors->has("name"))
                                <p class="error" style="color:red">{{$errors->first("name")}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tel</label>
                            <input type="text" class="form-control" value="{{$staff->tel}}" name="tel"
                                   placeholder="Phone number">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Birthday</label>
                            <input type="date" class="form-control" name="birthday" value="{{$staff->birthday}}"
                                   placeholder="Birthday">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Gender</label>
                            <select name="gender" class="form-control">
                                <option value="0" @if($staff->gender == 0)selected @endif>Male</option>
                                <option value="1" @if($staff->gender == 1)selected @endif>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Department</label>
                            <select name="department_id" class="form-control">
                                @foreach($departments as $department)
                                    <option value="{{$department->department_id}}"
                                            @if($staff->department_id == $department->department_id) selected @endif>
                                        {{$department->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Position</label>
                            <select name="position_id" class="form-control">
                                @foreach($positions as $position)
                                    <option value="{{$position->position_id}}"
                                            @if($staff->position_id == $position->position_id) selected @endif>
                                        {{$position->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Certification</label>
                            <select name="certification_id" class="form-control">
                                @foreach($certifications as $certification)
                                    <option
                                        value="{{$certification->certification_id}}"
                                        @if($staff->certification_id == $certification->certification_id) selected @endif>
                                        {{$certification->name}}
                                        - {{$certification->major}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Salary</label>
                            <select name="salary_id" class="form-control">
                                @foreach($salary_s as $salary)
                                    <option
                                        value="{{$salary->salary_id}}"
                                        @if($staff->salary_id == $salary->salary_id) selected @endif>
                                        {{$salary->salary_grade}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Strength</label>
                            <input type="text" class="form-control" value="{{$staff->strength}}" name="strength"
                                   placeholder="Strength">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Enrollment Date</label>
                            <input type="date" class="form-control" name="enrollment_date"
                                   value="{{$staff->enrollment_date}}" placeholder="Enrollment Date">
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                        </div>
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
