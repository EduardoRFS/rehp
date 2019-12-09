/**
 * Pervasives
 * @providesModule Pervasives
 */
"use strict";
var CamlinternalFormatBasics = require('CamlinternalFormatBasics.js');
var Invalid_argument = require('Invalid_argument.js');
var Failure = require('Failure.js');
var Sys_error = require('Sys_error.js');
var End_of_file = require('End_of_file.js');
var runtime = require('runtime.js');

let joo_global_object = global;



var runtime = joo_global_object.jsoo_runtime;
var caml_blit_string = runtime["caml_blit_string"];
var caml_create_bytes = runtime["caml_create_bytes"];
var caml_float_of_string = runtime["caml_float_of_string"];
var caml_int64_float_of_bits = runtime["caml_int64_float_of_bits"];
var caml_int_of_string = runtime["caml_int_of_string"];
var caml_ml_bytes_length = runtime["caml_ml_bytes_length"];
var caml_ml_channel_size = runtime["caml_ml_channel_size"];
var caml_ml_channel_size_64 = runtime["caml_ml_channel_size_64"];
var caml_ml_close_channel = runtime["caml_ml_close_channel"];
var caml_ml_flush = runtime["caml_ml_flush"];
var caml_ml_input = runtime["caml_ml_input"];
var caml_ml_input_char = runtime["caml_ml_input_char"];
var caml_ml_open_descriptor_in = runtime["caml_ml_open_descriptor_in"];
var caml_ml_open_descriptor_out = runtime["caml_ml_open_descriptor_out"];
var caml_ml_output = runtime["caml_ml_output"];
var caml_ml_output_bytes = runtime["caml_ml_output_bytes"];
var caml_ml_output_char = runtime["caml_ml_output_char"];
var caml_ml_set_binary_mode = runtime["caml_ml_set_binary_mode"];
var caml_ml_set_channel_name = runtime["caml_ml_set_channel_name"];
var caml_ml_string_length = runtime["caml_ml_string_length"];
var string = runtime["caml_new_string"];
var caml_string_notequal = runtime["caml_string_notequal"];
var caml_sys_open = runtime["caml_sys_open"];
var caml_wrap_thrown_exception = runtime["caml_wrap_thrown_exception"];
var caml_wrap_thrown_exception_reraise = runtime
 ["caml_wrap_thrown_exception_reraise"];

function call1(f, a0) {
  return f.length === 1 ? f(a0) : runtime["caml_call_gen"](f, [a0]);
}

function call2(f, a0, a1) {
  return f.length === 2 ? f(a0, a1) : runtime["caml_call_gen"](f, [a0,a1]);
}

var global_data = runtime["caml_get_global_data"]();
var cst__0 = string("%,");
var cst_really_input = string("really_input");
var cst_input = string("input");
var cst_output_substring = string("output_substring");
var cst_output = string("output");
var cst_12g = string("%.12g");
var cst = string(".");
var cst_false__1 = string("false");
var cst_true__1 = string("true");
var cst_false__0 = string("false");
var cst_true__0 = string("true");
var cst_bool_of_string = string("bool_of_string");
var cst_true = string("true");
var cst_false = string("false");
var cst_char_of_int = string("char_of_int");
var cst_Pervasives_Exit = string("Pervasives.Exit");
var End_of_file = global_data["End_of_file"];
var CamlinternalFormatBasics = global_data["CamlinternalFormatBasics"];
var Sys_error = global_data["Sys_error"];
var Failure = global_data["Failure"];
var Invalid_argument = global_data["Invalid_argument"];
var l_ = [0,0,[0,6,0]];
var k_ = [0,0,[0,7,0]];
var j_ = [0,1,[0,3,[0,4,[0,6,0]]]];
var i_ = [0,1,[0,3,[0,4,[0,7,0]]]];
var g_ = [0,1];
var h_ = [0,0];
var a_ = [255,0,0,32752];
var b_ = [255,0,0,65520];
var c_ = [255,1,0,32752];
var d_ = [255,16777215,16777215,32751];
var e_ = [255,0,0,16];
var f_ = [255,0,0,15536];

