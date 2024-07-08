<?php

return [

    'accepted'             => ':attribute phải được chấp nhận.',
    'active_url'           => ':attribute không phải là một URL hợp lệ.',
    'after'                => ':attribute phải là một ngày sau :date.',
    'after_or_equal'       => ':attribute phải là một ngày sau hoặc bằng :date.',
    'alpha'                => ':attribute chỉ có thể chứa các chữ cái.',
    'alpha_dash'           => ':attribute chỉ có thể chứa các chữ cái, số, dấu gạch ngang và dấu gạch dưới.',
    'alpha_num'            => ':attribute chỉ có thể chứa các chữ cái và số.',
    'array'                => ':attribute phải là một mảng.',
    'before'               => ':attribute phải là một ngày trước :date.',
    'before_or_equal'      => ':attribute phải là một ngày trước hoặc bằng :date.',
    'between'              => [
        'numeric' => ':attribute phải nằm giữa :min và :max.',
        'file'    => ':attribute phải nằm giữa :min và :max kilobytes.',
        'string'  => ':attribute phải nằm giữa :min và :max ký tự.',
        'array'   => ':attribute phải có từ :min đến :max mục.',
    ],
    'boolean'              => ':attribute phải là true hoặc false.',
    'confirmed'            => ':attribute xác nhận không khớp.',
    'date'                 => ':attribute không phải là một ngày hợp lệ.',
    'date_format'          => ':attribute không khớp với định dạng :format.',
    'different'            => ':attribute và :other phải khác nhau.',
    'digits'               => ':attribute phải là :digits chữ số.',
    'digits_between'       => ':attribute phải nằm giữa :min và :max chữ số.',
    'dimensions'           => ':attribute có kích thước hình ảnh không hợp lệ.',
    'distinct'             => ':attribute có giá trị trùng lặp.',
    'email'                => ':attribute phải là một địa chỉ email hợp lệ.',
    'exists'               => ':attribute đã chọn không hợp lệ.',
    'file'                 => ':attribute phải là một tệp.',
    'filled'               => ':attribute phải có giá trị.',
    'image'                => ':attribute phải là một hình ảnh.',
    'in'                   => ':attribute đã chọn không hợp lệ.',
    'in_array'             => ':attribute không tồn tại trong :other.',
    'integer'              => ':attribute phải là một số nguyên.',
    'ip'                   => ':attribute phải là một địa chỉ IP hợp lệ.',
    'ipv4'                 => ':attribute phải là một địa chỉ IPv4 hợp lệ.',
    'ipv6'                 => ':attribute phải là một địa chỉ IPv6 hợp lệ.',
    'json'                 => ':attribute phải là một chuỗi JSON hợp lệ.',
    'max'                  => [
        'numeric' => ':attribute không được lớn hơn :max.',
        'file'    => ':attribute không được lớn hơn :max kilobytes.',
        'string'  => ':attribute không được lớn hơn :max ký tự.',
        'array'   => ':attribute không được có nhiều hơn :max mục.',
    ],
    'mimes'                => ':attribute phải là một tệp loại: :values.',
    'mimetypes'            => ':attribute phải là một tệp loại: :values.',
    'min'                  => [
        'numeric' => ':attribute phải ít nhất là :min.',
        'file'    => ':attribute phải ít nhất là :min kilobytes.',
        'string'  => ':attribute phải ít nhất là :min ký tự.',
        'array'   => ':attribute phải có ít nhất :min mục.',
    ],
    'not_in'               => ':attribute đã chọn không hợp lệ.',
    'numeric'              => ':attribute phải là một số.',
    'present'              => ':attribute phải được cung cấp.',
    'regex'                => 'Định dạng :attribute không hợp lệ.',
    'required'             => ':attribute là bắt buộc.',
    'required_if'          => ':attribute là bắt buộc khi :other là :value.',
    'required_unless'      => ':attribute là bắt buộc trừ khi :other là trong :values.',
    'required_with'        => ':attribute là bắt buộc khi :values có mặt.',
    'required_with_all'    => ':attribute là bắt buộc khi :values có mặt.',
    'required_without'     => ':attribute là bắt buộc khi :values không có mặt.',
    'required_without_all' => ':attribute là bắt buộc khi không có giá trị nào trong :values có mặt.',
    'same'                 => ':attribute và :other phải khớp.',
    'size'                 => [
        'numeric' => ':attribute phải là :size.',
        'file'    => ':attribute phải là :size kilobytes.',
        'string'  => ':attribute phải là :size ký tự.',
        'array'   => ':attribute phải chứa :size mục.',
    ],
    'string'               => ':attribute phải là một chuỗi.',
    'timezone'             => ':attribute phải là một vùng hợp lệ.',
    'unique'               => ':attribute đã tồn tại.',
    'uploaded'             => ':attribute tải lên không thành công.',
    'url'                  => 'Định dạng :attribute không hợp lệ.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'fullname' => [
            'required' => 'Họ và tên là bắt buộc.',
            'string' => 'Họ và tên phải là chuỗi ký tự.',
            'max' => 'Họ và tên không được vượt quá :max ký tự.',
        ],
        'phone' => [
            'required' => 'Số điện thoại là bắt buộc.',
            'string' => 'Số điện thoại phải là chuỗi ký tự.',
            'max' => 'Số điện thoại không được vượt quá :max ký tự.',
        ],
        'email' => [
            'required' => 'Email là bắt buộc.',
            'email' => 'Email phải là một địa chỉ email hợp lệ.',
            'max' => 'Email không được vượt quá :max ký tự.',
        ],
        'message' => [
            'required' => 'Nội dung tin nhắn là bắt buộc.',
            'string' => 'Nội dung tin nhắn phải là chuỗi ký tự.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
