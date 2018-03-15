<?php  error_reporting(E_ALL);// 显示所有错误 ?>
PHP_EOL
str_replace()
str_ireplace()
stripslashes()
strip_tags()
strcmp()
fgetss()
nl2br()
pow()
strcasecmp()
strnatcmp()
strnatcasecmp()
strncmp()
strstr()
stristr()
substr()
strrev()
substr_count()
substr_replace()
strpos()
str_repeat()
explode()
implode()
join()
var_export()
sort()
rsort()
asrot()
arsort()
ksort()
krsort()
serialize()
ceil()
filesize()
file_exists()
ord()
chr()
rand()
ucfirst()
strtoupper()
strtolower()
array_key_exists()
current()
array_rand()
array_merge()
array_chunk()
array_push()
array_splice()
array_pop()
array_unique()
array_values()
array_unshift()
shuffle()
similar_text()
preg_replace()
round()
opendir()
readdir()
closedir()
get_class()
debug_backtrace()
trigger_error()
sleep()
is_callable()
eval()
call_user_func()
class_exists()
array_values()
array_keys()
in_array()
array_search()
array_flip()
array_reverse()
array_filter()
array_walk()
array_map()
array_slice()
array_combine()
array_intersect()
array_diff()
array_sum()
range()
array_fill()
str_pad()
ucwords()
htmlspecialchars()
addslashes()
stripslashes()
dirname()
basename()
pathinfo()
realpath()
set_error_handler()
error_log()
microtime()
chdir()
chroot()
closedir()
dir()
getcwd()
opendir()
readdir()
rewinddir()
disk_total_space()
disk_free_space()
touch()
ftruncate()
file_get_contents()
file_put_contents()
file()
readfile()
gettype()用来取得变量的类型。返回的类型字符串可能为下列字符串其中之一：integer、double、string、array、object、unknown type
is_numeric ( mixed var ): //检验测定变量是不是为数码或数码字符串 
is_bool(): //检验测定变量是不是是布尔型 
is_float(): //检验测定变量是不是是浮点型 和is_double，is_real()都同样的用法 
is_int(): //检验测定变量是不是是整儿is_integer()同样的用法 
is_string(): //检验测定变量是不是是字符串 
is_object(): //检验测定变量是不是是一个对象 
is_array(): //检验测定变量是不是是数组 
is_null(): //检验测定变量是不是为 灭茬 值是不是是灭茬巨细写敏感
ps:
$a = 0;
if(is_bool($a)){
                echo 'good';
}else{
                echo 'king';
}

ps:echo (trim('??xiao?','?'));

htmlentities()
preg_match —执行一个正则表达式匹配

正则表达式语法规则：
行定位符：“^”表示行的开始；“$”表示行的结尾。ps:^mr，匹配mr开头的字符串，例如mrsoft,mrbook.
排除字符：“^”这个字符在开头是表示行的开始，如果是在中间出现是“非”的意思。ps:[^a-zA-Z]的意思是匹配非字            母字符串
限定符  ：限定符用来指定正则表达式的一个给定组件必须要出现多少次才能满足匹配。有*或+或?或{n}或{n,}或{n,m}   共6种。
  *、+和?限定符都是贪婪的，因为它们会尽可能多的匹配文字，只有在它们的后面加上一个?就可以实现非贪婪或最小匹配。

    　　 正则表达式的限定符有：
      字符  描述 
        *  匹配前面的子表达式零次或多次。例如，zo* 能匹配 "z" 以及 "zoo"。* 等价于{0,}。 
        +  匹配前面的子表达式一次或多次。例如，'zo+' 能匹配 "zo" 以及 "zoo"，但不能匹配 "z"。+ 等价于 {1,}。 
        ?  匹配前面的子表达式零次或一次。例如，"do(es)?" 可以匹配 "do" 或 "does" 中的"do" 。? 等价于 {0,1}。 
        {n}  n 是一个非负整数。匹配确定的 n 次。例如，'o{2}' 不能匹配 "Bob" 中的 'o'，但是能匹配 "food" 中的两个 o。 
        {n,}  n 是一个非负整数。至少匹配n 次。例如，'o{2,}' 不能匹配 "Bob" 中的 'o'，但能匹配 "foooood" 中的所有 o。'o{1,}' 等价于 'o+'。'o{0,}' 则等价于 'o*'。 
        {n,m}  m 和 n 均为非负整数，其中n <= m。最少匹配 n 次且最多匹配 m 次。例如，"o{1,3}" 将匹配 "fooooood" 中的前三个 o。'o{0,1}' 等价于 'o?'。请注意在逗号和两个数之间不能有空格。

. 匹配除换行符\n之外的任何单字符。要匹配.，请使用\.

指定预定义的字符集
字符    含义
\d      任意一个十进制数字[0-9]
\D      任意一个非十进制数字
\s      任意一个空白字符(空格、换行符、换页符、回车符、字表符)
\S      任意一个非空白字符
\w      任意一个单词字符
\W      任意个非单词字符

strtotime()
echo date("Y-m-d H:i:s",strtotime('27 February 2016'));

<?php
    $dbms = 'mysql';
    $host = 'localhost';
    $user = 'root';
    $pwd = 'skyuse2017';
    $dbName = 'test';
    $dsn = "$dbms:host=$host;dbname=$dbName";
    try{
        $pdo = new PDO($dsn,$user,$pwd);
        echo 'king good';
    }catch(exception $e){
        echo $e->getMessage();
    }
?>

PDO 添加数据,用 exec()
PDO:用预处理语句 prepare()和 execute()添加数据（注：多次使用 SQL，推荐使用PDO::prepaare）
PDO 查询数据,query()返回执行查询后的结果集,(注:使用一次 SQL 语句,推荐使用PDO::query)
PDO 查询数据:预处理语句-prepare()方法做查询的准备工作，和 execute()执行查询。
PDO::fetch方法获取结果集中下一行的数据库。
PDO::fetchAll()方法用于获取结果集中的所有行。
PDO::fetchColumn()方法获取结果集中下一行指定的值。
PDO::errorCode()方法用于获取操作数据库句柄时所产生的错误代码（注：推荐使用PDO警千模式：PDO::ERRMODE_WARNING)
PDO::errorinfo()方法用于获取操作数据库句柄时所产生的错误代码（注：推荐使用PDO的警告模式）
PDO:使用警告模式--PDO::ERRMODE_EXCEPTION
$pdo>setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
PDO:使用异常模式--PDO::ERRMODE_EXCEPTION
$pdo>setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

setcookie(name,value,expire,path,domain,secure)
isset()函数检测 Cookie 是否存在

启动 Session:<?php session_start(); ?>
$_SESSION['XJ'] = 'XIAOJING';
可以用 isset 判断 Session 是否已定义，用 empty 判断 Session 是否为空
删除 Session
删除单个会话：unset($_SESSION["name"]);
删除多个会话：$_SESSION=array();
结束会话：session_destroy();

对 url 传递的参数进行编码
<a href="index.php?picname=<?php urlencode("xiaojing") ?>">goodboy</a>

GGD函数的应用例子，其它函数请参照手册。
imageline()画线，imagearc()画圆，imagerectangle()画矩形
<?php
    header("Content-type: image/png"); //将图像输出到浏览器
    $img = imagecreate(560, 200); //创建一个 560×200 的图像
    $bg = imagecolorallocate($img, 0, 0, 255); //设置图像背景色
    $white = imagecolorallocate($img, 255, 255, 255); //设置绘制图像的颜色为白色
    imageline($img, 20, 20, 150, 180, $white); //画一条线段
    imagearc($img, 250, 100, 150, 150, 0, 360, $white); //绘制一个白色的圆
    imagerectangle($img, 350, 20, 500, 170, $white); //绘制一个白色的正方形
    imagepng($img);//输出图像
    imagedestroy($img);//释放内存
?>


fopen()打开一个文件
fclose()关闭文件资源
fgetc — 从文件指针中读取字符
fgets — 从文件指针中读取一行
feof() 函数检查是否已到达 "end-of-file" (EOF)。对于遍历未知长度的数据很有用。
fread()读取任意长度的字串
fwrite — 写入文件
flock — 轻便的咨询文件锁定


resource fopen ( string $filename , string $mode [, bool $use_include_path = false [, resource $context ]] ) 
mode 参数指定了所要求到该流的访问类型。可以是以下： 
r   打开文件为只读。文件指针在文件的开头开始。
w   打开文件为只写。删除文件的内容或创建一个新的文件，如果它不存在。文件指针在文件的开头开始。
a   打开文件为只写。文件中的现有数据会被保留。文件指针在文件结尾开始。创建新的文件，如果文件不存在。
x   创建新文件为只写。返回 FALSE 和错误，如果文件已存在。
r+  打开文件为读/写、文件指针在文件开头开始。
w+  打开文件为读/写。删除文件内容或创建新文件，如果它不存在。文件指针在文件开头开始。
a+  打开文件为读/写。文件中已有的数据会被保留。文件指针在文件结尾开始。创建新文件，如果它不存在。
x+  创建新文件为读/写。返回 FALSE 和错误，如果文件已存在 

如果您用 fopen() 打开并不存在的文件，此函数会创建文件，假定文件被打开为写入（w）或增加（a）。

readfile — 输出文件
file — 把整个文件读入一个数组中
file_get_contents — 将整个文件读入一个字符串

$_FILES --HTTP 文件上传变量
move_uploaded_file — 将上传的文件移动到新位置
$_FILES["file"]["name"] - 被上传文件的名称
$_FILES["file"]["type"] - 被上传文件的类型
$_FILES["file"]["size"] - 被上传文件的大小，以字节计
$_FILES["file"]["tmp_name"] - 存储在服务器的文件的临时副本的名称
$_FILES["file"]["error"] - 由文件上传导致的错误代码

scandir()
is_dir()
closedir()
copy()
rename()
unlink()


<?php if ($expression == true): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show.
<?php endif; ?>
上例中 PHP 将跳过条件语句未达成的段落，即使该段落位于 PHP 开始和结束标记之外。由于 PHP 解释器会在条件未达成时直接跳过该段条件语句块，因此 PHP 会根据条件来忽略之。要输出大段文本时，跳出 PHP 解析模式通常比将文本通过 echo 或 print 输出更有效率。

如果只是想得到一个易读懂的类型的表达方式用于调试，用 gettype() 函数。要查看某个类型，不要用 gettype()，而用 is_type 函数。

当转换为 boolean 时，以下值被认为是 FALSE： 
布尔值 FALSE 本身 
整型值 0（零） 
浮点型值 0.0（零） 
空字符串，以及字符串 "0" 
不包括任何元素的数组 
不包括任何成员变量的对象（仅 PHP 4.0 适用） 
特殊类型 NULL（包括尚未赋值的变量） 
从空标记生成的 SimpleXML 对象 
所有其它值都被认为是 TRUE（包括任何资源）。 
Warning 
-1 和其它非零值（不论正负）一样，被认为是 TRUE！

要使用八进制表达，数字前必须加上 0（零）。要使用十六进制表达，数字前必须加上 0x。要使用二进制表达，数字前必须加上 0b。


Warning 
决不要将未知的分数强制转换为 integer，这样有时会导致不可预料的结果。 
<?php
  echo (int) ( (0.1+0.7) * 10 ); // 显示 7!
?> 

如果文件内容是纯 PHP 代码，最好在文件末尾删除 PHP 结束标记。这可以避免在 PHP 结束标记之后万一意外加入了空格或者换行符，会导致 PHP 开始输出这些空白，而脚本中此时并无输出的意图。

以十进制能够精确表示的有理数如 0.1 或 0.7，无论有多少尾数都不能被内部所使用的二进制精确表示，因此不能在不丢失一点点精度的情况下转换为二进制的格式。这就会造成混乱的结果：例如，floor((0.1+0.7)*10) 通常会返回 7 而不是预期中的 8，因为该结果内部的表示其实是类似 7.9999999999999991118...。 
所以永远不要相信浮点数结果精确到了最后一位，也永远不要比较两个浮点数是否相等。如果确实需要更高的精度，应该使用任意精度数学函数或者 gmp 函数

比较浮点数
如上述警告信息所言，由于内部表达方式的原因，比较两个浮点数是否相等是有问题的。不过还是有迂回的方法来比较浮点数值的。
要测试浮点数是否相等，要使用一个仅比该数值大一丁点的最小误差值。该值也被称为机器极小值（epsilon）或最小单元取整数，是计算中所能接受的最小的差别值。
$a 和 $b 在小数点后五位精度内都是相等的。
<?php
  $a = 1.23456789;
  $b = 1.23456780;
  $epsilon = 0.00001;
  if(abs($a-$b) < $epsilon) {
      echo "true";
  }
?>

字符串的Heredoc 结构
以<<<End开始标记开始，以End结束标记结束，结束标记必须顶头写，不能有缩进和空格，且在结束标记末尾要有分号 。开始标记和开始标记相同，比如常用大写的EOT、EOD、EOF来表示，但是不只限于那几个，只要保证开始标记和结束标记不在正文中出现即可。


Heredocs 结构不能用来初始化类的属性。自 PHP 5.3 起，此限制仅对 heredoc 包含变量时有效。
Example #1 非法的示例
<?php
  class foo {
      public $bar = <<<EOT
bar
EOT;
}
?>

在 PHP 5.3.0 以后，也可以用 Heredoc 结构来初始化静态变量和类的属性和常量：
Example #4 使用 Heredoc 结构来初始化静态值
<?php 
  // 静态变量
  function foo() {
    static $bar = <<<LABEL
  Nothing in here...
LABEL;
  } 
  // 类的常量、属性
  class foo {
    const BAR = <<<FOOBAR
  Constant example
FOOBAR;
    public $baz = <<<FOOBAR
  Property example
FOOBAR;
  } 
?>

owdoc 结构 
就象 heredoc 结构类似于双引号字符串，Nowdoc 结构是类似于单引号字符串的。Nowdoc 结构很象 heredoc 结构，但是 nowdoc 中不进行解析操作。这种结构很适合用于嵌入 PHP 代码或其它大段文本而无需对其中的特殊字符进行转义。与 SGML 的 <![CDATA[ ]]> 结构是用来声明大段的不用解析的文本类似，nowdoc 结构也有相同的特征。

Note:不象 heredoc 结构，nowdoc 结构可以用在任意的静态数据环境中，最典型的示例是用来初始化类的属性或常量：
Example #7 静态数据的示例
<?php
  class foo {
      public $bar = <<<'EOT'
bar
EOT;
}
?>

存取和修改字符串中的字符 ¶
string 中的字符可以通过一个从 0 开始的下标，用类似 array 结构中的方括号包含对应的数字来访问和修改，比如 $str[42]。可以把 string 当成字符组成的 array。函数 substr() 和 substr_replace() 可用于操作多于一个字符的情况。

Note: string 也可用花括号访问，比如 $str{42}。
Warning:PHP 的字符串在内部是字节组成的数组。因此用花括号访问或修改字符串对多字节字符集很不安全。仅应对单字节编码例如 ISO-8859-1 的字符串进行此类操作。

ps2:(注意！！！！！！)
<?php
    $str='xiao';
    $str[2]='jing';
    var_dump($str);//输出xijo
?>

一个布尔值 boolean 的 TRUE 被转换成 string 的 "1"。Boolean 的 FALSE 被转换成 ""（空字符串）。这种转换可以在 boolean 和 string 之间相互进行。

数组 array 总是转换成字符串 "Array"，因此，echo 和 print 无法显示出该数组的内容。要显示某个单元，可以用 echo $arr['foo'] 这种结构。

在 PHP 4 中对象 object 总是被转换成字符串 "Object"，如果为了调试原因需要打印出对象的值，请继续阅读下文。为了得到对象的类的名称，可以用 get_class() 函数。自 PHP 5 起，适当时可以用 __toString 方法。

资源 resource 总会被转变成 "Resource id #1" 这种结构的字符串，其中的 1 是 PHP 在运行时分配给该 resource 的唯一值。不要依赖此结构，可能会有变更。要得到一个 resource 的类型，可以用函数 get_resource_type()。

NULL 总是被转变成空字符串。

如上面所说的，直接把 array，object 或 resource 转换成 string 不会得到除了其类型之外的任何有用信息。可以使用函数 print_r() 和 var_dump() 列出这些类型的内容。

大部分的 PHP 值可以转变成 string 来永久保存，这被称作串行化，可以用函数 serialize() 来实现。如果 PHP 引擎设定支持 WDDX，PHP 值也可被串行化为格式良好的 XML 文本。 

字符串转换为数值 ¶
当一个字符串被当作一个数值来取值，其结果和类型如下：
如果该字符串没有包含 '.'，'e' 或 'E' 并且其数字值在整型的范围之内（由 PHP_INT_MAX 所定义），该字符串将被当成 integer 来取值。其它所有情况下都被作为 float 来取值。

该字符串的开始部分决定了它的值。如果该字符串以合法的数值开始，则使用该数值。否则其值为 0（零）。合法数值由可选的正负号，后面跟着一个或多个数字（可能有小数点），再跟着可选的指数部分。指数部分由 'e' 或 'E' 后面跟着一个或多个数字构成。
<?php
  $foo = 1 + "10.5";                // $foo is float (11.5)
  $foo = 1 + "-1.3e3";              // $foo is float (-1299)
  $foo = 1 + "bob-1.3e3";           // $foo is integer (1)
  $foo = 1 + "bob3";                // $foo is integer (1)
  $foo = 1 + "10 Small Pigs";       // $foo is integer (11)
  $foo = 4 + "10.2 Little Piggies"; // $foo is float (14.2)
  $foo = "10.0 pigs " + 1;          // $foo is float (11)
  $foo = "10.0 pigs " + 1.0;        // $foo is float (11)     
?>

静态变量可以按照上面的例子声明。如果在声明中用表达式的结果对其赋值会导致解析错误。
Example #7 声明静态变量
<?php
  function foo(){
      static $int = 0;          // correct
      static $int = 1+2;        // wrong  (as it is an expression)
      static $int = sqrt(121);  // wrong  (as it is an expression too)
      $int++;
      echo $int;
  }
?>

htmlspecialchars() 函数把特殊字符转换为 HTML 实体.通过使用 htmlspecialchars() 函数能够避免 $_SERVER["PHP_SELF"] 被利用。
表单代码是这样的：
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

在用户提交该表单时，我们还要做两件事：
    1（通过 PHP trim() 函数）去除用户输入数据中不必要的字符（多余的空格、制表符、换行）
    2（通过 PHP stripslashes() 函数）删除用户输入数据中的反斜杠（\）

foreach只能遍历一二维数组了，如果是三维数组我们需要进行递归操作了。

<form> 标签的 enctype 属性规定了在提交表单时要使用哪种内容类型。在表单需要二进制数据时，比如文件内容，请使用 "multipart/form-data"。
<form action="upload_file.php" method="post" enctype="multipart/form-data">

对于 IE 识别 jpg 文件的类型必须是 pjpeg，对于 FireFox，必须是 jpeg。

quotemeta()在预定义字符前添加反斜杠：
<?php
  $str = "Hello world. (can you hear me?)";
  echo quotemeta($str);
?>

检查浏览页面的访问者在用什么浏览器
<?php 
  echo $_SERVER['HTTP_USER_AGENT']; 
?>

 当从浮点数转换成整数时，将向下取整。 
 e.g (int)3.7
 如果浮点数超出了整数范围（32 位平台下通常为 +/- 2.15e+9 = 2^31，64 位平台下，除了 Windows，通常为 +/- 9.22e+18 = 2^63），则结果为未定义，因为没有足够的精度给出一个确切的整数结果。在此情况下没有警告，甚至没有任何通知！ 

Array 数组 ¶
PHP 中的数组实际上是一个有序映射。映射是一种把 values 关联到 keys 的类型。此类型在很多方面做了优化，因此可以把它当成真正的数组，或列表（向量），散列表（是映射的一种实现），字典，集合，栈，队列以及更多可能性。由于数组元素的值也可以是另一个数组，树形结构和多维数组也是允许的.

 数组中的key 会有如下的强制转换：
    包含有合法整型值的字符串会被转换为整型。例如键名 "8" 实际会被储存为 8。但是 "08" 则不会强制转换，因为其不是一个合法的十进制数值。
    浮点数也会被转换为整型，意味着其小数部分会被舍去。例如键名 8.7 实际会被储存为 8。
    布尔值也会被转换成整型。即键名 true 实际会被储存为 1 而键名 false 会被储存为 0。
    Null 会被转换为空字符串，即键名 null 实际会被储存为 ""。
    数组和对象不能被用为键名。坚持这么做会导致警告：Illegal offset type。

如果在数组定义中多个单元都使用了同一个键名，则只使用了最后一个，之前的都被覆盖了。
Example #2 类型强制与覆盖示例
<?php
  $array = array(
      1    => "a",
      "1"  => "b",
      1.5  => "c",
      true => "d",
  );
  var_dump($array);
?>

自 PHP 5.5 起可以直接对一个数组原型进行数组解引用。
Example #7 数组解引用
<?php
  function getArray() {
      return array(1, 2, 3);
  }
  // on PHP 5.4
  $secondElement = getArray()[1];
  // previously
  $tmp = getArray();
  $secondElement = $tmp[1];
  // or
  list(, $secondElement) = getArray();
?>

注：$arr[]=value,会给数组追加一个元素

要修改某个值，通过其键名给该单元赋一个新值。要删除某键值对，对其调用 unset() 函数。
<?php
  $arr = array(5 => 1, 12 => 2);
  $arr[] = 56;    // This is the same as $arr[13] = 56;
                  // at this point of the script
  $arr["x"] = 42; // This adds a new element to
                  // the array with key "x"
                  
  unset($arr[5]); // This removes the element from the array
  unset($arr);    // This deletes the whole array
?>

Note:如上所述，如果给出方括号但没有指定键名，则取当前最大整数索引值，新的键名将是该值加上 1（但是最小为 0）。如果当前还没有整数索引，则键名将为 0。 
注意这里所使用的最大整数键名不一定当前就在数组中。它只要在上次数组重新生成索引后曾经存在过就行了。以下面的例子来说明： 
<?php
  // 创建一个简单的数组
  $array = array(1, 2, 3, 4, 5);
  print_r($array);
  // 现在删除其中的所有元素，但保持数组本身不变:
  foreach ($array as $i => $value) {
      unset($array[$i]);
  }
  print_r($array);
  // 添加一个单元（注意新的键名是 5，而不是你可能以为的 0）
  $array[] = 6;
  print_r($array);
  // 重新索引：
  $array = array_values($array);
  $array[] = 7;
  print_r($array);
?>

Note:unset() 函数允许删除数组中的某个键。但要注意数组将不会重建索引。如果需要删除后重建索引，可以用 array_values() 函数。

转换为数组 ¶

对于任意 integer，float，string，boolean 和 resource 类型，如果将一个值转换为数组，将得到一个仅有一个元素的数组，其下标为 0，该元素即为此标量的值。换句话说，(array)$scalarValue 与 array($scalarValue) 完全一样。

将 NULL 转换为 array 会得到一个空的数组。

(not know)如果一个 object 类型转换为 array，则结果为一个数组，其单元为该对象的属性。键名将为成员变量名，不过有几点例外：整数属性不可访问；私有变量前会加上类名作前缀；保护变量前会加上一个 '*' 做前缀。这些前缀的前后都各有一个 NULL 字符。这会导致一些不可预知的行为： 
<?php
  class A {
      private $A; // This will become '\0A\0A'
  }
  class B extends A {
      private $A; // This will become '\0B\0A'
      public $AA; // This will become 'AA'
  }
  var_dump((array) new B());
?>

Example #12 填充数组
<?php
  // fill an array with all items from a directory
  $handle = opendir('.');
  while (false !== ($file = readdir($handle))) {
      $files[] = $file;
  }
  closedir($handle); 
?> 

 可以将变量放置在双引号中的方式来代替将变量转换成字符串：
<?php
  $foo = 10;            // $foo 是一个整数
  $str = "$foo";        // $str 是一个字符串
  $fst = (string) $foo; // $fst 也是一个字符串
  // 输出 "they are the same"
  if ($fst === $str) {
      echo "they are the same";
  }
?>

虽然在 PHP 中并不需要初始化变量，但对变量进行初始化是个好习惯。未初始化的变量具有其类型的默认值 - 布尔类型的变量默认值是 FALSE，整形和浮点型变量默认值是零，字符串型变量（例如用于 echo 中）默认值是空字符串以及数组变量的默认值是空数组。

可变变量
    $a='king';
    $$a='good';
    echo $king; //out put 'good'

要将可变变量用于数组，必须解决一个模棱两可的问题。这就是当写下 $$a[1] 时，解析器需要知道是想要 $a[1] 作为一个变量呢，还是想要 $$a 作为一个变量并取出该变量中索引为 [1] 的值。解决此问题的语法是，对第一种情况用 ${$a[1]}，对第二种情况用 ${$a}[1]。

Example #1 可变属性示例
<?php
  class foo {
      var $bar = 'I am bar.';
      var $arr = array('I am A.', 'I am B.', 'I am C.');
      var $r   = 'I am r.';
  }
  $foo = new foo();
  $arr = 'arr';
  echo $foo->$arr[1] . "\n";
  echo $foo->{$arr}[1] . "\n";
?>

