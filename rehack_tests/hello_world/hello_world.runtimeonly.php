<?hh
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * Runtime.php
 */

namespace Rehack;

final class Runtime {
  <<__Memoize>>
  public static function get() {
    $global_object = \Rehack\GlobalObject::get();
    $runtime = \Rehack\Runtime::get();
    /*
     * Soon, these will replace the `global_data->ModuleName`
     * pattern in the load() function.
     */

    Runtime::load($global_object);
    $memoized = $runtime->caml_get_global_data()->Runtime;
    return $memoized;
  }

  /**
   * Performs module load operation. May have side effects.
   */
  private static function load($joo_global_object) {
    

    $joo_global_object->jsoo_runtime =
      $ObjectLiteral(
        darray[
         "caml_ephe_check_data"=>$caml_ephe_check_data,
         "caml_ephe_unset_data"=>$caml_ephe_unset_data,
         "caml_ephe_set_data"=>$caml_ephe_set_data,
         "caml_ephe_get_data_copy"=>$caml_ephe_get_data_copy,
         "caml_ephe_get_data"=>$caml_ephe_get_data,
         "caml_ephe_blit_data"=>$caml_ephe_blit_data,
         "caml_ephe_unset_key"=>$caml_ephe_unset_key,
         "caml_ephe_set_key"=>$caml_ephe_set_key,
         "caml_ephe_check_key"=>$caml_ephe_check_key,
         "caml_ephe_get_key_copy"=>$caml_ephe_get_key_copy,
         "caml_ephe_get_key"=>$caml_ephe_get_key,
         "caml_ephe_blit_key"=>$caml_ephe_blit_key,
         "caml_ephe_create"=>$caml_ephe_create,
         "caml_weak_blit"=>$caml_weak_blit,
         "caml_weak_check"=>$caml_weak_check,
         "caml_weak_get_copy"=>$caml_weak_get_copy,
         "caml_weak_get"=>$caml_weak_get,
         "caml_weak_set"=>$caml_weak_set,
         "caml_weak_create"=>$caml_weak_create,
         "caml_ephe_data_offset"=>$caml_ephe_data_offset,
         "caml_ephe_key_offset"=>$caml_ephe_key_offset,
         "caml_hash_mix_bigstring"=>$caml_hash_mix_bigstring,
         "bigstring_of_array_buffer"=>$bigstring_of_array_buffer,
         "bigstring_to_array_buffer"=>$bigstring_to_array_buffer,
         "bigstring_find"=>$bigstring_find,
         "bigstring_memcmp_stub"=>$bigstring_memcmp_stub,
         "bigstring_blit_stub"=>$bigstring_blit_stub,
         "caml_blit_string_to_bigstring"=>$caml_blit_string_to_bigstring,
         "bigstring_blit_bytes_bigstring_stub"=>
         $bigstring_blit_bytes_bigstring_stub,
         "bigstring_blit_string_bigstring_stub"=>
         $bigstring_blit_string_bigstring_stub,
         "caml_blit_bigstring_to_string"=>$caml_blit_bigstring_to_string,
         "bigstring_blit_bigstring_string_stub"=>
         $bigstring_blit_bigstring_string_stub,
         "bigstring_blit_bigstring_bytes_stub"=>
         $bigstring_blit_bigstring_bytes_stub,
         "bigstring_destroy_stub"=>$bigstring_destroy_stub,
         "bigstring_alloc"=>$bigstring_alloc,
         "caml_json"=>$caml_json,
         "JSON"=>$JSON,
         "caml_gc_get"=>$caml_gc_get,
         "caml_gc_set"=>$caml_gc_set,
         "caml_gc_stat"=>$caml_gc_stat,
         "caml_gc_quick_stat"=>$caml_gc_quick_stat,
         "caml_gc_counters"=>$caml_gc_counters,
         "caml_gc_compaction"=>$caml_gc_compaction,
         "caml_gc_full_major"=>$caml_gc_full_major,
         "caml_gc_major"=>$caml_gc_major,
         "caml_gc_minor"=>$caml_gc_minor,
         "caml_CamlinternalMod_update_mod"=>$caml_CamlinternalMod_update_mod,
         "caml_CamlinternalMod_init_mod"=>$caml_CamlinternalMod_init_mod,
         "caml_js_export_var"=>$caml_js_export_var,
         "caml_js_object"=>$caml_js_object,
         "caml_pure_js_expr"=>$caml_pure_js_expr,
         "caml_js_raw_expr"=>$caml_js_raw_expr,
         "caml_js_expr"=>$caml_js_expr,
         "caml_js_eval_string"=>$caml_js_eval_string,
         "caml_js_to_byte_string"=>$caml_js_to_byte_string,
         "caml_js_equals"=>$caml_js_equals,
         "caml_js_wrap_meth_callback_unsafe"=>
         $caml_js_wrap_meth_callback_unsafe,
         "caml_js_wrap_meth_callback_strict"=>
         $caml_js_wrap_meth_callback_strict,
         "caml_js_wrap_meth_callback_arguments"=>
         $caml_js_wrap_meth_callback_arguments,
         "caml_js_wrap_meth_callback"=>$caml_js_wrap_meth_callback,
         "caml_js_wrap_callback_strict"=>$caml_js_wrap_callback_strict,
         "caml_js_wrap_callback_arguments"=>$caml_js_wrap_callback_arguments,
         "caml_js_wrap_callback"=>$caml_js_wrap_callback,
         "caml_ojs_new_arr"=>$caml_ojs_new_arr,
         "caml_js_new"=>$caml_js_new,
         "caml_js_meth_call3"=>$caml_js_meth_call3,
         "caml_js_meth_call2"=>$caml_js_meth_call2,
         "caml_js_meth_call1"=>$caml_js_meth_call1,
         "caml_js_meth_call0"=>$caml_js_meth_call0,
         "caml_js_meth_call"=>$caml_js_meth_call,
         "caml_js_fun_call4"=>$caml_js_fun_call4,
         "caml_js_fun_call3"=>$caml_js_fun_call3,
         "caml_js_fun_call2"=>$caml_js_fun_call2,
         "caml_js_fun_call1"=>$caml_js_fun_call1,
         "caml_js_fun_call0"=>$caml_js_fun_call0,
         "caml_js_fun_call"=>$caml_js_fun_call,
         "caml_js_call"=>$caml_js_call,
         "caml_js_var"=>$caml_js_var,
         "caml_js_to_array"=>$caml_js_to_array,
         "caml_js_from_array"=>$caml_js_from_array,
         "caml_js_from_string"=>$caml_js_from_string,
         "caml_js_to_float"=>$caml_js_to_float,
         "caml_js_from_float"=>$caml_js_from_float,
         "caml_js_to_bool"=>$caml_js_to_bool,
         "caml_js_from_bool"=>$caml_js_from_bool,
         "js_print_stderr"=>$js_print_stderr,
         "js_print_stdout"=>$js_print_stdout,
         "caml_trampoline_return"=>$caml_trampoline_return,
         "caml_trampoline"=>$caml_trampoline,
         "caml_js_get_console"=>$caml_js_get_console,
         "caml_js_html_entities"=>$caml_js_html_entities,
         "caml_js_html_escape"=>$caml_js_html_escape,
         "caml_js_on_ie"=>$caml_js_on_ie,
         "caml_js_typeof"=>$caml_js_typeof,
         "caml_js_instanceof"=>$caml_js_instanceof,
         "caml_js_set"=>$caml_js_set,
         "caml_js_property_set"=>$caml_js_property_set,
         "caml_js_dict_set"=>$caml_js_dict_set,
         "caml_js_get"=>$caml_js_get,
         "caml_js_property_get"=>$caml_js_property_get,
         "caml_js_dict_get"=>$caml_js_dict_get,
         "caml_js_delete"=>$caml_js_delete,
         "caml_js_pure_expr"=>$caml_js_pure_expr,
         "MlNodeFile"=>$MlNodeFile,
         "MlNodeDevice"=>$MlNodeDevice,
         "fs_node_supported"=>$fs_node_supported,
         "MlFakeFile"=>$MlFakeFile,
         "MlFakeDevice"=>$MlFakeDevice,
         "caml_read_file_content"=>$caml_read_file_content,
         "caml_create_file"=>$caml_create_file,
         "caml_fs_init"=>$caml_fs_init,
         "caml_create_file_extern"=>$caml_create_file_extern,
         "caml_ba_map_file_bytecode"=>$caml_ba_map_file_bytecode,
         "caml_ba_map_file"=>$caml_ba_map_file,
         "caml_sys_rename"=>$caml_sys_rename,
         "caml_sys_is_directory"=>$caml_sys_is_directory,
         "caml_sys_remove"=>$caml_sys_remove,
         "caml_sys_read_directory"=>$caml_sys_read_directory,
         "caml_sys_file_exists"=>$caml_sys_file_exists,
         "caml_raise_not_a_dir"=>$caml_raise_not_a_dir,
         "caml_raise_no_such_file"=>$caml_raise_no_such_file,
         "caml_sys_chdir"=>$caml_sys_chdir,
         "caml_sys_getcwd"=>$caml_sys_getcwd,
         "caml_unmount"=>$caml_unmount,
         "caml_mount_autoload"=>$caml_mount_autoload,
         "resolve_fs_device"=>$resolve_fs_device,
         "caml_list_mount_point"=>$caml_list_mount_point,
         "jsoo_mount_point"=>$jsoo_mount_point,
         "caml_make_path"=>$caml_make_path,
         "MlFile"=>$MlFile,
         "caml_root"=>$caml_root,
         "caml_current_dir"=>$caml_current_dir,
         "caml_ml_output_int"=>$caml_ml_output_int,
         "caml_ml_pos_out_64"=>$caml_ml_pos_out_64,
         "caml_ml_pos_out"=>$caml_ml_pos_out,
         "caml_ml_seek_out_64"=>$caml_ml_seek_out_64,
         "caml_ml_seek_out"=>$caml_ml_seek_out,
         "caml_output_value"=>$caml_output_value,
         "caml_ml_output_char"=>$caml_ml_output_char,
         "caml_ml_output"=>$caml_ml_output,
         "caml_ml_output_bytes"=>$caml_ml_output_bytes,
         "caml_ml_flush"=>$caml_ml_flush,
         "caml_ml_input_scan_line"=>$caml_ml_input_scan_line,
         "caml_ml_pos_in_64"=>$caml_ml_pos_in_64,
         "caml_ml_pos_in"=>$caml_ml_pos_in,
         "caml_ml_seek_in_64"=>$caml_ml_seek_in_64,
         "caml_ml_seek_in"=>$caml_ml_seek_in,
         "caml_ml_input_int"=>$caml_ml_input_int,
         "caml_ml_input_char"=>$caml_ml_input_char,
         "caml_input_value"=>$caml_input_value,
         "caml_ml_input"=>$caml_ml_input,
         "caml_ml_may_refill_input"=>$caml_ml_may_refill_input,
         "caml_ml_refill_input"=>$caml_ml_refill_input,
         "caml_ml_set_channel_refill"=>$caml_ml_set_channel_refill,
         "caml_ml_set_channel_output"=>$caml_ml_set_channel_output,
         "caml_ml_channel_size_64"=>$caml_ml_channel_size_64,
         "caml_ml_channel_size"=>$caml_ml_channel_size,
         "caml_ml_close_channel"=>$caml_ml_close_channel,
         "caml_ml_set_binary_mode"=>$caml_ml_set_binary_mode,
         "caml_ml_open_descriptor_in"=>$caml_ml_open_descriptor_in,
         "caml_ml_open_descriptor_out"=>$caml_ml_open_descriptor_out,
         "caml_ml_out_channels_list"=>$caml_ml_out_channels_list,
         "caml_ml_channels"=>$caml_ml_channels,
         "caml_ml_set_channel_name"=>$caml_ml_set_channel_name,
         "caml_sys_open"=>$caml_sys_open,
         "caml_std_output"=>$caml_std_output,
         "caml_sys_close"=>$caml_sys_close,
         "polymorphic_log"=>$polymorphic_log,
         "caml_is_js"=>$caml_is_js,
         "caml_spacetime_only_works_for_native_code"=>
         $caml_spacetime_only_works_for_native_code,
         "caml_register_channel_for_spacetime"=>
         $caml_register_channel_for_spacetime,
         "caml_spacetime_enabled"=>$caml_spacetime_enabled,
         "caml_sys_isatty"=>$caml_sys_isatty,
         "caml_runtime_parameters"=>$caml_runtime_parameters,
         "caml_runtime_variant"=>$caml_runtime_variant,
         "caml_ml_runtime_warnings_enabled"=>$caml_ml_runtime_warnings_enabled,
         "caml_ml_enable_runtime_warnings"=>$caml_ml_enable_runtime_warnings,
         "caml_runtime_warnings"=>$caml_runtime_warnings,
         "caml_list_of_js_array"=>$caml_list_of_js_array,
         "caml_int64_bswap"=>$caml_int64_bswap,
         "caml_int32_bswap"=>$caml_int32_bswap,
         "caml_bswap16"=>$caml_bswap16,
         "caml_convert_raw_backtrace_slot"=>$caml_convert_raw_backtrace_slot,
         "caml_install_signal_handler"=>$caml_install_signal_handler,
         "caml_fresh_oo_id"=>$caml_fresh_oo_id,
         "caml_set_oo_id"=>$caml_set_oo_id,
         "caml_oo_last_id"=>$caml_oo_last_id,
         "unix_inet_addr_of_string"=>$unix_inet_addr_of_string,
         "caml_sys_get_argv"=>$caml_sys_get_argv,
         "caml_sys_exit"=>$caml_sys_exit,
         "caml_sys_getenv"=>$caml_sys_getenv,
         "caml_set_static_env"=>$caml_set_static_env,
         "caml_get_current_callstack"=>$caml_get_current_callstack,
         "caml_restore_raw_backtrace"=>$caml_restore_raw_backtrace,
         "caml_raw_backtrace_slot"=>$caml_raw_backtrace_slot,
         "caml_raw_backtrace_next_slot"=>$caml_raw_backtrace_next_slot,
         "caml_raw_backtrace_length"=>$caml_raw_backtrace_length,
         "caml_convert_raw_backtrace"=>$caml_convert_raw_backtrace,
         "caml_record_backtrace"=>$caml_record_backtrace,
         "caml_get_exception_raw_backtrace"=>$caml_get_exception_raw_backtrace,
         "caml_get_exception_backtrace"=>$caml_get_exception_backtrace,
         "caml_backtrace_status"=>$caml_backtrace_status,
         "caml_final_release"=>$caml_final_release,
         "caml_final_register_called_without_value"=>
         $caml_final_register_called_without_value,
         "caml_final_register"=>$caml_final_register,
         "caml_get_public_method"=>$caml_get_public_method,
         "caml_array_blit"=>$caml_array_blit,
         "caml_array_concat"=>$caml_array_concat,
         "caml_array_append"=>$caml_array_append,
         "caml_array_sub"=>$caml_array_sub,
         "caml_sys_system_command"=>$caml_sys_system_command,
         "caml_sys_const_ostype_win32"=>$caml_sys_const_ostype_win32,
         "caml_sys_const_ostype_unix"=>$caml_sys_const_ostype_unix,
         "caml_sys_const_ostype_cygwin"=>$caml_sys_const_ostype_cygwin,
         "caml_sys_const_max_wosize"=>$caml_sys_const_max_wosize,
         "caml_sys_const_int_size"=>$caml_sys_const_int_size,
         "caml_sys_const_word_size"=>$caml_sys_const_word_size,
         "caml_sys_const_big_endian"=>$caml_sys_const_big_endian,
         "caml_sys_random_seed"=>$caml_sys_random_seed,
         "caml_sys_const_backend_type"=>$caml_sys_const_backend_type,
         "caml_sys_get_config"=>$caml_sys_get_config,
         "caml_sys_time"=>$caml_sys_time,
         "caml_hash"=>$caml_hash,
         "caml_hash_mix_string"=>$caml_hash_mix_string,
         "caml_hash_mix_string_arr"=>$caml_hash_mix_string_arr,
         "caml_hash_mix_string_str"=>$caml_hash_mix_string_str,
         "caml_hash_mix_int64"=>$caml_hash_mix_int64,
         "caml_hash_mix_float"=>$caml_hash_mix_float,
         "caml_hash_mix_final"=>$caml_hash_mix_final,
         "caml_hash_mix_int"=>$caml_hash_mix_int,
         "caml_hash_univ_param"=>$caml_hash_univ_param,
         "caml_format_float"=>$caml_format_float,
         "caml_format_int"=>$caml_format_int,
         "caml_finish_formatting"=>$caml_finish_formatting,
         "caml_parse_format"=>$caml_parse_format,
         "caml_is_printable"=>$caml_is_printable,
         "caml_float_of_string"=>$caml_float_of_string,
         "caml_int_of_string"=>$caml_int_of_string,
         "caml_parse_digit"=>$caml_parse_digit,
         "caml_parse_sign_and_base"=>$caml_parse_sign_and_base,
         "caml_lessthan"=>$caml_lessthan,
         "caml_lessequal"=>$caml_lessequal,
         "caml_greaterthan"=>$caml_greaterthan,
         "caml_greaterequal"=>$caml_greaterequal,
         "caml_notequal"=>$caml_notequal,
         "caml_equal"=>$caml_equal,
         "caml_int_compare"=>$caml_int_compare,
         "caml_compare"=>$caml_compare,
         "caml_compare_val"=>$caml_compare_val,
         "caml_floatarray_create"=>$caml_floatarray_create,
         "caml_make_float_vect"=>$caml_make_float_vect,
         "caml_make_vect"=>$caml_make_vect,
         "caml_check_bound"=>$caml_check_bound,
         "caml_array_get"=>$caml_array_get,
         "caml_array_set"=>$caml_array_set,
         "caml_mod"=>$caml_mod,
         "caml_div"=>$caml_div,
         "caml_mul"=>$caml_mul,
         "caml_lazy_make_forward"=>$caml_lazy_make_forward,
         "caml_obj_truncate"=>$caml_obj_truncate,
         "caml_obj_dup"=>$caml_obj_dup,
         "caml_obj_block"=>$caml_obj_block,
         "caml_obj_set_tag"=>$caml_obj_set_tag,
         "caml_obj_tag"=>$caml_obj_tag,
         "caml_obj_is_block"=>$caml_obj_is_block,
         "caml_update_dummy"=>$caml_update_dummy,
         "caml_array_bound_error"=>$caml_array_bound_error,
         "caml_raise_not_found"=>$caml_raise_not_found,
         "caml_raise_zero_divide"=>$caml_raise_zero_divide,
         "caml_raise_end_of_file"=>$caml_raise_end_of_file,
         "caml_invalid_argument"=>$caml_invalid_argument,
         "caml_alloc_dummy_function"=>$caml_alloc_dummy_function,
         "caml_js_error_of_exception"=>$caml_js_error_of_exception,
         "caml_failwith"=>$caml_failwith,
         "caml_raise_sys_error"=>$caml_raise_sys_error,
         "caml_raise_with_string"=>$caml_raise_with_string,
         "caml_raise_with_arg"=>$caml_raise_with_arg,
         "caml_raise_constant"=>$caml_raise_constant,
         "caml_wrap_thrown_exception_traceless"=>
         $caml_wrap_thrown_exception_traceless,
         "caml_wrap_thrown_exception_reraise"=>
         $caml_wrap_thrown_exception_reraise,
         "caml_wrap_thrown_exception"=>$caml_wrap_thrown_exception,
         "caml_wrap_exception"=>$caml_wrap_exception,
         "caml_return_exn_constant"=>$caml_return_exn_constant,
         "caml_get_global_data"=>$caml_get_global_data,
         "caml_register_global"=>$caml_register_global,
         "caml_global_data"=>$caml_global_data,
         "caml_named_value"=>$caml_named_value,
         "caml_register_named_value"=>$caml_register_named_value,
         "caml_named_values"=>$caml_named_values,
         "caml_call_gen"=>$caml_call_gen,
         "raw_array_append_one"=>$raw_array_append_one,
         "raw_array_cons"=>$raw_array_cons,
         "raw_array_copy"=>$raw_array_copy,
         "raw_array_sub"=>$raw_array_sub,
         "win_handle_fd"=>$win_handle_fd,
         "win_cleanup"=>$win_cleanup,
         "win_startup"=>$win_startup,
         "unix_mktime"=>$unix_mktime,
         "unix_localtime"=>$unix_localtime,
         "unix_gmtime"=>$unix_gmtime,
         "unix_time"=>$unix_time,
         "unix_gettimeofday"=>$unix_gettimeofday,
         "caml_ba_reshape"=>$caml_ba_reshape,
         "caml_ba_slice"=>$caml_ba_slice,
         "caml_ba_sub"=>$caml_ba_sub,
         "caml_ba_fill"=>$caml_ba_fill,
         "caml_ba_blit"=>$caml_ba_blit,
         "caml_ba_set_3"=>$caml_ba_set_3,
         "caml_ba_set_2"=>$caml_ba_set_2,
         "caml_ba_set_1"=>$caml_ba_set_1,
         "caml_ba_uint8_set64"=>$caml_ba_uint8_set64,
         "caml_ba_uint8_set32"=>$caml_ba_uint8_set32,
         "caml_ba_uint8_set16"=>$caml_ba_uint8_set16,
         "caml_ba_set_generic"=>$caml_ba_set_generic,
         "caml_ba_get_3"=>$caml_ba_get_3,
         "caml_ba_get_2"=>$caml_ba_get_2,
         "caml_ba_get_1"=>$caml_ba_get_1,
         "caml_ba_uint8_get64"=>$caml_ba_uint8_get64,
         "caml_ba_uint8_get32"=>$caml_ba_uint8_get32,
         "caml_ba_uint8_get16"=>$caml_ba_uint8_get16,
         "caml_ba_get_generic"=>$caml_ba_get_generic,
         "caml_ba_dim_3"=>$caml_ba_dim_3,
         "caml_ba_dim_2"=>$caml_ba_dim_2,
         "caml_ba_dim_1"=>$caml_ba_dim_1,
         "caml_ba_dim"=>$caml_ba_dim,
         "caml_ba_num_dims"=>$caml_ba_num_dims,
         "caml_ba_layout"=>$caml_ba_layout,
         "caml_ba_kind"=>$caml_ba_kind,
         "caml_ba_change_layout"=>$caml_ba_change_layout,
         "caml_ba_create"=>$caml_ba_create,
         "caml_ba_create_from"=>$caml_ba_create_from,
         "caml_ba_views"=>$caml_ba_views,
         "caml_ba_get_size"=>$caml_ba_get_size,
         "caml_ba_init_views"=>$caml_ba_init_views,
         "caml_ba_init"=>$caml_ba_init,
         "caml_set_parser_trace"=>$caml_set_parser_trace,
         "caml_parse_engine"=>$caml_parse_engine,
         "caml_new_lex_engine"=>$caml_new_lex_engine,
         "caml_lex_engine"=>$caml_lex_engine,
         "caml_lex_array"=>$caml_lex_array,
         "caml_output_value_to_buffer"=>$caml_output_value_to_buffer,
         "caml_output_value_to_bytes"=>$caml_output_value_to_bytes,
         "caml_output_value_to_string"=>$caml_output_value_to_string,
         "caml_output_val"=>$caml_output_val,
         "caml_marshal_data_size"=>$caml_marshal_data_size,
         "caml_input_value_from_reader"=>$caml_input_value_from_reader,
         "caml_input_value_from_bytes"=>$caml_input_value_from_bytes,
         "caml_input_value_from_string"=>$caml_input_value_from_string,
         "caml_float_of_bytes"=>$caml_float_of_bytes,
         "BigStringReader"=>$BigStringReader,
         "MlBytesReader"=>$MlBytesReader,
         "caml_marshal_constants"=>$caml_marshal_constants,
         "caml_md5_string"=>$caml_md5_string,
         "caml_md5_chan"=>$caml_md5_chan,
         "caml_int64_to_bytes"=>$caml_int64_to_bytes,
         "caml_int64_of_bytes"=>$caml_int64_of_bytes,
         "caml_int64_of_string"=>$caml_int64_of_string,
         "caml_int64_format"=>$caml_int64_format,
         "caml_int64_of_float"=>$caml_int64_of_float,
         "caml_int64_to_float"=>$caml_int64_to_float,
         "caml_int64_to_int32"=>$caml_int64_to_int32,
         "caml_int64_of_int32"=>$caml_int64_of_int32,
         "caml_int64_mod"=>$caml_int64_mod,
         "caml_int64_div"=>$caml_int64_div,
         "caml_int64_udivmod"=>$caml_int64_udivmod,
         "caml_int64_lsr1"=>$caml_int64_lsr1,
         "caml_int64_lsl1"=>$caml_int64_lsl1,
         "caml_int64_shift_right"=>$caml_int64_shift_right,
         "caml_int64_shift_right_unsigned"=>$caml_int64_shift_right_unsigned,
         "caml_int64_shift_left"=>$caml_int64_shift_left,
         "caml_int64_xor"=>$caml_int64_xor,
         "caml_int64_or"=>$caml_int64_or,
         "caml_int64_and"=>$caml_int64_and,
         "caml_int64_is_minus_one"=>$caml_int64_is_minus_one,
         "caml_int64_is_min_int"=>$caml_int64_is_min_int,
         "caml_int64_is_negative"=>$caml_int64_is_negative,
         "caml_int64_is_zero"=>$caml_int64_is_zero,
         "caml_int64_mul"=>$caml_int64_mul,
         "caml_int64_sub"=>$caml_int64_sub,
         "caml_int64_add"=>$caml_int64_add,
         "caml_int64_neg"=>$caml_int64_neg,
         "caml_int64_compare"=>$caml_int64_compare,
         "caml_int64_ult"=>$caml_int64_ult,
         "caml_int64_ucompare"=>$caml_int64_ucompare,
         "caml_int64_offset"=>$caml_int64_offset,
         "caml_tanh_float"=>$caml_tanh_float,
         "caml_sinh_float"=>$caml_sinh_float,
         "caml_cosh_float"=>$caml_cosh_float,
         "caml_log10_float"=>$caml_log10_float,
         "caml_hypot_float"=>$caml_hypot_float,
         "caml_log1p_float"=>$caml_log1p_float,
         "caml_expm1_float"=>$caml_expm1_float,
         "caml_copysign_float"=>$caml_copysign_float,
         "caml_float_compare"=>$caml_float_compare,
         "caml_frexp_float"=>$caml_frexp_float,
         "caml_ldexp_float"=>$caml_ldexp_float,
         "caml_modf_float"=>$caml_modf_float,
         "caml_classify_float"=>$caml_classify_float,
         "caml_int32_float_of_bits"=>$caml_int32_float_of_bits,
         "caml_int64_float_of_bits"=>$caml_int64_float_of_bits,
         "caml_hexstring_of_float"=>$caml_hexstring_of_float,
         "caml_int32_bits_of_float"=>$caml_int32_bits_of_float,
         "caml_int64_bits_of_float"=>$caml_int64_bits_of_float,
         "jsoo_floor_log2"=>$jsoo_floor_log2,
         "caml_bytes_of_string"=>$caml_bytes_of_string,
         "caml_string_of_bytes"=>$caml_string_of_bytes,
         "caml_ml_bytes_length"=>$caml_ml_bytes_length,
         "caml_ml_string_length"=>$caml_ml_string_length,
         "caml_blit_string"=>$caml_blit_string,
         "caml_blit_bytes"=>$caml_blit_bytes,
         "caml_fill_string"=>$caml_fill_string,
         "caml_fill_bytes"=>$caml_fill_bytes,
         "caml_bytes_greaterthan"=>$caml_bytes_greaterthan,
         "caml_string_greaterthan"=>$caml_string_greaterthan,
         "caml_bytes_greaterequal"=>$caml_bytes_greaterequal,
         "caml_string_greaterequal"=>$caml_string_greaterequal,
         "caml_bytes_lessthan"=>$caml_bytes_lessthan,
         "caml_string_lessthan"=>$caml_string_lessthan,
         "caml_bytes_lessequal"=>$caml_bytes_lessequal,
         "caml_string_lessequal"=>$caml_string_lessequal,
         "caml_bytes_notequal"=>$caml_bytes_notequal,
         "caml_string_notequal"=>$caml_string_notequal,
         "caml_bytes_equal"=>$caml_bytes_equal,
         "caml_string_equal"=>$caml_string_equal,
         "caml_bytes_compare"=>$caml_bytes_compare,
         "caml_string_compare"=>$caml_string_compare,
         "caml_string_of_array"=>$caml_string_of_array,
         "caml_new_string"=>$caml_new_string,
         "caml_create_bytes"=>$caml_create_bytes,
         "caml_create_string"=>$caml_create_string,
         "caml_js_to_string"=>$caml_js_to_string,
         "caml_jsbytes_of_string"=>$caml_jsbytes_of_string,
         "caml_array_of_string"=>$caml_array_of_string,
         "caml_convert_string_to_array"=>$caml_convert_string_to_array,
         "caml_convert_string_to_bytes"=>$caml_convert_string_to_bytes,
         "MlBytes"=>$MlBytes,
         "caml_bytes_set"=>$caml_bytes_set,
         "caml_string_set64"=>$caml_string_set64,
         "caml_bytes_set64"=>$caml_bytes_set64,
         "caml_string_set32"=>$caml_string_set32,
         "caml_bytes_set32"=>$caml_bytes_set32,
         "caml_string_set16"=>$caml_string_set16,
         "caml_bytes_set16"=>$caml_bytes_set16,
         "caml_string_set"=>$caml_string_set,
         "caml_bytes_get"=>$caml_bytes_get,
         "caml_bytes_get64"=>$caml_bytes_get64,
         "caml_string_get64"=>$caml_string_get64,
         "caml_bytes_get32"=>$caml_bytes_get32,
         "caml_string_get32"=>$caml_string_get32,
         "caml_bytes_get16"=>$caml_bytes_get16,
         "caml_string_get16"=>$caml_string_get16,
         "caml_string_get"=>$caml_string_get,
         "caml_string_bound_error"=>$caml_string_bound_error,
         "caml_string_unsafe_set"=>$caml_string_unsafe_set,
         "caml_bytes_unsafe_set"=>$caml_bytes_unsafe_set,
         "caml_bytes_unsafe_get"=>$caml_bytes_unsafe_get,
         "caml_string_unsafe_get"=>$caml_string_unsafe_get,
         "caml_to_js_string"=>$caml_to_js_string,
         "caml_is_ascii"=>$caml_is_ascii,
         "caml_utf16_of_utf8"=>$caml_utf16_of_utf8,
         "caml_utf8_of_utf16"=>$caml_utf8_of_utf16,
         "caml_subarray_to_string"=>$caml_subarray_to_string,
         "caml_str_repeat"=>$caml_str_repeat]
      );
    
    
    
    $caml_fs_init();
    
    $caml_register_global(
      0,
      Vector{248, $caml_new_string("Out_of_memory"), 0},
      "Out_of_memory"
    );
    
    $caml_register_global(
      1,
      Vector{248, $caml_new_string("Sys_error"), -1},
      "Sys_error"
    );
    
    $caml_register_global(
      2,
      Vector{248, $caml_new_string("Failure"), -2},
      "Failure"
    );
    
    $caml_register_global(
      3,
      Vector{248, $caml_new_string("Invalid_argument"), -3},
      "Invalid_argument"
    );
    
    $caml_register_global(
      4,
      Vector{248, $caml_new_string("End_of_file"), -4},
      "End_of_file"
    );
    
    $caml_register_global(
      5,
      Vector{248, $caml_new_string("Division_by_zero"), -5},
      "Division_by_zero"
    );
    
    $caml_register_global(
      6,
      Vector{248, $caml_new_string("Not_found"), -6},
      "Not_found"
    );
    
    $caml_register_global(
      7,
      Vector{248, $caml_new_string("Match_failure"), -7},
      "Match_failure"
    );
    
    $caml_register_global(
      8,
      Vector{248, $caml_new_string("Stack_overflow"), -8},
      "Stack_overflow"
    );
    
    $caml_register_global(
      9,
      Vector{248, $caml_new_string("Sys_blocked_io"), -9},
      "Sys_blocked_io"
    );
    
    $caml_register_global(
      10,
      Vector{248, $caml_new_string("Assert_failure"), -10},
      "Assert_failure"
    );
    
    $caml_register_global(
      11,
      Vector{248, $caml_new_string("Undefined_recursive_module"), -11},
      "Undefined_recursive_module"
    );

  }
}

/* Hashing disabled */
