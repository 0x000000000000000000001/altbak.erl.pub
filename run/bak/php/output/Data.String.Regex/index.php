<?php

namespace Data\String\Regex;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.String.CodeUnits/index.php';
require_once __DIR__ . '/../Data.String.Pattern/index.php';
require_once __DIR__ . '/../Data.String.Regex/index.php';
require_once __DIR__ . '/../Data.String.Regex.Flags/index.php';

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
      case 'Data_String_Regex_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };
$Data_String_Regex_showRegexImpl = function($r) {
    return $r->pattern;
};

$Data_String_Regex_regexImpl = function($left, $right = null, $s1 = null, $s2 = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_String_Regex_regexImpl;
            return $Data_String_Regex_regexImpl(...array_merge($__args, $more));
        };
    }
    $pattern = '/' . str_replace('/', '\/', $s1) . '/' . $s2;
    if (@preg_match($pattern, '') === false) {
        return $left(error_get_last()['message'] ?? "Invalid regex");
    }
    return $right((object)["pattern" => $pattern, "source" => $s1, "flags" => $s2]);
};

$Data_String_Regex_source = function($r) {
    return $r->source;
};

$Data_String_Regex_flagsImpl = function($r) {
    return (object)[
        "multiline" => strpos($r->flags, 'm') !== false,
        "ignoreCase" => strpos($r->flags, 'i') !== false,
        "global" => strpos($r->flags, 'g') !== false,
        "dotAll" => strpos($r->flags, 's') !== false,
        "sticky" => strpos($r->flags, 'y') !== false,
        "unicode" => strpos($r->flags, 'u') !== false
    ];
};

$Data_String_Regex_test = function($r, $s = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_String_Regex_test;
            return $Data_String_Regex_test(...array_merge($__args, $more));
        };
    }
    return preg_match($r->pattern, $s) === 1;
};

$Data_String_Regex__match = function($just, $nothing = null, $r = null, $s = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_String_Regex__match;
            return $Data_String_Regex__match(...array_merge($__args, $more));
        };
    }
    if (strpos($r->flags, 'g') !== false) {
        $matched = preg_match_all($r->pattern, $s, $matches);
        if ($matched) {
            $res = [];
            foreach ($matches[0] as $m) {
                $res[] = $m === "" ? $nothing : $just($m);
            }
            return $just($res);
        }
    } else {
        $matched = preg_match($r->pattern, $s, $matches);
        if ($matched) {
            $res = [];
            foreach ($matches as $m) {
                $res[] = $m === "" ? $nothing : $just($m);
            }
            return $just($res);
        }
    }
    return $nothing;
};

$Data_String_Regex_replace = function($r, $s1 = null, $s2 = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_String_Regex_replace;
            return $Data_String_Regex_replace(...array_merge($__args, $more));
        };
    }
    $limit = strpos($r->flags, 'g') !== false ? -1 : 1;
    return preg_replace($r->pattern, $s1, $s2, $limit);
};

$Data_String_Regex__replaceBy = function($just, $nothing = null, $r = null, $f = null, $s = null) {
    if (func_num_args() < 5) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_String_Regex__replaceBy;
            return $Data_String_Regex__replaceBy(...array_merge($__args, $more));
        };
    }
    $limit = strpos($r->flags, 'g') !== false ? -1 : 1;
    return preg_replace_callback($r->pattern, function($matches) use ($f, $just, $nothing) {
        $match = $matches[0];
        $groups = [];
        for ($i = 1; $i < count($matches); $i++) {
            $groups[] = $matches[$i] === "" ? $nothing : $just($matches[$i]);
        }
        $fn = $f($match);
        return $fn($groups);
    }, $s, $limit);
};

$Data_String_Regex__search = function($just, $nothing = null, $r = null, $s = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_String_Regex__search;
            return $Data_String_Regex__search(...array_merge($__args, $more));
        };
    }
    if (preg_match($r->pattern, $s, $matches, PREG_OFFSET_CAPTURE)) {
        return $just($matches[0][1]);
    }
    return $nothing;
};

$Data_String_Regex_split = function($r, $s = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_String_Regex_split;
            return $Data_String_Regex_split(...array_merge($__args, $more));
        };
    }
    $limit = strpos($r->flags, 'g') !== false ? -1 : 2;
    return preg_split($r->pattern, $s, $limit);
};


// Data_String_Regex_renderFlags
function Data_String_Regex_renderFlags($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_Regex_renderFlags';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__case_0 = ($f)->global;
$__case_res_0 = null;
switch ($__case_0) {
case true:
$__case_res_0 = "g";
break;
default:
$__case_res_0 = "";
break;
};
$__case_0 = ($f)->ignoreCase;
$__case_res_1 = null;
switch ($__case_0) {
case true:
$__case_res_1 = "i";
break;
default:
$__case_res_1 = "";
break;
};
$__case_0 = ($f)->multiline;
$__case_res_2 = null;
switch ($__case_0) {
case true:
$__case_res_2 = "m";
break;
default:
$__case_res_2 = "";
break;
};
$__case_0 = ($f)->dotAll;
$__case_res_3 = null;
switch ($__case_0) {
case true:
$__case_res_3 = "s";
break;
default:
$__case_res_3 = "";
break;
};
$__case_0 = ($f)->sticky;
$__case_res_4 = null;
switch ($__case_0) {
case true:
$__case_res_4 = "y";
break;
default:
$__case_res_4 = "";
break;
};
$__case_0 = ($f)->unicode;
$__case_res_5 = null;
switch ($__case_0) {
case true:
$__case_res_5 = "u";
break;
default:
$__case_res_5 = "";
break;
};
$__res = ($__case_res_0 . ($__case_res_1 . ($__case_res_2 . ($__case_res_3 . ($__case_res_4 . $__case_res_5)))));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_Regex_renderFlags'] = __NAMESPACE__ . '\\Data_String_Regex_renderFlags';

// Data_String_Regex_regex
function Data_String_Regex_regex($s, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_Regex_regex';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($s, $__fn) { return $__fn($s, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_String_Regex_regexImpl = ($GLOBALS['Data_String_Regex_regexImpl'] ?? \Data\String\Regex\phpurs_eval_thunk('Data_String_Regex_regexImpl'));
  $__global_Data_String_Regex_renderFlags = ($GLOBALS['Data_String_Regex_renderFlags'] ?? \Data\String\Regex\phpurs_eval_thunk('Data_String_Regex_renderFlags'));
  $__res = ($__global_Data_String_Regex_regexImpl)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $s, ($__global_Data_String_Regex_renderFlags)($f));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_String_Regex_regex'] = __NAMESPACE__ . '\\Data_String_Regex_regex';

