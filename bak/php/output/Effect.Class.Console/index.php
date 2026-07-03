<?php

namespace Effect\Class\Console;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Effect.Class.Console/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';

if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...$merged);
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Effect_Class_Console_compose
$Effect_Class_Console_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Effect_Class_Console_discard
$Effect_Class_Console_discard = ($GLOBALS['Control_Bind_discard'])($GLOBALS['Control_Bind_discardUnit']);

// Effect_Class_Console_warnShow
$Effect_Class_Console_warnShow = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$liftEffect = ($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect);
    $__res = (function() use ($liftEffect) {
  $__fn = function($dictShow) use ($liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_Console_compose'])($liftEffect, ($GLOBALS['Effect_Console_warnShow'])($dictShow));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_warn
$Effect_Class_Console_warn = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_Console_compose'])(($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect), $GLOBALS['Effect_Console_warn']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_timeLog
$Effect_Class_Console_timeLog = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_Console_compose'])(($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect), $GLOBALS['Effect_Console_timeLog']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_timeEnd
$Effect_Class_Console_timeEnd = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_Console_compose'])(($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect), $GLOBALS['Effect_Console_timeEnd']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_time
$Effect_Class_Console_time = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_Console_compose'])(($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect), $GLOBALS['Effect_Console_time']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_logShow
$Effect_Class_Console_logShow = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$liftEffect = ($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect);
    $__res = (function() use ($liftEffect) {
  $__fn = function($dictShow) use ($liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_Console_compose'])($liftEffect, ($GLOBALS['Effect_Console_logShow'])($dictShow));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_log
$Effect_Class_Console_log = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_Console_compose'])(($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect), $GLOBALS['Effect_Console_log']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_infoShow
$Effect_Class_Console_infoShow = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$liftEffect = ($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect);
    $__res = (function() use ($liftEffect) {
  $__fn = function($dictShow) use ($liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_Console_compose'])($liftEffect, ($GLOBALS['Effect_Console_infoShow'])($dictShow));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_info
$Effect_Class_Console_info = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_Console_compose'])(($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect), $GLOBALS['Effect_Console_info']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_groupEnd
$Effect_Class_Console_groupEnd = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect, $GLOBALS['Effect_Console_groupEnd']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_groupCollapsed
$Effect_Class_Console_groupCollapsed = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_Console_compose'])(($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect), $GLOBALS['Effect_Console_groupCollapsed']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_group
$Effect_Class_Console_group = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_Console_compose'])(($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect), $GLOBALS['Effect_Console_group']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_grouped
$Effect_Class_Console_grouped = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadEffect)->Monad0)($GLOBALS['Prim_undefined']);
$Bind1 = (($Monad0)->Bind1)($GLOBALS['Prim_undefined']);
$discard1 = ($GLOBALS['Effect_Class_Console_discard'])($Bind1);
$group1 = ($GLOBALS['Effect_Class_Console_group'])($dictMonadEffect);
$bind = ($GLOBALS['Control_Bind_bind'])($Bind1);
$groupEnd1 = ($GLOBALS['Effect_Class_Console_groupEnd'])($dictMonadEffect);
$pure = ($GLOBALS['Control_Applicative_pure'])((($Monad0)->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($discard1, $group1, $bind, $groupEnd1, $pure) {
  $__fn = function($name, $inner = null) use ($discard1, $group1, $bind, $groupEnd1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($discard1)(($group1)($name), (function() use ($bind, $inner, $discard1, $groupEnd1, $pure) {
  $__fn = function($__dollar____unused) use ($bind, $inner, $discard1, $groupEnd1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)($inner, (function() use ($discard1, $groupEnd1, $pure) {
  $__fn = function($result) use ($discard1, $groupEnd1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($discard1)($groupEnd1, (function() use ($pure, $result) {
  $__fn = function($__dollar____unused) use ($pure, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($pure)($result);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_errorShow
$Effect_Class_Console_errorShow = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$liftEffect = ($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect);
    $__res = (function() use ($liftEffect) {
  $__fn = function($dictShow) use ($liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_Console_compose'])($liftEffect, ($GLOBALS['Effect_Console_errorShow'])($dictShow));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_error
$Effect_Class_Console_error = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_Console_compose'])(($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect), $GLOBALS['Effect_Console_error']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_debugShow
$Effect_Class_Console_debugShow = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$liftEffect = ($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect);
    $__res = (function() use ($liftEffect) {
  $__fn = function($dictShow) use ($liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_Console_compose'])($liftEffect, ($GLOBALS['Effect_Console_debugShow'])($dictShow));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_debug
$Effect_Class_Console_debug = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_Console_compose'])(($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect), $GLOBALS['Effect_Console_debug']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Class_Console_clear
$Effect_Class_Console_clear = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect, $GLOBALS['Effect_Console_clear']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

