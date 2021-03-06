<?php
/**
 * Created by Aptana studio.
 * Author: Kevin Henry Gates III at Hihooray,Inc
 * Date: 2016/03/11
 * Time: 15:07 
 * Email: zhouwensheng@hihooray.com
 * migration
*/
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEduSystemEducoinLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_system_educoin_log', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('user_id', 18)->default(0)->index('esec_user_id');
			$table->string('order_id', 64)->nullable()->default('');
			$table->boolean('order_type')->nullable()->default(0);
			$table->integer('nums')->default(0);
			$table->string('remark', 200)->default('');
			$table->timestamp('createtime')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_system_educoin_log');
	}

}
