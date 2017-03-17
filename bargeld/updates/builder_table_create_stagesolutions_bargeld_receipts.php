<?php namespace Stagesolutions\Bargeld\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStagesolutionsBargeldReceipts extends Migration
{
    public function up()
    {
        Schema::create('stagesolutions_bargeld_receipts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('clearing_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->date('receipt_date');
            $table->decimal('amount_theatre', 10, 0)->default(0);
            $table->decimal('amount_bistro', 10, 0)->default(0);
            $table->decimal('amount_other', 10, 0)->default(0);
            $table->decimal('amount_not_payable', 10, 0)->default(0);
            $table->text('remarks')->nullable();
            $table->text('text_other')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stagesolutions_bargeld_receipts');
    }
}