执行运算符 ¶
PHP 支持一个执行运算符：反引号（``）。注意这不是单引号！PHP 将尝试将反引号中的内容作为 shell 命令来执行，并将其输出信息返回（即，可以赋给一个变量而不是简单地丢弃到标准输出）。使用反引号运算符“`”的效果与函数 shell_exec() 相同。
<?php
  $output = `ls -al`;
  echo "<pre>$output</pre>";
?>
Note:反引号运算符在激活了安全模式或者关闭了 shell_exec() 时是无效的。
Note:与其它某些语言不同，反引号不能在双引号字符串中使用。 

使用关键字 const 定义常量
和使用 define() 来定义常量相反的是，使用 const 关键字定义常量必须处于最顶端的作用区域，因为用此方法是在编译时定义的。这就意味着不能在函数内，循环内以及 if 语句之内用 const 来定义常量。


<?php
  // 以下代码在 PHP 5.3.0 后可以正常工作
  const CONSTANT = 'Hello World';
  echo CONSTANT;
?>

几个 PHP 的“魔术常量”
__LINE__    文件中的当前行号。
__FILE__    文件的完整路径和文件名。
__DIR__     文件所在的目录。。除非是根目录，否则目录中名不包括末尾的斜杠。（PHP 5.3.0中新增） =
__FUNCTION__    函数名称（PHP 4.3.0 新加）。
__CLASS__   类的名称（PHP 4.3.0 新加）。
__TRAIT__   Trait 的名字（PHP 5.4.0 新加）。
__METHOD__  类的方法名（PHP 5.0.0 新加）。
__NAMESPACE__   当前命名空间的名称（区分大小写）。此常量是在编译时定义的（PHP 5.3.0 新增）。 

为 $a 的当前值加 3，可以这样写：“$a += 3”。这里的意思是“取变量 $a 的值，加 3，得到的结果再次分配给变量 $a”。除了更简略和清楚外，也可以更快的运行。

三元条件运算符：$first ? $second : $third

 取模运算符 % 的结果和被除数的符号（正负号）相同。即 $a % $b 的结果和 $a 的符号相同。例如：
<?php
  echo (5 % 3)."\n";           // prints 2
  echo (5 % -3)."\n";          // prints 2
  echo (-5 % 3)."\n";          // prints -2
  echo (-5 % -3)."\n";         // prints -2
?>

PHP 支持引用赋值，使用“$var = &$othervar;”语法。引用赋值意味着两个变量指向了同一个数据，没有拷贝任何东西。
Example #1 引用赋值
<?php
  $a = 3;
  $b = &$a; // $b 是 $a 的引用如果比较一个数字和字符串或者比较涉及到数字内容的字符串，则字符串会被转换为数值并且比较按照数值来进行。此规则也适用于 switch 语句
  var_dump(0 == "a"); // 0 == 0 -> true
  var_dump("1" == "01"); // 1 == 1 -> true
  var_dump("10" == "1e1"); // 10 == 10 -> true
  var_dump(100 == "1e2"); // 100 == 100 -> true
  switch ("a") {
  case 0:
      echo "0";
      break;
  case "a": // never reached because "a" is already matched with 0
      echo "a";
      break;
  }
?>

“与”和“或”有两种不同形式运算符的原因是它们运算的优先级不同（见运算符优先级）。
Example #1 逻辑运算符示例
<?php
  // --------------------
  // foo() 根本没机会被调用，被运算符“短路”了
  $a = (false && foo());
  $b = (true  || foo());
  $c = (false and foo());
  $d = (true  or  foo());
  // --------------------
  // "||" 比 "or" 的优先级高
  // 表达式 (false || true) 的结果被赋给 $e
  // 等同于：($e = (false || true))
  $e = false || true;
  // 常量 false 被赋给 $f，true 被忽略
  // 等同于：(($f = false) or true)
  $f = false or true;
  var_dump($e, $f);
  // --------------------
  // "&&" 比 "and" 的优先级高
  // 表达式 (true && false) 的结果被赋给 $g
  // 等同于：($g = (true && false))
  $g = true && false;
  // 常量 true 被赋给 $h，false 被忽略
  // 等同于：(($h = true) and false)
  $h = true and false;
  var_dump($g, $h);
?>

类型运算符
instanceof 用于确定一个 PHP 变量是否属于某一类 class 的实例：
Example #1 对类使用 instanceof
<?php
  class MyClass{
  }
  class NotMyClass{
  }
  $a = new MyClass;
  var_dump($a instanceof MyClass);
  var_dump($a instanceof NotMyClass);
?>

instanceof　也可用来确定一个变量是不是继承自某一父类的子类的实例：
Example #2 对继承类使用 instanceof
<?php
  class ParentClass{
  }
  class MyClass extends ParentClass{
  }
  $a = new MyClass;
  var_dump($a instanceof MyClass);
  var_dump($a instanceof ParentClass);
?>

instanceof也可用于确定一个变量是不是实现了某个接口的对象的实例:
Example #4 对接口使用 instanceof
<?php
  interface MyInterface
  {
  }
  class MyClass implements MyInterface
  {
  }
  $a = new MyClass;
  var_dump($a instanceof MyClass);
  var_dump($a instanceof MyInterface);
?>

虽然 instanceof 通常直接与类名一起使用，但也可以使用对象或字符串变量：
Example #5 对其它变量使用 instanceof
<?php
  interface MyInterface
  {
  }
  class MyClass implements MyInterface
  {
  }
  $a = new MyClass;
  $b = new MyClass;
  $c = 'MyClass';
  $d = 'NotMyClass';
  var_dump($a instanceof $b); // $b is an object of class MyClass
  var_dump($a instanceof $c); // $c is a string 'MyClass'
  var_dump($a instanceof $d); // $d is a string 'NotMyClass'
?>

如果被检测的变量不是对象，instanceof 并不发出任何错误信息而是返回 FALSE。不允许用来检测常量。
Example #6 用 instanceof 检测其它变量
<?php
  $a = 1;
  $b = NULL;
  $c = imagecreate(5, 5);
  var_dump($a instanceof stdClass); // $a is an integer
  var_dump($b instanceof stdClass); // $b is NULL
  var_dump($c instanceof stdClass); // $c is a resource
  var_dump(FALSE instanceof stdClass);
?>

然而 instanceof 的使用还有一些陷阱必须了解。在 PHP 5.1.0 之前，如果要检查的类名称不存在，instanceof 会调用 __autoload()。另外，如果该类没有被装载则会产生一个致命错误。可以通过使用动态类引用或用一个包含类名的字符串变量来避开这种问题：
Example #7 避免 PHP 5.0 中 instanceof 引起的类名查找和致命错误问题
<?php
  $d = 'NotMyClass';
  var_dump($a instanceof $d); // no fatal error here
?>

else if与elseif
必须要注意的是 elseif 与 else if 只有在类似上例中使用花括号的情况下才认为是完全相同。如果用冒号来定义 if/elseif 条件，那就不能用两个单词的 else if，否则 PHP 会产生解析错误。

PHP 提供了一些流程控制的替代语法，包括 if，while，for，foreach 和 switch。替代语法的基本形式是把左花括号（{）换成冒号（:），把右花括号（}）分别换成 endif;，endwhile;，endfor;，endforeach; 以及 endswitch;。
Note:不支持在同一个控制块内混合使用两种语法。 

array each ( array &$array )
each — 返回数组中当前的键／值对并将数组指针向前移动一步 
注：each不是echo
在执行 each() 之后，数组指针将停留在数组中的下一个单元或者当碰到数组结尾时停留在最后一个单元。如果要再用 each 遍历数组，必须使用 reset()。
返回值:
返回 array 数组中当前指针位置的键／值对并向前移动数组指针。键值对被返回为四个单元的数组，键名为0，1，key和 value。单元 0 和 key 包含有数组单元的键名，1 和 value 包含有数据。
如果内部指针越过了数组的末端，则 each() 返回 FALSE。

each() 经常和 list() 结合使用来遍历数组，例如：
Example #2 用 each() 遍历数组
<?php
    $fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'cranberry');
    reset($fruit);
    while (list($key, $val) = each($fruit)) {
        echo "$key => $val\n";
    }
?>

break 可以接受一个可选的数字参数来决定跳出几重循环。
<?php
  $arr = array('one', 'two', 'three', 'four', 'stop', 'five');
  while (list (, $val) = each($arr)) {
      if ($val == 'stop') {
          break;    /* You could also write 'break 1;' here. */
      }
      echo "$val<br />\n";
  }
  /* 使用可选参数 */
  $i = 0;
  while (++$i) {
      switch ($i) {
      case 5:
          echo "At 5<br />\n";
          break 1;  /* 只退出 switch. */
      case 10:
          echo "At 10; quitting<br />\n";
          break 2;  /* 退出 switch 和 while 循环 */
      default:
          break;
      }
  }
?>

(not know)continue 接受一个可选的数字参数来决定跳过几重循环到循环结尾。默认值是 1，即跳到当前循环末尾。
<?php
  while (list ($key, $value) = each($arr)) {
      if (!($key % 2)) { // skip odd members
          continue;
      }
      do_something_odd($value);
  }
  $i = 0;
  while ($i++ < 5) {
      echo "Outer<br />\n";
      while (1) {
          echo "Middle<br />\n";
          while (1) {
              echo "Inner<br />\n";
              continue 3;
          }
          echo "This never gets output.<br />\n";
      }
      echo "Neither does this.<br />\n";
  }
?>

goto 示例
<?php
  goto a;
  echo 'Foo';
  a:
  echo 'Bar';
?>
以上例程会输出：Bar


goto 跳出循环示例
<?php
  for($i=0,$j=50; $i<100; $i++) {
    while($j--) {
      if($j==17) goto end; 
    }  
  }
  echo "i = $i";
  end:
  echo 'j hit 17';
?>
以上例程会输出：j hit 17

当一个函数是有条件被定义时，必须在调用函数之前定义。
Example #2 有条件的函数
<?php
  $makefoo = true;
  /* 不能在此处调用foo()函数，
     因为它还不存在，但可以调用bar()函数。*/
  bar();
  if ($makefoo) {
    function foo(){
      echo "I don't exist until program execution reaches me.\n";
    }
  }
  /* 现在可以安全调用函数 foo()了，
     因为 $makefoo 值为真 */
  if ($makefoo) foo();
  function bar(){
    echo "I exist immediately upon program start.\n";
  }
?>

foreach ¶
Note:当 foreach 开始执行时，数组内部的指针会自动指向第一个单元。这意味着不需要在 foreach 循环之前调用 reset()。
由于 foreach 依赖内部数组指针，在循环中修改其值将可能导致意外的行为。 

 可以很容易地通过在 $value 之前加上 & 来修改数组的元素。此方法将以引用赋值而不是拷贝一个值。最后用unset取消掉引用.
Warning:数组最后一个元素的 $value 引用在 foreach 循环之后仍会保留。建议使用 unset() 来将其销毁。
<?php
  $arr = array(1, 2, 3, 4);
  foreach ($arr as &$value) {
      $value = $value * 2;
  }
  // $arr is now array(2, 4, 6, 8)
  unset($value); // 最后取消掉引用
?>

list
(PHP 4, PHP 5, PHP 7)
list — 把数组中的值赋给一组变量 
像 array() 一样，这不是真正的函数，而是语言结构。 list() 可以在单次操作内就为一组变量赋值。 

Note:list() 仅能用于数字索引的数组，并假定数字索引从 0 开始。

Warning
PHP 5 里，list() 从最右边的参数开始赋值； PHP 7 里，list() 从最左边的参数开始赋值。
如果你用单纯的变量，不用担心这一点。 但是如果你用了具有索引的数组，通常你期望得到的结果和在 list() 中写的一样是从左到右的，但在 PHP 5 里实际上不是， 它是以相反顺序赋值的。
通常而言，不建议依赖于操作的顺序，在未来可能会再次发生修改。

Example #4 在 list() 中使用数组索引
<?php
  $info = array('coffee', 'brown', 'caffeine');
  list($a[0], $a[1], $a[2]) = $info;
  var_dump($a);
?>
产生如下输出（注意单元顺序和 list() 语法中所写的顺序的比较）：
Output of the above example in PHP 7:

array(3) {
  [0]=>
  string(6) "coffee"
  [1]=>
  string(5) "brown"
  [2]=>
  string(8) "caffeine"
}

Output of the above example in PHP 5:
array(3) {
  [2]=>
  string(8) "caffeine"
  [1]=>
  string(5) "brown"
  [0]=>
  string(6) "coffee"
}

Example #5 list() 和索引顺序定义
list() 使用 array 索引的顺序和它何时定义无关。
<?php
  $foo = array(2 => 'a', 'foo' => 'b', 0 => 'c');
  $foo[1] = 'd';
  list($x, $y, $z) = $foo;
  var_dump($foo, $x, $y, $z);
?>
得到输出（注意比较 list() 所写的元素顺序） 

用 list() 给嵌套的数组解包 ¶
(PHP 5 >= 5.5.0, PHP 7)
PHP 5.5 增添了遍历一个数组的数组的功能并且把嵌套的数组解包到循环变量中，只需将 list() 作为值提供。
例如：
<?php
  $array = [
      [1, 2],
      [3, 4],
  ];
  foreach ($array as list($a, $b)) {
      // $a contains the first element of the nested array,
      // and $b contains the second element.
      echo "A: $a; B: $b\n";
  }
?>

list() 中的单元可以少于嵌套数组的，此时多出来的数组单元将被忽略：
<?php
  $array = [
      [1, 2],
      [3, 4],
  ];
  foreach ($array as list($a)) {
      // Note that there is no $b here.
      echo "$a\n";
  }
?>

如果 list() 中列出的单元多于嵌套数组则会发出一条消息级别的错误信息：
<?php
  $array = [
      [1, 2],
      [3, 4],
  ];
  foreach ($array as list($a, $b, $c)) {
      echo "A: $a; B: $b; C: $c\n";
  }
?>

declare ¶
(PHP 4, PHP 5, PHP 7)
declare 结构用来设定一段代码的执行指令。declare 的语法和其它流程控制结构相似：
declare (directive)
    statement

declare 代码段中的 statement 部分将被执行——怎样执行以及执行中有什么副作用出现取决于 directive 中设定的指令。


<?php
  // these are the same:
  // you can use this:
  declare(ticks=1) {
      // entire script here
  }
  // or you can use this:
  declare(ticks=1);
  // entire script here
?>


Example #1 Tick 的用法示例
<?php
  declare(ticks=1);
  // A function called on each tick event
  function tick_handler()
  {
      echo "tick_handler() called\n";
  }
  register_tick_function('tick_handler');
  $a = 1;
  if ($a > 0) {
      $a += 2;
      print($a);
  }
?>

Example #2 Ticks 的用法示例
<?php
  function tick_handler()
  {
    echo "tick_handler() called\n";
  }
  $a = 1;
  tick_handler();
  if ($a > 0) {
      $a += 2;
      tick_handler();
      print($a);
      tick_handler();
  }
  tick_handler();
?>

可以用 encoding 指令来对每段脚本指定其编码方式。


Example #3 对脚本指定编码方式
<?php
  declare(encoding='ISO-8859-1');
  // code here
?>

更多信息见返回值。
Note: 注意既然 return 是语言结构而不是函数，因此其参数没有必要用括号将其括起来。通常都不用括号，实际上也应该不用，这样可以降低 PHP 的负担。 

Note: 如果没有提供参数，则一定不能用括号，此时返回 NULL。如果调用 return 时加上了括号却又没有参数会导致解析错误。 

Note: 当用引用返回值时永远不要使用括号，这样行不通。只能通过引用返回变量，而不是语句的结果。如果使用 return ($a); 时其实不是返回一个变量，而是表达式 ($a) 的值（当然，此时该值也正是 $a 的值）。 

函数默认值必须是常量表达式，不能是诸如变量，类成员，或者函数调用等。

 注意当使用默认参数时，任何默认参数必须放在任何非默认参数的右侧；否则，函数将不会按照预期的情况工作。考虑下面的代码片断：
Example #5 函数默认参数的不正确用法
<?php
  function test($type = "king",$x){
      return " $type >>>>> $x";
  }
  echo test("good");   // won't work as expected
?>

为了指定一个类型声明，类型应该加到参数名前。这个声明可以通过将参数的默认值设为NULL来实现允许传递NULL。 
Example #7 Basic class type declaration
<?php
  class Ce {}
  class De extends Ce {}
  // This doesn't extend C.
  class Ee {}
  function f(Ce $c) {
      echo get_class($c)."\n";
  }
  f(new Ce);
  f(new De);
  f(new Ee);
?>

函数的参数 严格类型 ¶

默认情况下，如果能做到的话，PHP将会强迫错误类型的值转为函数期望的标量类型。 例如，一个函数的一个参数期望是string，但传入的是integer，最终函数得到的将会是一个string类型的值。

可以基于每一个文件开启严格模式。在严格模式中，只有一个与类型声明完全相符的变量才会被接受，否则将会抛出一个TypeError。 唯一的一个例外是可以将integer传给一个期望float的函数。

使用 declare 语句和strict_types 声明来启用严格模式： 

Note:严格类型仅用于标量类型声明，也正是因为如此，这需要PHP 7.0.0 或更新版本，因为标量类型声明也是在那个版本中添加的。 
Example #10 Strict typing
<?php
  declare(strict_types=1);
  function sum(int $a, int $b) {
      return $a + $b;
  }
  var_dump(sum(1, 2));
  var_dump(sum(1.5, 2.5));
?>

Example #11 Weak typing
<?php
  function sum(int $a, int $b) {
      return $a + $b;
  }
  var_dump(sum(1, 2));
  // These will be coerced to integers: note the output below!
  var_dump(sum(1.5, 2.5));
?>
以上例程会输出：
int(3)
int(3)

Example #12 Catching TypeError
<?php
  declare(strict_types=1);
  function sum(int $a, int $b) {
      return $a + $b;
  }
  try {
      var_dump(sum(1, 2));
      var_dump(sum(1.5, 2.5));
  } catch (TypeError $e) {
      echo 'Error: '.$e->getMessage();
  }
?>
以上例程会输出：
int(3)
Error: Argument 1 passed to sum() must be of the type integer, float given, called in - on line 10

可变数量的参数列表 ¶
PHP 在用户自定义函数中支持可变数量的参数列表。在 PHP 5.6 及以上的版本中，由 ... 语法实现；在 PHP 5.5 及更早版本中，使用函数 func_num_args()，func_get_arg()，和 func_get_args() 。 

<?php
  function sum(...$numbers) {
      $acc = 0;
      foreach ($numbers as $n) {
          $acc += $n;
      }
      return $acc;
  }
  echo sum(1, 2, 3, 4);
?>

Example #14 Using ... to provide arguments
<?php
  function add($a, $b) {
      return $a + $b;
  }
  echo add(...[1, 2])."\n";
  $a = [1, 2];
  echo add(...$a);
?>

Example #15 Type hinted variable arguments
<?php
  function total_intervals($unit, DateInterval ...$intervals) {
      $time = 0;
      foreach ($intervals as $interval) {
          $time += $interval->$unit;
      }
      return $time;
  }
  $a = new DateInterval('P1D');
  $b = new DateInterval('P2D');
  echo total_intervals('d', $a, $b).' days';
  // This will fail, since null isn't a DateInterval object.
  echo total_intervals('d', null);
?>

在PHP 5.5及更早版本中访问变量参数
Example #16 Accessing variable arguments in PHP 5.5 and earlier
<?php
  function sum() {
      $acc = 0;
      foreach (func_get_args() as $n) {
          $acc += $n;
      }
      return $acc;
  }
  echo sum(1, 2, 3, 4);
?>

函数不能返回多个值，但可以通过返回一个数组来得到类似的效果。
Example #2 返回一个数组以得到多个返回值
<?php
  function small_numbers(){
      return array (0, 1, 2);
  }
  list ($zero, $one, $two) = small_numbers();
?>

(not know)从函数返回一个引用，必须在函数声明和指派返回值给一个变量时都使用引用运算符 &：
Example #3 从函数返回一个引用
<?php
  function &returns_reference(){
      return $someref;
  }
  $newref =& returns_reference();
?>

PHP 支持可变函数的概念。这意味着如果一个变量名后有圆括号，PHP 将寻找与变量的值同名的函数，并且尝试执行它。可变函数可以用来实现包括回调函数，函数表在内的一些用途。 
e.g:
<?php
  function test(){
    return 'YES GOOD!';
  }
  $goTest='test';
  echo $goTest();
?>

也可以用可变函数的语法来调用一个对象的方法。
<?php
  class Foo{
      function Variable(){
          $name = 'Bar';
          $this->$name(); // This calls the Bar() method
      }
      function Bar(){
          echo "This is Bar";
      }
  }
  $foo = new Foo();
  $funcname = "Variable";
  $foo->$funcname();   // This calls $foo->Variable()
?>

 As of PHP 5.4.0, you can call any callable stored in a variable.
Example #4 Complex callables
<?php
  class Foo {
    static function bar() {
      echo "bar\n";
    } 
    function baz() {
      echo "baz\n";
    } 
  } 
  $func = array("Foo", "bar");
  $func(); // prints "bar"
  $func = array(new Foo, "baz");
  $func(); // prints "baz"
  $func = "Foo::bar";
  $func(); // prints "bar" as of PHP 7.0.0; prior, it raised a fatal error
?>

匿名函数（Anonymous functions），也叫闭包函数（closures），允许 临时创建一个没有指定名称的函数。最经常用作回调函数（callback）参数的值。当然，也有其它应用的情况。 
 
 匿名函数目前是通过 Closure 类来实现的。
Example #1 匿名函数示例:
注：preg_replace_callback -- 用回调函数执行正则表达式的搜索和替换
<?php
  echo preg_replace_callback('~-([a-z])~', function ($match) {
      return strtoupper($match[1]);
  }, 'hello-world');
  // 输出 helloWorld
?>

闭包函数也可以作为变量的值来使用。PHP 会自动把此种表达式转换成内置类 Closure 的对象实例。把一个 closure 对象赋值给一个变量的方式与普通变量赋值的语法是一样的，最后也要加上分号：
Example #2 匿名函数变量赋值示例
<?php
  $greet = function($name)
  {
      printf("Hello %s\r\n", $name);
  };
  $greet('World');
  $greet('PHP');
?>

闭包可以从父作用域中继承变量。 任何此类变量都应该用 use 语言结构传递进去。 PHP 7.1 起，不能传入此类变量： superglobals、 $this 或者和参数重名。
Example #3 从父作用域继承变量
<?php
  $message = 'hello';
  // 没有 "use"
  $example = function () {
      var_dump($message);
  };
  echo $example();
  // 继承 $message
  $example = function () use ($message) {
      var_dump($message);
  };
  echo $example();
  // Inherited variable's value is from when the function
  // is defined, not when called
  $message = 'world';
  echo $example();
  // Reset message
  $message = 'hello';
  // Inherit by-reference
  $example = function () use (&$message) {
      var_dump($message);
  };
  echo $example();
  // The changed value in the parent scope
  // is reflected inside the function call
  $message = 'world';
  echo $example();
  // Closures can also accept regular arguments
  $example = function ($arg) use ($message) {
      var_dump($arg . ' ' . $message);
  };
  $example("hello");
?>

这些变量都必须在函数或类的头部声明。 从父作用域中继承变量与使用全局变量是不同的。全局变量存在于一个全局的范围，无论当前在执行的是哪个函数。而 闭包的父作用域是定义该闭包的函数（不一定是调用它的函数）。示例如下：
Example #4 Closures 和作用域
<?php
  // 一个基本的购物车，包括一些已经添加的商品和每种商品的数量。
  // 其中有一个方法用来计算购物车中所有商品的总价格，该方法使
  // 用了一个 closure 作为回调函数。
  class Cart
  {
      const PRICE_BUTTER  = 1.00;
      const PRICE_MILK    = 3.00;
      const PRICE_EGGS    = 6.95;
      protected   $products = array();
      
      public function add($product, $quantity)
      {
          $this->products[$product] = $quantity;
      }
      
      public function getQuantity($product)
      {
          return isset($this->products[$product]) ? $this->products[$product] :
                 FALSE;
      }
      
      public function getTotal($tax)
      {
          $total = 0.00;
          
          $callback =
              function ($quantity, $product) use ($tax, &$total)
              {
                  $pricePerItem = constant(__CLASS__ . "::PRICE_" .
                      strtoupper($product));
                  $total += ($pricePerItem * $quantity) * ($tax + 1.0);
              };
          
          array_walk($this->products, $callback);
          return round($total, 2);;
      }
  }
  $my_cart = new Cart;
  // 往购物车里添加条目
  $my_cart->add('butter', 1);
  $my_cart->add('milk', 3);
  $my_cart->add('eggs', 6);
  // 打出出总价格，其中有 5% 的销售税.
  print $my_cart->getTotal(0.05) . "\n";
  // 最后结果是 54.29
?>

Example #5 Automatic binding of $this
<?php
  class Test{
      public function testing(){
          return function() {
              var_dump($this);
          };
      }
  }
  $object = new Test;
  $function = $object->testing();
  $function();
?>

从PHP 5.4.0开始，当在类的上下文中声明时，当前类被自动绑定到它，使得$可以在函数的范围内使用。 如果不需要自动绑定当前类，则可以使用静态匿名函数

从PHP 5.4开始，静态地声明匿名函数。 这样可以防止他们将当前类自动绑定到它们。 对象在运行时也可能并不绑定到它们。
Example #6 Attempting to use $this inside a static anonymous function
<?php
  class Foo {
    function __construct() {
      $func = static function() {
        var_dump($this);
      } ;
      $func();
    } 
  } ;
  new Foo();
?>

Example #7 Attempting to bind an object to a static anonymous function
<?php
  $func = static function() {
    // function body
  } ;
  $func = $func -> bindTo(new StdClass);
  $func();
?>
以上例程会输出：
Warning: Cannot bind an instance to a static closure in %s on line %d



-------------类Class--start>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>


定义：每个类的定义都以关键字 class 开头，后面跟着类名，后面跟着一对花括号，里面包含有类的属性与方法的定义。


一个类可以包含有属于自己的常量，变量（称为“属性”）以及函数（称为“方法”）。
<?php
  class SimpleClass {
    // property declaration
    public $var = 'a default value'; 
    // method declaration
    public function displayVar() {
      echo $this -> var;
    } 
  } 
?>


当一个方法在类定义内部被调用时，有一个可用的伪变量 $this。$this 是一个到主叫对象的引用（通常是该方法所从属的对象，但如果是从第二个对象静态调用时也可能是另一个对象）。

php类中的$this总是指向调用者的本身。

Example #2 $this 伪变量的示例
<?php
  class A {
    function foo() {
      if (isset($this)) {
        echo '$this is defined (';
        echo get_class($this);
        echo ")\n";
      } else {
        echo "\$this is not defined.\n";
      } 
    } 
  } 
  class B {
    function bar() {
      // Note: the next line will issue a warning if E_STRICT is enabled.
      A :: foo();
    } 
  } 
  $a = new A();
  $a -> foo();
  // Note: the next line will issue a warning if E_STRICT is enabled.
  A :: foo();
  $b = new B();
  $b -> bar();
  // Note: the next line will issue a warning if E_STRICT is enabled.
  B :: bar();
?>


要创建一个类的实例，必须使用 new 关键字。当创建新对象时该对象总是被赋值，除非该对象定义了构造函数并且在出错时抛出了一个异常。类应在被实例化之前定义（某些情况下则必须这样）。 
在类定义内部，可以用 new self 和 new parent 创建新对象。
Example #3 创建一个实例
<?php
  $instance = new SimpleClass();
  // 也可以这样做：
  $className = 'Foo';
  $instance = new $className(); // Foo()
?>


当把一个对象已经创建的实例赋给一个新变量时，新变量会访问同一个实例，就和用该对象赋值一样。此行为和给函数传递入实例时一样。可以用克隆给一个已创建的对象建立一个新实例。
Example #4 对象赋值
<?php
  $instance = new SimpleClass();
  $assigned   =  $instance;
  $reference  =& $instance;
  $instance->var = '$assigned will have this value';
  $instance = null; // $instance and $reference become null
  var_dump($instance);
  var_dump($reference);
  var_dump($assigned);
?>


Example #5 创建新对象
<?php
  class Test {
    static public function getNew() {
      return new static;
    } 
  } 
  class Child extends Test {
  } 
  $obj1 = new Test();
  $obj2 = new $obj1;
  var_dump($obj1 !== $obj2);
  $obj3 = Test :: getNew();
  var_dump($obj3 instanceof Test);
  $obj4 = Child :: getNew();
  var_dump($obj4 instanceof Child);
?>


extends ¶
一个类可以在声明中用 extends 关键字继承另一个类的方法和属性。PHP不支持多重继承，一个类只能继承一个基类。
被继承的方法和属性可以通过用同样的名字重新声明被覆盖。但是如果父类定义方法时使用了 final，则该方法不可被覆盖。可以通过 parent:: 来访问被覆盖的方法或属性。
当覆盖方法时，参数必须保持一致否则 PHP 将发出 E_STRICT 级别的错误信息。但构造函数例外，构造函数可在被覆盖时使用不同的参

继承的好处：
1.可以把子类都需要的代码放在父类，提高代码的重用性。
2.利于二次开发，在不改变原有类结构的情况下，在子类添加新功能。

子类的权限只能等于或大于父类。如父类是protectd，子类可以是protected和public

Example #6 简单的类继承
<?php
  class SimpleClass {
    // property declaration
    public $var = 'a default value'; 
    // method declaration
    public function displayVar() {
      echo $this -> var;
    } 
  } 
  class ExtendClass extends SimpleClass {
    // Redefine the parent method
    function displayVar() {
      echo "Extending class\n";
      parent :: displayVar();
    } 
  } 
  $extended = new ExtendClass();
  $extended -> displayVar();
?>


::class ¶
自 PHP 5.5 起，关键词 class 也可用于类名的解析。使用 ClassName::class 你可以获取一个字符串，包含了类 ClassName 的完全限定名称。这对使用了 命名空间 的类尤其有用。
Example #7 类名的解析
<?php
  namespace NS {
      class ClassName {
      }
      
      echo ClassName::class;
  }
?>


属性 ¶
类的变量成员叫做“属性”，或者叫“字段”、“特征”，在本文档统一称为“属性”。属性声明是由关键字 public，protected 或者 private 开头，然后跟一个普通的变量声明来组成。属性中的变量可以初始化，但是初始化的值必须是常数，这里的常数是指 PHP 脚本在编译阶段时就可以得到其值，而不依赖于运行时的信息才能求值。 

Note:
为了向后兼容 PHP 4，PHP 5 声明属性依然可以直接使用关键字 var 来替代（或者附加于）public，protected 或 private。但是已不再需要 var 了。在 PHP 5.0 到 5.1.3，var 会被认为是废弃的，而且抛出 E_STRICT 警告，但是 5.1.3 之后就不再认为是废弃，也不会抛出警告。
如果直接使用 var 声明属性，而没有用 public，protected 或 private 之一，PHP 5 会将其视为 public。

在类的成员方法里面，可以用 ->（对象运算符）：$this->property（其中 property 是该属性名）这种方式来访问非静态属性。静态属性则是用 ::（双冒号）：self::$property 来访问 


Example #1 属性声明
<?php
  class SimpleClass {
    // 错误的属性声明
    public $var1 = 'hello ' . 'world';
    public $var2 = <<<EOD
hello world
EOD;
  public $var3 = 1 + 2;
  public $var4 = self :: myStaticMethod();
  public $var5 = $myVar; 
  // 正确的属性声明
  public $var6 = myConstant;
  public $var7 = array(true, false); 
  // 在 PHP 5.3.0 及之后，下面的声明也正确
  public $var8 = <<<' EOD'
hello world
EOD;
}
?>



 跟 heredocs 不同，nowdocs 可在任何静态数据上下文中使用，包括属性声明。
Example #2 示例：使用 nowdoc 初始化属性
<?php
  class foo {
     // 自 5.3.0 起
     public $bar = <<<'EOT'
  bar
EOT;
}
?>


类常量 ¶

可以把在类中始终保持不变的值定义为常量。在定义和使用常量的时候不需要使用 $ 符号。
常量的值必须是一个定值，不能是变量，类属性，数学运算的结果或函数调用。 

php中const定义常量
const 常量 
1.在定义时必须被初始值，
2.前面不加任何修饰符
3.常量名字母一般都大写，不能使用$
4.常量可以被子类继承
5.一个常量是属于一个类的，而不是某个对象的
作用：当某些值是固定不变的，就用const
const 定义的常量和define()定义的常量的区别？
希望一个成员变量不被修改 例如圆周率 3.1415926
定义：const 常量名=值; 没有$符
访问：类名 ::常量名 或 接口名::常量名


final修饰类和方法。
static修饰属性和方法。
const只能修饰属性。

定义和使用一个类常量
<?php
  class MyClass {
    const constant = 'constant value';
    function showConstant() {
      echo self :: constant . "\n";
    } 
  } 
  echo MyClass :: constant . "\n";
  $classname = "MyClass";
  echo $classname :: constant . "\n"; // 自 5.3.0 起
  $class = new MyClass();
  $class -> showConstant();
  echo $class :: constant . "\n"; // 自 PHP 5.3.0 起
?>
 

Example #2 静态数据示例
<?php
  class foo {
    // 自 PHP 5.3.0 起
    const bar = <<<' EOT'
  bar
EOT;
}
?>


类的自动加载 ¶

在编写面向对象（OOP） 程序时，很多开发者为每个类新建一个 PHP 文件。 这会带来一个烦恼：每个脚本的开头，都需要包含（include）一个长长的列表（每个类都有个文件）。

在 PHP 5 中，已经不再需要这样了。 spl_autoload_register() 函数可以注册任意数量的自动加载器，当使用尚未被定义的类（class）和接口（interface）时自动去加载。通过注册自动加载器，脚本引擎在 PHP 出错失败前有了最后一个机会加载所需的类。
Tip

尽管 __autoload() 函数也能自动加载类和接口，但更建议使用 spl_autoload_register() 函数。 spl_autoload_register() 提供了一种更加灵活的方式来实现类的自动加载（同一个应用中，可以支持任意数量的加载器，比如第三方库中的）。因此，不再建议使用 __autoload() 函数，在以后的版本中它可能被弃用。

Note:自动加载不可用于 PHP 的 CLI 交互模式。 

Note:如果类名比如被用于 call_user_func()，则它可能包含一些危险的字符，比如 ../。 建议您在这样的函数中不要使用用户的输入，起码需要在 __autoload() 时验证下输入。 




Example #1 自动加载示例
本例尝试分别从 MyClass1.php 和 MyClass2.php 文件中加载 MyClass1 和 MyClass2 类。
<?php
  spl_autoload_register(function ($class_name) {
      require_once $class_name . '.php';
  });
  $obj  = new MyClass1();
  $obj2 = new MyClass2();
?>


Example #2 另一个例子
本例尝试加载接口 ITest。
<?php
  spl_autoload_register(function ($name) {
      var_dump($name);
  });
  class Foo implements ITest {
  }
  /*
  string(5) "ITest"
  Fatal error: Interface 'ITest' not found in ...
  */
?>


Example #3 自动加载在 PHP 5.3.0+ 中的异常处理
本例抛出一个异常并在 try/catch 语句块中演示。
<?php
  spl_autoload_register(function ($name) {
      echo "Want to load $name.\n";
      throw new Exception("Unable to load $name.");
  });
  try {
      $obj = new NonLoadableClass();
  } catch (Exception $e) {
      echo $e->getMessage(), "\n";
  }
?>
以上例程会输出：
Want to load NonLoadableClass.
Unable to load NonLoadableClass.


Example #4 自动加载在 PHP 5.3.0+ 中的异常处理 - 没有自定义异常机制
本例将一个异常抛给不存在的自定义异常处理函数。
<?php
  spl_autoload_register(function ($name) {
      echo "Want to load $name.\n";
      throw new MissingException("Unable to load $name.");
  });
  try {
      $obj = new NonLoadableClass();
  } catch (Exception $e) {
      echo $e->getMessage(), "\n";
  }
?>

以上例程会输出：
Want to load NonLoadableClass.
Want to load MissingException.
Fatal error: Class 'MissingException' not found in testMissingException.php on line 4


__autoload — 尝试加载未定义的类.
在脚本中，需要加载类的时候，就会自动调用这个方法。
ps:
file:   say.class.php
<?php
class say{
    public function saygood(){
        return 'say goodbly<br>';
    }
}
?>
file2:  index.php
<?php
    function __autoload($className){
        include strtolower($className).".class.php";
    }
    $boy=new say();
    echo $boy->saygood();
?>

构造函数 ¶
void __construct ([ mixed $args [, $... ]] )
PHP 5 允行开发者在一个类中定义一个方法作为构造函数。具有构造函数的类会在每次创建新对象时先调用此方法，所以非常适合在使用对象之前做一些初始化工作.
构造方法可以用类名作方法名，但后期修改类名的时候，要随类名更改。所以php5后用__constuct()更好。


Note: 如果子类中定义了构造函数则不会隐式调用其父类的构造函数。要执行父类的构造函数，需要在子类的构造函数中调用 parent::__construct()。如果子类没有定义构造函数则会如同一个普通的类方法一样从父类继承（假如没有被定义为 private 的话）。 

Example #1 使用新标准的构造函数
<?php
  class BaseClass {
     function __construct() {
         print "In BaseClass constructor\n";
     }
  }
  class SubClass extends BaseClass {
     function __construct() {
         parent::__construct();
         print "In SubClass constructor\n";
     }
  }
  class OtherSubClass extends BaseClass {
      // inherits BaseClass's constructor
  }
  // In BaseClass constructor
  $obj = new BaseClass();
  // In BaseClass constructor
  // In SubClass constructor
  $obj = new SubClass();
  // In BaseClass constructor
  $obj = new OtherSubClass();
?>


自 PHP 5.3.3 起，在命名空间中，与类名同名的方法不再作为构造函数。这一改变不影响不在命名空间中的类。

Example #2 Constructors in namespaced classes
<?php
  namespace Foo;
  class Bar {
      public function Bar() {
          // treated as constructor in PHP 5.3.0-5.3.2
          // treated as regular method as of PHP 5.3.3
      }
  }
?>



析构函数 ¶
void __destruct ( void )

PHP 5 引入了析构函数的概念，这类似于其它面向对象的语言，如 C++。析构函数会在到某个对象的所有引用都被删除或者当对象被显式销毁时执行。
析构函数__desturct():对象销毁前最后一个调用的函数。通常于打开资源，比如打开图片，打开文件，打开数据库。
Example #3 析构函数示例
<?php
  class MyDestructableClass {
     function __construct() {
         print "In constructor\n";
         $this->name = "MyDestructableClass";
     }
     function __destruct() {
         print "Destroying " . $this->name . "\n";
     }
  }
  $obj = new MyDestructableClass();
?>

注：析构函数实现与构造函数相反的功能，就是回收在构造函数中所申请的内存空间。


访问控制（可见性） ¶
对属性或方法的访问控制，是通过在前面添加关键字 public（公有），protected（受保护）或 private（私有）来实现的。被定义为公有的类成员可以在任何地方被访问。被定义为受保护的类成员则可以被其自身以及其子类和父类访问。被定义为私有的类成员则只能被其定义所在的类访问。 

类属性必须定义为公有，受保护，私有之一。如果用 var 定义，则被视为公有。

Example #1 属性声明
<?php
  /**
   * Define MyClass
   */
  class MyClass
  {
      public $public = 'Public';
      protected $protected = 'Protected';
      private $private = 'Private';
      function printHello()
      {
          echo $this->public;
          echo $this->protected;
          echo $this->private;
      }
  }
  $obj = new MyClass();
  echo $obj->public; // 这行能被正常执行
  echo $obj->protected; // 这行会产生一个致命错误
  echo $obj->private; // 这行也会产生一个致命错误
  $obj->printHello(); // 输出 Public、Protected 和 Private
  /**
   * Define MyClass2
   */
  class MyClass2 extends MyClass
  {
      // 可以对 public 和 protected 进行重定义，但 private 而不能
      protected $protected = 'Protected2';
      function printHello()
      {
          echo $this->public;
          echo $this->protected;
          echo $this->private;
      }
  }
  $obj2 = new MyClass2();
  echo $obj2->public; // 这行能被正常执行
  echo $obj2->private; // 未定义 private
  echo $obj2->protected; // 这行会产生一个致命错误
  $obj2->printHello(); // 输出 Public、Protected2 和 Undefined
?>


方法的访问控制 ¶

类中的方法可以被定义为公有，私有或受保护。如果没有设置这些关键字，则该方法默认为公有。

Example #2 方法声明
<?php
    /**
     * Define MyClass
     */
    class MyClass
    {
        // 声明一个公有的构造函数
        public function __construct() { }
        // 声明一个公有的方法
        public function MyPublic() { }
        // 声明一个受保护的方法
        protected function MyProtected() { }
        // 声明一个私有的方法
        private function MyPrivate() { }
        // 此方法为公有
        function Foo()
        {
            $this->MyPublic();
            $this->MyProtected();
            $this->MyPrivate();
        }
    }
    $myclass = new MyClass;
    $myclass->MyPublic(); // 这行能被正常执行
    $myclass->MyProtected(); // 这行会产生一个致命错误
    $myclass->MyPrivate(); // 这行会产生一个致命错误
    $myclass->Foo(); // 公有，受保护，私有都可以执行
    /**
     * Define MyClass2
     */
    class MyClass2 extends MyClass
    {
        // 此方法为公有
        function Foo2()
        {
            $this->MyPublic();
            $this->MyProtected();
            $this->MyPrivate(); // 这行会产生一个致命错误
        }
    }
    $myclass2 = new MyClass2;
    $myclass2->MyPublic(); // 这行能被正常执行
    $myclass2->Foo2(); // 公有的和受保护的都可执行，但私有的不行
    class Bar 
    {
        public function test() {
            $this->testPrivate();
            $this->testPublic();
        }
        public function testPublic() {
            echo "Bar::testPublic\n";
        }
        
        private function testPrivate() {
            echo "Bar::testPrivate\n";
        }
    }
    class Foo extends Bar 
    {
        public function testPublic() {
            echo "Foo::testPublic\n";
        }
        
        private function testPrivate() {
            echo "Foo::testPrivate\n";
        }
    }
    $myFoo = new foo();
    $myFoo->test(); // Bar::testPrivate 
                    // Foo::testPublic
?>


其它对象的访问控制 ¶
同一个类的对象即使不是同一个实例也可以互相访问对方的私有与受保护成员。这是由于在这些对象的内部具体实现的细节都是已知的。
Example #3 访问同一个对象类型的私有成员
<?php
  class Test {
    private $foo;
    public function __construct($foo) {
      $this -> foo = $foo;
    } 
    private function bar() {
      echo 'Accessed the private method.';
    } 
    public function baz(Test $other) {
      // We can change the private property:
      $other -> foo = 'hello';
      var_dump($other -> foo); 
      // We can also call the private method:
      $other -> bar();
    } 
  } 
  $test = new Test('test');
  $test -> baz(new Test('other'));
?>



对象继承
Note:

除非使用了自动加载，否则一个类必须在使用之前被定义。如果一个类扩展了另一个，则父类必须在子类之前被声明。此规则适用于类继承其它类与接口。 
<?php
  class foo {
    public function printItem($string) {
      echo 'Foo: ' . $string . PHP_EOL;
    } 
    public function printPHP() {
      echo 'PHP is great.' . PHP_EOL;
    } 
  } 
  class bar extends foo {
    public function printItem($string) {
      echo 'Bar: ' . $string . PHP_EOL;
    } 
  } 
  $foo = new foo();
  $bar = new bar();
  $foo -> printItem('baz'); // Output: 'Foo: baz'
  $foo -> printPHP(); // Output: 'PHP is great' 
  $bar -> printItem('baz'); // Output: 'Bar: baz'
  $bar -> printPHP(); // Output: 'PHP is great'
?>



范围解析操作符 （::） ¶
范围解析操作符（也可称作 Paamayim Nekudotayim）或者更简单地说是一对冒号，可以用于访问静态成员，类常量，还可以用于覆盖类中的属性和方法
Example #1 在类的外部使用 :: 操作符
<?php
  class MyClass {
      const CONST_VALUE = 'A constant value';
  }
  $classname = 'MyClass';
  echo $classname::CONST_VALUE; // 自 PHP 5.3.0 起
  echo MyClass::CONST_VALUE;
?>


Example #2 在类定义内部使用 ::
<?php
  class MyClass {
      const CONST_VALUE = 'A constant value<br />';
  }
  class OtherClass extends MyClass
  {
      public static $my_static = 'static var';
      public static function doubleColon() {
          echo parent::CONST_VALUE . "<Br />";
          echo self::$my_static . "<br />";
      }
  }
  $classname = 'OtherClass';
  echo $classname::doubleColon(); // 自 PHP 5.3.0 起
  OtherClass::doubleColon();
?>


 当一个子类覆盖其父类中的方法时，PHP 不会调用父类中已被覆盖的方法。是否调用父类的方法取决于子类。这种机制也作用于构造函数和析构函数，重载以及魔术方法。
Example #3 调用父类的方法
<?php
  class MyClass {
    protected function myFunc() {
      echo "MyClass::myFunc()\n";
    } 
  } 
  class OtherClass extends MyClass {
    // 覆盖了父类的定义
    public function myFunc() {
      // 但还是可以调用父类中被覆盖的方法
      parent :: myFunc();
      echo "OtherClass::myFunc()\n";
    } 
  } 
  $class = new OtherClass();
  $class -> myFunc();
?>



Static（静态）关键字 ¶
本页说明了用 static 关键字来定义静态方法和属性。static 也可用于定义静态变量以及后期静态绑定。参见上述页面了解 static 在其中的用法。
声明类属性或方法为静态，就可以不实例化类而直接访问。静态属性不能通过一个类已实例化的对象来访问（但静态方法可以）。
为了兼容 PHP 4，如果没有指定访问控制，属性和方法默认为公有。
由于静态方法不需要通过对象即可调用，所以伪变量 $this 在静态方法中不可用。
静态属性不可以由对象通过 -> 操作符来访问.
就像其它所有的 PHP 静态变量一样，静态属性只能被初始化为文字或常量，不能使用表达式。所以可以把静态属性初始化为整数或数组，但不能初始化为另一个变量或函数返回值，也不能指向一个对象。


Static（静态）关键字:声明类属性或方法为静态，就可以不实例化类而直接访问。静态属性不能通过一个类已实例化的对象来访问（但静态方法可以）。 
特点：
1.使用static 修饰成员属性，存在内存的初始化静态段。
2.可以被所有同一个类的对象共用。
3.第一个用到类（类名第一次出现），类在加载到内存时，就已经将静态的成员加到内存。
4.静态的成员要用类名来访问,classname::property 
5.self::可以在类中方法中，代表类的本身。self::可以在类中方法中，代表类的本身。self::可以在类中方法中，代表类的本身。self::可以在类中方法中，代表类的本身。self::可以在类中方法中，代表类的本身。
6.静态成员一旦被加载，只有脚本结束才释放。
7.缺点：在静态方法中，是不能访问非静态的成员的。原因：$this是指向本对象，而静态方法是不用创建新对象才调用。
8.优点：只要能用静态的环境下声明方法，就最好使用静态方法。（效率高）

Example #1 静态属性示例
<?php
  class Foo {
    public static $my_static = 'fooline:five5<br />';
    public function staticValue() {
      return self :: $my_static;
    } 
  } 
  class Bar extends Foo {
    public function fooStatic() {
      return parent :: $my_static;
    } 
  } 
  print Foo::$my_static . "\n";
  $foo = new Foo();
  print $foo->staticValue() . "\n";
  print $foo->my_static . "\n";      // Undefined "Property" my_static 
  print $foo::$my_static . "\n";
  $classname = 'Foo';
  print $classname::$my_static . "\n"; // As of PHP 5.3.0
  print Bar::$my_static . "\n";
  $bar = new Bar();
  print $bar->fooStatic() . "\n";
?>



抽象类 ¶

PHP 5 支持抽象类和抽象方法。定义为抽象的类不能被实例化。任何一个类，如果它里面至少有一个方法是被声明为抽象的，那么这个类就必须被声明为抽象的。被定义为抽象的方法只是声明了其调用方式（参数），不能定义其具体的功能实现。


什么是抽象方法？
定义：一个方法如果没有方法体，则这个方法就是抽象方法。
1.声明一个方法，不使用{},而直接分号结束。
2.如果是抽象方法，必须使用abstract修饰。

什么是抽象类？
1.如果一个类中有一个方法是抽象方法，则这个类就是抽象类。
2.如果声明一个抽象类，则这个类必须使用abstract关键字修饰。
3.抽象类不能实例化对象。
4.继承一个抽象类的时候，子类必须定义父类中的所有抽象方法；另外，这些方法的访问控制必须和父类中一样（或者更为宽松）。
5.如果子类只继承了部分抽象方法，则这个子类必须声明为抽象类。

注意：
1.只要使用abstract修饰的类，就是抽象类。
2.抽象类是一种特殊的类，特殊的地方就是，在抽象类中可以有抽象方法。
3.除了在抽象类中可以有抽象方法以外，和正常的类完全一样。
ps:
abstract class Person{
    abstract function say();
}

抽象方法的作用：抽象方法规定了子类必须有这个方法的实现，功能交给子类。
抽象类的作用：就是要求子类的结构，所以抽象类就是一个规范。


接口
抽象类是一种抽象的类，接口是一种特殊的抽象类。
1.抽象类和接口中都有抽象方法。
2.抽象类和接口都不能实例化对象。
3.抽象类和接口的使用意义也就是作用相同。都是定义一种规范。

接口和抽象类相比，特殊在哪里？
1.接口中的方法，必须全是抽象方法（不能有不抽象的方法存在）。所以在接口中的抽象方法不需要使用abstract，直接使用结束即可。
2.接口的成员属性，必须是常量（不能有变量）。
3.所有的权限必须是public，不写默认是public.
4.声明接口不使用class，而是使用interface
ps:
interface Person{
    const NAME='king';
    oabstract function say();
}

接口应用的一些细节：
1.可以使用extends让一个接口继承另一个接口（接口和接口，只有扩展新抽象方法，没有覆盖的关系）。
2.可以使用一个类来实现接口中的全部方法，也可以使用一个抽象类来实现接口中的部分方法。（类与接口，抽象类与接口，有覆盖重写接口中的抽象方法）
3.使用implements关键字实现接口。
4.一个类可以继承另一个类的同时，使用implements实现一个或多个接口。
5.实现多个接口，只需要使用逗号分开多个接口即可。
ps:
class Boy extends Person implements Test,Say{
}

多态特性
注：辅助理解案例子（开发电脑后，定义usb的规范，其他设备厂商按照规范生产带ubs接口的设备）,可以看案例[2014]兄弟连高洛峰.PHP教程.7.10.1.PHP图形计算器需求分析(ED2000.COM).mp4
作用：程序扩展准备

技术：必须有继承关系，父类最好是接口或抽象类。

Example #1 抽象类示例
<?php
  abstract class AbstractClass {
    // 强制要求子类定义这些方法
    abstract protected function getValue();
    abstract protected function prefixValue($prefix); 
    // 普通方法（非抽象方法）
    public function printOut() {
      print $this -> getValue() . "\n";
    } 
  } 
  class ConcreteClass1 extends AbstractClass {
    protected function getValue() {
      return "ConcreteClass1";
    } 
    public function prefixValue($prefix) {
      return "{$prefix}ConcreteClass1";
    } 
  } 
  class ConcreteClass2 extends AbstractClass {
    public function getValue() {
      return "ConcreteClass2";
    } 
    public function prefixValue($prefix) {
      return "{$prefix}ConcreteClass2";
    } 
  } 
  $class1 = new ConcreteClass1;
  $class1 -> printOut();
  echo $class1 -> prefixValue('FOO_') . "\n";
  $class2 = new ConcreteClass2;
  $class2 -> printOut();
  echo $class2 -> prefixValue('FOO_') . "\n";
?>



Example #2 抽象类示例
<?php
  abstract class AbstractClass {
    // 我们的抽象方法仅需要定义需要的参数
    abstract protected function prefixName($name);
  } 
  class ConcreteClass extends AbstractClass {
    // 我们的子类可以定义父类签名中不存在的可选参数
    public function prefixName($name, $separator = ".") {
      if ($name == "Pacman") {
        $prefix = "Mr";
      } elseif ($name == "Pacwoman") {
        $prefix = "Mrs";
      } else {
        $prefix = "";
      } 
      return "{$prefix}{$separator} {$name}";
    } 
  } 
  $class = new ConcreteClass;
  echo $class -> prefixName("Pacman"), "\n";
  echo $class -> prefixName("Pacwoman"), "\n";
?>



对象接口 ¶
使用接口（interface），可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。
接口是通过 interface 关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。
接口中定义的所有方法都必须是公有，这是接口的特性。

Note:接口也可以继承，通过使用 extends 操作符。 

Example #1 接口示例
<?php 
  // 声明一个'iTemplate'接口
  interface iTemplate {
    public function setVariable($name, $var);
    public function getHtml($template);
  } 
  // 实现接口
  // 下面的写法是正确的
  class Template implements iTemplate {
    private $vars = array();
    public function setVariable($name, $var) {
      $this -> vars[$name] = $var;
    } 
    public function getHtml($template) {
      foreach($this -> vars as $name => $value) {
        $template = str_replace('{' . $name . '}', $value, $template);
      } 
      return $template;
    } 
  } 
  // 下面的写法是错误的，会报错，因为没有实现 getHtml()：
  // Fatal error: Class BadTemplate contains 1 abstract methods
  // and must therefore be declared abstract (iTemplate::getHtml)
  class BadTemplate implements iTemplate {
    private $vars = array();
    public function setVariable($name, $var) {
      $this -> vars[$name] = $var;
    } 
  }
?>


Example #2 可扩充的接口
<?php
  interface a {
    public function foo();
  } 
  interface b extends a {
    public function baz(Baz $baz);
  } 
  // 正确写法
  class c implements b {
    public function foo() {
    } 
    public function baz(Baz $baz) {
    } 
  } 
  // 错误写法会导致一个致命错误
  class d implements b {
    public function foo() {
    } 
    public function baz(Foo $foo) {
    } 
  } 
?>





Example #3 继承多个接口
<?php
  interface a {
    public function foo();
  } 
  interface b {
    public function bar();
  } 
  interface c extends a, b {
    public function baz();
  } 
  class d implements c {
    public function foo() {
    } 
    public function bar() {
    } 
    public function baz() {
    } 
  } 
?>


Example #4 使用接口常量
<?php
  interface a {
    const b = 'Interface constant';
  } 
  // 输出接口常量
  echo a :: b;
  // 错误写法，因为常量不能被覆盖。接口常量的概念和类常量是一样的。
  class b implements a {
    const b = 'Class constant';
  } 
?>



Trait ¶

自 PHP 5.4.0 起，PHP 实现了一种代码复用的方法，称为 trait。

Trait 是为类似 PHP 的单继承语言而准备的一种代码复用机制。Trait 为了减少单继承语言的限制，使开发人员能够自由地在不同层次结构内独立的类中复用 method。Trait 和 Class 组合的语义定义了一种减少复杂性的方式，避免传统多继承和 Mixin 类相关典型问题。

Trait 和 Class 相似，但仅仅旨在用细粒度和一致的方式来组合功能。 无法通过 trait 自身来实例化。它为传统继承增加了水平特性的组合；也就是说，应用的几个 Class 之间不需要继承。 


Example #1 Trait 示例
<?php
  trait ezcReflectionReturnInfo {
      function getReturnType() { /*1*/ }
      function getReturnDescription() { /*2*/ }
  }
  class ezcReflectionMethod extends ReflectionMethod {
      use ezcReflectionReturnInfo;
      /* ... */
  }
  class ezcReflectionFunction extends ReflectionFunction {
      use ezcReflectionReturnInfo;
      /* ... */
  }
?>


优先级
从基类继承的成员会被 trait 插入的成员所覆盖。优先顺序是来自当前类的成员覆盖了 trait 的方法，而 trait 则覆盖了被继承的方法。
Example #2 优先顺序示例

从基类继承的成员被插入的 SayWorld Trait 中的 MyHelloWorld 方法所覆盖。其行为 MyHelloWorld 类中定义的方法一致。优先顺序是当前类中的方法会覆盖 trait 方法，而 trait 方法又覆盖了基类中的方法。
<?php
  class Base {
      public function sayHello() {
          echo 'Hello ';
      }
  }
  trait SayWorld {
      public function sayHello() {
          parent::sayHello();
          echo 'World!';
      }
  }
  class MyHelloWorld extends Base {
      use SayWorld;
  }
  $o = new MyHelloWorld();
  $o->sayHello();
?>


Example #3 另一个优先级顺序的例子
<?php
  trait HelloWorld {
      public function sayHello() {
          echo 'Hello World!';
      }
  }
  class TheWorldIsNotEnough {
      use HelloWorld;
      public function sayHello() {
          echo 'Hello Universe!';
      }
  }
  $o = new TheWorldIsNotEnough();
  $o->sayHello();
?>


多个 trait 
通过逗号分隔，在 use 声明列出多个 trait，可以都插入到一个类中。
Example #4 多个 trait 的用法
<?php
  trait Hello {
      public function sayHello() {
          echo 'Hello ';
      }
  }
  trait World {
      public function sayWorld() {
          echo 'World';
      }
  }
  class MyHelloWorld {
      use Hello, World;
      public function sayExclamationMark() {
          echo '!';
      }
  }
  $o = new MyHelloWorld();
  $o->sayHello();
  $o->sayWorld();
  $o->sayExclamationMark();
?>


冲突的解决

如果两个 trait 都插入了一个同名的方法，如果没有明确解决冲突将会产生一个致命错误。
为了解决多个 trait 在同一个类中的命名冲突，需要使用 insteadof 操作符来明确指定使用冲突方法中的哪一个。
以上方式仅允许排除掉其它方法，as 操作符可以 为某个方法引入别名。 注意，as 操作符不会对方法进行重命名，也不会影响其方法。

Example #5 冲突的解决
在本例中 Talker 使用了 trait A 和 B。由于 A 和 B 有冲突的方法，其定义了使用 trait B 中的 smallTalk 以及 trait A 中的 bigTalk。
Aliased_Talker 使用了 as 操作符来定义了 talk 来作为 B 的 bigTalk 的别名。
<?php
  trait A {
      public function smallTalk() {
          echo 'a';
      }
      public function bigTalk() {
          echo 'A';
      }
  }
  trait B {
      public function smallTalk() {
          echo 'b';
      }
      public function bigTalk() {
          echo 'B';
      }
  }
  class Talker {
      use A, B {
          B::smallTalk insteadof A;
          A::bigTalk insteadof B;
      }
  }
  class Aliased_Talker {
      use A, B {
          B::smallTalk insteadof A;
          A::bigTalk insteadof B;
          B::bigTalk as talk;
      }
  }
?>


修改方法的访问控制
使用 as 语法还可以用来调整方法的访问控制。

Example #6 修改方法的访问控制
<?php
  trait HelloWorld {
      public function sayHello() {
          echo 'Hello World!';
      }
  }
  // 修改 sayHello 的访问控制
  class MyClass1 {
      use HelloWorld { sayHello as protected; }
  }
  // 给方法一个改变了访问控制的别名
  // 原版 sayHello 的访问控制则没有发生变化
  class MyClass2 {
      use HelloWorld { sayHello as private myPrivateHello; }
  }
?>


从 trait 来组成 trait
正如 class 能够使用 trait 一样，其它 trait 也能够使用 trait。在 trait 定义时通过使用一个或多个 trait，能够组合其它 trait 中的部分或全部成员。

Example #7 从 trait 来组成 trait
<?php
  trait Hello {
      public function sayHello() {
          echo 'Hello ';
      }
  }
  trait World {
      public function sayWorld() {
          echo 'World!';
      }
  }
  trait HelloWorld {
      use Hello, World;
  }
  class MyHelloWorld {
      use HelloWorld;
  }
  $o = new MyHelloWorld();
  $o->sayHello();
  $o->sayWorld();
?>



Trait 的抽象成员
为了对使用的类施加强制要求，trait 支持抽象方法的使用。

Example #8 表示通过抽象方法来进行强制要求
<?php
  trait Hello {
      public function sayHelloWorld() {
          echo 'Hello'.$this->getWorld();
      }
      abstract public function getWorld();
  }
  class MyHelloWorld {
      private $world;
      use Hello;
      public function getWorld() {
          return $this->world;
      }
      public function setWorld($val) {
          $this->world = $val;
      }
  }
?>


Trait 的静态成员
Traits 可以被静态成员静态方法定义。

Example #9 静态变量
<?php
  trait Counter {
      public function inc() {
          static $c = 0;
          $c = $c + 1;
          echo "$c\n";
      }
  }
  class C1 {
      use Counter;
  }
  class C2 {
      use Counter;
  }
  $o = new C1(); $o->inc(); // echo 1
  $p = new C2(); $p->inc(); // echo 1
  $p = new C2(); $p->inc(); // echo 1
  $p = new C2(); $p->inc(); // echo 1
  $p = new C2(); $p->inc(); // echo 1
  $o = new C1(); $o->inc(); // echo 1
?>


Example #10 静态方法
<?php
  trait StaticExample {
      public static function doSomething() {
          return 'Doing something';
      }
  }
  class Example {
      use StaticExample;
  }
  echo Example::doSomething();
?>


属性
Trait 同样可以定义属性。

Example #11 定义属性
<?php
  trait PropertiesTrait {
      public $x = 1;
  }
  class PropertiesExample {
      use PropertiesTrait;
  }
  $example = new PropertiesExample;
  echo $example->x;
?>


 Trait 定义了一个属性后，类就不能定义同样名称的属性，否则会产生 fatal error。 有种情况例外：属性是兼容的（同样的访问可见度、初始默认值）。 在 PHP 7.0 之前，属性是兼容的，则会有 E_STRICT 的提醒。

Example #12 解决冲突
<?php
  trait PropertiesTrait {
      public $same = true;
      public $different = false;
  }
  class PropertiesExample {
      use PropertiesTrait;
      public $same = true; // PHP 7.0.0 后没问题，之前版本是 E_STRICT 提醒
      public $different = true; // 致命错误
  }
?>


使用 __get()，__set()，__isset() 和 __unset() 进行属性重载
使用 __call() 和 __callStatic() 对方法重载



匿名类

PHP 7 开始支持匿名类。 匿名类很有用，可以创建一次性的简单对象。
<?php
  // PHP 7 之前的代码
  class Logger
  {
      public function log($msg)
      {
          echo $msg;
      }
  }
  $util->setLogger(new Logger());
  // 使用了 PHP 7+ 后的代码
  $util->setLogger(new class {
      public function log($msg)
      {
          echo $msg;
      }
  });
?>


可以传递参数到匿名类的构造器，也可以扩展（extend）其他类、实现接口（implement interface），以及像其他普通的类一样使用 trait：
<?php
  class SomeClass {}
  interface SomeInterface {}
  trait SomeTrait {}
  var_dump(new class(10) extends SomeClass implements SomeInterface {
      private $num;
      public function __construct($num)
      {
          $this->num = $num;
      }
      use SomeTrait;
  });
?>


匿名类被嵌套进普通 Class 后，不能访问这个外部类（Outer class）的 private（私有）、protected（受保护）方法或者属性。 为了访问外部类（Outer class）protected 属性或方法，匿名类可以 extend（扩展）此外部类。 为了使用外部类（Outer class）的 private 属性，必须通过构造器传进来：
<?php
  class Outer {
    private $prop = 1;
    protected $prop2 = 2;
    protected function func1() {
      return 3;
    } 
    public function func2() {
      return new class($this -> prop) extends Outer {
        private $prop3;
        public function __construct($prop) {
          $this -> prop3 = $prop;
        } 
        public function func3() {
          return $this -> prop2 + $this -> prop3 + $this -> func1();
        } 
      } ;
    } 
  } 
  echo (new Outer) -> func2() -> func3();
?>
以上例程会输出：6


声明的同一个匿名类，所创建的对象都是这个类的实例。
<?php
  function anonymous_class() {
    return new class {
    } ;
  } 
  if (get_class(anonymous_class()) === get_class(anonymous_class())) {
    echo 'same class';
  } else {
    echo 'different class';
  } 
?>
以上例程会输出：same class


Note:注意，匿名类的名称是通过引擎赋予的，如下例所示。 由于实现的细节，不应该去依赖这个类名。
<?php
  echo get_class(new class {});
?>
以上例程的输出类似于：class@anonymous/in/oNi1A0x7f8636ad2021


重载
PHP所提供的"重载"（overloading）是指动态地"创建"类属性和方法。我们是通过魔术方法（magic methods）来实现的。
当调用当前环境下未定义或不可见的类属性或方法时，重载方法会被调用。本节后面将使用"不可访问属性（inaccessible properties）"和"不可访问方法（inaccessible methods）"来称呼这些未定义或不可见的类属性或方法。

所有的重载方法都必须被声明为 public。

Note:这些魔术方法的参数都不能通过引用传递。

Note:PHP中的"重载"与其它绝大多数面向对象语言不同。传统的"重载"是用于提供多个同名的类方法，但各方法的参数类型和个数不同。 

php中的魔术方法都是自动解发调用。但都有自己的解发条件。

属性重载 ¶
public void __set ( string $name , mixed $value )
public mixed __get ( string $name )
public bool __isset ( string $name )
public void __unset ( string $name )

在给不可访问属性赋值时，__set() 会被调用。

读取不可访问属性的值时，__get() 会被调用。

当对不可访问属性调用 isset() 或 empty() 时，__isset() 会被调用。

当对不可访问属性调用 unset() 时，__unset() 会被调用。

参数 $name 是指要操作的变量名称。__set() 方法的 $value 参数指定了 $name 变量的值。

属性重载只能在对象中进行。在静态方法中，这些魔术方法将不会被调用。所以这些方法都不能被 声明为 static。从 PHP 5.3.0 起, 将这些魔术方法定义为 static 会产生一个警告。

Note: 因为 PHP 处理赋值运算的方式，__set() 的返回值将被忽略。类似的, 在下面这样的链式赋值中，__get() 不会被调用：
$a = $obj->b = 8; 

Note:在除 isset() 外的其它语言结构中无法使用重载的属性，这意味着当对一个重载的属性使用 empty() 时，重载魔术方法将不会被调用。
为避开此限制，必须将重载属性赋值到本地变量再使用 empty()。 


Example #1 使用 __get()，__set()，__isset() 和 __unset() 进行属性重载
<?php
  class PropertyTest {
    /**
     * *  被重载的数据保存在此
     */
    private $data = array();
    /**
     * *  重载不能被用在已经定义的属性
     */
    public $declared = 1;
    /**
     * *  只有从类外部访问这个属性时，重载才会发生
     */
    private $hidden = 2;
    public function __set($name, $value) {
      echo "Setting '$name' to '$value'\n";
      $this -> data[$name] = $value;
    } 
    public function __get($name) {
      echo "Getting '$name'\n";
      if (array_key_exists($name, $this -> data)) {
        return $this -> data[$name];
      } 
      $trace = debug_backtrace();
      trigger_error('Undefined property via __get(): ' . $name . ' in ' . $trace[0]['file'] . ' on line ' . $trace[0]['line'],
        E_USER_NOTICE);
      return null;
    } 
    /**
     * *  PHP 5.1.0之后版本
     */
    public function __isset($name) {
      echo "Is '$name' set?\n";
      return isset($this -> data[$name]);
    } 
    /**
     * *  PHP 5.1.0之后版本
     */
    public function __unset($name) {
      echo "Unsetting '$name'\n";
      unset($this -> data[$name]);
    } 
    /**
     * *  非魔术方法
     */
    public function getHidden() {
      return $this -> hidden;
    } 
  } 
  echo "<pre>\n";
  $obj = new PropertyTest;
  $obj -> a = 1;
  echo $obj -> a . "\n\n";
  var_dump(isset($obj -> a));
  unset($obj -> a);
  var_dump(isset($obj -> a));
  echo "\n";
  echo $obj -> declared . "\n\n";
  echo "Let's experiment with the private property named 'hidden':\n";
  echo "Privates are visible inside the class, so __get() not used...\n";
  echo $obj -> getHidden() . "\n";
  echo "Privates not visible outside of class, so __get() is used...\n";
  echo $obj -> hidden . "\n";
?>

__set():对私有成员（成员属性和成员方法）直接赋值的时候，自动调用。
__get():对私有成员直接获取的时候调用。

__isset():在使用isset()判断一个私有属性是否存在时，自动调用。
__unset():删除对象中的私有成员。


ps:
<?php
    class Person{
        public $name;
        private $age;
        private $salary;
        public function __construct($name,$age){
            $this->name=$name;
            $this->age=$age;
        }
        public function __isset($x){
            if($x=='salary'){
                echo '131313<br>';
                return false;
            }
            echo '16161616<br>';
            return isset($this->$x);
        }
    }
    $boy=new Person('xiaojing',26);
    if(isset($boy->salary)){
        echo 'exits<br>';
    }else{
        echo 'not exits<br>';
    }
?>

方法重载 ¶
public mixed __call ( string $name , array $arguments )
public static mixed __callStatic ( string $name , array $arguments )

在对象中调用一个不可访问方法时，__call() 会被调用。

在静态上下文中调用一个不可访问方法时，__callStatic() 会被调用。

$name 参数是要调用的方法名称。$arguments 参数是一个枚举数组，包含着要传递给方法 $name 的参数。 

__call()
1.就是在调用一个对象中不存在的方法时，自动调用的方法。
2.有2个参数，第一个参数是调用的不存在的方法名，第二个参数是调用这个不存在方法的参数。
3.作用：可以写提示，但这个不是主要的功能。将方法的功能相似，但方法名不同的，就可以采用这个方式来完成。

Example #2 使用 __call() 和 __callStatic() 对方法重载
<?php
  class MethodTest {
    public function __call($name, $arguments) {
      // 注意: $name 的值区分大小写
      echo "Calling object method '$name' "
       . implode(', ', $arguments) . "\n";
    } 
    /**
     * *  PHP 5.3.0之后版本
     */
    public static function __callStatic($name, $arguments) {
      // 注意: $name 的值区分大小写
      echo "Calling static method '$name' "
       . implode(', ', $arguments) . "\n";
    } 
  } 
  $obj = new MethodTest;
  $obj -> runTest('in object context');
  MethodTest :: runTest('in static context'); // PHP 5.3.0之后版本
?>

以上例程会输出：
Calling object method 'runTest' in object context
Calling static method 'runTest' in static context


遍历对象 ¶
PHP 5 提供了一种定义对象的方法使其可以通过单元列表来遍历，例如用 foreach 语句。默认情况下，所有可见属性都将被用于遍历。
Example #1 简单的对象遍历
<?php
  class MyClass {
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';
    protected $protected = 'protected var';
    private $private = 'private var';
    function iterateVisible() {
      echo "MyClass::iterateVisible:\n";
      foreach($this as $key => $value) {
        print "$key => $value\n";
      } 
    } 
  } 
  $class = new MyClass();
  foreach($class as $key => $value) {
    print "$key => $value\n";
  } 
  echo "\n";
  $class -> iterateVisible();
?>
如上所示，foreach 遍历了所有其能够访问的可见属性


更进一步，可以实现 Iterator 接口。可以让对象自行决定如何遍历以及每次遍历时那些值可用。

Example #2 实现 Iterator 接口的对象遍历
<?php
  class MyIterator implements Iterator {
    private $var = array();
    public function __construct($array) {
      if (is_array($array)) {
        $this -> var = $array;
      } 
    } 
    public function rewind() {
      echo "rewinding\n";
      reset($this -> var);
    } 
    public function current() {
      $var = current($this -> var);
      echo "current: $var\n";
      return $var;
    } 
    public function key() {
      $var = key($this -> var);
      echo "key: $var\n";
      return $var;
    } 
    public function next() {
      $var = next($this -> var);
      echo "next: $var\n";
      return $var;
    } 
    public function valid() {
      $var = $this -> current() !== false;
      echo "valid: {$var}\n";
      return $var;
    } 
  } 
  $values = array(1, 2, 3);
  $it = new MyIterator($values);
  foreach ($it as $a => $b) {
    print "$a: $b\n";
  } 
?>


可以用 IteratorAggregate 接口以替代实现所有的 Iterator 方法。IteratorAggregate 只需要实现一个方法 IteratorAggregate::getIterator()，其应返回一个实现了 Iterator 的类的实例。

Example #3 通过实现 IteratorAggregate 来遍历对象
<?php
  class MyCollection implements IteratorAggregate {
    private $items = array();
    private $count = 0; 
    // Required definition of interface IteratorAggregate
    public function getIterator() {
      return new MyIterator($this -> items);
    } 
    public function add($value) {
      $this -> items[$this -> count++] = $value;
    } 
  } 
  $coll = new MyCollection();
  $coll -> add('value 1');
  $coll -> add('value 2');
  $coll -> add('value 3');
  foreach ($coll as $key => $val) {
    echo "key/value: [$key -> $val]\n\n";
  } 
?>

Note:PHP 5.5 及以后版本的用户也可参考生成器，其提供了另一方法来定义 Iterators。 


魔术方法 ¶

__construct()， __destruct()， __call()， __callStatic()， __get()， __set()， __isset()， __unset()， __sleep()， __wakeup()， __toString()， __invoke()， __set_state()， __clone() 和 __debugInfo() 等方法在 PHP 中被称为"魔术方法"（Magic methods）。在命名自己的类方法时不能使用这些方法名，除非是想使用其魔术功能。
Caution

PHP 将所有以 __（两个下划线）开头的类方法保留为魔术方法。所以在定义类方法时，除了上述魔术方法，建议不要以 __ 为前缀。


 __sleep() 和 __wakeup() ¶
public array __sleep ( void )
void __wakeup ( void )

serialize() 函数会检查类中是否存在一个魔术方法 __sleep()。如果存在，该方法会先被调用，然后才执行序列化操作。此功能可以用于清理对象，并返回一个包含对象中所有应被序列化的变量名称的数组。如果该方法未返回任何内容，则 NULL 被序列化，并产生一个 E_NOTICE 级别的错误。 


Note:__sleep() 不能返回父类的私有成员的名字。这样做会产生一个 E_NOTICE 级别的错误。可以用 Serializable 接口来替代。 

 __sleep() 方法常用于提交未提交的数据，或类似的清理操作。同时，如果有一些很大的对象，但不需要全部保存，这个功能就很好用。

与之相反，unserialize() 会检查是否存在一个 __wakeup() 方法。如果存在，则会先调用 __wakeup 方法，预先准备对象需要的资源。

__wakeup() 经常用在反序列化操作中，例如重新建立数据库连接，或执行其它初始化操作。 


串行化（序列化）
1.将对象转成字符串(不用看懂内容)
    __sleep()在串行化时自动调用的方法。
    作用：可以设置需要串行化的对象属性。只要在这个方法中，返回一个数组，在数组中声明了哪个属性名，哪个属性就被串行化，没有在数组中的就不被串行化。
2.将字符串转回字符串
    __wakeup()在返串行化时自动调用的方法。
    作用：对象串行化回来的对象，进行初始化。作用和__construct()和__clone()相似.

串行化的时机：
1.将对象在网络中传输.
2.将对象持久保存。

所有php里面的值都可以使用函数serialize()来返回一个包含字节流的字符串来表示。unserialize()函数能够重新把字符串变回php原来的值。 序列化一个对象将会保存对象的所有变量，但是不会保存对象的方法，只会保存类的名字。

(not know)Example #1 Sleep 和 wakeup
<?php
class Connection {
  protected $link;
  private $server, $username, $password, $db;
  public function __construct($server, $username, $password, $db) {
    $this -> server = $server;
    $this -> username = $username;
    $this -> password = $password;
    $this -> db = $db;
    $this -> connect();
  } 
  private function connect() {
    $this -> link = mysql_connect($this -> server, $this -> username, $this -> password);
    mysql_select_db($this -> db, $this -> link);
  } 
  public function __sleep() {
    return array('server', 'username', 'password', 'db');
  } 
  public function __wakeup() {
    $this -> connect();
  } 
} 
?>


__toString() ¶
public string __toString ( void )

__toString() 方法用于一个类被当成字符串时应怎样回应。例如 echo $obj; 应该显示些什么。此方法必须返回一个字符串，否则将发出一条 E_RECOVERABLE_ERROR 级别的致命错误。
Warning：不能在 __toString() 方法中抛出异常。这么做会导致致命错误。

__toString()
1.是在直接使用echo print printf输出一个对象引用时自动调用。
2.可以将对象的基本信息放在__toString()中，形成字符串返回。
3.__toString()中不能有参数，而且必须返回一个字符串。

Example #2 简单示例
<?php 
  // Declare a simple class
  class TestClass {
    public $foo;
    public function __construct($foo) {
      $this -> foo = $foo;
    } 
    public function __toString() {
      return $this -> foo;
    } 
  } 
  $class = new TestClass('Hello');
  echo $class;
?>

需要指出的是在 PHP 5.2.0 之前，__toString() 方法只有在直接使用于 echo 或 print 时才能生效。PHP 5.2.0 之后，则可以在任何字符串环境生效（例如通过 printf()，使用 %s 修饰符），但不能用于非字符串环境（如使用 %d 修饰符）。自 PHP 5.2.0 起，如果将一个未定义 __toString() 方法的对象转换为字符串，会产生 E_RECOVERABLE_ERROR 级别的错误。 


__invoke() ¶
mixed __invoke ([ $... ] )

当尝试以调用函数的方式调用一个对象时，__invoke() 方法会被自动调用。

Note:本特性只在 PHP 5.3.0 及以上版本有效。

Example #3 使用 __invoke()
<?php
  class CallableClass {
    function __invoke($x) {
      var_dump($x);
    } 
  } 
  $obj = new CallableClass;
  $obj(5);
  var_dump(is_callable($obj));
?>


__set_state() ¶
static object __set_state ( array $properties )

自 PHP 5.1.0 起当调用 var_export() 导出类时，此静态 方法会被调用。

本方法的唯一参数是一个数组，其中包含按 array('property' => value, ...) 格式排列的类属性。

Example #4 使用 __set_state()>（PHP 5.1.0 起）
<?php
  class A {
    public $var1;
    public $var2;
    public static function __set_state($an_array) { // As of PHP 5.1.0
      $obj = new A;
      $obj -> var1 = $an_array['var1'];
      $obj -> var2 = $an_array['var2'];
      return $obj;
    } 
  } 
  $a = new A;
  $a -> var1 = 5;
  $a -> var2 = 'foo';
  eval('$b = ' . var_export($a, true) . ';'); // $b = A::__set_state(array( 
  // 'var1' => 5,
  // 'var2' => 'foo',
  // ));
  var_dump($b);
?>


__debugInfo() ¶
array __debugInfo ( void )

当转储对象以获取应显示的属性时，此方法由var_dump（）调用。 如果在对象上定义了该方法，那么将显示所有public，protected和private属性。

This feature was added in PHP 5.6.0.

Example #5 Using __debugInfo()
<?php
  class C {
    private $prop;
    public function __construct($val) {
      $this -> prop = $val;
    } 
    public function __debugInfo() {
      return [
      'propSquared' => $this -> prop * * 2,
      ];
    } 
  } 
  var_dump(new C(42));
?>

类和类的方法不允许修改可以用final,类的属性不允许修改可以用常量。

Final 关键字 ¶

PHP 5 新增了一个 final 关键字。如果父类中的方法被声明为 final，则子类无法覆盖该方法。如果一个类被声明为 final，则不能被继承。
Example #1 Final 方法示例
<?php
  class BaseClass {
     public function test() {
         echo "BaseClass::test() called\n";
     }
     
     final public function moreTesting() {
         echo "BaseClass::moreTesting() called\n";
     }
  }
  class ChildClass extends BaseClass {
     public function moreTesting() {
         echo "ChildClass::moreTesting() called\n";
     }
  }
  // Results in Fatal error: Cannot override final method BaseClass::moreTesting()
?>


Example #2 Final 类示例
<?php
  final class BaseClass {
     public function test() {
         echo "BaseClass::test() called\n";
     }
     
     // 这里无论你是否将方法声明为final，都没有关系
     final public function moreTesting() {
         echo "BaseClass::moreTesting() called\n";
     }
  }
  class ChildClass extends BaseClass {
  }
  // 产生 Fatal error: Class ChildClass may not inherit from final class (BaseClass)
?>

Note: 属性不能被定义为 final，只有类和方法才能被定义为 final。 


对象复制 ¶

在多数情况下，我们并不需要完全复制一个对象来获得其中属性。但有一个情况下确实需要：如果你有一个 GTK 窗口对象，该对象持有窗口相关的资源。你可能会想复制一个新的窗口，保持所有属性与原来的窗口相同，但必须是一个新的对象（因为如果不是新的对象，那么一个窗口中的改变就会影响到另一个窗口）。还有一种情况：如果对象 A 中保存着对象 B 的引用，当你复制对象 A 时，你想其中使用的对象不再是对象 B 而是 B 的一个副本，那么你必须得到对象 A 的一个副本。

对象复制可以通过 clone 关键字来完成（如果可能，这将调用对象的 __clone() 方法）。对象中的 __clone() 方法不能被直接调用。

$copy_of_object = clone $object;

当对象被复制后，PHP 5 会对对象的所有属性执行一个浅复制（shallow copy）。所有的引用属性 仍然会是一个指向原来的变量的引用。
void __clone ( void )

当复制完成时，如果定义了 __clone() 方法，则新创建的对象（复制生成的对象）中的 __clone() 方法会被调用，可用于修改属性的值（如果有必要的话）。 

__clone()魔术方法
1.是在克隆对象时，自动调用的方法。
2.作用：和构造方法一样，是对新克隆对象进行初始值。
3.在__clone()方法中$this代表克隆的对象，所以可以对克隆的对象赋初始值。

Example #1 复制一个对象
<?php
  class SubObject {
    static $instances = 0;
    public $instance;
    public function __construct() {
      $this -> instance = ++self :: $instances;
    } 
    public function __clone() {
      $this -> instance = ++self :: $instances;
    } 
  } 
  class MyCloneable {
    public $object1;
    public $object2;
    function __clone() {
      // 强制复制一份this->object， 否则仍然指向同一个对象
      $this -> object1 = clone $this -> object1;
    } 
  } 
  $obj = new MyCloneable();
  $obj -> object1 = new SubObject();
  $obj -> object2 = new SubObject();
  $obj2 = clone $obj;
  print("Original Object:\n");
  print_r($obj);
  print("Cloned Object:\n");
  print_r($obj2);
?>


对象比较 ¶

PHP 5 中的对象比较要比 PHP 4 中复杂，所期望的结果更符合一个面向对象语言。

当使用比较运算符（==）比较两个对象变量时，比较的原则是：如果两个对象的属性和属性值 都相等，而且两个对象是同一个类的实例，那么这两个对象变量相等。

而如果使用全等运算符（===），这两个对象变量一定要指向某个类的同一个实例（即同一个对象）。

通过下面的示例可以理解以上原则。

Example #1 PHP 5 的对象比较
<?php
  function bool2str($bool) {
    if ($bool === false) {
      return 'FALSE';
    } else {
      return 'TRUE';
    } 
  } 
  function compareObjects(&$o1, &$o2) {
    echo 'o1 == o2 : ' . bool2str($o1 == $o2) . "\n";
    echo 'o1 != o2 : ' . bool2str($o1 != $o2) . "\n";
    echo 'o1 === o2 : ' . bool2str($o1 === $o2) . "\n";
    echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . "\n";
  } 
  class Flag {
    public $flag;
    function Flag($flag = true) {
      $this -> flag = $flag;
    } 
  } 
  class OtherFlag {
    public $flag;
    function OtherFlag($flag = true) {
      $this -> flag = $flag;
    } 
  } 
  $o = new Flag();
  $p = new Flag();
  $q = $o;
  $r = new OtherFlag();
  echo "Two instances of the same class\n";
  compareObjects($o, $p);
  echo "\nTwo references to the same instance\n";
  compareObjects($o, $q);
  echo "\nInstances of two different classes\n";
  compareObjects($o, $r);
?>


类型约束 ¶
PHP 5 可以使用类型约束。函数的参数可以指定必须为对象（在函数原型里面指定类的名字），接口，数组（PHP 5.1 起）或者 callable（PHP 5.4 起）。不过如果使用 NULL 作为参数的默认值，那么在调用函数的时候依然可以使用 NULL 作为实参。

如果一个类或接口指定了类型约束，则其所有的子类或实现也都如此。

类型约束不能用于标量类型如 int 或 string。Traits 也不允许。
Example #1 类型约束示例
<?php 
  // 如下面的类
  class MyClass {
    /**
     * 测试函数
     * 第一个参数必须为 OtherClass 类的一个对象
     */
    public function test(OtherClass $otherclass) {
      echo $otherclass -> var;
    } 
    /**
     * 另一个测试函数
  第一个参数必须为数组
     */
    public function test_array(array $input_array) {
      print_r($input_array);
    } 
  } 
  /**
   * 第一个参数必须为递归类型
   */
  public function test_interface(Traversable $iterator) {
    echo get_class($iterator);
  } 
  /**
   * 第一个参数必须为回调类型
   */
  public function test_callable(callable $callback, $data) {
    call_user_func($callback, $data);
  } 
  } 
  // OtherClass 类定义
  class OtherClass {
  public $var = 'Hello World';
  } 
?>


函数调用的参数与定义的参数类型不一致时，会抛出一个可捕获的致命错误。
<?php
  // 两个类的对象
  $myclass = new MyClass;
  $otherclass = new OtherClass;
  // 致命错误：第一个参数必须是 OtherClass 类的一个对象
  $myclass->test('hello');
  // 致命错误：第一个参数必须为 OtherClass 类的一个实例
  $foo = new stdClass;
  $myclass->test($foo);
  // 致命错误：第一个参数不能为 null
  $myclass->test(null);
  // 正确：输出 Hello World 
  $myclass->test($otherclass);
  // 致命错误：第一个参数必须为数组
  $myclass->test_array('a string');
  // 正确：输出数组
  $myclass->test_array(array('a', 'b', 'c'));
  // 正确：输出 ArrayObject
  $myclass->test_interface(new ArrayObject(array()));
  // 正确：输出 int(1)
  $myclass->test_callable('var_dump', 1);
?>


类型约束不只是用在类的成员函数里，也能使用在函数里：
<?php
  // 如下面的类
  class MyClass {
      public $var = 'Hello World';
  }
  /**
   * 测试函数
   * 第一个参数必须是 MyClass 类的一个对象
   */
  function MyFunction (MyClass $foo) {
      echo $foo->var;
  }
  // 正确
  $myclass = new MyClass;
  MyFunction($myclass);
?>


类型约束允许 NULL 值：
<?php
  /* 接受 NULL 值 */
  function test(stdClass $obj = NULL) {
  }
  test(NULL);
  test(new stdClass);
?>



后期静态绑定 ¶

自 PHP 5.3.0 起，PHP 增加了一个叫做后期静态绑定的功能，用于在继承范围内引用静态调用的类。

准确说，后期静态绑定工作原理是存储了在上一个“非转发调用”（non-forwarding call）的类名。当进行静态方法调用时，该类名即为明确指定的那个（通常在 :: 运算符左侧部分）；当进行非静态方法调用时，即为该对象所属的类。所谓的“转发调用”（forwarding call）指的是通过以下几种方式进行的静态调用：self::，parent::，static:: 以及 forward_static_call()。可用 get_called_class() 函数来得到被调用的方法所在的类名，static:: 则指出了其范围。

该功能从语言内部角度考虑被命名为“后期静态绑定”。“后期绑定”的意思是说，static:: 不再被解析为定义当前方法所在的类，而是在实际运行时计算的。也可以称之为“静态绑定”，因为它可以用于（但不限于）静态方法的调用。 

self:: 的限制 ¶

使用 self:: 或者 __CLASS__ 对当前类的静态引用，取决于定义当前方法所在的类：

Example #1 self:: 用法
<?php
  class A {
      public static function who() {
          echo __LINE__;
      }
      public static function test() {
          self::who();
      }
  }
  class B extends A {
      public static function who() {
          echo 'good';
      }
  }
  B::test();
?>


后期静态绑定的用法 ¶

后期静态绑定本想通过引入一个新的关键字表示运行时最初调用的类来绕过限制。简单地说，这个关键字能够让你在上述例子中调用 test() 时引用的类是 B 而不是 A。最终决定不引入新的关键字，而是使用已经预留的 static 关键字。

Example #2 static:: 简单用法
<?php
  class A {
    public static function who() {
      echo __CLASS__;
    } 
    public static function test() {
      static :: who(); // 后期静态绑定从这里开始
    } 
  } 
  class B extends A {
    public static function who() {
      echo __CLASS__;
    } 
  } 
  B :: test();
?>

Note:在非静态环境下，所调用的类即为该对象实例所属的类。由于 $this-> 会在同一作用范围内尝试调用私有方法，而 static:: 则可能给出不同结果。另一个区别是 static:: 只能用于静态属性。 

Example #3 非静态环境下使用 static::
(not know)
<?php
  class A {
      private function foo() {
          echo "success!\n";
      }
      public function test() {
          $this->foo();
          static::foo();
      }
  }
  class B extends A {
     /* foo() will be copied to B, hence its scope will still be A and
      * the call be successful */
  }
  class C extends A {
      private function foo() {
          /* original method is replaced; the scope of the new one is C */
      }
  }
  $b = new B();
  $b->test();
  $c = new C();
  $c->test();   //fails
?>

(not know)
Note:后期静态绑定的解析会一直到取得一个完全解析了的静态调用为止。另一方面，如果静态调用使用 parent:: 或者 self:: 将转发调用信息。 
Example #4 转发和非转发调用
<?php
  class A {
    public static function foo() {
      static :: who();
    } 
    public static function who() {
      echo __CLASS__ . "\n";
    } 
  } 
  class B extends A {
    public static function test() {
      A :: foo();
      parent :: foo();
      self :: foo();
    } 
    public static function who() {
      echo __CLASS__ . "\n";
    } 
  } 
  class C extends B {
    public static function who() {
      echo __CLASS__ . "\n";
    } 
  } 
  C :: test();
?>



对象和引用 ¶

在php5 的对象编程经常提到的一个关键点是“默认情况下对象是通过引用传递的”。但其实这不是完全正确的。下面通过一些例子来说明。

PHP 的引用是别名，就是两个不同的变量名字指向相同的内容。在 PHP 5，一个对象变量已经不再保存整个对象的值。只是保存一个标识符来访问真正的对象内容。 当对象作为参数传递，作为结果返回，或者赋值给另外一个变量，另外一个变量跟原来的不是引用的关系，只是他们都保存着同一个标识符的拷贝，这个标识符指向同一个对象的真正内容。

Example #1 引用和对象
<?php
  class A {
      public $foo = 1;
  }  
  $a = new A;
  $b = $a;     // $a ,$b都是同一个标识符的拷贝
               // ($a) = ($b) = <id>
  $b->foo = 2;
  echo $a->foo."\n";
  $c = new A;
  $d = &$c;    // $c ,$d是引用
               // ($c,$d) = <id>
  $d->foo = 2;
  echo $c->foo."\n";
  $e = new A;
  function foo($obj) {
      // ($obj) = ($e) = <id>
      $obj->foo = 2;
  }
  foo($e);
  echo $e->foo."\n";
?>


对象序列化 ¶
序列化对象 - 在会话中存放对象 ¶

所有php里面的值都可以使用函数serialize()来返回一个包含字节流的字符串来表示。unserialize()函数能够重新把字符串变回php原来的值。 序列化一个对象将会保存对象的所有变量，但是不会保存对象的方法，只会保存类的名字。

为了能够unserialize()一个对象，这个对象的类必须已经定义过。如果序列化类A的一个对象，将会返回一个跟类A相关，而且包含了对象所有变量值的字符串。 如果要想在另外一个文件中解序列化一个对象，这个对象的类必须在解序列化之前定义，可以通过包含一个定义该类的文件或使用函数spl_autoload_register()来实现。 

ps:
<?php
    class Person{
        public $name;
        public function __construct($name){
            $this->name=$name;
        }
    }
    $boy=new Person('king');
    $str=serialize($boy);
    var_dump($str);
    echo '<hr>';
    $boy2=unserialize($str);
    var_dump($boy2);
?>

<?php
// classa.inc:
  
  class A {
      public $one = 1;
    
      public function show_one() {
          echo $this->one;
      }
  }
  
// page1.php:
  include("classa.inc");
  
  $a = new A;
  $s = serialize($a);
  // 把变量$s保存起来以便文件page2.php能够读到
  file_put_contents('store', $s);
// page2.php:
  
  // 要正确了解序列化，必须包含下面一个文件
  include("classa.inc");
  $s = file_get_contents('store');
  $a = unserialize($s);
  // 现在可以使用对象$a里面的函数 show_one()
  $a->show_one();
?>

 当一个应用程序使用函数session_register()来保存对象到会话中时，在每个页面结束的时候这些对象都会自动序列化，而在每个页面开始的时候又自动解序列化。 所以一旦对象被保存在会话中，整个应用程序的页面都能使用这些对象。但是，session_register()在php5.4.0之后被移除了。

在应用程序中序列化对象以便在之后使用，强烈推荐在整个应用程序都包含对象的类的定义。 不然有可能出现在解序列化对象的时候，没有找到该对象的类的定义，从而把没有方法的类__PHP_Incomplete_Class_Name作为该对象的类，导致返回一个没有用的对象。

所以在上面的例子中，当运行session_register("a")，把变量$a放在会话里之后，需要在每个页面都包含文件classa.inc，而不是只有文件page1.php和page2.php。

除了以上建议，可以在对象上使用 __sleep() 和 __wakeup() 方法对序列化/反序列化事件挂载钩子。 使用 __sleep() 也能够让仅仅序列化对象的某些属性。 


OOP 变更日志 ¶

PHP 5 OOP 模型的变更将被记录在此。功能的描述与其他相关注意事项记录在了 OOP 5 文档之中。

版本  说明
7.0.0   Trait 里定义兼容的属性不再产生错误信息。
5.6.0   增加: __debugInfo() 方法。
5.5.0   增加: ::class 魔法常量。
5.5.0   增加: finally 来处理异常。
5.4.0   增加： traits。
5.4.0   已变更：如果一个抽象 类定义了构造函数的签名，它将必须被实现。
5.3.3   已变更： 命名空间 中和类同名的方法不再被作为 构造函数。这个变更不影响非命名空间中的类。
5.3.0   已变更：类实现接口的方法所具有的默认值不再需要和接口的默认值一致。
5.3.0   已变更： 现在它也能够通过一个变量来引用一个类（例如，echo $classname::constant;）。 这个变量的值不能是一个保留关键词（比如，self、parent 或 static）。
5.3.0   已变更： 如果重载方法被定义为 static 将导致一个 E_WARNING 级别的错误。 同时它也需要强制使用 public 的可见性。
5.3.0   已变更： 在 5.3.0 之前的版本，__autoload() 函数里抛出的异常不能被 catch 块结构捕获，并会导致一个致命错误。 现在在一个前提下 catch 块能够捕获 __autoload 函数中抛出的错误。如果抛出一个自定义异常，这个自定义异常的类必须是可用的。否则 __autoload 函数可能递归自动加载这个自定义异常类。
5.3.0   新增： __callStatic 方法。
5.3.0   新增： heredoc 和 nowdoc 支持类的 常量 和属性的定义。 注意：heredoc 值必须和双引号字符串遵循同样的规则（比如，变量将被替换）。
5.3.0   新增： 后期静态绑定。
5.3.0   新增： __invoke 方法。
5.2.0   已变更：__toString 方法仅在直接与 echo 或 print 使用时被调用。但是现在它能在任何字符串上下文被调用（比如在 printf() 中使用 %s ），但不是在其他类型的上下文被调用（例如 %d 修饰符）。 自 PHP 5.2.0 起，将不具有 __toString 方法的对象转化为字符串将导致一个 E_RECOVERABLE_ERROR 级别的错误。
5.1.3   已变更：在 PHP 5 之前的版本，var 的使用已被废弃，并将产生一个 E_STRICT 级别的错误。现在它不再被废弃，因此也不会产生错误。
5.1.0   已变更：现在 __set_state 静态方法在 var_export() 导出类时会被调用。
5.1.0   新增：__isset 和 __unset 方法。 


php类的三大特性：封装性，继承性，多态性。
-------------类Class--end<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<



PHP htmlspecialchars和htmlspecialchars_decode(函数)是与mysql数据库转义还换用
<?php
  $str='&lt;p&gt;king&lt;/p&gt;&lt;br /&gt;';
  echo htmlspecialchars_decode($str);
  $str2='<p>king</p><br />';
  echo htmlspecialchars($str2);
?>

php中htmlspecialchars()函数和addslashes()函数的使用和区别
在防止被注入攻击时，常会用到两个函数：htmlspecialchars()和addslashes()函数。这两个函数都是对特殊字符进行转义。

1）addslashes()作用及使用
addslashes()通常用于防止sql注入，它可对通过get，post和cookie传递过来的参数的单引号和双引号已经null前加“\”进行转义
如：如变量$str=$_POST["str"];的值为：bb' or 1='1。通过addslashes()函数过滤后会变为：bb\' or 1=\'1；

2）htmlspecialchars()作用及使用
htmlspecialchars()也是对字符进行转义，与addslashes（）不同的是htmlspecialchars()是将特殊字符用引用实体替换。
如<script>alert('xss')</script>通过htmlspecialchars()过滤后为&lt;script&gt;alert(&#039;xss&#039;)&lt;/script&gt

3）addslashes()与htmlspecialchars()的区别
除了两个函数的转义方式不同外，它们的使用也不同。
addslashes()通过用于防止sql语句注入，在执行sql语句前对通过get、post和cookie传递来的参数中的单引号，双引号，\ 和null进行转义。
但sql执行成功后，插入到数据库中的数据是不带有转义字符\的。这是如果插入到数据库中的是一些js脚本，当这些脚本被读取出来时还是会被执行。
这是我们可对读取出来的数据使用htmlspecialchars()进行过滤，避免执行被注入的脚本

htmlspecialchars_decode — 将特殊的 HTML 实体转换回普通字符 
此函数的作用和 htmlspecialchars() 刚好相反。它将特殊的HTML实体转换回普通字符。

一个使用 addslashes() 的例子是当你要往数据库中输入数据时。 例如，将名字 O'reilly 插入到数据库中，这就需要对其进行转义。 强烈建议使用 DBMS 指定的转义函数 （比如 MySQL 是 mysqli_real_escape_string()，PostgreSQL 是 pg_escape_string()），但是如果你使用的 DBMS 没有一个转义函数，并且使用 \ 来转义特殊字符，你可以使用这个函数。 仅仅是为了获取插入数据库的数据，额外的 \ 并不会插入。 当 PHP 指令 magic_quotes_sybase 被设置成 on 时，意味着插入 ' 时将使用 ' 进行转义。

PHP 5.4 之前 PHP 指令 magic_quotes_gpc 默认是 on， 实际上所有的 GET、POST 和 COOKIE 数据都用被 addslashes() 了。 不要对已经被 magic_quotes_gpc 转义过的字符串使用 addslashes()，因为这样会导致双层转义。 遇到这种情况时可以使用函数 get_magic_quotes_gpc() 进行检测。
<?php
$str = "Is your name O'reilly?";
// 输出： Is your name O\'reilly? //'
echo addslashes($str);
?>


stripslashes — 反引用一个引用字符串
说明:string stripslashes ( string $str )

反引用一个引用字符串。

    Note:如果 magic_quotes_sybase 项开启，反斜线将被去除，但是两个反斜线将会被替换成一个。

一个使用范例是使用 PHP 检测 magic_quotes_gpc 配置项的 开启情况（在 PHP 5.4之 前默认是开启的）并且你不需要将数据插入到一个需要转义的位置（例如数据库）。例如，你只是简单地将表单数据直接输出。
<?php
  $str = "Is your name O\'reilly?";
  // 输出: Is your name O'reilly?
  echo stripslashes($str);
?>

命名空间概述 ¶

(PHP 5 >= 5.3.0, PHP 7)

什么是命名空间？从广义上来说，命名空间是一种封装事物的方法。在很多地方都可以见到这种抽象概念。例如，在操作系统中目录用来将相关文件分组，对于目录中的文件来说，它就扮演了命名空间的角色。具体举个例子，文件 foo.txt 可以同时在目录/home/greg 和 /home/other 中存在，但在同一个目录中不能存在两个 foo.txt 文件。另外，在目录 /home/greg 外访问 foo.txt 文件时，我们必须将目录名以及目录分隔符放在文件名之前得到 /home/greg/foo.txt。这个原理应用到程序设计领域就是命名空间的概念。

在PHP中，命名空间用来解决在编写类库或应用程序时创建可重用的代码如类或函数时碰到的两类问题：

    用户编写的代码与PHP内部的类/函数/常量或第三方类/函数/常量之间的名字冲突。
    为很长的标识符名称(通常是为了缓解第一类问题而定义的)创建一个别名（或简短）的名称，提高源代码的可读性



定义命名空间 ¶

(PHP 5 >= 5.3.0, PHP 7)
虽然任意合法的PHP代码都可以包含在命名空间中，但只有以下类型的代码受命名空间的影响，它们是：类（包括抽象类和traits）、接口、函数和常量。

命名空间通过关键字namespace 来声明。如果一个文件中包含命名空间，它必须在其它所有代码之前声明命名空间，除了一个以外：declare关键字。

命名空间解决php中不能重名的问题。不能重名的有：
1.常量名
2.函数名
3.类名
Example #1 声明单个命名空间
<?php
  namespace MyProject;
  const CONNECT_OK = 1;
  class Connection { /* ... */ }
  function connect() { /* ... */  }
?>



Example #2 声明单个命名空间
<html>
<?php
  namespace MyProject; // 致命错误 -　命名空间必须是程序脚本的第一条语句
?>

另外，与PHP其它的语言特征不同，同一个命名空间可以定义在多个文件中，即允许将同一个命名空间的内容分割存放在不同的文件中。


定义子命名空间 ¶
(PHP 5 >= 5.3.0, PHP 7)
与目录和文件的关系很象，PHP 命名空间也允许指定层次化的命名空间的名称。因此，命名空间的名字可以使用分层次的方式定义：

Example #1 声明分层次的单个命名空间
<?php
  namespace MyProject\Sub\Level;
  const CONNECT_OK = 1;
  class Connection { /* ... */ }
  function connect() { /* ... */  }
?>
上面的例子创建了常量MyProject\Sub\Level\CONNECT_OK，类 MyProject\Sub\Level\Connection和函数 MyProject\Sub\Level\connect。


在同一个文件中定义多个命名空间 ¶
(PHP 5 >= 5.3.0, PHP 7)
也可以在同一个文件中定义多个命名空间。在同一个文件中定义多个命名空间有两种语法形式。

Example #1 定义多个命名空间，简单组合语法
<?php
  namespace MyProject;
  const CONNECT_OK = 1;
  class Connection { /* ... */ }
  function connect() { /* ... */  }
  namespace AnotherProject;
  const CONNECT_OK = 1;
  class Connection { /* ... */ }
  function connect() { /* ... */  }
?>

不建议使用这种语法在单个文件中定义多个命名空间。建议使用下面的大括号形式的语法。

Example #2 定义多个命名空间，大括号语法
<?php
  namespace MyProject {
    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }
  }
  namespace AnotherProject {
    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }
  }
?>

在实际的编程实践中，非常不提倡在同一个文件中定义多个命名空间。这种方式的主要用于将多个 PHP 脚本合并在同一个文件中。   

 将全局的非命名空间中的代码与命名空间中的代码组合在一起，只能使用大括号形式的语法。全局代码必须用一个不带名称的 namespace 语句加上大括号括起来，例如：
Example #3 定义多个命名空间和不包含在命名空间中的代码
<?php
  namespace MyProject {
    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }
  }
  namespace { // global code
    session_start();
    $a = MyProject\connect();
    echo MyProject\Connection::start();
  }
?>

除了开始的declare语句外，命名空间的括号外不得有任何PHP代码。
Example #4 定义多个命名空间和不包含在命名空间中的代码
<?php
  declare(encoding='UTF-8');
  namespace MyProject {
    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }
  }
  namespace { // 全局代码
    session_start();
    $a = MyProject\connect();
    echo MyProject\Connection::start();
  }
?>

PHP支持两种抽象的访问当前命名空间内部元素的方法，__NAMESPACE__ 魔术常量和namespace关键字。

常量__NAMESPACE__的值是包含当前命名空间名称的字符串。在全局的，不包括在任何命名空间中的代码，它包含一个空的字符串。 

关键字 namespace 可用来显式访问当前命名空间或子命名空间中的元素。它等价于类中的 self 操作符。 

使用命名空间：别名/导入
ps：起别名king
1. namespace hello\work as king
2. namespace demo1\king //注：没有as的时候，最后一个为别名

导入也是用use.

引用是什么 ¶
在 PHP 中引用意味着用不同的名字访问同一个变量内容。这并不像 C 的指针：例如你不能对他们做指针运算，他们并不是实际的内存地址…… 查看引用不是什么了解更多信息。 替代的是，引用是符号表别名。注意在PHP 中，变量名和变量内容是不一样的， 因此同样的内容可以有不同的名字。最接近的比喻是 Unix 的文件名和文件本身——变量名是目录条目，而变量内容则是文件本身。引用可以被看作是 Unix 文件系统中的硬链接。



引用做什么 ¶
PHP 的引用允许用两个变量来指向同一个内容。意思是，当这样做时：
<?php
  $a =& $b;
?>
这意味着 $a 和 $b 指向了同一个变量。

Note:$a 和 $b 在这里是完全相同的，这并不是 $a 指向了 $b 或者相反，而是 $a 和 $b 指向了同一个地方。 
Note:如果具有引用的数组被拷贝，其值不会解除引用。对于数组传值给函数也是如此。
Note:如果对一个未定义的变量进行引用赋值、引用参数传递或引用返回，则会自动创建该变量。 



超全局变量 — 超全局变量是在全部作用域中始终可用的内置变量
$GLOBALS — 引用全局作用域中可用的全部变量
$_SERVER — 服务器和执行环境信息
$_GET — HTTP GET 变量
$_POST — HTTP POST 变量
$_FILES — HTTP 文件上传变量
$_REQUEST — HTTP Request 变量
$_SESSION — Session 变量
$_ENV — 环境变量
$_COOKIE — HTTP Cookies
$php_errormsg — 前一个错误信息
$HTTP_RAW_POST_DATA — 原生POST数据
$http_response_header — HTTP 响应头
$argc — 传递给脚本的参数数目
$argv — 传递给脚本的参数数组



Example #1 $GLOBALS 范例
<?php
  function test() {
      $foo = "local variable";
      echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
      echo '$foo in current scope: ' . $foo . "\n";
  }
  $foo = "Example content";
  test();
?>



Example #1 $php_errormsg 范例
<?php
  @$arr=array(7,king);
  echo $php_errormsg;
?>


final可以修饰类，方法
static可以修饰属性，方法
const修饰的成员属性为常量，只能修饰成员属性



单例（单态，单件）设计模式————最适合php使用的设计模式，ps：连接数据库
1.如果想让一个类(如数据库连接类)，只能有一个对象，就要先让这个类，不能创建对象，将构造方法设为private
2.可以在类的内部使用一个方法来创建对象。
3.在类的内部，设一个静态属性来判断对象是否已创建过。
<?php
   class Person{
    public static $obj=null;
    private function __construct(){
      echo 'The Class is strar.<br>';
    }
    public static function setPerson(){
      if(is_null(self::$obj)){
        self::$obj=new Person;
        return self::$obj;
      }
      
      return self::$obj;
    }
    public function __destruct(){
      echo "The Class close<br>";
    }
   }
  $a=Person::setPerson();
  $a=Person::setPerson();
  $a=Person::setPerson();
  $a=Person::setPerson();
?>

类支持动态设置属性
<?php
  class Person{
    
  }
  $obj=new Person();
  $obj->bbc='bbcname';
  echo $obj->bbc;
?>

static静态方法是以类作为作用域的函数。静态方法不能访问这个类中的普通属性，因为那些属性属于一个对象，但可以访问静态属性。如果修改了一个静态属性，那么这个类的所有实例都能访问到这个新值。


self指向当前类
parent指向父类
$this指向当前对象


根据定义，我们不能在对象中调用静态方法，因此静态方法和属性又被称为类变量和属性，因此不能在静态方法中使用伪变量$this

类常量属性只包含基本数据类型的值，不能将一个对象指派给常量。像静态属性一样，只能通过类而不能通过类的实例访问常量。引用常量时不需要美元符号作为前符。

final关键字可以终止类的继承。final类不能有子类，final方法不能被覆写。

魔术方法
__get($property)    访问未定义的属性时被调用
__set($property)    给未定义的属性赋值时被调用
__isset($property)  对未定义的属性调用isset()时被用
__unset($property)  对未定义的属性调用unset()时被用
__cal($method,$arg_array)   调用未定义的方法时被调用


__get的经典用法：
<?php
    class Person{
        public function __get($property){
            $method = "get{$property}";
            if(method_exists($this,$method)){
                return $this->$method();    
            }
        }
        public function getName(){
            return 'king';
        }
        public function getAge(){
            return 26;
        }
    }
    $obj=new Person();
    echo $obj->name;
?>


__set($property)的经典用法
 <?php
    class Person{
        private $name;
        private $age;
        public function __set($property,$value){
            $method="set{$property}";
            if(method_exists($this,$method)){
                return $this->$method($value);
            }
        }
        function setName($name){
            $this->name=$name;
            if(!is_null($name)){
                $this->name=strtoupper($this->name);
            }
        }
        public function getAge($age){
            $this->age=$strtoupper($age);
        }
        public function getname(){
            echo $this->name;
        }
    }
    
    $obj=new Person();
    $obj->name='kingboy';
    $obj->getname();
?>


is_callable

(PHP 4 >= 4.0.6, PHP 5, PHP 7)
is_callable — 检测参数是否为合法的可调用结构

说明

bool is_callable ( callable $name [, bool $syntax_only = false [, string &$callable_name ]] )
验证变量的内容能否作为函数调用。 这可以检查包含有效函数名的变量，或者一个数组，包含了正确编码的对象以及函数名。

和使用require()相比，require_once()需要额外的开销。如果想尽可能地减少系统执行时间，应该考虑使用require()。

在使用文件系统函数（如fopen()或require()）时，如果没有找到相应的文件目录，就会在include_path指定的目录中自动查找--从inluce_path中指定的第一个目录开始找起（要使用本功能，需要指定fopen()函数的第三个参数为true）.直到找到目标文件时，停止搜索，由文件函数执行任务。
可以在php.ini中设置include_path目录。也可以用函数set_include_path()设置include_path查找目录。


class_exists — 检查类是否已定义

var_dump()和它的姊妹函数print_r()是检测php代码的利器，但对于类和函数，反射API提供了更高层次的功能。


回调函数：当向函数传递数据类型不能满足需求时，向函数中传递别一个函数。PHP是将函数以string形式传递的。
回调函数的经典案例：
<?php
    function large($i){
        if($i>50){
            return 1;//返回真
        }
    }
    function test($x,$y,$z){
        if($x<$y){
            for($i=$x;$i<$y;$i++){
                if($z($i)){//test传入的是large，$z()==large()
                    break;
                }
                echo $i."<br />";
            }
        }
    }
    
    test(10,100,'large');
?>


数组的内部指针控制函数(比较少用，了解下）
next(array)数组指针向后移动
prev(array)数组指针向前移动
reset(array)数组指针移动到第一个索引位置
end(array)数组指针移动到最后一个元素

each(array)也有指针向后移动的功效

key(array)获取数组当前指针的key
current(array)获取数组当前指针的value
注参考：[2014]兄弟连高洛峰.PHP教程.6.3.7.使用数组的内部指针控制函数遍历数组(ED2000.COM).mp4


array_key_exists — 检查数组里是否有指定的键名或索引
bool array_key_exists ( mixed $key , array $array )
注：isset()也可以判断一个值是否在数组中，但如果数组中的值为null则返回false.


数组排序：
sort:对数组排序（升序），注：下标重新生成
rsort:对数组逆向排序(降序)，注：下标重新生成
ksort:对数组按键名排序。
krsort:对数组按键名逆向排序。
asort:对数组按值排序并保持下标索引关系。
arsort:对数组按值逆向排序并保持下标索引关系。
natsort:用“自然排序”算法对数组中的值进行排序。
natcasesort:用“自然排序”算法对数组进行不区分大小写字母的排序。
usort:使用用户自定义的比较函数对数组中的值进行排序。
uasort:使用用户自定义的比较函数对数组中的值进行排序并保持索引关系。
uksort:使用用户自定义的比较函数对数组中的键名进行排序。
array_multisort:对多个数组或多维数组进行排序。

array_multisort可对数据表进行排序。(不懂的话可看[2014]兄弟连高洛峰.PHP教程.6.5.15.PHP多维数组的排序函数(ED2000.COM).mp4)

sort()与asort()的排序区别：sort()会重新生成下标索引，asort会保持下标索引。

sort()排序中如果有字符串和数字，先排序字符串再排序数字。

array_merge如果是数字索引数组，会重新排序，如果关联数组下标相同会覆盖。

(not know)数组合并：
“+”可以合并数组，但下标相同时会被覆盖。

注：array[]=1;比array_push()效率高

(not know)php函数的不能重名。

数组串行化（JSON格式）
json_encode — 对变量进行 JSON 编码

json_decode — 对 JSON 格式的字符串进行解码,可返回对象，也可以返回数组，只要设置参数。
mixed json_decode ( string $json [, bool $assoc = false [, int $depth = 512 [, int $options = 0 ]]] )
    注：assoc:当该参数为 TRUE 时，将返回 array 而非 object 。

count()可以统计字符串，返回都是1.

双引号中解释数组，如果用{}隔开，可以包含有2个单引号或者2个双引号。
ps1:
<?php
    $arr=['x'=>'xiao','j'=>'jing'];
    echo "{$arr["x"]} is good boy!";  //注意"
ps2:
<?php
    $arr=['x'=>'xiao','j'=>'jing'];
    echo "$arr['x'] is good boy！";//运行到$arr['这里就会报错。
    echo "$arr[x] is good girl!";//可以运行。
?>

多字节字符串处理(重点)
系统中字符串函数基本都有mb_开头的函数配套函数。(只有处理中文的时候才用，因为效率低)
常用的输出字符串函数：
echo()-- 输出字符串.
print()--输出一个字符串。
die()--输出一条消息，并退出当前脚本。
printf()--输出格式化字符串.
sprintf()--把格式化的字符串写入一个变量中

echo()与print()的区别：
1.echo()没有返回值。print()有返回值。
2.echo()在指令条件下可以连续输出多个值，print()不可以。
ps:
echo 'xiao','jing','good';//可以运行。
print('xiao','jing','good');//不可以运行。
die()是exit()的别名的关系。

printf()和sprintf()都是格式化输出。（了解下，不用重点）
字符串转换格式：
%% 返回百分比符号。
%b  二进制数。
%c 依照ASCII值的字符。
%d  带符号的十进制数。
%e  可续计数法（如1.5e3)
%u  无符号十进制数。
%f或%F  浮点数
%o  八进制
%s  字符串
%x或%X  十六进制数。
ps1:printf("$b",10);//直接输出1010
ps2:$sum=printf("$b",10);//没有输出，把1010赋值给$sum

trim和ltrim,rtime注意事项：
<?php
    $str=' 26856hello World62356 ';
    var_dump(trim($str,' 1234567890'));//把两边有数字和空格的全删掉
    var_dump(trim($str,'0..9 hd'));//把两边有数字和空格，和字符h,d的都删掉。
    var_dump(trim($str,'0..9a..z '));//过滤掉两边数字和小写字母和空格。
?>


md5()被破解原理
现在有一些网站把大量可能用的密码，用md5加密后的序列保存为一个数据库。然后把你输入的md5()加密后的序列匹配。
所以md5()加密最好有两层或三层以上。
如：md5(md5($_POST['password'].'xiaojing'));

  
字符串的比较：
1.用等号去区分两个字符串是否相等。
2.字符比较
    strcmp() — 二进制安全字符串比较
    strcasecmp()— 二进制安全比较字符串（不区分大小写）
3.按自然排序法
    strnatcmp()
    strnatcase() — 使用“自然顺序”算法比较字符串（不区分大小写）
 
ps:
<?php
    $a='file11.txt';
    $b='file2.txt';//普通排序是先比较1和2，自然排序是比较11和2
    var_dump(strnatcmp($a,$b));
?>


经典获取扩展名(获取后缀名)
<?php
    function getExt($url){
        //第一步，判断是否有问号存在 
        if(strstr($url,'?')){
            list($file)=explode('?',$url);
        }else{
            $file=$url;
        }
        //return $file;
        //第二步，取出文件名
        $loc=strrpos($file,"/")+1;//strrpos获取最后一个'/'
        $fileName=substr($file,$loc);
        //第三步，获取扩展名
        $arr=explode(".",$fileName);
        return array_pop($arr);
    }
    echo getExt('http://www.test.com/aa/bb/cc/good.aa.bb.php?user=king');
?>


basename() - 返回路径中的文件名部分
pathinfo() - 返回文件路径的信息
realpath() - 返回规范化的绝对路径名


判断两个文件的相对路径
<?php
    //获取2个文件的相对路径
    function absPath($a,$b){
        //第一步，去除公共目录结构,如果传进来的数据如下：
        //$a='/a/b/c/d/e.php';
        //$b='/a/b/12/c/c.php';
        $a=dirname($a); //  /a/b/c/d 
        $b=dirname($b); // /a/b/23/c
        $a=trim($a,'/'); // a/b/c/d
        $b=trim($b,'/'); // a/b/23/c
        $a=explode('/',$a); // array('a','b','c','d');
        $b=explode('/',$b); // array('a','b',12,'c');
        //合起来写如下：
        //$a=ecplode('/',trim(dirname($a),'/'));
        $num=max(count($a),count($b));
        for($i=0;$i<$num;$i++){
            if($a[$i]==$b[$i]){
                unset($a[$i]);
                unset($b[$i]);
            }else{
                break;
            }
        }
        //$a=array('c','d');
        //$b=array(12,'c');
        //第二步，回到同级，进入另一个目录
        $path=str_repeat("../",count($b)).implode('/',$a);
        return $path;
    }
    echo absPath('/a/b/c/d/e.php','/a/b/12/c/c.php');
?>




正则表达式（兄弟连+手册）>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
1.正则表达式，就是一个匹配的“模式”
2.正则表达式本身，就是一个字符串(中有一些语法规则，特殊字符)
兄弟连分类：定界符，原子，元字符，模式修正符。

正则表达式这个字符串，一定要在对应的函数中使用（分割的函数，替换的函数）。


分隔符:
 当使用 PCRE 函数的时候，模式需要由分隔符闭合包裹。分隔符可以使任意非字母数字、非反斜线、非空白字符。

经常使用的分隔符是正斜线(/)、hash符号(#) 以及取反符号(~)。下面的例子都是使用合法分隔符的模式。

/foo bar/
#^[^0-9]$#
+php+
%[a-zA-Z0-9_-]%

如果分隔符需要在模式内进行匹配，它必须使用反斜线进行转义。如果分隔符经常在 模式内出现， 一个更好的选择就是是用其他分隔符来提高可读性。

/http:\/\//
#http://#

需要将一个字符串放入模式中使用时，可以用 preg_quote() 函数对其进行 转义，它的第二个参数(可选)可以用于指定需要被转义的分隔符。

除了上面提到的分隔符，也可以使用括号样式的分隔符，左括号和右括号分别作为开始和结束 分隔符。

{this is a pattern}

可以在结束分隔符后面增加模式修饰符。 下面的例子是一个大小写不敏感的匹配：

#[a-z]#i

原子：最小的一个匹配单位(放在定界符中),在一个正则表达式中，最少要有一个原子。
1.打印字符(a-z A-Z 0-9 !@#$%^&*()-+) 和非打印字符,如换行\n



元字符:

正则表达式的威力源于它可以在模式中拥有选择和重复的能力。 一些字符被赋予 特殊的涵义，使其不再单纯的代表自己，模式中的这种有特殊涵义的编码字符 称为 元字符。

共有两种不同的元字符：一种是可以在模式中方括号外任何地方使用的，另外一种 是需要在方括号内使用的。 在方括号外使用的元字符如下：

\
    一般用于转义字符
^
    断言目标的开始位置(或在多行模式下是行首)
$
    断言目标的结束位置(或在多行模式下是行尾)
.
    匹配除换行符外的任何字符(默认)
[
    开始字符类定义
]
    结束字符类定义
|
    开始一个可选分支
(
    子组的开始标记
)
    子组的结束标记
?
    作为量词，表示 0 次或 1 次匹配。位于量词后面用于改变量词的贪婪特性。 (查阅量词) 
*
    量词，0 次或多次匹配
+
    量词，1 次或多次匹配
{
    自定义量词开始标记
}
    自定义量词结束标记

模式中方括号内的部分称为“字符类”。 在一个字符类中仅有以下可用元字符：

\
    转义字符
^
    仅在作为第一个字符(方括号内)时，表明字符类取反
-
    标记字符范围 

模式修正符：修正，对模式（正则)修正，(写在定界符号外面，写在右边)。




转义序列(反斜线)

反斜线有多种用法。首先，如果紧接着是一个非字母数字字符，表明取消 该字符所代表的特殊涵义。这种将反斜线作为转义字符的用法在字符类 内部和外部都可用。

比如，如果你希望匹配一个 "*" 字符，就需要在模式中写为 "\*"。 这适用于一个字符在不进行转义会有特殊含义的情况下。 但是， 对于非数字字母的字符，总是在需要其进行原文匹配的时候在它前面增加一个反斜线， 来声明它代表自己，这是安全的。如果要匹配一个反斜线，那么在模式中使用 ”\\”。

    Note:

    反斜线在单引号字符串和双引号字符串 中都有特殊含义，因此要匹配一个反斜线， 模式中必须写为 ”\\\\”。 译注： “/\\/”， 首先它作为字符串，反斜线会进行转义， 那么转义后的结果是/\/，这个才是正则表达式引擎拿到的模式， 而正则表达式引擎也认为 \ 是转义标记，它会将分隔符 / 进行转义， 从而得到的是一个错误，因此，需要 4 个反斜线才可以匹配一个反斜线。

如果一个模式被使用 PCRE_EXTENDED 选项编译， 模式中的空白字符(除了字符类中的)和未转义的#到行末的所有字符都会被忽略。 要在这种情况下使用空白字符或者#，就需要对其进行转义。



反斜线的第二种用途
提供了一种对非打印字符进行可见编码的控制手段。 除了二进制的 0 会终结一个模式外，并不会严格的限制非打印字符(自身)的出现， 但是当一个模式以文本编辑器的方式编辑准备的时候， 使用下面的转义序列相比使用二进制字符会更加容易。

\a
    响铃字符(十六进制 07) 
\cx
    "control-x"，x 是任意字符 
\e
    转义 (十六进制 1B) 
\f
    换页 (十六进制 0C) 
\n
    换行 (十六进制 0A) 
\p{xx}
    一个符合 xx 属性的字符，详细查看unicode properties 属性 
\P{xx}
    一个不符合xx属性的字符，详细查看unicode properties 属性 
\r
    回车 (十六进制 0D) 
\t
    水平制表符 (十六进制 09) 
\xhh
    hh十六进制编码的字符，详细查看unicode properties 属性 
\ddd
    ddd八进制编码的字符，或者后向引用 

\cx的确切效果如下： 如果x是一个小写字母，它被转换为大写。接着， 将字符的第6位(十六进制 40，右数第一个位为第0位)取反。 比如\cz成为十六进制的1A，\c{成为十六进制3B， \c;成为十六进制7B。

在”\x”后面，读取两个十六进制数(字母可以是大写或小写)。 在UTF-8模式， “\x{…}”允许使用， 花括号内的内容是十六进制有效数字。 它将给出的十六进制数字解释为 UTF-8 字符代码。原来的十六进制转义序列， \xhh， 匹配一个双字节的UTF-8字符，如果它的值大于127

在”\0”之后， 读取两个八进制数。所有情况下，如果数少于2个，则直接使用。 序列 ”\0\x\07” 指定了两个二进制 0 紧跟着一个 BEL 字符。 请确保初始的 0 之后的两个数字是合法的八进制数。

处理一个反斜线紧跟着的不是0的数字的情况比较复杂。在字符类外部， PCRE 读取它并以十进制读取紧随其后的数字。 如果数值小于 10， 或者之前捕获到了该数字能够代表的左括号(子组)， 整个数字序列被认为是后向引用。后向引用如何工作在后面描述， 接下来就会讨论括号子组。

在一个字符类里面，或者十进制数大于 9 并且没有那么多的子组被捕获， PCRE 重新读取反斜线后的第三个 8 进制数字，并且从最低的 8 位生成单字节值。 任何的后续数字都代表它们自身。例如：

\040
    空格的另外一种用法
\40
    当提供了少于40个子组时也认为是空格。 
\7
    始终是后向引用
\11
    可能是后向引用，也可能是制表符 
\011
    总是一个制表符
\0113
    一个制表符紧跟着一个3(因为每次最多只读取3个8进制位
\113
    八进制113代表的字符 
\377
    8进制377是10进制255， 因此代表一个全1的字符
\81
    一个后向引用或者一个二进制 0 紧跟着两个数字 8 和 1(因为8不是8进制有效数字) 

注意，八进制值的 100 或者更大的值必须没有前置的0引导， 因为每次最多读取3个8进制位.

所有序列定义的单字节值都可以在字符类内部或外部使用。另外，在字符类中, 序列 ”\b” 解释为退格字符。字符类外它又有不同的意义(下面有描述)



反斜线的第三种用法
用来描述特定的字符类：

\d
    任意十进制数字
\D
    任意非十进制数字
\h
    任意水平空白字符(since PHP 5.2.4)
\H
    任意非水平空白字符(since PHP 5.2.4)
\s
    任意空白字符,包括回车，换行。
\S
    任意非空白字符
\v
    任意垂直空白字符(since PHP 5.2.4)
\V
    任意非垂直空白字符(since PHP 5.2.4)
\w
    任意单词字符,单词字符指的是任意字母、数字、下划线。
\W
    任意非单词字符

上面每一对转义序列都代表了完整字符集中两个不相交的部分， 任意字符一定会匹配其中一个，同时一定不会匹配另外一个。

单词字符指的是任意字母、数字、下划线。 也就是说任意可以组成perl单词的字符。 字母和数字的定义通过PCRE字符表控制，可以通过指定地域设置使其匹配改变。比如， 在法国 (fr) 地域设置中，一些超过 128 的字符代码被用于重音字母， 它们可以实用 \w 匹配。

这些字符类序列在字符类内部或外部都可以出现。 他们每次匹配所代表的字符类型中的一个字符。 如果当前匹配点位于目标字符串末尾， 它们中的所有字符都匹配失败， 因为没有字符让它们匹配了。



反斜线的第四种用法
一些简单的断言。 一个断言指定一个必须在特定位置匹配的条件， 它们不会从目标字符串中消耗任何字符。 接下来我们会讨论使用子组的更加复杂的断言。 反斜线断言包括：

\b
    单词边界,如This is island中三个is都是边界的。如匹配第一个is用/\bis/ ;匹配第二个is用/\bis\b/
\B
    非单词边界
\A
    目标的开始位置(独立于多行模式)
\Z
    目标的结束位置或结束处的换行符(独立于多行模式) 
\z
    目标的结束位置(独立于多行模式)
\G
    在目标中首次匹配位置

这些断言不能出现在字符类中(但是注意， “\b”在字符类中有不同的意义， 表示的是退格(backspace)字符)

一个单词边界表示的是在目标字符串中， 当前字符和前一个字符不同时匹配\w或\W(一个比配\w, 一个匹配\W)， 或者作为字符串开始或结尾字符的时候当前字符匹配\w。

\A， \Z， \z断言不同于传统的^和$(详见下文)， 因为他们永远匹配目标字符串的开始和结尾，而不会受模式修饰符的限制。 它们不受PCRE_MULTILINE，PCRE_DOLLAR_ENDONLY选项的影响。 \Z 和 \z 之间的不同在于当字符串结束字符时换行符时 \Z 会将其看做字符串结尾匹配, 而 \z 只匹配字符串结尾。

\G 断言在指定了$offset 参数的preg_match() 调用中， 仅在当前匹配位置在匹配开始点的时候才是成功的。 当 $offset 的值不为 0 的时候， 它与 \A 是不同的。 译注：另外一点与 \A 的不同之处在于使用 preg_match_all() 时， 每次匹配 \G 只是断言是否是匹配结果的开始位置， 而 \A 断言的则是匹配结果的开始位置是否在目标字符串开始位置。

自 PHP 4.3.3开始， \Q 和 \E 可以用于在模式中忽略正则表达式元字符。比如： \w+\Q.$.\E$ 会匹配一个或多个单词字符，紧接着一个点号，一个$，一个点号， 最后锚向字符串末尾。

自 PHP 5.2.4 开始。 \K 可以用于重置匹配。 比如， foot\Kbar 匹配”footbar”。 但是得到的匹配结果是 ”bar”。但是， \K 的使用不会干预到子组内的内容， 比如 (foot)\Kbar 匹配 ”footbar”，第一个子组内的结果仍然会是 ”foo”。译注： \K 放在子组和子组外面的效果是一样的。



锚

在一个字符类外面，在默认匹配模式下， ^ 是一个断言当前匹配点位于目标字符串开始处的断言。在一个字符类内部， ^ 表明这个字符类中描述的字符取反(详见下文)。

^ 并不一定要是模式的第一个字符， 但是如果处于某个可选分支时， 它应该是该分支的首字符。如果所有选择分支都以 ^ 开头，这就是说， 如果模式限制为只匹配目标的开头， 它被称为是一个 ”紧固” 模式。(同样也有其他方式可以构造出紧固模式)

$ 是用于断言当前匹配点位于目标字符串末尾， 或当目标字符串以换行符结尾时当前匹配点位于该换行符位置(默认情况)。 $ 不一定要作为模式的最后一个字符，但是如果它在某个可选分支中时， 就应该位于该分支的末尾。 $ 在字符类中没有特殊的意义。

$ 的意义可以通过在编译或匹配时设置 PCRE_DOLLAR_ENDONLY 改变为只匹配字符串末尾。 这不会影响 \Z 断言的行为。

^ 和 $ 字符的意义在 PCRE_MULTILINE 选项被设置时会发生变化。 当在这种情况下时， 它们匹配每一个换行符后面的和前面的字符，另外， 也会匹配目标字符串的开始和结束。比如, 模式 /^abc$/ 在多行模式下会成功匹配目标字符串 ”def\nabc”， 而正常情况下不会。因此，由于所有的可选分支都以 ^ 开始， 在单行模式下这成为紧固模式，然而在多行模式下，这是非紧固的。 PCRE_DOLLAR_ENDONLY 选项在PCRE_MULTILINE 设置后失效。

注意： \A、\Z、 \z 等转义序列可以在任何模式下用于匹配目标字符串的开始和结束位置。 并且如果模式的所有分支都以 \A 开始，它同样是紧固的， 而与 PCRE_MULTILINE 是否设置无关。



句点

在字符类外部，模式中的句点匹配目标字符串中的任意字符，包括非打印字符， 但是(默认)不包括换行符。如果 PCRE_DOTALL 被设置，句点就会匹配换行符。 句点的处理和^、$的处理没有关联，它们唯一的关系是它们都涉及到了换行符。 句点在字符类中没有任何意义。

\C可以被用于匹配单字节， 也就是说在UTF-8模式下，句点可以匹配多字节字符。



字符类(方括号)

左方括号开始一个字符类的描述，并以方中括号结束。 单独的一个右方括号没有特殊含义。如果一个右方括号需要作为一个字符类中的成员, 那么可以将它写在字符类的首字符处(如果使用了^取反， 那么是第二个)或者使用转义符。

一个字符类在目标字符串中匹配一个单独的字符； 该字符必须是字符类中定义的字符集合的其中一个, 除非使用了 ^ 对字符类取反。 如果^需要作为一个字符类的成员，确保它不是该字符类的首字符， 或者对其进行转义即可。

例如，字符类[aeiou]匹配所有的小写元音字母， 而[^aeiou]匹配所有非元音字母的字符。注意： ^只是一个通过枚举指定那些不存在字符类之中的字符的便利符号。而不是断言， 它仍然会从目标字符串中消耗一个字符，并且如果当前匹配点在目标字符串末尾， 匹配将会失败。

当大小写无关匹配被设置后，任意字符类都同时代表大小写两种版本，因此对于例子， 一个大小写不敏感的[aeiou]同时匹配"A"和"a"， 并且大小写不敏感的[^aeiou]同时不匹配 "A"。

换行符在字符类中没有任何特殊涵义， 与 PCRE_DOTALL 或 PCRE_MULTILINE 选项都无关。 一个字符类比如 [^a] 始终会匹配换行符。

在字符类中，一个中划线(减号 -)可以用于指定从一个字符到另一个字符的范围。 比如，[d-m]匹配d到m之间的所有字符，这个集合时闭合的。 如果中划线自身要在一个字符类中描述， 它必须被转移或者出现在一个不会被解释为一个范围的位置， 典型的比如字符类开始或结束位置。

在一个字符范围描述后面不能使用右中括号。 比如一个模式 [W-]46] 被解释为一个包含 W 和 - 的字符类，后面紧跟字符串 ”46]”， 因此它可以匹配 ”W46]” 或 ”-46]”。然而， 如果中括号是经过转义的， 它将会被解释为范围的终点， 因此 [W-\]46] 就会被解释为一个单独的包含 W 至 ] 范围内所有字符以及 4、6 的字符类。 8 进制或 16 进制描述的中括号同样可以用于作为范围的终点。

范围操作以 ASCII 整理排序。它们可以用于为字符指定数值，比如 [\000-\037]。 如果在大小写不敏感匹配模式下使用一个包含字母的范围， 则同时匹配它的大小写形式。 比如 [W-c] 在不区分大小写匹配时等价于 [][\^_`wxyzabc]，并且， 如果使用了 ”fr”(法国) 的地域设置字符表时， [\xc8-xcb] 将会在所有模式下匹配重音E字符。

