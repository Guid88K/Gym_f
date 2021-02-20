@extends('pages.layouts')
@section('content')
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Все пользователи</h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                <tr>
                    <th class="text-center" style="width: 10%;"></th>
                    <th style="width: 20%;">Название</th>
                    <th class="d-none d-sm-table-cell" style="width: 20%;">Почта</th>
                    <th class="d-none d-sm-table-cell" style="width: 20%;">Роль</th>
                    <th class="text-center" style="width: 30%;">Настройки</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $u)
                    <tr>
                        <td class="text-center">{{$u->id}}</td>
                        <td class="font-w600">{{$u->name}}</td>
                        <td class="d-none d-sm-table-cell">{{$u->email}}</td>
                        @if($u->role == 'user')
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-success">Користувач</span>
                            </td>
                        @endif
                        @if($u->role == 'admin')
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-danger">Адміністратор</span>
                            </td>
                        @endif
                        @if($u->role == 'trainer')
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-primary">Тренер</span>
                            </td>
                        @endif
                        @if($u->role == 'nutritionist')
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-warning">Дієтолог</span>
                            </td>
                        @endif

                        <td class="text-center">
                            <div class="form-group row">
                                <form action="{{route('user.program',$u->id)}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-9">
                                        <select class="form-control" id="programs" name="programs">
                                            @foreach($programs as $p)
                                                <option value="{{$p->id}}">{{$p->id}}/ {{$p->name}}/
                                                    {{$p->created_at}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-sm btn-danger">Ок</button>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
