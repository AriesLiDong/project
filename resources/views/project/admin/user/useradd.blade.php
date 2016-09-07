@extends('project.admin.layout')

@section('content')
<div class="row">
	<div class="box col-md-8">
	    <div class="box-inner">
	        <div class="box-header well" data-original-title="">
	            <h2><i class="glyphicon glyphicon-edit"></i>填写用户信息</h2>

	            <div class="box-icon">
	                <a href="#" class="btn btn-setting btn-round btn-default">
	                	<i class="glyphicon glyphicon-cog"></i>
	                </a>
	                <a href="#" class="btn btn-minimize btn-round btn-default">
	                	<i class="glyphicon glyphicon-chevron-up"></i>
	                </a>
	                <a href="#" class="btn btn-close btn-round btn-default">
	                	<i class="glyphicon glyphicon-remove"></i>
	                </a>
	            </div>
	        </div>
			
			<div class="box-content">
	            <form role="form" action="/manage/user" method="post">
	            	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	                <div class="form-group">
	                    <label for="InputUsername">*用户名</label>
	                    <input type="text" class="form-control" id="InputUsername" 
	                    placeholder="请输入用户名(*为必填项)" name="username">
	                </div>
					<div class="form-group">
	                    <label for="InputPassword1">*密码</label>
	                    <input type="password" class="form-control" name="userpwd"
	                    id="InputPassword1" placeholder="请输入密码(密码至少6位)">
	            	</div>
	            	<div class="form-group">
	                    <label for="InputPassword2">*请再次输入密码</label>
	                    <input type="password" class="form-control" name="userpwd2"
	                    id="InputPassword2" placeholder="请确保两次密码输入一致">
	            	</div>
	            	<div class="form-group">
	                    <label for="InputPassword2">邮箱</label>
	                    <input type="text" class="form-control" name="email"
	                    id="InputPassword2" placeholder="请输入邮箱">
	            	</div>
	            	<div class="form-group">
	                    <label for="InputPassword2">手机号</label>
	                    <input type="text" class="form-control" name="telephone"
	                    id="InputPassword2" placeholder="请输入手机号">
	            	</div>
	                <button type="submit" class="btn btn-default">提交</button>
	                <button type="reset" class="btn btn-default">重置</button>
	            </form>
	    	</div>
	    </div>  
	</div>
</div>
@endsection
