<!DOCTYPE html>
<html lang="en">
<head>
    <title>登录</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/tether.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript">
        function forget_password() {
            var tips = "自动密码重置未启用\n" +
                "请立即联系您的业务经理重置密码！";
            alert(tips);
        }
        function back() {
            window.history.back();
        }
    </script>
    <style>
        .main-container {
            background-color: #fff;
            margin-bottom: 20px;
            margin-top: 15px;
            padding: 30px 65px 60px 65px;
            border-radius: 4px;
            /* webkit-box-shadow: 0 0 4px rgba(0,0,0,.25), inset 0 0 0 rgba(0,0,0,.1); */
            box-shadow: 0 0 4px rgba(0,0,0,.25), inset 0 0 0 rgba(0,0,0,.1);
        }
    </style>
</head>
<body>
<div class="jumbotron">
    <div class="col-md-offset-2">
        <h1>演练，让仓储更轻松！</h1>
        <p>
            演练仓储系统可以使您的仓储管理工作更加轻松有序，减轻了您繁重的调度工作！<br>
            赶快来了解一下吧！
        </p>
        <p><a class="btn btn-primary" href="#">了解更多</a></p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="main-container col-md-6 col-md-offset-3">
            <?php
            /*
             * 后端通过传入error变量来决定前端可选显示内容
             * 详细error类型见下方代码
             */
            if ($error != 0) {
                echo '<div class="row">';
                echo '  <div class="alert alert-danger">';
                if ($error == 1) {
                    echo '<p class="text-danger">用户名不存在或密码错误！</p>';
                } elseif ($error == 2) {
                    echo '<p class="text-danger">系统暂时不允许任何人登录！</p>';
                }
                echo '</div>';
                echo '</div>';
            }
            ?>
            <h2>登录演练仓储系统</h2>
            <form style="margin-top: 15px">
                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="userName">用户名</label>
                        <input type="text" class="form-control" placeholder="请输入用户名" id="userName">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="password">密码</label>
                        <input type="password" class="form-control" placeholder="请输入密码" id="password">
                        <label class="form-control-static"><a href="javascript:forget_password()">忘记密码</a> </label>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">登录</button>
                <button class="btn btn-default" type="button" onclick="back()">返回</button>
            </form>
            <p class="col-md-6" style="margin-top: 20px;">您是新入职员工？请联系您的业务经理注册账户</p>
        </div>
    </div>
</div>
<div class="jumbotron" style="margin-top: 50px; margin-bottom: -20px">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <small>
                本演练仓储系统由150805班学习小组开发<br>
                联系方式：QQ群：xxxxxxxxx
            </small>
        </div>
    </div>
</div>
</body>
</html>