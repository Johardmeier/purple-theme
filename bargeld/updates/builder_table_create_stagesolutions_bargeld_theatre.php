<?php namespace Stagesolutions\Bargeld\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStagesolutionsBargeldTheatre extends Migration
{
    public function up()
    {
        Schema::create('stagesolutions_bargeld_theatre', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('clearing_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->date('show_date');
            $table->string('show_name');
            $table->smallInteger('show_nr_of_day')->default(1);
            $table->decimal('takings', 10, 0)->default(0);
            $table->text('remarks')->nullable();
            $table->smallInteger('tickets_normal_adult')->default(0);
            $table->smallInteger('tickets_normal_child')->default(0);
            $table->smallInteger('tickets_reduced_adult')->default(0);
            $table->smallInteger('tickets_reduced_child')->default(0);
            $table->smallInteger('entries_school_adult')->default(0);
            $table->smallInteger('entries_school_child')->default(0);
            $table->smallInteger('entries_groups')->default(0);
            $table->smallInteger('entries_discount_card')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stagesolutions_bargeld_theatre');
    }
}