function failwith(s) {throw caml_wrap_thrown_exception([0,Failure,s]);}

function invalid_arg(s) {
  throw caml_wrap_thrown_exception([0,Invalid_argument,s]);
}

var Exit = [248,cst_Pervasives_Exit,runtime["caml_fresh_oo_id"](0)];

function min(x, y) {return runtime["caml_lessequal"](x, y) ? x : y;}

function max(x, y) {return runtime["caml_greaterequal"](x, y) ? x : y;}

function abs(x) {return 0 <= x ? x : - x | 0;}

function lnot(x) {return x ^ -1;}

var infinity = caml_int64_float_of_bits(a_);
var neg_infinity = caml_int64_float_of_bits(b_);
var nan = caml_int64_float_of_bits(c_);
var max_float = caml_int64_float_of_bits(d_);
var min_float = caml_int64_float_of_bits(e_);
var epsilon_float = caml_int64_float_of_bits(f_);
var max_int = 2147483647;
var min_int = -2147483648;

function symbol(s1, s2) {
  var l1 = caml_ml_string_length(s1);
  var l2 = caml_ml_string_length(s2);
  var s = caml_create_bytes(l1 + l2 | 0);
  caml_blit_string(s1, 0, s, 0, l1);
  caml_blit_string(s2, 0, s, l1, l2);
  return s;
}

function char_of_int(n) {
  if (0 <= n) {if (! (255 < n)) {return n;}}
  return invalid_arg(cst_char_of_int);
}

function string_of_bool(b) {return b ? cst_true : cst_false;}

function bool_of_string(param) {
  return caml_string_notequal(param, cst_false__0) ?
    caml_string_notequal(param, cst_true__0) ?
     invalid_arg(cst_bool_of_string) :
     1 :
    0;
}

function bool_of_string_opt(param) {
  return caml_string_notequal(param, cst_false__1) ?
    caml_string_notequal(param, cst_true__1) ? 0 : g_ :
    h_;
}

function string_of_int(n) {return string("" + n);}

function int_of_string_opt(s) {
  try {var ay_ = [0,caml_int_of_string(s)];return ay_;}
  catch(az_) {
    az_ = runtime["caml_wrap_exception"](az_);
    if (az_[1] === Failure) {return 0;}
    throw caml_wrap_thrown_exception_reraise(az_);
  }
}

function valid_float_lexem(s) {
  var l = caml_ml_string_length(s);
  function loop(i) {
    var i__0 = i;
    for (; ; ) {
      if (l <= i__0) {return symbol(s, cst);}
      var match = runtime["caml_string_get"](s, i__0);
      var switch__0 = 48 <= match ? 58 <= match ? 0 : 1 : 45 === match ? 1 : 0;
      if (switch__0) {var i__1 = i__0 + 1 | 0;var i__0 = i__1;continue;}
      return s;
    }
  }
  return loop(0);
}

function string_of_float(f) {
  return valid_float_lexem(runtime["caml_format_float"](cst_12g, f));
}

function float_of_string_opt(s) {
  try {var aw_ = [0,caml_float_of_string(s)];return aw_;}
  catch(ax_) {
    ax_ = runtime["caml_wrap_exception"](ax_);
    if (ax_[1] === Failure) {return 0;}
    throw caml_wrap_thrown_exception_reraise(ax_);
  }
}

function symbol__0(l1, l2) {
  if (l1) {var tl = l1[2];var hd = l1[1];return [0,hd,symbol__0(tl, l2)];}
  return l2;
}

var stdin = caml_ml_open_descriptor_in(0);
var stdout = caml_ml_open_descriptor_out(1);
var stderr = caml_ml_open_descriptor_out(2);

