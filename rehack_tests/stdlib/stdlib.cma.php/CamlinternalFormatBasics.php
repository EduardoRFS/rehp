<?hh
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * CamlinternalFormatBasics.php
 */

namespace Rehack;

final class CamlinternalFormatBasics {
  <<__Memoize>>
  public static function get() {
    $global_object = \Rehack\GlobalObject::get();
    $runtime = \Rehack\Runtime::get();
    /*
     * Soon, these will replace the `global_data->ModuleName`
     * pattern in the load() function.
     */

    CamlinternalFormatBasics::load($global_object);
    $memoized = $runtime->caml_get_global_data()->CamlinternalFormatBasics;
    return $memoized;
  }

  /**
   * Performs module load operation. May have side effects.
   */
  private static function load($joo_global_object) {
    

    $concat_fmt = new Ref();$concat_fmtty = new Ref();$erase_rel = new Ref();
    $runtime = $joo_global_object->jsoo_runtime;$is_int = $runtime->is_int;
    $_ = $erase_rel->contents =
      function($param) use ($erase_rel,$is_int) {
        if ($is_int($param)) {return 0;}
        else {
          switch($param[0]) {
            case 0:
              $rest = $param[1];
              return V(0, $erase_rel->contents($rest));
            case 1:
              $rest__0 = $param[1];
              return V(1, $erase_rel->contents($rest__0));
            case 2:
              $rest__1 = $param[1];
              return V(2, $erase_rel->contents($rest__1));
            case 3:
              $rest__2 = $param[1];
              return V(3, $erase_rel->contents($rest__2));
            case 4:
              $rest__3 = $param[1];
              return V(4, $erase_rel->contents($rest__3));
            case 5:
              $rest__4 = $param[1];
              return V(5, $erase_rel->contents($rest__4));
            case 6:
              $rest__5 = $param[1];
              return V(6, $erase_rel->contents($rest__5));
            case 7:
              $rest__6 = $param[1];
              return V(7, $erase_rel->contents($rest__6));
            case 8:
              $rest__7 = $param[2];
              $ty = $param[1];
              return V(8, $ty, $erase_rel->contents($rest__7));
            case 9:
              $rest__8 = $param[3];
              $ty1 = $param[1];
              return V(9, $ty1, $ty1, $erase_rel->contents($rest__8));
            case 10:
              $rest__9 = $param[1];
              return V(10, $erase_rel->contents($rest__9));
            case 11:
              $rest__10 = $param[1];
              return V(11, $erase_rel->contents($rest__10));
            case 12:
              $rest__11 = $param[1];
              return V(12, $erase_rel->contents($rest__11));
            case 13:
              $rest__12 = $param[1];
              return V(13, $erase_rel->contents($rest__12));
            default:
              $rest__13 = $param[1];
              return V(14, $erase_rel->contents($rest__13));
            }
        }
      };
    $_ = $concat_fmtty->contents =
      function($fmtty1, $fmtty2) use ($concat_fmtty,$is_int) {
        if ($is_int($fmtty1)) {return $fmtty2;}
        else {
          switch($fmtty1[0]) {
            case 0:
              $rest = $fmtty1[1];
              return V(0, $concat_fmtty->contents($rest, $fmtty2));
            case 1:
              $rest__0 = $fmtty1[1];
              return V(1, $concat_fmtty->contents($rest__0, $fmtty2));
            case 2:
              $rest__1 = $fmtty1[1];
              return V(2, $concat_fmtty->contents($rest__1, $fmtty2));
            case 3:
              $rest__2 = $fmtty1[1];
              return V(3, $concat_fmtty->contents($rest__2, $fmtty2));
            case 4:
              $rest__3 = $fmtty1[1];
              return V(4, $concat_fmtty->contents($rest__3, $fmtty2));
            case 5:
              $rest__4 = $fmtty1[1];
              return V(5, $concat_fmtty->contents($rest__4, $fmtty2));
            case 6:
              $rest__5 = $fmtty1[1];
              return V(6, $concat_fmtty->contents($rest__5, $fmtty2));
            case 7:
              $rest__6 = $fmtty1[1];
              return V(7, $concat_fmtty->contents($rest__6, $fmtty2));
            case 8:
              $rest__7 = $fmtty1[2];
              $ty = $fmtty1[1];
              return V(8, $ty, $concat_fmtty->contents($rest__7, $fmtty2));
            case 9:
              $rest__8 = $fmtty1[3];
              $ty2 = $fmtty1[2];
              $ty1 = $fmtty1[1];
              return V(
                9,
                $ty1,
                $ty2,
                $concat_fmtty->contents($rest__8, $fmtty2)
              );
            case 10:
              $rest__9 = $fmtty1[1];
              return V(10, $concat_fmtty->contents($rest__9, $fmtty2));
            case 11:
              $rest__10 = $fmtty1[1];
              return V(11, $concat_fmtty->contents($rest__10, $fmtty2));
            case 12:
              $rest__11 = $fmtty1[1];
              return V(12, $concat_fmtty->contents($rest__11, $fmtty2));
            case 13:
              $rest__12 = $fmtty1[1];
              return V(13, $concat_fmtty->contents($rest__12, $fmtty2));
            default:
              $rest__13 = $fmtty1[1];
              return V(14, $concat_fmtty->contents($rest__13, $fmtty2));
            }
        }
      };
    $_ = $concat_fmt->contents =
      function($fmt1, $fmt2) use ($concat_fmt,$is_int) {
        if ($is_int($fmt1)) {return $fmt2;}
        else {
          switch($fmt1[0]) {
            case 0:
              $rest = $fmt1[1];
              return V(0, $concat_fmt->contents($rest, $fmt2));
            case 1:
              $rest__0 = $fmt1[1];
              return V(1, $concat_fmt->contents($rest__0, $fmt2));
            case 2:
              $rest__1 = $fmt1[2];
              $pad = $fmt1[1];
              return V(2, $pad, $concat_fmt->contents($rest__1, $fmt2));
            case 3:
              $rest__2 = $fmt1[2];
              $pad__0 = $fmt1[1];
              return V(3, $pad__0, $concat_fmt->contents($rest__2, $fmt2));
            case 4:
              $rest__3 = $fmt1[4];
              $prec = $fmt1[3];
              $pad__1 = $fmt1[2];
              $iconv = $fmt1[1];
              return V(
                4,
                $iconv,
                $pad__1,
                $prec,
                $concat_fmt->contents($rest__3, $fmt2)
              );
            case 5:
              $rest__4 = $fmt1[4];
              $prec__0 = $fmt1[3];
              $pad__2 = $fmt1[2];
              $iconv__0 = $fmt1[1];
              return V(
                5,
                $iconv__0,
                $pad__2,
                $prec__0,
                $concat_fmt->contents($rest__4, $fmt2)
              );
            case 6:
              $rest__5 = $fmt1[4];
              $prec__1 = $fmt1[3];
              $pad__3 = $fmt1[2];
              $iconv__1 = $fmt1[1];
              return V(
                6,
                $iconv__1,
                $pad__3,
                $prec__1,
                $concat_fmt->contents($rest__5, $fmt2)
              );
            case 7:
              $rest__6 = $fmt1[4];
              $prec__2 = $fmt1[3];
              $pad__4 = $fmt1[2];
              $iconv__2 = $fmt1[1];
              return V(
                7,
                $iconv__2,
                $pad__4,
                $prec__2,
                $concat_fmt->contents($rest__6, $fmt2)
              );
            case 8:
              $rest__7 = $fmt1[4];
              $prec__3 = $fmt1[3];
              $pad__5 = $fmt1[2];
              $fconv = $fmt1[1];
              return V(
                8,
                $fconv,
                $pad__5,
                $prec__3,
                $concat_fmt->contents($rest__7, $fmt2)
              );
            case 9:
              $rest__8 = $fmt1[2];
              $pad__6 = $fmt1[1];
              return V(9, $pad__6, $concat_fmt->contents($rest__8, $fmt2));
            case 10:
              $rest__9 = $fmt1[1];
              return V(10, $concat_fmt->contents($rest__9, $fmt2));
            case 11:
              $rest__10 = $fmt1[2];
              $str = $fmt1[1];
              return V(11, $str, $concat_fmt->contents($rest__10, $fmt2));
            case 12:
              $rest__11 = $fmt1[2];
              $chr = $fmt1[1];
              return V(12, $chr, $concat_fmt->contents($rest__11, $fmt2));
            case 13:
              $rest__12 = $fmt1[3];
              $fmtty = $fmt1[2];
              $pad__7 = $fmt1[1];
              return V(
                13,
                $pad__7,
                $fmtty,
                $concat_fmt->contents($rest__12, $fmt2)
              );
            case 14:
              $rest__13 = $fmt1[3];
              $fmtty__0 = $fmt1[2];
              $pad__8 = $fmt1[1];
              return V(
                14,
                $pad__8,
                $fmtty__0,
                $concat_fmt->contents($rest__13, $fmt2)
              );
            case 15:
              $rest__14 = $fmt1[1];
              return V(15, $concat_fmt->contents($rest__14, $fmt2));
            case 16:
              $rest__15 = $fmt1[1];
              return V(16, $concat_fmt->contents($rest__15, $fmt2));
            case 17:
              $rest__16 = $fmt1[2];
              $fmting_lit = $fmt1[1];
              return V(
                17,
                $fmting_lit,
                $concat_fmt->contents($rest__16, $fmt2)
              );
            case 18:
              $rest__17 = $fmt1[2];
              $fmting_gen = $fmt1[1];
              return V(
                18,
                $fmting_gen,
                $concat_fmt->contents($rest__17, $fmt2)
              );
            case 19:
              $rest__18 = $fmt1[1];
              return V(19, $concat_fmt->contents($rest__18, $fmt2));
            case 20:
              $rest__19 = $fmt1[3];
              $char_set = $fmt1[2];
              $width_opt = $fmt1[1];
              return V(
                20,
                $width_opt,
                $char_set,
                $concat_fmt->contents($rest__19, $fmt2)
              );
            case 21:
              $rest__20 = $fmt1[2];
              $counter = $fmt1[1];
              return V(21, $counter, $concat_fmt->contents($rest__20, $fmt2));
            case 22:
              $rest__21 = $fmt1[1];
              return V(22, $concat_fmt->contents($rest__21, $fmt2));
            case 23:
              $rest__22 = $fmt1[2];
              $ign = $fmt1[1];
              return V(23, $ign, $concat_fmt->contents($rest__22, $fmt2));
            default:
              $rest__23 = $fmt1[3];
              $f = $fmt1[2];
              $arity = $fmt1[1];
              return V(24, $arity, $f, $concat_fmt->contents($rest__23, $fmt2)
              );
            }
        }
      };
    $CamlinternalFormatBasics = V(
      0,
      $concat_fmtty->contents,
      $erase_rel->contents,
      $concat_fmt->contents
    );
    
    $runtime->caml_register_global(
      0,
      $CamlinternalFormatBasics,
      "CamlinternalFormatBasics"
    );

  }
}