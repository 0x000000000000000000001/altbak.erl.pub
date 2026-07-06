<?php

namespace Data\String\Gen;

require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Data.Char.Gen/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.String.CodeUnits/index.php';
require_once __DIR__ . '/../Data.String.Gen/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Prelude/index.php';

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
      case 'Data_String_Gen_max': $v = \Data\Ord\Data_Ord_max(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Data_String_Gen_genString
function Data_String_Gen_genString($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_Gen_genString';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Gen_unfoldable = ($GLOBALS['Control_Monad_Gen_unfoldable'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_unfoldable'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Unfoldable_unfoldableArray = ($GLOBALS['Data_Unfoldable_unfoldableArray'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldableArray'));
  $__global_Data_String_Gen_max = ($GLOBALS['Data_String_Gen_max'] ?? \Data\String\Gen\phpurs_eval_thunk('Data_String_Gen_max'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $__global_Data_String_CodeUnits_fromCharArray = ($GLOBALS['Data_String_CodeUnits_fromCharArray'] ?? \Data\String\CodeUnits\phpurs_eval_thunk('Data_String_CodeUnits_fromCharArray'));
  $unfoldable = ($__global_Control_Monad_Gen_unfoldable)($dictMonadRec);
  $__res = function($dictMonadGen) use ($__global_Prim_undefined, $unfoldable, $__global_Data_Unfoldable_unfoldableArray, $__global_Data_String_Gen_max, $__global_Data_Function_const, $__global_Data_String_CodeUnits_fromCharArray) {
  $__num = func_num_args();
  $sized = ($dictMonadGen)->sized;
  $Bind1 = (((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined);
  $bind = ($Bind1)->bind;
  $chooseInt = ($dictMonadGen)->chooseInt;
  $resize = ($dictMonadGen)->resize;
  $map = ((((($Bind1)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $unfoldable1 = ($unfoldable)($dictMonadGen, $__global_Data_Unfoldable_unfoldableArray);
  $__res = function($genChar) use ($sized, $bind, $chooseInt, $__global_Data_String_Gen_max, $resize, $__global_Data_Function_const, $map, $__global_Data_String_CodeUnits_fromCharArray, $unfoldable1) {
  $__num = func_num_args();
  $__res = ($sized)(function($size) use ($bind, $chooseInt, $__global_Data_String_Gen_max, $resize, $__global_Data_Function_const, $map, $__global_Data_String_CodeUnits_fromCharArray, $unfoldable1, $genChar) {
  $__num = func_num_args();
  $__res = ($bind)(($chooseInt)(1, ($__global_Data_String_Gen_max)(1, $size)), function($newSize) use ($resize, $__global_Data_Function_const, $map, $__global_Data_String_CodeUnits_fromCharArray, $unfoldable1, $genChar) {
  $__num = func_num_args();
  $__res = ($resize)(($__global_Data_Function_const)($newSize), ($map)($__global_Data_String_CodeUnits_fromCharArray, ($unfoldable1)($genChar)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
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
$GLOBALS['Data_String_Gen_genString'] = __NAMESPACE__ . '\\Data_String_Gen_genString';

// Data_String_Gen_genUnicodeString
function Data_String_Gen_genUnicodeString($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_Gen_genUnicodeString';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_Gen_genString = ($GLOBALS['Data_String_Gen_genString'] ?? \Data\String\Gen\phpurs_eval_thunk('Data_String_Gen_genString'));
  $__global_Data_Char_Gen_genUnicodeChar = ($GLOBALS['Data_Char_Gen_genUnicodeChar'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_genUnicodeChar'));
  $genString1 = ($__global_Data_String_Gen_genString)($dictMonadRec);
  $__res = function($dictMonadGen) use ($genString1, $__global_Data_Char_Gen_genUnicodeChar) {
  $__num = func_num_args();
  $__res = ($genString1)($dictMonadGen, ($__global_Data_Char_Gen_genUnicodeChar)($dictMonadGen));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_Gen_genUnicodeString'] = __NAMESPACE__ . '\\Data_String_Gen_genUnicodeString';

// Data_String_Gen_genDigitString
function Data_String_Gen_genDigitString($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_Gen_genDigitString';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_Gen_genString = ($GLOBALS['Data_String_Gen_genString'] ?? \Data\String\Gen\phpurs_eval_thunk('Data_String_Gen_genString'));
  $__global_Data_Char_Gen_genDigitChar = ($GLOBALS['Data_Char_Gen_genDigitChar'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_genDigitChar'));
  $genString1 = ($__global_Data_String_Gen_genString)($dictMonadRec);
  $__res = function($dictMonadGen) use ($genString1, $__global_Data_Char_Gen_genDigitChar) {
  $__num = func_num_args();
  $__res = ($genString1)($dictMonadGen, ($__global_Data_Char_Gen_genDigitChar)($dictMonadGen));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_Gen_genDigitString'] = __NAMESPACE__ . '\\Data_String_Gen_genDigitString';

// Data_String_Gen_genAsciiString'
function Data_String_Gen_genAsciiString__prime__($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_Gen_genAsciiString__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_Gen_genString = ($GLOBALS['Data_String_Gen_genString'] ?? \Data\String\Gen\phpurs_eval_thunk('Data_String_Gen_genString'));
  $__global_Data_Char_Gen_genAsciiChar__prime__ = ($GLOBALS['Data_Char_Gen_genAsciiChar__prime__'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_genAsciiChar__prime__'));
  $genString1 = ($__global_Data_String_Gen_genString)($dictMonadRec);
  $__res = function($dictMonadGen) use ($genString1, $__global_Data_Char_Gen_genAsciiChar__prime__) {
  $__num = func_num_args();
  $__res = ($genString1)($dictMonadGen, ($__global_Data_Char_Gen_genAsciiChar__prime__)($dictMonadGen));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_Gen_genAsciiString__prime__'] = __NAMESPACE__ . '\\Data_String_Gen_genAsciiString__prime__';

// Data_String_Gen_genAsciiString
function Data_String_Gen_genAsciiString($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_Gen_genAsciiString';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_Gen_genString = ($GLOBALS['Data_String_Gen_genString'] ?? \Data\String\Gen\phpurs_eval_thunk('Data_String_Gen_genString'));
  $__global_Data_Char_Gen_genAsciiChar = ($GLOBALS['Data_Char_Gen_genAsciiChar'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_genAsciiChar'));
  $genString1 = ($__global_Data_String_Gen_genString)($dictMonadRec);
  $__res = function($dictMonadGen) use ($genString1, $__global_Data_Char_Gen_genAsciiChar) {
  $__num = func_num_args();
  $__res = ($genString1)($dictMonadGen, ($__global_Data_Char_Gen_genAsciiChar)($dictMonadGen));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_Gen_genAsciiString'] = __NAMESPACE__ . '\\Data_String_Gen_genAsciiString';

// Data_String_Gen_genAlphaUppercaseString
function Data_String_Gen_genAlphaUppercaseString($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_Gen_genAlphaUppercaseString';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_Gen_genString = ($GLOBALS['Data_String_Gen_genString'] ?? \Data\String\Gen\phpurs_eval_thunk('Data_String_Gen_genString'));
  $__global_Data_Char_Gen_genAlphaUppercase = ($GLOBALS['Data_Char_Gen_genAlphaUppercase'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_genAlphaUppercase'));
  $genString1 = ($__global_Data_String_Gen_genString)($dictMonadRec);
  $__res = function($dictMonadGen) use ($genString1, $__global_Data_Char_Gen_genAlphaUppercase) {
  $__num = func_num_args();
  $__res = ($genString1)($dictMonadGen, ($__global_Data_Char_Gen_genAlphaUppercase)($dictMonadGen));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_Gen_genAlphaUppercaseString'] = __NAMESPACE__ . '\\Data_String_Gen_genAlphaUppercaseString';

// Data_String_Gen_genAlphaString
function Data_String_Gen_genAlphaString($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_Gen_genAlphaString';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_Gen_genString = ($GLOBALS['Data_String_Gen_genString'] ?? \Data\String\Gen\phpurs_eval_thunk('Data_String_Gen_genString'));
  $__global_Data_Char_Gen_genAlpha = ($GLOBALS['Data_Char_Gen_genAlpha'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_genAlpha'));
  $genString1 = ($__global_Data_String_Gen_genString)($dictMonadRec);
  $__res = function($dictMonadGen) use ($genString1, $__global_Data_Char_Gen_genAlpha) {
  $__num = func_num_args();
  $__res = ($genString1)($dictMonadGen, ($__global_Data_Char_Gen_genAlpha)($dictMonadGen));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_Gen_genAlphaString'] = __NAMESPACE__ . '\\Data_String_Gen_genAlphaString';

// Data_String_Gen_genAlphaLowercaseString
function Data_String_Gen_genAlphaLowercaseString($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_Gen_genAlphaLowercaseString';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_Gen_genString = ($GLOBALS['Data_String_Gen_genString'] ?? \Data\String\Gen\phpurs_eval_thunk('Data_String_Gen_genString'));
  $__global_Data_Char_Gen_genAlphaLowercase = ($GLOBALS['Data_Char_Gen_genAlphaLowercase'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_genAlphaLowercase'));
  $genString1 = ($__global_Data_String_Gen_genString)($dictMonadRec);
  $__res = function($dictMonadGen) use ($genString1, $__global_Data_Char_Gen_genAlphaLowercase) {
  $__num = func_num_args();
  $__res = ($genString1)($dictMonadGen, ($__global_Data_Char_Gen_genAlphaLowercase)($dictMonadGen));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_Gen_genAlphaLowercaseString'] = __NAMESPACE__ . '\\Data_String_Gen_genAlphaLowercaseString';

