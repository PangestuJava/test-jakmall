@extends('layouts.main')
@section('content')
    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1">
                <ion-icon name="star-outline"></ion-icon>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">5 STAR</span>
                <span class="info-box-number">
                    {{ $dashboard->where('rating', '=', 5)->count() }}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1">
                <ion-icon name="star-outline"></ion-icon>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">4 STAR</span>
                <span class="info-box-number">
                    {{ $dashboard->where('rating', '=', 4)->count() }}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1">
                <ion-icon name="star-outline"></ion-icon>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">3 STAR</span>
                <span class="info-box-number">
                    {{ $dashboard->where('rating', '=', 3)->count() }}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1">
                <ion-icon name="star-outline"></ion-icon>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">2 STAR</span>
                <span class="info-box-number">
                    {{ $dashboard->where('rating', '=', 2)->count() }}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1">
                <ion-icon name="star-outline"></ion-icon>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">1 STAR</span>
                <span class="info-box-number">
                    {{ $dashboard->where('rating', '=', 1)->count() }}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1">
                <ion-icon name="browsers-outline"></ion-icon>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">TOTAL REVIEWS</span>
                <span class="info-box-number">
                    {{ $dashboard->count() }}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1">
                <ion-icon name="pulse-outline"></ion-icon>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">AVERAGE RATE</span>
                <span class="info-box-number">
                    {{ $dashboard->avg('rating') }}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
@endsection
