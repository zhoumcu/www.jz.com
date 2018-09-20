<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\project\www.shop.com\public/../application/admin\view\goods\add.html";i:1535873800;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="<?php echo config('static_admin'); ?>/css/style.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="<?php echo config('static_admin'); ?>/js/jquery.js"></script>
    <script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js?v=1"></script>
    <script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script language="JavaScript" src="/plugins/PoPlayer/layer.js"></script>
    <style>
        .active{
            border-bottom: solid 3px #66c9f3;
        }
    </style>
</head>

<body>
    <div class="place">
        <span>位置：</span>
        <ul class="placeul">
            <li><a href="#">首页</a></li>
            <li><a href="#">表单</a></li>
        </ul>
    </div>
    <div class="formbody">
        <div class="formtitle">
            <span class="active">基本信息</span>
            <span>商品属性信息</span>
            <span>商品相册</span>
          <span>商品描述</span>
        </div>

        <form action="" method="post" name='form'>
            <ul class="forminfo">
                <li>
                    <label>商品名称</label>
                    <input name="goods_name" placeholder="请输入商品名称" type="text" class="dfinput" /><i>名称不能超过30个字符</i>
                </li>
                <li>
                    <label>所属分类</label>
                    <select name='cat_id' class="dfinput">
                        <option value=''>请选择所属商品分类</option>
                        <?php if(is_array($cat_data) || $cat_data instanceof \think\Collection || $cat_data instanceof \think\Paginator): $i = 0; $__LIST__ = $cat_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $v['cat_id']; ?>"><?php echo $v['cat_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </li>
                <li>
                    <label>商品价格</label>
                    <input name="goods_price" placeholder="请输入商品价格" type="text" class="dfinput" /><i>大于0</i>
                </li>
                <li>
                    <label>商品库存</label>
                    <input name="goods_number" placeholder="请输入商品库存" type="text" class="dfinput" /><i>大于等于0</i>
                </li>
                <li>
                    <label>是否回收站</label>
                    <cite>
                        <input name="is_delete" type="radio" value="0"  checked="checked"/>否&nbsp;&nbsp;&nbsp;&nbsp;
                        <input name="is_delete" type="radio" value="1" />是
                    </cite>
                </li>
                <li>
                    <label>上架</label>
                    <label><input name='is_sale' type='radio' value='0'>未上架</label>
                    <label><input name='is_sale' type='radio' value='1' checked="checked">已上架</label>
                </li>
                <li>
                    <label>新品</label>
                    <label><input name='is_new' type='radio' value='0' >非新品</label>
                    <label><input name='is_new' type='radio' value='1'checked="checked">新品</label>
                </li>
                <li>
                    <label>热卖</label>
                    <label><input name='is_hot' type='radio' value='0'>非热卖</label>
                    <label><input name='is_hot' type='radio' value='1' checked="checked">热卖</label>
                </li>
                <li>
                    <label>推荐</label>
                    <label><input name='is_best' type='radio' value='0'>非推荐</label>
                    <label><input name='is_best' type='radio' value='1' checked="checked">推荐</label>
                </li> 
            </ul>
            <ul class="forminfo">
                <li>
                    <label>所属类型</label>
                    <select name='type_id'class="dfinput" onchange="typechange(this)" style="margin-bottom: 10px">
                        <option value=''>请选择所属商品类型</option>
                        <?php if(is_array($type_data) || $type_data instanceof \think\Collection || $type_data instanceof \think\Paginator): $i = 0; $__LIST__ = $type_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $v['type_id']; ?>"><?php echo $v['type_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </li>
            </ul>
            <ul class="forminfo">
                <li>
                    <label>商品相册</label>
                    <ul>
                        <li>
                          <fieldset style='margin: 10px;border:1px solid #ccc;'>
                            <legend>颜色</legend>
                            <p style='margin:10px'>
                                <a href="javacsript:;" onclick="color(this)">[+]</a>
                                <select  class="dfinput" style='width: 60px' onchange="colorc(this)">
                                    <option value='blue'>蓝</option>
                                    <option value='red'>红</option>
                                    <option value='green'>绿</option>
                                </select>
                            </p>
                            <p>
                                <a href="javascript:;" onclick="img(this)">[+]</a>&nbsp;&nbsp;&nbsp;<input name="file_blue[]" type='file' class="dfinput"/>
                            </p>
                        </fieldset>  
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="forminfo">
               <li>
                    <label>商品详情</label>
                    <textarea name='goods_desc' id='goods_desc'></textarea>
                </li> 
            </ul>

			<li>
                    <label>&nbsp;</label>
                    <input name="" id="btnSubmit" type="button" class="btn" value="确认保存" />
             </li>
        </form>
    </div>
