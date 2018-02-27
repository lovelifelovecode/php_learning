<?php  error_reporting(E_ALL);// 显示所有错误 ?>
str_replace()
str_ireplace()
addslashes()
stripslashes()
strcmp()
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
explode()
implode()
join()
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
shuffle()
similar_text()
preg_replace()
round()
opendir()
readdir()
closedir()
get_class()
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
3.常量名字母一般都大写
4.常量可以被子类继承
5.一个常量是属于一个类的，而不是某个对象的
作用：当某些值是固定不变的，就用const
const 定义的常量和define()定义的常量的区别？
希望一个成员变量不被修改 例如圆周率 3.1415926
定义：const 常量名=值; 没有$符
访问：类名 ::常量名 或 接口名::常量名


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



构造函数 ¶
void __construct ([ mixed $args [, $... ]] )
PHP 5 允行开发者在一个类中定义一个方法作为构造函数。具有构造函数的类会在每次创建新对象时先调用此方法，所以非常适合在使用对象之前做一些初始化工作


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



学到这里
learning on php笔记2_test_can_delete.php top