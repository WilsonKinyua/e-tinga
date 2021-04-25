<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'machinery_access',
            ],
            [
                'id'    => 18,
                'title' => 'machinery_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'machinery_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'machinery_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'machinery_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'machinery_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'site_setting_access',
            ],
            [
                'id'    => 24,
                'title' => 'site_create',
            ],
            [
                'id'    => 25,
                'title' => 'site_edit',
            ],
            [
                'id'    => 26,
                'title' => 'site_show',
            ],
            [
                'id'    => 27,
                'title' => 'site_delete',
            ],
            [
                'id'    => 28,
                'title' => 'site_access',
            ],
            [
                'id'    => 29,
                'title' => 'contact_message_show',
            ],
            [
                'id'    => 30,
                'title' => 'contact_message_access',
            ],
            [
                'id'    => 31,
                'title' => 'blog_create',
            ],
            [
                'id'    => 32,
                'title' => 'blog_edit',
            ],
            [
                'id'    => 33,
                'title' => 'blog_show',
            ],
            [
                'id'    => 34,
                'title' => 'blog_delete',
            ],
            [
                'id'    => 35,
                'title' => 'blog_access',
            ],
            [
                'id'    => 36,
                'title' => 'blog_management_access',
            ],
            [
                'id'    => 37,
                'title' => 'blog_category_create',
            ],
            [
                'id'    => 38,
                'title' => 'blog_category_edit',
            ],
            [
                'id'    => 39,
                'title' => 'blog_category_show',
            ],
            [
                'id'    => 40,
                'title' => 'blog_category_delete',
            ],
            [
                'id'    => 41,
                'title' => 'blog_category_access',
            ],
            [
                'id'    => 42,
                'title' => 'aboutu_create',
            ],
            [
                'id'    => 43,
                'title' => 'aboutu_edit',
            ],
            [
                'id'    => 44,
                'title' => 'aboutu_show',
            ],
            [
                'id'    => 45,
                'title' => 'aboutu_delete',
            ],
            [
                'id'    => 46,
                'title' => 'aboutu_access',
            ],
            [
                'id'    => 47,
                'title' => 'slider_create',
            ],
            [
                'id'    => 48,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 49,
                'title' => 'slider_show',
            ],
            [
                'id'    => 50,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 51,
                'title' => 'slider_access',
            ],
            [
                'id'    => 52,
                'title' => 'customer_review_show',
            ],
            [
                'id'    => 53,
                'title' => 'customer_review_access',
            ],
            [
                'id'    => 54,
                'title' => 'subscriber_show',
            ],
            [
                'id'    => 55,
                'title' => 'subscriber_access',
            ],
            [
                'id'    => 56,
                'title' => 'booking_show',
            ],
            [
                'id'    => 57,
                'title' => 'booking_access',
            ],
            [
                'id'    => 58,
                'title' => 'category_create',
            ],
            [
                'id'    => 59,
                'title' => 'category_edit',
            ],
            [
                'id'    => 60,
                'title' => 'category_show',
            ],
            [
                'id'    => 61,
                'title' => 'category_delete',
            ],
            [
                'id'    => 62,
                'title' => 'category_access',
            ],
            [
                'id'    => 63,
                'title' => 'farmer_create',
            ],
            [
                'id'    => 64,
                'title' => 'farmer_edit',
            ],
            [
                'id'    => 65,
                'title' => 'farmer_show',
            ],
            [
                'id'    => 66,
                'title' => 'farmer_delete',
            ],
            [
                'id'    => 67,
                'title' => 'farmer_access',
            ],
            [
                'id'    => 68,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 69,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 70,
                'title' => 'comment_create',
            ],
            [
                'id'    => 71,
                'title' => 'comment_edit',
            ],
            [
                'id'    => 72,
                'title' => 'comment_show',
            ],
            [
                'id'    => 73,
                'title' => 'comment_delete',
            ],
            [
                'id'    => 74,
                'title' => 'comment_access',
            ],
            [
                'id'    => 75,
                'title' => 'tag_create',
            ],
            [
                'id'    => 76,
                'title' => 'tag_edit',
            ],
            [
                'id'    => 77,
                'title' => 'tag_show',
            ],
            [
                'id'    => 78,
                'title' => 'tag_delete',
            ],
            [
                'id'    => 79,
                'title' => 'tag_access',
            ],
            [
                'id'    => 80,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
