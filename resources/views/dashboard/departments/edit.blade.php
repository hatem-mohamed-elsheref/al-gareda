
@extends('dashboard.layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                ادارة الاقسام
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>
                        لوحة التحكم
                    </a></li>
                <li class="active"><a href="{{route('departments.index')}}">
                        الاقسام
                    </a></li>
                <li class="active">
                    تعديل قسم
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- Form column -->
                <div class="col-md-12">

                    <!-- general form elements -->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                تعديل قسم
                            </h3>
                        </div><!-- /.box-header -->
                    @include('dashboard.layouts.includes.errors')
                    <!-- form start -->
                        <form role="form" method="post" action="{{route('departments.update',$department->id)}}" >
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label>اختر الجريده</label>
                                <select class="form-control" style="height: 40px;" name="news_paper_id">
                                    <option selected disabled>اختر الجريده</option>

                                @foreach($newspapers as $item)
                                        <option value="{{$item->id}}" @if($item->id==$department->news_paper_id) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">الاسم</label>
                                    <input type="text" class="form-control" name="name" placeholder="ادخل الاسم" value="{{$department->name}}">
                                </div>
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> حفظ</button>
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div><!--/.col (Form) -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->


@endsection




