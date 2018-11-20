<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redis</title>
    <link rel="stylesheet" href="{{ asset('layui-v2.4.3/css/layui.css') }}">
</head>
<body>
<pre class="layui-code">
    Redis是一个开源的使用ANSI C语言编写、支持网络、可基于内存亦可持久化的日志型、Key-Value数据库

    redis的数据类型: string, hash, list, set, zset
        String实例
            一个键最大能存储512MB
            >set name 'redis.net.cn'
            >get name
        Hash实例
            (每个 hash 可以存储 232 - 1 键值对（40多亿）)
            >hmset user:1 username redis.net.cn password redis.net.cn points 200
            >hgetall user:1
        List：
            注意： rabitmq 添加了两次，但根据集合内元素的唯一性，第二次插入的元素将被忽略。
            集合中最大的成员数为 232 - 1 (4294967295, 每个集合可存储40多亿个成员)。
            >lpush redis.net.cn redis
            >lpush redis.net.cn mongodb
            >lpush redis.net.cn rabitmq
            >lrange redis.net.cn 0 10
        zset:
            >zadd key score member

    redis 命令:
        redis-cli
        在远程服务上执行命令: redis-cli -h host -p port -a password

        Redis keys 命令:
            >del key(该命令用于在 key 存在时删除 key)
            >dump key 序列化
            >exists key
            >expireat key timestamp 都用于为 key 设置过期时间。 不同在于 EXPIREAT 命令接受的时间参数是 UNIX 时间戳(unix timestamp)
            >pexpire key millseconds 设置 key 的过期时间亿以毫秒计
            >pexpireat key milliseconds-timestamp 设置 key 过期时间的时间戳(unix timestamp) 以毫秒计
            >keys pattern 查找所有符合给定模式( pattern)的 key
            >move key db 将当前数据库的 key 移动到给定的数据库 db 当中
            >persist key 移除 key 的过期时间，key 将持久保持
            >pttl key 以毫秒为单位返回 key 的剩余的过期时间
            >ttl key 以秒为单位，返回给定 key 的剩余生存时间(TTL, time to live)。
            >randomkey
            >rename key new key
            >type key 返回 key 所储存的值的类型

        Redis字符串命令:
            >set key value 设置指定 key 的值
            >get key 获取指定 key 的值
            >getrange key start end 返回 key 中字符串值的子字符
            >getset key value 将给定 key 的值设为 value ，并返回 key 的旧值(old value)
            >getbit key offset 对 key 所储存的字符串值，获取指定偏移量上的位(bit)。
            >mget key1 key2


</pre>

    <script src="{{ asset('layui-v2.4.3/layui.js') }}"></script>
    <script>
        layui.use('code', function () {
            layui.code()
        })
    </script>
</body>
</html>