字符类\d、\D、 \s、\S、\w 和 \W 也可以出现在一个字符类中， 用以将其匹配的字符类加入到新的自定义字符类中。比如， [\dABCDEF] 匹配任意合法的 16 进制数。用 ^ 可以很方便的制定严格的字符类， 比如 [^\W_] 匹配任何字母或数字，但不匹配下划线。

所有非字母数字字符除了\、-、 ^(在起始位置)以及结束的]在字符类中都是非特殊字符， 没有转义也不会有危害。模式结束符在表达式中总是特殊字符，必须进行转义。

Perl 支持 POSIX 字符类符号。这种字符类使用[:和:]闭合。 PCRE 同样支持这些字符类， 比如，[01[:alpha:]%]匹配 ”0”、“1”、任意字母或”%”。 支持的字符类如下：
Character classes alnum 字母和数字
alpha 字母
ascii 0 - 127的ascii字符
blank 空格和水平制表符
cntrl 控制字符
digit 十进制数(same as \d)
graph 打印字符, 不包括空格
lower 小写字母
print 打印字符,包含空格
punct 打印字符, 不包括字母和数字
space 空白字符 (比\s多垂直制表符)
upper 大写字母
word  单词字符(same as \w)
xdigit  十六进制数字
空白字符有HT(9)、 LF(10)、VT(11)、 FF(12)、CR(13)、space(32)。 注意， 这个列表包含了垂直制表符。这使得space不同于\s， 因为它不包含垂直制表符(为了向 perl 兼容)

