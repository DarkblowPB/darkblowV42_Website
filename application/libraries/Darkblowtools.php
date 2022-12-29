<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Darkblowtools
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function create_form_open($is_multipart = FALSE, $endpoint_url = '', $attributes = array(), $hidden_form = array())
    {
        if ($is_multipart) return form_open_multipart($endpoint_url != '' ? base_url($endpoint_url) : '', !empty($attributes) ? $attributes : '', !empty($hidden_form) ? $hidden_form : '');
        else return form_open($endpoint_url != '' ? base_url($endpoint_url) : '', !empty($attributes) ? $attributes : '', !empty($hidden_form) ? $hidden_form : '');
    }

    public function create_form_close($extra = '')
    {
        return form_close($extra);
    }

    public function create_form_input_group($attribute_options = array())
    {
        $form_group_open = '<div class="form-group">';
        $form_group_close = '</div>';
        $label = '<label for="{{label_for}}" class="{{label_class}}">{{label_name}}</label>';
        $input = '<input type="{{input_type}}" id="{{input_id}}" name="{{input_name}}" class="{{input_class}}" placeholder="{{input_placeholder}}" value="{{input_value}}" {{input_required}}>';

        if (is_array($attribute_options)) {
            if (!empty($attribute_options)) {
                $label = str_replace(array(
                    '{{label_for}}',
                    '{{label_class}}',
                    '{{label_name}}'
                ), array(
                    key_exists('label_for', $attribute_options) ? ($attribute_options['label_for'] != '' ? $attribute_options['label_for'] : '') : (key_exists('input_id', $attribute_options) ? $attribute_options['input_id'] : ''),
                    key_exists('label_class', $attribute_options) ? ($attribute_options['label_class'] != '' ? $attribute_options['label_class'] : 'col-form-label') : '',
                    key_exists('label_name', $attribute_options) ? ($attribute_options['label_name'] != '' ? $attribute_options['label_name'] : (key_exists('input_name', $attribute_options) ? $attribute_options['input_name'] : '')) : '',
                ), $label);
                $input = str_replace(array(
                    '{{input_type}}',
                    '{{input_id}}',
                    '{{input_name}}',
                    '{{input_class}}',
                    '{{input_placeholder}}',
                    '{{input_value}}',
                    '{{input_required}}'
                ), array(
                    key_exists('input_type', $attribute_options) ? ($attribute_options['input_type'] != '' ? $attribute_options['input_type'] : 'text') : 'text',
                    key_exists('input_id', $attribute_options) ? ($attribute_options['input_id'] != '' ? $attribute_options['input_id'] : '') : '',
                    key_exists('input_name', $attribute_options) ? ($attribute_options['input_name'] != '' ? $attribute_options['input_name'] : '') : '',
                    key_exists('input_class', $attribute_options) ? ($attribute_options['input_class'] != '' ? $attribute_options['input_class'] : 'form-control') : '',
                    key_exists('input_placeholder', $attribute_options) ? ($attribute_options['input_placeholder'] != '' ? $attribute_options['input_placeholder'] : '') : '',
                    key_exists('input_value', $attribute_options) ? ($attribute_options['input_value'] != '' ? $attribute_options['input_value'] : '') : '',
                    key_exists('input_required', $attribute_options) ? ($attribute_options['input_required'] != '' ? $attribute_options['input_required'] : '') : '',
                ), $input);
            }
        }
        return $form_group_open . $label . $input . $form_group_close;
    }

    public function create_form_textarea_group($label_name = '', $input_id_name = '', $input_classname = 'form-control', $placeholder = '', $default_value = '', $is_required = TRUE)
    {
        return '
            <div class="form-group">
                <label for="' . $input_id_name . '" class="col-form-label">' . $label_name . '</label>
                <textarea id="' . $input_id_name . '" name="' . $input_id_name . '" class="' . $input_classname . '" placeholder="' . $placeholder . '" row="5" ' . $is_required == TRUE ? 'required' : '' . '>' . set_value($input_id_name, $default_value) . '</textarea>
            </div>
        ';
    }

    public function create_form_select_group($attribute_options = array(), $data = '')
    {
        $form_group_open = '<div class="form-group">';
        $form_group_close = '</div>';
        $label = '<label for="{{label_attribute_for}}" class="{{label_attribute_class}}">{{label_attribute_name}}</label>';
        $option_fix = '';
        $select_open = '<select id="{{select_attribute_id}}" name="{{select_attribute_name}}" class="{{select_attribute_class}}" {{select_attribute_required}}>{{select_attribute_option}}</select>';
        $select_close = '</select>';
        $option = '<option value="{{option_attribute_hidden_value}}" {{option_attribute_disabled}} {{option_attribute_selected}}>{{option_attribute_display_value}}</option>';
        if (is_array($attribute_options)) {
            if (is_array($data)) {
                $disabled_option = 0;
                foreach ($data as $key => $value) {
                    $option_fix .= str_replace(array(
                        '{{option_attribute_hidden_value}}',
                        '{{option_attribute_display_value}}',
                        '{{option_attribute_disabled}}',
                        '{{option_attribute_selected}}'
                    ), array(
                        $key == 0 ? '' : $key,
                        $value,
                        $disabled_option == 0 ? 'disabled' : '',
                        key_exists('option_selected', $attribute_options) ? ($attribute_options['option_selected'] == '' ? ($disabled_option == 0 ? 'selected' : '') : ($attribute_options['option_selected'] == $key ? 'selected' : '')) : ''
                    ), $option);
                    $disabled_option++;
                }
            }
            $label = str_replace(array(
                '{{label_attribute_for}}',
                '{{label_attribute_class}}',
                '{{label_attribute_name}}'
            ), array(
                key_exists('label_for', $attribute_options) ? $attribute_options['label_for'] : '',
                key_exists('label_class', $attribute_options) ? $attribute_options['label_class'] : '',
                key_exists('label_name', $attribute_options) ? $attribute_options['label_name'] : $attribute_options['id'],
            ), $label);

            $select_open = str_replace(array(
                '{{select_attribute_id}}',
                '{{select_attribute_name}}',
                '{{select_attribute_class}}',
                '{{select_attribute_required}}',
                '{{select_attribute_option}}'
            ), array(
                key_exists('select_id', $attribute_options) ? $attribute_options['select_id'] : '',
                key_exists('select_name', $attribute_options) ? $attribute_options['select_name'] : '',
                key_exists('select_class', $attribute_options) ? ($attribute_options['select_class'] == '' ? 'form-control' : '') : 'form-control',
                key_exists('select_required', $attribute_options) ? ($attribute_options['select_required'] != '' ? 'required' : '') : '',
                $option_fix
            ), $select_open) . $select_close;
        }

        return $form_group_open . $label . $select_open . $form_group_close;
    }
}

/* End of file Darkblowtools.php */
