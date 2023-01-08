@extends('master')
@section('title')
    Add Blog Page
@endsection 
@section('body')
    <section>
        <div class="py-5 bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Add Blog</div>
                            <div class="card-body">
                                <p class="text-center text-success">{{ Session::get('message') }}</p>
                                <form action="{{ route('blog.create') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label class="col-md-3">Blog Title</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="title"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Blog Author</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="author"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Blog Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" rows="5" name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Blog Image</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control" name="image"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit" class="btn btn-success" value="Create New Blog "/>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