</body>
<script>
     //实例化富文本框
     var ue = UE.getEditor('goods_desc');
    //选项卡
    $(".formtitle span").click(function(event){
        $(this).addClass('active').siblings("span").removeClass('active') ;
        var index = $(this).index();
        $("ul.forminfo").eq(index).show().siblings(".forminfo").hide();
    });
     $(".formtitle span").eq(0).click();

      //回车提交
    $(document).keyup(function(e){
        if(e.which==13){
            $('#btnSubmit').click();
        }     
    });

    //点击提交
   $('#btnSubmit').click(function(){
            var form =document.form;
           var formdata=new FormData(form);
            $.ajax({
                url:"<?php echo url('/admin/goods/add'); ?>",
                type:'POST',
                data:formdata,
                async:true,
                cache:false,
                processData:false,
                contentType:false,
                dataType:'json',
                success:function(result){
                if(result.code==200){
                    layer.msg(result.msg);
                    return;
                    }
                layer.msg(result.msg);
                }
            });
   });

   //改变颜色
   function colorc(obj){
        var obj=$(obj);
        var color=obj.val();
        obj.parent().nextAll().find('input').attr('name','file_'+color+'[]');
   }

   //颜色框
   function color(obj){
        var obj=$(obj);
        if(obj.html()=='[+]'){
            var clone=obj.parent('p').parent().clone();
            clone.children('p:eq(0)').find('a').html('[-]');
            clone.children('p:eq(1)').find('input').val('');
             obj.parent('p').parent().after(clone);
        }else{
            obj.parent('p').parent().remove();
        }
   }

   //多图片上传，点击事件添加或删减
   function img(obj){
        var obj=$(obj);
        if(obj.html()=='[+]'){
            var clone=obj.parent('p').clone();
            clone.children('a').html('[-]');
            clone.children('input').val('');
            obj.parent().after(clone);
        }else{
            obj.parent('p').remove();
        }
   }

   //选择类型时查训其所有属性
   function typechange(obj){
        var obj=$(obj);
        var type_id=obj.val();
       $.get("<?php echo url('/admin/goods/change'); ?>",{type_id:type_id},function(result){
            //console.log(result.data);
            obj.nextAll().remove();
            var html='';
            var arr=result.data;
            for(var i=0;i<arr.length;i++){
                var attr=arr[i]['attr_type']==1?'[]':'';
                html+="<li>";
                //单选属性可以多个
                if(arr[i]['attr_type']==1){
                    html+="<a href='javascript:;' onclick='img(this)'>[+]</a>";
                }
                //属性名称
                html+=arr[i]['attr_name']+"：&nbsp;&nbsp;";
                //列表输入，为下拉框
                if(arr[i]['attr_input_type']==1){
                    html+="<select name='attr_value["+arr[i]['attr_id']+"]"+attr+" class='dfinput'>";
                    var attr_values=arr[i]['attr_values'].split('|');
                    for(var j=0;j<attr_values.length;j++){
                       html+="<option value='"+attr_values[j]+"'>"+attr_values[j]+"</option>";
                    }
                    html+="</select>";              
                }else{
                    //手动输入为文本框
                    html+="<input name='attr_value["+arr[i]['attr_id']+"]"+attr+"' type='text' placeholder='请填写属性值' class='dfinput'/>";
                }
                //单选属性具有价格
                if(arr[i]['attr_type']==1){
                    html+="&nbsp;&nbsp;价格：<input name='attr_price["+arr[i]['attr_id']+"]"+attr+"' type='text' style='width:50px' class='dfinput'/>&nbsp;元";
                }
                html+="</li>";
            }
            //console.log(html);
            obj.parent().append(html);

       },'json');
   }


     
</script>

</html>
