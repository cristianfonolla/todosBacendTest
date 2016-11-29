@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Tasques
@endsection


@section('main-content')

    <div>

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Tasques</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Task</th>
                        <th>Priority</th>
                        <th>Done</th>
                        <th>Progress</th>
                        <th style="width: 40px">Label</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach ($tasks as $task)

                        <tr>

                            <td>{{$task->name}}</td>
                            <td>{{$task->priority}}</td>
                            <td>{{$task->done}}</td>

                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-red">55%</span></td>
                        </tr>


                    @endforeach


                    </tbody>

                </table>
            </div>
            <!-- /.box-body -->
            <!--TODO http://www.pontikis.net/labs/bs_pagination/demo/-->
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>

    </div>

@endsection
