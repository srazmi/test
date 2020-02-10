@extends('layouts.app')
@section('content')
<?php// var_dump($kalas);die;?>
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">محصولات</div>
                    {{-- <input type="checkbox"> --}}
                        
                    {{-- <select name="category">
                        <option value=""   selected >فیلتر بر اساس</option>
                            @foreach ($Temp['category'] as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                    </select> --}}
                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="mytable" class="table table-bordred table-striped">
                   
                                    <thead>
        
                                        <th>ردیف</th>
                                        <th>نام</th>
                                        <th>توضیحات</th>
                                        <th>دسته بندی</th>
                                        <th>قیمت</th>
                                        <th>تعداد</th>
                                        <th>ویرایش</th>   
                                        <th>حذف</th>
                                    </thead>
                                    <tbody>
                                    @foreach($Temp['kala'] as $kala)
                                        <tr>
                                        <td><input type="checkbox" class="checkthis" /></td>
                                        {{-- <td>{{$kala->id}}</td> --}}
                                        <td>{{$kala->name}}</td>
                                        <td>{{$kala->description}}</td>
                                        <td>{{$kala->categori->name}}</td>
                                        <td>{{$kala->price}}</td>
                                        <td>{{$kala->number}}</td>
                                        <td><a href="/edit/{{$kala["id"]}}" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                                        <td><a href="/delete/{{$kala["id"]}}" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
    </div>
</div>

@endsection