<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
// Post::create([
//     'title' => 'Judul Ketiga',
//     'category_id' => 3,
//     'slug'  => 'judul-ketiga',
//     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et asperiores earum aliquam totam, error distinctio voluptate hic eaque voluptatum ex?',
//     'content' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus beatae praesentium quia nisi voluptatem nobis </p><p>excepturi neque adipisci sit ipsum, repellendus obcaecati, maiores earum minus animi perspiciatis aliquid! Ea architecto modi fuga illo nesciunt atque cupiditate repudiandae commodi optio tenetur dolore sequi illum odio ab enim, quos rerum dignissimos delectus doloremque, ad eos animi adipisci maiores dicta? Id, voluptate perferendis mollitia magni at itaque eveniet earum nulla autem adipisci in explicabo facilis qui praesentium ab quaerat maxime, reprehenderit commodi nisi eligendi officiis veritatis facere dicta alias? Ullam adipisci, distinctio eaque quis nulla esse at quam minus quidem eius atque sint.</p>'
// ]);
