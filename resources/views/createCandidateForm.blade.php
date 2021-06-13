@extends('layouts.main')

@section('content')

<div class="container mt-5">
    <h2 class="text-center">Insert New Candidate to the System</h2>
    <form action="{{route('createCandidate')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
        <label>Candatate Name</label>
        <input type="text" name="candidateName" class="form-control" placeholder="Type candidate name" required/>
        </div>

        <div class="form-group">
        <label>Candatate Information</label>
        <input type="text" name="candidateInfo" class="form-control" placeholder="Type info about the candidate"/>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection