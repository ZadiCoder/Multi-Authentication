@extends('admin.layout.layout')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Category Name</th>
            <th>Category Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $key=>$data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->category_name}}</td>
            <td>{{$data->created_at}}</td>
            <td><a href="{{route('category.edit' , $data->id)}}" style="font-size: 17px; padding:5px;" ><i  class="fa fa-edit"></i></a>
            <a href="javascript::void(0)" style="font-size: 17px; padding:5px;" data-id="{{$data->id}}"
            class="delete"><i class="fa fa-trash" ></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

