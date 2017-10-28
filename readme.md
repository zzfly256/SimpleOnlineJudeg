# Simple OJ 前台系统API接口文档

Version: 20171028

Author: Rytia

## 获取工作队列中元素个数
- 地址： /api/count
- 方式： GET
- 返回类型： 纯文本
- 返回结果： 数字

## 获取工作队列队头
- 地址： /api/get
- 方式： GET
- 返回类型： JSON
- 返回结果： id, question_id, user_id, code
- 备注： 对头一旦被获取成功，将会被自动删除。若 id 为 0，则代表已经没有要评测的了。

## 修改工作队列某个元素评测状态
- 地址： /api/task/{id}/{status}
- 方式： GET
- 返回类型： 纯文本
- 返回结果： true / false
- 备注： id 为队头API所获取到的 id 字段，status 中 3 为通过，4为错误，5为超时

## 获取题目信息
- 地址： /api/question/{id}
- 方式： GET
- 返回类型： JSON
- 返回结果： id, time, input, result, star

## 给用户升级
- 地址： /api/user/{id}/{level}
- 方式： GET
- 返回类型： 纯文本
- 返回结果： true / false
- 备注： id 为队头API所获取到的 user_id 字段，level 为所需要升的级数。执行本次API之后，用户做题数会自动增加一题

## 获取全部用户信息
- 地址： /api/user
- 方式： GET
- 返回类型： JSON
- 返回结果： 对象数组，涵盖用户ID、等级、做题数等
- 示范：
```$xslt
<?php

$user = json_decode(file_get_contents("http://127.0.0.1/api/user"));

//全部用户 - 对象数组
print_r($user);

//取出第一个用户等级
print_r($user[0]->level);

?>
```