function open_out_gen(mode, perm, name) {
  var c = caml_ml_open_descriptor_out(caml_sys_open(name, mode, perm));
  caml_ml_set_channel_name(c, name);
  return c;
}

function open_out(name) {return open_out_gen(i_, 438, name);}

function open_out_bin(name) {return open_out_gen(j_, 438, name);}

function flush_all(param) {
  function iter(param) {
    var param__0 = param;
    for (; ; ) {
      if (param__0) {
        var l = param__0[2];
        var a = param__0[1];
        try {caml_ml_flush(a);}
        catch(av_) {
          av_ = runtime["caml_wrap_exception"](av_);
          if (av_[1] !== Sys_error) {
            throw caml_wrap_thrown_exception_reraise(av_);
          }
        }
        var param__0 = l;
        continue;
      }
      return 0;
    }
  }
  return iter(runtime["caml_ml_out_channels_list"](0));
}

function output_bytes(oc, s) {
  return caml_ml_output_bytes(oc, s, 0, caml_ml_bytes_length(s));
}

function output_string(oc, s) {
  return caml_ml_output(oc, s, 0, caml_ml_string_length(s));
}

function output(oc, s, ofs, len) {
  if (0 <= ofs) {
    if (0 <= len) {
      if (! ((caml_ml_bytes_length(s) - len | 0) < ofs)) {return caml_ml_output_bytes(oc, s, ofs, len);}
    }
  }
  return invalid_arg(cst_output);
}

function output_substring(oc, s, ofs, len) {
  if (0 <= ofs) {
    if (0 <= len) {
      if (! ((caml_ml_string_length(s) - len | 0) < ofs)) {return caml_ml_output(oc, s, ofs, len);}
    }
  }
  return invalid_arg(cst_output_substring);
}

function output_value(chan, v) {
  return runtime["caml_output_value"](chan, v, 0);
}

function close_out(oc) {caml_ml_flush(oc);return caml_ml_close_channel(oc);}

function close_out_noerr(oc) {
  try {caml_ml_flush(oc);}catch(au_) {}
  try {var as_ = caml_ml_close_channel(oc);return as_;}catch(at_) {return 0;}
}

function open_in_gen(mode, perm, name) {
  var c = caml_ml_open_descriptor_in(caml_sys_open(name, mode, perm));
  caml_ml_set_channel_name(c, name);
  return c;
}

function open_in(name) {return open_in_gen(k_, 0, name);}

function open_in_bin(name) {return open_in_gen(l_, 0, name);}

function input(ic, s, ofs, len) {
  if (0 <= ofs) {
    if (0 <= len) {
      if (! ((caml_ml_bytes_length(s) - len | 0) < ofs)) {return caml_ml_input(ic, s, ofs, len);}
    }
  }
  return invalid_arg(cst_input);
}

function unsafe_really_input(ic, s, ofs, len) {
  var ofs__0 = ofs;
  var len__0 = len;
  for (; ; ) {
    if (0 < len__0) {
      var r = caml_ml_input(ic, s, ofs__0, len__0);
      if (0 === r) {throw caml_wrap_thrown_exception(End_of_file);}
      var len__1 = len__0 - r | 0;
      var ofs__1 = ofs__0 + r | 0;
      var ofs__0 = ofs__1;
      var len__0 = len__1;
      continue;
    }
    return 0;
  }
}

function really_input(ic, s, ofs, len) {
  if (0 <= ofs) {
    if (0 <= len) {
      if (! ((caml_ml_bytes_length(s) - len | 0) < ofs)) {return unsafe_really_input(ic, s, ofs, len);}
    }
  }
  return invalid_arg(cst_really_input);
}

function really_input_string(ic, len) {
  var s = caml_create_bytes(len);
  really_input(ic, s, 0, len);
  return s;
}

