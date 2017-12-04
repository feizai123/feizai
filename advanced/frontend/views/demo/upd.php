<?php 
    use yii\helpers\Url;
?>
<meta charset="utf8">

<style>
table{ border-collapse: collapse; border: 1px solid #ddd; width: 800px; margin: 0 auto;margin-top: 50px; background: rgba(121, 217, 221, 0.4); color: #666}
table tr{ height: 40px;}
table td{ border: 1px solid #ddd; text-align: center}

*{margin: 0; padding:0 ; font-family: 微软雅黑}
a{ text-decoration: none; color: #666;}
ul{ list-style: none}

.top{ width: 100%; background: rgba(14, 196, 210, 0.99); color: #fff; height: 100px; line-height: 150px; text-align: right;}
.top span{ margin-right: 20px}


.left{ width: 260px; float: left; height: 100%; background: rgba(121, 217, 221, 0.4)}
.left ul{ list-style: none; width: 100%;}
.left ul li{ height: 40px; width: 100%; border: 1px solid #ddd; line-height: 40px; text-align: center;}
.left .selected{ background: rgba(14, 196, 210, 0.99);}
.left .selected a{ color: #fff;}


.right{ float: left; width: 1000px;}
.search-box{ width: 900px; margin: 0 auto; margin-top: 100px; }
.right li{
    margin-top: 20px;
}
.right span{
    display: inline-block;
    width: 200px;
    line-height: 40px;
    height: 40px;
    text-align: right;
    margin-right: 20px;
}

.right .filed-name{
    width: 300px;
    line-height: 40px;
    height: 40px;
    border: 1px solid #ddd;
    border-radius: 3px;
    font-size: 14px;
}

.right .length{
    width: 140px;
    line-height: 40px;
    height: 40px;
    border: 1px solid #ddd;
    border-radius: 3px;
    font-size: 14px;
}

.submit{
    width: 150px;
    height: 40px;
    line-height: 40px;
    border-radius: 3px;
    border: 1px solid #ddd;
    display: inline-block;
    background: rgba(14, 196, 210, 0.99);
    color: #fff;
    text-align: center;
    margin-left: 200px;
    margin-top: 20px;
}
</style>

<div class="top">
    <span>欢迎管理员：admin</span>
</div>

<div class="left">
    <ul>
        <li><a href="<?= Url::toRoute(['demo/index'])?>">查看注册字段</a></li>
        <li class="selected"><a href="<?= Url::toRoute(['demo/add'])?>">添加注册字段</a></li>
    </ul>
</div>

<div class="right">
    <div class="search-box">
        <form action="<?php echo Url::to(['demo/upd_do']) ?>" method="post">
            <ul>
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <li>
                    <span>请输入字段名称：</span>
                   <input class="filed-name" type="text" name="name" value="<?php echo $data['name'] ?>">
                </li>
                <li>
                    <span>请输入字段默认值：</span>
                    <input class="filed-name" type="text" name="give" value="<?php echo $data['give']?>">
                </li>
                <li>
                    <span>请选择字段类型：</span>
                     <?php if ($data['type'] == '文本框') { ?>
                    <select name="type" id="">
                        <option value="文本框" selected>文本框</option>
                        <option value="单选框">单选框</option>
                        <option value="密码框">密码框</option>
                        <option value="文本域">文本域</option>
                    </select>
                    <?php } ?>
                    <?php if ($data['type'] == '单选框') { ?>
                    <select name="type" id="">
                        <option value="文本框" >文本框</option>
                        <option value="单选框" selected>单选框</option>
                        <option value="密码框">密码框</option>
                        <option value="文本域">文本域</option>
                    </select>
                    <?php } ?>
                    <?php if ($data['type'] == '密码框') { ?>
                    <select name="type" id="">
                        <option value="文本框">文本框</option>
                        <option value="单选框">单选框</option>
                        <option value="密码框" selected>密码框</option>
                        <option value="文本域">文本域</option>
                    </select>
                    <?php } ?>
                    <?php if ($data['type'] == '文本域') { ?>
                    <select name="type" id="">
                        <option value="文本框">文本框</option>
                        <option value="单选框">单选框</option>
                        <option value="密码框">密码框</option>
                        <option value="文本域" selected>文本域</option>
                    </select>
                    <?php } ?>
                </li>
                <li>
                    <span>请填写字段选项：</span>
                   <input type="text" class="filed-name" placeholder="选项1" name="option" value="<?php echo $data['option'] ?>">
                    <input type="text" class="filed-name" placeholder="选项2" name="options" value="<?php echo $data['options']?>">
                </li>
                <li>
                    <span>是否必填：</span>
                     <?php if ($data['ok'] == '1') { ?>
                           <input type="checkbox" value="1" name="ok" checked>必填
                    <?php } ?>
                     <?php if ($data['ok'] == '0') { ?>
                           <input type="checkbox" value="1" name="ok">必填
                    <?php } ?>
                            
                </li>
                <li>
                    <span>请选择验证规则：</span>
                       <?php if($data['rule'] == '无'){?>
                        <select name="rule" id="">
                        <option value="无" selected>无</option>
                        <option value="手机号码"  >手机号码</option>
                        <option value="长度">长度</option>
                        </select>
                        <?php }?>
                        <?php if($data['rule'] == '手机号码'){?>
                        <select name="rule" id="">
                        <option value="无">无</option>
                        <option value="手机号码" selected >手机号码</option>
                        <option value="长度">长度</option>
                        </select>
                        <?php }?>
                        <?php if($data['rule'] == '长度'){ ?>
                        <select name="rule" id="">
                         <option value="无">无</option>
                         <option value="手机号码">手机号码</option>
                          <option value="长度" selected >长度</option>
                        </select>
                        <?php } ?>
                    
                </li>
                <li>
                    <span>请选择填写长度范围：</span>
                    <input class="length" type="text" value="<?php echo $data['r_scope'] ?>" placeholder="请输入最小长度" name="r_scope">
                    ~
                    <input class="length" type="text" value="<?php echo $data['l_scope'] ?>" placeholder="请输入最大长度" name="l_scope">
                </li>
                <li>
                   <input type="submit" name="" class="submit" value="提交">
                </li>
            </ul>
        </form>
    </div>
</div>