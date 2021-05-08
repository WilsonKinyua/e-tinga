<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'name'                      => 'Name',
            'name_helper'               => ' ',
            'email'                     => 'Email',
            'email_helper'              => ' ',
            'email_verified_at'         => 'Email verified at',
            'email_verified_at_helper'  => ' ',
            'password'                  => 'Password',
            'password_helper'           => ' ',
            'roles'                     => 'Roles',
            'roles_helper'              => ' ',
            'remember_token'            => 'Remember Token',
            'remember_token_helper'     => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'verified'                  => 'Verified',
            'verified_helper'           => ' ',
            'verified_at'               => 'Verified at',
            'verified_at_helper'        => ' ',
            'verification_token'        => 'Verification token',
            'verification_token_helper' => ' ',
        ],
    ],
    'machinery' => [
        'title'          => 'Machinery',
        'title_singular' => 'Machinery',
    ],
    'machineryCategory' => [
        'title'          => 'Machinery List',
        'title_singular' => 'Machinery List',
        'fields'         => [
            'id'                                          => 'ID',
            'id_helper'                                   => ' ',
            'name'                                        => 'Name',
            'name_helper'                                 => ' ',
            'main_photo'                                  => 'Main Photo',
            'main_photo_helper'                           => ' ',
            'other_photos'                                => 'Other Photos',
            'other_photos_helper'                         => ' ',
            'description'                                 => 'Description',
            'description_helper'                          => ' ',
            'cost_per_hour'                               => 'Cost Per Hour',
            'cost_per_hour_helper'                        => ' ',
            'cost_per_day'                                => 'Cost Per Day',
            'cost_per_day_helper'                         => ' ',
            'cost_per_week'                               => 'Cost Per Week',
            'cost_per_week_helper'                        => ' ',
            'cost_per_month'                              => 'Cost Per Month',
            'cost_per_month_helper'                       => ' ',
            'brand'                                       => 'Brand',
            'brand_helper'                                => ' ',
            'manufacturer'                                => 'Manufacturer',
            'manufacturer_helper'                         => ' ',
            'model'                                       => 'Model',
            'model_helper'                                => ' ',
            'manufacture_year'                            => 'Manufacture Year',
            'manufacture_year_helper'                     => ' ',
            'digging_depth'                               => 'Digging Depth',
            'digging_depth_helper'                        => ' ',
            'maximum_digging_force'                       => 'Maximum Digging Force',
            'maximum_digging_force_helper'                => ' ',
            'weight'                                      => 'Weight',
            'weight_helper'                               => ' ',
            'rated_power'                                 => 'Rated Power',
            'rated_power_helper'                          => ' ',
            'standard_bucket_capacity'                    => 'Standard Bucket Capacity',
            'standard_bucket_capacity_helper'             => ' ',
            'standard_bucket_width'                       => 'Standard Bucket Width',
            'standard_bucket_width_helper'                => ' ',
            'operation_hydraulic_pressure'                => 'Operation Hydraulic Pressure',
            'operation_hydraulic_pressure_helper'         => ' ',
            'gradeadility'                                => 'Gradeadility',
            'gradeadility_helper'                         => ' ',
            'pressure_to_the_ground'                      => 'Pressure To The Ground',
            'pressure_to_the_ground_helper'               => ' ',
            'brochure'                                    => 'Brochure',
            'brochure_helper'                             => ' ',
            'created_at'                                  => 'Created at',
            'created_at_helper'                           => ' ',
            'updated_at'                                  => 'Updated at',
            'updated_at_helper'                           => ' ',
            'deleted_at'                                  => 'Deleted at',
            'deleted_at_helper'                           => ' ',
            'category'                                    => 'Category',
            'category_helper'                             => ' ',
            'status'                                      => 'Status',
            'status_helper'                               => ' ',
            'two_way_delivery'                            => 'Two Way Delivery',
            'two_way_delivery_helper'                     => ' ',
            'total_rental_price_incl_taxes_before'        => 'Total Rental Price Incl Taxes Before',
            'total_rental_price_incl_taxes_before_helper' => ' ',
            'total_rental_price_incl_taxes_after'         => 'Total Rental Price Incl Taxes After',
            'total_rental_price_incl_taxes_after_helper'  => ' ',
        ],
    ],
    'siteSetting' => [
        'title'          => 'Site Settings',
        'title_singular' => 'Site Setting',
    ],
    'site' => [
        'title'          => 'Site',
        'title_singular' => 'Site',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'title'                  => 'Title',
            'title_helper'           => ' ',
            'caption'                => 'Caption',
            'caption_helper'         => ' ',
            'logo'                   => 'Logo',
            'logo_helper'            => ' ',
            'open_hours'             => 'Open Hours',
            'open_hours_helper'      => ' ',
            'support_phone_1'        => 'Support Phone 1',
            'support_phone_1_helper' => ' ',
            'support_phone_2'        => 'Support Phone 2',
            'support_phone_2_helper' => ' ',
            'location'               => 'Location',
            'location_helper'        => ' ',
            'facebook'               => 'Facebook',
            'facebook_helper'        => ' ',
            'twitter'                => 'Twitter',
            'twitter_helper'         => ' ',
            'google_plus'            => 'Google Plus',
            'google_plus_helper'     => ' ',
            'linkedin'               => 'Linkedin',
            'linkedin_helper'        => ' ',
            'youtube'                => 'Youtube',
            'youtube_helper'         => ' ',
            'email'                  => 'Email',
            'email_helper'           => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'contactMessage' => [
        'title'          => 'Contact Messages',
        'title_singular' => 'Contact Message',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'subject'           => 'Subject',
            'subject_helper'    => ' ',
            'message'           => 'Message',
            'message_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'blog' => [
        'title'          => 'Blogs',
        'title_singular' => 'Blog',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'title'                => 'Title',
            'title_helper'         => ' ',
            'description'          => 'Description',
            'description_helper'   => ' ',
            'photo'                => 'Photo',
            'photo_helper'         => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
            'created_by'           => 'Created By',
            'created_by_helper'    => ' ',
            'blog_category'        => 'Blog Category',
            'blog_category_helper' => ' ',
            'tags'                 => 'Tags',
            'tags_helper'          => ' ',
        ],
    ],
    'blogManagement' => [
        'title'          => 'Blog Management',
        'title_singular' => 'Blog Management',
    ],
    'blogCategory' => [
        'title'          => 'Blog Category',
        'title_singular' => 'Blog Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'aboutu' => [
        'title'          => 'About us',
        'title_singular' => 'About us',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'photo'              => 'Photo',
            'photo_helper'       => ' ',
        ],
    ],
    'slider' => [
        'title'          => 'Sliders',
        'title_singular' => 'Slider',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'caption'           => 'Caption',
            'caption_helper'    => ' ',
            'photo'             => 'Photo',
            'photo_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'customerReview' => [
        'title'          => 'Customer Reviews',
        'title_singular' => 'Customer Review',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'customer_name'        => 'Customer Name',
            'customer_name_helper' => ' ',
            'professional'         => 'Professional',
            'professional_helper'  => ' ',
            'title'                => 'Title',
            'title_helper'         => ' ',
            'description'          => 'Description',
            'description_helper'   => ' ',
            'stars'                => 'Stars',
            'stars_helper'         => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'subscriber' => [
        'title'          => 'Subscribers',
        'title_singular' => 'Subscriber',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'booking' => [
        'title'          => 'Bookings',
        'title_singular' => 'Booking',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'customer'                => 'Customer',
            'customer_helper'         => ' ',
            'address'                 => 'Address',
            'address_helper'          => ' ',
            'phone'                   => 'Phone',
            'phone_helper'            => ' ',
            'equipment'               => 'Equipment',
            'equipment_helper'        => ' ',
            'order_start_date'        => 'Order Start Date',
            'order_start_date_helper' => ' ',
            'order_end_date'          => 'Order End Date',
            'order_end_date_helper'   => ' ',
            'total_cost'              => 'Total Cost',
            'total_cost_helper'       => ' ',
            'status'                  => 'Status',
            'status_helper'           => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
        ],
    ],
    'category' => [
        'title'          => 'Category',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'photo'              => 'Photo',
            'photo_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
        ],
    ],
    'farmer' => [
        'title'          => 'Farmers/Customers',
        'title_singular' => 'Farmers/Customer',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'phone'             => 'Phone',
            'phone_helper'      => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'address'           => 'Address',
            'address_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'id_number'         => 'Id Number',
            'id_number_helper'  => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'comment' => [
        'title'          => 'Comments',
        'title_singular' => 'Comment',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'comment'           => 'Comment',
            'comment_helper'    => ' ',
            'website'           => 'Website',
            'website_helper'    => ' ',
            'blog'              => 'Blog',
            'blog_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'tag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];