[:word:]是一个 perl扩展，[:blank:]是一个从 Perl5.8 中来的 GNU 扩展。 另外一个 perl 扩展是取反，通过前置一个^。 比如， [12[:^digit:]] 匹配”1”, “2” 或任何非数字字符

在 UTF-8 模式，大于 128 的字符值不会匹配任何 POSIX 字符类。


可选路径(|)

竖线字符用于分离模式中的可选路径。 比如模式gilbert|Sullivan匹配 ”gilbert” 或者 ”sullivan”。 竖线可以在模式中出现任意多个，并且允许有空的可选路径(匹配空字符串)。 匹配的处理从左到右尝试每一个可选路径，并且使用第一个成功匹配的。 如果可选路径在子组(下面定义)中， 则”成功匹配”表示同时匹配了子模式中的分支以及主模式中的其他部分。



重复/量词

重复次数是通过量词指定的，可以紧跟在下面元素之后：

    单独的字符, 可以是经过转义的
    元字符。
    字符类
    后向引用(参加下一部分)
    子组(除非它是一个断言)

一般的重复量词指定了一个最小数值和一个最大数值的匹配次数， 通过花括号包裹两个数字，两个数字之间用逗号隔开的语法定义。 两个数值都必须小于 65536， 并且第一个数字必须小于等于第二个。 比如： z{2,4} 匹配 ”zz”， “zzz”， “zzzz”。 单个的右花括号不是特殊字符。 如果第二个数字被省略，但是逗号仍然存在，就代表没有上限； 如果第二个数字和逗号都被省略，那么这个量词就限定的是一个确定次数的匹配。 比如 [aeiou]{3,} 匹配至少三个连续的元音字母，但是同时也可以匹配更多， 而 \d{8} 则只能匹配 8 个数字。 左花括号出现在不允许使用量词的位置或者与量词语法不匹配时， 被认为是一个普通字符，对它自身进行原文匹配。 比如，{,6}就不是一个量词， 会按照原文匹配四个字符 ”{,6}”。

