<?php

namespace Data\Char\Gen;

require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Char.Gen/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
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
      case 'Data_Char_Gen_toEnumWithDefaults': $v = \Data\Enum\Data_Enum_toEnumWithDefaults(($GLOBALS['Data_Enum_boundedEnumChar'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_boundedEnumChar'))); break;
      case 'Data_Char_Gen_bottom': $v = ($GLOBALS['Data_Bounded_bottomChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomChar')); break;
      case 'Data_Char_Gen_top': $v = ($GLOBALS['Data_Bounded_topChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topChar')); break;
      case 'Data_Char_Gen_foldable1NonEmpty': $v = \Data\NonEmpty\Data_NonEmpty_foldable1NonEmpty(($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };






// Data_Char_Gen_genUnicodeChar
function Data_Char_Gen_genUnicodeChar($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Char_Gen_genUnicodeChar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Char_Gen_toEnumWithDefaults = ($GLOBALS['Data_Char_Gen_toEnumWithDefaults'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_toEnumWithDefaults'));
  $__global_Data_Bounded_bottomChar = ($GLOBALS['Data_Bounded_bottomChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomChar'));
  $__global_Data_Bounded_topChar = ($GLOBALS['Data_Bounded_topChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topChar'));
  $__res = (((((((((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map)(($__global_Data_Char_Gen_toEnumWithDefaults)($__global_Data_Bounded_bottomChar, $__global_Data_Bounded_topChar), (($dictMonadGen)->chooseInt)(0, 65536));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Char_Gen_genUnicodeChar'] = __NAMESPACE__ . '\\Data_Char_Gen_genUnicodeChar';

// Data_Char_Gen_genDigitChar
function Data_Char_Gen_genDigitChar($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Char_Gen_genDigitChar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Char_Gen_toEnumWithDefaults = ($GLOBALS['Data_Char_Gen_toEnumWithDefaults'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_toEnumWithDefaults'));
  $__global_Data_Bounded_bottomChar = ($GLOBALS['Data_Bounded_bottomChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomChar'));
  $__global_Data_Bounded_topChar = ($GLOBALS['Data_Bounded_topChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topChar'));
  $__res = (((((((((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map)(($__global_Data_Char_Gen_toEnumWithDefaults)($__global_Data_Bounded_bottomChar, $__global_Data_Bounded_topChar), (($dictMonadGen)->chooseInt)(48, 57));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Char_Gen_genDigitChar'] = __NAMESPACE__ . '\\Data_Char_Gen_genDigitChar';

// Data_Char_Gen_genAsciiChar'
function Data_Char_Gen_genAsciiChar__prime__($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Char_Gen_genAsciiChar__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Char_Gen_toEnumWithDefaults = ($GLOBALS['Data_Char_Gen_toEnumWithDefaults'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_toEnumWithDefaults'));
  $__global_Data_Bounded_bottomChar = ($GLOBALS['Data_Bounded_bottomChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomChar'));
  $__global_Data_Bounded_topChar = ($GLOBALS['Data_Bounded_topChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topChar'));
  $__res = (((((((((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map)(($__global_Data_Char_Gen_toEnumWithDefaults)($__global_Data_Bounded_bottomChar, $__global_Data_Bounded_topChar), (($dictMonadGen)->chooseInt)(0, 127));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Char_Gen_genAsciiChar__prime__'] = __NAMESPACE__ . '\\Data_Char_Gen_genAsciiChar__prime__';

// Data_Char_Gen_genAsciiChar
function Data_Char_Gen_genAsciiChar($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Char_Gen_genAsciiChar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Char_Gen_toEnumWithDefaults = ($GLOBALS['Data_Char_Gen_toEnumWithDefaults'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_toEnumWithDefaults'));
  $__global_Data_Bounded_bottomChar = ($GLOBALS['Data_Bounded_bottomChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomChar'));
  $__global_Data_Bounded_topChar = ($GLOBALS['Data_Bounded_topChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topChar'));
  $__res = (((((((((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map)(($__global_Data_Char_Gen_toEnumWithDefaults)($__global_Data_Bounded_bottomChar, $__global_Data_Bounded_topChar), (($dictMonadGen)->chooseInt)(32, 127));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Char_Gen_genAsciiChar'] = __NAMESPACE__ . '\\Data_Char_Gen_genAsciiChar';

// Data_Char_Gen_genAlphaUppercase
function Data_Char_Gen_genAlphaUppercase($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Char_Gen_genAlphaUppercase';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Char_Gen_toEnumWithDefaults = ($GLOBALS['Data_Char_Gen_toEnumWithDefaults'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_toEnumWithDefaults'));
  $__global_Data_Bounded_bottomChar = ($GLOBALS['Data_Bounded_bottomChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomChar'));
  $__global_Data_Bounded_topChar = ($GLOBALS['Data_Bounded_topChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topChar'));
  $__res = (((((((((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map)(($__global_Data_Char_Gen_toEnumWithDefaults)($__global_Data_Bounded_bottomChar, $__global_Data_Bounded_topChar), (($dictMonadGen)->chooseInt)(65, 90));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Char_Gen_genAlphaUppercase'] = __NAMESPACE__ . '\\Data_Char_Gen_genAlphaUppercase';

// Data_Char_Gen_genAlphaLowercase
function Data_Char_Gen_genAlphaLowercase($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Char_Gen_genAlphaLowercase';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Char_Gen_toEnumWithDefaults = ($GLOBALS['Data_Char_Gen_toEnumWithDefaults'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_toEnumWithDefaults'));
  $__global_Data_Bounded_bottomChar = ($GLOBALS['Data_Bounded_bottomChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomChar'));
  $__global_Data_Bounded_topChar = ($GLOBALS['Data_Bounded_topChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topChar'));
  $__res = (((((((((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map)(($__global_Data_Char_Gen_toEnumWithDefaults)($__global_Data_Bounded_bottomChar, $__global_Data_Bounded_topChar), (($dictMonadGen)->chooseInt)(97, 122));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Char_Gen_genAlphaLowercase'] = __NAMESPACE__ . '\\Data_Char_Gen_genAlphaLowercase';

// Data_Char_Gen_genAlpha
function Data_Char_Gen_genAlpha($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Char_Gen_genAlpha';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Gen_oneOf = ($GLOBALS['Control_Monad_Gen_oneOf'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_oneOf'));
  $__global_Data_Char_Gen_foldable1NonEmpty = ($GLOBALS['Data_Char_Gen_foldable1NonEmpty'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_foldable1NonEmpty'));
  $__global_Data_Char_Gen_genAlphaLowercase = ($GLOBALS['Data_Char_Gen_genAlphaLowercase'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_genAlphaLowercase'));
  $__global_Data_Char_Gen_genAlphaUppercase = ($GLOBALS['Data_Char_Gen_genAlphaUppercase'] ?? \Data\Char\Gen\phpurs_eval_thunk('Data_Char_Gen_genAlphaUppercase'));
  $__res = ($__global_Control_Monad_Gen_oneOf)($dictMonadGen, $__global_Data_Char_Gen_foldable1NonEmpty, new Phpurs_Data2("NonEmpty", ($__global_Data_Char_Gen_genAlphaLowercase)($dictMonadGen), [($__global_Data_Char_Gen_genAlphaUppercase)($dictMonadGen)]));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Char_Gen_genAlpha'] = __NAMESPACE__ . '\\Data_Char_Gen_genAlpha';

