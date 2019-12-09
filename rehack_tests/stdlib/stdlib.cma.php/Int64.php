<?hh
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * Int64.php
 */

namespace Rehack;

final class Int64 {
  <<__Memoize>>
  public static function get() {
    $global_object = \Rehack\GlobalObject::get();
    $runtime = \Rehack\Runtime::get();
    /*
     * Soon, these will replace the `global_data->ModuleName`
     * pattern in the load() function.
     */
    $Failure = Failure::get();
    Int64::load($global_object);
    $memoized = $runtime->caml_get_global_data()->Int64;
    return $memoized;
  }

  /**
   * Performs module load operation. May have side effects.
   */
  private static function load($joo_global_object) {
    

    $runtime = $joo_global_object->jsoo_runtime;
    $caml_wrap_thrown_exception_reraise = $runtime[
       "caml_wrap_thrown_exception_reraise"
     ];
    $global_data = $runtime["caml_get_global_data"]();
    $cst_d = $runtime["caml_new_string"]("%d");
    $zero = Vector{255, 0, 0, 0};
    $one = Vector{255, 1, 0, 0};
    $minus_one = Vector{255, 16777215, 16777215, 65535};
    $min_int = Vector{255, 0, 0, 32768};
    $max_int = Vector{255, 16777215, 16777215, 32767};
    $Failure = $global_data["Failure"];
    $d_ = Vector{255, 16777215, 16777215, 65535};
    $c_ = Vector{255, 0, 0, 0};
    $b_ = Vector{255, 1, 0, 0};
    $a_ = Vector{255, 1, 0, 0};
    $succ = function(dynamic $n) use ($a_,$runtime) {
      return $runtime["caml_int64_add"]($n, $a_);
    };
    $pred = function(dynamic $n) use ($b_,$runtime) {
      return $runtime["caml_int64_sub"]($n, $b_);
    };
    $abs = function(dynamic $n) use ($c_,$runtime) {
      return $runtime["caml_greaterequal"]($n, $c_)
        ? $n
        : ($runtime["caml_int64_neg"]($n));
    };
    $lognot = function(dynamic $n) use ($d_,$runtime) {
      return $runtime["caml_int64_xor"]($n, $d_);
    };
    $to_string = function(dynamic $n) use ($cst_d,$runtime) {
      return $runtime["caml_int64_format"]($cst_d, $n);
    };
    $of_string_opt = function(dynamic $s) use ($Failure,$caml_wrap_thrown_exception_reraise,$runtime) {
      try {$e_ = Vector{0, $runtime["caml_int64_of_string"]($s)};return $e_;}
      catch(\Throwable $f_) {
        $f_ = $runtime["caml_wrap_exception"]($f_);
        if ($f_[1] === $Failure) {return 0;}
        throw $caml_wrap_thrown_exception_reraise($f_) as \Throwable;
      }
    };
    $compare = function(dynamic $x, dynamic $y) use ($runtime) {
      return $runtime["caml_int64_compare"]($x, $y);
    };
    $equal = function(dynamic $x, dynamic $y) use ($compare) {
      return 0 === $compare($x, $y) ? 1 : (0);
    };
    $Int64 = Vector{
      0,
      $zero,
      $one,
      $minus_one,
      $succ,
      $pred,
      $abs,
      $max_int,
      $min_int,
      $lognot,
      $of_string_opt,
      $to_string,
      $compare,
      $equal
    };
    
    $runtime["caml_register_global"](11, $Int64, "Int64");

  }
}

/* Hashing disabled */
