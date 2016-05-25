<?php

return [
    'auth' => [
        'title' => 'Administration Area'
    ],
    'field' => [
        'invalid_type' => 'Invalid field type used :type.',
        'options_method_not_exists' => "The model class :model must define a method :method() returning options for the ':field' form field."
    ],
    'widget' => [
        'not_registered' => "A widget class name ':name' has not been registered",
        'not_bound' => "A widget with class name ':name' has not been bound to the controller"
    ],
    'page' => [
        'untitled' => 'Untitled',
        'access_denied' => [
            'label' => 'Access denied',
            'help' => "You don't have the required permissions to view this page.",
            'cms_link' => 'Return to the back-end'
        ],
        'invalid_token' => [
            'label' => 'Invalid security token'
        ]
    ],
    'partial' => [
        'not_found_name' => "The partial ':name' is not found."
    ],
    'account' => [
        'sign_out' => 'Sign out',
        'login' => 'Login',
        'reset' => 'Reset',
        'restore' => 'Restore',
        'login_placeholder' => 'login',
        'password_placeholder' => 'password',
        'forgot_password' => 'Forgot your password?',
        'enter_email' => 'Enter your email',
        'enter_login' => 'Enter your login',
        'email_placeholder' => 'email',
        'enter_new_password' => 'Enter a new password',
        'password_reset' => 'Password Reset',
        'restore_success' => 'Message sent to your email address with instructions.',
        'restore_error' => "A user could not be found with a login value of ':login'",
        'reset_success' => 'Password has been reset. You may now sign in.',
        'reset_error' => 'Invalid password reset data supplied. Please try again!',
        'reset_fail' => 'Unable to reset your password!',
        'apply' => 'Apply',
        'cancel' => 'Cancel',
        'delete' => 'Delete',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => 'Dashboard',
        'widget_label' => 'Widget',
        'widget_width' => 'Width',
        'full_width' => 'full width',
        'add_widget' => 'Add widget',
        'widget_inspector_title' => 'Widget configuration',
        'widget_inspector_description' => 'Configure the report widget',
        'widget_columns_label' => 'Width :columns',
        'widget_columns_description' => 'The widget width, a number between 1 and 10.',
        'widget_columns_error' => 'Please enter the widget width as a number between 1 and 10.',
        'columns' => '{1} column|[2,Inf] columns',
        'widget_new_row_label' => 'Force new row',
        'widget_new_row_description' => 'Put the widget in a new row.',
        'widget_title_label' => 'Widget title',
        'widget_title_error' => 'The Widget Title is required.',
        'status' => [
            'widget_title_default' => 'System status',
            'online' => 'online',
            'maintenance' => 'in maintenance',
            'update_available' => '{0} updates available!|{1} update available!|[2,Inf] updates available!'
        ]
    ],
    'user' => [
        'name' => 'Administrator',
        'menu_label' => 'Administrators',
        'menu_description' => 'Manage back-end administrator users, groups and permissions.',
        'list_title' => 'Manage Administrators',
        'new' => 'New Administrator',
        'login' => 'Login',
        'first_name' => 'First Name',
        'last_name' => 'Last Name',
        'full_name' => 'Full Name',
        'email' => 'Email',
        'groups' => 'Groups',
        'groups_comment' => 'Specify which groups the account should belong to. Groups define user permissions, which can be overriden on the user level, on the Permissions tab.',
        'avatar' => 'Avatar',
        'password' => 'Password',
        'password_confirmation' => 'Confirm Password',
        'permissions' => 'Permissions',
        'account' => 'Account',
        'superuser' => 'Super User',
        'superuser_comment' => 'Grants this account unlimited access to all areas of the system. Super users can add and manage other users. ',
        'send_invite' => 'Send invitation by email',
        'send_invite_comment' => 'Sends a welcome message containing login and password information.',
        'delete_confirm' => 'Delete this administrator?',
        'return' => 'Return to admin list',
        'allow' => 'Allow',
        'inherit' => 'Inherit',
        'deny' => 'Deny',
        'group' => [
            'name' => 'Group',
            'name_comment' => 'The name is displayed in the group list on the Create/Edit Administrator form.',
            'name_field' => 'Name',
            'description_field' => 'Description',
            'is_new_user_default_field_label' => 'Default group',
            'is_new_user_default_field_comment' => 'Add new administrators to this group by default',
            'code_field' => 'Code',
            'code_comment' => 'Enter a unique code if you want to access the group object with the API.',
            'menu_label' => 'Manage Groups',
            'list_title' => 'Manage Groups',
            'new' => 'New Group',
            'delete_confirm' => 'Delete this administrator group?',
            'return' => 'Return to group list',
            'users_count' => 'Users'
        ],
        'preferences' => [
            'not_authenticated' => 'There is no an authenticated user to load or save preferences for.'
        ]
    ],
    'list' => [
        'default_title' => 'List',
        'search_prompt' => 'Search...',
        'no_records' => 'There are no records in this view.',
        'missing_model' => 'List behavior used in :class does not have a model defined.',
        'missing_column' => 'There are no column definitions for :columns.',
        'missing_columns' => 'List used in :class has no list columns defined.',
        'missing_definition' => "List behavior does not contain a column for ':field'.",
        'missing_parent_definition' => "List behavior does not contain a definition for ':definition'.",
        'behavior_not_ready' => 'List behavior has not been initialized, check that you have called makeLists() in your controller.',
        'invalid_column_datetime' => "Column value ':column' is not a DateTime object, are you missing a \$dates reference in the Model?",
        'pagination' => 'Displayed records: :from-:to of :total',
        'prev_page' => 'Previous page',
        'next_page' => 'Next page',
        'refresh' => 'Refresh',
        'updating' => 'Updating...',
        'loading' => 'Loading...',
        'setup_title' => 'List setup',
        'setup_help' => 'Use checkboxes to select columns you want to see in the list. You can change position of columns by dragging them up or down.',
        'records_per_page' => 'Records per page',
        'records_per_page_help' => 'Select the number of records per page to display. Please note that high number of records on a single page can reduce performance.',
        'check' => 'Check',
        'delete_selected' => 'Delete selected',
        'delete_selected_empty' => 'There are no selected records to delete.',
        'delete_selected_confirm' => 'Delete the selected records?',
        'delete_selected_success' => 'Deleted selected records.',
        'column_switch_true' => 'Yes',
        'column_switch_false' => 'No'
    ],
    'fileupload' => [
        'attachment' => 'Attachment',
        'help' => 'Add a title and description for this attachment.',
        'title_label' => 'Title',
        'description_label' => 'Description',
        'default_prompt' => 'Click the %s or drag a file here to upload',
        'attachment_url' => 'Attachment URL',
        'upload_file' => 'Upload file',
        'upload_error' => 'Upload error',
        'remove_confirm' => 'Are you sure?',
        'remove_file' => 'Remove file'
    ],
    'form' => [
        'create_title' => 'New :name',
        'update_title' => 'Edit :name',
        'preview_title' => 'Preview :name',
        'create_success' => ':name created',
        'update_success' => ':name updated',
        'delete_success' => ':name deleted',
        'reset_success' => 'Reset complete',
        'missing_id' => 'Form record ID has not been specified.',
        'missing_model' => 'Form behavior used in :class does not have a model defined.',
        'missing_definition' => "Form behavior does not contain a field for ':field'.",
        'not_found' => 'Form record with an ID of :id could not be found.',
        'action_confirm' => 'Are you sure?',
        'create' => 'Create',
        'create_and_close' => 'Create and close',
        'creating' => 'Creating...',
        'creating_name' => 'Creating :name...',
        'save' => 'Save',
        'save_and_close' => 'Save and close',
        'saving' => 'Saving...',
        'saving_name' => 'Saving :name...',
        'delete' => 'Delete',
        'deleting' => 'Deleting...',
        'confirm_delete' => 'Delete record?',
        'confirm_delete_multiple' => 'Delete selected records?',
        'deleting_name' => 'Deleting :name...',
        'reset_default' => 'Reset to default',
        'resetting' => 'Resetting',
        'resetting_name' => 'Resetting :name',
        'undefined_tab' => 'Misc',
        'field_off' => 'Off',
        'field_on' => 'On',
        'add' => 'Add',
        'apply' => 'Apply',
        'cancel' => 'Cancel',
        'close' => 'Close',
        'confirm' => 'Confirm',
        'reload' => 'Reload',
        'complete' => 'Complete',
        'ok' => 'OK',
        'or' => 'or',
        'confirm_tab_close' => 'Close the tab? Unsaved changes will be lost.',
        'behavior_not_ready' => 'Form behavior has not been initialized, check that you have called initForm() in your controller.',
        'preview_no_files_message' => 'There are no files uploaded.',
        'preview_no_record_message' => 'There is no record selected.',
        'select' => 'Select',
        'select_all' => 'all',
        'select_none' => 'none',
        'select_placeholder' => 'please select',
        'insert_row' => 'Insert Row',
        'insert_row_below' => 'Insert Row Below',
        'delete_row' => 'Delete Row',
        'concurrency_file_changed_title' => 'File was changed',
        'concurrency_file_changed_description' => "The file you're editing has been changed on disk by another user. You can either reload the file and lose your changes or override the file on the disk.",
        'return_to_list' => 'Return to the list'
    ],
    'recordfinder' => [
        'find_record' => 'Find Record'
    ],
    'relation' => [
        'missing_config' => "Relation behavior does not have any configuration for ':config'.",
        'missing_definition' => "Relation behavior does not contain a definition for ':field'.",
        'missing_model' => 'Relation behavior used in :class does not have a model defined.',
        'invalid_action_single' => 'This action cannot be performed on a singular relationship.',
        'invalid_action_multi' => 'This action cannot be performed on a multiple relationship.',
        'help' => 'Click on an item to add',
        'related_data' => 'Related :name data',
        'add' => 'Add',
        'add_selected' => 'Add selected',
        'add_a_new' => 'Add a new :name',
        'link_selected' => 'Link selected',
        'link_a_new' => 'Link a new :name',
        'cancel' => 'Cancel',
        'close' => 'Close',
        'add_name' => 'Add :name',
        'create' => 'Create',
        'create_name' => 'Create :name',
        'update' => 'Update',
        'update_name' => 'Update :name',
        'preview' => 'Preview',
        'preview_name' => 'Preview :name',
        'remove' => 'Remove',
        'remove_name' => 'Remove :name',
        'delete' => 'Delete',
        'delete_name' => 'Delete :name',
        'delete_confirm' => 'Are you sure?',
        'link' => 'Link',
        'link_name' => 'Link :name',
        'unlink' => 'Unlink',
        'unlink_name' => 'Unlink :name',
        'unlink_confirm' => 'Are you sure?'
    ],
    'reorder' => [
        'default_title' => 'Reorder records',
        'no_records' => 'There are no records available to sort.'
    ],
    'model' => [
        'name' => 'Model',
        'not_found' => "Model ':class' with an ID of :id could not be found",
        'missing_id' => 'There is no ID specified for looking up the model record.',
        'missing_relation' => "Model ':class' does not contain a definition for ':relation'.",
        'missing_method' => "Model ':class' does not contain a method ':method'.",
        'invalid_class' => "Model :model used in :class is not valid, it must inherit the \Model class.",
        'mass_assignment_failed' => "Mass assignment failed for Model attribute ':attribute'."
    ],
    'warnings' => [
        'tips' => 'System configuration tips',
        'tips_description' => 'There are issues you need to pay attention to in order to configure the system properly.',
        'permissions'  => 'Directory :name or its subdirectories is not writable for PHP. Please set corresponding permissions for the webserver on this directory.',
        'extension' => 'The PHP extension :name is not installed. Please install this library and activate the extension.'
    ],
    'editor' => [
        'menu_label' => 'Editor settings',
        'menu_description' => 'Customize the global editor preferences, such as font size and color scheme.',
        'font_size' => 'Font size',
        'tab_size' => 'Tab size',
        'use_hard_tabs' => 'Indent using tabs',
        'code_folding' => 'Code folding',
        'code_folding_begin' => 'Mark begin',
        'code_folding_begin_end' => 'Mark begin and end',
        'autocompletion' => 'Autocompletion',
        'word_wrap' => 'Word wrap',
        'highlight_active_line' => 'Highlight active line',
        'auto_closing' => 'Automatically close tags',
        'show_invisibles' => 'Show invisible characters',
        'show_gutter' => 'Show gutter',
        'basic_autocompletion'=> 'Basic Autocompletion (Ctrl + Space)',
        'live_autocompletion'=> 'Live Autocompletion',
        'enable_snippets'=> 'Enable code snippets (Tab)',
        'display_indent_guides'=> 'Show indent guides',
        'show_print_margin'=> 'Show print margin',
        'mode_off' => 'Off',
        'mode_fluid' => 'Fluid',
        '40_characters' => '40 Characters',
        '80_characters' => '80 Characters',
        'theme' => 'Color scheme',
        'markup_styles' => 'Markup Styles',
        'custom_styles' => 'Custom stylesheet',
        'custom styles_comment' => 'Custom styles to include in the HTML editor.',
        'markup_classes' => 'Markup Classes',
        'paragraph' => 'Paragraph',
        'link' => 'Link',
        'table' => 'Table',
        'table_cell' => 'Table Cell',
        'image' => 'Image',
        'label' => 'Label',
        'class_name' => 'Class name',
        'markup_tags' => 'Markup Tags',
        'allowed_empty_tags' => 'Allowed empty tags',
        'allowed_empty_tags_comment' => 'The list of tags that are not removed when they have no content inside.',
        'allowed_tags' => 'Allowed tags',
        'allowed_tags_comment' => 'The list of allowed tags.',
        'no_wrap' => 'Do not wrap tags',
        'no_wrap_comment' => 'The list of tags that should not be wrapped inside block tags.',
        'remove_tags' => 'Remove tags',
        'remove_tags_comment' => 'The list of tags that are removed together with their content.'
    ],
    'tooltips' => [
        'preview_website' => 'Preview the website'
    ],
    'mysettings' => [
        'menu_label' => 'My Settings',
        'menu_description' => 'Settings related to your administration account'
    ],
    'myaccount' => [
        'menu_label' => 'My account',
        'menu_description' => 'Update your account details such as name, email address and password.',
        'menu_keywords' => 'security login'
    ],
    'branding' => [
        'menu_label' => 'Customize back-end',
        'menu_description' => 'Customize the administration area such as name, colors and logo.',
        'brand' => 'Brand',
        'logo' => 'Logo',
        'logo_description' => 'Upload a custom logo to use in the back-end.',
        'app_name' => 'App Name',
        'app_name_description' => 'This name is shown in the title area of the back-end.',
        'app_tagline' => 'App Tagline',
        'app_tagline_description' => 'This name is shown on the sign in screen for the back-end.',
        'colors' => 'Colors',
        'primary_color' => 'Primary color',
        'secondary_color' => 'Secondary color',
        'accent_color' => 'Accent color',
        'styles' => 'Styles',
        'custom_stylesheet' => 'Custom stylesheet',
        'navigation' => 'Navigation',
        'menu_mode' => 'Menu style',
        'menu_mode_inline' => 'Inline',
        'menu_mode_tile' => 'Tiles',
        'menu_mode_collapsed' => 'Collapsed'
    ],
    'backend_preferences' => [
        'menu_label' => 'Back-end preferences',
        'menu_description' => 'Manage your account preferences such as desired language.',
        'region' => 'Region',
        'code_editor' => 'Code editor',
        'timezone' => 'Timezone',
        'timezone_comment' => 'Adjust displayed dates to this timezone.',
        'locale' => 'Locale',
        'locale_comment' => 'Select your desired locale for language use.'
    ],
    'access_log' => [
        'hint' => 'This log displays a list of successful sign in attempts by administrators. Records are kept for a total of :days days.',
        'menu_label' => 'Access log',
        'menu_description' => 'View a list of successful back-end user sign ins.',
        'created_at' => 'Date & Time',
        'login' => 'Login',
        'ip_address' => 'IP address',
        'first_name' => 'First name',
        'last_name' => 'Last name',
        'email' => 'Email'
    ],
    'filter' => [
        'all' => 'all',
        'options_method_not_exists' => "The model class :model must define a method :method() returning options for the ':filter' filter.",
        'date_all' => 'all period'
    ],
    'import_export' => [
        'upload_csv_file' => '1. Upload a CSV file',
        'import_file' => 'Import file',
        'first_row_contains_titles' => 'First row contains column titles',
        'first_row_contains_titles_desc' => 'Leave this checked if the first row in the CSV is used as the column titles.',
        'match_columns' => '2. Match the file columns to database fields',
        'file_columns' => 'File columns',
        'database_fields' => 'Database fields',
        'set_import_options' => '3. Set import options',
        'export_output_format' => '1. Export output format',
        'file_format' => 'File format',
        'standard_format' => 'Standard format',
        'custom_format' => 'Custom format',
        'delimiter_char' => 'Delimiter character',
        'enclosure_char' => 'Enclosure character',
        'escape_char' => 'Escape character',
        'select_columns' => '2. Select columns to export',
        'column' => 'Column',
        'columns' => 'Columns',
        'set_export_options' => '3. Set export options',
        'show_ignored_columns' => 'Show ignored columns',
        'auto_match_columns' => 'Auto match columns',
        'created' => 'Created',
        'updated' => 'Updated',
        'skipped' => 'Skipped',
        'warnings' => 'Warnings',
        'errors' => 'Errors',
        'skipped_rows' => 'Skipped Rows',
        'import_progress' => 'Import progress',
        'processing' => 'Processing',
        'import_error' => 'Import error',
        'upload_valid_csv' => 'Please upload a valid CSV file.',
        'drop_column_here' => 'Drop column here...',
        'ignore_this_column' => 'Ignore this column',
        'processing_successful_line1' => 'File export process completed!',
        'processing_successful_line2' => 'The browser will now redirect to the file download.',
        'export_progress' => 'Export progress',
        'export_error' => 'Export error',
        'column_preview' => 'Column preview',
        'file_not_found_error' => 'File not found',
        'empty_error' => 'There was no data supplied to export',
        'empty_import_columns_error' => 'Please specify some columns to import.',
        'match_some_column_error' => 'Please match some columns first.',
        'required_match_column_error' => 'Please specify a match for the required field :label.',
        'empty_export_columns_error' => 'Please specify some columns to export.',
        'behavior_missing_uselist_error' => 'You must implement the controller behavior ListController with the export "useList" option enabled.',
        'missing_model_class_error' => 'Please specify the modelClass property for :type',
        'missing_column_id_error' => 'Missing column identifier',
        'unknown_column_error' => 'Unknown column',
        'encoding_not_supported_error' => 'Source file encoding is not recognized. Please select the custom file format option with the proper encoding to import your file.',
        'encoding_format' => 'File encoding',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
            'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
            'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
            'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
            'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
            'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
            'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
            'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
            'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turkish)',
            'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
            'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
            'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)'
        ]
    ]
];
