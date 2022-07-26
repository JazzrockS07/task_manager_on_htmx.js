<?php

if(!defined('ABSPATH'))
    exit;


acf_add_local_field_group(array(
    'key' => 'group_acfe_dynamic_form',
    'title' => 'Dynamic Form',
    'acfe_display_title' => '',
    'fields' => array(
    
        /*
         * Actions
         */
        array(
            'key' => 'field_acfe_form_tab_general',
            'label' => 'General',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_acfe_form_name',
            'label' => 'Form name',
            'name' => 'acfe_form_name',
            'type' => 'acfe_slug',
            'instructions' => 'The unique form slug',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_acfe_form_field_groups',
            'label' => 'Field groups',
            'name' => 'acfe_form_field_groups',
            'type' => 'select',
            'instructions' => 'Render & map fields of the following field groups',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'choices' => array(
            ),
            'default_value' => array(
            ),
            'allow_null' => 0,
            'multiple' => 1,
            'ui' => 1,
            'ajax' => 0,
            'return_format' => 'value',
            'placeholder' => '',
        ),
        array(
            'key' => 'field_acfe_form_actions',
            'label' => 'Actions',
            'name' => 'acfe_form_actions',
            'type' => 'flexible_content',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'acfe_flexible_stylised_button' => 1,
            'acfe_flexible_layouts_thumbnails' => 0,
            'acfe_flexible_layouts_templates' => 0,
            'acfe_flexible_layouts_placeholder' => 0,
            'acfe_flexible_close_button' => 0,
            'acfe_flexible_title_edition' => 0,
            'acfe_flexible_copy_paste' => 0,
            'acfe_flexible_modal_edition' => 0,
            'acfe_flexible_modal' => array(
                'acfe_flexible_modal_enabled' => '0',
            ),
            'acfe_flexible_layouts_state' => '',
            'acfe_flexible_layouts_remove_collapse' => 0,
            'layouts' => array(
            
                /*
                 * Layout: Custom
                 */
                'layout_custom' => array(
                    'key' => 'layout_custom',
                    'name' => 'custom',
                    'label' => 'Custom action',
                    'display' => 'row',
                    'sub_fields' => array(
                    
                        /*
		                 * Layout: Custom Action
		                 */
                        array(
                            'key' => 'field_acfe_form_custom_action_tab_action',
                            'label' => 'Action',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'field_acfe_form_custom_action',
                            'label' => 'Action name',
                            'name' => 'acfe_form_custom_action',
                            'type' => 'acfe_slug',
                            'instructions' => 'Set a unique action slug',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => 'my-custom-action',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                    
                        /*
						 * Layout: Custom Advanced
						 */
                        array(
                            'key' => 'field_acfe_form_custom_action_tab_advanced',
                            'label' => 'Code',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'field_acfe_form_custom_action_advanced_load',
                            'label' => 'Change form settings before rendering',
                            'name' => 'acfe_form_custom_action_advanced_load',
                            'type' => 'acfe_dynamic_message',
                            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_custom_action_advanced_validation',
                            'label' => 'Add custom validation on submission',
                            'name' => 'acfe_form_custom_action_advanced_validation',
                            'type' => 'acfe_dynamic_message',
                            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_custom_action_advanced_submit',
                            'label' => 'Add custom action on submission',
                            'name' => 'acfe_form_custom_action_advanced_submit',
                            'type' => 'acfe_dynamic_message',
                            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
            
                /*
                 * Layout: Email
                 */
                'layout_email' => array(
                    'key' => 'layout_email',
                    'name' => 'email',
                    'label' => 'Email action',
                    'display' => 'row',
                    'sub_fields' => array(
                    
                        /*
		                 * Layout: Email Action
		                 */
                        array(
                            'key' => 'field_acfe_form_email_tab_action',
                            'label' => 'Action',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'field_acfe_form_email_custom_alias',
                            'label' => 'Action name',
                            'name' => 'acfe_form_custom_alias',
                            'type' => 'acfe_slug',
                            'instructions' => '(Optional) Target this action using hooks & allow custom <code>{query_var:my-action}</code> name.',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => 'Email',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                    
                        /*
						 * Layout: Email Send
						 */
                        array(
                            'key' => 'field_acfe_form_email_tab_email',
                            'label' => 'Email',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'field_acfe_form_email_from',
                            'label' => 'From',
                            'name' => 'acfe_form_email_from',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => 'Name <email@domain.com>',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_email_to',
                            'label' => 'To',
                            'name' => 'acfe_form_email_to',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => 'email@domain.com',
                            'prepend' => '',
                            'append' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_email_reply_to',
                            'label' => 'Reply to',
                            'name' => 'acfe_form_email_reply_to',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => 'Name <email@domain.com>',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_email_cc',
                            'label' => 'Cc',
                            'name' => 'acfe_form_email_cc',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => 'email@domain.com',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_email_bcc',
                            'label' => 'Bcc',
                            'name' => 'acfe_form_email_bcc',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => 'email@domain.com',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_email_subject',
                            'label' => 'Subject',
                            'name' => 'acfe_form_email_subject',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_email_content',
                            'label' => 'Content',
                            'name' => 'acfe_form_email_content',
                            'type' => 'wysiwyg',
                            'instructions' => 'Fields values may be included using <code>{field:field_key}</code> <code>{field:title}</code>. All fields may be included using <code>{fields}</code>.<br />See "Cheatsheet" tab for advanced usage.',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'tabs' => 'all',
                            'toolbar' => 'full',
                            'media_upload' => 1,
                            'delay' => 0,
                        ),
                    
                        /*
						 * Layout: Email Attachments
						 */
                        array(
                            'key' => 'field_acfe_form_email_tab_attachments',
                            'label' => 'Attachments',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'field_acfe_form_email_files',
                            'label' => 'Dynamic files',
                            'name' => 'acfe_form_email_files',
                            'type' => 'repeater',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'acfe_repeater_stylised_button' => 0,
                            'collapsed' => '',
                            'min' => 0,
                            'max' => 0,
                            'layout' => 'table',
                            'button_label' => 'Add file',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_acfe_form_email_file',
                                    'label' => 'File',
                                    'name' => 'acfe_form_email_file',
                                    'type' => 'select',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'acfe_permissions' => '',
                                    'choices' => array(
                                    ),
                                    'default_value' => array(
                                    ),
                                    'allow_null' => 0,
                                    'multiple' => 0,
                                    'ui' => 1,
                                    'return_format' => 'value',
                                    'ajax' => 0,
                                    'placeholder' => '',
                                    'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                                    'allow_custom' => 1,
                                ),
                                array(
                                    'key' => 'field_acfe_form_email_file_delete',
                                    'label' => 'Delete file',
                                    'name' => 'acfe_form_email_file_delete',
                                    'type' => 'true_false',
                                    'instructions' => '',
                                    'required' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'acfe_permissions' => '',
                                    'message' => 'Delete once submitted',
                                    'default_value' => 0,
                                    'ui' => 1,
                                    'ui_on_text' => '',
                                    'ui_off_text' => '',
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_email_files_static',
                            'label' => 'Static files',
                            'name' => 'acfe_form_email_files_static',
                            'type' => 'repeater',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'acfe_repeater_stylised_button' => 0,
                            'collapsed' => '',
                            'min' => 0,
                            'max' => 0,
                            'layout' => 'table',
                            'button_label' => 'Add file',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_acfe_form_email_file_static',
                                    'label' => 'File',
                                    'name' => 'acfe_form_email_file_static',
                                    'type' => 'file',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'acfe_permissions' => '',
                                    'return_format' => 'id',
                                ),
                            ),
                        ),
                    
                        /*
						 * Layout: Email Advanced
						 */
                        array(
                            'key' => 'field_acfe_form_email_tab_advanced',
                            'label' => 'Code',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'field_acfe_form_email_advanced_args',
                            'label' => 'Change email arguments',
                            'name' => 'acfe_form_email_advanced_args',
                            'type' => 'acfe_dynamic_message',
                            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
                            'instructions' => 'Alter the <code>wp_mail()</code> arguments before it is sent',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_email_advanced_send',
                            'label' => 'Add custom action when e-mail is sent',
                            'name' => 'form_email_advanced_send',
                            'type' => 'acfe_dynamic_message',
                            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
                            'instructions' => 'This action allows you to hook in after the e-mail has been sent',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
            
                /*
                 * Layout: Post
                 */
                'layout_post' => array(
                    'key' => 'layout_post',
                    'name' => 'post',
                    'label' => 'Post action',
                    'display' => 'row',
                    'sub_fields' => array(
                    
                        /*
		                 * Layout: Post Action
		                 */
                        array(
                            'key' => 'field_acfe_form_post_tab_action',
                            'label' => 'Action',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'field_acfe_form_post_action',
                            'label' => 'Action',
                            'name' => 'acfe_form_post_action',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                                'insert_post' => 'Create post',
                                'update_post' => 'Update post',
                            ),
                            'default_value' => 'insert_post',
                        ),
                        array(
                            'key' => 'field_acfe_form_post_custom_alias',
                            'label' => 'Action name',
                            'name' => 'acfe_form_custom_alias',
                            'type' => 'acfe_slug',
                            'instructions' => '(Optional) Target this action using hooks & allow custom <code>{query_var:my-action}</code> name.',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => 'Post',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                    
                        /*
		                 * Layout: Post Save
		                 */
                        array(
                            'key' => 'field_acfe_form_post_tab_save',
                            'label' => 'Save',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'field_acfe_form_post_save_target',
                            'label' => 'Target',
                            'name' => 'acfe_form_post_save_target',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_action',
                                        'operator' => '==',
                                        'value' => 'update_post',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => 'current_post',
                            'allow_null' => 0,
                            'multiple' => 0,
                            'ui' => 1,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => '',
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                        ),
                        array(
                            'key' => 'field_acfe_form_post_save_post_type',
                            'label' => 'Post type',
                            'name' => 'acfe_form_post_save_post_type',
                            'type' => 'acfe_post_types',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_type',
                                        'operator' => '==empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'post_type' => '',
                            'field_type' => 'select',
                            'default_value' => '',
                            'return_format' => 'name',
                            'allow_null' => 1,
                            'placeholder' => 'Default',
                            'multiple' => 0,
                            'ui' => 1,
                            'choices' => array(
                            ),
                            'ajax' => 0,
                            'layout' => '',
                            'toggle' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                        ),
                        array(
                            'key' => 'field_acfe_form_post_map_post_type_message',
                            'label' => 'Post type',
                            'name' => 'acfe_form_post_map_post_type_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_type',
                                        'operator' => '!=empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_post_save_post_status',
                            'label' => 'Post status',
                            'name' => 'acfe_form_post_save_post_status',
                            'type' => 'acfe_post_statuses',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_status',
                                        'operator' => '==empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'post_status' => '',
                            'field_type' => 'select',
                            'default_value' => '',
                            'return_format' => 'name',
                            'allow_null' => 1,
                            'placeholder' => 'Default',
                            'multiple' => 0,
                            'ui' => 1,
                            'choices' => array(
                            ),
                            'ajax' => 0,
                            'layout' => '',
                            'toggle' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                        ),
                        array(
                            'key' => 'field_acfe_form_post_map_post_status_message',
                            'label' => 'Post status',
                            'name' => 'acfe_form_post_map_post_status_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_status',
                                        'operator' => '!=empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                    
                        array(
                            'key' => 'field_acfe_form_post_save_post_title',
                            'label' => 'Post title',
                            'name' => 'acfe_form_post_save_post_title',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                                'generated_id' => 'Generated ID',
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_title',
                                        'operator' => '==empty',
                                    ),
                                ),
                            ),
                        ),
                    
                        array(
                            'key' => 'field_acfe_form_post_map_post_title_message',
                            'label' => 'Post title',
                            'name' => 'acfe_form_post_map_post_title_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_title',
                                        'operator' => '!=empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_post_save_post_name',
                            'label' => 'Post slug',
                            'name' => 'acfe_form_post_save_post_name',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                                'generated_id' => 'Generated ID',
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_name',
                                        'operator' => '==empty',
                                    ),
                                ),
                            ),
                        ),
                    
                        array(
                            'key' => 'field_acfe_form_post_map_post_name_message',
                            'label' => 'Post slug',
                            'name' => 'acfe_form_post_map_post_name_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_name',
                                        'operator' => '!=empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_post_save_post_content_group',
                            'label' => 'Post content',
                            'name' => 'acfe_form_post_save_post_content_group',
                            'type' => 'group',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_content',
                                        'operator' => '==empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'layout' => 'block',
                            'acfe_seamless_style' => true,
                            'acfe_group_modal' => 0,
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_acfe_form_post_save_post_content',
                                    'label' => '',
                                    'name' => 'acfe_form_post_save_post_content',
                                    'type' => 'select',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'acfe_permissions' => '',
                                    'choices' => array(
                                        'custom' => 'WYSIWYG editor',
                                    ),
                                    'default_value' => array(
                                    ),
                                    'allow_null' => 1,
                                    'multiple' => 0,
                                    'ui' => 1,
                                    'return_format' => 'value',
                                    'placeholder' => 'Default',
                                    'ajax' => 0,
                                    'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                                    'allow_custom' => 1,
                                ),
                                array(
                                    'key' => 'field_acfe_form_post_save_post_content_custom',
                                    'label' => '',
                                    'name' => 'acfe_form_post_save_post_content_custom',
                                    'type' => 'wysiwyg',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_acfe_form_post_save_post_content',
                                                'operator' => '==',
                                                'value' => 'custom',
                                            ),
                                        ),
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'acfe_permissions' => '',
                                    'default_value' => '',
                                    'tabs' => 'all',
                                    'toolbar' => 'full',
                                    'media_upload' => 1,
                                    'delay' => 0,
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_post_map_post_content_message',
                            'label' => 'Post content',
                            'name' => 'acfe_form_post_map_post_content_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_content',
                                        'operator' => '!=empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_post_save_post_author',
                            'label' => 'Post author',
                            'name' => 'acfe_form_post_save_post_author',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_author',
                                        'operator' => '==empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                        ),
                        array(
                            'key' => 'field_acfe_form_post_map_post_author_message',
                            'label' => 'Post author',
                            'name' => 'acfe_form_post_map_post_author_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_author',
                                        'operator' => '!=empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_post_save_post_parent',
                            'label' => 'Post parent',
                            'name' => 'acfe_form_post_save_post_parent',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_parent',
                                        'operator' => '==empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                        ),
                        array(
                            'key' => 'field_acfe_form_post_map_post_parent_message',
                            'label' => 'Post parent',
                            'name' => 'acfe_form_post_map_post_parent_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_parent',
                                        'operator' => '!=empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_post_save_post_terms',
                            'label' => 'Post terms',
                            'name' => 'acfe_form_post_save_post_terms',
                            'type' => 'acfe_taxonomy_terms',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_terms',
                                        'operator' => '==empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'taxonomy' => '',
                            'field_type' => 'select',
                            'default_value' => '',
                            'return_format' => 'id',
                            'allow_null' => 1,
                            'placeholder' => 'Default',
                            'multiple' => 1,
                            'ui' => 1,
                            'ajax' => 0,
                            'choices' => array(
                            ),
                            'layout' => '',
                            'toggle' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                        ),
                        array(
                            'key' => 'field_acfe_form_post_map_post_terms_message',
                            'label' => 'Post terms',
                            'name' => 'acfe_form_post_map_post_terms_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_map_post_terms',
                                        'operator' => '!=empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_post_save_meta',
                            'label' => 'Save ACF fields',
                            'name' => 'acfe_form_post_save_meta',
                            'type' => 'checkbox',
                            'instructions' => 'Choose which ACF fields should be saved to this post',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'allow_custom' => 0,
                            'default_value' => array(
                            ),
                            'layout' => 'vertical',
                            'toggle' => 1,
                            'return_format' => 'value',
                            'save_custom' => 0,
                        ),
                    
                        /*
		                 * Layout: Post Load
		                 */
                        array(
                            'key' => 'acfe_form_post_tab_load',
                            'label' => 'Load',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'field_acfe_form_post_load_values',
                            'label' => 'Load Values',
                            'name' => 'acfe_form_post_load_values',
                            'type' => 'true_false',
                            'instructions' => 'Fill inputs with values',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'message' => '',
                            'default_value' => 1,
                            'ui' => 1,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_post_load_source',
                            'label' => 'Source',
                            'name' => 'acfe_form_post_load_source',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => 'current_post',
                            'allow_null' => 0,
                            'multiple' => 0,
                            'ui' => 1,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => '',
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                        ),
                    
                        array(
                            'key' => 'field_acfe_form_post_map_post_type',
                            'label' => 'Post type',
                            'name' => 'acfe_form_post_map_post_type',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_post_map_post_status',
                            'label' => 'Post status',
                            'name' => 'acfe_form_post_map_post_status',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_post_map_post_title',
                            'label' => 'Post title',
                            'name' => 'acfe_form_post_map_post_title',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_post_map_post_name',
                            'label' => 'Post slug',
                            'name' => 'acfe_form_post_map_post_name',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_post_map_post_content',
                            'label' => 'Post content',
                            'name' => 'acfe_form_post_map_post_content',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_post_map_post_author',
                            'label' => 'Post author',
                            'name' => 'acfe_form_post_map_post_author',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_post_map_post_parent',
                            'label' => 'Post parent',
                            'name' => 'acfe_form_post_map_post_parent',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_post_map_post_terms',
                            'label' => 'Post terms',
                            'name' => 'acfe_form_post_map_post_terms',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_post_load_meta',
                            'label' => 'Load ACF fields',
                            'name' => 'acfe_form_post_load_meta',
                            'type' => 'checkbox',
                            'instructions' => 'Choose which ACF fields should have their values loaded',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_post_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'allow_custom' => 0,
                            'default_value' => array(
                            ),
                            'layout' => 'vertical',
                            'toggle' => 1,
                            'return_format' => 'value',
                            'save_custom' => 0,
                        ),
                    
                        /*
						 * Layout: Post Advanced
						 */
                        array(
                            'key' => 'field_acfe_form_post_tab_advanced',
                            'label' => 'Code',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'field_acfe_form_post_advanced_load',
                            'label' => 'Change values source',
                            'name' => 'acfe_form_post_advanced_load',
                            'type' => 'acfe_dynamic_message',
                            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
                            'instructions' => 'Alter the post ID where meta values are loaded from',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_post_advanced_save_args',
                            'label' => 'Change post arguments',
                            'name' => 'acfe_form_post_advanced_save_args',
                            'type' => 'acfe_dynamic_message',
                            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
                            'instructions' => 'Alter the post arguments before database insert/update',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_post_advanced_save',
                            'label' => 'Add custom action on post save',
                            'name' => 'acfe_form_post_advanced_save',
                            'type' => 'acfe_dynamic_message',
                            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
                            'instructions' => 'This action allows you to hook in before or after the meta data have been saved',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
            
                /*
                 * Layout: Term
                 */
                'layout_term' => array(
                    'key' => 'layout_term',
                    'name' => 'term',
                    'label' => 'Term action',
                    'display' => 'row',
                    'sub_fields' => array(
                    
                        /*
		                 * Layout: Term Action
		                 */
                        array(
                            'key' => 'field_acfe_form_term_tab_action',
                            'label' => 'Action',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'acfe_form_term_action',
                            'label' => 'Action',
                            'name' => 'acfe_form_term_action',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                                'insert_term' => 'Create term',
                                'update_term' => 'Update term',
                            ),
                            'default_value' => 'insert_term',
                        ),
                        array(
                            'key' => 'field_acfe_form_term_custom_alias',
                            'label' => 'Action name',
                            'name' => 'acfe_form_custom_alias',
                            'type' => 'acfe_slug',
                            'instructions' => '(Optional) Target this action using hooks & allow custom <code>{query_var:my-action}</code> name.',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => 'Term',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                    
                        /*
		                 * Layout: Term Save
		                 */
                        array(
                            'key' => 'field_acfe_form_term_tab_save',
                            'label' => 'Save',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'field_acfe_form_term_save_target',
                            'label' => 'Target',
                            'name' => 'acfe_form_term_save_target',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'acfe_form_term_action',
                                        'operator' => '==',
                                        'value' => 'update_term',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => 'current_term',
                            'allow_null' => 0,
                            'multiple' => 0,
                            'ui' => 1,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => '',
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                        ),
                        array(
                            'key' => 'field_acfe_form_term_save_name',
                            'label' => 'Name',
                            'name' => 'acfe_form_term_save_name',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_map_name',
                                        'operator' => '==empty',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_term_map_name_message',
                            'label' => 'Name',
                            'name' => 'acfe_form_term_map_name_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_map_name',
                                        'operator' => '!=empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_term_save_slug',
                            'label' => 'Slug',
                            'name' => 'acfe_form_term_save_slug',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_map_slug',
                                        'operator' => '==empty',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_term_map_slug_message',
                            'label' => 'Slug',
                            'name' => 'acfe_form_term_map_slug_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_map_slug',
                                        'operator' => '!=empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_term_save_taxonomy',
                            'label' => 'Taxonomy',
                            'name' => 'acfe_form_term_save_taxonomy',
                            'type' => 'acfe_taxonomies',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_map_taxonomy',
                                        'operator' => '==empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'taxonomy' => '',
                            'field_type' => 'select',
                            'default_value' => '',
                            'return_format' => 'name',
                            'allow_null' => 1,
                            'placeholder' => 'Default',
                            'multiple' => 0,
                            'ui' => 1,
                            'choices' => array(
                            ),
                            'ajax' => 0,
                            'layout' => '',
                            'toggle' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                        ),
                        array(
                            'key' => 'field_acfe_form_term_map_taxonomy_message',
                            'label' => 'Taxonomy',
                            'name' => 'acfe_form_term_map_taxonomy_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_map_taxonomy',
                                        'operator' => '!=empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_term_save_parent',
                            'label' => 'Parent',
                            'name' => 'acfe_form_term_save_parent',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_map_parent',
                                        'operator' => '==empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                        ),
                        array(
                            'key' => 'field_acfe_form_term_map_parent_message',
                            'label' => 'Parent',
                            'name' => 'acfe_form_term_map_parent_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_map_parent',
                                        'operator' => '!=empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_term_save_description_group',
                            'label' => 'Description',
                            'name' => 'acfe_form_term_save_description_group',
                            'type' => 'group',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_map_description',
                                        'operator' => '==empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'layout' => 'block',
                            'acfe_seamless_style' => true,
                            'acfe_group_modal' => 0,
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_acfe_form_term_save_description',
                                    'label' => '',
                                    'name' => 'acfe_form_term_save_description',
                                    'type' => 'select',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'acfe_permissions' => '',
                                    'choices' => array(
                                        'custom' => 'WYSIWYG Editor',
                                    ),
                                    'default_value' => array(
                                    ),
                                    'allow_null' => 1,
                                    'multiple' => 0,
                                    'ui' => 1,
                                    'return_format' => 'value',
                                    'placeholder' => 'Default',
                                    'ajax' => 0,
                                    'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                                    'allow_custom' => 1,
                                ),
                                array(
                                    'key' => 'field_acfe_form_term_save_description_custom',
                                    'label' => '',
                                    'name' => 'acfe_form_term_save_description_custom',
                                    'type' => 'wysiwyg',
                                    'instructions' => '',
                                    'required' => 1,
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_acfe_form_term_save_description',
                                                'operator' => '==',
                                                'value' => 'custom',
                                            ),
                                        ),
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'acfe_permissions' => '',
                                    'default_value' => '',
                                    'tabs' => 'all',
                                    'toolbar' => 'full',
                                    'media_upload' => 1,
                                    'delay' => 0,
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_term_map_description_message',
                            'label' => 'Description',
                            'name' => 'acfe_form_term_map_description_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_map_description',
                                        'operator' => '!=empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_term_save_meta',
                            'label' => 'Save ACF fields',
                            'name' => 'acfe_form_term_save_meta',
                            'type' => 'checkbox',
                            'instructions' => 'Choose which ACF fields should be saved to this term',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'allow_custom' => 0,
                            'default_value' => array(
                            ),
                            'layout' => 'vertical',
                            'toggle' => 1,
                            'return_format' => 'value',
                            'save_custom' => 0,
                        ),
                    
                        /*
		                 * Layout: Term Load
		                 */
                        array(
                            'key' => 'field_acfe_form_term_tab_load',
                            'label' => 'Load',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'field_acfe_form_term_load_values',
                            'label' => 'Load Values',
                            'name' => 'acfe_form_term_load_values',
                            'type' => 'true_false',
                            'instructions' => 'Fill inputs with values',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'message' => '',
                            'default_value' => 1,
                            'ui' => 1,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_term_load_source',
                            'label' => 'Source',
                            'name' => 'acfe_form_term_load_source',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => 'current_term',
                            'allow_null' => 0,
                            'multiple' => 0,
                            'ui' => 1,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => '',
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                        ),
                        array(
                            'key' => 'field_acfe_form_term_map_name',
                            'label' => 'Name',
                            'name' => 'acfe_form_term_map_name',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_term_map_slug',
                            'label' => 'Slug',
                            'name' => 'acfe_form_term_map_slug',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_term_map_taxonomy',
                            'label' => 'Taxonomy',
                            'name' => 'acfe_form_term_map_taxonomy',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_term_map_parent',
                            'label' => 'Parent',
                            'name' => 'acfe_form_term_map_parent',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_term_map_description',
                            'label' => 'Description',
                            'name' => 'acfe_form_term_map_description',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_term_load_meta',
                            'label' => 'Load ACF fields',
                            'name' => 'acfe_form_term_load_meta',
                            'type' => 'checkbox',
                            'instructions' => 'Choose which ACF fields should have their values loaded',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_term_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'allow_custom' => 0,
                            'default_value' => array(
                            ),
                            'layout' => 'vertical',
                            'toggle' => 1,
                            'return_format' => 'value',
                            'save_custom' => 0,
                        ),
                    
                        /*
						 * Layout: Term Advanced
						 */
                        array(
                            'key' => 'field_acfe_form_term_tab_advanced',
                            'label' => 'Code',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'field_acfe_form_term_advanced_load',
                            'label' => 'Change values source',
                            'name' => 'acfe_form_term_advanced_load',
                            'type' => 'acfe_dynamic_message',
                            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
                            'instructions' => 'Alter the term ID where meta values are loaded from',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_term_advanced_save_args',
                            'label' => 'Change term arguments',
                            'name' => 'acfe_form_term_advanced_save_args',
                            'type' => 'acfe_dynamic_message',
                            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
                            'instructions' => 'Alter the term arguments before database insert/update',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_term_advanced_save',
                            'label' => 'Add custom action on term save',
                            'name' => 'acfe_form_term_advanced_save',
                            'type' => 'acfe_dynamic_message',
                            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
                            'instructions' => 'This action allows you to hook in before or after the meta data have been saved',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
            
                /*
                 * Layout: User
                 */
                'layout_user' => array(
                    'key' => 'layout_user',
                    'name' => 'user',
                    'label' => 'User action',
                    'display' => 'row',
                    'sub_fields' => array(
                    
                        /*
		                 * Layout: User Action
		                 */
                        array(
                            'key' => 'field_acfe_form_user_tab_action',
                            'label' => 'Action',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'field_acfe_form_user_action',
                            'label' => 'Action',
                            'name' => 'acfe_form_user_action',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                                'insert_user'   => 'Create user',
                                'update_user'   => 'Update user',
                                'log_user'      => 'Log user',
                            ),
                            'default_value' => 'insert_post',
                        ),
                        array(
                            'key' => 'field_acfe_form_user_custom_alias',
                            'label' => 'Action name',
                            'name' => 'acfe_form_custom_alias',
                            'type' => 'acfe_slug',
                            'instructions' => '(Optional) Target this action using hooks & allow custom <code>{query_var:my-action}</code> name.',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => 'User',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                    
                        /*
		                 * Layout: User Login
		                 */
                        array(
                            'key' => 'field_acfe_form_user_tab_login',
                            'label' => 'Login',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '==',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_log_type',
                            'label' => 'Login type',
                            'name' => 'acfe_form_user_log_type',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                                'email'             => 'E-mail',
                                'username'          => 'Username',
                                'email_username'    => 'E-mail or username',
                            ),
                            'allow_null' => 0,
                            'other_choice' => 0,
                            'default_value' => 'email',
                            'layout' => 'vertical',
                            'return_format' => 'value',
                            'save_other_choice' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '==',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_save_login_user',
                            'label' => 'Login',
                            'name' => 'acfe_form_user_save_login_user',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '==',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_save_login_pass',
                            'label' => 'Password',
                            'name' => 'acfe_form_user_save_login_pass',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '==',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_save_login_remember',
                            'label' => 'Remember me',
                            'name' => 'acfe_form_user_save_login_remember',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '==',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                    
                        /*
		                 * Layout: User Save
		                 */
                        array(
                            'key' => 'field_acfe_form_user_tab_save',
                            'label' => 'Save',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_save_target',
                            'label' => 'Target',
                            'name' => 'acfe_form_user_save_target',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '==',
                                        'value' => 'update_user',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => 'current_user',
                            'allow_null' => 0,
                            'multiple' => 0,
                            'ui' => 1,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => '',
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                        ),
                        array(
                            'key' => 'field_acfe_form_user_save_email',
                            'label' => 'Email',
                            'name' => 'acfe_form_user_save_email',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_email',
                                        'operator' => '==empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_email_message',
                            'label' => 'Email',
                            'name' => 'acfe_form_user_map_email_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_email',
                                        'operator' => '!=empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_user_save_username',
                            'label' => 'Username',
                            'name' => 'acfe_form_user_save_username',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_username',
                                        'operator' => '==empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_username_message',
                            'label' => 'Username',
                            'name' => 'acfe_form_user_map_username_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_username',
                                        'operator' => '!=empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_user_save_password',
                            'label' => 'Password',
                            'name' => 'acfe_form_user_save_password',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                                'generate_password' => 'Generate password',
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_password',
                                        'operator' => '==empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_password_message',
                            'label' => 'Password',
                            'name' => 'acfe_form_user_map_password_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_password',
                                        'operator' => '!=empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_user_save_first_name',
                            'label' => 'First name',
                            'name' => 'acfe_form_user_save_first_name',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_first_name',
                                        'operator' => '==empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_first_name_message',
                            'label' => 'First name',
                            'name' => 'acfe_form_user_map_first_name_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_first_name',
                                        'operator' => '!=empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_user_save_last_name',
                            'label' => 'Last name',
                            'name' => 'acfe_form_user_save_last_name',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(),
                            'default_value' => array(),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_last_name',
                                        'operator' => '==empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_last_name_message',
                            'label' => 'Last name',
                            'name' => 'acfe_form_user_map_last_name_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_last_name',
                                        'operator' => '!=empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_user_save_nickname',
                            'label' => 'Nickname',
                            'name' => 'acfe_form_user_save_nickname',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_nickname',
                                        'operator' => '==empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_nickname_message',
                            'label' => 'Nickname',
                            'name' => 'acfe_form_user_map_nickname_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_nickname',
                                        'operator' => '!=empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_user_save_display_name',
                            'label' => 'Display name',
                            'name' => 'acfe_form_user_save_display_name',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_display_name',
                                        'operator' => '==empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_display_name_message',
                            'label' => 'Display name',
                            'name' => 'acfe_form_user_map_display_name_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_display_name',
                                        'operator' => '!=empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_user_save_website',
                            'label' => 'Website',
                            'name' => 'acfe_form_user_save_website',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_website',
                                        'operator' => '==empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_website_message',
                            'label' => 'Website',
                            'name' => 'acfe_form_user_map_website_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_website',
                                        'operator' => '!=empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_user_save_description_group',
                            'label' => 'Description',
                            'name' => 'acfe_form_user_save_description_group',
                            'type' => 'group',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_description',
                                        'operator' => '==empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'layout' => 'block',
                            'acfe_seamless_style' => true,
                            'acfe_group_modal' => 0,
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_acfe_form_user_save_description',
                                    'label' => '',
                                    'name' => 'acfe_form_user_save_description',
                                    'type' => 'select',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'acfe_permissions' => '',
                                    'choices' => array(
                                        'custom' => 'WYSIWYG Editor',
                                    ),
                                    'default_value' => array(
                                    ),
                                    'allow_null' => 1,
                                    'multiple' => 0,
                                    'ui' => 1,
                                    'return_format' => 'value',
                                    'placeholder' => 'Default',
                                    'ajax' => 0,
                                    'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                                    'allow_custom' => 1,
                                ),
                                array(
                                    'key' => 'field_acfe_form_user_save_description_custom',
                                    'label' => '',
                                    'name' => 'acfe_form_user_save_description_custom',
                                    'type' => 'wysiwyg',
                                    'instructions' => '',
                                    'required' => 1,
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_acfe_form_user_save_description',
                                                'operator' => '==',
                                                'value' => 'custom',
                                            ),
                                        ),
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'acfe_permissions' => '',
                                    'default_value' => '',
                                    'tabs' => 'all',
                                    'toolbar' => 'full',
                                    'media_upload' => 1,
                                    'delay' => 0,
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_description_message',
                            'label' => 'Description',
                            'name' => 'acfe_form_user_map_description_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_description',
                                        'operator' => '!=empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_user_save_role',
                            'label' => 'Role',
                            'name' => 'acfe_form_user_save_role',
                            'type' => 'acfe_user_roles',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_role',
                                        'operator' => '==empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'user_role' => '',
                            'field_type' => 'select',
                            'default_value' => '',
                            'allow_null' => 1,
                            'placeholder' => 'Default',
                            'multiple' => 0,
                            'ui' => 1,
                            'choices' => array(
                            ),
                            'ajax' => 0,
                            'layout' => '',
                            'toggle' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_role_message',
                            'label' => 'Role',
                            'name' => 'acfe_form_user_map_role_message',
                            'type' => 'acfe_dynamic_message',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_map_role',
                                        'operator' => '!=empty',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_user_save_meta',
                            'label' => 'Save ACF fields',
                            'name' => 'acfe_form_user_save_meta',
                            'type' => 'checkbox',
                            'instructions' => 'Choose which ACF fields should be saved to this user',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'allow_custom' => 0,
                            'default_value' => array(
                            ),
                            'layout' => 'vertical',
                            'toggle' => 1,
                            'return_format' => 'value',
                            'save_custom' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                    
                        /*
		                 * Layout: User Load
		                 */
                        array(
                            'key' => 'acfe_form_user_tab_load',
                            'label' => 'Load',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_load_values',
                            'label' => 'Load Values',
                            'name' => 'acfe_form_user_load_values',
                            'type' => 'true_false',
                            'instructions' => 'Fill inputs with values',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'message' => '',
                            'default_value' => 1,
                            'ui' => 1,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_user_load_source',
                            'label' => 'Source',
                            'name' => 'acfe_form_user_load_source',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => 'current_user',
                            'allow_null' => 0,
                            'multiple' => 0,
                            'ui' => 1,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => '',
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                        ),
                    
                        array(
                            'key' => 'field_acfe_form_user_map_email',
                            'label' => 'Email',
                            'name' => 'acfe_form_user_map_email',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_username',
                            'label' => 'Username',
                            'name' => 'acfe_form_user_map_username',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_password',
                            'label' => 'Password',
                            'name' => 'acfe_form_user_map_password',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_first_name',
                            'label' => 'First name',
                            'name' => 'acfe_form_user_map_first_name',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_last_name',
                            'label' => 'Last name',
                            'name' => 'acfe_form_user_map_last_name',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_nickname',
                            'label' => 'Nickname',
                            'name' => 'acfe_form_user_map_nickname',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_display_name',
                            'label' => 'Display name',
                            'name' => 'acfe_form_user_map_display_name',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_website',
                            'label' => 'Website',
                            'name' => 'acfe_form_user_map_website',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_description',
                            'label' => 'Description',
                            'name' => 'acfe_form_user_map_description',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_map_role',
                            'label' => 'Role',
                            'name' => 'acfe_form_user_map_role',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'default_value' => array(
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 1,
                            'return_format' => 'value',
                            'placeholder' => 'Default',
                            'ajax' => 0,
                            'search_placeholder' => 'Enter a custom value or template tag. (See "Cheatsheet" tab)',
                            'allow_custom' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                    array(
                                        'field' => 'field_acfe_form_user_action',
                                        'operator' => '!=',
                                        'value' => 'log_user',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_acfe_form_user_load_meta',
                            'label' => 'Load ACF fields',
                            'name' => 'acfe_form_user_load_meta',
                            'type' => 'checkbox',
                            'instructions' => 'Choose which ACF fields should have their values loaded',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_acfe_form_user_load_values',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'choices' => array(
                            ),
                            'allow_custom' => 0,
                            'default_value' => array(
                            ),
                            'layout' => 'vertical',
                            'toggle' => 1,
                            'return_format' => 'value',
                            'save_custom' => 0,
                        ),
                    
                    
                        /*
						 * Layout: User Advanced
						 */
                        array(
                            'key' => 'field_acfe_form_user_tab_advanced',
                            'label' => 'Code',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'placement' => 'top',
                            'endpoint' => 0,
                        ),
                        array(
                            'key' => 'field_acfe_form_user_advanced_load',
                            'label' => 'Change values source',
                            'name' => 'acfe_form_user_advanced_load',
                            'type' => 'acfe_dynamic_message',
                            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
                            'instructions' => 'Alter the user ID where meta values are loaded from',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_user_advanced_save_args',
                            'label' => 'Change user arguments',
                            'name' => 'acfe_form_user_advanced_save_args',
                            'type' => 'acfe_dynamic_message',
                            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
                            'instructions' => 'Alter the user arguments before database insert/update',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                        array(
                            'key' => 'field_acfe_form_user_advanced_save',
                            'label' => 'Add custom action on user save',
                            'name' => 'acfe_form_user_advanced_save',
                            'type' => 'acfe_dynamic_message',
                            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
                            'instructions' => 'This action allows you to hook in before or after the meta data have been saved',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
        
            ),
            'button_label' => 'Add action',
            'min' => '',
            'max' => '',
        ),
    
        /*
         * Settings
         */
        array(
            'key' => 'field_acfe_form_tab_settings',
            'label' => 'Settings',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_acfe_form_field_groups_rules',
            'label' => 'Field groups locations rules',
            'name' => 'acfe_form_field_groups_rules',
            'type' => 'true_false',
            'instructions' => 'Apply field groups locations rules for front-end display',
            'required' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'message' => '',
            'default_value' => 0,
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
            /*
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_acfe_form_field_groups',
                        'operator' => '>',
                        'value' => '0',
                    ),
                ),
            ),
            */
        ),
        array(
            'key' => 'field_acfe_form_form_element',
            'label' => 'Form element',
            'name' => 'acfe_form_form_element',
            'type' => 'true_false',
            'instructions' => 'Whether or not to create a <code>&lt;form&gt;</code> element',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'message' => '',
            'default_value' => 1,
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_acfe_form_attributes',
            'label' => 'Form attributes',
            'name' => 'acfe_form_attributes',
            'type' => 'group',
            'instructions' => 'Form class and id',
            'required' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'layout' => 'block',
            'acfe_seamless_style' => true,
            'acfe_group_modal' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_acfe_form_form_element',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'sub_fields' => array(
                array(
                    'key' => 'field_acfe_form_attributes_class',
                    'label' => '',
                    'name' => 'acfe_form_attributes_class',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(),
                    'wrapper' => array(
                        'width' => '33',
                        'class' => '',
                        'id' => '',
                    ),
                    'acfe_permissions' => '',
                    'default_value' => 'acf-form',
                    'placeholder' => '',
                    'prepend' => 'class',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_acfe_form_attributes_id',
                    'label' => '',
                    'name' => 'acfe_form_attributes_id',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(),
                    'wrapper' => array(
                        'width' => '33',
                        'class' => '',
                        'id' => '',
                    ),
                    'acfe_permissions' => '',
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => 'id',
                    'append' => '',
                    'maxlength' => '',
                ),
            
                /*
                array(
                    'key' => 'field_acfe_form_attributes_action',
                    'label' => '',
                    'name' => 'acfe_form_attributes_action',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(),
                    'wrapper' => array(
                        'width' => '25',
                        'class' => '',
                        'id' => '',
                    ),
                    'acfe_permissions' => '',
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => 'action',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_acfe_form_attributes_method',
                    'label' => '',
                    'name' => 'acfe_form_attributes_method',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(),
                    'wrapper' => array(
                        'width' => '25',
                        'class' => '',
                        'id' => '',
                    ),
                    'acfe_permissions' => '',
                    'default_value' => 'post',
                    'placeholder' => '',
                    'prepend' => 'method',
                    'append' => '',
                    'maxlength' => '',
                ),
                */
        
            ),
        ),
        array(
            'key' => 'field_acfe_form_fields_attributes',
            'label' => 'Fields class',
            'name' => 'acfe_form_fields_attributes',
            'type' => 'group',
            'instructions' => 'Add class to all fields',
            'required' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'layout' => 'block',
            'acfe_seamless_style' => true,
            'acfe_group_modal' => 0,
            'conditional_logic' => array(),
            'sub_fields' => array(
                array(
                    'key' => 'field_acfe_form_fields_wrapper_class',
                    'label' => '',
                    'name' => 'acfe_form_fields_wrapper_class',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(),
                    'wrapper' => array(
                        'width' => '33',
                        'class' => '',
                        'id' => '',
                    ),
                    'acfe_permissions' => '',
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => 'wrapper class',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_acfe_form_fields_class',
                    'label' => '',
                    'name' => 'acfe_form_fields_class',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(),
                    'wrapper' => array(
                        'width' => '33',
                        'class' => '',
                        'id' => '',
                    ),
                    'acfe_permissions' => '',
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => 'input class',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
        ),
        array(
            'key' => 'field_acfe_form_form_submit',
            'label' => 'Submit button',
            'name' => 'acfe_form_form_submit',
            'type' => 'true_false',
            'instructions' => 'Whether or not to create a form submit button. Defaults to true',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'message' => '',
            'default_value' => 1,
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_acfe_form_submit_value',
            'label' => 'Submit value',
            'name' => 'acfe_form_submit_value',
            'type' => 'text',
            'instructions' => 'The text displayed on the submit button',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_acfe_form_form_submit',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'default_value' => 'Submit',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_acfe_form_html_submit_button',
            'label' => 'Submit button',
            'name' => 'acfe_form_html_submit_button',
            'type' => 'acfe_code_editor',
            'instructions' => 'HTML used to render the submit button.',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_acfe_form_form_submit',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'default_value' => '<input type="submit" class="acf-button button button-primary button-large" value="%s" />',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => 2,
        ),
        array(
            'key' => 'field_acfe_form_html_submit_spinner',
            'label' => 'Submit spinner',
            'name' => 'acfe_form_html_submit_spinner',
            'type' => 'acfe_code_editor',
            'instructions' => 'HTML used to render the submit button loading spinner.',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_acfe_form_form_submit',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'default_value' => '<span class="acf-spinner"></span>',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => 2,
        ),
        /*
        array(
            'key' => 'field_acfe_form_post_field_groups',
            'label' => 'Post field groups',
            'name' => 'acfe_form_post_field_groups',
            'type' => 'post_object',
            'instructions' => 'Override rendered field groups with a specific post field groups.<br /><br/>Note: Make sure to set the related field groups in the "General" tab in order to map fields in the actions tab',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'allow_null' => 1,
            'multiple' => 0,
            'return_format' => 'value',
            'placeholder' => '',
        ),
        */
        array(
            'key' => 'field_acfe_form_honeypot',
            'label' => 'Honeypot',
            'name' => 'acfe_form_honeypot',
            'type' => 'true_false',
            'instructions' => 'Whether to include a hidden input field to capture non human form submission. Defaults to true.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'message' => '',
            'default_value' => 1,
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_acfe_form_kses',
            'label' => 'Kses',
            'name' => 'acfe_form_kses',
            'type' => 'true_false',
            'instructions' => 'Whether or not to sanitize all $_POST data with the wp_kses_post() function. Defaults to true.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'message' => '',
            'default_value' => 1,
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_acfe_form_uploader',
            'label' => 'Uploader',
            'name' => 'acfe_form_uploader',
            'type' => 'radio',
            'instructions' => 'Whether to use the WP uploader or a basic input for image and file fields. Defaults to \'wp\'
    Choices of \'wp\' or \'basic\'.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'choices' => array(
                'default' => 'Default (Field based)',
                'wp' => 'Media modal',
                'basic' => 'Basic',
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'default_value' => 'default',
            'layout' => 'vertical',
            'return_format' => 'value',
            'save_other_choice' => 0,
        ),
        array(
            'key' => 'field_acfe_form_form_field_el',
            'label' => 'Field element',
            'name' => 'acfe_form_form_field_el',
            'type' => 'radio',
            'instructions' => 'Determines element used to wrap a field. Defaults to \'div\'',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'choices' => array(
                'div' => '&lt;div&gt;',
                'tr' => '&lt;tr&gt;',
                'td' => '&lt;td&gt;',
                'ul' => '&lt;ul&gt;',
                'ol' => '&lt;ol&gt;',
                'dl' => '&lt;dl&gt;',
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'default_value' => 'div',
            'layout' => 'vertical',
            'return_format' => 'value',
            'save_other_choice' => 0,
        ),
        array(
            'key' => 'field_acfe_form_label_placement',
            'label' => 'Label placement',
            'name' => 'acfe_form_label_placement',
            'type' => 'radio',
            'instructions' => 'Determines where field labels are places in relation to fields. Defaults to \'top\'. <br />
    Choices of \'top\' (Above fields) or \'left\' (Beside fields)',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'choices' => array(
                'top' => 'Top',
                'left' => 'Left',
                'hidden' => 'Hidden',
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'default_value' => 'top',
            'layout' => 'vertical',
            'return_format' => 'value',
            'save_other_choice' => 0,
        ),
        array(
            'key' => 'field_acfe_form_instruction_placement',
            'label' => 'Instruction placement',
            'name' => 'acfe_form_instruction_placement',
            'type' => 'radio',
            'instructions' => 'Determines where field instructions are places in relation to fields. Defaults to \'label\'. <br />
    Choices of \'label\' (Below labels) or \'field\' (Below fields)',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'choices' => array(
                'label' => 'Label',
                'field' => 'Field',
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'default_value' => 'label',
            'layout' => 'vertical',
            'return_format' => 'value',
            'save_other_choice' => 0,
        ),
        
        /*
         * HTML
         */
        array(
            'key' => 'field_acfe_form_tab_html',
            'label' => 'HTML',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_acfe_form_custom_html_enable',
            'label' => 'Override Form render',
            'name' => 'acfe_form_custom_html_enable',
            'type' => 'true_false',
            'instructions' => 'Override the native field groups HTML render',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'message' => '',
            'default_value' => false,
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_acfe_form_custom_html',
            'label' => 'HTML Form render',
            'name' => 'acfe_form_custom_html',
            'type' => 'acfe_code_editor',
            'instructions' => 'Render your own customized HTML.<br /><br />
    Field groups may be included using <code>{field_group:group_key}</code><br/><code>{field_group:Group title}</code><br/><br/>
    Fields may be included using <code>{field:field_key}</code><br/><code>{field:field_name}</code>',
            'required' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => 12,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_acfe_form_custom_html_enable',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_acfe_form_html_before_fields',
            'label' => 'HTML Before render',
            'name' => 'acfe_form_html_before_fields',
            'type' => 'acfe_code_editor',
            'instructions' => 'Extra HTML to add before the fields',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => 2,
        ),
        array(
            'key' => 'field_acfe_form_html_after_fields',
            'label' => 'HTML After render',
            'name' => 'acfe_form_html_after_fields',
            'type' => 'acfe_code_editor',
            'instructions' => 'Extra HTML to add after the fields',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => 2,
        ),
        
        /*
         * Validation
         */
        array(
            'key' => 'field_acfe_form_tab_validation',
            'label' => 'Validation',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
			'key' => 'field_acfe_form_hide_error',
			'label' => 'Hide general error',
			'name' => 'acfe_form_hide_error',
			'type' => 'true_false',
			'instructions' => 'Hide the general error message: "Validation failed. 1 field requires attention"',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
        array(
			'key' => 'field_acfe_form_hide_revalidation',
			'label' => 'Hide successful re-validation',
			'name' => 'acfe_form_hide_revalidation',
			'type' => 'true_false',
			'instructions' => 'Hide the successful notice when an error has been thrown',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
        array(
			'key' => 'field_acfe_form_hide_unload',
			'label' => 'Hide confirmation on exit',
			'name' => 'acfe_form_hide_unload',
			'type' => 'true_false',
			'instructions' => 'Do not prompt user on page refresh',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
        array(
            'key' => 'field_acfe_form_errors_position',
            'label' => 'Fields errors position',
            'name' => 'acfe_form_errors_position',
            'type' => 'radio',
            'instructions' => 'Choose where to display field errors',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'choices' => array(
                'above' => 'Above fields',
                'below' => 'Below fields',
                'group' => 'Group errors',
                'hide' => 'Hide errors',
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'default_value' => 'above',
            'layout' => 'vertical',
            'return_format' => 'value',
            'save_other_choice' => 0,
        ),
        array(
            'key' => 'field_acfe_form_errors_class',
            'label' => 'Fields errors class',
            'name' => 'acfe_form_errors_class',
            'type' => 'text',
            'instructions' => 'Add class to error message',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_acfe_form_errors_position',
                        'operator' => '!=',
                        'value' => 'group',
                    ),
                    array(
                        'field' => 'field_acfe_form_errors_position',
                        'operator' => '!=',
                        'value' => 'hide',
                    ),
                )
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_acfe_form_validation_advanced_field_validation',
            'label' => 'PHP Field Validation',
            'name' => 'acfe_form_validation_advanced_field_validation',
            'type' => 'acfe_dynamic_message',
            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
            'instructions' => 'Native ACF field validation example',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
        ),
        array(
            'key' => 'field_acfe_form_validation_advanced_form_validation',
            'label' => 'PHP Form Validation',
            'name' => 'acfe_form_validation_advanced_form_validation',
            'type' => 'acfe_dynamic_message',
            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
            'instructions' => 'Global form validation example',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
        ),
        
        /*
         * Actions
         */
        /*
        array(
            'key' => 'field_acfe_form_tab_actions',
            'label' => 'Actions',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'placement' => 'top',
            'endpoint' => 0,
        ),
        */
        
        /*
         * Submission
         */
        array(
            'key' => 'field_acfe_form_tab_submission',
            'label' => 'Submission',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_acfe_form_updated_hide_form',
            'label' => 'Hide form',
            'name' => 'acfe_form_updated_hide_form',
            'type' => 'true_false',
            'instructions' => 'Hide form on successful submission',
            'required' => 0,
            'conditional_logic' => array(),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'message' => '',
            'default_value' => 0,
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_acfe_form_return',
            'label' => 'Redirection',
            'name' => 'acfe_form_return',
            'type' => 'text',
            'instructions' => 'The URL to be redirected to after the form is submitted. Defaults to the current URL.<br /><br />You may use <code>{field:field_name}</code> <code>{field:field_key}</code> <code>{query_var:name}</code> <code>{query_var:name:key}</code>.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_acfe_form_updated_message',
            'label' => 'Success message',
            'name' => 'acfe_form_updated_message',
            'type' => 'wysiwyg',
            'instructions' => 'A message displayed above the form after being redirected. Can also be empty for no message.<br /><br />You may use <code>{field:field_name}</code> <code>{field:field_key}</code> <code>{query_var:name}</code> <code>{query_var:name:key}</code>.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'default_value' => __('Post updated', 'acf'),
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
            'delay' => 0,
        ),
        array(
            'key' => 'field_acfe_form_html_updated_message',
            'label' => 'Success wrapper HTML',
            'name' => 'acfe_form_html_updated_message',
            'type' => 'acfe_code_editor',
            'instructions' => 'HTML used to render the updated message.<br /><br />
If used, you have to include the following code <code>%s</code> to print the actual \'Success message\' above.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'default_value' => '<div id="message" class="updated">%s</div>',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => 2,
        ),
        array(
            'key' => 'field_acfe_form_submission_advanced_submission_php',
            'label' => 'PHP Form Submit: Custom Action',
            'name' => 'acfe_form_submission_advanced_submission_php',
            'type' => 'acfe_dynamic_message',
            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
            'instructions' => 'Trigger a custom action on form submission',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
        ),
        array(
            'key' => 'field_acfe_form_submission_advanced_submission_js',
            'label' => 'Javascript Form Submit: Custom Action',
            'name' => 'acfe_form_submission_advanced_submission_js',
            'type' => 'acfe_dynamic_message',
            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
            'instructions' => 'Trigger a custom JS action on form submission',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
        ),
        
        /*
         * Cheatsheet
         */
        array(
            'key' => 'field_acfe_form_tab_cheatsheet',
            'label' => 'Cheatsheet',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'acfe_permissions' => '',
            'placement' => 'top',
            'endpoint' => 0,
        ),
        
        array(
            'key' => 'field_acfe_form_cheatsheet_field',
            'label' => 'Field',
            'name' => 'acfe_form_cheatsheet_field',
            'type' => 'acfe_dynamic_message',
            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
            'instructions' => 'Retrieve user input from the current form',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_acfe_form_cheatsheet_fields',
            'label' => 'Fields',
            'name' => 'acfe_form_cheatsheet_fields',
            'type' => 'acfe_dynamic_message',
            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
            'instructions' => 'Retrieve all user inputs from the current form',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_acfe_form_cheatsheet_get_field',
            'label' => 'Get Field',
            'name' => 'acfe_form_cheatsheet_get_field',
            'type' => 'acfe_dynamic_message',
            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
            'instructions' => 'Retrieve ACF field value from database',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_acfe_form_cheatsheet_get_option',
            'label' => 'Get Option',
            'name' => 'acfe_form_cheatsheet_get_option',
            'type' => 'acfe_dynamic_message',
            'value' => '',
            'instructions' => 'Retrieve option value from database',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_acfe_form_cheatsheet_request',
            'label' => 'Request',
            'name' => 'acfe_form_cheatsheet_request',
            'type' => 'acfe_dynamic_message',
            'value' => '',
            'instructions' => 'Retrieve <code>$_REQUEST</code> value',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_acfe_form_cheatsheet_query_var',
            'label' => 'Query Var',
            'name' => 'acfe_form_cheatsheet_query_var',
            'type' => 'acfe_dynamic_message',
            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
            'instructions' => 'Retrieve query var values. Can be used to get data from previous action',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_acfe_form_cheatsheet_current_post',
            'label' => 'Current Post',
            'name' => 'acfe_form_cheatsheet_current_post',
            'type' => 'acfe_dynamic_message',
            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
            'instructions' => 'Retrieve current post data (where the form is being printed)',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_acfe_form_cheatsheet_current_term',
            'label' => 'Current Term',
            'name' => 'acfe_form_cheatsheet_current_term',
            'type' => 'acfe_dynamic_message',
            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
            'instructions' => 'Retrieve current term data (where the form is being printed)',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_acfe_form_cheatsheet_current_user',
            'label' => 'Current User',
            'name' => 'acfe_form_cheatsheet_current_user',
            'type' => 'acfe_dynamic_message',
            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
            'instructions' => 'Retrieve currently logged user data',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_acfe_form_cheatsheet_current_author',
            'label' => 'Current Author',
            'name' => 'acfe_form_cheatsheet_current_author',
            'type' => 'acfe_dynamic_message',
            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
            'instructions' => 'Retrieve current post author data (where the form is being printed)',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_acfe_form_cheatsheet_current_form',
            'label' => 'Current Form',
            'name' => 'acfe_form_cheatsheet_current_form',
            'type' => 'acfe_dynamic_message',
            'value' => isset($_REQUEST['post']) ? $_REQUEST['post'] : '',
            'instructions' => 'Retrieve current Dynamic Form data',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'acfe-form',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'style' => 'default',
    'label_placement' => 'left',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'acfe_permissions' => '',
    'acfe_form' => 0,
    'acfe_meta' => '',
    'acfe_note' => '',
));