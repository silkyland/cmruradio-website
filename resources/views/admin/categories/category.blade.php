@extends('admin.master')
@section('css')
    <link rel="stylesheet" href="/assets/bower_components/cropperjs/dist/cropper.min.css">
@endsection
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <div class="fa fa-folder-open"></div>
                    จัดการหมวดหมู่
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">จัดการหมวดหมู่ <span class="pull-right"><a href="/admin/category/create" class="btn btn-primary btn-outline btn-xs"><i class="fa fa-plus"></i> เพิ่มหมวดหมู่ใหม่</a></span></div>
                    <div class="panel-body">
                        <!-- include flash error -->
                        @include('errors.flashError')
                        <form role="form" action="/admin/article/store" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <lable for="inputTitle">กรอกหัวข้อข่าว</lable>
                                <input type="text" name="title" id="inputTitle" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection
@section('script')
    <script src="/assets/bower_components/cropperjs/dist/cropper.min.js"></script>
@endsection