量词 {0} 是被授权的，它会导致的行为是认为前面的项和量词不存在。

为了方便(以及历史的兼容性)，最常用的三个量词都有单字符缩写。
单字符量词 *   等价于 {0,}
+   等价于 {1,}
?   等价于 {0,1}

可以通过一个不匹配任何字符的子模式后面紧跟一个匹配 0 或多个字符的量词来构造一个没有上限的无限循环。 比如：(a?)*

早期版本的 perl 和 pcre 对于这种模式会在编译期得到一个错误。然而， 由于这在某些情况下是有用的，因此现在也接受这种模式了， 但是如果任何子模式的重复确实匹配不到任何字符，循环会被强制跳出。

默认情况下，量词都是”贪婪”的，也就是说， 它们会在不导致模式匹配失败的前提下，尽可能多的匹配字符(直到最大允许的匹配次数)。 这种问题的典型示例就是尝试匹配C语言的注释。 出现在 /* 和 */ 之间的所有内容都被认为是注释， 在注释中间， 可以允许出现单独的 * 和 /。 对C注释匹配的一个尝试是使用模式 /\*.*\*/， 假设将此模式应用在字符串 ”/* first comment*/ not comment /*second comment*/” 它会匹配到错误的结果，也就是整个字符串， 这是因为量词的贪婪性导致的，它会尝试尽可能多的匹配字符。

