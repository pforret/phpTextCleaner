
## `Don´t be afraid; I haven´t changed!`

```php
// ORIGINAL INPUT TEXT
   Don´t be afraid; I haven´t changed!
// urlencode()
   Don%C2%B4t+be+afraid%3B+I+haven%C2%B4t+changed%21
// rawurlencode()
   Don%C2%B4t%20be%20afraid%3B%20I%20haven%C2%B4t%20changed%21
// json_encode()
   "Don\u00b4t be afraid; I haven\u00b4t changed!"
// json_encode() HEX_AMP
   "Don\u00b4t be afraid; I haven\u00b4t changed!"
// json_encode() UNESCAPED_UNICODE/UNESCAPED_SLASHES
   "Don´t be afraid; I haven´t changed!"
// htmlspecialchars()
   Don´t be afraid; I haven´t changed!
// htmlentities()
   Don&acute;t be afraid; I haven&acute;t changed!
// htmlentities() ENT_HTML401
   Don&acute;t be afraid; I haven&acute;t changed!
// mb_convert_encoding(,HTML-ENTITIES,UTF-8)
   Don&acute;t be afraid; I haven&acute;t changed!
// transliterator_transliterate(Any-Latin; Latin-ASCII,)
   Don´t be afraid; I haven´t changed!
// mb_convert_encoding(,ASCII)
   Don?t be afraid; I haven?t changed!
// iconv ASCII//TRANSLIT//IGNORE
   Don't be afraid; I haven't changed!
// ASCII() voku/portable-ascii
   Don't be afraid; I haven't changed!
```

## `$time = [ '12.3 µsec' && '^A' ];`

```php
// ORIGINAL INPUT TEXT
   $time = [ '12.3 µsec' && '^A' ];
// urlencode()
   %24time+%3D+%5B+%2712.3+%C2%B5sec%27+%26%26+%27%5EA%27+%5D%3B
// rawurlencode()
   %24time%20%3D%20%5B%20%2712.3%20%C2%B5sec%27%20%26%26%20%27%5EA%27%20%5D%3B
// json_encode()
   "$time = [ '12.3 \u00b5sec' && '^A' ];"
// json_encode() HEX_AMP
   "$time = [ '12.3 \u00b5sec' \u0026\u0026 '^A' ];"
// json_encode() UNESCAPED_UNICODE/UNESCAPED_SLASHES
   "$time = [ '12.3 µsec' && '^A' ];"
// htmlspecialchars()
   $time = [ &#039;12.3 µsec&#039; &amp;&amp; &#039;^A&#039; ];
// htmlentities()
   $time = [ &#039;12.3 &micro;sec&#039; &amp;&amp; &#039;^A&#039; ];
// htmlentities() ENT_HTML401
   $time = [ '12.3 &micro;sec' &amp;&amp; '^A' ];
// mb_convert_encoding(,HTML-ENTITIES,UTF-8)
   $time = [ '12.3 &micro;sec' && '^A' ];
// transliterator_transliterate(Any-Latin; Latin-ASCII,)
   $time = [ '12.3 µsec' && '^A' ];
// mb_convert_encoding(,ASCII)
   $time = [ '12.3 ?sec' && '^A' ];
// iconv ASCII//TRANSLIT//IGNORE
   $time = [ '12.3 usec' && '^A' ];
// ASCII() voku/portable-ascii
   $time = [ '12.3 usec' && '^A' ];
```

## `Intérnàtíòñålîšâtîön`

```php
// ORIGINAL INPUT TEXT
   Intérnàtíòñålîšâtîön
// urlencode()
   Int%C3%A9rn%C3%A0t%C3%AD%C3%B2%C3%B1%C3%A5l%C3%AE%C5%A1%C3%A2t%C3%AE%C3%B6n
// rawurlencode()
   Int%C3%A9rn%C3%A0t%C3%AD%C3%B2%C3%B1%C3%A5l%C3%AE%C5%A1%C3%A2t%C3%AE%C3%B6n
// json_encode()
   "Int\u00e9rn\u00e0t\u00ed\u00f2\u00f1\u00e5l\u00ee\u0161\u00e2t\u00ee\u00f6n"
// json_encode() HEX_AMP
   "Int\u00e9rn\u00e0t\u00ed\u00f2\u00f1\u00e5l\u00ee\u0161\u00e2t\u00ee\u00f6n"
// json_encode() UNESCAPED_UNICODE/UNESCAPED_SLASHES
   "Intérnàtíòñålîšâtîön"
// htmlspecialchars()
   Intérnàtíòñålîšâtîön
// htmlentities()
   Int&eacute;rn&agrave;t&iacute;&ograve;&ntilde;&aring;l&icirc;&scaron;&acirc;t&icirc;&ouml;n
// htmlentities() ENT_HTML401
   Int&eacute;rn&agrave;t&iacute;&ograve;&ntilde;&aring;l&icirc;&scaron;&acirc;t&icirc;&ouml;n
// mb_convert_encoding(,HTML-ENTITIES,UTF-8)
   Int&eacute;rn&agrave;t&iacute;&ograve;&ntilde;&aring;l&icirc;&scaron;&acirc;t&icirc;&ouml;n
// transliterator_transliterate(Any-Latin; Latin-ASCII,)
   Internationalisation
// mb_convert_encoding(,ASCII)
   Int?rn?t????l???t??n
// iconv ASCII//TRANSLIT//IGNORE
   Internationalisation
// ASCII() voku/portable-ascii
   Internationalisation
```

