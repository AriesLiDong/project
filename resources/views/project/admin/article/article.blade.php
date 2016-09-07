@extends('project.admin.layout')

@section('content')
<table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
    <thead>
    <tr role="row">
    	<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 209px;">
    		用户名
    	</th>
    	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 175px;">
    		文章标题
    	</th>
    	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 94px;">
    		创建时间
    	</th>
    	
    	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 387px;">
    		操作
    	</th>
    </tr>
    </thead>
    
    <tbody role="alert" aria-live="polite" aria-relevant="all">
    	
    	@foreach($article as $value)
				<tr class="odd">
	        <td class=" sorting_1">{{ $value->username }}</td>
	        <td class="center ">{{ $value->title }}</td>
	        <td class="center ">{{ $value->time }}</td>
	        <td class="center ">
	            <a class="btn btn-success" href="#">
	                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
	                详情
	            </a>
	            <a class="btn btn-info" href="#">
	                <i class="glyphicon glyphicon-edit icon-white"></i>
	                编辑
	            </a>
	            <a class="btn btn-danger" href="#">
	                <i class="glyphicon glyphicon-trash icon-white"></i>
	                删除
	            </a>
	        </td>
    	</tr>
    	
    	@endforeach
    </tbody>
</table>
@endsection