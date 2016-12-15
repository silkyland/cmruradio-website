@extends('admin.master')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">จัดการข่าว</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="m-b-xs">
                    <div class="pull-right">
                        <a href="/admin/article/create" class="btn btn-sm btn-outline btn-primary"><i class="fa fa-plus"></i> เพิ่มข่าวใหม่</a>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="select_category" class="sr-only">คำค้น</label>
                            <input type="text" placeholder="ค้นหาข่าว" class="form-control input-sm">
                        </div>
                        <div class="form-group">
                            <label for="select_category" class="sr-only">หมวดหมู่</label>
                            <select name="select_category" id="select_category" class="input-group input-sm">
                                <option value="0">หมวดหมู่ทั้งหมด</option>
                                <option value="1">หลอกลวง</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="select_category" class="sr-only">หมวดหมู่</label>
                            <select name="select_category" id="select_category" class="input-group input-sm">
                                <option value="0">ผู้เขียนทุกคน</option>
                                <option value="1">Bundit Nuntates</option>
                            </select>
                        </div>
                        <button class="btn btn-sm btn-outline btn-default"><i class="fa fa-search"></i> กรองการค้นหา</button>

                    </div>
                </div>
                <table class="table table-responsive table-bordered">
                    <thead>
                    <tr>
                        <th><input type="checkbox" name="check_all" id="check_all"></th>
                        <th>หัวข้อข่าว</th>
                        <th>หมวดหมู่</th>
                        <th>ผู้เขียน</th>
                        <th>เขียนเมื่อ</th>
                        <th>จัดการ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name="checkbox_1"></td>
                        <td>มหาวิทยาลัยราชภัฏเชียงใหม่ได้รับอันดับ 1 ของ Web Ometrics</td>
                        <td>ข่าวลวง</td>
                        <td>Bundit Nuntates</td>
                        <td>13 Aug 2016, 13:30 PM</td>
                        <td>
                            <a href="/admin/article/edit" class="btn btn-xs btn-outline btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="/admin/article/edit" class="btn btn-xs btn-outline btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @if(isset($articles) && count($articles) > 0)

                    @else
                        <tr>
                            <td colspan="6" class="text-center"> == ไม่มีข้อมูล ==</td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection