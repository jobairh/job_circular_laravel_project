@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5" style="left: 10%;top: 5%">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Job Form</h3></div>
                    <div class="card-body">
                        <form action="{{ route('new-jobDetails2') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-control" name="category_id" id="">
                                            <option value="">Select a Category</option>
                                            <option value="">Business</option>
                                            <option value="">Software</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-control" name="company_id" id="">
                                            <option value="">Select a Company</option>
                                            <option value="">ibos company</option>
                                            <option value="">Brain Station-23</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" name="vacancy" type="text" placeholder="Enter Title Name" />
                                        <label for="inputFirstName">Title</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" name="category_id" type="text" placeholder="Enter Title Name" />
                                        <label for="inputFirstName">Title</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="content1" id="" cols="30" rows="10"></textarea>
                                <label for="inputEmail">Content</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" name="image" type="file" placeholder="Image" />
                                <label for="inputEmail">Image</label>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" value="submit" class="form-control btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

