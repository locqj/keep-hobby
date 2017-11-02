# 习惯养成系统
## 环境搭建
### 开发环境
* php 7.1.7, mysql 5.6.+, nginx ,linux ubuntu16
### 开发工具
* sublime
### 开发框架
* laravel 5.4
## 项目需求
1. 用户登录注册系统,修改自己的用户基本信息.
2. 用户创建,删除,修改习惯记录.
3. 习惯活动记录打卡,完成后对今天的打卡进行打分.

## 页面设计流程
* 注册(register)完后直接跳转到登录界面(login),登录成功后到首页.
* 首页(index)是功能点是选择健康计划,然后点击健康计划进入打卡页面(action)
* 打卡完成跳出弹框记录当天心情.

## 代码设计
#### 0.1 版本
* 登录注册模块
* 打卡创建,修改,删除模块
