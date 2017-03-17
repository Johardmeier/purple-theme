<?php namespace Stagesolutions\Bargeld\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStagesolutionsBargeldOther extends Migration
{
    public function up()
    {
        Schema::create('stagesolutions_bargeld_other', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('clearing_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->date('receipt_date');
            $table->text('remarks')->nullable();
            $table->decimal('takings_bistro', 10, 0)->default(0);
            $table->decimal('takings_theatre', 10, 0)->default(0);
            $table->decimal('takings_other', 10, 0)->default(0);
            $table->decimal('spendings_bistro', 10, 0)->default(0);
            $table->decimal('spendings_theatre', 10, 0)->default(0);
            $table->decimal('spendings_other', 10, 0)->default(0);
            $table->string('text_theatre')->nullable();
            $table->string('text_bistro')->nullable();
            $table->string('text_other')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stagesolutions_bargeld_other');
    }
}
