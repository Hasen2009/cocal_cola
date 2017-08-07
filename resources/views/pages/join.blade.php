@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Email</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Write Your Email">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Password</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Wrote Your Password">
                    </div>
                </form>
                <button type="button" class="btn btn-outline-primary">Submit</button>
            </div>
        </div>
    </div>
    <hr>

@endsection
@section('footer')
@endsection