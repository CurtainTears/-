<?php
// 简易代理
// 允许跨域
header('Access-Control-Allow-Origin: *');
header('Content-type: text/html; charset=utf-8');
/**
 * 等到资源加载完成（或者直接等到提示你刷新）后在控制台执行下方代码：
 * 注意：192.168.50.50:82为我给提供的php地址，也可以直接配置nginx。主要是为了返回服务器列表
 * 特别提醒：不要使用别人的代理，因为这里会接收到明文的账号以及TOKEN！！！！！
 * window['serviceListdUrl'] = "http://192.168.50.50:82/server";
 * window['setServiceListdUrl'] = "http://192.168.50.50:82/server";
 * start();
 */
exit('{"login":[999,997,990],"serverlist":[{"name":"无天测试","serverlist":[{"originalSrvid":1,"srvid":1,"srvaddr":"121.37.155.68","id":2,"serverAlias":"s1","serverName":"国内1区","opentime":"2022-03-23 23:59:51","srvport":35317,"type":2,"pf":"yfbx"},{"originalSrvid":1,"srvid":1,"srvaddr":"103.213.4.14","id":3,"serverAlias":"s1","serverName":"国内1区","opentime":"2022-03-23 23:59:51","srvport":10317,"type":2,"pf":"yfbx"}]}]}');
