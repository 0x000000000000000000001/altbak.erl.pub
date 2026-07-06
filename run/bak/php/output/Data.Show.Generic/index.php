<?php

namespace Data\Show\Generic;

require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Show.Generic/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {
      case 'Data_Show_Generic_append': $v = ($GLOBALS['Data_Semigroup_concatArray'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatArray')); break;
      case 'Data_Show_Generic_append1': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Show_Generic_genericShowArgsNoArguments': $v = (object)["genericShowArgs" => function($v) {
  $__num = func_num_args();
  $__res = [];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Show_Generic_genericShowNoConstructors': $v = (object)["genericShow'" => function($a) {
  $__num = func_num_args();
  $__global_Data_Show_Generic_genericShowNoConstructors = ($GLOBALS['Data_Show_Generic_genericShowNoConstructors'] ?? \Data\Show\Generic\phpurs_eval_thunk('Data_Show_Generic_genericShowNoConstructors'));
  $__res = (($__global_Data_Show_Generic_genericShowNoConstructors)->genericShow__prime__)($a);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




// Data_Show_Generic_GenericShowArgs$Dict
function Data_Show_Generic_GenericShowArgs__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_Generic_GenericShowArgs__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Show_Generic_GenericShowArgs__dollar__Dict'] = __NAMESPACE__ . '\\Data_Show_Generic_GenericShowArgs__dollar__Dict';

// Data_Show_Generic_GenericShow$Dict
function Data_Show_Generic_GenericShow__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_Generic_GenericShow__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Show_Generic_GenericShow__dollar__Dict'] = __NAMESPACE__ . '\\Data_Show_Generic_GenericShow__dollar__Dict';


// Data_Show_Generic_genericShowArgsArgument
function Data_Show_Generic_genericShowArgsArgument($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_Generic_genericShowArgsArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $show = ($dictShow)->show;
  $__res = (object)["genericShowArgs" => function($v) use ($show) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$a = $__case_0;
$__res = [($show)($a)];
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Show_Generic_genericShowArgsArgument'] = __NAMESPACE__ . '\\Data_Show_Generic_genericShowArgsArgument';

// Data_Show_Generic_genericShowArgs
function Data_Show_Generic_genericShowArgs($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_Generic_genericShowArgs';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericShowArgs;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Show_Generic_genericShowArgs'] = __NAMESPACE__ . '\\Data_Show_Generic_genericShowArgs';

// Data_Show_Generic_genericShowArgsProduct
function Data_Show_Generic_genericShowArgsProduct($dictGenericShowArgs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_Generic_genericShowArgsProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Semigroup_concatArray = ($GLOBALS['Data_Semigroup_concatArray'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatArray'));
  $genericShowArgs1 = ($dictGenericShowArgs)->genericShowArgs;
  $__res = function($dictGenericShowArgs1) use ($__global_Data_Semigroup_concatArray, $genericShowArgs1) {
  $__num = func_num_args();
  $genericShowArgs2 = ($dictGenericShowArgs1)->genericShowArgs;
  $__res = (object)["genericShowArgs" => function($v) use ($__global_Data_Semigroup_concatArray, $genericShowArgs1, $genericShowArgs2) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Product":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
$__res = ($__global_Data_Semigroup_concatArray)(($genericShowArgs1)($a), ($genericShowArgs2)($b));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Show_Generic_genericShowArgsProduct'] = __NAMESPACE__ . '\\Data_Show_Generic_genericShowArgsProduct';

// Data_Show_Generic_genericShowConstructor
function Data_Show_Generic_genericShowConstructor($dictGenericShowArgs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_Generic_genericShowConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Show_Generic_intercalate = ($GLOBALS['Data_Show_Generic_intercalate'] ?? \Data\Show\Generic\phpurs_eval_thunk('Data_Show_Generic_intercalate'));
  $__global_Data_Semigroup_concatArray = ($GLOBALS['Data_Semigroup_concatArray'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatArray'));
  $genericShowArgs1 = ($dictGenericShowArgs)->genericShowArgs;
  $__res = function($dictIsSymbol) use ($genericShowArgs1, $__global_Data_Show_Generic_intercalate, $__global_Data_Semigroup_concatArray) {
  $__num = func_num_args();
  $reflectSymbol = ($dictIsSymbol)->reflectSymbol;
  $__res = (object)["genericShow'" => function($v) use ($reflectSymbol, $genericShowArgs1, $__global_Data_Show_Generic_intercalate, $__global_Data_Semigroup_concatArray) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$a = $__case_0;
$ctor = ($reflectSymbol)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
$v1 = ($genericShowArgs1)($a);
$__case_0 = $v1;
if (($__case_0 === /* ArrayLiteral */)) {
$__res = $ctor;
goto __end;;
} else {
if (true) {
$args = $__case_0;
$__res = ("(" . (($__global_Data_Show_Generic_intercalate)(" ", ($__global_Data_Semigroup_concatArray)([$ctor], $args)) . ")"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Show_Generic_genericShowConstructor'] = __NAMESPACE__ . '\\Data_Show_Generic_genericShowConstructor';

// Data_Show_Generic_genericShow'
function Data_Show_Generic_genericShow__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_Generic_genericShow__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericShow__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Show_Generic_genericShow__prime__'] = __NAMESPACE__ . '\\Data_Show_Generic_genericShow__prime__';


// Data_Show_Generic_genericShowSum
function Data_Show_Generic_genericShowSum($dictGenericShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_Generic_genericShowSum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $genericShow__prime__1 = ($dictGenericShow)->genericShow__prime__;
  $__res = function($dictGenericShow1) use ($genericShow__prime__1) {
  $__num = func_num_args();
  $genericShow__prime__2 = ($dictGenericShow1)->genericShow__prime__;
  $__res = (object)["genericShow'" => function($v) use ($genericShow__prime__1, $genericShow__prime__2) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Inl":
$a = ($__case_0)->v0;
$__res = ($genericShow__prime__1)($a);
goto __end;;
break;
case "Inr":
$b = ($__case_0)->v0;
$__res = ($genericShow__prime__2)($b);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Show_Generic_genericShowSum'] = __NAMESPACE__ . '\\Data_Show_Generic_genericShowSum';

// Data_Show_Generic_genericShow
function Data_Show_Generic_genericShow($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Show_Generic_genericShow';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $from = ($dictGeneric)->from;
  $__res = function($dictGenericShow) use ($from) {
  $__num = func_num_args();
  $genericShow__prime__1 = ($dictGenericShow)->genericShow__prime__;
  $__res = function($x) use ($genericShow__prime__1, $from) {
  $__num = func_num_args();
  $__res = ($genericShow__prime__1)(($from)($x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Show_Generic_genericShow'] = __NAMESPACE__ . '\\Data_Show_Generic_genericShow';