然而，如果一个量词紧跟着一个 ?(问号) 标记，它就会成为懒惰(非贪婪)模式， 它不再尽可能多的匹配，而是尽可能少的匹配。 因此模式 /\*.*?\*/ 在 C 的注释匹配上将会正确的执行。 各个量词自身的意义并不会改变，而是由于加入了 ? 使其首选的匹配次数发生改变。 不要将 ? 的这个用法和它作为量词的用法混淆。因为它又两种用法， 因此有时它会出现量词，比如 \d??\d 会更倾向于匹配一个数字， 但同时如果为了达到整个模式匹配的目的，它也可以接受两个数字的匹配。译注： 以模式 \w\d??\d\w 为例，对于字符串 ”a33a”，虽然 \d?? 是非贪婪的， 但由于如果使用贪婪会导致整个模式不匹配，所以， 最终它选择的仍然是匹配到一个数字。

如果 PCRE_UNGREEDY 选项被设置(一个在 perl 中不可用的选项)， 那么量词默认情况下就是非贪婪的了。但是， 单个的量词可以通过紧跟一个 ? 来使其成为贪婪的。换句话说， PCRE_UNGREEDY 这个选项逆转了贪婪的默认行为。

量词后面紧跟一个 ”+” 是”占有”性。它会吃掉尽可能多的字符， 并且不关注后面的其他模式，比如 .*abc 匹配 ”aabc”， 但是 .*+abc 不会匹配， 因为 .*+ 会吃掉整个字符串，从而导致后面剩余的模式得不到匹配。 自PHP 4.3.3 起， 可以使用占有符 (+) 修饰量词来达到提升速度的目的。

