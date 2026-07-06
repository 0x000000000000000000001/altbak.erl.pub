<?php

namespace Data\Bounded\Generic;

require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Bounded.Generic/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';

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
      case 'Data_Bounded_Generic_genericTopNoArguments': $v = (object)["genericTop'" => ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments"))]; break;
      case 'Data_Bounded_Generic_genericBottomNoArguments': $v = (object)["genericBottom'" => ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments"))]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Bounded_Generic_GenericTop$Dict
function Data_Bounded_Generic_GenericTop__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_Generic_GenericTop__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_Generic_GenericTop__dollar__Dict'] = __NAMESPACE__ . '\\Data_Bounded_Generic_GenericTop__dollar__Dict';

// Data_Bounded_Generic_GenericBottom$Dict
function Data_Bounded_Generic_GenericBottom__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_Generic_GenericBottom__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_Generic_GenericBottom__dollar__Dict'] = __NAMESPACE__ . '\\Data_Bounded_Generic_GenericBottom__dollar__Dict';


// Data_Bounded_Generic_genericTopArgument
function Data_Bounded_Generic_genericTopArgument($dictBounded) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_Generic_genericTopArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = (object)["genericTop'" => ($dictBounded)->top];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_Generic_genericTopArgument'] = __NAMESPACE__ . '\\Data_Bounded_Generic_genericTopArgument';

// Data_Bounded_Generic_genericTop'
function Data_Bounded_Generic_genericTop__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_Generic_genericTop__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericTop__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_Generic_genericTop__prime__'] = __NAMESPACE__ . '\\Data_Bounded_Generic_genericTop__prime__';

// Data_Bounded_Generic_genericTopConstructor
function Data_Bounded_Generic_genericTopConstructor($dictGenericTop) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_Generic_genericTopConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = (object)["genericTop'" => ($dictGenericTop)->genericTop__prime__];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_Generic_genericTopConstructor'] = __NAMESPACE__ . '\\Data_Bounded_Generic_genericTopConstructor';

// Data_Bounded_Generic_genericTopProduct
function Data_Bounded_Generic_genericTopProduct($dictGenericTop) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_Generic_genericTopProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $genericTop__prime__1 = ($dictGenericTop)->genericTop__prime__;
  $__res = function($dictGenericTop1) use ($genericTop__prime__1) {
  $__num = func_num_args();
  $__res = (object)["genericTop'" => new Phpurs_Data2("Product", $genericTop__prime__1, ($dictGenericTop1)->genericTop__prime__)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_Generic_genericTopProduct'] = __NAMESPACE__ . '\\Data_Bounded_Generic_genericTopProduct';

// Data_Bounded_Generic_genericTopSum
function Data_Bounded_Generic_genericTopSum($dictGenericTop) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_Generic_genericTopSum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = (object)["genericTop'" => new Phpurs_Data1("Inr", ($dictGenericTop)->genericTop__prime__)];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_Generic_genericTopSum'] = __NAMESPACE__ . '\\Data_Bounded_Generic_genericTopSum';

// Data_Bounded_Generic_genericTop
function Data_Bounded_Generic_genericTop($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_Generic_genericTop';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $to = ($dictGeneric)->to;
  $__res = function($dictGenericTop) use ($to) {
  $__num = func_num_args();
  $__res = ($to)(($dictGenericTop)->genericTop__prime__);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_Generic_genericTop'] = __NAMESPACE__ . '\\Data_Bounded_Generic_genericTop';


// Data_Bounded_Generic_genericBottomArgument
function Data_Bounded_Generic_genericBottomArgument($dictBounded) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_Generic_genericBottomArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = (object)["genericBottom'" => ($dictBounded)->bottom];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_Generic_genericBottomArgument'] = __NAMESPACE__ . '\\Data_Bounded_Generic_genericBottomArgument';

// Data_Bounded_Generic_genericBottom'
function Data_Bounded_Generic_genericBottom__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_Generic_genericBottom__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericBottom__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_Generic_genericBottom__prime__'] = __NAMESPACE__ . '\\Data_Bounded_Generic_genericBottom__prime__';

// Data_Bounded_Generic_genericBottomConstructor
function Data_Bounded_Generic_genericBottomConstructor($dictGenericBottom) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_Generic_genericBottomConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = (object)["genericBottom'" => ($dictGenericBottom)->genericBottom__prime__];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_Generic_genericBottomConstructor'] = __NAMESPACE__ . '\\Data_Bounded_Generic_genericBottomConstructor';

// Data_Bounded_Generic_genericBottomProduct
function Data_Bounded_Generic_genericBottomProduct($dictGenericBottom) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_Generic_genericBottomProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $genericBottom__prime__1 = ($dictGenericBottom)->genericBottom__prime__;
  $__res = function($dictGenericBottom1) use ($genericBottom__prime__1) {
  $__num = func_num_args();
  $__res = (object)["genericBottom'" => new Phpurs_Data2("Product", $genericBottom__prime__1, ($dictGenericBottom1)->genericBottom__prime__)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_Generic_genericBottomProduct'] = __NAMESPACE__ . '\\Data_Bounded_Generic_genericBottomProduct';

// Data_Bounded_Generic_genericBottomSum
function Data_Bounded_Generic_genericBottomSum($dictGenericBottom) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_Generic_genericBottomSum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = (object)["genericBottom'" => new Phpurs_Data1("Inl", ($dictGenericBottom)->genericBottom__prime__)];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_Generic_genericBottomSum'] = __NAMESPACE__ . '\\Data_Bounded_Generic_genericBottomSum';

// Data_Bounded_Generic_genericBottom
function Data_Bounded_Generic_genericBottom($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bounded_Generic_genericBottom';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $to = ($dictGeneric)->to;
  $__res = function($dictGenericBottom) use ($to) {
  $__num = func_num_args();
  $__res = ($to)(($dictGenericBottom)->genericBottom__prime__);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bounded_Generic_genericBottom'] = __NAMESPACE__ . '\\Data_Bounded_Generic_genericBottom';

