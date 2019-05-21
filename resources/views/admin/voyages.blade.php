@extends('layouts.admin')

@section('content') 
<style type="text/css">
    body {
        color: #566787;
        background: #f5f5f5;
		font-family: 'Roboto', sans-serif;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px;
        margin: 30px 0;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 8px 0 0;
        font-size: 22px;
    }
    .search-box {
        position: relative;        
        float: right;
    }
    .search-box input {
        height: 34px;
        border-radius: 20px;
        padding-left: 35px;
        border-color: #ddd;
        box-shadow: none;
    }
	.search-box input:focus {
		border-color: #3FBAE4;
	}
    .search-box i {
        color: #a0a5b1;
        position: absolute;
        font-size: 19px;
        top: 8px;
        left: 10px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
	table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }    
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 95%;
        width: 30px;
        height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 30px !important;
        text-align: center;
        padding: 0;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 6px;
        font-size: 95%;
    }    
</style>


<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6"><h2>Voyages <b>Details</b></h2></div>
                <div class="col-sm-6">
                    <div class="col-sm-4">
                            <a href=" {{route('voyages.create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>						
                        </div>
                    <div class="search-box">
                        <i class="material-icons">&#xE8B6;</i>
                        <input type="text" class="form-control" placeholder="Search&hellip;">
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>Titre <i class="fa fa-sort"></i></th>
                    <th>destination</th>
                    <th>description <i class="fa fa-sort"></i></th>
                    <th>prix</th>
                    <th>image <i class="fa fa-sort"></i></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($voyages as $voyage)
                <tr>
                    <td>{{$voyage->titre}}</td>
                    <td>{{$voyage->destination}}</td>
                    <td>{{$voyage->description}}</td>
                    <td>{{$voyage->prix}}</td>
                    <td>{{$voyage->image}}</td>
                    <td>
                        <a href="{{route('voyages.show', ['id' => $voyage->id]) }}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                        <a href="{{route('voyages.edit', ['id' => $voyage->id]) }}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    </td>
                </tr>
                @endforeach        
            </tbody>
        </table>
        <div class="clearfix">
            <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
            <ul class="pagination">
                <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                <li class="page-item"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li>
                <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>     
@endsection