function input_line(chan) {
  function build_result(buf, pos, param) {
    var pos__0 = pos;
    var param__0 = param;
    for (; ; ) {
      if (param__0) {
        var param__1 = param__0[2];
        var hd = param__0[1];
        var len = caml_ml_bytes_length(hd);
        runtime["caml_blit_bytes"](hd, 0, buf, pos__0 - len | 0, len);
        var pos__1 = pos__0 - len | 0;
        var pos__0 = pos__1;
        var param__0 = param__1;
        continue;
      }
      return buf;
    }
  }
  function scan(accu, len) {
    var accu__0 = accu;
    var len__0 = len;
    for (; ; ) {
      var n = runtime["caml_ml_input_scan_line"](chan);
      if (0 === n) {
        if (accu__0) {
          return build_result(caml_create_bytes(len__0), len__0, accu__0);
        }
        throw caml_wrap_thrown_exception(End_of_file);
      }
      if (0 < n) {
        var res = caml_create_bytes(n + -1 | 0);
        caml_ml_input(chan, res, 0, n + -1 | 0);
        caml_ml_input_char(chan);
        if (accu__0) {
          var len__1 = (len__0 + n | 0) + -1 | 0;
          return build_result(
            caml_create_bytes(len__1),
            len__1,
            [0,res,accu__0]
          );
        }
        return res;
      }
      var beg = caml_create_bytes(- n | 0);
      caml_ml_input(chan, beg, 0, - n | 0);
      var len__2 = len__0 - n | 0;
      var accu__1 = [0,beg,accu__0];
      var accu__0 = accu__1;
      var len__0 = len__2;
      continue;
    }
  }
  return scan(0, 0);
}

function close_in_noerr(ic) {
  try {var aq_ = caml_ml_close_channel(ic);return aq_;}catch(ar_) {return 0;}
}

function print_char(c) {return caml_ml_output_char(stdout, c);}

function print_string(s) {return output_string(stdout, s);}

function print_bytes(s) {return output_bytes(stdout, s);}

function print_int(i) {return output_string(stdout, string_of_int(i));}

function print_float(f) {return output_string(stdout, string_of_float(f));}

function print_endline(s) {
  output_string(stdout, s);
  caml_ml_output_char(stdout, 10);
  return caml_ml_flush(stdout);
}

function print_newline(param) {
  caml_ml_output_char(stdout, 10);
  return caml_ml_flush(stdout);
}

function prerr_char(c) {return caml_ml_output_char(stderr, c);}

function prerr_string(s) {return output_string(stderr, s);}

function prerr_bytes(s) {return output_bytes(stderr, s);}

function prerr_int(i) {return output_string(stderr, string_of_int(i));}

function prerr_float(f) {return output_string(stderr, string_of_float(f));}

function prerr_endline(s) {
  output_string(stderr, s);
  caml_ml_output_char(stderr, 10);
  return caml_ml_flush(stderr);
}

function prerr_newline(param) {
  caml_ml_output_char(stderr, 10);
  return caml_ml_flush(stderr);
}

function read_line(param) {caml_ml_flush(stdout);return input_line(stdin);}

function read_int(param) {return caml_int_of_string(read_line(0));}

function read_int_opt(param) {return int_of_string_opt(read_line(0));}

function read_float(param) {return caml_float_of_string(read_line(0));}

function read_float_opt(param) {return float_of_string_opt(read_line(0));}

function string_of_format(param) {var str = param[2];return str;}

function symbol__1(param, ao_) {
  var str2 = ao_[2];
  var fmt2 = ao_[1];
  var str1 = param[2];
  var fmt1 = param[1];
  var ap_ = symbol(str1, symbol(cst__0, str2));
  return [0,call2(CamlinternalFormatBasics[3], fmt1, fmt2),ap_];
}

var exit_function = [0,flush_all];

function at_exit(f) {
  var g = exit_function[1];
  exit_function[1] = function(param) {call1(f, 0);return call1(g, 0);};
  return 0;
}

