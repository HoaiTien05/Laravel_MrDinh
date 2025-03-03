<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateTablesController extends Controller
{
    public function createAllTables()
    {
        // Kiểm tra và tạo bảng addresses nếu chưa tồn tại
        if (!Schema::hasTable('addresses')) {
            Schema::create('addresses', function (Blueprint $table) {
                $table->id();
                $table->string('street')->nullable();
                $table->string('country');
                $table->integer('icon_id')->nullable();
                $table->integer('monster_id');
                $table->timestamps();
            });
        }

        // Kiểm tra và tạo bảng articles nếu chưa tồn tại
        if (!Schema::hasTable('articles')) {
            Schema::create('articles', function (Blueprint $table) {
                $table->id();
                $table->integer('category_id');
                $table->string('title');
                $table->string('slug')->default('');
                $table->text('content');
                $table->string('image')->nullable();
                $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('PUBLISHED');
                $table->date('date');
                $table->boolean('featured')->default(false);
                $table->timestamps();
                $table->softDeletes();
            });
        }

        // Kiểm tra và tạo bảng article_tag nếu chưa tồn tại
        if (!Schema::hasTable('article_tag')) {
            Schema::create('article_tag', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('article_id');
                $table->unsignedBigInteger('tag_id');
                $table->timestamps();
                $table->softDeletes();
            });
        }

        // Kiểm tra và tạo bảng a_s nếu chưa tồn tại
        if (!Schema::hasTable('a_s')) {
            Schema::create('a_s', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('b_s_id');
            });
        }

        // Kiểm tra và tạo bảng bills nếu chưa tồn tại
        if (!Schema::hasTable('bills')) {
            Schema::create('bills', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('id_customer')->nullable();
                $table->date('date_order')->nullable();
                $table->float('total')->nullable()->comment('tổng tiền');
                $table->string('payment', 200)->nullable()->comment('hình thức thanh toán');
                $table->string('note', 500)->nullable();
                $table->timestamps();
            });
        }

        // Kiểm tra và tạo bảng bill_detail nếu chưa tồn tại
        if (!Schema::hasTable('bill_detail')) {
            Schema::create('bill_detail', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('id_bill');
                $table->unsignedBigInteger('id_product');
                $table->integer('quantity');
                $table->double('unit_price');
                $table->timestamps();
            });
        }

        // Kiểm tra và tạo bảng b_s nếu chưa tồn tại
        if (!Schema::hasTable('b_s')) {
            Schema::create('b_s', function (Blueprint $table) {
                $table->id();
                $table->string('data');
            });
        }

        // Kiểm tra và tạo bảng categories nếu chưa tồn tại
        if (!Schema::hasTable('categories')) {
            Schema::create('categories', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('parent_id')->default(0);
                $table->unsignedBigInteger('lft')->nullable();
                $table->unsignedBigInteger('rgt')->nullable();
                $table->unsignedBigInteger('depth')->nullable();
                $table->string('name');
                $table->string('slug');
                $table->timestamps();
            });
        }

        // Kiểm tra và tạo bảng comments nếu chưa tồn tại
        if (!Schema::hasTable('comments')) {
            Schema::create('comments', function (Blueprint $table) {
                $table->id();
                $table->string('username');
                $table->text('comment');
                $table->unsignedBigInteger('id_product');
                $table->timestamps();
            });
        }

        // Kiểm tra và tạo bảng customer nếu chưa tồn tại
        if (!Schema::hasTable('customer')) {
            Schema::create('customer', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('gender');
                $table->string('email');
                $table->string('address');
                $table->string('phone_number');
                $table->string('note');
                $table->timestamps();
            });
        }

        // Kiểm tra và tạo bảng dummies nếu chưa tồn tại
        if (!Schema::hasTable('dummies')) {
            Schema::create('dummies', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('description');
                $table->longText('extras')->check('json_valid(extras)');
                $table->timestamps();
            });
        }

        // Kiểm tra và tạo bảng failed_jobs nếu chưa tồn tại
        if (!Schema::hasTable('failed_jobs')) {
            Schema::create('failed_jobs', function (Blueprint $table) {
                $table->id();
                $table->text('connection');
                $table->text('queue');
                $table->longText('payload');
                $table->longText('exception');
                $table->timestamps();
            });
        }

        // Kiểm tra và tạo bảng icons nếu chưa tồn tại
        if (!Schema::hasTable('icons')) {
            Schema::create('icons', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('icon');
                $table->timestamps();
            });
        }

        // Kiểm tra và tạo bảng menu_items nếu chưa tồn tại
        if (!Schema::hasTable('menu_items')) {
            Schema::create('menu_items', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('type')->nullable();
                $table->string('link')->nullable();
                $table->unsignedBigInteger('page_id')->nullable();
                $table->unsignedBigInteger('parent_id')->nullable();
                $table->unsignedBigInteger('lft')->nullable();
                $table->unsignedBigInteger('rgt')->nullable();
                $table->unsignedBigInteger('depth')->nullable();
                $table->timestamps();
            });
        }

        // Kiểm tra và tạo bảng migrations nếu chưa tồn tại
        if (!Schema::hasTable('migrations')) {
            Schema::create('migrations', function (Blueprint $table) {
                $table->id();
                $table->string('migration');
                $table->integer('batch');
            });
        }

        // Kiểm tra và tạo bảng model_has_permissions nếu chưa tồn tại
        if (!Schema::hasTable('model_has_permissions')) {
            Schema::create('model_has_permissions', function (Blueprint $table) {
                $table->unsignedBigInteger('permission_id');
                $table->string('model_type');
                $table->unsignedBigInteger('model_id');
            });
        }

        // Kiểm tra và tạo bảng model_has_roles nếu chưa tồn tại
        if (!Schema::hasTable('model_has_roles')) {
            Schema::create('model_has_roles', function (Blueprint $table) {
                $table->unsignedBigInteger('role_id');
                $table->string('model_type');
                $table->unsignedBigInteger('model_id');
            });
        }

        // Kiểm tra và tạo bảng monsters nếu chưa tồn tại
        if (!Schema::hasTable('monsters')) {
            // Tạo bảng monsters
        Schema::create('monsters', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
            $table->string('browse')->nullable();
            $table->boolean('checkbox')->nullable();
            $table->text('wysiwyg')->nullable();
            $table->string('color')->nullable();
            $table->string('color_picker')->nullable();
            $table->date('date')->nullable();
            $table->date('date_picker')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->dateTime('datetime_picker')->nullable();
            $table->string('email')->nullable();
            $table->integer('hidden')->nullable();
            $table->string('icon_picker')->nullable();
            $table->string('image')->nullable();
            $table->string('month')->nullable();
            $table->integer('number')->nullable();
            $table->double('float', 8, 2)->nullable();
            $table->string('password')->nullable();
            $table->string('radio')->nullable();
            $table->string('range')->nullable();
            $table->integer('select')->nullable();
            $table->string('select_from_array')->nullable();
            $table->integer('select2')->nullable();
            $table->string('select2_from_ajax')->nullable();
            $table->string('select2_from_array')->nullable();
            $table->text('simplemde')->nullable();
            $table->text('summernote')->nullable();
            $table->text('table')->nullable();
            $table->text('textarea')->nullable();
            $table->string('text');
            $table->text('tinymce')->nullable();
            $table->string('upload')->nullable();
            $table->string('upload_multiple')->nullable();
            $table->string('url')->nullable();
            $table->text('video')->nullable();
            $table->string('week')->nullable();
            $table->text('extras')->nullable();
            $table->timestamps(0);
            $table->binary('base64_image')->nullable(); // Đã thay từ mediumBinary thành binary
        });

        }

        // Kiểm tra và tạo bảng monster_article nếu chưa tồn tại
        if (!Schema::hasTable('monster_article')) {
            Schema::create('monster_article', function (Blueprint $table) {
                $table->id();
                $table->integer('monster_id');
                $table->integer('article_id');
                $table->timestamps(0);
                $table->softDeletes();
            });
        }

        // Kiểm tra và tạo bảng monster_tag nếu chưa tồn tại
        if (!Schema::hasTable('monster_tag')) {
            Schema::create('monster_tag', function (Blueprint $table) {
                $table->id();
                $table->integer('monster_id');
                $table->integer('tag_id');
                $table->timestamps(0);
                $table->softDeletes();
            });
        }

        // Kiểm tra và tạo bảng news nếu chưa tồn tại
        if (!Schema::hasTable('news')) {
            Schema::create('news', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('content');
                $table->string('image');
                $table->timestamps(0);
            });
        }

        // Kiểm tra và tạo bảng pages nếu chưa tồn tại
        if (!Schema::hasTable('pages')) {
            Schema::create('pages', function (Blueprint $table) {
                $table->id();
                $table->string('template');
                $table->string('name');
                $table->string('title');
                $table->string('slug');
                $table->text('content')->nullable();
                $table->text('extras')->nullable();
                $table->timestamps(0);
                $table->softDeletes();
            });
        }

        // Kiểm tra và tạo bảng password_resets nếu chưa tồn tại
        if (!Schema::hasTable('password_resets')) {
            Schema::create('password_resets', function (Blueprint $table) {
                $table->string('email');
                $table->string('token');
                $table->timestamps(0);
            });
        }

        // Kiểm tra và tạo bảng permissions nếu chưa tồn tại
        if (!Schema::hasTable('permissions')) {
            Schema::create('permissions', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('guard_name');
                $table->timestamps(0);
            });
        }

        // Kiểm tra và tạo bảng products nếu chưa tồn tại
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->integer('id_type')->nullable();
                $table->text('description')->nullable();
                $table->float('unit_price')->nullable();
                $table->float('promotion_price')->nullable();
                $table->string('image')->nullable();
                $table->string('unit')->nullable();
                $table->tinyInteger('new')->default(0);
                $table->timestamps(0);
            });
        }

        // Kiểm tra và tạo bảng revisions nếu chưa tồn tại
        if (!Schema::hasTable('revisions')) {
            Schema::create('revisions', function (Blueprint $table) {
                $table->id();
                $table->string('revisionable_type');
                $table->integer('revisionable_id');
                $table->integer('user_id')->nullable();
                $table->string('key');
                $table->text('old_value')->nullable();
                $table->text('new_value')->nullable();
                $table->timestamps(0);
            });
        }

        // Kiểm tra và tạo bảng roles nếu chưa tồn tại
        if (!Schema::hasTable('roles')) {
            Schema::create('roles', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('guard_name');
                $table->timestamps(0);
            });
        }

        // Kiểm tra và tạo bảng role_has_permissions nếu chưa tồn tại
        if (!Schema::hasTable('role_has_permissions')) {
            Schema::create('role_has_permissions', function (Blueprint $table) {
                $table->integer('permission_id');
                $table->integer('role_id');
            });
        }

        // Kiểm tra và tạo bảng settings nếu chưa tồn tại
        if (!Schema::hasTable('settings')) {
            Schema::create('settings', function (Blueprint $table) {
                $table->id();
                $table->string('key');
                $table->string('name');
                $table->string('description')->nullable();
                $table->string('value')->nullable();
                $table->text('field');
                $table->tinyInteger('active');
                $table->timestamps(0);
            });
        }

        // Kiểm tra và tạo bảng slide nếu chưa tồn tại
        if (!Schema::hasTable('slide')) {
            Schema::create('slide', function (Blueprint $table) {
                $table->id();
                $table->string('link');
                $table->string('image');
            });
        }

        // Kiểm tra và tạo bảng tags nếu chưa tồn tại
        if (!Schema::hasTable('tags')) {
            Schema::create('tags', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('slug');
                $table->timestamps(0);
                $table->softDeletes();
            });
        }

        // Kiểm tra và tạo bảng type_products nếu chưa tồn tại
        if (!Schema::hasTable('type_products')) {
            Schema::create('type_products', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('description');
                $table->string('image');
                $table->timestamps(0);
            });
        }

        // Kiểm tra và tạo bảng users nếu chưa tồn tại
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email');
                $table->string('password');
                $table->string('remember_token')->nullable();
                $table->timestamps(0);
            });
        }

        // Kiểm tra và tạo bảng wishlists nếu chưa tồn tại
        if (!Schema::hasTable('wishlists')) {
            Schema::create('wishlists', function (Blueprint $table) {
                $table->id();
                $table->integer('id_user');
                $table->integer('id_product');
                $table->integer('quantity')->default(1);
                $table->timestamps(0);
            });
        }

        return "Tất cả các bảng đã được tạo thành công!";
    }
}
