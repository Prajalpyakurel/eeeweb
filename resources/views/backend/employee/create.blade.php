@extends('backend.dashboard')

@section('content')
    {{-- <h1 style="margin-top:100px;">thi s kasjhdkjahdk</h1> --}}
    <div class="card m-5">
        <div class="card-body ">

            <h6 class="card-title">Add Employee</h6>

            <form class="forms-sample" method="POST" action="{{route('admin.storeemployee')}}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control"  autocomplete="off"
                         name="name" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="designation" class="form-label">designation</label>
                    <input type="text" class="form-control"  autocomplete="off"
                    name="designation"  placeholder="Designation">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" >
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="defaultconfig-4" class="col-form-label">Detials</label>
                    </div>
                    <br>
                    <div class="col-lg-12">
                        <textarea id="maxlength-textarea" name="about" class="form-control" id="defaultconfig-4" maxlength="100" rows="8" placeholder="This textarea has a limit of 100 chars."></textarea>
                    </div>
                </div>
               
               
                <div class="col-md-12 stretch-card mb-3">
                    <div class="card">
                        <label for="defaultconfig-4" class="col-form-label">Photos of Employee</label>

                        <div class="card-body">
                            <input name="image" type="file" id="myDropify"/>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-secondary">Cancel</button>
            </form>

        </div>
    </div>
@endsection
