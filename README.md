## 使用方式

### composer引用
```
composer require byteplus_sdk/byteplus-sdk-php
```

### 地域Region设置
- 目前已开放一个地域设置，分别为
  ```
  - ap-singapore-1
  ```
- 默认为ap-singapore-1，如果需要调用其它地域服务，请在初始化函数getInstance中传入指定地域region，例如：
  ```
  $client = Iam::getInstance('us-east-1');
  ```
- 注意：IAM模块目前只开放ap-singapore-1区域

### AK/SK设置
- 在代码里显示调用VodService的方法setAccessKey/setSecretKey

- 在当前环境变量中分别设置 BYTEPLUS_ACCESSKEY="your ak"  BYTEPLUS_SECRETKEY = "your sk"

- json格式放在～/.byteplus/config中，格式为：{"ak":"your ak","sk":"your sk"}

以上优先级依次降低，建议在代码里显示设置，以便问题排查

#### 更多示例参见
example



