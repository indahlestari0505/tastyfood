
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('news', function (Blueprint $table) {
            // The create_news_table migration already defines these fields.
            // Keep this migration safe for databases created from either schema.
            if (! Schema::hasColumn('news', 'title')) $table->string('title')->nullable();
            if (! Schema::hasColumn('news', 'slug')) $table->string('slug')->nullable()->unique();
            if (! Schema::hasColumn('news', 'content')) $table->text('content')->nullable();
            if (! Schema::hasColumn('news', 'image')) $table->string('image')->nullable();
            if (! Schema::hasColumn('news', 'user_id')) {
                $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            }
        });
    }

    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropUnique(['slug']);
            $table->dropColumn([
                'title',
                'slug',
                'content',
                'image',
                'user_id',
            ]);
        });
    }
};
