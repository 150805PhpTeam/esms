<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册/添加用户</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/tether.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script>
        function back() {
            window.history.back();
        }
    </script>
    <style>
        .main-container {
            background-color: #fff;
            margin-bottom: 30px;
            margin-top: 30px;
            padding: 30px 65px 60px 65px;
            border-radius: 4px;
            /* webkit-box-shadow: 0 0 4px rgba(0,0,0,.25), inset 0 0 0 rgba(0,0,0,.1); */
            box-shadow: 0 0 4px rgba(0,0,0,.25), inset 0 0 0 rgba(0,0,0,.1);
        }
        .ban-separate {
            margin-left: 5px;
            margin-right: 5px;
        }
    </style>
</head>
<body>
<?php
/*
 * 后端通过传递变量auth，来决定本页是否对用户开放
 * */
if($auth == 0) {
    echo <<< START
        <div class="row" style="margin-left: 60px; margin-right: 60px; margin-top: 30px">
            <div class="col-md-8">
                <div class="alert alert-danger">
                    <h2 class="text-danger">你没有添加用户的权限</h2>
                        <button class="btn btn-default" onclick="back()">返回</button>
                </div>
            </div>
        </div>
START;

    exit();
}
?>

<div class="container main-container">
    <?php
    /*
     * 后端通过在data传递变量error，可在本页上显示相应的错误提示
     * 详细错误类型见下方代码
     * */
    if ($error != 0) {
        echo <<< START
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">出现错误</h3>
                    </div>
                    <div class="panel-collapse collapse in">
                        <div class="panel-body">
                            <ul> 
START;
        if ($error == 1) {
            echo '<li class="text-danger">用户名不合法</li>';
        } else if ($error == 2) {
            echo '<li class="text-danger">两次输入密码不一致</li>';
        } else if ($error == 3) {
            echo '<li class="text-danger">用户名已存在</li>';
        } else if ($error == 4) {
            echo '<li class="text-danger">其它错误，请联系您的业务经理</li>';
        }
        echo <<< END
                         </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
END;
    }
    ?>

    <div class="row">
        <div class="col-md-6">
            <h2>注册/添加用户</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="alert alert-info">
                <h4>
                    <span class="glyphicon glyphicon-info-sign"></span>
                    提示
                </h4>
                <ul>
                    <li>本页面用于注册或添加新用户。</li>
                    <li>如果管理员开启了自助注册功能，您可以在这里注册一个新的账户。
                        请您在注册成功后知会您的主管告诉他关于您的账户的情况。</li>
                    <li>如果管理员没有开启自助注册功能，而您是负责人力资源主管或业务经理，
                        则您可以在本页面为新入职的员工创建一个新用户。</li>
                </ul>
            </div>
        </div>
    </div>

    <form class="col-md-5">
        <div class="form-group">
            <label for="username">用户名</label>
            <input type="text" class="form-control" placeholder="请输入用户名" id="username">
            <small>可输入字符包括大小写字母、数字、连接线“-”、下划线“_”</small>
        </div>
        <div class="form-group">
            <label for="password">密码</label>
            <input type="password" class="form-control" placeholder="请输入密码" id="password">
            <small>强烈建议混合使用大小写字母、数字、字符</small>
        </div>
        <div class="form-group">
            <label for="password_confirm">确认密码</label>
            <input type="password" class="form-control" placeholder="请再输入一次" id="password_confirm">
        </div>
        <div class="form-group">
            <label for="department">所属部门</label>
            <select class="form-control" id="department">
                <option>货运部</option>
                <option>办公室</option>
                <option>仓管</option>
            </select>
            <small>如果您不清楚您所属的部门，或列表内没有您所属的部门，请联系您的业务经理</small>
        </div>
        <button class="btn btn-primary ban-separate" type="submit">注册/添加</button>
        <button class="btn btn-default ban-separate" type="button" onclick="back()">返回</button>
    </form>
</div>
</body>
</html>