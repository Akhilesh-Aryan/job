@extends('work.base')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-3 ">
            <div class="list-group list-group-flush">
                <a href="" class="list-group-item list-group-item-action">Profile</a>
                <a href="" class="list-group-item list-group-item-action">Setting</a>
                <a href="" class="list-group-item list-group-item-action">Manage job posts</a>
            </div>
        </div>
            <div class="col-9">
                @isset($company)
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <td>{{$company->title}}</td>
                        </tr>
                    </table>
                @endisset
                @empty($company)
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('company.profile.insert')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Company Name</label>
                                <input type="text" name="title" class="form-control" value="{{old('title')}}" id="">
                                @error('title')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">CIN</label>
                                <input type="text" name="cin" class="form-control" value="{{old('cin')}}" id="">
                                @error('cin')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Est_year</label>
                                <input type="text" name="est_year" class="form-control" value="{{old('est_year')}}" id="">
                                @error('est_year')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control" value="{{old('address')}}" id="">
                                @error('address')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Industry Type</label>
                                <select name="industry_type" class="form-control">
                                    <option selected disabled value="">---Select Industry Type----</option>
                                    <option>Part Time</option>
                                    <option>Full Time</option>
                                    <option>Work From Home</option>
                                    <option>Night shift</option>
                                    <option>Freelancing</option>
                                </select>
                                @error('industry_type')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Logo</label>
                                <input type="file" name="logo" class="form-control"id="">
                                @error('logo')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Description</label>
                                <input type="text" name="description" class="form-control" value="{{old('description')}}" id="">
                                @error('description')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="send"  class="form-control btn btn-success btn-block">
                        </form>
                    </div>
                </div>
                @endempty
            </div>
    </div>
</div>
@endsection