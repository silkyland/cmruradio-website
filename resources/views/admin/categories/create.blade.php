@extends('admin.master')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">เพิ่มหมวดหมู่ใหม่</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">เพิ่มหมวดหมู่ใหม่ <span class="addBackButton pull-right"></span></div>
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