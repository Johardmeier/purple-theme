<?php namespace Stagesolutions\Bargeld\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStagesolutionsBargeldBistro extends Migration
{
    public function up()
    {
        Schema::create('stagesolutions_bargeld_bistro', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('clearing_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->date('date');
            $table->decimal('daily_receipts', 10, 0)->default(0);
            $table->decimal('unaccounted_receipts', 10, 0)->default(0);
            $table->text('remarks')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stagesolutions_bargeld_bistro');
    }
}
