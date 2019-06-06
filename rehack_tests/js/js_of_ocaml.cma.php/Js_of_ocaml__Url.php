<?hh
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * Js_of_ocaml__Url.php
 */

namespace Rehack;

final class Js_of_ocaml__Url {
  <<__Memoize>>
  public static function get() {
    $global_object = \Rehack\GlobalObject::get();
    $runtime = \Rehack\Runtime::get();
    /*
     * Soon, these will replace the `global_data->ModuleName`
     * pattern in the load() function.
     */
    $CamlinternalOO = CamlinternalOO::get();
    $Js_of_ocaml__Dom_html = Js_of_ocaml__Dom_html::get();
    $Js_of_ocaml__Js = Js_of_ocaml__Js::get();
    $Js_of_ocaml__Regexp = Js_of_ocaml__Regexp::get();
    $List_ = List_::get();
    $Pervasives = Pervasives::get();
    $String_ = String_::get();
    $Failure = Failure::get();
    $Not_found = Not_found::get();
    Js_of_ocaml__Url::load($global_object);
    $memoized = $runtime->caml_get_global_data()->Js_of_ocaml__Url;
    return $memoized;
  }

  /**
   * Performs module load operation. May have side effects.
   */
  private static function load($joo_global_object) {
    

    $runtime = $joo_global_object->jsoo_runtime;
    $caml_arity_test = $runtime["caml_arity_test"];
    $caml_fresh_oo_id = $runtime["caml_fresh_oo_id"];
    $caml_get_public_method = $runtime["caml_get_public_method"];
    $caml_int_of_string = $runtime["caml_int_of_string"];
    $caml_js_to_byte_string = $runtime["caml_js_to_byte_string"];
    $caml_js_wrap_meth_callback = $runtime["caml_js_wrap_meth_callback"];
    $caml_jsbytes_of_string = $runtime["caml_jsbytes_of_string"];
    $caml_new_string = $runtime["caml_new_string"];
    $caml_string_notequal = $runtime["caml_string_notequal"];
    $caml_wrap_exception = $runtime["caml_wrap_exception"];
    $caml_call1 = function($f, $a0) use ($caml_arity_test,$runtime) {
      return $caml_arity_test($f) === 1
        ? $f($a0)
        : ($runtime["caml_call_gen"]($f, varray[$a0]));
    };
    $caml_call2 = function($f, $a0, $a1) use ($caml_arity_test,$runtime) {
      return $caml_arity_test($f) === 2
        ? $f($a0, $a1)
        : ($runtime["caml_call_gen"]($f, varray[$a0,$a1]));
    };
    $caml_call3 = function($f, $a0, $a1, $a2) use ($caml_arity_test,$runtime) {
      return $caml_arity_test($f) === 3
        ? $f($a0, $a1, $a2)
        : ($runtime["caml_call_gen"]($f, varray[$a0,$a1,$a2]));
    };
    $global_data = $runtime["caml_get_global_data"]();
    $cst__36 = $caml_new_string("");
    $cst__37 = $caml_new_string("");
    $cst__12 = $caml_new_string("");
    $cst__20 = $caml_new_string("");
    $cst__13 = $caml_new_string("#");
    $cst__14 = $caml_new_string("?");
    $cst__19 = $caml_new_string("");
    $cst__15 = $caml_new_string("/");
    $cst__16 = $caml_new_string("/");
    $cst__18 = $caml_new_string(":");
    $cst__17 = $caml_new_string("");
    $cst_http__1 = $caml_new_string("http://");
    $cst__21 = $caml_new_string("");
    $cst__29 = $caml_new_string("");
    $cst__22 = $caml_new_string("#");
    $cst__23 = $caml_new_string("?");
    $cst__28 = $caml_new_string("");
    $cst__24 = $caml_new_string("/");
    $cst__25 = $caml_new_string("/");
    $cst__27 = $caml_new_string(":");
    $cst__26 = $caml_new_string("");
    $cst_https__1 = $caml_new_string("https://");
    $cst__30 = $caml_new_string("");
    $cst__35 = $caml_new_string("");
    $cst__31 = $caml_new_string("#");
    $cst__32 = $caml_new_string("?");
    $cst__34 = $caml_new_string("");
    $cst__33 = $caml_new_string("/");
    $cst_file__1 = $caml_new_string("file://");
    $cst__11 = $caml_new_string("");
    $cst__10 = $caml_new_string("");
    $cst__9 = $caml_new_string("");
    $cst__8 = $caml_new_string("");
    $cst__7 = $caml_new_string("");
    $cst__6 = $caml_new_string("");
    $cst__5 = $caml_new_string("");
    $cst__3 = $caml_new_string("=");
    $cst__4 = $caml_new_string("&");
    $cst__1 = $caml_new_string("");
    $cst__2 = $caml_new_string("");
    $cst_file = $caml_new_string("file");
    $cst_file__0 = $caml_new_string("file:");
    $cst_http = $caml_new_string("http");
    $cst_http__0 = $caml_new_string("http:");
    $cst_https = $caml_new_string("https");
    $cst_https__0 = $caml_new_string("https:");
    $cst__0 = $caml_new_string(" ");
    $cst_2B = $caml_new_string("%2B");
    $shared = Vector{
      0,
      $caml_new_string("hash"),
      $caml_new_string("host"),
      $caml_new_string("href"),
      $caml_new_string("port"),
      $caml_new_string("origin"),
      $caml_new_string("assign"),
      $caml_new_string("hostname"),
      $caml_new_string("pathname"),
      $caml_new_string("search"),
      $caml_new_string("protocol"),
      $caml_new_string("reload"),
      $caml_new_string("replace")
    };
    $cst_Js_of_ocaml_Url_Local_exn = $caml_new_string(
      "Js_of_ocaml__Url.Local_exn"
    );
    $cst = $caml_new_string("+");
    $cst_Js_of_ocaml_Url_Not_an_http_protocol = $caml_new_string(
      "Js_of_ocaml__Url.Not_an_http_protocol"
    );
    $cst_Hh_Tt_Tt_Pp_Ss_0_9a_zA_Z_0_9a_zA_Z_0_9A_Fa_f_0_9 = $caml_new_string(
      "^([Hh][Tt][Tt][Pp][Ss]?)://([0-9a-zA-Z.-]+|\\[[0-9a-zA-Z.-]+\\]|\\[[0-9A-Fa-f:.]+\\])?(:([0-9]+))?(/([^\\?#]*)(\\?([^#]*))?(#(.*))?)?\\$"
    );
    $cst_Ff_Ii_Ll_Ee = $caml_new_string(
      "^([Ff][Ii][Ll][Ee])://([^\\?#]*)(\\?([^#]*))?(#(.*))?\\$"
    );
    $Js_of_ocaml_Js = $global_data["Js_of_ocaml__Js"];
    $Failure = $global_data["Failure"];
    $CamlinternalOO = $global_data["CamlinternalOO"];
    $Pervasives = $global_data["Pervasives"];
    $List = $global_data["List_"];
    $String = $global_data["String_"];
    $Not_found = $global_data["Not_found"];
    $Js_of_ocaml_Regexp = $global_data["Js_of_ocaml__Regexp"];
    $Js_of_ocaml_Dom_html = $global_data["Js_of_ocaml__Dom_html"];
    $p5 = Vector{0, $caml_new_string(""), 0};
    $p0 = Vector{
      0,
      $caml_new_string("search"),
      $caml_new_string("replace"),
      $caml_new_string("reload"),
      $caml_new_string("protocol"),
      $caml_new_string("port"),
      $caml_new_string("pathname"),
      $caml_new_string("origin"),
      $caml_new_string("href"),
      $caml_new_string("hostname"),
      $caml_new_string("host"),
      $caml_new_string("hash"),
      $caml_new_string("assign")
    };
    $split = function($c, $s) use ($Js_of_ocaml_Js,$String,$caml_call1,$caml_call2,$caml_get_public_method) {
      $s2 = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, 24046298, 267), $x);
      };
      $s3 = $caml_call2($String[1], 1, $c)->toString();
      $s4 = (function($t1, $t0, $param) {return $t1->split($t0);})($s, $s3, $s2);
      return $caml_call1($Js_of_ocaml_Js[20], $s4);
    };
    $split_2 = function($c, $s) use ($Js_of_ocaml_Js,$String,$caml_call1,$caml_call2,$caml_get_public_method) {
      $sU = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, -524334903, 268), $x);
      };
      $sV = $caml_call2($String[1], 1, $c)->toString();
      $index = (function($t8, $t7, $param) {return $t8->indexOf($t7);})($s, $sV, $sU);
      if (0 <= $index) {
        $sW = function($x) use ($caml_call1,$caml_get_public_method) {
          return $caml_call1($caml_get_public_method($x, -303194578, 269), $x);
        };
        $sX = (int) ($index + 1);
        $sY = (function($t6, $t5, $param) {return $t6->slice($t5);})($s, $sX, $sW);
        $sZ = function($x) use ($caml_call1,$caml_get_public_method) {
          return $caml_call1($caml_get_public_method($x, -20462510, 270), $x);
        };
        $s0 = 0;
        $s1 = Vector{
          0,
          (function($t4, $t2, $t3, $param) {return $t4->slice($t2, $t3);})($s, $s0, $index, $sZ),
          $sY
        };
        return $caml_call1($Js_of_ocaml_Js[4], $s1);
      }
      return $Js_of_ocaml_Js[3];
    };
    $Local_exn = Vector{
      248,
      $cst_Js_of_ocaml_Url_Local_exn,
      $caml_fresh_oo_id(0)
    };
    $interrupt = function($param) use ($Local_exn,$runtime) {
      throw $runtime["caml_wrap_thrown_exception"]($Local_exn) as \Throwable;
    };
    $plus_re = $caml_call1($Js_of_ocaml_Regexp[5], $cst);
    $escape_plus = function($s) use ($Js_of_ocaml_Regexp,$caml_call3,$cst_2B,$plus_re) {
      return $caml_call3($Js_of_ocaml_Regexp[12], $plus_re, $s, $cst_2B);
    };
    $unescape_plus = function($s) use ($Js_of_ocaml_Regexp,$caml_call3,$cst__0,$plus_re) {
      return $caml_call3($Js_of_ocaml_Regexp[12], $plus_re, $s, $cst__0);
    };
    $p1 = 0;
    $p2 = "g";
    $p3 = "\\+";
    $p4 = $Js_of_ocaml_Js[11];
    $plus_re_js_string = (function($t11, $t9, $t10, $param) {return new $t11($t9, $t10);
     })($p4, $p3, $p2, $p1);
    $unescape_plus_js_string = function($s) use ($caml_call1,$caml_get_public_method,$plus_re_js_string) {
      $sQ = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, 180472028, 271), $x);
      };
      $sR = 0;
      ((function($t16, $t15, $param) {$t16->lastIndex = $t15;return 0;})($plus_re_js_string, $sR, $sQ));
      $sS = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, 724060212, 272), $x);
      };
      $sT = " ";
      return (function($t14, $t12, $t13, $param) {
         return $t14->replace($t12, $t13);
       })($s, $plus_re_js_string, $sT, $sS);
    };
    $urldecode_js_string_string = function($s) use ($Js_of_ocaml_Js,$caml_call1,$caml_js_to_byte_string,$unescape_plus_js_string) {
      $sP = $unescape_plus_js_string($s);
      return $caml_js_to_byte_string($caml_call1($Js_of_ocaml_Js[42], $sP));
    };
    $urldecode = function($s) use ($Js_of_ocaml_Js,$caml_call1,$caml_js_to_byte_string,$caml_jsbytes_of_string,$unescape_plus) {
      $sO = $caml_jsbytes_of_string($unescape_plus($s));
      return $caml_js_to_byte_string($caml_call1($Js_of_ocaml_Js[42], $sO));
    };
    $urlencode = function($opt, $s) use ($Js_of_ocaml_Js,$caml_call1,$caml_js_to_byte_string,$caml_jsbytes_of_string,$escape_plus) {
      if ($opt) {
        $sth = $opt[1];
        $with_plus = $sth;
      }
      else {$with_plus = 1;}
      return $with_plus
        ? $escape_plus(
         $caml_js_to_byte_string(
           $caml_call1($Js_of_ocaml_Js[41], $caml_jsbytes_of_string($s))
         )
       )
        : ($caml_js_to_byte_string(
         $caml_call1($Js_of_ocaml_Js[41], $caml_jsbytes_of_string($s))
       ));
    };
    $Not_an_http_protocol = Vector{
      248,
      $cst_Js_of_ocaml_Url_Not_an_http_protocol,
      $caml_fresh_oo_id(0)
    };
    $is_secure = function($prot_string) use ($Not_an_http_protocol,$caml_call1,$caml_get_public_method,$caml_js_to_byte_string,$caml_string_notequal,$cst_file,$cst_file__0,$cst_http,$cst_http__0,$cst_https,$cst_https__0,$runtime) {
      $sN = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, 946097238, 273), $x);
      };
      $match = $caml_js_to_byte_string(
        (function($t17, $param) {return $t17->toLowerCase();})($prot_string, $sN)
      );
      if ($caml_string_notequal($match, $cst_file)) {
        if ($caml_string_notequal($match, $cst_file__0)) {
          if ($caml_string_notequal($match, $cst_http)) {
            if ($caml_string_notequal($match, $cst_http__0)) {
              if ($caml_string_notequal($match, $cst_https)) {
                if ($caml_string_notequal($match, $cst_https__0)) {$switch__0 = 1;$switch__1 = 0;}
                else {$switch__1 = 1;}
              }
              else {$switch__1 = 1;}
              if ($switch__1) {return 1;}
            }
            else {$switch__0 = 0;}
          }
          else {$switch__0 = 0;}
          if (! $switch__0) {return 0;}
        }
      }
      throw $runtime["caml_wrap_thrown_exception"]($Not_an_http_protocol) as \Throwable;
    };
    $default_http_port = 80;
    $default_https_port = 443;
    $path_of_path_string = function($s) use ($Not_found,$String,$caml_call3,$caml_string_notequal,$caml_wrap_exception,$cst__1,$cst__2,$p5,$runtime) {
      $aux = new Ref();
      $l = $runtime["caml_ml_string_length"]($s);
      $aux->contents = function($i) use ($Not_found,$String,$aux,$caml_call3,$caml_wrap_exception,$l,$runtime,$s) {
        try {$sL = $caml_call3($String[18], $s, $i, 47);$j = $sL;}
        catch(\Throwable $sM) {
          $sM = $caml_wrap_exception($sM);
          if ($sM !== $Not_found) {
            throw $runtime["caml_wrap_thrown_exception_reraise"]($sM) as \Throwable;
          }
          $j = $l;
        }
        $word = $caml_call3($String[4], $s, $i, (int) ($j - $i));
        return $l <= $j
          ? Vector{0, $word, 0}
          : (Vector{0, $word, $aux->contents((int) ($j + 1))});
      };
      $a = $aux->contents(0);
      if ($a) {
        if (! $caml_string_notequal($a[1], $cst__1)) {
          $sK = $a[2];
          if (! $sK) {return 0;}
          if (! $caml_string_notequal($sK[1], $cst__2)) {if (! $sK[2]) {return $p5;}}
        }
      }
      return $a;
    };
    $encode_arguments = function($l) use ($List,$Pervasives,$String,$caml_call2,$cst__3,$cst__4,$urlencode) {
      $sF = function($param) use ($Pervasives,$caml_call2,$cst__3,$urlencode) {
        $v = $param[2];
        $n = $param[1];
        $sH = $urlencode(0, $v);
        $sI = $caml_call2($Pervasives[16], $cst__3, $sH);
        $sJ = $urlencode(0, $n);
        return $caml_call2($Pervasives[16], $sJ, $sI);
      };
      $sG = $caml_call2($List[17], $sF, $l);
      return $caml_call2($String[7], $cst__4, $sG);
    };
    $decode_arguments_js_string = function($s) use ($Js_of_ocaml_Js,$Local_exn,$caml_call1,$caml_call2,$caml_call3,$caml_get_public_method,$caml_wrap_exception,$interrupt,$runtime,$split,$split_2,$urldecode_js_string_string) {
      $aux = new Ref();
      $arr = $split(38, $s);
      $sw = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, 520590566, 274), $x);
      };
      $len = (function($t18, $param) {return $t18->length;})($arr, $sw);
      $name_value_split = function($s) use ($split_2) {
        return $split_2(61, $s);
      };
      $aux->contents = function($acc, $idx) use ($Js_of_ocaml_Js,$Local_exn,$arr,$aux,$caml_call2,$caml_call3,$caml_wrap_exception,$interrupt,$name_value_split,$runtime,$urldecode_js_string_string) {
        $idx__0 = $idx;
        for (;;) {
          if (0 <= $idx__0) {
            try {
              $sx = (int) ($idx__0 + -1);
              $sy = function($s) use ($Js_of_ocaml_Js,$caml_call3,$interrupt,$name_value_split,$urldecode_js_string_string) {
                $sC = function($param) use ($urldecode_js_string_string) {
                  $y = $param[2];
                  $x = $param[1];
                  $sE = $urldecode_js_string_string($y);
                  return Vector{0, $urldecode_js_string_string($x), $sE};
                };
                $sD = $name_value_split($s);
                return $caml_call3($Js_of_ocaml_Js[6][7], $sD, $interrupt, $sC
                );
              };
              $sz = $caml_call2($Js_of_ocaml_Js[16], $arr, $idx__0);
              $sA = $aux->contents(
                Vector{
                  0,
                  $caml_call3($Js_of_ocaml_Js[6][7], $sz, $interrupt, $sy),
                  $acc
                },
                $sx
              );
              return $sA;
            }
            catch(\Throwable $sB) {
              $sB = $caml_wrap_exception($sB);
              if ($sB === $Local_exn) {
                $idx__1 = (int) ($idx__0 + -1);
                $idx__0 = $idx__1;
                continue;
              }
              throw $runtime["caml_wrap_thrown_exception_reraise"]($sB) as \Throwable;
            }
          }
          return $acc;
        }
      };
      return $aux->contents(0, (int) ($len + -1));
    };
    $decode_arguments = function($s) use ($caml_jsbytes_of_string,$decode_arguments_js_string) {
      return $decode_arguments_js_string($caml_jsbytes_of_string($s));
    };
    $p6 = 0;
    $p7 = $caml_jsbytes_of_string(
      $cst_Hh_Tt_Tt_Pp_Ss_0_9a_zA_Z_0_9a_zA_Z_0_9A_Fa_f_0_9
    );
    $p8 = $Js_of_ocaml_Js[10];
    $url_re = (function($t20, $t19, $param) {return new $t20($t19);})($p8, $p7, $p6);
    $p9 = 0;
    $p_ = $caml_jsbytes_of_string($cst_Ff_Ii_Ll_Ee);
    $qa = $Js_of_ocaml_Js[10];
    $file_re = (function($t22, $t21, $param) {return new $t22($t21);})($qa, $p_, $p9);
    $url_of_js_string = function($s) use ($Js_of_ocaml_Js,$caml_call1,$caml_call2,$caml_call3,$caml_get_public_method,$caml_int_of_string,$caml_js_to_byte_string,$caml_jsbytes_of_string,$caml_string_notequal,$cst__10,$cst__11,$cst__5,$cst__6,$cst__7,$cst__8,$cst__9,$decode_arguments_js_string,$file_re,$interrupt,$is_secure,$path_of_path_string,$url_re,$urldecode_js_string_string) {
      $r3 = function($handle) use ($Js_of_ocaml_Js,$caml_call1,$caml_call2,$caml_int_of_string,$caml_js_to_byte_string,$caml_jsbytes_of_string,$caml_string_notequal,$cst__5,$cst__6,$cst__7,$cst__8,$cst__9,$decode_arguments_js_string,$interrupt,$is_secure,$path_of_path_string,$urldecode_js_string_string) {
        $res = $caml_call1($Js_of_ocaml_Js[21], $handle);
        $sh = $caml_call2($Js_of_ocaml_Js[16], $res, 1);
        $ssl = $is_secure($caml_call2($Js_of_ocaml_Js[6][8], $sh, $interrupt));
        $port_of_string = function($s) use ($caml_int_of_string,$caml_string_notequal,$cst__5,$ssl) {
          return $caml_string_notequal($s, $cst__5)
            ? $caml_int_of_string($s)
            : ($ssl ? 443 : (80));
        };
        $si = function($param) use ($caml_jsbytes_of_string,$cst__6) {
          return $caml_jsbytes_of_string($cst__6);
        };
        $sj = $caml_call2($Js_of_ocaml_Js[16], $res, 6);
        $path_str = $urldecode_js_string_string(
          $caml_call2($Js_of_ocaml_Js[6][8], $sj, $si)
        );
        $sk = function($param) use ($caml_jsbytes_of_string,$cst__7) {
          return $caml_jsbytes_of_string($cst__7);
        };
        $sl = $caml_call2($Js_of_ocaml_Js[16], $res, 10);
        $sm = $urldecode_js_string_string(
          $caml_call2($Js_of_ocaml_Js[6][8], $sl, $sk)
        );
        $sn = function($param) use ($caml_jsbytes_of_string,$cst__8) {
          return $caml_jsbytes_of_string($cst__8);
        };
        $so = $caml_call2($Js_of_ocaml_Js[16], $res, 8);
        $sp = $decode_arguments_js_string(
          $caml_call2($Js_of_ocaml_Js[6][8], $so, $sn)
        );
        $sq = $path_of_path_string($path_str);
        $sr = function($param) use ($caml_jsbytes_of_string,$cst__9) {
          return $caml_jsbytes_of_string($cst__9);
        };
        $ss = $caml_call2($Js_of_ocaml_Js[16], $res, 4);
        $st = $port_of_string(
          $caml_js_to_byte_string($caml_call2($Js_of_ocaml_Js[6][8], $ss, $sr)
          )
        );
        $su = $caml_call2($Js_of_ocaml_Js[16], $res, 2);
        $url = Vector{
          0,
          $urldecode_js_string_string(
            $caml_call2($Js_of_ocaml_Js[6][8], $su, $interrupt)
          ),
          $st,
          $sq,
          $path_str,
          $sp,
          $sm
        };
        $sv = $ssl ? Vector{1, $url} : (Vector{0, $url});
        return Vector{0, $sv};
      };
      $r4 = function($param) use ($Js_of_ocaml_Js,$caml_call1,$caml_call2,$caml_call3,$caml_get_public_method,$caml_js_to_byte_string,$caml_jsbytes_of_string,$cst__10,$cst__11,$decode_arguments_js_string,$file_re,$interrupt,$path_of_path_string,$s,$urldecode_js_string_string) {
        $r7 = function($handle) use ($Js_of_ocaml_Js,$caml_call1,$caml_call2,$caml_js_to_byte_string,$caml_jsbytes_of_string,$cst__10,$cst__11,$decode_arguments_js_string,$interrupt,$path_of_path_string,$urldecode_js_string_string) {
          $res = $caml_call1($Js_of_ocaml_Js[21], $handle);
          $sa = $caml_call2($Js_of_ocaml_Js[16], $res, 2);
          $path_str = $urldecode_js_string_string(
            $caml_call2($Js_of_ocaml_Js[6][8], $sa, $interrupt)
          );
          $sb = function($param) use ($caml_jsbytes_of_string,$cst__10) {
            return $caml_jsbytes_of_string($cst__10);
          };
          $sc = $caml_call2($Js_of_ocaml_Js[16], $res, 6);
          $sd = $caml_js_to_byte_string(
            $caml_call2($Js_of_ocaml_Js[6][8], $sc, $sb)
          );
          $se = function($param) use ($caml_jsbytes_of_string,$cst__11) {
            return $caml_jsbytes_of_string($cst__11);
          };
          $sf = $caml_call2($Js_of_ocaml_Js[16], $res, 4);
          $sg = $decode_arguments_js_string(
            $caml_call2($Js_of_ocaml_Js[6][8], $sf, $se)
          );
          return Vector{
            0,
            Vector{
              2,
              Vector{0, $path_of_path_string($path_str), $path_str, $sg, $sd}
            }
          };
        };
        $r8 = function($param) {return 0;};
        $r9 = function($x) use ($caml_call1,$caml_get_public_method) {
          return $caml_call1($caml_get_public_method($x, -1021447279, 275), $x
          );
        };
        $r_ = (function($t26, $t25, $param) {return $t26->exec($t25);})($file_re, $s, $r9);
        return $caml_call3($Js_of_ocaml_Js[5][7], $r_, $r8, $r7);
      };
      $r5 = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, -1021447279, 276), $x);
      };
      $r6 = (function($t24, $t23, $param) {return $t24->exec($t23);})($url_re, $s, $r5);
      return $caml_call3($Js_of_ocaml_Js[5][7], $r6, $r4, $r3);
    };
    $url_of_string = function($s) use ($caml_jsbytes_of_string,$url_of_js_string) {
      return $url_of_js_string($caml_jsbytes_of_string($s));
    };
    $string_of_url = function($param) use ($List,$Pervasives,$String,$caml_call1,$caml_call2,$caml_string_notequal,$cst__12,$cst__13,$cst__14,$cst__15,$cst__16,$cst__17,$cst__18,$cst__19,$cst__20,$cst__21,$cst__22,$cst__23,$cst__24,$cst__25,$cst__26,$cst__27,$cst__28,$cst__29,$cst__30,$cst__31,$cst__32,$cst__33,$cst__34,$cst__35,$cst_file__1,$cst_http__1,$cst_https__1,$encode_arguments,$urlencode) {
      switch($param[0]) {
        // FALLTHROUGH
        case 0:
          $match = $param[1];
          $frag = $match[6];
          $args = $match[5];
          $path = $match[3];
          $port = $match[2];
          $host = $match[1];
          if ($caml_string_notequal($frag, $cst__12)) {
            $rq = $urlencode(0, $frag);
            $rr = $caml_call2($Pervasives[16], $cst__13, $rq);
          }
          else {$rr = $cst__20;}
          if ($args) {
            $rs = $encode_arguments($args);
            $rt = $caml_call2($Pervasives[16], $cst__14, $rs);
          }
          else {$rt = $cst__19;}
          $ru = $caml_call2($Pervasives[16], $rt, $rr);
          $rv = function($x) use ($urlencode) {return $urlencode(0, $x);};
          $rw = $caml_call2($List[17], $rv, $path);
          $rx = $caml_call2($String[7], $cst__15, $rw);
          $ry = $caml_call2($Pervasives[16], $rx, $ru);
          $rz = $caml_call2($Pervasives[16], $cst__16, $ry);
          if (80 === $port) {$rA = $cst__17;}
          else {
            $rE = $caml_call1($Pervasives[21], $port);
            $rA = $caml_call2($Pervasives[16], $cst__18, $rE);
          }
          $rB = $caml_call2($Pervasives[16], $rA, $rz);
          $rC = $urlencode(0, $host);
          $rD = $caml_call2($Pervasives[16], $rC, $rB);
          return $caml_call2($Pervasives[16], $cst_http__1, $rD);
        // FALLTHROUGH
        case 1:
          $match__0 = $param[1];
          $frag__0 = $match__0[6];
          $args__0 = $match__0[5];
          $path__0 = $match__0[3];
          $port__0 = $match__0[2];
          $host__0 = $match__0[1];
          if ($caml_string_notequal($frag__0, $cst__21)) {
            $rF = $urlencode(0, $frag__0);
            $rG = $caml_call2($Pervasives[16], $cst__22, $rF);
          }
          else {$rG = $cst__29;}
          if ($args__0) {
            $rH = $encode_arguments($args__0);
            $rI = $caml_call2($Pervasives[16], $cst__23, $rH);
          }
          else {$rI = $cst__28;}
          $rJ = $caml_call2($Pervasives[16], $rI, $rG);
          $rK = function($x) use ($urlencode) {return $urlencode(0, $x);};
          $rL = $caml_call2($List[17], $rK, $path__0);
          $rM = $caml_call2($String[7], $cst__24, $rL);
          $rN = $caml_call2($Pervasives[16], $rM, $rJ);
          $rO = $caml_call2($Pervasives[16], $cst__25, $rN);
          if (443 === $port__0) {$rP = $cst__26;}
          else {
            $rT = $caml_call1($Pervasives[21], $port__0);
            $rP = $caml_call2($Pervasives[16], $cst__27, $rT);
          }
          $rQ = $caml_call2($Pervasives[16], $rP, $rO);
          $rR = $urlencode(0, $host__0);
          $rS = $caml_call2($Pervasives[16], $rR, $rQ);
          return $caml_call2($Pervasives[16], $cst_https__1, $rS);
        // FALLTHROUGH
        default:
          $match__1 = $param[1];
          $frag__1 = $match__1[4];
          $args__1 = $match__1[3];
          $path__1 = $match__1[1];
          if ($caml_string_notequal($frag__1, $cst__30)) {
            $rU = $urlencode(0, $frag__1);
            $rV = $caml_call2($Pervasives[16], $cst__31, $rU);
          }
          else {$rV = $cst__35;}
          if ($args__1) {
            $rW = $encode_arguments($args__1);
            $rX = $caml_call2($Pervasives[16], $cst__32, $rW);
          }
          else {$rX = $cst__34;}
          $rY = $caml_call2($Pervasives[16], $rX, $rV);
          $rZ = function($x) use ($urlencode) {return $urlencode(0, $x);};
          $r0 = $caml_call2($List[17], $rZ, $path__1);
          $r1 = $caml_call2($String[7], $cst__33, $r0);
          $r2 = $caml_call2($Pervasives[16], $r1, $rY);
          return $caml_call2($Pervasives[16], $cst_file__1, $r2);
        }
    };
    $qb = function($x) use ($caml_call1,$caml_get_public_method) {
      return $caml_call1($caml_get_public_method($x, -448369099, 277), $x);
    };
    $qc = $Js_of_ocaml_Dom_html[8];
    $qd = (function($t42, $param) {return $t42->location;})($qc, $qb);
    $qe = $caml_call1($Js_of_ocaml_Js[6][2], $qd);
    
    if ($caml_call1($Js_of_ocaml_Js[6][5], $qe)) {
      $qf = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, -448369099, 278), $x);
      };
      $qg = $Js_of_ocaml_Dom_html[8];
      $l = (function($t41, $param) {return $t41->location;})($qg, $qf);
    }
    else {
      $empty = "";
      $qx = Vector{0, 0, 0, 0};
      $qy = function
      ($self, $href, $protocol, $host, $hostname, $port, $pathname, $search, $hash, $origin, $reload, $replace, $assign) use ($CamlinternalOO,$caml_call1,$caml_call2,$cst__37,$p0,$qx,$shared) {
        if (! $qx[1]) {
          $qX = $caml_call1($CamlinternalOO[16], $shared);
          $qY = $caml_call2($CamlinternalOO[3], $qX, $cst__37);
          $qZ = $caml_call2($CamlinternalOO[8], $qX, $p0);
          $q0 = $qZ[1];
          $q1 = $qZ[2];
          $q2 = $qZ[3];
          $q3 = $qZ[4];
          $q4 = $qZ[5];
          $q5 = $qZ[6];
          $q6 = $qZ[7];
          $q7 = $qZ[8];
          $q8 = $qZ[9];
          $q9 = $qZ[10];
          $q_ = $qZ[11];
          $ra = $qZ[12];
          $rb = function($self_1) use ($caml_call1,$qY) {
            $env = $self_1[$qY + 1];
            return $caml_call1($env[2], $env[1]);
          };
          $rc = function($self_1) use ($caml_call1,$qY) {
            $env = $self_1[$qY + 1];
            return $caml_call1($env[3], $env[1]);
          };
          $rd = function($self_1) use ($caml_call1,$qY) {
            $env = $self_1[$qY + 1];
            return $caml_call1($env[4], $env[1]);
          };
          $re = function($self_1) use ($qY) {
            $env = $self_1[$qY + 1];
            return $env[5];
          };
          $rf = function($self_1) use ($qY) {
            $env = $self_1[$qY + 1];
            return $env[6];
          };
          $rg = function($self_1) use ($qY) {
            $env = $self_1[$qY + 1];
            return $env[7];
          };
          $rh = function($self_1) use ($qY) {
            $env = $self_1[$qY + 1];
            return $env[8];
          };
          $ri = function($self_1) use ($qY) {
            $env = $self_1[$qY + 1];
            return $env[9];
          };
          $rj = function($self_1) use ($qY) {
            $env = $self_1[$qY + 1];
            return $env[10];
          };
          $rk = function($self_1) use ($qY) {
            $env = $self_1[$qY + 1];
            return $env[11];
          };
          $rl = function($self_1) use ($qY) {
            $env = $self_1[$qY + 1];
            return $env[12];
          };
          $rm = Vector{
            0,
            $q7,
            function($self_1) use ($qY) {
              $env = $self_1[$qY + 1];
              return $env[13];
            },
            $q3,
            $rl,
            $q9,
            $rk,
            $q8,
            $rj,
            $q4,
            $ri,
            $q5,
            $rh,
            $q0,
            $rg,
            $q_,
            $rf,
            $q6,
            $re,
            $q2,
            $rd,
            $q1,
            $rc,
            $ra,
            $rb
          };
          $caml_call2($CamlinternalOO[11], $qX, $rm);
          $rn = function($ro) use ($CamlinternalOO,$caml_call2,$qX,$qY) {
            $rp = $caml_call2($CamlinternalOO[24], 0, $qX);
            $rp[$qY + 1] = $ro;
            return $rp;
          };
          $caml_call1($CamlinternalOO[17], $qX);
          $qx[1] = $rn;
        }
        return $caml_call1(
          $qx[1],
          Vector{
            0,
            $self,
            $assign,
            $replace,
            $reload,
            $origin,
            $hash,
            $search,
            $pathname,
            $port,
            $hostname,
            $host,
            $protocol,
            $href
          }
        );
      };
      $qz = function($param, $qW) {return 0;};
      $qA = function($param, $qV) {return 0;};
      $qB = function($param) {return 0;};
      $qC = $Js_of_ocaml_Js[3];
      $l = (function
       ($t29, $t30, $t31, $t32, $t33, $t34, $t35, $t36, $t37, $t38, $t39, $t40, $param) use ($caml_js_wrap_meth_callback) {
         return (object)darray[
          "href"=>$t29,
          "protocol"=>$t30,
          "host"=>$t31,
          "hostname"=>$t32,
          "port"=>$t33,
          "pathname"=>$t34,
          "search"=>$t35,
          "hash"=>$t36,
          "origin"=>$t37,
          "reload"=>$caml_js_wrap_meth_callback($t38),
          "replace"=>$caml_js_wrap_meth_callback($t39),
          "assign"=>$caml_js_wrap_meth_callback($t40)];
       })(
        $empty,
        $empty,
        $empty,
        $empty,
        $empty,
        $empty,
        $empty,
        $empty,
        $qC,
        $qB,
        $qA,
        $qz,
        $qy
      );
    }
    
    $qh = function($x) use ($caml_call1,$caml_get_public_method) {
      return $caml_call1($caml_get_public_method($x, -757983821, 279), $x);
    };
    $host = $urldecode_js_string_string(
      (function($t43, $param) {return $t43->hostname;})($l, $qh)
    );
    $qi = function($x) use ($caml_call1,$caml_get_public_method) {
      return $caml_call1($caml_get_public_method($x, 6510168, 280), $x);
    };
    $protocol = $urldecode_js_string_string(
      (function($t44, $param) {return $t44->protocol;})($l, $qi)
    );
    $qj = 0;
    $port = (function($param) use ($Failure,$caml_call1,$caml_get_public_method,$caml_int_of_string,$caml_js_to_byte_string,$caml_wrap_exception,$l,$runtime) {
       try {
         $qS = function($x) use ($caml_call1,$caml_get_public_method) {
           return $caml_call1($caml_get_public_method($x, -899906687, 281), $x
           );
         };
         $qT = Vector{
           0,
           $caml_int_of_string(
             $caml_js_to_byte_string(
               (function($t45, $param) {return $t45->port;})($l, $qS)
             )
           )
         };
         return $qT;
       }
       catch(\Throwable $qU) {
         $qU = $caml_wrap_exception($qU);
         if ($qU[1] === $Failure) {return 0;}
         throw $runtime["caml_wrap_thrown_exception_reraise"]($qU) as \Throwable;
       }
     })($qj);
    $qk = function($x) use ($caml_call1,$caml_get_public_method) {
      return $caml_call1($caml_get_public_method($x, -742027664, 282), $x);
    };
    $path_string = $urldecode_js_string_string(
      (function($t46, $param) {return $t46->pathname;})($l, $qk)
    );
    $path = $path_of_path_string($path_string);
    $ql = "?";
    $qm = function($x) use ($caml_call1,$caml_get_public_method) {
      return $caml_call1($caml_get_public_method($x, 930445673, 283), $x);
    };
    $qn = 0;
    $qo = function($x) use ($caml_call1,$caml_get_public_method) {
      return $caml_call1($caml_get_public_method($x, -487088280, 284), $x);
    };
    $qp = (function($t51, $param) {return $t51->search;})($l, $qo);
    
    if (
      (function($t53, $t52, $param) {return $t53->charAt($t52);})($qp, $qn, $qm) === $ql
    ) {
      $qq = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, -303194578, 285), $x);
      };
      $qr = 1;
      $qs = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, -487088280, 286), $x);
      };
      $qt = (function($t48, $param) {return $t48->search;})($l, $qs);
      $qu = (function($t50, $t49, $param) {return $t50->slice($t49);})($qt, $qr, $qq);
    }
    else {
      $qw = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, -487088280, 293), $x);
      };
      $qu = (function($t47, $param) {return $t47->search;})($l, $qw);
    }
    
    $arguments__0 = $decode_arguments_js_string($qu);
    $get_fragment = function($param) use ($Js_of_ocaml_Js,$caml_call1,$caml_call3,$caml_get_public_method,$cst__36,$l,$runtime) {
      $qI = function($res) use ($Js_of_ocaml_Js,$caml_call1,$runtime) {
        $res__0 = $caml_call1($Js_of_ocaml_Js[21], $res);
        return $runtime["caml_js_to_string"]($res__0[1]);
      };
      $qJ = function($param) use ($cst__36) {return $cst__36;};
      $qK = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, -16084858, 287), $x);
      };
      $qL = 0;
      $qM = "#(.*)";
      $qN = $Js_of_ocaml_Js[10];
      $qO = (function($t56, $t55, $param) {return new $t56($t55);})($qN, $qM, $qL);
      $qP = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, -988476949, 288), $x);
      };
      $qQ = (function($t54, $param) {return $t54->href;})($l, $qP);
      $qR = (function($t58, $t57, $param) {return $t58->match($t57);})($qQ, $qO, $qK);
      return $caml_call3($Js_of_ocaml_Js[5][7], $qR, $qJ, $qI);
    };
    $set_fragment = function($s) use ($caml_call1,$caml_get_public_method,$caml_jsbytes_of_string,$l,$urlencode) {
      $qG = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, -989319218, 289), $x);
      };
      $qH = $caml_jsbytes_of_string($urlencode(0, $s));
      return (function($t60, $t59, $param) {$t60->hash = $t59;return 0;})($l, $qH, $qG);
    };
    $get = function($param) use ($caml_call1,$caml_get_public_method,$l,$url_of_js_string) {
      $qF = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, -988476949, 290), $x);
      };
      return $url_of_js_string(
        (function($t61, $param) {return $t61->href;})($l, $qF)
      );
    };
    $set = function($u) use ($caml_call1,$caml_get_public_method,$caml_jsbytes_of_string,$l,$string_of_url) {
      $qD = function($x) use ($caml_call1,$caml_get_public_method) {
        return $caml_call1($caml_get_public_method($x, -988476949, 291), $x);
      };
      $qE = $caml_jsbytes_of_string($string_of_url($u));
      return (function($t63, $t62, $param) {$t63->href = $t62;return 0;})($l, $qE, $qD);
    };
    $qv = function($x) use ($caml_call1,$caml_get_public_method) {
      return $caml_call1($caml_get_public_method($x, -988476949, 292), $x);
    };
    $as_string = $urldecode_js_string_string(
      (function($t64, $param) {return $t64->href;})($l, $qv)
    );
    $Js_of_ocaml_Url = Vector{
      0,
      $urldecode,
      $urlencode,
      $default_http_port,
      $default_https_port,
      $path_of_path_string,
      $encode_arguments,
      $decode_arguments,
      $url_of_string,
      $string_of_url,
      Vector{
        0,
        $host,
        $port,
        $protocol,
        $path_string,
        $path,
        $arguments__0,
        $get_fragment,
        $set_fragment,
        $get,
        $set,
        $as_string
      }
    };
    
    $runtime["caml_register_global"](
      110,
      $Js_of_ocaml_Url,
      "Js_of_ocaml__Url"
    );

  }
}