当一个子组受最小数量大于 1 或有一个最大数量限制的量词修饰时， 按照最小或最大的数量的比例需要更多的存储用于编译模式。

如果一个模式以 .* 或 .{0,} 开始并且 PCRE_DOTALL 选项开启(等价于 perl 的/s)， 也就是允许.匹配换行符，那么模式会隐式的紧固，因为不管怎么样， 接下来都会对目标字符串中的每个字符位置进行尝试，因此在第一次之后， 在任何位置都不会有一个对所有匹配重试的点。 PCRE 会想对待 \A 一样处理这个模式。 在我们已知目标字符串没有包含换行符的情况下， 当模式以 .* 开始的时候我们为了获得这个优化，值得设置 PCRE_DOTALL， 或者选择使用 ^ 明确指明锚定。

译注：这里的优化指模式不匹配之后，不会回头再来查找下一个位置， 比如没有设置 PCRE_DOTALL，并且目标字符串第一个字符时换行符， 那么模式尝试第一个字符，发现不匹配， 会重新用模式从第二个字符位置开始进行尝试。 而使用了PCRE_DOTALL后， 是肯定匹配的….同理，当使用了 ^ 或者 /A的限定是，模式一旦不匹配，都可以直接退出， 而不用在目标字符串下一个位置再一次开始整个模式的匹配。

当一个捕获子组时重复的时，捕获到的该子组的结果是最后一次迭代捕获的值。比如， (tweedle[dume]{3}\s*)+匹配字符串 ”tweedledum tweedledee”， 得到的的子组捕获结果是 ”tweedledee”。然而，如果是嵌套的捕获子组， 相应的捕获值可能会被设置到之前的迭代中。比如，/(a|(b))+/ 匹配字符串 ”aba”， 第二个捕获子组得到的结果会是 ”b”。译注：不理解然而之后的部分，以例子说明， b 是第二个子组最后一次捕获到的结果，所以， 第二个子组最后结果是 b， 这是符合”然而”之前描述的规则的。


. -- 代表任意字符。
^ 或者 \A  --代表以什么开头
$ 或者 \Z  --代表以什么结尾。




子组(子模式)
不懂可以参考：[2014]兄弟连高洛峰.PHP教程9.2.7.正则表达式中元字符中的小括号(ED2000.COM).mp4
子组通过圆括号分隔界定，并且它们可以嵌套。 将一个模式中的一部分标记为子组(子模式)主要是来做两件事情：

    将可选分支局部化。比如，模式cat(arcat|erpillar|)匹配 ”cat”， “cataract”， “caterpillar” 中的一个，如果没有圆括号的话，它匹配的则是 ”cataract”， “erpillar” 以及空字符串。

    将子组设定为捕获子组(向上面定义的). 当整个模式匹配后， 目标字符串中匹配子组的部分将会通过 pcre_exec()() 的 ovector 参数回传给调用者。 左括号从左至右出现的次序就是对应子组的下标(从 1 开始)， 可以通过这些下标数字来获取捕获子模式匹配结果。

比如，如果字符串 ”the red king” 使用模式((red|white) (king|queen)) 进行匹配， 模式匹配到的结果是 array(“red king”， ”red king”, “red”, “king”) 的形式， 其中第 0 个元素是整个模式匹配的结果，后面的三个元素依次为三个子组匹配的结果。 它们的下表分别为 1， 2， 3。

事实上，圆括号履行的两种功能并不总是有用的。 经常我们会有一种需求需要使用子组进行分组， 但又不需要(单独的)捕获它们。 在子组定义的左括号后面紧跟字符串 ”?:” 会使得该子组不被单独捕获， 并且不会对其后子组序号的计算产生影响。比如, 如果字符串 "the white queen" 匹配模式 the ((?:red|white) (king|queen))，匹配到的子串是 "white queen" 和 "queen"， 他们的下标分别是 1 和 2。捕获子组的最大序号为 65535。然而，有可能我们并不能编译这么长的 正则表达式，这取决于 libpcre 的配置。

为了方便简写，如果需要在非捕获子组开始位置设置选项， 选项字母可以位于 ? 和 : 之间，比如：

(?i:saturday|sunday)
(?:(?i)saturday|sunday)

上面两种写法实际上是相同的模式。因为可选分支会从左到右尝试每个分支， 并且选项没有在子模式结束前被重置， 并且由于选项的设置会穿透对后面的其他分支产生影响，因此， 上面的模式都会匹配 ”SUNDAY” 以及 ”Saturday”。

在 PHP 4.3.3 中，可以对子组使用 (?P<name>pattern) 的语法进行命名。 这个子模式将会在匹配结果中同时以其名称和顺序(数字下标)出现， PHP 5.2.2中又增加了两种味子组命名的语法： (?<name>pattern) 和 (?’name’pattern)。

