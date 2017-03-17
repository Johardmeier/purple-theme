<?php namespace Stagesolutions\Bargeld\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStagesolutionsBargeldBistro extends Migration
{
    public function up()
    {
        Schema::table('stagesolutions_bargeld_bistro', function($table)
        {
            $table->decimal('accounted_takings', 10, 0)->default(0);
            $table->decimal('unaccounted_takings', 10, 0)->default(0);
            $table->increments('id')->unsigned(false)->change();
            $table->renameColumn('date', 'receipt_date');
            $table->dropColumn('daily_receipts');
            $table->dropColumn('unaccounted_receipts');
        });
    }
    
    public function down()
    {
        Schema::table('stagesolutions_bargeld_bistro', function($table)
        {
            $table->dropColumn('accounted_takings');
            $table->dropColumn('unaccounted_takings');
            $table->increments('id')->unsigned()->change();
            $table->renameColumn('receipt_date', 'date');
            $table->decimal('daily_receipts', 10, 0)->default(0);
            $table->decimal('unaccounted_receipts', 10, 0)->default(0);
        });
    }
}
