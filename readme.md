## simple php mvc

主要目录结构:

    app
        controllers         控制器
        core        
            App.php         路由处理   
            Controller.php  视图渲染，model处理
        models              model类
        views               视图
        database.php        处理数据库配置，该处用 illuminate/database
        init.php            初始化
    public                  公共文件及入口
        css
        js
        index.php

注意`apache`配置，获取路由及设置访问权限

使用 [illuminate/database](https://packagist.org/packages/illuminate/database) 作为model处理,具体对model的增删改查使用方法
参考 [laravel Eloquent使用](http://d.laravel-china.org/docs/5.4/eloquent)