有时需要多个匹配可以在一个正则表达式中选用子组。 为了让多个子组可以共用一个后向引用数字的问题， (?| 语法允许复制数字。 考虑下面的正则表达式匹配Sunday：

(?:(Sat)ur|(Sun))day

这里当后向引用 1 空时Sun 存储在后向引用 2 中. 当后向引用 2 不存在的时候 Sat 存储在后向引用 1中。 使用 (?|修改模式来修复这个问题：

(?|(Sat)ur|(Sun))day

使用这个模式， Sun和Sat都会被存储到后向引用1中。





后向引用
不懂可以参考：[2014]兄弟连高洛峰.PHP教程9.2.7.正则表达式中元字符中的小括号(ED2000.COM).mp4
在一个字符类外面， 反斜线紧跟一个大于 0 (可能还有一位数)的数字就是一个到模式中之前出现的某个捕获组的后向引用。

如果紧跟反斜线的数字小于 10， 它总是一个后向引用， 并且如果在模式中没有这么多的捕获组会引发一个错误。 换一种说法， 被引用的括号不能少于被引用的小于 10 的数量。 查看上面的”反斜线”部分查看具体的数字处理方式。

一个后向引用会直接匹配被引用捕获组在目标字符串中实际捕获到的内容， 而不是匹配子组模式的内容。因此，模式(sens|respons)e and \1ibility将会匹配 ”sense and sensibility” 和 ”response and responsibility”， 而不会匹配 ”sense and responsibility”。 如果在后向引用时被强制进行了大小写敏感匹配, 比如 ((?i)rah)\s+\1 匹配 ”rah rah”和”RAH RAH”，但是不会匹配 ”RAH rah”， 即使原始捕获子组自身是不区分大小写的。 译注： 这里其实要考虑的是后向引用期望得到的内容是和那个被引用的捕获子组得到的内容是完全一致的(当然， 我们可以通过在后向引用之前设定内部选项使其不区分大小写，或者增加模式修饰符， 同样可以达到不区分大小写的目的，但是, 这种做法实际上是从外部对其行为进行了控制。)

可能会有超过一个的后向引用引用相同的子组。 一个子组可能并不会真正的用于特定的匹配，此时， 任何对这个子组的后向引用也都会失败。 比如， 模式 (a|(bc))\2 总是在匹配 ”a” 开头而不是 ”bc” 开头的字符串时失败。 因为可能会有多达 99 个后向引用， 所有紧跟反斜线后的数字都可能是一个潜在的后向引用计数。 如果模式在后向引用之后紧接着还是一个数值字符， 那么必须使用一些分隔符用于终结后向引用语法。 如果 PCRE_EXTENDED 选项被设置了， 可以使用空格来做。其他情况下可以使用一个空的注释。

如果一个后向引用出现在它所引用的子组内部， 它的匹配就会失败。比如， (a\1) 就不会得到任何匹配。然而这种引用可以用于内部的子模式重复。比如， 模式 (a|b\1)+ 会匹配任意数量的 ”a” 组成的字符串以及 ”aba”， “ababba” 等等(译注： 因为子组内部有一个可选路径，可选路径中有一条路能够完成匹配，在匹配完成后， 后向引用就能够引用到内容了)。在每次子模式的迭代过程中， 后向引用匹配上一次迭代时这个子组匹配到的字符串。为了做这种工作， 模式必须满足这样一个条件，模式在第一次迭代的时候， 必须能够保证不需要匹配后向引用。 这种条件可以像上面的例子用可选路径来实现，也可以通过使用最小值为 0 的量词修饰后向引用的方式来完成。

在 PHP 5.2.2之后， \g 转义序列可以用于子模式的绝对和相对引用。 这个转义序列必须紧跟一个无符号数字或一个负数， 可以选择性的使用括号对数字进行包裹。 序列\1， \g1，\g{1} 之间是同义词关系。 这种用法可以消除使用反斜线紧跟数值描述反向引用时候产生的歧义。 这种转义序列有利于区分后向引用和八进制数字字符， 也使得后向引用后面紧跟一个原文匹配数字变的更明了，比如 \g{2}1。

\g 转义序列紧跟一个负数代表一个相对的后向引用。比如： (foo)(bar)\g{-1} 可以匹配字符串 ”foobarbar”， (foo)(bar)\g{2} 可以匹配 ”foobarfoo”。 这在长的模式中作为一个可选方案， 用来保持对之前一个特定子组的引用的子组序号的追踪。

后向引用也支持使用子组名称的语法方式描述, 比如 (?P=name) 或者 PHP 5.2.2 开始可以实用\k<name> 或 \k’name’。 另外在 PHP 5.2.4 中加入了对\k{name} 和 \g{name} 的支持。



模式修饰符

下面列出了当前可用的 PCRE 修饰符。括号中提到的名字是 PCRE 内部这些修饰符的名称。 模式修饰符中的空格，换行符会被忽略，其他字符会导致错误。

    i (PCRE_CASELESS)
        如果设置了这个修饰符，模式中的字母会进行大小写不敏感匹配。 
    m (PCRE_MULTILINE)
        默认情况下，PCRE 认为目标字符串是由单行字符组成的(然而实际上它可能会包含多行)， "行首"元字符 (^) 仅匹配字符串的开始位置， 而"行末"元字符 ($) 仅匹配字符串末尾， 或者最后的换行符(除非设置了 D 修饰符)。这个行为和 perl 相同。 当这个修饰符设置之后，“行首”和“行末”就会匹配目标字符串中任意换行符之前或之后，另外， 还分别匹配目标字符串的最开始和最末尾位置。这等同于 perl 的 /m 修饰符。如果目标字符串 中没有 "\n" 字符，或者模式中没有出现 ^ 或 $，设置这个修饰符不产生任何影响。 
    s (PCRE_DOTALL)
        如果设置了这个修饰符，模式中的点号元字符匹配所有字符，包含换行符。如果没有这个 修饰符，点号不匹配换行符。这个修饰符等同于 perl 中的/s修饰符。 一个取反字符类比如 [^a] 总是匹配换行符，而不依赖于这个修饰符的设置。 
    x (PCRE_EXTENDED)
        如果设置了这个修饰符，模式中的没有经过转义的或不在字符类中的空白数据字符总会被忽略， 并且位于一个未转义的字符类外部的#字符和下一个换行符之间的字符也被忽略。 这个修饰符 等同于 perl 中的 /x 修饰符，使被编译模式中可以包含注释。 注意：这仅用于数据字符。 空白字符 还是不能在模式的特殊字符序列中出现，比如序列 (?( 引入了一个条件子组(译注: 这种语法定义的 特殊字符序列中如果出现空白字符会导致编译错误。 比如(?(就会导致错误)。 

e (PREG_REPLACE_EVAL)
    Warning
    This feature was DEPRECATED in PHP 5.5.0, and REMOVED as of PHP 7.0.0.

 U (PCRE_UNGREEDY)
    这个修饰符逆转了量词的"贪婪"模式。 使量词默认为非贪婪的，通过量词后紧跟? 的方式可以使其成为贪婪的。这和 perl 是不兼容的。 它同样可以使用 模式内修饰符设置 (?U)进行设置， 或者在量词后以问号标记其非贪婪(比如.*?)。推荐不要用U，用.*? 或者.+? 

其他的修正符不是太重要，没必要学。


正则表达式的编写
1.就是一种语言，开发思想放进去。
2.列需求，一条一条地满足。


字符的要点：分割，匹配，查找，替换
1.字符串处理函数(处理快，但有一些做不到);
2.正则表达式函数(功能强大，但效率低).

查找：
函数匹配查找：strstr strpos substr
正则匹配查找：preg_match() preg_match_all() preg_grep()

分割合并:
函数分割合并:explode() implode()--join()
正则分割：preg_split()

替换：
函数替换：str_replace()
正则替换：preg_replace()

str_replace有三种用法：
mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
ps1:echo str_replace('i','#','xiaojing');
ps2: echo str_replace(array('i','n','a'),'#','xiaojing');
ps3: echo str_replace(array('i','n','a'),array('*','@','#'),'xiaojing');


PCRE 函数
    preg_filter — 执行一个正则表达式搜索和替换
    preg_grep — 返回匹配模式的数组条目
    preg_last_error — 返回最后一个PCRE正则执行产生的错误代码
    preg_match_all — 执行一个全局正则表达式匹配
    preg_match — 执行匹配正则表达式
    preg_quote — 转义正则表达式字符
    preg_replace_callback_array — Perform a regular expression search and replace using callbacks
    preg_replace_callback — 执行一个正则表达式搜索并且使用一个回调进行替换
    preg_replace — 执行一个正则表达式的搜索和替换
    preg_split — 通过一个正则表达式分隔字符串

正则表达式<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<


php错误及异常>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
php和序错误的发生一般归为三类：语法错误，运行时错误，逻辑错误


error_reporting — 设置应该报告何种 PHP 错误
ps1: error_reporting(E_ALL & `E_NOTICE);//设置错误报告为除了notice的错误外，其他的都显示。


set_error_handler — 设置用户自定义的错误处理函数
mixed set_error_handler ( callable $error_handler [, int $error_types = E_ALL | E_STRICT ] )


错误日志记录位置可以有三个:可参考[2014]兄弟连高洛峰.PHP教程10.1.3.设置错误日志(ED2000.COM).mp4
1.系统日志
2.apache日志
3.自定义日志文件（推荐）



error_log — 发送错误信息到某个地方
bool error_log ( string $message [, int $message_type = 0 [, string $destination [, string $extra_headers ]]] )
把错误信息发送到 web 服务器的错误日志，或者到一个文件里。


ini_set — 为一个配置选项设置值
string ini_set ( string $varname , string $newvalue )
设置指定配置选项的值。这个选项会在脚本运行时保持新的值，并在脚本结束时恢复。


php中修改php配置文件(php.ini)的函数主要有四个函数：ini_get、ini_set、ini_get_all、ini_restore。其中ini_set和ini_get比较常用

异常
try{
}catch(Exception $e){
}
原理：
1.试着执行try中的代码，如果没有问题，继续执catch之后的代码。
2.Exception是系统的类。
3.如果有异常对象抛出，就将异常对象给catch()中的类
4.try中发生异常位置后的代码不再执行，而是直接到catch中，catch执行后，再继续执行catch之后的代码。

异常重要的是怎么处理，而不仅仅是调试错误。
经典案例：
<?php
    echo '111111111起床<br>';
    try{
        echo '22222222开车上班<br>';
        throw new Exception('kkkkkkkkkkkkk车爆胎了<br>');
        echo '3333333333333路况很好<br>';
    }catch(Exception $e){
        echo $e->getMessage();
        echo '4444444444换备胎，加急赶路上班<br>';
    }
?>


自定义异常类
新建一个类继承于Exception类（如果不懂可参考：[2014]兄弟连高洛峰.PHP教程10.2.3.自定义异常类(ED2000.COM).mp4

php错误及异常<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<


文件系统（兄弟连)>>>>>>>>>>>>>>>>>>>>>>>>>>>

filetype — 取得文件类型
string filetype ( string $filename )
返回文件的类型。

is_dir — 判断给定文件名是否是一个目录
is_executable — 判断给定文件名是否可执行
is_file — 判断给定文件名是否为一个正常的文件
is_link — 判断给定文件名是否为一个符号连接
is_readable — 判断给定文件名是否可读
is_uploaded_file — 判断文件是否是通过 HTTP POST 上传的
is_writable — 判断给定的文件名是否可写
is_writeable — is_writable 的别名

glob — 寻找与模式匹配的文件路径
array glob ( string $pattern [, int $flags = 0 ] )
glob() 函数依照 libc glob() 函数使用的规则寻找所有与 pattern 匹配的文件路径，类似于一般 shells 所用的规则一样。不进行缩写扩展或参数替代。

文件系统<<<<<<<<<<<<<<<<


目录操作>>>>>>>>>>>>>>>>>>
    chdir — 改变目录
    chroot — 改变根目录
    closedir — 关闭目录句柄
    dir — 返回一个 Directory 类实例
    getcwd — 取得当前工作目录
    opendir — 打开目录句柄
    readdir — 从目录句柄中读取条目
    rewinddir — 倒回目录句柄

disk_total_space — 返回一个目录的磁盘总大小
float disk_total_space ( string $directory )

disk_free_space — 返回目录中的可用空间
float disk_free_space ( string $directory )
scandir — 列出指定路径中的文件和目录


经典案例：
<?php
    $dirNum=0;//目录数
    $fileNum=0;//文件数
    function getDirFileNum($dirName){
        global $dirNum;
        global $fileNum;
        $dir=opendir($dirName);
        while($fileName=readdir($dir)){
            if($fileName!='.' && $fileName!='..'){
                $fileName=$dirName.'/'.$fileName;
                if(is_dir($fileName)){
                    $dirNum++;
                    getDirFileNum($fileName);//递归，查看所有子目录
                }else{
                    $fileNum++;
                }
            }
        }
        closedir($dir);
    }
    getDirFileNum('test');
    echo 'all folder:'.$dirNum.'<br>';
    echo 'all files'.$fileNum.'<br>';
?>

mkdir — 新建目录

rmdir — 删除目录
bool rmdir ( string $dirname [, resource $context ] )
尝试删除 dirname 所指定的目录。 该目录必须是空的，而且要有相应的权限。 失败时会产生一个 E_WARNING 级别的错误

unlink — 删除文件
bool unlink ( string $filename [, resource $context ] )

rename — 重命名一个文件或目录
注：rename也可以移动文件或目录。
bool rename ( string $oldname , string $newname [, resource $context ] )

copy — 拷贝文件
bool copy ( string $source , string $dest [, resource $context ] )
将文件从 source 拷贝到 dest。 

目录操作<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<


文件操作>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

文件的基本操作：
touch --创建空文件
copy --复制文件
rename --移动或者重命名一个文件
unlink --删除一个文件
fopen --打开文件
ftruncate — 将文件截断到给定的长

对文件内容的操作：
file_get_contents — 将整个文件读入一个字符串
file_put_contents — 将一个字符串写入文件
file — 把整个文件读入一个数组中
readfile — 输出文件


fopen — 打开文件或者 URL
resource fopen ( string $filename , string $mode [, bool $use_include_path = false [, resource $context ]] )

 fopen() 中 mode 的可能值列表 mode   说明
'r'   只读方式打开，将文件指针指向文件头。
'r+'  读写方式打开，将文件指针指向文件头。
'w'   写入方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。
'w+'  读写方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。
'a'   写入方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。
'a+'  读写方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。

注：r+如果文件中为空，则写入文件，否则不写入。


feof — 测试文件指针是否到了文件结束的位置
bool feof ( resource $handle )

fgetc — 从文件指针中读取字符
string fgetc ( resource $handle )

fread — 读取文件（可安全用于二进制文件）
string fread ( resource $handle , int $length )

ftell — 返回文件指针读/写的位置
int ftell ( resource $handle )

fseek — 在文件指针中定位,移动指针
int fseek ( resource $handle , int $offset [, int $whence = SEEK_SET ] )

rewind — 倒回文件指针的位置
bool rewind ( resource $handle )
将 handle 的文件位置指针设为文件流的开头。 

flock — 轻便的咨询文件锁定(重要),注，妨止多用户同时编辑文件.(不懂可参考：[2014]兄弟连高洛峰.PHP教程12.3.5.文件的锁定机制(ED2000.COM).mp4)
bool flock ( resource $handle , int $operation [, int &$wouldblock ] )
参数
handle
    文件系统指针，是典型地由 fopen() 创建的 resource(资源)。
operation
    operation 可以是以下值之一：

        LOCK_SH取得共享锁定（读取的程序）。
        LOCK_EX 取得独占锁定（写入的程序。
        LOCK_UN 释放锁定（无论共享或独占）。

    如果不希望 flock() 在锁定时堵塞，则是 LOCK_NB（Windows 上还不支持）。
wouldblock

    如果锁定会堵塞的话（EWOULDBLOCK 错误码情况下），可选的第三个参数会被设置为 TRUE。（Windows 上不支持）
ps:
<?php
    $fopen=fopen("./test.txt",'r');
    flock($fopen,LOCK_SH | LOCK_NB);//锁定文件，不让别的用户操作
    while(!feof($fopen)){
        echo fgets($fopen);
    }
    flock($fopen,LOCK_UN | LOCK_NB);//解锁
    fclose($fopen);
?>
文件操作<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

文件上传>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
上传文件的表单，有2点要注意:
1.methd要设为post,因为get上传不了文件
2.enctype="multipart/form-data"

上传文件的服务器的配置：
file_uploads --默认值on
upload_max_filesize --上传文件最大值，默认值2M
post_max_size --post过来的所有信息最大值,包括文本和上传文件，默认值8M
upload_tmp_dir --默认值null


$_FILES — HTTP 文件上传变量,获取上传文件的信息。

错误信息说明
从 PHP 4.2.0 开始，PHP 将随文件信息数组一起返回一个对应的错误代码。该代码可以在文件上传时生成的文件数组中的 error 字段中被找到，也就是 $_FILES['userfile']['error']。

UPLOAD_ERR_OK:其值为 0，没有错误发生，文件上传成功。
UPLOAD_ERR_INI_SIZE:其值为 1，上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。
UPLOAD_ERR_FORM_SIZE:其值为 2，上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。
UPLOAD_ERR_PARTIAL:其值为 3，文件只有部分被上传。
UPLOAD_ERR_NO_FILE:其值为 4，没有文件被上传。
UPLOAD_ERR_NO_TMP_DIR:其值为 6，找不到临时文件夹。PHP 4.3.10 和 PHP 5.0.3 引进。
UPLOAD_ERR_CANT_WRITE:其值为 7，文件写入失败。PHP 5.1.0 引进。

ps1:
<?php
    header("Content-type:text/html; charset=utf-8");
    if(isset($_POST['goodUp'])){//判断用户是否有点击提交
        //第一步，判断是否有错误
        if($_FILES['pic']['error'] > 0){
            switch($_FILES['pic']['error']){
                case 1 : echo '其值为 1，上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。<br>';
                         break;
                case 2 : echo '其值为 2，上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。<br>';
                         break;
                case 3 : echo '其值为 3，文件只有部分被上传。<br>';
                         break;
                case 4 : echo '其值为 4，没有文件被上传。<br>';
                         break;
                case 6 : echo '其值为 6，找不到临时文件夹。PHP 4.3.10 和 PHP 5.0.3 引进。<br>';
                         break;
                case 7 : echo '其值为 7，文件写入失败。PHP 5.1.0 引进。<br>';
                         break;
                default: echo '末知错误<br>';
                         break;
            }
            exit;
        }
        //第二步，判断类型
        $arr=explode('.',basename($_FILES['pic']['name']));
        $suffixName=array_pop($arr);//获取文件后缀
        $allowType=array('gif','png','jpg','jpeg');
        if(!in_array($suffixName,$allowType)){
            echo '上传的类型不正确<br>';
            exit;
        }
        //第三步，判断大小
        $maxsize=102400;//单位：type
        if($_FILES['pic']['size'] > $maxsize){
            echo '上传的文件超出了'.$maxsize.'的值';
            exit;
        }
        //第四步，上传的文件名一定要设置
        $tmpfile=$_FILES['pic']['tmp_name'];
        $trueName='./uploads/'.date("YmdHis").rand(100,999).'.'.$suffixName;
        //第五步，保存文件
        if(!file_exists('./uploads')){
            mkdir('./uploads/');
        }
        if(move_uploaded_file($tmpfile,$trueName)){
            
            echo '上传成功！<br>';
        }else{
            echo '上传失败！<br>';
        }
    }
?>
<form action='' method='post' enctype='multipart/form-data' >
    name:<input name="user" values="" type="text" /><br>
    <input type="hidden" name="MAX_FILE_SIZE" values="102400000" />
    file:<input type="file" name="pic" values="" /><br>
    <input type="submit" name="goodUp" values="上传" />
</form>

多文件上传，参考：[2014]兄弟连高洛峰.PHP教程12.4.3.处理多个文件上传(ED2000.COM).mp4
ps:
<?php
    header("Content-type:text/html; charset=utf-8");
    if(isset($_POST['goodUp'])){//判断用户是否有点击提交
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
    }
?>

<form action='' method='post' enctype='multipart/form-data' >
    name:<input name="user" values="" type="text" /><br>
    <input type="hidden" name="MAX_FILE_SIZE" values="102400000" />
    file:<input type="file" name="pic[]" values="" /><br>
    file:<input type="file" name="pic[]" values="" /><br>
    file:<input type="file" name="pic[]" values="" /><br>
    <input type="submit" name="goodUp" values="上传" />
</form>

下载文件，借助头信息，参考[2014]兄弟连高洛峰.PHP教程12.4.5.文件下载(ED2000.COM).mp4

文件上传<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

GD库>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
注意：
ImageMagick — 图像处理(ImageMagick)比GD库更好，用法也类似，但效率更高。推荐使用，但是比较新的。但是老程序比较多用GD库，所以学习用GD库，开发用ImageMagick。

GD库的作用有两点：一是画图，二是改图

GD库图像绘制的步骤
1.创建画布
2.在画布上绘制图像和输入文本
3.输出最终图形
4.释放资源

ps1:
<?php
    //第一步，创建资源(画布)
    $img=imagecreatetruecolor(255,255);
    $white=imagecolorallocate($img,255,255,255);//设定一些颜色
    $red=imagecolorallocate($img,255,62,118);
    $blue=imagecolorallocate($img,23,108,242);
    imagefill($img,0,0,$white); //填充白色
    //第二步，绘制图像
    imageline($img,0,0,200,200,$blue);
    imagestring($img,2,30,30,'goodboy',$red);
    //第三步，输出最终图像,有两种，一个直接输出，一个保存
    //可以保存到服务器上imagepng($img,'./good.png');//保存为png
    header("Content-type:image/png");
    imagePng($img);
    
    //第四步，释放资源
    imagedestroy($img); 
?>

知道GD库有以下函数就好，要用的时候查手册。
imagefill --区域填充
imagesetpixel --画一个单一像素
imageline --画一条线段
imagectangle --画一个矩形
imagefilledrectangle --画一个矩形并填充
imageellipse --画一个椭圆
imagefilledellipse --画一个椭圆并填充
imagearc --画椭圆弧
imagefilledarc --画一椭圆弧并填充
imagestring --水平地画一行字符串
imagestringup --垂直地画一行字符串
imagechar --水平地画一个字符 
imagecharup --垂直地画一个字符
imagettftext --用TrueType字体向图像写入文本



<?php
    //添加水印的经典例子
    function watermark($imagename,$string){
        list($width,$height,$type) = getimagesize($imagename);
        $types = array(1=>'gif',2=>'jpeg',3=>'png');
        $createimage = 'imagecreatefrom'.$types[$type];
        $img = $createimage($imagename);
        $red = imagecolorallocate($img,255,0,0);
        $x = ($width-imagefontwidth(5) * strlen($string))/2;
        $y = ($height-imagefontheight(5))/2;
        imagestring($img,5,$x,$y,$string,$red);
        header("Content-Type:image/".$types[$type]);
        $showImg='image'.$types[$type];
        $showImg($img);
        imagedestroy($img);
    }
    watermark("apple.jpg","kkkkkkkkkkkkkkkk");
?>


imagecopyresampled — 重采样拷贝部分图像并调整大小
看视频：
图像缩放和剪切经典案例：[2014]兄弟连高洛峰.PHP教程13.3.2.图片的缩放和剪切(ED2000.COM).mp4

imagestring文字水印
imagecopy图片水印
看经典视频：[2014]兄弟连高洛峰.PHP教程13.3.3.添加图片水印(ED2000.COM).mp4

imagerotate — 用给定角度旋转图像
看视频：[2014]兄弟连高洛峰.PHP教程13.3.4.图片的旋转和翻转(ED2000.COM).mp4

GD库<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

PDO连接数据库>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
PDO::__construct — 创建一个表示数据库连接的 PDO 实例
PDO::__construct ( string $dsn [, string $username [, string $password [, array $driver_options ]]] )
注：DSN(Data Source Name)数据源名称
    具体数据库的驱动
    主机
    数据库

ps:
<?php
try{
    $pdo=new PDO("mysql:host=localhost; dbname=testxdl","root","");
}catch(PDOException $e){
    echo 'error is :'.$e->getMessage();
}
?>


PDO::getAttribute — 取回一个数据库连接的属性 
<?php
try{
    $pdo=new PDO("mysql:host=localhost; dbname=testxdl","root","");
}catch(PDOException $e){
    echo 'error is :'. $e->getMessage();
}
echo $pdo->getAttribute(PDO::ATTR_SERVER_VERSION);
?>

PDO::setAttribute — 设置属性
bool PDO::setAttribute ( int $attribute , mixed $value )


PDO::errorInfo — Fetch extended error information associated with the last operation on the database handle
public array PDO::errorInfo ( void )
注：默认的模式看不到sql语句的错误，如果sql语句有错，不会有提示,可以设置错误报告模式，也可以打印出来，打印如下：
<?php
try{
    $pdo=new PDO("mysql:host=localhost; dbname=testxdl","root","");
}catch(PDOException $e){
    echo 'error is :'. $e->getMessage();
}
    $result=$pdo->exec("select * from skyuse");
    if(!$result){
        print_r($pdo->errorinfo());
    }
?>



PDO::ATTR_ERRMODE：错误报告。
    PDO::ERRMODE_SILENT： 仅设置错误代码。
    PDO::ERRMODE_WARNING: 引发 E_WARNING 错误
    PDO::ERRMODE_EXCEPTION: 抛出 exceptions 异常。
ps:
<?php
    try{
        $pdo=new PDO("mysql:host=localhost; dbname=testxdl","root","");
    }catch(PDOException $e){
        echo 'error is :'. $e->getMessage();
    }
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    try{
        $result=$pdo->exec("select * from skyuse");
    }catch(PDOException $e){
        echo 'error_xj is: '. $e->getMessage();
    }
?>

PDO中执行SQL语句的方法有两个主要的：
    1.exec() --用来处理非结果集的，insert update create ...
        返回影响的函数,用于判断是否成功！
        PDO::lastInsertId — 返回最后插入行的ID或序列值
    2.query() --用来处理有结果集的语句：select desc show
        返回的是PDOStatement类的对象，再通过这个类的方法获取结果。
        query()也可以处理非结果集的SQL语句，但没有返回影响的函数，没办法判断是否成功，不建议使用。
设直字符值，用exec()和query()都可以。

PDO::exec — 执行一条 SQL 语句，并返回受影响的行数 
int PDO::exec ( string $statement )

PDO::query — Executes an SQL statement, returning a result set as a PDOStatement object 

ps1:
<?php
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=testxdl","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
    try{
        $result = $pdo->exec("insert into user(id,name)values(1,'xiao')");
        //用exec()返回的影响的行数判断是否成功。
        var_dump($result);
        if($result){
            echo '成功！';
        }else{
            echo '失败!';
        }
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
?>


PDO::lastInsertId — 返回最后插入行的ID或序列值
string PDO::lastInsertId ([ string $name = NULL ] )
ps:
<?php
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=testxdl","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
    try{
        $result = $pdo->exec("insert into user(id,name)values(12,'xiao')");
        echo $result.'<br>';
        echo $pdo->lastInsertId();
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
?>


php的预处理语句优点：
1.效率高
2.安全性好。
所以建议使用php的预处理方式去执行SQL语句。不要用exec()和query()


PDO::prepare — Prepares a statement for execution and returns a statement object
public PDOStatement PDO::prepare ( string $statement [, array $driver_options = array() ] )

PDOStatement::execute — 执行一条预处理语句
bool PDOStatement::execute ([ array $input_parameters ] )

ps1:
//注：问号的对应是用索引下标
<?php
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=testxdl","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
    try{
        //只是将这个语句放到服务器上（数据库管理系统）,编写后等待，没有执行
        $result = $pdo->prepare("insert into user(id,name)value(?,?);");
        //绑定参数(?),将问号和一个变量关联起来
        $result->bindParam(1,$id);
        $result->bindParam(2,$name);
        //给变量一个值，就会给准备好的语句中对应问号一个值
        $id=17;
        $name='haining';
        //通知数据库，执行准备好的语句
        $result->execute();
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
?>

ps2:
//注:没有问号，下标用关联数组
<?php
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=testxdl","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
    try{
        //只是将这个语句放到服务器上（数据库管理系统）,编写后等待，没有执行
        $result = $pdo->prepare("insert into user(id,name)value(:id,:name);");
        //绑定参数(:),将问号和一个变量关联起来
        $result->bindParam("id",$id);
        $result->bindParam("name",$name);
        //给变量一个值，就会给准备好的语句中对应问号一个值
        $id=137;
        $name='lanpei';
        //通知数据库，执行准备好的语句
        $result->execute();
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
?>

ps3:
//注：问号是用下标为索引的数组形式
<?php
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=testxdl","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
    try{
        //只是将这个语句放到服务器上（数据库管理系统）,编写后等待，没有执行
        $result = $pdo->prepare("insert into user(id,name)value(?,?);");
        //通知数据库，执行准备好的语句
        $result->execute(array(327,'goodking'));
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
?>

ps4:
//注：没有问号，下标是关联数组
<?php
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=testxdl","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
    try{
        //只是将这个语句放到服务器上（数据库管理系统）,编写后等待，没有执行
        $result = $pdo->prepare("insert into user(id,name)value(:id,:name);");
        //通知数据库，执行准备好的语句
        $result->execute(array('id'=>27,'name'=>'good'));
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
?>


PDOStatement::fetch — 从结果集中获取下一行
mixed PDOStatement::fetch ([ int $fetch_style [, int $cursor_orientation = PDO::FETCH_ORI_NEXT [, int $cursor_offset = 0 ]]] )
ps:
<?php
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=testxdl","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
    try{
        //只是将这个语句放到服务器上（数据库管理系统）,编写后等待，没有执行
        $result = $pdo->prepare("select * from user");
        //通知数据库，执行准备好的语句
        $result->execute();
        while($row=$result->fetch(PDO::FETCH_ASSOC)){
            print_r($row);
            echo '<br>';
        }
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
?>



PDOStatement::fetchAll — 返回一个包含结果集中所有行的数组
array PDOStatement::fetchAll ([ int $fetch_style [, mixed $fetch_argument [, array $ctor_args = array() ]]] )
ps:
<?php
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=testxdl","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
    try{
        //只是将这个语句放到服务器上（数据库管理系统）,编写后等待，没有执行
        $result = $pdo->prepare("select * from user");
        //通知数据库，执行准备好的语句
        $result->execute();
        print_r($result->fetchAll(PDO::FETCH_NUM));
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
?>

PDOStatement::setFetchMode — 为语句设置默认的获取模式。 
可以设置fetch()和fetchAll()的获取模式，如获取索引数组，还是关联数组。


PDOStatement::bindColumn — 绑定一列到一个 PHP 变量
bool PDOStatement::bindColumn ( mixed $column , mixed &$param [, int $type [, int $maxlen [, mixed $driverdata ]]] )
ps:
<?php
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=testxdl","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
    try{
        //只是将这个语句放到服务器上（数据库管理系统）,编写后等待，没有执行
        $result = $pdo->prepare("select id,name from user");
        //通知数据库，执行准备好的语句
        $result->execute();
        //绑定栏目
        $result->bindColumn("id",$id);
        $result->bindColumn("name",$name);
        while($result->fetch()){
            echo $id.'>>>>>>>>>>'.$name.'<br>';
        }
    }catch(PDOException $e){
        echo "ERROR : ". $e->getMessage();
    }
?>

PDOStatement::rowCount — 返回受上一个 SQL 语句影响的行数
int PDOStatement::rowCount ( void )

将大数据保存到数据库，如图片，视频。了解下，不常用。
[2014]兄弟连高洛峰.PHP教程15.2.6.用PDO存取大数据对象(ED2000.COM).mp4

PDO连接数据库<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

memcache分布式的高速缓存系统>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

memcache在windows下和linux下的安装，需要安装软件。
在windows下和linux安装php的扩展。
ps:
<?php
    //创建memcache对象
    $men = new Memcache;
    //连接memcache服务器
    $men->connect("localhost",11211):    
    //操作
    $men->add("xiao","goodbody",MEMCACHE_COMPRESSED,30); 
    //关闭连接
    $men->close();
?>

1.memcached-win对应得安装包
2.解压，可以放到任意目录，以管理员身份打开cmd
3.在安装的目录下面，执行如下命令
   memcached.exe -d install 安装
   Memcached.exe –d start    开启服务


   Memcahced.exe –d stop    停止服务
   Memcached.exe –d restart    重启
   memcached.exe -d uninstall 卸载
4.在启动之后连接
  D:wampbin> telnet 127.0.0.1 11211    –连接memcache端口11211使用quit退出。

5. 
  5个常用的命令
– stats: 当前所有memcached服务器运行的状态信息
– add: 添加一个数据到服务器
– set: 替换一个已经存在的数据，如果数据不存在，则和add命令相同。
– get: 从服务器端提取指定的数据。
– delete: 删除指定的单个数据，如果要清除所有数据，可以使用flush_all指令。

6.
　• Memcache的协议的错误部分主要是三个错误提示之提示指令：
– ERROR — 普通错误信息，比如指令错误之类的
– CLIENT_ERROR <错误信息> — 客户端错误
– SERVER_ERROR <错误信息> –服务器端错误  

7.数据管理命令
 格式：<命令> <键> <标记> <有效期> <数据长度>
 其中：
– 命令：add(添加)、set(修改)、delete(删除)、get(获取)
– <键> -key，是发送过来指令的key内容
– <标记> – flags，是调用set指令保存数据时候的flags标记
– 有效期：是数据在服务器上的有效期限，如果是0，则数据永远有效，单位是秒
– 数据的长度，block data 块数据的长度，一般在这个个长度结束以后下一行跟着block data数据内容，

– 发送完数据以后，客户端一般等待服务器端的返回，服务器端的返回：
– STORED 数据保存成功
– NOT_STORED 数据保存失败，是因为服务器端这个数据key已经存在

8.php的配置
  ext/文件夹下面，放入对应得php_memcache.dll文件
  php.ini配置文件，添加如下内容：extension=php_memcache.dll
  重新启动服务apache

9.php中Memcache类的方法
Memcache::add ———— 增加一个条目到缓存服务器
Memcache::addServer ————向连接池中添加一个memcache服务器
Memcache::close ————关闭memcache连接
Memcache::connect ————打开一个memcached服务端连接
Memcache::decrement ————减小元素的值
Memcache::delete ————从服务端删除一个元素
Memcache::flush ————清洗(删除)已经存储的所有的元素
Memcache::get ————从服务端检回一个元素
Memcache::getExtendedStats ————缓存服务器池中所有服务器统计信息
Memcache::getServerStatus ———— 获取一个服务器的在线/离线状态
Memcache::getStats ———— 获取服务器统计信息
Memcache::getVersion ———— 返回服务器版本信息
Memcache::increment ———— 增加一个元素的值
Memcache::pconnect ———— 打开一个到服务器的持久化连接
Memcache::replace ———— 替换已经存在的元素的值
Memcache::set ————Store data at the server
Memcache::setCompressThreshold —————开启大值自动压缩
Memcache::setServerParams ————运行时修改服务器参数和状态
Memcache 函数memcache_debug ———— 转换调试输出的开/关

10. memcached基本参数设置：

    -p 监听的端口
    -l 连接的IP地址, 默认是本机
    -d start 启动memcached服务
    -d restart 重起memcached服务
    -d stop|shutdown 关闭正在运行的memcached服务
    -d install 安装memcached服务
    -d uninstall 卸载memcached服务
    -u 以的身份运行 (仅在以root运行的时候有效)
    -m 最大内存使用，单位MB。默认64MB
    -M 内存耗尽时返回错误，而不是删除项
    -c 最大同时连接数，默认是1024
    -f 块大小增长因子，默认是1.25
    -n 最小分配空间，key+value+flags默认是48
    -h 显示帮助

　　设置参数时需要先停止memcached，然后用命令行设置，比如：c:\memcached> memcached.exe -m 1 -d start
memcache分布式的高速缓存系统<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

会话控制，session cookie>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
变量的四种级别：
1.当前页面的变量，只能在本页面使用，页面完成后，就释放。
2.两个页面之间传递变量，通过get url传递.
3.会放在级别 session.
4.全局 global,写到数据库或者文件中，任何人都可以访问。



setcookie — 发送 Cookie
说明
bool setcookie ( string $name [, string $value = "" [, int $expire = 0 [, string $path = "" [, string $domain = "" [, bool $secure = false [, bool $httponly = false ]]]]]] )
setcookie() 定义了 Cookie，会和剩下的 HTTP 头一起发送给客户端。 和其他 HTTP 头一样，必须在脚本产生任意输出之前发送 Cookie（由于协议的限制）。 请在产生任何输出之前（包括 <html> 和 <head> 或者空格）调用本函数。//  去掉配色用</head>

一旦设置 Cookie 后，下次打开页面时可以使用 $_COOKIE 读取。 Cookie 值同样也存在于 $_REQUEST。

ps1:字符串格式
index.php文件：setCookie('xj','xiaojing',time()+60);
testCookie.php文件：print_r($_COOKIE);

ps2:数组格式
index.php文件：
    setCookie("data['id']",137,time()+60*60);
    setCookie("data['name']",'king',time()+60*60);
testCookie.php文件：print_r($_COOKIE);


要删除一个 Cookie，应该设置过期时间为过去，以触发浏览器的删除机制。
ps:
setCookie('xj','',time()-60);


session_start — 启动新会话或者重用现有会话
bool session_start ([ array $options = [] ] )
session_start() 会创建新会话或者重用现有会话。 如果通过 GET 或者 POST 方式，或者使用 cookie 提交了会话 ID， 则会重用现有会话。 

注：每个页面都要写session_start();先判断请求的头文件中是否含有sessionID，变量名为PHPSESSID。如果有就在服务器中查找对应的sessionID,如果没有就新创建一个。


清除session
<?php
    //first step开启session会话
    session_start();
    $username=$_SESSION['username'];
    
    //删除单个session
    unset($_SESSION['name']);
    //The second step清空$_SESSION中的数据
    $_SESSION = array();
    //third step删除客户cookie中的sessionid
    if(isset($_COOKIE[session_name()])){
        setCookie(session_name(),'',time()-3600,'/');//一定要加根目录，否则删除不干静。
    }
    //the fourth step销毁session
    session_destroy();
    echo "goodbly $username";
?>

session_id — 获取/设置当前会话 ID
session_name — 读取/设置会话名称


判断客户端是否禁用cookie,如果禁用，则用url传输sessionid.
用预定义SID判断cookie有开启，则SID的值为空。
SID包含着会话名以及会话 ID 的常量，格式为 "name=ID"，或者如果会话 ID 已经在适当的会话 cookie 中设定时则为空字符串。
ps:
<?php
    $sid=!empty($_GET[session_name()])?$_GET[session_name()] : "";
    if(!empty($sid)){
        //可以设置用已有的sessionid开启会话。
        session_id($sid);
    }
    session_start();
    $_SESSION['xj']='xiaojing';
    $_SESSION['hn']='haining';
    $_SESSION['lp']='lanpei';
    $_SESSION[session_name()]=session_id();
    echo $sid;
?>
<a href="index.php?<?php echo SID ?>">one</a><!--用预定义常量，如果有cookie，SID就为空-->

会话控制，session cookie<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
学到这里
learning on php笔记2_test_can_delete.php top