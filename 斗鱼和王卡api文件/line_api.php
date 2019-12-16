<?php


	//聚力网络科技 版权所有 
	//QQ: 1744744222
	
	
 	include('head.php');
	include('nav.php');
	
	$douyu_host = db("map")->where(array("key"=>"douyu"))->find();
	$dawang_host = db("map")->where(array("key"=>"dawang"))->find();
	
	if($_GET['act'] == 'douyu_add'){
		if(db("map")->where(array("key"=>"douyu"))->update(array(
			'value'=>$_POST['douyu_api'],
		))){
			tip_success("更新斗鱼动态API【".$_POST['douyu_api']."】成功！",'?');
		}else{
			tip_failed("十分抱歉修改失败",'?');
		}
		
	}elseif($_GET['act'] == 'dawang_add'){
		if(db("map")->where(array("key"=>"dawang"))->update(array(
			'value'=>$_POST['dawang_api'],
		))){
			tip_success("更新大王卡动态API【".$_POST['dawang_api']."】成功！",'?');
		}else{
			tip_failed("十分抱歉修改失败",'?');
		}
	
	
	
	
	}else{
	
	
 ?>
<div class="box">
<div class="main">


<button class="btn btn-info">斗鱼动态接口</button>&nbsp;(修改此处可自动替换斗鱼动态线路API地址，留空则使用线路内默认API配置，标签：[douyu_api] 会自动替换斗鱼动态线路API地址)
	<form class="form-horizontal" role="form" method="POST" action="?act=douyu_add">
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">斗鱼动态接口API<font style="color:red">*</font></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="douyu_api" placeholder="请输入斗鱼动态接口访问API" value="<?php echo $douyu_host["value"] ?>">
        </div>
    </div>
   
   
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-success ">保存</button>  
		</div>
		</div>
	</form> 
	
	
<button class="btn btn-info">大王卡动态接口</button>&nbsp;(修改此处可自动替换大王卡动态线路API地址，留空则使用线路内默认API配置，标签：[dawang_api] 会自动替换大王卡动态线路API地址)
	<form class="form-horizontal" role="form" method="POST" action="?act=dawang_add">
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">大王卡动态接口API<font style="color:red">*</font></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="dawang_api" placeholder="请输入大王卡动态接口访问API" value="<?php echo $dawang_host["value"] ?>">
        </div>
    </div>
   
   
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-success ">保存</button>  
		</div>
		</div>
	</form> 
	</br>
	Tips：需要其他接口请自行修改PHP文件和数据库（或联系开发人员寻求帮助）！
</div>
</div>


<?php
	}
	include('footer.php');
	