function do_at_exit(param) {return call1(exit_function[1], 0);}

function exit(retcode) {
  do_at_exit(0);
  return runtime["caml_sys_exit"](retcode);
}

function m_(an_) {return caml_ml_channel_size_64(an_);}

function n_(am_) {return runtime["caml_ml_pos_in_64"](am_);}

function o_(al_, ak_) {return runtime["caml_ml_seek_in_64"](al_, ak_);}

function p_(aj_) {return caml_ml_channel_size_64(aj_);}

function q_(ai_) {return runtime["caml_ml_pos_out_64"](ai_);}

var r_ = [
  0,
  function(ah_, ag_) {return runtime["caml_ml_seek_out_64"](ah_, ag_);},
  q_,
  p_,
  o_,
  n_,
  m_
];

function s_(af_, ae_) {return caml_ml_set_binary_mode(af_, ae_);}

function t_(ad_) {return caml_ml_close_channel(ad_);}

function u_(ac_) {return caml_ml_channel_size(ac_);}

function v_(ab_) {return runtime["caml_ml_pos_in"](ab_);}

function w_(aa_, Z_) {return runtime["caml_ml_seek_in"](aa_, Z_);}

function x_(Y_) {return runtime["caml_input_value"](Y_);}

function y_(X_) {return runtime["caml_ml_input_int"](X_);}

function z_(W_) {return caml_ml_input_char(W_);}

function A_(V_) {return caml_ml_input_char(V_);}

function B_(U_, T_) {return caml_ml_set_binary_mode(U_, T_);}

function C_(S_) {return caml_ml_channel_size(S_);}

function D_(R_) {return runtime["caml_ml_pos_out"](R_);}

function E_(Q_, P_) {return runtime["caml_ml_seek_out"](Q_, P_);}

function F_(O_, N_) {return runtime["caml_ml_output_int"](O_, N_);}

function G_(M_, L_) {return caml_ml_output_char(M_, L_);}

function H_(K_, J_) {return caml_ml_output_char(K_, J_);}

var Pervasives = [
  0,
  invalid_arg,
  failwith,
  Exit,
  min,
  max,
  abs,
  max_int,
  min_int,
  lnot,
  infinity,
  neg_infinity,
  nan,
  max_float,
  min_float,
  epsilon_float,
  symbol,
  char_of_int,
  string_of_bool,
  bool_of_string,
  bool_of_string_opt,
  string_of_int,
  int_of_string_opt,
  string_of_float,
  float_of_string_opt,
  symbol__0,
  stdin,
  stdout,
  stderr,
  print_char,
  print_string,
  print_bytes,
  print_int,
  print_float,
  print_endline,
  print_newline,
  prerr_char,
  prerr_string,
  prerr_bytes,
  prerr_int,
  prerr_float,
  prerr_endline,
  prerr_newline,
  read_line,
  read_int,
  read_int_opt,
  read_float,
  read_float_opt,
  open_out,
  open_out_bin,
  open_out_gen,
  function(I_) {return caml_ml_flush(I_);},
  flush_all,
  H_,
  output_string,
  output_bytes,
  output,
  output_substring,
  G_,
  F_,
  output_value,
  E_,
  D_,
  C_,
  close_out,
  close_out_noerr,
  B_,
  open_in,
  open_in_bin,
  open_in_gen,
  A_,
  input_line,
  input,
  really_input,
  really_input_string,
  z_,
  y_,
  x_,
  w_,
  v_,
  u_,
  t_,
  close_in_noerr,
  s_,
  r_,
  string_of_format,
  symbol__1,
  exit,
  at_exit,
  valid_float_lexem,
  unsafe_really_input,
  do_at_exit
];

runtime["caml_register_global"](37, Pervasives, "Pervasives");


module.exports = global.jsoo_runtime.caml_get_global_data().Pervasives;
/* Hashing disabled */
