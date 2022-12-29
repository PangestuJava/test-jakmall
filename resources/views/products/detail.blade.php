@extends('layouts.main')

@section('content')
    <!-- left column -->
    <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm">
                <div class="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" value="{{ $product->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Total Review</label>
                        <input type="number" class="form-control" value="{{ $product->review->count() }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Average Rating</label>
                        <input type="number" class="form-control" value="{{ $product->review->avg('rating') }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>1 Star</label>
                        <input type="number" maxlength="2" class="form-control"
                            value="{{ $product->review->where('rating', '=', 1)->count() }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>2 Star</label>
                        <input type="number" class="form-control"
                            value="{{ $product->review->where('rating', '=', 2)->count() }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>3 Star</label>
                        <input type="number" class="form-control"
                            value="{{ $product->review->where('rating', '=', 3)->count() }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>4 Star</label>
                        <input type="number" class="form-control"
                            value="{{ $product->review->where('rating', '=', 4)->count() }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>5 Star</label>
                        <input type="number" class="form-control"
                            value="{{ $product->review->where('rating', '=', 5)->count() }}" readonly>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a href="/product" class="btn btn-primary">Back</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-6">

    </div>
    <!--/.col (right) -->
@endsection
