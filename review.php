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
list()
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





学到这里
learning on php笔记2_test_can_delete.php top