<?php namespace Stagesolutions\Bargeld\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStagesolutionsBargeldClearing extends Migration
{
    public function up()
    {
        Schema::create('stagesolutions_bargeld_clearing', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->date('clearing_date')->nullable();
            $table->text('remarks')->nullable();
            $table->decimal('deposit', 10, 0)->default(0);
            $table->decimal('reserve_new', 10, 0)->default(0);
            $table->decimal('sum_bistro', 10, 0)->default(0);
            $table->decimal('sum_theatre', 10, 0)->default(0);
            $table->decimal('sum_other', 10, 0)->default(0);
            $table->decimal('sum_receipts', 10, 0)->default(0);
            $table->decimal('corr_amount', 10, 0)->default(0);
            $table->text('corr_text')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stagesolutions_bargeld_clearing');
    }
}
