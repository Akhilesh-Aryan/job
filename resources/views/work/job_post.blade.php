@extends('work.base')

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-3">
            <div class="list-group list-group-flush">
                <a href="" class="list-group-item list-group-item-action">Profile</a>
                <a href="" class="list-group-item list-group-item-action">Setting</a>
                <a href="" class="list-group-item list-group-item-action">Manage Job Posts</a>
                <a href="" class="list-group-item list-group-item-action">Login</a>
            </div>
        </div>

        <div class="col-9">
            <div class="row">
                <div class="col-lg-7">
                    {{-- @isset($company) --}}
                    {{-- @foreach ($company->jobs as $job)
                        <div class="card">
                            <div class="card-body">
                                <h6>{{$job->title}}</h6>
                            <p class="small text-muted m-0 p-0">{{$job->role_id}}</p>
                            <p class="small text-muted m-0 p-0">{{$job->job_type}}</p>
                            <p class="small text-muted m-0 p-0">{{$job->skills}}</p>
                            <p class="small text-muted m-0 p-0">{{$job->eligiblity}}</p>
                            <p class="small text-muted m-0 p-0">{{$job->experience}}</p>
                            <p class="small text-muted m-0 p-0">{{$job->salary}}</p>

                            <a href="{{route('company.jobs.delete',['job'=>$job->id])}}" class="btn btn-outline-danger float-end small nav-link m-0 p-0">Delete</a>
                            </div>
                        </div>
                        @endforeach --}}
                        {{-- @endisset --}}
                </div>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                        <form action="{{route('company.job.insert')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Job Title</label>
                                <input type="text" name="title" class="form-control" value="{{old('title')}}">
                                @error('title')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Job Type</label>
                                    <select  name="job_type" class="form-control">
                                        <option selected disabled value="">Select Job Type</option>
                                        <option>Part Time</option>
                                        <option>Full Time</option>
                                        <option>Work at Home</option>
                                        <option>Night Shift</option>
                                        <option>Freelancing</option>
                                    </select>
                                    @error('job_type')
                                        <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">skills</label>
                                    <input type="text" name="skills" class="form-control" value="{{old('skills')}}">
                                @error('skills')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>
                                <div class="mb-3">
                                    <label for="">eligibility</label>
                                    <input type="text" name="eligibility" class="form-control" value="{{ old('eligibility')}}">
                                @error('eligibility')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">experience</label>
                                    <input type="text" name="experience" class="form-control" value="{{ old('experience')}}">
                                @error('experience')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">salary</label>
                                    <input type="text" name="salary" class="form-control" value="{{ old('salary')}}">
                                @error('salary')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Role</label>
                                    <select  name="role_id" class="form-control">
                                        <option selected disabled value="">Select Role</option>
                                       @foreach ($roles as $role)
                                            <option value="{{$role->id}}">{{$role->r_title}}</option>    
                                       @endforeach
                                    </select>
                                    @error('role_id')
                                        <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                               
                                <div class="mb-3">
                                    <label for="">description</label>
                                    <textarea  name="description" rows="7" class="form-control" value="{{ old('description')}}"></textarea>
                                    @error('description')
                                        <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="btn w-100 btn-success" value="Submit">
                                </div>
                            </form>
                        </div>
                   
                   
                </div>
            </div>
        </div>     
          
           

    </div>
</div>
@endsection