## `άλφα,βήτα,δέλτα`

```php
// ORIGINAL INPUT TEXT
   άλφα,βήτα,δέλτα
// urlencode()
   %CE%AC%CE%BB%CF%86%CE%B1%2C%CE%B2%CE%AE%CF%84%CE%B1%2C%CE%B4%CE%AD%CE%BB%CF%84%CE%B1
// rawurlencode()
   %CE%AC%CE%BB%CF%86%CE%B1%2C%CE%B2%CE%AE%CF%84%CE%B1%2C%CE%B4%CE%AD%CE%BB%CF%84%CE%B1
// json_encode()
   "\u03ac\u03bb\u03c6\u03b1,\u03b2\u03ae\u03c4\u03b1,\u03b4\u03ad\u03bb\u03c4\u03b1"
// json_encode() HEX_AMP
   "\u03ac\u03bb\u03c6\u03b1,\u03b2\u03ae\u03c4\u03b1,\u03b4\u03ad\u03bb\u03c4\u03b1"
// json_encode() UNESCAPED_UNICODE/UNESCAPED_SLASHES
   "άλφα,βήτα,δέλτα"
// htmlspecialchars()
   άλφα,βήτα,δέλτα
// htmlentities()
   ά&lambda;&phi;&alpha;,&beta;ή&tau;&alpha;,&delta;έ&lambda;&tau;&alpha;
// htmlentities() ENT_HTML401
   ά&lambda;&phi;&alpha;,&beta;ή&tau;&alpha;,&delta;έ&lambda;&tau;&alpha;
// mb_convert_encoding(,HTML-ENTITIES,UTF-8)
   &#940;&lambda;&phi;&alpha;,&beta;&#942;&tau;&alpha;,&delta;&#941;&lambda;&tau;&alpha;
// transliterator_transliterate(Any-Latin; Latin-ASCII,)
   alpha,beta,delta
// mb_convert_encoding(,ASCII)
   ????,????,?????
// iconv ASCII//TRANSLIT//IGNORE
   ????,????,?????
// ASCII() voku/portable-ascii
   alpha,beta,delta
```

## `?key1=value1&key2=value2`

```php
// ORIGINAL INPUT TEXT
   ?key1=value1&key2=value2
// urlencode()
   %3Fkey1%3Dvalue1%26key2%3Dvalue2
// rawurlencode()
   %3Fkey1%3Dvalue1%26key2%3Dvalue2
// json_encode()
   "?key1=value1&key2=value2"
// json_encode() HEX_AMP
   "?key1=value1\u0026key2=value2"
// json_encode() UNESCAPED_UNICODE/UNESCAPED_SLASHES
   "?key1=value1&key2=value2"
// htmlspecialchars()
   ?key1=value1&amp;key2=value2
// htmlentities()
   ?key1=value1&amp;key2=value2
// htmlentities() ENT_HTML401
   ?key1=value1&amp;key2=value2
// mb_convert_encoding(,HTML-ENTITIES,UTF-8)
   ?key1=value1&key2=value2
// transliterator_transliterate(Any-Latin; Latin-ASCII,)
   ?key1=value1&key2=value2
// mb_convert_encoding(,ASCII)
   ?key1=value1&key2=value2
// iconv ASCII//TRANSLIT//IGNORE
   ?key1=value1&key2=value2
// ASCII() voku/portable-ascii
   ?key1=value1&key2=value2
```

## `<a href='/example'>example</a>`

```php
// ORIGINAL INPUT TEXT
   <a href='/example'>example</a>
// urlencode()
   %3Ca+href%3D%27%2Fexample%27%3Eexample%3C%2Fa%3E
// rawurlencode()
   %3Ca%20href%3D%27%2Fexample%27%3Eexample%3C%2Fa%3E
// json_encode()
   "<a href='\/example'>example<\/a>"
// json_encode() HEX_AMP
   "<a href='\/example'>example<\/a>"
// json_encode() UNESCAPED_UNICODE/UNESCAPED_SLASHES
   "<a href='/example'>example</a>"
// htmlspecialchars()
   &lt;a href=&#039;/example&#039;&gt;example&lt;/a&gt;
// htmlentities()
   &lt;a href=&#039;/example&#039;&gt;example&lt;/a&gt;
// htmlentities() ENT_HTML401
   &lt;a href='/example'&gt;example&lt;/a&gt;
// mb_convert_encoding(,HTML-ENTITIES,UTF-8)
   <a href='/example'>example</a>
// transliterator_transliterate(Any-Latin; Latin-ASCII,)
   <a href='/example'>example</a>
// mb_convert_encoding(,ASCII)
   <a href='/example'>example</a>
// iconv ASCII//TRANSLIT//IGNORE
   <a href='/example'>example</a>
// ASCII() voku/portable-ascii
   <a href='/example'>example</a>
```
