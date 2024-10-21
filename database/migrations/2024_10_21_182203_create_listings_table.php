<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the listing
            $table->text('description'); // Description of the property
            $table->decimal('price', 10, 2); // Price of the property
            $table->integer('bedrooms'); // Number of bedrooms
            $table->integer('bathrooms'); // Number of bathrooms
            $table->integer('area'); // Area in square feet
            $table->string('location'); // Location of the property
            $table->string('property_type'); // Type of property (e.g., House, Apartment)
            $table->string('image')->nullable(); // Optional field for image path
            $table->timestamps(); // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
